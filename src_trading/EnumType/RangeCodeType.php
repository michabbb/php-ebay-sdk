<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RangeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RangeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'High'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
    /**
     * Constant for value 'Low'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_HIGH
     * @uses self::VALUE_LOW
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_HIGH,
            self::VALUE_LOW,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
