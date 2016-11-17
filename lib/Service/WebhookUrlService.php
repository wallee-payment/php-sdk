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
 * WebhookUrlService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/wallee-payment/wallee-php-sdk
 */
class WebhookUrlService {

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
     * Operation webhookUrlCountPost
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return int
     */
    public function webhookUrlCountPost($spaceId, $filter = null) {
        return $this->webhookUrlCountPostWithHttpInfo($spaceId, $filter)->getData();
    }

    /**
     * Operation webhookUrlCountPostWithHttpInfo
     *
     * count
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQueryFilter $filter The filter which restricts the entities which are used to calculate the count. (optional)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function webhookUrlCountPostWithHttpInfo($spaceId, $filter = null) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling webhookUrlCountPost');
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
        $resourcePath = "/webhook-url/count";
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
                '/webhook-url/count'
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
     * Operation webhookUrlCreatePost
     *
     * create
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\WebhookUrlCreate $entity The webhook url object with the properties which should be created. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\WebhookUrlCreate
     */
    public function webhookUrlCreatePost($spaceId, $entity) {
        return $this->webhookUrlCreatePostWithHttpInfo($spaceId, $entity)->getData();
    }

    /**
     * Operation webhookUrlCreatePostWithHttpInfo
     *
     * create
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\WebhookUrlCreate $entity The webhook url object with the properties which should be created. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function webhookUrlCreatePostWithHttpInfo($spaceId, $entity) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling webhookUrlCreatePost');
        }
        // verify the required parameter 'entity' is set
        if ($entity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entity when calling webhookUrlCreatePost');
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
        $resourcePath = "/webhook-url/create";
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
                '\Wallee\Sdk\Model\WebhookUrlCreate',
                '/webhook-url/create'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\WebhookUrlCreate', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\WebhookUrlCreate', $e->getResponseHeaders());
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
     * Operation webhookUrlDeletePost
     *
     * delete
     *
     * @param int $spaceId  (required)
     * @param int $id  (required)
     * @throws \Wallee\Sdk\ApiException
     * @return void
     */
    public function webhookUrlDeletePost($spaceId, $id) {
        return $this->webhookUrlDeletePostWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation webhookUrlDeletePostWithHttpInfo
     *
     * delete
     *
     * @param int $spaceId  (required)
     * @param int $id  (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function webhookUrlDeletePostWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling webhookUrlDeletePost');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling webhookUrlDeletePost');
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
        $resourcePath = "/webhook-url/delete";
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
                '/webhook-url/delete'
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
     * Operation webhookUrlReadGet
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the webhook url which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\WebhookUrl
     */
    public function webhookUrlReadGet($spaceId, $id) {
        return $this->webhookUrlReadGetWithHttpInfo($spaceId, $id)->getData();
    }

    /**
     * Operation webhookUrlReadGetWithHttpInfo
     *
     * read
     *
     * @param int $spaceId  (required)
     * @param int $id The id of the webhook url which should be returned. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function webhookUrlReadGetWithHttpInfo($spaceId, $id) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling webhookUrlReadGet');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling webhookUrlReadGet');
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
        $resourcePath = "/webhook-url/read";
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
                '\Wallee\Sdk\Model\WebhookUrl',
                '/webhook-url/read'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\WebhookUrl', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\WebhookUrl', $e->getResponseHeaders());
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
     * Operation webhookUrlSearchPost
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the webhook urls which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\WebhookUrl[]
     */
    public function webhookUrlSearchPost($spaceId, $query) {
        return $this->webhookUrlSearchPostWithHttpInfo($spaceId, $query)->getData();
    }

    /**
     * Operation webhookUrlSearchPostWithHttpInfo
     *
     * search
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\EntityQuery $query The query restricts the webhook urls which are returned by the search. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function webhookUrlSearchPostWithHttpInfo($spaceId, $query) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling webhookUrlSearchPost');
        }
        // verify the required parameter 'query' is set
        if ($query === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query when calling webhookUrlSearchPost');
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
        $resourcePath = "/webhook-url/search";
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
                '\Wallee\Sdk\Model\WebhookUrl[]',
                '/webhook-url/search'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\WebhookUrl[]', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\WebhookUrl[]', $e->getResponseHeaders());
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
     * Operation webhookUrlUpdatePost
     *
     * update
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\WebhookUrlUpdate $entity The webhook url object with all the properties which should be updated. The id and the version are required properties. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return \Wallee\Sdk\Model\WebhookUrlUpdate
     */
    public function webhookUrlUpdatePost($spaceId, $entity) {
        return $this->webhookUrlUpdatePostWithHttpInfo($spaceId, $entity)->getData();
    }

    /**
     * Operation webhookUrlUpdatePostWithHttpInfo
     *
     * update
     *
     * @param int $spaceId  (required)
     * @param \Wallee\Sdk\Model\WebhookUrlUpdate $entity The webhook url object with all the properties which should be updated. The id and the version are required properties. (required)
     * @throws \Wallee\Sdk\ApiException
     * @return ApiResponse
     */
    public function webhookUrlUpdatePostWithHttpInfo($spaceId, $entity) {
        // verify the required parameter 'spaceId' is set
        if ($spaceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling webhookUrlUpdatePost');
        }
        // verify the required parameter 'entity' is set
        if ($entity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entity when calling webhookUrlUpdatePost');
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
        $resourcePath = "/webhook-url/update";
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
                '\Wallee\Sdk\Model\WebhookUrlUpdate',
                '/webhook-url/update'
            );
            return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\WebhookUrlUpdate', $response->getHeaders()));
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\WebhookUrlUpdate', $e->getResponseHeaders());
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
