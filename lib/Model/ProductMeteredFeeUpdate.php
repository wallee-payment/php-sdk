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
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['component']) && $data['component'] != null) {
			$this->setComponent($data['component']);
		}
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['metric']) && $data['metric'] != null) {
			$this->setMetric($data['metric']);
		}
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['tierPricing']) && $data['tierPricing'] != null) {
			$this->setTierPricing($data['tierPricing']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns component.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getComponent() {
		return parent::getComponent();
	}

	/**
	 * Sets component.
	 *
	 * @param int $component
	 * @return ProductMeteredFeeUpdate
	 */
	public function setComponent($component) {
		return parent::setComponent($component);
	}

	/**
	 * Returns description.
	 *
	 * The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	public function getDescription() {
		return parent::getDescription();
	}

	/**
	 * Sets description.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $description
	 * @return ProductMeteredFeeUpdate
	 */
	public function setDescription($description) {
		return parent::setDescription($description);
	}

	/**
	 * Returns metric.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getMetric() {
		return parent::getMetric();
	}

	/**
	 * Sets metric.
	 *
	 * @param int $metric
	 * @return ProductMeteredFeeUpdate
	 */
	public function setMetric($metric) {
		return parent::setMetric($metric);
	}

	/**
	 * Returns name.
	 *
	 * The name of the fee should describe for the subscriber in few words for what the fee is for.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	public function getName() {
		return parent::getName();
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $name
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
	 * @return \Wallee\Sdk\Model\ProductMeteredTierPricing
	 */
	public function getTierPricing() {
		return parent::getTierPricing();
	}

	/**
	 * Sets tierPricing.
	 *
	 * @param \Wallee\Sdk\Model\ProductMeteredTierPricing $tierPricing
	 * @return ProductMeteredFeeUpdate
	 */
	public function setTierPricing($tierPricing) {
		return parent::setTierPricing($tierPricing);
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
	 * @return ProductMeteredFeeUpdate
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
	 * @return ProductMeteredFeeUpdate
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

