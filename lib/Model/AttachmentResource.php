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
 * AttachmentResource model
 *
 * @category    Class
 * @description The attachment resource allows the attachment of resources to emails.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class AttachmentResource  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'AttachmentResource';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'attachmentName' => 'map[string,string]',
		'resourcePath' => '\Wallee\Sdk\Model\ModelResourcePath'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The name of the attachment which is shown to the user within the email client.
	 *
	 * @var map[string,string]
	 */
	private $attachmentName;

	/**
	 * The path to the resource which should be attached to the email.
	 *
	 * @var \Wallee\Sdk\Model\ModelResourcePath
	 */
	private $resourcePath;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['attachmentName']) && $data['attachmentName'] != null) {
			$this->setAttachmentName($data['attachmentName']);
		}
		if (isset($data['resourcePath']) && $data['resourcePath'] != null) {
			$this->setResourcePath($data['resourcePath']);
		}
	}


	/**
	 * Returns attachmentName.
	 *
	 * The name of the attachment which is shown to the user within the email client.
	 *
	 * @return map[string,string]
	 */
	public function getAttachmentName() {
		return $this->attachmentName;
	}

	/**
	 * Sets attachmentName.
	 *
	 * @param map[string,string] $attachmentName
	 * @return AttachmentResource
	 */
	public function setAttachmentName($attachmentName) {
		$this->attachmentName = $attachmentName;

		return $this;
	}

	/**
	 * Returns resourcePath.
	 *
	 * The path to the resource which should be attached to the email.
	 *
	 * @return \Wallee\Sdk\Model\ModelResourcePath
	 */
	public function getResourcePath() {
		return $this->resourcePath;
	}

	/**
	 * Sets resourcePath.
	 *
	 * @param \Wallee\Sdk\Model\ModelResourcePath $resourcePath
	 * @return AttachmentResource
	 */
	public function setResourcePath($resourcePath) {
		$this->resourcePath = $resourcePath;

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

