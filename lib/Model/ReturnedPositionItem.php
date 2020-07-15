<?php
/**
 * ReturnedPositionItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\ReturnsV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Returns Status Info API
 *
 * Returns Interface
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\ReturnsV2\Model;

use \ArrayAccess;
use \EzzeSiftuz\ReturnsV2\ObjectSerializer;

/**
 * ReturnedPositionItem Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\ReturnsV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnedPositionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReturnedPositionItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'position_item_id' => 'string',
'sales_order_id' => 'string',
'condition' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'position_item_id' => null,
'sales_order_id' => null,
'condition' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'position_item_id' => 'positionItemId',
'sales_order_id' => 'salesOrderId',
'condition' => 'condition'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position_item_id' => 'setPositionItemId',
'sales_order_id' => 'setSalesOrderId',
'condition' => 'setCondition'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position_item_id' => 'getPositionItemId',
'sales_order_id' => 'getSalesOrderId',
'condition' => 'getCondition'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CONDITION_E = 'A/B/C/D/E';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION_E,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['position_item_id'] = isset($data['position_item_id']) ? $data['position_item_id'] : null;
        $this->container['sales_order_id'] = isset($data['sales_order_id']) ? $data['sales_order_id'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['position_item_id'] === null) {
            $invalidProperties[] = "'position_item_id' can't be null";
        }
        if ($this->container['sales_order_id'] === null) {
            $invalidProperties[] = "'sales_order_id' can't be null";
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets position_item_id
     *
     * @return string
     */
    public function getPositionItemId()
    {
        return $this->container['position_item_id'];
    }

    /**
     * Sets position_item_id
     *
     * @param string $position_item_id Sales position item ID
     *
     * @return $this
     */
    public function setPositionItemId($position_item_id)
    {
        $this->container['position_item_id'] = $position_item_id;

        return $this;
    }

    /**
     * Gets sales_order_id
     *
     * @return string
     */
    public function getSalesOrderId()
    {
        return $this->container['sales_order_id'];
    }

    /**
     * Sets sales_order_id
     *
     * @param string $sales_order_id Sales order ID
     *
     * @return $this
     */
    public function setSalesOrderId($sales_order_id)
    {
        $this->container['sales_order_id'] = $sales_order_id;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition Condition of the returned item
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($condition) && !in_array($condition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'condition', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition'] = $condition;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
