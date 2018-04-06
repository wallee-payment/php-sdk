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
 * SubscriptionPeriodBill model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionPeriodBill  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionPeriodBill';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'createdOn' => '\DateTime',
		'effectivePeriodEndDate' => '\DateTime',
		'id' => 'int',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'periodStartDate' => '\DateTime',
		'plannedPeriodEndDate' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'state' => '\Wallee\Sdk\Model\SubscriptionPeriodBillState',
		'subscriptionVersion' => '\Wallee\Sdk\Model\SubscriptionVersion',
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
	private $createdOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $effectivePeriodEndDate;

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
	 * 
	 *
	 * @var \DateTime
	 */
	private $periodStartDate;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $plannedPeriodEndDate;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionPeriodBillState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionVersion
	 */
	private $subscriptionVersion;

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
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['subscriptionVersion'])) {
			$this->setSubscriptionVersion($data['subscriptionVersion']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
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
	 * @return SubscriptionPeriodBill
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns effectivePeriodEndDate.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getEffectivePeriodEndDate() {
		return $this->effectivePeriodEndDate;
	}

	/**
	 * Sets effectivePeriodEndDate.
	 *
	 * @param \DateTime $effectivePeriodEndDate
	 * @return SubscriptionPeriodBill
	 */
	protected function setEffectivePeriodEndDate($effectivePeriodEndDate) {
		$this->effectivePeriodEndDate = $effectivePeriodEndDate;

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
	 * @return SubscriptionPeriodBill
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
	 * @return SubscriptionPeriodBill
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
	 * @return SubscriptionPeriodBill
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns periodStartDate.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getPeriodStartDate() {
		return $this->periodStartDate;
	}

	/**
	 * Sets periodStartDate.
	 *
	 * @param \DateTime $periodStartDate
	 * @return SubscriptionPeriodBill
	 */
	protected function setPeriodStartDate($periodStartDate) {
		$this->periodStartDate = $periodStartDate;

		return $this;
	}

	/**
	 * Returns plannedPeriodEndDate.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getPlannedPeriodEndDate() {
		return $this->plannedPeriodEndDate;
	}

	/**
	 * Sets plannedPeriodEndDate.
	 *
	 * @param \DateTime $plannedPeriodEndDate
	 * @return SubscriptionPeriodBill
	 */
	protected function setPlannedPeriodEndDate($plannedPeriodEndDate) {
		$this->plannedPeriodEndDate = $plannedPeriodEndDate;

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
	 * @return SubscriptionPeriodBill
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionPeriodBillState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionPeriodBillState $state
	 * @return SubscriptionPeriodBill
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subscriptionVersion.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionVersion
	 */
	public function getSubscriptionVersion() {
		return $this->subscriptionVersion;
	}

	/**
	 * Sets subscriptionVersion.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionVersion $subscriptionVersion
	 * @return SubscriptionPeriodBill
	 */
	public function setSubscriptionVersion($subscriptionVersion) {
		$this->subscriptionVersion = $subscriptionVersion;

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
	 * @return SubscriptionPeriodBill
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

