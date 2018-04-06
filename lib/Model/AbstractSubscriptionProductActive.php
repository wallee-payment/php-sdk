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
 * AbstractSubscriptionProductActive model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractSubscriptionProductActive  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Abstract.SubscriptionProduct.Active';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'allowedPaymentMethodConfigurations' => 'int[]',
		'failedPaymentSuspensionPeriod' => 'string',
		'name' => 'string',
		'sortOrder' => 'int',
		'state' => '\Wallee\Sdk\Model\SubscriptionProductState'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The allowed payment method configurations control which payment methods can be used with this product. When none is selected all methods will be allowed.
	 *
	 * @var int[]
	 */
	private $allowedPaymentMethodConfigurations;

	/**
	 * When a payment fails, the subscription to which the payment belongs to will be suspended. When the suspension is not removed within the specified period the subscription will be terminated. A payment is considered as failed when the subscriber issues a refund or when a subscription charge fails.
	 *
	 * @var string
	 */
	private $failedPaymentSuspensionPeriod;

	/**
	 * The product name is used internally to identify the configuration in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * The sort order controls in which order the product is listed. The sort order is used to order the products in ascending order.
	 *
	 * @var int
	 */
	private $sortOrder;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionProductState
	 */
	private $state;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['allowedPaymentMethodConfigurations'])) {
			$this->setAllowedPaymentMethodConfigurations($data['allowedPaymentMethodConfigurations']);
		}
		if (isset($data['failedPaymentSuspensionPeriod'])) {
			$this->setFailedPaymentSuspensionPeriod($data['failedPaymentSuspensionPeriod']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['sortOrder'])) {
			$this->setSortOrder($data['sortOrder']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
	}


	/**
	 * Returns allowedPaymentMethodConfigurations.
	 *
	 * The allowed payment method configurations control which payment methods can be used with this product. When none is selected all methods will be allowed.
	 *
	 * @return int[]
	 */
	public function getAllowedPaymentMethodConfigurations() {
		return $this->allowedPaymentMethodConfigurations;
	}

	/**
	 * Sets allowedPaymentMethodConfigurations.
	 *
	 * @param int[] $allowedPaymentMethodConfigurations
	 * @return AbstractSubscriptionProductActive
	 */
	public function setAllowedPaymentMethodConfigurations($allowedPaymentMethodConfigurations) {
		$this->allowedPaymentMethodConfigurations = $allowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns failedPaymentSuspensionPeriod.
	 *
	 * When a payment fails, the subscription to which the payment belongs to will be suspended. When the suspension is not removed within the specified period the subscription will be terminated. A payment is considered as failed when the subscriber issues a refund or when a subscription charge fails.
	 *
	 * @return string
	 */
	public function getFailedPaymentSuspensionPeriod() {
		return $this->failedPaymentSuspensionPeriod;
	}

	/**
	 * Sets failedPaymentSuspensionPeriod.
	 *
	 * @param string $failedPaymentSuspensionPeriod
	 * @return AbstractSubscriptionProductActive
	 */
	public function setFailedPaymentSuspensionPeriod($failedPaymentSuspensionPeriod) {
		$this->failedPaymentSuspensionPeriod = $failedPaymentSuspensionPeriod;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The product name is used internally to identify the configuration in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
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
	 * @return AbstractSubscriptionProductActive
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns sortOrder.
	 *
	 * The sort order controls in which order the product is listed. The sort order is used to order the products in ascending order.
	 *
	 * @return int
	 */
	public function getSortOrder() {
		return $this->sortOrder;
	}

	/**
	 * Sets sortOrder.
	 *
	 * @param int $sortOrder
	 * @return AbstractSubscriptionProductActive
	 */
	public function setSortOrder($sortOrder) {
		$this->sortOrder = $sortOrder;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductState $state
	 * @return AbstractSubscriptionProductActive
	 */
	public function setState($state) {
		$this->state = $state;

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

