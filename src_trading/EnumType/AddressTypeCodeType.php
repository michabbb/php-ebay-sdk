<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that indicates whether or not a nonprofit charity organization is registered with the PayPal Giving Fund. See the <a href="http://pages.ebay.com/help/sell/nonprofit.html#enrolling">Enrolling your nonprofit</a> help
 * topic for more information on registering with the PayPal Giving Fund and the benefits that come with being a registered eBay for Charity organization.
 * @subpackage Enumerations
 */
class AddressTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Contact'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the address contained in the <b>NonProfitAddress</b> container is for a non-registered charity organization.
     * @return string 'Contact'
     */
    const VALUE_CONTACT = 'Contact';
    /**
     * Constant for value 'Registered'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the address contained in the <b>NonProfitAddress</b> container is for a charity organization registered with the PayPal Giving Fund.
     * @return string 'Registered'
     */
    const VALUE_REGISTERED = 'Registered';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CONTACT
     * @uses self::VALUE_REGISTERED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CONTACT,
            self::VALUE_REGISTERED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
