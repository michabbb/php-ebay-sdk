<?php

namespace macropage\ebaysdk\finding\EnumType;

/**
 * This class stands for PriceTreatmentEnum EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the type of treatment to be applied to a discounted item, either Strike-Through Pricing (STP) or Minimum Advertised Price (MAP).
 * @subpackage Enumerations
 */
class PriceTreatmentEnum
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
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STP,
            self::VALUE_MAP,
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
