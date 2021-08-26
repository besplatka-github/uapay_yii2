<?php
/**
 * DealDetailsProductPayment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UAPAY EscrowBox
 *
 * Escrow box from UAPAY
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
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
 * DealDetailsProductPayment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DealDetailsProductPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DealDetails_productPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'type' => 'string',
        'amount' => 'int',
        'commission_amount' => 'int',
        'status' => 'string',
        'waiting_for' => 'string',
        'details' => '\Swagger\Client\Model\DealDetailsHandlerPaymentDetails',
        'pay_receipt' => 'string',
        'reverse_receipt' => 'string',
        'finish_receipt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'type' => null,
        'amount' => null,
        'commission_amount' => null,
        'status' => null,
        'waiting_for' => null,
        'details' => null,
        'pay_receipt' => null,
        'reverse_receipt' => null,
        'finish_receipt' => null
    ];

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
        'id' => 'id',
        'type' => 'type',
        'amount' => 'amount',
        'commission_amount' => 'commissionAmount',
        'status' => 'status',
        'waiting_for' => 'waitingFor',
        'details' => 'details',
        'pay_receipt' => 'payReceipt',
        'reverse_receipt' => 'reverseReceipt',
        'finish_receipt' => 'finishReceipt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'amount' => 'setAmount',
        'commission_amount' => 'setCommissionAmount',
        'status' => 'setStatus',
        'waiting_for' => 'setWaitingFor',
        'details' => 'setDetails',
        'pay_receipt' => 'setPayReceipt',
        'reverse_receipt' => 'setReverseReceipt',
        'finish_receipt' => 'setFinishReceipt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'amount' => 'getAmount',
        'commission_amount' => 'getCommissionAmount',
        'status' => 'getStatus',
        'waiting_for' => 'getWaitingFor',
        'details' => 'getDetails',
        'pay_receipt' => 'getPayReceipt',
        'reverse_receipt' => 'getReverseReceipt',
        'finish_receipt' => 'getFinishReceipt'
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
        return self::$swaggerModelName;
    }

    const STATUS__NEW = 'NEW';
    const STATUS_PAID = 'PAID';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_REVERSED = 'REVERSED';
    const STATUS_REJECTED = 'REJECTED';
    const WAITING_FOR_CONFIRMATION = 'CONFIRMATION';
    const WAITING_FOR_PAY_PROCESSING = 'PAY_PROCESSING';
    const WAITING_FOR_FINISH_PROCESSING = 'FINISH_PROCESSING';
    const WAITING_FOR_REVERSE_PROCESSING = 'REVERSE_PROCESSING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__NEW,
            self::STATUS_PAID,
            self::STATUS_FINISHED,
            self::STATUS_REVERSED,
            self::STATUS_REJECTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWaitingForAllowableValues()
    {
        return [
            self::WAITING_FOR_CONFIRMATION,
            self::WAITING_FOR_PAY_PROCESSING,
            self::WAITING_FOR_FINISH_PROCESSING,
            self::WAITING_FOR_REVERSE_PROCESSING,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['commission_amount'] = isset($data['commission_amount']) ? $data['commission_amount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['waiting_for'] = isset($data['waiting_for']) ? $data['waiting_for'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['pay_receipt'] = isset($data['pay_receipt']) ? $data['pay_receipt'] : null;
        $this->container['reverse_receipt'] = isset($data['reverse_receipt']) ? $data['reverse_receipt'] : null;
        $this->container['finish_receipt'] = isset($data['finish_receipt']) ? $data['finish_receipt'] : null;
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
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWaitingForAllowableValues();
        if (!is_null($this->container['waiting_for']) && !in_array($this->container['waiting_for'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'waiting_for', must be one of '%s'",
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets commission_amount
     *
     * @return int
     */
    public function getCommissionAmount()
    {
        return $this->container['commission_amount'];
    }

    /**
     * Sets commission_amount
     *
     * @param int $commission_amount commission_amount
     *
     * @return $this
     */
    public function setCommissionAmount($commission_amount)
    {
        $this->container['commission_amount'] = $commission_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets waiting_for
     *
     * @return string
     */
    public function getWaitingFor()
    {
        return $this->container['waiting_for'];
    }

    /**
     * Sets waiting_for
     *
     * @param string $waiting_for waiting_for
     *
     * @return $this
     */
    public function setWaitingFor($waiting_for)
    {
        $allowedValues = $this->getWaitingForAllowableValues();
        if (!is_null($waiting_for) && !in_array($waiting_for, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'waiting_for', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['waiting_for'] = $waiting_for;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Swagger\Client\Model\DealDetailsHandlerPaymentDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Swagger\Client\Model\DealDetailsHandlerPaymentDetails $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets pay_receipt
     *
     * @return string
     */
    public function getPayReceipt()
    {
        return $this->container['pay_receipt'];
    }

    /**
     * Sets pay_receipt
     *
     * @param string $pay_receipt pay_receipt
     *
     * @return $this
     */
    public function setPayReceipt($pay_receipt)
    {
        $this->container['pay_receipt'] = $pay_receipt;

        return $this;
    }

    /**
     * Gets reverse_receipt
     *
     * @return string
     */
    public function getReverseReceipt()
    {
        return $this->container['reverse_receipt'];
    }

    /**
     * Sets reverse_receipt
     *
     * @param string $reverse_receipt reverse_receipt
     *
     * @return $this
     */
    public function setReverseReceipt($reverse_receipt)
    {
        $this->container['reverse_receipt'] = $reverse_receipt;

        return $this;
    }

    /**
     * Gets finish_receipt
     *
     * @return string
     */
    public function getFinishReceipt()
    {
        return $this->container['finish_receipt'];
    }

    /**
     * Sets finish_receipt
     *
     * @param string $finish_receipt finish_receipt
     *
     * @return $this
     */
    public function setFinishReceipt($finish_receipt)
    {
        $this->container['finish_receipt'] = $finish_receipt;

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


