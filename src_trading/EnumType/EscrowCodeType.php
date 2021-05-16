<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EscrowCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class EscrowCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ByBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'ByBuyer'
     */
    const VALUE_BY_BUYER = 'ByBuyer';
    /**
     * Constant for value 'BySeller'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'BySeller'
     */
    const VALUE_BY_SELLER = 'BySeller';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BY_BUYER
     * @uses self::VALUE_BY_SELLER
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BY_BUYER,
            self::VALUE_BY_SELLER,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
