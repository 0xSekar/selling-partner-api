<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\TransfersV20240601\Dto;

use SellingPartnerApi\Dto;

final class PaymentMethodFilter extends Dto
{
    /**
     * @param  ?string  $paymentInstrumentId  A string with no white spaces.
     * @param  ?string[]  $subscribedMarketplaces  A list of strings.
     * @param  ?AssignmentFilter  $assignmentFilter  The list of default payment instruments that are returned when you use the `assignmentFilter`.
     * @param  ?string[]  $paymentInstrumentTypes  The list of payment instrument types that are present.
     */
    public function __construct(
        public ?string $paymentInstrumentId = null,
        public ?array $subscribedMarketplaces = null,
        public ?AssignmentFilter $assignmentFilter = null,
        public ?array $paymentInstrumentTypes = null,
    ) {}
}
