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
		'plannedPurgeDate' => '\DateTime',
		'sortOrder' => 'int',
		'spaceReference' => '\Wallee\Sdk\Model\SpaceReference',
		'state' => '\Wallee\Sdk\Model\CreationEntityState',
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
	 * The base currency in which the installment fee and minimal amount are defined.
	 *
	 * @var string
	 */
	private $baseCurrency;

	/**
	 * If a transaction meets all selected conditions the installment plan will be available to the customer to be selected.
	 *
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
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
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
	 * A installment plan can be enabled only for specific payment method configurations. Other payment methods will not be selectable by the buyer.
	 *
	 * @var int[]
	 */
	private $paymentMethodConfigurations;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The sort order controls in which order the installation plans are listed. The sort order is used to order the plans in ascending order.
	 *
	 * @var int
	 */
	private $sortOrder;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SpaceReference
	 */
	private $spaceReference;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\CreationEntityState
	 */
	private $state;

	/**
	 * The tax class determines the taxes which are applicable on all fees linked to the installment plan.
	 *
	 * @var \Wallee\Sdk\Model\TaxClass
	 */
	private $taxClass;

	/**
	 * The terms and conditions will be displayed to the customer when he or she selects this installment plan.
	 *
	 * @var \Wallee\Sdk\Model\ModelResourcePath
	 */
	private $termsAndConditions;

	/**
	 * The title of the installment plan is used within the payment process. The title is visible to the buyer.
	 *
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
		if (isset($data['conditions'])) {
			$this->setConditions($data['conditions']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['paymentMethodConfigurations'])) {
			$this->setPaymentMethodConfigurations($data['paymentMethodConfigurations']);
		}
		if (isset($data['spaceReference'])) {
			$this->setSpaceReference($data['spaceReference']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['taxClass'])) {
			$this->setTaxClass($data['taxClass']);
		}
		if (isset($data['termsAndConditions'])) {
			$this->setTermsAndConditions($data['termsAndConditions']);
		}
		if (isset($data['title'])) {
			$this->setTitle($data['title']);
		}
		if (isset($data['version'])) {
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
	 * If a transaction meets all selected conditions the installment plan will be available to the customer to be selected.
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
	 * @return InstallmentPlanConfiguration
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
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
	 * A installment plan can be enabled only for specific payment method configurations. Other payment methods will not be selectable by the buyer.
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
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
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
	 * 
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
	 * @return \Wallee\Sdk\Model\CreationEntityState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\CreationEntityState $state
	 * @return InstallmentPlanConfiguration
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns taxClass.
	 *
	 * The tax class determines the taxes which are applicable on all fees linked to the installment plan.
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
	 * The terms and conditions will be displayed to the customer when he or she selects this installment plan.
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
	 * The title of the installment plan is used within the payment process. The title is visible to the buyer.
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

