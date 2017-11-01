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
 * UserSpaceRoleService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link	 https://github.com/wallee-payment/wallee-php-sdk
 */
class UserSpaceRoleService {

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
	 * Operation addRole
	 *
	 * Add Role
	 *
	 * @param int $userId The id of the user to whom the role is assigned. (required)
	 * @param int $spaceId The space to which the role is mapped. (required)
	 * @param int $roleId The role which is mapped to the user and space. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\UserSpaceRole
	 */
	public function addRole($userId, $spaceId, $roleId) {
		return $this->addRoleWithHttpInfo($userId, $spaceId, $roleId)->getData();
	}

	/**
	 * Operation addRoleWithHttpInfo
	 *
	 * Add Role
	 *
	 * @param int $userId The id of the user to whom the role is assigned. (required)
	 * @param int $spaceId The space to which the role is mapped. (required)
	 * @param int $roleId The role which is mapped to the user and space. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function addRoleWithHttpInfo($userId, $spaceId, $roleId) {
		// verify the required parameter 'userId' is set
		if ($userId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $userId when calling addRole');
		}
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling addRole');
		}
		// verify the required parameter 'roleId' is set
		if ($roleId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $roleId when calling addRole');
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
		if ($userId !== null) {
			$queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($userId);
		}
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}
		if ($roleId !== null) {
			$queryParams['roleId'] = $this->apiClient->getSerializer()->toQueryValue($roleId);
		}

		// path params
		$resourcePath = "/user-space-role/addRole";
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
				'\Wallee\Sdk\Model\UserSpaceRole',
				'/user-space-role/addRole'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\UserSpaceRole', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\UserSpaceRole', $e->getResponseHeaders());
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
	 * Operation callList
	 *
	 * List Roles
	 *
	 * @param int $userId The id of the user to whom the role is assigned. (required)
	 * @param int $spaceId The space to which the role is mapped. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return \Wallee\Sdk\Model\UserSpaceRole[]
	 */
	public function callList($userId, $spaceId) {
		return $this->callListWithHttpInfo($userId, $spaceId)->getData();
	}

	/**
	 * Operation callListWithHttpInfo
	 *
	 * List Roles
	 *
	 * @param int $userId The id of the user to whom the role is assigned. (required)
	 * @param int $spaceId The space to which the role is mapped. (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function callListWithHttpInfo($userId, $spaceId) {
		// verify the required parameter 'userId' is set
		if ($userId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $userId when calling callList');
		}
		// verify the required parameter 'spaceId' is set
		if ($spaceId === null) {
			throw new \InvalidArgumentException('Missing the required parameter $spaceId when calling callList');
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
		if ($userId !== null) {
			$queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($userId);
		}
		if ($spaceId !== null) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($spaceId);
		}

		// path params
		$resourcePath = "/user-space-role/list";
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
				'\Wallee\Sdk\Model\UserSpaceRole[]',
				'/user-space-role/list'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\UserSpaceRole[]', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
				case 200:
					$responseObject = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Wallee\Sdk\Model\UserSpaceRole[]', $e->getResponseHeaders());
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
	 * Operation removeRole
	 *
	 * Remove Role
	 *
	 * @param int $id The id of user space role which should be removed (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return void
	 */
	public function removeRole($id) {
		return $this->removeRoleWithHttpInfo($id)->getData();
	}

	/**
	 * Operation removeRoleWithHttpInfo
	 *
	 * Remove Role
	 *
	 * @param int $id The id of user space role which should be removed (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @return ApiResponse
	 */
	public function removeRoleWithHttpInfo($id) {
		// verify the required parameter 'id' is set
		if ($id === null) {
			throw new \InvalidArgumentException('Missing the required parameter $id when calling removeRole');
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
		if ($id !== null) {
			$queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
		}

		// path params
		$resourcePath = "/user-space-role/removeRole";
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
				null,
				'/user-space-role/removeRole'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders());
		} catch (ApiException $e) {
			switch ($e->getCode()) {
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
