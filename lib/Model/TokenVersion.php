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
 * TokenVersion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class TokenVersion  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'TokenVersion';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'activatedOn' => 'string',
        'createdOn' => 'string',
        'id' => 'int',
        'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
        'name' => 'string',
        'obsoletedOn' => 'string',
        'plannedPurgeDate' => 'string',
        'processorToken' => 'string',
        'state' => 'string',
        'token' => '\Wallee\Sdk\Model\Token',
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
    const STATE_UNINITIALIZED = 'UNINITIALIZED';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_OBSOLETE = 'OBSOLETE';
    
    /**
     * Returns allowable values of state.
     *
     * @return string[]
     */
    public function getStateAllowableValues() {
        return [
            self::STATE_UNINITIALIZED,
            self::STATE_ACTIVE,
            self::STATE_OBSOLETE,
        ];
    }
    
    
    /**
     * 
     *
     * @var string
     */
    private $activatedOn;
    
    /**
     * The created on date indicates the date on which the entity was stored into the database.
     *
     * @var string
     */
    private $createdOn;
    
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
     * 
     *
     * @var string
     */
    private $name;
    
    /**
     * 
     *
     * @var string
     */
    private $obsoletedOn;
    
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
    private $processorToken;
    
    /**
     * 
     *
     * @var string
     */
    private $state;
    
    /**
     * @var \Wallee\Sdk\Model\Token
     */
    private $token;
    
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
        $this->setToken(isset($data['token']) ? $data['token'] : null);
    }


    /**
     * Returns activatedOn.
     *
     * 
     *
     * @return string
     */
    public function getActivatedOn() {
        return $this->activatedOn;
    }

    /**
     * Sets activatedOn.
     *
     * @param string $activatedOn
     * @return TokenVersion
     */
    protected function setActivatedOn($activatedOn) {
        $this->activatedOn = $activatedOn;

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
     * @return TokenVersion
     */
    protected function setCreatedOn($createdOn) {
        $this->createdOn = $createdOn;

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
     * @return TokenVersion
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
     * @return TokenVersion
     */
    public function setLinkedSpaceId($linkedSpaceId) {
        $this->linkedSpaceId = $linkedSpaceId;

        return $this;
    }

    /**
     * Returns name.
     *
     * 
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string $name
     * @return TokenVersion
     */
    protected function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns obsoletedOn.
     *
     * 
     *
     * @return string
     */
    public function getObsoletedOn() {
        return $this->obsoletedOn;
    }

    /**
     * Sets obsoletedOn.
     *
     * @param string $obsoletedOn
     * @return TokenVersion
     */
    protected function setObsoletedOn($obsoletedOn) {
        $this->obsoletedOn = $obsoletedOn;

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
     * @return TokenVersion
     */
    protected function setPlannedPurgeDate($plannedPurgeDate) {
        $this->plannedPurgeDate = $plannedPurgeDate;

        return $this;
    }

    /**
     * Returns processorToken.
     *
     * 
     *
     * @return string
     */
    public function getProcessorToken() {
        return $this->processorToken;
    }

    /**
     * Sets processorToken.
     *
     * @param string $processorToken
     * @return TokenVersion
     */
    protected function setProcessorToken($processorToken) {
        $this->processorToken = $processorToken;

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
     * @return TokenVersion
     */
    protected function setState($state) {
        $allowed_values = array('UNINITIALIZED', 'ACTIVE', 'OBSOLETE');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'UNINITIALIZED', 'ACTIVE', 'OBSOLETE'");
        }
        $this->state = $state;

        return $this;
    }

    /**
     * Returns token.
     *
     * @return \Wallee\Sdk\Model\Token
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * Sets token.
     *
     * @param \Wallee\Sdk\Model\Token $token
     * @return TokenVersion
     */
    public function setToken($token) {
        $this->token = $token;

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
     * @return TokenVersion
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
        
        if ($this->getState() === null) {
        	throw new ValidationException("'state' can't be null", 'state', $this);
        }
        $allowed_values = ["UNINITIALIZED", "ACTIVE", "OBSOLETE"];
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
