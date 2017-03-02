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
 * HumanUserUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class HumanUserUpdate extends HumanUser  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'HumanUser.Update';

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

		if (isset($data['emailAddress']) && $data['emailAddress'] != null) {
			$this->setEmailAddress($data['emailAddress']);
		}
		if (isset($data['firstname']) && $data['firstname'] != null) {
			$this->setFirstname($data['firstname']);
		}
		if (isset($data['language']) && $data['language'] != null) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['lastname']) && $data['lastname'] != null) {
			$this->setLastname($data['lastname']);
		}
		if (isset($data['timeZone']) && $data['timeZone'] != null) {
			$this->setTimeZone($data['timeZone']);
		}
	}


	/**
	 * Returns emailAddress.
	 *
	 * The email address of the user.
	 *
	 * @return string
	 */
	public function getEmailAddress() {
		return parent::getEmailAddress();
	}

	/**
	 * Sets emailAddress.
	 *
	 * @param string $emailAddress
	 * @return HumanUserUpdate
	 */
	public function setEmailAddress($emailAddress) {
		return parent::setEmailAddress($emailAddress);
	}

	/**
	 * Returns firstname.
	 *
	 * The first name of the user.
	 *
	 * @return string
	 */
	public function getFirstname() {
		return parent::getFirstname();
	}

	/**
	 * Sets firstname.
	 *
	 * @param string $firstname
	 * @return HumanUserUpdate
	 */
	public function setFirstname($firstname) {
		return parent::setFirstname($firstname);
	}

	/**
	 * Returns language.
	 *
	 * The preferred language of the user.
	 *
	 * @return string
	 */
	public function getLanguage() {
		return parent::getLanguage();
	}

	/**
	 * Sets language.
	 *
	 * @param string $language
	 * @return HumanUserUpdate
	 */
	public function setLanguage($language) {
		return parent::setLanguage($language);
	}

	/**
	 * Returns lastname.
	 *
	 * The last name of the user.
	 *
	 * @return string
	 */
	public function getLastname() {
		return parent::getLastname();
	}

	/**
	 * Sets lastname.
	 *
	 * @param string $lastname
	 * @return HumanUserUpdate
	 */
	public function setLastname($lastname) {
		return parent::setLastname($lastname);
	}

	/**
	 * Returns timeZone.
	 *
	 * The time zone which is applied for the user. If no timezone is specified the browser is used to determine an appropriate time zone.
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
	 * @return HumanUserUpdate
	 */
	public function setTimeZone($timeZone) {
		return parent::setTimeZone($timeZone);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getEmailAddress() === null) {
			throw new ValidationException("'emailAddress' can't be null", 'emailAddress', $this);
		}
		if ($this->getFirstname() === null) {
			throw new ValidationException("'firstname' can't be null", 'firstname', $this);
		}
		if ($this->getLanguage() === null) {
			throw new ValidationException("'language' can't be null", 'language', $this);
		}
		if ($this->getLastname() === null) {
			throw new ValidationException("'lastname' can't be null", 'lastname', $this);
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

