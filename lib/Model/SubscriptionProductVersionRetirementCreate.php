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
 * SubscriptionProductVersionRetirementCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionProductVersionRetirementCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductVersionRetirement.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'productVersion' => 'int',
		'respectTerminiationPeriodsEnabled' => 'bool',
		'targetProduct' => 'int'	);

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
	 * @var int
	 */
	private $productVersion;

	/**
	 * 
	 *
	 * @var bool
	 */
	private $respectTerminiationPeriodsEnabled;

	/**
	 * 
	 *
	 * @var int
	 */
	private $targetProduct;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['productVersion'])) {
			$this->setProductVersion($data['productVersion']);
		}
		if (isset($data['respectTerminiationPeriodsEnabled'])) {
			$this->setRespectTerminiationPeriodsEnabled($data['respectTerminiationPeriodsEnabled']);
		}
		if (isset($data['targetProduct'])) {
			$this->setTargetProduct($data['targetProduct']);
		}
	}


	/**
	 * Returns productVersion.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getProductVersion() {
		return $this->productVersion;
	}

	/**
	 * Sets productVersion.
	 *
	 * @param int $productVersion
	 * @return SubscriptionProductVersionRetirementCreate
	 */
	public function setProductVersion($productVersion) {
		$this->productVersion = $productVersion;

		return $this;
	}

	/**
	 * Returns respectTerminiationPeriodsEnabled.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getRespectTerminiationPeriodsEnabled() {
		return $this->respectTerminiationPeriodsEnabled;
	}

	/**
	 * Sets respectTerminiationPeriodsEnabled.
	 *
	 * @param bool $respectTerminiationPeriodsEnabled
	 * @return SubscriptionProductVersionRetirementCreate
	 */
	public function setRespectTerminiationPeriodsEnabled($respectTerminiationPeriodsEnabled) {
		$this->respectTerminiationPeriodsEnabled = $respectTerminiationPeriodsEnabled;

		return $this;
	}

	/**
	 * Returns targetProduct.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getTargetProduct() {
		return $this->targetProduct;
	}

	/**
	 * Sets targetProduct.
	 *
	 * @param int $targetProduct
	 * @return SubscriptionProductVersionRetirementCreate
	 */
	public function setTargetProduct($targetProduct) {
		$this->targetProduct = $targetProduct;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getProductVersion() === null) {
			throw new ValidationException("'productVersion' can't be null", 'productVersion', $this);
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

