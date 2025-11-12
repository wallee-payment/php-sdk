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
 * PaymentAppConnector model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.1.0
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentAppConnector implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentAppConnector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_page_endpoint' => 'string',
        'external_id' => 'string',
        'updated_on' => '\DateTime',
        'completion_configuration' => '\Wallee\Sdk\Model\PaymentAppCompletionConfiguration',
        'created_on' => '\DateTime',
        'processor' => '\Wallee\Sdk\Model\PaymentAppProcessor',
        'version' => 'int',
        'linked_space_id' => 'int',
        'connector_configuration' => '\Wallee\Sdk\Model\PaymentConnectorConfiguration',
        'authorization_timeout' => 'string',
        'name' => 'string',
        'id' => 'int',
        'state' => '\Wallee\Sdk\Model\PaymentAppConnectorState',
        'refund_configuration' => '\Wallee\Sdk\Model\PaymentAppRefundConfiguration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_page_endpoint' => null,
        'external_id' => null,
        'updated_on' => 'date-time',
        'completion_configuration' => null,
        'created_on' => 'date-time',
        'processor' => null,
        'version' => 'int32',
        'linked_space_id' => 'int64',
        'connector_configuration' => null,
        'authorization_timeout' => null,
        'name' => null,
        'id' => 'int64',
        'state' => null,
        'refund_configuration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_page_endpoint' => false,
        'external_id' => false,
        'updated_on' => false,
        'completion_configuration' => false,
        'created_on' => false,
        'processor' => false,
        'version' => false,
        'linked_space_id' => false,
        'connector_configuration' => false,
        'authorization_timeout' => false,
        'name' => false,
        'id' => false,
        'state' => false,
        'refund_configuration' => false
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
        'payment_page_endpoint' => 'paymentPageEndpoint',
        'external_id' => 'externalId',
        'updated_on' => 'updatedOn',
        'completion_configuration' => 'completionConfiguration',
        'created_on' => 'createdOn',
        'processor' => 'processor',
        'version' => 'version',
        'linked_space_id' => 'linkedSpaceId',
        'connector_configuration' => 'connectorConfiguration',
        'authorization_timeout' => 'authorizationTimeout',
        'name' => 'name',
        'id' => 'id',
        'state' => 'state',
        'refund_configuration' => 'refundConfiguration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_page_endpoint' => 'setPaymentPageEndpoint',
        'external_id' => 'setExternalId',
        'updated_on' => 'setUpdatedOn',
        'completion_configuration' => 'setCompletionConfiguration',
        'created_on' => 'setCreatedOn',
        'processor' => 'setProcessor',
        'version' => 'setVersion',
        'linked_space_id' => 'setLinkedSpaceId',
        'connector_configuration' => 'setConnectorConfiguration',
        'authorization_timeout' => 'setAuthorizationTimeout',
        'name' => 'setName',
        'id' => 'setId',
        'state' => 'setState',
        'refund_configuration' => 'setRefundConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_page_endpoint' => 'getPaymentPageEndpoint',
        'external_id' => 'getExternalId',
        'updated_on' => 'getUpdatedOn',
        'completion_configuration' => 'getCompletionConfiguration',
        'created_on' => 'getCreatedOn',
        'processor' => 'getProcessor',
        'version' => 'getVersion',
        'linked_space_id' => 'getLinkedSpaceId',
        'connector_configuration' => 'getConnectorConfiguration',
        'authorization_timeout' => 'getAuthorizationTimeout',
        'name' => 'getName',
        'id' => 'getId',
        'state' => 'getState',
        'refund_configuration' => 'getRefundConfiguration'
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
        $this->setIfExists('payment_page_endpoint', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('updated_on', $data ?? [], null);
        $this->setIfExists('completion_configuration', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('processor', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('connector_configuration', $data ?? [], null);
        $this->setIfExists('authorization_timeout', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('refund_configuration', $data ?? [], null);
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

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
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
     * Gets payment_page_endpoint
     *
     * @return string|null
     */
    public function getPaymentPageEndpoint()
    {
        return $this->container['payment_page_endpoint'];
    }

    /**
     * Sets payment_page_endpoint
     *
     * @param string|null $payment_page_endpoint The URL where the user is redirected to process a payment. This endpoint is provided by the external service provider.
     *
     * @return self
     */
    public function setPaymentPageEndpoint($payment_page_endpoint)
    {
        if (is_null($payment_page_endpoint)) {
            throw new \InvalidArgumentException('non-nullable payment_page_endpoint cannot be null');
        }
        $this->container['payment_page_endpoint'] = $payment_page_endpoint;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id A client-generated nonce which uniquely identifies some action to be executed. Subsequent requests with the same external ID do not execute the action again, but return the original result.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        if ((mb_strlen($external_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling PaymentAppConnector., must be smaller than or equal to 40.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets updated_on
     *
     * @return \DateTime|null
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     *
     * @param \DateTime|null $updated_on The date and time when the connector was last updated.
     *
     * @return self
     */
    public function setUpdatedOn($updated_on)
    {
        if (is_null($updated_on)) {
            throw new \InvalidArgumentException('non-nullable updated_on cannot be null');
        }
        $this->container['updated_on'] = $updated_on;

        return $this;
    }

    /**
     * Gets completion_configuration
     *
     * @return \Wallee\Sdk\Model\PaymentAppCompletionConfiguration|null
     */
    public function getCompletionConfiguration()
    {
        return $this->container['completion_configuration'];
    }

    /**
     * Sets completion_configuration
     *
     * @param \Wallee\Sdk\Model\PaymentAppCompletionConfiguration|null $completion_configuration completion_configuration
     *
     * @return self
     */
    public function setCompletionConfiguration($completion_configuration)
    {
        if (is_null($completion_configuration)) {
            throw new \InvalidArgumentException('non-nullable completion_configuration cannot be null');
        }
        $this->container['completion_configuration'] = $completion_configuration;

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
     * @param \DateTime|null $created_on The date and time when the connector was created.
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
     * Gets processor
     *
     * @return \Wallee\Sdk\Model\PaymentAppProcessor|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param \Wallee\Sdk\Model\PaymentAppProcessor|null $processor processor
     *
     * @return self
     */
    public function setProcessor($processor)
    {
        if (is_null($processor)) {
            throw new \InvalidArgumentException('non-nullable processor cannot be null');
        }
        $this->container['processor'] = $processor;

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
     * Gets connector_configuration
     *
     * @return \Wallee\Sdk\Model\PaymentConnectorConfiguration|null
     */
    public function getConnectorConfiguration()
    {
        return $this->container['connector_configuration'];
    }

    /**
     * Sets connector_configuration
     *
     * @param \Wallee\Sdk\Model\PaymentConnectorConfiguration|null $connector_configuration connector_configuration
     *
     * @return self
     */
    public function setConnectorConfiguration($connector_configuration)
    {
        if (is_null($connector_configuration)) {
            throw new \InvalidArgumentException('non-nullable connector_configuration cannot be null');
        }
        $this->container['connector_configuration'] = $connector_configuration;

        return $this;
    }

    /**
     * Gets authorization_timeout
     *
     * @return string|null
     */
    public function getAuthorizationTimeout()
    {
        return $this->container['authorization_timeout'];
    }

    /**
     * Sets authorization_timeout
     *
     * @param string|null $authorization_timeout The duration within which the authorization process for a payment should complete.
     *
     * @return self
     */
    public function setAuthorizationTimeout($authorization_timeout)
    {
        if (is_null($authorization_timeout)) {
            throw new \InvalidArgumentException('non-nullable authorization_timeout cannot be null');
        }
        $this->container['authorization_timeout'] = $authorization_timeout;

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
     * @param string|null $name The name used to identify the connector.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentAppConnector., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

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
     * Gets state
     *
     * @return \Wallee\Sdk\Model\PaymentAppConnectorState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\PaymentAppConnectorState|null $state state
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
     * Gets refund_configuration
     *
     * @return \Wallee\Sdk\Model\PaymentAppRefundConfiguration|null
     */
    public function getRefundConfiguration()
    {
        return $this->container['refund_configuration'];
    }

    /**
     * Sets refund_configuration
     *
     * @param \Wallee\Sdk\Model\PaymentAppRefundConfiguration|null $refund_configuration refund_configuration
     *
     * @return self
     */
    public function setRefundConfiguration($refund_configuration)
    {
        if (is_null($refund_configuration)) {
            throw new \InvalidArgumentException('non-nullable refund_configuration cannot be null');
        }
        $this->container['refund_configuration'] = $refund_configuration;

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


