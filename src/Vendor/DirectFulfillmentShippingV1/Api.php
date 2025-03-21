<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\SubmitShipmentConfirmationsRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\SubmitShipmentStatusUpdatesRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\SubmitShippingLabelsRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\GetCustomerInvoice;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\GetCustomerInvoices;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\GetPackingSlip;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\GetPackingSlips;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\GetShippingLabel;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\GetShippingLabels;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\SubmitShipmentConfirmations;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\SubmitShipmentStatusUpdates;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests\SubmitShippingLabelRequest;

class Api extends BaseResource
{
    /**
     * @param  \DateTimeInterface  $createdAfter  Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  \DateTimeInterface  $createdBefore  Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $shipFromPartyId  The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
     * @param  ?int  $limit  The limit to the number of records returned.
     * @param  ?string  $sortOrder  Sort ASC or DESC by order creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call.
     */
    public function getShippingLabels(
        \DateTimeInterface $createdAfter,
        \DateTimeInterface $createdBefore,
        ?string $shipFromPartyId = null,
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetShippingLabels($createdAfter, $createdBefore, $shipFromPartyId, $limit, $sortOrder, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  SubmitShippingLabelsRequest  $submitShippingLabelsRequest  The request schema for the submitShippingLabelRequest operation.
     */
    public function submitShippingLabelRequest(SubmitShippingLabelsRequest $submitShippingLabelsRequest): Response
    {
        $request = new SubmitShippingLabelRequest($submitShippingLabelsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $purchaseOrderNumber  The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order.
     */
    public function getShippingLabel(string $purchaseOrderNumber): Response
    {
        $request = new GetShippingLabel($purchaseOrderNumber);

        return $this->connector->send($request);
    }

    /**
     * @param  SubmitShipmentConfirmationsRequest  $submitShipmentConfirmationsRequest  The request schema for the submitShipmentConfirmations operation.
     */
    public function submitShipmentConfirmations(
        SubmitShipmentConfirmationsRequest $submitShipmentConfirmationsRequest,
    ): Response {
        $request = new SubmitShipmentConfirmations($submitShipmentConfirmationsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  SubmitShipmentStatusUpdatesRequest  $submitShipmentStatusUpdatesRequest  Represents the request payload for submitting updates to the status of shipments, containing an array of one or more ShipmentStatusUpdate objects.
     */
    public function submitShipmentStatusUpdates(
        SubmitShipmentStatusUpdatesRequest $submitShipmentStatusUpdatesRequest,
    ): Response {
        $request = new SubmitShipmentStatusUpdates($submitShipmentStatusUpdatesRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  \DateTimeInterface  $createdAfter  Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  \DateTimeInterface  $createdBefore  Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $shipFromPartyId  The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
     * @param  ?int  $limit  The limit to the number of records returned
     * @param  ?string  $sortOrder  Sort ASC or DESC by order creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.
     */
    public function getCustomerInvoices(
        \DateTimeInterface $createdAfter,
        \DateTimeInterface $createdBefore,
        ?string $shipFromPartyId = null,
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetCustomerInvoices($createdAfter, $createdBefore, $shipFromPartyId, $limit, $sortOrder, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $purchaseOrderNumber  Purchase order number of the shipment for which to return the invoice.
     */
    public function getCustomerInvoice(string $purchaseOrderNumber): Response
    {
        $request = new GetCustomerInvoice($purchaseOrderNumber);

        return $this->connector->send($request);
    }

    /**
     * @param  \DateTimeInterface  $createdAfter  Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  \DateTimeInterface  $createdBefore  Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $shipFromPartyId  The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses.
     * @param  ?int  $limit  The limit to the number of records returned
     * @param  ?string  $sortOrder  Sort ASC or DESC by packing slip creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call.
     */
    public function getPackingSlips(
        \DateTimeInterface $createdAfter,
        \DateTimeInterface $createdBefore,
        ?string $shipFromPartyId = null,
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetPackingSlips($createdAfter, $createdBefore, $shipFromPartyId, $limit, $sortOrder, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $purchaseOrderNumber  The purchaseOrderNumber for the packing slip you want.
     */
    public function getPackingSlip(string $purchaseOrderNumber): Response
    {
        $request = new GetPackingSlip($purchaseOrderNumber);

        return $this->connector->send($request);
    }
}
