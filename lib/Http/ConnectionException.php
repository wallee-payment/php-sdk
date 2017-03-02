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

namespace Wallee\Sdk\Http;

use \Exception;

/**
 * This exception is used to inform about connection problems during an HTTP request.
 *
 * @category Class
 * @package  Wallee\Sdk\Http
 * @author   customweb GmbH
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/wallee-payment/wallee-php-sdk
 */
final class ConnectionException extends Exception {
	
	/**
	 * The URL of the connection.
	 *
	 * @var string
	 */
	private $url;

	/**
	 * Constructor.
	 *
	 * @param string $url the URL of the connection
	 * @param string $message the error message
	 * @param int	$code the error code
	 */
	public function __construct($url = null, $message = "", $code = 0) {
		parent::__construct($message, $code);
		$this->url = $url;
	}

	/**
	 * Returns the URL of the connection.
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

}