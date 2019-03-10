<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ClassifiedAdPaymentMethodEnabledCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used to indicate whether the payment method will be displayed for a category belonging to the Lead Generation Format.
 * @subpackage Enumerations
 */
class ClassifiedAdPaymentMethodEnabledCodeType
{
    /**
     * Constant for value 'EnabledWithCheckout'
     * @return string 'EnabledWithCheckout'
     */
    const VALUE_ENABLED_WITH_CHECKOUT = 'EnabledWithCheckout';
    /**
     * Constant for value 'EnabledWithoutCheckout'
     * @return string 'EnabledWithoutCheckout'
     */
    const VALUE_ENABLED_WITHOUT_CHECKOUT = 'EnabledWithoutCheckout';
    /**
     * Constant for value 'NotSupported'
     * @return string 'NotSupported'
     */
    const VALUE_NOT_SUPPORTED = 'NotSupported';
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
     * @uses self::VALUE_ENABLED_WITH_CHECKOUT
     * @uses self::VALUE_ENABLED_WITHOUT_CHECKOUT
     * @uses self::VALUE_NOT_SUPPORTED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENABLED_WITH_CHECKOUT,
            self::VALUE_ENABLED_WITHOUT_CHECKOUT,
            self::VALUE_NOT_SUPPORTED,
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
