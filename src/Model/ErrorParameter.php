<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An array of name/value pairs that provide details regarding the error.
 */
class ErrorParameter extends AbstractModel
{
    /**
     * The name of the input field that caused an issue with the method request.
     *
     * @var string
     */
    public $name = null;

    /**
     * The actual value that was passed in for the element specified in the name field.
     *
     * @var string
     */
    public $value = null;
}
