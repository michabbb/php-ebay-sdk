<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for FlatRateInsuranceRangeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class FlatRateInsuranceRangeCodeType
{
    /**
     * Constant for value 'FlatRateInsuranceRange1'
     * @return string 'FlatRateInsuranceRange1'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_1 = 'FlatRateInsuranceRange1';
    /**
     * Constant for value 'FlatRateInsuranceRange2'
     * @return string 'FlatRateInsuranceRange2'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_2 = 'FlatRateInsuranceRange2';
    /**
     * Constant for value 'FlatRateInsuranceRange3'
     * @return string 'FlatRateInsuranceRange3'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_3 = 'FlatRateInsuranceRange3';
    /**
     * Constant for value 'FlatRateInsuranceRange4'
     * @return string 'FlatRateInsuranceRange4'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_4 = 'FlatRateInsuranceRange4';
    /**
     * Constant for value 'FlatRateInsuranceRange5'
     * @return string 'FlatRateInsuranceRange5'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_5 = 'FlatRateInsuranceRange5';
    /**
     * Constant for value 'FlatRateInsuranceRange6'
     * @return string 'FlatRateInsuranceRange6'
     */
    const VALUE_FLAT_RATE_INSURANCE_RANGE_6 = 'FlatRateInsuranceRange6';
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
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_1
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_2
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_3
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_4
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_5
     * @uses self::VALUE_FLAT_RATE_INSURANCE_RANGE_6
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_1,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_2,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_3,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_4,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_5,
            self::VALUE_FLAT_RATE_INSURANCE_RANGE_6,
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
