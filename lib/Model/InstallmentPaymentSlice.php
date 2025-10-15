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
 * InstallmentPaymentSlice model
 *
 * @category    Class
 * @description An installment payment slice represents a single transaction of money from the buyer to the merchant.
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class InstallmentPaymentSlice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstallmentPaymentSlice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'charge_on' => '\DateTime',
        'created_on' => '\DateTime',
        'id' => 'int',
        'installment_payment' => '\Wallee\Sdk\Model\InstallmentPayment',
        'line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'linked_space_id' => 'int',
        'linked_transaction' => 'int',
        'planned_purge_date' => '\DateTime',
        'state' => '\Wallee\Sdk\Model\InstallmentPaymentSliceState',
        'transaction' => '\Wallee\Sdk\Model\Transaction',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'charge_on' => 'date-time',
        'created_on' => 'date-time',
        'id' => 'int64',
        'installment_payment' => null,
        'line_items' => null,
        'linked_space_id' => 'int64',
        'linked_transaction' => 'int64',
        'planned_purge_date' => 'date-time',
        'state' => null,
        'transaction' => null,
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'charge_on' => 'chargeOn',
        'created_on' => 'createdOn',
        'id' => 'id',
        'installment_payment' => 'installmentPayment',
        'line_items' => 'lineItems',
        'linked_space_id' => 'linkedSpaceId',
        'linked_transaction' => 'linkedTransaction',
        'planned_purge_date' => 'plannedPurgeDate',
        'state' => 'state',
        'transaction' => 'transaction',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_on' => 'setChargeOn',
        'created_on' => 'setCreatedOn',
        'id' => 'setId',
        'installment_payment' => 'setInstallmentPayment',
        'line_items' => 'setLineItems',
        'linked_space_id' => 'setLinkedSpaceId',
        'linked_transaction' => 'setLinkedTransaction',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'state' => 'setState',
        'transaction' => 'setTransaction',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_on' => 'getChargeOn',
        'created_on' => 'getCreatedOn',
        'id' => 'getId',
        'installment_payment' => 'getInstallmentPayment',
        'line_items' => 'getLineItems',
        'linked_space_id' => 'getLinkedSpaceId',
        'linked_transaction' => 'getLinkedTransaction',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'state' => 'getState',
        'transaction' => 'getTransaction',
        'version' => 'getVersion'
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
        
        $this->container['charge_on'] = isset($data['charge_on']) ? $data['charge_on'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['installment_payment'] = isset($data['installment_payment']) ? $data['installment_payment'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['linked_transaction'] = isset($data['linked_transaction']) ? $data['linked_transaction'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets charge_on
     *
     * @return \DateTime
     */
    public function getChargeOn()
    {
        return $this->container['charge_on'];
    }

    /**
     * Sets charge_on
     *
     * @param \DateTime $charge_on 
     *
     * @return $this
     */
    public function setChargeOn($charge_on)
    {
        $this->container['charge_on'] = $charge_on;

        return $this;
    }
    

    /**
     * Gets created_on
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime $created_on The date and time when the object was created.
     *
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
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
     * @param int $id A unique identifier for the object.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    

    /**
     * Gets installment_payment
     *
     * @return \Wallee\Sdk\Model\InstallmentPayment
     */
    public function getInstallmentPayment()
    {
        return $this->container['installment_payment'];
    }

    /**
     * Sets installment_payment
     *
     * @param \Wallee\Sdk\Model\InstallmentPayment $installment_payment 
     *
     * @return $this
     */
    public function setInstallmentPayment($installment_payment)
    {
        $this->container['installment_payment'] = $installment_payment;

        return $this;
    }
    

    /**
     * Gets line_items
     *
     * @return \Wallee\Sdk\Model\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Wallee\Sdk\Model\LineItem[] $line_items 
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }
    

    /**
     * Gets linked_space_id
     *
     * @return int
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int $linked_space_id The ID of the space this object belongs to.
     *
     * @return $this
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }
    

    /**
     * Gets linked_transaction
     *
     * @return int
     */
    public function getLinkedTransaction()
    {
        return $this->container['linked_transaction'];
    }

    /**
     * Sets linked_transaction
     *
     * @param int $linked_transaction The payment transaction this object is linked to.
     *
     * @return $this
     */
    public function setLinkedTransaction($linked_transaction)
    {
        $this->container['linked_transaction'] = $linked_transaction;

        return $this;
    }
    

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime $planned_purge_date The date and time when the object is planned to be permanently removed. If the value is empty, the object will not be removed.
     *
     * @return $this
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\InstallmentPaymentSliceState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\InstallmentPaymentSliceState $state The object's current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets transaction
     *
     * @return \Wallee\Sdk\Model\Transaction
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Wallee\Sdk\Model\Transaction $transaction 
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

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
     * @param int $version The version is used for optimistic locking and incremented whenever the object is updated.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


