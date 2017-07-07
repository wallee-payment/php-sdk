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
 * SubscriptionSuspensionCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionSuspensionCreate extends SubscriptionSuspensionRunning  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionSuspension.Create';

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

		if (isset($data['endAction']) && $data['endAction'] != null) {
			$this->setEndAction($data['endAction']);
		}
		if (isset($data['note']) && $data['note'] != null) {
			$this->setNote($data['note']);
		}
		if (isset($data['plannedEndDate']) && $data['plannedEndDate'] != null) {
			$this->setPlannedEndDate($data['plannedEndDate']);
		}
		if (isset($data['subscription']) && $data['subscription'] != null) {
			$this->setSubscription($data['subscription']);
		}
	}


	/**
	 * Returns endAction.
	 *
	 * When the suspension reaches the planned end date the end action will be carried out. This action is only executed when the suspension is ended automatically based on the end date.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionSuspensionAction
	 */
	public function getEndAction() {
		return parent::getEndAction();
	}

	/**
	 * Sets endAction.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionSuspensionAction $endAction
	 * @return SubscriptionSuspensionCreate
	 */
	public function setEndAction($endAction) {
		return parent::setEndAction($endAction);
	}

	/**
	 * Returns note.
	 *
	 * The note may contain some internal information for the suspension. The note will not be disclosed to the subscriber.
	 *
	 * @return string
	 */
	public function getNote() {
		return parent::getNote();
	}

	/**
	 * Sets note.
	 *
	 * @param string $note
	 * @return SubscriptionSuspensionCreate
	 */
	public function setNote($note) {
		return parent::setNote($note);
	}

	/**
	 * Returns plannedEndDate.
	 *
	 * The planned end date of the suspension identifies the date on which the suspension will be ended automatically.
	 *
	 * @return \DateTime
	 */
	public function getPlannedEndDate() {
		return parent::getPlannedEndDate();
	}

	/**
	 * Sets plannedEndDate.
	 *
	 * @param \DateTime $plannedEndDate
	 * @return SubscriptionSuspensionCreate
	 */
	public function setPlannedEndDate($plannedEndDate) {
		return parent::setPlannedEndDate($plannedEndDate);
	}

	/**
	 * Returns subscription.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSubscription() {
		return parent::getSubscription();
	}

	/**
	 * Sets subscription.
	 *
	 * @param int $subscription
	 * @return SubscriptionSuspensionCreate
	 */
	public function setSubscription($subscription) {
		return parent::setSubscription($subscription);
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {
		parent::validate();

		if ($this->getEndAction() === null) {
			throw new ValidationException("'endAction' can't be null", 'endAction', $this);
		}
		if ($this->getPlannedEndDate() === null) {
			throw new ValidationException("'plannedEndDate' can't be null", 'plannedEndDate', $this);
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

