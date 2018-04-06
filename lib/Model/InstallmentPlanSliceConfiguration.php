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
 * InstallmentPlanSliceConfiguration model
 *
 * @category    Class
 * @description The installment plan slice defines a single slice of an installment plan.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
		'plannedPurgeDate' => '\DateTime',
		'priority' => 'int',
		'proportion' => 'float',
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
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The title of this slices line items. The title is visible to the buyer.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $lineItemTitle;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
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
	 * The installment plan this slice belongs to.
	 *
	 * @var \Wallee\Sdk\Model\InstallmentPlanConfiguration
	 */
	private $plan;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
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
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['lineItemTitle'])) {
			$this->setLineItemTitle($data['lineItemTitle']);
		}
		if (isset($data['plan'])) {
			$this->setPlan($data['plan']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['version'])) {
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
	 * The title of this slices line items. The title is visible to the buyer.
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
	 * @return InstallmentPlanSliceConfiguration
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
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
	 * The installment plan this slice belongs to.
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
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
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
	 * @return \Wallee\Sdk\Model\CreationEntityState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\CreationEntityState $state
	 * @return InstallmentPlanSliceConfiguration
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

