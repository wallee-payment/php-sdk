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
 * PaymentAppRefundConfigurationCreate model
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
class PaymentAppRefundConfigurationCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentAppRefundConfiguration.Create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'refund_timeout_in_minutes' => 'int',
        'multiple_refunds_supported' => 'bool',
        'refund_endpoint' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'refund_timeout_in_minutes' => 'int32',
        'multiple_refunds_supported' => null,
        'refund_endpoint' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'refund_timeout_in_minutes' => false,
        'multiple_refunds_supported' => false,
        'refund_endpoint' => false
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
        'refund_timeout_in_minutes' => 'refundTimeoutInMinutes',
        'multiple_refunds_supported' => 'multipleRefundsSupported',
        'refund_endpoint' => 'refundEndpoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'refund_timeout_in_minutes' => 'setRefundTimeoutInMinutes',
        'multiple_refunds_supported' => 'setMultipleRefundsSupported',
        'refund_endpoint' => 'setRefundEndpoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'refund_timeout_in_minutes' => 'getRefundTimeoutInMinutes',
        'multiple_refunds_supported' => 'getMultipleRefundsSupported',
        'refund_endpoint' => 'getRefundEndpoint'
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
        $this->setIfExists('refund_timeout_in_minutes', $data ?? [], null);
        $this->setIfExists('multiple_refunds_supported', $data ?? [], null);
        $this->setIfExists('refund_endpoint', $data ?? [], null);
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
     * Gets refund_timeout_in_minutes
     *
     * @return int|null
     */
    public function getRefundTimeoutInMinutes()
    {
        return $this->container['refund_timeout_in_minutes'];
    }

    /**
     * Sets refund_timeout_in_minutes
     *
     * @param int|null $refund_timeout_in_minutes The maximum time (in minutes) to wait for a response from the payment service provider after a refund request is triggered. If no feedback or final status is received within this period, the refund is considered failed.
     *
     * @return self
     */
    public function setRefundTimeoutInMinutes($refund_timeout_in_minutes)
    {
        if (is_null($refund_timeout_in_minutes)) {
            throw new \InvalidArgumentException('non-nullable refund_timeout_in_minutes cannot be null');
        }
        $this->container['refund_timeout_in_minutes'] = $refund_timeout_in_minutes;

        return $this;
    }

    /**
     * Gets multiple_refunds_supported
     *
     * @return bool|null
     */
    public function getMultipleRefundsSupported()
    {
        return $this->container['multiple_refunds_supported'];
    }

    /**
     * Sets multiple_refunds_supported
     *
     * @param bool|null $multiple_refunds_supported Whether the payment connector can process multiple refunds for a single transaction.
     *
     * @return self
     */
    public function setMultipleRefundsSupported($multiple_refunds_supported)
    {
        if (is_null($multiple_refunds_supported)) {
            throw new \InvalidArgumentException('non-nullable multiple_refunds_supported cannot be null');
        }
        $this->container['multiple_refunds_supported'] = $multiple_refunds_supported;

        return $this;
    }

    /**
     * Gets refund_endpoint
     *
     * @return string|null
     */
    public function getRefundEndpoint()
    {
        return $this->container['refund_endpoint'];
    }

    /**
     * Sets refund_endpoint
     *
     * @param string|null $refund_endpoint The URL that the payment service provider will invoke to process a refund request. This endpoint handles communication with the provider for initiating and managing refunds.
     *
     * @return self
     */
    public function setRefundEndpoint($refund_endpoint)
    {
        if (is_null($refund_endpoint)) {
            throw new \InvalidArgumentException('non-nullable refund_endpoint cannot be null');
        }
        $this->container['refund_endpoint'] = $refund_endpoint;

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


