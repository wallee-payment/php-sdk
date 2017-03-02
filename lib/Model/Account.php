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
 * Account model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class Account  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Account';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'active' => 'bool',
		'activeOrRestrictedActive' => 'bool',
		'id' => 'int',
		'name' => 'string',
		'parentAccount' => '\Wallee\Sdk\Model\Account',
		'plannedPurgeDate' => 'string',
		'restrictedActive' => 'bool',
		'state' => 'string',
		'subaccountLimit' => 'int',
		'type' => 'string',
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
	const STATE_RESTRICTED_ACTIVE = 'RESTRICTED_ACTIVE';
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
			self::STATE_RESTRICTED_ACTIVE,
			self::STATE_ACTIVE,
			self::STATE_INACTIVE,
			self::STATE_DELETING,
			self::STATE_DELETED,
		];
	}
	
	/**
	 * Values of type.
	 */
	const TYPE_MASTER = 'MASTER';
	const TYPE_REGULAR = 'REGULAR';
	const TYPE_SUBACCOUNT = 'SUBACCOUNT';
	
	/**
	 * Returns allowable values of type.
	 *
	 * @return string[]
	 */
	public function getTypeAllowableValues() {
		return [
			self::TYPE_MASTER,
			self::TYPE_REGULAR,
			self::TYPE_SUBACCOUNT,
		];
	}
	

	/**
	 * Active means that this account and all accounts in the hierarchy are active.
	 *
	 * @var bool
	 */
	private $active;

	/**
	 * This property is true when all accounts in the hierarchy are active or restricted active.
	 *
	 * @var bool
	 */
	private $activeOrRestrictedActive;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The name of the account identifies the account within the administrative interface.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @var \Wallee\Sdk\Model\Account
	 */
	private $parentAccount;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var string
	 */
	private $plannedPurgeDate;

	/**
	 * Restricted active means that at least one account in the hierarchy is only restricted active, but all are either restricted active or active.
	 *
	 * @var bool
	 */
	private $restrictedActive;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * This property restricts the number of subaccounts which can be created within this account.
	 *
	 * @var int
	 */
	private $subaccountLimit;

	/**
	 * 
	 *
	 * @var string
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
		if (isset($data['parentAccount']) && $data['parentAccount'] != null) {
			$this->setParentAccount($data['parentAccount']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns active.
	 *
	 * Active means that this account and all accounts in the hierarchy are active.
	 *
	 * @return bool
	 */
	public function getActive() {
		return $this->active;
	}

	/**
	 * Sets active.
	 *
	 * @param bool $active
	 * @return Account
	 */
	protected function setActive($active) {
		$this->active = $active;

		return $this;
	}

	/**
	 * Returns activeOrRestrictedActive.
	 *
	 * This property is true when all accounts in the hierarchy are active or restricted active.
	 *
	 * @return bool
	 */
	public function getActiveOrRestrictedActive() {
		return $this->activeOrRestrictedActive;
	}

	/**
	 * Sets activeOrRestrictedActive.
	 *
	 * @param bool $activeOrRestrictedActive
	 * @return Account
	 */
	protected function setActiveOrRestrictedActive($activeOrRestrictedActive) {
		$this->activeOrRestrictedActive = $activeOrRestrictedActive;

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
	 * @return Account
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The name of the account identifies the account within the administrative interface.
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
	 * @return Account
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns parentAccount.
	 *
	 * @return \Wallee\Sdk\Model\Account
	 */
	public function getParentAccount() {
		return $this->parentAccount;
	}

	/**
	 * Sets parentAccount.
	 *
	 * @param \Wallee\Sdk\Model\Account $parentAccount
	 * @return Account
	 */
	public function setParentAccount($parentAccount) {
		$this->parentAccount = $parentAccount;

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
	 * @return Account
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns restrictedActive.
	 *
	 * Restricted active means that at least one account in the hierarchy is only restricted active, but all are either restricted active or active.
	 *
	 * @return bool
	 */
	public function getRestrictedActive() {
		return $this->restrictedActive;
	}

	/**
	 * Sets restrictedActive.
	 *
	 * @param bool $restrictedActive
	 * @return Account
	 */
	protected function setRestrictedActive($restrictedActive) {
		$this->restrictedActive = $restrictedActive;

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
	 * @return Account
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'RESTRICTED_ACTIVE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED');
		if ((!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'RESTRICTED_ACTIVE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subaccountLimit.
	 *
	 * This property restricts the number of subaccounts which can be created within this account.
	 *
	 * @return int
	 */
	public function getSubaccountLimit() {
		return $this->subaccountLimit;
	}

	/**
	 * Sets subaccountLimit.
	 *
	 * @param int $subaccountLimit
	 * @return Account
	 */
	protected function setSubaccountLimit($subaccountLimit) {
		$this->subaccountLimit = $subaccountLimit;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param string $type
	 * @return Account
	 */
	protected function setType($type) {
		$allowed_values = array('MASTER', 'REGULAR', 'SUBACCOUNT');
		if ((!in_array($type, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'MASTER', 'REGULAR', 'SUBACCOUNT'");
		}
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
	 * @return Account
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

		if ($this->getName() === null) {
			throw new ValidationException("'name' can't be null", 'name', $this);
		}
		if ($this->getState() === null) {
			throw new ValidationException("'state' can't be null", 'state', $this);
		}
		$allowed_values = ["CREATE", "RESTRICTED_ACTIVE", "ACTIVE", "INACTIVE", "DELETING", "DELETED"];
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
		}

		if ($this->getType() === null) {
			throw new ValidationException("'type' can't be null", 'type', $this);
		}
		$allowed_values = ["MASTER", "REGULAR", "SUBACCOUNT"];
		if (!in_array($this->getType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'type', must be one of #{allowed_values}.", 'type', $this);
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

