<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for BuyerPaymentMethodCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type includes all forms of payment that buyers may use to pay for order line items.
 * @subpackage Enumerations
 */
class BuyerPaymentMethodCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MOCC'
     * @return string 'MOCC'
     */
    const VALUE_MOCC = 'MOCC';
    /**
     * Constant for value 'AmEx'
     * @return string 'AmEx'
     */
    const VALUE_AM_EX = 'AmEx';
    /**
     * Constant for value 'PaymentSeeDescription'
     * @return string 'PaymentSeeDescription'
     */
    const VALUE_PAYMENT_SEE_DESCRIPTION = 'PaymentSeeDescription';
    /**
     * Constant for value 'CCAccepted'
     * @return string 'CCAccepted'
     */
    const VALUE_CCACCEPTED = 'CCAccepted';
    /**
     * Constant for value 'PersonalCheck'
     * @return string 'PersonalCheck'
     */
    const VALUE_PERSONAL_CHECK = 'PersonalCheck';
    /**
     * Constant for value 'COD'
     * @return string 'COD'
     */
    const VALUE_COD = 'COD';
    /**
     * Constant for value 'VisaMC'
     * @return string 'VisaMC'
     */
    const VALUE_VISA_MC = 'VisaMC';
    /**
     * Constant for value 'PaisaPayAccepted'
     * @return string 'PaisaPayAccepted'
     */
    const VALUE_PAISA_PAY_ACCEPTED = 'PaisaPayAccepted';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'PayPal'
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'Discover'
     * @return string 'Discover'
     */
    const VALUE_DISCOVER = 'Discover';
    /**
     * Constant for value 'CashOnPickup'
     * @return string 'CashOnPickup'
     */
    const VALUE_CASH_ON_PICKUP = 'CashOnPickup';
    /**
     * Constant for value 'MoneyXferAccepted'
     * @return string 'MoneyXferAccepted'
     */
    const VALUE_MONEY_XFER_ACCEPTED = 'MoneyXferAccepted';
    /**
     * Constant for value 'MoneyXferAcceptedInCheckout'
     * @return string 'MoneyXferAcceptedInCheckout'
     */
    const VALUE_MONEY_XFER_ACCEPTED_IN_CHECKOUT = 'MoneyXferAcceptedInCheckout';
    /**
     * Constant for value 'OtherOnlinePayments'
     * @return string 'OtherOnlinePayments'
     */
    const VALUE_OTHER_ONLINE_PAYMENTS = 'OtherOnlinePayments';
    /**
     * Constant for value 'Escrow'
     * @return string 'Escrow'
     */
    const VALUE_ESCROW = 'Escrow';
    /**
     * Constant for value 'PrePayDelivery'
     * @return string 'PrePayDelivery'
     */
    const VALUE_PRE_PAY_DELIVERY = 'PrePayDelivery';
    /**
     * Constant for value 'CODPrePayDelivery'
     * @return string 'CODPrePayDelivery'
     */
    const VALUE_CODPRE_PAY_DELIVERY = 'CODPrePayDelivery';
    /**
     * Constant for value 'PostalTransfer'
     * @return string 'PostalTransfer'
     */
    const VALUE_POSTAL_TRANSFER = 'PostalTransfer';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'LoanCheck'
     * @return string 'LoanCheck'
     */
    const VALUE_LOAN_CHECK = 'LoanCheck';
    /**
     * Constant for value 'CashInPerson'
     * @return string 'CashInPerson'
     */
    const VALUE_CASH_IN_PERSON = 'CashInPerson';
    /**
     * Constant for value 'ELV'
     * @return string 'ELV'
     */
    const VALUE_ELV = 'ELV';
    /**
     * Constant for value 'PaisaPayEscrowEMI'
     * @return string 'PaisaPayEscrowEMI'
     */
    const VALUE_PAISA_PAY_ESCROW_EMI = 'PaisaPayEscrowEMI';
    /**
     * Constant for value 'Moneybookers'
     * @return string 'Moneybookers'
     */
    const VALUE_MONEYBOOKERS = 'Moneybookers';
    /**
     * Constant for value 'Paymate'
     * @return string 'Paymate'
     */
    const VALUE_PAYMATE = 'Paymate';
    /**
     * Constant for value 'ProPay'
     * @return string 'ProPay'
     */
    const VALUE_PRO_PAY = 'ProPay';
    /**
     * Constant for value 'StandardPayment'
     * @return string 'StandardPayment'
     */
    const VALUE_STANDARD_PAYMENT = 'StandardPayment';
    /**
     * Constant for value 'DirectDebit'
     * @return string 'DirectDebit'
     */
    const VALUE_DIRECT_DEBIT = 'DirectDebit';
    /**
     * Constant for value 'CreditCard'
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
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
     * @uses self::VALUE_MOCC
     * @uses self::VALUE_AM_EX
     * @uses self::VALUE_PAYMENT_SEE_DESCRIPTION
     * @uses self::VALUE_CCACCEPTED
     * @uses self::VALUE_PERSONAL_CHECK
     * @uses self::VALUE_COD
     * @uses self::VALUE_VISA_MC
     * @uses self::VALUE_PAISA_PAY_ACCEPTED
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_DISCOVER
     * @uses self::VALUE_CASH_ON_PICKUP
     * @uses self::VALUE_MONEY_XFER_ACCEPTED
     * @uses self::VALUE_MONEY_XFER_ACCEPTED_IN_CHECKOUT
     * @uses self::VALUE_OTHER_ONLINE_PAYMENTS
     * @uses self::VALUE_ESCROW
     * @uses self::VALUE_PRE_PAY_DELIVERY
     * @uses self::VALUE_CODPRE_PAY_DELIVERY
     * @uses self::VALUE_POSTAL_TRANSFER
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_LOAN_CHECK
     * @uses self::VALUE_CASH_IN_PERSON
     * @uses self::VALUE_ELV
     * @uses self::VALUE_PAISA_PAY_ESCROW_EMI
     * @uses self::VALUE_MONEYBOOKERS
     * @uses self::VALUE_PAYMATE
     * @uses self::VALUE_PRO_PAY
     * @uses self::VALUE_STANDARD_PAYMENT
     * @uses self::VALUE_DIRECT_DEBIT
     * @uses self::VALUE_CREDIT_CARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MOCC,
            self::VALUE_AM_EX,
            self::VALUE_PAYMENT_SEE_DESCRIPTION,
            self::VALUE_CCACCEPTED,
            self::VALUE_PERSONAL_CHECK,
            self::VALUE_COD,
            self::VALUE_VISA_MC,
            self::VALUE_PAISA_PAY_ACCEPTED,
            self::VALUE_OTHER,
            self::VALUE_PAY_PAL,
            self::VALUE_DISCOVER,
            self::VALUE_CASH_ON_PICKUP,
            self::VALUE_MONEY_XFER_ACCEPTED,
            self::VALUE_MONEY_XFER_ACCEPTED_IN_CHECKOUT,
            self::VALUE_OTHER_ONLINE_PAYMENTS,
            self::VALUE_ESCROW,
            self::VALUE_PRE_PAY_DELIVERY,
            self::VALUE_CODPRE_PAY_DELIVERY,
            self::VALUE_POSTAL_TRANSFER,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_LOAN_CHECK,
            self::VALUE_CASH_IN_PERSON,
            self::VALUE_ELV,
            self::VALUE_PAISA_PAY_ESCROW_EMI,
            self::VALUE_MONEYBOOKERS,
            self::VALUE_PAYMATE,
            self::VALUE_PRO_PAY,
            self::VALUE_STANDARD_PAYMENT,
            self::VALUE_DIRECT_DEBIT,
            self::VALUE_CREDIT_CARD,
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
