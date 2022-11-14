<?php
/**
 * NonPartneredSmallParcelDataOutput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * NonPartneredSmallParcelDataOutput Class Doc Comment
 *
 * @category Class
 * @description Information returned by Amazon about a Small Parcel shipment by a carrier that has not partnered with Amazon.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class NonPartneredSmallParcelDataOutput extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NonPartneredSmallParcelDataOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_list' => '\SellingPartnerApi\Model\FbaInboundV0\NonPartneredSmallParcelPackageOutput[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'package_list' => 'PackageList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'package_list' => 'setPackageList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_list' => 'getPackageList'
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
        $this->container['package_list'] = $data['package_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['package_list'] === null) {
            $invalidProperties[] = "'package_list' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets package_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\NonPartneredSmallParcelPackageOutput[]
     */
    public function getPackageList()
    {
        return $this->container['package_list'];
    }

    /**
     * Sets package_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\NonPartneredSmallParcelPackageOutput[] $package_list A list of packages, including carrier, tracking number, and status information for each package.
     *
     * @return self
     */
    public function setPackageList($package_list)
    {
        $this->container['package_list'] = $package_list;

        return $this;
    }
}


