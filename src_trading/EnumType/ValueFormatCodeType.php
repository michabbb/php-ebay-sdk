<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ValueFormatCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the date format that is used for a date-related field that is returned in the <b>GetCategorySpecifics</b> call. on which are enforceable for validation purposes
 * @subpackage Enumerations
 */
class ValueFormatCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FullDate'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a full date is used, including the month, day, and year in the following format: '<em>YYYYMMDD</em>'
     * @return string 'FullDate'
     */
    const VALUE_FULL_DATE = 'FullDate';
    /**
     * Constant for value 'PartialDate'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a partial date is used, including the month and year in the following format: '<em>YYYYMM</em>'
     * @return string 'PartialDate'
     */
    const VALUE_PARTIAL_DATE = 'PartialDate';
    /**
     * Constant for value 'Year'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that only the year is returned in the following format: '<em>YYYY</em>'
     * @return string 'Year'
     */
    const VALUE_YEAR = 'Year';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FULL_DATE
     * @uses self::VALUE_PARTIAL_DATE
     * @uses self::VALUE_YEAR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FULL_DATE,
            self::VALUE_PARTIAL_DATE,
            self::VALUE_YEAR,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
