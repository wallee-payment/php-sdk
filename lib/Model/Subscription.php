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

use Wallee\Sdk\ValidationException;

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
		'createdOn' => '\DateTime',
		'description' => 'string',
		'id' => 'int',
		'initializedOn' => '\DateTime',
		'language' => 'string',
		'linkedSpaceId' => 'int',
		'plannedPurgeDate' => '\DateTime',
		'plannedTerminationDate' => '\DateTime',
		'reference' => 'string',
		'state' => '\Wallee\Sdk\Model\SubscriptionState',
		'subscriber' => '\Wallee\Sdk\Model\Subscriber',
		'terminatedOn' => '\DateTime',
		'terminatingOn' => '\DateTime',
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
	 * 
	 *
	 * @var \DateTime
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
	 * @var \DateTime
	 */
	private $initializedOn;

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
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \DateTime
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
	 * @var \Wallee\Sdk\Model\SubscriptionState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Subscriber
	 */
	private $subscriber;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $terminatedOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $terminatingOn;

	/**
	 * 
	 *
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
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['subscriber'])) {
			$this->setSubscriber($data['subscriber']);
		}
		if (isset($data['token'])) {
			$this->setToken($data['token']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns createdOn.
	 *
	 * 
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
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns initializedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getInitializedOn() {
		return $this->initializedOn;
	}

	/**
	 * Sets initializedOn.
	 *
	 * @param \DateTime $initializedOn
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
	 * @return Subscription
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

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
	 * @return \DateTime
	 */
	public function getPlannedTerminationDate() {
		return $this->plannedTerminationDate;
	}

	/**
	 * Sets plannedTerminationDate.
	 *
	 * @param \DateTime $plannedTerminationDate
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
	 * @return \Wallee\Sdk\Model\SubscriptionState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionState $state
	 * @return Subscription
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subscriber.
	 *
	 * 
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
	 * @return \DateTime
	 */
	public function getTerminatedOn() {
		return $this->terminatedOn;
	}

	/**
	 * Sets terminatedOn.
	 *
	 * @param \DateTime $terminatedOn
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
	 * @return \DateTime
	 */
	public function getTerminatingOn() {
		return $this->terminatingOn;
	}

	/**
	 * Sets terminatingOn.
	 *
	 * @param \DateTime $terminatingOn
	 * @return Subscription
	 */
	protected function setTerminatingOn($terminatingOn) {
		$this->terminatingOn = $terminatingOn;

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

