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
 * TokenVersionService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/wallee-payment/wallee-php-sdk
 */
class TokenVersionService {

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
     * Operation tokenVersionActiveVersionGet
     *
     * Active Version
     *
     * @param int $spaceId  (required)
     * @param int $id The id of a token for which you want to look up the current active token version. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\TokenVersion
     */
    public function tokenVersionActiveVersionGet($spaceId, $id) {
        return $this->tokenVersionActiveVersionGetWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation tokenVersionActiveVersionGetWithHttpInfo
     *
     * Active Version
     *
     * @param int $spaceId  (required)
     * @param int $id The id of a token for which you want to look up the current active token version. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function tokenVersionActiveVersionGetWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling tokenVersionActiveVersionGet');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling tokenVersionActiveVersionGet');
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
        $resourcePath = "/token-version/active-version";
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
                '\Wallee\Sdk\Model\TokenVersion',
                '/token-version/active-version'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TokenVersion', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\TokenVersion', $e->getResponseHeaders());
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
     * Operation tokenVersionCountPost
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return int
     */
    public function tokenVersionCountPost($spaceId, $filter = null) {
        return $this->tokenVersionCountPostWithHttpInfo($spaceId, $filter)->getData();
    }

    /**
     * Operation tokenVersionCountPostWithHttpInfo
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function tokenVersionCountPostWithHttpInfo($spaceId, $filter = null) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling tokenVersionCountPost');
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
        $resourcePath = "/token-version/count";
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
                '/token-version/count'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'int', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
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
     * Operation tokenVersionReadGet
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the token version which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\TokenVersion
     */
    public function tokenVersionReadGet($spaceId, $id) {
        return $this->tokenVersionReadGetWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation tokenVersionReadGetWithHttpInfo
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the token version which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function tokenVersionReadGetWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling tokenVersionReadGet');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling tokenVersionReadGet');
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
        $resourcePath = "/token-version/read";
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
                '\Wallee\Sdk\Model\TokenVersion',
                '/token-version/read'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TokenVersion', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\TokenVersion', $e->getResponseHeaders());
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
     * Operation tokenVersionSearchPost
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the token versions which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\TokenVersion[]
     */
    public function tokenVersionSearchPost($spaceId, $query) {
        return $this->tokenVersionSearchPostWithHttpInfo($spaceId, $query)->getData();
    }

    /**
     * Operation tokenVersionSearchPostWithHttpInfo
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the token versions which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function tokenVersionSearchPostWithHttpInfo($spaceId, $query) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling tokenVersionSearchPost');
        }
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling tokenVersionSearchPost');
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
        $resourcePath = "/token-version/search";
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
                '\Wallee\Sdk\Model\TokenVersion[]',
                '/token-version/search'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\TokenVersion[]', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\TokenVersion[]', $e->getResponseHeaders());
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
