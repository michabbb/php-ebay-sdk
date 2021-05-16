<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreFontSizeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Font size selection for Store configuration.
 * @subpackage Enumerations
 */
class StoreFontSizeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'XXS'
     * Meta information extracted from the WSDL
     * - documentation: Extra extra small.
     * @return string 'XXS'
     */
    const VALUE_XXS = 'XXS';
    /**
     * Constant for value 'XS'
     * Meta information extracted from the WSDL
     * - documentation: Extra small.
     * @return string 'XS'
     */
    const VALUE_XS = 'XS';
    /**
     * Constant for value 'S'
     * Meta information extracted from the WSDL
     * - documentation: Small.
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'M'
     * Meta information extracted from the WSDL
     * - documentation: Medium.
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'L'
     * Meta information extracted from the WSDL
     * - documentation: Large.
     * @return string 'L'
     */
    const VALUE_L = 'L';
    /**
     * Constant for value 'XL'
     * Meta information extracted from the WSDL
     * - documentation: Extra large.
     * @return string 'XL'
     */
    const VALUE_XL = 'XL';
    /**
     * Constant for value 'XXL'
     * Meta information extracted from the WSDL
     * - documentation: Extra extra large.
     * @return string 'XXL'
     */
    const VALUE_XXL = 'XXL';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_XXS
     * @uses self::VALUE_XS
     * @uses self::VALUE_S
     * @uses self::VALUE_M
     * @uses self::VALUE_L
     * @uses self::VALUE_XL
     * @uses self::VALUE_XXL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_XXS,
            self::VALUE_XS,
            self::VALUE_S,
            self::VALUE_M,
            self::VALUE_L,
            self::VALUE_XL,
            self::VALUE_XXL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
