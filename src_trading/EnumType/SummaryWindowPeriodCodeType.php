<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SummaryWindowPeriodCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The period of time for which to create a summary.
 * @subpackage Enumerations
 */
class SummaryWindowPeriodCodeType
{
    /**
     * Constant for value 'Last24Hours'
     * @return string 'Last24Hours'
     */
    const VALUE_LAST_24_HOURS = 'Last24Hours';
    /**
     * Constant for value 'Last7Days'
     * @return string 'Last7Days'
     */
    const VALUE_LAST_7_DAYS = 'Last7Days';
    /**
     * Constant for value 'Last31Days'
     * @return string 'Last31Days'
     */
    const VALUE_LAST_31_DAYS = 'Last31Days';
    /**
     * Constant for value 'CurrentWeek'
     * @return string 'CurrentWeek'
     */
    const VALUE_CURRENT_WEEK = 'CurrentWeek';
    /**
     * Constant for value 'LastWeek'
     * @return string 'LastWeek'
     */
    const VALUE_LAST_WEEK = 'LastWeek';
    /**
     * Constant for value 'CurrentMonth'
     * @return string 'CurrentMonth'
     */
    const VALUE_CURRENT_MONTH = 'CurrentMonth';
    /**
     * Constant for value 'LastMonth'
     * @return string 'LastMonth'
     */
    const VALUE_LAST_MONTH = 'LastMonth';
    /**
     * Constant for value 'Last60Days'
     * @return string 'Last60Days'
     */
    const VALUE_LAST_60_DAYS = 'Last60Days';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    public static function getValidValues()
    {
        return array(
            self::VALUE_LAST_24_HOURS,
            self::VALUE_LAST_7_DAYS,
            self::VALUE_LAST_31_DAYS,
            self::VALUE_CURRENT_WEEK,
            self::VALUE_LAST_WEEK,
            self::VALUE_CURRENT_MONTH,
            self::VALUE_LAST_MONTH,
            self::VALUE_LAST_60_DAYS,
            self::VALUE_CUSTOM_CODE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
