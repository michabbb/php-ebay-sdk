<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BulkCatalogListerStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class BulkCatalogListerStatusCodeType
{
    /**
     * Constant for value 'Preapproved'
     * @return string 'Preapproved'
     */
    const VALUE_PREAPPROVED = 'Preapproved';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'OnWatch'
     * @return string 'OnWatch'
     */
    const VALUE_ON_WATCH = 'OnWatch';
    /**
     * Constant for value 'OnHold'
     * @return string 'OnHold'
     */
    const VALUE_ON_HOLD = 'OnHold';
    /**
     * Constant for value 'Suspended'
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'WatchWarn'
     * @return string 'WatchWarn'
     */
    const VALUE_WATCH_WARN = 'WatchWarn';
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
     * @uses self::VALUE_PREAPPROVED
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_ON_WATCH
     * @uses self::VALUE_ON_HOLD
     * @uses self::VALUE_SUSPENDED
     * @uses self::VALUE_WATCH_WARN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PREAPPROVED,
            self::VALUE_ACTIVE,
            self::VALUE_ON_WATCH,
            self::VALUE_ON_HOLD,
            self::VALUE_SUSPENDED,
            self::VALUE_WATCH_WARN,
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
