<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class UpdateInboundPlanNameRequest extends Dto
{
    /**
     * @param  string  $name  A human-readable name to update the inbound plan name to.
     */
    public function __construct(
        public readonly string $name,
    ) {
    }
}