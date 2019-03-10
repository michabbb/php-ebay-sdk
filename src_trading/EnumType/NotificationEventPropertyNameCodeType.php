<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for NotificationEventPropertyNameCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines all property names that can be used.
 * @subpackage Enumerations
 */
class NotificationEventPropertyNameCodeType
{
    /**
     * Constant for value 'TimeLeft'
     * @return string 'TimeLeft'
     */
    const VALUE_TIME_LEFT = 'TimeLeft';
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
     * @uses self::VALUE_TIME_LEFT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TIME_LEFT,
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
