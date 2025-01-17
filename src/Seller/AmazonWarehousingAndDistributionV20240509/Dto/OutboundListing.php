<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class OutboundListing extends Dto
{
    protected static array $complexArrayTypes = ['outboundOrders' => OutboundOrder::class];

    /**
     * @param  ?string  $nextToken  TA token that is used to retrieve the next page of results. The response includes `nextToken` when the number of results exceeds the specified `maxResults` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     * @param  OutboundOrder[]|null  $outboundOrders  List of outbound orders.
     */
    public function __construct(
        public ?string $nextToken = null,
        public ?array $outboundOrders = null,
    ) {}
}
