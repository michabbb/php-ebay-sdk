<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DaysCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the range of days the seller can be contacted.
 * @subpackage Enumerations
 */
class DaysCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: Seller does not want to be contacted. Contact hours will not be supported for any days. If contact hours are specified, they will be ignored.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'EveryDay'
     * Meta information extracted from the WSDL
     * - documentation: Seller can be contacted any day during the specified contact hours.
     * @return string 'EveryDay'
     */
    const VALUE_EVERY_DAY = 'EveryDay';
    /**
     * Constant for value 'Weekdays'
     * Meta information extracted from the WSDL
     * - documentation: Seller can be contacted Monday through Friday during the specified contact hours.
     * @return string 'Weekdays'
     */
    const VALUE_WEEKDAYS = 'Weekdays';
    /**
     * Constant for value 'Weekends'
     * Meta information extracted from the WSDL
     * - documentation: Seller can be contacted Saturday or Sunday during the specified contact hours.
     * @return string 'Weekends'
     */
    const VALUE_WEEKENDS = 'Weekends';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_EVERY_DAY
     * @uses self::VALUE_WEEKDAYS
     * @uses self::VALUE_WEEKENDS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_EVERY_DAY,
            self::VALUE_WEEKDAYS,
            self::VALUE_WEEKENDS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
