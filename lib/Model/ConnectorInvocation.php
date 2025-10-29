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
 * ConnectorInvocation model
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
class ConnectorInvocation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConnectorInvocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'linked_space_id' => 'int',
        'time_took_in_milliseconds' => 'int',
        'stage' => '\Wallee\Sdk\Model\ConnectorInvocationStage',
        'planned_purge_date' => '\DateTime',
        'id' => 'int',
        'created_on' => '\DateTime',
        'version' => 'int',
        'transaction' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'linked_space_id' => 'int64',
        'time_took_in_milliseconds' => 'int64',
        'stage' => null,
        'planned_purge_date' => 'date-time',
        'id' => 'int64',
        'created_on' => 'date-time',
        'version' => 'int32',
        'transaction' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'linked_space_id' => false,
        'time_took_in_milliseconds' => false,
        'stage' => false,
        'planned_purge_date' => false,
        'id' => false,
        'created_on' => false,
        'version' => false,
        'transaction' => false
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
        'linked_space_id' => 'linkedSpaceId',
        'time_took_in_milliseconds' => 'timeTookInMilliseconds',
        'stage' => 'stage',
        'planned_purge_date' => 'plannedPurgeDate',
        'id' => 'id',
        'created_on' => 'createdOn',
        'version' => 'version',
        'transaction' => 'transaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linked_space_id' => 'setLinkedSpaceId',
        'time_took_in_milliseconds' => 'setTimeTookInMilliseconds',
        'stage' => 'setStage',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'id' => 'setId',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'transaction' => 'setTransaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linked_space_id' => 'getLinkedSpaceId',
        'time_took_in_milliseconds' => 'getTimeTookInMilliseconds',
        'stage' => 'getStage',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'id' => 'getId',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'transaction' => 'getTransaction'
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
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('time_took_in_milliseconds', $data ?? [], null);
        $this->setIfExists('stage', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('transaction', $data ?? [], null);
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
     * Gets linked_space_id
     *
     * @return int|null
     */
    public function getLinkedSpaceId()
    {
        return $this->container['linked_space_id'];
    }

    /**
     * Sets linked_space_id
     *
     * @param int|null $linked_space_id The ID of the space this object belongs to.
     *
     * @return self
     */
    public function setLinkedSpaceId($linked_space_id)
    {
        if (is_null($linked_space_id)) {
            throw new \InvalidArgumentException('non-nullable linked_space_id cannot be null');
        }
        $this->container['linked_space_id'] = $linked_space_id;

        return $this;
    }

    /**
     * Gets time_took_in_milliseconds
     *
     * @return int|null
     */
    public function getTimeTookInMilliseconds()
    {
        return $this->container['time_took_in_milliseconds'];
    }

    /**
     * Sets time_took_in_milliseconds
     *
     * @param int|null $time_took_in_milliseconds The duration, in milliseconds, taken to execute the connector invocation.
     *
     * @return self
     */
    public function setTimeTookInMilliseconds($time_took_in_milliseconds)
    {
        if (is_null($time_took_in_milliseconds)) {
            throw new \InvalidArgumentException('non-nullable time_took_in_milliseconds cannot be null');
        }
        $this->container['time_took_in_milliseconds'] = $time_took_in_milliseconds;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return \Wallee\Sdk\Model\ConnectorInvocationStage|null
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param \Wallee\Sdk\Model\ConnectorInvocationStage|null $stage stage
     *
     * @return self
     */
    public function setStage($stage)
    {
        if (is_null($stage)) {
            throw new \InvalidArgumentException('non-nullable stage cannot be null');
        }
        $this->container['stage'] = $stage;

        return $this;
    }

    /**
     * Gets planned_purge_date
     *
     * @return \DateTime|null
     */
    public function getPlannedPurgeDate()
    {
        return $this->container['planned_purge_date'];
    }

    /**
     * Sets planned_purge_date
     *
     * @param \DateTime|null $planned_purge_date The date and time when the object is planned to be permanently removed. If the value is empty, the object will not be removed.
     *
     * @return self
     */
    public function setPlannedPurgeDate($planned_purge_date)
    {
        if (is_null($planned_purge_date)) {
            throw new \InvalidArgumentException('non-nullable planned_purge_date cannot be null');
        }
        $this->container['planned_purge_date'] = $planned_purge_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id A unique identifier for the object.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime|null
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime|null $created_on The date and time when the object was created.
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        if (is_null($created_on)) {
            throw new \InvalidArgumentException('non-nullable created_on cannot be null');
        }
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version The version is used for optimistic locking and incremented whenever the object is updated.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return int|null
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param int|null $transaction The transaction that the connector invocation belongs to.
     *
     * @return self
     */
    public function setTransaction($transaction)
    {
        if (is_null($transaction)) {
            throw new \InvalidArgumentException('non-nullable transaction cannot be null');
        }
        $this->container['transaction'] = $transaction;

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


