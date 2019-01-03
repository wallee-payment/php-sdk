<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 * wallee SDK: 1.0.0
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

use Wallee\Sdk\ApiClient;
use Wallee\Sdk\ApiException;
use Wallee\Sdk\ApiResponse;
use Wallee\Sdk\Http\HttpRequest;

/**
 * CardProcessingService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class CardProcessingService {

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
	 * Operation process
	 *
	 * Process
	 *
	 * @param int $spaceId  (required)
	 * @param int $transactionId The ID of the transaction which should be processed. (required)
	 * @param int $paymentMethodConfigurationId The payment method configuration ID which is applied to the transaction. (required)
	 * @param \Wallee\Sdk\Model\UnencryptedCardDataCreate $cardData The card details as JSON in plain which should be used to authorize the payment. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function process($spaceId, $transactionId, $paymentMethodConfigurationId, $cardData) {
		return $this->processWithHttpInfo($spaceId, $transactionId, $paymentMethodConfigurationId, $cardData)->getData();
	}

	/**
	 * Operation processWithHttpInfo
	 *
	 * Process
	 *
	 * @param int $spaceId  (required)
	 * @param int $transactionId The ID of the transaction which should be processed. (required)
	 * @param int $paymentMethodConfigurationId The payment method configuration ID which is applied to the transaction. (required)
	 * @param \Wallee\Sdk\Model\UnencryptedCardDataCreate $cardData The card details as JSON in plain which should be used to authorize the payment. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function processWithHttpInfo($spaceId, $transactionId, $paymentMethodConfigurationId, $cardData) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling process');
		}
		// verify the required parameter 'transactionId' is set
		if ($transactionId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $transactionId when calling process');
		}
		// verify the required parameter 'paymentMethodConfigurationId' is set
		if ($paymentMethodConfigurationId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $paymentMethodConfigurationId when calling process');
		}
		// verify the required parameter 'cardData' is set
		if ($cardData === null) {
			throw new \InvalidArgumentException('Missing the required parameter $cardData when calling process');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($transactionId !== null) {
			$queryParams['transactionId'] = $this->apiClient->getSerializer()->toQueryValue($transactionId);
		}
		if ($paymentMethodConfigurationId !== null) {
			$queryParams['paymentMethodConfigurationId'] = $this->apiClient->getSerializer()->toQueryValue($paymentMethodConfigurationId);
		}

		// path params
		$resourcePath = "/card-processing/process";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		// body params
		$tempBody = null;
		if (isset($cardData)) {
			$tempBody = $cardData;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
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
				'/card-processing/process'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Transaction', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Transaction', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

	/**
	 * Operation processWith3DSecure
	 *
	 * Process With 3-D Secure
	 *
	 * @param int $spaceId  (required)
	 * @param int $transactionId The ID of the transaction which should be processed. (required)
	 * @param int $paymentMethodConfigurationId The payment method configuration ID which is applied to the transaction. (required)
	 * @param \Wallee\Sdk\Model\UnencryptedCardDataCreate $cardData The card details as JSON in plain which should be used to authorize the payment. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return string
	 */
	public function processWith3DSecure($spaceId, $transactionId, $paymentMethodConfigurationId, $cardData) {
		return $this->processWith3DSecureWithHttpInfo($spaceId, $transactionId, $paymentMethodConfigurationId, $cardData)->getData();
	}

	/**
	 * Operation processWith3DSecureWithHttpInfo
	 *
	 * Process With 3-D Secure
	 *
	 * @param int $spaceId  (required)
	 * @param int $transactionId The ID of the transaction which should be processed. (required)
	 * @param int $paymentMethodConfigurationId The payment method configuration ID which is applied to the transaction. (required)
	 * @param \Wallee\Sdk\Model\UnencryptedCardDataCreate $cardData The card details as JSON in plain which should be used to authorize the payment. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function processWith3DSecureWithHttpInfo($spaceId, $transactionId, $paymentMethodConfigurationId, $cardData) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling processWith3DSecure');
		}
		// verify the required parameter 'transactionId' is set
		if ($transactionId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $transactionId when calling processWith3DSecure');
		}
		// verify the required parameter 'paymentMethodConfigurationId' is set
		if ($paymentMethodConfigurationId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $paymentMethodConfigurationId when calling processWith3DSecure');
		}
		// verify the required parameter 'cardData' is set
		if ($cardData === null) {
			throw new \InvalidArgumentException('Missing the required parameter $cardData when calling processWith3DSecure');
		}
		// header params
		$headerParams = array();
		$headerAccept = $this->apiClient->selectHeaderAccept(array());
		if ($headerAccept !== null) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

		// query params
		$queryParams = array();
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($transactionId !== null) {
			$queryParams['transactionId'] = $this->apiClient->getSerializer()->toQueryValue($transactionId);
		}
		if ($paymentMethodConfigurationId !== null) {
			$queryParams['paymentMethodConfigurationId'] = $this->apiClient->getSerializer()->toQueryValue($paymentMethodConfigurationId);
		}

		// path params
		$resourcePath = "/card-processing/processWith3DSecure";
		// default format to json
		$resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = array();
		// body params
		$tempBody = null;
		if (isset($cardData)) {
			$tempBody = $cardData;
		}

		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
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
				'string',
				'/card-processing/processWith3DSecure'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'string', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 409:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 442:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
				case 542:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
					$e = new ApiException($e->getLogToken(), $responseObject->getMessage(), $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody(), $responseObject);
					break;
			}

			throw $e;
		}
	}

}
