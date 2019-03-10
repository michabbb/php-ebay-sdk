<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for BuyerPaymentInstrumentCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type identifies all of the payment methods supported for the 'Pay Upon Invoice' feature.
 * @subpackage Enumerations
 */
class BuyerPaymentInstrumentCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CreditCard'
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'BankDirectDebit'
     * @return string 'BankDirectDebit'
     */
    const VALUE_BANK_DIRECT_DEBIT = 'BankDirectDebit';
    /**
     * Constant for value 'PayPal'
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'ELV'
     * @return string 'ELV'
     */
    const VALUE_ELV = 'ELV';
    /**
     * Constant for value 'LocalPaymentCreditCardOther'
     * @return string 'LocalPaymentCreditCardOther'
     */
    const VALUE_LOCAL_PAYMENT_CREDIT_CARD_OTHER = 'LocalPaymentCreditCardOther';
    /**
     * Constant for value 'LocalPaymentELV'
     * @return string 'LocalPaymentELV'
     */
    const VALUE_LOCAL_PAYMENT_ELV = 'LocalPaymentELV';
    /**
     * Constant for value 'LocalPaymentMasterCard'
     * @return string 'LocalPaymentMasterCard'
     */
    const VALUE_LOCAL_PAYMENT_MASTER_CARD = 'LocalPaymentMasterCard';
    /**
     * Constant for value 'LocalPaymentAMEX'
     * @return string 'LocalPaymentAMEX'
     */
    const VALUE_LOCAL_PAYMENT_AMEX = 'LocalPaymentAMEX';
    /**
     * Constant for value 'LocalPaymentVISA'
     * @return string 'LocalPaymentVISA'
     */
    const VALUE_LOCAL_PAYMENT_VISA = 'LocalPaymentVISA';
    /**
     * Constant for value 'LocalPaymentDiscover'
     * @return string 'LocalPaymentDiscover'
     */
    const VALUE_LOCAL_PAYMENT_DISCOVER = 'LocalPaymentDiscover';
    /**
     * Constant for value 'LocalPaymentDinersclub'
     * @return string 'LocalPaymentDinersclub'
     */
    const VALUE_LOCAL_PAYMENT_DINERSCLUB = 'LocalPaymentDinersclub';
    /**
     * Constant for value 'LocalPaymentJCB'
     * @return string 'LocalPaymentJCB'
     */
    const VALUE_LOCAL_PAYMENT_JCB = 'LocalPaymentJCB';
    /**
     * Constant for value 'LocalPaymentSWITCH'
     * @return string 'LocalPaymentSWITCH'
     */
    const VALUE_LOCAL_PAYMENT_SWITCH = 'LocalPaymentSWITCH';
    /**
     * Constant for value 'LocalPaymentSOLO'
     * @return string 'LocalPaymentSOLO'
     */
    const VALUE_LOCAL_PAYMENT_SOLO = 'LocalPaymentSOLO';
    /**
     * Constant for value 'GIROPAY'
     * @return string 'GIROPAY'
     */
    const VALUE_GIROPAY = 'GIROPAY';
    /**
     * Constant for value 'BML'
     * @return string 'BML'
     */
    const VALUE_BML = 'BML';
    /**
     * Constant for value 'PayUponInvoice'
     * @return string 'PayUponInvoice'
     */
    const VALUE_PAY_UPON_INVOICE = 'PayUponInvoice';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_BANK_DIRECT_DEBIT
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_ELV
     * @uses self::VALUE_LOCAL_PAYMENT_CREDIT_CARD_OTHER
     * @uses self::VALUE_LOCAL_PAYMENT_ELV
     * @uses self::VALUE_LOCAL_PAYMENT_MASTER_CARD
     * @uses self::VALUE_LOCAL_PAYMENT_AMEX
     * @uses self::VALUE_LOCAL_PAYMENT_VISA
     * @uses self::VALUE_LOCAL_PAYMENT_DISCOVER
     * @uses self::VALUE_LOCAL_PAYMENT_DINERSCLUB
     * @uses self::VALUE_LOCAL_PAYMENT_JCB
     * @uses self::VALUE_LOCAL_PAYMENT_SWITCH
     * @uses self::VALUE_LOCAL_PAYMENT_SOLO
     * @uses self::VALUE_GIROPAY
     * @uses self::VALUE_BML
     * @uses self::VALUE_PAY_UPON_INVOICE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CREDIT_CARD,
            self::VALUE_BANK_DIRECT_DEBIT,
            self::VALUE_PAY_PAL,
            self::VALUE_ELV,
            self::VALUE_LOCAL_PAYMENT_CREDIT_CARD_OTHER,
            self::VALUE_LOCAL_PAYMENT_ELV,
            self::VALUE_LOCAL_PAYMENT_MASTER_CARD,
            self::VALUE_LOCAL_PAYMENT_AMEX,
            self::VALUE_LOCAL_PAYMENT_VISA,
            self::VALUE_LOCAL_PAYMENT_DISCOVER,
            self::VALUE_LOCAL_PAYMENT_DINERSCLUB,
            self::VALUE_LOCAL_PAYMENT_JCB,
            self::VALUE_LOCAL_PAYMENT_SWITCH,
            self::VALUE_LOCAL_PAYMENT_SOLO,
            self::VALUE_GIROPAY,
            self::VALUE_BML,
            self::VALUE_PAY_UPON_INVOICE,
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
