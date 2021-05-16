<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CheckoutMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class CheckoutMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'ThirdPartyCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ThirdPartyCheckout'
     */
    const VALUE_THIRD_PARTY_CHECKOUT = 'ThirdPartyCheckout';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_THIRD_PARTY_CHECKOUT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OTHER,
            self::VALUE_THIRD_PARTY_CHECKOUT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
