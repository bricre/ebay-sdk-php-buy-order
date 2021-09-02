<?php

namespace Ebay\Buy\Order;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'applyGuestCoupon' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
        ],
        'getGuestCheckoutSession' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
        ],
        'initiateGuestCheckoutSession' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
        ],
        'removeGuestCoupon' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
        ],
        'updateGuestQuantity' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
        ],
        'updateGuestShippingAddress' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
        ],
        'updateGuestShippingOption' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
        ],
        'getGuestPurchaseOrder' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestPurchaseOrderV2',
        ],
    ];
}
