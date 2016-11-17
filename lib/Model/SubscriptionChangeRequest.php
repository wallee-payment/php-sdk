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
 * SubscriptionChangeRequest model
 *
 * @category    Class
 * @description The subscription change request allows to change a subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionChangeRequest  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'SubscriptionChangeRequest';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'currency' => 'string',
        'product' => '\Wallee\Sdk\Model\SubscriptionProduct',
        'respectTerminationPeriod' => 'bool',
        'selectedComponents' => '\Wallee\Sdk\Model\SubscriptionProductComponentReference[]',
        'subscription' => '\Wallee\Sdk\Model\Subscription'    );

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
     * @var string
     */
    private $currency;
    
    /**
     * @var \Wallee\Sdk\Model\SubscriptionProduct
     */
    private $product;
    
    /**
     * The subscription version may be retired. The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately.
     *
     * @var bool
     */
    private $respectTerminationPeriod;
    
    /**
     * 
     *
     * @var \Wallee\Sdk\Model\SubscriptionProductComponentReference[]
     */
    private $selectedComponents;
    
    /**
     * @var \Wallee\Sdk\Model\Subscription
     */
    private $subscription;
    

    /**
     * Constructor.
     *
     * @param mixed[] $data an associated array of property values initializing the model
     */
    public function __construct(array $data = null) {
        $this->setCurrency(isset($data['currency']) ? $data['currency'] : null);
        $this->setProduct(isset($data['product']) ? $data['product'] : null);
        $this->setRespectTerminationPeriod(isset($data['respectTerminationPeriod']) ? $data['respectTerminationPeriod'] : null);
        $this->setSelectedComponents(isset($data['selectedComponents']) ? $data['selectedComponents'] : null);
        $this->setSubscription(isset($data['subscription']) ? $data['subscription'] : null);
    }


    /**
     * Returns currency.
     *
     * 
     *
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * Sets currency.
     *
     * @param string $currency
     * @return SubscriptionChangeRequest
     */
    public function setCurrency($currency) {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Returns product.
     *
     * @return \Wallee\Sdk\Model\SubscriptionProduct
     */
    public function getProduct() {
        return $this->product;
    }

    /**
     * Sets product.
     *
     * @param \Wallee\Sdk\Model\SubscriptionProduct $product
     * @return SubscriptionChangeRequest
     */
    public function setProduct($product) {
        $this->product = $product;

        return $this;
    }

    /**
     * Returns respectTerminationPeriod.
     *
     * The subscription version may be retired. The respect termination period controls whether the termination period configured on the product version should be respected or if the operation should take effect immediately.
     *
     * @return bool
     */
    public function getRespectTerminationPeriod() {
        return $this->respectTerminationPeriod;
    }

    /**
     * Sets respectTerminationPeriod.
     *
     * @param bool $respectTerminationPeriod
     * @return SubscriptionChangeRequest
     */
    public function setRespectTerminationPeriod($respectTerminationPeriod) {
        $this->respectTerminationPeriod = $respectTerminationPeriod;

        return $this;
    }

    /**
     * Returns selectedComponents.
     *
     * 
     *
     * @return \Wallee\Sdk\Model\SubscriptionProductComponentReference[]
     */
    public function getSelectedComponents() {
        return $this->selectedComponents;
    }

    /**
     * Sets selectedComponents.
     *
     * @param \Wallee\Sdk\Model\SubscriptionProductComponentReference[] $selectedComponents
     * @return SubscriptionChangeRequest
     */
    public function setSelectedComponents($selectedComponents) {
        $this->selectedComponents = $selectedComponents;

        return $this;
    }

    /**
     * Returns subscription.
     *
     * @return \Wallee\Sdk\Model\Subscription
     */
    public function getSubscription() {
        return $this->subscription;
    }

    /**
     * Sets subscription.
     *
     * @param \Wallee\Sdk\Model\Subscription $subscription
     * @return SubscriptionChangeRequest
     */
    public function setSubscription($subscription) {
        $this->subscription = $subscription;

        return $this;
    }
    
    /**
     * Validates the model's properties and throws a ValidationException if the validation fails.
     *
     * @throws ValidationException
     */
    public function validate() {
        
        if ($this->getCurrency() === null) {
        	throw new ValidationException("'currency' can't be null", 'currency', $this);
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
