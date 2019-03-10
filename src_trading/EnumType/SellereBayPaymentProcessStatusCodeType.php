<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellereBayPaymentProcessStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class SellereBayPaymentProcessStatusCodeType
{
    /**
     * Constant for value 'AcceptedUA'
     * @return string 'AcceptedUA'
     */
    const VALUE_ACCEPTED_UA = 'AcceptedUA';
    /**
     * Constant for value 'MustAcceptUA'
     * @return string 'MustAcceptUA'
     */
    const VALUE_MUST_ACCEPT_UA = 'MustAcceptUA';
    /**
     * Constant for value 'eBayPaymentProcessEnabled'
     * @return string 'eBayPaymentProcessEnabled'
     */
    const VALUE_E_BAY_PAYMENT_PROCESS_ENABLED = 'eBayPaymentProcessEnabled';
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
     * @uses self::VALUE_ACCEPTED_UA
     * @uses self::VALUE_MUST_ACCEPT_UA
     * @uses self::VALUE_E_BAY_PAYMENT_PROCESS_ENABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCEPTED_UA,
            self::VALUE_MUST_ACCEPT_UA,
            self::VALUE_E_BAY_PAYMENT_PROCESS_ENABLED,
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
