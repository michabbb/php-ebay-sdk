<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SortOrderCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type specifies the sort order of a returned array of elements. The array or list to be sorted, the sort key, and the default sort order depend on the call.
 * @subpackage Enumerations
 */
class SortOrderCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Ascending'
     * Meta information extracted from the WSDL
     * - documentation: The results will be sorted by the specified key in ascending (low to high) order.
     * @return string 'Ascending'
     */
    const VALUE_ASCENDING = 'Ascending';
    /**
     * Constant for value 'Descending'
     * Meta information extracted from the WSDL
     * - documentation: The results will be sorted by the specified key in descending (high to low) order.
     * @return string 'Descending'
     */
    const VALUE_DESCENDING = 'Descending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ASCENDING
     * @uses self::VALUE_DESCENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ASCENDING,
            self::VALUE_DESCENDING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
