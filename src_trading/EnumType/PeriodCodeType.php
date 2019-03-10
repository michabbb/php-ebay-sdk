<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PeriodCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the time periods used when evaluating the number of buying policy violations and unpaid item strikes that a buyer has against their account.
 * @subpackage Enumerations
 */
class PeriodCodeType
{
    /**
     * Constant for value 'Days_1'
     * @return string 'Days_1'
     */
    const VALUE_DAYS_1 = 'Days_1';
    /**
     * Constant for value 'Days_30'
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Days_180'
     * @return string 'Days_180'
     */
    const VALUE_DAYS_180 = 'Days_180';
    /**
     * Constant for value 'Days_360'
     * @return string 'Days_360'
     */
    const VALUE_DAYS_360 = 'Days_360';
    /**
     * Constant for value 'Days_540'
     * @return string 'Days_540'
     */
    const VALUE_DAYS_540 = 'Days_540';
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
     * @uses self::VALUE_DAYS_1
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_180
     * @uses self::VALUE_DAYS_360
     * @uses self::VALUE_DAYS_540
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAYS_1,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_180,
            self::VALUE_DAYS_360,
            self::VALUE_DAYS_540,
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
