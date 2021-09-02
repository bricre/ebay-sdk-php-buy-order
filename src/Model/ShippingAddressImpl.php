<?php

namespace Ebay\Buy\Order\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A type that defines the shipping address fields. Note: If the address cannot be
 * validated, a warning message is returned along with the response.
 */
class ShippingAddressImpl extends AbstractModel
{
    /**
     * The first line of the street address where the item is being shipped. Maximum:
     * 40 characters for AU, CA, and US marketplaces 35 characters for DE and GB
     * marketplaces 50 characters for all other marketplaces.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address where the item is being shipped. This
     * optional field can be used for information such as 'Suite Number' or 'Apt
     * Number'. Maximum: 40 characters for AU, CA, and US marketplaces 35 characters
     * for DE and GB marketplaces 50 characters for all other marketplaces.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city of the address where the item is being shipped.
     *
     * @var string
     */
    public $city = null;

    /**
     * The two letter code representing the country of the address. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/order/types/bas:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county of the address where the item is being shipped.
     *
     * @var string
     */
    public $county = null;

    /**
     * The phone number of the person receiving the package. Note: It is highly
     * recommended that when entering the phone number you include the country code.
     * For example, if a US phone number is 4********4, you would enter +14********4.
     * If you do not include this code, the service will use the country specified in
     * the country field. You can find the country code at https://countrycode.org.
     *
     * @var string
     */
    public $phoneNumber = null;

    /**
     * The postal code of the address where the item is being shipped. Note: This is
     * optional when shipping to EBAY_HK (Hong Kong).
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The name of the person receiving the package.
     *
     * @var \Ebay\Buy\Order\Model\Recipient
     */
    public $recipient = null;

    /**
     * The state or province of the address. Note: For the US marketplace, this is a
     * two-character value. For a list of valid values, see US State and Canada
     * Province Codes.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
