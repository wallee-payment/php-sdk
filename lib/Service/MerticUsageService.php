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

use Wallee\Sdk\ApiClient;
use Wallee\Sdk\ApiException;
use Wallee\Sdk\ApiResponse;
use Wallee\Sdk\Http\HttpRequest;

/**
 * MerticUsageService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link	 https://github.com/wallee-payment/wallee-php-sdk
 */
class MerticUsageService {

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
	 * Operation calculate
	 *
	 * Calculate
	 *
	 * @param int $spaceId  (required)
	 * @param \DateTime $start The start date from which on the consumed units should be returned from. (required)
	 * @param \DateTime $end The end date to which the consumed units should be returned to. The end date is not included in the result. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\MetricUsage[]
	 */
	public function calculate($spaceId, $start, $end) {
		return $this->calculateWithHttpInfo($spaceId, $start, $end)->getData();
	}

	/**
	 * Operation calculateWithHttpInfo
	 *
	 * Calculate
	 *
	 * @param int $spaceId  (required)
	 * @param \DateTime $start The start date from which on the consumed units should be returned from. (required)
	 * @param \DateTime $end The end date to which the consumed units should be returned to. The end date is not included in the result. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function calculateWithHttpInfo($spaceId, $start, $end) {
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling calculate');
		}
		// verify the required parameter 'start' is set
		if ($start === null) {
			throw new \InvalidArgumentException('Missing the required parameter $start when calling calculate');
		}
		// verify the required parameter 'end' is set
		if ($end === null) {
			throw new \InvalidArgumentException('Missing the required parameter $end when calling calculate');
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
		if ($start !== null) {
			$queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
		}
		if ($end !== null) {
			$queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
		}

		// path params
		$resourcePath = "/mertic-usage/calculate";
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
				'POST',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\MetricUsage[]',
				'/mertic-usage/calculate'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\MetricUsage[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\MetricUsage[]', $e->getResponseHeaders());
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
