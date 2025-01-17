<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderItemAcknowledgement extends Dto
{
    /**
     * @param  string  $acknowledgementCode  This indicates the acknowledgement code.
     * @param  ItemQuantity  $acknowledgedQuantity  Details of quantity ordered.
     * @param  ?\DateTimeInterface  $scheduledShipDate  Estimated ship date per line item. Must be in ISO-8601 date/time format.
     * @param  ?\DateTimeInterface  $scheduledDeliveryDate  Estimated delivery date per line item. Must be in ISO-8601 date/time format.
     * @param  ?string  $rejectionReason  Indicates the reason for rejection.
     */
    public function __construct(
        public string $acknowledgementCode,
        public ItemQuantity $acknowledgedQuantity,
        public ?\DateTimeInterface $scheduledShipDate = null,
        public ?\DateTimeInterface $scheduledDeliveryDate = null,
        public ?string $rejectionReason = null,
    ) {}
}
