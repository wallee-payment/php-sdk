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
 * EmailTemplateType model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class EmailTemplateType  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'EmailTemplateType';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'attachmentResources' => '\Wallee\Sdk\Model\AttachmentResource[]',
		'description' => 'map[string,string]',
		'documentAttachments' => '\Wallee\Sdk\Model\DocumentTemplateType[]',
		'feature' => 'int',
		'htmlBodyTemplateResource' => 'string',
		'id' => 'int',
		'name' => 'map[string,string]',
		'subject' => 'map[string,string]',
		'textBodyTemplateResource' => 'string'	);

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
	 * @var \Wallee\Sdk\Model\AttachmentResource[]
	 */
	private $attachmentResources;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $description;

	/**
	 * 
	 *
	 * @var \Wallee\Sdk\Model\DocumentTemplateType[]
	 */
	private $documentAttachments;

	/**
	 * 
	 *
	 * @var int
	 */
	private $feature;

	/**
	 * 
	 *
	 * @var string
	 */
	private $htmlBodyTemplateResource;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $name;

	/**
	 * 
	 *
	 * @var map[string,string]
	 */
	private $subject;

	/**
	 * 
	 *
	 * @var string
	 */
	private $textBodyTemplateResource;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['attachmentResources']) && $data['attachmentResources'] != null) {
			$this->setAttachmentResources($data['attachmentResources']);
		}
		if (isset($data['description']) && $data['description'] != null) {
			$this->setDescription($data['description']);
		}
		if (isset($data['documentAttachments']) && $data['documentAttachments'] != null) {
			$this->setDocumentAttachments($data['documentAttachments']);
		}
		if (isset($data['name']) && $data['name'] != null) {
			$this->setName($data['name']);
		}
		if (isset($data['subject']) && $data['subject'] != null) {
			$this->setSubject($data['subject']);
		}
	}


	/**
	 * Returns attachmentResources.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\AttachmentResource[]
	 */
	public function getAttachmentResources() {
		return $this->attachmentResources;
	}

	/**
	 * Sets attachmentResources.
	 *
	 * @param \Wallee\Sdk\Model\AttachmentResource[] $attachmentResources
	 * @return EmailTemplateType
	 */
	public function setAttachmentResources($attachmentResources) {
		$this->attachmentResources = $attachmentResources;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param map[string,string] $description
	 * @return EmailTemplateType
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns documentAttachments.
	 *
	 * 
	 *
	 * @return \Wallee\Sdk\Model\DocumentTemplateType[]
	 */
	public function getDocumentAttachments() {
		return $this->documentAttachments;
	}

	/**
	 * Sets documentAttachments.
	 *
	 * @param \Wallee\Sdk\Model\DocumentTemplateType[] $documentAttachments
	 * @return EmailTemplateType
	 */
	public function setDocumentAttachments($documentAttachments) {
		$this->documentAttachments = $documentAttachments;

		return $this;
	}

	/**
	 * Returns feature.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getFeature() {
		return $this->feature;
	}

	/**
	 * Sets feature.
	 *
	 * @param int $feature
	 * @return EmailTemplateType
	 */
	protected function setFeature($feature) {
		$this->feature = $feature;

		return $this;
	}

	/**
	 * Returns htmlBodyTemplateResource.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getHtmlBodyTemplateResource() {
		return $this->htmlBodyTemplateResource;
	}

	/**
	 * Sets htmlBodyTemplateResource.
	 *
	 * @param string $htmlBodyTemplateResource
	 * @return EmailTemplateType
	 */
	protected function setHtmlBodyTemplateResource($htmlBodyTemplateResource) {
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
	 * @return EmailTemplateType
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param map[string,string] $name
	 * @return EmailTemplateType
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns subject.
	 *
	 * 
	 *
	 * @return map[string,string]
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * Sets subject.
	 *
	 * @param map[string,string] $subject
	 * @return EmailTemplateType
	 */
	public function setSubject($subject) {
		$this->subject = $subject;

		return $this;
	}

	/**
	 * Returns textBodyTemplateResource.
	 *
	 * 
	 *
	 * @return string
	 */
	public function getTextBodyTemplateResource() {
		return $this->textBodyTemplateResource;
	}

	/**
	 * Sets textBodyTemplateResource.
	 *
	 * @param string $textBodyTemplateResource
	 * @return EmailTemplateType
	 */
	protected function setTextBodyTemplateResource($textBodyTemplateResource) {
		$this->textBodyTemplateResource = $textBodyTemplateResource;

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

