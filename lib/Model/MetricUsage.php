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
 * MetricUsage model
 *
 * @category    Class
 * @description The metric usage provides details about the consumption of a particular metric.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class MetricUsage  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'MetricUsage';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'consumedUnits' => 'float',
		'metricDescription' => 'map[string,string]',
		'metricId' => 'int',
		'metricName' => 'map[string,string]'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The consumed units provide the value of how much has been consumed of the particular metric.
	 *
	 * @var float
	 */
	private $consumedUnits;

	/**
	 * The metric description describes the metric.
	 *
	 * @var map[string,string]
	 */
	private $metricDescription;

	/**
	 * The metric ID identifies the metric for consumed units.
	 *
	 * @var int
	 */
	private $metricId;

	/**
	 * The metric name defines the name of the consumed units.
	 *
	 * @var map[string,string]
	 */
	private $metricName;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['metricDescription'])) {
			$this->setMetricDescription($data['metricDescription']);
		}
		if (isset($data['metricName'])) {
			$this->setMetricName($data['metricName']);
		}
	}


	/**
	 * Returns consumedUnits.
	 *
	 * The consumed units provide the value of how much has been consumed of the particular metric.
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
	 * @return MetricUsage
	 */
	protected function setConsumedUnits($consumedUnits) {
		$this->consumedUnits = $consumedUnits;

		return $this;
	}

	/**
	 * Returns metricDescription.
	 *
	 * The metric description describes the metric.
	 *
	 * @return map[string,string]
	 */
	public function getMetricDescription() {
		return $this->metricDescription;
	}

	/**
	 * Sets metricDescription.
	 *
	 * @param map[string,string] $metricDescription
	 * @return MetricUsage
	 */
	public function setMetricDescription($metricDescription) {
		$this->metricDescription = $metricDescription;

		return $this;
	}

	/**
	 * Returns metricId.
	 *
	 * The metric ID identifies the metric for consumed units.
	 *
	 * @return int
	 */
	public function getMetricId() {
		return $this->metricId;
	}

	/**
	 * Sets metricId.
	 *
	 * @param int $metricId
	 * @return MetricUsage
	 */
	protected function setMetricId($metricId) {
		$this->metricId = $metricId;

		return $this;
	}

	/**
	 * Returns metricName.
	 *
	 * The metric name defines the name of the consumed units.
	 *
	 * @return map[string,string]
	 */
	public function getMetricName() {
		return $this->metricName;
	}

	/**
	 * Sets metricName.
	 *
	 * @param map[string,string] $metricName
	 * @return MetricUsage
	 */
	public function setMetricName($metricName) {
		$this->metricName = $metricName;

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

