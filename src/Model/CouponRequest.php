<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that defines the fields for the coupon information used in the request.
 */
class CouponRequest extends AbstractModel
{
    /**
     * The redemption code of the coupon. Maximum: One redemption code per order.
     *
     * @var string
     */
    public $redemptionCode = null;
}
