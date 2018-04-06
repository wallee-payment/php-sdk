<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 * wallee SDK: 1.0.0
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
 * AbstractTokenUpdate model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractTokenUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Abstract.Token.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'customerEmailAddress' => 'string',
		'customerId' => 'string',
		'enabledForOneClickPayment' => 'bool',
		'language' => 'string',
		'timeZone' => 'string',
		'tokenReference' => 'string'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The customer email address is the email address of the customer.
	 *
	 * @var string
	 */
	private $customerEmailAddress;

	/**
	 * The customer ID identifies the customer in the merchant system. In case the customer ID has been provided it has to correspond with the customer ID provided on the transaction. The customer ID will not be changed automatically. The merchant system has to provide it.
	 *
	 * @var string
	 */
	private $customerId;

	/**
	 * When a token is enabled for one-click payments the buyer will be able to select the token within the iFrame or on the payment page to pay with the token. The usage of the token will reduce the number of steps the buyer has to go through. The buyer is linked via the customer ID on the transaction with the token. Means the token will be visible for buyers with the same customer ID. Additionally the payment method has to be configured to allow the one-click payments.
	 *
	 * @var bool
	 */
	private $enabledForOneClickPayment;

	/**
	 * 
	 *
	 * @var string
	 */
	private $language;

	/**
	 * The time zone defines in which time zone the customer is located in. The time zone may affects how dates are formatted when interacting with the customer.
	 *
	 * @var string
	 */
	private $timeZone;

	/**
	 * Use something that it is easy to identify and may help you find the token (e.g. customer id, email address).
	 *
	 * @var string
	 */
	private $tokenReference;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['customerEmailAddress'])) {
			$this->setCustomerEmailAddress($data['customerEmailAddress']);
		}
		if (isset($data['customerId'])) {
			$this->setCustomerId($data['customerId']);
		}
		if (isset($data['enabledForOneClickPayment'])) {
			$this->setEnabledForOneClickPayment($data['enabledForOneClickPayment']);
		}
		if (isset($data['language'])) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['timeZone'])) {
			$this->setTimeZone($data['timeZone']);
		}
		if (isset($data['tokenReference'])) {
			$this->setTokenReference($data['tokenReference']);
		}
	}


	/**
	 * Returns customerEmailAddress.
	 *
	 * The customer email address is the email address of the customer.
	 *
	 * @return string
	 */
	public function getCustomerEmailAddress() {
		return $this->customerEmailAddress;
	}

	/**
	 * Sets customerEmailAddress.
	 *
	 * @param string $customerEmailAddress
	 * @return AbstractTokenUpdate
	 */
	public function setCustomerEmailAddress($customerEmailAddress) {
		$this->customerEmailAddress = $customerEmailAddress;

		return $this;
	}

	/**
	 * Returns customerId.
	 *
	 * The customer ID identifies the customer in the merchant system. In case the customer ID has been provided it has to correspond with the customer ID provided on the transaction. The customer ID will not be changed automatically. The merchant system has to provide it.
	 *
	 * @return string
	 */
	public function getCustomerId() {
		return $this->customerId;
	}

	/**
	 * Sets customerId.
	 *
	 * @param string $customerId
	 * @return AbstractTokenUpdate
	 */
	public function setCustomerId($customerId) {
		$this->customerId = $customerId;

		return $this;
	}

	/**
	 * Returns enabledForOneClickPayment.
	 *
	 * When a token is enabled for one-click payments the buyer will be able to select the token within the iFrame or on the payment page to pay with the token. The usage of the token will reduce the number of steps the buyer has to go through. The buyer is linked via the customer ID on the transaction with the token. Means the token will be visible for buyers with the same customer ID. Additionally the payment method has to be configured to allow the one-click payments.
	 *
	 * @return bool
	 */
	public function getEnabledForOneClickPayment() {
		return $this->enabledForOneClickPayment;
	}

	/**
	 * Sets enabledForOneClickPayment.
	 *
	 * @param bool $enabledForOneClickPayment
	 * @return AbstractTokenUpdate
	 */
	public function setEnabledForOneClickPayment($enabledForOneClickPayment) {
		$this->enabledForOneClickPayment = $enabledForOneClickPayment;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets language.
	 *
	 * @param string $language
	 * @return AbstractTokenUpdate
	 */
	public function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns timeZone.
	 *
	 * The time zone defines in which time zone the customer is located in. The time zone may affects how dates are formatted when interacting with the customer.
	 *
	 * @return string
	 */
	public function getTimeZone() {
		return $this->timeZone;
	}

	/**
	 * Sets timeZone.
	 *
	 * @param string $timeZone
	 * @return AbstractTokenUpdate
	 */
	public function setTimeZone($timeZone) {
		$this->timeZone = $timeZone;

		return $this;
	}

	/**
	 * Returns tokenReference.
	 *
	 * Use something that it is easy to identify and may help you find the token (e.g. customer id, email address).
	 *
	 * @return string
	 */
	public function getTokenReference() {
		return $this->tokenReference;
	}

	/**
	 * Sets tokenReference.
	 *
	 * @param string $tokenReference
	 * @return AbstractTokenUpdate
	 */
	public function setTokenReference($tokenReference) {
		$this->tokenReference = $tokenReference;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

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

