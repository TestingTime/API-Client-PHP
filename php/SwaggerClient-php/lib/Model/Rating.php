<?php
/**
 * Rating
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TestingTime Public API
 *
 * Partners API to recruit test users with TestingTime programmatically
 *
 * OpenAPI spec version: 1.0.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Rating Class Doc Comment
 *
 * @category Class
 * @description Rating of a user
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Rating implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Rating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rating' => 'int',
'reason' => 'string',
'why' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rating' => null,
'reason' => null,
'why' => null    ];

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
        'rating' => 'rating',
'reason' => 'reason',
'why' => 'why'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rating' => 'setRating',
'reason' => 'setReason',
'why' => 'setWhy'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rating' => 'getRating',
'reason' => 'getReason',
'why' => 'getWhy'    ];

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

    const REASON_MISMATCH = 'MISMATCH';
const REASON_POOR_THINK_ALOUD = 'POOR_THINK_ALOUD';
const REASON_TECHNICAL_ISSUE = 'TECHNICAL_ISSUE';
const REASON_COMMUNICATION = 'COMMUNICATION';
const REASON_MOTIVATION = 'MOTIVATION';
const REASON_WAS_LATE = 'WAS_LATE';
const REASON_JUNKY = 'JUNKY';
const REASON_EXPERT = 'EXPERT';
const REASON_NO_SHOW = 'NO_SHOW';
const REASON_OTHER = 'OTHER';
const REASON_IGNORE = 'IGNORE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_MISMATCH,
self::REASON_POOR_THINK_ALOUD,
self::REASON_TECHNICAL_ISSUE,
self::REASON_COMMUNICATION,
self::REASON_MOTIVATION,
self::REASON_WAS_LATE,
self::REASON_JUNKY,
self::REASON_EXPERT,
self::REASON_NO_SHOW,
self::REASON_OTHER,
self::REASON_IGNORE,        ];
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
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['why'] = isset($data['why']) ? $data['why'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
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
     * Gets rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int $rating The final rating. 1-3 is not successful. 4-5 is a successful session.
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets why
     *
     * @return string
     */
    public function getWhy()
    {
        return $this->container['why'];
    }

    /**
     * Sets why
     *
     * @param string $why Free text explanation what happened in good or bad.
     *
     * @return $this
     */
    public function setWhy($why)
    {
        $this->container['why'] = $why;

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
