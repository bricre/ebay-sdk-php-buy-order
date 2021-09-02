<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that returns cost details for all of the line items in the order, such as
 * tax, item price, delivery cost, and discounts.
 */
class PricingSummaryV2 extends AbstractModel
{
    /**
     * The total amount of the coupon discounts in the purchase order.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $additionalSavings = null;

    /**
     * The total amount of any seller adjustments. An adjustment can be a credit or
     * debit. This is used to catch any monetary changes to the order that are not
     * already captured in one of the other fields.
     *
     * @var \Ebay\Buy\Order\Model\Adjustment
     */
    public $adjustment = null;

    /**
     * The delivery cost for all of the line items, after any delivery discounts are
     * applied. For example, there are four line items, and the delivery cost for each
     * line item is $5. One of the line items qualifies for free delivery. The
     * deliveryCost would be $15, which is the total cost for delivering all of the
     * line items after the discount is applied. Note: The cost includes the
     * value-added tax (VAT) for applicable jurisdictions when requested from supported
     * marketplaces. In this case, users must pass the X-EBAY-C-MARKETPLACE-ID request
     * header specifying the supported marketplace (such as EBAY_GB) to see
     * VAT-inclusive pricing. For more information on VAT, refer to VAT Obligations in
     * the EU.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $deliveryCost = null;

    /**
     * The total amount of any fees for all the line items in the order, such as a
     * recycling fee.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $fee = null;

    /**
     * The sum of all Global Shipping Program import charges, for all the line items in
     * the order.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $importCharges = null;

    /**
     * The type of import tax applicable to the order, and the total amount of tax for
     * all line items in the order.
     *
     * @var \Ebay\Buy\Order\Model\ImportTax
     */
    public $importTax = null;

    /**
     * The total discount amount for all line items in the order. For example, there
     * are four line items in the order. Two of the line items qualify for a Buy 1, Get
     * 1 offer, which is a $6 and a $15 discount. The priceDiscount value returned
     * would be 21, which is the total of the two discounts. Note: Delivery discount
     * amounts, if applicable, are not reflected in the value returned in this field.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $priceDiscount = null;

    /**
     * The total cost for all line items in the order, taking into account the item
     * quantity, but before adding taxes and delivery costs, or applying discounts,
     * fees, and adjustments. Note: The price includes the value-added tax (VAT) for
     * applicable jurisdictions when requested from supported marketplaces. In this
     * case, users must pass the X-EBAY-C-MARKETPLACE-ID request header specifying the
     * supported marketplace (such as EBAY_GB) to see VAT-inclusive pricing. For more
     * information on VAT, refer to VAT Obligations in the EU.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $priceSubtotal = null;

    /**
     * The total amount of taxes for all line items in the order.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $tax = null;

    /**
     * The total cost of the order, which includes: (priceSubtotal - priceDiscount) +
     * deliveryCost + tax +/- adjustment + fee + importCharges - additionalSavings.
     *
     * @var \Ebay\Buy\Order\Model\Amount
     */
    public $total = null;
}
