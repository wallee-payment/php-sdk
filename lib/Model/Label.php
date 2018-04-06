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
 * Label model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class Label  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Label';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'content' => 'object',
		'contentAsString' => 'string',
		'descriptor' => '\Wallee\Sdk\Model\LabelDescriptor',
		'id' => 'int',
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
	 * @var object
	 */
	private $content;

	/**
	 * 
	 *
	 * @var string
	 */
	private $contentAsString;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LabelDescriptor
	 */
	private $descriptor;

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
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['content'])) {
			$this->setContent($data['content']);
		}
		if (isset($data['descriptor'])) {
			$this->setDescriptor($data['descriptor']);
		}
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns content.
	 *
	 * 
	 *
	 * @return object
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * Sets content.
	 *
	 * @param object $content
	 * @return Label
	 */
	public function setContent($content) {
		$this->content = $content;

		return $this;
	}

	/**
	 * Returns contentAsString.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getContentAsString() {
		return $this->contentAsString;
	}

	/**
	 * Sets contentAsString.
	 *
	 * @param string $contentAsString
	 * @return Label
	 */
	protected function setContentAsString($contentAsString) {
		$this->contentAsString = $contentAsString;

		return $this;
	}

	/**
	 * Returns descriptor.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LabelDescriptor
	 */
	public function getDescriptor() {
		return $this->descriptor;
	}

	/**
	 * Sets descriptor.
	 *
	 * @param \Wallee\Sdk\Model\LabelDescriptor $descriptor
	 * @return Label
	 */
	public function setDescriptor($descriptor) {
		$this->descriptor = $descriptor;

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
	 * @return Label
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
	 * @return Label
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

