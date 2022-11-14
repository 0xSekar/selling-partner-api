<?php
/**
 * GetOffersHttpStatusLine
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetOffersHttpStatusLine Class Doc Comment
 *
 * @category Class
 * @description The HTTP status line associated with the response.  For more information, consult [RFC 2616](https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html).
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetOffersHttpStatusLine extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetOffersHttpStatusLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status_code' => 'int',
        'reason_phrase' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status_code' => null,
        'reason_phrase' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status_code' => 'statusCode',
        'reason_phrase' => 'reasonPhrase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'status_code' => 'setStatusCode',
        'reason_phrase' => 'setReasonPhrase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status_code' => 'getStatusCode',
        'reason_phrase' => 'getReasonPhrase'
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
        $this->container['status_code'] = $data['status_code'] ?? null;
        $this->container['reason_phrase'] = $data['reason_phrase'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['status_code']) && ($this->container['status_code'] > 599)) {
            $invalidProperties[] = "invalid value for 'status_code', must be smaller than or equal to 599.";
        }

        if (!is_null($this->container['status_code']) && ($this->container['status_code'] < 100)) {
            $invalidProperties[] = "invalid value for 'status_code', must be bigger than or equal to 100.";
        }

        return $invalidProperties;
    }


    /**
     * Gets status_code
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int|null $status_code The HTTP response Status Code.
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {

        if (!is_null($status_code) && ($status_code > 599)) {
            throw new \InvalidArgumentException('invalid value for $status_code when calling GetOffersHttpStatusLine., must be smaller than or equal to 599.');
        }
        if (!is_null($status_code) && ($status_code < 100)) {
            throw new \InvalidArgumentException('invalid value for $status_code when calling GetOffersHttpStatusLine., must be bigger than or equal to 100.');
        }

        $this->container['status_code'] = $status_code;

        return $this;
    }
    /**
     * Gets reason_phrase
     *
     * @return string|null
     */
    public function getReasonPhrase()
    {
        return $this->container['reason_phrase'];
    }

    /**
     * Sets reason_phrase
     *
     * @param string|null $reason_phrase The HTTP response Reason-Phase.
     *
     * @return self
     */
    public function setReasonPhrase($reason_phrase)
    {
        $this->container['reason_phrase'] = $reason_phrase;

        return $this;
    }
}


