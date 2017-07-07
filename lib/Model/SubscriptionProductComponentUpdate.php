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
 * SubscriptionProductComponentUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductComponentUpdate extends SubscriptionProductComponent  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductComponent.Update';

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

		if (isset($data['componentChangeWeight']) && $data['componentChangeWeight'] != null) {
			$this->setComponentChangeWeight($data['componentChangeWeight']);
		}
		if (isset($data['componentGroup']) && $data['componentGroup'] != null) {
			$this->setComponentGroup($data['componentGroup']);
		}
		if (isset($data['defaultComponent']) && $data['defaultComponent'] != null) {
			$this->setDefaultComponent($data['defaultComponent']);
		}
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['reference']) && $data['reference'] != null) {
			$this->setReference($data['reference']);
		}
		if (isset($data['sortOrder']) && $data['sortOrder'] != null) {
			$this->setSortOrder($data['sortOrder']);
		}
		if (isset($data['taxClass']) && $data['taxClass'] != null) {
			$this->setTaxClass($data['taxClass']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns componentChangeWeight.
	 *
	 * The change weight determines whether if a component change is considered as upgrade or downgrade. If product component with a weight 10 is changed to a product component with a weight 20, the change is considered as upgrade. On the other hand a change from 20 to 10 is considered as a downgrade.
	 *
	 * @return int
	 */
	public function getComponentChangeWeight() {
		return parent::getComponentChangeWeight();
	}

	/**
	 * Sets componentChangeWeight.
	 *
	 * @param int $componentChangeWeight
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setComponentChangeWeight($componentChangeWeight) {
		return parent::setComponentChangeWeight($componentChangeWeight);
	}

	/**
	 * Returns componentGroup.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getComponentGroup() {
		return parent::getComponentGroup();
	}

	/**
	 * Sets componentGroup.
	 *
	 * @param int $componentGroup
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setComponentGroup($componentGroup) {
		return parent::setComponentGroup($componentGroup);
	}

	/**
	 * Returns defaultComponent.
	 *
	 * When a component is marked as a 'default' component it is used when no other component is selected by the user.
	 *
	 * @return bool
	 */
	public function getDefaultComponent() {
		return parent::getDefaultComponent();
	}

	/**
	 * Sets defaultComponent.
	 *
	 * @param bool $defaultComponent
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setDefaultComponent($defaultComponent) {
		return parent::setDefaultComponent($defaultComponent);
	}

	/**
	 * Returns description.
	 *
	 * The component description may contain a longer description which gives the subscriber a better understanding of what the component contains.
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
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setDescription($description) {
		return parent::setDescription($description);
	}

	/**
	 * Returns name.
	 *
	 * The component name is shown to the subscriber. It should describe in few words what the component does contain.
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
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setName($name) {
		return parent::setName($name);
	}

	/**
	 * Returns reference.
	 *
	 * The component reference is used to identify the component by external systems and it marks components to represent the same component within different product versions.
	 *
	 * @return int
	 */
	public function getReference() {
		return parent::getReference();
	}

	/**
	 * Sets reference.
	 *
	 * @param int $reference
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setReference($reference) {
		return parent::setReference($reference);
	}

	/**
	 * Returns sortOrder.
	 *
	 * The sort order controls in which order the component is listed. The sort order is used to order the components in ascending order.
	 *
	 * @return int
	 */
	public function getSortOrder() {
		return parent::getSortOrder();
	}

	/**
	 * Sets sortOrder.
	 *
	 * @param int $sortOrder
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setSortOrder($sortOrder) {
		return parent::setSortOrder($sortOrder);
	}

	/**
	 * Returns taxClass.
	 *
	 * The tax class of the component determines the taxes which are applicable on all fees linked with the component.
	 *
	 * @return int
	 */
	public function getTaxClass() {
		return parent::getTaxClass();
	}

	/**
	 * Sets taxClass.
	 *
	 * @param int $taxClass
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setTaxClass($taxClass) {
		return parent::setTaxClass($taxClass);
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
	 * @return SubscriptionProductComponentUpdate
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
	 * @return SubscriptionProductComponentUpdate
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

