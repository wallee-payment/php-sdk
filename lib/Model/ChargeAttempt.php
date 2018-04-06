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
 * ChargeAttempt model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
		'createdOn' => '\DateTime',
		'environment' => '\Wallee\Sdk\Model\ChargeAttemptEnvironment',
		'failedOn' => '\DateTime',
		'failureReason' => '\Wallee\Sdk\Model\FailureReason',
		'initializingTokenVersion' => 'bool',
		'invocation' => '\Wallee\Sdk\Model\ConnectorInvocation',
		'labels' => '\Wallee\Sdk\Model\Label[]',
		'language' => 'string',
		'nextUpdateOn' => '\DateTime',
		'plannedPurgeDate' => '\DateTime',
		'redirectionUrl' => 'string',
		'spaceViewId' => 'int',
		'state' => '\Wallee\Sdk\Model\ChargeAttemptState',
		'succeededOn' => '\DateTime',
		'timeoutOn' => '\DateTime',
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
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Charge
	 */
	private $charge;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\PaymentConnectorConfiguration
	 */
	private $connectorConfiguration;

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
	 * 
	 *
	 * @var \DateTime
	 */
	private $failedOn;

	/**
	 * 
	 *
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
	 * 
	 *
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
	 * @var \DateTime
	 */
	private $nextUpdateOn;

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
	private $redirectionUrl;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceViewId;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\ChargeAttemptState
	 */
	private $state;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $succeededOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $timeoutOn;

	/**
	 * 
	 *
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

		if (isset($data['charge'])) {
			$this->setCharge($data['charge']);
		}
		if (isset($data['connectorConfiguration'])) {
			$this->setConnectorConfiguration($data['connectorConfiguration']);
		}
		if (isset($data['environment'])) {
			$this->setEnvironment($data['environment']);
		}
		if (isset($data['failureReason'])) {
			$this->setFailureReason($data['failureReason']);
		}
		if (isset($data['invocation'])) {
			$this->setInvocation($data['invocation']);
		}
		if (isset($data['labels'])) {
			$this->setLabels($data['labels']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
		if (isset($data['tokenVersion'])) {
			$this->setTokenVersion($data['tokenVersion']);
		}
	}


	/**
	 * Returns charge.
	 *
	 * 
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
	 * 
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
	 * @return \DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param \DateTime $createdOn
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
	 * @return \Wallee\Sdk\Model\ChargeAttemptEnvironment
	 */
	public function getEnvironment() {
		return $this->environment;
	}

	/**
	 * Sets environment.
	 *
	 * @param \Wallee\Sdk\Model\ChargeAttemptEnvironment $environment
	 * @return ChargeAttempt
	 */
	public function setEnvironment($environment) {
		$this->environment = $environment;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param \DateTime $failedOn
	 * @return ChargeAttempt
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

		return $this;
	}

	/**
	 * Returns failureReason.
	 *
	 * 
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
	 * 
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
	 * @return \DateTime
	 */
	public function getNextUpdateOn() {
		return $this->nextUpdateOn;
	}

	/**
	 * Sets nextUpdateOn.
	 *
	 * @param \DateTime $nextUpdateOn
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
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
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
	 * 
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
	protected function setSpaceViewId($spaceViewId) {
		$this->spaceViewId = $spaceViewId;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\ChargeAttemptState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\ChargeAttemptState $state
	 * @return ChargeAttempt
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns succeededOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getSucceededOn() {
		return $this->succeededOn;
	}

	/**
	 * Sets succeededOn.
	 *
	 * @param \DateTime $succeededOn
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
	 * @return \DateTime
	 */
	public function getTimeoutOn() {
		return $this->timeoutOn;
	}

	/**
	 * Sets timeoutOn.
	 *
	 * @param \DateTime $timeoutOn
	 * @return ChargeAttempt
	 */
	protected function setTimeoutOn($timeoutOn) {
		$this->timeoutOn = $timeoutOn;

		return $this;
	}

	/**
	 * Returns tokenVersion.
	 *
	 * 
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

