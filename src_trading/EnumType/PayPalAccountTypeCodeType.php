<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PayPalAccountTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines PayPal account types. <br><br> <span class="tablenote"><b>Note: </b> Although the <b>PayPalAccountType</b> field is still being returned for now, this field now has much less relevance since a seller's
 * eBay account and PayPal account are no longer linked together, and a seller having a PayPal account is no longer a requirement. </span>
 * @subpackage Enumerations
 */
class PayPalAccountTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Personal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is a Personal account.
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Premier'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is a Premier account.
     * @return string 'Premier'
     */
    const VALUE_PREMIER = 'Premier';
    /**
     * Constant for value 'Business'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is a Business account.
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account type is unknown.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is invalid.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_PREMIER
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERSONAL,
            self::VALUE_PREMIER,
            self::VALUE_BUSINESS,
            self::VALUE_UNKNOWN,
            self::VALUE_INVALID,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
