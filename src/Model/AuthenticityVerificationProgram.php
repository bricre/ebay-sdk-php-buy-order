<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that provides the status and outcome of an order line item going through
 * the Authenticity Guarantee verification process.
 */
class AuthenticityVerificationProgram extends AbstractModel
{
    /**
     * An informational message regarding the authentication outcome of an Authenticity
     * Guarantee verification inspection. Note: This field is conditionally returned
     * when there is information that applies to the Authenticity Guarantee program.
     *
     * @var string
     */
    public $outcomeReason = null;

    /**
     * An enumerated value that indicates whether the order line item has passed or
     * failed the Authenticity Guarantee verification inspection, or whether the
     * inspection and/or results are still pending. Note: This field is conditionally
     * returned when the purchase is complete. Valid Values: PENDING PASSED FAILED
     * INELIGIBLE For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/gct:AuthenticityVerificationStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The terms and conditions that apply to the Authenticity Guarantee program.
     *
     * @var string
     */
    public $termsWebUrl = null;
}
