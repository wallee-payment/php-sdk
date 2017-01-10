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
 * HumanUser model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class HumanUser extends User  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'HumanUser';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'emailAddress' => 'string',
		'emailAddressVerified' => 'bool',
		'firstname' => 'string',
		'language' => 'string',
		'lastname' => 'string',
		'primaryAccount' => '\Wallee\Sdk\Model\Account',
		'timeZone' => 'string'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes + parent::swaggerTypes();
	}

	

	/**
	 * The e-mail address of the user.
	 *
	 * @var string
	 */
	private $emailAddress;

	/**
	 * Defines whether a user is verified or not.
	 *
	 * @var bool
	 */
	private $emailAddressVerified;

	/**
	 * The first name of the user.
	 *
	 * @var string
	 */
	private $firstname;

	/**
	 * The preferred language of the user.
	 *
	 * @var string
	 */
	private $language;

	/**
	 * The last name of the user.
	 *
	 * @var string
	 */
	private $lastname;

	/**
	 * @var \Wallee\Sdk\Model\Account
	 */
	private $primaryAccount;

	/**
	 * The time zone which is applied for the user. If no timezone is specified the browser is used to determine an appropriate time zone.
	 *
	 * @var string
	 */
	private $timeZone;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		if (isset($data['primaryAccount']) && $data['primaryAccount'] != null) {
			$this->setPrimaryAccount($data['primaryAccount']);
		}
		if (isset($data['scope']) && $data['scope'] != null) {
			$this->setScope($data['scope']);
		}
	}


	/**
	 * Returns emailAddress.
	 *
	 * The e-mail address of the user.
	 *
	 * @return string
	 */
	public function getEmailAddress() {
		return $this->emailAddress;
	}

	/**
	 * Sets emailAddress.
	 *
	 * @param string $emailAddress
	 * @return HumanUser
	 */
	protected function setEmailAddress($emailAddress) {
		$this->emailAddress = $emailAddress;

		return $this;
	}

	/**
	 * Returns emailAddressVerified.
	 *
	 * Defines whether a user is verified or not.
	 *
	 * @return bool
	 */
	public function getEmailAddressVerified() {
		return $this->emailAddressVerified;
	}

	/**
	 * Sets emailAddressVerified.
	 *
	 * @param bool $emailAddressVerified
	 * @return HumanUser
	 */
	protected function setEmailAddressVerified($emailAddressVerified) {
		$this->emailAddressVerified = $emailAddressVerified;

		return $this;
	}

	/**
	 * Returns firstname.
	 *
	 * The first name of the user.
	 *
	 * @return string
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets firstname.
	 *
	 * @param string $firstname
	 * @return HumanUser
	 */
	protected function setFirstname($firstname) {
		$this->firstname = $firstname;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * The preferred language of the user.
	 *
	 * @return string
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets language.
	 *
	 * @param string $language
	 * @return HumanUser
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lastname.
	 *
	 * The last name of the user.
	 *
	 * @return string
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets lastname.
	 *
	 * @param string $lastname
	 * @return HumanUser
	 */
	protected function setLastname($lastname) {
		$this->lastname = $lastname;

		return $this;
	}

	/**
	 * Returns primaryAccount.
	 *
	 * @return \Wallee\Sdk\Model\Account
	 */
	public function getPrimaryAccount() {
		return $this->primaryAccount;
	}

	/**
	 * Sets primaryAccount.
	 *
	 * @param \Wallee\Sdk\Model\Account $primaryAccount
	 * @return HumanUser
	 */
	public function setPrimaryAccount($primaryAccount) {
		$this->primaryAccount = $primaryAccount;

		return $this;
	}

	/**
	 * Returns scope.
	 *
	 * @return \Wallee\Sdk\Model\Scope
	 */
	public function getScope() {
		return parent::getScope();
	}

	/**
	 * Sets scope.
	 *
	 * @param \Wallee\Sdk\Model\Scope $scope
	 * @return HumanUser
	 */
	public function setScope($scope) {
		return parent::setScope($scope);
	}

	/**
	 * Returns timeZone.
	 *
	 * The time zone which is applied for the user. If no timezone is specified the browser is used to determine an appropriate time zone.
	 *
	 * @return string
	 */
	public function getTimeZone() {
		return $this->timeZone;
	}

	/**
	 * Sets timeZone.
	 *
	 * @param string $timeZone
	 * @return HumanUser
	 */
	protected function setTimeZone($timeZone) {
		$this->timeZone = $timeZone;

		return $this;
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

