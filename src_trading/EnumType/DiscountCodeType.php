<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DiscountCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is used to specify if the discount used for a promotional sale is a price (dollar value) discount or a percentage (of sale price) discount.
 * @subpackage Enumerations
 */
class DiscountCodeType
{
    /**
     * Constant for value 'Percentage'
     * @return string 'Percentage'
     */
    const VALUE_PERCENTAGE = 'Percentage';
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
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
     * @uses self::VALUE_PERCENTAGE
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERCENTAGE,
            self::VALUE_PRICE,
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
