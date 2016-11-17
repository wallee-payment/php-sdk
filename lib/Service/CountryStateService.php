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
 * CountryStateService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/wallee-payment/wallee-php-sdk
 */
class CountryStateService {

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
     * Operation countryStateAllGet
     *
     * all
     *
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\RestCountryState[]
     */
    public function countryStateAllGet() {
        return $this->countryStateAllGetWithHttpInfo()->getData();
    }

    /**
     * Operation countryStateAllGetWithHttpInfo
     *
     * all
     *
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function countryStateAllGetWithHttpInfo() {
        // header params
        $headerParams = [];
        $headerAccept = $this->apiClient->selectHeaderAccept(['*/*']);
        if (!is_null($headerAccept)) {
            $headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
        }
        $headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

		// query params
		$queryParams = [];
        
        // path params
        $resourcePath = "/country-state/all";
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
                '\Wallee\Sdk\Model\RestCountryState[]',
                '/country-state/all'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\RestCountryState[]', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\RestCountryState[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 442:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 542:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation countryStateCountryGet
     *
     * findByCountry
     *
     * @param string $code The country code in ISO code two letter format for which all states should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\RestCountryState[]
     */
    public function countryStateCountryGet($code) {
        return $this->countryStateCountryGetWithHttpInfo($code)->getData();
    }

    /**
     * Operation countryStateCountryGetWithHttpInfo
     *
     * findByCountry
     *
     * @param string $code The country code in ISO code two letter format for which all states should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function countryStateCountryGetWithHttpInfo($code) {
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling countryStateCountryGet');
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
        if ($code !== null) {
            $queryParams['code'] = $this->apiClient->getSerializer()->toQueryValue($code);
        }
        
        // path params
        $resourcePath = "/country-state/country";
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
                '\Wallee\Sdk\Model\RestCountryState[]',
                '/country-state/country'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\RestCountryState[]', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\RestCountryState[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 442:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ClientError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 542:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\ServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    
}
