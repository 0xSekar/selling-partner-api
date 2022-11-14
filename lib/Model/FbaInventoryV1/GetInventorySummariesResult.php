<?php
/**
 * GetInventorySummariesResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInventoryV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetInventorySummariesResult Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the getInventorySummaries operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetInventorySummariesResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetInventorySummariesResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'granularity' => '\SellingPartnerApi\Model\FbaInventoryV1\Granularity',
        'inventory_summaries' => '\SellingPartnerApi\Model\FbaInventoryV1\InventorySummary[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'granularity' => null,
        'inventory_summaries' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'granularity' => 'granularity',
        'inventory_summaries' => 'inventorySummaries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'granularity' => 'setGranularity',
        'inventory_summaries' => 'setInventorySummaries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'granularity' => 'getGranularity',
        'inventory_summaries' => 'getInventorySummaries'
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
        $this->container['granularity'] = $data['granularity'] ?? null;
        $this->container['inventory_summaries'] = $data['inventory_summaries'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['granularity'] === null) {
            $invalidProperties[] = "'granularity' can't be null";
        }
        if ($this->container['inventory_summaries'] === null) {
            $invalidProperties[] = "'inventory_summaries' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets granularity
     *
     * @return \SellingPartnerApi\Model\FbaInventoryV1\Granularity
     */
    public function getGranularity()
    {
        return $this->container['granularity'];
    }

    /**
     * Sets granularity
     *
     * @param \SellingPartnerApi\Model\FbaInventoryV1\Granularity $granularity granularity
     *
     * @return self
     */
    public function setGranularity($granularity)
    {
        $this->container['granularity'] = $granularity;

        return $this;
    }
    /**
     * Gets inventory_summaries
     *
     * @return \SellingPartnerApi\Model\FbaInventoryV1\InventorySummary[]
     */
    public function getInventorySummaries()
    {
        return $this->container['inventory_summaries'];
    }

    /**
     * Sets inventory_summaries
     *
     * @param \SellingPartnerApi\Model\FbaInventoryV1\InventorySummary[] $inventory_summaries A list of inventory summaries.
     *
     * @return self
     */
    public function setInventorySummaries($inventory_summaries)
    {
        $this->container['inventory_summaries'] = $inventory_summaries;

        return $this;
    }
}


