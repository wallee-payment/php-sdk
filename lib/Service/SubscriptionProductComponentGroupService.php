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
 * SubscriptionProductComponentGroupService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductComponentGroupService {

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
     * Operation subscriptionProductComponentGroupCountPost
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return int
     */
    public function subscriptionProductComponentGroupCountPost($spaceId, $filter = null) {
        return $this->subscriptionProductComponentGroupCountPostWithHttpInfo($spaceId, $filter)->getData();
    }

    /**
     * Operation subscriptionProductComponentGroupCountPostWithHttpInfo
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriptionProductComponentGroupCountPostWithHttpInfo($spaceId, $filter = null) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionProductComponentGroupCountPost');
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
        $resourcePath = "/subscription-product-component-group/count";
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
                '/subscription-product-component-group/count'
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
     * Operation subscriptionProductComponentGroupCreatePost
     *
     * create
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate $entity The product component group object with the properties which should be created. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate
     */
    public function subscriptionProductComponentGroupCreatePost($spaceId, $entity) {
        return $this->subscriptionProductComponentGroupCreatePostWithHttpInfo($spaceId, $entity)->getData();
    }

    /**
     * Operation subscriptionProductComponentGroupCreatePostWithHttpInfo
     *
     * create
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate $entity The product component group object with the properties which should be created. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriptionProductComponentGroupCreatePostWithHttpInfo($spaceId, $entity) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionProductComponentGroupCreatePost');
        }
        // verify the required parameter 'entity' is set
        if ($entity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entity when calling subscriptionProductComponentGroupCreatePost');
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
        $resourcePath = "/subscription-product-component-group/create";
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
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
                '\Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate',
                '/subscription-product-component-group/create'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate', $e->getResponseHeaders());
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
     * Operation subscriptionProductComponentGroupDeletePost
     *
     * delete
     *
     * @param int $spaceId  (required)
     * @param int $id  (required)
     * @throws \Wallee\Sdk\ApiException
     * @return void
     */
    public function subscriptionProductComponentGroupDeletePost($spaceId, $id) {
        return $this->subscriptionProductComponentGroupDeletePostWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation subscriptionProductComponentGroupDeletePostWithHttpInfo
     *
     * delete
     *
     * @param int $spaceId  (required)
     * @param int $id  (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriptionProductComponentGroupDeletePostWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionProductComponentGroupDeletePost');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling subscriptionProductComponentGroupDeletePost');
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
        $resourcePath = "/subscription-product-component-group/delete";
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
        // body params
        $tempBody = null;
        if (isset($id)) {
            $tempBody = $id;
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
                null,
                '/subscription-product-component-group/delete'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation subscriptionProductComponentGroupReadGet
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the product component group which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\SubscriptionProductComponentGroup
     */
    public function subscriptionProductComponentGroupReadGet($spaceId, $id) {
        return $this->subscriptionProductComponentGroupReadGetWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation subscriptionProductComponentGroupReadGetWithHttpInfo
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the product component group which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriptionProductComponentGroupReadGetWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionProductComponentGroupReadGet');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling subscriptionProductComponentGroupReadGet');
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
        $resourcePath = "/subscription-product-component-group/read";
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
                '\Wallee\Sdk\Model\SubscriptionProductComponentGroup',
                '/subscription-product-component-group/read'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionProductComponentGroup', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionProductComponentGroup', $e->getResponseHeaders());
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
     * Operation subscriptionProductComponentGroupSearchPost
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the product component groups which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\SubscriptionProductComponentGroup[]
     */
    public function subscriptionProductComponentGroupSearchPost($spaceId, $query) {
        return $this->subscriptionProductComponentGroupSearchPostWithHttpInfo($spaceId, $query)->getData();
    }

    /**
     * Operation subscriptionProductComponentGroupSearchPostWithHttpInfo
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the product component groups which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriptionProductComponentGroupSearchPostWithHttpInfo($spaceId, $query) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionProductComponentGroupSearchPost');
        }
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling subscriptionProductComponentGroupSearchPost');
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
        $resourcePath = "/subscription-product-component-group/search";
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
                '\Wallee\Sdk\Model\SubscriptionProductComponentGroup[]',
                '/subscription-product-component-group/search'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionProductComponentGroup[]', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionProductComponentGroup[]', $e->getResponseHeaders());
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
     * Operation subscriptionProductComponentGroupUpdatePost
     *
     * update
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate $entity The product component group object with all the properties which should be updated. The id and the version are required properties. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate
     */
    public function subscriptionProductComponentGroupUpdatePost($spaceId, $entity) {
        return $this->subscriptionProductComponentGroupUpdatePostWithHttpInfo($spaceId, $entity)->getData();
    }

    /**
     * Operation subscriptionProductComponentGroupUpdatePostWithHttpInfo
     *
     * update
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate $entity The product component group object with all the properties which should be updated. The id and the version are required properties. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriptionProductComponentGroupUpdatePostWithHttpInfo($spaceId, $entity) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriptionProductComponentGroupUpdatePost');
        }
        // verify the required parameter 'entity' is set
        if ($entity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entity when calling subscriptionProductComponentGroupUpdatePost');
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
        $resourcePath = "/subscription-product-component-group/update";
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

		// form params
		$formParams = [];
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
                '\Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate',
                '/subscription-product-component-group/update'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriptionProductComponentGroupUpdate', $e->getResponseHeaders());
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
