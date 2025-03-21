<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class ContentDocument extends Dto
{
    protected static array $complexArrayTypes = ['contentModuleList' => ContentModule::class];

    /**
     * @param  string  $name  The A+ Content document name.
     * @param  string  $contentType  The A+ Content document type.
     * @param  string  $locale  The IETF language tag, which supports the primary language subtag and one secondary language subtag. The secondary language subtag is usually a regional designation. This doesn't support subtags other than the primary and secondary subtags.
     *                          **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$
     * @param  ContentModule[]  $contentModuleList  A list of A+ Content modules.
     * @param  ?string  $contentSubType  The A+ Content document subtype. This represents a special-purpose type of an A+ Content document. Not every A+ Content document type has a subtype, and subtypes can change at any time.
     */
    public function __construct(
        public string $name,
        public string $contentType,
        public string $locale,
        public array $contentModuleList,
        public ?string $contentSubType = null,
    ) {}
}
