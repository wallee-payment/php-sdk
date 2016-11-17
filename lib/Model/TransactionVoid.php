<?php
/**
 * Wallee SDK
 *
 * This library allows to interact with the Wallee payment service.
 * Wallee SDK: 1.0.0
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

use \Wallee\Sdk\ValidationException;

/**
 * TransactionVoid model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class TransactionVoid  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'TransactionVoid';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'createdBy' => 'int',
        'createdOn' => 'string',
        'failedOn' => 'string',
        'failureReason' => '\Wallee\Sdk\Model\FailureReason',
        'id' => 'int',
        'labels' => '\Wallee\Sdk\Model\Label[]',
        'language' => 'string',
        'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
        'mode' => 'string',
        'nextUpdateOn' => 'string',
        'plannedPurgeDate' => 'string',
        'processorReference' => 'string',
        'spaceViewId' => '\Wallee\Sdk\Model\EntityReference',
        'state' => 'string',
        'succeededOn' => 'string',
        'timeoutOn' => 'string',
        'transaction' => '\Wallee\Sdk\Model\Transaction',
        'version' => 'int'    );

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
    public static function swaggerTypes() {
        return self::$swaggerTypes;
    }
    
    
    /**
     * Values of mode.
     */ 
    const MODE_ONLINE = 'ONLINE';
    const MODE_OFFLINE = 'OFFLINE';
    
    /**
     * Returns allowable values of mode.
     *
     * @return string[]
     */
    public function getModeAllowableValues() {
        return [
            self::MODE_ONLINE,
            self::MODE_OFFLINE,
        ];
    }
    
    /**
     * Values of state.
     */ 
    const STATE_CREATE = 'CREATE';
    const STATE_PENDING = 'PENDING';
    const STATE_FAILED = 'FAILED';
    const STATE_SUCCESSFUL = 'SUCCESSFUL';
    
    /**
     * Returns allowable values of state.
     *
     * @return string[]
     */
    public function getStateAllowableValues() {
        return [
            self::STATE_CREATE,
            self::STATE_PENDING,
            self::STATE_FAILED,
            self::STATE_SUCCESSFUL,
        ];
    }
    
    
    /**
     * 
     *
     * @var int
     */
    private $createdBy;
    
    /**
     * The created on date indicates the date on which the entity was stored into the database.
     *
     * @var string
     */
    private $createdOn;
    
    /**
     * 
     *
     * @var string
     */
    private $failedOn;
    
    /**
     * @var \Wallee\Sdk\Model\FailureReason
     */
    private $failureReason;
    
    /**
     * The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @var int
     */
    private $id;
    
    /**
     * 
     *
     * @var \Wallee\Sdk\Model\Label[]
     */
    private $labels;
    
    /**
     * 
     *
     * @var string
     */
    private $language;
    
    /**
     * @var \Wallee\Sdk\Model\EntityReference
     */
    private $linkedSpaceId;
    
    /**
     * 
     *
     * @var string
     */
    private $mode;
    
    /**
     * 
     *
     * @var string
     */
    private $nextUpdateOn;
    
    /**
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @var string
     */
    private $plannedPurgeDate;
    
    /**
     * 
     *
     * @var string
     */
    private $processorReference;
    
    /**
     * @var \Wallee\Sdk\Model\EntityReference
     */
    private $spaceViewId;
    
    /**
     * 
     *
     * @var string
     */
    private $state;
    
    /**
     * 
     *
     * @var string
     */
    private $succeededOn;
    
    /**
     * 
     *
     * @var string
     */
    private $timeoutOn;
    
    /**
     * @var \Wallee\Sdk\Model\Transaction
     */
    private $transaction;
    
    /**
     * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @var int
     */
    private $version;
    

    /**
     * Constructor.
     *
     * @param mixed[] $data an associated array of property values initializing the model
     */
    public function __construct(array $data = null) {
        $this->setFailureReason(isset($data['failureReason']) ? $data['failureReason'] : null);
        $this->setLabels(isset($data['labels']) ? $data['labels'] : null);
        $this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
        $this->setSpaceViewId(isset($data['spaceViewId']) ? $data['spaceViewId'] : null);
        $this->setTransaction(isset($data['transaction']) ? $data['transaction'] : null);
    }


    /**
     * Returns createdBy.
     *
     * 
     *
     * @return int
     */
    public function getCreatedBy() {
        return $this->createdBy;
    }

    /**
     * Sets createdBy.
     *
     * @param int $createdBy
     * @return TransactionVoid
     */
    protected function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Returns createdOn.
     *
     * The created on date indicates the date on which the entity was stored into the database.
     *
     * @return string
     */
    public function getCreatedOn() {
        return $this->createdOn;
    }

    /**
     * Sets createdOn.
     *
     * @param string $createdOn
     * @return TransactionVoid
     */
    protected function setCreatedOn($createdOn) {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Returns failedOn.
     *
     * 
     *
     * @return string
     */
    public function getFailedOn() {
        return $this->failedOn;
    }

    /**
     * Sets failedOn.
     *
     * @param string $failedOn
     * @return TransactionVoid
     */
    protected function setFailedOn($failedOn) {
        $this->failedOn = $failedOn;

        return $this;
    }

    /**
     * Returns failureReason.
     *
     * @return \Wallee\Sdk\Model\FailureReason
     */
    public function getFailureReason() {
        return $this->failureReason;
    }

    /**
     * Sets failureReason.
     *
     * @param \Wallee\Sdk\Model\FailureReason $failureReason
     * @return TransactionVoid
     */
    public function setFailureReason($failureReason) {
        $this->failureReason = $failureReason;

        return $this;
    }

    /**
     * Returns id.
     *
     * The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int $id
     * @return TransactionVoid
     */
    protected function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns labels.
     *
     * 
     *
     * @return \Wallee\Sdk\Model\Label[]
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * Sets labels.
     *
     * @param \Wallee\Sdk\Model\Label[] $labels
     * @return TransactionVoid
     */
    public function setLabels($labels) {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Returns language.
     *
     * 
     *
     * @return string
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * Sets language.
     *
     * @param string $language
     * @return TransactionVoid
     */
    protected function setLanguage($language) {
        $this->language = $language;

        return $this;
    }

    /**
     * Returns linkedSpaceId.
     *
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getLinkedSpaceId() {
        return $this->linkedSpaceId;
    }

    /**
     * Sets linkedSpaceId.
     *
     * @param \Wallee\Sdk\Model\EntityReference $linkedSpaceId
     * @return TransactionVoid
     */
    public function setLinkedSpaceId($linkedSpaceId) {
        $this->linkedSpaceId = $linkedSpaceId;

        return $this;
    }

    /**
     * Returns mode.
     *
     * 
     *
     * @return string
     */
    public function getMode() {
        return $this->mode;
    }

    /**
     * Sets mode.
     *
     * @param string $mode
     * @return TransactionVoid
     */
    protected function setMode($mode) {
        $allowed_values = array('ONLINE', 'OFFLINE');
        if ((!in_array($mode, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'mode', must be one of 'ONLINE', 'OFFLINE'");
        }
        $this->mode = $mode;

        return $this;
    }

    /**
     * Returns nextUpdateOn.
     *
     * 
     *
     * @return string
     */
    public function getNextUpdateOn() {
        return $this->nextUpdateOn;
    }

    /**
     * Sets nextUpdateOn.
     *
     * @param string $nextUpdateOn
     * @return TransactionVoid
     */
    protected function setNextUpdateOn($nextUpdateOn) {
        $this->nextUpdateOn = $nextUpdateOn;

        return $this;
    }

    /**
     * Returns plannedPurgeDate.
     *
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @return string
     */
    public function getPlannedPurgeDate() {
        return $this->plannedPurgeDate;
    }

    /**
     * Sets plannedPurgeDate.
     *
     * @param string $plannedPurgeDate
     * @return TransactionVoid
     */
    protected function setPlannedPurgeDate($plannedPurgeDate) {
        $this->plannedPurgeDate = $plannedPurgeDate;

        return $this;
    }

    /**
     * Returns processorReference.
     *
     * 
     *
     * @return string
     */
    public function getProcessorReference() {
        return $this->processorReference;
    }

    /**
     * Sets processorReference.
     *
     * @param string $processorReference
     * @return TransactionVoid
     */
    protected function setProcessorReference($processorReference) {
        $this->processorReference = $processorReference;

        return $this;
    }

    /**
     * Returns spaceViewId.
     *
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getSpaceViewId() {
        return $this->spaceViewId;
    }

    /**
     * Sets spaceViewId.
     *
     * @param \Wallee\Sdk\Model\EntityReference $spaceViewId
     * @return TransactionVoid
     */
    public function setSpaceViewId($spaceViewId) {
        $this->spaceViewId = $spaceViewId;

        return $this;
    }

    /**
     * Returns state.
     *
     * 
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Sets state.
     *
     * @param string $state
     * @return TransactionVoid
     */
    protected function setState($state) {
        $allowed_values = array('CREATE', 'PENDING', 'FAILED', 'SUCCESSFUL');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'PENDING', 'FAILED', 'SUCCESSFUL'");
        }
        $this->state = $state;

        return $this;
    }

    /**
     * Returns succeededOn.
     *
     * 
     *
     * @return string
     */
    public function getSucceededOn() {
        return $this->succeededOn;
    }

    /**
     * Sets succeededOn.
     *
     * @param string $succeededOn
     * @return TransactionVoid
     */
    protected function setSucceededOn($succeededOn) {
        $this->succeededOn = $succeededOn;

        return $this;
    }

    /**
     * Returns timeoutOn.
     *
     * 
     *
     * @return string
     */
    public function getTimeoutOn() {
        return $this->timeoutOn;
    }

    /**
     * Sets timeoutOn.
     *
     * @param string $timeoutOn
     * @return TransactionVoid
     */
    protected function setTimeoutOn($timeoutOn) {
        $this->timeoutOn = $timeoutOn;

        return $this;
    }

    /**
     * Returns transaction.
     *
     * @return \Wallee\Sdk\Model\Transaction
     */
    public function getTransaction() {
        return $this->transaction;
    }

    /**
     * Sets transaction.
     *
     * @param \Wallee\Sdk\Model\Transaction $transaction
     * @return TransactionVoid
     */
    public function setTransaction($transaction) {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Returns version.
     *
     * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
     *
     * @return int
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Sets version.
     *
     * @param int $version
     * @return TransactionVoid
     */
    protected function setVersion($version) {
        $this->version = $version;

        return $this;
    }
    
    /**
     * Validates the model's properties and throws a ValidationException if the validation fails.
     *
     * @throws ValidationException
     */
    public function validate() {
        
        if ($this->getCreatedOn() === null) {
        	throw new ValidationException("'createdOn' can't be null", 'createdOn', $this);
        }
        if ($this->getLabels() === null) {
        	throw new ValidationException("'labels' can't be null", 'labels', $this);
        }
        if ($this->getMode() === null) {
        	throw new ValidationException("'mode' can't be null", 'mode', $this);
        }
        $allowed_values = ["ONLINE", "OFFLINE"];
        if (!in_array($this->getMode(), $allowed_values)) {
            throw new ValidationException("invalid value for 'mode', must be one of #{allowed_values}.", 'mode', $this);
        }

        $allowed_values = ["CREATE", "PENDING", "FAILED", "SUCCESSFUL"];
        if (!in_array($this->getState(), $allowed_values)) {
            throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
        }

    }

    /**
     * Returns true if all the properties in the model are valid.
     *
     * @return boolean
     */
    public function isValid() {
    	try {
    		$this->validate();
    		return true;
    	} catch (ValidationException $e) {
    		return false;
    	}
    }

    /**
     * Returns the string presentation of the object.
     *
     * @return string
     */
    public function __toString() {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this));
    }
    
}
