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
 * Transaction model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class Transaction  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'Transaction';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'acceptHeader' => 'string',
		'allowedPaymentMethodBrands' => '\Wallee\Sdk\Model\PaymentMethodBrand[]',
		'allowedPaymentMethodConfigurations' => 'int[]',
		'authorizationAmount' => 'float',
		'authorizedOn' => '\DateTime',
		'billingAddress' => '\Wallee\Sdk\Model\Address',
		'chargeRetryEnabled' => 'bool',
		'completedOn' => '\DateTime',
		'completionTimeoutOn' => '\DateTime',
		'confirmedBy' => 'int',
		'confirmedOn' => '\DateTime',
		'createdBy' => 'int',
		'createdOn' => '\DateTime',
		'currency' => 'string',
		'customerEmailAddress' => 'string',
		'customerId' => 'string',
		'customersPresence' => 'string',
		'endOfLife' => '\DateTime',
		'failedOn' => '\DateTime',
		'failedUrl' => 'string',
		'group' => '\Wallee\Sdk\Model\TransactionGroup',
		'id' => 'int',
		'internetProtocolAddress' => 'string',
		'internetProtocolAddressCountry' => 'string',
		'invoiceMerchantReference' => 'string',
		'language' => 'string',
		'lineItems' => '\Wallee\Sdk\Model\LineItem[]',
		'linkedSpaceId' => 'int',
		'merchantReference' => 'string',
		'paymentConnectorConfiguration' => '\Wallee\Sdk\Model\PaymentConnectorConfiguration',
		'plannedPurgeDate' => '\DateTime',
		'processingOn' => '\DateTime',
		'refundedAmount' => 'float',
		'shippingAddress' => '\Wallee\Sdk\Model\Address',
		'shippingMethod' => 'string',
		'spaceViewId' => 'int',
		'state' => 'string',
		'successUrl' => 'string',
		'token' => '\Wallee\Sdk\Model\Token',
		'userAgentHeader' => 'string',
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
	 * Values of customersPresence.
	 */
	const CUSTOMERS_PRESENCE_NOT_PRESENT = 'NOT_PRESENT';
	const CUSTOMERS_PRESENCE_VIRTUAL_PRESENT = 'VIRTUAL_PRESENT';
	const CUSTOMERS_PRESENCE_PHYSICAL_PRESENT = 'PHYSICAL_PRESENT';
	
	/**
	 * Returns allowable values of customersPresence.
	 *
	 * @return string[]
	 */
	public function getCustomersPresenceAllowableValues() {
		return array(
			self::CUSTOMERS_PRESENCE_NOT_PRESENT,
			self::CUSTOMERS_PRESENCE_VIRTUAL_PRESENT,
			self::CUSTOMERS_PRESENCE_PHYSICAL_PRESENT,
		);
	}
	
	/**
	 * Values of state.
	 */
	const STATE_CREATE = 'CREATE';
	const STATE_PENDING = 'PENDING';
	const STATE_CONFIRMED = 'CONFIRMED';
	const STATE_PROCESSING = 'PROCESSING';
	const STATE_FAILED = 'FAILED';
	const STATE_AUTHORIZED = 'AUTHORIZED';
	const STATE_VOIDED = 'VOIDED';
	const STATE_COMPLETED = 'COMPLETED';
	const STATE_FULFILL = 'FULFILL';
	const STATE_DECLINE = 'DECLINE';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return array(
			self::STATE_CREATE,
			self::STATE_PENDING,
			self::STATE_CONFIRMED,
			self::STATE_PROCESSING,
			self::STATE_FAILED,
			self::STATE_AUTHORIZED,
			self::STATE_VOIDED,
			self::STATE_COMPLETED,
			self::STATE_FULFILL,
			self::STATE_DECLINE,
		);
	}
	

	/**
	 * 
	 *
	 * @var string
	 */
	private $acceptHeader;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\PaymentMethodBrand[]
	 */
	private $allowedPaymentMethodBrands;

	/**
	 * @var int[]
	 */
	private $allowedPaymentMethodConfigurations;

	/**
	 * 
	 *
	 * @var float
	 */
	private $authorizationAmount;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $authorizedOn;

	/**
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $billingAddress;

	/**
	 * When the charging of the customer fails we can retry the charging. This implies that we redirect the user back to the payment page which allows the customer to retry. By default we will retry.
	 *
	 * @var bool
	 */
	private $chargeRetryEnabled;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $completedOn;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $completionTimeoutOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $confirmedBy;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $confirmedOn;

	/**
	 * 
	 *
	 * @var int
	 */
	private $createdBy;

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var \DateTime
	 */
	private $createdOn;

	/**
	 * 
	 *
	 * @var string
	 */
	private $currency;

	/**
	 * The customer email address is the email address of the customer. If no email address is used provided on the shipping or billing address this address is used.
	 *
	 * @var string
	 */
	private $customerEmailAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $customerId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $customersPresence;

	/**
	 * The transaction's end of life indicates the date from which on no operation can be carried out anymore.
	 *
	 * @var \DateTime
	 */
	private $endOfLife;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $failedOn;

	/**
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @var string
	 */
	private $failedUrl;

	/**
	 * @var \Wallee\Sdk\Model\TransactionGroup
	 */
	private $group;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var string
	 */
	private $internetProtocolAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $internetProtocolAddressCountry;

	/**
	 * 
	 *
	 * @var string
	 */
	private $invoiceMerchantReference;

	/**
	 * 
	 *
	 * @var string
	 */
	private $language;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\LineItem[]
	 */
	private $lineItems;

	/**
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $merchantReference;

	/**
	 * @var \Wallee\Sdk\Model\PaymentConnectorConfiguration
	 */
	private $paymentConnectorConfiguration;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $processingOn;

	/**
	 * The refunded amount is the total amount which has been refunded so far.
	 *
	 * @var float
	 */
	private $refundedAmount;

	/**
	 * @var \Wallee\Sdk\Model\Address
	 */
	private $shippingAddress;

	/**
	 * 
	 *
	 * @var string
	 */
	private $shippingMethod;

	/**
	 * @var int
	 */
	private $spaceViewId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @var string
	 */
	private $successUrl;

	/**
	 * @var \Wallee\Sdk\Model\Token
	 */
	private $token;

	/**
	 * 
	 *
	 * @var string
	 */
	private $userAgentHeader;

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
		if (isset($data['allowedPaymentMethodBrands']) && $data['allowedPaymentMethodBrands'] != null) {
			$this->setAllowedPaymentMethodBrands($data['allowedPaymentMethodBrands']);
		}
		if (isset($data['allowedPaymentMethodConfigurations']) && $data['allowedPaymentMethodConfigurations'] != null) {
			$this->setAllowedPaymentMethodConfigurations($data['allowedPaymentMethodConfigurations']);
		}
		if (isset($data['billingAddress']) && $data['billingAddress'] != null) {
			$this->setBillingAddress($data['billingAddress']);
		}
		if (isset($data['group']) && $data['group'] != null) {
			$this->setGroup($data['group']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['lineItems']) && $data['lineItems'] != null) {
			$this->setLineItems($data['lineItems']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['paymentConnectorConfiguration']) && $data['paymentConnectorConfiguration'] != null) {
			$this->setPaymentConnectorConfiguration($data['paymentConnectorConfiguration']);
		}
		if (isset($data['shippingAddress']) && $data['shippingAddress'] != null) {
			$this->setShippingAddress($data['shippingAddress']);
		}
		if (isset($data['spaceViewId']) && $data['spaceViewId'] != null) {
			$this->setSpaceViewId($data['spaceViewId']);
		}
		if (isset($data['token']) && $data['token'] != null) {
			$this->setToken($data['token']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns acceptHeader.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getAcceptHeader() {
		return $this->acceptHeader;
	}

	/**
	 * Sets acceptHeader.
	 *
	 * @param string $acceptHeader
	 * @return Transaction
	 */
	protected function setAcceptHeader($acceptHeader) {
		$this->acceptHeader = $acceptHeader;

		return $this;
	}

	/**
	 * Returns allowedPaymentMethodBrands.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\PaymentMethodBrand[]
	 */
	public function getAllowedPaymentMethodBrands() {
		return $this->allowedPaymentMethodBrands;
	}

	/**
	 * Sets allowedPaymentMethodBrands.
	 *
	 * @param \Wallee\Sdk\Model\PaymentMethodBrand[] $allowedPaymentMethodBrands
	 * @return Transaction
	 */
	public function setAllowedPaymentMethodBrands($allowedPaymentMethodBrands) {
		$this->allowedPaymentMethodBrands = $allowedPaymentMethodBrands;

		return $this;
	}

	/**
	 * Returns allowedPaymentMethodConfigurations.
	 *
	 * @return int[]
	 */
	public function getAllowedPaymentMethodConfigurations() {
		return $this->allowedPaymentMethodConfigurations;
	}

	/**
	 * Sets allowedPaymentMethodConfigurations.
	 *
	 * @param int[] $allowedPaymentMethodConfigurations
	 * @return Transaction
	 */
	public function setAllowedPaymentMethodConfigurations($allowedPaymentMethodConfigurations) {
		$this->allowedPaymentMethodConfigurations = $allowedPaymentMethodConfigurations;

		return $this;
	}

	/**
	 * Returns authorizationAmount.
	 *
	 * 
	 *
	 * @return float
	 */
	public function getAuthorizationAmount() {
		return $this->authorizationAmount;
	}

	/**
	 * Sets authorizationAmount.
	 *
	 * @param float $authorizationAmount
	 * @return Transaction
	 */
	protected function setAuthorizationAmount($authorizationAmount) {
		$this->authorizationAmount = $authorizationAmount;

		return $this;
	}

	/**
	 * Returns authorizedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getAuthorizedOn() {
		return $this->authorizedOn;
	}

	/**
	 * Sets authorizedOn.
	 *
	 * @param \DateTime $authorizedOn
	 * @return Transaction
	 */
	protected function setAuthorizedOn($authorizedOn) {
		$this->authorizedOn = $authorizedOn;

		return $this;
	}

	/**
	 * Returns billingAddress.
	 *
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getBillingAddress() {
		return $this->billingAddress;
	}

	/**
	 * Sets billingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $billingAddress
	 * @return Transaction
	 */
	public function setBillingAddress($billingAddress) {
		$this->billingAddress = $billingAddress;

		return $this;
	}

	/**
	 * Returns chargeRetryEnabled.
	 *
	 * When the charging of the customer fails we can retry the charging. This implies that we redirect the user back to the payment page which allows the customer to retry. By default we will retry.
	 *
	 * @return bool
	 */
	public function getChargeRetryEnabled() {
		return $this->chargeRetryEnabled;
	}

	/**
	 * Sets chargeRetryEnabled.
	 *
	 * @param bool $chargeRetryEnabled
	 * @return Transaction
	 */
	protected function setChargeRetryEnabled($chargeRetryEnabled) {
		$this->chargeRetryEnabled = $chargeRetryEnabled;

		return $this;
	}

	/**
	 * Returns completedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getCompletedOn() {
		return $this->completedOn;
	}

	/**
	 * Sets completedOn.
	 *
	 * @param \DateTime $completedOn
	 * @return Transaction
	 */
	protected function setCompletedOn($completedOn) {
		$this->completedOn = $completedOn;

		return $this;
	}

	/**
	 * Returns completionTimeoutOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getCompletionTimeoutOn() {
		return $this->completionTimeoutOn;
	}

	/**
	 * Sets completionTimeoutOn.
	 *
	 * @param \DateTime $completionTimeoutOn
	 * @return Transaction
	 */
	protected function setCompletionTimeoutOn($completionTimeoutOn) {
		$this->completionTimeoutOn = $completionTimeoutOn;

		return $this;
	}

	/**
	 * Returns confirmedBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getConfirmedBy() {
		return $this->confirmedBy;
	}

	/**
	 * Sets confirmedBy.
	 *
	 * @param int $confirmedBy
	 * @return Transaction
	 */
	protected function setConfirmedBy($confirmedBy) {
		$this->confirmedBy = $confirmedBy;

		return $this;
	}

	/**
	 * Returns confirmedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getConfirmedOn() {
		return $this->confirmedOn;
	}

	/**
	 * Sets confirmedOn.
	 *
	 * @param \DateTime $confirmedOn
	 * @return Transaction
	 */
	protected function setConfirmedOn($confirmedOn) {
		$this->confirmedOn = $confirmedOn;

		return $this;
	}

	/**
	 * Returns createdBy.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * Sets createdBy.
	 *
	 * @param int $createdBy
	 * @return Transaction
	 */
	protected function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;

		return $this;
	}

	/**
	 * Returns createdOn.
	 *
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @return \DateTime
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param \DateTime $createdOn
	 * @return Transaction
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns currency.
	 *
	 * 
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
	 * @return Transaction
	 */
	protected function setCurrency($currency) {
		$this->currency = $currency;

		return $this;
	}

	/**
	 * Returns customerEmailAddress.
	 *
	 * The customer email address is the email address of the customer. If no email address is used provided on the shipping or billing address this address is used.
	 *
	 * @return string
	 */
	public function getCustomerEmailAddress() {
		return $this->customerEmailAddress;
	}

	/**
	 * Sets customerEmailAddress.
	 *
	 * @param string $customerEmailAddress
	 * @return Transaction
	 */
	protected function setCustomerEmailAddress($customerEmailAddress) {
		$this->customerEmailAddress = $customerEmailAddress;

		return $this;
	}

	/**
	 * Returns customerId.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCustomerId() {
		return $this->customerId;
	}

	/**
	 * Sets customerId.
	 *
	 * @param string $customerId
	 * @return Transaction
	 */
	protected function setCustomerId($customerId) {
		$this->customerId = $customerId;

		return $this;
	}

	/**
	 * Returns customersPresence.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getCustomersPresence() {
		return $this->customersPresence;
	}

	/**
	 * Sets customersPresence.
	 *
	 * @param string $customersPresence
	 * @return Transaction
	 */
	protected function setCustomersPresence($customersPresence) {
		$allowed_values = array('NOT_PRESENT', 'VIRTUAL_PRESENT', 'PHYSICAL_PRESENT');
		if (!is_null($customersPresence) && (!in_array($customersPresence, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'customersPresence', must be one of 'NOT_PRESENT', 'VIRTUAL_PRESENT', 'PHYSICAL_PRESENT'");
		}
		$this->customersPresence = $customersPresence;

		return $this;
	}

	/**
	 * Returns endOfLife.
	 *
	 * The transaction's end of life indicates the date from which on no operation can be carried out anymore.
	 *
	 * @return \DateTime
	 */
	public function getEndOfLife() {
		return $this->endOfLife;
	}

	/**
	 * Sets endOfLife.
	 *
	 * @param \DateTime $endOfLife
	 * @return Transaction
	 */
	protected function setEndOfLife($endOfLife) {
		$this->endOfLife = $endOfLife;

		return $this;
	}

	/**
	 * Returns failedOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getFailedOn() {
		return $this->failedOn;
	}

	/**
	 * Sets failedOn.
	 *
	 * @param \DateTime $failedOn
	 * @return Transaction
	 */
	protected function setFailedOn($failedOn) {
		$this->failedOn = $failedOn;

		return $this;
	}

	/**
	 * Returns failedUrl.
	 *
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @return string
	 */
	public function getFailedUrl() {
		return $this->failedUrl;
	}

	/**
	 * Sets failedUrl.
	 *
	 * @param string $failedUrl
	 * @return Transaction
	 */
	protected function setFailedUrl($failedUrl) {
		$this->failedUrl = $failedUrl;

		return $this;
	}

	/**
	 * Returns group.
	 *
	 * @return \Wallee\Sdk\Model\TransactionGroup
	 */
	public function getGroup() {
		return $this->group;
	}

	/**
	 * Sets group.
	 *
	 * @param \Wallee\Sdk\Model\TransactionGroup $group
	 * @return Transaction
	 */
	public function setGroup($group) {
		$this->group = $group;

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
	 * @return Transaction
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns internetProtocolAddress.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getInternetProtocolAddress() {
		return $this->internetProtocolAddress;
	}

	/**
	 * Sets internetProtocolAddress.
	 *
	 * @param string $internetProtocolAddress
	 * @return Transaction
	 */
	protected function setInternetProtocolAddress($internetProtocolAddress) {
		$this->internetProtocolAddress = $internetProtocolAddress;

		return $this;
	}

	/**
	 * Returns internetProtocolAddressCountry.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getInternetProtocolAddressCountry() {
		return $this->internetProtocolAddressCountry;
	}

	/**
	 * Sets internetProtocolAddressCountry.
	 *
	 * @param string $internetProtocolAddressCountry
	 * @return Transaction
	 */
	protected function setInternetProtocolAddressCountry($internetProtocolAddressCountry) {
		$this->internetProtocolAddressCountry = $internetProtocolAddressCountry;

		return $this;
	}

	/**
	 * Returns invoiceMerchantReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getInvoiceMerchantReference() {
		return $this->invoiceMerchantReference;
	}

	/**
	 * Sets invoiceMerchantReference.
	 *
	 * @param string $invoiceMerchantReference
	 * @return Transaction
	 */
	protected function setInvoiceMerchantReference($invoiceMerchantReference) {
		$this->invoiceMerchantReference = $invoiceMerchantReference;

		return $this;
	}

	/**
	 * Returns language.
	 *
	 * 
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
	 * @return Transaction
	 */
	protected function setLanguage($language) {
		$this->language = $language;

		return $this;
	}

	/**
	 * Returns lineItems.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\LineItem[]
	 */
	public function getLineItems() {
		return $this->lineItems;
	}

	/**
	 * Sets lineItems.
	 *
	 * @param \Wallee\Sdk\Model\LineItem[] $lineItems
	 * @return Transaction
	 */
	public function setLineItems($lineItems) {
		$this->lineItems = $lineItems;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * @return int
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param int $linkedSpaceId
	 * @return Transaction
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns merchantReference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getMerchantReference() {
		return $this->merchantReference;
	}

	/**
	 * Sets merchantReference.
	 *
	 * @param string $merchantReference
	 * @return Transaction
	 */
	protected function setMerchantReference($merchantReference) {
		$this->merchantReference = $merchantReference;

		return $this;
	}

	/**
	 * Returns paymentConnectorConfiguration.
	 *
	 * @return \Wallee\Sdk\Model\PaymentConnectorConfiguration
	 */
	public function getPaymentConnectorConfiguration() {
		return $this->paymentConnectorConfiguration;
	}

	/**
	 * Sets paymentConnectorConfiguration.
	 *
	 * @param \Wallee\Sdk\Model\PaymentConnectorConfiguration $paymentConnectorConfiguration
	 * @return Transaction
	 */
	public function setPaymentConnectorConfiguration($paymentConnectorConfiguration) {
		$this->paymentConnectorConfiguration = $paymentConnectorConfiguration;

		return $this;
	}

	/**
	 * Returns plannedPurgeDate.
	 *
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @return \DateTime
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param \DateTime $plannedPurgeDate
	 * @return Transaction
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns processingOn.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getProcessingOn() {
		return $this->processingOn;
	}

	/**
	 * Sets processingOn.
	 *
	 * @param \DateTime $processingOn
	 * @return Transaction
	 */
	protected function setProcessingOn($processingOn) {
		$this->processingOn = $processingOn;

		return $this;
	}

	/**
	 * Returns refundedAmount.
	 *
	 * The refunded amount is the total amount which has been refunded so far.
	 *
	 * @return float
	 */
	public function getRefundedAmount() {
		return $this->refundedAmount;
	}

	/**
	 * Sets refundedAmount.
	 *
	 * @param float $refundedAmount
	 * @return Transaction
	 */
	protected function setRefundedAmount($refundedAmount) {
		$this->refundedAmount = $refundedAmount;

		return $this;
	}

	/**
	 * Returns shippingAddress.
	 *
	 * @return \Wallee\Sdk\Model\Address
	 */
	public function getShippingAddress() {
		return $this->shippingAddress;
	}

	/**
	 * Sets shippingAddress.
	 *
	 * @param \Wallee\Sdk\Model\Address $shippingAddress
	 * @return Transaction
	 */
	public function setShippingAddress($shippingAddress) {
		$this->shippingAddress = $shippingAddress;

		return $this;
	}

	/**
	 * Returns shippingMethod.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getShippingMethod() {
		return $this->shippingMethod;
	}

	/**
	 * Sets shippingMethod.
	 *
	 * @param string $shippingMethod
	 * @return Transaction
	 */
	protected function setShippingMethod($shippingMethod) {
		$this->shippingMethod = $shippingMethod;

		return $this;
	}

	/**
	 * Returns spaceViewId.
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
	 * @return Transaction
	 */
	public function setSpaceViewId($spaceViewId) {
		$this->spaceViewId = $spaceViewId;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param string $state
	 * @return Transaction
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'PENDING', 'CONFIRMED', 'PROCESSING', 'FAILED', 'AUTHORIZED', 'VOIDED', 'COMPLETED', 'FULFILL', 'DECLINE');
		if (!is_null($state) && (!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'PENDING', 'CONFIRMED', 'PROCESSING', 'FAILED', 'AUTHORIZED', 'VOIDED', 'COMPLETED', 'FULFILL', 'DECLINE'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns successUrl.
	 *
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @return string
	 */
	public function getSuccessUrl() {
		return $this->successUrl;
	}

	/**
	 * Sets successUrl.
	 *
	 * @param string $successUrl
	 * @return Transaction
	 */
	protected function setSuccessUrl($successUrl) {
		$this->successUrl = $successUrl;

		return $this;
	}

	/**
	 * Returns token.
	 *
	 * @return \Wallee\Sdk\Model\Token
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * Sets token.
	 *
	 * @param \Wallee\Sdk\Model\Token $token
	 * @return Transaction
	 */
	public function setToken($token) {
		$this->token = $token;

		return $this;
	}

	/**
	 * Returns userAgentHeader.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getUserAgentHeader() {
		return $this->userAgentHeader;
	}

	/**
	 * Sets userAgentHeader.
	 *
	 * @param string $userAgentHeader
	 * @return Transaction
	 */
	protected function setUserAgentHeader($userAgentHeader) {
		$this->userAgentHeader = $userAgentHeader;

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
	 * @return Transaction
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

		$allowed_values = array("NOT_PRESENT", "VIRTUAL_PRESENT", "PHYSICAL_PRESENT");
		if (!in_array($this->getCustomersPresence(), $allowed_values)) {
			throw new ValidationException("invalid value for 'customersPresence', must be one of #{allowed_values}.", 'customersPresence', $this);
		}

		$allowed_values = array("CREATE", "PENDING", "CONFIRMED", "PROCESSING", "FAILED", "AUTHORIZED", "VOIDED", "COMPLETED", "FULFILL", "DECLINE");
		if (!in_array($this->getState(), $allowed_values)) {
			throw new ValidationException("invalid value for 'state', must be one of #{allowed_values}.", 'state', $this);
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

