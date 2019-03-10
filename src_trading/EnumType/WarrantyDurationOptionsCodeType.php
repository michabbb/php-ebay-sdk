<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for WarrantyDurationOptionsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class WarrantyDurationOptionsCodeType
{
    /**
     * Constant for value 'Months_1'
     * @return string 'Months_1'
     */
    const VALUE_MONTHS_1 = 'Months_1';
    /**
     * Constant for value 'Months_3'
     * @return string 'Months_3'
     */
    const VALUE_MONTHS_3 = 'Months_3';
    /**
     * Constant for value 'Months_6'
     * @return string 'Months_6'
     */
    const VALUE_MONTHS_6 = 'Months_6';
    /**
     * Constant for value 'Years_1'
     * @return string 'Years_1'
     */
    const VALUE_YEARS_1 = 'Years_1';
    /**
     * Constant for value 'Years_2'
     * @return string 'Years_2'
     */
    const VALUE_YEARS_2 = 'Years_2';
    /**
     * Constant for value 'Years_3'
     * @return string 'Years_3'
     */
    const VALUE_YEARS_3 = 'Years_3';
    /**
     * Constant for value 'Years_MoreThan3'
     * @return string 'Years_MoreThan3'
     */
    const VALUE_YEARS_MORE_THAN_3 = 'Years_MoreThan3';
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
     * @uses self::VALUE_MONTHS_1
     * @uses self::VALUE_MONTHS_3
     * @uses self::VALUE_MONTHS_6
     * @uses self::VALUE_YEARS_1
     * @uses self::VALUE_YEARS_2
     * @uses self::VALUE_YEARS_3
     * @uses self::VALUE_YEARS_MORE_THAN_3
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MONTHS_1,
            self::VALUE_MONTHS_3,
            self::VALUE_MONTHS_6,
            self::VALUE_YEARS_1,
            self::VALUE_YEARS_2,
            self::VALUE_YEARS_3,
            self::VALUE_YEARS_MORE_THAN_3,
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
