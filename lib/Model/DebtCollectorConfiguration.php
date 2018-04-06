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
 * DebtCollectorConfiguration model
 *
 * @category    Class
 * @description The debt collector configuration defines the behavior of the collection process for a particular collector.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class DebtCollectorConfiguration  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'DebtCollectorConfiguration';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'collector' => 'int',
		'conditions' => 'int[]',
		'enabledSpaceViews' => 'int[]',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'plannedPurgeDate' => '\DateTime',
		'priority' => 'int',
		'skipReviewEnabled' => 'bool',
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
	 * The collector handles the debt collection case based on the settings of this configuration.
	 *
	 * @var int
	 */
	private $collector;

	/**
	 * The conditions applied to the collector configuration restricts the application of this configuration onto a particular debt collection case.
	 *
	 * @var int[]
	 */
	private $conditions;

	/**
	 * The collector configuration is only enabled for the selected space views. In case the set is empty the collector configuration is enabled for all space views.
	 *
	 * @var int[]
	 */
	private $enabledSpaceViews;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The collector configuration name is used internally to identify a specific collector configuration. For example the name is used within search fields and hence it should be distinct and descriptive.
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
	 * The priority defines the order in which the collector configuration is tried to be applied onto a debt collection case. The higher the value the less likely the configuration is applied on a case.
	 *
	 * @var int
	 */
	private $priority;

	/**
	 * When the review is skipped there will be no review for cases which use this configuration.
	 *
	 * @var bool
	 */
	private $skipReviewEnabled;

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
		if (isset($data['conditions'])) {
			$this->setConditions($data['conditions']);
		}
		if (isset($data['enabledSpaceViews'])) {
			$this->setEnabledSpaceViews($data['enabledSpaceViews']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns collector.
	 *
	 * The collector handles the debt collection case based on the settings of this configuration.
	 *
	 * @return int
	 */
	public function getCollector() {
		return $this->collector;
	}

	/**
	 * Sets collector.
	 *
	 * @param int $collector
	 * @return DebtCollectorConfiguration
	 */
	protected function setCollector($collector) {
		$this->collector = $collector;

		return $this;
	}

	/**
	 * Returns conditions.
	 *
	 * The conditions applied to the collector configuration restricts the application of this configuration onto a particular debt collection case.
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
	 * @return DebtCollectorConfiguration
	 */
	public function setConditions($conditions) {
		$this->conditions = $conditions;

		return $this;
	}

	/**
	 * Returns enabledSpaceViews.
	 *
	 * The collector configuration is only enabled for the selected space views. In case the set is empty the collector configuration is enabled for all space views.
	 *
	 * @return int[]
	 */
	public function getEnabledSpaceViews() {
		return $this->enabledSpaceViews;
	}

	/**
	 * Sets enabledSpaceViews.
	 *
	 * @param int[] $enabledSpaceViews
	 * @return DebtCollectorConfiguration
	 */
	public function setEnabledSpaceViews($enabledSpaceViews) {
		$this->enabledSpaceViews = $enabledSpaceViews;

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
	 * @return DebtCollectorConfiguration
	 */
	public function setId($id) {
		$this->id = $id;

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
	 * @return DebtCollectorConfiguration
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The collector configuration name is used internally to identify a specific collector configuration. For example the name is used within search fields and hence it should be distinct and descriptive.
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
	 * @return DebtCollectorConfiguration
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
	 * @return DebtCollectorConfiguration
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns priority.
	 *
	 * The priority defines the order in which the collector configuration is tried to be applied onto a debt collection case. The higher the value the less likely the configuration is applied on a case.
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
	 * @return DebtCollectorConfiguration
	 */
	protected function setPriority($priority) {
		$this->priority = $priority;

		return $this;
	}

	/**
	 * Returns skipReviewEnabled.
	 *
	 * When the review is skipped there will be no review for cases which use this configuration.
	 *
	 * @return bool
	 */
	public function getSkipReviewEnabled() {
		return $this->skipReviewEnabled;
	}

	/**
	 * Sets skipReviewEnabled.
	 *
	 * @param bool $skipReviewEnabled
	 * @return DebtCollectorConfiguration
	 */
	protected function setSkipReviewEnabled($skipReviewEnabled) {
		$this->skipReviewEnabled = $skipReviewEnabled;

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
	 * @return DebtCollectorConfiguration
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
	 * @return DebtCollectorConfiguration
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

