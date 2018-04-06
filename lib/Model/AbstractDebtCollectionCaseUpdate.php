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
 * AbstractDebtCollectionCaseUpdate model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class AbstractDebtCollectionCaseUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Abstract.DebtCollectionCase.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'billingAddress' => '\Wallee\Sdk\Model\AddressCreate',
		'contractDate' => '\DateTime',
		'currency' => 'string',
		'dueDate' => '\DateTime',
		'environment' => '\Wallee\Sdk\Model\DebtCollectionEnvironment',
		'language' => 'string',
		'lineItems' => '\Wallee\Sdk\Model\LineItemCreate[]',
		'spaceViewId' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The billing address of the case identifies the debtor.
	 *
	 * @var \Wallee\Sdk\Model\AddressCreate
	 */
	private $billingAddress;

	/**
	 * The contract date is the date on which the contract with the debtor was signed on.
	 *
	 * @var \DateTime
	 */
	private $contractDate;

	/**
	 * The currency defines the billing currency of the debt collection case.
	 *
	 * @var string
	 */
	private $currency;

	/**
	 * The due date indicates the date on which the amount receivable was due. This date has to be always in the past.
	 *
	 * @var \DateTime
	 */
	private $dueDate;

	/**
	 * The environment in which this case will be processed. There must be a debt collector configuration present which supports the chosen environment.
	 *
	 * @var \Wallee\Sdk\Model\DebtCollectionEnvironment
	 */
	private $environment;

	/**
	 * The language indicates the language to be used in the communication with the debtor.
	 *
	 * @var string
	 */
	private $language;

	/**
	 * The line items of the debt collection case will be shown on documents sent to the debtor and the total of them makes up total amount to collect.
	 *
	 * @var \Wallee\Sdk\Model\LineItemCreate[]
	 */
	private $lineItems;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceViewId;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['billingAddress'])) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['contractDate'])) {
			$this->setContractDate($data['contractDate']);
		}
		if (isset($data['currency'])) {
			$this->setCurrency($data['currency']);
		}
		if (isset($data['dueDate'])) {
			$this->setDueDate($data['dueDate']);
		}
		if (isset($data['environment'])) {
			$this->setEnvironment($data['environment']);
		}
		if (isset($data['language'])) {
			$this->setLanguage($data['language']);
		}
		if (isset($data['lineItems'])) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['spaceViewId'])) {
			$this->setSpaceViewId($data['spaceViewId']);
		}
	}


	/**
	 * Returns billingAddress.
	 *
	 * The billing address of the case identifies the debtor.
	 *
	 * @return \Wallee\Sdk\Model\AddressCreate
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\AddressCreate $billingAddress
	 * @return AbstractDebtCollectionCaseUpdate
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Returns contractDate.
	 *
	 * The contract date is the date on which the contract with the debtor was signed on.
	 *
	 * @return \DateTime
	 */
	public function getContractDate() {
		return $this->contractDate;
	}

	/**
	 * Sets contractDate.
	 *
	 * @param \DateTime $contractDate
	 * @return AbstractDebtCollectionCaseUpdate
	 */
	public function setContractDate($contractDate) {
		$this->contractDate = $contractDate;

		return $this;
	}

	/**
	 * Returns currency.
	 *
	 * The currency defines the billing currency of the debt collection case.
	 *
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Sets currency.
	 *
	 * @param string $currency
	 * @return AbstractDebtCollectionCaseUpdate
	 */
	public function setCurrency($currency) {
		$this->currency = $currency;

		return $this;
	}

	/**
	 * Returns dueDate.
	 *
	 * The due date indicates the date on which the amount receivable was due. This date has to be always in the past.
	 *
	 * @return \DateTime
	 */
	public function getDueDate() {
		return $this->dueDate;
	}

	/**
	 * Sets dueDate.
	 *
	 * @param \DateTime $dueDate
	 * @return AbstractDebtCollectionCaseUpdate
	 */
	public function setDueDate($dueDate) {
		$this->dueDate = $dueDate;

		return $this;
	}

	/**
	 * Returns environment.
	 *
	 * The environment in which this case will be processed. There must be a debt collector configuration present which supports the chosen environment.
	 *
	 * @return \Wallee\Sdk\Model\DebtCollectionEnvironment
	 */
	public function getEnvironment() {
		return $this->environment;
	}

	/**
	 * Sets environment.
	 *
	 * @param \Wallee\Sdk\Model\DebtCollectionEnvironment $environment
	 * @return AbstractDebtCollectionCaseUpdate
	 */
	public function setEnvironment($environment) {
		$this->environment = $environment;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * The language indicates the language to be used in the communication with the debtor.
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
	 * @return AbstractDebtCollectionCaseUpdate
	 */
	public function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * The line items of the debt collection case will be shown on documents sent to the debtor and the total of them makes up total amount to collect.
	 *
	 * @return \Wallee\Sdk\Model\LineItemCreate[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItemCreate[] $lineItems
	 * @return AbstractDebtCollectionCaseUpdate
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

		return $this;
	}

	/**
	 * Returns spaceViewId.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSpaceViewId() {
		return $this->spaceViewId;
	}

	/**
	 * Sets spaceViewId.
	 *
	 * @param int $spaceViewId
	 * @return AbstractDebtCollectionCaseUpdate
	 */
	public function setSpaceViewId($spaceViewId) {
		$this->spaceViewId = $spaceViewId;

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

