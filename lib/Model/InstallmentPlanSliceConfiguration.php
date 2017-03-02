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
 * InstallmentPlanSliceConfiguration model
 *
 * @category    Class
 * @description The installment plan slice defines a single slice of an installment plan.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class InstallmentPlanSliceConfiguration  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'InstallmentPlanSliceConfiguration';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'id' => 'int',
		'lineItemTitle' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'linkedSpaceId' => 'int',
		'period' => 'string',
		'plan' => '\Wallee\Sdk\Model\InstallmentPlanConfiguration',
		'plannedPurgeDate' => 'string',
		'priority' => 'int',
		'proportion' => 'float',
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
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $lineItemTitle;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The period defines how much time passes between the last slice and this slice. The charge is triggered at the end of the period. When the slice should be charged immediately the period needs to be zero.
	 *
	 * @var string
	 */
	private $period;

	/**
	 * @var \Wallee\Sdk\Model\InstallmentPlanConfiguration
	 */
	private $plan;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var string
	 */
	private $plannedPurgeDate;

	/**
	 * The priority controls in which order the slices are applied. The lower the value the higher the precedence.
	 *
	 * @var int
	 */
	private $priority;

	/**
	 * The proportion defines how much of the total installment payment has to be paid in this slice. The value is summed up with the other slices and the ratio of all proportions compared to proportion of this slice determines how much the buyer has to pay in this slice.
	 *
	 * @var float
	 */
	private $proportion;

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
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['lineItemTitle']) && $data['lineItemTitle'] != null) {
			$this->setLineItemTitle($data['lineItemTitle']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['plan']) && $data['plan'] != null) {
			$this->setPlan($data['plan']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
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
	 * @return InstallmentPlanSliceConfiguration
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns lineItemTitle.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getLineItemTitle() {
		return $this->lineItemTitle;
	}

	/**
	 * Sets lineItemTitle.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $lineItemTitle
	 * @return InstallmentPlanSliceConfiguration
	 */
	public function setLineItemTitle($lineItemTitle) {
		$this->lineItemTitle = $lineItemTitle;

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
	 * @return InstallmentPlanSliceConfiguration
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns period.
	 *
	 * The period defines how much time passes between the last slice and this slice. The charge is triggered at the end of the period. When the slice should be charged immediately the period needs to be zero.
	 *
	 * @return string
	 */
	public function getPeriod() {
		return $this->period;
	}

	/**
	 * Sets period.
	 *
	 * @param string $period
	 * @return InstallmentPlanSliceConfiguration
	 */
	protected function setPeriod($period) {
		$this->period = $period;

		return $this;
	}

	/**
	 * Returns plan.
	 *
	 * @return \Wallee\Sdk\Model\InstallmentPlanConfiguration
	 */
	public function getPlan() {
		return $this->plan;
	}

	/**
	 * Sets plan.
	 *
	 * @param \Wallee\Sdk\Model\InstallmentPlanConfiguration $plan
	 * @return InstallmentPlanSliceConfiguration
	 */
	public function setPlan($plan) {
		$this->plan = $plan;

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
	 * @return InstallmentPlanSliceConfiguration
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns priority.
	 *
	 * The priority controls in which order the slices are applied. The lower the value the higher the precedence.
	 *
	 * @return int
	 */
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * Sets priority.
	 *
	 * @param int $priority
	 * @return InstallmentPlanSliceConfiguration
	 */
	protected function setPriority($priority) {
		$this->priority = $priority;

		return $this;
	}

	/**
	 * Returns proportion.
	 *
	 * The proportion defines how much of the total installment payment has to be paid in this slice. The value is summed up with the other slices and the ratio of all proportions compared to proportion of this slice determines how much the buyer has to pay in this slice.
	 *
	 * @return float
	 */
	public function getProportion() {
		return $this->proportion;
	}

	/**
	 * Sets proportion.
	 *
	 * @param float $proportion
	 * @return InstallmentPlanSliceConfiguration
	 */
	protected function setProportion($proportion) {
		$this->proportion = $proportion;

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
	 * @return InstallmentPlanSliceConfiguration
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
	 * @return InstallmentPlanSliceConfiguration
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

		if ($this->getPeriod() === null) {
			throw new ValidationException("'period' can't be null", 'period', $this);
		}
		if ($this->getPriority() === null) {
			throw new ValidationException("'priority' can't be null", 'priority', $this);
		}
		if ($this->getProportion() === null) {
			throw new ValidationException("'proportion' can't be null", 'proportion', $this);
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

