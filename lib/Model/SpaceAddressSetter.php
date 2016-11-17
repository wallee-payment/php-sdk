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
 * SpaceAddressSetter model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SpaceAddressSetter extends SpaceAddress  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'SpaceAddress.Setter';

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

        $this->setCity(isset($data['city']) ? $data['city'] : null);
        $this->setCountry(isset($data['country']) ? $data['country'] : null);
        $this->setDependentLocality(isset($data['dependentLocality']) ? $data['dependentLocality'] : null);
        $this->setEmailAddress(isset($data['emailAddress']) ? $data['emailAddress'] : null);
        $this->setFamilyName(isset($data['familyName']) ? $data['familyName'] : null);
        $this->setGivenName(isset($data['givenName']) ? $data['givenName'] : null);
        $this->setOrganizationName(isset($data['organizationName']) ? $data['organizationName'] : null);
        $this->setPostCode(isset($data['postCode']) ? $data['postCode'] : null);
        $this->setPostalState(isset($data['postalState']) ? $data['postalState'] : null);
        $this->setSalesTaxNumber(isset($data['salesTaxNumber']) ? $data['salesTaxNumber'] : null);
        $this->setSalutation(isset($data['salutation']) ? $data['salutation'] : null);
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
     * @return SpaceAddressSetter
     */
    public function setCity($city) {
        return parent::setCity($city);
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
     * @return SpaceAddressSetter
     */
    public function setCountry($country) {
        return parent::setCountry($country);
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
     * @return SpaceAddressSetter
     */
    public function setDependentLocality($dependentLocality) {
        return parent::setDependentLocality($dependentLocality);
    }

    /**
     * Returns emailAddress.
     *
     * The e-mail address is used within e-mails and as reply to address.
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
     * @return SpaceAddressSetter
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
     * @return SpaceAddressSetter
     */
    public function setFamilyName($familyName) {
        return parent::setFamilyName($familyName);
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
     * @return SpaceAddressSetter
     */
    public function setGivenName($givenName) {
        return parent::setGivenName($givenName);
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
     * @return SpaceAddressSetter
     */
    public function setOrganizationName($organizationName) {
        return parent::setOrganizationName($organizationName);
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
     * @return SpaceAddressSetter
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
     * @return SpaceAddressSetter
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
     * @return SpaceAddressSetter
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
     * @return SpaceAddressSetter
     */
    public function setSalutation($salutation) {
        return parent::setSalutation($salutation);
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
     * @return SpaceAddressSetter
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
     * @return SpaceAddressSetter
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
