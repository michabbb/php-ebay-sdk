<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisplayPayNowButtonCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is used to control how the "Pay Now" button is displayed on a listing.
 * @subpackage Enumerations
 */
class DisplayPayNowButtonCodeType
{
    /**
     * Constant for value 'ShowPayNowButtonForAllPaymentMethods'
     * @return string 'ShowPayNowButtonForAllPaymentMethods'
     */
    const VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS = 'ShowPayNowButtonForAllPaymentMethods';
    /**
     * Constant for value 'ShowPayNowButtonForPayPalOnly'
     * @return string 'ShowPayNowButtonForPayPalOnly'
     */
    const VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY = 'ShowPayNowButtonForPayPalOnly';
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
     * @uses self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS
     * @uses self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_ALL_PAYMENT_METHODS,
            self::VALUE_SHOW_PAY_NOW_BUTTON_FOR_PAY_PAL_ONLY,
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
