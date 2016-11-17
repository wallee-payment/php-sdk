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
 * SubscriptionProductVersionPending model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductVersionPending extends SubscriptionProductVersionActive  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'SubscriptionProductVersion.Pending';

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
    const STATE_PENDING = 'PENDING';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_OBSOLETE = 'OBSOLETE';
    const STATE_RETIRING = 'RETIRING';
    const STATE_RETIRED = 'RETIRED';
    
    /**
     * Returns allowable values of state.
     *
     * @return string[]
     */
    public function getStateAllowableValues() {
        return [
            self::STATE_PENDING,
            self::STATE_ACTIVE,
            self::STATE_OBSOLETE,
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

        $this->setBillingCycle(isset($data['billingCycle']) ? $data['billingCycle'] : null);
        $this->setComment(isset($data['comment']) ? $data['comment'] : null);
        $this->setDefaultCurrency(isset($data['defaultCurrency']) ? $data['defaultCurrency'] : null);
        $this->setEnabledCurrencies(isset($data['enabledCurrencies']) ? $data['enabledCurrencies'] : null);
        $this->setMinimalNumberOfPeriods(isset($data['minimalNumberOfPeriods']) ? $data['minimalNumberOfPeriods'] : null);
        $this->setName(isset($data['name']) ? $data['name'] : null);
        $this->setNumberOfNoticePeriods(isset($data['numberOfNoticePeriods']) ? $data['numberOfNoticePeriods'] : null);
        $this->setProduct(isset($data['product']) ? $data['product'] : null);
        $this->setState(isset($data['state']) ? $data['state'] : null);
    }


    /**
     * Returns billingCycle.
     *
     * The billing cycle determines the rhythm with which the subscriber is billed. The charging may have different rhythm.
     *
     * @return string
     */
    public function getBillingCycle() {
        return parent::getBillingCycle();
    }

    /**
     * Sets billingCycle.
     *
     * @param string $billingCycle
     * @return SubscriptionProductVersionPending
     */
    public function setBillingCycle($billingCycle) {
        return parent::setBillingCycle($billingCycle);
    }

    /**
     * Returns comment.
     *
     * The comment allows to provide a internal comment for the version. It helps to document why a product was changed. The comment is not disclosed to the subscriber.
     *
     * @return string
     */
    public function getComment() {
        return parent::getComment();
    }

    /**
     * Sets comment.
     *
     * @param string $comment
     * @return SubscriptionProductVersionPending
     */
    public function setComment($comment) {
        return parent::setComment($comment);
    }

    /**
     * Returns defaultCurrency.
     *
     * The default currency has to be used in all fees.
     *
     * @return string
     */
    public function getDefaultCurrency() {
        return parent::getDefaultCurrency();
    }

    /**
     * Sets defaultCurrency.
     *
     * @param string $defaultCurrency
     * @return SubscriptionProductVersionPending
     */
    public function setDefaultCurrency($defaultCurrency) {
        return parent::setDefaultCurrency($defaultCurrency);
    }

    /**
     * Returns enabledCurrencies.
     *
     * The currencies which are enabled can be selected to define component fees. Currencies which are not enabled cannot be used to define fees.
     *
     * @return string[]
     */
    public function getEnabledCurrencies() {
        return parent::getEnabledCurrencies();
    }

    /**
     * Sets enabledCurrencies.
     *
     * @param string[] $enabledCurrencies
     * @return SubscriptionProductVersionPending
     */
    public function setEnabledCurrencies($enabledCurrencies) {
        return parent::setEnabledCurrencies($enabledCurrencies);
    }

    /**
     * Returns minimalNumberOfPeriods.
     *
     * The minimal number of periods determines how long the subscription has to run before the subscription can be terminated.
     *
     * @return int
     */
    public function getMinimalNumberOfPeriods() {
        return parent::getMinimalNumberOfPeriods();
    }

    /**
     * Sets minimalNumberOfPeriods.
     *
     * @param int $minimalNumberOfPeriods
     * @return SubscriptionProductVersionPending
     */
    public function setMinimalNumberOfPeriods($minimalNumberOfPeriods) {
        return parent::setMinimalNumberOfPeriods($minimalNumberOfPeriods);
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
     * @return SubscriptionProductVersionPending
     */
    public function setName($name) {
        return parent::setName($name);
    }

    /**
     * Returns numberOfNoticePeriods.
     *
     * The number of notice periods determines the number of periods which need to be paid between the request to terminate the subscription and the final period.
     *
     * @return int
     */
    public function getNumberOfNoticePeriods() {
        return parent::getNumberOfNoticePeriods();
    }

    /**
     * Sets numberOfNoticePeriods.
     *
     * @param int $numberOfNoticePeriods
     * @return SubscriptionProductVersionPending
     */
    public function setNumberOfNoticePeriods($numberOfNoticePeriods) {
        return parent::setNumberOfNoticePeriods($numberOfNoticePeriods);
    }

    /**
     * Returns product.
     *
     * @return \Wallee\Sdk\Model\SubscriptionProduct
     */
    public function getProduct() {
        return parent::getProduct();
    }

    /**
     * Sets product.
     *
     * @param \Wallee\Sdk\Model\SubscriptionProduct $product
     * @return SubscriptionProductVersionPending
     */
    public function setProduct($product) {
        return parent::setProduct($product);
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
     * @return SubscriptionProductVersionPending
     */
    public function setState($state) {
        $allowed_values = array('PENDING', 'ACTIVE', 'OBSOLETE', 'RETIRING', 'RETIRED');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'PENDING', 'ACTIVE', 'OBSOLETE', 'RETIRING', 'RETIRED'");
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
        
        if ($this->getBillingCycle() === null) {
        	throw new ValidationException("'billingCycle' can't be null", 'billingCycle', $this);
        }
        if ($this->getDefaultCurrency() === null) {
        	throw new ValidationException("'defaultCurrency' can't be null", 'defaultCurrency', $this);
        }
        if ($this->getEnabledCurrencies() === null) {
        	throw new ValidationException("'enabledCurrencies' can't be null", 'enabledCurrencies', $this);
        }
        if ($this->getState() === null) {
        	throw new ValidationException("'state' can't be null", 'state', $this);
        }
        $allowed_values = ["PENDING", "ACTIVE", "OBSOLETE", "RETIRING", "RETIRED"];
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
