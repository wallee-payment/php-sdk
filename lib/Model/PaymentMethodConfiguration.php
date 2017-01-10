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
 * PaymentMethodConfiguration model
 *
 * @category    Class
 * @description The payment method configuration builds the base to connect with different payment method connectors.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class PaymentMethodConfiguration  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'PaymentMethodConfiguration';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'dataCollectionType' => 'string',
		'description' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'id' => 'int',
		'imageResourcePath' => '\Wallee\Sdk\Model\ModelResourcePath',
		'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
		'name' => 'string',
		'paymentMethod' => '\Wallee\Sdk\Model\EntityReference',
		'plannedPurgeDate' => 'string',
		'sortOrder' => 'int',
		'spaceId' => 'int',
		'state' => 'string',
		'title' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
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
	 * Values of dataCollectionType.
	 */
	const DATA_COLLECTION_TYPE_ONSITE = 'ONSITE';
	const DATA_COLLECTION_TYPE_OFFSITE = 'OFFSITE';
	
	/**
	 * Returns allowable values of dataCollectionType.
	 *
	 * @return string[]
	 */
	public function getDataCollectionTypeAllowableValues() {
		return [
			self::DATA_COLLECTION_TYPE_ONSITE,
			self::DATA_COLLECTION_TYPE_OFFSITE,
		];
	}
	
	/**
	 * Values of state.
	 */
	const STATE_CREATE = 'CREATE';
	const STATE_ACTIVE = 'ACTIVE';
	const STATE_INACTIVE = 'INACTIVE';
	const STATE_DELETING = 'DELETING';
	const STATE_DELETED = 'DELETED';
	
	/**
	 * Returns allowable values of state.
	 *
	 * @return string[]
	 */
	public function getStateAllowableValues() {
		return [
			self::STATE_CREATE,
			self::STATE_ACTIVE,
			self::STATE_INACTIVE,
			self::STATE_DELETING,
			self::STATE_DELETED,
		];
	}
	

	/**
	 * The data collection type determines who is collecting the payment information. This can be done either by the processor (offsite) or by our application (onsite).
	 *
	 * @var string
	 */
	private $dataCollectionType;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $description;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * @var \Wallee\Sdk\Model\ModelResourcePath
	 */
	private $imageResourcePath;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $linkedSpaceId;

	/**
	 * The payment method configuration name is used internally to identify the payment method configuration.For example the name is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $paymentMethod;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var string
	 */
	private $plannedPurgeDate;

	/**
	 * The sort order of the payment method determines the ordering of the methods shown to the user during the payment process.
	 *
	 * @var int
	 */
	private $sortOrder;

	/**
	 * 
	 *
	 * @var int
	 */
	private $spaceId;

	/**
	 * 
	 *
	 * @var string
	 */
	private $state;

	/**
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $title;

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
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['imageResourcePath']) && $data['imageResourcePath'] != null) {
			$this->setImageResourcePath($data['imageResourcePath']);
		}
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['paymentMethod']) && $data['paymentMethod'] != null) {
			$this->setPaymentMethod($data['paymentMethod']);
		}
		if (isset($data['title']) && $data['title'] != null) {
			$this->setTitle($data['title']);
		}
	}


	/**
	 * Returns dataCollectionType.
	 *
	 * The data collection type determines who is collecting the payment information. This can be done either by the processor (offsite) or by our application (onsite).
	 *
	 * @return string
	 */
	public function getDataCollectionType() {
		return $this->dataCollectionType;
	}

	/**
	 * Sets dataCollectionType.
	 *
	 * @param string $dataCollectionType
	 * @return PaymentMethodConfiguration
	 */
	protected function setDataCollectionType($dataCollectionType) {
		$allowed_values = array('ONSITE', 'OFFSITE');
		if ((!in_array($dataCollectionType, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'dataCollectionType', must be one of 'ONSITE', 'OFFSITE'");
		}
		$this->dataCollectionType = $dataCollectionType;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $description
	 * @return PaymentMethodConfiguration
	 */
	public function setDescription($description) {
		$this->description = $description;

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
	 * @return PaymentMethodConfiguration
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns imageResourcePath.
	 *
	 * @return \Wallee\Sdk\Model\ModelResourcePath
	 */
	public function getImageResourcePath() {
		return $this->imageResourcePath;
	}

	/**
	 * Sets imageResourcePath.
	 *
	 * @param \Wallee\Sdk\Model\ModelResourcePath $imageResourcePath
	 * @return PaymentMethodConfiguration
	 */
	public function setImageResourcePath($imageResourcePath) {
		$this->imageResourcePath = $imageResourcePath;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $linkedSpaceId
	 * @return PaymentMethodConfiguration
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The payment method configuration name is used internally to identify the payment method configuration.For example the name is used within search fields and hence it should be distinct and descriptive.
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
	 * @return PaymentMethodConfiguration
	 */
	protected function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns paymentMethod.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getPaymentMethod() {
		return $this->paymentMethod;
	}

	/**
	 * Sets paymentMethod.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $paymentMethod
	 * @return PaymentMethodConfiguration
	 */
	public function setPaymentMethod($paymentMethod) {
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Returns plannedPurgeDate.
	 *
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @return string
	 */
	public function getPlannedPurgeDate() {
		return $this->plannedPurgeDate;
	}

	/**
	 * Sets plannedPurgeDate.
	 *
	 * @param string $plannedPurgeDate
	 * @return PaymentMethodConfiguration
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns sortOrder.
	 *
	 * The sort order of the payment method determines the ordering of the methods shown to the user during the payment process.
	 *
	 * @return int
	 */
	public function getSortOrder() {
		return $this->sortOrder;
	}

	/**
	 * Sets sortOrder.
	 *
	 * @param int $sortOrder
	 * @return PaymentMethodConfiguration
	 */
	protected function setSortOrder($sortOrder) {
		$this->sortOrder = $sortOrder;

		return $this;
	}

	/**
	 * Returns spaceId.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getSpaceId() {
		return $this->spaceId;
	}

	/**
	 * Sets spaceId.
	 *
	 * @param int $spaceId
	 * @return PaymentMethodConfiguration
	 */
	protected function setSpaceId($spaceId) {
		$this->spaceId = $spaceId;

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
	 * @return PaymentMethodConfiguration
	 */
	protected function setState($state) {
		$allowed_values = array('CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED');
		if ((!in_array($state, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'CREATE', 'ACTIVE', 'INACTIVE', 'DELETING', 'DELETED'");
		}
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns title.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets title.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $title
	 * @return PaymentMethodConfiguration
	 */
	public function setTitle($title) {
		$this->title = $title;

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
	 * @return PaymentMethodConfiguration
	 */
	protected function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getDataCollectionType() === null) {
			throw new ValidationException("'dataCollectionType' can't be null", 'dataCollectionType', $this);
		}
		$allowed_values = ["ONSITE", "OFFSITE"];
		if (!in_array($this->getDataCollectionType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'dataCollectionType', must be one of #{allowed_values}.", 'dataCollectionType', $this);
		}

		if ($this->getName() === null) {
			throw new ValidationException("'name' can't be null", 'name', $this);
		}
		if ($this->getState() === null) {
			throw new ValidationException("'state' can't be null", 'state', $this);
		}
		$allowed_values = ["CREATE", "ACTIVE", "INACTIVE", "DELETING", "DELETED"];
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

