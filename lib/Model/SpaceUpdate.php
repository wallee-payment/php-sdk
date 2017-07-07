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
 * SpaceUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SpaceUpdate extends Space  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Space.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['postalAddress']) && $data['postalAddress'] != null) {
			$this->setPostalAddress($data['postalAddress']);
		}
		if (isset($data['requestLimit']) && $data['requestLimit'] != null) {
			$this->setRequestLimit($data['requestLimit']);
		}
		if (isset($data['technicalContactAddresses']) && $data['technicalContactAddresses'] != null) {
			$this->setTechnicalContactAddresses($data['technicalContactAddresses']);
		}
		if (isset($data['timeZone']) && $data['timeZone'] != null) {
			$this->setTimeZone($data['timeZone']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns name.
	 *
	 * The space name is used internally to identify the space in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @return string
	 */
	public function getName() {
		return parent::getName();
	}

	/**
	 * Sets name.
	 *
	 * @param string $name
	 * @return SpaceUpdate
	 */
	public function setName($name) {
		return parent::setName($name);
	}

	/**
	 * Returns postalAddress.
	 *
	 * The address to use in communication with clients for example in email, documents etc.
	 *
	 * @return \Wallee\Sdk\Model\SpaceAddressSetter
	 */
	public function getPostalAddress() {
		return parent::getPostalAddress();
	}

	/**
	 * Sets postalAddress.
	 *
	 * @param \Wallee\Sdk\Model\SpaceAddressSetter $postalAddress
	 * @return SpaceUpdate
	 */
	public function setPostalAddress($postalAddress) {
		return parent::setPostalAddress($postalAddress);
	}

	/**
	 * Returns requestLimit.
	 *
	 * The request limit defines the maximum number of API request accepted within 2 minutes per cluster node. This limit can only be changed with special privileges.
	 *
	 * @return int
	 */
	public function getRequestLimit() {
		return parent::getRequestLimit();
	}

	/**
	 * Sets requestLimit.
	 *
	 * @param int $requestLimit
	 * @return SpaceUpdate
	 */
	public function setRequestLimit($requestLimit) {
		return parent::setRequestLimit($requestLimit);
	}

	/**
	 * Returns technicalContactAddresses.
	 *
	 * The email address provided as contact addresses will be informed about technical issues or errors triggered by the space.
	 *
	 * @return string[]
	 */
	public function getTechnicalContactAddresses() {
		return parent::getTechnicalContactAddresses();
	}

	/**
	 * Sets technicalContactAddresses.
	 *
	 * @param string[] $technicalContactAddresses
	 * @return SpaceUpdate
	 */
	public function setTechnicalContactAddresses($technicalContactAddresses) {
		return parent::setTechnicalContactAddresses($technicalContactAddresses);
	}

	/**
	 * Returns timeZone.
	 *
	 * The time zone assigned to the space determines the time offset for calculating dates within the space. This is typically used for background processed which needs to be triggered on a specific hour within the day. Changing the space time zone will not change the display of dates.
	 *
	 * @return string
	 */
	public function getTimeZone() {
		return parent::getTimeZone();
	}

	/**
	 * Sets timeZone.
	 *
	 * @param string $timeZone
	 * @return SpaceUpdate
	 */
	public function setTimeZone($timeZone) {
		return parent::setTimeZone($timeZone);
	}

	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return parent::getId();
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return SpaceUpdate
	 */
	public function setId($id) {
		return parent::setId($id);
	}

	/**
	 * Returns version.
	 *
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @return int
	 */
	public function getVersion() {
		return parent::getVersion();
	}

	/**
	 * Sets version.
	 *
	 * @param int $version
	 * @return SpaceUpdate
	 */
	public function setVersion($version) {
		return parent::setVersion($version);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

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

