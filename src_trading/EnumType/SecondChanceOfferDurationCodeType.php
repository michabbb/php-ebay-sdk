<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SecondChanceOfferDurationCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the list of values that can be used by the seller to set the length of time that a Second Chance Offer or a Transaction Confirmation Request will be available to a specific recipient to whom the Second
 * Chance Offer or Transaction Confirmation Request was presented. The recipient must purchase the Second Chance or Transaction Confirmation Request item within this time or the offer will expire. Second Chance Offers are only applicable for closed
 * auction listings and Transaction Confirmation Requests are only applicable for an eBay Motors listing that were closed and converted to a Transaction Confirmation Request.
 * @subpackage Enumerations
 */
class SecondChanceOfferDurationCodeType
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
