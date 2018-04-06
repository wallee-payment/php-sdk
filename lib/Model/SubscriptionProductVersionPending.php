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
 * SubscriptionProductVersionPending model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionProductVersionPending  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductVersion.Pending';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'id' => 'int',
		'version' => 'int',
		'billingCycle' => 'string',
		'comment' => 'string',
		'defaultCurrency' => 'string',
		'enabledCurrencies' => 'string[]',
		'minimalNumberOfPeriods' => 'int',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedStringCreate',
		'numberOfNoticePeriods' => 'int',
		'product' => 'int',
		'state' => '\Wallee\Sdk\Model\SubscriptionProductVersionState'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;

	/**
	 * The billing cycle determines the rhythm with which the subscriber is billed. The charging may have different rhythm.
	 *
	 * @var string
	 */
	private $billingCycle;

	/**
	 * The comment allows to provide a internal comment for the version. It helps to document why a product was changed. The comment is not disclosed to the subscriber.
	 *
	 * @var string
	 */
	private $comment;

	/**
	 * The default currency has to be used in all fees.
	 *
	 * @var string
	 */
	private $defaultCurrency;

	/**
	 * The currencies which are enabled can be selected to define component fees. Currencies which are not enabled cannot be used to define fees.
	 *
	 * @var string[]
	 */
	private $enabledCurrencies;

	/**
	 * The minimal number of periods determines how long the subscription has to run before the subscription can be terminated.
	 *
	 * @var int
	 */
	private $minimalNumberOfPeriods;

	/**
	 * The product version name is the name of the product which is shown to the user for the version. When the visible product name should be changed for a particular product a new version has to be created which contains the new name of the product.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	private $name;

	/**
	 * The number of notice periods determines the number of periods which need to be paid between the request to terminate the subscription and the final period.
	 *
	 * @var int
	 */
	private $numberOfNoticePeriods;

	/**
	 * Each product version is linked to a product.
	 *
	 * @var int
	 */
	private $product;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionProductVersionState
	 */
	private $state;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
		if (isset($data['billingCycle'])) {
			$this->setBillingCycle($data['billingCycle']);
		}
		if (isset($data['comment'])) {
			$this->setComment($data['comment']);
		}
		if (isset($data['defaultCurrency'])) {
			$this->setDefaultCurrency($data['defaultCurrency']);
		}
		if (isset($data['enabledCurrencies'])) {
			$this->setEnabledCurrencies($data['enabledCurrencies']);
		}
		if (isset($data['minimalNumberOfPeriods'])) {
			$this->setMinimalNumberOfPeriods($data['minimalNumberOfPeriods']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['numberOfNoticePeriods'])) {
			$this->setNumberOfNoticePeriods($data['numberOfNoticePeriods']);
		}
		if (isset($data['product'])) {
			$this->setProduct($data['product']);
		}
		if (isset($data['state'])) {
			$this->setState($data['state']);
		}
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
	 * @return SubscriptionProductVersionPending
	 */
	public function setId($id) {
		$this->id = $id;

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
	 * @return SubscriptionProductVersionPending
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Returns billingCycle.
	 *
	 * The billing cycle determines the rhythm with which the subscriber is billed. The charging may have different rhythm.
	 *
	 * @return string
	 */
	public function getBillingCycle() {
		return $this->billingCycle;
	}

	/**
	 * Sets billingCycle.
	 *
	 * @param string $billingCycle
	 * @return SubscriptionProductVersionPending
	 */
	public function setBillingCycle($billingCycle) {
		$this->billingCycle = $billingCycle;

		return $this;
	}

	/**
	 * Returns comment.
	 *
	 * The comment allows to provide a internal comment for the version. It helps to document why a product was changed. The comment is not disclosed to the subscriber.
	 *
	 * @return string
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Sets comment.
	 *
	 * @param string $comment
	 * @return SubscriptionProductVersionPending
	 */
	public function setComment($comment) {
		$this->comment = $comment;

		return $this;
	}

	/**
	 * Returns defaultCurrency.
	 *
	 * The default currency has to be used in all fees.
	 *
	 * @return string
	 */
	public function getDefaultCurrency() {
		return $this->defaultCurrency;
	}

	/**
	 * Sets defaultCurrency.
	 *
	 * @param string $defaultCurrency
	 * @return SubscriptionProductVersionPending
	 */
	public function setDefaultCurrency($defaultCurrency) {
		$this->defaultCurrency = $defaultCurrency;

		return $this;
	}

	/**
	 * Returns enabledCurrencies.
	 *
	 * The currencies which are enabled can be selected to define component fees. Currencies which are not enabled cannot be used to define fees.
	 *
	 * @return string[]
	 */
	public function getEnabledCurrencies() {
		return $this->enabledCurrencies;
	}

	/**
	 * Sets enabledCurrencies.
	 *
	 * @param string[] $enabledCurrencies
	 * @return SubscriptionProductVersionPending
	 */
	public function setEnabledCurrencies($enabledCurrencies) {
		$this->enabledCurrencies = $enabledCurrencies;

		return $this;
	}

	/**
	 * Returns minimalNumberOfPeriods.
	 *
	 * The minimal number of periods determines how long the subscription has to run before the subscription can be terminated.
	 *
	 * @return int
	 */
	public function getMinimalNumberOfPeriods() {
		return $this->minimalNumberOfPeriods;
	}

	/**
	 * Sets minimalNumberOfPeriods.
	 *
	 * @param int $minimalNumberOfPeriods
	 * @return SubscriptionProductVersionPending
	 */
	public function setMinimalNumberOfPeriods($minimalNumberOfPeriods) {
		$this->minimalNumberOfPeriods = $minimalNumberOfPeriods;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The product version name is the name of the product which is shown to the user for the version. When the visible product name should be changed for a particular product a new version has to be created which contains the new name of the product.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $name
	 * @return SubscriptionProductVersionPending
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns numberOfNoticePeriods.
	 *
	 * The number of notice periods determines the number of periods which need to be paid between the request to terminate the subscription and the final period.
	 *
	 * @return int
	 */
	public function getNumberOfNoticePeriods() {
		return $this->numberOfNoticePeriods;
	}

	/**
	 * Sets numberOfNoticePeriods.
	 *
	 * @param int $numberOfNoticePeriods
	 * @return SubscriptionProductVersionPending
	 */
	public function setNumberOfNoticePeriods($numberOfNoticePeriods) {
		$this->numberOfNoticePeriods = $numberOfNoticePeriods;

		return $this;
	}

	/**
	 * Returns product.
	 *
	 * Each product version is linked to a product.
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
	 * @return SubscriptionProductVersionPending
	 */
	public function setProduct($product) {
		$this->product = $product;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductVersionState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductVersionState $state
	 * @return SubscriptionProductVersionPending
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

		if ($this->getId() === null) {
			throw new ValidationException("'id' can't be null", 'id', $this);
		}
		if ($this->getVersion() === null) {
			throw new ValidationException("'version' can't be null", 'version', $this);
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

