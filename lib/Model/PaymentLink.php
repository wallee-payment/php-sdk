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
 * PaymentLink model
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
class PaymentLink implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_address_handling_mode' => '\Wallee\Sdk\Model\PaymentLinkAddressHandlingMode',
        'allowed_redirection_domains' => 'string[]',
        'planned_purge_date' => '\DateTime',
        'external_id' => 'string',
        'language' => 'string',
        'available_from' => '\DateTime',
        'version' => 'int',
        'url' => 'string',
        'line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'protection_mode' => '\Wallee\Sdk\Model\PaymentLinkProtectionMode',
        'available_until' => '\DateTime',
        'linked_space_id' => 'int',
        'name' => 'string',
        'currency' => 'string',
        'id' => 'int',
        'state' => '\Wallee\Sdk\Model\CreationEntityState',
        'maximal_number_of_transactions' => 'int',
        'allowed_payment_method_configurations' => '\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
        'applied_space_view' => 'int',
        'billing_address_handling_mode' => '\Wallee\Sdk\Model\PaymentLinkAddressHandlingMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_address_handling_mode' => null,
        'allowed_redirection_domains' => null,
        'planned_purge_date' => 'date-time',
        'external_id' => null,
        'language' => null,
        'available_from' => 'date-time',
        'version' => 'int32',
        'url' => null,
        'line_items' => null,
        'protection_mode' => null,
        'available_until' => 'date-time',
        'linked_space_id' => 'int64',
        'name' => null,
        'currency' => null,
        'id' => 'int64',
        'state' => null,
        'maximal_number_of_transactions' => 'int32',
        'allowed_payment_method_configurations' => null,
        'applied_space_view' => 'int64',
        'billing_address_handling_mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipping_address_handling_mode' => false,
        'allowed_redirection_domains' => false,
        'planned_purge_date' => false,
        'external_id' => false,
        'language' => false,
        'available_from' => false,
        'version' => false,
        'url' => false,
        'line_items' => false,
        'protection_mode' => false,
        'available_until' => false,
        'linked_space_id' => false,
        'name' => false,
        'currency' => false,
        'id' => false,
        'state' => false,
        'maximal_number_of_transactions' => false,
        'allowed_payment_method_configurations' => false,
        'applied_space_view' => false,
        'billing_address_handling_mode' => false
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
        'shipping_address_handling_mode' => 'shippingAddressHandlingMode',
        'allowed_redirection_domains' => 'allowedRedirectionDomains',
        'planned_purge_date' => 'plannedPurgeDate',
        'external_id' => 'externalId',
        'language' => 'language',
        'available_from' => 'availableFrom',
        'version' => 'version',
        'url' => 'url',
        'line_items' => 'lineItems',
        'protection_mode' => 'protectionMode',
        'available_until' => 'availableUntil',
        'linked_space_id' => 'linkedSpaceId',
        'name' => 'name',
        'currency' => 'currency',
        'id' => 'id',
        'state' => 'state',
        'maximal_number_of_transactions' => 'maximalNumberOfTransactions',
        'allowed_payment_method_configurations' => 'allowedPaymentMethodConfigurations',
        'applied_space_view' => 'appliedSpaceView',
        'billing_address_handling_mode' => 'billingAddressHandlingMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_address_handling_mode' => 'setShippingAddressHandlingMode',
        'allowed_redirection_domains' => 'setAllowedRedirectionDomains',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'external_id' => 'setExternalId',
        'language' => 'setLanguage',
        'available_from' => 'setAvailableFrom',
        'version' => 'setVersion',
        'url' => 'setUrl',
        'line_items' => 'setLineItems',
        'protection_mode' => 'setProtectionMode',
        'available_until' => 'setAvailableUntil',
        'linked_space_id' => 'setLinkedSpaceId',
        'name' => 'setName',
        'currency' => 'setCurrency',
        'id' => 'setId',
        'state' => 'setState',
        'maximal_number_of_transactions' => 'setMaximalNumberOfTransactions',
        'allowed_payment_method_configurations' => 'setAllowedPaymentMethodConfigurations',
        'applied_space_view' => 'setAppliedSpaceView',
        'billing_address_handling_mode' => 'setBillingAddressHandlingMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_address_handling_mode' => 'getShippingAddressHandlingMode',
        'allowed_redirection_domains' => 'getAllowedRedirectionDomains',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'external_id' => 'getExternalId',
        'language' => 'getLanguage',
        'available_from' => 'getAvailableFrom',
        'version' => 'getVersion',
        'url' => 'getUrl',
        'line_items' => 'getLineItems',
        'protection_mode' => 'getProtectionMode',
        'available_until' => 'getAvailableUntil',
        'linked_space_id' => 'getLinkedSpaceId',
        'name' => 'getName',
        'currency' => 'getCurrency',
        'id' => 'getId',
        'state' => 'getState',
        'maximal_number_of_transactions' => 'getMaximalNumberOfTransactions',
        'allowed_payment_method_configurations' => 'getAllowedPaymentMethodConfigurations',
        'applied_space_view' => 'getAppliedSpaceView',
        'billing_address_handling_mode' => 'getBillingAddressHandlingMode'
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
        $this->setIfExists('shipping_address_handling_mode', $data ?? [], null);
        $this->setIfExists('allowed_redirection_domains', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('available_from', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('protection_mode', $data ?? [], null);
        $this->setIfExists('available_until', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('maximal_number_of_transactions', $data ?? [], null);
        $this->setIfExists('allowed_payment_method_configurations', $data ?? [], null);
        $this->setIfExists('applied_space_view', $data ?? [], null);
        $this->setIfExists('billing_address_handling_mode', $data ?? [], null);
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

        if (!is_null($this->container['allowed_redirection_domains']) && (count($this->container['allowed_redirection_domains']) < 1)) {
            $invalidProperties[] = "invalid value for 'allowed_redirection_domains', number of items must be greater than or equal to 1.";
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
     * Gets shipping_address_handling_mode
     *
     * @return \Wallee\Sdk\Model\PaymentLinkAddressHandlingMode|null
     */
    public function getShippingAddressHandlingMode()
    {
        return $this->container['shipping_address_handling_mode'];
    }

    /**
     * Sets shipping_address_handling_mode
     *
     * @param \Wallee\Sdk\Model\PaymentLinkAddressHandlingMode|null $shipping_address_handling_mode shipping_address_handling_mode
     *
     * @return self
     */
    public function setShippingAddressHandlingMode($shipping_address_handling_mode)
    {
        if (is_null($shipping_address_handling_mode)) {
            throw new \InvalidArgumentException('non-nullable shipping_address_handling_mode cannot be null');
        }
        $this->container['shipping_address_handling_mode'] = $shipping_address_handling_mode;

        return $this;
    }

    /**
     * Gets allowed_redirection_domains
     *
     * @return string[]|null
     */
    public function getAllowedRedirectionDomains()
    {
        return $this->container['allowed_redirection_domains'];
    }

    /**
     * Sets allowed_redirection_domains
     *
     * @param string[]|null $allowed_redirection_domains The domains to which the user is allowed to be redirected after the payment is completed. The following options can be configured: Exact domain: enter a full domain, e.g. (https://example.com). Wildcard domain: use to allow subdomains, e.g. (https://_*.example.com). All domains: use (ALL) to allow redirection to any domain (not recommended for security reasons). No domains : use (NONE) to disallow any redirection. Only one option per line is allowed. Invalid entries will be rejected.
     *
     * @return self
     */
    public function setAllowedRedirectionDomains($allowed_redirection_domains)
    {
        if (is_null($allowed_redirection_domains)) {
            throw new \InvalidArgumentException('non-nullable allowed_redirection_domains cannot be null');
        }


        if ((count($allowed_redirection_domains) < 1)) {
            throw new \InvalidArgumentException('invalid length for $allowed_redirection_domains when calling PaymentLink., number of items must be greater than or equal to 1.');
        }
        $this->container['allowed_redirection_domains'] = $allowed_redirection_domains;

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
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language The language for displaying the payment page. If not specified, it can be supplied via the 'language' request parameter.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets available_from
     *
     * @return \DateTime|null
     */
    public function getAvailableFrom()
    {
        return $this->container['available_from'];
    }

    /**
     * Sets available_from
     *
     * @param \DateTime|null $available_from The earliest date the payment link can be used to initiate a transaction. If no date is provided, the link will be available immediately.
     *
     * @return self
     */
    public function setAvailableFrom($available_from)
    {
        if (is_null($available_from)) {
            throw new \InvalidArgumentException('non-nullable available_from cannot be null');
        }
        $this->container['available_from'] = $available_from;

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
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The public URL to share with customers for making payments.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Wallee\Sdk\Model\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Wallee\Sdk\Model\LineItem[]|null $line_items The line items representing what is being sold. If not specified, they can be supplied via request parameters.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets protection_mode
     *
     * @return \Wallee\Sdk\Model\PaymentLinkProtectionMode|null
     */
    public function getProtectionMode()
    {
        return $this->container['protection_mode'];
    }

    /**
     * Sets protection_mode
     *
     * @param \Wallee\Sdk\Model\PaymentLinkProtectionMode|null $protection_mode protection_mode
     *
     * @return self
     */
    public function setProtectionMode($protection_mode)
    {
        if (is_null($protection_mode)) {
            throw new \InvalidArgumentException('non-nullable protection_mode cannot be null');
        }
        $this->container['protection_mode'] = $protection_mode;

        return $this;
    }

    /**
     * Gets available_until
     *
     * @return \DateTime|null
     */
    public function getAvailableUntil()
    {
        return $this->container['available_until'];
    }

    /**
     * Sets available_until
     *
     * @param \DateTime|null $available_until The latest date the payment link can be used to initiate a transaction. If no date is provided, the link will remain available indefinitely.
     *
     * @return self
     */
    public function setAvailableUntil($available_until)
    {
        if (is_null($available_until)) {
            throw new \InvalidArgumentException('non-nullable available_until cannot be null');
        }
        $this->container['available_until'] = $available_until;

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
     * @param string|null $name The name used to identify the payment link.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentLink., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The three-letter currency code (ISO 4217). If not specified, it must be provided in the 'currency' request parameter.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

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
     * Gets maximal_number_of_transactions
     *
     * @return int|null
     */
    public function getMaximalNumberOfTransactions()
    {
        return $this->container['maximal_number_of_transactions'];
    }

    /**
     * Sets maximal_number_of_transactions
     *
     * @param int|null $maximal_number_of_transactions The maximum number of transactions that can be initiated using the payment link.
     *
     * @return self
     */
    public function setMaximalNumberOfTransactions($maximal_number_of_transactions)
    {
        if (is_null($maximal_number_of_transactions)) {
            throw new \InvalidArgumentException('non-nullable maximal_number_of_transactions cannot be null');
        }
        $this->container['maximal_number_of_transactions'] = $maximal_number_of_transactions;

        return $this;
    }

    /**
     * Gets allowed_payment_method_configurations
     *
     * @return \Wallee\Sdk\Model\PaymentMethodConfiguration[]|null
     */
    public function getAllowedPaymentMethodConfigurations()
    {
        return $this->container['allowed_payment_method_configurations'];
    }

    /**
     * Sets allowed_payment_method_configurations
     *
     * @param \Wallee\Sdk\Model\PaymentMethodConfiguration[]|null $allowed_payment_method_configurations The payment method configurations that customers can use for making payments.
     *
     * @return self
     */
    public function setAllowedPaymentMethodConfigurations($allowed_payment_method_configurations)
    {
        if (is_null($allowed_payment_method_configurations)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_method_configurations cannot be null');
        }


        $this->container['allowed_payment_method_configurations'] = $allowed_payment_method_configurations;

        return $this;
    }

    /**
     * Gets applied_space_view
     *
     * @return int|null
     */
    public function getAppliedSpaceView()
    {
        return $this->container['applied_space_view'];
    }

    /**
     * Sets applied_space_view
     *
     * @param int|null $applied_space_view The payment link can be used within a specific space view, which may apply a customized design to the payment page.
     *
     * @return self
     */
    public function setAppliedSpaceView($applied_space_view)
    {
        if (is_null($applied_space_view)) {
            throw new \InvalidArgumentException('non-nullable applied_space_view cannot be null');
        }
        $this->container['applied_space_view'] = $applied_space_view;

        return $this;
    }

    /**
     * Gets billing_address_handling_mode
     *
     * @return \Wallee\Sdk\Model\PaymentLinkAddressHandlingMode|null
     */
    public function getBillingAddressHandlingMode()
    {
        return $this->container['billing_address_handling_mode'];
    }

    /**
     * Sets billing_address_handling_mode
     *
     * @param \Wallee\Sdk\Model\PaymentLinkAddressHandlingMode|null $billing_address_handling_mode billing_address_handling_mode
     *
     * @return self
     */
    public function setBillingAddressHandlingMode($billing_address_handling_mode)
    {
        if (is_null($billing_address_handling_mode)) {
            throw new \InvalidArgumentException('non-nullable billing_address_handling_mode cannot be null');
        }
        $this->container['billing_address_handling_mode'] = $billing_address_handling_mode;

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


