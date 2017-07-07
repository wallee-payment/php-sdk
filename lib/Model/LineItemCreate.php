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
 * LineItemCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class LineItemCreate extends LineItem  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'LineItem.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['amountIncludingTax']) && $data['amountIncludingTax'] != null) {
			$this->setAmountIncludingTax($data['amountIncludingTax']);
		}
		if (isset($data['attributes']) && $data['attributes'] != null) {
			$this->setAttributes($data['attributes']);
		}
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['quantity']) && $data['quantity'] != null) {
			$this->setQuantity($data['quantity']);
		}
		if (isset($data['shippingRequired']) && $data['shippingRequired'] != null) {
			$this->setShippingRequired($data['shippingRequired']);
		}
		if (isset($data['sku']) && $data['sku'] != null) {
			$this->setSku($data['sku']);
		}
		if (isset($data['taxes']) && $data['taxes'] != null) {
			$this->setTaxes($data['taxes']);
		}
		if (isset($data['type']) && $data['type'] != null) {
			$this->setType($data['type']);
		}
		if (isset($data['uniqueId']) && $data['uniqueId'] != null) {
			$this->setUniqueId($data['uniqueId']);
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
		return parent::getAmountIncludingTax();
	}

	/**
	 * Sets amountIncludingTax.
	 *
	 * @param float $amountIncludingTax
	 * @return LineItemCreate
	 */
	public function setAmountIncludingTax($amountIncludingTax) {
		return parent::setAmountIncludingTax($amountIncludingTax);
	}

	/**
	 * Returns attributes.
	 *
	 * 
	 *
	 * @return map[string,\Wallee\Sdk\Model\LineItemAttributeCreate]
	 */
	public function getAttributes() {
		return parent::getAttributes();
	}

	/**
	 * Sets attributes.
	 *
	 * @param map[string,\Wallee\Sdk\Model\LineItemAttributeCreate] $attributes
	 * @return LineItemCreate
	 */
	public function setAttributes($attributes) {
		return parent::setAttributes($attributes);
	}

	/**
	 * Returns name.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getName() {
		return parent::getName();
	}

	/**
	 * Sets name.
	 *
	 * @param string $name
	 * @return LineItemCreate
	 */
	public function setName($name) {
		return parent::setName($name);
	}

	/**
	 * Returns quantity.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getQuantity() {
		return parent::getQuantity();
	}

	/**
	 * Sets quantity.
	 *
	 * @param float $quantity
	 * @return LineItemCreate
	 */
	public function setQuantity($quantity) {
		return parent::setQuantity($quantity);
	}

	/**
	 * Returns shippingRequired.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getShippingRequired() {
		return parent::getShippingRequired();
	}

	/**
	 * Sets shippingRequired.
	 *
	 * @param bool $shippingRequired
	 * @return LineItemCreate
	 */
	public function setShippingRequired($shippingRequired) {
		return parent::setShippingRequired($shippingRequired);
	}

	/**
	 * Returns sku.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSku() {
		return parent::getSku();
	}

	/**
	 * Sets sku.
	 *
	 * @param string $sku
	 * @return LineItemCreate
	 */
	public function setSku($sku) {
		return parent::setSku($sku);
	}

	/**
	 * Returns taxes.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\TaxCreate[]
	 */
	public function getTaxes() {
		return parent::getTaxes();
	}

	/**
	 * Sets taxes.
	 *
	 * @param \Wallee\Sdk\Model\TaxCreate[] $taxes
	 * @return LineItemCreate
	 */
	public function setTaxes($taxes) {
		return parent::setTaxes($taxes);
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItemType
	 */
	public function getType() {
		return parent::getType();
	}

	/**
	 * Sets type.
	 *
	 * @param \Wallee\Sdk\Model\LineItemType $type
	 * @return LineItemCreate
	 */
	public function setType($type) {
		return parent::setType($type);
	}

	/**
	 * Returns uniqueId.
	 *
	 * The unique id identifies the line item within the set of line items associated with the transaction.
	 *
	 * @return string
	 */
	public function getUniqueId() {
		return parent::getUniqueId();
	}

	/**
	 * Sets uniqueId.
	 *
	 * @param string $uniqueId
	 * @return LineItemCreate
	 */
	public function setUniqueId($uniqueId) {
		return parent::setUniqueId($uniqueId);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getAmountIncludingTax() === null) {
			throw new ValidationException("'amountIncludingTax' can't be null", 'amountIncludingTax', $this);
		}
		if ($this->getName() === null) {
			throw new ValidationException("'name' can't be null", 'name', $this);
		}
		if ($this->getQuantity() === null) {
			throw new ValidationException("'quantity' can't be null", 'quantity', $this);
		}
		if ($this->getType() === null) {
			throw new ValidationException("'type' can't be null", 'type', $this);
		}
		if ($this->getUniqueId() === null) {
			throw new ValidationException("'uniqueId' can't be null", 'uniqueId', $this);
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

