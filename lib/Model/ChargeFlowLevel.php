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
 * ChargeFlowLevel model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ChargeFlowLevel  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ChargeFlowLevel';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'asynchronousCharge' => '\Wallee\Sdk\Model\EntityReference',
		'configuration' => '\Wallee\Sdk\Model\ChargeFlowLevelConfiguration',
		'createdOn' => 'string',
		'id' => 'int',
		'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
		'plannedPurgeDate' => 'string',
		'state' => 'string',
		'synchronousCharge' => '\Wallee\Sdk\Model\EntityReference',
		'timeoutOn' => 'string',
		'tokenCharge' => '\Wallee\Sdk\Model\EntityReference',
		'transaction' => '\Wallee\Sdk\Model\Transaction',
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
	const STATE_FAILED = 'FAILED';
	const STATE_SUCCESSFUL = 'SUCCESSFUL';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_PENDING,
			self::STATE_FAILED,
			self::STATE_SUCCESSFUL,
		];
	}
	

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $asynchronousCharge;

	/**
	 * @var \Wallee\Sdk\Model\ChargeFlowLevelConfiguration
	 */
	private $configuration;

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
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $synchronousCharge;

	/**
	 * 
	 *
	 * @var string
	 */
	private $timeoutOn;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $tokenCharge;

	/**
	 * @var \Wallee\Sdk\Model\Transaction
	 */
	private $transaction;

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
		$this->setAsynchronousCharge(isset($data['asynchronousCharge']) ? $data['asynchronousCharge'] : null);
		$this->setConfiguration(isset($data['configuration']) ? $data['configuration'] : null);
		$this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
		$this->setSynchronousCharge(isset($data['synchronousCharge']) ? $data['synchronousCharge'] : null);
		$this->setTokenCharge(isset($data['tokenCharge']) ? $data['tokenCharge'] : null);
		$this->setTransaction(isset($data['transaction']) ? $data['transaction'] : null);
	}


	/**
	 * Returns asynchronousCharge.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getAsynchronousCharge() {
		return $this->asynchronousCharge;
	}

	/**
	 * Sets asynchronousCharge.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $asynchronousCharge
	 * @return ChargeFlowLevel
	 */
	public function setAsynchronousCharge($asynchronousCharge) {
		$this->asynchronousCharge = $asynchronousCharge;

		return $this;
	}

	/**
	 * Returns configuration.
	 *
	 * @return \Wallee\Sdk\Model\ChargeFlowLevelConfiguration
	 */
	public function getConfiguration() {
		return $this->configuration;
	}

	/**
	 * Sets configuration.
	 *
	 * @param \Wallee\Sdk\Model\ChargeFlowLevelConfiguration $configuration
	 * @return ChargeFlowLevel
	 */
	public function setConfiguration($configuration) {
		$this->configuration = $configuration;

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
	 * @return ChargeFlowLevel
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
	 * @return ChargeFlowLevel
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
	 * @return ChargeFlowLevel
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
	 * @return ChargeFlowLevel
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
	 * @return ChargeFlowLevel
	 */
	protected function setState($state) {
		$allowed_values = array('PENDING', 'FAILED', 'SUCCESSFUL');
		if ((!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'PENDING', 'FAILED', 'SUCCESSFUL'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns synchronousCharge.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getSynchronousCharge() {
		return $this->synchronousCharge;
	}

	/**
	 * Sets synchronousCharge.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $synchronousCharge
	 * @return ChargeFlowLevel
	 */
	public function setSynchronousCharge($synchronousCharge) {
		$this->synchronousCharge = $synchronousCharge;

		return $this;
	}

	/**
	 * Returns timeoutOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTimeoutOn() {
		return $this->timeoutOn;
	}

	/**
	 * Sets timeoutOn.
	 *
	 * @param string $timeoutOn
	 * @return ChargeFlowLevel
	 */
	protected function setTimeoutOn($timeoutOn) {
		$this->timeoutOn = $timeoutOn;

		return $this;
	}

	/**
	 * Returns tokenCharge.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getTokenCharge() {
		return $this->tokenCharge;
	}

	/**
	 * Sets tokenCharge.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $tokenCharge
	 * @return ChargeFlowLevel
	 */
	public function setTokenCharge($tokenCharge) {
		$this->tokenCharge = $tokenCharge;

		return $this;
	}

	/**
	 * Returns transaction.
	 *
	 * @return \Wallee\Sdk\Model\Transaction
	 */
	public function getTransaction() {
		return $this->transaction;
	}

	/**
	 * Sets transaction.
	 *
	 * @param \Wallee\Sdk\Model\Transaction $transaction
	 * @return ChargeFlowLevel
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

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
	 * @return ChargeFlowLevel
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

		if ($this->getCreatedOn() === null) {
			throw new ValidationException("'createdOn' can't be null", 'createdOn', $this);
		}
		if ($this->getState() === null) {
			throw new ValidationException("'state' can't be null", 'state', $this);
		}
		$allowed_values = ["PENDING", "FAILED", "SUCCESSFUL"];
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
		}

		if ($this->getTimeoutOn() === null) {
			throw new ValidationException("'timeoutOn' can't be null", 'timeoutOn', $this);
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
