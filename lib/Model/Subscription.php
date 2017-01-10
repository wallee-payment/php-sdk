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
 * Subscription model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class Subscription  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Subscription';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'createdOn' => 'string',
		'description' => 'string',
		'id' => 'int',
		'initializedOn' => 'string',
		'language' => 'string',
		'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
		'plannedPurgeDate' => 'string',
		'plannedTerminationDate' => 'string',
		'reference' => 'string',
		'state' => 'string',
		'subscriber' => '\Wallee\Sdk\Model\Subscriber',
		'terminatedOn' => 'string',
		'terminatingOn' => 'string',
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
	 * Values of state.
	 */
	const STATE_PENDING = 'PENDING';
	const STATE_INITIALIZING = 'INITIALIZING';
	const STATE_FAILED = 'FAILED';
	const STATE_ACTIVE = 'ACTIVE';
	const STATE_SUSPENDED = 'SUSPENDED';
	const STATE_TERMINATING = 'TERMINATING';
	const STATE_TERMINATED = 'TERMINATED';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_PENDING,
			self::STATE_INITIALIZING,
			self::STATE_FAILED,
			self::STATE_ACTIVE,
			self::STATE_SUSPENDED,
			self::STATE_TERMINATING,
			self::STATE_TERMINATED,
		];
	}
	

	/**
	 * 
	 *
	 * @var string
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $description;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var string
	 */
	private $initializedOn;

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
	private $plannedTerminationDate;

	/**
	 * 
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * @var \Wallee\Sdk\Model\Subscriber
	 */
	private $subscriber;

	/**
	 * 
	 *
	 * @var string
	 */
	private $terminatedOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $terminatingOn;

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
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['subscriber']) && $data['subscriber'] != null) {
			$this->setSubscriber($data['subscriber']);
		}
		if (isset($data['token']) && $data['token'] != null) {
			$this->setToken($data['token']);
		}
	}


	/**
	 * Returns createdOn.
	 *
	 * 
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
	 * @return Subscription
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param string $description
	 * @return Subscription
	 */
	protected function setDescription($description) {
		$this->description = $description;

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
	 * @return Subscription
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns initializedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getInitializedOn() {
		return $this->initializedOn;
	}

	/**
	 * Sets initializedOn.
	 *
	 * @param string $initializedOn
	 * @return Subscription
	 */
	protected function setInitializedOn($initializedOn) {
		$this->initializedOn = $initializedOn;

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
	 * @return Subscription
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
	 * @return Subscription
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
	 * @return Subscription
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns plannedTerminationDate.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPlannedTerminationDate() {
		return $this->plannedTerminationDate;
	}

	/**
	 * Sets plannedTerminationDate.
	 *
	 * @param string $plannedTerminationDate
	 * @return Subscription
	 */
	protected function setPlannedTerminationDate($plannedTerminationDate) {
		$this->plannedTerminationDate = $plannedTerminationDate;

		return $this;
	}

	/**
	 * Returns reference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getReference() {
		return $this->reference;
	}

	/**
	 * Sets reference.
	 *
	 * @param string $reference
	 * @return Subscription
	 */
	protected function setReference($reference) {
		$this->reference = $reference;

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
	 * @return Subscription
	 */
	protected function setState($state) {
		$allowed_values = array('PENDING', 'INITIALIZING', 'FAILED', 'ACTIVE', 'SUSPENDED', 'TERMINATING', 'TERMINATED');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'PENDING', 'INITIALIZING', 'FAILED', 'ACTIVE', 'SUSPENDED', 'TERMINATING', 'TERMINATED'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subscriber.
	 *
	 * @return \Wallee\Sdk\Model\Subscriber
	 */
	public function getSubscriber() {
		return $this->subscriber;
	}

	/**
	 * Sets subscriber.
	 *
	 * @param \Wallee\Sdk\Model\Subscriber $subscriber
	 * @return Subscription
	 */
	public function setSubscriber($subscriber) {
		$this->subscriber = $subscriber;

		return $this;
	}

	/**
	 * Returns terminatedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTerminatedOn() {
		return $this->terminatedOn;
	}

	/**
	 * Sets terminatedOn.
	 *
	 * @param string $terminatedOn
	 * @return Subscription
	 */
	protected function setTerminatedOn($terminatedOn) {
		$this->terminatedOn = $terminatedOn;

		return $this;
	}

	/**
	 * Returns terminatingOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTerminatingOn() {
		return $this->terminatingOn;
	}

	/**
	 * Sets terminatingOn.
	 *
	 * @param string $terminatingOn
	 * @return Subscription
	 */
	protected function setTerminatingOn($terminatingOn) {
		$this->terminatingOn = $terminatingOn;

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
	 * @return Subscription
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
	 * @return Subscription
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

		if ($this->getReference() === null) {
			throw new ValidationException("'reference' can't be null", 'reference', $this);
		}
		$allowed_values = ["PENDING", "INITIALIZING", "FAILED", "ACTIVE", "SUSPENDED", "TERMINATING", "TERMINATED"];
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

