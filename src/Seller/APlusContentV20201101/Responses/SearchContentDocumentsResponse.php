<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\ContentMetadataRecord;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\Error;

final class SearchContentDocumentsResponse extends Response
{
    protected static array $complexArrayTypes = [
        'contentMetadataRecords' => ContentMetadataRecord::class,
        'warnings' => Error::class,
    ];

    /**
     * @param  ContentMetadataRecord[]  $contentMetadataRecords  A list of A+ Content metadata records.
     * @param  Error[]|null  $warnings  A set of messages to the user, such as warnings or comments.
     * @param  ?string  $nextPageToken  A token that you use to fetch a specific page when there are multiple pages of results.
     */
    public function __construct(
        public readonly array $contentMetadataRecords,
        public readonly ?array $warnings = null,
        public readonly ?string $nextPageToken = null,
    ) {}
}
