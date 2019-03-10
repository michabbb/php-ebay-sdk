<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PayPalAccountTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines PayPal account types.
 * @subpackage Enumerations
 */
class PayPalAccountTypeCodeType
{
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Premier'
     * @return string 'Premier'
     */
    const VALUE_PREMIER = 'Premier';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
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
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_PREMIER
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERSONAL,
            self::VALUE_PREMIER,
            self::VALUE_BUSINESS,
            self::VALUE_UNKNOWN,
            self::VALUE_INVALID,
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
