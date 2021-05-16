<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BuyerPaymentInstrumentCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type identifies all of the payment methods supported for the 'Pay Upon Invoice' feature. The 'Pay Upon Invoice' feature is only available through the eBay Germany marketplace.
 * @subpackage Enumerations
 */
class BuyerPaymentInstrumentCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that no payment method was specified by the seller.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CreditCard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a credit card was used to pay for the order.
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'BankDirectDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a bank debit card was used to pay for the order.
     * @return string 'BankDirectDebit'
     */
    const VALUE_BANK_DIRECT_DEBIT = 'BankDirectDebit';
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that PayPal was used to pay for the order.
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'ELV'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that Elektronisches Lastschriftverfahren (direct debit) was used to pay for the order.
     * @return string 'ELV'
     */
    const VALUE_ELV = 'ELV';
    /**
     * Constant for value 'LocalPaymentCreditCardOther'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an unknown credit card was used to pay for the order.
     * @return string 'LocalPaymentCreditCardOther'
     */
    const VALUE_LOCAL_PAYMENT_CREDIT_CARD_OTHER = 'LocalPaymentCreditCardOther';
    /**
     * Constant for value 'LocalPaymentELV'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that Elektronisches Lastschriftverfahren (direct debit) was used locally to pay for the order.
     * @return string 'LocalPaymentELV'
     */
    const VALUE_LOCAL_PAYMENT_ELV = 'LocalPaymentELV';
    /**
     * Constant for value 'LocalPaymentMasterCard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a Master Card credit card was used to pay for the order.
     * @return string 'LocalPaymentMasterCard'
     */
    const VALUE_LOCAL_PAYMENT_MASTER_CARD = 'LocalPaymentMasterCard';
    /**
     * Constant for value 'LocalPaymentAMEX'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an American Express credit card was used to pay for the order.
     * @return string 'LocalPaymentAMEX'
     */
    const VALUE_LOCAL_PAYMENT_AMEX = 'LocalPaymentAMEX';
    /**
     * Constant for value 'LocalPaymentVISA'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a Visa credit card was used to pay for the order.
     * @return string 'LocalPaymentVISA'
     */
    const VALUE_LOCAL_PAYMENT_VISA = 'LocalPaymentVISA';
    /**
     * Constant for value 'LocalPaymentDiscover'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a Discover credit card was used to pay for the order.
     * @return string 'LocalPaymentDiscover'
     */
    const VALUE_LOCAL_PAYMENT_DISCOVER = 'LocalPaymentDiscover';
    /**
     * Constant for value 'LocalPaymentDinersclub'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a Diners Club credit card was used to pay for the order.
     * @return string 'LocalPaymentDinersclub'
     */
    const VALUE_LOCAL_PAYMENT_DINERSCLUB = 'LocalPaymentDinersclub';
    /**
     * Constant for value 'LocalPaymentJCB'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a JCB credit card was used to pay for the order.
     * @return string 'LocalPaymentJCB'
     */
    const VALUE_LOCAL_PAYMENT_JCB = 'LocalPaymentJCB';
    /**
     * Constant for value 'LocalPaymentSWITCH'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a Switch debit card was used to pay for the order.
     * @return string 'LocalPaymentSWITCH'
     */
    const VALUE_LOCAL_PAYMENT_SWITCH = 'LocalPaymentSWITCH';
    /**
     * Constant for value 'LocalPaymentSOLO'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a Solo debit card was used to pay for the order.
     * @return string 'LocalPaymentSOLO'
     */
    const VALUE_LOCAL_PAYMENT_SOLO = 'LocalPaymentSOLO';
    /**
     * Constant for value 'GIROPAY'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that Giropay was used to pay for the order.
     * @return string 'GIROPAY'
     */
    const VALUE_GIROPAY = 'GIROPAY';
    /**
     * Constant for value 'BML'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that BML was used to pay for the order.
     * @return string 'BML'
     */
    const VALUE_BML = 'BML';
    /**
     * Constant for value 'PayUponInvoice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the 'Pay Upon Invoice' option was offered to the buyer on the Germany site.
     * @return string 'PayUponInvoice'
     */
    const VALUE_PAY_UPON_INVOICE = 'PayUponInvoice';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
