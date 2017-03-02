<?php
/**
 * Wallee SDK
 *
 * This library allows to interact with the Wallee payment service.
 * Wallee SDK: 1.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Service;

use \Wallee\Sdk\ApiClient;
use \Wallee\Sdk\ApiException;
use \Wallee\Sdk\ApiResponse;
use \Wallee\Sdk\Http\HttpRequest;

/**
 * SubscriptionService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link	 https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionService {

	/**
	 * The API client instance.
	 *
	 * @var ApiClient
	 */
	private $apiClient;

	/**
	 * Constructor.
	 *
	 * @param ApiClient $apiClient the api client
	 */
	public function __construct(ApiClient $apiClient) {
		if ($apiClient == null) {
			throw new \InvalidArgumentException('The api client is required.');
		}

		$this->apiClient = $apiClient;
	}

	/**
	 * Returns the API client instance.
	 *
	 * @return ApiClient
	 */
	public function getApiClient() {
		return $this->apiClient;
	}


	/**
	 * Operation subscriptionApplyChangesPost
	 *
	 * apply changes
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionChangeRequest $request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\SubscriptionVersion
	 */
	public function subscriptionApplyChangesPost($spaceId, $request) {
		return $this->subscriptionApplyChangesPostWithHttpInfo($spaceId, $request)->getData();
	}

	/**
	 * Operation subscriptionApplyChangesPostWithHttpInfo
	 *
	 * apply changes
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionChangeRequest $request  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionApplyChangesPostWithHttpInfo($spaceId, $request) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionApplyChangesPost');
		}
		// verify the required parameter 'request' is set
		if ($request === null) {
			throw new \InvalidArgumentException('Missing the required parameter $request when calling subscriptionApplyChangesPost');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/subscription/applyChanges";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($request)) {
			$tempBody = $request;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\SubscriptionVersion',
				'/subscription/applyChanges'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionVersion', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation subscriptionCountPost
	 *
	 * count
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @return int
	 */
	public function subscriptionCountPost($spaceId, $filter = null) {
		return $this->subscriptionCountPostWithHttpInfo($spaceId, $filter)->getData();
	}

	/**
	 * Operation subscriptionCountPostWithHttpInfo
	 *
	 * count
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionCountPostWithHttpInfo($spaceId, $filter = null) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionCountPost');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/subscription/count";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($filter)) {
			$tempBody = $filter;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'int',
				'/subscription/count'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'int', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation subscriptionCreatePost
	 *
	 * create
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionCreateRequest $createRequest  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\SubscriptionVersion
	 */
	public function subscriptionCreatePost($spaceId, $createRequest) {
		return $this->subscriptionCreatePostWithHttpInfo($spaceId, $createRequest)->getData();
	}

	/**
	 * Operation subscriptionCreatePostWithHttpInfo
	 *
	 * create
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\SubscriptionCreateRequest $createRequest  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionCreatePostWithHttpInfo($spaceId, $createRequest) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionCreatePost');
		}
		// verify the required parameter 'createRequest' is set
		if ($createRequest === null) {
			throw new \InvalidArgumentException('Missing the required parameter $createRequest when calling subscriptionCreatePost');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/subscription/create";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($createRequest)) {
			$tempBody = $createRequest;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\SubscriptionVersion',
				'/subscription/create'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionVersion', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation subscriptionInitializePost
	 *
	 * initialize
	 *
	 * @param int $spaceId  (required)
	 * @param int $subscriptionId The provided subscription id will be used to lookup the subscription which should be initialized. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\SubscriptionCharge
	 */
	public function subscriptionInitializePost($spaceId, $subscriptionId) {
		return $this->subscriptionInitializePostWithHttpInfo($spaceId, $subscriptionId)->getData();
	}

	/**
	 * Operation subscriptionInitializePostWithHttpInfo
	 *
	 * initialize
	 *
	 * @param int $spaceId  (required)
	 * @param int $subscriptionId The provided subscription id will be used to lookup the subscription which should be initialized. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionInitializePostWithHttpInfo($spaceId, $subscriptionId) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionInitializePost');
		}
		// verify the required parameter 'subscriptionId' is set
		if ($subscriptionId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $subscriptionId when calling subscriptionInitializePost');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($subscriptionId !== null) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionId);
		}

		// path params
		$resourcePath = "/subscription/initialize";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\SubscriptionCharge',
				'/subscription/initialize'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionCharge', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionCharge', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation subscriptionInitializeSubscriberPresentPost
	 *
	 * initializeSubscriberPresent
	 *
	 * @param int $spaceId  (required)
	 * @param int $subscriptionId  (required)
	 * @param string $successUrl The subscriber will be redirected to the success URL when the transaction is successful. (optional)
	 * @param string $failedUrl The subscriber will be redirected to the fail URL when the transaction fails. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\SubscriptionCharge
	 */
	public function subscriptionInitializeSubscriberPresentPost($spaceId, $subscriptionId, $successUrl = null, $failedUrl = null) {
		return $this->subscriptionInitializeSubscriberPresentPostWithHttpInfo($spaceId, $subscriptionId, $successUrl, $failedUrl)->getData();
	}

	/**
	 * Operation subscriptionInitializeSubscriberPresentPostWithHttpInfo
	 *
	 * initializeSubscriberPresent
	 *
	 * @param int $spaceId  (required)
	 * @param int $subscriptionId  (required)
	 * @param string $successUrl The subscriber will be redirected to the success URL when the transaction is successful. (optional)
	 * @param string $failedUrl The subscriber will be redirected to the fail URL when the transaction fails. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionInitializeSubscriberPresentPostWithHttpInfo($spaceId, $subscriptionId, $successUrl = null, $failedUrl = null) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionInitializeSubscriberPresentPost');
		}
		// verify the required parameter 'subscriptionId' is set
		if ($subscriptionId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $subscriptionId when calling subscriptionInitializeSubscriberPresentPost');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($subscriptionId !== null) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionId);
		}
		if ($successUrl !== null) {
			$queryParams['successUrl'] = $this->apiClient->getSerializer()->toQueryValue($successUrl);
		}
		if ($failedUrl !== null) {
			$queryParams['failedUrl'] = $this->apiClient->getSerializer()->toQueryValue($failedUrl);
		}

		// path params
		$resourcePath = "/subscription/initializeSubscriberPresent";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\SubscriptionCharge',
				'/subscription/initializeSubscriberPresent'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionCharge', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionCharge', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation subscriptionReadGet
	 *
	 * read
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the subscription which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\Subscription
	 */
	public function subscriptionReadGet($spaceId, $id) {
		return $this->subscriptionReadGetWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation subscriptionReadGetWithHttpInfo
	 *
	 * read
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the subscription which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionReadGetWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionReadGet');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling subscriptionReadGet');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['*/*']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/subscription/read";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Subscription',
				'/subscription/read'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Subscription', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Subscription', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation subscriptionSearchPost
	 *
	 * search
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the subscriptions which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\Subscription[]
	 */
	public function subscriptionSearchPost($spaceId, $query) {
		return $this->subscriptionSearchPostWithHttpInfo($spaceId, $query)->getData();
	}

	/**
	 * Operation subscriptionSearchPostWithHttpInfo
	 *
	 * search
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the subscriptions which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionSearchPostWithHttpInfo($spaceId, $query) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionSearchPost');
		}
		// verify the required parameter 'query' is set
		if ($query === null) {
			throw new \InvalidArgumentException('Missing the required parameter $query when calling subscriptionSearchPost');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/subscription/search";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		// body params
		$tempBody = null;
		if (isset($query)) {
			$tempBody = $query;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\Subscription[]',
				'/subscription/search'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Subscription[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Subscription[]', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation subscriptionTerminatePost
	 *
	 * terminate
	 *
	 * @param int $spaceId  (required)
	 * @param int $subscriptionId The subscription id identifies the subscription which should be terminated. (required)
	 * @param bool $respectTerminationPeriod The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return void
	 */
	public function subscriptionTerminatePost($spaceId, $subscriptionId, $respectTerminationPeriod) {
		return $this->subscriptionTerminatePostWithHttpInfo($spaceId, $subscriptionId, $respectTerminationPeriod)->getData();
	}

	/**
	 * Operation subscriptionTerminatePostWithHttpInfo
	 *
	 * terminate
	 *
	 * @param int $spaceId  (required)
	 * @param int $subscriptionId The subscription id identifies the subscription which should be terminated. (required)
	 * @param bool $respectTerminationPeriod The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionTerminatePostWithHttpInfo($spaceId, $subscriptionId, $respectTerminationPeriod) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionTerminatePost');
		}
		// verify the required parameter 'subscriptionId' is set
		if ($subscriptionId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $subscriptionId when calling subscriptionTerminatePost');
		}
		// verify the required parameter 'respectTerminationPeriod' is set
		if ($respectTerminationPeriod === null) {
			throw new \InvalidArgumentException('Missing the required parameter $respectTerminationPeriod when calling subscriptionTerminatePost');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($subscriptionId !== null) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionId);
		}
		if ($respectTerminationPeriod !== null) {
			$queryParams['respectTerminationPeriod'] = $this->apiClient->getSerializer()->toQueryValue($respectTerminationPeriod);
		}

		// path params
		$resourcePath = "/subscription/terminate";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				null,
				'/subscription/terminate'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders());
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation subscriptionUpdateProductVersionPost
	 *
	 * update product version
	 *
	 * @param int $spaceId  (required)
	 * @param int $subscriptionId The subscription id identifies the subscription which should be updated to the latest version. (required)
	 * @param bool $respectTerminationPeriod The subscription version may be retired. The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\SubscriptionVersion
	 */
	public function subscriptionUpdateProductVersionPost($spaceId, $subscriptionId, $respectTerminationPeriod) {
		return $this->subscriptionUpdateProductVersionPostWithHttpInfo($spaceId, $subscriptionId, $respectTerminationPeriod)->getData();
	}

	/**
	 * Operation subscriptionUpdateProductVersionPostWithHttpInfo
	 *
	 * update product version
	 *
	 * @param int $spaceId  (required)
	 * @param int $subscriptionId The subscription id identifies the subscription which should be updated to the latest version. (required)
	 * @param bool $respectTerminationPeriod The subscription version may be retired. The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function subscriptionUpdateProductVersionPostWithHttpInfo($spaceId, $subscriptionId, $respectTerminationPeriod) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionUpdateProductVersionPost');
		}
		// verify the required parameter 'subscriptionId' is set
		if ($subscriptionId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $subscriptionId when calling subscriptionUpdateProductVersionPost');
		}
		// verify the required parameter 'respectTerminationPeriod' is set
		if ($respectTerminationPeriod === null) {
			throw new \InvalidArgumentException('Missing the required parameter $respectTerminationPeriod when calling subscriptionUpdateProductVersionPost');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($subscriptionId !== null) {
			$queryParams['subscriptionId'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionId);
		}
		if ($respectTerminationPeriod !== null) {
			$queryParams['respectTerminationPeriod'] = $this->apiClient->getSerializer()->toQueryValue($respectTerminationPeriod);
		}

		// path params
		$resourcePath = "/subscription/updateProductVersion";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (count($formParams) > 0) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$response = $this->apiClient->callApi(
				$resourcePath,
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\SubscriptionVersion',
				'/subscription/updateProductVersion'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionVersion', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

}
