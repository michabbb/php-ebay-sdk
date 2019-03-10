<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CalculatedShippingRateOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class CalculatedShippingRateOptionCodeType
{
    /**
     * Constant for value 'CombinedItemWeight'
     * @return string 'CombinedItemWeight'
     */
    const VALUE_COMBINED_ITEM_WEIGHT = 'CombinedItemWeight';
    /**
     * Constant for value 'IndividualItemWeight'
     * @return string 'IndividualItemWeight'
     */
    const VALUE_INDIVIDUAL_ITEM_WEIGHT = 'IndividualItemWeight';
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
     * @uses self::VALUE_COMBINED_ITEM_WEIGHT
     * @uses self::VALUE_INDIVIDUAL_ITEM_WEIGHT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMBINED_ITEM_WEIGHT,
            self::VALUE_INDIVIDUAL_ITEM_WEIGHT,
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
