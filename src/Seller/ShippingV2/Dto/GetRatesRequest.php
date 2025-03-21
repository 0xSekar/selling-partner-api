<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class GetRatesRequest extends Dto
{
    protected static array $complexArrayTypes = [
        'packages' => Package::class,
        'taxDetails' => TaxDetail::class,
        'clientReferenceDetails' => ClientReferenceDetail::class,
        'carrierAccounts' => CarrierAccount::class,
    ];

    /**
     * @param  Address  $shipFrom  The address.
     * @param  Package[]  $packages  A list of packages to be shipped through a shipping service offering.
     * @param  ChannelDetails  $channelDetails  Shipment source channel related information.
     * @param  ?Address  $shipTo  The address.
     * @param  ?Address  $returnTo  The address.
     * @param  ?\DateTimeInterface  $shipDate  The ship date and time (the requested pickup). This defaults to the current date and time.
     * @param  ?ShipperInstruction  $shipperInstruction  The shipper instruction.
     * @param  ?ValueAddedServiceDetails  $valueAddedServices  A collection of supported value-added services.
     * @param  TaxDetail[]|null  $taxDetails  A list of tax detail information.
     * @param  ClientReferenceDetail[]|null  $clientReferenceDetails  Object to pass additional information about the MCI Integrator shipperType: List of ClientReferenceDetail
     * @param  ?string  $shipmentType  Shipment type.
     * @param  ?AccessPointDetails  $destinationAccessPointDetails  AccessPointDetails object
     * @param  CarrierAccount[]|null  $carrierAccounts  A list of CarrierAccounts
     */
    public function __construct(
        public Address $shipFrom,
        public array $packages,
        public ChannelDetails $channelDetails,
        public ?Address $shipTo = null,
        public ?Address $returnTo = null,
        public ?\DateTimeInterface $shipDate = null,
        public ?ShipperInstruction $shipperInstruction = null,
        public ?ValueAddedServiceDetails $valueAddedServices = null,
        public ?array $taxDetails = null,
        public ?array $clientReferenceDetails = null,
        public ?string $shipmentType = null,
        public ?AccessPointDetails $destinationAccessPointDetails = null,
        public ?array $carrierAccounts = null,
    ) {}
}
