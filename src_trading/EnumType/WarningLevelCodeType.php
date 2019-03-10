<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for WarningLevelCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be passed in through the <b>WarningLevel</b> field of a call request.
 * @subpackage Enumerations
 */
class WarningLevelCodeType
{
    /**
     * Constant for value 'Low'
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
    /**
     * Constant for value 'High'
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
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
     * @uses self::VALUE_LOW
     * @uses self::VALUE_HIGH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LOW,
            self::VALUE_HIGH,
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
