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
		'linkedSpaceId' => 'int',
		'plannedPurgeDate' => '\DateTime',
		'senderAddress' => 'string',
		'senderName' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'state' => '\Wallee\Sdk\Model\CreationEntityState',
		'type' => 'int',
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
	 * The default email sender is used whenever not different sender is specified in the space.
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
	 * The sender address is the email address from which you want to send the email to the customer.
	 *
	 * @var string
	 */
	private $senderAddress;

	/**
	 * The sender name is shown in the email. Choose an appropriate name as it will be displayed to your customer.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $senderName;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\CreationEntityState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var int
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
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['senderName']) && $data['senderName'] != null) {
			$this->setSenderName($data['senderName']);
		}
		if (isset($data['state']) && $data['state'] != null) {
			$this->setState($data['state']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns defaultSender.
	 *
	 * The default email sender is used whenever not different sender is specified in the space.
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
	public function setId($id) {
		$this->id = $id;

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
	 * @return EmailSender
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
	 * @return EmailSender
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns senderAddress.
	 *
	 * The sender address is the email address from which you want to send the email to the customer.
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
	 * The sender name is shown in the email. Choose an appropriate name as it will be displayed to your customer.
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
	 * @return \Wallee\Sdk\Model\CreationEntityState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\CreationEntityState $state
	 * @return EmailSender
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param int $type
	 * @return EmailSender
	 */
	protected function setType($type) {
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

