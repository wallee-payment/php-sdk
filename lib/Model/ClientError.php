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

namespace Wallee\Sdk\Model;

use \Wallee\Sdk\ValidationException;

/**
 * ClientError model
 *
 * @category    Class
 * @description An error that is returned as the result of a bad user request or a misconfiguration.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ClientError  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ClientError';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'date' => 'string',
		'defaultMessage' => 'string',
		'id' => 'string',
		'message' => 'string',
		'type' => 'string'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	
	/**
	 * Values of type.
	 */
	const TYPE_END_USER_ERROR = 'END_USER_ERROR';
	const TYPE_CONFIGURATION_ERROR = 'CONFIGURATION_ERROR';
	const TYPE_DEVELOPER_ERROR = 'DEVELOPER_ERROR';
	
	/**
	 * Returns allowable values of type.
	 *
	 * @return string[]
	 */
	public function getTypeAllowableValues() {
		return [
			self::TYPE_END_USER_ERROR,
			self::TYPE_CONFIGURATION_ERROR,
			self::TYPE_DEVELOPER_ERROR,
		];
	}
	

	/**
	 * Date when an error has occurred.
	 *
	 * @var string
	 */
	private $date;

	/**
	 * The error message which is translated into the default language (i.e. English).
	 *
	 * @var string
	 */
	private $defaultMessage;

	/**
	 * Unique identifier of an error.
	 *
	 * @var string
	 */
	private $id;

	/**
	 * The error message which is translated in into the language of the client.
	 *
	 * @var string
	 */
	private $message;

	/**
	 * The type of the client error.
	 *
	 * @var string
	 */
	private $type;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
	}


	/**
	 * Returns date.
	 *
	 * Date when an error has occurred.
	 *
	 * @return string
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets date.
	 *
	 * @param string $date
	 * @return ClientError
	 */
	protected function setDate($date) {
		$this->date = $date;

		return $this;
	}

	/**
	 * Returns defaultMessage.
	 *
	 * The error message which is translated into the default language (i.e. English).
	 *
	 * @return string
	 */
	public function getDefaultMessage() {
		return $this->defaultMessage;
	}

	/**
	 * Sets defaultMessage.
	 *
	 * @param string $defaultMessage
	 * @return ClientError
	 */
	protected function setDefaultMessage($defaultMessage) {
		$this->defaultMessage = $defaultMessage;

		return $this;
	}

	/**
	 * Returns id.
	 *
	 * Unique identifier of an error.
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets id.
	 *
	 * @param string $id
	 * @return ClientError
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns message.
	 *
	 * The error message which is translated in into the language of the client.
	 *
	 * @return string
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * Sets message.
	 *
	 * @param string $message
	 * @return ClientError
	 */
	protected function setMessage($message) {
		$this->message = $message;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * The type of the client error.
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param string $type
	 * @return ClientError
	 */
	protected function setType($type) {
		$allowed_values = array('END_USER_ERROR', 'CONFIGURATION_ERROR', 'DEVELOPER_ERROR');
		if (!is_null($type) && (!in_array($type, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'END_USER_ERROR', 'CONFIGURATION_ERROR', 'DEVELOPER_ERROR'");
		}
		$this->type = $type;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		$allowed_values = ["END_USER_ERROR", "CONFIGURATION_ERROR", "DEVELOPER_ERROR"];
		if (!in_array($this->getType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'type', must be one of #{allowed_values}.", 'type', $this);
		}

	}

	/**
	 * Returns true if all the properties in the model are valid.
	 *
	 * @return boolean
	 */
	public function isValid() {
		try {
			$this->validate();
			return true;
		} catch (ValidationException $e) {
			return false;
		}
	}

	/**
	 * Returns the string presentation of the object.
	 *
	 * @return string
	 */
	public function __toString() {
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this));
	}

}
