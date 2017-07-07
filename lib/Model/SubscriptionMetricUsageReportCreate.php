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
class SubscriptionMetricUsageReportCreate extends SubscriptionMetricUsageReport  {

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
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['consumedUnits']) && $data['consumedUnits'] != null) {
			$this->setConsumedUnits($data['consumedUnits']);
		}
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['externalId']) && $data['externalId'] != null) {
			$this->setExternalId($data['externalId']);
		}
		if (isset($data['metric']) && $data['metric'] != null) {
			$this->setMetric($data['metric']);
		}
		if (isset($data['subscription']) && $data['subscription'] != null) {
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
		return parent::getConsumedUnits();
	}

	/**
	 * Sets consumedUnits.
	 *
	 * @param float $consumedUnits
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setConsumedUnits($consumedUnits) {
		return parent::setConsumedUnits($consumedUnits);
	}

	/**
	 * Returns description.
	 *
	 * The metric usage report description describe the reported usage. This description may be shown to the end user.
	 *
	 * @return string
	 */
	public function getDescription() {
		return parent::getDescription();
	}

	/**
	 * Sets description.
	 *
	 * @param string $description
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setDescription($description) {
		return parent::setDescription($description);
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
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setExternalId($externalId) {
		return parent::setExternalId($externalId);
	}

	/**
	 * Returns metric.
	 *
	 * The metric usage report is linked to the metric for which the usage should be recorded.
	 *
	 * @return int
	 */
	public function getMetric() {
		return parent::getMetric();
	}

	/**
	 * Sets metric.
	 *
	 * @param int $metric
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setMetric($metric) {
		return parent::setMetric($metric);
	}

	/**
	 * Returns subscription.
	 *
	 * The subscription to which the usage is added to.
	 *
	 * @return int
	 */
	public function getSubscription() {
		return parent::getSubscription();
	}

	/**
	 * Sets subscription.
	 *
	 * @param int $subscription
	 * @return SubscriptionMetricUsageReportCreate
	 */
	public function setSubscription($subscription) {
		return parent::setSubscription($subscription);
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

