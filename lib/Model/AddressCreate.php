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
 * AddressCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class AddressCreate extends Address  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Address.Create';

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
	 * Values of gender.
	 */
	const GENDER_MALE = 'MALE';
	const GENDER_FEMALE = 'FEMALE';
	
	/**
	 * Returns allowable values of gender.
	 *
	 * @return string[]
	 */
	public function getGenderAllowableValues() {
		return [
			self::GENDER_MALE,
			self::GENDER_FEMALE,
		];
	}
	


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		$this->setCity(isset($data['city']) ? $data['city'] : null);
		$this->setCommercialRegisterNumber(isset($data['commercialRegisterNumber']) ? $data['commercialRegisterNumber'] : null);
		$this->setCountry(isset($data['country']) ? $data['country'] : null);
		$this->setDateOfBirth(isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null);
		$this->setDependentLocality(isset($data['dependentLocality']) ? $data['dependentLocality'] : null);
		$this->setEmailAddress(isset($data['emailAddress']) ? $data['emailAddress'] : null);
		$this->setFamilyName(isset($data['familyName']) ? $data['familyName'] : null);
		$this->setGender(isset($data['gender']) ? $data['gender'] : null);
		$this->setGivenName(isset($data['givenName']) ? $data['givenName'] : null);
		$this->setLegalOrganizationForm(isset($data['legalOrganizationForm']) ? $data['legalOrganizationForm'] : null);
		$this->setMobilePhoneNumber(isset($data['mobilePhoneNumber']) ? $data['mobilePhoneNumber'] : null);
		$this->setOrganizationName(isset($data['organizationName']) ? $data['organizationName'] : null);
		$this->setPhoneNumber(isset($data['phoneNumber']) ? $data['phoneNumber'] : null);
		$this->setPostCode(isset($data['postCode']) ? $data['postCode'] : null);
		$this->setPostalState(isset($data['postalState']) ? $data['postalState'] : null);
		$this->setSalesTaxNumber(isset($data['salesTaxNumber']) ? $data['salesTaxNumber'] : null);
		$this->setSalutation(isset($data['salutation']) ? $data['salutation'] : null);
		$this->setSocialSecurityNumber(isset($data['socialSecurityNumber']) ? $data['socialSecurityNumber'] : null);
		$this->setSortingCode(isset($data['sortingCode']) ? $data['sortingCode'] : null);
		$this->setStreet(isset($data['street']) ? $data['street'] : null);
	}


	/**
	 * Returns city.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCity() {
		return parent::getCity();
	}

	/**
	 * Sets city.
	 *
	 * @param string $city
	 * @return AddressCreate
	 */
	public function setCity($city) {
		return parent::setCity($city);
	}

	/**
	 * Returns commercialRegisterNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCommercialRegisterNumber() {
		return parent::getCommercialRegisterNumber();
	}

	/**
	 * Sets commercialRegisterNumber.
	 *
	 * @param string $commercialRegisterNumber
	 * @return AddressCreate
	 */
	public function setCommercialRegisterNumber($commercialRegisterNumber) {
		return parent::setCommercialRegisterNumber($commercialRegisterNumber);
	}

	/**
	 * Returns country.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCountry() {
		return parent::getCountry();
	}

	/**
	 * Sets country.
	 *
	 * @param string $country
	 * @return AddressCreate
	 */
	public function setCountry($country) {
		return parent::setCountry($country);
	}

	/**
	 * Returns dateOfBirth.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getDateOfBirth() {
		return parent::getDateOfBirth();
	}

	/**
	 * Sets dateOfBirth.
	 *
	 * @param string $dateOfBirth
	 * @return AddressCreate
	 */
	public function setDateOfBirth($dateOfBirth) {
		return parent::setDateOfBirth($dateOfBirth);
	}

	/**
	 * Returns dependentLocality.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getDependentLocality() {
		return parent::getDependentLocality();
	}

	/**
	 * Sets dependentLocality.
	 *
	 * @param string $dependentLocality
	 * @return AddressCreate
	 */
	public function setDependentLocality($dependentLocality) {
		return parent::setDependentLocality($dependentLocality);
	}

	/**
	 * Returns emailAddress.
	 *
	 * 
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
	 * @return AddressCreate
	 */
	public function setEmailAddress($emailAddress) {
		return parent::setEmailAddress($emailAddress);
	}

	/**
	 * Returns familyName.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getFamilyName() {
		return parent::getFamilyName();
	}

	/**
	 * Sets familyName.
	 *
	 * @param string $familyName
	 * @return AddressCreate
	 */
	public function setFamilyName($familyName) {
		return parent::setFamilyName($familyName);
	}

	/**
	 * Returns gender.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getGender() {
		return parent::getGender();
	}

	/**
	 * Sets gender.
	 *
	 * @param string $gender
	 * @return AddressCreate
	 */
	public function setGender($gender) {
		$allowed_values = array('MALE', 'FEMALE');
		if (!is_null($gender) && (!in_array($gender, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'gender', must be one of 'MALE', 'FEMALE'");
		}
		return parent::setGender($gender);
	}

	/**
	 * Returns givenName.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getGivenName() {
		return parent::getGivenName();
	}

	/**
	 * Sets givenName.
	 *
	 * @param string $givenName
	 * @return AddressCreate
	 */
	public function setGivenName($givenName) {
		return parent::setGivenName($givenName);
	}

	/**
	 * Returns legalOrganizationForm.
	 *
	 * @return \Wallee\Sdk\Model\LegalOrganizationForm
	 */
	public function getLegalOrganizationForm() {
		return parent::getLegalOrganizationForm();
	}

	/**
	 * Sets legalOrganizationForm.
	 *
	 * @param \Wallee\Sdk\Model\LegalOrganizationForm $legalOrganizationForm
	 * @return AddressCreate
	 */
	public function setLegalOrganizationForm($legalOrganizationForm) {
		return parent::setLegalOrganizationForm($legalOrganizationForm);
	}

	/**
	 * Returns mobilePhoneNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMobilePhoneNumber() {
		return parent::getMobilePhoneNumber();
	}

	/**
	 * Sets mobilePhoneNumber.
	 *
	 * @param string $mobilePhoneNumber
	 * @return AddressCreate
	 */
	public function setMobilePhoneNumber($mobilePhoneNumber) {
		return parent::setMobilePhoneNumber($mobilePhoneNumber);
	}

	/**
	 * Returns organizationName.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getOrganizationName() {
		return parent::getOrganizationName();
	}

	/**
	 * Sets organizationName.
	 *
	 * @param string $organizationName
	 * @return AddressCreate
	 */
	public function setOrganizationName($organizationName) {
		return parent::setOrganizationName($organizationName);
	}

	/**
	 * Returns phoneNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPhoneNumber() {
		return parent::getPhoneNumber();
	}

	/**
	 * Sets phoneNumber.
	 *
	 * @param string $phoneNumber
	 * @return AddressCreate
	 */
	public function setPhoneNumber($phoneNumber) {
		return parent::setPhoneNumber($phoneNumber);
	}

	/**
	 * Returns postCode.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPostCode() {
		return parent::getPostCode();
	}

	/**
	 * Sets postCode.
	 *
	 * @param string $postCode
	 * @return AddressCreate
	 */
	public function setPostCode($postCode) {
		return parent::setPostCode($postCode);
	}

	/**
	 * Returns postalState.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPostalState() {
		return parent::getPostalState();
	}

	/**
	 * Sets postalState.
	 *
	 * @param string $postalState
	 * @return AddressCreate
	 */
	public function setPostalState($postalState) {
		return parent::setPostalState($postalState);
	}

	/**
	 * Returns salesTaxNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSalesTaxNumber() {
		return parent::getSalesTaxNumber();
	}

	/**
	 * Sets salesTaxNumber.
	 *
	 * @param string $salesTaxNumber
	 * @return AddressCreate
	 */
	public function setSalesTaxNumber($salesTaxNumber) {
		return parent::setSalesTaxNumber($salesTaxNumber);
	}

	/**
	 * Returns salutation.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSalutation() {
		return parent::getSalutation();
	}

	/**
	 * Sets salutation.
	 *
	 * @param string $salutation
	 * @return AddressCreate
	 */
	public function setSalutation($salutation) {
		return parent::setSalutation($salutation);
	}

	/**
	 * Returns socialSecurityNumber.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getSocialSecurityNumber() {
		return parent::getSocialSecurityNumber();
	}

	/**
	 * Sets socialSecurityNumber.
	 *
	 * @param string $socialSecurityNumber
	 * @return AddressCreate
	 */
	public function setSocialSecurityNumber($socialSecurityNumber) {
		return parent::setSocialSecurityNumber($socialSecurityNumber);
	}

	/**
	 * Returns sortingCode.
	 *
	 * The sorting code identifies the post office at which the post box is located in.
	 *
	 * @return string
	 */
	public function getSortingCode() {
		return parent::getSortingCode();
	}

	/**
	 * Sets sortingCode.
	 *
	 * @param string $sortingCode
	 * @return AddressCreate
	 */
	public function setSortingCode($sortingCode) {
		return parent::setSortingCode($sortingCode);
	}

	/**
	 * Returns street.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getStreet() {
		return parent::getStreet();
	}

	/**
	 * Sets street.
	 *
	 * @param string $street
	 * @return AddressCreate
	 */
	public function setStreet($street) {
		return parent::setStreet($street);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getCountry() === null) {
			throw new ValidationException("'country' can't be null", 'country', $this);
		}
		$allowed_values = ["MALE", "FEMALE"];
		if (!in_array($this->getGender(), $allowed_values)) {
			throw new ValidationException("invalid value for 'gender', must be one of #{allowed_values}.", 'gender', $this);
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
