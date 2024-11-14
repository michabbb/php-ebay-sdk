<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressOwnerCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type used by the <b>ShippingAddress.AddressOwner</b> field in order management calls to indicate the owner of the shipping address on file.
 * @subpackage Enumerations
 */
class AddressOwnerCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'eBay'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's shipping address being referenced is on file with eBay.
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAY_PAL,
            self::VALUE_E_BAY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
