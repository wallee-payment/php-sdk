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
 * SubscriptionProductRetirementCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductRetirementCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductRetirement.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'product' => 'int',
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
	private $product;

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
		if (isset($data['product'])) {
			$this->setProduct($data['product']);
		}
		if (isset($data['respectTerminiationPeriodsEnabled'])) {
			$this->setRespectTerminiationPeriodsEnabled($data['respectTerminiationPeriodsEnabled']);
		}
		if (isset($data['targetProduct'])) {
			$this->setTargetProduct($data['targetProduct']);
		}
	}


	/**
	 * Returns product.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * Sets product.
	 *
	 * @param int $product
	 * @return SubscriptionProductRetirementCreate
	 */
	public function setProduct($product) {
		$this->product = $product;

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
	 * @return SubscriptionProductRetirementCreate
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
	 * @return SubscriptionProductRetirementCreate
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

		if ($this->getProduct() === null) {
			throw new ValidationException("'product' can't be null", 'product', $this);
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

