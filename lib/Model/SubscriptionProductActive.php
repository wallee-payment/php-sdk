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
 * SubscriptionProductActive model
 *
 * @category    Class
 * @description A subscription product represents a product to which a subscriber can subscribe to. A product defines how much the subscription costs and in what cycles the subscribe is charged.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductActive extends SubscriptionProduct  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'SubscriptionProduct.Active';

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
     * Values of state.
     */ 
    const STATE_CREATE = 'CREATE';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_INACTIVE = 'INACTIVE';
    const STATE_RETIRING = 'RETIRING';
    const STATE_RETIRED = 'RETIRED';
    
    /**
     * Returns allowable values of state.
     *
     * @return string[]
     */
    public function getStateAllowableValues() {
        return [
            self::STATE_CREATE,
            self::STATE_ACTIVE,
            self::STATE_INACTIVE,
            self::STATE_RETIRING,
            self::STATE_RETIRED,
        ];
    }
    
    

    /**
     * Constructor.
     *
     * @param mixed[] $data an associated array of property values initializing the model
     */
    public function __construct(array $data = null) {
        parent::__construct($data);

        $this->setAllowedPaymentMethodConfigurations(isset($data['allowedPaymentMethodConfigurations']) ? $data['allowedPaymentMethodConfigurations'] : null);
        $this->setFailedPaymentSuspensionPeriod(isset($data['failedPaymentSuspensionPeriod']) ? $data['failedPaymentSuspensionPeriod'] : null);
        $this->setName(isset($data['name']) ? $data['name'] : null);
        $this->setSortOrder(isset($data['sortOrder']) ? $data['sortOrder'] : null);
        $this->setState(isset($data['state']) ? $data['state'] : null);
    }


    /**
     * Returns allowedPaymentMethodConfigurations.
     *
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getAllowedPaymentMethodConfigurations() {
        return parent::getAllowedPaymentMethodConfigurations();
    }

    /**
     * Sets allowedPaymentMethodConfigurations.
     *
     * @param \Wallee\Sdk\Model\EntityReference $allowedPaymentMethodConfigurations
     * @return SubscriptionProductActive
     */
    public function setAllowedPaymentMethodConfigurations($allowedPaymentMethodConfigurations) {
        return parent::setAllowedPaymentMethodConfigurations($allowedPaymentMethodConfigurations);
    }

    /**
     * Returns failedPaymentSuspensionPeriod.
     *
     * When a payment fails, the subscription to which the payment belongs to will be suspended. When the suspension is not removed within the specified period the subscription will be terminated. A payment is considered as failed when the subscriber issues a refund or when a subscription charge fails.
     *
     * @return string
     */
    public function getFailedPaymentSuspensionPeriod() {
        return parent::getFailedPaymentSuspensionPeriod();
    }

    /**
     * Sets failedPaymentSuspensionPeriod.
     *
     * @param string $failedPaymentSuspensionPeriod
     * @return SubscriptionProductActive
     */
    public function setFailedPaymentSuspensionPeriod($failedPaymentSuspensionPeriod) {
        return parent::setFailedPaymentSuspensionPeriod($failedPaymentSuspensionPeriod);
    }

    /**
     * Returns name.
     *
     * The product name is used internally to identify the configuration in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
     *
     * @return string
     */
    public function getName() {
        return parent::getName();
    }

    /**
     * Sets name.
     *
     * @param string $name
     * @return SubscriptionProductActive
     */
    public function setName($name) {
        return parent::setName($name);
    }

    /**
     * Returns sortOrder.
     *
     * The sort order controls in which order the product is listed. The sort order is used to order the products in ascending order.
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
     * @return SubscriptionProductActive
     */
    public function setSortOrder($sortOrder) {
        return parent::setSortOrder($sortOrder);
    }

    /**
     * Returns state.
     *
     * 
     *
     * @return string
     */
    public function getState() {
        return parent::getState();
    }

    /**
     * Sets state.
     *
     * @param string $state
     * @return SubscriptionProductActive
     */
    public function setState($state) {
        $allowed_values = array('CREATE', 'ACTIVE', 'INACTIVE', 'RETIRING', 'RETIRED');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'ACTIVE', 'INACTIVE', 'RETIRING', 'RETIRED'");
        }
        return parent::setState($state);
    }
    
    /**
     * Validates the model's properties and throws a ValidationException if the validation fails.
     *
     * @throws ValidationException
     */
    public function validate() {
        parent::validate();
        
        if ($this->getFailedPaymentSuspensionPeriod() === null) {
        	throw new ValidationException("'failedPaymentSuspensionPeriod' can't be null", 'failedPaymentSuspensionPeriod', $this);
        }
        if ($this->getName() === null) {
        	throw new ValidationException("'name' can't be null", 'name', $this);
        }
        $allowed_values = ["CREATE", "ACTIVE", "INACTIVE", "RETIRING", "RETIRED"];
        if (!in_array($this->getState(), $allowed_values)) {
            throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
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
