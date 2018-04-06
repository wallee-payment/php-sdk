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
 * SubscriberUpdate model
 *
 * @category    Class
 * @description A subscriber represents everyone who is subscribed to a product.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriberUpdate  {

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
		'id' => 'int',
		'version' => 'int',
		'additionalAllowedPaymentMethodConfigurations' => 'int[]',
		'billingAddress' => '\Wallee\Sdk\Model\AddressCreate',
		'description' => 'string',
		'disallowedPaymentMethodConfigurations' => 'int[]',
		'emailAddress' => 'string',
		'language' => 'string',
		'metaData' => 'map[string,string]',
		'reference' => 'string',
		'shippingAddress' => '\Wallee\Sdk\Model\AddressCreate'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;

	/**
	 * Those payment methods which are allowed additionally will be available even when the product does not allow those methods.
	 *
	 * @var int[]
	 */
	private $additionalAllowedPaymentMethodConfigurations;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\AddressCreate
	 */
	private $billingAddress;

	/**
	 * The subscriber description can be used to add a description to the subscriber. This is used in the back office to identify the subscriber.
	 *
	 * @var string
	 */
	private $description;

	/**
	 * Those payment methods which are disallowed will not be available to the subscriber even if the product allows those methods.
	 *
	 * @var int[]
	 */
	private $disallowedPaymentMethodConfigurations;

	/**
	 * The email address is used to communicate with the subscriber. There can be only one subscriber per space with the same email address.
	 *
	 * @var string
	 */
	private $emailAddress;

	/**
	 * The subscriber language determines the language which is used to communicate with the subscriber in emails and documents (e.g. invoices).
	 *
	 * @var string
	 */
	private $language;

	/**
	 * Meta data allow to store additional data along the object.
	 *
	 * @var map[string,string]
	 */
	private $metaData;

	/**
	 * The subscriber reference identifies the subscriber in administrative interfaces (e.g. customer id).
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\AddressCreate
	 */
	private $shippingAddress;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
		if (isset($data['additionalAllowedPaymentMethodConfigurations'])) {
			$this->setAdditionalAllowedPaymentMethodConfigurations($data['additionalAllowedPaymentMethodConfigurations']);
		}
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['disallowedPaymentMethodConfigurations'])) {
			$this->setDisallowedPaymentMethodConfigurations($data['disallowedPaymentMethodConfigurations']);
		}
		if (isset($data['emailAddress'])) {
			$this->setEmailAddress($data['emailAddress']);
		}
		if (isset($data['language'])) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['metaData'])) {
			$this->setMetaData($data['metaData']);
		}
		if (isset($data['reference'])) {
			$this->setReference($data['reference']);
		}
		if (isset($data['shippingAddress'])) {
			$this->setShippingAddress($data['shippingAddress']);
		}
	}


	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return SubscriberUpdate
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns version.
	 *
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @return int
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Sets version.
	 *
	 * @param int $version
	 * @return SubscriberUpdate
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Returns additionalAllowedPaymentMethodConfigurations.
	 *
	 * Those payment methods which are allowed additionally will be available even when the product does not allow those methods.
	 *
	 * @return int[]
	 */
	public function getAdditionalAllowedPaymentMethodConfigurations() {
		return $this->additionalAllowedPaymentMethodConfigurations;
	}

	/**
	 * Sets additionalAllowedPaymentMethodConfigurations.
	 *
	 * @param int[] $additionalAllowedPaymentMethodConfigurations
	 * @return SubscriberUpdate
	 */
	public function setAdditionalAllowedPaymentMethodConfigurations($additionalAllowedPaymentMethodConfigurations) {
		$this->additionalAllowedPaymentMethodConfigurations = $additionalAllowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns billingAddress.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\AddressCreate
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\AddressCreate $billingAddress
	 * @return SubscriberUpdate
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * The subscriber description can be used to add a description to the subscriber. This is used in the back office to identify the subscriber.
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param string $description
	 * @return SubscriberUpdate
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns disallowedPaymentMethodConfigurations.
	 *
	 * Those payment methods which are disallowed will not be available to the subscriber even if the product allows those methods.
	 *
	 * @return int[]
	 */
	public function getDisallowedPaymentMethodConfigurations() {
		return $this->disallowedPaymentMethodConfigurations;
	}

	/**
	 * Sets disallowedPaymentMethodConfigurations.
	 *
	 * @param int[] $disallowedPaymentMethodConfigurations
	 * @return SubscriberUpdate
	 */
	public function setDisallowedPaymentMethodConfigurations($disallowedPaymentMethodConfigurations) {
		$this->disallowedPaymentMethodConfigurations = $disallowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns emailAddress.
	 *
	 * The email address is used to communicate with the subscriber. There can be only one subscriber per space with the same email address.
	 *
	 * @return string
	 */
	public function getEmailAddress() {
		return $this->emailAddress;
	}

	/**
	 * Sets emailAddress.
	 *
	 * @param string $emailAddress
	 * @return SubscriberUpdate
	 */
	public function setEmailAddress($emailAddress) {
		$this->emailAddress = $emailAddress;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * The subscriber language determines the language which is used to communicate with the subscriber in emails and documents (e.g. invoices).
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
	 * @return SubscriberUpdate
	 */
	public function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns metaData.
	 *
	 * Meta data allow to store additional data along the object.
	 *
	 * @return map[string,string]
	 */
	public function getMetaData() {
		return $this->metaData;
	}

	/**
	 * Sets metaData.
	 *
	 * @param map[string,string] $metaData
	 * @return SubscriberUpdate
	 */
	public function setMetaData($metaData) {
		$this->metaData = $metaData;

		return $this;
	}

	/**
	 * Returns reference.
	 *
	 * The subscriber reference identifies the subscriber in administrative interfaces (e.g. customer id).
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
	 * @return SubscriberUpdate
	 */
	public function setReference($reference) {
		$this->reference = $reference;

		return $this;
	}

	/**
	 * Returns shippingAddress.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\AddressCreate
	 */
	public function getShippingAddress() {
		return $this->shippingAddress;
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \Wallee\Sdk\Model\AddressCreate $shippingAddress
	 * @return SubscriberUpdate
	 */
	public function setShippingAddress($shippingAddress) {
		$this->shippingAddress = $shippingAddress;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getId() === null) {
			throw new ValidationException("'id' can't be null", 'id', $this);
		}
		if ($this->getVersion() === null) {
			throw new ValidationException("'version' can't be null", 'version', $this);
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

