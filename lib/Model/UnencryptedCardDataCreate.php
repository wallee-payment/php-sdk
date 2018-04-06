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
 * UnencryptedCardDataCreate model
 *
 * @category    Class
 * @description This model holds the card data in plain.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class UnencryptedCardDataCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'UnencryptedCardData.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'cardHolderName' => 'string',
		'cardVerificationCode' => 'string',
		'expiryDate' => 'string',
		'primaryAccountNumber' => 'string'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The card holder name is the name printed onto the card. It identifies the person who owns the card.
	 *
	 * @var string
	 */
	private $cardHolderName;

	/**
	 * The card verification code (CVC) is a 3 to 4 digit code typically printed on the back of the card. It helps to ensure that the card holder is authorizing the transaction. For card not-present transactions this field is optional.
	 *
	 * @var string
	 */
	private $cardVerificationCode;

	/**
	 * The card expiry date indicates when the card expires. The format is the format yyyy-mm where yyyy is the year (e.g. 2019) and the mm is the month (e.g. 09).
	 *
	 * @var string
	 */
	private $expiryDate;

	/**
	 * The primary account number (PAN) identifies the card. The number is numeric and typically printed on the front of the card.
	 *
	 * @var string
	 */
	private $primaryAccountNumber;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['cardHolderName'])) {
			$this->setCardHolderName($data['cardHolderName']);
		}
		if (isset($data['cardVerificationCode'])) {
			$this->setCardVerificationCode($data['cardVerificationCode']);
		}
		if (isset($data['expiryDate'])) {
			$this->setExpiryDate($data['expiryDate']);
		}
		if (isset($data['primaryAccountNumber'])) {
			$this->setPrimaryAccountNumber($data['primaryAccountNumber']);
		}
	}


	/**
	 * Returns cardHolderName.
	 *
	 * The card holder name is the name printed onto the card. It identifies the person who owns the card.
	 *
	 * @return string
	 */
	public function getCardHolderName() {
		return $this->cardHolderName;
	}

	/**
	 * Sets cardHolderName.
	 *
	 * @param string $cardHolderName
	 * @return UnencryptedCardDataCreate
	 */
	public function setCardHolderName($cardHolderName) {
		$this->cardHolderName = $cardHolderName;

		return $this;
	}

	/**
	 * Returns cardVerificationCode.
	 *
	 * The card verification code (CVC) is a 3 to 4 digit code typically printed on the back of the card. It helps to ensure that the card holder is authorizing the transaction. For card not-present transactions this field is optional.
	 *
	 * @return string
	 */
	public function getCardVerificationCode() {
		return $this->cardVerificationCode;
	}

	/**
	 * Sets cardVerificationCode.
	 *
	 * @param string $cardVerificationCode
	 * @return UnencryptedCardDataCreate
	 */
	public function setCardVerificationCode($cardVerificationCode) {
		$this->cardVerificationCode = $cardVerificationCode;

		return $this;
	}

	/**
	 * Returns expiryDate.
	 *
	 * The card expiry date indicates when the card expires. The format is the format yyyy-mm where yyyy is the year (e.g. 2019) and the mm is the month (e.g. 09).
	 *
	 * @return string
	 */
	public function getExpiryDate() {
		return $this->expiryDate;
	}

	/**
	 * Sets expiryDate.
	 *
	 * @param string $expiryDate
	 * @return UnencryptedCardDataCreate
	 */
	public function setExpiryDate($expiryDate) {
		$this->expiryDate = $expiryDate;

		return $this;
	}

	/**
	 * Returns primaryAccountNumber.
	 *
	 * The primary account number (PAN) identifies the card. The number is numeric and typically printed on the front of the card.
	 *
	 * @return string
	 */
	public function getPrimaryAccountNumber() {
		return $this->primaryAccountNumber;
	}

	/**
	 * Sets primaryAccountNumber.
	 *
	 * @param string $primaryAccountNumber
	 * @return UnencryptedCardDataCreate
	 */
	public function setPrimaryAccountNumber($primaryAccountNumber) {
		$this->primaryAccountNumber = $primaryAccountNumber;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getExpiryDate() === null) {
			throw new ValidationException("'expiryDate' can't be null", 'expiryDate', $this);
		}
		if ($this->getPrimaryAccountNumber() === null) {
			throw new ValidationException("'primaryAccountNumber' can't be null", 'primaryAccountNumber', $this);
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

