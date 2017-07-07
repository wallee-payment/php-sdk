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
 * RefundCreate model
 *
 * @category    Class
 * @description The refund represents a credit back to the customer. It can be issued by the merchant or by the customer (reversal).
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class RefundCreate extends Refund  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Refund.Create';

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

		if (isset($data['externalId']) && $data['externalId'] != null) {
			$this->setExternalId($data['externalId']);
		}
		if (isset($data['merchantReference']) && $data['merchantReference'] != null) {
			$this->setMerchantReference($data['merchantReference']);
		}
		if (isset($data['reductions']) && $data['reductions'] != null) {
			$this->setReductions($data['reductions']);
		}
		if (isset($data['transaction']) && $data['transaction'] != null) {
			$this->setTransaction($data['transaction']);
		}
		if (isset($data['type']) && $data['type'] != null) {
			$this->setType($data['type']);
		}
	}


	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify duplicate calls to the refund service. As such the external ID has to be unique per transaction.
	 *
	 * @return string
	 */
	public function getExternalId() {
		return parent::getExternalId();
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return RefundCreate
	 */
	public function setExternalId($externalId) {
		return parent::setExternalId($externalId);
	}

	/**
	 * Returns merchantReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMerchantReference() {
		return parent::getMerchantReference();
	}

	/**
	 * Sets merchantReference.
	 *
	 * @param string $merchantReference
	 * @return RefundCreate
	 */
	public function setMerchantReference($merchantReference) {
		return parent::setMerchantReference($merchantReference);
	}

	/**
	 * Returns reductions.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItemReductionCreate[]
	 */
	public function getReductions() {
		return parent::getReductions();
	}

	/**
	 * Sets reductions.
	 *
	 * @param \Wallee\Sdk\Model\LineItemReductionCreate[] $reductions
	 * @return RefundCreate
	 */
	public function setReductions($reductions) {
		return parent::setReductions($reductions);
	}

	/**
	 * Returns transaction.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getTransaction() {
		return parent::getTransaction();
	}

	/**
	 * Sets transaction.
	 *
	 * @param int $transaction
	 * @return RefundCreate
	 */
	public function setTransaction($transaction) {
		return parent::setTransaction($transaction);
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\RefundType
	 */
	public function getType() {
		return parent::getType();
	}

	/**
	 * Sets type.
	 *
	 * @param \Wallee\Sdk\Model\RefundType $type
	 * @return RefundCreate
	 */
	public function setType($type) {
		return parent::setType($type);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getExternalId() === null) {
			throw new ValidationException("'externalId' can't be null", 'externalId', $this);
		}
		if ($this->getReductions() === null) {
			throw new ValidationException("'reductions' can't be null", 'reductions', $this);
		}
		if ($this->getTransaction() === null) {
			throw new ValidationException("'transaction' can't be null", 'transaction', $this);
		}
		if ($this->getType() === null) {
			throw new ValidationException("'type' can't be null", 'type', $this);
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

