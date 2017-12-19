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
 * SubscriptionLedgerEntryCreate model
 *
 * @category    Class
 * @description The subscription ledger entry represents a single change on the subscription balance.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionLedgerEntryCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionLedgerEntry.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'amountIncludingTax' => 'float',
		'externalId' => 'string',
		'quantity' => 'float',
		'subscriptionVersion' => 'int',
		'taxes' => '\Wallee\Sdk\Model\TaxCreate[]',
		'title' => 'string'	);

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
	 * @var float
	 */
	private $amountIncludingTax;

	/**
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * 
	 *
	 * @var float
	 */
	private $quantity;

	/**
	 * 
	 *
	 * @var int
	 */
	private $subscriptionVersion;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\TaxCreate[]
	 */
	private $taxes;

	/**
	 * 
	 *
	 * @var string
	 */
	private $title;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['amountIncludingTax'])) {
			$this->setAmountIncludingTax($data['amountIncludingTax']);
		}
		if (isset($data['externalId'])) {
			$this->setExternalId($data['externalId']);
		}
		if (isset($data['quantity'])) {
			$this->setQuantity($data['quantity']);
		}
		if (isset($data['subscriptionVersion'])) {
			$this->setSubscriptionVersion($data['subscriptionVersion']);
		}
		if (isset($data['taxes'])) {
			$this->setTaxes($data['taxes']);
		}
		if (isset($data['title'])) {
			$this->setTitle($data['title']);
		}
	}


	/**
	 * Returns amountIncludingTax.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getAmountIncludingTax() {
		return $this->amountIncludingTax;
	}

	/**
	 * Sets amountIncludingTax.
	 *
	 * @param float $amountIncludingTax
	 * @return SubscriptionLedgerEntryCreate
	 */
	public function setAmountIncludingTax($amountIncludingTax) {
		$this->amountIncludingTax = $amountIncludingTax;

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
	 * @return SubscriptionLedgerEntryCreate
	 */
	public function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
	}

	/**
	 * Returns quantity.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * Sets quantity.
	 *
	 * @param float $quantity
	 * @return SubscriptionLedgerEntryCreate
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;

		return $this;
	}

	/**
	 * Returns subscriptionVersion.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSubscriptionVersion() {
		return $this->subscriptionVersion;
	}

	/**
	 * Sets subscriptionVersion.
	 *
	 * @param int $subscriptionVersion
	 * @return SubscriptionLedgerEntryCreate
	 */
	public function setSubscriptionVersion($subscriptionVersion) {
		$this->subscriptionVersion = $subscriptionVersion;

		return $this;
	}

	/**
	 * Returns taxes.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\TaxCreate[]
	 */
	public function getTaxes() {
		return $this->taxes;
	}

	/**
	 * Sets taxes.
	 *
	 * @param \Wallee\Sdk\Model\TaxCreate[] $taxes
	 * @return SubscriptionLedgerEntryCreate
	 */
	public function setTaxes($taxes) {
		$this->taxes = $taxes;

		return $this;
	}

	/**
	 * Returns title.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets title.
	 *
	 * @param string $title
	 * @return SubscriptionLedgerEntryCreate
	 */
	public function setTitle($title) {
		$this->title = $title;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getAmountIncludingTax() === null) {
			throw new ValidationException("'amountIncludingTax' can't be null", 'amountIncludingTax', $this);
		}
		if ($this->getExternalId() === null) {
			throw new ValidationException("'externalId' can't be null", 'externalId', $this);
		}
		if ($this->getQuantity() === null) {
			throw new ValidationException("'quantity' can't be null", 'quantity', $this);
		}
		if ($this->getSubscriptionVersion() === null) {
			throw new ValidationException("'subscriptionVersion' can't be null", 'subscriptionVersion', $this);
		}
		if ($this->getTitle() === null) {
			throw new ValidationException("'title' can't be null", 'title', $this);
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

