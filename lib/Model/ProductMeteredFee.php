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
 * ProductMeteredFee model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ProductMeteredFee  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ProductMeteredFee';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'component' => '\Wallee\Sdk\Model\SubscriptionProductComponent',
		'description' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'id' => 'int',
		'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
		'metric' => '\Wallee\Sdk\Model\SubscriptionMetric',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'tierPricing' => 'string',
		'type' => 'string',
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
	 * Values of type.
	 */
	const TYPE_METERED_FEE = 'METERED_FEE';
	const TYPE_SETUP_FEE = 'SETUP_FEE';
	const TYPE_PERIOD_FEE = 'PERIOD_FEE';
	
	/**
	 * Returns allowable values of type.
	 *
	 * @return string[]
	 */
	public function getTypeAllowableValues() {
		return [
			self::TYPE_METERED_FEE,
			self::TYPE_SETUP_FEE,
			self::TYPE_PERIOD_FEE,
		];
	}
	

	/**
	 * @var \Wallee\Sdk\Model\SubscriptionProductComponent
	 */
	private $component;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $description;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $linkedSpaceId;

	/**
	 * @var \Wallee\Sdk\Model\SubscriptionMetric
	 */
	private $metric;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $name;

	/**
	 * The tier pricing determines the calculation method of the tiers. The prices of the different tiers can be applied in different ways. The tier pricing controls this calculation.
	 *
	 * @var string
	 */
	private $tierPricing;

	/**
	 * 
	 *
	 * @var string
	 */
	private $type;

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
		$this->setComponent(isset($data['component']) ? $data['component'] : null);
		$this->setDescription(isset($data['description']) ? $data['description'] : null);
		$this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
		$this->setMetric(isset($data['metric']) ? $data['metric'] : null);
		$this->setName(isset($data['name']) ? $data['name'] : null);
	}


	/**
	 * Returns component.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductComponent
	 */
	public function getComponent() {
		return $this->component;
	}

	/**
	 * Sets component.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductComponent $component
	 * @return ProductMeteredFee
	 */
	public function setComponent($component) {
		$this->component = $component;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $description
	 * @return ProductMeteredFee
	 */
	public function setDescription($description) {
		$this->description = $description;

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
	 * @return ProductMeteredFee
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $linkedSpaceId
	 * @return ProductMeteredFee
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns metric.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionMetric
	 */
	public function getMetric() {
		return $this->metric;
	}

	/**
	 * Sets metric.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionMetric $metric
	 * @return ProductMeteredFee
	 */
	public function setMetric($metric) {
		$this->metric = $metric;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $name
	 * @return ProductMeteredFee
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns tierPricing.
	 *
	 * The tier pricing determines the calculation method of the tiers. The prices of the different tiers can be applied in different ways. The tier pricing controls this calculation.
	 *
	 * @return string
	 */
	public function getTierPricing() {
		return $this->tierPricing;
	}

	/**
	 * Sets tierPricing.
	 *
	 * @param string $tierPricing
	 * @return ProductMeteredFee
	 */
	protected function setTierPricing($tierPricing) {
		$allowed_values = array('CHEAPEST_TIER_PRICING', 'INCREMENTAL_DISCOUNT_PRICING');
		if ((!in_array($tierPricing, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'tierPricing', must be one of 'CHEAPEST_TIER_PRICING', 'INCREMENTAL_DISCOUNT_PRICING'");
		}
		$this->tierPricing = $tierPricing;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param string $type
	 * @return ProductMeteredFee
	 */
	protected function setType($type) {
		$allowed_values = array('METERED_FEE', 'SETUP_FEE', 'PERIOD_FEE');
		if (!is_null($type) && (!in_array($type, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'METERED_FEE', 'SETUP_FEE', 'PERIOD_FEE'");
		}
		$this->type = $type;

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
	 * @return ProductMeteredFee
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

		if ($this->getTierPricing() === null) {
			throw new ValidationException("'tierPricing' can't be null", 'tierPricing', $this);
		}
		$allowed_values = ["CHEAPEST_TIER_PRICING", "INCREMENTAL_DISCOUNT_PRICING"];
		if (!in_array($this->getTierPricing(), $allowed_values)) {
			throw new ValidationException("invalid value for 'tierPricing', must be one of #{allowed_values}.", 'tierPricing', $this);
		}

		$allowed_values = ["METERED_FEE", "SETUP_FEE", "PERIOD_FEE"];
		if (!in_array($this->getType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'type', must be one of #{allowed_values}.", 'type', $this);
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
