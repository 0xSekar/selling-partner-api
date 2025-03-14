<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\UploadsV20201101\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\UploadsV20201101\Responses\CreateUploadDestinationResponse;

/**
 * createUploadDestinationForResource
 */
class CreateUploadDestinationForResource extends Request
{
    protected Method $method = Method::POST;

    /**
     * @param  string  $resource  The upload destination for your resource. For example, if you create an upload destination for the `createLegalDisclosure` operation of the Messaging API, the `{resource}` would be `/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`, and the entire path would be `/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`. If you create an upload destination for an Aplus content document, the `{resource}` would be `aplus/2020-11-01/contentDocuments` and the path would be `/uploads/2020-11-01/uploadDestinations/aplus/2020-11-01/contentDocuments`.
     * @param  array  $marketplaceIds  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  string  $contentMd5  An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit.
     * @param  ?string  $contentType  The content type of the file you upload.
     */
    public function __construct(
        protected string $resource,
        protected array $marketplaceIds,
        protected string $contentMd5,
        protected ?string $contentType = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/uploads/2020-11-01/uploadDestinations/{$this->resource}";
    }

    public function createDtoFromResponse(Response $response): CreateUploadDestinationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201, 400, 403, 404, 413, 415, 429, 500, 503 => CreateUploadDestinationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds, 'contentMD5' => $this->contentMd5, 'contentType' => $this->contentType]);
    }
}
