<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class ContainerLabel extends Dto
{
    /**
     * @param  string  $content  The `Base64encoded` string of the container label content.
     * @param  string  $format  The format of the container label.
     * @param  ?string  $containerTrackingNumber  The container (pallet) tracking identifier from the shipping carrier.
     */
    public function __construct(
        public string $content,
        public string $format,
        public ?string $containerTrackingNumber = null,
    ) {}
}