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

use \Exception;

/**
 * This exception is used to inform about problems during an API call.
 *
 * @category Class
 * @package  Wallee\Sdk
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link	 https://github.com/wallee-payment/wallee-php-sdk
 */
class ApiException extends Exception {

	/**
	 * The HTTP body of the server response either as Json or string.
	 *
	 * @var string
	 */
	private $responseBody;

	/**
	 * The HTTP headers of the server response.
	 *
	 * @var string[]
	 */
	private $responseHeaders;

	/**
	 * The deserialized response object.
	 *
	 * @var $responseObject
	 */
	private $responseObject;

	/**
	 * Constructor.
	 *
	 * @param string $message		 the error message
	 * @param int	$code			the HTTP status code
	 * @param string $responseHeaders the HTTP response header
	 * @param mixed  $responseBody	the HTTP body of the server response either as Json or string
	 */
	public function __construct($message = "", $code = 0, $responseHeaders = null, $responseBody = null) {
		parent::__construct($message, $code);
		$this->responseHeaders = $responseHeaders;
		$this->responseBody = $responseBody;
	}

	/**
	 * Returns the HTTP response header.
	 *
	 * @return string
	 */
	public function getResponseHeaders() {
		return $this->responseHeaders;
	}

	/**
	 * Returns the HTTP body of the server response either as Json or string.
	 *
	 * @return string
	 */
	public function getResponseBody() {
		return $this->responseBody;
	}

	/**
	 * Sets the deseralized response object.
	 *
	 * @param mixed $object the deserialized response object
	 */
	public function setResponseObject($object) {
		$this->responseObject = $object;
	}

	/**
	 * Returns the deseralized response object.
	 *
	 * @return mixed
	 */
	public function getResponseObject() {
		return $this->responseObject;
	}

}