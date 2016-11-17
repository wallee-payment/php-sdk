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
        'attachmentResourcePaths' => '\Wallee\Sdk\Model\AttachmentResourceEditable[]',
        'blindCarbonCopyRecipients' => 'string[]',
        'carbonCopyRecipients' => 'string[]',
        'htmlBodyTemplateResource' => '\Wallee\Sdk\Model\ModelResourcePath',
        'id' => 'int',
        'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
        'name' => 'string',
        'plannedPurgeDate' => 'string',
        'state' => 'string',
        'subject' => '\Wallee\Sdk\Model\DatabaseTranslatedString',
        'textBodyTemplateResource' => '\Wallee\Sdk\Model\ModelResourcePath',
        'type' => '\Wallee\Sdk\Model\EntityReference',
        'version' => 'int'    );

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
    public static function swaggerTypes() {
        return self::$swaggerTypes;
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
     * 
     *
     * @var \Wallee\Sdk\Model\DocumentTemplateType[]
     */
    private $attachedDocumentTemplateTypes;
    
    /**
     * 
     *
     * @var \Wallee\Sdk\Model\AttachmentResourceEditable[]
     */
    private $attachmentResourcePaths;
    
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
     * @var \Wallee\Sdk\Model\EntityReference
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
     * @var string
     */
    private $plannedPurgeDate;
    
    /**
     * 
     *
     * @var string
     */
    private $state;
    
    /**
     * @var \Wallee\Sdk\Model\DatabaseTranslatedString
     */
    private $subject;
    
    /**
     * @var \Wallee\Sdk\Model\ModelResourcePath
     */
    private $textBodyTemplateResource;
    
    /**
     * @var \Wallee\Sdk\Model\EntityReference
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
        $this->setAttachedDocumentTemplateTypes(isset($data['attachedDocumentTemplateTypes']) ? $data['attachedDocumentTemplateTypes'] : null);
        $this->setAttachmentResourcePaths(isset($data['attachmentResourcePaths']) ? $data['attachmentResourcePaths'] : null);
        $this->setBlindCarbonCopyRecipients(isset($data['blindCarbonCopyRecipients']) ? $data['blindCarbonCopyRecipients'] : null);
        $this->setCarbonCopyRecipients(isset($data['carbonCopyRecipients']) ? $data['carbonCopyRecipients'] : null);
        $this->setHtmlBodyTemplateResource(isset($data['htmlBodyTemplateResource']) ? $data['htmlBodyTemplateResource'] : null);
        $this->setLinkedSpaceId(isset($data['linkedSpaceId']) ? $data['linkedSpaceId'] : null);
        $this->setSubject(isset($data['subject']) ? $data['subject'] : null);
        $this->setTextBodyTemplateResource(isset($data['textBodyTemplateResource']) ? $data['textBodyTemplateResource'] : null);
        $this->setType(isset($data['type']) ? $data['type'] : null);
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
     * Returns attachmentResourcePaths.
     *
     * 
     *
     * @return \Wallee\Sdk\Model\AttachmentResourceEditable[]
     */
    public function getAttachmentResourcePaths() {
        return $this->attachmentResourcePaths;
    }

    /**
     * Sets attachmentResourcePaths.
     *
     * @param \Wallee\Sdk\Model\AttachmentResourceEditable[] $attachmentResourcePaths
     * @return EmailTemplate
     */
    public function setAttachmentResourcePaths($attachmentResourcePaths) {
        $this->attachmentResourcePaths = $attachmentResourcePaths;

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
    protected function setId($id) {
        $this->id = $id;

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
     * @return EmailTemplate
     */
    public function setLinkedSpaceId($linkedSpaceId) {
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
     * @return string
     */
    public function getPlannedPurgeDate() {
        return $this->plannedPurgeDate;
    }

    /**
     * Sets plannedPurgeDate.
     *
     * @param string $plannedPurgeDate
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
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Sets state.
     *
     * @param string $state
     * @return EmailTemplate
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
     * Returns subject.
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
     * @return \Wallee\Sdk\Model\EntityReference
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Sets type.
     *
     * @param \Wallee\Sdk\Model\EntityReference $type
     * @return EmailTemplate
     */
    public function setType($type) {
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
