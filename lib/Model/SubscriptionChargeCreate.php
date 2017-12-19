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
 * SubscriptionChargeCreate model
 *
 * @category    Class
 * @description The subscription charge represents a single charge carried out for a particular subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionChargeCreate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionCharge.Create';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'externalId' => 'string',
		'failedUrl' => 'string',
		'plannedExecutionDate' => '\DateTime',
		'processingType' => '\Wallee\Sdk\Model\SubscriptionChargeProcessingType',
		'reference' => 'string',
		'subscription' => 'int',
		'successUrl' => 'string'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @var string
	 */
	private $externalId;

	/**
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @var string
	 */
	private $failedUrl;

	/**
	 * 
	 *
	 * @var \DateTime
	 */
	private $plannedExecutionDate;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionChargeProcessingType
	 */
	private $processingType;

	/**
	 * 
	 *
	 * @var string
	 */
	private $reference;

	/**
	 * The field subscription indicates the subscription to which the charge belongs to.
	 *
	 * @var int
	 */
	private $subscription;

	/**
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @var string
	 */
	private $successUrl;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['externalId'])) {
			$this->setExternalId($data['externalId']);
		}
		if (isset($data['failedUrl'])) {
			$this->setFailedUrl($data['failedUrl']);
		}
		if (isset($data['plannedExecutionDate'])) {
			$this->setPlannedExecutionDate($data['plannedExecutionDate']);
		}
		if (isset($data['processingType'])) {
			$this->setProcessingType($data['processingType']);
		}
		if (isset($data['reference'])) {
			$this->setReference($data['reference']);
		}
		if (isset($data['subscription'])) {
			$this->setSubscription($data['subscription']);
		}
		if (isset($data['successUrl'])) {
			$this->setSuccessUrl($data['successUrl']);
		}
	}


	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
	 *
	 * @return string
	 */
	public function getExternalId() {
		return $this->externalId;
	}

	/**
	 * Sets externalId.
	 *
	 * @param string $externalId
	 * @return SubscriptionChargeCreate
	 */
	public function setExternalId($externalId) {
		$this->externalId = $externalId;

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
	 * @return SubscriptionChargeCreate
	 */
	public function setFailedUrl($failedUrl) {
		$this->failedUrl = $failedUrl;

		return $this;
	}

	/**
	 * Returns plannedExecutionDate.
	 *
	 * 
	 *
	 * @return \DateTime
	 */
	public function getPlannedExecutionDate() {
		return $this->plannedExecutionDate;
	}

	/**
	 * Sets plannedExecutionDate.
	 *
	 * @param \DateTime $plannedExecutionDate
	 * @return SubscriptionChargeCreate
	 */
	public function setPlannedExecutionDate($plannedExecutionDate) {
		$this->plannedExecutionDate = $plannedExecutionDate;

		return $this;
	}

	/**
	 * Returns processingType.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionChargeProcessingType
	 */
	public function getProcessingType() {
		return $this->processingType;
	}

	/**
	 * Sets processingType.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionChargeProcessingType $processingType
	 * @return SubscriptionChargeCreate
	 */
	public function setProcessingType($processingType) {
		$this->processingType = $processingType;

		return $this;
	}

	/**
	 * Returns reference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getReference() {
		return $this->reference;
	}

	/**
	 * Sets reference.
	 *
	 * @param string $reference
	 * @return SubscriptionChargeCreate
	 */
	public function setReference($reference) {
		$this->reference = $reference;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * The field subscription indicates the subscription to which the charge belongs to.
	 *
	 * @return int
	 */
	public function getSubscription() {
		return $this->subscription;
	}

	/**
	 * Sets subscription.
	 *
	 * @param int $subscription
	 * @return SubscriptionChargeCreate
	 */
	public function setSubscription($subscription) {
		$this->subscription = $subscription;

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
	 * @return SubscriptionChargeCreate
	 */
	public function setSuccessUrl($successUrl) {
		$this->successUrl = $successUrl;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getExternalId() === null) {
			throw new ValidationException("'externalId' can't be null", 'externalId', $this);
		}
		if ($this->getProcessingType() === null) {
			throw new ValidationException("'processingType' can't be null", 'processingType', $this);
		}
		if ($this->getSubscription() === null) {
			throw new ValidationException("'subscription' can't be null", 'subscription', $this);
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

