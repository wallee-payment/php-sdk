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
 * DebtCollectionCase model
 *
 * @category    Class
 * @description The debt collection case represents a try to collect the money from the debtor.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class DebtCollectionCase  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'DebtCollectionCase';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amount' => 'float',
		'billingAddress' => '\Wallee\Sdk\Model\Address',
		'closedOn' => '\DateTime',
		'collectorConfiguration' => '\Wallee\Sdk\Model\DebtCollectorConfiguration',
		'contractDate' => '\DateTime',
		'createdOn' => '\DateTime',
		'creator' => 'int',
		'currency' => 'string',
		'dueDate' => '\DateTime',
		'environment' => '\Wallee\Sdk\Model\DebtCollectionEnvironment',
		'externalId' => 'string',
		'failedOn' => '\DateTime',
		'failureReason' => '\Wallee\Sdk\Model\FailureReason',
		'id' => 'int',
		'labels' => '\Wallee\Sdk\Model\Label[]',
		'language' => 'string',
		'lineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'linkedSpaceId' => 'int',
		'nextAttemptOn' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'processingStartedOn' => '\DateTime',
		'processingTimeoutOn' => '\DateTime',
		'reference' => 'string',
		'reviewStartedOn' => '\DateTime',
		'reviewedOn' => '\DateTime',
		'reviewer' => 'int',
		'source' => '\Wallee\Sdk\Model\DebtCollectionCaseSource',
		'sourceEntityId' => 'int',
		'spaceViewId' => 'int',
		'state' => '\Wallee\Sdk\Model\DebtCollectionCaseState',
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
	 * The amount is the total amount of the not paid items. The amount cannot be change once the case is reviewed.
	 *
	 * @var float
	 */
	private $amount;

	/**
	 * The billing address of the case identifies the debtor.
	 *
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $billingAddress;

	/**
	 * The closed on date indicates when the case is closed on.
	 *
	 * @var \DateTime
	 */
	private $closedOn;

	/**
	 * The collector configuration determines how the debt collection case is processed.
	 *
	 * @var \Wallee\Sdk\Model\DebtCollectorConfiguration
	 */
	private $collectorConfiguration;

	/**
	 * The contract date is the date on which the contract with the debtor was signed on.
	 *
	 * @var \DateTime
	 */
	private $contractDate;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * The creator references the user which has created the debt collection case.
	 *
	 * @var int
	 */
	private $creator;

	/**
	 * The currency defines the billing currency of the debt collection case.
	 *
	 * @var string
	 */
	private $currency;

	/**
	 * The due date indicates the date on which the amount receivable was due. This date has to be always in the past.
	 *
	 * @var \DateTime
	 */
	private $dueDate;

	/**
	 * The environment in which this case will be processed. There must be a debt collector configuration present which supports the chosen environment.
	 *
	 * @var \Wallee\Sdk\Model\DebtCollectionEnvironment
	 */
	private $environment;

	/**
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * The failed on date indicates when the case is failed on.
	 *
	 * @var \DateTime
	 */
	private $failedOn;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\FailureReason
	 */
	private $failureReason;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Label[]
	 */
	private $labels;

	/**
	 * The language indicates the language to be used in the communication with the debtor.
	 *
	 * @var string
	 */
	private $language;

	/**
	 * The line items of the debt collection case will be shown on documents sent to the debtor and the total of them makes up total amount to collect.
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $lineItems;

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
	private $nextAttemptOn;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The processing started on date indicates the date on which the processing of the case started on.
	 *
	 * @var \DateTime
	 */
	private $processingStartedOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $processingTimeoutOn;

	/**
	 * The case reference is used in the communication with the debtor. It should be unique and it should be linkable with the source of the debt collection case.
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $reviewStartedOn;

	/**
	 * The reviewed on date indicates when the review of the case was conducted on.
	 *
	 * @var \DateTime
	 */
	private $reviewedOn;

	/**
	 * The reviewer references the user which has reviewed the case.
	 *
	 * @var int
	 */
	private $reviewer;

	/**
	 * The source of the debt collection case indicates the origin of the amount receivable.
	 *
	 * @var \Wallee\Sdk\Model\DebtCollectionCaseSource
	 */
	private $source;

	/**
	 * The source entity ID points to the object which is the origin of the debt collection case. This ID is only set when the case was triggered by an internal process.
	 *
	 * @var int
	 */
	private $sourceEntityId;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceViewId;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\DebtCollectionCaseState
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
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['collectorConfiguration'])) {
			$this->setCollectorConfiguration($data['collectorConfiguration']);
		}
		if (isset($data['environment'])) {
			$this->setEnvironment($data['environment']);
		}
		if (isset($data['failureReason'])) {
			$this->setFailureReason($data['failureReason']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['labels'])) {
			$this->setLabels($data['labels']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['source'])) {
			$this->setSource($data['source']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns amount.
	 *
	 * The amount is the total amount of the not paid items. The amount cannot be change once the case is reviewed.
	 *
	 * @return float
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Sets amount.
	 *
	 * @param float $amount
	 * @return DebtCollectionCase
	 */
	protected function setAmount($amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Returns billingAddress.
	 *
	 * The billing address of the case identifies the debtor.
	 *
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $billingAddress
	 * @return DebtCollectionCase
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Returns closedOn.
	 *
	 * The closed on date indicates when the case is closed on.
	 *
	 * @return \DateTime
	 */
	public function getClosedOn() {
		return $this->closedOn;
	}

	/**
	 * Sets closedOn.
	 *
	 * @param \DateTime $closedOn
	 * @return DebtCollectionCase
	 */
	protected function setClosedOn($closedOn) {
		$this->closedOn = $closedOn;

		return $this;
	}

	/**
	 * Returns collectorConfiguration.
	 *
	 * The collector configuration determines how the debt collection case is processed.
	 *
	 * @return \Wallee\Sdk\Model\DebtCollectorConfiguration
	 */
	public function getCollectorConfiguration() {
		return $this->collectorConfiguration;
	}

	/**
	 * Sets collectorConfiguration.
	 *
	 * @param \Wallee\Sdk\Model\DebtCollectorConfiguration $collectorConfiguration
	 * @return DebtCollectionCase
	 */
	public function setCollectorConfiguration($collectorConfiguration) {
		$this->collectorConfiguration = $collectorConfiguration;

		return $this;
	}

	/**
	 * Returns contractDate.
	 *
	 * The contract date is the date on which the contract with the debtor was signed on.
	 *
	 * @return \DateTime
	 */
	public function getContractDate() {
		return $this->contractDate;
	}

	/**
	 * Sets contractDate.
	 *
	 * @param \DateTime $contractDate
	 * @return DebtCollectionCase
	 */
	protected function setContractDate($contractDate) {
		$this->contractDate = $contractDate;

		return $this;
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
	 * @return DebtCollectionCase
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns creator.
	 *
	 * The creator references the user which has created the debt collection case.
	 *
	 * @return int
	 */
	public function getCreator() {
		return $this->creator;
	}

	/**
	 * Sets creator.
	 *
	 * @param int $creator
	 * @return DebtCollectionCase
	 */
	protected function setCreator($creator) {
		$this->creator = $creator;

		return $this;
	}

	/**
	 * Returns currency.
	 *
	 * The currency defines the billing currency of the debt collection case.
	 *
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Sets currency.
	 *
	 * @param string $currency
	 * @return DebtCollectionCase
	 */
	protected function setCurrency($currency) {
		$this->currency = $currency;

		return $this;
	}

	/**
	 * Returns dueDate.
	 *
	 * The due date indicates the date on which the amount receivable was due. This date has to be always in the past.
	 *
	 * @return \DateTime
	 */
	public function getDueDate() {
		return $this->dueDate;
	}

	/**
	 * Sets dueDate.
	 *
	 * @param \DateTime $dueDate
	 * @return DebtCollectionCase
	 */
	protected function setDueDate($dueDate) {
		$this->dueDate = $dueDate;

		return $this;
	}

	/**
	 * Returns environment.
	 *
	 * The environment in which this case will be processed. There must be a debt collector configuration present which supports the chosen environment.
	 *
	 * @return \Wallee\Sdk\Model\DebtCollectionEnvironment
	 */
	public function getEnvironment() {
		return $this->environment;
	}

	/**
	 * Sets environment.
	 *
	 * @param \Wallee\Sdk\Model\DebtCollectionEnvironment $environment
	 * @return DebtCollectionCase
	 */
	public function setEnvironment($environment) {
		$this->environment = $environment;

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
	 * @return DebtCollectionCase
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * The failed on date indicates when the case is failed on.
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
	 * @return DebtCollectionCase
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

		return $this;
	}

	/**
	 * Returns failureReason.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\FailureReason
	 */
	public function getFailureReason() {
		return $this->failureReason;
	}

	/**
	 * Sets failureReason.
	 *
	 * @param \Wallee\Sdk\Model\FailureReason $failureReason
	 * @return DebtCollectionCase
	 */
	public function setFailureReason($failureReason) {
		$this->failureReason = $failureReason;

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
	 * @return DebtCollectionCase
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns labels.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\Label[]
	 */
	public function getLabels() {
		return $this->labels;
	}

	/**
	 * Sets labels.
	 *
	 * @param \Wallee\Sdk\Model\Label[] $labels
	 * @return DebtCollectionCase
	 */
	public function setLabels($labels) {
		$this->labels = $labels;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * The language indicates the language to be used in the communication with the debtor.
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
	 * @return DebtCollectionCase
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * The line items of the debt collection case will be shown on documents sent to the debtor and the total of them makes up total amount to collect.
	 *
	 * @return \Wallee\Sdk\Model\LineItem[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItem[] $lineItems
	 * @return DebtCollectionCase
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

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
	 * @return DebtCollectionCase
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns nextAttemptOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getNextAttemptOn() {
		return $this->nextAttemptOn;
	}

	/**
	 * Sets nextAttemptOn.
	 *
	 * @param \DateTime $nextAttemptOn
	 * @return DebtCollectionCase
	 */
	protected function setNextAttemptOn($nextAttemptOn) {
		$this->nextAttemptOn = $nextAttemptOn;

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
	 * @return DebtCollectionCase
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns processingStartedOn.
	 *
	 * The processing started on date indicates the date on which the processing of the case started on.
	 *
	 * @return \DateTime
	 */
	public function getProcessingStartedOn() {
		return $this->processingStartedOn;
	}

	/**
	 * Sets processingStartedOn.
	 *
	 * @param \DateTime $processingStartedOn
	 * @return DebtCollectionCase
	 */
	protected function setProcessingStartedOn($processingStartedOn) {
		$this->processingStartedOn = $processingStartedOn;

		return $this;
	}

	/**
	 * Returns processingTimeoutOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getProcessingTimeoutOn() {
		return $this->processingTimeoutOn;
	}

	/**
	 * Sets processingTimeoutOn.
	 *
	 * @param \DateTime $processingTimeoutOn
	 * @return DebtCollectionCase
	 */
	protected function setProcessingTimeoutOn($processingTimeoutOn) {
		$this->processingTimeoutOn = $processingTimeoutOn;

		return $this;
	}

	/**
	 * Returns reference.
	 *
	 * The case reference is used in the communication with the debtor. It should be unique and it should be linkable with the source of the debt collection case.
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
	 * @return DebtCollectionCase
	 */
	protected function setReference($reference) {
		$this->reference = $reference;

		return $this;
	}

	/**
	 * Returns reviewStartedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getReviewStartedOn() {
		return $this->reviewStartedOn;
	}

	/**
	 * Sets reviewStartedOn.
	 *
	 * @param \DateTime $reviewStartedOn
	 * @return DebtCollectionCase
	 */
	protected function setReviewStartedOn($reviewStartedOn) {
		$this->reviewStartedOn = $reviewStartedOn;

		return $this;
	}

	/**
	 * Returns reviewedOn.
	 *
	 * The reviewed on date indicates when the review of the case was conducted on.
	 *
	 * @return \DateTime
	 */
	public function getReviewedOn() {
		return $this->reviewedOn;
	}

	/**
	 * Sets reviewedOn.
	 *
	 * @param \DateTime $reviewedOn
	 * @return DebtCollectionCase
	 */
	protected function setReviewedOn($reviewedOn) {
		$this->reviewedOn = $reviewedOn;

		return $this;
	}

	/**
	 * Returns reviewer.
	 *
	 * The reviewer references the user which has reviewed the case.
	 *
	 * @return int
	 */
	public function getReviewer() {
		return $this->reviewer;
	}

	/**
	 * Sets reviewer.
	 *
	 * @param int $reviewer
	 * @return DebtCollectionCase
	 */
	protected function setReviewer($reviewer) {
		$this->reviewer = $reviewer;

		return $this;
	}

	/**
	 * Returns source.
	 *
	 * The source of the debt collection case indicates the origin of the amount receivable.
	 *
	 * @return \Wallee\Sdk\Model\DebtCollectionCaseSource
	 */
	public function getSource() {
		return $this->source;
	}

	/**
	 * Sets source.
	 *
	 * @param \Wallee\Sdk\Model\DebtCollectionCaseSource $source
	 * @return DebtCollectionCase
	 */
	public function setSource($source) {
		$this->source = $source;

		return $this;
	}

	/**
	 * Returns sourceEntityId.
	 *
	 * The source entity ID points to the object which is the origin of the debt collection case. This ID is only set when the case was triggered by an internal process.
	 *
	 * @return int
	 */
	public function getSourceEntityId() {
		return $this->sourceEntityId;
	}

	/**
	 * Sets sourceEntityId.
	 *
	 * @param int $sourceEntityId
	 * @return DebtCollectionCase
	 */
	protected function setSourceEntityId($sourceEntityId) {
		$this->sourceEntityId = $sourceEntityId;

		return $this;
	}

	/**
	 * Returns spaceViewId.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSpaceViewId() {
		return $this->spaceViewId;
	}

	/**
	 * Sets spaceViewId.
	 *
	 * @param int $spaceViewId
	 * @return DebtCollectionCase
	 */
	protected function setSpaceViewId($spaceViewId) {
		$this->spaceViewId = $spaceViewId;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\DebtCollectionCaseState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\DebtCollectionCaseState $state
	 * @return DebtCollectionCase
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
	 * @return DebtCollectionCase
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

