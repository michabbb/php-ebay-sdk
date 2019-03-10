<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StringMatchCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the type of string matching to use when a value is submitted in CharityName. If no value is specified, default behavior is "StartsWith." Does not apply to Query.
 * @subpackage Enumerations
 */
class StringMatchCodeType
{
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'StartsWith'
     * @return string 'StartsWith'
     */
    const VALUE_STARTS_WITH = 'StartsWith';
    /**
     * Constant for value 'Contains'
     * @return string 'Contains'
     */
    const VALUE_CONTAINS = 'Contains';
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
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_STARTS_WITH
     * @uses self::VALUE_CONTAINS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOM_CODE,
            self::VALUE_STARTS_WITH,
            self::VALUE_CONTAINS,
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
