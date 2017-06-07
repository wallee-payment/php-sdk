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
 * TransactionService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link	 https://github.com/wallee-payment/wallee-php-sdk
 */
class TransactionService {

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
	 * Operation buildJavaScriptUrl
	 *
	 * buildJavaScriptUrl
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return string
	 */
	public function buildJavaScriptUrl($spaceId, $id) {
		return $this->buildJavaScriptUrlWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation buildJavaScriptUrlWithHttpInfo
	 *
	 * buildJavaScriptUrl
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function buildJavaScriptUrlWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling buildJavaScriptUrl');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling buildJavaScriptUrl');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array());
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array());

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/transaction/buildJavaScriptUrl";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'string',
				'/transaction/buildJavaScriptUrl'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'string', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
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
	 * Operation buildPaymentPageUrl
	 *
	 * buildPaymentPageUrl
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return string
	 */
	public function buildPaymentPageUrl($spaceId, $id) {
		return $this->buildPaymentPageUrlWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation buildPaymentPageUrlWithHttpInfo
	 *
	 * buildPaymentPageUrl
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function buildPaymentPageUrlWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling buildPaymentPageUrl');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling buildPaymentPageUrl');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array());
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array());

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/transaction/buildPaymentPageUrl";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'string',
				'/transaction/buildPaymentPageUrl'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'string', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
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
	 * Operation confirm
	 *
	 * confirm
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\TransactionPending $transactionModel The transaction JSON object to update and confirm. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function confirm($spaceId, $transactionModel) {
		return $this->confirmWithHttpInfo($spaceId, $transactionModel)->getData();
	}

	/**
	 * Operation confirmWithHttpInfo
	 *
	 * confirm
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\TransactionPending $transactionModel The transaction JSON object to update and confirm. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function confirmWithHttpInfo($spaceId, $transactionModel) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling confirm');
		}
		// verify the required parameter 'transactionModel' is set
		if ($transactionModel === null) {
			throw new \InvalidArgumentException('Missing the required parameter $transactionModel when calling confirm');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array());
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/transaction/confirm";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		// body params
		$tempBody = null;
		if (isset($transactionModel)) {
			$tempBody = $transactionModel;
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
				'\Wallee\Sdk\Model\Transaction',
				'/transaction/confirm'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Transaction', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
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
	 * Operation count
	 *
	 * Count
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @return int
	 */
	public function count($spaceId, $filter = null) {
		return $this->countWithHttpInfo($spaceId, $filter)->getData();
	}

	/**
	 * Operation countWithHttpInfo
	 *
	 * Count
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function countWithHttpInfo($spaceId, $filter = null) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling count');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/transaction/count";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
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
				'/transaction/count'
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
	 * Operation create
	 *
	 * Create
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\TransactionCreate $transaction The transaction object which should be created. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\TransactionCreate
	 */
	public function create($spaceId, $transaction) {
		return $this->createWithHttpInfo($spaceId, $transaction)->getData();
	}

	/**
	 * Operation createWithHttpInfo
	 *
	 * Create
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\TransactionCreate $transaction The transaction object which should be created. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function createWithHttpInfo($spaceId, $transaction) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling create');
		}
		// verify the required parameter 'transaction' is set
		if ($transaction === null) {
			throw new \InvalidArgumentException('Missing the required parameter $transaction when calling create');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/transaction/create";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		// body params
		$tempBody = null;
		if (isset($transaction)) {
			$tempBody = $transaction;
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
				'\Wallee\Sdk\Model\TransactionCreate',
				'/transaction/create'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TransactionCreate', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\TransactionCreate', $e->getResponseHeaders());
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
	 * Operation fetchPossiblePaymentMethods
	 *
	 * fetchPossiblePaymentMethods
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\PaymentMethodConfiguration[]
	 */
	public function fetchPossiblePaymentMethods($spaceId, $id) {
		return $this->fetchPossiblePaymentMethodsWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation fetchPossiblePaymentMethodsWithHttpInfo
	 *
	 * fetchPossiblePaymentMethods
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function fetchPossiblePaymentMethodsWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling fetchPossiblePaymentMethods');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling fetchPossiblePaymentMethods');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array());
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/transaction/fetchPossiblePaymentMethods";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
				'/transaction/fetchPossiblePaymentMethods'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\PaymentMethodConfiguration[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\PaymentMethodConfiguration[]', $e->getResponseHeaders());
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
	 * Operation getInvoiceDocument
	 *
	 * getInvoiceDocument
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction to get the invoice document for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\RenderedDocument
	 */
	public function getInvoiceDocument($spaceId, $id) {
		return $this->getInvoiceDocumentWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation getInvoiceDocumentWithHttpInfo
	 *
	 * getInvoiceDocument
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction to get the invoice document for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function getInvoiceDocumentWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling getInvoiceDocument');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling getInvoiceDocument');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('*/*'));
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/transaction/getInvoiceDocument";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'\Wallee\Sdk\Model\RenderedDocument',
				'/transaction/getInvoiceDocument'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\RenderedDocument', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\RenderedDocument', $e->getResponseHeaders());
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
	 * Operation getLatestTransactionLineItemVersion
	 *
	 * getLatestTransactionLineItemVersion
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction to get the latest line item version for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\TransactionLineItemVersion
	 */
	public function getLatestTransactionLineItemVersion($spaceId, $id) {
		return $this->getLatestTransactionLineItemVersionWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation getLatestTransactionLineItemVersionWithHttpInfo
	 *
	 * getLatestTransactionLineItemVersion
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction to get the latest line item version for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function getLatestTransactionLineItemVersionWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling getLatestTransactionLineItemVersion');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling getLatestTransactionLineItemVersion');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array());
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/transaction/getLatestTransactionLineItemVersion";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'\Wallee\Sdk\Model\TransactionLineItemVersion',
				'/transaction/getLatestTransactionLineItemVersion'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TransactionLineItemVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\TransactionLineItemVersion', $e->getResponseHeaders());
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
	 * Operation getPackingSlip
	 *
	 * getPackingSlip
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction to get the packing slip for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\RenderedDocument
	 */
	public function getPackingSlip($spaceId, $id) {
		return $this->getPackingSlipWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation getPackingSlipWithHttpInfo
	 *
	 * getPackingSlip
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction to get the packing slip for. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function getPackingSlipWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling getPackingSlip');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling getPackingSlip');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('*/*'));
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/transaction/getPackingSlip";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'\Wallee\Sdk\Model\RenderedDocument',
				'/transaction/getPackingSlip'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\RenderedDocument', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\RenderedDocument', $e->getResponseHeaders());
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
	 * Operation read
	 *
	 * Read
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function read($spaceId, $id) {
		return $this->readWithHttpInfo($spaceId, $id)->getData();
	}

	/**
	 * Operation readWithHttpInfo
	 *
	 * Read
	 *
	 * @param int $spaceId  (required)
	 * @param int $id The id of the transaction which should be returned. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function readWithHttpInfo($spaceId, $id) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling read');
		}
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling read');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('*/*'));
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/transaction/read";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		
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
				'\Wallee\Sdk\Model\Transaction',
				'/transaction/read'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Transaction', $e->getResponseHeaders());
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
	 * Operation search
	 *
	 * Search
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the transactions which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\Transaction[]
	 */
	public function search($spaceId, $query) {
		return $this->searchWithHttpInfo($spaceId, $query)->getData();
	}

	/**
	 * Operation searchWithHttpInfo
	 *
	 * Search
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the transactions which are returned by the search. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function searchWithHttpInfo($spaceId, $query) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling search');
		}
		// verify the required parameter 'query' is set
		if ($query === null) {
			throw new \InvalidArgumentException('Missing the required parameter $query when calling search');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/transaction/search";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
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
				'\Wallee\Sdk\Model\Transaction[]',
				'/transaction/search'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Transaction[]', $e->getResponseHeaders());
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
	 * Operation update
	 *
	 * Update
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\TransactionPending $entity The transaction object with the properties which should be updated. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\TransactionPending
	 */
	public function update($spaceId, $entity) {
		return $this->updateWithHttpInfo($spaceId, $entity)->getData();
	}

	/**
	 * Operation updateWithHttpInfo
	 *
	 * Update
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\TransactionPending $entity The transaction object with the properties which should be updated. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function updateWithHttpInfo($spaceId, $entity) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling update');
		}
		// verify the required parameter 'entity' is set
		if ($entity === null) {
			throw new \InvalidArgumentException('Missing the required parameter $entity when calling update');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/transaction/update";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		// body params
		$tempBody = null;
		if (isset($entity)) {
			$tempBody = $entity;
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
				'\Wallee\Sdk\Model\TransactionPending',
				'/transaction/update'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TransactionPending', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\TransactionPending', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
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
	 * Operation updateTransactionLineItems
	 *
	 * updateTransactionLineItems
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\TransactionLineItemUpdateRequest $updateRequest  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\TransactionLineItemVersion
	 */
	public function updateTransactionLineItems($spaceId, $updateRequest) {
		return $this->updateTransactionLineItemsWithHttpInfo($spaceId, $updateRequest)->getData();
	}

	/**
	 * Operation updateTransactionLineItemsWithHttpInfo
	 *
	 * updateTransactionLineItems
	 *
	 * @param int $spaceId  (required)
	 * @param \Wallee\Sdk\Model\TransactionLineItemUpdateRequest $updateRequest  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function updateTransactionLineItemsWithHttpInfo($spaceId, $updateRequest) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling updateTransactionLineItems');
		}
		// verify the required parameter 'updateRequest' is set
		if ($updateRequest === null) {
			throw new \InvalidArgumentException('Missing the required parameter $updateRequest when calling updateTransactionLineItems');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array());
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/transaction/updateTransactionLineItems";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		// body params
		$tempBody = null;
		if (isset($updateRequest)) {
			$tempBody = $updateRequest;
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
				'\Wallee\Sdk\Model\TransactionLineItemVersion',
				'/transaction/updateTransactionLineItems'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TransactionLineItemVersion', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\TransactionLineItemVersion', $e->getResponseHeaders());
					$e = new ApiException($responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
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
