<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RangeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RangeCodeType
{
    /**
     * Constant for value 'High'
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
    /**
     * Constant for value 'Low'
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
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
     * @uses self::VALUE_HIGH
     * @uses self::VALUE_LOW
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HIGH,
            self::VALUE_LOW,
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
