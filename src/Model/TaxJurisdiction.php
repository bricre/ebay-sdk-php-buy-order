<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the tax jurisdiction details.
 */
class TaxJurisdiction extends AbstractModel
{
    /**
     * The region of the tax jurisdiction.
     *
     * @var \Ebay\Buy\Order\Model\Region
     */
    public $region = null;

    /**
     * The identifier of the tax jurisdiction.
     *
     * @var string
     */
    public $taxJurisdictionId = null;
}
