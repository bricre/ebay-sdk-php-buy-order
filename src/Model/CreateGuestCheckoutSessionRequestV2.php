<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that defines the fields used to create an eBay guest checkout session.
 */
class CreateGuestCheckoutSessionRequestV2 extends AbstractModel
{
    /**
     * The buyer's email address.
     *
     * @var string
     */
    public $contactEmail = null;

    /**
     * An array used to define the line item(s) and desired quantity for an eBay guest
     * checkout session. Maximum: 10 line items.
     *
     * @var \Ebay\Buy\Order\Model\LineItemInput[]
     */
    public $lineItemInputs = null;

    /**
     * A container that defines the shipping address for an eBay guest checkout
     * session. The Order API supports only domestic shipping. For example, an item
     * purchased on the EBAY_DE marketplace can be shipped only to an address in
     * Germany. Note: If the address cannot be validated, a warning message is returned
     * along with the response.
     *
     * @var \Ebay\Buy\Order\Model\ShippingAddress
     */
    public $shippingAddress = null;
}
