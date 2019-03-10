<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AddressUsageCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration type lists the values that will be returned to the seller in a <b>GetOrders</b> call (and other order management calls) to indicate that the shipping address is the buyer's default shipping address, an
 * alternative/secondary shipping address, or an invalid shipping address.
 * @subpackage Enumerations
 */
class AddressUsageCodeType
{
    /**
     * Constant for value 'DefaultShipping'
     * @return string 'DefaultShipping'
     */
    const VALUE_DEFAULT_SHIPPING = 'DefaultShipping';
    /**
     * Constant for value 'Shipping'
     * @return string 'Shipping'
     */
    const VALUE_SHIPPING = 'Shipping';
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
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
     * @uses self::VALUE_DEFAULT_SHIPPING
     * @uses self::VALUE_SHIPPING
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT_SHIPPING,
            self::VALUE_SHIPPING,
            self::VALUE_INVALID,
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
