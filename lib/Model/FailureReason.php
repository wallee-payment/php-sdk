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
 * FailureReason model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class FailureReason  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'FailureReason';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'category' => 'string',
		'description' => 'map[string,string]',
		'features' => 'int[]',
		'id' => 'int',
		'name' => 'map[string,string]'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	
	/**
	 * Values of category.
	 */
	const CATEGORY_TEMPORARY_ISSUE = 'TEMPORARY_ISSUE';
	const CATEGORY_INTERNAL = 'INTERNAL';
	const CATEGORY_END_USER = 'END_USER';
	const CATEGORY_CONFIGURATION = 'CONFIGURATION';
	const CATEGORY_DEVELOPER = 'DEVELOPER';
	
	/**
	 * Returns allowable values of category.
	 *
	 * @return string[]
	 */
	public function getCategoryAllowableValues() {
		return array(
			self::CATEGORY_TEMPORARY_ISSUE,
			self::CATEGORY_INTERNAL,
			self::CATEGORY_END_USER,
			self::CATEGORY_CONFIGURATION,
			self::CATEGORY_DEVELOPER,
		);
	}
	

	/**
	 * 
	 *
	 * @var string
	 */
	private $category;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $description;

	/**
	 * @var int[]
	 */
	private $features;

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
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['features']) && $data['features'] != null) {
			$this->setFeatures($data['features']);
		}
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
	}


	/**
	 * Returns category.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets category.
	 *
	 * @param string $category
	 * @return FailureReason
	 */
	protected function setCategory($category) {
		$allowed_values = array('TEMPORARY_ISSUE', 'INTERNAL', 'END_USER', 'CONFIGURATION', 'DEVELOPER');
		if (!is_null($category) && (!in_array($category, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'category', must be one of 'TEMPORARY_ISSUE', 'INTERNAL', 'END_USER', 'CONFIGURATION', 'DEVELOPER'");
		}
		$this->category = $category;

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
	 * @return FailureReason
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns features.
	 *
	 * @return int[]
	 */
	public function getFeatures() {
		return $this->features;
	}

	/**
	 * Sets features.
	 *
	 * @param int[] $features
	 * @return FailureReason
	 */
	public function setFeatures($features) {
		$this->features = $features;

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
	 * @return FailureReason
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
	 * @return FailureReason
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		$allowed_values = array("TEMPORARY_ISSUE", "INTERNAL", "END_USER", "CONFIGURATION", "DEVELOPER");
		if (!in_array($this->getCategory(), $allowed_values)) {
			throw new ValidationException("invalid value for 'category', must be one of #{allowed_values}.", 'category', $this);
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

