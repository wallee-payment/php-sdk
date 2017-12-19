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
 * SubscriptionProductComponentGroupUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductComponentGroupUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductComponentGroup.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'id' => 'int',
		'version' => 'int',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedStringCreate',
		'optional' => 'bool',
		'productVersion' => 'int',
		'sortOrder' => 'int'	);

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
	 * The component group name will be shown when the components are selected. This can be visible to the subscriber.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	private $name;

	/**
	 * The component group can be optional. This means no component has to be selected by the subscriber.
	 *
	 * @var bool
	 */
	private $optional;

	/**
	 * 
	 *
	 * @var int
	 */
	private $productVersion;

	/**
	 * The sort order controls in which order the component group is listed. The sort order is used to order the component groups in ascending order.
	 *
	 * @var int
	 */
	private $sortOrder;


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
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['optional'])) {
			$this->setOptional($data['optional']);
		}
		if (isset($data['productVersion'])) {
			$this->setProductVersion($data['productVersion']);
		}
		if (isset($data['sortOrder'])) {
			$this->setSortOrder($data['sortOrder']);
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
	 * @return SubscriptionProductComponentGroupUpdate
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
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The component group name will be shown when the components are selected. This can be visible to the subscriber.
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
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns optional.
	 *
	 * The component group can be optional. This means no component has to be selected by the subscriber.
	 *
	 * @return bool
	 */
	public function getOptional() {
		return $this->optional;
	}

	/**
	 * Sets optional.
	 *
	 * @param bool $optional
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setOptional($optional) {
		$this->optional = $optional;

		return $this;
	}

	/**
	 * Returns productVersion.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getProductVersion() {
		return $this->productVersion;
	}

	/**
	 * Sets productVersion.
	 *
	 * @param int $productVersion
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setProductVersion($productVersion) {
		$this->productVersion = $productVersion;

		return $this;
	}

	/**
	 * Returns sortOrder.
	 *
	 * The sort order controls in which order the component group is listed. The sort order is used to order the component groups in ascending order.
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
	 * @return SubscriptionProductComponentGroupUpdate
	 */
	public function setSortOrder($sortOrder) {
		$this->sortOrder = $sortOrder;

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

