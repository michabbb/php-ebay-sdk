<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for PricingTreatmentCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the type of treatment applied to a discounted item, either Strikethrough Pricing or Minimum Advertised Price.
 * @subpackage Enumerations
 */
class PricingTreatmentCodeType
{
    /**
     * Constant for value 'STP'
     * @return string 'STP'
     */
    const VALUE_STP = 'STP';
    /**
     * Constant for value 'MAP'
     * @return string 'MAP'
     */
    const VALUE_MAP = 'MAP';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_STP
     * @uses self::VALUE_MAP
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STP,
            self::VALUE_MAP,
            self::VALUE_NONE,
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
