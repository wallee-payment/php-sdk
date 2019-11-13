<?php
/**
 *  SDK
 *
 * This library allows to interact with the  payment service.
 *  SDK: 2.0.4
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

use \ArrayAccess;
use \Wallee\Sdk\ObjectSerializer;

/**
 * UnencryptedCardDataCreate model
 *
 * @category    Class
 * @description This model holds the card data in plain.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class UnencryptedCardDataCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnencryptedCardData.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_holder_name' => 'string',
        'card_verification_code' => 'string',
        'expiry_date' => 'string',
        'primary_account_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_holder_name' => null,
        'card_verification_code' => null,
        'expiry_date' => null,
        'primary_account_number' => null
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'card_holder_name' => 'cardHolderName',
        'card_verification_code' => 'cardVerificationCode',
        'expiry_date' => 'expiryDate',
        'primary_account_number' => 'primaryAccountNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_holder_name' => 'setCardHolderName',
        'card_verification_code' => 'setCardVerificationCode',
        'expiry_date' => 'setExpiryDate',
        'primary_account_number' => 'setPrimaryAccountNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_holder_name' => 'getCardHolderName',
        'card_verification_code' => 'getCardVerificationCode',
        'expiry_date' => 'getExpiryDate',
        'primary_account_number' => 'getPrimaryAccountNumber'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        
        $this->container['card_holder_name'] = isset($data['card_holder_name']) ? $data['card_holder_name'] : null;
        
        $this->container['card_verification_code'] = isset($data['card_verification_code']) ? $data['card_verification_code'] : null;
        
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        
        $this->container['primary_account_number'] = isset($data['primary_account_number']) ? $data['primary_account_number'] : null;
        
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['primary_account_number'] === null) {
            $invalidProperties[] = "'primary_account_number' can't be null";
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
     * Gets card_holder_name
     *
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->container['card_holder_name'];
    }

    /**
     * Sets card_holder_name
     *
     * @param string $card_holder_name The card holder name is the name printed onto the card. It identifies the person who owns the card.
     *
     * @return $this
     */
    public function setCardHolderName($card_holder_name)
    {
        $this->container['card_holder_name'] = $card_holder_name;

        return $this;
    }
    

    /**
     * Gets card_verification_code
     *
     * @return string
     */
    public function getCardVerificationCode()
    {
        return $this->container['card_verification_code'];
    }

    /**
     * Sets card_verification_code
     *
     * @param string $card_verification_code The card verification code (CVC) is a 3 to 4 digit code typically printed on the back of the card. It helps to ensure that the card holder is authorizing the transaction. For card not-present transactions this field is optional.
     *
     * @return $this
     */
    public function setCardVerificationCode($card_verification_code)
    {
        $this->container['card_verification_code'] = $card_verification_code;

        return $this;
    }
    

    /**
     * Gets expiry_date
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string $expiry_date The card expiry date indicates when the card expires. The format is the format yyyy-mm where yyyy is the year (e.g. 2019) and the mm is the month (e.g. 09).
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }
    

    /**
     * Gets primary_account_number
     *
     * @return string
     */
    public function getPrimaryAccountNumber()
    {
        return $this->container['primary_account_number'];
    }

    /**
     * Sets primary_account_number
     *
     * @param string $primary_account_number The primary account number (PAN) identifies the card. The number is numeric and typically printed on the front of the card.
     *
     * @return $this
     */
    public function setPrimaryAccountNumber($primary_account_number)
    {
        $this->container['primary_account_number'] = $primary_account_number;

        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


