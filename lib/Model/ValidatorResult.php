<?php
/**
 * ValidatorResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly\Model;

use \ArrayAccess;
use \Fastly\ObjectSerializer;

/**
 * ValidatorResult Class Doc Comment
 *
 * @category Class
 * @description Results from VCL linting
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ValidatorResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'validator_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'msg' => 'string',
        'status' => 'string',
        'errors' => 'string[]',
        'warnings' => 'string[]',
        'messages' => '\Fastly\Model\ValidatorResultMessages[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'msg' => null,
        'status' => null,
        'errors' => null,
        'warnings' => null,
        'messages' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyTypes()
    {
        return self::$fastlyTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyFormats()
    {
        return self::$fastlyFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'msg' => 'msg',
        'status' => 'status',
        'errors' => 'errors',
        'warnings' => 'warnings',
        'messages' => 'messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'msg' => 'setMsg',
        'status' => 'setStatus',
        'errors' => 'setErrors',
        'warnings' => 'setWarnings',
        'messages' => 'setMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'msg' => 'getMsg',
        'status' => 'getStatus',
        'errors' => 'getErrors',
        'warnings' => 'getWarnings',
        'messages' => 'getMessages'
    ];

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
        return self::$fastlyModelName;
    }

    const STATUS_ERROR = 'error';
    const STATUS_OK = 'ok';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ERROR,
            self::STATUS_OK,
        ];
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
        $this->container['msg'] = $data['msg'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
        $this->container['messages'] = $data['messages'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets msg
     *
     * @return string|null
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string|null $msg msg
     *
     * @return self
     */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return string[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param string[]|null $errors errors
     *
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return string[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param string[]|null $warnings warnings
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \Fastly\Model\ValidatorResultMessages[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Fastly\Model\ValidatorResultMessages[]|null $messages messages
     *
     * @return self
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


