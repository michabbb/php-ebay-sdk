<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SearchStandingStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The Search standing that you have earned.
 * @subpackage Enumerations
 */
class SearchStandingStatusCodeType
{
    /**
     * Constant for value 'Raised'
     * @return string 'Raised'
     */
    const VALUE_RAISED = 'Raised';
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Lowered'
     * @return string 'Lowered'
     */
    const VALUE_LOWERED = 'Lowered';
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
     * @uses self::VALUE_RAISED
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_LOWERED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RAISED,
            self::VALUE_STANDARD,
            self::VALUE_LOWERED,
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
