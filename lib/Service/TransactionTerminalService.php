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
 * TransactionTerminalService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionTerminalService {

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
	 * Operation receipt
	 *
	 * getTerminalReceipt
	 *
	 * @param int $space_id  (required)
	 * @param int $transaction_id The ID of the transaction to get the receipt for. (required)
	 * @param int $type_id  (required)
	 * @param int $width  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return \Wallee\Sdk\Model\RenderedTerminalReceipt
	 */
	public function receipt($space_id, $transaction_id, $type_id, $width) {
		return $this->receiptWithHttpInfo($space_id, $transaction_id, $type_id, $width)->getData();
	}

	/**
	 * Operation receiptWithHttpInfo
	 *
	 * getTerminalReceipt
	 *
	 * @param int $space_id  (required)
	 * @param int $transaction_id The ID of the transaction to get the receipt for. (required)
	 * @param int $type_id  (required)
	 * @param int $width  (required)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function receiptWithHttpInfo($space_id, $transaction_id, $type_id, $width) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling receipt');
		}
		// verify the required parameter 'transaction_id' is set
		if (is_null($transaction_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $transaction_id when calling receipt');
		}
		// verify the required parameter 'type_id' is set
		if (is_null($type_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $type_id when calling receipt');
		}
		// verify the required parameter 'width' is set
		if (is_null($width)) {
			throw new \InvalidArgumentException('Missing the required parameter $width when calling receipt');
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
		if (!is_null($transaction_id)) {
			$queryParams['transactionId'] = $this->apiClient->getSerializer()->toQueryValue($transaction_id);
		}
		if (!is_null($type_id)) {
			$queryParams['typeId'] = $this->apiClient->getSerializer()->toQueryValue($type_id);
		}
		if (!is_null($width)) {
			$queryParams['width'] = $this->apiClient->getSerializer()->toQueryValue($width);
		}

		// path params
		$resourcePath = '/transaction-terminal/receipt';
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
				'GET',
				$queryParams,
				$httpBody,
				$headerParams,
				'\Wallee\Sdk\Model\RenderedTerminalReceipt',
				'/transaction-terminal/receipt'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), '\Wallee\Sdk\Model\RenderedTerminalReceipt', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RenderedTerminalReceipt',
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

	/**
	 * Operation tillConnectionCredentials
	 *
	 * Create Till Connection Credentials
	 *
	 * @param int $space_id  (required)
	 * @param int $transaction_id The ID of the transaction which is used to process with the terminal. (required)
	 * @param int $terminal_id The ID of the terminal which should be used to process the transaction. (required)
	 * @param string $language The language in which the messages should be rendered in. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return string
	 */
	public function tillConnectionCredentials($space_id, $transaction_id, $terminal_id, $language = null) {
		return $this->tillConnectionCredentialsWithHttpInfo($space_id, $transaction_id, $terminal_id, $language)->getData();
	}

	/**
	 * Operation tillConnectionCredentialsWithHttpInfo
	 *
	 * Create Till Connection Credentials
	 *
	 * @param int $space_id  (required)
	 * @param int $transaction_id The ID of the transaction which is used to process with the terminal. (required)
	 * @param int $terminal_id The ID of the terminal which should be used to process the transaction. (required)
	 * @param string $language The language in which the messages should be rendered in. (optional)
	 * @throws \Wallee\Sdk\ApiException
	 * @throws \Wallee\Sdk\VersioningException
	 * @throws \Wallee\Sdk\Http\ConnectionException
	 * @return ApiResponse
	 */
	public function tillConnectionCredentialsWithHttpInfo($space_id, $transaction_id, $terminal_id, $language = null) {
		// verify the required parameter 'space_id' is set
		if (is_null($space_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $space_id when calling tillConnectionCredentials');
		}
		// verify the required parameter 'transaction_id' is set
		if (is_null($transaction_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $transaction_id when calling tillConnectionCredentials');
		}
		// verify the required parameter 'terminal_id' is set
		if (is_null($terminal_id)) {
			throw new \InvalidArgumentException('Missing the required parameter $terminal_id when calling tillConnectionCredentials');
		}
		// header params
		$headerParams = [];
		$headerAccept = $this->apiClient->selectHeaderAccept([]);
		if (!is_null($headerAccept)) {
			$headerParams[HttpRequest::HEADER_KEY_ACCEPT] = $headerAccept;
		}
		$headerParams[HttpRequest::HEADER_KEY_CONTENT_TYPE] = $this->apiClient->selectHeaderContentType([]);

		// query params
		$queryParams = [];
		if (!is_null($space_id)) {
			$queryParams['spaceId'] = $this->apiClient->getSerializer()->toQueryValue($space_id);
		}
		if (!is_null($transaction_id)) {
			$queryParams['transactionId'] = $this->apiClient->getSerializer()->toQueryValue($transaction_id);
		}
		if (!is_null($terminal_id)) {
			$queryParams['terminalId'] = $this->apiClient->getSerializer()->toQueryValue($terminal_id);
		}
		if (!is_null($language)) {
			$queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
		}

		// path params
		$resourcePath = '/transaction-terminal/till-connection-credentials';
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
				'string',
				'/transaction-terminal/till-connection-credentials'
			);
			return new ApiResponse($response->getStatusCode(), $response->getHeaders(), $this->apiClient->getSerializer()->deserialize($response->getData(), 'string', $response->getHeaders()));
		} catch (ApiException $e) {
			switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
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
