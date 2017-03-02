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
 * ChargeAttempt model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ChargeAttempt extends TransactionAwareEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ChargeAttempt';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'charge' => '\Wallee\Sdk\Model\Charge',
		'connectorConfiguration' => '\Wallee\Sdk\Model\PaymentConnectorConfiguration',
		'createdOn' => 'string',
		'environment' => 'string',
		'failedOn' => 'string',
		'failureReason' => '\Wallee\Sdk\Model\FailureReason',
		'initializingTokenVersion' => 'bool',
		'invocation' => '\Wallee\Sdk\Model\ConnectorInvocation',
		'labels' => '\Wallee\Sdk\Model\Label[]',
		'language' => 'string',
		'nextUpdateOn' => 'string',
		'plannedPurgeDate' => 'string',
		'redirectionUrl' => 'string',
		'spaceViewId' => 'int',
		'state' => 'string',
		'succeededOn' => 'string',
		'timeoutOn' => 'string',
		'tokenVersion' => '\Wallee\Sdk\Model\TokenVersion',
		'userFailureMessage' => 'string',
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
	const STATE_PROCESSING = 'PROCESSING';
	const STATE_FAILED = 'FAILED';
	const STATE_SUCCESSFUL = 'SUCCESSFUL';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_PROCESSING,
			self::STATE_FAILED,
			self::STATE_SUCCESSFUL,
		];
	}
	

	/**
	 * @var \Wallee\Sdk\Model\Charge
	 */
	private $charge;

	/**
	 * @var \Wallee\Sdk\Model\PaymentConnectorConfiguration
	 */
	private $connectorConfiguration;

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
	 * 
	 *
	 * @var string
	 */
	private $failedOn;

	/**
	 * @var \Wallee\Sdk\Model\FailureReason
	 */
	private $failureReason;

	/**
	 * 
	 *
	 * @var bool
	 */
	private $initializingTokenVersion;

	/**
	 * @var \Wallee\Sdk\Model\ConnectorInvocation
	 */
	private $invocation;

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
	 * 
	 *
	 * @var string
	 */
	private $nextUpdateOn;

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
	private $redirectionUrl;

	/**
	 * @var int
	 */
	private $spaceViewId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * 
	 *
	 * @var string
	 */
	private $succeededOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $timeoutOn;

	/**
	 * @var \Wallee\Sdk\Model\TokenVersion
	 */
	private $tokenVersion;

	/**
	 * The user failure message contains the message for the user in case the attempt failed. The message is localized into the language specified on the transaction.
	 *
	 * @var string
	 */
	private $userFailureMessage;

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

		if (isset($data['charge']) && $data['charge'] != null) {
			$this->setCharge($data['charge']);
		}
		if (isset($data['connectorConfiguration']) && $data['connectorConfiguration'] != null) {
			$this->setConnectorConfiguration($data['connectorConfiguration']);
		}
		if (isset($data['failureReason']) && $data['failureReason'] != null) {
			$this->setFailureReason($data['failureReason']);
		}
		if (isset($data['invocation']) && $data['invocation'] != null) {
			$this->setInvocation($data['invocation']);
		}
		if (isset($data['labels']) && $data['labels'] != null) {
			$this->setLabels($data['labels']);
		}
		if (isset($data['spaceViewId']) && $data['spaceViewId'] != null) {
			$this->setSpaceViewId($data['spaceViewId']);
		}
		if (isset($data['tokenVersion']) && $data['tokenVersion'] != null) {
			$this->setTokenVersion($data['tokenVersion']);
		}
	}


	/**
	 * Returns charge.
	 *
	 * @return \Wallee\Sdk\Model\Charge
	 */
	public function getCharge() {
		return $this->charge;
	}

	/**
	 * Sets charge.
	 *
	 * @param \Wallee\Sdk\Model\Charge $charge
	 * @return ChargeAttempt
	 */
	public function setCharge($charge) {
		$this->charge = $charge;

		return $this;
	}

	/**
	 * Returns connectorConfiguration.
	 *
	 * @return \Wallee\Sdk\Model\PaymentConnectorConfiguration
	 */
	public function getConnectorConfiguration() {
		return $this->connectorConfiguration;
	}

	/**
	 * Sets connectorConfiguration.
	 *
	 * @param \Wallee\Sdk\Model\PaymentConnectorConfiguration $connectorConfiguration
	 * @return ChargeAttempt
	 */
	public function setConnectorConfiguration($connectorConfiguration) {
		$this->connectorConfiguration = $connectorConfiguration;

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
	 * @return ChargeAttempt
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
	 * @return ChargeAttempt
	 */
	protected function setEnvironment($environment) {
		$allowed_values = array('PRODUCTION', 'TEST');
		if ((!in_array($environment, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'environment', must be one of 'PRODUCTION', 'TEST'");
		}
		$this->environment = $environment;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param string $failedOn
	 * @return ChargeAttempt
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

		return $this;
	}

	/**
	 * Returns failureReason.
	 *
	 * @return \Wallee\Sdk\Model\FailureReason
	 */
	public function getFailureReason() {
		return $this->failureReason;
	}

	/**
	 * Sets failureReason.
	 *
	 * @param \Wallee\Sdk\Model\FailureReason $failureReason
	 * @return ChargeAttempt
	 */
	public function setFailureReason($failureReason) {
		$this->failureReason = $failureReason;

		return $this;
	}

	/**
	 * Returns initializingTokenVersion.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getInitializingTokenVersion() {
		return $this->initializingTokenVersion;
	}

	/**
	 * Sets initializingTokenVersion.
	 *
	 * @param bool $initializingTokenVersion
	 * @return ChargeAttempt
	 */
	protected function setInitializingTokenVersion($initializingTokenVersion) {
		$this->initializingTokenVersion = $initializingTokenVersion;

		return $this;
	}

	/**
	 * Returns invocation.
	 *
	 * @return \Wallee\Sdk\Model\ConnectorInvocation
	 */
	public function getInvocation() {
		return $this->invocation;
	}

	/**
	 * Sets invocation.
	 *
	 * @param \Wallee\Sdk\Model\ConnectorInvocation $invocation
	 * @return ChargeAttempt
	 */
	public function setInvocation($invocation) {
		$this->invocation = $invocation;

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
	 * @return ChargeAttempt
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
	 * @return ChargeAttempt
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns nextUpdateOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getNextUpdateOn() {
		return $this->nextUpdateOn;
	}

	/**
	 * Sets nextUpdateOn.
	 *
	 * @param string $nextUpdateOn
	 * @return ChargeAttempt
	 */
	protected function setNextUpdateOn($nextUpdateOn) {
		$this->nextUpdateOn = $nextUpdateOn;

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
	 * @return ChargeAttempt
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns redirectionUrl.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getRedirectionUrl() {
		return $this->redirectionUrl;
	}

	/**
	 * Sets redirectionUrl.
	 *
	 * @param string $redirectionUrl
	 * @return ChargeAttempt
	 */
	protected function setRedirectionUrl($redirectionUrl) {
		$this->redirectionUrl = $redirectionUrl;

		return $this;
	}

	/**
	 * Returns spaceViewId.
	 *
	 * @return int
	 */
	public function getSpaceViewId() {
		return $this->spaceViewId;
	}

	/**
	 * Sets spaceViewId.
	 *
	 * @param int $spaceViewId
	 * @return ChargeAttempt
	 */
	public function setSpaceViewId($spaceViewId) {
		$this->spaceViewId = $spaceViewId;

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
	 * @return ChargeAttempt
	 */
	protected function setState($state) {
		$allowed_values = array('PROCESSING', 'FAILED', 'SUCCESSFUL');
		if ((!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'PROCESSING', 'FAILED', 'SUCCESSFUL'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns succeededOn.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSucceededOn() {
		return $this->succeededOn;
	}

	/**
	 * Sets succeededOn.
	 *
	 * @param string $succeededOn
	 * @return ChargeAttempt
	 */
	protected function setSucceededOn($succeededOn) {
		$this->succeededOn = $succeededOn;

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
	 * @return ChargeAttempt
	 */
	protected function setTimeoutOn($timeoutOn) {
		$this->timeoutOn = $timeoutOn;

		return $this;
	}

	/**
	 * Returns tokenVersion.
	 *
	 * @return \Wallee\Sdk\Model\TokenVersion
	 */
	public function getTokenVersion() {
		return $this->tokenVersion;
	}

	/**
	 * Sets tokenVersion.
	 *
	 * @param \Wallee\Sdk\Model\TokenVersion $tokenVersion
	 * @return ChargeAttempt
	 */
	public function setTokenVersion($tokenVersion) {
		$this->tokenVersion = $tokenVersion;

		return $this;
	}

	/**
	 * Returns userFailureMessage.
	 *
	 * The user failure message contains the message for the user in case the attempt failed. The message is localized into the language specified on the transaction.
	 *
	 * @return string
	 */
	public function getUserFailureMessage() {
		return $this->userFailureMessage;
	}

	/**
	 * Sets userFailureMessage.
	 *
	 * @param string $userFailureMessage
	 * @return ChargeAttempt
	 */
	protected function setUserFailureMessage($userFailureMessage) {
		$this->userFailureMessage = $userFailureMessage;

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
	 * @return ChargeAttempt
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
		if ($this->getEnvironment() === null) {
			throw new ValidationException("'environment' can't be null", 'environment', $this);
		}
		$allowed_values = ["PRODUCTION", "TEST"];
		if (!in_array($this->getEnvironment(), $allowed_values)) {
			throw new ValidationException("invalid value for 'environment', must be one of #{allowed_values}.", 'environment', $this);
		}

		if ($this->getLabels() === null) {
			throw new ValidationException("'labels' can't be null", 'labels', $this);
		}
		if ($this->getState() === null) {
			throw new ValidationException("'state' can't be null", 'state', $this);
		}
		$allowed_values = ["PROCESSING", "FAILED", "SUCCESSFUL"];
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

