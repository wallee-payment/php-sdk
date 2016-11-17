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
 * RestCountry model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class RestCountry  {

    /**
     * The original name of the model.
     *
     * @var string
     */
    private static $swaggerModelName = 'RestCountry';

    /**
     * An array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    private static $swaggerTypes = array(
        'iSOCode2Letter' => 'string',
        'iSOCode3Letter' => 'string',
        'name' => 'string',
        'numericCode' => 'string',
        'stateCodes' => 'string[]'    );

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
     * @var string
     */
    private $iSOCode2Letter;
    
    /**
     * 
     *
     * @var string
     */
    private $iSOCode3Letter;
    
    /**
     * 
     *
     * @var string
     */
    private $name;
    
    /**
     * 
     *
     * @var string
     */
    private $numericCode;
    
    /**
     * 
     *
     * @var string[]
     */
    private $stateCodes;
    

    /**
     * Constructor.
     *
     * @param mixed[] $data an associated array of property values initializing the model
     */
    public function __construct(array $data = null) {
        $this->setStateCodes(isset($data['stateCodes']) ? $data['stateCodes'] : null);
    }


    /**
     * Returns iSOCode2Letter.
     *
     * 
     *
     * @return string
     */
    public function getISOCode2Letter() {
        return $this->iSOCode2Letter;
    }

    /**
     * Sets iSOCode2Letter.
     *
     * @param string $iSOCode2Letter
     * @return RestCountry
     */
    protected function setISOCode2Letter($iSOCode2Letter) {
        $this->iSOCode2Letter = $iSOCode2Letter;

        return $this;
    }

    /**
     * Returns iSOCode3Letter.
     *
     * 
     *
     * @return string
     */
    public function getISOCode3Letter() {
        return $this->iSOCode3Letter;
    }

    /**
     * Sets iSOCode3Letter.
     *
     * @param string $iSOCode3Letter
     * @return RestCountry
     */
    protected function setISOCode3Letter($iSOCode3Letter) {
        $this->iSOCode3Letter = $iSOCode3Letter;

        return $this;
    }

    /**
     * Returns name.
     *
     * 
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string $name
     * @return RestCountry
     */
    protected function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns numericCode.
     *
     * 
     *
     * @return string
     */
    public function getNumericCode() {
        return $this->numericCode;
    }

    /**
     * Sets numericCode.
     *
     * @param string $numericCode
     * @return RestCountry
     */
    protected function setNumericCode($numericCode) {
        $this->numericCode = $numericCode;

        return $this;
    }

    /**
     * Returns stateCodes.
     *
     * 
     *
     * @return string[]
     */
    public function getStateCodes() {
        return $this->stateCodes;
    }

    /**
     * Sets stateCodes.
     *
     * @param string[] $stateCodes
     * @return RestCountry
     */
    public function setStateCodes($stateCodes) {
        $this->stateCodes = $stateCodes;

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
