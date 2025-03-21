<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class ShipmentDetails extends Dto
{
    /**
     * @param  \DateTimeInterface  $shippedDate  The date of the shipment's departure from vendor's location. Vendors send ASNs within 30 minutes of departure from their warehouse/distribution center or six hours prior to the appointment time at the Amazon destination warehouse. The shipped date mentioned in the shipment confirmation cannot be in the future.
     * @param  string  $shipmentStatus  The shipment status.
     * @param  ?bool  $isPriorityShipment  Provide the priority of the shipment.
     * @param  ?string  $vendorOrderNumber  The vendor order number is a unique identifier generated by a vendor for their reference.
     * @param  ?\DateTimeInterface  $estimatedDeliveryDate  The date on which the shipment is expected to reach the buyer's warehouse. The date is estimated based on the average transit time between the ship-from location and the destination. Usually, the exact appointment time is unknown when creating the shipment confirmation and is later provided by the buyer.
     */
    public function __construct(
        public \DateTimeInterface $shippedDate,
        public string $shipmentStatus,
        public ?bool $isPriorityShipment = null,
        public ?string $vendorOrderNumber = null,
        public ?\DateTimeInterface $estimatedDeliveryDate = null,
    ) {}
}
