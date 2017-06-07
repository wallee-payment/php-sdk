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
 * SubscriptionProductVersionPending model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductVersionPending  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductVersion.Pending';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'activatedOn' => '\DateTime',
		'billingCycle' => 'string',
		'comment' => 'string',
		'createdOn' => '\DateTime',
		'defaultCurrency' => 'string',
		'enabledCurrencies' => 'string[]',
		'id' => 'int',
		'incrementNumber' => 'int',
		'linkedSpaceId' => 'int',
		'minimalNumberOfPeriods' => 'int',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedStringUpdate',
		'numberOfNoticePeriods' => 'int',
		'obsoletedOn' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'product' => '\Wallee\Sdk\Model\SubscriptionProduct',
		'reference' => 'string',
		'retiringFinishedOn' => '\DateTime',
		'retiringStartedOn' => '\DateTime',
		'state' => 'string',
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
	const STATE_ACTIVE = 'ACTIVE';
	const STATE_OBSOLETE = 'OBSOLETE';
	const STATE_RETIRING = 'RETIRING';
	const STATE_RETIRED = 'RETIRED';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return array(
			self::STATE_PENDING,
			self::STATE_ACTIVE,
			self::STATE_OBSOLETE,
			self::STATE_RETIRING,
			self::STATE_RETIRED,
		);
	}
	

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $activatedOn;

	/**
	 * The billing cycle determines the rhythm with which the subscriber is billed. The charging may have different rhythm.
	 *
	 * @var string
	 */
	private $billingCycle;

	/**
	 * The comment allows to provide a internal comment for the version. It helps to document why a product was changed. The comment is not disclosed to the subscriber.
	 *
	 * @var string
	 */
	private $comment;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * The default currency has to be used in all fees.
	 *
	 * @var string
	 */
	private $defaultCurrency;

	/**
	 * The currencies which are enabled can be selected to define component fees. Currencies which are not enabled cannot be used to define fees.
	 *
	 * @var string[]
	 */
	private $enabledCurrencies;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The increment number represents the version number incremented whenever a new version is activated.
	 *
	 * @var int
	 */
	private $incrementNumber;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The minimal number of periods determines how long the subscription has to run before the subscription can be terminated.
	 *
	 * @var int
	 */
	private $minimalNumberOfPeriods;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate
	 */
	private $name;

	/**
	 * The number of notice periods determines the number of periods which need to be paid between the request to terminate the subscription and the final period.
	 *
	 * @var int
	 */
	private $numberOfNoticePeriods;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $obsoletedOn;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * @var \Wallee\Sdk\Model\SubscriptionProduct
	 */
	private $product;

	/**
	 * The product version reference helps to identify the version. The reference is generated out of the product reference.
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $retiringFinishedOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $retiringStartedOn;

	/**
	 * 
	 *
	 * @var string
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
		if (isset($data['billingCycle']) && $data['billingCycle'] != null) {
			$this->setBillingCycle($data['billingCycle']);
		}
		if (isset($data['comment']) && $data['comment'] != null) {
			$this->setComment($data['comment']);
		}
		if (isset($data['defaultCurrency']) && $data['defaultCurrency'] != null) {
			$this->setDefaultCurrency($data['defaultCurrency']);
		}
		if (isset($data['enabledCurrencies']) && $data['enabledCurrencies'] != null) {
			$this->setEnabledCurrencies($data['enabledCurrencies']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['minimalNumberOfPeriods']) && $data['minimalNumberOfPeriods'] != null) {
			$this->setMinimalNumberOfPeriods($data['minimalNumberOfPeriods']);
		}
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['numberOfNoticePeriods']) && $data['numberOfNoticePeriods'] != null) {
			$this->setNumberOfNoticePeriods($data['numberOfNoticePeriods']);
		}
		if (isset($data['product']) && $data['product'] != null) {
			$this->setProduct($data['product']);
		}
		if (isset($data['state']) && $data['state'] != null) {
			$this->setState($data['state']);
		}
		if (isset($data['version']) && $data['version'] != null) {
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
	 * @return SubscriptionProductVersionPending
	 */
	protected function setActivatedOn($activatedOn) {
		$this->activatedOn = $activatedOn;

		return $this;
	}

	/**
	 * Returns billingCycle.
	 *
	 * The billing cycle determines the rhythm with which the subscriber is billed. The charging may have different rhythm.
	 *
	 * @return string
	 */
	public function getBillingCycle() {
		return $this->billingCycle;
	}

	/**
	 * Sets billingCycle.
	 *
	 * @param string $billingCycle
	 * @return SubscriptionProductVersionPending
	 */
	public function setBillingCycle($billingCycle) {
		$this->billingCycle = $billingCycle;

		return $this;
	}

	/**
	 * Returns comment.
	 *
	 * The comment allows to provide a internal comment for the version. It helps to document why a product was changed. The comment is not disclosed to the subscriber.
	 *
	 * @return string
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Sets comment.
	 *
	 * @param string $comment
	 * @return SubscriptionProductVersionPending
	 */
	public function setComment($comment) {
		$this->comment = $comment;

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
	 * @return SubscriptionProductVersionPending
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns defaultCurrency.
	 *
	 * The default currency has to be used in all fees.
	 *
	 * @return string
	 */
	public function getDefaultCurrency() {
		return $this->defaultCurrency;
	}

	/**
	 * Sets defaultCurrency.
	 *
	 * @param string $defaultCurrency
	 * @return SubscriptionProductVersionPending
	 */
	public function setDefaultCurrency($defaultCurrency) {
		$this->defaultCurrency = $defaultCurrency;

		return $this;
	}

	/**
	 * Returns enabledCurrencies.
	 *
	 * The currencies which are enabled can be selected to define component fees. Currencies which are not enabled cannot be used to define fees.
	 *
	 * @return string[]
	 */
	public function getEnabledCurrencies() {
		return $this->enabledCurrencies;
	}

	/**
	 * Sets enabledCurrencies.
	 *
	 * @param string[] $enabledCurrencies
	 * @return SubscriptionProductVersionPending
	 */
	public function setEnabledCurrencies($enabledCurrencies) {
		$this->enabledCurrencies = $enabledCurrencies;

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
	 * @return SubscriptionProductVersionPending
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns incrementNumber.
	 *
	 * The increment number represents the version number incremented whenever a new version is activated.
	 *
	 * @return int
	 */
	public function getIncrementNumber() {
		return $this->incrementNumber;
	}

	/**
	 * Sets incrementNumber.
	 *
	 * @param int $incrementNumber
	 * @return SubscriptionProductVersionPending
	 */
	protected function setIncrementNumber($incrementNumber) {
		$this->incrementNumber = $incrementNumber;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
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
	 * @return SubscriptionProductVersionPending
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns minimalNumberOfPeriods.
	 *
	 * The minimal number of periods determines how long the subscription has to run before the subscription can be terminated.
	 *
	 * @return int
	 */
	public function getMinimalNumberOfPeriods() {
		return $this->minimalNumberOfPeriods;
	}

	/**
	 * Sets minimalNumberOfPeriods.
	 *
	 * @param int $minimalNumberOfPeriods
	 * @return SubscriptionProductVersionPending
	 */
	public function setMinimalNumberOfPeriods($minimalNumberOfPeriods) {
		$this->minimalNumberOfPeriods = $minimalNumberOfPeriods;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate $name
	 * @return SubscriptionProductVersionPending
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns numberOfNoticePeriods.
	 *
	 * The number of notice periods determines the number of periods which need to be paid between the request to terminate the subscription and the final period.
	 *
	 * @return int
	 */
	public function getNumberOfNoticePeriods() {
		return $this->numberOfNoticePeriods;
	}

	/**
	 * Sets numberOfNoticePeriods.
	 *
	 * @param int $numberOfNoticePeriods
	 * @return SubscriptionProductVersionPending
	 */
	public function setNumberOfNoticePeriods($numberOfNoticePeriods) {
		$this->numberOfNoticePeriods = $numberOfNoticePeriods;

		return $this;
	}

	/**
	 * Returns obsoletedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getObsoletedOn() {
		return $this->obsoletedOn;
	}

	/**
	 * Sets obsoletedOn.
	 *
	 * @param \DateTime $obsoletedOn
	 * @return SubscriptionProductVersionPending
	 */
	protected function setObsoletedOn($obsoletedOn) {
		$this->obsoletedOn = $obsoletedOn;

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
	 * @return SubscriptionProductVersionPending
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns product.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProduct
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * Sets product.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProduct $product
	 * @return SubscriptionProductVersionPending
	 */
	public function setProduct($product) {
		$this->product = $product;

		return $this;
	}

	/**
	 * Returns reference.
	 *
	 * The product version reference helps to identify the version. The reference is generated out of the product reference.
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
	 * @return SubscriptionProductVersionPending
	 */
	protected function setReference($reference) {
		$this->reference = $reference;

		return $this;
	}

	/**
	 * Returns retiringFinishedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getRetiringFinishedOn() {
		return $this->retiringFinishedOn;
	}

	/**
	 * Sets retiringFinishedOn.
	 *
	 * @param \DateTime $retiringFinishedOn
	 * @return SubscriptionProductVersionPending
	 */
	protected function setRetiringFinishedOn($retiringFinishedOn) {
		$this->retiringFinishedOn = $retiringFinishedOn;

		return $this;
	}

	/**
	 * Returns retiringStartedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getRetiringStartedOn() {
		return $this->retiringStartedOn;
	}

	/**
	 * Sets retiringStartedOn.
	 *
	 * @param \DateTime $retiringStartedOn
	 * @return SubscriptionProductVersionPending
	 */
	protected function setRetiringStartedOn($retiringStartedOn) {
		$this->retiringStartedOn = $retiringStartedOn;

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
	 * @return SubscriptionProductVersionPending
	 */
	public function setState($state) {
		$allowed_values = array('PENDING', 'ACTIVE', 'OBSOLETE', 'RETIRING', 'RETIRED');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'PENDING', 'ACTIVE', 'OBSOLETE', 'RETIRING', 'RETIRED'");
		}
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
	 * @return SubscriptionProductVersionPending
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

		if ($this->getBillingCycle() === null) {
			throw new ValidationException("'billingCycle' can't be null", 'billingCycle', $this);
		}
		if ($this->getDefaultCurrency() === null) {
			throw new ValidationException("'defaultCurrency' can't be null", 'defaultCurrency', $this);
		}
		if ($this->getEnabledCurrencies() === null) {
			throw new ValidationException("'enabledCurrencies' can't be null", 'enabledCurrencies', $this);
		}
		$allowed_values = array("PENDING", "ACTIVE", "OBSOLETE", "RETIRING", "RETIRED");
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

