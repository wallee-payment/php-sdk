<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 * wallee SDK: 1.0.0
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

use Wallee\Sdk\ValidationException;

/**
 * TokenVersion model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
		'activatedOn' => '\DateTime',
		'billingAddress' => '\Wallee\Sdk\Model\Address',
		'createdOn' => '\DateTime',
		'environment' => '\Wallee\Sdk\Model\ChargeAttemptEnvironment',
		'expiresOn' => '\DateTime',
		'id' => 'int',
		'labels' => '\Wallee\Sdk\Model\Label[]',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'obsoletedOn' => '\DateTime',
		'paymentConnectorConfiguration' => '\Wallee\Sdk\Model\PaymentConnectorConfiguration',
		'plannedPurgeDate' => '\DateTime',
		'processorToken' => 'string',
		'shippingAddress' => '\Wallee\Sdk\Model\Address',
		'state' => '\Wallee\Sdk\Model\TokenVersionState',
		'token' => '\Wallee\Sdk\Model\Token',
		'type' => '\Wallee\Sdk\Model\TokenVersionType',
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
	 * 
	 *
	 * @var \DateTime
	 */
	private $activatedOn;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $billingAddress;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\ChargeAttemptEnvironment
	 */
	private $environment;

	/**
	 * The expires on date indicates when token version expires. Once this date is reached the token version is marked as obsolete.
	 *
	 * @var \DateTime
	 */
	private $expiresOn;

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
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
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
	 * @var \DateTime
	 */
	private $obsoletedOn;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\PaymentConnectorConfiguration
	 */
	private $paymentConnectorConfiguration;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
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
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $shippingAddress;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\TokenVersionState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Token
	 */
	private $token;

	/**
	 * The token version type determines what kind of token it is and by which payment connector the token can be processed by.
	 *
	 * @var \Wallee\Sdk\Model\TokenVersionType
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
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['environment'])) {
			$this->setEnvironment($data['environment']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['labels'])) {
			$this->setLabels($data['labels']);
		}
		if (isset($data['paymentConnectorConfiguration'])) {
			$this->setPaymentConnectorConfiguration($data['paymentConnectorConfiguration']);
		}
		if (isset($data['shippingAddress'])) {
			$this->setShippingAddress($data['shippingAddress']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['token'])) {
			$this->setToken($data['token']);
		}
		if (isset($data['type'])) {
			$this->setType($data['type']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns activatedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getActivatedOn() {
		return $this->activatedOn;
	}

	/**
	 * Sets activatedOn.
	 *
	 * @param \DateTime $activatedOn
	 * @return TokenVersion
	 */
	protected function setActivatedOn($activatedOn) {
		$this->activatedOn = $activatedOn;

		return $this;
	}

	/**
	 * Returns billingAddress.
	 *
	 * 
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
	 * @return \DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param \DateTime $createdOn
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
	 * @return \Wallee\Sdk\Model\ChargeAttemptEnvironment
	 */
	public function getEnvironment() {
		return $this->environment;
	}

	/**
	 * Sets environment.
	 *
	 * @param \Wallee\Sdk\Model\ChargeAttemptEnvironment $environment
	 * @return TokenVersion
	 */
	public function setEnvironment($environment) {
		$this->environment = $environment;

		return $this;
	}

	/**
	 * Returns expiresOn.
	 *
	 * The expires on date indicates when token version expires. Once this date is reached the token version is marked as obsolete.
	 *
	 * @return \DateTime
	 */
	public function getExpiresOn() {
		return $this->expiresOn;
	}

	/**
	 * Sets expiresOn.
	 *
	 * @param \DateTime $expiresOn
	 * @return TokenVersion
	 */
	protected function setExpiresOn($expiresOn) {
		$this->expiresOn = $expiresOn;

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
	 * The linked space id holds the ID of the space to which the entity belongs to.
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
	protected function setLinkedSpaceId($linkedSpaceId) {
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
	 * @return \DateTime
	 */
	public function getObsoletedOn() {
		return $this->obsoletedOn;
	}

	/**
	 * Sets obsoletedOn.
	 *
	 * @param \DateTime $obsoletedOn
	 * @return TokenVersion
	 */
	protected function setObsoletedOn($obsoletedOn) {
		$this->obsoletedOn = $obsoletedOn;

		return $this;
	}

	/**
	 * Returns paymentConnectorConfiguration.
	 *
	 * 
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
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
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
	 * 
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
	 * @return \Wallee\Sdk\Model\TokenVersionState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\TokenVersionState $state
	 * @return TokenVersion
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns token.
	 *
	 * 
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
	 * Returns type.
	 *
	 * The token version type determines what kind of token it is and by which payment connector the token can be processed by.
	 *
	 * @return \Wallee\Sdk\Model\TokenVersionType
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param \Wallee\Sdk\Model\TokenVersionType $type
	 * @return TokenVersion
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

