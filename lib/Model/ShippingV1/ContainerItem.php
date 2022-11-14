<?php
/**
 * ContainerItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.  **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ContainerItem Class Doc Comment
 *
 * @category Class
 * @description Item in the container.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ContainerItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContainerItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quantity' => 'float',
        'unit_price' => '\SellingPartnerApi\Model\ShippingV1\Currency',
        'unit_weight' => '\SellingPartnerApi\Model\ShippingV1\Weight',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'quantity' => null,
        'unit_price' => null,
        'unit_weight' => null,
        'title' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'quantity' => 'quantity',
        'unit_price' => 'unitPrice',
        'unit_weight' => 'unitWeight',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'unit_weight' => 'setUnitWeight',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'unit_weight' => 'getUnitWeight',
        'title' => 'getTitle'
    ];


    
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
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['unit_weight'] = $data['unit_weight'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['unit_weight'] === null) {
            $invalidProperties[] = "'unit_weight' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 30)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 30.";
        }

        return $invalidProperties;
    }


    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The quantity of the items of this type in the container.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }
    /**
     * Gets unit_price
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Currency
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Currency $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }
    /**
     * Gets unit_weight
     *
     * @return \SellingPartnerApi\Model\ShippingV1\Weight
     */
    public function getUnitWeight()
    {
        return $this->container['unit_weight'];
    }

    /**
     * Sets unit_weight
     *
     * @param \SellingPartnerApi\Model\ShippingV1\Weight $unit_weight unit_weight
     *
     * @return self
     */
    public function setUnitWeight($unit_weight)
    {
        $this->container['unit_weight'] = $unit_weight;

        return $this;
    }
    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title A descriptive title of the item.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if ((mb_strlen($title) > 30)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ContainerItem., must be smaller than or equal to 30.');
        }

        $this->container['title'] = $title;

        return $this;
    }
}


