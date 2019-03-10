<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for NotificationRoleCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines roles for platform notifications.
 * @subpackage Enumerations
 */
class NotificationRoleCodeType
{
    /**
     * Constant for value 'Application'
     * @return string 'Application'
     */
    const VALUE_APPLICATION = 'Application';
    /**
     * Constant for value 'User'
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Constant for value 'UserData'
     * @return string 'UserData'
     */
    const VALUE_USER_DATA = 'UserData';
    /**
     * Constant for value 'Event'
     * @return string 'Event'
     */
    const VALUE_EVENT = 'Event';
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
     * @uses self::VALUE_APPLICATION
     * @uses self::VALUE_USER
     * @uses self::VALUE_USER_DATA
     * @uses self::VALUE_EVENT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPLICATION,
            self::VALUE_USER,
            self::VALUE_USER_DATA,
            self::VALUE_EVENT,
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
