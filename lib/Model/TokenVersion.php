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
		'billingAddress' => '\Wallee\Sdk\Model\Address',
		'createdOn' => 'string',
		'environment' => 'string',
		'id' => 'int',
		'labels' => '\Wallee\Sdk\Model\Label[]',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'obsoletedOn' => 'string',
		'paymentConnectorConfiguration' => '\Wallee\Sdk\Model\PaymentConnectorConfiguration',
		'plannedPurgeDate' => 'string',
		'processorToken' => 'string',
		'shippingAddress' => '\Wallee\Sdk\Model\Address',
		'state' => 'string',
		'token' => '\Wallee\Sdk\Model\Token',
		'version' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	
	/**
	 * Values of environment.
	 */
	const ENVIRONMENT_PRODUCTION = 'PRODUCTION';
	const ENVIRONMENT_TEST = 'TEST';
	
	/**
	 * Returns allowable values of environment.
	 *
	 * @return string[]
	 */
	public function getEnvironmentAllowableValues() {
		return [
			self::ENVIRONMENT_PRODUCTION,
			self::ENVIRONMENT_TEST,
		];
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
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $billingAddress;

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
	private $environment;

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
	 * @var int
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
	 * @var \Wallee\Sdk\Model\PaymentConnectorConfiguration
	 */
	private $paymentConnectorConfiguration;

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
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $shippingAddress;

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
		if (isset($data['billingAddress']) && $data['billingAddress'] != null) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['labels']) && $data['labels'] != null) {
			$this->setLabels($data['labels']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['paymentConnectorConfiguration']) && $data['paymentConnectorConfiguration'] != null) {
			$this->setPaymentConnectorConfiguration($data['paymentConnectorConfiguration']);
		}
		if (isset($data['shippingAddress']) && $data['shippingAddress'] != null) {
			$this->setShippingAddress($data['shippingAddress']);
		}
		if (isset($data['token']) && $data['token'] != null) {
			$this->setToken($data['token']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
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
	 * Returns billingAddress.
	 *
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $billingAddress
	 * @return TokenVersion
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

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
	 * Returns environment.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getEnvironment() {
		return $this->environment;
	}

	/**
	 * Sets environment.
	 *
	 * @param string $environment
	 * @return TokenVersion
	 */
	protected function setEnvironment($environment) {
		$allowed_values = array('PRODUCTION', 'TEST');
		if (!is_null($environment) && (!in_array($environment, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'environment', must be one of 'PRODUCTION', 'TEST'");
		}
		$this->environment = $environment;

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
	public function setId($id) {
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
	 * @return TokenVersion
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
	 * @return TokenVersion
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * @return int
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param int $linkedSpaceId
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
	 * Returns paymentConnectorConfiguration.
	 *
	 * @return \Wallee\Sdk\Model\PaymentConnectorConfiguration
	 */
	public function getPaymentConnectorConfiguration() {
		return $this->paymentConnectorConfiguration;
	}

	/**
	 * Sets paymentConnectorConfiguration.
	 *
	 * @param \Wallee\Sdk\Model\PaymentConnectorConfiguration $paymentConnectorConfiguration
	 * @return TokenVersion
	 */
	public function setPaymentConnectorConfiguration($paymentConnectorConfiguration) {
		$this->paymentConnectorConfiguration = $paymentConnectorConfiguration;

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
	 * Returns shippingAddress.
	 *
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getShippingAddress() {
		return $this->shippingAddress;
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $shippingAddress
	 * @return TokenVersion
	 */
	public function setShippingAddress($shippingAddress) {
		$this->shippingAddress = $shippingAddress;

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
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		$allowed_values = ["PRODUCTION", "TEST"];
		if (!in_array($this->getEnvironment(), $allowed_values)) {
			throw new ValidationException("invalid value for 'environment', must be one of #{allowed_values}.", 'environment', $this);
		}

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

