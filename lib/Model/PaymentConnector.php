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
 * PaymentConnector model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class PaymentConnector  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentConnector';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'dataCollectionType' => 'string',
		'description' => 'map[string,string]',
		'feature' => '\Wallee\Sdk\Model\Feature',
		'id' => 'int',
		'name' => 'map[string,string]',
		'paymentMethod' => '\Wallee\Sdk\Model\EntityReference',
		'paymentMethodBrand' => '\Wallee\Sdk\Model\PaymentMethodBrand',
		'primaryRiskTaker' => 'string',
		'processor' => '\Wallee\Sdk\Model\EntityReference',
		'supportedCustomersPresences' => 'string[]',
		'supportedFeatures' => '\Wallee\Sdk\Model\EntityReference'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	
	/**
	 * Values of dataCollectionType.
	 */
	const DATA_COLLECTION_TYPE_ONSITE = 'ONSITE';
	const DATA_COLLECTION_TYPE_OFFSITE = 'OFFSITE';
	
	/**
	 * Returns allowable values of dataCollectionType.
	 *
	 * @return string[]
	 */
	public function getDataCollectionTypeAllowableValues() {
		return [
			self::DATA_COLLECTION_TYPE_ONSITE,
			self::DATA_COLLECTION_TYPE_OFFSITE,
		];
	}
	
	/**
	 * Values of primaryRiskTaker.
	 */
	const PRIMARY_RISK_TAKER_CUSTOMER = 'CUSTOMER';
	const PRIMARY_RISK_TAKER_MERCHANT = 'MERCHANT';
	const PRIMARY_RISK_TAKER_THIRD_PARTY = 'THIRD_PARTY';
	
	/**
	 * Returns allowable values of primaryRiskTaker.
	 *
	 * @return string[]
	 */
	public function getPrimaryRiskTakerAllowableValues() {
		return [
			self::PRIMARY_RISK_TAKER_CUSTOMER,
			self::PRIMARY_RISK_TAKER_MERCHANT,
			self::PRIMARY_RISK_TAKER_THIRD_PARTY,
		];
	}
	
	/**
	 * Values of supportedCustomersPresences.
	 */
	const SUPPORTED_CUSTOMERS_PRESENCES_NOT_PRESENT = 'NOT_PRESENT';
	const SUPPORTED_CUSTOMERS_PRESENCES_VIRTUAL_PRESENT = 'VIRTUAL_PRESENT';
	const SUPPORTED_CUSTOMERS_PRESENCES_PHYSICAL_PRESENT = 'PHYSICAL_PRESENT';
	
	/**
	 * Returns allowable values of supportedCustomersPresences.
	 *
	 * @return string[]
	 */
	public function getSupportedCustomersPresencesAllowableValues() {
		return [
			self::SUPPORTED_CUSTOMERS_PRESENCES_NOT_PRESENT,
			self::SUPPORTED_CUSTOMERS_PRESENCES_VIRTUAL_PRESENT,
			self::SUPPORTED_CUSTOMERS_PRESENCES_PHYSICAL_PRESENT,
		];
	}
	

	/**
	 * 
	 *
	 * @var string
	 */
	private $dataCollectionType;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $description;

	/**
	 * @var \Wallee\Sdk\Model\Feature
	 */
	private $feature;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $name;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $paymentMethod;

	/**
	 * @var \Wallee\Sdk\Model\PaymentMethodBrand
	 */
	private $paymentMethodBrand;

	/**
	 * 
	 *
	 * @var string
	 */
	private $primaryRiskTaker;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $processor;

	/**
	 * 
	 *
	 * @var string[]
	 */
	private $supportedCustomersPresences;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $supportedFeatures;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		$this->setDescription(isset($data['description']) ? $data['description'] : null);
		$this->setFeature(isset($data['feature']) ? $data['feature'] : null);
		$this->setName(isset($data['name']) ? $data['name'] : null);
		$this->setPaymentMethod(isset($data['paymentMethod']) ? $data['paymentMethod'] : null);
		$this->setPaymentMethodBrand(isset($data['paymentMethodBrand']) ? $data['paymentMethodBrand'] : null);
		$this->setProcessor(isset($data['processor']) ? $data['processor'] : null);
		$this->setSupportedCustomersPresences(isset($data['supportedCustomersPresences']) ? $data['supportedCustomersPresences'] : null);
		$this->setSupportedFeatures(isset($data['supportedFeatures']) ? $data['supportedFeatures'] : null);
	}


	/**
	 * Returns dataCollectionType.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getDataCollectionType() {
		return $this->dataCollectionType;
	}

	/**
	 * Sets dataCollectionType.
	 *
	 * @param string $dataCollectionType
	 * @return PaymentConnector
	 */
	protected function setDataCollectionType($dataCollectionType) {
		$allowed_values = array('ONSITE', 'OFFSITE');
		if ((!in_array($dataCollectionType, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'dataCollectionType', must be one of 'ONSITE', 'OFFSITE'");
		}
		$this->dataCollectionType = $dataCollectionType;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param map[string,string] $description
	 * @return PaymentConnector
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns feature.
	 *
	 * @return \Wallee\Sdk\Model\Feature
	 */
	public function getFeature() {
		return $this->feature;
	}

	/**
	 * Sets feature.
	 *
	 * @param \Wallee\Sdk\Model\Feature $feature
	 * @return PaymentConnector
	 */
	public function setFeature($feature) {
		$this->feature = $feature;

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
	 * @return PaymentConnector
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param map[string,string] $name
	 * @return PaymentConnector
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns paymentMethod.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getPaymentMethod() {
		return $this->paymentMethod;
	}

	/**
	 * Sets paymentMethod.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $paymentMethod
	 * @return PaymentConnector
	 */
	public function setPaymentMethod($paymentMethod) {
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Returns paymentMethodBrand.
	 *
	 * @return \Wallee\Sdk\Model\PaymentMethodBrand
	 */
	public function getPaymentMethodBrand() {
		return $this->paymentMethodBrand;
	}

	/**
	 * Sets paymentMethodBrand.
	 *
	 * @param \Wallee\Sdk\Model\PaymentMethodBrand $paymentMethodBrand
	 * @return PaymentConnector
	 */
	public function setPaymentMethodBrand($paymentMethodBrand) {
		$this->paymentMethodBrand = $paymentMethodBrand;

		return $this;
	}

	/**
	 * Returns primaryRiskTaker.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPrimaryRiskTaker() {
		return $this->primaryRiskTaker;
	}

	/**
	 * Sets primaryRiskTaker.
	 *
	 * @param string $primaryRiskTaker
	 * @return PaymentConnector
	 */
	protected function setPrimaryRiskTaker($primaryRiskTaker) {
		$allowed_values = array('CUSTOMER', 'MERCHANT', 'THIRD_PARTY');
		if (!is_null($primaryRiskTaker) && (!in_array($primaryRiskTaker, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'primaryRiskTaker', must be one of 'CUSTOMER', 'MERCHANT', 'THIRD_PARTY'");
		}
		$this->primaryRiskTaker = $primaryRiskTaker;

		return $this;
	}

	/**
	 * Returns processor.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getProcessor() {
		return $this->processor;
	}

	/**
	 * Sets processor.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $processor
	 * @return PaymentConnector
	 */
	public function setProcessor($processor) {
		$this->processor = $processor;

		return $this;
	}

	/**
	 * Returns supportedCustomersPresences.
	 *
	 * 
	 *
	 * @return string[]
	 */
	public function getSupportedCustomersPresences() {
		return $this->supportedCustomersPresences;
	}

	/**
	 * Sets supportedCustomersPresences.
	 *
	 * @param string[] $supportedCustomersPresences
	 * @return PaymentConnector
	 */
	public function setSupportedCustomersPresences($supportedCustomersPresences) {
		$allowed_values = array('NOT_PRESENT', 'VIRTUAL_PRESENT', 'PHYSICAL_PRESENT');
		if (!is_null($supportedCustomersPresences) && (array_diff($supportedCustomersPresences, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'supportedCustomersPresences', must be one of 'NOT_PRESENT', 'VIRTUAL_PRESENT', 'PHYSICAL_PRESENT'");
		}
		$this->supportedCustomersPresences = $supportedCustomersPresences;

		return $this;
	}

	/**
	 * Returns supportedFeatures.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getSupportedFeatures() {
		return $this->supportedFeatures;
	}

	/**
	 * Sets supportedFeatures.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $supportedFeatures
	 * @return PaymentConnector
	 */
	public function setSupportedFeatures($supportedFeatures) {
		$this->supportedFeatures = $supportedFeatures;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getDataCollectionType() === null) {
			throw new ValidationException("'dataCollectionType' can't be null", 'dataCollectionType', $this);
		}
		$allowed_values = ["ONSITE", "OFFSITE"];
		if (!in_array($this->getDataCollectionType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'dataCollectionType', must be one of #{allowed_values}.", 'dataCollectionType', $this);
		}

		if ($this->getName() === null) {
			throw new ValidationException("'name' can't be null", 'name', $this);
		}
		$allowed_values = ["CUSTOMER", "MERCHANT", "THIRD_PARTY"];
		if (!in_array($this->getPrimaryRiskTaker(), $allowed_values)) {
			throw new ValidationException("invalid value for 'primaryRiskTaker', must be one of #{allowed_values}.", 'primaryRiskTaker', $this);
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
