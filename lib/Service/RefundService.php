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
 * RefundService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/wallee-payment/wallee-php-sdk
 */
class RefundService {

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
     * Operation refundCountPost
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return int
     */
    public function refundCountPost($spaceId, $filter = null) {
        return $this->refundCountPostWithHttpInfo($spaceId, $filter)->getData();
    }

    /**
     * Operation refundCountPostWithHttpInfo
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function refundCountPostWithHttpInfo($spaceId, $filter = null) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling refundCountPost');
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
        $resourcePath = "/refund/count";
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
                '/refund/count'
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
     * Operation refundFailPost
     *
     * fail
     *
     * @param int $spaceId  (required)
     * @param int $refundId The id of the refund which should be marked as failed. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\Refund
     */
    public function refundFailPost($spaceId, $refundId) {
        return $this->refundFailPostWithHttpInfo($spaceId, $refundId)->getData();
    }

    /**
     * Operation refundFailPostWithHttpInfo
     *
     * fail
     *
     * @param int $spaceId  (required)
     * @param int $refundId The id of the refund which should be marked as failed. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function refundFailPostWithHttpInfo($spaceId, $refundId) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling refundFailPost');
        }
        // verify the required parameter 'refundId' is set
        if ($refundId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $refundId when calling refundFailPost');
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
        if ($refundId !== null) {
            $queryParams['refundId'] = $this->apiClient->getSerializer()->toQueryValue($refundId);
        }
        
        // path params
        $resourcePath = "/refund/fail";
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
                '\Wallee\Sdk\Model\Refund',
                '/refund/fail'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Refund', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Refund', $e->getResponseHeaders());
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
     * Operation refundReadGet
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the refund which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\Refund
     */
    public function refundReadGet($spaceId, $id) {
        return $this->refundReadGetWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation refundReadGetWithHttpInfo
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the refund which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function refundReadGetWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling refundReadGet');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling refundReadGet');
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
        $resourcePath = "/refund/read";
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
                '\Wallee\Sdk\Model\Refund',
                '/refund/read'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Refund', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Refund', $e->getResponseHeaders());
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
     * Operation refundRefundPost
     *
     * create
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\RefundCreate $refund The refund object which should be created. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\Refund
     */
    public function refundRefundPost($spaceId, $refund) {
        return $this->refundRefundPostWithHttpInfo($spaceId, $refund)->getData();
    }

    /**
     * Operation refundRefundPostWithHttpInfo
     *
     * create
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\RefundCreate $refund The refund object which should be created. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function refundRefundPostWithHttpInfo($spaceId, $refund) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling refundRefundPost');
        }
        // verify the required parameter 'refund' is set
        if ($refund === null) {
            throw new \InvalidArgumentException('Missing the required parameter $refund when calling refundRefundPost');
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
        $resourcePath = "/refund/refund";
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
        // body params
        $tempBody = null;
        if (isset($refund)) {
            $tempBody = $refund;
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
                '\Wallee\Sdk\Model\Refund',
                '/refund/refund'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Refund', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Refund', $e->getResponseHeaders());
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
     * Operation refundSearchPost
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the refunds which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\Refund[]
     */
    public function refundSearchPost($spaceId, $query) {
        return $this->refundSearchPostWithHttpInfo($spaceId, $query)->getData();
    }

    /**
     * Operation refundSearchPostWithHttpInfo
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the refunds which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function refundSearchPostWithHttpInfo($spaceId, $query) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling refundSearchPost');
        }
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling refundSearchPost');
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
        $resourcePath = "/refund/search";
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
                '\Wallee\Sdk\Model\Refund[]',
                '/refund/search'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Refund[]', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Refund[]', $e->getResponseHeaders());
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
     * Operation refundSucceedPost
     *
     * succeed
     *
     * @param int $spaceId  (required)
     * @param int $refundId The id of the refund which should be marked as successful. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\Refund
     */
    public function refundSucceedPost($spaceId, $refundId) {
        return $this->refundSucceedPostWithHttpInfo($spaceId, $refundId)->getData();
    }

    /**
     * Operation refundSucceedPostWithHttpInfo
     *
     * succeed
     *
     * @param int $spaceId  (required)
     * @param int $refundId The id of the refund which should be marked as successful. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function refundSucceedPostWithHttpInfo($spaceId, $refundId) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling refundSucceedPost');
        }
        // verify the required parameter 'refundId' is set
        if ($refundId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $refundId when calling refundSucceedPost');
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
        if ($refundId !== null) {
            $queryParams['refundId'] = $this->apiClient->getSerializer()->toQueryValue($refundId);
        }
        
        // path params
        $resourcePath = "/refund/succeed";
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
                '\Wallee\Sdk\Model\Refund',
                '/refund/succeed'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Refund', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Refund', $e->getResponseHeaders());
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
