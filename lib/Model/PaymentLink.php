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
 * PaymentLink model
 *
 * @category    Class
 * @description The payment link defines an URL to automatically create transactions.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentLink  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentLink';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'allowedPaymentMethodConfigurations' => '\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
		'appliedSpaceView' => 'int',
		'availableFrom' => '\DateTime',
		'availableUntil' => '\DateTime',
		'billingAddressRequired' => 'bool',
		'currency' => 'string',
		'externalId' => 'string',
		'id' => 'int',
		'language' => 'string',
		'lineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'linkedSpaceId' => 'int',
		'maximalNumberOfTransactions' => 'int',
		'name' => 'string',
		'plannedPurgeDate' => '\DateTime',
		'protectionMode' => '\Wallee\Sdk\Model\PaymentLinkProtectionMode',
		'shippingAddressRequired' => 'bool',
		'state' => '\Wallee\Sdk\Model\CreationEntityState',
		'url' => 'string',
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
	 * The allowed payment method configurations restrict the payment methods which can be used with this payment link.
	 *
	 * @var \Wallee\Sdk\Model\PaymentMethodConfiguration[]
	 */
	private $allowedPaymentMethodConfigurations;

	/**
	 * The payment link can be conducted in a specific space view. The space view may apply a specific design to the payment page.
	 *
	 * @var int
	 */
	private $appliedSpaceView;

	/**
	 * The available from date defines the earliest date on which the payment link can be used. When no date is specified there will be no restriction.
	 *
	 * @var \DateTime
	 */
	private $availableFrom;

	/**
	 * The available from date defines the latest date on which the payment link can be used to initialize a transaction. When no date is specified there will be no restriction.
	 *
	 * @var \DateTime
	 */
	private $availableUntil;

	/**
	 * By making the billing address required the transaction can only be created when a billing address is provided within the request.
	 *
	 * @var bool
	 */
	private $billingAddressRequired;

	/**
	 * The currency defines in which currency the payment is executed in. If no currency is defined it has to be specified within the request parameter 'currency'.
	 *
	 * @var string
	 */
	private $currency;

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
	 * The language defines the language of the payment page. If no language is provided it can be provided through the request parameter.
	 *
	 * @var string
	 */
	private $language;

	/**
	 * The line items allows to define the line items for this payment link. When the line items are defined they cannot be overridden through the request parameters.
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $lineItems;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The maximal number of transactions limits the number of transactions which can be created with this payment link.
	 *
	 * @var int
	 */
	private $maximalNumberOfTransactions;

	/**
	 * The payment link name is used internally to identify the payment link. For example the name is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The protection mode determines if the payment link is protected against tampering and in what way.
	 *
	 * @var \Wallee\Sdk\Model\PaymentLinkProtectionMode
	 */
	private $protectionMode;

	/**
	 * By making the shipping address required the transaction can only be created when a shipping address is provided within the request.
	 *
	 * @var bool
	 */
	private $shippingAddressRequired;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\CreationEntityState
	 */
	private $state;

	/**
	 * The URL defines the URL to which the user has to be forwarded to initialize the payment.
	 *
	 * @var string
	 */
	private $url;

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
		if (isset($data['allowedPaymentMethodConfigurations'])) {
			$this->setAllowedPaymentMethodConfigurations($data['allowedPaymentMethodConfigurations']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['protectionMode'])) {
			$this->setProtectionMode($data['protectionMode']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns allowedPaymentMethodConfigurations.
	 *
	 * The allowed payment method configurations restrict the payment methods which can be used with this payment link.
	 *
	 * @return \Wallee\Sdk\Model\PaymentMethodConfiguration[]
	 */
	public function getAllowedPaymentMethodConfigurations() {
		return $this->allowedPaymentMethodConfigurations;
	}

	/**
	 * Sets allowedPaymentMethodConfigurations.
	 *
	 * @param \Wallee\Sdk\Model\PaymentMethodConfiguration[] $allowedPaymentMethodConfigurations
	 * @return PaymentLink
	 */
	public function setAllowedPaymentMethodConfigurations($allowedPaymentMethodConfigurations) {
		$this->allowedPaymentMethodConfigurations = $allowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns appliedSpaceView.
	 *
	 * The payment link can be conducted in a specific space view. The space view may apply a specific design to the payment page.
	 *
	 * @return int
	 */
	public function getAppliedSpaceView() {
		return $this->appliedSpaceView;
	}

	/**
	 * Sets appliedSpaceView.
	 *
	 * @param int $appliedSpaceView
	 * @return PaymentLink
	 */
	protected function setAppliedSpaceView($appliedSpaceView) {
		$this->appliedSpaceView = $appliedSpaceView;

		return $this;
	}

	/**
	 * Returns availableFrom.
	 *
	 * The available from date defines the earliest date on which the payment link can be used. When no date is specified there will be no restriction.
	 *
	 * @return \DateTime
	 */
	public function getAvailableFrom() {
		return $this->availableFrom;
	}

	/**
	 * Sets availableFrom.
	 *
	 * @param \DateTime $availableFrom
	 * @return PaymentLink
	 */
	protected function setAvailableFrom($availableFrom) {
		$this->availableFrom = $availableFrom;

		return $this;
	}

	/**
	 * Returns availableUntil.
	 *
	 * The available from date defines the latest date on which the payment link can be used to initialize a transaction. When no date is specified there will be no restriction.
	 *
	 * @return \DateTime
	 */
	public function getAvailableUntil() {
		return $this->availableUntil;
	}

	/**
	 * Sets availableUntil.
	 *
	 * @param \DateTime $availableUntil
	 * @return PaymentLink
	 */
	protected function setAvailableUntil($availableUntil) {
		$this->availableUntil = $availableUntil;

		return $this;
	}

	/**
	 * Returns billingAddressRequired.
	 *
	 * By making the billing address required the transaction can only be created when a billing address is provided within the request.
	 *
	 * @return bool
	 */
	public function getBillingAddressRequired() {
		return $this->billingAddressRequired;
	}

	/**
	 * Sets billingAddressRequired.
	 *
	 * @param bool $billingAddressRequired
	 * @return PaymentLink
	 */
	protected function setBillingAddressRequired($billingAddressRequired) {
		$this->billingAddressRequired = $billingAddressRequired;

		return $this;
	}

	/**
	 * Returns currency.
	 *
	 * The currency defines in which currency the payment is executed in. If no currency is defined it has to be specified within the request parameter 'currency'.
	 *
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Sets currency.
	 *
	 * @param string $currency
	 * @return PaymentLink
	 */
	protected function setCurrency($currency) {
		$this->currency = $currency;

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
	 * @return PaymentLink
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
	 * @return PaymentLink
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * The language defines the language of the payment page. If no language is provided it can be provided through the request parameter.
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
	 * @return PaymentLink
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * The line items allows to define the line items for this payment link. When the line items are defined they cannot be overridden through the request parameters.
	 *
	 * @return \Wallee\Sdk\Model\LineItem[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItem[] $lineItems
	 * @return PaymentLink
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

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
	 * @return PaymentLink
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns maximalNumberOfTransactions.
	 *
	 * The maximal number of transactions limits the number of transactions which can be created with this payment link.
	 *
	 * @return int
	 */
	public function getMaximalNumberOfTransactions() {
		return $this->maximalNumberOfTransactions;
	}

	/**
	 * Sets maximalNumberOfTransactions.
	 *
	 * @param int $maximalNumberOfTransactions
	 * @return PaymentLink
	 */
	protected function setMaximalNumberOfTransactions($maximalNumberOfTransactions) {
		$this->maximalNumberOfTransactions = $maximalNumberOfTransactions;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The payment link name is used internally to identify the payment link. For example the name is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param string $name
	 * @return PaymentLink
	 */
	protected function setName($name) {
		$this->name = $name;

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
	 * @return PaymentLink
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns protectionMode.
	 *
	 * The protection mode determines if the payment link is protected against tampering and in what way.
	 *
	 * @return \Wallee\Sdk\Model\PaymentLinkProtectionMode
	 */
	public function getProtectionMode() {
		return $this->protectionMode;
	}

	/**
	 * Sets protectionMode.
	 *
	 * @param \Wallee\Sdk\Model\PaymentLinkProtectionMode $protectionMode
	 * @return PaymentLink
	 */
	public function setProtectionMode($protectionMode) {
		$this->protectionMode = $protectionMode;

		return $this;
	}

	/**
	 * Returns shippingAddressRequired.
	 *
	 * By making the shipping address required the transaction can only be created when a shipping address is provided within the request.
	 *
	 * @return bool
	 */
	public function getShippingAddressRequired() {
		return $this->shippingAddressRequired;
	}

	/**
	 * Sets shippingAddressRequired.
	 *
	 * @param bool $shippingAddressRequired
	 * @return PaymentLink
	 */
	protected function setShippingAddressRequired($shippingAddressRequired) {
		$this->shippingAddressRequired = $shippingAddressRequired;

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
	 * @return PaymentLink
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns url.
	 *
	 * The URL defines the URL to which the user has to be forwarded to initialize the payment.
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets url.
	 *
	 * @param string $url
	 * @return PaymentLink
	 */
	protected function setUrl($url) {
		$this->url = $url;

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
	 * @return PaymentLink
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

