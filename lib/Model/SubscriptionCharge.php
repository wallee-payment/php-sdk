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
 * SubscriptionCharge model
 *
 * @category    Class
 * @description The subscription charge represents a single charge carried out for a particular subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
		'createdOn' => '\DateTime',
		'discardedBy' => 'int',
		'discardedOn' => '\DateTime',
		'externalId' => 'string',
		'failedOn' => '\DateTime',
		'failedUrl' => 'string',
		'id' => 'int',
		'ledgerEntries' => '\Wallee\Sdk\Model\SubscriptionLedgerEntry[]',
		'linkedSpaceId' => 'int',
		'plannedExecutionDate' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'processingType' => '\Wallee\Sdk\Model\SubscriptionChargeProcessingType',
		'reference' => 'string',
		'state' => '\Wallee\Sdk\Model\SubscriptionChargeState',
		'subscription' => '\Wallee\Sdk\Model\Subscription',
		'succeedOn' => '\DateTime',
		'successUrl' => 'string',
		'transaction' => '\Wallee\Sdk\Model\Transaction',
		'type' => '\Wallee\Sdk\Model\SubscriptionChargeType',
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
	 * @var int
	 */
	private $discardedBy;

	/**
	 * 
	 *
	 * @var \DateTime
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
	 * @var \DateTime
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
	private $plannedExecutionDate;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionChargeProcessingType
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
	 * @var \Wallee\Sdk\Model\SubscriptionChargeState
	 */
	private $state;

	/**
	 * The field subscription indicates the subscription to which the charge belongs to.
	 *
	 * @var \Wallee\Sdk\Model\Subscription
	 */
	private $subscription;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $succeedOn;

	/**
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @var string
	 */
	private $successUrl;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Transaction
	 */
	private $transaction;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionChargeType
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
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['ledgerEntries'])) {
			$this->setLedgerEntries($data['ledgerEntries']);
		}
		if (isset($data['processingType'])) {
			$this->setProcessingType($data['processingType']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['subscription'])) {
			$this->setSubscription($data['subscription']);
		}
		if (isset($data['transaction'])) {
			$this->setTransaction($data['transaction']);
		}
		if (isset($data['type'])) {
			$this->setType($data['type']);
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
	 * @return \DateTime
	 */
	public function getDiscardedOn() {
		return $this->discardedOn;
	}

	/**
	 * Sets discardedOn.
	 *
	 * @param \DateTime $discardedOn
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
	 * @return \DateTime
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param \DateTime $failedOn
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
	 * @return SubscriptionCharge
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns plannedExecutionDate.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getPlannedExecutionDate() {
		return $this->plannedExecutionDate;
	}

	/**
	 * Sets plannedExecutionDate.
	 *
	 * @param \DateTime $plannedExecutionDate
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
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
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
	 * @return \Wallee\Sdk\Model\SubscriptionChargeProcessingType
	 */
	public function getProcessingType() {
		return $this->processingType;
	}

	/**
	 * Sets processingType.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionChargeProcessingType $processingType
	 * @return SubscriptionCharge
	 */
	public function setProcessingType($processingType) {
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
	 * @return \Wallee\Sdk\Model\SubscriptionChargeState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionChargeState $state
	 * @return SubscriptionCharge
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * The field subscription indicates the subscription to which the charge belongs to.
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
	 * @return \DateTime
	 */
	public function getSucceedOn() {
		return $this->succeedOn;
	}

	/**
	 * Sets succeedOn.
	 *
	 * @param \DateTime $succeedOn
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
	 * 
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
	 * @return \Wallee\Sdk\Model\SubscriptionChargeType
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionChargeType $type
	 * @return SubscriptionCharge
	 */
	public function setType($type) {
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

