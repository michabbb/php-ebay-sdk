<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CombinedPaymentPeriodCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be used by the seller to set the number of days after item purchase that an unpaid order can be combined with one or more other mutual (same buyer and same seller) unpaid
 * orders into one <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> order. Either the buyer or the seller can initiate the Combined Invoice process. Sellers can offer
 * buyers shipping discounts through Combined Invoice orders, and buyers only have to make one payment for multiple orders as opposed to a payment for each order.
 * @subpackage Enumerations
 */
class CombinedPaymentPeriodCodeType
{
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
     * Constant for value 'Ineligible'
     * @return string 'Ineligible'
     */
    const VALUE_INELIGIBLE = 'Ineligible';
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
     * @uses self::VALUE_DAYS_5
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_DAYS_14
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_INELIGIBLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_5,
            self::VALUE_DAYS_7,
            self::VALUE_DAYS_14,
            self::VALUE_DAYS_30,
            self::VALUE_INELIGIBLE,
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
