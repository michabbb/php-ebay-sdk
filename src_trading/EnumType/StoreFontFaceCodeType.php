<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StoreFontFaceCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Font selection for Store configuration.
 * @subpackage Enumerations
 */
class StoreFontFaceCodeType
{
    /**
     * Constant for value 'Arial'
     * @return string 'Arial'
     */
    const VALUE_ARIAL = 'Arial';
    /**
     * Constant for value 'Courier'
     * @return string 'Courier'
     */
    const VALUE_COURIER = 'Courier';
    /**
     * Constant for value 'Times'
     * @return string 'Times'
     */
    const VALUE_TIMES = 'Times';
    /**
     * Constant for value 'Verdana'
     * @return string 'Verdana'
     */
    const VALUE_VERDANA = 'Verdana';
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
     * @uses self::VALUE_ARIAL
     * @uses self::VALUE_COURIER
     * @uses self::VALUE_TIMES
     * @uses self::VALUE_VERDANA
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ARIAL,
            self::VALUE_COURIER,
            self::VALUE_TIMES,
            self::VALUE_VERDANA,
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
