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
 * ConnectorInvocation model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ConnectorInvocation extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ConnectorInvocation';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'createdOn' => 'string',
		'plannedPurgeDate' => 'string',
		'stage' => 'string',
		'timeTookInMilliseconds' => 'int',
		'transaction' => 'int',
		'version' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	
	/**
	 * Values of stage.
	 */
	const STAGE_PAYMENT_METHOD_LIST = 'PAYMENT_METHOD_LIST';
	const STAGE_FORM_GENERATION = 'FORM_GENERATION';
	const STAGE_VALIDATION = 'VALIDATION';
	const STAGE_AUTHORIZATION = 'AUTHORIZATION';
	
	/**
	 * Returns allowable values of stage.
	 *
	 * @return string[]
	 */
	public function getStageAllowableValues() {
		return [
			self::STAGE_PAYMENT_METHOD_LIST,
			self::STAGE_FORM_GENERATION,
			self::STAGE_VALIDATION,
			self::STAGE_AUTHORIZATION,
		];
	}
	

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var string
	 */
	private $createdOn;

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
	private $stage;

	/**
	 * 
	 *
	 * @var int
	 */
	private $timeTookInMilliseconds;

	/**
	 * @var int
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
		parent::__construct($data);

		if (isset($data['transaction']) && $data['transaction'] != null) {
			$this->setTransaction($data['transaction']);
		}
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
	 * @return ConnectorInvocation
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

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
	 * @return ConnectorInvocation
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns stage.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getStage() {
		return $this->stage;
	}

	/**
	 * Sets stage.
	 *
	 * @param string $stage
	 * @return ConnectorInvocation
	 */
	protected function setStage($stage) {
		$allowed_values = array('PAYMENT_METHOD_LIST', 'FORM_GENERATION', 'VALIDATION', 'AUTHORIZATION');
		if (!is_null($stage) && (!in_array($stage, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'stage', must be one of 'PAYMENT_METHOD_LIST', 'FORM_GENERATION', 'VALIDATION', 'AUTHORIZATION'");
		}
		$this->stage = $stage;

		return $this;
	}

	/**
	 * Returns timeTookInMilliseconds.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getTimeTookInMilliseconds() {
		return $this->timeTookInMilliseconds;
	}

	/**
	 * Sets timeTookInMilliseconds.
	 *
	 * @param int $timeTookInMilliseconds
	 * @return ConnectorInvocation
	 */
	protected function setTimeTookInMilliseconds($timeTookInMilliseconds) {
		$this->timeTookInMilliseconds = $timeTookInMilliseconds;

		return $this;
	}

	/**
	 * Returns transaction.
	 *
	 * @return int
	 */
	public function getTransaction() {
		return $this->transaction;
	}

	/**
	 * Sets transaction.
	 *
	 * @param int $transaction
	 * @return ConnectorInvocation
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
	 * @return ConnectorInvocation
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
		parent::validate();

		if ($this->getCreatedOn() === null) {
			throw new ValidationException("'createdOn' can't be null", 'createdOn', $this);
		}
		$allowed_values = ["PAYMENT_METHOD_LIST", "FORM_GENERATION", "VALIDATION", "AUTHORIZATION"];
		if (!in_array($this->getStage(), $allowed_values)) {
			throw new ValidationException("invalid value for 'stage', must be one of #{allowed_values}.", 'stage', $this);
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

