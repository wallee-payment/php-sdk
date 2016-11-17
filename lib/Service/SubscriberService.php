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
 * SubscriberService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriberService {

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
     * Operation subscriberCountPost
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return int
     */
    public function subscriberCountPost($spaceId, $filter = null) {
        return $this->subscriberCountPostWithHttpInfo($spaceId, $filter)->getData();
    }

    /**
     * Operation subscriberCountPostWithHttpInfo
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriberCountPostWithHttpInfo($spaceId, $filter = null) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriberCountPost');
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
        $resourcePath = "/subscriber/count";
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
                '/subscriber/count'
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
     * Operation subscriberCreatePost
     *
     * create
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\SubscriberCreate $entity The customer object with the properties which should be created. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\SubscriberCreate
     */
    public function subscriberCreatePost($spaceId, $entity) {
        return $this->subscriberCreatePostWithHttpInfo($spaceId, $entity)->getData();
    }

    /**
     * Operation subscriberCreatePostWithHttpInfo
     *
     * create
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\SubscriberCreate $entity The customer object with the properties which should be created. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriberCreatePostWithHttpInfo($spaceId, $entity) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriberCreatePost');
        }
        // verify the required parameter 'entity' is set
        if ($entity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entity when calling subscriberCreatePost');
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
        $resourcePath = "/subscriber/create";
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
                '\Wallee\Sdk\Model\SubscriberCreate',
                '/subscriber/create'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriberCreate', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriberCreate', $e->getResponseHeaders());
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
     * Operation subscriberDeletePost
     *
     * delete
     *
     * @param int $spaceId  (required)
     * @param int $id  (required)
     * @throws \Wallee\Sdk\ApiException
     * @return void
     */
    public function subscriberDeletePost($spaceId, $id) {
        return $this->subscriberDeletePostWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation subscriberDeletePostWithHttpInfo
     *
     * delete
     *
     * @param int $spaceId  (required)
     * @param int $id  (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriberDeletePostWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriberDeletePost');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling subscriberDeletePost');
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
        $resourcePath = "/subscriber/delete";
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
                '/subscriber/delete'
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
     * Operation subscriberReadGet
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the customer which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\Subscriber
     */
    public function subscriberReadGet($spaceId, $id) {
        return $this->subscriberReadGetWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation subscriberReadGetWithHttpInfo
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the customer which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriberReadGetWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriberReadGet');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling subscriberReadGet');
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
        $resourcePath = "/subscriber/read";
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
                '\Wallee\Sdk\Model\Subscriber',
                '/subscriber/read'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Subscriber', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Subscriber', $e->getResponseHeaders());
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
     * Operation subscriberSearchPost
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the customer which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\Subscriber[]
     */
    public function subscriberSearchPost($spaceId, $query) {
        return $this->subscriberSearchPostWithHttpInfo($spaceId, $query)->getData();
    }

    /**
     * Operation subscriberSearchPostWithHttpInfo
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the customer which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriberSearchPostWithHttpInfo($spaceId, $query) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriberSearchPost');
        }
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling subscriberSearchPost');
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
        $resourcePath = "/subscriber/search";
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
                '\Wallee\Sdk\Model\Subscriber[]',
                '/subscriber/search'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\Subscriber[]', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\Subscriber[]', $e->getResponseHeaders());
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
     * Operation subscriberUpdatePost
     *
     * update
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\SubscriberUpdate $entity The customer with all the properties which should be updated. The id and the version are required properties. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\SubscriberUpdate
     */
    public function subscriberUpdatePost($spaceId, $entity) {
        return $this->subscriberUpdatePostWithHttpInfo($spaceId, $entity)->getData();
    }

    /**
     * Operation subscriberUpdatePostWithHttpInfo
     *
     * update
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\SubscriberUpdate $entity The customer with all the properties which should be updated. The id and the version are required properties. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function subscriberUpdatePostWithHttpInfo($spaceId, $entity) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling subscriberUpdatePost');
        }
        // verify the required parameter 'entity' is set
        if ($entity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entity when calling subscriberUpdatePost');
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
        $resourcePath = "/subscriber/update";
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
                '\Wallee\Sdk\Model\SubscriberUpdate',
                '/subscriber/update'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\SubscriberUpdate', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\SubscriberUpdate', $e->getResponseHeaders());
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
