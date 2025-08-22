<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
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

use \ArrayAccess;
use \Wallee\Sdk\ObjectSerializer;

/**
 * PaymentLinkUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PaymentLinkUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentLink.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'version' => 'int',
        'allowed_payment_method_configurations' => '\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
        'applied_space_view' => 'int',
        'available_from' => '\DateTime',
        'available_until' => '\DateTime',
        'billing_address_handling_mode' => '\Wallee\Sdk\Model\PaymentLinkAddressHandlingMode',
        'currency' => 'string',
        'language' => 'string',
        'line_items' => '\Wallee\Sdk\Model\LineItemCreate[]',
        'maximal_number_of_transactions' => 'int',
        'name' => 'string',
        'shipping_address_handling_mode' => '\Wallee\Sdk\Model\PaymentLinkAddressHandlingMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'version' => 'int64',
        'allowed_payment_method_configurations' => null,
        'applied_space_view' => 'int64',
        'available_from' => 'date-time',
        'available_until' => 'date-time',
        'billing_address_handling_mode' => null,
        'currency' => null,
        'language' => null,
        'line_items' => null,
        'maximal_number_of_transactions' => 'int32',
        'name' => null,
        'shipping_address_handling_mode' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'version' => 'version',
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations',
        'applied_space_view' => 'appliedSpaceView',
        'available_from' => 'availableFrom',
        'available_until' => 'availableUntil',
        'billing_address_handling_mode' => 'billingAddressHandlingMode',
        'currency' => 'currency',
        'language' => 'language',
        'line_items' => 'lineItems',
        'maximal_number_of_transactions' => 'maximalNumberOfTransactions',
        'name' => 'name',
        'shipping_address_handling_mode' => 'shippingAddressHandlingMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version' => 'setVersion',
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations',
        'applied_space_view' => 'setAppliedSpaceView',
        'available_from' => 'setAvailableFrom',
        'available_until' => 'setAvailableUntil',
        'billing_address_handling_mode' => 'setBillingAddressHandlingMode',
        'currency' => 'setCurrency',
        'language' => 'setLanguage',
        'line_items' => 'setLineItems',
        'maximal_number_of_transactions' => 'setMaximalNumberOfTransactions',
        'name' => 'setName',
        'shipping_address_handling_mode' => 'setShippingAddressHandlingMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version' => 'getVersion',
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations',
        'applied_space_view' => 'getAppliedSpaceView',
        'available_from' => 'getAvailableFrom',
        'available_until' => 'getAvailableUntil',
        'billing_address_handling_mode' => 'getBillingAddressHandlingMode',
        'currency' => 'getCurrency',
        'language' => 'getLanguage',
        'line_items' => 'getLineItems',
        'maximal_number_of_transactions' => 'getMaximalNumberOfTransactions',
        'name' => 'getName',
        'shipping_address_handling_mode' => 'getShippingAddressHandlingMode'
    ];

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
        $this->container['allowed_payment_method_configurations'] = isset($data['allowed_payment_method_configurations']) ? $data['allowed_payment_method_configurations'] : null;
        
        $this->container['applied_space_view'] = isset($data['applied_space_view']) ? $data['applied_space_view'] : null;
        
        $this->container['available_from'] = isset($data['available_from']) ? $data['available_from'] : null;
        
        $this->container['available_until'] = isset($data['available_until']) ? $data['available_until'] : null;
        
        $this->container['billing_address_handling_mode'] = isset($data['billing_address_handling_mode']) ? $data['billing_address_handling_mode'] : null;
        
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['maximal_number_of_transactions'] = isset($data['maximal_number_of_transactions']) ? $data['maximal_number_of_transactions'] : null;
        
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        
        $this->container['shipping_address_handling_mode'] = isset($data['shipping_address_handling_mode']) ? $data['shipping_address_handling_mode'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        return $invalidProperties;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }


    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }
    

    /**
     * Gets allowed_payment_method_configurations
     *
     * @return \Wallee\Sdk\Model\PaymentMethodConfiguration[]
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param \Wallee\Sdk\Model\PaymentMethodConfiguration[] $allowed_payment_method_configurations The payment method configurations that customers can use for making payments.
     *
     * @return $this
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

        return $this;
    }
    

    /**
     * Gets applied_space_view
     *
     * @return int
     */
    public function getAppliedSpaceView()
    {
        return $this->container['applied_space_view'];
    }

    /**
     * Sets applied_space_view
     *
     * @param int $applied_space_view The payment link can be used within a specific space view, which may apply a customized design to the payment page.
     *
     * @return $this
     */
    public function setAppliedSpaceView($applied_space_view)
    {
        $this->container['applied_space_view'] = $applied_space_view;

        return $this;
    }
    

    /**
     * Gets available_from
     *
     * @return \DateTime
     */
    public function getAvailableFrom()
    {
        return $this->container['available_from'];
    }

    /**
     * Sets available_from
     *
     * @param \DateTime $available_from The earliest date the payment link can be used to initiate a transaction. If no date is provided, the link will be available immediately.
     *
     * @return $this
     */
    public function setAvailableFrom($available_from)
    {
        $this->container['available_from'] = $available_from;

        return $this;
    }
    

    /**
     * Gets available_until
     *
     * @return \DateTime
     */
    public function getAvailableUntil()
    {
        return $this->container['available_until'];
    }

    /**
     * Sets available_until
     *
     * @param \DateTime $available_until The latest date the payment link can be used to initiate a transaction. If no date is provided, the link will remain available indefinitely.
     *
     * @return $this
     */
    public function setAvailableUntil($available_until)
    {
        $this->container['available_until'] = $available_until;

        return $this;
    }
    

    /**
     * Gets billing_address_handling_mode
     *
     * @return \Wallee\Sdk\Model\PaymentLinkAddressHandlingMode
     */
    public function getBillingAddressHandlingMode()
    {
        return $this->container['billing_address_handling_mode'];
    }

    /**
     * Sets billing_address_handling_mode
     *
     * @param \Wallee\Sdk\Model\PaymentLinkAddressHandlingMode $billing_address_handling_mode The handling mode defines whether a billing address is required and specifies how it should be provided.
     *
     * @return $this
     */
    public function setBillingAddressHandlingMode($billing_address_handling_mode)
    {
        $this->container['billing_address_handling_mode'] = $billing_address_handling_mode;

        return $this;
    }
    

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The three-letter currency code (ISO 4217). If not specified, it must be provided in the 'currency' request parameter.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }
    

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language for displaying the payment page. If not specified, it can be supplied via the 'language' request parameter.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets line_items
     *
     * @return \Wallee\Sdk\Model\LineItemCreate[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Wallee\Sdk\Model\LineItemCreate[] $line_items The line items representing what is being sold. If not specified, they can be supplied via request parameters.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }
    

    /**
     * Gets maximal_number_of_transactions
     *
     * @return int
     */
    public function getMaximalNumberOfTransactions()
    {
        return $this->container['maximal_number_of_transactions'];
    }

    /**
     * Sets maximal_number_of_transactions
     *
     * @param int $maximal_number_of_transactions The maximum number of transactions that can be initiated using the payment link.
     *
     * @return $this
     */
    public function setMaximalNumberOfTransactions($maximal_number_of_transactions)
    {
        $this->container['maximal_number_of_transactions'] = $maximal_number_of_transactions;

        return $this;
    }
    

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name used to identify the payment link.
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentLinkUpdate., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    

    /**
     * Gets shipping_address_handling_mode
     *
     * @return \Wallee\Sdk\Model\PaymentLinkAddressHandlingMode
     */
    public function getShippingAddressHandlingMode()
    {
        return $this->container['shipping_address_handling_mode'];
    }

    /**
     * Sets shipping_address_handling_mode
     *
     * @param \Wallee\Sdk\Model\PaymentLinkAddressHandlingMode $shipping_address_handling_mode The handling mode defines whether a shipping address is required and specifies how it should be provided.
     *
     * @return $this
     */
    public function setShippingAddressHandlingMode($shipping_address_handling_mode)
    {
        $this->container['shipping_address_handling_mode'] = $shipping_address_handling_mode;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


