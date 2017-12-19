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
 * SubscriptionMetricUsageReportCreate model
 *
 * @category    Class
 * @description The metric usage is the actual usage of a metric for a particular subscription as collected by an external application.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionMetricUsageReportCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionMetricUsageReport.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'consumedUnits' => 'float',
		'description' => 'string',
		'externalId' => 'string',
		'metric' => 'int',
		'subscription' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The consumed units describe the amount of resources consumed. Those consumed units will be billed in the next billing cycle.
	 *
	 * @var float
	 */
	private $consumedUnits;

	/**
	 * The metric usage report description describe the reported usage. This description may be shown to the end user.
	 *
	 * @var string
	 */
	private $description;

	/**
	 * The external id identifies the metric usage uniquely.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * The metric usage report is linked to the metric for which the usage should be recorded.
	 *
	 * @var int
	 */
	private $metric;

	/**
	 * The subscription to which the usage is added to.
	 *
	 * @var int
	 */
	private $subscription;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['consumedUnits'])) {
			$this->setConsumedUnits($data['consumedUnits']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['externalId'])) {
			$this->setExternalId($data['externalId']);
		}
		if (isset($data['metric'])) {
			$this->setMetric($data['metric']);
		}
		if (isset($data['subscription'])) {
			$this->setSubscription($data['subscription']);
		}
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
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setConsumedUnits($consumedUnits) {
		$this->consumedUnits = $consumedUnits;

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
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setDescription($description) {
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
		return $this->externalId;
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setExternalId($externalId) {
		$this->externalId = $externalId;

		return $this;
	}

	/**
	 * Returns metric.
	 *
	 * The metric usage report is linked to the metric for which the usage should be recorded.
	 *
	 * @return int
	 */
	public function getMetric() {
		return $this->metric;
	}

	/**
	 * Sets metric.
	 *
	 * @param int $metric
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setMetric($metric) {
		$this->metric = $metric;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * The subscription to which the usage is added to.
	 *
	 * @return int
	 */
	public function getSubscription() {
		return $this->subscription;
	}

	/**
	 * Sets subscription.
	 *
	 * @param int $subscription
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setSubscription($subscription) {
		$this->subscription = $subscription;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getConsumedUnits() === null) {
			throw new ValidationException("'consumedUnits' can't be null", 'consumedUnits', $this);
		}
		if ($this->getExternalId() === null) {
			throw new ValidationException("'externalId' can't be null", 'externalId', $this);
		}
		if ($this->getMetric() === null) {
			throw new ValidationException("'metric' can't be null", 'metric', $this);
		}
		if ($this->getSubscription() === null) {
			throw new ValidationException("'subscription' can't be null", 'subscription', $this);
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

