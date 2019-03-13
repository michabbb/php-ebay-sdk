<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for HalfItemConditionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfItemConditionCodeType</b> and all of its enumeration values are deprecated along with the <b>FindHalfProducts</b> call. </span> Controls values for item condition, especially for Books
 * catalog.
 * @subpackage Enumerations
 */
class HalfItemConditionCodeType
{
    /**
     * Constant for value 'BrandNew'
     * @return string 'BrandNew'
     */
    const VALUE_BRAND_NEW = 'BrandNew';
    /**
     * Constant for value 'LikeNew'
     * @return string 'LikeNew'
     */
    const VALUE_LIKE_NEW = 'LikeNew';
    /**
     * Constant for value 'VeryGood'
     * @return string 'VeryGood'
     */
    const VALUE_VERY_GOOD = 'VeryGood';
    /**
     * Constant for value 'Good'
     * @return string 'Good'
     */
    const VALUE_GOOD = 'Good';
    /**
     * Constant for value 'Acceptable'
     * @return string 'Acceptable'
     */
    const VALUE_ACCEPTABLE = 'Acceptable';
    /**
     * Constant for value 'Used'
     * @return string 'Used'
     */
    const VALUE_USED = 'Used';
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
     * @uses self::VALUE_BRAND_NEW
     * @uses self::VALUE_LIKE_NEW
     * @uses self::VALUE_VERY_GOOD
     * @uses self::VALUE_GOOD
     * @uses self::VALUE_ACCEPTABLE
     * @uses self::VALUE_USED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BRAND_NEW,
            self::VALUE_LIKE_NEW,
            self::VALUE_VERY_GOOD,
            self::VALUE_GOOD,
            self::VALUE_ACCEPTABLE,
            self::VALUE_USED,
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
