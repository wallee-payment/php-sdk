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
 * TokenUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class TokenUpdate extends Token  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Token.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['customerEmailAddress']) && $data['customerEmailAddress'] != null) {
			$this->setCustomerEmailAddress($data['customerEmailAddress']);
		}
		if (isset($data['customerId']) && $data['customerId'] != null) {
			$this->setCustomerId($data['customerId']);
		}
		if (isset($data['enabledForOneClickPayment']) && $data['enabledForOneClickPayment'] != null) {
			$this->setEnabledForOneClickPayment($data['enabledForOneClickPayment']);
		}
		if (isset($data['language']) && $data['language'] != null) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['tokenReference']) && $data['tokenReference'] != null) {
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
		return parent::getCustomerEmailAddress();
	}

	/**
	 * Sets customerEmailAddress.
	 *
	 * @param string $customerEmailAddress
	 * @return TokenUpdate
	 */
	public function setCustomerEmailAddress($customerEmailAddress) {
		return parent::setCustomerEmailAddress($customerEmailAddress);
	}

	/**
	 * Returns customerId.
	 *
	 * The customer ID identifies the customer in the merchant system. In case the customer ID has been provided it has to correspond with the customer ID provided on the transaction. The customer ID will not be changed automatically. The merchant system has to provide it.
	 *
	 * @return string
	 */
	public function getCustomerId() {
		return parent::getCustomerId();
	}

	/**
	 * Sets customerId.
	 *
	 * @param string $customerId
	 * @return TokenUpdate
	 */
	public function setCustomerId($customerId) {
		return parent::setCustomerId($customerId);
	}

	/**
	 * Returns enabledForOneClickPayment.
	 *
	 * When a token is enabled for one-click payments the buyer will be able to select the token within the iFrame or on the payment page to pay with the token. The usage of the token will reduce the number of steps the buyer has to go through. The buyer is linked via the customer ID on the transaction with the token. Means the token will be visible for buyers with the same customer ID. Additionally the payment method has to be configured to allow the one-click payments.
	 *
	 * @return bool
	 */
	public function getEnabledForOneClickPayment() {
		return parent::getEnabledForOneClickPayment();
	}

	/**
	 * Sets enabledForOneClickPayment.
	 *
	 * @param bool $enabledForOneClickPayment
	 * @return TokenUpdate
	 */
	public function setEnabledForOneClickPayment($enabledForOneClickPayment) {
		return parent::setEnabledForOneClickPayment($enabledForOneClickPayment);
	}

	/**
	 * Returns language.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getLanguage() {
		return parent::getLanguage();
	}

	/**
	 * Sets language.
	 *
	 * @param string $language
	 * @return TokenUpdate
	 */
	public function setLanguage($language) {
		return parent::setLanguage($language);
	}

	/**
	 * Returns tokenReference.
	 *
	 * Use something that it is easy to identify and may help you find the token (e.g. customer id, email address).
	 *
	 * @return string
	 */
	public function getTokenReference() {
		return parent::getTokenReference();
	}

	/**
	 * Sets tokenReference.
	 *
	 * @param string $tokenReference
	 * @return TokenUpdate
	 */
	public function setTokenReference($tokenReference) {
		return parent::setTokenReference($tokenReference);
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

