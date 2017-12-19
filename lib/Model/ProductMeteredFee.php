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
		'linkedSpaceId' => 'int',
		'metric' => '\Wallee\Sdk\Model\SubscriptionMetric',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'tierPricing' => '\Wallee\Sdk\Model\ProductMeteredTierPricing',
		'type' => '\Wallee\Sdk\Model\ProductFeeType',
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
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionProductComponent
	 */
	private $component;

	/**
	 * The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
	 *
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
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionMetric
	 */
	private $metric;

	/**
	 * The name of the fee should describe for the subscriber in few words for what the fee is for.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $name;

	/**
	 * The tier pricing determines the calculation method of the tiers. The prices of the different tiers can be applied in different ways. The tier pricing controls this calculation.
	 *
	 * @var \Wallee\Sdk\Model\ProductMeteredTierPricing
	 */
	private $tierPricing;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\ProductFeeType
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
		if (isset($data['component'])) {
			$this->setComponent($data['component']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['metric'])) {
			$this->setMetric($data['metric']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['tierPricing'])) {
			$this->setTierPricing($data['tierPricing']);
		}
		if (isset($data['type'])) {
			$this->setType($data['type']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns component.
	 *
	 * 
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
	 * The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
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
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @return int
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param int $linkedSpaceId
	 * @return ProductMeteredFee
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns metric.
	 *
	 * 
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
	 * The name of the fee should describe for the subscriber in few words for what the fee is for.
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
	 * @return \Wallee\Sdk\Model\ProductMeteredTierPricing
	 */
	public function getTierPricing() {
		return $this->tierPricing;
	}

	/**
	 * Sets tierPricing.
	 *
	 * @param \Wallee\Sdk\Model\ProductMeteredTierPricing $tierPricing
	 * @return ProductMeteredFee
	 */
	public function setTierPricing($tierPricing) {
		$this->tierPricing = $tierPricing;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\ProductFeeType
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param \Wallee\Sdk\Model\ProductFeeType $type
	 * @return ProductMeteredFee
	 */
	public function setType($type) {
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

