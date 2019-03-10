<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ListingDurationCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be used by the seller to set the duration (number of days or Good 'Til Cancelled) of a listing. <br><br> Listing durations available to the seller may vary based on the site,
 * category, listing type, and the seller's selling profile, so it is a best practice for the seller to call <b>GetCategoryFeatures</b> with <b>ListingDurations</b> included as a <b>FeatureID</b> value in the call request. The <b>GetCategoryFeatures</b>
 * response will include the complete list of listing duration values that can be used for the various listing types.
 * @subpackage Enumerations
 */
class ListingDurationCodeType
{
    /**
     * Constant for value 'Days_1'
     * @return string 'Days_1'
     */
    const VALUE_DAYS_1 = 'Days_1';
    /**
     * Constant for value 'Days_3'
     * @return string 'Days_3'
     */
    const VALUE_DAYS_3 = 'Days_3';
    /**
     * Constant for value 'Days_5'
     * @return string 'Days_5'
     */
    const VALUE_DAYS_5 = 'Days_5';
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
     * Constant for value 'Days_21'
     * @return string 'Days_21'
     */
    const VALUE_DAYS_21 = 'Days_21';
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
     * Constant for value 'Days_90'
     * @return string 'Days_90'
     */
    const VALUE_DAYS_90 = 'Days_90';
    /**
     * Constant for value 'Days_120'
     * @return string 'Days_120'
     */
    const VALUE_DAYS_120 = 'Days_120';
    /**
     * Constant for value 'GTC'
     * @return string 'GTC'
     */
    const VALUE_GTC = 'GTC';
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
     * @uses self::VALUE_DAYS_1
     * @uses self::VALUE_DAYS_3
     * @uses self::VALUE_DAYS_5
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_DAYS_10
     * @uses self::VALUE_DAYS_14
     * @uses self::VALUE_DAYS_21
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_60
     * @uses self::VALUE_DAYS_90
     * @uses self::VALUE_DAYS_120
     * @uses self::VALUE_GTC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAYS_1,
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_5,
            self::VALUE_DAYS_7,
            self::VALUE_DAYS_10,
            self::VALUE_DAYS_14,
            self::VALUE_DAYS_21,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_60,
            self::VALUE_DAYS_90,
            self::VALUE_DAYS_120,
            self::VALUE_GTC,
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
