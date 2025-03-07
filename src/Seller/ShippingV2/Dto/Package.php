<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Package extends Dto
{
    protected static array $complexArrayTypes = ['items' => Item::class, 'charges' => ChargeComponent::class];

    /**
     * @param  Dimensions  $dimensions  A set of measurements for a three-dimensional object.
     * @param  Weight  $weight  The weight in the units indicated.
     * @param  Currency  $insuredValue  The monetary value in the currency indicated, in ISO 4217 standard format.
     * @param  string  $packageClientReferenceId  A client provided unique identifier for a package being shipped. This value should be saved by the client to pass as a parameter to the getShipmentDocuments operation.
     * @param  Item[]  $items  A list of items.
     * @param  ?bool  $isHazmat  When true, the package contains hazardous materials. Defaults to false.
     * @param  ?string  $sellerDisplayName  The seller name displayed on the label.
     * @param  ChargeComponent[]|null  $charges  A list of charges based on the shipping service charges applied on a package.
     */
    public function __construct(
        public Dimensions $dimensions,
        public Weight $weight,
        public Currency $insuredValue,
        public string $packageClientReferenceId,
        public array $items,
        public ?bool $isHazmat = null,
        public ?string $sellerDisplayName = null,
        public ?array $charges = null,
    ) {}
}
