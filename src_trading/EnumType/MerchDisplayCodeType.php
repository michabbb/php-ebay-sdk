<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MerchDisplayCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Enumerations
 */
class MerchDisplayCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DefaultTheme'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'DefaultTheme'
     */
    const VALUE_DEFAULT_THEME = 'DefaultTheme';
    /**
     * Constant for value 'StoreTheme'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'StoreTheme'
     */
    const VALUE_STORE_THEME = 'StoreTheme';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DEFAULT_THEME
     * @uses self::VALUE_STORE_THEME
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT_THEME,
            self::VALUE_STORE_THEME,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
