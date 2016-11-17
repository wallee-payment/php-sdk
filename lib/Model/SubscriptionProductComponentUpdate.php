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

        $this->setComponentChangeWeight(isset($data['componentChangeWeight']) ? $data['componentChangeWeight'] : null);
        $this->setComponentGroup(isset($data['componentGroup']) ? $data['componentGroup'] : null);
        $this->setDefaultComponent(isset($data['defaultComponent']) ? $data['defaultComponent'] : null);
        $this->setDescription(isset($data['description']) ? $data['description'] : null);
        $this->setName(isset($data['name']) ? $data['name'] : null);
        $this->setReference(isset($data['reference']) ? $data['reference'] : null);
        $this->setSortOrder(isset($data['sortOrder']) ? $data['sortOrder'] : null);
        $this->setTaxClass(isset($data['taxClass']) ? $data['taxClass'] : null);
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
     * @return \Wallee\Sdk\Model\SubscriptionProductComponentGroup
     */
    public function getComponentGroup() {
        return parent::getComponentGroup();
    }

    /**
     * Sets componentGroup.
     *
     * @param \Wallee\Sdk\Model\SubscriptionProductComponentGroup $componentGroup
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
     * @return \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate
     */
    public function getDescription() {
        return parent::getDescription();
    }

    /**
     * Sets description.
     *
     * @param \Wallee\Sdk\Model\DatabaseTranslatedStringUpdate $description
     * @return SubscriptionProductComponentUpdate
     */
    public function setDescription($description) {
        return parent::setDescription($description);
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
     * @return SubscriptionProductComponentUpdate
     */
    public function setName($name) {
        return parent::setName($name);
    }

    /**
     * Returns reference.
     *
     * @return \Wallee\Sdk\Model\SubscriptionProductComponentReference
     */
    public function getReference() {
        return parent::getReference();
    }

    /**
     * Sets reference.
     *
     * @param \Wallee\Sdk\Model\SubscriptionProductComponentReference $reference
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
     * @return \Wallee\Sdk\Model\TaxClass
     */
    public function getTaxClass() {
        return parent::getTaxClass();
    }

    /**
     * Sets taxClass.
     *
     * @param \Wallee\Sdk\Model\TaxClass $taxClass
     * @return SubscriptionProductComponentUpdate
     */
    public function setTaxClass($taxClass) {
        return parent::setTaxClass($taxClass);
    }
    
    /**
     * Validates the model's properties and throws a ValidationException if the validation fails.
     *
     * @throws ValidationException
     */
    public function validate() {
        parent::validate();
        
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
