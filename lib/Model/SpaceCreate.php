<?php
/**
 * Wallee AG Php SDK
 *
 * This library allows to interact with the Wallee AG payment service.
 *
 * Copyright owner: Wallee AG
 * Website: https://en.wallee.com
 * Developer email: ecosystem-team@wallee.com
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
 * SpaceCreate model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.0.0
 * @implements \ArrayAccess<string, mixed>
 */
class SpaceCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Space.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_limit' => 'int',
        'postal_address' => '\Wallee\Sdk\Model\SpaceAddressCreate',
        'name' => 'string',
        'technical_contact_addresses' => 'string[]',
        'time_zone' => 'string',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'primary_currency' => 'string',
        'database' => 'int',
        'account' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request_limit' => 'int64',
        'postal_address' => null,
        'name' => null,
        'technical_contact_addresses' => null,
        'time_zone' => null,
        'state' => null,
        'primary_currency' => null,
        'database' => 'int64',
        'account' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'request_limit' => false,
        'postal_address' => false,
        'name' => false,
        'technical_contact_addresses' => false,
        'time_zone' => false,
        'state' => false,
        'primary_currency' => false,
        'database' => false,
        'account' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request_limit' => 'requestLimit',
        'postal_address' => 'postalAddress',
        'name' => 'name',
        'technical_contact_addresses' => 'technicalContactAddresses',
        'time_zone' => 'timeZone',
        'state' => 'state',
        'primary_currency' => 'primaryCurrency',
        'database' => 'database',
        'account' => 'account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_limit' => 'setRequestLimit',
        'postal_address' => 'setPostalAddress',
        'name' => 'setName',
        'technical_contact_addresses' => 'setTechnicalContactAddresses',
        'time_zone' => 'setTimeZone',
        'state' => 'setState',
        'primary_currency' => 'setPrimaryCurrency',
        'database' => 'setDatabase',
        'account' => 'setAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_limit' => 'getRequestLimit',
        'postal_address' => 'getPostalAddress',
        'name' => 'getName',
        'technical_contact_addresses' => 'getTechnicalContactAddresses',
        'time_zone' => 'getTimeZone',
        'state' => 'getState',
        'primary_currency' => 'getPrimaryCurrency',
        'database' => 'getDatabase',
        'account' => 'getAccount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('request_limit', $data ?? [], null);
        $this->setIfExists('postal_address', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('technical_contact_addresses', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('primary_currency', $data ?? [], null);
        $this->setIfExists('database', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets request_limit
     *
     * @return int|null
     */
    public function getRequestLimit()
    {
        return $this->container['request_limit'];
    }

    /**
     * Sets request_limit
     *
     * @param int|null $request_limit The maximum number of API requests that are accepted within two minutes. This limit can only be changed with special privileges.
     *
     * @return self
     */
    public function setRequestLimit($request_limit)
    {
        if (is_null($request_limit)) {
            throw new \InvalidArgumentException('non-nullable request_limit cannot be null');
        }
        $this->container['request_limit'] = $request_limit;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return \Wallee\Sdk\Model\SpaceAddressCreate|null
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \Wallee\Sdk\Model\SpaceAddressCreate|null $postal_address postal_address
     *
     * @return self
     */
    public function setPostalAddress($postal_address)
    {
        if (is_null($postal_address)) {
            throw new \InvalidArgumentException('non-nullable postal_address cannot be null');
        }
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name used to identify the space.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SpaceCreate., must be smaller than or equal to 200.');
        }
        if ((mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SpaceCreate., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets technical_contact_addresses
     *
     * @return string[]|null
     */
    public function getTechnicalContactAddresses()
    {
        return $this->container['technical_contact_addresses'];
    }

    /**
     * Sets technical_contact_addresses
     *
     * @param string[]|null $technical_contact_addresses The email address that will receive messages about technical issues and errors that occur in the space.
     *
     * @return self
     */
    public function setTechnicalContactAddresses($technical_contact_addresses)
    {
        if (is_null($technical_contact_addresses)) {
            throw new \InvalidArgumentException('non-nullable technical_contact_addresses cannot be null');
        }


        $this->container['technical_contact_addresses'] = $technical_contact_addresses;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone The time zone that is used to schedule and run background processes. This does not affect the formatting of dates in the user interface.
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\CreationEntityState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\CreationEntityState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets primary_currency
     *
     * @return string|null
     */
    public function getPrimaryCurrency()
    {
        return $this->container['primary_currency'];
    }

    /**
     * Sets primary_currency
     *
     * @param string|null $primary_currency The currency that is used to display aggregated amounts in the space.
     *
     * @return self
     */
    public function setPrimaryCurrency($primary_currency)
    {
        if (is_null($primary_currency)) {
            throw new \InvalidArgumentException('non-nullable primary_currency cannot be null');
        }
        $this->container['primary_currency'] = $primary_currency;

        return $this;
    }

    /**
     * Gets database
     *
     * @return int|null
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param int|null $database The database the space is connected to and that holds the space's data.
     *
     * @return self
     */
    public function setDatabase($database)
    {
        if (is_null($database)) {
            throw new \InvalidArgumentException('non-nullable database cannot be null');
        }
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets account
     *
     * @return int
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param int $account The account that the space belongs to.
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, mixed $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


