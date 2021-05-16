<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreFontFaceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Font selection for Store configuration.
 * @subpackage Enumerations
 */
class StoreFontFaceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Arial'
     * Meta information extracted from the WSDL
     * - documentation: Arial font.
     * @return string 'Arial'
     */
    const VALUE_ARIAL = 'Arial';
    /**
     * Constant for value 'Courier'
     * Meta information extracted from the WSDL
     * - documentation: Courier font.
     * @return string 'Courier'
     */
    const VALUE_COURIER = 'Courier';
    /**
     * Constant for value 'Times'
     * Meta information extracted from the WSDL
     * - documentation: Times New Roman font.
     * @return string 'Times'
     */
    const VALUE_TIMES = 'Times';
    /**
     * Constant for value 'Verdana'
     * Meta information extracted from the WSDL
     * - documentation: Verdana font.
     * @return string 'Verdana'
     */
    const VALUE_VERDANA = 'Verdana';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ARIAL
     * @uses self::VALUE_COURIER
     * @uses self::VALUE_TIMES
     * @uses self::VALUE_VERDANA
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ARIAL,
            self::VALUE_COURIER,
            self::VALUE_TIMES,
            self::VALUE_VERDANA,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
