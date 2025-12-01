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
 * PaymentAppCompletionConfiguration model
 *
 * @category Class
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.2.0
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentAppCompletionConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentAppCompletionConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'multiple_completions_supported' => 'bool',
        'maximal_completion_delay_in_days' => 'int',
        'completion_endpoint' => 'string',
        'completion_timeout_in_minutes' => 'int',
        'void_endpoint' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'multiple_completions_supported' => null,
        'maximal_completion_delay_in_days' => 'int32',
        'completion_endpoint' => null,
        'completion_timeout_in_minutes' => 'int32',
        'void_endpoint' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'multiple_completions_supported' => false,
        'maximal_completion_delay_in_days' => false,
        'completion_endpoint' => false,
        'completion_timeout_in_minutes' => false,
        'void_endpoint' => false
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
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
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
        'multiple_completions_supported' => 'multipleCompletionsSupported',
        'maximal_completion_delay_in_days' => 'maximalCompletionDelayInDays',
        'completion_endpoint' => 'completionEndpoint',
        'completion_timeout_in_minutes' => 'completionTimeoutInMinutes',
        'void_endpoint' => 'voidEndpoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'multiple_completions_supported' => 'setMultipleCompletionsSupported',
        'maximal_completion_delay_in_days' => 'setMaximalCompletionDelayInDays',
        'completion_endpoint' => 'setCompletionEndpoint',
        'completion_timeout_in_minutes' => 'setCompletionTimeoutInMinutes',
        'void_endpoint' => 'setVoidEndpoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'multiple_completions_supported' => 'getMultipleCompletionsSupported',
        'maximal_completion_delay_in_days' => 'getMaximalCompletionDelayInDays',
        'completion_endpoint' => 'getCompletionEndpoint',
        'completion_timeout_in_minutes' => 'getCompletionTimeoutInMinutes',
        'void_endpoint' => 'getVoidEndpoint'
    ];

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
        return self::$openAPIModelName;
    }


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
        $this->setIfExists('multiple_completions_supported', $data ?? [], null);
        $this->setIfExists('maximal_completion_delay_in_days', $data ?? [], null);
        $this->setIfExists('completion_endpoint', $data ?? [], null);
        $this->setIfExists('completion_timeout_in_minutes', $data ?? [], null);
        $this->setIfExists('void_endpoint', $data ?? [], null);
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets multiple_completions_supported
     *
     * @return bool|null
     */
    public function getMultipleCompletionsSupported()
    {
        return $this->container['multiple_completions_supported'];
    }

    /**
     * Sets multiple_completions_supported
     *
     * @param bool|null $multiple_completions_supported Whether the payment connector can process multiple completions for a single transaction.
     *
     * @return self
     */
    public function setMultipleCompletionsSupported($multiple_completions_supported)
    {
        if (is_null($multiple_completions_supported)) {
            throw new \InvalidArgumentException('non-nullable multiple_completions_supported cannot be null');
        }
        $this->container['multiple_completions_supported'] = $multiple_completions_supported;

        return $this;
    }

    /**
     * Gets maximal_completion_delay_in_days
     *
     * @return int|null
     */
    public function getMaximalCompletionDelayInDays()
    {
        return $this->container['maximal_completion_delay_in_days'];
    }

    /**
     * Sets maximal_completion_delay_in_days
     *
     * @param int|null $maximal_completion_delay_in_days The maximum number of days after a transaction's authorization during which a completion or void action can be triggered. Once this period has passed, neither action can be executed.
     *
     * @return self
     */
    public function setMaximalCompletionDelayInDays($maximal_completion_delay_in_days)
    {
        if (is_null($maximal_completion_delay_in_days)) {
            throw new \InvalidArgumentException('non-nullable maximal_completion_delay_in_days cannot be null');
        }
        $this->container['maximal_completion_delay_in_days'] = $maximal_completion_delay_in_days;

        return $this;
    }

    /**
     * Gets completion_endpoint
     *
     * @return string|null
     */
    public function getCompletionEndpoint()
    {
        return $this->container['completion_endpoint'];
    }

    /**
     * Sets completion_endpoint
     *
     * @param string|null $completion_endpoint The URL that the payment service provider will invoke to process a completion request. This endpoint handles communication with the provider for initiating and managing completions.
     *
     * @return self
     */
    public function setCompletionEndpoint($completion_endpoint)
    {
        if (is_null($completion_endpoint)) {
            throw new \InvalidArgumentException('non-nullable completion_endpoint cannot be null');
        }
        $this->container['completion_endpoint'] = $completion_endpoint;

        return $this;
    }

    /**
     * Gets completion_timeout_in_minutes
     *
     * @return int|null
     */
    public function getCompletionTimeoutInMinutes()
    {
        return $this->container['completion_timeout_in_minutes'];
    }

    /**
     * Sets completion_timeout_in_minutes
     *
     * @param int|null $completion_timeout_in_minutes The maximum time (in minutes) to wait for a response from the payment service provider after a completion request is triggered. If no feedback or final status is received within this period, the completion is considered failed.
     *
     * @return self
     */
    public function setCompletionTimeoutInMinutes($completion_timeout_in_minutes)
    {
        if (is_null($completion_timeout_in_minutes)) {
            throw new \InvalidArgumentException('non-nullable completion_timeout_in_minutes cannot be null');
        }
        $this->container['completion_timeout_in_minutes'] = $completion_timeout_in_minutes;

        return $this;
    }

    /**
     * Gets void_endpoint
     *
     * @return string|null
     */
    public function getVoidEndpoint()
    {
        return $this->container['void_endpoint'];
    }

    /**
     * Sets void_endpoint
     *
     * @param string|null $void_endpoint The URL that the payment service provider will invoke to process a void request. This endpoint handles communication with the provider for initiating and managing voids.
     *
     * @return self
     */
    public function setVoidEndpoint($void_endpoint)
    {
        if (is_null($void_endpoint)) {
            throw new \InvalidArgumentException('non-nullable void_endpoint cannot be null');
        }
        $this->container['void_endpoint'] = $void_endpoint;

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
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function jsonSerialize()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


