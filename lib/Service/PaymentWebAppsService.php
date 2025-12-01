<?php
/**
 * Wallee AG Php SDK
 *
 * This library allows to interact with the Wallee AG payment service.
 *
 * Copyright owner: Wallee AG
 * Website: https://en.wallee.com
 * Developer email: ecosystem-team@wallee.com
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

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Wallee\Sdk\ApiException;
use Wallee\Sdk\Configuration;
use Wallee\Sdk\FormDataProcessor;
use Wallee\Sdk\HeaderSelector;
use Wallee\Sdk\ObjectSerializer;
use Wallee\Sdk\Auth\HttpBearerAuth;
/**
 * PaymentWebAppsService service
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   wallee AG
 * @license  Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version  5.2.0
 */
class PaymentWebAppsService
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var array Authentications
     */
    protected $authentications = [];

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'deletePaymentWebAppsConnectorsConnectorExternalId' => [
            'application/json',
        ],
        'deletePaymentWebAppsProcessorsExternalId' => [
            'application/json',
        ],
        'patchPaymentWebAppsChargeAttemptsId' => [
            'application/json',
        ],
        'patchPaymentWebAppsCompletionsId' => [
            'application/json',
        ],
        'patchPaymentWebAppsConnectorsConnectorExternalId' => [
            'application/json',
        ],
        'patchPaymentWebAppsProcessorsExternalId' => [
            'application/json',
        ],
        'patchPaymentWebAppsRefundsId' => [
            'application/json',
        ],
        'patchPaymentWebAppsVoidsId' => [
            'application/json',
        ],
        'postPaymentWebAppsProcessors' => [
            'application/json',
        ],
        'postPaymentWebAppsProcessorsExternalIdActivateForProduction' => [
            'application/json',
        ],
        'postPaymentWebAppsProcessorsExternalIdConnectors' => [
            'application/json',
        ],
    ];

    /**
     * @param Configuration $config
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     * @param ClientInterface|null $client
     * @param HeaderSelector|null $selector
     */
    public function __construct(
        Configuration    $config,
        int              $hostIndex = 0,
        ?ClientInterface $client = null,
        ?HeaderSelector  $selector = null,
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
        $this->authentications = [
            "jwt" => new HttpBearerAuth($config->getUserId(), $config->getAuthenticationKey())
        ];
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return array|HttpBearerAuth[] the Authentications instance.
     */
    public function getAuthentications(): array
    {
        return $this->authentications;
    }

    /**
     * Operation deletePaymentWebAppsConnectorsConnectorExternalId
     *
     * Delete a connector
     *
     * @param  string $connector_external_id The unique identifier assigned during connector&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentWebAppsConnectorsConnectorExternalId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deletePaymentWebAppsConnectorsConnectorExternalId($connector_external_id, $space, string $contentType = self::contentTypes['deletePaymentWebAppsConnectorsConnectorExternalId'][0])
    {
        $this->deletePaymentWebAppsConnectorsConnectorExternalIdWithHttpInfo($connector_external_id, $space, $contentType);
    }

    /**
     * Operation deletePaymentWebAppsConnectorsConnectorExternalIdWithHttpInfo
     *
     * Delete a connector
     *
     * @param  string $connector_external_id The unique identifier assigned during connector&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentWebAppsConnectorsConnectorExternalId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePaymentWebAppsConnectorsConnectorExternalIdWithHttpInfo($connector_external_id, $space, string $contentType = self::contentTypes['deletePaymentWebAppsConnectorsConnectorExternalId'][0])
    {
        $request = $this->deletePaymentWebAppsConnectorsConnectorExternalIdRequest($connector_external_id, $space, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'deletePaymentWebAppsConnectorsConnectorExternalId'
     *
     * @param  string $connector_external_id The unique identifier assigned during connector&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentWebAppsConnectorsConnectorExternalId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deletePaymentWebAppsConnectorsConnectorExternalIdRequest($connector_external_id, $space, string $contentType = self::contentTypes['deletePaymentWebAppsConnectorsConnectorExternalId'][0])
    {

        // verify the required parameter 'connector_external_id' is set
        if ($connector_external_id === null || (is_array($connector_external_id) && count($connector_external_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connector_external_id when calling deletePaymentWebAppsConnectorsConnectorExternalId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling deletePaymentWebAppsConnectorsConnectorExternalId'
            );
        }


        $resourcePath = '/payment/web-apps/connectors/{connectorExternalId}';
        $httpMethod = 'DELETE';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($connector_external_id !== null) {
            $resourcePath = str_replace(
                '{' . 'connectorExternalId' . '}',
                ObjectSerializer::toPathValue($connector_external_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deletePaymentWebAppsProcessorsExternalId
     *
     * Delete a processor
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentWebAppsProcessorsExternalId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deletePaymentWebAppsProcessorsExternalId($external_id, $space, string $contentType = self::contentTypes['deletePaymentWebAppsProcessorsExternalId'][0])
    {
        $this->deletePaymentWebAppsProcessorsExternalIdWithHttpInfo($external_id, $space, $contentType);
    }

    /**
     * Operation deletePaymentWebAppsProcessorsExternalIdWithHttpInfo
     *
     * Delete a processor
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentWebAppsProcessorsExternalId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePaymentWebAppsProcessorsExternalIdWithHttpInfo($external_id, $space, string $contentType = self::contentTypes['deletePaymentWebAppsProcessorsExternalId'][0])
    {
        $request = $this->deletePaymentWebAppsProcessorsExternalIdRequest($external_id, $space, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'deletePaymentWebAppsProcessorsExternalId'
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentWebAppsProcessorsExternalId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deletePaymentWebAppsProcessorsExternalIdRequest($external_id, $space, string $contentType = self::contentTypes['deletePaymentWebAppsProcessorsExternalId'][0])
    {

        // verify the required parameter 'external_id' is set
        if ($external_id === null || (is_array($external_id) && count($external_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $external_id when calling deletePaymentWebAppsProcessorsExternalId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling deletePaymentWebAppsProcessorsExternalId'
            );
        }


        $resourcePath = '/payment/web-apps/processors/{externalId}';
        $httpMethod = 'DELETE';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($external_id !== null) {
            $resourcePath = str_replace(
                '{' . 'externalId' . '}',
                ObjectSerializer::toPathValue($external_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchPaymentWebAppsChargeAttemptsId
     *
     * Update a charge attempt
     *
     * @param  int $id id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppChargeAttemptUpdate $payment_app_charge_attempt_update payment_app_charge_attempt_update (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsChargeAttemptsId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\ChargeAttempt|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function patchPaymentWebAppsChargeAttemptsId($id, $space, $payment_app_charge_attempt_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsChargeAttemptsId'][0])
    {
        list($response) = $this->patchPaymentWebAppsChargeAttemptsIdWithHttpInfo($id, $space, $payment_app_charge_attempt_update, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchPaymentWebAppsChargeAttemptsIdWithHttpInfo
     *
     * Update a charge attempt
     *
     * @param  int $id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppChargeAttemptUpdate $payment_app_charge_attempt_update (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsChargeAttemptsId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\ChargeAttempt|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentWebAppsChargeAttemptsIdWithHttpInfo($id, $space, $payment_app_charge_attempt_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsChargeAttemptsId'][0])
    {
        $request = $this->patchPaymentWebAppsChargeAttemptsIdRequest($id, $space, $payment_app_charge_attempt_update, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\ChargeAttempt',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\ChargeAttempt',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\ChargeAttempt',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'patchPaymentWebAppsChargeAttemptsId'
     *
     * @param  int $id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppChargeAttemptUpdate $payment_app_charge_attempt_update (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsChargeAttemptsId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPaymentWebAppsChargeAttemptsIdRequest($id, $space, $payment_app_charge_attempt_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsChargeAttemptsId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchPaymentWebAppsChargeAttemptsId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchPaymentWebAppsChargeAttemptsId'
            );
        }

        // verify the required parameter 'payment_app_charge_attempt_update' is set
        if ($payment_app_charge_attempt_update === null || (is_array($payment_app_charge_attempt_update) && count($payment_app_charge_attempt_update) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_app_charge_attempt_update when calling patchPaymentWebAppsChargeAttemptsId'
            );
        }

        

        $resourcePath = '/payment/web-apps/charge-attempts/{id}';
        $httpMethod = 'PATCH';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_app_charge_attempt_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_app_charge_attempt_update));
            } else {
                $httpBody = $payment_app_charge_attempt_update;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchPaymentWebAppsCompletionsId
     *
     * Update a completion
     *
     * @param  int $id id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppCompletionUpdate $payment_app_completion_update payment_app_completion_update (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsCompletionsId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\TransactionCompletion|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function patchPaymentWebAppsCompletionsId($id, $space, $payment_app_completion_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsCompletionsId'][0])
    {
        list($response) = $this->patchPaymentWebAppsCompletionsIdWithHttpInfo($id, $space, $payment_app_completion_update, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchPaymentWebAppsCompletionsIdWithHttpInfo
     *
     * Update a completion
     *
     * @param  int $id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppCompletionUpdate $payment_app_completion_update (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsCompletionsId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\TransactionCompletion|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentWebAppsCompletionsIdWithHttpInfo($id, $space, $payment_app_completion_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsCompletionsId'][0])
    {
        $request = $this->patchPaymentWebAppsCompletionsIdRequest($id, $space, $payment_app_completion_update, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\TransactionCompletion',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\TransactionCompletion',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\TransactionCompletion',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'patchPaymentWebAppsCompletionsId'
     *
     * @param  int $id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppCompletionUpdate $payment_app_completion_update (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsCompletionsId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPaymentWebAppsCompletionsIdRequest($id, $space, $payment_app_completion_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsCompletionsId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchPaymentWebAppsCompletionsId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchPaymentWebAppsCompletionsId'
            );
        }

        // verify the required parameter 'payment_app_completion_update' is set
        if ($payment_app_completion_update === null || (is_array($payment_app_completion_update) && count($payment_app_completion_update) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_app_completion_update when calling patchPaymentWebAppsCompletionsId'
            );
        }

        

        $resourcePath = '/payment/web-apps/completions/{id}';
        $httpMethod = 'PATCH';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_app_completion_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_app_completion_update));
            } else {
                $httpBody = $payment_app_completion_update;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchPaymentWebAppsConnectorsConnectorExternalId
     *
     * Update a connector
     *
     * @param  string $connector_external_id The unique identifier assigned during connector&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppConnectorDetails $payment_app_connector_details payment_app_connector_details (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsConnectorsConnectorExternalId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\PaymentAppConnector|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function patchPaymentWebAppsConnectorsConnectorExternalId($connector_external_id, $space, $payment_app_connector_details, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsConnectorsConnectorExternalId'][0])
    {
        list($response) = $this->patchPaymentWebAppsConnectorsConnectorExternalIdWithHttpInfo($connector_external_id, $space, $payment_app_connector_details, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchPaymentWebAppsConnectorsConnectorExternalIdWithHttpInfo
     *
     * Update a connector
     *
     * @param  string $connector_external_id The unique identifier assigned during connector&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppConnectorDetails $payment_app_connector_details (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsConnectorsConnectorExternalId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\PaymentAppConnector|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentWebAppsConnectorsConnectorExternalIdWithHttpInfo($connector_external_id, $space, $payment_app_connector_details, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsConnectorsConnectorExternalId'][0])
    {
        $request = $this->patchPaymentWebAppsConnectorsConnectorExternalIdRequest($connector_external_id, $space, $payment_app_connector_details, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\PaymentAppConnector',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\PaymentAppConnector',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\PaymentAppConnector',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'patchPaymentWebAppsConnectorsConnectorExternalId'
     *
     * @param  string $connector_external_id The unique identifier assigned during connector&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppConnectorDetails $payment_app_connector_details (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsConnectorsConnectorExternalId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPaymentWebAppsConnectorsConnectorExternalIdRequest($connector_external_id, $space, $payment_app_connector_details, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsConnectorsConnectorExternalId'][0])
    {

        // verify the required parameter 'connector_external_id' is set
        if ($connector_external_id === null || (is_array($connector_external_id) && count($connector_external_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $connector_external_id when calling patchPaymentWebAppsConnectorsConnectorExternalId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchPaymentWebAppsConnectorsConnectorExternalId'
            );
        }

        // verify the required parameter 'payment_app_connector_details' is set
        if ($payment_app_connector_details === null || (is_array($payment_app_connector_details) && count($payment_app_connector_details) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_app_connector_details when calling patchPaymentWebAppsConnectorsConnectorExternalId'
            );
        }

        

        $resourcePath = '/payment/web-apps/connectors/{connectorExternalId}';
        $httpMethod = 'PATCH';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($connector_external_id !== null) {
            $resourcePath = str_replace(
                '{' . 'connectorExternalId' . '}',
                ObjectSerializer::toPathValue($connector_external_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_app_connector_details)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_app_connector_details));
            } else {
                $httpBody = $payment_app_connector_details;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchPaymentWebAppsProcessorsExternalId
     *
     * Update a processor
     *
     * @param  string $external_id external_id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppProcessorDetails $payment_app_processor_details payment_app_processor_details (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsProcessorsExternalId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\PaymentAppProcessor|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function patchPaymentWebAppsProcessorsExternalId($external_id, $space, $payment_app_processor_details, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsProcessorsExternalId'][0])
    {
        list($response) = $this->patchPaymentWebAppsProcessorsExternalIdWithHttpInfo($external_id, $space, $payment_app_processor_details, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchPaymentWebAppsProcessorsExternalIdWithHttpInfo
     *
     * Update a processor
     *
     * @param  string $external_id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppProcessorDetails $payment_app_processor_details (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsProcessorsExternalId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\PaymentAppProcessor|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentWebAppsProcessorsExternalIdWithHttpInfo($external_id, $space, $payment_app_processor_details, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsProcessorsExternalId'][0])
    {
        $request = $this->patchPaymentWebAppsProcessorsExternalIdRequest($external_id, $space, $payment_app_processor_details, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\PaymentAppProcessor',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\PaymentAppProcessor',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\PaymentAppProcessor',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'patchPaymentWebAppsProcessorsExternalId'
     *
     * @param  string $external_id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppProcessorDetails $payment_app_processor_details (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsProcessorsExternalId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPaymentWebAppsProcessorsExternalIdRequest($external_id, $space, $payment_app_processor_details, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsProcessorsExternalId'][0])
    {

        // verify the required parameter 'external_id' is set
        if ($external_id === null || (is_array($external_id) && count($external_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $external_id when calling patchPaymentWebAppsProcessorsExternalId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchPaymentWebAppsProcessorsExternalId'
            );
        }

        // verify the required parameter 'payment_app_processor_details' is set
        if ($payment_app_processor_details === null || (is_array($payment_app_processor_details) && count($payment_app_processor_details) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_app_processor_details when calling patchPaymentWebAppsProcessorsExternalId'
            );
        }

        

        $resourcePath = '/payment/web-apps/processors/{externalId}';
        $httpMethod = 'PATCH';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($external_id !== null) {
            $resourcePath = str_replace(
                '{' . 'externalId' . '}',
                ObjectSerializer::toPathValue($external_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_app_processor_details)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_app_processor_details));
            } else {
                $httpBody = $payment_app_processor_details;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchPaymentWebAppsRefundsId
     *
     * Update a refund
     *
     * @param  int $id id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppRefundUpdate $payment_app_refund_update payment_app_refund_update (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsRefundsId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\Refund|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function patchPaymentWebAppsRefundsId($id, $space, $payment_app_refund_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsRefundsId'][0])
    {
        list($response) = $this->patchPaymentWebAppsRefundsIdWithHttpInfo($id, $space, $payment_app_refund_update, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchPaymentWebAppsRefundsIdWithHttpInfo
     *
     * Update a refund
     *
     * @param  int $id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppRefundUpdate $payment_app_refund_update (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsRefundsId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\Refund|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentWebAppsRefundsIdWithHttpInfo($id, $space, $payment_app_refund_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsRefundsId'][0])
    {
        $request = $this->patchPaymentWebAppsRefundsIdRequest($id, $space, $payment_app_refund_update, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\Refund',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\Refund',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\Refund',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'patchPaymentWebAppsRefundsId'
     *
     * @param  int $id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppRefundUpdate $payment_app_refund_update (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsRefundsId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPaymentWebAppsRefundsIdRequest($id, $space, $payment_app_refund_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsRefundsId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchPaymentWebAppsRefundsId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchPaymentWebAppsRefundsId'
            );
        }

        // verify the required parameter 'payment_app_refund_update' is set
        if ($payment_app_refund_update === null || (is_array($payment_app_refund_update) && count($payment_app_refund_update) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_app_refund_update when calling patchPaymentWebAppsRefundsId'
            );
        }

        

        $resourcePath = '/payment/web-apps/refunds/{id}';
        $httpMethod = 'PATCH';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_app_refund_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_app_refund_update));
            } else {
                $httpBody = $payment_app_refund_update;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchPaymentWebAppsVoidsId
     *
     * Update a void
     *
     * @param  int $id id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppVoidUpdate $payment_app_void_update payment_app_void_update (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsVoidsId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\TransactionVoid|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function patchPaymentWebAppsVoidsId($id, $space, $payment_app_void_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsVoidsId'][0])
    {
        list($response) = $this->patchPaymentWebAppsVoidsIdWithHttpInfo($id, $space, $payment_app_void_update, $expand, $contentType);
        return $response;
    }

    /**
     * Operation patchPaymentWebAppsVoidsIdWithHttpInfo
     *
     * Update a void
     *
     * @param  int $id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppVoidUpdate $payment_app_void_update (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsVoidsId'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\TransactionVoid|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentWebAppsVoidsIdWithHttpInfo($id, $space, $payment_app_void_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsVoidsId'][0])
    {
        $request = $this->patchPaymentWebAppsVoidsIdRequest($id, $space, $payment_app_void_update, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\TransactionVoid',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\TransactionVoid',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\TransactionVoid',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'patchPaymentWebAppsVoidsId'
     *
     * @param  int $id (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppVoidUpdate $payment_app_void_update (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentWebAppsVoidsId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPaymentWebAppsVoidsIdRequest($id, $space, $payment_app_void_update, $expand = null, string $contentType = self::contentTypes['patchPaymentWebAppsVoidsId'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling patchPaymentWebAppsVoidsId'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling patchPaymentWebAppsVoidsId'
            );
        }

        // verify the required parameter 'payment_app_void_update' is set
        if ($payment_app_void_update === null || (is_array($payment_app_void_update) && count($payment_app_void_update) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_app_void_update when calling patchPaymentWebAppsVoidsId'
            );
        }

        

        $resourcePath = '/payment/web-apps/voids/{id}';
        $httpMethod = 'PATCH';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_app_void_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_app_void_update));
            } else {
                $httpBody = $payment_app_void_update;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postPaymentWebAppsProcessors
     *
     * Create a processor
     *
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppProcessorDetailsCreate $payment_app_processor_details_create payment_app_processor_details_create (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessors'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\PaymentAppProcessor|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function postPaymentWebAppsProcessors($space, $payment_app_processor_details_create, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessors'][0])
    {
        list($response) = $this->postPaymentWebAppsProcessorsWithHttpInfo($space, $payment_app_processor_details_create, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postPaymentWebAppsProcessorsWithHttpInfo
     *
     * Create a processor
     *
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppProcessorDetailsCreate $payment_app_processor_details_create (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessors'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\PaymentAppProcessor|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postPaymentWebAppsProcessorsWithHttpInfo($space, $payment_app_processor_details_create, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessors'][0])
    {
        $request = $this->postPaymentWebAppsProcessorsRequest($space, $payment_app_processor_details_create, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 201:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\PaymentAppProcessor',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\PaymentAppProcessor',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\PaymentAppProcessor',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'postPaymentWebAppsProcessors'
     *
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppProcessorDetailsCreate $payment_app_processor_details_create (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessors'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postPaymentWebAppsProcessorsRequest($space, $payment_app_processor_details_create, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessors'][0])
    {

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postPaymentWebAppsProcessors'
            );
        }

        // verify the required parameter 'payment_app_processor_details_create' is set
        if ($payment_app_processor_details_create === null || (is_array($payment_app_processor_details_create) && count($payment_app_processor_details_create) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_app_processor_details_create when calling postPaymentWebAppsProcessors'
            );
        }

        

        $resourcePath = '/payment/web-apps/processors';
        $httpMethod = 'POST';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_app_processor_details_create)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_app_processor_details_create));
            } else {
                $httpBody = $payment_app_processor_details_create;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postPaymentWebAppsProcessorsExternalIdActivateForProduction
     *
     * Activate a processor for production
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessorsExternalIdActivateForProduction'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\PaymentAppProcessor|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function postPaymentWebAppsProcessorsExternalIdActivateForProduction($external_id, $space, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessorsExternalIdActivateForProduction'][0])
    {
        list($response) = $this->postPaymentWebAppsProcessorsExternalIdActivateForProductionWithHttpInfo($external_id, $space, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postPaymentWebAppsProcessorsExternalIdActivateForProductionWithHttpInfo
     *
     * Activate a processor for production
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessorsExternalIdActivateForProduction'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\PaymentAppProcessor|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postPaymentWebAppsProcessorsExternalIdActivateForProductionWithHttpInfo($external_id, $space, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessorsExternalIdActivateForProduction'][0])
    {
        $request = $this->postPaymentWebAppsProcessorsExternalIdActivateForProductionRequest($external_id, $space, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\PaymentAppProcessor',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\PaymentAppProcessor',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\PaymentAppProcessor',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'postPaymentWebAppsProcessorsExternalIdActivateForProduction'
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessorsExternalIdActivateForProduction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postPaymentWebAppsProcessorsExternalIdActivateForProductionRequest($external_id, $space, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessorsExternalIdActivateForProduction'][0])
    {

        // verify the required parameter 'external_id' is set
        if ($external_id === null || (is_array($external_id) && count($external_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $external_id when calling postPaymentWebAppsProcessorsExternalIdActivateForProduction'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postPaymentWebAppsProcessorsExternalIdActivateForProduction'
            );
        }

        

        $resourcePath = '/payment/web-apps/processors/{externalId}/activate-for-production';
        $httpMethod = 'POST';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($external_id !== null) {
            $resourcePath = str_replace(
                '{' . 'externalId' . '}',
                ObjectSerializer::toPathValue($external_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postPaymentWebAppsProcessorsExternalIdConnectors
     *
     * Create a connector
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppConnectorDetailsCreate $payment_app_connector_details_create payment_app_connector_details_create (required)
     * @param  string[]|null $expand expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessorsExternalIdConnectors'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Wallee\Sdk\Model\PaymentAppConnector|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse
     */
    public function postPaymentWebAppsProcessorsExternalIdConnectors($external_id, $space, $payment_app_connector_details_create, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessorsExternalIdConnectors'][0])
    {
        list($response) = $this->postPaymentWebAppsProcessorsExternalIdConnectorsWithHttpInfo($external_id, $space, $payment_app_connector_details_create, $expand, $contentType);
        return $response;
    }

    /**
     * Operation postPaymentWebAppsProcessorsExternalIdConnectorsWithHttpInfo
     *
     * Create a connector
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppConnectorDetailsCreate $payment_app_connector_details_create (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessorsExternalIdConnectors'] to see the possible values for this operation
     *
     * @throws \Wallee\Sdk\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Wallee\Sdk\Model\PaymentAppConnector|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse|\Wallee\Sdk\Model\RestApiErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postPaymentWebAppsProcessorsExternalIdConnectorsWithHttpInfo($external_id, $space, $payment_app_connector_details_create, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessorsExternalIdConnectors'][0])
    {
        $request = $this->postPaymentWebAppsProcessorsExternalIdConnectorsRequest($external_id, $space, $payment_app_connector_details_create, $expand, $contentType);

        try {
            $requestTimeout = $this->config->getRequestTimeout();
            $options = $this->createHttpClientOption($requestTimeout);
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 201:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\PaymentAppConnector',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 406:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 409:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 415:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                case 429:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
                
                default:
                    return $this->handleResponseWithDataType(
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $request,
                        $response,
                    );
            }

            if ($this->responseWithinRangeCode('5XX', $statusCode)) {
                return $this->handleResponseWithDataType(
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $request,
                    $response,
                );
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Wallee\Sdk\Model\PaymentAppConnector',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\PaymentAppConnector',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wallee\Sdk\Model\RestApiErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            if ($this->responseWithinRangeCode('5XX', $e->getCode())) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Wallee\Sdk\Model\RestApiErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
                throw $e;
            }

            throw $e;
        }
    }

    /**
     * Create request for operation 'postPaymentWebAppsProcessorsExternalIdConnectors'
     *
     * @param  string $external_id The unique identifier assigned during processor&#39;s creation. (required)
     * @param  int $space Specifies the ID of the space the operation should be executed in. (required)
     * @param  \Wallee\Sdk\Model\PaymentAppConnectorDetailsCreate $payment_app_connector_details_create (required)
     * @param  string[]|null $expand (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postPaymentWebAppsProcessorsExternalIdConnectors'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postPaymentWebAppsProcessorsExternalIdConnectorsRequest($external_id, $space, $payment_app_connector_details_create, $expand = null, string $contentType = self::contentTypes['postPaymentWebAppsProcessorsExternalIdConnectors'][0])
    {

        // verify the required parameter 'external_id' is set
        if ($external_id === null || (is_array($external_id) && count($external_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $external_id when calling postPaymentWebAppsProcessorsExternalIdConnectors'
            );
        }

        // verify the required parameter 'space' is set
        if ($space === null || (is_array($space) && count($space) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $space when calling postPaymentWebAppsProcessorsExternalIdConnectors'
            );
        }

        // verify the required parameter 'payment_app_connector_details_create' is set
        if ($payment_app_connector_details_create === null || (is_array($payment_app_connector_details_create) && count($payment_app_connector_details_create) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_app_connector_details_create when calling postPaymentWebAppsProcessorsExternalIdConnectors'
            );
        }

        

        $resourcePath = '/payment/web-apps/processors/{externalId}/connectors';
        $httpMethod = 'POST';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expand,
            'expand', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($space !== null) {
            $headerParams['Space'] = ObjectSerializer::toHeaderValue($space);
        }

        // path params
        if ($external_id !== null) {
            $resourcePath = str_replace(
                '{' . 'externalId' . '}',
                ObjectSerializer::toPathValue($external_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_app_connector_details_create)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_app_connector_details_create));
            } else {
                $httpBody = $payment_app_connector_details_create;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);

        $auth_headers = [];
        // this endpoint requires Bearer (JWT) authentication (access token)
        foreach ($this->authentications as $auth) {
            $auth_headers = $auth->generateAuthParams($resourcePath, $httpMethod, $query);
        }

        $defaultHeaders = $this->config->getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $auth_headers,
            $headers
        );

        $operationHost = $this->config->getHost();
        return new Request(
            $httpMethod,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @param float $requestTimeout request timeout.
     * If not specified, fallback to default: 25 seconds.
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(float $requestTimeout = Configuration::DEFAULT_REQUEST_TIMEOUT): array
    {
        $options = [
            RequestOptions::TIMEOUT => $requestTimeout
        ];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }

}
