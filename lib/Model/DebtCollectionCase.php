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
 * DebtCollectionCase model
 *
 * @category    Class
 * @description The debt collection case represents a try to collect the money from the debtor.
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.0.0
 * @implements \ArrayAccess<string, mixed>
 */
class DebtCollectionCase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DebtCollectionCase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract_date' => '\DateTime',
        'due_date' => '\DateTime',
        'closed_on' => '\DateTime',
        'language' => 'string',
        'source' => '\Wallee\Sdk\Model\DebtCollectionCaseSource',
        'created_on' => '\DateTime',
        'line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'reference' => 'string',
        'currency' => 'string',
        'id' => 'int',
        'state' => '\Wallee\Sdk\Model\DebtCollectionCaseState',
        'processing_timeout_on' => '\DateTime',
        'amount' => 'float',
        'creator' => 'int',
        'planned_purge_date' => '\DateTime',
        'external_id' => 'string',
        'collector_configuration' => '\Wallee\Sdk\Model\DebtCollectorConfiguration',
        'reviewer' => 'int',
        'space_view_id' => 'int',
        'review_started_on' => '\DateTime',
        'version' => 'int',
        'labels' => '\Wallee\Sdk\Model\Label[]',
        'processing_started_on' => '\DateTime',
        'linked_space_id' => 'int',
        'environment' => '\Wallee\Sdk\Model\DebtCollectionEnvironment',
        'reviewed_on' => '\DateTime',
        'source_entity_id' => 'int',
        'failure_reason' => '\Wallee\Sdk\Model\FailureReason',
        'billing_address' => '\Wallee\Sdk\Model\Address',
        'failed_on' => '\DateTime',
        'next_attempt_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contract_date' => 'date-time',
        'due_date' => 'date-time',
        'closed_on' => 'date-time',
        'language' => null,
        'source' => null,
        'created_on' => 'date-time',
        'line_items' => null,
        'reference' => null,
        'currency' => null,
        'id' => 'int64',
        'state' => null,
        'processing_timeout_on' => 'date-time',
        'amount' => null,
        'creator' => 'int64',
        'planned_purge_date' => 'date-time',
        'external_id' => null,
        'collector_configuration' => null,
        'reviewer' => 'int64',
        'space_view_id' => 'int64',
        'review_started_on' => 'date-time',
        'version' => 'int32',
        'labels' => null,
        'processing_started_on' => 'date-time',
        'linked_space_id' => 'int64',
        'environment' => null,
        'reviewed_on' => 'date-time',
        'source_entity_id' => 'int64',
        'failure_reason' => null,
        'billing_address' => null,
        'failed_on' => 'date-time',
        'next_attempt_on' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contract_date' => false,
        'due_date' => false,
        'closed_on' => false,
        'language' => false,
        'source' => false,
        'created_on' => false,
        'line_items' => false,
        'reference' => false,
        'currency' => false,
        'id' => false,
        'state' => false,
        'processing_timeout_on' => false,
        'amount' => false,
        'creator' => false,
        'planned_purge_date' => false,
        'external_id' => false,
        'collector_configuration' => false,
        'reviewer' => false,
        'space_view_id' => false,
        'review_started_on' => false,
        'version' => false,
        'labels' => false,
        'processing_started_on' => false,
        'linked_space_id' => false,
        'environment' => false,
        'reviewed_on' => false,
        'source_entity_id' => false,
        'failure_reason' => false,
        'billing_address' => false,
        'failed_on' => false,
        'next_attempt_on' => false
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
        'contract_date' => 'contractDate',
        'due_date' => 'dueDate',
        'closed_on' => 'closedOn',
        'language' => 'language',
        'source' => 'source',
        'created_on' => 'createdOn',
        'line_items' => 'lineItems',
        'reference' => 'reference',
        'currency' => 'currency',
        'id' => 'id',
        'state' => 'state',
        'processing_timeout_on' => 'processingTimeoutOn',
        'amount' => 'amount',
        'creator' => 'creator',
        'planned_purge_date' => 'plannedPurgeDate',
        'external_id' => 'externalId',
        'collector_configuration' => 'collectorConfiguration',
        'reviewer' => 'reviewer',
        'space_view_id' => 'spaceViewId',
        'review_started_on' => 'reviewStartedOn',
        'version' => 'version',
        'labels' => 'labels',
        'processing_started_on' => 'processingStartedOn',
        'linked_space_id' => 'linkedSpaceId',
        'environment' => 'environment',
        'reviewed_on' => 'reviewedOn',
        'source_entity_id' => 'sourceEntityId',
        'failure_reason' => 'failureReason',
        'billing_address' => 'billingAddress',
        'failed_on' => 'failedOn',
        'next_attempt_on' => 'nextAttemptOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract_date' => 'setContractDate',
        'due_date' => 'setDueDate',
        'closed_on' => 'setClosedOn',
        'language' => 'setLanguage',
        'source' => 'setSource',
        'created_on' => 'setCreatedOn',
        'line_items' => 'setLineItems',
        'reference' => 'setReference',
        'currency' => 'setCurrency',
        'id' => 'setId',
        'state' => 'setState',
        'processing_timeout_on' => 'setProcessingTimeoutOn',
        'amount' => 'setAmount',
        'creator' => 'setCreator',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'external_id' => 'setExternalId',
        'collector_configuration' => 'setCollectorConfiguration',
        'reviewer' => 'setReviewer',
        'space_view_id' => 'setSpaceViewId',
        'review_started_on' => 'setReviewStartedOn',
        'version' => 'setVersion',
        'labels' => 'setLabels',
        'processing_started_on' => 'setProcessingStartedOn',
        'linked_space_id' => 'setLinkedSpaceId',
        'environment' => 'setEnvironment',
        'reviewed_on' => 'setReviewedOn',
        'source_entity_id' => 'setSourceEntityId',
        'failure_reason' => 'setFailureReason',
        'billing_address' => 'setBillingAddress',
        'failed_on' => 'setFailedOn',
        'next_attempt_on' => 'setNextAttemptOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract_date' => 'getContractDate',
        'due_date' => 'getDueDate',
        'closed_on' => 'getClosedOn',
        'language' => 'getLanguage',
        'source' => 'getSource',
        'created_on' => 'getCreatedOn',
        'line_items' => 'getLineItems',
        'reference' => 'getReference',
        'currency' => 'getCurrency',
        'id' => 'getId',
        'state' => 'getState',
        'processing_timeout_on' => 'getProcessingTimeoutOn',
        'amount' => 'getAmount',
        'creator' => 'getCreator',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'external_id' => 'getExternalId',
        'collector_configuration' => 'getCollectorConfiguration',
        'reviewer' => 'getReviewer',
        'space_view_id' => 'getSpaceViewId',
        'review_started_on' => 'getReviewStartedOn',
        'version' => 'getVersion',
        'labels' => 'getLabels',
        'processing_started_on' => 'getProcessingStartedOn',
        'linked_space_id' => 'getLinkedSpaceId',
        'environment' => 'getEnvironment',
        'reviewed_on' => 'getReviewedOn',
        'source_entity_id' => 'getSourceEntityId',
        'failure_reason' => 'getFailureReason',
        'billing_address' => 'getBillingAddress',
        'failed_on' => 'getFailedOn',
        'next_attempt_on' => 'getNextAttemptOn'
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
        $this->setIfExists('contract_date', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('closed_on', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('created_on', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('processing_timeout_on', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('planned_purge_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('collector_configuration', $data ?? [], null);
        $this->setIfExists('reviewer', $data ?? [], null);
        $this->setIfExists('space_view_id', $data ?? [], null);
        $this->setIfExists('review_started_on', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('processing_started_on', $data ?? [], null);
        $this->setIfExists('linked_space_id', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
        $this->setIfExists('reviewed_on', $data ?? [], null);
        $this->setIfExists('source_entity_id', $data ?? [], null);
        $this->setIfExists('failure_reason', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('failed_on', $data ?? [], null);
        $this->setIfExists('next_attempt_on', $data ?? [], null);
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
     * Gets contract_date
     *
     * @return \DateTime|null
     */
    public function getContractDate()
    {
        return $this->container['contract_date'];
    }

    /**
     * Sets contract_date
     *
     * @param \DateTime|null $contract_date The date and time when the contract with the debtor was signed.
     *
     * @return self
     */
    public function setContractDate($contract_date)
    {
        if (is_null($contract_date)) {
            throw new \InvalidArgumentException('non-nullable contract_date cannot be null');
        }
        $this->container['contract_date'] = $contract_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date The date and time when the claim was due.
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets closed_on
     *
     * @return \DateTime|null
     */
    public function getClosedOn()
    {
        return $this->container['closed_on'];
    }

    /**
     * Sets closed_on
     *
     * @param \DateTime|null $closed_on The date and time when the case was closed.
     *
     * @return self
     */
    public function setClosedOn($closed_on)
    {
        if (is_null($closed_on)) {
            throw new \InvalidArgumentException('non-nullable closed_on cannot be null');
        }
        $this->container['closed_on'] = $closed_on;

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
     * @param string|null $language The language that is linked to the object.
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
     * Gets source
     *
     * @return \Wallee\Sdk\Model\DebtCollectionCaseSource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Wallee\Sdk\Model\DebtCollectionCaseSource|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

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
     * @param \Wallee\Sdk\Model\LineItem[]|null $line_items The line items that are subject of this debt collection case.
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
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference A unique reference to identify the debt collection case in communication with the debtor.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

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
     * @param string|null $currency The three-letter code (ISO 4217 format) of the case's currency.
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
     * @return \Wallee\Sdk\Model\DebtCollectionCaseState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\DebtCollectionCaseState|null $state state
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
     * Gets processing_timeout_on
     *
     * @return \DateTime|null
     */
    public function getProcessingTimeoutOn()
    {
        return $this->container['processing_timeout_on'];
    }

    /**
     * Sets processing_timeout_on
     *
     * @param \DateTime|null $processing_timeout_on The date and time when the processing of the case times out.
     *
     * @return self
     */
    public function setProcessingTimeoutOn($processing_timeout_on)
    {
        if (is_null($processing_timeout_on)) {
            throw new \InvalidArgumentException('non-nullable processing_timeout_on cannot be null');
        }
        $this->container['processing_timeout_on'] = $processing_timeout_on;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The sum of all unpaid item prices in the case's currency. The amount can no longer be changed once the case has been reviewed.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return int|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param int|null $creator The ID of the user the case was created by.
     *
     * @return self
     */
    public function setCreator($creator)
    {
        if (is_null($creator)) {
            throw new \InvalidArgumentException('non-nullable creator cannot be null');
        }
        $this->container['creator'] = $creator;

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
     * Gets collector_configuration
     *
     * @return \Wallee\Sdk\Model\DebtCollectorConfiguration|null
     */
    public function getCollectorConfiguration()
    {
        return $this->container['collector_configuration'];
    }

    /**
     * Sets collector_configuration
     *
     * @param \Wallee\Sdk\Model\DebtCollectorConfiguration|null $collector_configuration collector_configuration
     *
     * @return self
     */
    public function setCollectorConfiguration($collector_configuration)
    {
        if (is_null($collector_configuration)) {
            throw new \InvalidArgumentException('non-nullable collector_configuration cannot be null');
        }
        $this->container['collector_configuration'] = $collector_configuration;

        return $this;
    }

    /**
     * Gets reviewer
     *
     * @return int|null
     */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
     * Sets reviewer
     *
     * @param int|null $reviewer The ID of the user the case was reviewed by.
     *
     * @return self
     */
    public function setReviewer($reviewer)
    {
        if (is_null($reviewer)) {
            throw new \InvalidArgumentException('non-nullable reviewer cannot be null');
        }
        $this->container['reviewer'] = $reviewer;

        return $this;
    }

    /**
     * Gets space_view_id
     *
     * @return int|null
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int|null $space_view_id The ID of the space view this object is linked to.
     *
     * @return self
     */
    public function setSpaceViewId($space_view_id)
    {
        if (is_null($space_view_id)) {
            throw new \InvalidArgumentException('non-nullable space_view_id cannot be null');
        }
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }

    /**
     * Gets review_started_on
     *
     * @return \DateTime|null
     */
    public function getReviewStartedOn()
    {
        return $this->container['review_started_on'];
    }

    /**
     * Sets review_started_on
     *
     * @param \DateTime|null $review_started_on The date and time when the review of the case was started.
     *
     * @return self
     */
    public function setReviewStartedOn($review_started_on)
    {
        if (is_null($review_started_on)) {
            throw new \InvalidArgumentException('non-nullable review_started_on cannot be null');
        }
        $this->container['review_started_on'] = $review_started_on;

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
     * Gets labels
     *
     * @return \Wallee\Sdk\Model\Label[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Wallee\Sdk\Model\Label[]|null $labels The labels providing additional information about the object.
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }


        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets processing_started_on
     *
     * @return \DateTime|null
     */
    public function getProcessingStartedOn()
    {
        return $this->container['processing_started_on'];
    }

    /**
     * Sets processing_started_on
     *
     * @param \DateTime|null $processing_started_on The date and time when the processing of the case was started.
     *
     * @return self
     */
    public function setProcessingStartedOn($processing_started_on)
    {
        if (is_null($processing_started_on)) {
            throw new \InvalidArgumentException('non-nullable processing_started_on cannot be null');
        }
        $this->container['processing_started_on'] = $processing_started_on;

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
     * Gets environment
     *
     * @return \Wallee\Sdk\Model\DebtCollectionEnvironment|null
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Wallee\Sdk\Model\DebtCollectionEnvironment|null $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        if (is_null($environment)) {
            throw new \InvalidArgumentException('non-nullable environment cannot be null');
        }
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets reviewed_on
     *
     * @return \DateTime|null
     */
    public function getReviewedOn()
    {
        return $this->container['reviewed_on'];
    }

    /**
     * Sets reviewed_on
     *
     * @param \DateTime|null $reviewed_on The date and time when the case was reviewed.
     *
     * @return self
     */
    public function setReviewedOn($reviewed_on)
    {
        if (is_null($reviewed_on)) {
            throw new \InvalidArgumentException('non-nullable reviewed_on cannot be null');
        }
        $this->container['reviewed_on'] = $reviewed_on;

        return $this;
    }

    /**
     * Gets source_entity_id
     *
     * @return int|null
     */
    public function getSourceEntityId()
    {
        return $this->container['source_entity_id'];
    }

    /**
     * Sets source_entity_id
     *
     * @param int|null $source_entity_id The ID of the object that is the source of the case. Only defined if the case was created by an internal process.
     *
     * @return self
     */
    public function setSourceEntityId($source_entity_id)
    {
        if (is_null($source_entity_id)) {
            throw new \InvalidArgumentException('non-nullable source_entity_id cannot be null');
        }
        $this->container['source_entity_id'] = $source_entity_id;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return \Wallee\Sdk\Model\FailureReason|null
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \Wallee\Sdk\Model\FailureReason|null $failure_reason failure_reason
     *
     * @return self
     */
    public function setFailureReason($failure_reason)
    {
        if (is_null($failure_reason)) {
            throw new \InvalidArgumentException('non-nullable failure_reason cannot be null');
        }
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Wallee\Sdk\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Wallee\Sdk\Model\Address|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets failed_on
     *
     * @return \DateTime|null
     */
    public function getFailedOn()
    {
        return $this->container['failed_on'];
    }

    /**
     * Sets failed_on
     *
     * @param \DateTime|null $failed_on The date and time when the case failed.
     *
     * @return self
     */
    public function setFailedOn($failed_on)
    {
        if (is_null($failed_on)) {
            throw new \InvalidArgumentException('non-nullable failed_on cannot be null');
        }
        $this->container['failed_on'] = $failed_on;

        return $this;
    }

    /**
     * Gets next_attempt_on
     *
     * @return \DateTime|null
     */
    public function getNextAttemptOn()
    {
        return $this->container['next_attempt_on'];
    }

    /**
     * Sets next_attempt_on
     *
     * @param \DateTime|null $next_attempt_on The date and time when the next attempt at processing the case will be made.
     *
     * @return self
     */
    public function setNextAttemptOn($next_attempt_on)
    {
        if (is_null($next_attempt_on)) {
            throw new \InvalidArgumentException('non-nullable next_attempt_on cannot be null');
        }
        $this->container['next_attempt_on'] = $next_attempt_on;

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


