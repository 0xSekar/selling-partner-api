<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class ReferencePrice extends Dto
{
    /**
     * @param  string  $name  The name of the reference price like `CompetitivePriceThreshold`.
     * @param  MoneyType  $price  Currency type and monetary value. Schema for demonstrating pricing info.
     */
    public function __construct(
        public readonly string $name,
        public readonly MoneyType $price,
    ) {
    }
}