<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TopRatedProgramCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that consists of the Top-Rated Seller programs that exist around the world.
 * @subpackage Enumerations
 */
class TopRatedProgramCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'US'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, it indicates that the eBay user is in the US Top-Rated Seller program.
     * @return string 'US'
     */
    const VALUE_US = 'US';
    /**
     * Constant for value 'UK'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, it indicates that the eBay user is in the UK Top-Rated Seller program.
     * @return string 'UK'
     */
    const VALUE_UK = 'UK';
    /**
     * Constant for value 'DE'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, it indicates that the eBay user is in the Germany Top-Rated Seller program.
     * @return string 'DE'
     */
    const VALUE_DE = 'DE';
    /**
     * Constant for value 'Global'
     * Meta information extracted from the WSDL
     * - documentation: If this enumeration value is returned, it indicates that the eBay user is in the Global Top-Rated Seller program.
     * @return string 'Global'
     */
    const VALUE_GLOBAL = 'Global';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_US
     * @uses self::VALUE_UK
     * @uses self::VALUE_DE
     * @uses self::VALUE_GLOBAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_US,
            self::VALUE_UK,
            self::VALUE_DE,
            self::VALUE_GLOBAL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
