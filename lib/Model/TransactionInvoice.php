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
 * TransactionInvoice model
 *
 * @category    Class
 * @description The transaction invoice represents the invoice document for a particular transaction.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class TransactionInvoice extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'TransactionInvoice';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amount' => 'float',
		'completion' => '\Wallee\Sdk\Model\TransactionCompletion',
		'createdOn' => 'string',
		'derecognizedOn' => 'string',
		'dueOn' => 'string',
		'externalId' => 'string',
		'language' => 'string',
		'lineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'merchantReference' => 'string',
		'paidOn' => 'string',
		'plannedPurgeDate' => 'string',
		'spaceViewId' => 'int',
		'state' => 'string',
		'taxAmount' => 'float',
		'version' => 'int'	);

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
	const STATE_CREATE = 'CREATE';
	const STATE_OPEN = 'OPEN';
	const STATE_OVERDUE = 'OVERDUE';
	const STATE_CANCELED = 'CANCELED';
	const STATE_PAID = 'PAID';
	const STATE_DERECOGNIZED = 'DERECOGNIZED';
	const STATE_NOT_APPLICABLE = 'NOT_APPLICABLE';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_CREATE,
			self::STATE_OPEN,
			self::STATE_OVERDUE,
			self::STATE_CANCELED,
			self::STATE_PAID,
			self::STATE_DERECOGNIZED,
			self::STATE_NOT_APPLICABLE,
		];
	}
	

	/**
	 * 
	 *
	 * @var float
	 */
	private $amount;

	/**
	 * @var \Wallee\Sdk\Model\TransactionCompletion
	 */
	private $completion;

	/**
	 * The date on which the invoice is created on.
	 *
	 * @var string
	 */
	private $createdOn;

	/**
	 * The date on which the invoice is marked as derecognized.
	 *
	 * @var string
	 */
	private $derecognizedOn;

	/**
	 * The date on which the invoice should be paid on.
	 *
	 * @var string
	 */
	private $dueOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $language;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $lineItems;

	/**
	 * 
	 *
	 * @var string
	 */
	private $merchantReference;

	/**
	 * The date on which the invoice is marked as paid. Eventually this date lags behind of the actual paid date.
	 *
	 * @var string
	 */
	private $paidOn;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var string
	 */
	private $plannedPurgeDate;

	/**
	 * @var int
	 */
	private $spaceViewId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * 
	 *
	 * @var float
	 */
	private $taxAmount;

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
		parent::__construct($data);

		if (isset($data['completion']) && $data['completion'] != null) {
			$this->setCompletion($data['completion']);
		}
		if (isset($data['lineItems']) && $data['lineItems'] != null) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['spaceViewId']) && $data['spaceViewId'] != null) {
			$this->setSpaceViewId($data['spaceViewId']);
		}
	}


	/**
	 * Returns amount.
	 *
	 * 
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
	 * @return TransactionInvoice
	 */
	protected function setAmount($amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Returns completion.
	 *
	 * @return \Wallee\Sdk\Model\TransactionCompletion
	 */
	public function getCompletion() {
		return $this->completion;
	}

	/**
	 * Sets completion.
	 *
	 * @param \Wallee\Sdk\Model\TransactionCompletion $completion
	 * @return TransactionInvoice
	 */
	public function setCompletion($completion) {
		$this->completion = $completion;

		return $this;
	}

	/**
	 * Returns createdOn.
	 *
	 * The date on which the invoice is created on.
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
	 * @return TransactionInvoice
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns derecognizedOn.
	 *
	 * The date on which the invoice is marked as derecognized.
	 *
	 * @return string
	 */
	public function getDerecognizedOn() {
		return $this->derecognizedOn;
	}

	/**
	 * Sets derecognizedOn.
	 *
	 * @param string $derecognizedOn
	 * @return TransactionInvoice
	 */
	protected function setDerecognizedOn($derecognizedOn) {
		$this->derecognizedOn = $derecognizedOn;

		return $this;
	}

	/**
	 * Returns dueOn.
	 *
	 * The date on which the invoice should be paid on.
	 *
	 * @return string
	 */
	public function getDueOn() {
		return $this->dueOn;
	}

	/**
	 * Sets dueOn.
	 *
	 * @param string $dueOn
	 * @return TransactionInvoice
	 */
	protected function setDueOn($dueOn) {
		$this->dueOn = $dueOn;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * 
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
	 * @return TransactionInvoice
	 */
	protected function setExternalId($externalId) {
		$this->externalId = $externalId;

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
	 * @return TransactionInvoice
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * 
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
	 * @return TransactionInvoice
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

		return $this;
	}

	/**
	 * Returns merchantReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMerchantReference() {
		return $this->merchantReference;
	}

	/**
	 * Sets merchantReference.
	 *
	 * @param string $merchantReference
	 * @return TransactionInvoice
	 */
	protected function setMerchantReference($merchantReference) {
		$this->merchantReference = $merchantReference;

		return $this;
	}

	/**
	 * Returns paidOn.
	 *
	 * The date on which the invoice is marked as paid. Eventually this date lags behind of the actual paid date.
	 *
	 * @return string
	 */
	public function getPaidOn() {
		return $this->paidOn;
	}

	/**
	 * Sets paidOn.
	 *
	 * @param string $paidOn
	 * @return TransactionInvoice
	 */
	protected function setPaidOn($paidOn) {
		$this->paidOn = $paidOn;

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
	 * @return TransactionInvoice
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns spaceViewId.
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
	 * @return TransactionInvoice
	 */
	public function setSpaceViewId($spaceViewId) {
		$this->spaceViewId = $spaceViewId;

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
	 * @return TransactionInvoice
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'OPEN', 'OVERDUE', 'CANCELED', 'PAID', 'DERECOGNIZED', 'NOT_APPLICABLE');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'OPEN', 'OVERDUE', 'CANCELED', 'PAID', 'DERECOGNIZED', 'NOT_APPLICABLE'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns taxAmount.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getTaxAmount() {
		return $this->taxAmount;
	}

	/**
	 * Sets taxAmount.
	 *
	 * @param float $taxAmount
	 * @return TransactionInvoice
	 */
	protected function setTaxAmount($taxAmount) {
		$this->taxAmount = $taxAmount;

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
	 * @return TransactionInvoice
	 */
	protected function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getAmount() === null) {
			throw new ValidationException("'amount' can't be null", 'amount', $this);
		}
		if ($this->getCreatedOn() === null) {
			throw new ValidationException("'createdOn' can't be null", 'createdOn', $this);
		}
		if ($this->getLineItems() === null) {
			throw new ValidationException("'lineItems' can't be null", 'lineItems', $this);
		}
		if ($this->getMerchantReference() === null) {
			throw new ValidationException("'merchantReference' can't be null", 'merchantReference', $this);
		}
		$allowed_values = ["CREATE", "OPEN", "OVERDUE", "CANCELED", "PAID", "DERECOGNIZED", "NOT_APPLICABLE"];
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
		}

		if ($this->getTaxAmount() === null) {
			throw new ValidationException("'taxAmount' can't be null", 'taxAmount', $this);
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

