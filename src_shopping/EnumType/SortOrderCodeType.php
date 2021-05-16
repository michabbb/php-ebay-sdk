<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SortOrderCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the sorting order values that can be used when sorting results.
 * @subpackage Enumerations
 */
class SortOrderCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Ascending'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to sort results in ascending (low to high) order.
     * @return string 'Ascending'
     */
    const VALUE_ASCENDING = 'Ascending';
    /**
     * Constant for value 'Descending'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to sort results in descending (high to low) order.
     * @return string 'Descending'
     */
    const VALUE_DESCENDING = 'Descending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
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
