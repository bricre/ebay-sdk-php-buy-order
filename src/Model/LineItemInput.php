<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that defines the fields for a line item.
 */
class LineItemInput extends AbstractModel
{
    /**
     * The unique eBay-assigned identifier of an item. This ID is returned by the
     * Browse and Feed API methods. The ID must be in RESTful item ID format. For
     * example: v1|2**********6|5**********4 or v1|1**********9|0. For more information
     * about item IDs for RESTful APIs, see Legacy API compatibility. Each itemId will
     * become a single line item. Maximum:10 per checkout.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The quantity ordered in this line item.
     *
     * @var int
     */
    public $quantity = null;
}
