<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardTextBlock extends Dto
{
    /**
     * @param  ?TextComponent  $headline  Rich text content.
     * @param  ?ParagraphComponent  $body  A list of rich text content that is typically presented in a text box.
     */
    public function __construct(
        public ?TextComponent $headline = null,
        public ?ParagraphComponent $body = null,
    ) {}
}
