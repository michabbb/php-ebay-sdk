<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for MismatchTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class MismatchTypeCodeType
{
    /**
     * Constant for value 'OverPayment'
     * @return string 'OverPayment'
     */
    const VALUE_OVER_PAYMENT = 'OverPayment';
    /**
     * Constant for value 'UnderPayment'
     * @return string 'UnderPayment'
     */
    const VALUE_UNDER_PAYMENT = 'UnderPayment';
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
     * @uses self::VALUE_OVER_PAYMENT
     * @uses self::VALUE_UNDER_PAYMENT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OVER_PAYMENT,
            self::VALUE_UNDER_PAYMENT,
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
