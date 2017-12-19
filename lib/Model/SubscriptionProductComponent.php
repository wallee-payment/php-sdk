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
 * SubscriptionProductComponent model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductComponent  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductComponent';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'componentChangeWeight' => 'int',
		'componentGroup' => '\Wallee\Sdk\Model\SubscriptionProductComponentGroup',
		'defaultComponent' => 'bool',
		'description' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'reference' => '\Wallee\Sdk\Model\SubscriptionProductComponentReference',
		'sortOrder' => 'int',
		'taxClass' => '\Wallee\Sdk\Model\TaxClass',
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
	 * The change weight determines whether if a component change is considered as upgrade or downgrade. If product component with a weight 10 is changed to a product component with a weight 20, the change is considered as upgrade. On the other hand a change from 20 to 10 is considered as a downgrade.
	 *
	 * @var int
	 */
	private $componentChangeWeight;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionProductComponentGroup
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
	 * The component name is shown to the subscriber. It should describe in few words what the component does contain.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $name;

	/**
	 * The component reference is used to identify the component by external systems and it marks components to represent the same component within different product versions.
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionProductComponentReference
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
	 * @var \Wallee\Sdk\Model\TaxClass
	 */
	private $taxClass;

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
		if (isset($data['componentGroup'])) {
			$this->setComponentGroup($data['componentGroup']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['reference'])) {
			$this->setReference($data['reference']);
		}
		if (isset($data['taxClass'])) {
			$this->setTaxClass($data['taxClass']);
		}
		if (isset($data['version'])) {
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
		return $this->componentChangeWeight;
	}

	/**
	 * Sets componentChangeWeight.
	 *
	 * @param int $componentChangeWeight
	 * @return SubscriptionProductComponent
	 */
	protected function setComponentChangeWeight($componentChangeWeight) {
		$this->componentChangeWeight = $componentChangeWeight;

		return $this;
	}

	/**
	 * Returns componentGroup.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductComponentGroup
	 */
	public function getComponentGroup() {
		return $this->componentGroup;
	}

	/**
	 * Sets componentGroup.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductComponentGroup $componentGroup
	 * @return SubscriptionProductComponent
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
	 * @return SubscriptionProductComponent
	 */
	protected function setDefaultComponent($defaultComponent) {
		$this->defaultComponent = $defaultComponent;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * The component description may contain a longer description which gives the subscriber a better understanding of what the component contains.
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
	 * @return SubscriptionProductComponent
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
	 * @return SubscriptionProductComponent
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
	 * @return SubscriptionProductComponent
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The component name is shown to the subscriber. It should describe in few words what the component does contain.
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
	 * @return SubscriptionProductComponent
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
	 * @return \Wallee\Sdk\Model\SubscriptionProductComponentReference
	 */
	public function getReference() {
		return $this->reference;
	}

	/**
	 * Sets reference.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductComponentReference $reference
	 * @return SubscriptionProductComponent
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
	 * @return SubscriptionProductComponent
	 */
	protected function setSortOrder($sortOrder) {
		$this->sortOrder = $sortOrder;

		return $this;
	}

	/**
	 * Returns taxClass.
	 *
	 * The tax class of the component determines the taxes which are applicable on all fees linked with the component.
	 *
	 * @return \Wallee\Sdk\Model\TaxClass
	 */
	public function getTaxClass() {
		return $this->taxClass;
	}

	/**
	 * Sets taxClass.
	 *
	 * @param \Wallee\Sdk\Model\TaxClass $taxClass
	 * @return SubscriptionProductComponent
	 */
	public function setTaxClass($taxClass) {
		$this->taxClass = $taxClass;

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
	 * @return SubscriptionProductComponent
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

