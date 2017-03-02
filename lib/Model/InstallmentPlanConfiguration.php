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
 * InstallmentPlanConfiguration model
 *
 * @category    Class
 * @description The installment plan allows to setup a template for an installment.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class InstallmentPlanConfiguration  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'InstallmentPlanConfiguration';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'baseCurrency' => 'string',
		'conditions' => 'int[]',
		'id' => 'int',
		'installmentFee' => 'float',
		'interestRate' => 'float',
		'linkedSpaceId' => 'int',
		'minimalAmount' => 'float',
		'name' => 'string',
		'paymentMethodConfigurations' => 'int[]',
		'plannedPurgeDate' => 'string',
		'sortOrder' => 'int',
		'spaceReference' => '\Wallee\Sdk\Model\SpaceReference',
		'state' => 'string',
		'taxClass' => '\Wallee\Sdk\Model\TaxClass',
		'termsAndConditions' => '\Wallee\Sdk\Model\ModelResourcePath',
		'title' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
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
	const STATE_CREATE = 'CREATE';
	const STATE_ACTIVE = 'ACTIVE';
	const STATE_INACTIVE = 'INACTIVE';
	const STATE_DELETING = 'DELETING';
	const STATE_DELETED = 'DELETED';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_CREATE,
			self::STATE_ACTIVE,
			self::STATE_INACTIVE,
			self::STATE_DELETING,
			self::STATE_DELETED,
		];
	}
	

	/**
	 * The base currency in which the installment fee and minimal amount are defined.
	 *
	 * @var string
	 */
	private $baseCurrency;

	/**
	 * @var int[]
	 */
	private $conditions;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The installment fee is a fixed amount that is charged additionally when applying this installment plan.
	 *
	 * @var float
	 */
	private $installmentFee;

	/**
	 * The interest rate is a percentage of the total amount that is charged additionally when applying this installment plan.
	 *
	 * @var float
	 */
	private $interestRate;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The installment plan can only be applied if the orders total is at least the defined minimal amount.
	 *
	 * @var float
	 */
	private $minimalAmount;

	/**
	 * The installment plan name is used internally to identify the plan in administrative interfaces.For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @var int[]
	 */
	private $paymentMethodConfigurations;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var string
	 */
	private $plannedPurgeDate;

	/**
	 * The sort order controls in which order the installation plans are listed. The sort order is used to order the plans in ascending order.
	 *
	 * @var int
	 */
	private $sortOrder;

	/**
	 * @var \Wallee\Sdk\Model\SpaceReference
	 */
	private $spaceReference;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * @var \Wallee\Sdk\Model\TaxClass
	 */
	private $taxClass;

	/**
	 * @var \Wallee\Sdk\Model\ModelResourcePath
	 */
	private $termsAndConditions;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $title;

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
		if (isset($data['conditions']) && $data['conditions'] != null) {
			$this->setConditions($data['conditions']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['paymentMethodConfigurations']) && $data['paymentMethodConfigurations'] != null) {
			$this->setPaymentMethodConfigurations($data['paymentMethodConfigurations']);
		}
		if (isset($data['spaceReference']) && $data['spaceReference'] != null) {
			$this->setSpaceReference($data['spaceReference']);
		}
		if (isset($data['taxClass']) && $data['taxClass'] != null) {
			$this->setTaxClass($data['taxClass']);
		}
		if (isset($data['termsAndConditions']) && $data['termsAndConditions'] != null) {
			$this->setTermsAndConditions($data['termsAndConditions']);
		}
		if (isset($data['title']) && $data['title'] != null) {
			$this->setTitle($data['title']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns baseCurrency.
	 *
	 * The base currency in which the installment fee and minimal amount are defined.
	 *
	 * @return string
	 */
	public function getBaseCurrency() {
		return $this->baseCurrency;
	}

	/**
	 * Sets baseCurrency.
	 *
	 * @param string $baseCurrency
	 * @return InstallmentPlanConfiguration
	 */
	protected function setBaseCurrency($baseCurrency) {
		$this->baseCurrency = $baseCurrency;

		return $this;
	}

	/**
	 * Returns conditions.
	 *
	 * @return int[]
	 */
	public function getConditions() {
		return $this->conditions;
	}

	/**
	 * Sets conditions.
	 *
	 * @param int[] $conditions
	 * @return InstallmentPlanConfiguration
	 */
	public function setConditions($conditions) {
		$this->conditions = $conditions;

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
	 * @return InstallmentPlanConfiguration
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns installmentFee.
	 *
	 * The installment fee is a fixed amount that is charged additionally when applying this installment plan.
	 *
	 * @return float
	 */
	public function getInstallmentFee() {
		return $this->installmentFee;
	}

	/**
	 * Sets installmentFee.
	 *
	 * @param float $installmentFee
	 * @return InstallmentPlanConfiguration
	 */
	protected function setInstallmentFee($installmentFee) {
		$this->installmentFee = $installmentFee;

		return $this;
	}

	/**
	 * Returns interestRate.
	 *
	 * The interest rate is a percentage of the total amount that is charged additionally when applying this installment plan.
	 *
	 * @return float
	 */
	public function getInterestRate() {
		return $this->interestRate;
	}

	/**
	 * Sets interestRate.
	 *
	 * @param float $interestRate
	 * @return InstallmentPlanConfiguration
	 */
	protected function setInterestRate($interestRate) {
		$this->interestRate = $interestRate;

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
	 * @return InstallmentPlanConfiguration
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns minimalAmount.
	 *
	 * The installment plan can only be applied if the orders total is at least the defined minimal amount.
	 *
	 * @return float
	 */
	public function getMinimalAmount() {
		return $this->minimalAmount;
	}

	/**
	 * Sets minimalAmount.
	 *
	 * @param float $minimalAmount
	 * @return InstallmentPlanConfiguration
	 */
	protected function setMinimalAmount($minimalAmount) {
		$this->minimalAmount = $minimalAmount;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The installment plan name is used internally to identify the plan in administrative interfaces.For example it is used within search fields and hence it should be distinct and descriptive.
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
	 * @return InstallmentPlanConfiguration
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns paymentMethodConfigurations.
	 *
	 * @return int[]
	 */
	public function getPaymentMethodConfigurations() {
		return $this->paymentMethodConfigurations;
	}

	/**
	 * Sets paymentMethodConfigurations.
	 *
	 * @param int[] $paymentMethodConfigurations
	 * @return InstallmentPlanConfiguration
	 */
	public function setPaymentMethodConfigurations($paymentMethodConfigurations) {
		$this->paymentMethodConfigurations = $paymentMethodConfigurations;

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
	 * @return InstallmentPlanConfiguration
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns sortOrder.
	 *
	 * The sort order controls in which order the installation plans are listed. The sort order is used to order the plans in ascending order.
	 *
	 * @return int
	 */
	public function getSortOrder() {
		return $this->sortOrder;
	}

	/**
	 * Sets sortOrder.
	 *
	 * @param int $sortOrder
	 * @return InstallmentPlanConfiguration
	 */
	protected function setSortOrder($sortOrder) {
		$this->sortOrder = $sortOrder;

		return $this;
	}

	/**
	 * Returns spaceReference.
	 *
	 * @return \Wallee\Sdk\Model\SpaceReference
	 */
	public function getSpaceReference() {
		return $this->spaceReference;
	}

	/**
	 * Sets spaceReference.
	 *
	 * @param \Wallee\Sdk\Model\SpaceReference $spaceReference
	 * @return InstallmentPlanConfiguration
	 */
	public function setSpaceReference($spaceReference) {
		$this->spaceReference = $spaceReference;

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
	 * @return InstallmentPlanConfiguration
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED');
		if ((!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns taxClass.
	 *
	 * @return \Wallee\Sdk\Model\TaxClass
	 */
	public function getTaxClass() {
		return $this->taxClass;
	}

	/**
	 * Sets taxClass.
	 *
	 * @param \Wallee\Sdk\Model\TaxClass $taxClass
	 * @return InstallmentPlanConfiguration
	 */
	public function setTaxClass($taxClass) {
		$this->taxClass = $taxClass;

		return $this;
	}

	/**
	 * Returns termsAndConditions.
	 *
	 * @return \Wallee\Sdk\Model\ModelResourcePath
	 */
	public function getTermsAndConditions() {
		return $this->termsAndConditions;
	}

	/**
	 * Sets termsAndConditions.
	 *
	 * @param \Wallee\Sdk\Model\ModelResourcePath $termsAndConditions
	 * @return InstallmentPlanConfiguration
	 */
	public function setTermsAndConditions($termsAndConditions) {
		$this->termsAndConditions = $termsAndConditions;

		return $this;
	}

	/**
	 * Returns title.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets title.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $title
	 * @return InstallmentPlanConfiguration
	 */
	public function setTitle($title) {
		$this->title = $title;

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
	 * @return InstallmentPlanConfiguration
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

		if ($this->getBaseCurrency() === null) {
			throw new ValidationException("'baseCurrency' can't be null", 'baseCurrency', $this);
		}
		if ($this->getInstallmentFee() === null) {
			throw new ValidationException("'installmentFee' can't be null", 'installmentFee', $this);
		}
		if ($this->getInterestRate() === null) {
			throw new ValidationException("'interestRate' can't be null", 'interestRate', $this);
		}
		if ($this->getMinimalAmount() === null) {
			throw new ValidationException("'minimalAmount' can't be null", 'minimalAmount', $this);
		}
		if ($this->getName() === null) {
			throw new ValidationException("'name' can't be null", 'name', $this);
		}
		if ($this->getState() === null) {
			throw new ValidationException("'state' can't be null", 'state', $this);
		}
		$allowed_values = ["CREATE", "ACTIVE", "INACTIVE", "DELETING", "DELETED"];
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

