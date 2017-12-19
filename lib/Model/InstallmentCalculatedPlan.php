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
 * InstallmentCalculatedPlan model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class InstallmentCalculatedPlan  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'InstallmentCalculatedPlan';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'configuration' => '\Wallee\Sdk\Model\InstallmentPlanConfiguration',
		'paymentMethodConfigurations' => '\Wallee\Sdk\Model\PaymentMethodConfiguration[]',
		'slices' => '\Wallee\Sdk\Model\InstallmentCalculatedSlice[]',
		'totalAmount' => 'float',
		'transaction' => '\Wallee\Sdk\Model\Transaction'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\InstallmentPlanConfiguration
	 */
	private $configuration;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\PaymentMethodConfiguration[]
	 */
	private $paymentMethodConfigurations;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\InstallmentCalculatedSlice[]
	 */
	private $slices;

	/**
	 * 
	 *
	 * @var float
	 */
	private $totalAmount;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\Transaction
	 */
	private $transaction;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['configuration'])) {
			$this->setConfiguration($data['configuration']);
		}
		if (isset($data['paymentMethodConfigurations'])) {
			$this->setPaymentMethodConfigurations($data['paymentMethodConfigurations']);
		}
		if (isset($data['slices'])) {
			$this->setSlices($data['slices']);
		}
		if (isset($data['transaction'])) {
			$this->setTransaction($data['transaction']);
		}
	}


	/**
	 * Returns configuration.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\InstallmentPlanConfiguration
	 */
	public function getConfiguration() {
		return $this->configuration;
	}

	/**
	 * Sets configuration.
	 *
	 * @param \Wallee\Sdk\Model\InstallmentPlanConfiguration $configuration
	 * @return InstallmentCalculatedPlan
	 */
	public function setConfiguration($configuration) {
		$this->configuration = $configuration;

		return $this;
	}

	/**
	 * Returns paymentMethodConfigurations.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\PaymentMethodConfiguration[]
	 */
	public function getPaymentMethodConfigurations() {
		return $this->paymentMethodConfigurations;
	}

	/**
	 * Sets paymentMethodConfigurations.
	 *
	 * @param \Wallee\Sdk\Model\PaymentMethodConfiguration[] $paymentMethodConfigurations
	 * @return InstallmentCalculatedPlan
	 */
	public function setPaymentMethodConfigurations($paymentMethodConfigurations) {
		$this->paymentMethodConfigurations = $paymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns slices.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\InstallmentCalculatedSlice[]
	 */
	public function getSlices() {
		return $this->slices;
	}

	/**
	 * Sets slices.
	 *
	 * @param \Wallee\Sdk\Model\InstallmentCalculatedSlice[] $slices
	 * @return InstallmentCalculatedPlan
	 */
	public function setSlices($slices) {
		$this->slices = $slices;

		return $this;
	}

	/**
	 * Returns totalAmount.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getTotalAmount() {
		return $this->totalAmount;
	}

	/**
	 * Sets totalAmount.
	 *
	 * @param float $totalAmount
	 * @return InstallmentCalculatedPlan
	 */
	protected function setTotalAmount($totalAmount) {
		$this->totalAmount = $totalAmount;

		return $this;
	}

	/**
	 * Returns transaction.
	 *
	 * 
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
	 * @return InstallmentCalculatedPlan
	 */
	public function setTransaction($transaction) {
		$this->transaction = $transaction;

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

