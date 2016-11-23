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
 * ProductMeteredFeeUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ProductMeteredFeeUpdate extends ProductMeteredFee  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ProductMeteredFee.Update';

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
	 * Values of tierPricing.
	 */
	const TIER_PRICING_CHEAPEST_TIER_PRICING = 'CHEAPEST_TIER_PRICING';
	const TIER_PRICING_INCREMENTAL_DISCOUNT_PRICING = 'INCREMENTAL_DISCOUNT_PRICING';
	
	/**
	 * Returns allowable values of tierPricing.
	 *
	 * @return string[]
	 */
	public function getTierPricingAllowableValues() {
		return [
			self::TIER_PRICING_CHEAPEST_TIER_PRICING,
			self::TIER_PRICING_INCREMENTAL_DISCOUNT_PRICING,
		];
	}
	


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		$this->setComponent(isset($data['component']) ? $data['component'] : null);
		$this->setDescription(isset($data['description']) ? $data['description'] : null);
		$this->setMetric(isset($data['metric']) ? $data['metric'] : null);
		$this->setName(isset($data['name']) ? $data['name'] : null);
		$this->setTierPricing(isset($data['tierPricing']) ? $data['tierPricing'] : null);
	}


	/**
	 * Returns component.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductComponent
	 */
	public function getComponent() {
		return parent::getComponent();
	}

	/**
	 * Sets component.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductComponent $component
	 * @return ProductMeteredFeeUpdate
	 */
	public function setComponent($component) {
		return parent::setComponent($component);
	}

	/**
	 * Returns description.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate
	 */
	public function getDescription() {
		return parent::getDescription();
	}

	/**
	 * Sets description.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate $description
	 * @return ProductMeteredFeeUpdate
	 */
	public function setDescription($description) {
		return parent::setDescription($description);
	}

	/**
	 * Returns metric.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionMetric
	 */
	public function getMetric() {
		return parent::getMetric();
	}

	/**
	 * Sets metric.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionMetric $metric
	 * @return ProductMeteredFeeUpdate
	 */
	public function setMetric($metric) {
		return parent::setMetric($metric);
	}

	/**
	 * Returns name.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate
	 */
	public function getName() {
		return parent::getName();
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate $name
	 * @return ProductMeteredFeeUpdate
	 */
	public function setName($name) {
		return parent::setName($name);
	}

	/**
	 * Returns tierPricing.
	 *
	 * The tier pricing determines the calculation method of the tiers. The prices of the different tiers can be applied in different ways. The tier pricing controls this calculation.
	 *
	 * @return string
	 */
	public function getTierPricing() {
		return parent::getTierPricing();
	}

	/**
	 * Sets tierPricing.
	 *
	 * @param string $tierPricing
	 * @return ProductMeteredFeeUpdate
	 */
	public function setTierPricing($tierPricing) {
		$allowed_values = array('CHEAPEST_TIER_PRICING', 'INCREMENTAL_DISCOUNT_PRICING');
		if ((!in_array($tierPricing, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'tierPricing', must be one of 'CHEAPEST_TIER_PRICING', 'INCREMENTAL_DISCOUNT_PRICING'");
		}
		return parent::setTierPricing($tierPricing);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getTierPricing() === null) {
			throw new ValidationException("'tierPricing' can't be null", 'tierPricing', $this);
		}
		$allowed_values = ["CHEAPEST_TIER_PRICING", "INCREMENTAL_DISCOUNT_PRICING"];
		if (!in_array($this->getTierPricing(), $allowed_values)) {
			throw new ValidationException("invalid value for 'tierPricing', must be one of #{allowed_values}.", 'tierPricing', $this);
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
