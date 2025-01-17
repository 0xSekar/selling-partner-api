<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ValueAddedServiceChargeEvent extends Dto
{
    protected static array $attributeMap = [
        'transactionType' => 'TransactionType',
        'postedDate' => 'PostedDate',
        'description' => 'Description',
        'transactionAmount' => 'TransactionAmount',
    ];

    /**
     * @param  ?string  $transactionType  Indicates the type of transaction.
     *
     * Example: 'Other Support Service fees'
     * @param  ?\DateTimeInterface  $postedDate  Fields with a schema type of date are in ISO 8601 date time format (for example GroupBeginDate).
     * @param  ?string  $description  A short description of the service charge event.
     * @param  ?Currency  $transactionAmount  A currency type and amount.
     */
    public function __construct(
        public ?string $transactionType = null,
        public ?\DateTimeInterface $postedDate = null,
        public ?string $description = null,
        public ?Currency $transactionAmount = null,
    ) {}
}
