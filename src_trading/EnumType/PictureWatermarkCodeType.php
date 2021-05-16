<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PictureWatermarkCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureWatermarkCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'User'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Constant for value 'Icon'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Icon'
     */
    const VALUE_ICON = 'Icon';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_USER
     * @uses self::VALUE_ICON
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_USER,
            self::VALUE_ICON,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
