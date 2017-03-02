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
 * SubscriberUpdate model
 *
 * @category    Class
 * @description A subscriber represents everyone who is subscribed to a product.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriberUpdate extends Subscriber  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Subscriber.Update';

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

		if (isset($data['additionalAllowedPaymentMethodConfigurations']) && $data['additionalAllowedPaymentMethodConfigurations'] != null) {
			$this->setAdditionalAllowedPaymentMethodConfigurations($data['additionalAllowedPaymentMethodConfigurations']);
		}
		if (isset($data['billingAddress']) && $data['billingAddress'] != null) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['disallowedPaymentMethodConfigurations']) && $data['disallowedPaymentMethodConfigurations'] != null) {
			$this->setDisallowedPaymentMethodConfigurations($data['disallowedPaymentMethodConfigurations']);
		}
		if (isset($data['emailAddress']) && $data['emailAddress'] != null) {
			$this->setEmailAddress($data['emailAddress']);
		}
		if (isset($data['language']) && $data['language'] != null) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['reference']) && $data['reference'] != null) {
			$this->setReference($data['reference']);
		}
		if (isset($data['shippingAddress']) && $data['shippingAddress'] != null) {
			$this->setShippingAddress($data['shippingAddress']);
		}
	}


	/**
	 * Returns additionalAllowedPaymentMethodConfigurations.
	 *
	 * @return int[]
	 */
	public function getAdditionalAllowedPaymentMethodConfigurations() {
		return parent::getAdditionalAllowedPaymentMethodConfigurations();
	}

	/**
	 * Sets additionalAllowedPaymentMethodConfigurations.
	 *
	 * @param int[] $additionalAllowedPaymentMethodConfigurations
	 * @return SubscriberUpdate
	 */
	public function setAdditionalAllowedPaymentMethodConfigurations($additionalAllowedPaymentMethodConfigurations) {
		return parent::setAdditionalAllowedPaymentMethodConfigurations($additionalAllowedPaymentMethodConfigurations);
	}

	/**
	 * Returns billingAddress.
	 *
	 * @return \Wallee\Sdk\Model\AddressCreate
	 */
	public function getBillingAddress() {
		return parent::getBillingAddress();
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\AddressCreate $billingAddress
	 * @return SubscriberUpdate
	 */
	public function setBillingAddress($billingAddress) {
		return parent::setBillingAddress($billingAddress);
	}

	/**
	 * Returns description.
	 *
	 * The subscriber description can be used to add a description to the subscriber. This is used in the back office to identify the subscriber.
	 *
	 * @return string
	 */
	public function getDescription() {
		return parent::getDescription();
	}

	/**
	 * Sets description.
	 *
	 * @param string $description
	 * @return SubscriberUpdate
	 */
	public function setDescription($description) {
		return parent::setDescription($description);
	}

	/**
	 * Returns disallowedPaymentMethodConfigurations.
	 *
	 * @return int[]
	 */
	public function getDisallowedPaymentMethodConfigurations() {
		return parent::getDisallowedPaymentMethodConfigurations();
	}

	/**
	 * Sets disallowedPaymentMethodConfigurations.
	 *
	 * @param int[] $disallowedPaymentMethodConfigurations
	 * @return SubscriberUpdate
	 */
	public function setDisallowedPaymentMethodConfigurations($disallowedPaymentMethodConfigurations) {
		return parent::setDisallowedPaymentMethodConfigurations($disallowedPaymentMethodConfigurations);
	}

	/**
	 * Returns emailAddress.
	 *
	 * The email address is used to communicate with the subscriber. There can be only one subscriber per space with the same email address.
	 *
	 * @return string
	 */
	public function getEmailAddress() {
		return parent::getEmailAddress();
	}

	/**
	 * Sets emailAddress.
	 *
	 * @param string $emailAddress
	 * @return SubscriberUpdate
	 */
	public function setEmailAddress($emailAddress) {
		return parent::setEmailAddress($emailAddress);
	}

	/**
	 * Returns language.
	 *
	 * The subscriber language determines the language which is used to communicate with the subscriber in emails and documents (e.g. invoices).
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
	 * @return SubscriberUpdate
	 */
	public function setLanguage($language) {
		return parent::setLanguage($language);
	}

	/**
	 * Returns reference.
	 *
	 * The subscriber reference identifies the subscriber in administrative interfaces (e.g. customer id).
	 *
	 * @return string
	 */
	public function getReference() {
		return parent::getReference();
	}

	/**
	 * Sets reference.
	 *
	 * @param string $reference
	 * @return SubscriberUpdate
	 */
	public function setReference($reference) {
		return parent::setReference($reference);
	}

	/**
	 * Returns shippingAddress.
	 *
	 * @return \Wallee\Sdk\Model\AddressCreate
	 */
	public function getShippingAddress() {
		return parent::getShippingAddress();
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \Wallee\Sdk\Model\AddressCreate $shippingAddress
	 * @return SubscriberUpdate
	 */
	public function setShippingAddress($shippingAddress) {
		return parent::setShippingAddress($shippingAddress);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getEmailAddress() === null) {
			throw new ValidationException("'emailAddress' can't be null", 'emailAddress', $this);
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

