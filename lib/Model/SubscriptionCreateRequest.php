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
 * SubscriptionCreateRequest model
 *
 * @category    Class
 * @description The subscription create request holds all the data required to create a new subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionCreateRequest  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionCreateRequest';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'currency' => 'string',
		'product' => 'int',
		'selectedComponents' => '\Wallee\Sdk\Model\SubscriptionProductComponentReference[]',
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
	 * 
	 *
	 * @var string
	 */
	private $currency;

	/**
	 * The subscription has to be linked with a product.
	 *
	 * @var int
	 */
	private $product;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionProductComponentReference[]
	 */
	private $selectedComponents;

	/**
	 * 
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
		if (isset($data['currency'])) {
			$this->setCurrency($data['currency']);
		}
		if (isset($data['product'])) {
			$this->setProduct($data['product']);
		}
		if (isset($data['selectedComponents'])) {
			$this->setSelectedComponents($data['selectedComponents']);
		}
		if (isset($data['subscription'])) {
			$this->setSubscription($data['subscription']);
		}
	}


	/**
	 * Returns currency.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Sets currency.
	 *
	 * @param string $currency
	 * @return SubscriptionCreateRequest
	 */
	public function setCurrency($currency) {
		$this->currency = $currency;

		return $this;
	}

	/**
	 * Returns product.
	 *
	 * The subscription has to be linked with a product.
	 *
	 * @return int
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * Sets product.
	 *
	 * @param int $product
	 * @return SubscriptionCreateRequest
	 */
	public function setProduct($product) {
		$this->product = $product;

		return $this;
	}

	/**
	 * Returns selectedComponents.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductComponentReference[]
	 */
	public function getSelectedComponents() {
		return $this->selectedComponents;
	}

	/**
	 * Sets selectedComponents.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductComponentReference[] $selectedComponents
	 * @return SubscriptionCreateRequest
	 */
	public function setSelectedComponents($selectedComponents) {
		$this->selectedComponents = $selectedComponents;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * 
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
	 * @return SubscriptionCreateRequest
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

		if ($this->getCurrency() === null) {
			throw new ValidationException("'currency' can't be null", 'currency', $this);
		}
		if ($this->getProduct() === null) {
			throw new ValidationException("'product' can't be null", 'product', $this);
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

