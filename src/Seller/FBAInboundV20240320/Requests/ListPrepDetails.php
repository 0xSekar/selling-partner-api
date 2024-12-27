<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ListPrepDetailsResponse;

/**
 * listPrepDetails
 */
class ListPrepDetails extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  The marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  array  $mskus  A list of merchant SKUs, a merchant-supplied identifier of a specific SKU.
     */
    public function __construct(
        protected string $marketplaceId,
        protected array $mskus,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/inbound/fba/2024-03-20/items/prepDetails';
    }

    public function createDtoFromResponse(Response $response): ListPrepDetailsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ListPrepDetailsResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId, 'mskus' => $this->mskus]);
    }
}