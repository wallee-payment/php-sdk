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
 * ProductMeteredTierFee model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ProductMeteredTierFee  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ProductMeteredTierFee';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'fee' => '\Wallee\Sdk\Model\PersistableCurrencyAmount[]',
		'id' => 'int',
		'meteredFee' => '\Wallee\Sdk\Model\ProductMeteredFee',
		'startRange' => 'float',
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
	 * The fee determines the amount which is charged. The consumed metric is multiplied by the defined fee. The resulting amount is charged at the end of the period.
	 *
	 * @var \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	private $fee;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\ProductMeteredFee
	 */
	private $meteredFee;

	/**
	 * The start range defines the metered consumption of the metric from which on the defined fee gets applied. This means when a subscription consumes a value of 10 or more and the start range is set to 10 the fee defined on the tier will be applied.
	 *
	 * @var float
	 */
	private $startRange;

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
		if (isset($data['fee'])) {
			$this->setFee($data['fee']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['meteredFee'])) {
			$this->setMeteredFee($data['meteredFee']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns fee.
	 *
	 * The fee determines the amount which is charged. The consumed metric is multiplied by the defined fee. The resulting amount is charged at the end of the period.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	public function getFee() {
		return $this->fee;
	}

	/**
	 * Sets fee.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmount[] $fee
	 * @return ProductMeteredTierFee
	 */
	public function setFee($fee) {
		$this->fee = $fee;

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
	 * @return ProductMeteredTierFee
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns meteredFee.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\ProductMeteredFee
	 */
	public function getMeteredFee() {
		return $this->meteredFee;
	}

	/**
	 * Sets meteredFee.
	 *
	 * @param \Wallee\Sdk\Model\ProductMeteredFee $meteredFee
	 * @return ProductMeteredTierFee
	 */
	public function setMeteredFee($meteredFee) {
		$this->meteredFee = $meteredFee;

		return $this;
	}

	/**
	 * Returns startRange.
	 *
	 * The start range defines the metered consumption of the metric from which on the defined fee gets applied. This means when a subscription consumes a value of 10 or more and the start range is set to 10 the fee defined on the tier will be applied.
	 *
	 * @return float
	 */
	public function getStartRange() {
		return $this->startRange;
	}

	/**
	 * Sets startRange.
	 *
	 * @param float $startRange
	 * @return ProductMeteredTierFee
	 */
	protected function setStartRange($startRange) {
		$this->startRange = $startRange;

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
	 * @return ProductMeteredTierFee
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

