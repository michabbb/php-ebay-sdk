<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CancelInitiatorCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible parties that can initiate the cancellation of an eBay order.
 * @subpackage Enumerations
 */
class CancelInitiatorCodeType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Seller'
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Constant for value 'Buyer'
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'CS'
     * @return string 'CS'
     */
    const VALUE_CS = 'CS';
    /**
     * Constant for value 'System'
     * @return string 'System'
     */
    const VALUE_SYSTEM = 'System';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_SELLER
     * @uses self::VALUE_BUYER
     * @uses self::VALUE_CS
     * @uses self::VALUE_SYSTEM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_SELLER,
            self::VALUE_BUYER,
            self::VALUE_CS,
            self::VALUE_SYSTEM,
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
