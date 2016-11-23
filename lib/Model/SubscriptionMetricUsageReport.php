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
 * SubscriptionMetricUsageReport model
 *
 * @category    Class
 * @description The metric usage is the actual usage of a metric for a particular subscription as collected by an external application.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionMetricUsageReport extends IdempotentJpaEntity  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionMetricUsageReport';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'consumedUnits' => 'float',
		'createdByUserId' => '\Wallee\Sdk\Model\EntityReference',
		'createdOn' => 'string',
		'description' => 'string',
		'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
		'metric' => '\Wallee\Sdk\Model\SubscriptionMetric',
		'plannedPurgeDate' => 'string',
		'subscription' => '\Wallee\Sdk\Model\Subscription',
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
	 * The consumed units describe the amount of resources consumed. Those consumed units will be billed in the next billing cycle.
	 *
	 * @var float
	 */
	private $consumedUnits;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $createdByUserId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $createdOn;

	/**
	 * The metric usage report description describe the reported usage. This description may be shown to the end user.
	 *
	 * @var string
	 */
	private $description;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $linkedSpaceId;

	/**
	 * @var \Wallee\Sdk\Model\SubscriptionMetric
	 */
	private $metric;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var string
	 */
	private $plannedPurgeDate;

	/**
	 * @var \Wallee\Sdk\Model\Subscription
	 */
	private $subscription;

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

		$this->setCreatedByUserId(isset($data['createdByUserId']) ? $data['createdByUserId'] : null);
		$this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
		$this->setMetric(isset($data['metric']) ? $data['metric'] : null);
		$this->setSubscription(isset($data['subscription']) ? $data['subscription'] : null);
	}


	/**
	 * Returns consumedUnits.
	 *
	 * The consumed units describe the amount of resources consumed. Those consumed units will be billed in the next billing cycle.
	 *
	 * @return float
	 */
	public function getConsumedUnits() {
		return $this->consumedUnits;
	}

	/**
	 * Sets consumedUnits.
	 *
	 * @param float $consumedUnits
	 * @return SubscriptionMetricUsageReport
	 */
	protected function setConsumedUnits($consumedUnits) {
		$this->consumedUnits = $consumedUnits;

		return $this;
	}

	/**
	 * Returns createdByUserId.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getCreatedByUserId() {
		return $this->createdByUserId;
	}

	/**
	 * Sets createdByUserId.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $createdByUserId
	 * @return SubscriptionMetricUsageReport
	 */
	public function setCreatedByUserId($createdByUserId) {
		$this->createdByUserId = $createdByUserId;

		return $this;
	}

	/**
	 * Returns createdOn.
	 *
	 * 
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
	 * @return SubscriptionMetricUsageReport
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * The metric usage report description describe the reported usage. This description may be shown to the end user.
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
	 * @return SubscriptionMetricUsageReport
	 */
	protected function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns externalId.
	 *
	 * The external id identifies the metric usage uniquely.
	 *
	 * @return string
	 */
	public function getExternalId() {
		return parent::getExternalId();
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return SubscriptionMetricUsageReport
	 */
	protected function setExternalId($externalId) {
		return parent::setExternalId($externalId);
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
	 * @return SubscriptionMetricUsageReport
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns metric.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionMetric
	 */
	public function getMetric() {
		return $this->metric;
	}

	/**
	 * Sets metric.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionMetric $metric
	 * @return SubscriptionMetricUsageReport
	 */
	public function setMetric($metric) {
		$this->metric = $metric;

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
	 * @return SubscriptionMetricUsageReport
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * @return \Wallee\Sdk\Model\Subscription
	 */
	public function getSubscription() {
		return $this->subscription;
	}

	/**
	 * Sets subscription.
	 *
	 * @param \Wallee\Sdk\Model\Subscription $subscription
	 * @return SubscriptionMetricUsageReport
	 */
	public function setSubscription($subscription) {
		$this->subscription = $subscription;

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
	 * @return SubscriptionMetricUsageReport
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

		if ($this->getConsumedUnits() === null) {
			throw new ValidationException("'consumedUnits' can't be null", 'consumedUnits', $this);
		}
		if ($this->getExternalId() === null) {
			throw new ValidationException("'externalId' can't be null", 'externalId', $this);
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
