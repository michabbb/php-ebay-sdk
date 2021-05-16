<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnitCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Units of measure that you can use to specify properties such as weight and size dimensions.
 * @subpackage Enumerations
 */
class UnitCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'kg'
     * Meta information extracted from the WSDL
     * - documentation: Kilograms
     * @return string 'kg'
     */
    const VALUE_KG = 'kg';
    /**
     * Constant for value 'gm'
     * Meta information extracted from the WSDL
     * - documentation: Grams
     * @return string 'gm'
     */
    const VALUE_GM = 'gm';
    /**
     * Constant for value 'lbs'
     * Meta information extracted from the WSDL
     * - documentation: Pounds
     * @return string 'lbs'
     */
    const VALUE_LBS = 'lbs';
    /**
     * Constant for value 'oz'
     * Meta information extracted from the WSDL
     * - documentation: Ounces
     * @return string 'oz'
     */
    const VALUE_OZ = 'oz';
    /**
     * Constant for value 'cm'
     * Meta information extracted from the WSDL
     * - documentation: Centimeters
     * @return string 'cm'
     */
    const VALUE_CM = 'cm';
    /**
     * Constant for value 'mm'
     * Meta information extracted from the WSDL
     * - documentation: Milimeters
     * @return string 'mm'
     */
    const VALUE_MM = 'mm';
    /**
     * Constant for value 'inches'
     * Meta information extracted from the WSDL
     * - documentation: Inches
     * @return string 'inches'
     */
    const VALUE_INCHES = 'inches';
    /**
     * Constant for value 'ft'
     * Meta information extracted from the WSDL
     * - documentation: Feet
     * @return string 'ft'
     */
    const VALUE_FT = 'ft';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_KG
     * @uses self::VALUE_GM
     * @uses self::VALUE_LBS
     * @uses self::VALUE_OZ
     * @uses self::VALUE_CM
     * @uses self::VALUE_MM
     * @uses self::VALUE_INCHES
     * @uses self::VALUE_FT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_KG,
            self::VALUE_GM,
            self::VALUE_LBS,
            self::VALUE_OZ,
            self::VALUE_CM,
            self::VALUE_MM,
            self::VALUE_INCHES,
            self::VALUE_FT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
