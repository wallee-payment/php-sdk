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
 * SubscriptionSuspensionCreate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class SubscriptionSuspensionCreate  {

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
		'endAction' => '\Wallee\Sdk\Model\SubscriptionSuspensionAction',
		'note' => 'string',
		'plannedEndDate' => '\DateTime',
		'subscription' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * When the suspension reaches the planned end date the end action will be carried out. This action is only executed when the suspension is ended automatically based on the end date.
	 *
	 * @var \Wallee\Sdk\Model\SubscriptionSuspensionAction
	 */
	private $endAction;

	/**
	 * The note may contain some internal information for the suspension. The note will not be disclosed to the subscriber.
	 *
	 * @var string
	 */
	private $note;

	/**
	 * The planned end date of the suspension identifies the date on which the suspension will be ended automatically.
	 *
	 * @var \DateTime
	 */
	private $plannedEndDate;

	/**
	 * 
	 *
	 * @var int
	 */
	private $subscription;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['endAction'])) {
			$this->setEndAction($data['endAction']);
		}
		if (isset($data['note'])) {
			$this->setNote($data['note']);
		}
		if (isset($data['plannedEndDate'])) {
			$this->setPlannedEndDate($data['plannedEndDate']);
		}
		if (isset($data['subscription'])) {
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
		return $this->endAction;
	}

	/**
	 * Sets endAction.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionSuspensionAction $endAction
	 * @return SubscriptionSuspensionCreate
	 */
	public function setEndAction($endAction) {
		$this->endAction = $endAction;

		return $this;
	}

	/**
	 * Returns note.
	 *
	 * The note may contain some internal information for the suspension. The note will not be disclosed to the subscriber.
	 *
	 * @return string
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * Sets note.
	 *
	 * @param string $note
	 * @return SubscriptionSuspensionCreate
	 */
	public function setNote($note) {
		$this->note = $note;

		return $this;
	}

	/**
	 * Returns plannedEndDate.
	 *
	 * The planned end date of the suspension identifies the date on which the suspension will be ended automatically.
	 *
	 * @return \DateTime
	 */
	public function getPlannedEndDate() {
		return $this->plannedEndDate;
	}

	/**
	 * Sets plannedEndDate.
	 *
	 * @param \DateTime $plannedEndDate
	 * @return SubscriptionSuspensionCreate
	 */
	public function setPlannedEndDate($plannedEndDate) {
		$this->plannedEndDate = $plannedEndDate;

		return $this;
	}

	/**
	 * Returns subscription.
	 *
	 * 
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
	 * @return SubscriptionSuspensionCreate
	 */
	public function setSubscription($subscription) {
		$this->subscription = $subscription;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

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

