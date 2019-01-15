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
 * Subscriber model
 *
 * @category    Class
 * @description A subscriber represents everyone who is subscribed to a product.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Subscriber  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Subscriber';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'additionalAllowedPaymentMethodConfigurations' => 'int[]',
		'billingAddress' => '\Wallee\Sdk\Model\Address',
		'description' => 'string',
		'disallowedPaymentMethodConfigurations' => 'int[]',
		'emailAddress' => 'string',
		'externalId' => 'string',
		'id' => 'int',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'metaData' => 'map[string,string]',
		'plannedPurgeDate' => '\DateTime',
		'reference' => 'string',
		'shippingAddress' => '\Wallee\Sdk\Model\Address',
		'state' => '\Wallee\Sdk\Model\CreationEntityState',
		'version' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * Those payment methods which are allowed additionally will be available even when the product does not allow those methods.
	 *
	 * @var int[]
	 */
	private $additionalAllowedPaymentMethodConfigurations;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Address
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
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The subscriber language determines the language which is used to communicate with the subscriber in emails and documents (e.g. invoices).
	 *
	 * @var string
	 */
	private $language;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * Meta data allow to store additional data along the object.
	 *
	 * @var map[string,string]
	 */
	private $metaData;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The subscriber reference identifies the subscriber in administrative interfaces (e.g. customer id).
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $shippingAddress;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\CreationEntityState
	 */
	private $state;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['additionalAllowedPaymentMethodConfigurations'])) {
			$this->setAdditionalAllowedPaymentMethodConfigurations($data['additionalAllowedPaymentMethodConfigurations']);
		}
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['disallowedPaymentMethodConfigurations'])) {
			$this->setDisallowedPaymentMethodConfigurations($data['disallowedPaymentMethodConfigurations']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['metaData'])) {
			$this->setMetaData($data['metaData']);
		}
		if (isset($data['shippingAddress'])) {
			$this->setShippingAddress($data['shippingAddress']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
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
	 * @return Subscriber
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
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $billingAddress
	 * @return Subscriber
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
	 * @return Subscriber
	 */
	protected function setDescription($description) {
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
	 * @return Subscriber
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
	 * @return Subscriber
	 */
	protected function setEmailAddress($emailAddress) {
		$this->emailAddress = $emailAddress;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @return string
	 */
	public function getExternalId() {
		return $this->externalId;
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return Subscriber
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
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
	 * @return Subscriber
	 */
	public function setId($id) {
		$this->id = $id;

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
	 * @return Subscriber
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @return int
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param int $linkedSpaceId
	 * @return Subscriber
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

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
	 * @return Subscriber
	 */
	public function setMetaData($metaData) {
		if (is_array($metaData) && empty($metaData)) {
			$this->metaData = new \stdClass;
		} else {
			$this->metaData = $metaData;
		}

		return $this;
	}

	/**
	 * Returns plannedPurgeDate.
	 *
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
	 * @return Subscriber
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

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
	 * @return Subscriber
	 */
	protected function setReference($reference) {
		$this->reference = $reference;

		return $this;
	}

	/**
	 * Returns shippingAddress.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getShippingAddress() {
		return $this->shippingAddress;
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $shippingAddress
	 * @return Subscriber
	 */
	public function setShippingAddress($shippingAddress) {
		$this->shippingAddress = $shippingAddress;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\CreationEntityState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\CreationEntityState $state
	 * @return Subscriber
	 */
	public function setState($state) {
		$this->state = $state;

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
	 * @return Subscriber
	 */
	public function setVersion($version) {
		$this->version = $version;

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

