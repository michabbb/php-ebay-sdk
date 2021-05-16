<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DateSpecifierCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Enumerations
 */
class DateSpecifierCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'M'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'D'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'Y'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'Y'
     */
    const VALUE_Y = 'Y';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_M
     * @uses self::VALUE_D
     * @uses self::VALUE_Y
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_M,
            self::VALUE_D,
            self::VALUE_Y,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
