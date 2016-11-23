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
 * SubscriptionChargeCreate model
 *
 * @category    Class
 * @description The subscription charge represents a single charge carried out for a particular subscription.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionChargeCreate extends SubscriptionCharge  {

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
	 * Values of processingType.
	 */
	const PROCESSING_TYPE_SYNCHRONOUS = 'SYNCHRONOUS';
	const PROCESSING_TYPE_CHARGE_FLOW = 'CHARGE_FLOW';
	
	/**
	 * Returns allowable values of processingType.
	 *
	 * @return string[]
	 */
	public function getProcessingTypeAllowableValues() {
		return [
			self::PROCESSING_TYPE_SYNCHRONOUS,
			self::PROCESSING_TYPE_CHARGE_FLOW,
		];
	}
	


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		parent::__construct($data);

		$this->setExternalId(isset($data['externalId']) ? $data['externalId'] : null);
		$this->setFailedUrl(isset($data['failedUrl']) ? $data['failedUrl'] : null);
		$this->setPlannedExecutionDate(isset($data['plannedExecutionDate']) ? $data['plannedExecutionDate'] : null);
		$this->setProcessingType(isset($data['processingType']) ? $data['processingType'] : null);
		$this->setReference(isset($data['reference']) ? $data['reference'] : null);
		$this->setSubscription(isset($data['subscription']) ? $data['subscription'] : null);
		$this->setSuccessUrl(isset($data['successUrl']) ? $data['successUrl'] : null);
	}


	/**
	 * Returns externalId.
	 *
	 * The external id helps to identify the entity and a subsequent creation of an entity with the same ID will not create a new entity.
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
	 * @return SubscriptionChargeCreate
	 */
	public function setExternalId($externalId) {
		return parent::setExternalId($externalId);
	}

	/**
	 * Returns failedUrl.
	 *
	 * The user will be redirected to failed URL when the transaction could not be authorized or completed. In case no failed URL is specified a default failed page will be displayed.
	 *
	 * @return string
	 */
	public function getFailedUrl() {
		return parent::getFailedUrl();
	}

	/**
	 * Sets failedUrl.
	 *
	 * @param string $failedUrl
	 * @return SubscriptionChargeCreate
	 */
	public function setFailedUrl($failedUrl) {
		return parent::setFailedUrl($failedUrl);
	}

	/**
	 * Returns plannedExecutionDate.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getPlannedExecutionDate() {
		return parent::getPlannedExecutionDate();
	}

	/**
	 * Sets plannedExecutionDate.
	 *
	 * @param string $plannedExecutionDate
	 * @return SubscriptionChargeCreate
	 */
	public function setPlannedExecutionDate($plannedExecutionDate) {
		return parent::setPlannedExecutionDate($plannedExecutionDate);
	}

	/**
	 * Returns processingType.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getProcessingType() {
		return parent::getProcessingType();
	}

	/**
	 * Sets processingType.
	 *
	 * @param string $processingType
	 * @return SubscriptionChargeCreate
	 */
	public function setProcessingType($processingType) {
		$allowed_values = array('SYNCHRONOUS', 'CHARGE_FLOW');
		if ((!in_array($processingType, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'processingType', must be one of 'SYNCHRONOUS', 'CHARGE_FLOW'");
		}
		return parent::setProcessingType($processingType);
	}

	/**
	 * Returns reference.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getReference() {
		return parent::getReference();
	}

	/**
	 * Sets reference.
	 *
	 * @param string $reference
	 * @return SubscriptionChargeCreate
	 */
	public function setReference($reference) {
		return parent::setReference($reference);
	}

	/**
	 * Returns subscription.
	 *
	 * @return \Wallee\Sdk\Model\Subscription
	 */
	public function getSubscription() {
		return parent::getSubscription();
	}

	/**
	 * Sets subscription.
	 *
	 * @param \Wallee\Sdk\Model\Subscription $subscription
	 * @return SubscriptionChargeCreate
	 */
	public function setSubscription($subscription) {
		return parent::setSubscription($subscription);
	}

	/**
	 * Returns successUrl.
	 *
	 * The user will be redirected to success URL when the transaction could be authorized or completed. In case no success URL is specified a default success page will be displayed.
	 *
	 * @return string
	 */
	public function getSuccessUrl() {
		return parent::getSuccessUrl();
	}

	/**
	 * Sets successUrl.
	 *
	 * @param string $successUrl
	 * @return SubscriptionChargeCreate
	 */
	public function setSuccessUrl($successUrl) {
		return parent::setSuccessUrl($successUrl);
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
		if ($this->getProcessingType() === null) {
			throw new ValidationException("'processingType' can't be null", 'processingType', $this);
		}
		$allowed_values = ["SYNCHRONOUS", "CHARGE_FLOW"];
		if (!in_array($this->getProcessingType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'processingType', must be one of #{allowed_values}.", 'processingType', $this);
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
