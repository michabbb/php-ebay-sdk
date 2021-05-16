<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DayOfWeekCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that consists of all days of the week.
 * @subpackage Enumerations
 */
class DayOfWeekCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sunday'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the day of the week is Sunday.
     * @return string 'Sunday'
     */
    const VALUE_SUNDAY = 'Sunday';
    /**
     * Constant for value 'Monday'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the day of the week is Monday.
     * @return string 'Monday'
     */
    const VALUE_MONDAY = 'Monday';
    /**
     * Constant for value 'Tuesday'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the day of the week is Tuesday.
     * @return string 'Tuesday'
     */
    const VALUE_TUESDAY = 'Tuesday';
    /**
     * Constant for value 'Wednesday'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the day of the week is Wednesday.
     * @return string 'Wednesday'
     */
    const VALUE_WEDNESDAY = 'Wednesday';
    /**
     * Constant for value 'Thursday'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the day of the week is Thursday.
     * @return string 'Thursday'
     */
    const VALUE_THURSDAY = 'Thursday';
    /**
     * Constant for value 'Friday'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the day of the week is Friday.
     * @return string 'Friday'
     */
    const VALUE_FRIDAY = 'Friday';
    /**
     * Constant for value 'Saturday'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the day of the week is Saturday.
     * @return string 'Saturday'
     */
    const VALUE_SATURDAY = 'Saturday';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SUNDAY
     * @uses self::VALUE_MONDAY
     * @uses self::VALUE_TUESDAY
     * @uses self::VALUE_WEDNESDAY
     * @uses self::VALUE_THURSDAY
     * @uses self::VALUE_FRIDAY
     * @uses self::VALUE_SATURDAY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUNDAY,
            self::VALUE_MONDAY,
            self::VALUE_TUESDAY,
            self::VALUE_WEDNESDAY,
            self::VALUE_THURSDAY,
            self::VALUE_FRIDAY,
            self::VALUE_SATURDAY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
