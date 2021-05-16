<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AccessRuleCurrentStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible values that can be returned in the <b>RuleCurrentStatus</b> output field of the <b>GetApiAccessRules</b> call. The <b>RuleCurrentStatus</b> is only returned if the daily, hourly, or periodic
 * call limit for the corresponding API call has been exceeded, or if a call limit does not apply to the API call.
 * @subpackage Enumerations
 */
class AccessRuleCurrentStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotSet'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that usage limits do not apply to the corresponding API call.
     * @return string 'NotSet'
     */
    const VALUE_NOT_SET = 'NotSet';
    /**
     * Constant for value 'HourlyLimitExceeded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that your application has exceeded its hourly hard call limit for the corresponding API call.
     * @return string 'HourlyLimitExceeded'
     */
    const VALUE_HOURLY_LIMIT_EXCEEDED = 'HourlyLimitExceeded';
    /**
     * Constant for value 'DailyLimitExceeded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that your application has exceeded its daily hard call limit for the corresponding API call.
     * @return string 'DailyLimitExceeded'
     */
    const VALUE_DAILY_LIMIT_EXCEEDED = 'DailyLimitExceeded';
    /**
     * Constant for value 'PeriodicLimitExceeded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that your application has exceeded its periodic hard call limit for the corresponding API call. The period is defined in the <b>ApiAccessRule.Period</b> field and can be a calendar month or a specific number of
     * days.
     * @return string 'PeriodicLimitExceeded'
     */
    const VALUE_PERIODIC_LIMIT_EXCEEDED = 'PeriodicLimitExceeded';
    /**
     * Constant for value 'HourlySoftLimitExceeded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that your application has exceeded its hourly soft call limit for the corresponding API call.
     * @return string 'HourlySoftLimitExceeded'
     */
    const VALUE_HOURLY_SOFT_LIMIT_EXCEEDED = 'HourlySoftLimitExceeded';
    /**
     * Constant for value 'DailySoftLimitExceeded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that your application has exceeded its daily soft call limit for the corresponding API call.
     * @return string 'DailySoftLimitExceeded'
     */
    const VALUE_DAILY_SOFT_LIMIT_EXCEEDED = 'DailySoftLimitExceeded';
    /**
     * Constant for value 'PeriodicSoftLimitExceeded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that your application has exceeded its periodic soft call limit for the corresponding API call. The period is defined in the <b>ApiAccessRule.Period</b> field and can be a calendar month or a specific number of
     * days.
     * @return string 'PeriodicSoftLimitExceeded'
     */
    const VALUE_PERIODIC_SOFT_LIMIT_EXCEEDED = 'PeriodicSoftLimitExceeded';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_SET,
            self::VALUE_HOURLY_LIMIT_EXCEEDED,
            self::VALUE_DAILY_LIMIT_EXCEEDED,
            self::VALUE_PERIODIC_LIMIT_EXCEEDED,
            self::VALUE_HOURLY_SOFT_LIMIT_EXCEEDED,
            self::VALUE_DAILY_SOFT_LIMIT_EXCEEDED,
            self::VALUE_PERIODIC_SOFT_LIMIT_EXCEEDED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
