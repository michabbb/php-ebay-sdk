<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ReturnsWithinOptionsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be used by the seller in an Add/Revise/Relist call to set the number of days (after the purchase date) that a buyer has to return an item (if the return policy states that
 * items can be returned) for a refund or an exchange. These same values are also returned in the <b>GeteBayDetails</b> call. <br><br> <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For
 * most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include
 * <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively. </span>
 * @subpackage Enumerations
 */
class ReturnsWithinOptionsCodeType
{
    /**
     * Constant for value 'Days_3'
     * @return string 'Days_3'
     */
    const VALUE_DAYS_3 = 'Days_3';
    /**
     * Constant for value 'Days_7'
     * @return string 'Days_7'
     */
    const VALUE_DAYS_7 = 'Days_7';
    /**
     * Constant for value 'Days_10'
     * @return string 'Days_10'
     */
    const VALUE_DAYS_10 = 'Days_10';
    /**
     * Constant for value 'Days_14'
     * @return string 'Days_14'
     */
    const VALUE_DAYS_14 = 'Days_14';
    /**
     * Constant for value 'Days_30'
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Days_60'
     * @return string 'Days_60'
     */
    const VALUE_DAYS_60 = 'Days_60';
    /**
     * Constant for value 'Months_1'
     * @return string 'Months_1'
     */
    const VALUE_MONTHS_1 = 'Months_1';
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
     * @uses self::VALUE_DAYS_3
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_DAYS_10
     * @uses self::VALUE_DAYS_14
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_60
     * @uses self::VALUE_MONTHS_1
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_7,
            self::VALUE_DAYS_10,
            self::VALUE_DAYS_14,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_60,
            self::VALUE_MONTHS_1,
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
