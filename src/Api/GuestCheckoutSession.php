<?php

namespace Ebay\Buy\Order\Api;

use Ebay\Buy\Order\Model\CouponRequest as CouponRequest;
use Ebay\Buy\Order\Model\CreateGuestCheckoutSessionRequestV2 as CreateGuestCheckoutSessionRequestV2;
use Ebay\Buy\Order\Model\GuestCheckoutSessionResponseV2 as GuestCheckoutSessionResponseV2;
use Ebay\Buy\Order\Model\ShippingAddressImpl as ShippingAddressImpl;
use Ebay\Buy\Order\Model\UpdateQuantity as UpdateQuantity;
use Ebay\Buy\Order\Model\UpdateShippingOption as UpdateShippingOption;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class GuestCheckoutSession extends AbstractAPI
{
    /**
     * Note: This version of the Order API (v2) currently only supports the guest
     * payment flow for eBay managed payments. To view the v1_beta version of the Order
     * API, which includes both member and guest checkout payment flows, refer to the
     * Order_v1 API documentation. (Limited Release) This method is only available to
     * select developers approved by business units. This method adds a coupon to an
     * eBay guest checkout session and applies it to all the eligible items in the
     * order. The checkoutSessionId is passed in as a URI parameter and is required.
     * The redemption code of the coupon is in the payload and is also required. For a
     * list of supported sites and other restrictions, see API Restrictions in the
     * Order API overview. The URLs for this method are: Production URL:
     * https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/apply_coupon
     * Sandbox URL:
     * https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/apply_coupon.
     *
     * @param string        $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                         eBay marketplace, that is returned by the initiateGuestCheckoutSession method.
     *                                         Note: When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID
     *                                         must be the same as that used when this guest checkout session was created. See
     *                                         Checkout session restrictions in the Buy Integration Guide for details.
     * @param CouponRequest $Model             the container for the fields used to apply a coupon
     *                                         to a guest checkout session
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function applyGuestCoupon(string $checkoutSessionId, CouponRequest $Model): GuestCheckoutSessionResponseV2
    {
        return $this->client->request('applyGuestCoupon', 'POST', "guest_checkout_session/{$checkoutSessionId}/apply_coupon",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Note: This version of the Order API (v2) currently only supports the guest
     * payment flow for eBay managed payments. To view the v1_beta version of the Order
     * API, which includes both member and guest checkout payment flows, refer to the
     * Order_v1 API documentation. (Limited Release) This method is only available to
     * select developers approved by business units. This method returns the details of
     * the specified guest checkout session. The checkoutSessionId is passed in as a
     * URI parameter and is required. This method has no request payload. For a list of
     * supported sites and other restrictions, see API Restrictions in the Order API
     * overview. The URLs for this method are: Production URL:
     * https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}
     * Sandbox URL:
     * https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}.
     *
     * @param string $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                  eBay marketplace, that is returned by the initiateGuestCheckoutSession method.
     *                                  Note: When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID
     *                                  must be the same as that used when this guest checkout session was created. See
     *                                  Checkout session restrictions in the Buy Integration Guide for details.
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function get(string $checkoutSessionId): GuestCheckoutSessionResponseV2
    {
        return $this->client->request('getGuestCheckoutSession', 'GET', "guest_checkout_session/{$checkoutSessionId}",
            [
            ]
        );
    }

    /**
     * Note: This version of the Order API (v2) currently only supports the guest
     * payment flow for eBay managed payments. To view the v1_beta version of the Order
     * API, which includes both member and guest checkout payment flows, refer to the
     * Order_v1 API documentation. (Limited Release) This method is only available to
     * select developers approved by business units. This method creates an eBay guest
     * checkout session, which is the first step in performing a checkout. The method
     * returns a checkoutSessionId that you use as a URI parameter in subsequent guest
     * checkout methods. Also see Negative Testing Using Stubs for information on how
     * to emulate error conditions for this method using stubs. TIP: To test the entire
     * checkout flow, you might need a &quot;test&quot; credit card. You can generate a
     * credit card number from http://www.getcreditcardnumbers.com. For a list of
     * supported sites and other restrictions, see API Restrictions in the Order API
     * overview. The URLs for this method are: Production URL:
     * https://apix.ebay.com/buy/order/v2/guest_checkout_session/initiate Sandbox URL:
     * https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/initiate.
     *
     * @param CreateGuestCheckoutSessionRequestV2 $Model the container for the fields
     *                                                   used by the initiateGuestCheckoutSession method
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function initiate(CreateGuestCheckoutSessionRequestV2 $Model): GuestCheckoutSessionResponseV2
    {
        return $this->client->request('initiateGuestCheckoutSession', 'POST', 'guest_checkout_session/initiate',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Note: This version of the Order API (v2) currently only supports the guest
     * payment flow for eBay managed payments. To view the v1_beta version of the Order
     * API, which includes both member and guest checkout payment flows, refer to the
     * Order_v1 API documentation. (Limited Release) This method is only available to
     * select developers approved by business units. This method removes a coupon from
     * an eBay guest checkout session. The checkoutSessionId is passed in as a URI
     * parameter and is required. The redemption code of the coupon is specified in the
     * payload and is also required. For a list of supported sites and other
     * restrictions, see API Restrictions in the Order API overview. The URLs for this
     * method are: Production URL:
     * https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/remove_coupon
     * Sandbox URL:
     * https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/remove_coupon.
     *
     * @param string        $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                         eBay marketplace, that is returned by the initiateGuestCheckoutSession method.
     *                                         Note: When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID
     *                                         must be the same as that used when this guest checkout session was created. See
     *                                         Checkout session restrictions in the Buy Integration Guide for details.
     * @param CouponRequest $Model             the container for the fields used by the
     *                                         removeGuestCoupon method
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function removeGuestCoupon(string $checkoutSessionId, CouponRequest $Model): GuestCheckoutSessionResponseV2
    {
        return $this->client->request('removeGuestCoupon', 'POST', "guest_checkout_session/{$checkoutSessionId}/remove_coupon",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Note: This version of the Order API (v2) currently only supports the guest
     * payment flow for eBay managed payments. To view the v1_beta version of the Order
     * API, which includes both member and guest checkout payment flows, refer to the
     * Order_v1 API documentation. (Limited Release) This method is only available to
     * select developers approved by business units. This method changes the quantity
     * of the specified line item in an eBay guest checkout session. For a list of
     * supported sites and other restrictions, see API Restrictions in the Order API
     * overview. The URLs for this method are: Production URL:
     * https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_quantity
     * Sandbox URL:
     * https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_quantity.
     *
     * @param string         $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                          eBay marketplace, that is returned by the initiateGuestCheckoutSession method.
     *                                          Note: When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID
     *                                          must be the same as that used when this guest checkout session was created. See
     *                                          Checkout session restrictions in the Buy Integration Guide for details.
     * @param UpdateQuantity $Model             the container for the fields used by the
     *                                          updateGuestQuantity method
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function updateGuestQuantity(string $checkoutSessionId, UpdateQuantity $Model): GuestCheckoutSessionResponseV2
    {
        return $this->client->request('updateGuestQuantity', 'POST', "guest_checkout_session/{$checkoutSessionId}/update_quantity",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Note: This version of the Order API (v2) currently only supports the guest
     * payment flow for eBay managed payments. To view the v1_beta version of the Order
     * API, which includes both member and guest checkout payment flows, refer to the
     * Order_v1 API documentation. (Limited Release) This method is only available to
     * select developers approved by business units. This method changes the shipping
     * address for the order in an eBay guest checkout session. All the line items in
     * an order must be shipped to the same address, but the shipping method can be
     * specific to the line item. Note: If the address submitted cannot be validated, a
     * warning message will be returned. This does not prevent the method from
     * executing, but you may want to verify the address. For a list of supported sites
     * and other restrictions, see API Restrictions in the Order API overview. The URLs
     * for this method are: Production URL:
     * https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_address
     * Sandbox URL:
     * https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_address.
     *
     * @param string              $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                               eBay marketplace, that is returned by the initiateGuestCheckoutSession method.
     *                                               Note: When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID
     *                                               must be the same as that used when this guest checkout session was created. See
     *                                               Checkout session restrictions in the Buy Integration Guide for details.
     * @param ShippingAddressImpl $Model             the container for the fields used by the
     *                                               updateGuestShippingAddress method
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function updateGuestShippingAddress(string $checkoutSessionId, ShippingAddressImpl $Model): GuestCheckoutSessionResponseV2
    {
        return $this->client->request('updateGuestShippingAddress', 'POST', "guest_checkout_session/{$checkoutSessionId}/update_shipping_address",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Note: This version of the Order API (v2) currently only supports the guest
     * payment flow for eBay managed payments. To view the v1_beta version of the Order
     * API, which includes both member and guest checkout payment flows, refer to the
     * Order_v1 API documentation. (Limited Release) This method is only available to
     * select developers approved by business units. This method changes the shipping
     * method for the specified line item in an eBay guest checkout session. The
     * shipping option can be set for each line item. This gives the shopper the
     * ability choose the cost of shipping for each line item. For a list of supported
     * sites and other restrictions, see API Restrictions in the Order API overview.
     * The URLs for this method are: Production URL:
     * https://apix.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_option
     * Sandbox URL:
     * https://apix.sandbox.ebay.com/buy/order/v2/guest_checkout_session/{checkoutSessionId}/update_shipping_option.
     *
     * @param string               $checkoutSessionId The eBay-assigned session ID, for a specific
     *                                                eBay marketplace, that is returned by the initiateGuestCheckoutSession method.
     *                                                Note: When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID
     *                                                must be the same as that used when this guest checkout session was created. See
     *                                                Checkout session restrictions in the Buy Integration Guide for details.
     * @param UpdateShippingOption $Model             the container for the fields used by the
     *                                                updateGuestShippingOption method
     *
     * @return GuestCheckoutSessionResponseV2
     */
    public function updateGuestShippingOption(string $checkoutSessionId, UpdateShippingOption $Model): GuestCheckoutSessionResponseV2
    {
        return $this->client->request('updateGuestShippingOption', 'POST', "guest_checkout_session/{$checkoutSessionId}/update_shipping_option",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
