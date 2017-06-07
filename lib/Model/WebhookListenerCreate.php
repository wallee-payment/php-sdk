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
 * WebhookListenerCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class WebhookListenerCreate extends WebhookListenerUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'WebhookListener.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
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
		return array(
			self::STATE_CREATE,
			self::STATE_ACTIVE,
			self::STATE_INACTIVE,
			self::STATE_DELETING,
			self::STATE_DELETED,
		);
	}
	


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['entity']) && $data['entity'] != null) {
			$this->setEntity($data['entity']);
		}
		if (isset($data['entityStates']) && $data['entityStates'] != null) {
			$this->setEntityStates($data['entityStates']);
		}
		if (isset($data['identity']) && $data['identity'] != null) {
			$this->setIdentity($data['identity']);
		}
		if (isset($data['notifyEveryChange']) && $data['notifyEveryChange'] != null) {
			$this->setNotifyEveryChange($data['notifyEveryChange']);
		}
		if (isset($data['state']) && $data['state'] != null) {
			$this->setState($data['state']);
		}
		if (isset($data['url']) && $data['url'] != null) {
			$this->setUrl($data['url']);
		}
	}


	/**
	 * Returns entity.
	 *
	 * @return int
	 */
	public function getEntity() {
		return parent::getEntity();
	}

	/**
	 * Sets entity.
	 *
	 * @param int $entity
	 * @return WebhookListenerCreate
	 */
	public function setEntity($entity) {
		return parent::setEntity($entity);
	}

	/**
	 * Returns entityStates.
	 *
	 * The target state identifies the state into which entities need to move into to trigger the webhook listener.
	 *
	 * @return string[]
	 */
	public function getEntityStates() {
		return parent::getEntityStates();
	}

	/**
	 * Sets entityStates.
	 *
	 * @param string[] $entityStates
	 * @return WebhookListenerCreate
	 */
	public function setEntityStates($entityStates) {
		return parent::setEntityStates($entityStates);
	}

	/**
	 * Returns identity.
	 *
	 * @return \Wallee\Sdk\Model\WebhookIdentity
	 */
	public function getIdentity() {
		return parent::getIdentity();
	}

	/**
	 * Sets identity.
	 *
	 * @param \Wallee\Sdk\Model\WebhookIdentity $identity
	 * @return WebhookListenerCreate
	 */
	public function setIdentity($identity) {
		return parent::setIdentity($identity);
	}

	/**
	 * Returns notifyEveryChange.
	 *
	 * Defines whether the webhook listener is to be informed about every change made to the entity in contrast to state transitions only.
	 *
	 * @return bool
	 */
	public function getNotifyEveryChange() {
		return parent::getNotifyEveryChange();
	}

	/**
	 * Sets notifyEveryChange.
	 *
	 * @param bool $notifyEveryChange
	 * @return WebhookListenerCreate
	 */
	public function setNotifyEveryChange($notifyEveryChange) {
		return parent::setNotifyEveryChange($notifyEveryChange);
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getState() {
		return parent::getState();
	}

	/**
	 * Sets state.
	 *
	 * @param string $state
	 * @return WebhookListenerCreate
	 */
	public function setState($state) {
		$allowed_values = array('CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED');
		if ((!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED'");
		}
		return parent::setState($state);
	}

	/**
	 * Returns url.
	 *
	 * @return \Wallee\Sdk\Model\WebhookUrl
	 */
	public function getUrl() {
		return parent::getUrl();
	}

	/**
	 * Sets url.
	 *
	 * @param \Wallee\Sdk\Model\WebhookUrl $url
	 * @return WebhookListenerCreate
	 */
	public function setUrl($url) {
		return parent::setUrl($url);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getEntityStates() === null) {
			throw new ValidationException("'entityStates' can't be null", 'entityStates', $this);
		}
		if ($this->getState() === null) {
			throw new ValidationException("'state' can't be null", 'state', $this);
		}
		$allowed_values = array("CREATE", "ACTIVE", "INACTIVE", "DELETING", "DELETED");
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

