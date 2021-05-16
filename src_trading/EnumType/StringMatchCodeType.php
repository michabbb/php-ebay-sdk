<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StringMatchCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates the type of string matching to use when a value is submitted in CharityName. If no value is specified, default behavior is "StartsWith." Does not apply to Query.
 * @subpackage Enumerations
 */
class StringMatchCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (in) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'StartsWith'
     * Meta information extracted from the WSDL
     * - documentation: (in) Matches strings that begin with the submitted value. For example, submitting a CharityName value of "heart" matches "Heart of Gold," but not "Open Hearts." Default behavior if no value is specified.
     * @return string 'StartsWith'
     */
    const VALUE_STARTS_WITH = 'StartsWith';
    /**
     * Constant for value 'Contains'
     * Meta information extracted from the WSDL
     * - documentation: (in) Matches strings that contain the submitted value. For example, submitting a CharityName value of "heart" matches both "Heart of Gold" and "Open Hearts."
     * @return string 'Contains'
     */
    const VALUE_CONTAINS = 'Contains';
    /**
     * Return allowed values
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_STARTS_WITH
     * @uses self::VALUE_CONTAINS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CUSTOM_CODE,
            self::VALUE_STARTS_WITH,
            self::VALUE_CONTAINS,
        ];
    }
}
