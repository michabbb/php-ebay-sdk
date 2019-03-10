<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PayoutMethodType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PayoutMethodType
{
    /**
     * Constant for value 'PAYPAL'
     * @return string 'PAYPAL'
     */
    const VALUE_PAYPAL = 'PAYPAL';
    /**
     * Constant for value 'EFT'
     * @return string 'EFT'
     */
    const VALUE_EFT = 'EFT';
    /**
     * Constant for value 'MONEYBOOKERS'
     * @return string 'MONEYBOOKERS'
     */
    const VALUE_MONEYBOOKERS = 'MONEYBOOKERS';
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
     * @uses self::VALUE_PAYPAL
     * @uses self::VALUE_EFT
     * @uses self::VALUE_MONEYBOOKERS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAYPAL,
            self::VALUE_EFT,
            self::VALUE_MONEYBOOKERS,
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
