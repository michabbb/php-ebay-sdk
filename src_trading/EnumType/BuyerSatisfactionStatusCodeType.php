<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BuyerSatisfactionStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the list of possible Buyer Satisfaction ratings for a seller.
 * @subpackage Enumerations
 */
class BuyerSatisfactionStatusCodeType
{
    /**
     * Constant for value 'Excellent'
     * @return string 'Excellent'
     */
    const VALUE_EXCELLENT = 'Excellent';
    /**
     * Constant for value 'Good'
     * @return string 'Good'
     */
    const VALUE_GOOD = 'Good';
    /**
     * Constant for value 'NeedsWork'
     * @return string 'NeedsWork'
     */
    const VALUE_NEEDS_WORK = 'NeedsWork';
    /**
     * Constant for value 'Poor'
     * @return string 'Poor'
     */
    const VALUE_POOR = 'Poor';
    /**
     * Constant for value 'VeryPoor'
     * @return string 'VeryPoor'
     */
    const VALUE_VERY_POOR = 'VeryPoor';
    /**
     * Constant for value 'Unacceptable'
     * @return string 'Unacceptable'
     */
    const VALUE_UNACCEPTABLE = 'Unacceptable';
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
     * @uses self::VALUE_EXCELLENT
     * @uses self::VALUE_GOOD
     * @uses self::VALUE_NEEDS_WORK
     * @uses self::VALUE_POOR
     * @uses self::VALUE_VERY_POOR
     * @uses self::VALUE_UNACCEPTABLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXCELLENT,
            self::VALUE_GOOD,
            self::VALUE_NEEDS_WORK,
            self::VALUE_POOR,
            self::VALUE_VERY_POOR,
            self::VALUE_UNACCEPTABLE,
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
