<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellerPaymentMethodCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type defines the payment methods that an eBay user can use to pay fees on monthly eBay invoice.
 * @subpackage Enumerations
 */
class SellerPaymentMethodCodeType
{
    /**
     * Constant for value 'NothingOnFile'
     * @return string 'NothingOnFile'
     */
    const VALUE_NOTHING_ON_FILE = 'NothingOnFile';
    /**
     * Constant for value 'CreditCard'
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'PayPal'
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'DirectDebit'
     * @return string 'DirectDebit'
     */
    const VALUE_DIRECT_DEBIT = 'DirectDebit';
    /**
     * Constant for value 'DirectDebitPendingSignatureMandate'
     * @return string 'DirectDebitPendingSignatureMandate'
     */
    const VALUE_DIRECT_DEBIT_PENDING_SIGNATURE_MANDATE = 'DirectDebitPendingSignatureMandate';
    /**
     * Constant for value 'eBayDirectPay'
     * @return string 'eBayDirectPay'
     */
    const VALUE_E_BAY_DIRECT_PAY = 'eBayDirectPay';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'DirectDebitPendingVerification'
     * @return string 'DirectDebitPendingVerification'
     */
    const VALUE_DIRECT_DEBIT_PENDING_VERIFICATION = 'DirectDebitPendingVerification';
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
     * @uses self::VALUE_NOTHING_ON_FILE
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_DIRECT_DEBIT
     * @uses self::VALUE_DIRECT_DEBIT_PENDING_SIGNATURE_MANDATE
     * @uses self::VALUE_E_BAY_DIRECT_PAY
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_DIRECT_DEBIT_PENDING_VERIFICATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOTHING_ON_FILE,
            self::VALUE_CREDIT_CARD,
            self::VALUE_PAY_PAL,
            self::VALUE_DIRECT_DEBIT,
            self::VALUE_DIRECT_DEBIT_PENDING_SIGNATURE_MANDATE,
            self::VALUE_E_BAY_DIRECT_PAY,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_DIRECT_DEBIT_PENDING_VERIFICATION,
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
