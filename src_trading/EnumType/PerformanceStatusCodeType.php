<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PerformanceStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines eBay Seller Levels.
 * @subpackage Enumerations
 */
class PerformanceStatusCodeType
{
    /**
     * Constant for value 'TopRated'
     * @return string 'TopRated'
     */
    const VALUE_TOP_RATED = 'TopRated';
    /**
     * Constant for value 'AboveStandard'
     * @return string 'AboveStandard'
     */
    const VALUE_ABOVE_STANDARD = 'AboveStandard';
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'BelowStandard'
     * @return string 'BelowStandard'
     */
    const VALUE_BELOW_STANDARD = 'BelowStandard';
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
     * @uses self::VALUE_TOP_RATED
     * @uses self::VALUE_ABOVE_STANDARD
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_BELOW_STANDARD
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TOP_RATED,
            self::VALUE_ABOVE_STANDARD,
            self::VALUE_STANDARD,
            self::VALUE_BELOW_STANDARD,
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
