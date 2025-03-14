<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderItem extends Dto
{
    /**
     * @param  string  $itemSequenceNumber  Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     * @param  ItemQuantity  $orderedQuantity  Details of quantity ordered.
     * @param  Money  $netPrice  An amount of money, including units in the form of currency.
     * @param  ?string  $buyerProductIdentifier  Buyer's standard identification number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item.
     * @param  ?string  $title  Title for the item.
     * @param  ?ScheduledDeliveryShipment  $scheduledDeliveryShipment  Dates for the scheduled delivery shipments.
     * @param  ?GiftDetails  $giftDetails  Gift details for the item.
     * @param  ?TaxDetails  $taxDetails  Total tax details for the line item.
     * @param  ?Money  $totalPrice  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public string $itemSequenceNumber,
        public ItemQuantity $orderedQuantity,
        public Money $netPrice,
        public ?string $buyerProductIdentifier = null,
        public ?string $vendorProductIdentifier = null,
        public ?string $title = null,
        public ?ScheduledDeliveryShipment $scheduledDeliveryShipment = null,
        public ?GiftDetails $giftDetails = null,
        public ?TaxDetails $taxDetails = null,
        public ?Money $totalPrice = null,
    ) {}
}
