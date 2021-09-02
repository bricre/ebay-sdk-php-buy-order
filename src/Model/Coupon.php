<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that defines the fields for the coupon information. Note: This container
 * is not returned for the getGuestPurchaseOrder method.
 */
class Coupon extends AbstractModel
{
    /**
     * The coupon redemption code.
     *
     * @var string
     */
    public $redemptionCode = null;
}
