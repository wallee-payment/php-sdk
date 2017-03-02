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
 * WebhookListener model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class WebhookListener  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'WebhookListener';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'entity' => 'int',
		'entityStates' => 'string[]',
		'id' => 'int',
		'identity' => '\Wallee\Sdk\Model\WebhookIdentity',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'notifyEveryChange' => 'bool',
		'plannedPurgeDate' => 'string',
		'state' => 'string',
		'url' => '\Wallee\Sdk\Model\WebhookUrl',
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
	 * @var int
	 */
	private $entity;

	/**
	 * The target state identifies the state into which entities need to move into to trigger the webhook listener.
	 *
	 * @var string[]
	 */
	private $entityStates;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * @var \Wallee\Sdk\Model\WebhookIdentity
	 */
	private $identity;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The webhook listener name is used internally to identify the webhook listener in administrative interfaces.For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Defines whether the webhook listener is to be informed about every change made to the entity in contrast to state transitions only.
	 *
	 * @var bool
	 */
	private $notifyEveryChange;

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
	private $state;

	/**
	 * @var \Wallee\Sdk\Model\WebhookUrl
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
		if (isset($data['entity']) && $data['entity'] != null) {
			$this->setEntity($data['entity']);
		}
		if (isset($data['entityStates']) && $data['entityStates'] != null) {
			$this->setEntityStates($data['entityStates']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['identity']) && $data['identity'] != null) {
			$this->setIdentity($data['identity']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['url']) && $data['url'] != null) {
			$this->setUrl($data['url']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns entity.
	 *
	 * @return int
	 */
	public function getEntity() {
		return $this->entity;
	}

	/**
	 * Sets entity.
	 *
	 * @param int $entity
	 * @return WebhookListener
	 */
	public function setEntity($entity) {
		$this->entity = $entity;

		return $this;
	}

	/**
	 * Returns entityStates.
	 *
	 * The target state identifies the state into which entities need to move into to trigger the webhook listener.
	 *
	 * @return string[]
	 */
	public function getEntityStates() {
		return $this->entityStates;
	}

	/**
	 * Sets entityStates.
	 *
	 * @param string[] $entityStates
	 * @return WebhookListener
	 */
	public function setEntityStates($entityStates) {
		$this->entityStates = $entityStates;

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
	 * @return WebhookListener
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns identity.
	 *
	 * @return \Wallee\Sdk\Model\WebhookIdentity
	 */
	public function getIdentity() {
		return $this->identity;
	}

	/**
	 * Sets identity.
	 *
	 * @param \Wallee\Sdk\Model\WebhookIdentity $identity
	 * @return WebhookListener
	 */
	public function setIdentity($identity) {
		$this->identity = $identity;

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
	 * @return WebhookListener
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The webhook listener name is used internally to identify the webhook listener in administrative interfaces.For example it is used within search fields and hence it should be distinct and descriptive.
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
	 * @return WebhookListener
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns notifyEveryChange.
	 *
	 * Defines whether the webhook listener is to be informed about every change made to the entity in contrast to state transitions only.
	 *
	 * @return bool
	 */
	public function getNotifyEveryChange() {
		return $this->notifyEveryChange;
	}

	/**
	 * Sets notifyEveryChange.
	 *
	 * @param bool $notifyEveryChange
	 * @return WebhookListener
	 */
	protected function setNotifyEveryChange($notifyEveryChange) {
		$this->notifyEveryChange = $notifyEveryChange;

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
	 * @return WebhookListener
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

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
	 * @return WebhookListener
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
	 * Returns url.
	 *
	 * @return \Wallee\Sdk\Model\WebhookUrl
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets url.
	 *
	 * @param \Wallee\Sdk\Model\WebhookUrl $url
	 * @return WebhookListener
	 */
	public function setUrl($url) {
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
	 * @return WebhookListener
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

		if ($this->getEntityStates() === null) {
			throw new ValidationException("'entityStates' can't be null", 'entityStates', $this);
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

