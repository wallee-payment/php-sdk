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

namespace Wallee\Sdk;

use \Wallee\Sdk\ApiClient;
use \Wallee\Sdk\Http\HttpClientFactory;

/**
 * This class tests the basic functionality of the SDK.
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link	 https://github.com/wallee-payment/wallee-php-sdk
 */
final class BasicTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Test the API client.
	 */
	public function testApiClient() {
		$this->callApi(HttpClientFactory::TYPE_CURL);
	}

	/**
	 * Test the cURL HTTP client.
	 */
	public function testCurlHttpClient() {
		$this->callApi(HttpClientFactory::TYPE_CURL);
	}

	/**
	 * Test the socket HTTP client.
	 */
	public function testSocketHttpClient() {
		$this->callApi(HttpClientFactory::TYPE_SOCKET);
	}

	/**
	 * Send an API request with the given http client.
	 *
	 * @param string $httpClientType the http type to use for the request
	 */
	private function callApi($httpClientType = null) {
		$apiClient = new ApiClient(getenv('APPLICATION_USER_ID'), getenv('APPLICATION_USER_KEY'));
		$apiClient->setBasePath(getenv('API_BASE_PATH'));
		$apiClient->setHttpClientType($httpClientType);
		$service = new \Wallee\Sdk\Service\WebhookUrlService($apiClient);
		$response = $service->webhookUrlReadGetWithHttpInfo(14, 1);
		$this->assertEquals(200, $response->getStatusCode());
		$this->assertInstanceOf('\Wallee\Sdk\Model\WebhookUrl', $response->getData());
		$this->assertTrue($response->getData()->isValid());
		$this->assertEquals(1, $response->getData()->getId());
		$this->assertEquals('SDK Test Webhook Url', $response->getData()->getName());
	}

}