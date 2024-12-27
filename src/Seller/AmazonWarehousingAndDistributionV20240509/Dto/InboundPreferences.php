<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class InboundPreferences extends Dto
{
    /**
     * @param  ?string  $destinationRegion  Pass a preferred region so that the inbound order can be shipped to an AWD warehouse located in that region. This doesn't guarantee the order to be assigned in the specified destination region as it depends on warehouse capacity availability. AWD currently supports following region IDs: [us-west, us-east]
     */
    public function __construct(
        public ?string $destinationRegion = null,
    ) {}
}