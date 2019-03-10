<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AccessRuleCurrentStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible values that can be returned in the <b>RuleCurrentStatus</b> output field of the <b>GetApiAccessRules</b> call. The <b>RuleCurrentStatus</b> is only returned if the daily, hourly, or periodic
 * call limit for the corresponding API call has been exceeded, or if a call limit does not apply to the API call.
 * @subpackage Enumerations
 */
class AccessRuleCurrentStatusCodeType
{
    /**
     * Constant for value 'NotSet'
     * @return string 'NotSet'
     */
    const VALUE_NOT_SET = 'NotSet';
    /**
     * Constant for value 'HourlyLimitExceeded'
     * @return string 'HourlyLimitExceeded'
     */
    const VALUE_HOURLY_LIMIT_EXCEEDED = 'HourlyLimitExceeded';
    /**
     * Constant for value 'DailyLimitExceeded'
     * @return string 'DailyLimitExceeded'
     */
    const VALUE_DAILY_LIMIT_EXCEEDED = 'DailyLimitExceeded';
    /**
     * Constant for value 'PeriodicLimitExceeded'
     * @return string 'PeriodicLimitExceeded'
     */
    const VALUE_PERIODIC_LIMIT_EXCEEDED = 'PeriodicLimitExceeded';
    /**
     * Constant for value 'HourlySoftLimitExceeded'
     * @return string 'HourlySoftLimitExceeded'
     */
    const VALUE_HOURLY_SOFT_LIMIT_EXCEEDED = 'HourlySoftLimitExceeded';
    /**
     * Constant for value 'DailySoftLimitExceeded'
     * @return string 'DailySoftLimitExceeded'
     */
    const VALUE_DAILY_SOFT_LIMIT_EXCEEDED = 'DailySoftLimitExceeded';
    /**
     * Constant for value 'PeriodicSoftLimitExceeded'
     * @return string 'PeriodicSoftLimitExceeded'
     */
    const VALUE_PERIODIC_SOFT_LIMIT_EXCEEDED = 'PeriodicSoftLimitExceeded';
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
     * @uses self::VALUE_NOT_SET
     * @uses self::VALUE_HOURLY_LIMIT_EXCEEDED
     * @uses self::VALUE_DAILY_LIMIT_EXCEEDED
     * @uses self::VALUE_PERIODIC_LIMIT_EXCEEDED
     * @uses self::VALUE_HOURLY_SOFT_LIMIT_EXCEEDED
     * @uses self::VALUE_DAILY_SOFT_LIMIT_EXCEEDED
     * @uses self::VALUE_PERIODIC_SOFT_LIMIT_EXCEEDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SET,
            self::VALUE_HOURLY_LIMIT_EXCEEDED,
            self::VALUE_DAILY_LIMIT_EXCEEDED,
            self::VALUE_PERIODIC_LIMIT_EXCEEDED,
            self::VALUE_HOURLY_SOFT_LIMIT_EXCEEDED,
            self::VALUE_DAILY_SOFT_LIMIT_EXCEEDED,
            self::VALUE_PERIODIC_SOFT_LIMIT_EXCEEDED,
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
