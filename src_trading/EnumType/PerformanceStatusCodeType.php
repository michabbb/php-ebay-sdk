<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PerformanceStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines eBay Seller Levels.
 * @subpackage Enumerations
 */
class PerformanceStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TopRated'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's Seller Level is Top-Rated.
     * @return string 'TopRated'
     */
    const VALUE_TOP_RATED = 'TopRated';
    /**
     * Constant for value 'AboveStandard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's Seller Level is Above Standard.
     * @return string 'AboveStandard'
     */
    const VALUE_ABOVE_STANDARD = 'AboveStandard';
    /**
     * Constant for value 'Standard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's Seller Level is Standard.
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'BelowStandard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's Seller Level is Below Standard.
     * @return string 'BelowStandard'
     */
    const VALUE_BELOW_STANDARD = 'BelowStandard';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_TOP_RATED
     * @uses self::VALUE_ABOVE_STANDARD
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_BELOW_STANDARD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TOP_RATED,
            self::VALUE_ABOVE_STANDARD,
            self::VALUE_STANDARD,
            self::VALUE_BELOW_STANDARD,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
