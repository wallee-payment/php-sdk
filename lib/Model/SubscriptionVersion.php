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
		'activatedOn' => '\DateTime',
		'billingCurrency' => 'string',
		'createdOn' => '\DateTime',
		'expectedLastPeriodEnd' => '\DateTime',
		'failedOn' => '\DateTime',
		'id' => 'int',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'plannedPurgeDate' => '\DateTime',
		'plannedTerminationDate' => '\DateTime',
		'productVersion' => '\Wallee\Sdk\Model\SubscriptionProductVersion',
		'selectedComponents' => '\Wallee\Sdk\Model\SubscriptionProductComponent[]',
		'state' => '\Wallee\Sdk\Model\SubscriptionVersionState',
		'subscription' => '\Wallee\Sdk\Model\Subscription',
		'terminatedOn' => '\DateTime',
		'terminatingOn' => '\DateTime',
		'terminationIssuedOn' => '\DateTime',
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
	 * 
	 *
	 * @var \DateTime
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
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * The expected last period end is the date on which the projected end date of the last period is. This is only a projection and as such the actual date may be different.
	 *
	 * @var \DateTime
	 */
	private $expectedLastPeriodEnd;

	/**
	 * 
	 *
	 * @var \DateTime
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
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $plannedTerminationDate;

	/**
	 * 
	 *
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
	 * @var \Wallee\Sdk\Model\SubscriptionVersionState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Subscription
	 */
	private $subscription;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $terminatedOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $terminatingOn;

	/**
	 * 
	 *
	 * @var \DateTime
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
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['productVersion'])) {
			$this->setProductVersion($data['productVersion']);
		}
		if (isset($data['selectedComponents'])) {
			$this->setSelectedComponents($data['selectedComponents']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['subscription'])) {
			$this->setSubscription($data['subscription']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns activatedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getActivatedOn() {
		return $this->activatedOn;
	}

	/**
	 * Sets activatedOn.
	 *
	 * @param \DateTime $activatedOn
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
	 * @return \DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param \DateTime $createdOn
	 * @return SubscriptionVersion
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns expectedLastPeriodEnd.
	 *
	 * The expected last period end is the date on which the projected end date of the last period is. This is only a projection and as such the actual date may be different.
	 *
	 * @return \DateTime
	 */
	public function getExpectedLastPeriodEnd() {
		return $this->expectedLastPeriodEnd;
	}

	/**
	 * Sets expectedLastPeriodEnd.
	 *
	 * @param \DateTime $expectedLastPeriodEnd
	 * @return SubscriptionVersion
	 */
	protected function setExpectedLastPeriodEnd($expectedLastPeriodEnd) {
		$this->expectedLastPeriodEnd = $expectedLastPeriodEnd;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param \DateTime $failedOn
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
	public function setId($id) {
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
	 * @return SubscriptionVersion
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

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
	 * @return \DateTime
	 */
	public function getPlannedTerminationDate() {
		return $this->plannedTerminationDate;
	}

	/**
	 * Sets plannedTerminationDate.
	 *
	 * @param \DateTime $plannedTerminationDate
	 * @return SubscriptionVersion
	 */
	protected function setPlannedTerminationDate($plannedTerminationDate) {
		$this->plannedTerminationDate = $plannedTerminationDate;

		return $this;
	}

	/**
	 * Returns productVersion.
	 *
	 * 
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
	 * @return \Wallee\Sdk\Model\SubscriptionVersionState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionVersionState $state
	 * @return SubscriptionVersion
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * 
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
	 * @return \DateTime
	 */
	public function getTerminatedOn() {
		return $this->terminatedOn;
	}

	/**
	 * Sets terminatedOn.
	 *
	 * @param \DateTime $terminatedOn
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
	 * @return \DateTime
	 */
	public function getTerminatingOn() {
		return $this->terminatingOn;
	}

	/**
	 * Sets terminatingOn.
	 *
	 * @param \DateTime $terminatingOn
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
	 * @return \DateTime
	 */
	public function getTerminationIssuedOn() {
		return $this->terminationIssuedOn;
	}

	/**
	 * Sets terminationIssuedOn.
	 *
	 * @param \DateTime $terminationIssuedOn
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

