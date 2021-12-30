<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BuyerPaymentMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines different payment methods that can be used by buyers to pay sellers for purchases. Supported payment methods vary by eBay marketplace, by eBay Category, and even by listing format. If a seller is listing,
 * revising, or relisting an item with a Trading API call, the seller should use one of the following metadata calls to see which payment methods are supported at the site and category level: <ul> <li><b>GeteBayDetails</b>: through
 * <b>PaymentOptionDetails</b> containers in the response, this call will show the seller all of the payment methods that are available for the specified marketplace. To retrieve this metadata, the seller should include the <b>DetailName</b> field in
 * the request, and set its value to <code>PaymentOptionDetails</code></li> <li><b>GetCategoryFeatures</b>: through <b>PaymentMethod</b> fields that are returned under the <b>SiteDefaults</b> container or under one or more <b>Category</b> containers in
 * the response, this call will show the seller all of the payment methods that are available for the specified marketplace, including any category exceptions. To retrieve this metadata, the seller should include the <b>FeatureID</b> field in the
 * request, and set its value to <code>PaymentMethods</code>. Note that <b>Category</b> containers will only be returned for categories that differ from Site Defaults as far as supported payment methods are concerned. </li> </ul> <br> <span
 * class="tablenote"><b>Note: </b> As eBay now controls all of the online payment methods available to buyers, sellers will only specify offline payment methods for listings that require/support offline payment. </span>
 * @subpackage Enumerations
 */
class BuyerPaymentMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that no payment method has been specified for the listing. This may be the case for a classified ad listing, since payment happens outside of the eBay platform.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MOCC'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a money order or cashiers check is accepted for payment. This value is only applicable for offline payments.
     * @return string 'MOCC'
     */
    const VALUE_MOCC = 'MOCC';
    /**
     * Constant for value 'AmEx'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that American Express is accepted for payment.
     * @return string 'AmEx'
     */
    const VALUE_AM_EX = 'AmEx';
    /**
     * Constant for value 'PaymentSeeDescription'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that buyers should check the listing description for more details on payment. This may be the case for a classified ad listing, since payment happens outside of the eBay platform.
     * @return string 'PaymentSeeDescription'
     */
    const VALUE_PAYMENT_SEE_DESCRIPTION = 'PaymentSeeDescription';
    /**
     * Constant for value 'CCAccepted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that credit cards are accepted for payment. <br/><br/> <span class="tablenote"><b>Note: </b> This enumeration value is returned in the response of order management calls if the buyer used an eBay gift
     * card to pay the full or partial balance of the order. </span>
     * @return string 'CCAccepted'
     */
    const VALUE_CCACCEPTED = 'CCAccepted';
    /**
     * Constant for value 'PersonalCheck'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a personal check is accepted for payment. This value is only applicable for offline payments.
     * @return string 'PersonalCheck'
     */
    const VALUE_PERSONAL_CHECK = 'PersonalCheck';
    /**
     * Constant for value 'COD'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that cash on delivery of item is accepted for payment. This value is only applicable for offline payments.
     * @return string 'COD'
     */
    const VALUE_COD = 'COD';
    /**
     * Constant for value 'VisaMC'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that Visa or MasterCard are accepted for payment.
     * @return string 'VisaMC'
     */
    const VALUE_VISA_MC = 'VisaMC';
    /**
     * Constant for value 'PaisaPayAccepted'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'PaisaPayAccepted'
     */
    const VALUE_PAISA_PAY_ACCEPTED = 'PaisaPayAccepted';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the payment method is unknown.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that PayPal is accepted as a payment method.
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'Discover'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that Discover Card is accepted for payment.
     * @return string 'Discover'
     */
    const VALUE_DISCOVER = 'Discover';
    /**
     * Constant for value 'CashOnPickup'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that cash on pickup is accepted for payment. This value is only applicable for offline payments.
     * @return string 'CashOnPickup'
     */
    const VALUE_CASH_ON_PICKUP = 'CashOnPickup';
    /**
     * Constant for value 'MoneyXferAccepted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a direct transfer of money is accepted for payment.
     * @return string 'MoneyXferAccepted'
     */
    const VALUE_MONEY_XFER_ACCEPTED = 'MoneyXferAccepted';
    /**
     * Constant for value 'MoneyXferAcceptedInCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a direct transfer of money during checkout is accepted for payment.
     * @return string 'MoneyXferAcceptedInCheckout'
     */
    const VALUE_MONEY_XFER_ACCEPTED_IN_CHECKOUT = 'MoneyXferAcceptedInCheckout';
    /**
     * Constant for value 'OtherOnlinePayments'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the payment method is unknown.
     * @return string 'OtherOnlinePayments'
     */
    const VALUE_OTHER_ONLINE_PAYMENTS = 'OtherOnlinePayments';
    /**
     * Constant for value 'Escrow'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'Escrow'
     */
    const VALUE_ESCROW = 'Escrow';
    /**
     * Constant for value 'PrePayDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'PrePayDelivery'
     */
    const VALUE_PRE_PAY_DELIVERY = 'PrePayDelivery';
    /**
     * Constant for value 'CODPrePayDelivery'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CODPrePayDelivery'
     */
    const VALUE_CODPRE_PAY_DELIVERY = 'CODPrePayDelivery';
    /**
     * Constant for value 'PostalTransfer'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'PostalTransfer'
     */
    const VALUE_POSTAL_TRANSFER = 'PostalTransfer';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'LoanCheck'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'LoanCheck'
     */
    const VALUE_LOAN_CHECK = 'LoanCheck';
    /**
     * Constant for value 'CashInPerson'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated. 'CashOnPickup' is now the only available offline cash option.
     * @return string 'CashInPerson'
     */
    const VALUE_CASH_IN_PERSON = 'CashInPerson';
    /**
     * Constant for value 'ELV'
     * Meta information extracted from the WSDL
     * - documentation: Elektronisches Lastschriftverfahren (direct debit). Only applicable to the Express Germany site, which has been shut down.
     * @return string 'ELV'
     */
    const VALUE_ELV = 'ELV';
    /**
     * Constant for value 'PaisaPayEscrow'
     * Meta information extracted from the WSDL
     * - documentation: This payment type is no longer applicable since eBay India is no longer a functioning site.
     * @return string 'PaisaPayEscrow'
     */
    const VALUE_PAISA_PAY_ESCROW = 'PaisaPayEscrow';
    /**
     * Constant for value 'PaisaPayEscrowEMI'
     * Meta information extracted from the WSDL
     * - documentation: This payment type is no longer applicable since eBay India is no longer a functioning site.
     * @return string 'PaisaPayEscrowEMI'
     */
    const VALUE_PAISA_PAY_ESCROW_EMI = 'PaisaPayEscrowEMI';
    /**
     * Constant for value 'IntegratedMerchantCreditCard'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'IntegratedMerchantCreditCard'
     */
    const VALUE_INTEGRATED_MERCHANT_CREDIT_CARD = 'IntegratedMerchantCreditCard';
    /**
     * Constant for value 'Moneybookers'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'Moneybookers'
     */
    const VALUE_MONEYBOOKERS = 'Moneybookers';
    /**
     * Constant for value 'Paymate'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'Paymate'
     */
    const VALUE_PAYMATE = 'Paymate';
    /**
     * Constant for value 'ProPay'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'ProPay'
     */
    const VALUE_PRO_PAY = 'ProPay';
    /**
     * Constant for value 'PayOnPickup'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated. 'CashOnPickup' is now the only available offline cash option.
     * @return string 'PayOnPickup'
     */
    const VALUE_PAY_ON_PICKUP = 'PayOnPickup';
    /**
     * Constant for value 'Diners'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Diners Club credit card is accepted for payment.
     * @return string 'Diners'
     */
    const VALUE_DINERS = 'Diners';
    /**
     * Constant for value 'StandardPayment'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer used.
     * @return string 'StandardPayment'
     */
    const VALUE_STANDARD_PAYMENT = 'StandardPayment';
    /**
     * Constant for value 'DirectDebit'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'DirectDebit'
     */
    const VALUE_DIRECT_DEBIT = 'DirectDebit';
    /**
     * Constant for value 'CreditCard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned in the response of order management calls if eBay collects the online payment from the buyer, and the buyer has paid for the order with any accepted payment method except for an eBay gift card. If
     * the buyer used an eBay gift card to pay the full or partial balance of the order, the <code>CCAccepted</code> value will be returned instead.
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'PayUponInvoice'
     * Meta information extracted from the WSDL
     * - documentation: This buyer payment method is only applicable for the Germany site and is associated with the rollout of Progressive Checkout and the Pay Upon Invoice feature. 'PayUponInvoice' is not a payment method that is offered to the buyer, but
     * instead, eBay/PayPal makes the determination (based on several factors) during checkout whether the buyer is eligible for 'Pay Upon Invoice'. If the buyer is offered the 'Pay Upon Invoice' option, that buyer is not required to pay for the order until
     * an order invoice is sent by the seller. The seller must offer PayPal as a payment option or the 'Pay Upon Invoice' option will not be made available to the buyer under any circumstance. <br><br> Only select categories on the Germany site will support
     * the 'Pay Upon Invoice' option, and orders going above the two-thousand dollar EURO mark will not be eligible for 'Pay Upon Invoice'. <br><br> Since the seller can not specify 'Pay Upon Invoice' as a payment method, this enumeration value cannot be
     * passed into a <b>Item.PaymentMethods</b> field in an Add/Revise/Relist call.
     * @return string 'PayUponInvoice'
     */
    const VALUE_PAY_UPON_INVOICE = 'PayUponInvoice';
    /**
     * Constant for value 'QIWI'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'QIWI'
     */
    const VALUE_QIWI = 'QIWI';
    /**
     * Constant for value 'PayPalCredit'
     * Meta information extracted from the WSDL
     * - documentation: This payment method is deprecated.
     * @return string 'PayPalCredit'
     */
    const VALUE_PAY_PAL_CREDIT = 'PayPalCredit';
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
     * @uses self::VALUE_PAISA_PAY_ESCROW
     * @uses self::VALUE_PAISA_PAY_ESCROW_EMI
     * @uses self::VALUE_INTEGRATED_MERCHANT_CREDIT_CARD
     * @uses self::VALUE_MONEYBOOKERS
     * @uses self::VALUE_PAYMATE
     * @uses self::VALUE_PRO_PAY
     * @uses self::VALUE_PAY_ON_PICKUP
     * @uses self::VALUE_DINERS
     * @uses self::VALUE_STANDARD_PAYMENT
     * @uses self::VALUE_DIRECT_DEBIT
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_PAY_UPON_INVOICE
     * @uses self::VALUE_QIWI
     * @uses self::VALUE_PAY_PAL_CREDIT
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
            self::VALUE_PAISA_PAY_ESCROW,
            self::VALUE_PAISA_PAY_ESCROW_EMI,
            self::VALUE_INTEGRATED_MERCHANT_CREDIT_CARD,
            self::VALUE_MONEYBOOKERS,
            self::VALUE_PAYMATE,
            self::VALUE_PRO_PAY,
            self::VALUE_PAY_ON_PICKUP,
            self::VALUE_DINERS,
            self::VALUE_STANDARD_PAYMENT,
            self::VALUE_DIRECT_DEBIT,
            self::VALUE_CREDIT_CARD,
            self::VALUE_PAY_UPON_INVOICE,
            self::VALUE_QIWI,
            self::VALUE_PAY_PAL_CREDIT,
        ];
    }
}
