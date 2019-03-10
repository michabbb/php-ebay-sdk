<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for FedExRateOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type consists of the different Federal Express shipping rates that sellers can offer to buyers. The shipping rates for the major US shipping carriers can be selected in the Shipping rate preferences in My eBay, or
 * through the <b>SetUserPreferences</b> call.
 * @subpackage Enumerations
 */
class FedExRateOptionCodeType
{
    /**
     * Constant for value 'FedExStandardList'
     * @return string 'FedExStandardList'
     */
    const VALUE_FED_EX_STANDARD_LIST = 'FedExStandardList';
    /**
     * Constant for value 'FedExCounter'
     * @return string 'FedExCounter'
     */
    const VALUE_FED_EX_COUNTER = 'FedExCounter';
    /**
     * Constant for value 'FedExDiscounted'
     * @return string 'FedExDiscounted'
     */
    const VALUE_FED_EX_DISCOUNTED = 'FedExDiscounted';
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
     * @uses self::VALUE_FED_EX_STANDARD_LIST
     * @uses self::VALUE_FED_EX_COUNTER
     * @uses self::VALUE_FED_EX_DISCOUNTED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FED_EX_STANDARD_LIST,
            self::VALUE_FED_EX_COUNTER,
            self::VALUE_FED_EX_DISCOUNTED,
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
