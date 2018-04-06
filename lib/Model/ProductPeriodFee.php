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
 * ProductPeriodFee model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class ProductPeriodFee  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ProductPeriodFee';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'component' => '\Wallee\Sdk\Model\SubscriptionProductComponent',
		'description' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'numberOfFreeTrialPeriods' => 'int',
		'periodFee' => '\Wallee\Sdk\Model\PersistableCurrencyAmount[]',
		'type' => '\Wallee\Sdk\Model\ProductFeeType',
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
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionProductComponent
	 */
	private $component;

	/**
	 * The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $description;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The name of the fee should describe for the subscriber in few words for what the fee is for.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $name;

	/**
	 * The number of free trial periods specify how many periods are free of charge at the begining of the subscription.
	 *
	 * @var int
	 */
	private $numberOfFreeTrialPeriods;

	/**
	 * The period fee is charged for every period of the subscription except for those periods which are trial periods.
	 *
	 * @var \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	private $periodFee;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\ProductFeeType
	 */
	private $type;

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
		if (isset($data['component'])) {
			$this->setComponent($data['component']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['periodFee'])) {
			$this->setPeriodFee($data['periodFee']);
		}
		if (isset($data['type'])) {
			$this->setType($data['type']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns component.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProductComponent
	 */
	public function getComponent() {
		return $this->component;
	}

	/**
	 * Sets component.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProductComponent $component
	 * @return ProductPeriodFee
	 */
	public function setComponent($component) {
		$this->component = $component;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $description
	 * @return ProductPeriodFee
	 */
	public function setDescription($description) {
		$this->description = $description;

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
	 * @return ProductPeriodFee
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * The linked space id holds the ID of the space to which the entity belongs to.
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
	 * @return ProductPeriodFee
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The name of the fee should describe for the subscriber in few words for what the fee is for.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $name
	 * @return ProductPeriodFee
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns numberOfFreeTrialPeriods.
	 *
	 * The number of free trial periods specify how many periods are free of charge at the begining of the subscription.
	 *
	 * @return int
	 */
	public function getNumberOfFreeTrialPeriods() {
		return $this->numberOfFreeTrialPeriods;
	}

	/**
	 * Sets numberOfFreeTrialPeriods.
	 *
	 * @param int $numberOfFreeTrialPeriods
	 * @return ProductPeriodFee
	 */
	protected function setNumberOfFreeTrialPeriods($numberOfFreeTrialPeriods) {
		$this->numberOfFreeTrialPeriods = $numberOfFreeTrialPeriods;

		return $this;
	}

	/**
	 * Returns periodFee.
	 *
	 * The period fee is charged for every period of the subscription except for those periods which are trial periods.
	 *
	 * @return \Wallee\Sdk\Model\PersistableCurrencyAmount[]
	 */
	public function getPeriodFee() {
		return $this->periodFee;
	}

	/**
	 * Sets periodFee.
	 *
	 * @param \Wallee\Sdk\Model\PersistableCurrencyAmount[] $periodFee
	 * @return ProductPeriodFee
	 */
	public function setPeriodFee($periodFee) {
		$this->periodFee = $periodFee;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\ProductFeeType
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param \Wallee\Sdk\Model\ProductFeeType $type
	 * @return ProductPeriodFee
	 */
	public function setType($type) {
		$this->type = $type;

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
	 * @return ProductPeriodFee
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

