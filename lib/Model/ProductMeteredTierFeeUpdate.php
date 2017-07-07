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
 * ProductMeteredTierFeeUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ProductMeteredTierFeeUpdate extends ProductMeteredTierFee  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ProductMeteredTierFee.Update';

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

		if (isset($data['fee']) && $data['fee'] != null) {
			$this->setFee($data['fee']);
		}
		if (isset($data['meteredFee']) && $data['meteredFee'] != null) {
			$this->setMeteredFee($data['meteredFee']);
		}
		if (isset($data['startRange']) && $data['startRange'] != null) {
			$this->setStartRange($data['startRange']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns fee.
	 *
	 * The fee determines the amount which is charged. The consumed metric is multiplied by the defined fee. The resulting amount is charged at the end of the period.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]
	 */
	public function getFee() {
		return parent::getFee();
	}

	/**
	 * Sets fee.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[] $fee
	 * @return ProductMeteredTierFeeUpdate
	 */
	public function setFee($fee) {
		return parent::setFee($fee);
	}

	/**
	 * Returns meteredFee.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getMeteredFee() {
		return parent::getMeteredFee();
	}

	/**
	 * Sets meteredFee.
	 *
	 * @param int $meteredFee
	 * @return ProductMeteredTierFeeUpdate
	 */
	public function setMeteredFee($meteredFee) {
		return parent::setMeteredFee($meteredFee);
	}

	/**
	 * Returns startRange.
	 *
	 * The start range defines the metered consumption of the metric from which on the defined fee gets applied. This means when a subscription consumes a value of 10 or more and the start range is set to 10 the fee defined on the tier will be applied.
	 *
	 * @return float
	 */
	public function getStartRange() {
		return parent::getStartRange();
	}

	/**
	 * Sets startRange.
	 *
	 * @param float $startRange
	 * @return ProductMeteredTierFeeUpdate
	 */
	public function setStartRange($startRange) {
		return parent::setStartRange($startRange);
	}

	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return parent::getId();
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return ProductMeteredTierFeeUpdate
	 */
	public function setId($id) {
		return parent::setId($id);
	}

	/**
	 * Returns version.
	 *
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @return int
	 */
	public function getVersion() {
		return parent::getVersion();
	}

	/**
	 * Sets version.
	 *
	 * @param int $version
	 * @return ProductMeteredTierFeeUpdate
	 */
	public function setVersion($version) {
		return parent::setVersion($version);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getId() === null) {
			throw new ValidationException("'id' can't be null", 'id', $this);
		}
		if ($this->getVersion() === null) {
			throw new ValidationException("'version' can't be null", 'version', $this);
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

