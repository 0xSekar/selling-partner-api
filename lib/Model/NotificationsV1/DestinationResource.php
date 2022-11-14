<?php
/**
 * DestinationResource
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Notifications
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more. For more information, see the [Notifications Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
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

namespace SellingPartnerApi\Model\NotificationsV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * DestinationResource Class Doc Comment
 *
 * @category Class
 * @description The destination resource types.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DestinationResource extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DestinationResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sqs' => '\SellingPartnerApi\Model\NotificationsV1\SqsResource',
        'event_bridge' => '\SellingPartnerApi\Model\NotificationsV1\EventBridgeResource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sqs' => null,
        'event_bridge' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sqs' => 'sqs',
        'event_bridge' => 'eventBridge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'sqs' => 'setSqs',
        'event_bridge' => 'setEventBridge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sqs' => 'getSqs',
        'event_bridge' => 'getEventBridge'
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
        $this->container['sqs'] = $data['sqs'] ?? null;
        $this->container['event_bridge'] = $data['event_bridge'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets sqs
     *
     * @return \SellingPartnerApi\Model\NotificationsV1\SqsResource|null
     */
    public function getSqs()
    {
        return $this->container['sqs'];
    }

    /**
     * Sets sqs
     *
     * @param \SellingPartnerApi\Model\NotificationsV1\SqsResource|null $sqs sqs
     *
     * @return self
     */
    public function setSqs($sqs)
    {
        $this->container['sqs'] = $sqs;

        return $this;
    }
    /**
     * Gets event_bridge
     *
     * @return \SellingPartnerApi\Model\NotificationsV1\EventBridgeResource|null
     */
    public function getEventBridge()
    {
        return $this->container['event_bridge'];
    }

    /**
     * Sets event_bridge
     *
     * @param \SellingPartnerApi\Model\NotificationsV1\EventBridgeResource|null $event_bridge event_bridge
     *
     * @return self
     */
    public function setEventBridge($event_bridge)
    {
        $this->container['event_bridge'] = $event_bridge;

        return $this;
    }
}


