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
 * EmailTemplate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class EmailTemplate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'EmailTemplate';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'attachedDocumentTemplateTypes' => '\Wallee\Sdk\Model\DocumentTemplateType[]',
		'blindCarbonCopyRecipients' => 'string[]',
		'carbonCopyRecipients' => 'string[]',
		'htmlBodyTemplateResource' => '\Wallee\Sdk\Model\ModelResourcePath',
		'id' => 'int',
		'linkedSpaceId' => 'int',
		'name' => 'string',
		'plannedPurgeDate' => '\DateTime',
		'state' => '\Wallee\Sdk\Model\CreationEntityState',
		'subject' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
		'textBodyTemplateResource' => '\Wallee\Sdk\Model\ModelResourcePath',
		'type' => 'int',
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
	 * 
	 *
	 * @var \Wallee\Sdk\Model\DocumentTemplateType[]
	 */
	private $attachedDocumentTemplateTypes;

	/**
	 * 
	 *
	 * @var string[]
	 */
	private $blindCarbonCopyRecipients;

	/**
	 * 
	 *
	 * @var string[]
	 */
	private $carbonCopyRecipients;

	/**
	 * The HTML body resource is used to produce the actual HTML message of the email.
	 *
	 * @var \Wallee\Sdk\Model\ModelResourcePath
	 */
	private $htmlBodyTemplateResource;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The linked space id holds the ID of the space to which the entity belongs to.
	 *
	 * @var int
	 */
	private $linkedSpaceId;

	/**
	 * The template name is used internally to identify the template in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * The planned purge date indicates when the entity is permanently removed. When the date is null the entity is not planned to be removed.
	 *
	 * @var \DateTime
	 */
	private $plannedPurgeDate;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\CreationEntityState
	 */
	private $state;

	/**
	 * The subject is going to be shown to the customer as a title.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	private $subject;

	/**
	 * The HTML body resource is used to produce the actual text message of the email. In case no resource is selected the HTML message is translated into the text format.
	 *
	 * @var \Wallee\Sdk\Model\ModelResourcePath
	 */
	private $textBodyTemplateResource;

	/**
	 * 
	 *
	 * @var int
	 */
	private $type;

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
		if (isset($data['attachedDocumentTemplateTypes']) && $data['attachedDocumentTemplateTypes'] != null) {
			$this->setAttachedDocumentTemplateTypes($data['attachedDocumentTemplateTypes']);
		}
		if (isset($data['blindCarbonCopyRecipients']) && $data['blindCarbonCopyRecipients'] != null) {
			$this->setBlindCarbonCopyRecipients($data['blindCarbonCopyRecipients']);
		}
		if (isset($data['carbonCopyRecipients']) && $data['carbonCopyRecipients'] != null) {
			$this->setCarbonCopyRecipients($data['carbonCopyRecipients']);
		}
		if (isset($data['htmlBodyTemplateResource']) && $data['htmlBodyTemplateResource'] != null) {
			$this->setHtmlBodyTemplateResource($data['htmlBodyTemplateResource']);
		}
		if (isset($data['id']) && $data['id'] != null) {
			$this->setId($data['id']);
		}
		if (isset($data['state']) && $data['state'] != null) {
			$this->setState($data['state']);
		}
		if (isset($data['subject']) && $data['subject'] != null) {
			$this->setSubject($data['subject']);
		}
		if (isset($data['textBodyTemplateResource']) && $data['textBodyTemplateResource'] != null) {
			$this->setTextBodyTemplateResource($data['textBodyTemplateResource']);
		}
		if (isset($data['version']) && $data['version'] != null) {
			$this->setVersion($data['version']);
		}
	}


	/**
	 * Returns attachedDocumentTemplateTypes.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\DocumentTemplateType[]
	 */
	public function getAttachedDocumentTemplateTypes() {
		return $this->attachedDocumentTemplateTypes;
	}

	/**
	 * Sets attachedDocumentTemplateTypes.
	 *
	 * @param \Wallee\Sdk\Model\DocumentTemplateType[] $attachedDocumentTemplateTypes
	 * @return EmailTemplate
	 */
	public function setAttachedDocumentTemplateTypes($attachedDocumentTemplateTypes) {
		$this->attachedDocumentTemplateTypes = $attachedDocumentTemplateTypes;

		return $this;
	}

	/**
	 * Returns blindCarbonCopyRecipients.
	 *
	 * 
	 *
	 * @return string[]
	 */
	public function getBlindCarbonCopyRecipients() {
		return $this->blindCarbonCopyRecipients;
	}

	/**
	 * Sets blindCarbonCopyRecipients.
	 *
	 * @param string[] $blindCarbonCopyRecipients
	 * @return EmailTemplate
	 */
	public function setBlindCarbonCopyRecipients($blindCarbonCopyRecipients) {
		$this->blindCarbonCopyRecipients = $blindCarbonCopyRecipients;

		return $this;
	}

	/**
	 * Returns carbonCopyRecipients.
	 *
	 * 
	 *
	 * @return string[]
	 */
	public function getCarbonCopyRecipients() {
		return $this->carbonCopyRecipients;
	}

	/**
	 * Sets carbonCopyRecipients.
	 *
	 * @param string[] $carbonCopyRecipients
	 * @return EmailTemplate
	 */
	public function setCarbonCopyRecipients($carbonCopyRecipients) {
		$this->carbonCopyRecipients = $carbonCopyRecipients;

		return $this;
	}

	/**
	 * Returns htmlBodyTemplateResource.
	 *
	 * The HTML body resource is used to produce the actual HTML message of the email.
	 *
	 * @return \Wallee\Sdk\Model\ModelResourcePath
	 */
	public function getHtmlBodyTemplateResource() {
		return $this->htmlBodyTemplateResource;
	}

	/**
	 * Sets htmlBodyTemplateResource.
	 *
	 * @param \Wallee\Sdk\Model\ModelResourcePath $htmlBodyTemplateResource
	 * @return EmailTemplate
	 */
	public function setHtmlBodyTemplateResource($htmlBodyTemplateResource) {
		$this->htmlBodyTemplateResource = $htmlBodyTemplateResource;

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
	 * @return EmailTemplate
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * The linked space id holds the ID of the space to which the entity belongs to.
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
	 * @return EmailTemplate
	 */
	protected function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The template name is used internally to identify the template in administrative interfaces. For example it is used within search fields and hence it should be distinct and descriptive.
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
	 * @return EmailTemplate
	 */
	protected function setName($name) {
		$this->name = $name;

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
	 * @return EmailTemplate
	 */
	protected function setPlannedPurgeDate($plannedPurgeDate) {
		$this->plannedPurgeDate = $plannedPurgeDate;

		return $this;
	}

	/**
	 * Returns state.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\CreationEntityState
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets state.
	 *
	 * @param \Wallee\Sdk\Model\CreationEntityState $state
	 * @return EmailTemplate
	 */
	public function setState($state) {
		$this->state = $state;

		return $this;
	}

	/**
	 * Returns subject.
	 *
	 * The subject is going to be shown to the customer as a title.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedString
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * Sets subject.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedString $subject
	 * @return EmailTemplate
	 */
	public function setSubject($subject) {
		$this->subject = $subject;

		return $this;
	}

	/**
	 * Returns textBodyTemplateResource.
	 *
	 * The HTML body resource is used to produce the actual text message of the email. In case no resource is selected the HTML message is translated into the text format.
	 *
	 * @return \Wallee\Sdk\Model\ModelResourcePath
	 */
	public function getTextBodyTemplateResource() {
		return $this->textBodyTemplateResource;
	}

	/**
	 * Sets textBodyTemplateResource.
	 *
	 * @param \Wallee\Sdk\Model\ModelResourcePath $textBodyTemplateResource
	 * @return EmailTemplate
	 */
	public function setTextBodyTemplateResource($textBodyTemplateResource) {
		$this->textBodyTemplateResource = $textBodyTemplateResource;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param int $type
	 * @return EmailTemplate
	 */
	protected function setType($type) {
		$this->type = $type;

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
	 * @return EmailTemplate
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

