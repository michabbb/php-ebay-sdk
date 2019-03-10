<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CombinedPaymentOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the seller's preference for allowing <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> orders that pass on a shipping
 * discounts to the buyer.
 * @subpackage Enumerations
 */
class CombinedPaymentOptionCodeType
{
    /**
     * Constant for value 'NoCombinedPayment'
     * @return string 'NoCombinedPayment'
     */
    const VALUE_NO_COMBINED_PAYMENT = 'NoCombinedPayment';
    /**
     * Constant for value 'DiscountSpecified'
     * @return string 'DiscountSpecified'
     */
    const VALUE_DISCOUNT_SPECIFIED = 'DiscountSpecified';
    /**
     * Constant for value 'SpecifyDiscountLater'
     * @return string 'SpecifyDiscountLater'
     */
    const VALUE_SPECIFY_DISCOUNT_LATER = 'SpecifyDiscountLater';
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
     * @uses self::VALUE_NO_COMBINED_PAYMENT
     * @uses self::VALUE_DISCOUNT_SPECIFIED
     * @uses self::VALUE_SPECIFY_DISCOUNT_LATER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_COMBINED_PAYMENT,
            self::VALUE_DISCOUNT_SPECIFIED,
            self::VALUE_SPECIFY_DISCOUNT_LATER,
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
