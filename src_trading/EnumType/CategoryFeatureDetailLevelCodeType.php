<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CategoryFeatureDetailLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated. Use <b>DetailLevelCodeType</b> instead.
 * @subpackage Enumerations
 */
class CategoryFeatureDetailLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ReturnAll'
     * Meta information extracted from the WSDL
     * - documentation: Return all available data.
     * @return string 'ReturnAll'
     */
    const VALUE_RETURN_ALL = 'ReturnAll';
    /**
     * Constant for value 'ReturnFeatureDefinitions'
     * Meta information extracted from the WSDL
     * - documentation: Return the category feature definitions only.
     * @return string 'ReturnFeatureDefinitions'
     */
    const VALUE_RETURN_FEATURE_DEFINITIONS = 'ReturnFeatureDefinitions';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_RETURN_ALL
     * @uses self::VALUE_RETURN_FEATURE_DEFINITIONS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RETURN_ALL,
            self::VALUE_RETURN_FEATURE_DEFINITIONS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
