<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DescriptionReviseModeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type containing the list of values that can be used when revising the item description of an active listing through the Revise API calls.
 * @subpackage Enumerations
 */
class DescriptionReviseModeCodeType
{
    /**
     * Constant for value 'Replace'
     * @return string 'Replace'
     */
    const VALUE_REPLACE = 'Replace';
    /**
     * Constant for value 'Prepend'
     * @return string 'Prepend'
     */
    const VALUE_PREPEND = 'Prepend';
    /**
     * Constant for value 'Append'
     * @return string 'Append'
     */
    const VALUE_APPEND = 'Append';
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
     * @uses self::VALUE_REPLACE
     * @uses self::VALUE_PREPEND
     * @uses self::VALUE_APPEND
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REPLACE,
            self::VALUE_PREPEND,
            self::VALUE_APPEND,
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
