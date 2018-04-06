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
 * SubscriptionSuspension model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionSuspension  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionSuspension';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'createdOn' => '\DateTime',
		'effectiveEndDate' => '\DateTime',
		'endAction' => '\Wallee\Sdk\Model\SubscriptionSuspensionAction',
		'id' => 'int',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'note' => 'string',
		'periodBill' => 'int',
		'plannedEndDate' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'reason' => '\Wallee\Sdk\Model\SubscriptionSuspensionReason',
		'state' => '\Wallee\Sdk\Model\SubscriptionSuspensionState',
		'subscription' => 'int',
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
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $effectiveEndDate;

	/**
	 * When the suspension reaches the planned end date the end action will be carried out. This action is only executed when the suspension is ended automatically based on the end date.
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionSuspensionAction
	 */
	private $endAction;

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
	 * The note may contain some internal information for the suspension. The note will not be disclosed to the subscriber.
	 *
	 * @var string
	 */
	private $note;

	/**
	 * 
	 *
	 * @var int
	 */
	private $periodBill;

	/**
	 * The planned end date of the suspension identifies the date on which the suspension will be ended automatically.
	 *
	 * @var \DateTime
	 */
	private $plannedEndDate;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The suspension reason indicates why a suspension has been created.
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionSuspensionReason
	 */
	private $reason;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionSuspensionState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var int
	 */
	private $subscription;

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
		if (isset($data['endAction'])) {
			$this->setEndAction($data['endAction']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['reason'])) {
			$this->setReason($data['reason']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns createdOn.
	 *
	 * The created on date indicates the date on which the entity was stored into the database.
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
	 * @return SubscriptionSuspension
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns effectiveEndDate.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getEffectiveEndDate() {
		return $this->effectiveEndDate;
	}

	/**
	 * Sets effectiveEndDate.
	 *
	 * @param \DateTime $effectiveEndDate
	 * @return SubscriptionSuspension
	 */
	protected function setEffectiveEndDate($effectiveEndDate) {
		$this->effectiveEndDate = $effectiveEndDate;

		return $this;
	}

	/**
	 * Returns endAction.
	 *
	 * When the suspension reaches the planned end date the end action will be carried out. This action is only executed when the suspension is ended automatically based on the end date.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionSuspensionAction
	 */
	public function getEndAction() {
		return $this->endAction;
	}

	/**
	 * Sets endAction.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionSuspensionAction $endAction
	 * @return SubscriptionSuspension
	 */
	public function setEndAction($endAction) {
		$this->endAction = $endAction;

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
	 * @return SubscriptionSuspension
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
	 * @return SubscriptionSuspension
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
	 * @return SubscriptionSuspension
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns note.
	 *
	 * The note may contain some internal information for the suspension. The note will not be disclosed to the subscriber.
	 *
	 * @return string
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * Sets note.
	 *
	 * @param string $note
	 * @return SubscriptionSuspension
	 */
	protected function setNote($note) {
		$this->note = $note;

		return $this;
	}

	/**
	 * Returns periodBill.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getPeriodBill() {
		return $this->periodBill;
	}

	/**
	 * Sets periodBill.
	 *
	 * @param int $periodBill
	 * @return SubscriptionSuspension
	 */
	protected function setPeriodBill($periodBill) {
		$this->periodBill = $periodBill;

		return $this;
	}

	/**
	 * Returns plannedEndDate.
	 *
	 * The planned end date of the suspension identifies the date on which the suspension will be ended automatically.
	 *
	 * @return \DateTime
	 */
	public function getPlannedEndDate() {
		return $this->plannedEndDate;
	}

	/**
	 * Sets plannedEndDate.
	 *
	 * @param \DateTime $plannedEndDate
	 * @return SubscriptionSuspension
	 */
	protected function setPlannedEndDate($plannedEndDate) {
		$this->plannedEndDate = $plannedEndDate;

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
	 * @return SubscriptionSuspension
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns reason.
	 *
	 * The suspension reason indicates why a suspension has been created.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionSuspensionReason
	 */
	public function getReason() {
		return $this->reason;
	}

	/**
	 * Sets reason.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionSuspensionReason $reason
	 * @return SubscriptionSuspension
	 */
	public function setReason($reason) {
		$this->reason = $reason;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionSuspensionState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionSuspensionState $state
	 * @return SubscriptionSuspension
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
	 * @return int
	 */
	public function getSubscription() {
		return $this->subscription;
	}

	/**
	 * Sets subscription.
	 *
	 * @param int $subscription
	 * @return SubscriptionSuspension
	 */
	protected function setSubscription($subscription) {
		$this->subscription = $subscription;

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
	 * @return SubscriptionSuspension
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

