<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StoreCustomHeaderLayoutCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies whether the Store has a custom header.
 * @subpackage Enumerations
 */
class StoreCustomHeaderLayoutCodeType
{
    /**
     * Constant for value 'NoHeader'
     * @return string 'NoHeader'
     */
    const VALUE_NO_HEADER = 'NoHeader';
    /**
     * Constant for value 'CustomHeaderShown'
     * @return string 'CustomHeaderShown'
     */
    const VALUE_CUSTOM_HEADER_SHOWN = 'CustomHeaderShown';
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
     * @uses self::VALUE_NO_HEADER
     * @uses self::VALUE_CUSTOM_HEADER_SHOWN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_HEADER,
            self::VALUE_CUSTOM_HEADER_SHOWN,
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
