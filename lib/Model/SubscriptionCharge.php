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
 * SubscriptionCharge model
 *
 * @category    Class
 * @description The subscription charge represents a single charge carried out for a particular subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionCharge  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionCharge';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'createdOn' => 'string',
		'discardedBy' => 'int',
		'discardedOn' => 'string',
		'externalId' => 'string',
		'failedOn' => 'string',
		'failedUrl' => 'string',
		'id' => 'int',
		'ledgerEntries' => '\Wallee\Sdk\Model\SubscriptionLedgerEntry[]',
		'linkedSpaceId' => 'int',
		'plannedExecutionDate' => 'string',
		'plannedPurgeDate' => 'string',
		'processingType' => 'string',
		'reference' => 'string',
		'state' => 'string',
		'subscription' => '\Wallee\Sdk\Model\Subscription',
		'succeedOn' => 'string',
		'successUrl' => 'string',
		'transaction' => '\Wallee\Sdk\Model\Transaction',
		'type' => 'string',
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
	 * Values of processingType.
	 */
	const PROCESSING_TYPE_SYNCHRONOUS = 'SYNCHRONOUS';
	const PROCESSING_TYPE_CHARGE_FLOW = 'CHARGE_FLOW';
	
	/**
	 * Returns allowable values of processingType.
	 *
	 * @return string[]
	 */
	public function getProcessingTypeAllowableValues() {
		return [
			self::PROCESSING_TYPE_SYNCHRONOUS,
			self::PROCESSING_TYPE_CHARGE_FLOW,
		];
	}
	
	/**
	 * Values of state.
	 */
	const STATE_SCHEDULED = 'SCHEDULED';
	const STATE_DISCARDED = 'DISCARDED';
	const STATE_PROCESSING = 'PROCESSING';
	const STATE_SUCCESSFUL = 'SUCCESSFUL';
	const STATE_FAILED = 'FAILED';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_SCHEDULED,
			self::STATE_DISCARDED,
			self::STATE_PROCESSING,
			self::STATE_SUCCESSFUL,
			self::STATE_FAILED,
		];
	}
	
	/**
	 * Values of type.
	 */
	const TYPE_MANUAL = 'MANUAL';
	const TYPE_AUTOMATIC = 'AUTOMATIC';
	
	/**
	 * Returns allowable values of type.
	 *
	 * @return string[]
	 */
	public function getTypeAllowableValues() {
		return [
			self::TYPE_MANUAL,
			self::TYPE_AUTOMATIC,
		];
	}
	

	/**
	 * 
	 *
	 * @var string
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $discardedBy;

	/**
	 * 
	 *
	 * @var string
	 */
	private $discardedOn;

	/**
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $failedOn;

	/**
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @var string
	 */
	private $failedUrl;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionLedgerEntry[]
	 */
	private $ledgerEntries;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $plannedExecutionDate;

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
	private $processingType;

	/**
	 * 
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * @var \Wallee\Sdk\Model\Subscription
	 */
	private $subscription;

	/**
	 * 
	 *
	 * @var string
	 */
	private $succeedOn;

	/**
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @var string
	 */
	private $successUrl;

	/**
	 * @var \Wallee\Sdk\Model\Transaction
	 */
	private $transaction;

	/**
	 * 
	 *
	 * @var string
	 */
	private $type;

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
		if (isset($data['ledgerEntries']) && $data['ledgerEntries'] != null) {
			$this->setLedgerEntries($data['ledgerEntries']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['subscription']) && $data['subscription'] != null) {
			$this->setSubscription($data['subscription']);
		}
		if (isset($data['transaction']) && $data['transaction'] != null) {
			$this->setTransaction($data['transaction']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns createdOn.
	 *
	 * 
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
	 * @return SubscriptionCharge
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns discardedBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getDiscardedBy() {
		return $this->discardedBy;
	}

	/**
	 * Sets discardedBy.
	 *
	 * @param int $discardedBy
	 * @return SubscriptionCharge
	 */
	protected function setDiscardedBy($discardedBy) {
		$this->discardedBy = $discardedBy;

		return $this;
	}

	/**
	 * Returns discardedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getDiscardedOn() {
		return $this->discardedOn;
	}

	/**
	 * Sets discardedOn.
	 *
	 * @param string $discardedOn
	 * @return SubscriptionCharge
	 */
	protected function setDiscardedOn($discardedOn) {
		$this->discardedOn = $discardedOn;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @return string
	 */
	public function getExternalId() {
		return $this->externalId;
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return SubscriptionCharge
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param string $failedOn
	 * @return SubscriptionCharge
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

		return $this;
	}

	/**
	 * Returns failedUrl.
	 *
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @return string
	 */
	public function getFailedUrl() {
		return $this->failedUrl;
	}

	/**
	 * Sets failedUrl.
	 *
	 * @param string $failedUrl
	 * @return SubscriptionCharge
	 */
	protected function setFailedUrl($failedUrl) {
		$this->failedUrl = $failedUrl;

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
	 * @return SubscriptionCharge
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns ledgerEntries.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionLedgerEntry[]
	 */
	public function getLedgerEntries() {
		return $this->ledgerEntries;
	}

	/**
	 * Sets ledgerEntries.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionLedgerEntry[] $ledgerEntries
	 * @return SubscriptionCharge
	 */
	public function setLedgerEntries($ledgerEntries) {
		$this->ledgerEntries = $ledgerEntries;

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
	 * @return SubscriptionCharge
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns plannedExecutionDate.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPlannedExecutionDate() {
		return $this->plannedExecutionDate;
	}

	/**
	 * Sets plannedExecutionDate.
	 *
	 * @param string $plannedExecutionDate
	 * @return SubscriptionCharge
	 */
	protected function setPlannedExecutionDate($plannedExecutionDate) {
		$this->plannedExecutionDate = $plannedExecutionDate;

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
	 * @return SubscriptionCharge
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns processingType.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getProcessingType() {
		return $this->processingType;
	}

	/**
	 * Sets processingType.
	 *
	 * @param string $processingType
	 * @return SubscriptionCharge
	 */
	protected function setProcessingType($processingType) {
		$allowed_values = array('SYNCHRONOUS', 'CHARGE_FLOW');
		if ((!in_array($processingType, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'processingType', must be one of 'SYNCHRONOUS', 'CHARGE_FLOW'");
		}
		$this->processingType = $processingType;

		return $this;
	}

	/**
	 * Returns reference.
	 *
	 * 
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
	 * @return SubscriptionCharge
	 */
	protected function setReference($reference) {
		$this->reference = $reference;

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
	 * @return SubscriptionCharge
	 */
	protected function setState($state) {
		$allowed_values = array('SCHEDULED', 'DISCARDED', 'PROCESSING', 'SUCCESSFUL', 'FAILED');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'SCHEDULED', 'DISCARDED', 'PROCESSING', 'SUCCESSFUL', 'FAILED'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subscription.
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
	 * @return SubscriptionCharge
	 */
	public function setSubscription($subscription) {
		$this->subscription = $subscription;

		return $this;
	}

	/**
	 * Returns succeedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSucceedOn() {
		return $this->succeedOn;
	}

	/**
	 * Sets succeedOn.
	 *
	 * @param string $succeedOn
	 * @return SubscriptionCharge
	 */
	protected function setSucceedOn($succeedOn) {
		$this->succeedOn = $succeedOn;

		return $this;
	}

	/**
	 * Returns successUrl.
	 *
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @return string
	 */
	public function getSuccessUrl() {
		return $this->successUrl;
	}

	/**
	 * Sets successUrl.
	 *
	 * @param string $successUrl
	 * @return SubscriptionCharge
	 */
	protected function setSuccessUrl($successUrl) {
		$this->successUrl = $successUrl;

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
	 * @return SubscriptionCharge
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param string $type
	 * @return SubscriptionCharge
	 */
	protected function setType($type) {
		$allowed_values = array('MANUAL', 'AUTOMATIC');
		if (!is_null($type) && (!in_array($type, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'MANUAL', 'AUTOMATIC'");
		}
		$this->type = $type;

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
	 * @return SubscriptionCharge
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

		if ($this->getExternalId() === null) {
			throw new ValidationException("'externalId' can't be null", 'externalId', $this);
		}
		if ($this->getProcessingType() === null) {
			throw new ValidationException("'processingType' can't be null", 'processingType', $this);
		}
		$allowed_values = ["SYNCHRONOUS", "CHARGE_FLOW"];
		if (!in_array($this->getProcessingType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'processingType', must be one of #{allowed_values}.", 'processingType', $this);
		}

		$allowed_values = ["SCHEDULED", "DISCARDED", "PROCESSING", "SUCCESSFUL", "FAILED"];
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
		}

		$allowed_values = ["MANUAL", "AUTOMATIC"];
		if (!in_array($this->getType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'type', must be one of #{allowed_values}.", 'type', $this);
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

