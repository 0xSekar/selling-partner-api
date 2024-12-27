<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class PrepInstruction extends Dto
{
    /**
     * @param  ?string  $prepOwner  The owner of the preparations, if special preparations are required.
     * @param  ?string  $prepType  The type of preparation to be done. For more information about preparing items, refer to [Prep guidance](https://sellercentral.amazon.com/help/hub/reference/external/GF4G7547KSLDX2KC) on Seller Central.
     */
    public function __construct(
        public ?string $prepOwner = null,
        public ?string $prepType = null,
    ) {}
}