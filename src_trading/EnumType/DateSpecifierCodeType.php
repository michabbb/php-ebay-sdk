<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DateSpecifierCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Enumerations
 */
class DateSpecifierCodeType
{
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'Y'
     * @return string 'Y'
     */
    const VALUE_Y = 'Y';
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
     * @uses self::VALUE_M
     * @uses self::VALUE_D
     * @uses self::VALUE_Y
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M,
            self::VALUE_D,
            self::VALUE_Y,
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
