<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AddressOwnerCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type used by <b>AddressType</b> to indicate whether a shipping address is on file with eBay or on file with PayPal.
 * @subpackage Enumerations
 */
class AddressOwnerCodeType
{
    /**
     * Constant for value 'PayPal'
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'eBay'
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
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
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAY_PAL,
            self::VALUE_E_BAY,
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
