<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\Address;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\DestinationDetails;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\DistributionPackageQuantity;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\InboundPreferences;

final class InboundOrder extends Response
{
    protected static array $complexArrayTypes = ['packagesToInbound' => DistributionPackageQuantity::class];

    /**
     * @param  \DateTimeInterface  $createdAt  Date when this order was created.
     * @param  string  $orderId  Inbound order ID.
     * @param  string  $orderStatus  The supported statuses for an inbound order.
     * @param  Address  $originAddress  Shipping address that represents the origin or destination location.
     * @param  DistributionPackageQuantity[]  $packagesToInbound  List of packages to be inbounded.
     * @param  ?DestinationDetails  $destinationDetails  Destination details of an inbound order based on the assigned region and DC for the order.
     * @param  ?string  $externalReferenceId  Reference ID that can be used to correlate the order with partner resources.
     * @param  ?InboundPreferences  $preferences  Preferences that can be passed in context of an inbound order
     * @param  ?\DateTimeInterface  $updatedAt  Date when this order was last updated.
     */
    public function __construct(
        public readonly \DateTimeInterface $createdAt,
        public readonly string $orderId,
        public readonly string $orderStatus,
        public readonly Address $originAddress,
        public readonly array $packagesToInbound,
        public readonly ?DestinationDetails $destinationDetails = null,
        public readonly ?string $externalReferenceId = null,
        public readonly ?InboundPreferences $preferences = null,
        public readonly ?\DateTimeInterface $updatedAt = null,
    ) {}
}
