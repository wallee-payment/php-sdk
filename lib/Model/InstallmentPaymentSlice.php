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

use Wallee\Sdk\ValidationException;

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
		'chargeOn' => '\DateTime',
		'createdOn' => '\DateTime',
		'installmentPayment' => '\Wallee\Sdk\Model\InstallmentPayment',
		'lineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'plannedPurgeDate' => '\DateTime',
		'state' => '\Wallee\Sdk\Model\InstallmentPaymentSliceState',
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
	 * 
	 *
	 * @var \DateTime
	 */
	private $chargeOn;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * 
	 *
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
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\InstallmentPaymentSliceState
	 */
	private $state;

	/**
	 * 
	 *
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

		if (isset($data['installmentPayment'])) {
			$this->setInstallmentPayment($data['installmentPayment']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['transaction'])) {
			$this->setTransaction($data['transaction']);
		}
	}


	/**
	 * Returns chargeOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getChargeOn() {
		return $this->chargeOn;
	}

	/**
	 * Sets chargeOn.
	 *
	 * @param \DateTime $chargeOn
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
	 * @return \DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param \DateTime $createdOn
	 * @return InstallmentPaymentSlice
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns installmentPayment.
	 *
	 * 
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
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
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
	 * @return \Wallee\Sdk\Model\InstallmentPaymentSliceState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\InstallmentPaymentSliceState $state
	 * @return InstallmentPaymentSlice
	 */
	public function setState($state) {
		$this->state = $state;

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

