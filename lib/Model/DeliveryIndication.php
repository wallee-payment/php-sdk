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
 * DeliveryIndication model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class DeliveryIndication extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'DeliveryIndication';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'automaticDecisionReason' => '\Wallee\Sdk\Model\DeliveryIndicationDecisionReason',
		'automaticallyDecidedOn' => 'string',
		'createdOn' => 'string',
		'manuallyDecidedBy' => 'int',
		'manuallyDecidedOn' => 'string',
		'plannedPurgeDate' => 'string',
		'state' => 'string',
		'timeoutOn' => 'string',
		'transaction' => '\Wallee\Sdk\Model\Transaction'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	
	/**
	 * Values of state.
	 */
	const STATE_PENDING = 'PENDING';
	const STATE_NOT_SUITABLE = 'NOT_SUITABLE';
	const STATE_MANUAL_CHECK_REQUIRED = 'MANUAL_CHECK_REQUIRED';
	const STATE_SUITABLE = 'SUITABLE';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_PENDING,
			self::STATE_NOT_SUITABLE,
			self::STATE_MANUAL_CHECK_REQUIRED,
			self::STATE_SUITABLE,
		];
	}
	

	/**
	 * @var \Wallee\Sdk\Model\DeliveryIndicationDecisionReason
	 */
	private $automaticDecisionReason;

	/**
	 * 
	 *
	 * @var string
	 */
	private $automaticallyDecidedOn;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var string
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $manuallyDecidedBy;

	/**
	 * 
	 *
	 * @var string
	 */
	private $manuallyDecidedOn;

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
	private $state;

	/**
	 * 
	 *
	 * @var string
	 */
	private $timeoutOn;

	/**
	 * @var \Wallee\Sdk\Model\Transaction
	 */
	private $transaction;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['automaticDecisionReason']) && $data['automaticDecisionReason'] != null) {
			$this->setAutomaticDecisionReason($data['automaticDecisionReason']);
		}
		if (isset($data['transaction']) && $data['transaction'] != null) {
			$this->setTransaction($data['transaction']);
		}
	}


	/**
	 * Returns automaticDecisionReason.
	 *
	 * @return \Wallee\Sdk\Model\DeliveryIndicationDecisionReason
	 */
	public function getAutomaticDecisionReason() {
		return $this->automaticDecisionReason;
	}

	/**
	 * Sets automaticDecisionReason.
	 *
	 * @param \Wallee\Sdk\Model\DeliveryIndicationDecisionReason $automaticDecisionReason
	 * @return DeliveryIndication
	 */
	public function setAutomaticDecisionReason($automaticDecisionReason) {
		$this->automaticDecisionReason = $automaticDecisionReason;

		return $this;
	}

	/**
	 * Returns automaticallyDecidedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getAutomaticallyDecidedOn() {
		return $this->automaticallyDecidedOn;
	}

	/**
	 * Sets automaticallyDecidedOn.
	 *
	 * @param string $automaticallyDecidedOn
	 * @return DeliveryIndication
	 */
	protected function setAutomaticallyDecidedOn($automaticallyDecidedOn) {
		$this->automaticallyDecidedOn = $automaticallyDecidedOn;

		return $this;
	}

	/**
	 * Returns createdOn.
	 *
	 * The created on date indicates the date on which the entity was stored into the database.
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
	 * @return DeliveryIndication
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns manuallyDecidedBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getManuallyDecidedBy() {
		return $this->manuallyDecidedBy;
	}

	/**
	 * Sets manuallyDecidedBy.
	 *
	 * @param int $manuallyDecidedBy
	 * @return DeliveryIndication
	 */
	protected function setManuallyDecidedBy($manuallyDecidedBy) {
		$this->manuallyDecidedBy = $manuallyDecidedBy;

		return $this;
	}

	/**
	 * Returns manuallyDecidedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getManuallyDecidedOn() {
		return $this->manuallyDecidedOn;
	}

	/**
	 * Sets manuallyDecidedOn.
	 *
	 * @param string $manuallyDecidedOn
	 * @return DeliveryIndication
	 */
	protected function setManuallyDecidedOn($manuallyDecidedOn) {
		$this->manuallyDecidedOn = $manuallyDecidedOn;

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
	 * @return DeliveryIndication
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
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param string $state
	 * @return DeliveryIndication
	 */
	protected function setState($state) {
		$allowed_values = array('PENDING', 'NOT_SUITABLE', 'MANUAL_CHECK_REQUIRED', 'SUITABLE');
		if ((!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'PENDING', 'NOT_SUITABLE', 'MANUAL_CHECK_REQUIRED', 'SUITABLE'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns timeoutOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTimeoutOn() {
		return $this->timeoutOn;
	}

	/**
	 * Sets timeoutOn.
	 *
	 * @param string $timeoutOn
	 * @return DeliveryIndication
	 */
	protected function setTimeoutOn($timeoutOn) {
		$this->timeoutOn = $timeoutOn;

		return $this;
	}

	/**
	 * Returns transaction.
	 *
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function getTransaction() {
		return $this->transaction;
	}

	/**
	 * Sets transaction.
	 *
	 * @param \Wallee\Sdk\Model\Transaction $transaction
	 * @return DeliveryIndication
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getCreatedOn() === null) {
			throw new ValidationException("'createdOn' can't be null", 'createdOn', $this);
		}
		if ($this->getState() === null) {
			throw new ValidationException("'state' can't be null", 'state', $this);
		}
		$allowed_values = ["PENDING", "NOT_SUITABLE", "MANUAL_CHECK_REQUIRED", "SUITABLE"];
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
		}

		if ($this->getTimeoutOn() === null) {
			throw new ValidationException("'timeoutOn' can't be null", 'timeoutOn', $this);
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

