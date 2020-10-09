<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
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
use Wallee\Sdk\ObjectSerializer;

/**
 * MerticUsageService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
		if (is_null($apiClient)) {
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
	 * @param int $space_id  (required)
	 * @param \DateTime $start The start date from which on the consumed units should be returned from. (required)
	 * @param \DateTime $end The end date to which the consumed units should be returned to. The end date is not included in the result. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\MetricUsage[]
	 */
	public function calculate($space_id, $start, $end) {
		return $this->calculateWithHttpInfo($space_id, $start, $end)->getData();
	}

	/**
	 * Operation calculateWithHttpInfo
	 *
	 * Calculate
	 *
	 * @param int $space_id  (required)
	 * @param \DateTime $start The start date from which on the consumed units should be returned from. (required)
	 * @param \DateTime $end The end date to which the consumed units should be returned to. The end date is not included in the result. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function calculateWithHttpInfo($space_id, $start, $end) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling calculate');
		}
		// verify the required parameter 'start' is set
		if (is_null($start)) {
			throw new \InvalidArgumentException('Missing the required parameter $start when calling calculate');
		}
		// verify the required parameter 'end' is set
		if (is_null($end)) {
			throw new \InvalidArgumentException('Missing the required parameter $end when calling calculate');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['*/*']);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($start)) {
			$queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
		}
		if (!is_null($end)) {
			$queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
		}

		// path params
		$resourcePath = '/mertic-usage/calculate';
		// default format to json
		$resourcePath = str_replace('{format}', 'json', $resourcePath);

		// form params
		$formParams = [];
		
		// for model (json/xml)
		$httpBody = '';
		if (isset($tempBody)) {
			$httpBody = $tempBody; // $tempBody is the method argument, if present
		} elseif (!empty($formParams)) {
			$httpBody = $formParams; // for HTTP post (form)
		}
		// make the API Call
		try {
			$this->apiClient->resetConnectionTimeout();
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
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\MetricUsage[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 442:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ClientError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
                case 542:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                break;
			}
			throw $e;
		}
	}

}
