<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SummaryWindowPeriodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The period of time for which to create a summary.
 * @subpackage Enumerations
 */
class SummaryWindowPeriodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Last24Hours'
     * Meta information extracted from the WSDL
     * - documentation: The last 24 hours.
     * @return string 'Last24Hours'
     */
    const VALUE_LAST_24_HOURS = 'Last24Hours';
    /**
     * Constant for value 'Last7Days'
     * Meta information extracted from the WSDL
     * - documentation: The last 7 days.
     * @return string 'Last7Days'
     */
    const VALUE_LAST_7_DAYS = 'Last7Days';
    /**
     * Constant for value 'Last31Days'
     * Meta information extracted from the WSDL
     * - documentation: The last 31 days.
     * @return string 'Last31Days'
     */
    const VALUE_LAST_31_DAYS = 'Last31Days';
    /**
     * Constant for value 'CurrentWeek'
     * Meta information extracted from the WSDL
     * - documentation: The current week.
     * @return string 'CurrentWeek'
     */
    const VALUE_CURRENT_WEEK = 'CurrentWeek';
    /**
     * Constant for value 'LastWeek'
     * Meta information extracted from the WSDL
     * - documentation: The prior week.
     * @return string 'LastWeek'
     */
    const VALUE_LAST_WEEK = 'LastWeek';
    /**
     * Constant for value 'CurrentMonth'
     * Meta information extracted from the WSDL
     * - documentation: The current month.
     * @return string 'CurrentMonth'
     */
    const VALUE_CURRENT_MONTH = 'CurrentMonth';
    /**
     * Constant for value 'LastMonth'
     * Meta information extracted from the WSDL
     * - documentation: The prior month.
     * @return string 'LastMonth'
     */
    const VALUE_LAST_MONTH = 'LastMonth';
    /**
     * Constant for value 'Last60Days'
     * Meta information extracted from the WSDL
     * - documentation: The last 60 days.
     * @return string 'Last60Days'
     */
    const VALUE_LAST_60_DAYS = 'Last60Days';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_LAST_24_HOURS
     * @uses self::VALUE_LAST_7_DAYS
     * @uses self::VALUE_LAST_31_DAYS
     * @uses self::VALUE_CURRENT_WEEK
     * @uses self::VALUE_LAST_WEEK
     * @uses self::VALUE_CURRENT_MONTH
     * @uses self::VALUE_LAST_MONTH
     * @uses self::VALUE_LAST_60_DAYS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LAST_24_HOURS,
            self::VALUE_LAST_7_DAYS,
            self::VALUE_LAST_31_DAYS,
            self::VALUE_CURRENT_WEEK,
            self::VALUE_LAST_WEEK,
            self::VALUE_CURRENT_MONTH,
            self::VALUE_LAST_MONTH,
            self::VALUE_LAST_60_DAYS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
