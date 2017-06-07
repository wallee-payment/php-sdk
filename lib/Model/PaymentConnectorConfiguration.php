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
 * PaymentConnectorConfiguration model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class PaymentConnectorConfiguration  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentConnectorConfiguration';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'applicableForTransactionProcessing' => 'bool',
		'conditions' => 'int[]',
		'connector' => 'int',
		'enabledSpaceViews' => 'int[]',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'paymentMethodConfiguration' => '\Wallee\Sdk\Model\PaymentMethodConfiguration',
		'plannedPurgeDate' => '\DateTime',
		'priority' => 'int',
		'processorConfiguration' => '\Wallee\Sdk\Model\PaymentProcessorConfiguration',
		'state' => 'string',
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
		return array(
			self::STATE_CREATE,
			self::STATE_ACTIVE,
			self::STATE_INACTIVE,
			self::STATE_DELETING,
			self::STATE_DELETED,
		);
	}
	

	/**
	 * This property indicates if the connector is currently used for processing transactions. In case either the payment method configuration or the processor configuration is not active the connector will not be used even though the connector state is active.
	 *
	 * @var bool
	 */
	private $applicableForTransactionProcessing;

	/**
	 * @var int[]
	 */
	private $conditions;

	/**
	 * @var int
	 */
	private $connector;

	/**
	 * The connector configuration is only enabled for the selected space views. In case the set is empty the connector configuration is enabled for all space views.
	 *
	 * @var int[]
	 */
	private $enabledSpaceViews;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The connector configuration name is used internally to identify the configuration in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @var \Wallee\Sdk\Model\PaymentMethodConfiguration
	 */
	private $paymentMethodConfiguration;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * The priority will define the order of choice of the connector configurations. The lower the value, the higher the priority is going to be. This value can also be a negative number in case you are adding a new configuration that you want to have a high priority and you dont want to change the priority of all the other configurations.
	 *
	 * @var int
	 */
	private $priority;

	/**
	 * @var \Wallee\Sdk\Model\PaymentProcessorConfiguration
	 */
	private $processorConfiguration;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

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
		if (isset($data['conditions']) && $data['conditions'] != null) {
			$this->setConditions($data['conditions']);
		}
		if (isset($data['connector']) && $data['connector'] != null) {
			$this->setConnector($data['connector']);
		}
		if (isset($data['enabledSpaceViews']) && $data['enabledSpaceViews'] != null) {
			$this->setEnabledSpaceViews($data['enabledSpaceViews']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['paymentMethodConfiguration']) && $data['paymentMethodConfiguration'] != null) {
			$this->setPaymentMethodConfiguration($data['paymentMethodConfiguration']);
		}
		if (isset($data['processorConfiguration']) && $data['processorConfiguration'] != null) {
			$this->setProcessorConfiguration($data['processorConfiguration']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns applicableForTransactionProcessing.
	 *
	 * This property indicates if the connector is currently used for processing transactions. In case either the payment method configuration or the processor configuration is not active the connector will not be used even though the connector state is active.
	 *
	 * @return bool
	 */
	public function getApplicableForTransactionProcessing() {
		return $this->applicableForTransactionProcessing;
	}

	/**
	 * Sets applicableForTransactionProcessing.
	 *
	 * @param bool $applicableForTransactionProcessing
	 * @return PaymentConnectorConfiguration
	 */
	protected function setApplicableForTransactionProcessing($applicableForTransactionProcessing) {
		$this->applicableForTransactionProcessing = $applicableForTransactionProcessing;

		return $this;
	}

	/**
	 * Returns conditions.
	 *
	 * @return int[]
	 */
	public function getConditions() {
		return $this->conditions;
	}

	/**
	 * Sets conditions.
	 *
	 * @param int[] $conditions
	 * @return PaymentConnectorConfiguration
	 */
	public function setConditions($conditions) {
		$this->conditions = $conditions;

		return $this;
	}

	/**
	 * Returns connector.
	 *
	 * @return int
	 */
	public function getConnector() {
		return $this->connector;
	}

	/**
	 * Sets connector.
	 *
	 * @param int $connector
	 * @return PaymentConnectorConfiguration
	 */
	public function setConnector($connector) {
		$this->connector = $connector;

		return $this;
	}

	/**
	 * Returns enabledSpaceViews.
	 *
	 * The connector configuration is only enabled for the selected space views. In case the set is empty the connector configuration is enabled for all space views.
	 *
	 * @return int[]
	 */
	public function getEnabledSpaceViews() {
		return $this->enabledSpaceViews;
	}

	/**
	 * Sets enabledSpaceViews.
	 *
	 * @param int[] $enabledSpaceViews
	 * @return PaymentConnectorConfiguration
	 */
	public function setEnabledSpaceViews($enabledSpaceViews) {
		$this->enabledSpaceViews = $enabledSpaceViews;

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
	 * @return PaymentConnectorConfiguration
	 */
	public function setId($id) {
		$this->id = $id;

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
	 * @return PaymentConnectorConfiguration
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The connector configuration name is used internally to identify the configuration in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
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
	 * @return PaymentConnectorConfiguration
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns paymentMethodConfiguration.
	 *
	 * @return \Wallee\Sdk\Model\PaymentMethodConfiguration
	 */
	public function getPaymentMethodConfiguration() {
		return $this->paymentMethodConfiguration;
	}

	/**
	 * Sets paymentMethodConfiguration.
	 *
	 * @param \Wallee\Sdk\Model\PaymentMethodConfiguration $paymentMethodConfiguration
	 * @return PaymentConnectorConfiguration
	 */
	public function setPaymentMethodConfiguration($paymentMethodConfiguration) {
		$this->paymentMethodConfiguration = $paymentMethodConfiguration;

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
	 * @return PaymentConnectorConfiguration
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns priority.
	 *
	 * The priority will define the order of choice of the connector configurations. The lower the value, the higher the priority is going to be. This value can also be a negative number in case you are adding a new configuration that you want to have a high priority and you dont want to change the priority of all the other configurations.
	 *
	 * @return int
	 */
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * Sets priority.
	 *
	 * @param int $priority
	 * @return PaymentConnectorConfiguration
	 */
	protected function setPriority($priority) {
		$this->priority = $priority;

		return $this;
	}

	/**
	 * Returns processorConfiguration.
	 *
	 * @return \Wallee\Sdk\Model\PaymentProcessorConfiguration
	 */
	public function getProcessorConfiguration() {
		return $this->processorConfiguration;
	}

	/**
	 * Sets processorConfiguration.
	 *
	 * @param \Wallee\Sdk\Model\PaymentProcessorConfiguration $processorConfiguration
	 * @return PaymentConnectorConfiguration
	 */
	public function setProcessorConfiguration($processorConfiguration) {
		$this->processorConfiguration = $processorConfiguration;

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
	 * @return PaymentConnectorConfiguration
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED'");
		}
		$this->state = $state;

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
	 * @return PaymentConnectorConfiguration
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

