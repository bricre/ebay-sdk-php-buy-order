<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that defines the fields for line item information in a purchase order.
 */
class OrderLineItemV2 extends AbstractModel
{
    /**
     * A container that is returned for orders that are eligible for eBay's
     * Authenticity Guarantee program. The seller ships Authenticity Guarantee program
     * items to the authentication partner instead of the buyer. If the item is
     * successfully authenticated, the authenticator will ship the item to the buyer.
     *
     * @var \Ebay\Buy\Order\Model\AuthenticityVerificationProgram
     */
    public $authenticityVerification = null;

    /**
     * The cost of a single quantity of the line item. Note: The price includes the
     * value-added tax (VAT) for applicable jurisdictions when requested from supported
     * marketplaces. In this case, users must pass the X-EBAY-C-MARKETPLACE-ID request
     * header specifying the supported marketplace (such as EBAY_GB) to see
     * VAT-inclusive pricing. For more information on VAT, refer to VAT Obligations in
     * the EU.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $baseUnitPrice = null;

    /**
     * A breakdown of the fees applicable to the line item.
     *
     * @var \Ebay\Buy\Order\Model\Fee[]
     */
    public $fees = null;

    /**
     * An eBay-assigned URL of the item image.
     *
     * @var \Ebay\Buy\Order\Model\Image
     */
    public $image = null;

    /**
     * The eBay identifier of an item. This ID is returned by the Browse and Feed API
     * methods.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * A container that returns fields to support using the Post Order API for returns
     * and cancellations. For information about what is returned in these fields and
     * how to use the Post Order API, see Using the Post Order API. Note: The Post
     * Order API can be used only with eBay member checkouts.
     *
     * @var \Ebay\Buy\Order\Model\LegacyReference
     */
    public $legacyReference = null;

    /**
     * A unique eBay-assigned ID value that identifies a line item in a checkout
     * session. This is created by the initiateGuestCheckoutSession.
     *
     * @var string
     */
    public $lineItemId = null;

    /**
     * An enumeration value that indicates the payment status of the line item. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:LineItemPaymentStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $lineItemPaymentStatus = null;

    /**
     * An enumeration value that indicates the fulfillment state of this line item.
     * Note: When there is no tracking information, the status will never change from
     * FULFILLMENT_IN_PROGRESS; without tracking information, eBay has no way of
     * knowing whether the order was delivered. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:LineItemStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $lineItemStatus = null;

    /**
     * The total cost for the line item, taking into account the quantity, any seller
     * item discounts, and any coupon that applies. Note: This does not include any
     * shipping discounts, shipping costs, fees, or seller adjustments.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $netPrice = null;

    /**
     * The unique order ID for the line item. Maximum Length: 40 characters.
     *
     * @var string
     */
    public $orderId = null;

    /**
     * An array of promotions applied to the line item.
     *
     * @var \Ebay\Buy\Order\Model\Promotion[]
     */
    public $promotions = null;

    /**
     * The quantity ordered for the line item.
     *
     * @var int
     */
    public $quantity = null;

    /**
     * A container for information about the seller offering this item, such as the
     * seller's user name.
     *
     * @var \Ebay\Buy\Order\Model\Seller
     */
    public $seller = null;

    /**
     * A container for information about the shipping details of the order.
     *
     * @var \Ebay\Buy\Order\Model\ShippingDetail
     */
    public $shippingDetail = null;

    /**
     * A container for the tax information for the line item.
     *
     * @var \Ebay\Buy\Order\Model\TaxDetail[]
     */
    public $taxDetails = null;
}
