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
 * Scope model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class Scope  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'Scope';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'domainName' => 'string',
        'emailSenderAddress' => 'string',
        'emailSenderName' => 'string',
        'features' => '\Wallee\Sdk\Model\Feature[]',
        'id' => 'int',
        'name' => 'string',
        'plannedPurgeDate' => 'string',
        'port' => 'int',
        'sslActive' => 'bool',
        'state' => 'string',
        'themes' => 'string[]',
        'url' => 'string',
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
     * The domain name to which this scope is mapped to.
     *
     * @var string
     */
    private $domainName;
    
    /**
     * 
     *
     * @var string
     */
    private $emailSenderAddress;
    
    /**
     * 
     *
     * @var string
     */
    private $emailSenderName;
    
    /**
     * 
     *
     * @var \Wallee\Sdk\Model\Feature[]
     */
    private $features;
    
    /**
     * The ID is the primary key of the entity. The ID identifies the entity uniquely.
     *
     * @var int
     */
    private $id;
    
    /**
     * The name of the scope is shown to the user where the user should select a scope.
     *
     * @var string
     */
    private $name;
    
    /**
     * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
     *
     * @var string
     */
    private $plannedPurgeDate;
    
    /**
     * The port number to which this scope is mapped to.
     *
     * @var int
     */
    private $port;
    
    /**
     * Define whether the scope supports SSL.
     *
     * @var bool
     */
    private $sslActive;
    
    /**
     * 
     *
     * @var string
     */
    private $state;
    
    /**
     * The themes determines how the application layout, look and feel is. By providing multiple themes you can fallback to other themes.
     *
     * @var string[]
     */
    private $themes;
    
    /**
     * 
     *
     * @var string
     */
    private $url;
    
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
        $this->setFeatures(isset($data['features']) ? $data['features'] : null);
        $this->setThemes(isset($data['themes']) ? $data['themes'] : null);
    }


    /**
     * Returns domainName.
     *
     * The domain name to which this scope is mapped to.
     *
     * @return string
     */
    public function getDomainName() {
        return $this->domainName;
    }

    /**
     * Sets domainName.
     *
     * @param string $domainName
     * @return Scope
     */
    protected function setDomainName($domainName) {
        $this->domainName = $domainName;

        return $this;
    }

    /**
     * Returns emailSenderAddress.
     *
     * 
     *
     * @return string
     */
    public function getEmailSenderAddress() {
        return $this->emailSenderAddress;
    }

    /**
     * Sets emailSenderAddress.
     *
     * @param string $emailSenderAddress
     * @return Scope
     */
    protected function setEmailSenderAddress($emailSenderAddress) {
        $this->emailSenderAddress = $emailSenderAddress;

        return $this;
    }

    /**
     * Returns emailSenderName.
     *
     * 
     *
     * @return string
     */
    public function getEmailSenderName() {
        return $this->emailSenderName;
    }

    /**
     * Sets emailSenderName.
     *
     * @param string $emailSenderName
     * @return Scope
     */
    protected function setEmailSenderName($emailSenderName) {
        $this->emailSenderName = $emailSenderName;

        return $this;
    }

    /**
     * Returns features.
     *
     * 
     *
     * @return \Wallee\Sdk\Model\Feature[]
     */
    public function getFeatures() {
        return $this->features;
    }

    /**
     * Sets features.
     *
     * @param \Wallee\Sdk\Model\Feature[] $features
     * @return Scope
     */
    public function setFeatures($features) {
        $this->features = $features;

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
     * @return Scope
     */
    protected function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns name.
     *
     * The name of the scope is shown to the user where the user should select a scope.
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
     * @return Scope
     */
    protected function setName($name) {
        $this->name = $name;

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
     * @return Scope
     */
    protected function setPlannedPurgeDate($plannedPurgeDate) {
        $this->plannedPurgeDate = $plannedPurgeDate;

        return $this;
    }

    /**
     * Returns port.
     *
     * The port number to which this scope is mapped to.
     *
     * @return int
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * Sets port.
     *
     * @param int $port
     * @return Scope
     */
    protected function setPort($port) {
        $this->port = $port;

        return $this;
    }

    /**
     * Returns sslActive.
     *
     * Define whether the scope supports SSL.
     *
     * @return bool
     */
    public function getSslActive() {
        return $this->sslActive;
    }

    /**
     * Sets sslActive.
     *
     * @param bool $sslActive
     * @return Scope
     */
    protected function setSslActive($sslActive) {
        $this->sslActive = $sslActive;

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
     * @return Scope
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
     * Returns themes.
     *
     * The themes determines how the application layout, look and feel is. By providing multiple themes you can fallback to other themes.
     *
     * @return string[]
     */
    public function getThemes() {
        return $this->themes;
    }

    /**
     * Sets themes.
     *
     * @param string[] $themes
     * @return Scope
     */
    public function setThemes($themes) {
        $this->themes = $themes;

        return $this;
    }

    /**
     * Returns url.
     *
     * 
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Sets url.
     *
     * @param string $url
     * @return Scope
     */
    protected function setUrl($url) {
        $this->url = $url;

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
     * @return Scope
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
        
        if ($this->getDomainName() === null) {
        	throw new ValidationException("'domainName' can't be null", 'domainName', $this);
        }
        if ($this->getEmailSenderAddress() === null) {
        	throw new ValidationException("'emailSenderAddress' can't be null", 'emailSenderAddress', $this);
        }
        if ($this->getName() === null) {
        	throw new ValidationException("'name' can't be null", 'name', $this);
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
