<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for TopRatedProgramCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that consists of the Top-Rated Seller programs that exist around the world.
 * @subpackage Enumerations
 */
class TopRatedProgramCodeType
{
    /**
     * Constant for value 'US'
     * @return string 'US'
     */
    const VALUE_US = 'US';
    /**
     * Constant for value 'UK'
     * @return string 'UK'
     */
    const VALUE_UK = 'UK';
    /**
     * Constant for value 'DE'
     * @return string 'DE'
     */
    const VALUE_DE = 'DE';
    /**
     * Constant for value 'Global'
     * @return string 'Global'
     */
    const VALUE_GLOBAL = 'Global';
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
     * @uses self::VALUE_US
     * @uses self::VALUE_UK
     * @uses self::VALUE_DE
     * @uses self::VALUE_GLOBAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_US,
            self::VALUE_UK,
            self::VALUE_DE,
            self::VALUE_GLOBAL,
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
