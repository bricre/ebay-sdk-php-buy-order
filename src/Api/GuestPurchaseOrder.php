<?php

namespace Ebay\Buy\Order\Api;

use Ebay\Buy\Order\Model\GuestPurchaseOrderV2 as GuestPurchaseOrderV2;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class GuestPurchaseOrder extends AbstractAPI
{
    /**
     * Note: This version of the Order API (v2) currently only supports the guest
     * payment flow for eBay managed payments. To view the v1_beta version of the Order
     * API, which includes both member and guest checkout payment flows, refer to the
     * Order_v1 API documentation. (Limited Release) This method is only available to
     * select developers approved by business units. This method retrieves the details
     * about a specific guest purchase order. It returns the line items, including
     * purchase order status, dates created and modified, item quantity and listing
     * data, payment and shipping information, and prices, taxes, discounts and
     * credits. The purchaseOrderId is passed in as a URI parameter and is required.
     * Note: The purchaseOrderId value is returned in the call-back URL that is sent
     * through the new eBay pay widget. For more information about eBay managed
     * payments and the new Order API payment flow, see Order API in the Buying
     * Integration Guide. You can use this method to not only get the details of a
     * purchase order, but to check the value of the purchaseOrderPaymentStatus field
     * to determine if the order has been paid for. If the order has been paid for,
     * this field will return PAID. For a list of supported sites and other
     * restrictions, see API Restrictions in the Order API overview. The URLs for this
     * method are: Production URL:
     * https://api.ebay.com/buy/order/v2/guest_purchase_order/{purchaseOrderId} Sandbox
     * URL:
     * https://api.sandbox.ebay.com/buy/order/v2/guest_purchase_order/{purchaseOrderId}.
     *
     * @param string $purchaseOrderId The unique identifier of a purchase order made by
     *                                a guest buyer, for which details are to be retrieved. Note: This value is
     *                                returned in the response URL that is sent through the new eBay pay widget. For
     *                                more information about eBay managed payments and the new Order API payment flow,
     *                                see Order API in the Buying Integration Guide.
     *
     * @return GuestPurchaseOrderV2
     */
    public function get(string $purchaseOrderId): GuestPurchaseOrderV2
    {
        return $this->client->request('getGuestPurchaseOrder', 'GET', "guest_purchase_order/{$purchaseOrderId}",
            [
            ]
        );
    }
}
