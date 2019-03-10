<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RefundSourceTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type defining the refund types that a merchant can offer a buyer who is returning an In-Store Pickup item to the store.
 * @subpackage Enumerations
 */
class RefundSourceTypeCodeType
{
    /**
     * Constant for value 'StoreCredit'
     * @return string 'StoreCredit'
     */
    const VALUE_STORE_CREDIT = 'StoreCredit';
    /**
     * Constant for value 'PaymentRefund'
     * @return string 'PaymentRefund'
     */
    const VALUE_PAYMENT_REFUND = 'PaymentRefund';
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
     * @uses self::VALUE_STORE_CREDIT
     * @uses self::VALUE_PAYMENT_REFUND
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STORE_CREDIT,
            self::VALUE_PAYMENT_REFUND,
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
