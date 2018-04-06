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
 * SubscriptionProductComponentUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionProductComponentUpdate  {

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
		'id' => 'int',
		'version' => 'int',
		'componentChangeWeight' => 'int',
		'componentGroup' => 'int',
		'defaultComponent' => 'bool',
		'description' => '\Wallee\Sdk\Model\DatabaseTranslatedStringCreate',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedStringCreate',
		'reference' => 'int',
		'sortOrder' => 'int',
		'taxClass' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;

	/**
	 * The change weight determines whether if a component change is considered as upgrade or downgrade. If product component with a weight 10 is changed to a product component with a weight 20, the change is considered as upgrade. On the other hand a change from 20 to 10 is considered as a downgrade.
	 *
	 * @var int
	 */
	private $componentChangeWeight;

	/**
	 * 
	 *
	 * @var int
	 */
	private $componentGroup;

	/**
	 * When a component is marked as a 'default' component it is used when no other component is selected by the user.
	 *
	 * @var bool
	 */
	private $defaultComponent;

	/**
	 * The component description may contain a longer description which gives the subscriber a better understanding of what the component contains.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	private $description;

	/**
	 * The component name is shown to the subscriber. It should describe in few words what the component does contain.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	private $name;

	/**
	 * The component reference is used to identify the component by external systems and it marks components to represent the same component within different product versions.
	 *
	 * @var int
	 */
	private $reference;

	/**
	 * The sort order controls in which order the component is listed. The sort order is used to order the components in ascending order.
	 *
	 * @var int
	 */
	private $sortOrder;

	/**
	 * The tax class of the component determines the taxes which are applicable on all fees linked with the component.
	 *
	 * @var int
	 */
	private $taxClass;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
		if (isset($data['componentChangeWeight'])) {
			$this->setComponentChangeWeight($data['componentChangeWeight']);
		}
		if (isset($data['componentGroup'])) {
			$this->setComponentGroup($data['componentGroup']);
		}
		if (isset($data['defaultComponent'])) {
			$this->setDefaultComponent($data['defaultComponent']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['reference'])) {
			$this->setReference($data['reference']);
		}
		if (isset($data['sortOrder'])) {
			$this->setSortOrder($data['sortOrder']);
		}
		if (isset($data['taxClass'])) {
			$this->setTaxClass($data['taxClass']);
		}
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
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setId($id) {
		$this->id = $id;

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
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Returns componentChangeWeight.
	 *
	 * The change weight determines whether if a component change is considered as upgrade or downgrade. If product component with a weight 10 is changed to a product component with a weight 20, the change is considered as upgrade. On the other hand a change from 20 to 10 is considered as a downgrade.
	 *
	 * @return int
	 */
	public function getComponentChangeWeight() {
		return $this->componentChangeWeight;
	}

	/**
	 * Sets componentChangeWeight.
	 *
	 * @param int $componentChangeWeight
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setComponentChangeWeight($componentChangeWeight) {
		$this->componentChangeWeight = $componentChangeWeight;

		return $this;
	}

	/**
	 * Returns componentGroup.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getComponentGroup() {
		return $this->componentGroup;
	}

	/**
	 * Sets componentGroup.
	 *
	 * @param int $componentGroup
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setComponentGroup($componentGroup) {
		$this->componentGroup = $componentGroup;

		return $this;
	}

	/**
	 * Returns defaultComponent.
	 *
	 * When a component is marked as a 'default' component it is used when no other component is selected by the user.
	 *
	 * @return bool
	 */
	public function getDefaultComponent() {
		return $this->defaultComponent;
	}

	/**
	 * Sets defaultComponent.
	 *
	 * @param bool $defaultComponent
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setDefaultComponent($defaultComponent) {
		$this->defaultComponent = $defaultComponent;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * The component description may contain a longer description which gives the subscriber a better understanding of what the component contains.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $description
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The component name is shown to the subscriber. It should describe in few words what the component does contain.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $name
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns reference.
	 *
	 * The component reference is used to identify the component by external systems and it marks components to represent the same component within different product versions.
	 *
	 * @return int
	 */
	public function getReference() {
		return $this->reference;
	}

	/**
	 * Sets reference.
	 *
	 * @param int $reference
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setReference($reference) {
		$this->reference = $reference;

		return $this;
	}

	/**
	 * Returns sortOrder.
	 *
	 * The sort order controls in which order the component is listed. The sort order is used to order the components in ascending order.
	 *
	 * @return int
	 */
	public function getSortOrder() {
		return $this->sortOrder;
	}

	/**
	 * Sets sortOrder.
	 *
	 * @param int $sortOrder
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setSortOrder($sortOrder) {
		$this->sortOrder = $sortOrder;

		return $this;
	}

	/**
	 * Returns taxClass.
	 *
	 * The tax class of the component determines the taxes which are applicable on all fees linked with the component.
	 *
	 * @return int
	 */
	public function getTaxClass() {
		return $this->taxClass;
	}

	/**
	 * Sets taxClass.
	 *
	 * @param int $taxClass
	 * @return SubscriptionProductComponentUpdate
	 */
	public function setTaxClass($taxClass) {
		$this->taxClass = $taxClass;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

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

