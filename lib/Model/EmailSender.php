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
 * EmailSender model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class EmailSender  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'EmailSender';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'defaultSender' => 'bool',
        'id' => 'int',
        'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
        'plannedPurgeDate' => 'string',
        'senderAddress' => 'string',
        'senderName' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
        'state' => 'string',
        'type' => '\Wallee\Sdk\Model\EntityReference',
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
     * Values of state.
     */ 
    const STATE_CREATE = 'CREATE';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_INACTIVE = 'INACTIVE';
    const STATE_DELETING = 'DELETING';
    const STATE_DELETED = 'DELETED';
    
    /**
     * Returns allowable values of state.
     *
     * @return string[]
     */
    public function getStateAllowableValues() {
        return [
            self::STATE_CREATE,
            self::STATE_ACTIVE,
            self::STATE_INACTIVE,
            self::STATE_DELETING,
            self::STATE_DELETED,
        ];
    }
    
    
    /**
     * The default e-mail sender is used whenever not different sender is specified in the space.
     *
     * @var bool
     */
    private $defaultSender;
    
    /**
     * The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @var int
     */
    private $id;
    
    /**
     * @var \Wallee\Sdk\Model\EntityReference
     */
    private $linkedSpaceId;
    
    /**
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @var string
     */
    private $plannedPurgeDate;
    
    /**
     * The sender address is the e-mail address from which you want to send the e-mail to the customer.
     *
     * @var string
     */
    private $senderAddress;
    
    /**
     * @var \Wallee\Sdk\Model\DatabaseTranslatedString
     */
    private $senderName;
    
    /**
     * 
     *
     * @var string
     */
    private $state;
    
    /**
     * @var \Wallee\Sdk\Model\EntityReference
     */
    private $type;
    
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
        $this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
        $this->setSenderName(isset($data['senderName']) ? $data['senderName'] : null);
        $this->setType(isset($data['type']) ? $data['type'] : null);
    }


    /**
     * Returns defaultSender.
     *
     * The default e-mail sender is used whenever not different sender is specified in the space.
     *
     * @return bool
     */
    public function getDefaultSender() {
        return $this->defaultSender;
    }

    /**
     * Sets defaultSender.
     *
     * @param bool $defaultSender
     * @return EmailSender
     */
    protected function setDefaultSender($defaultSender) {
        $this->defaultSender = $defaultSender;

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
     * @return EmailSender
     */
    protected function setId($id) {
        $this->id = $id;

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
     * @return EmailSender
     */
    public function setLinkedSpaceId($linkedSpaceId) {
        $this->linkedSpaceId = $linkedSpaceId;

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
     * @return EmailSender
     */
    protected function setPlannedPurgeDate($plannedPurgeDate) {
        $this->plannedPurgeDate = $plannedPurgeDate;

        return $this;
    }

    /**
     * Returns senderAddress.
     *
     * The sender address is the e-mail address from which you want to send the e-mail to the customer.
     *
     * @return string
     */
    public function getSenderAddress() {
        return $this->senderAddress;
    }

    /**
     * Sets senderAddress.
     *
     * @param string $senderAddress
     * @return EmailSender
     */
    protected function setSenderAddress($senderAddress) {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    /**
     * Returns senderName.
     *
     * @return \Wallee\Sdk\Model\DatabaseTranslatedString
     */
    public function getSenderName() {
        return $this->senderName;
    }

    /**
     * Sets senderName.
     *
     * @param \Wallee\Sdk\Model\DatabaseTranslatedString $senderName
     * @return EmailSender
     */
    public function setSenderName($senderName) {
        $this->senderName = $senderName;

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
     * @return EmailSender
     */
    protected function setState($state) {
        $allowed_values = array('CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED'");
        }
        $this->state = $state;

        return $this;
    }

    /**
     * Returns type.
     *
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Sets type.
     *
     * @param \Wallee\Sdk\Model\EntityReference $type
     * @return EmailSender
     */
    public function setType($type) {
        $this->type = $type;

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
     * @return EmailSender
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
        
        if ($this->getSenderAddress() === null) {
        	throw new ValidationException("'senderAddress' can't be null", 'senderAddress', $this);
        }
        if ($this->getState() === null) {
        	throw new ValidationException("'state' can't be null", 'state', $this);
        }
        $allowed_values = ["CREATE", "ACTIVE", "INACTIVE", "DELETING", "DELETED"];
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
