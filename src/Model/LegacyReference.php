<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that defines the fields to support using the Post Order API for returns
 * and cancellations. Restriction: The Post Order API can be used only with eBay
 * member checkouts.
 */
class LegacyReference extends AbstractModel
{
    /**
     * The legacy ID used to identify an item. This is used by the Post Order API
     * Create Return Request method. This call initiates the item return process. For
     * more information on how to use this field in the Post Order API, see Create a
     * return request in the Buy Integration Guide. Restriction: The Post Order API can
     * be used only with eBay member checkouts.
     *
     * @var string
     */
    public $legacyItemId = null;

    /**
     * The legacy ID of the order. This is used by the Post Order API Submit
     * Cancellation Request method. This method initiates the item cancellation
     * process. For more information on how to use this field in the Post Order API,
     * see Using the Post Order API. Restriction: The Post Order API can be used only
     * with eBay member checkouts.
     *
     * @var string
     */
    public $legacyOrderId = null;

    /**
     * The legacy ID of the transaction. This is used by the Post Order API Create
     * Return Request call. This call initiates the item return process. For more
     * information on how to use this field in the Post Order API, see Using the Post
     * Order API in the Buy Integration Guide. Restriction: The Post Order API can be
     * used only with eBay member checkouts.
     *
     * @var string
     */
    public $legacyTransactionId = null;
}
