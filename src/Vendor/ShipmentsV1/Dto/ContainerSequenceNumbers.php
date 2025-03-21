<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ContainerSequenceNumbers extends Dto
{
    /**
     * @param  ?string  $containerSequenceNumber  A list of containers shipped
     */
    public function __construct(
        public ?string $containerSequenceNumber = null,
    ) {}
}
