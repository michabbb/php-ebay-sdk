<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for MerchandizingPrefCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class MerchandizingPrefCodeType
{
    /**
     * Constant for value 'OptIn'
     * @return string 'OptIn'
     */
    const VALUE_OPT_IN = 'OptIn';
    /**
     * Constant for value 'OptOut'
     * @return string 'OptOut'
     */
    const VALUE_OPT_OUT = 'OptOut';
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
     * @uses self::VALUE_OPT_IN
     * @uses self::VALUE_OPT_OUT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPT_IN,
            self::VALUE_OPT_OUT,
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
