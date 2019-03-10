<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerAutoRelistOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the values that control how soon the item is relisted after the original listing ends.
 * @subpackage Enumerations
 */
class SellingManagerAutoRelistOptionCodeType
{
    /**
     * Constant for value 'RelistImmediately'
     * @return string 'RelistImmediately'
     */
    const VALUE_RELIST_IMMEDIATELY = 'RelistImmediately';
    /**
     * Constant for value 'RelistAfterDaysHours'
     * @return string 'RelistAfterDaysHours'
     */
    const VALUE_RELIST_AFTER_DAYS_HOURS = 'RelistAfterDaysHours';
    /**
     * Constant for value 'RelistAtSpecificTimeOfDay'
     * @return string 'RelistAtSpecificTimeOfDay'
     */
    const VALUE_RELIST_AT_SPECIFIC_TIME_OF_DAY = 'RelistAtSpecificTimeOfDay';
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
     * @uses self::VALUE_RELIST_IMMEDIATELY
     * @uses self::VALUE_RELIST_AFTER_DAYS_HOURS
     * @uses self::VALUE_RELIST_AT_SPECIFIC_TIME_OF_DAY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RELIST_IMMEDIATELY,
            self::VALUE_RELIST_AFTER_DAYS_HOURS,
            self::VALUE_RELIST_AT_SPECIFIC_TIME_OF_DAY,
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
