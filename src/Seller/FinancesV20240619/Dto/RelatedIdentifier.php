<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Dto;

use SellingPartnerApi\Dto;

final class RelatedIdentifier extends Dto
{
    /**
     * @param  ?string  $relatedIdentifierName  Enumerated set of related business identifier names.
     * @param  ?string  $relatedIdentifierValue  Corresponding value of RelatedIdentifierName
     */
    public function __construct(
        public ?string $relatedIdentifierName = null,
        public ?string $relatedIdentifierValue = null,
    ) {}
}
