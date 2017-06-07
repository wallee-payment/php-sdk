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
 * EntityQueryFilter model
 *
 * @category    Class
 * @description The query filter allows to restrict the entities which are returned.
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class EntityQueryFilter  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'EntityQueryFilter';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'children' => '\Wallee\Sdk\Model\EntityQueryFilter[]',
		'fieldName' => 'string',
		'operator' => 'string',
		'type' => 'string',
		'value' => 'object'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	
	/**
	 * Values of operator.
	 */
	const OPERATOR_EQUALS = 'EQUALS';
	const OPERATOR_GREATER_THAN = 'GREATER_THAN';
	const OPERATOR_GREATER_THAN_OR_EQUAL = 'GREATER_THAN_OR_EQUAL';
	const OPERATOR_LESS_THAN = 'LESS_THAN';
	const OPERATOR_LESS_THAN_OR_EQUAL = 'LESS_THAN_OR_EQUAL';
	const OPERATOR_CONTAINS = 'CONTAINS';
	const OPERATOR_NOT_EQUALS = 'NOT_EQUALS';
	const OPERATOR_NOT_CONTAINS = 'NOT_CONTAINS';
	const OPERATOR_IS_NULL = 'IS_NULL';
	
	/**
	 * Returns allowable values of operator.
	 *
	 * @return string[]
	 */
	public function getOperatorAllowableValues() {
		return array(
			self::OPERATOR_EQUALS,
			self::OPERATOR_GREATER_THAN,
			self::OPERATOR_GREATER_THAN_OR_EQUAL,
			self::OPERATOR_LESS_THAN,
			self::OPERATOR_LESS_THAN_OR_EQUAL,
			self::OPERATOR_CONTAINS,
			self::OPERATOR_NOT_EQUALS,
			self::OPERATOR_NOT_CONTAINS,
			self::OPERATOR_IS_NULL,
		);
	}
	
	/**
	 * Values of type.
	 */
	const TYPE_LEAF = 'LEAF';
	const TYPE_OR = 'OR';
	const TYPE_AND = 'AND';
	
	/**
	 * Returns allowable values of type.
	 *
	 * @return string[]
	 */
	public function getTypeAllowableValues() {
		return array(
			self::TYPE_LEAF,
			self::TYPE_OR,
			self::TYPE_AND,
		);
	}
	

	/**
	 * The 'children' can contain other filter nodes which are applied to the query. This property is only applicable on filter types 'OR' and 'AND'.
	 *
	 * @var \Wallee\Sdk\Model\EntityQueryFilter[]
	 */
	private $children;

	/**
	 * The 'fieldName' indicates the property on the entity which should be filtered. This property is only applicable on filter type 'LEAF'.
	 *
	 * @var string
	 */
	private $fieldName;

	/**
	 * The 'operator' indicates what kind of filtering on the 'fieldName' is executed on. This property is only applicable on filter type 'LEAF'.
	 *
	 * @var string
	 */
	private $operator;

	/**
	 * The filter type controls how the query node is interpreted. I.e. if the node acts as leaf node or as a filter group.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * The 'value' is used to compare with the 'fieldName' as defined by the 'operator'. This property is only applicable on filter type 'LEAF'.
	 *
	 * @var object
	 */
	private $value;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['children']) && $data['children'] != null) {
			$this->setChildren($data['children']);
		}
		if (isset($data['fieldName']) && $data['fieldName'] != null) {
			$this->setFieldName($data['fieldName']);
		}
		if (isset($data['operator']) && $data['operator'] != null) {
			$this->setOperator($data['operator']);
		}
		if (isset($data['type']) && $data['type'] != null) {
			$this->setType($data['type']);
		}
		if (isset($data['value']) && $data['value'] != null) {
			$this->setValue($data['value']);
		}
	}


	/**
	 * Returns children.
	 *
	 * The 'children' can contain other filter nodes which are applied to the query. This property is only applicable on filter types 'OR' and 'AND'.
	 *
	 * @return \Wallee\Sdk\Model\EntityQueryFilter[]
	 */
	public function getChildren() {
		return $this->children;
	}

	/**
	 * Sets children.
	 *
	 * @param \Wallee\Sdk\Model\EntityQueryFilter[] $children
	 * @return EntityQueryFilter
	 */
	public function setChildren($children) {
		$this->children = $children;

		return $this;
	}

	/**
	 * Returns fieldName.
	 *
	 * The 'fieldName' indicates the property on the entity which should be filtered. This property is only applicable on filter type 'LEAF'.
	 *
	 * @return string
	 */
	public function getFieldName() {
		return $this->fieldName;
	}

	/**
	 * Sets fieldName.
	 *
	 * @param string $fieldName
	 * @return EntityQueryFilter
	 */
	public function setFieldName($fieldName) {
		$this->fieldName = $fieldName;

		return $this;
	}

	/**
	 * Returns operator.
	 *
	 * The 'operator' indicates what kind of filtering on the 'fieldName' is executed on. This property is only applicable on filter type 'LEAF'.
	 *
	 * @return string
	 */
	public function getOperator() {
		return $this->operator;
	}

	/**
	 * Sets operator.
	 *
	 * @param string $operator
	 * @return EntityQueryFilter
	 */
	public function setOperator($operator) {
		$allowed_values = array('EQUALS', 'GREATER_THAN', 'GREATER_THAN_OR_EQUAL', 'LESS_THAN', 'LESS_THAN_OR_EQUAL', 'CONTAINS', 'NOT_EQUALS', 'NOT_CONTAINS', 'IS_NULL');
		if (!is_null($operator) && (!in_array($operator, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'operator', must be one of 'EQUALS', 'GREATER_THAN', 'GREATER_THAN_OR_EQUAL', 'LESS_THAN', 'LESS_THAN_OR_EQUAL', 'CONTAINS', 'NOT_EQUALS', 'NOT_CONTAINS', 'IS_NULL'");
		}
		$this->operator = $operator;

		return $this;
	}

	/**
	 * Returns type.
	 *
	 * The filter type controls how the query node is interpreted. I.e. if the node acts as leaf node or as a filter group.
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets type.
	 *
	 * @param string $type
	 * @return EntityQueryFilter
	 */
	public function setType($type) {
		$allowed_values = array('LEAF', 'OR', 'AND');
		if ((!in_array($type, $allowed_values))) {
			throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'LEAF', 'OR', 'AND'");
		}
		$this->type = $type;

		return $this;
	}

	/**
	 * Returns value.
	 *
	 * The 'value' is used to compare with the 'fieldName' as defined by the 'operator'. This property is only applicable on filter type 'LEAF'.
	 *
	 * @return object
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Sets value.
	 *
	 * @param object $value
	 * @return EntityQueryFilter
	 */
	public function setValue($value) {
		$this->value = $value;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		$allowed_values = array("EQUALS", "GREATER_THAN", "GREATER_THAN_OR_EQUAL", "LESS_THAN", "LESS_THAN_OR_EQUAL", "CONTAINS", "NOT_EQUALS", "NOT_CONTAINS", "IS_NULL");
		if (!in_array($this->getOperator(), $allowed_values)) {
			throw new ValidationException("invalid value for 'operator', must be one of #{allowed_values}.", 'operator', $this);
		}

		if ($this->getType() === null) {
			throw new ValidationException("'type' can't be null", 'type', $this);
		}
		$allowed_values = array("LEAF", "OR", "AND");
		if (!in_array($this->getType(), $allowed_values)) {
			throw new ValidationException("invalid value for 'type', must be one of #{allowed_values}.", 'type', $this);
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

