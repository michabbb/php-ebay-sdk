<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RestockingFeeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
 * @subpackage Enumerations
 */
class RestockingFeeCodeType
{
    /**
     * Constant for value 'NoRestockingFee'
     * @return string 'NoRestockingFee'
     */
    const VALUE_NO_RESTOCKING_FEE = 'NoRestockingFee';
    /**
     * Constant for value 'Percent_10'
     * @return string 'Percent_10'
     */
    const VALUE_PERCENT_10 = 'Percent_10';
    /**
     * Constant for value 'Percent_15'
     * @return string 'Percent_15'
     */
    const VALUE_PERCENT_15 = 'Percent_15';
    /**
     * Constant for value 'Percent_20'
     * @return string 'Percent_20'
     */
    const VALUE_PERCENT_20 = 'Percent_20';
    /**
     * Constant for value 'Percent_25'
     * @return string 'Percent_25'
     */
    const VALUE_PERCENT_25 = 'Percent_25';
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
     * @uses self::VALUE_NO_RESTOCKING_FEE
     * @uses self::VALUE_PERCENT_10
     * @uses self::VALUE_PERCENT_15
     * @uses self::VALUE_PERCENT_20
     * @uses self::VALUE_PERCENT_25
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_RESTOCKING_FEE,
            self::VALUE_PERCENT_10,
            self::VALUE_PERCENT_15,
            self::VALUE_PERCENT_20,
            self::VALUE_PERCENT_25,
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
