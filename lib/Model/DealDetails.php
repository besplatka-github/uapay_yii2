<?php
/**
 * DealDetails
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
 * DealDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DealDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DealDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'external_id' => 'string',
        'cart_id' => 'int',
        'product_title' => 'string',
        'product_weight' => 'int',
        'product_price' => 'int',
        'handler_price' => 'int',
        'status' => 'string',
        'reason_step' => 'string',
        'seller_first_name' => 'string',
        'seller_last_name' => 'string',
        'seller_patronymic' => 'string',
        'seller_phone' => 'string',
        'seller_email' => 'string',
        'buyer_first_name' => 'string',
        'buyer_last_name' => 'string',
        'buyer_patronymic' => 'string',
        'buyer_phone' => 'string',
        'buyer_email' => 'string',
        'ad_id' => 'string',
        'lg' => 'string',
        'created_at' => 'string',
        'handler' => '\Swagger\Client\Model\DealDetailsHandler',
        'handler_payment' => '\Swagger\Client\Model\DealDetailsHandlerPayment',
        'product_payment' => '\Swagger\Client\Model\DealDetailsProductPayment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'external_id' => null,
        'cart_id' => null,
        'product_title' => null,
        'product_weight' => null,
        'product_price' => null,
        'handler_price' => null,
        'status' => null,
        'reason_step' => null,
        'seller_first_name' => null,
        'seller_last_name' => null,
        'seller_patronymic' => null,
        'seller_phone' => null,
        'seller_email' => null,
        'buyer_first_name' => null,
        'buyer_last_name' => null,
        'buyer_patronymic' => null,
        'buyer_phone' => null,
        'buyer_email' => null,
        'ad_id' => null,
        'lg' => null,
        'created_at' => null,
        'handler' => null,
        'handler_payment' => null,
        'product_payment' => null
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
        'external_id' => 'externalId',
        'cart_id' => 'cartId',
        'product_title' => 'productTitle',
        'product_weight' => 'productWeight',
        'product_price' => 'productPrice',
        'handler_price' => 'handlerPrice',
        'status' => 'status',
        'reason_step' => 'reasonStep',
        'seller_first_name' => 'sellerFirstName',
        'seller_last_name' => 'sellerLastName',
        'seller_patronymic' => 'sellerPatronymic',
        'seller_phone' => 'sellerPhone',
        'seller_email' => 'sellerEmail',
        'buyer_first_name' => 'buyerFirstName',
        'buyer_last_name' => 'buyerLastName',
        'buyer_patronymic' => 'buyerPatronymic',
        'buyer_phone' => 'buyerPhone',
        'buyer_email' => 'buyerEmail',
        'ad_id' => 'adId',
        'lg' => 'lg',
        'created_at' => 'createdAt',
        'handler' => 'handler',
        'handler_payment' => 'handlerPayment',
        'product_payment' => 'productPayment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'external_id' => 'setExternalId',
        'cart_id' => 'setCartId',
        'product_title' => 'setProductTitle',
        'product_weight' => 'setProductWeight',
        'product_price' => 'setProductPrice',
        'handler_price' => 'setHandlerPrice',
        'status' => 'setStatus',
        'reason_step' => 'setReasonStep',
        'seller_first_name' => 'setSellerFirstName',
        'seller_last_name' => 'setSellerLastName',
        'seller_patronymic' => 'setSellerPatronymic',
        'seller_phone' => 'setSellerPhone',
        'seller_email' => 'setSellerEmail',
        'buyer_first_name' => 'setBuyerFirstName',
        'buyer_last_name' => 'setBuyerLastName',
        'buyer_patronymic' => 'setBuyerPatronymic',
        'buyer_phone' => 'setBuyerPhone',
        'buyer_email' => 'setBuyerEmail',
        'ad_id' => 'setAdId',
        'lg' => 'setLg',
        'created_at' => 'setCreatedAt',
        'handler' => 'setHandler',
        'handler_payment' => 'setHandlerPayment',
        'product_payment' => 'setProductPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'external_id' => 'getExternalId',
        'cart_id' => 'getCartId',
        'product_title' => 'getProductTitle',
        'product_weight' => 'getProductWeight',
        'product_price' => 'getProductPrice',
        'handler_price' => 'getHandlerPrice',
        'status' => 'getStatus',
        'reason_step' => 'getReasonStep',
        'seller_first_name' => 'getSellerFirstName',
        'seller_last_name' => 'getSellerLastName',
        'seller_patronymic' => 'getSellerPatronymic',
        'seller_phone' => 'getSellerPhone',
        'seller_email' => 'getSellerEmail',
        'buyer_first_name' => 'getBuyerFirstName',
        'buyer_last_name' => 'getBuyerLastName',
        'buyer_patronymic' => 'getBuyerPatronymic',
        'buyer_phone' => 'getBuyerPhone',
        'buyer_email' => 'getBuyerEmail',
        'ad_id' => 'getAdId',
        'lg' => 'getLg',
        'created_at' => 'getCreatedAt',
        'handler' => 'getHandler',
        'handler_payment' => 'getHandlerPayment',
        'product_payment' => 'getProductPayment'
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
    const STATUS_CONFIRMED = 'CONFIRMED';
    const STATUS_SENT = 'SENT';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_EXPIRED = 'EXPIRED';
    const REASON_STEP__NEW = 'NEW';
    const REASON_STEP_PAID = 'PAID';
    const REASON_STEP_CONFIRMED = 'CONFIRMED';
    const REASON_STEP_SENT = 'SENT';
    const REASON_STEP_DELIVERED = 'DELIVERED';
    const LG_UK = 'uk';
    const LG_RU = 'ru';
    const LG_EN = 'en';
    

    
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
            self::STATUS_CONFIRMED,
            self::STATUS_SENT,
            self::STATUS_DELIVERED,
            self::STATUS_FINISHED,
            self::STATUS_REJECTED,
            self::STATUS_EXPIRED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonStepAllowableValues()
    {
        return [
            self::REASON_STEP__NEW,
            self::REASON_STEP_PAID,
            self::REASON_STEP_CONFIRMED,
            self::REASON_STEP_SENT,
            self::REASON_STEP_DELIVERED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLgAllowableValues()
    {
        return [
            self::LG_UK,
            self::LG_RU,
            self::LG_EN,
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
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['cart_id'] = isset($data['cart_id']) ? $data['cart_id'] : null;
        $this->container['product_title'] = isset($data['product_title']) ? $data['product_title'] : null;
        $this->container['product_weight'] = isset($data['product_weight']) ? $data['product_weight'] : null;
        $this->container['product_price'] = isset($data['product_price']) ? $data['product_price'] : null;
        $this->container['handler_price'] = isset($data['handler_price']) ? $data['handler_price'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reason_step'] = isset($data['reason_step']) ? $data['reason_step'] : null;
        $this->container['seller_first_name'] = isset($data['seller_first_name']) ? $data['seller_first_name'] : null;
        $this->container['seller_last_name'] = isset($data['seller_last_name']) ? $data['seller_last_name'] : null;
        $this->container['seller_patronymic'] = isset($data['seller_patronymic']) ? $data['seller_patronymic'] : null;
        $this->container['seller_phone'] = isset($data['seller_phone']) ? $data['seller_phone'] : null;
        $this->container['seller_email'] = isset($data['seller_email']) ? $data['seller_email'] : null;
        $this->container['buyer_first_name'] = isset($data['buyer_first_name']) ? $data['buyer_first_name'] : null;
        $this->container['buyer_last_name'] = isset($data['buyer_last_name']) ? $data['buyer_last_name'] : null;
        $this->container['buyer_patronymic'] = isset($data['buyer_patronymic']) ? $data['buyer_patronymic'] : null;
        $this->container['buyer_phone'] = isset($data['buyer_phone']) ? $data['buyer_phone'] : null;
        $this->container['buyer_email'] = isset($data['buyer_email']) ? $data['buyer_email'] : null;
        $this->container['ad_id'] = isset($data['ad_id']) ? $data['ad_id'] : null;
        $this->container['lg'] = isset($data['lg']) ? $data['lg'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['handler'] = isset($data['handler']) ? $data['handler'] : null;
        $this->container['handler_payment'] = isset($data['handler_payment']) ? $data['handler_payment'] : null;
        $this->container['product_payment'] = isset($data['product_payment']) ? $data['product_payment'] : null;
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

        $allowedValues = $this->getReasonStepAllowableValues();
        if (!is_null($this->container['reason_step']) && !in_array($this->container['reason_step'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason_step', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLgAllowableValues();
        if (!is_null($this->container['lg']) && !in_array($this->container['lg'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'lg', must be one of '%s'",
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets cart_id
     *
     * @return int
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param int $cart_id cart_id
     *
     * @return $this
     */
    public function setCartId($cart_id)
    {
        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets product_title
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->container['product_title'];
    }

    /**
     * Sets product_title
     *
     * @param string $product_title product_title
     *
     * @return $this
     */
    public function setProductTitle($product_title)
    {
        $this->container['product_title'] = $product_title;

        return $this;
    }

    /**
     * Gets product_weight
     *
     * @return int
     */
    public function getProductWeight()
    {
        return $this->container['product_weight'];
    }

    /**
     * Sets product_weight
     *
     * @param int $product_weight product_weight
     *
     * @return $this
     */
    public function setProductWeight($product_weight)
    {
        $this->container['product_weight'] = $product_weight;

        return $this;
    }

    /**
     * Gets product_price
     *
     * @return int
     */
    public function getProductPrice()
    {
        return $this->container['product_price'];
    }

    /**
     * Sets product_price
     *
     * @param int $product_price product_price
     *
     * @return $this
     */
    public function setProductPrice($product_price)
    {
        $this->container['product_price'] = $product_price;

        return $this;
    }

    /**
     * Gets handler_price
     *
     * @return int
     */
    public function getHandlerPrice()
    {
        return $this->container['handler_price'];
    }

    /**
     * Sets handler_price
     *
     * @param int $handler_price handler_price
     *
     * @return $this
     */
    public function setHandlerPrice($handler_price)
    {
        $this->container['handler_price'] = $handler_price;

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
     * Gets reason_step
     *
     * @return string
     */
    public function getReasonStep()
    {
        return $this->container['reason_step'];
    }

    /**
     * Sets reason_step
     *
     * @param string $reason_step reason_step
     *
     * @return $this
     */
    public function setReasonStep($reason_step)
    {
        $allowedValues = $this->getReasonStepAllowableValues();
        if (!is_null($reason_step) && !in_array($reason_step, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason_step', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason_step'] = $reason_step;

        return $this;
    }

    /**
     * Gets seller_first_name
     *
     * @return string
     */
    public function getSellerFirstName()
    {
        return $this->container['seller_first_name'];
    }

    /**
     * Sets seller_first_name
     *
     * @param string $seller_first_name seller_first_name
     *
     * @return $this
     */
    public function setSellerFirstName($seller_first_name)
    {
        $this->container['seller_first_name'] = $seller_first_name;

        return $this;
    }

    /**
     * Gets seller_last_name
     *
     * @return string
     */
    public function getSellerLastName()
    {
        return $this->container['seller_last_name'];
    }

    /**
     * Sets seller_last_name
     *
     * @param string $seller_last_name seller_last_name
     *
     * @return $this
     */
    public function setSellerLastName($seller_last_name)
    {
        $this->container['seller_last_name'] = $seller_last_name;

        return $this;
    }

    /**
     * Gets seller_patronymic
     *
     * @return string
     */
    public function getSellerPatronymic()
    {
        return $this->container['seller_patronymic'];
    }

    /**
     * Sets seller_patronymic
     *
     * @param string $seller_patronymic seller_patronymic
     *
     * @return $this
     */
    public function setSellerPatronymic($seller_patronymic)
    {
        $this->container['seller_patronymic'] = $seller_patronymic;

        return $this;
    }

    /**
     * Gets seller_phone
     *
     * @return string
     */
    public function getSellerPhone()
    {
        return $this->container['seller_phone'];
    }

    /**
     * Sets seller_phone
     *
     * @param string $seller_phone seller_phone
     *
     * @return $this
     */
    public function setSellerPhone($seller_phone)
    {
        $this->container['seller_phone'] = $seller_phone;

        return $this;
    }

    /**
     * Gets seller_email
     *
     * @return string
     */
    public function getSellerEmail()
    {
        return $this->container['seller_email'];
    }

    /**
     * Sets seller_email
     *
     * @param string $seller_email seller_email
     *
     * @return $this
     */
    public function setSellerEmail($seller_email)
    {
        $this->container['seller_email'] = $seller_email;

        return $this;
    }

    /**
     * Gets buyer_first_name
     *
     * @return string
     */
    public function getBuyerFirstName()
    {
        return $this->container['buyer_first_name'];
    }

    /**
     * Sets buyer_first_name
     *
     * @param string $buyer_first_name buyer_first_name
     *
     * @return $this
     */
    public function setBuyerFirstName($buyer_first_name)
    {
        $this->container['buyer_first_name'] = $buyer_first_name;

        return $this;
    }

    /**
     * Gets buyer_last_name
     *
     * @return string
     */
    public function getBuyerLastName()
    {
        return $this->container['buyer_last_name'];
    }

    /**
     * Sets buyer_last_name
     *
     * @param string $buyer_last_name buyer_last_name
     *
     * @return $this
     */
    public function setBuyerLastName($buyer_last_name)
    {
        $this->container['buyer_last_name'] = $buyer_last_name;

        return $this;
    }

    /**
     * Gets buyer_patronymic
     *
     * @return string
     */
    public function getBuyerPatronymic()
    {
        return $this->container['buyer_patronymic'];
    }

    /**
     * Sets buyer_patronymic
     *
     * @param string $buyer_patronymic buyer_patronymic
     *
     * @return $this
     */
    public function setBuyerPatronymic($buyer_patronymic)
    {
        $this->container['buyer_patronymic'] = $buyer_patronymic;

        return $this;
    }

    /**
     * Gets buyer_phone
     *
     * @return string
     */
    public function getBuyerPhone()
    {
        return $this->container['buyer_phone'];
    }

    /**
     * Sets buyer_phone
     *
     * @param string $buyer_phone buyer_phone
     *
     * @return $this
     */
    public function setBuyerPhone($buyer_phone)
    {
        $this->container['buyer_phone'] = $buyer_phone;

        return $this;
    }

    /**
     * Gets buyer_email
     *
     * @return string
     */
    public function getBuyerEmail()
    {
        return $this->container['buyer_email'];
    }

    /**
     * Sets buyer_email
     *
     * @param string $buyer_email buyer_email
     *
     * @return $this
     */
    public function setBuyerEmail($buyer_email)
    {
        $this->container['buyer_email'] = $buyer_email;

        return $this;
    }

    /**
     * Gets ad_id
     *
     * @return string
     */
    public function getAdId()
    {
        return $this->container['ad_id'];
    }

    /**
     * Sets ad_id
     *
     * @param string $ad_id ad_id
     *
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->container['ad_id'] = $ad_id;

        return $this;
    }

    /**
     * Gets lg
     *
     * @return string
     */
    public function getLg()
    {
        return $this->container['lg'];
    }

    /**
     * Sets lg
     *
     * @param string $lg lg
     *
     * @return $this
     */
    public function setLg($lg)
    {
        $allowedValues = $this->getLgAllowableValues();
        if (!is_null($lg) && !in_array($lg, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'lg', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['lg'] = $lg;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets handler
     *
     * @return \Swagger\Client\Model\DealDetailsHandler
     */
    public function getHandler()
    {
        return $this->container['handler'];
    }

    /**
     * Sets handler
     *
     * @param \Swagger\Client\Model\DealDetailsHandler $handler handler
     *
     * @return $this
     */
    public function setHandler($handler)
    {
        $this->container['handler'] = $handler;

        return $this;
    }

    /**
     * Gets handler_payment
     *
     * @return \Swagger\Client\Model\DealDetailsHandlerPayment
     */
    public function getHandlerPayment()
    {
        return $this->container['handler_payment'];
    }

    /**
     * Sets handler_payment
     *
     * @param \Swagger\Client\Model\DealDetailsHandlerPayment $handler_payment handler_payment
     *
     * @return $this
     */
    public function setHandlerPayment($handler_payment)
    {
        $this->container['handler_payment'] = $handler_payment;

        return $this;
    }

    /**
     * Gets product_payment
     *
     * @return \Swagger\Client\Model\DealDetailsProductPayment
     */
    public function getProductPayment()
    {
        return $this->container['product_payment'];
    }

    /**
     * Sets product_payment
     *
     * @param \Swagger\Client\Model\DealDetailsProductPayment $product_payment product_payment
     *
     * @return $this
     */
    public function setProductPayment($product_payment)
    {
        $this->container['product_payment'] = $product_payment;

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


