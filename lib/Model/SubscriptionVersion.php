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
 * SubscriptionVersion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionVersion  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionVersion';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'activatedOn' => 'string',
		'billingCurrency' => 'string',
		'createdOn' => 'string',
		'failedOn' => 'string',
		'id' => 'int',
		'language' => 'string',
		'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
		'plannedPurgeDate' => 'string',
		'plannedTerminationDate' => 'string',
		'productVersion' => '\Wallee\Sdk\Model\SubscriptionProductVersion',
		'selectedComponents' => '\Wallee\Sdk\Model\SubscriptionProductComponent[]',
		'state' => 'string',
		'subscription' => '\Wallee\Sdk\Model\Subscription',
		'terminatedOn' => 'string',
		'terminatingOn' => 'string',
		'terminationIssuedOn' => 'string',
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
	 * Values of state.
	 */
	const STATE_PENDING = 'PENDING';
	const STATE_INITIALIZING = 'INITIALIZING';
	const STATE_FAILED = 'FAILED';
	const STATE_ACTIVE = 'ACTIVE';
	const STATE_TERMINATING = 'TERMINATING';
	const STATE_TERMINATED = 'TERMINATED';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_PENDING,
			self::STATE_INITIALIZING,
			self::STATE_FAILED,
			self::STATE_ACTIVE,
			self::STATE_TERMINATING,
			self::STATE_TERMINATED,
		];
	}
	

	/**
	 * 
	 *
	 * @var string
	 */
	private $activatedOn;

	/**
	 * The subscriber is charged in the billing currency. The billing currency has to be one of the enabled currencies on the subscription product.
	 *
	 * @var string
	 */
	private $billingCurrency;

	/**
	 * 
	 *
	 * @var string
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $failedOn;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var string
	 */
	private $language;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $linkedSpaceId;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var string
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var string
	 */
	private $plannedTerminationDate;

	/**
	 * @var \Wallee\Sdk\Model\SubscriptionProductVersion
	 */
	private $productVersion;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionProductComponent[]
	 */
	private $selectedComponents;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * @var \Wallee\Sdk\Model\Subscription
	 */
	private $subscription;

	/**
	 * 
	 *
	 * @var string
	 */
	private $terminatedOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $terminatingOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $terminationIssuedOn;

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
		$this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
		$this->setProductVersion(isset($data['productVersion']) ? $data['productVersion'] : null);
		$this->setSelectedComponents(isset($data['selectedComponents']) ? $data['selectedComponents'] : null);
		$this->setSubscription(isset($data['subscription']) ? $data['subscription'] : null);
	}


	/**
	 * Returns activatedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getActivatedOn() {
		return $this->activatedOn;
	}

	/**
	 * Sets activatedOn.
	 *
	 * @param string $activatedOn
	 * @return SubscriptionVersion
	 */
	protected function setActivatedOn($activatedOn) {
		$this->activatedOn = $activatedOn;

		return $this;
	}

	/**
	 * Returns billingCurrency.
	 *
	 * The subscriber is charged in the billing currency. The billing currency has to be one of the enabled currencies on the subscription product.
	 *
	 * @return string
	 */
	public function getBillingCurrency() {
		return $this->billingCurrency;
	}

	/**
	 * Sets billingCurrency.
	 *
	 * @param string $billingCurrency
	 * @return SubscriptionVersion
	 */
	protected function setBillingCurrency($billingCurrency) {
		$this->billingCurrency = $billingCurrency;

		return $this;
	}

	/**
	 * Returns createdOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param string $createdOn
	 * @return SubscriptionVersion
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param string $failedOn
	 * @return SubscriptionVersion
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

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
	 * @return SubscriptionVersion
	 */
	protected function setId($id) {
		$this->id = $id;

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
	 * @return SubscriptionVersion
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $linkedSpaceId
	 * @return SubscriptionVersion
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns plannedPurgeDate.
	 *
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @return string
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param string $plannedPurgeDate
	 * @return SubscriptionVersion
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns plannedTerminationDate.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPlannedTerminationDate() {
		return $this->plannedTerminationDate;
	}

	/**
	 * Sets plannedTerminationDate.
	 *
	 * @param string $plannedTerminationDate
	 * @return SubscriptionVersion
	 */
	protected function setPlannedTerminationDate($plannedTerminationDate) {
		$this->plannedTerminationDate = $plannedTerminationDate;

		return $this;
	}

	/**
	 * Returns productVersion.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductVersion
	 */
	public function getProductVersion() {
		return $this->productVersion;
	}

	/**
	 * Sets productVersion.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductVersion $productVersion
	 * @return SubscriptionVersion
	 */
	public function setProductVersion($productVersion) {
		$this->productVersion = $productVersion;

		return $this;
	}

	/**
	 * Returns selectedComponents.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductComponent[]
	 */
	public function getSelectedComponents() {
		return $this->selectedComponents;
	}

	/**
	 * Sets selectedComponents.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductComponent[] $selectedComponents
	 * @return SubscriptionVersion
	 */
	public function setSelectedComponents($selectedComponents) {
		$this->selectedComponents = $selectedComponents;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param string $state
	 * @return SubscriptionVersion
	 */
	protected function setState($state) {
		$allowed_values = array('PENDING', 'INITIALIZING', 'FAILED', 'ACTIVE', 'TERMINATING', 'TERMINATED');
		if ((!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'PENDING', 'INITIALIZING', 'FAILED', 'ACTIVE', 'TERMINATING', 'TERMINATED'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * @return \Wallee\Sdk\Model\Subscription
	 */
	public function getSubscription() {
		return $this->subscription;
	}

	/**
	 * Sets subscription.
	 *
	 * @param \Wallee\Sdk\Model\Subscription $subscription
	 * @return SubscriptionVersion
	 */
	public function setSubscription($subscription) {
		$this->subscription = $subscription;

		return $this;
	}

	/**
	 * Returns terminatedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTerminatedOn() {
		return $this->terminatedOn;
	}

	/**
	 * Sets terminatedOn.
	 *
	 * @param string $terminatedOn
	 * @return SubscriptionVersion
	 */
	protected function setTerminatedOn($terminatedOn) {
		$this->terminatedOn = $terminatedOn;

		return $this;
	}

	/**
	 * Returns terminatingOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTerminatingOn() {
		return $this->terminatingOn;
	}

	/**
	 * Sets terminatingOn.
	 *
	 * @param string $terminatingOn
	 * @return SubscriptionVersion
	 */
	protected function setTerminatingOn($terminatingOn) {
		$this->terminatingOn = $terminatingOn;

		return $this;
	}

	/**
	 * Returns terminationIssuedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTerminationIssuedOn() {
		return $this->terminationIssuedOn;
	}

	/**
	 * Sets terminationIssuedOn.
	 *
	 * @param string $terminationIssuedOn
	 * @return SubscriptionVersion
	 */
	protected function setTerminationIssuedOn($terminationIssuedOn) {
		$this->terminationIssuedOn = $terminationIssuedOn;

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
	 * @return SubscriptionVersion
	 */
	protected function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getBillingCurrency() === null) {
			throw new ValidationException("'billingCurrency' can't be null", 'billingCurrency', $this);
		}
		if ($this->getCreatedOn() === null) {
			throw new ValidationException("'createdOn' can't be null", 'createdOn', $this);
		}
		if ($this->getState() === null) {
			throw new ValidationException("'state' can't be null", 'state', $this);
		}
		$allowed_values = ["PENDING", "INITIALIZING", "FAILED", "ACTIVE", "TERMINATING", "TERMINATED"];
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
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
