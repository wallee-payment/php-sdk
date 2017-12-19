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

use Wallee\Sdk\ValidationException;

/**
 * SubscriptionPending model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionPending extends SubscriptionUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Subscription.Pending';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'reference' => 'string',
		'subscriber' => 'int',
		'token' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	

	/**
	 * 
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * 
	 *
	 * @var int
	 */
	private $subscriber;

	/**
	 * 
	 *
	 * @var int
	 */
	private $token;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['reference'])) {
			$this->setReference($data['reference']);
		}
		if (isset($data['subscriber'])) {
			$this->setSubscriber($data['subscriber']);
		}
		if (isset($data['token'])) {
			$this->setToken($data['token']);
		}
	}


	/**
	 * Returns reference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getReference() {
		return $this->reference;
	}

	/**
	 * Sets reference.
	 *
	 * @param string $reference
	 * @return SubscriptionPending
	 */
	public function setReference($reference) {
		$this->reference = $reference;

		return $this;
	}

	/**
	 * Returns subscriber.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSubscriber() {
		return $this->subscriber;
	}

	/**
	 * Sets subscriber.
	 *
	 * @param int $subscriber
	 * @return SubscriptionPending
	 */
	public function setSubscriber($subscriber) {
		$this->subscriber = $subscriber;

		return $this;
	}

	/**
	 * Returns token.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Sets token.
	 *
	 * @param int $token
	 * @return SubscriptionPending
	 */
	public function setToken($token) {
		$this->token = $token;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

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

