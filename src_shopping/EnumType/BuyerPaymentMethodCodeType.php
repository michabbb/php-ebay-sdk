<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BuyerPaymentMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type includes all forms of payment that buyers may use to pay for order line items. <br><br> <span class="tablenote"><b>Note: </b> At this time, if the seller is opted in to eBay managed payments, the available
 * payment methods (which are controlled by eBay and not the seller) may not be returned in the response of a <b>GetSingleItem</b> or <b>GetMultipleItems</b> call, but those payment methods will be exposed on the listing's View Item page. </span>
 * @subpackage Enumerations
 */
class BuyerPaymentMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if no payment method is specified for a listing.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MOCC'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if a money order or cashier's check is accepted as a form of payment for the order line item. This payment method is only applicable if the buyer and seller will be
     * handling payment offline.
     * @return string 'MOCC'
     */
    const VALUE_MOCC = 'MOCC';
    /**
     * Constant for value 'AmEx'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if American Express is accepted as a form of payment for the order line item.
     * @return string 'AmEx'
     */
    const VALUE_AM_EX = 'AmEx';
    /**
     * Constant for value 'PaymentSeeDescription'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if payment instructions for the order line item are contained in the listing description.
     * @return string 'PaymentSeeDescription'
     */
    const VALUE_PAYMENT_SEE_DESCRIPTION = 'PaymentSeeDescription';
    /**
     * Constant for value 'CCAccepted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if credit cards are accepted as a form of payment for the order line item.
     * @return string 'CCAccepted'
     */
    const VALUE_CCACCEPTED = 'CCAccepted';
    /**
     * Constant for value 'PersonalCheck'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if a personal check is accepted as a form of payment for the order line item. This payment method is only applicable if the buyer and seller will be handling payment
     * offline.
     * @return string 'PersonalCheck'
     */
    const VALUE_PERSONAL_CHECK = 'PersonalCheck';
    /**
     * Constant for value 'COD'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if 'Cash on delivery' is accepted as a form of payment for the order line item. This payment method is only applicable if the buyer and seller will be handling
     * payment offline, and is only applicable to the following eBay sites: AT (16), BEFR (24), BENL (123), CH (193), DE (77), ES (186), FR (71), HK (201), IN (203), IT (101), PL (212), and SG (216).
     * @return string 'COD'
     */
    const VALUE_COD = 'COD';
    /**
     * Constant for value 'VisaMC'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if Visa or Mastercard are accepted as forms of payment for the order line item.
     * @return string 'VisaMC'
     */
    const VALUE_VISA_MC = 'VisaMC';
    /**
     * Constant for value 'PaisaPayAccepted'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is no longer applicable, as this form of payment was only accepted on the eBay India site, and this site is no longer a functioning eBay marketplace.
     * @return string 'PaisaPayAccepted'
     */
    const VALUE_PAISA_PAY_ACCEPTED = 'PaisaPayAccepted';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if the seller is offering the buyer another form of payment not defined in this type.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if PayPal is accepted as a form of payment for the order line item. This is a valid value for all countries that accept PayPal.
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'Discover'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if Discover is accepted as a form of payment for the order line item.
     * @return string 'Discover'
     */
    const VALUE_DISCOVER = 'Discover';
    /**
     * Constant for value 'CashOnPickup'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if 'Cash on Pickup' is accepted as a form of payment for the order line item. This payment method is only applicable if the buyer and seller will be handling payment
     * offline.
     * @return string 'CashOnPickup'
     */
    const VALUE_CASH_ON_PICKUP = 'CashOnPickup';
    /**
     * Constant for value 'MoneyXferAccepted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if the seller is willing to accept a money transfer as a form of payment for the order line item.
     * @return string 'MoneyXferAccepted'
     */
    const VALUE_MONEY_XFER_ACCEPTED = 'MoneyXferAccepted';
    /**
     * Constant for value 'MoneyXferAcceptedInCheckout'
     * Meta information extracted from the WSDL
     * - documentation: If the seller has bank account information on file, and <b>MoneyXferAcceptedInCheckout</b> is <code>true</code>, then the bank account information will be displayed at checkout.
     * @return string 'MoneyXferAcceptedInCheckout'
     */
    const VALUE_MONEY_XFER_ACCEPTED_IN_CHECKOUT = 'MoneyXferAcceptedInCheckout';
    /**
     * Constant for value 'OtherOnlinePayments'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if the seller is offering the buyer another form of online payment not defined in this type.
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
     * Meta information extracted from the WSDL
     * - documentation: Placeholder value. See <a href="https://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#token">token</a>.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'LoanCheck'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if a loan check is accepted as a form of payment for the order line item. This option is only applicable to motor vehicle listings.
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
     * Meta information extracted from the WSDL
     * - documentation: Elektronisches Lastschriftverfahren (direct debit). Only applicable to Express Germany.
     * @return string 'ELV'
     */
    const VALUE_ELV = 'ELV';
    /**
     * Constant for value 'PaisaPayEscrowEMI'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is no longer applicable, as this form of payment was only accepted on the eBay India site, and this site is no longer a functioning eBay marketplace.
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
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if a debit card is accepted as a form of payment for the order line item. This value is only applicable to eBay Scheduled Delivery orders in the UK.
     * @return string 'DirectDebit'
     */
    const VALUE_DIRECT_DEBIT = 'DirectDebit';
    /**
     * Constant for value 'CreditCard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in a <b>PaymentMethods</b> field if a credit card is accepted as a form of payment for the order line item.
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
