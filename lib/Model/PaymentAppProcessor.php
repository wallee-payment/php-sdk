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
 * PaymentAppProcessor model
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
class PaymentAppProcessor implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentAppProcessor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'documentation_url' => 'string',
        'configured_environment' => '\Wallee\Sdk\Model\ChargeAttemptEnvironment',
        'external_id' => 'string',
        'svg_icon' => 'string',
        'updated_on' => '\DateTime',
        'usable_in_production' => 'bool',
        'created_on' => '\DateTime',
        'version' => 'int',
        'processor_configuration' => '\Wallee\Sdk\Model\PaymentProcessorConfiguration',
        'linked_space_id' => 'int',
        'usable_in_production_since' => '\DateTime',
        'name' => 'string',
        'id' => 'int',
        'installation_id' => 'int',
        'production_mode_url' => 'string',
        'state' => '\Wallee\Sdk\Model\PaymentAppProcessorState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'documentation_url' => null,
        'configured_environment' => null,
        'external_id' => null,
        'svg_icon' => null,
        'updated_on' => 'date-time',
        'usable_in_production' => null,
        'created_on' => 'date-time',
        'version' => 'int32',
        'processor_configuration' => null,
        'linked_space_id' => 'int64',
        'usable_in_production_since' => 'date-time',
        'name' => null,
        'id' => 'int64',
        'installation_id' => 'int64',
        'production_mode_url' => null,
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'documentation_url' => false,
        'configured_environment' => false,
        'external_id' => false,
        'svg_icon' => false,
        'updated_on' => false,
        'usable_in_production' => false,
        'created_on' => false,
        'version' => false,
        'processor_configuration' => false,
        'linked_space_id' => false,
        'usable_in_production_since' => false,
        'name' => false,
        'id' => false,
        'installation_id' => false,
        'production_mode_url' => false,
        'state' => false
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
        'documentation_url' => 'documentationUrl',
        'configured_environment' => 'configuredEnvironment',
        'external_id' => 'externalId',
        'svg_icon' => 'svgIcon',
        'updated_on' => 'updatedOn',
        'usable_in_production' => 'usableInProduction',
        'created_on' => 'createdOn',
        'version' => 'version',
        'processor_configuration' => 'processorConfiguration',
        'linked_space_id' => 'linkedSpaceId',
        'usable_in_production_since' => 'usableInProductionSince',
        'name' => 'name',
        'id' => 'id',
        'installation_id' => 'installationId',
        'production_mode_url' => 'productionModeUrl',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documentation_url' => 'setDocumentationUrl',
        'configured_environment' => 'setConfiguredEnvironment',
        'external_id' => 'setExternalId',
        'svg_icon' => 'setSvgIcon',
        'updated_on' => 'setUpdatedOn',
        'usable_in_production' => 'setUsableInProduction',
        'created_on' => 'setCreatedOn',
        'version' => 'setVersion',
        'processor_configuration' => 'setProcessorConfiguration',
        'linked_space_id' => 'setLinkedSpaceId',
        'usable_in_production_since' => 'setUsableInProductionSince',
        'name' => 'setName',
        'id' => 'setId',
        'installation_id' => 'setInstallationId',
        'production_mode_url' => 'setProductionModeUrl',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documentation_url' => 'getDocumentationUrl',
        'configured_environment' => 'getConfiguredEnvironment',
        'external_id' => 'getExternalId',
        'svg_icon' => 'getSvgIcon',
        'updated_on' => 'getUpdatedOn',
        'usable_in_production' => 'getUsableInProduction',
        'created_on' => 'getCreatedOn',
        'version' => 'getVersion',
        'processor_configuration' => 'getProcessorConfiguration',
        'linked_space_id' => 'getLinkedSpaceId',
        'usable_in_production_since' => 'getUsableInProductionSince',
        'name' => 'getName',
        'id' => 'getId',
        'installation_id' => 'getInstallationId',
        'production_mode_url' => 'getProductionModeUrl',
        'state' => 'getState'
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
        $this->setIfExists('documentation_url', $data ?? [], null);
        $this->setIfExists('configured_environment', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('svg_icon', $data ?? [], null);
        $this->setIfExists('updated_on', $data ?? [], null);
        $this->setIfExists('usable_in_production', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('processor_configuration', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('usable_in_production_since', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('installation_id', $data ?? [], null);
        $this->setIfExists('production_mode_url', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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

        if (!is_null($this->container['svg_icon']) && (mb_strlen($this->container['svg_icon']) > 10000)) {
            $invalidProperties[] = "invalid value for 'svg_icon', the character length must be smaller than or equal to 10000.";
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
     * Gets documentation_url
     *
     * @return string|null
     */
    public function getDocumentationUrl()
    {
        return $this->container['documentation_url'];
    }

    /**
     * Sets documentation_url
     *
     * @param string|null $documentation_url A URL pointing to the documentation that explains how to configure and use the processor.
     *
     * @return self
     */
    public function setDocumentationUrl($documentation_url)
    {
        if (is_null($documentation_url)) {
            throw new \InvalidArgumentException('non-nullable documentation_url cannot be null');
        }
        $this->container['documentation_url'] = $documentation_url;

        return $this;
    }

    /**
     * Gets configured_environment
     *
     * @return \Wallee\Sdk\Model\ChargeAttemptEnvironment|null
     */
    public function getConfiguredEnvironment()
    {
        return $this->container['configured_environment'];
    }

    /**
     * Sets configured_environment
     *
     * @param \Wallee\Sdk\Model\ChargeAttemptEnvironment|null $configured_environment configured_environment
     *
     * @return self
     */
    public function setConfiguredEnvironment($configured_environment)
    {
        if (is_null($configured_environment)) {
            throw new \InvalidArgumentException('non-nullable configured_environment cannot be null');
        }
        $this->container['configured_environment'] = $configured_environment;

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
            throw new \InvalidArgumentException('invalid length for $external_id when calling PaymentAppProcessor., must be smaller than or equal to 40.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets svg_icon
     *
     * @return string|null
     */
    public function getSvgIcon()
    {
        return $this->container['svg_icon'];
    }

    /**
     * Sets svg_icon
     *
     * @param string|null $svg_icon An SVG icon representing the processor, displayed to the user in the interface.
     *
     * @return self
     */
    public function setSvgIcon($svg_icon)
    {
        if (is_null($svg_icon)) {
            throw new \InvalidArgumentException('non-nullable svg_icon cannot be null');
        }
        if ((mb_strlen($svg_icon) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $svg_icon when calling PaymentAppProcessor., must be smaller than or equal to 10000.');
        }

        $this->container['svg_icon'] = $svg_icon;

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
     * @param \DateTime|null $updated_on The date and time when the processor was last updated.
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
     * Gets usable_in_production
     *
     * @return bool|null
     */
    public function getUsableInProduction()
    {
        return $this->container['usable_in_production'];
    }

    /**
     * Sets usable_in_production
     *
     * @param bool|null $usable_in_production Whether the processor is fully prepared and available for handling transactions in a production environment.
     *
     * @return self
     */
    public function setUsableInProduction($usable_in_production)
    {
        if (is_null($usable_in_production)) {
            throw new \InvalidArgumentException('non-nullable usable_in_production cannot be null');
        }
        $this->container['usable_in_production'] = $usable_in_production;

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
     * @param \DateTime|null $created_on The date and time when the processor was created.
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
     * Gets processor_configuration
     *
     * @return \Wallee\Sdk\Model\PaymentProcessorConfiguration|null
     */
    public function getProcessorConfiguration()
    {
        return $this->container['processor_configuration'];
    }

    /**
     * Sets processor_configuration
     *
     * @param \Wallee\Sdk\Model\PaymentProcessorConfiguration|null $processor_configuration processor_configuration
     *
     * @return self
     */
    public function setProcessorConfiguration($processor_configuration)
    {
        if (is_null($processor_configuration)) {
            throw new \InvalidArgumentException('non-nullable processor_configuration cannot be null');
        }
        $this->container['processor_configuration'] = $processor_configuration;

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
     * Gets usable_in_production_since
     *
     * @return \DateTime|null
     */
    public function getUsableInProductionSince()
    {
        return $this->container['usable_in_production_since'];
    }

    /**
     * Sets usable_in_production_since
     *
     * @param \DateTime|null $usable_in_production_since the date and time when the processor became fully usable and available for handling transactions in a production environment.
     *
     * @return self
     */
    public function setUsableInProductionSince($usable_in_production_since)
    {
        if (is_null($usable_in_production_since)) {
            throw new \InvalidArgumentException('non-nullable usable_in_production_since cannot be null');
        }
        $this->container['usable_in_production_since'] = $usable_in_production_since;

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
     * @param string|null $name The name used to identify the processor.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentAppProcessor., must be smaller than or equal to 100.');
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
     * Gets installation_id
     *
     * @return int|null
     */
    public function getInstallationId()
    {
        return $this->container['installation_id'];
    }

    /**
     * Sets installation_id
     *
     * @param int|null $installation_id The installation ID identifies the Web App installation.
     *
     * @return self
     */
    public function setInstallationId($installation_id)
    {
        if (is_null($installation_id)) {
            throw new \InvalidArgumentException('non-nullable installation_id cannot be null');
        }
        $this->container['installation_id'] = $installation_id;

        return $this;
    }

    /**
     * Gets production_mode_url
     *
     * @return string|null
     */
    public function getProductionModeUrl()
    {
        return $this->container['production_mode_url'];
    }

    /**
     * Sets production_mode_url
     *
     * @param string|null $production_mode_url A URL pointing to the site where merchants can set up production mode for the processor.
     *
     * @return self
     */
    public function setProductionModeUrl($production_mode_url)
    {
        if (is_null($production_mode_url)) {
            throw new \InvalidArgumentException('non-nullable production_mode_url cannot be null');
        }
        $this->container['production_mode_url'] = $production_mode_url;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\PaymentAppProcessorState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\PaymentAppProcessorState|null $state state
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


