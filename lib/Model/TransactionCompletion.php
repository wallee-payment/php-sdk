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
 * TransactionCompletion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class TransactionCompletion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionCompletion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'base_line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'created_by' => 'int',
        'created_on' => '\DateTime',
        'external_id' => 'string',
        'failed_on' => '\DateTime',
        'failure_reason' => '\Wallee\Sdk\Model\FailureReason',
        'id' => 'int',
        'invoice_merchant_reference' => 'string',
        'labels' => '\Wallee\Sdk\Model\Label[]',
        'language' => 'string',
        'last_completion' => 'bool',
        'line_item_version' => '\Wallee\Sdk\Model\TransactionLineItemVersion',
        'line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'linked_space_id' => 'int',
        'linked_transaction' => 'int',
        'mode' => '\Wallee\Sdk\Model\TransactionCompletionMode',
        'next_update_on' => '\DateTime',
        'payment_information' => 'string',
        'planned_purge_date' => '\DateTime',
        'processing_on' => '\DateTime',
        'processor_reference' => 'string',
        'remaining_line_items' => '\Wallee\Sdk\Model\LineItem[]',
        'space_view_id' => 'int',
        'state' => '\Wallee\Sdk\Model\TransactionCompletionState',
        'statement_descriptor' => 'string',
        'succeeded_on' => '\DateTime',
        'tax_amount' => 'float',
        'time_zone' => 'string',
        'timeout_on' => '\DateTime',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'base_line_items' => null,
        'created_by' => 'int64',
        'created_on' => 'date-time',
        'external_id' => null,
        'failed_on' => 'date-time',
        'failure_reason' => null,
        'id' => 'int64',
        'invoice_merchant_reference' => null,
        'labels' => null,
        'language' => null,
        'last_completion' => null,
        'line_item_version' => null,
        'line_items' => null,
        'linked_space_id' => 'int64',
        'linked_transaction' => 'int64',
        'mode' => null,
        'next_update_on' => 'date-time',
        'payment_information' => null,
        'planned_purge_date' => 'date-time',
        'processing_on' => 'date-time',
        'processor_reference' => null,
        'remaining_line_items' => null,
        'space_view_id' => 'int64',
        'state' => null,
        'statement_descriptor' => null,
        'succeeded_on' => 'date-time',
        'tax_amount' => null,
        'time_zone' => null,
        'timeout_on' => 'date-time',
        'version' => 'int32'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'base_line_items' => 'baseLineItems',
        'created_by' => 'createdBy',
        'created_on' => 'createdOn',
        'external_id' => 'externalId',
        'failed_on' => 'failedOn',
        'failure_reason' => 'failureReason',
        'id' => 'id',
        'invoice_merchant_reference' => 'invoiceMerchantReference',
        'labels' => 'labels',
        'language' => 'language',
        'last_completion' => 'lastCompletion',
        'line_item_version' => 'lineItemVersion',
        'line_items' => 'lineItems',
        'linked_space_id' => 'linkedSpaceId',
        'linked_transaction' => 'linkedTransaction',
        'mode' => 'mode',
        'next_update_on' => 'nextUpdateOn',
        'payment_information' => 'paymentInformation',
        'planned_purge_date' => 'plannedPurgeDate',
        'processing_on' => 'processingOn',
        'processor_reference' => 'processorReference',
        'remaining_line_items' => 'remainingLineItems',
        'space_view_id' => 'spaceViewId',
        'state' => 'state',
        'statement_descriptor' => 'statementDescriptor',
        'succeeded_on' => 'succeededOn',
        'tax_amount' => 'taxAmount',
        'time_zone' => 'timeZone',
        'timeout_on' => 'timeoutOn',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'base_line_items' => 'setBaseLineItems',
        'created_by' => 'setCreatedBy',
        'created_on' => 'setCreatedOn',
        'external_id' => 'setExternalId',
        'failed_on' => 'setFailedOn',
        'failure_reason' => 'setFailureReason',
        'id' => 'setId',
        'invoice_merchant_reference' => 'setInvoiceMerchantReference',
        'labels' => 'setLabels',
        'language' => 'setLanguage',
        'last_completion' => 'setLastCompletion',
        'line_item_version' => 'setLineItemVersion',
        'line_items' => 'setLineItems',
        'linked_space_id' => 'setLinkedSpaceId',
        'linked_transaction' => 'setLinkedTransaction',
        'mode' => 'setMode',
        'next_update_on' => 'setNextUpdateOn',
        'payment_information' => 'setPaymentInformation',
        'planned_purge_date' => 'setPlannedPurgeDate',
        'processing_on' => 'setProcessingOn',
        'processor_reference' => 'setProcessorReference',
        'remaining_line_items' => 'setRemainingLineItems',
        'space_view_id' => 'setSpaceViewId',
        'state' => 'setState',
        'statement_descriptor' => 'setStatementDescriptor',
        'succeeded_on' => 'setSucceededOn',
        'tax_amount' => 'setTaxAmount',
        'time_zone' => 'setTimeZone',
        'timeout_on' => 'setTimeoutOn',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'base_line_items' => 'getBaseLineItems',
        'created_by' => 'getCreatedBy',
        'created_on' => 'getCreatedOn',
        'external_id' => 'getExternalId',
        'failed_on' => 'getFailedOn',
        'failure_reason' => 'getFailureReason',
        'id' => 'getId',
        'invoice_merchant_reference' => 'getInvoiceMerchantReference',
        'labels' => 'getLabels',
        'language' => 'getLanguage',
        'last_completion' => 'getLastCompletion',
        'line_item_version' => 'getLineItemVersion',
        'line_items' => 'getLineItems',
        'linked_space_id' => 'getLinkedSpaceId',
        'linked_transaction' => 'getLinkedTransaction',
        'mode' => 'getMode',
        'next_update_on' => 'getNextUpdateOn',
        'payment_information' => 'getPaymentInformation',
        'planned_purge_date' => 'getPlannedPurgeDate',
        'processing_on' => 'getProcessingOn',
        'processor_reference' => 'getProcessorReference',
        'remaining_line_items' => 'getRemainingLineItems',
        'space_view_id' => 'getSpaceViewId',
        'state' => 'getState',
        'statement_descriptor' => 'getStatementDescriptor',
        'succeeded_on' => 'getSucceededOn',
        'tax_amount' => 'getTaxAmount',
        'time_zone' => 'getTimeZone',
        'timeout_on' => 'getTimeoutOn',
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
        
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        
        $this->container['base_line_items'] = isset($data['base_line_items']) ? $data['base_line_items'] : null;
        
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        
        $this->container['failed_on'] = isset($data['failed_on']) ? $data['failed_on'] : null;
        
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        
        $this->container['invoice_merchant_reference'] = isset($data['invoice_merchant_reference']) ? $data['invoice_merchant_reference'] : null;
        
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        
        $this->container['last_completion'] = isset($data['last_completion']) ? $data['last_completion'] : null;
        
        $this->container['line_item_version'] = isset($data['line_item_version']) ? $data['line_item_version'] : null;
        
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        
        $this->container['linked_space_id'] = isset($data['linked_space_id']) ? $data['linked_space_id'] : null;
        
        $this->container['linked_transaction'] = isset($data['linked_transaction']) ? $data['linked_transaction'] : null;
        
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        
        $this->container['next_update_on'] = isset($data['next_update_on']) ? $data['next_update_on'] : null;
        
        $this->container['payment_information'] = isset($data['payment_information']) ? $data['payment_information'] : null;
        
        $this->container['planned_purge_date'] = isset($data['planned_purge_date']) ? $data['planned_purge_date'] : null;
        
        $this->container['processing_on'] = isset($data['processing_on']) ? $data['processing_on'] : null;
        
        $this->container['processor_reference'] = isset($data['processor_reference']) ? $data['processor_reference'] : null;
        
        $this->container['remaining_line_items'] = isset($data['remaining_line_items']) ? $data['remaining_line_items'] : null;
        
        $this->container['space_view_id'] = isset($data['space_view_id']) ? $data['space_view_id'] : null;
        
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        
        $this->container['statement_descriptor'] = isset($data['statement_descriptor']) ? $data['statement_descriptor'] : null;
        
        $this->container['succeeded_on'] = isset($data['succeeded_on']) ? $data['succeeded_on'] : null;
        
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        
        $this->container['timeout_on'] = isset($data['timeout_on']) ? $data['timeout_on'] : null;
        
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

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['invoice_merchant_reference']) && (mb_strlen($this->container['invoice_merchant_reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'invoice_merchant_reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['statement_descriptor']) && (mb_strlen($this->container['statement_descriptor']) > 80)) {
            $invalidProperties[] = "invalid value for 'statement_descriptor', the character length must be smaller than or equal to 80.";
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The total amount to be captured in this completion, including taxes.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    

    /**
     * Gets base_line_items
     *
     * @return \Wallee\Sdk\Model\LineItem[]
     */
    public function getBaseLineItems()
    {
        return $this->container['base_line_items'];
    }

    /**
     * Sets base_line_items
     *
     * @param \Wallee\Sdk\Model\LineItem[] $base_line_items The original line items from the transaction that serve as the baseline for this completion.
     *
     * @return $this
     */
    public function setBaseLineItems($base_line_items)
    {
        $this->container['base_line_items'] = $base_line_items;

        return $this;
    }
    

    /**
     * Gets created_by
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int $created_by The ID of the user the transaction completion was created by.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id A client-generated nonce which uniquely identifies some action to be executed. Subsequent requests with the same external ID do not execute the action again, but return the original result.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if (!is_null($external_id) && (mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionCompletion., must be smaller than or equal to 100.');
        }
        if (!is_null($external_id) && (mb_strlen($external_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling TransactionCompletion., must be bigger than or equal to 1.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }
    

    /**
     * Gets failed_on
     *
     * @return \DateTime
     */
    public function getFailedOn()
    {
        return $this->container['failed_on'];
    }

    /**
     * Sets failed_on
     *
     * @param \DateTime $failed_on The date and time when the transaction completion failed.
     *
     * @return $this
     */
    public function setFailedOn($failed_on)
    {
        $this->container['failed_on'] = $failed_on;

        return $this;
    }
    

    /**
     * Gets failure_reason
     *
     * @return \Wallee\Sdk\Model\FailureReason
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param \Wallee\Sdk\Model\FailureReason $failure_reason The reason for the failure of the transaction completion.
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

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
     * Gets invoice_merchant_reference
     *
     * @return string
     */
    public function getInvoiceMerchantReference()
    {
        return $this->container['invoice_merchant_reference'];
    }

    /**
     * Sets invoice_merchant_reference
     *
     * @param string $invoice_merchant_reference The merchant's reference used to identify the invoice.
     *
     * @return $this
     */
    public function setInvoiceMerchantReference($invoice_merchant_reference)
    {
        if (!is_null($invoice_merchant_reference) && (mb_strlen($invoice_merchant_reference) > 100)) {
            throw new \InvalidArgumentException('invalid length for $invoice_merchant_reference when calling TransactionCompletion., must be smaller than or equal to 100.');
        }

        $this->container['invoice_merchant_reference'] = $invoice_merchant_reference;

        return $this;
    }
    

    /**
     * Gets labels
     *
     * @return \Wallee\Sdk\Model\Label[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Wallee\Sdk\Model\Label[] $labels The labels providing additional information about the object.
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }
    

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language that is linked to the object.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }
    

    /**
     * Gets last_completion
     *
     * @return bool
     */
    public function getLastCompletion()
    {
        return $this->container['last_completion'];
    }

    /**
     * Sets last_completion
     *
     * @param bool $last_completion Whether this is the final completion for the transaction. After the last completion is successfully created, the transaction enters its final state, and no further completions can occur.
     *
     * @return $this
     */
    public function setLastCompletion($last_completion)
    {
        $this->container['last_completion'] = $last_completion;

        return $this;
    }
    

    /**
     * Gets line_item_version
     *
     * @return \Wallee\Sdk\Model\TransactionLineItemVersion
     */
    public function getLineItemVersion()
    {
        return $this->container['line_item_version'];
    }

    /**
     * Sets line_item_version
     *
     * @param \Wallee\Sdk\Model\TransactionLineItemVersion $line_item_version The specific version of the line items that are being used for this completion.
     *
     * @return $this
     */
    public function setLineItemVersion($line_item_version)
    {
        $this->container['line_item_version'] = $line_item_version;

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
     * @param \Wallee\Sdk\Model\LineItem[] $line_items The line items captured in this transaction completion.
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
     * Gets mode
     *
     * @return \Wallee\Sdk\Model\TransactionCompletionMode
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \Wallee\Sdk\Model\TransactionCompletionMode $mode The mode of transaction completion, such as online or offline, determining how the completion process is executed.
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }
    

    /**
     * Gets next_update_on
     *
     * @return \DateTime
     */
    public function getNextUpdateOn()
    {
        return $this->container['next_update_on'];
    }

    /**
     * Sets next_update_on
     *
     * @param \DateTime $next_update_on The date and time when the next update of the object's state is planned.
     *
     * @return $this
     */
    public function setNextUpdateOn($next_update_on)
    {
        $this->container['next_update_on'] = $next_update_on;

        return $this;
    }
    

    /**
     * Gets payment_information
     *
     * @return string
     */
    public function getPaymentInformation()
    {
        return $this->container['payment_information'];
    }

    /**
     * Sets payment_information
     *
     * @param string $payment_information Payment-specific details related to this transaction completion such as payment instructions or references needed for processing.
     *
     * @return $this
     */
    public function setPaymentInformation($payment_information)
    {
        $this->container['payment_information'] = $payment_information;

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
     * Gets processing_on
     *
     * @return \DateTime
     */
    public function getProcessingOn()
    {
        return $this->container['processing_on'];
    }

    /**
     * Sets processing_on
     *
     * @param \DateTime $processing_on The date and time when the processing of the transaction completion was started.
     *
     * @return $this
     */
    public function setProcessingOn($processing_on)
    {
        $this->container['processing_on'] = $processing_on;

        return $this;
    }
    

    /**
     * Gets processor_reference
     *
     * @return string
     */
    public function getProcessorReference()
    {
        return $this->container['processor_reference'];
    }

    /**
     * Sets processor_reference
     *
     * @param string $processor_reference The reference ID provided by the payment processor, used to trace the completion through the external payment system.
     *
     * @return $this
     */
    public function setProcessorReference($processor_reference)
    {
        $this->container['processor_reference'] = $processor_reference;

        return $this;
    }
    

    /**
     * Gets remaining_line_items
     *
     * @return \Wallee\Sdk\Model\LineItem[]
     */
    public function getRemainingLineItems()
    {
        return $this->container['remaining_line_items'];
    }

    /**
     * Sets remaining_line_items
     *
     * @param \Wallee\Sdk\Model\LineItem[] $remaining_line_items The line items yet to be captured in the transaction.
     *
     * @return $this
     */
    public function setRemainingLineItems($remaining_line_items)
    {
        $this->container['remaining_line_items'] = $remaining_line_items;

        return $this;
    }
    

    /**
     * Gets space_view_id
     *
     * @return int
     */
    public function getSpaceViewId()
    {
        return $this->container['space_view_id'];
    }

    /**
     * Sets space_view_id
     *
     * @param int $space_view_id The ID of the space view this object is linked to.
     *
     * @return $this
     */
    public function setSpaceViewId($space_view_id)
    {
        $this->container['space_view_id'] = $space_view_id;

        return $this;
    }
    

    /**
     * Gets state
     *
     * @return \Wallee\Sdk\Model\TransactionCompletionState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Wallee\Sdk\Model\TransactionCompletionState $state The object's current state.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    

    /**
     * Gets statement_descriptor
     *
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     *
     * @param string $statement_descriptor The statement descriptor that appears on a customer's bank statement, providing an explanation for charges or payments, helping customers identify the transaction.
     *
     * @return $this
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        if (!is_null($statement_descriptor) && (mb_strlen($statement_descriptor) > 80)) {
            throw new \InvalidArgumentException('invalid length for $statement_descriptor when calling TransactionCompletion., must be smaller than or equal to 80.');
        }

        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
    }
    

    /**
     * Gets succeeded_on
     *
     * @return \DateTime
     */
    public function getSucceededOn()
    {
        return $this->container['succeeded_on'];
    }

    /**
     * Sets succeeded_on
     *
     * @param \DateTime $succeeded_on The date and time when the transaction completion succeeded.
     *
     * @return $this
     */
    public function setSucceededOn($succeeded_on)
    {
        $this->container['succeeded_on'] = $succeeded_on;

        return $this;
    }
    

    /**
     * Gets tax_amount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float $tax_amount The portion of the captured amount that corresponds to taxes.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }
    

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone The time zone that this object is associated with.
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }
    

    /**
     * Gets timeout_on
     *
     * @return \DateTime
     */
    public function getTimeoutOn()
    {
        return $this->container['timeout_on'];
    }

    /**
     * Sets timeout_on
     *
     * @param \DateTime $timeout_on The date and time when the object will expire.
     *
     * @return $this
     */
    public function setTimeoutOn($timeout_on)
    {
        $this->container['timeout_on'] = $timeout_on;

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


