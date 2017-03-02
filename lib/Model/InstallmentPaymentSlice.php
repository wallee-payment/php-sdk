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
 * InstallmentPaymentSlice model
 *
 * @category    Class
 * @description An installment payment slice represents a single transaction of money from the buyer to the merchant.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class InstallmentPaymentSlice extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'InstallmentPaymentSlice';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'chargeOn' => 'string',
		'createdOn' => 'string',
		'installmentPayment' => '\Wallee\Sdk\Model\InstallmentPayment',
		'lineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'plannedPurgeDate' => 'string',
		'state' => 'string',
		'transaction' => '\Wallee\Sdk\Model\Transaction',
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
	const STATE_SCHEDULED = 'SCHEDULED';
	const STATE_CANCELED = 'CANCELED';
	const STATE_PREPARE_PROCESSING = 'PREPARE_PROCESSING';
	const STATE_PROCESSING = 'PROCESSING';
	const STATE_FAILED = 'FAILED';
	const STATE_SUCCESSFUL = 'SUCCESSFUL';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_CREATE,
			self::STATE_SCHEDULED,
			self::STATE_CANCELED,
			self::STATE_PREPARE_PROCESSING,
			self::STATE_PROCESSING,
			self::STATE_FAILED,
			self::STATE_SUCCESSFUL,
		];
	}
	

	/**
	 * 
	 *
	 * @var string
	 */
	private $chargeOn;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var string
	 */
	private $createdOn;

	/**
	 * @var \Wallee\Sdk\Model\InstallmentPayment
	 */
	private $installmentPayment;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $lineItems;

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
	 * @var \Wallee\Sdk\Model\Transaction
	 */
	private $transaction;

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

		if (isset($data['installmentPayment']) && $data['installmentPayment'] != null) {
			$this->setInstallmentPayment($data['installmentPayment']);
		}
		if (isset($data['lineItems']) && $data['lineItems'] != null) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['transaction']) && $data['transaction'] != null) {
			$this->setTransaction($data['transaction']);
		}
	}


	/**
	 * Returns chargeOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getChargeOn() {
		return $this->chargeOn;
	}

	/**
	 * Sets chargeOn.
	 *
	 * @param string $chargeOn
	 * @return InstallmentPaymentSlice
	 */
	protected function setChargeOn($chargeOn) {
		$this->chargeOn = $chargeOn;

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
	 * @return InstallmentPaymentSlice
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns installmentPayment.
	 *
	 * @return \Wallee\Sdk\Model\InstallmentPayment
	 */
	public function getInstallmentPayment() {
		return $this->installmentPayment;
	}

	/**
	 * Sets installmentPayment.
	 *
	 * @param \Wallee\Sdk\Model\InstallmentPayment $installmentPayment
	 * @return InstallmentPaymentSlice
	 */
	public function setInstallmentPayment($installmentPayment) {
		$this->installmentPayment = $installmentPayment;

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
	 * @return InstallmentPaymentSlice
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

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
	 * @return InstallmentPaymentSlice
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
	 * @return InstallmentPaymentSlice
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'SCHEDULED', 'CANCELED', 'PREPARE_PROCESSING', 'PROCESSING', 'FAILED', 'SUCCESSFUL');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'SCHEDULED', 'CANCELED', 'PREPARE_PROCESSING', 'PROCESSING', 'FAILED', 'SUCCESSFUL'");
		}
		$this->state = $state;

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
	 * @return InstallmentPaymentSlice
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

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
	 * @return InstallmentPaymentSlice
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

		$allowed_values = ["CREATE", "SCHEDULED", "CANCELED", "PREPARE_PROCESSING", "PROCESSING", "FAILED", "SUCCESSFUL"];
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

