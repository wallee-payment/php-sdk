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
 * ProductSetupFeeUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ProductSetupFeeUpdate extends ProductSetupFee  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ProductSetupFee.Update';

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
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['onDowngradeCreditedAmount']) && $data['onDowngradeCreditedAmount'] != null) {
			$this->setOnDowngradeCreditedAmount($data['onDowngradeCreditedAmount']);
		}
		if (isset($data['onUpgradeCreditedAmount']) && $data['onUpgradeCreditedAmount'] != null) {
			$this->setOnUpgradeCreditedAmount($data['onUpgradeCreditedAmount']);
		}
		if (isset($data['setupFee']) && $data['setupFee'] != null) {
			$this->setSetupFee($data['setupFee']);
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
	 * @return ProductSetupFeeUpdate
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
	 * @return ProductSetupFeeUpdate
	 */
	public function setDescription($description) {
		return parent::setDescription($description);
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
	 * @return ProductSetupFeeUpdate
	 */
	public function setName($name) {
		return parent::setName($name);
	}

	/**
	 * Returns onDowngradeCreditedAmount.
	 *
	 * When the subscription is changed and the change is considered as a downgrade the amount defined by this property will be credited to the subscriber.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]
	 */
	public function getOnDowngradeCreditedAmount() {
		return parent::getOnDowngradeCreditedAmount();
	}

	/**
	 * Sets onDowngradeCreditedAmount.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[] $onDowngradeCreditedAmount
	 * @return ProductSetupFeeUpdate
	 */
	public function setOnDowngradeCreditedAmount($onDowngradeCreditedAmount) {
		return parent::setOnDowngradeCreditedAmount($onDowngradeCreditedAmount);
	}

	/**
	 * Returns onUpgradeCreditedAmount.
	 *
	 * When the subscription is changed and the change is considered as a upgrade the amount defined by this property will be credited to the subscriber.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]
	 */
	public function getOnUpgradeCreditedAmount() {
		return parent::getOnUpgradeCreditedAmount();
	}

	/**
	 * Sets onUpgradeCreditedAmount.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[] $onUpgradeCreditedAmount
	 * @return ProductSetupFeeUpdate
	 */
	public function setOnUpgradeCreditedAmount($onUpgradeCreditedAmount) {
		return parent::setOnUpgradeCreditedAmount($onUpgradeCreditedAmount);
	}

	/**
	 * Returns setupFee.
	 *
	 * The setup fee is charged when the subscriber subscribes to this component. The setup fee is debited with the first charge for the subscriptions.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[]
	 */
	public function getSetupFee() {
		return parent::getSetupFee();
	}

	/**
	 * Sets setupFee.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmountUpdate[] $setupFee
	 * @return ProductSetupFeeUpdate
	 */
	public function setSetupFee($setupFee) {
		return parent::setSetupFee($setupFee);
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
	 * @return ProductSetupFeeUpdate
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
	 * @return ProductSetupFeeUpdate
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

