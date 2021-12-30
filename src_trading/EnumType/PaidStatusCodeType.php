<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaidStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the possible states of buyer payment for an order.
 * @subpackage Enumerations
 */
class PaidStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotPaid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the buyer has completed checkout, but eBay cannot confirm whether or not the buyer has paid for the order. It is possible that the buyer has paid with an 'offline' payment method, but the order
     * has not been marked as paid.
     * @return string 'NotPaid'
     */
    const VALUE_NOT_PAID = 'NotPaid';
    /**
     * Constant for value 'BuyerHasNotCompletedCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the buyer has not completed the checkout process and so has not made payment.
     * @return string 'BuyerHasNotCompletedCheckout'
     */
    const VALUE_BUYER_HAS_NOT_COMPLETED_CHECKOUT = 'BuyerHasNotCompletedCheckout';
    /**
     * Constant for value 'PaymentPendingWithPayPal'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated and should no longer be returned.
     * @return string 'PaymentPendingWithPayPal'
     */
    const VALUE_PAYMENT_PENDING_WITH_PAY_PAL = 'PaymentPendingWithPayPal';
    /**
     * Constant for value 'PaidWithPayPal'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated and should no longer be returned.
     * @return string 'PaidWithPayPal'
     */
    const VALUE_PAID_WITH_PAY_PAL = 'PaidWithPayPal';
    /**
     * Constant for value 'MarkedAsPaid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the order was marked as paid by eBay or the seller.
     * @return string 'MarkedAsPaid'
     */
    const VALUE_MARKED_AS_PAID = 'MarkedAsPaid';
    /**
     * Constant for value 'PaymentPendingWithEscrow'
     * Meta information extracted from the WSDL
     * - documentation: No longer an applicable value.
     * @return string 'PaymentPendingWithEscrow'
     */
    const VALUE_PAYMENT_PENDING_WITH_ESCROW = 'PaymentPendingWithEscrow';
    /**
     * Constant for value 'PaidWithEscrow'
     * Meta information extracted from the WSDL
     * - documentation: No longer an applicable value.
     * @return string 'PaidWithEscrow'
     */
    const VALUE_PAID_WITH_ESCROW = 'PaidWithEscrow';
    /**
     * Constant for value 'EscrowPaymentCancelled'
     * Meta information extracted from the WSDL
     * - documentation: No longer an applicable value.
     * @return string 'EscrowPaymentCancelled'
     */
    const VALUE_ESCROW_PAYMENT_CANCELLED = 'EscrowPaymentCancelled';
    /**
     * Constant for value 'PaymentPendingWithPaisaPay'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay is a deprecated payment method, so this value is no longer applicable.
     * @return string 'PaymentPendingWithPaisaPay'
     */
    const VALUE_PAYMENT_PENDING_WITH_PAISA_PAY = 'PaymentPendingWithPaisaPay';
    /**
     * Constant for value 'PaidWithPaisaPay'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay is a deprecated payment method, so this value is no longer applicable.
     * @return string 'PaidWithPaisaPay'
     */
    const VALUE_PAID_WITH_PAISA_PAY = 'PaidWithPaisaPay';
    /**
     * Constant for value 'PaymentPending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the buyer's payment is in process, but not yet complete.
     * @return string 'PaymentPending'
     */
    const VALUE_PAYMENT_PENDING = 'PaymentPending';
    /**
     * Constant for value 'PaymentPendingWithPaisaPayEscrow'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay is a deprecated payment method, so this value is no longer applicable.
     * @return string 'PaymentPendingWithPaisaPayEscrow'
     */
    const VALUE_PAYMENT_PENDING_WITH_PAISA_PAY_ESCROW = 'PaymentPendingWithPaisaPayEscrow';
    /**
     * Constant for value 'PaidWithPaisaPayEscrow'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay is a deprecated payment method, so this value is no longer applicable.
     * @return string 'PaidWithPaisaPayEscrow'
     */
    const VALUE_PAID_WITH_PAISA_PAY_ESCROW = 'PaidWithPaisaPayEscrow';
    /**
     * Constant for value 'PaisaPayNotPaid'
     * Meta information extracted from the WSDL
     * - documentation: PaisaPay is a deprecated payment method, so this value is no longer applicable.
     * @return string 'PaisaPayNotPaid'
     */
    const VALUE_PAISA_PAY_NOT_PAID = 'PaisaPayNotPaid';
    /**
     * Constant for value 'Refunded'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the buyer's payment was refunded.
     * @return string 'Refunded'
     */
    const VALUE_REFUNDED = 'Refunded';
    /**
     * Constant for value 'WaitingForCODPayment'
     * Meta information extracted from the WSDL
     * - documentation: The selected payment method is COD and the buyer will make the payment upon delivery.
     * @return string 'WaitingForCODPayment'
     */
    const VALUE_WAITING_FOR_CODPAYMENT = 'WaitingForCODPayment';
    /**
     * Constant for value 'PaidCOD'
     * Meta information extracted from the WSDL
     * - documentation: The buyer has paid for the order with the COD payment method.
     * @return string 'PaidCOD'
     */
    const VALUE_PAID_COD = 'PaidCOD';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'Paid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the buyer has paid for the order.
     * @return string 'Paid'
     */
    const VALUE_PAID = 'Paid';
    /**
     * Constant for value 'PayUponInvoice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the buyer was offered the 'Pay Upon Invoice' option. The 'Pay Upon Invoice' option is only available to eligible German buyers as part of Progressive Checkout on the German site. If a German
     * buyer is offered the 'Pay Upon Invoice' option, that buyer is not required to pay for the order until after receiving an order invoice from the seller.
     * @return string 'PayUponInvoice'
     */
    const VALUE_PAY_UPON_INVOICE = 'PayUponInvoice';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_PAID
     * @uses self::VALUE_BUYER_HAS_NOT_COMPLETED_CHECKOUT
     * @uses self::VALUE_PAYMENT_PENDING_WITH_PAY_PAL
     * @uses self::VALUE_PAID_WITH_PAY_PAL
     * @uses self::VALUE_MARKED_AS_PAID
     * @uses self::VALUE_PAYMENT_PENDING_WITH_ESCROW
     * @uses self::VALUE_PAID_WITH_ESCROW
     * @uses self::VALUE_ESCROW_PAYMENT_CANCELLED
     * @uses self::VALUE_PAYMENT_PENDING_WITH_PAISA_PAY
     * @uses self::VALUE_PAID_WITH_PAISA_PAY
     * @uses self::VALUE_PAYMENT_PENDING
     * @uses self::VALUE_PAYMENT_PENDING_WITH_PAISA_PAY_ESCROW
     * @uses self::VALUE_PAID_WITH_PAISA_PAY_ESCROW
     * @uses self::VALUE_PAISA_PAY_NOT_PAID
     * @uses self::VALUE_REFUNDED
     * @uses self::VALUE_WAITING_FOR_CODPAYMENT
     * @uses self::VALUE_PAID_COD
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_PAID
     * @uses self::VALUE_PAY_UPON_INVOICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_PAID,
            self::VALUE_BUYER_HAS_NOT_COMPLETED_CHECKOUT,
            self::VALUE_PAYMENT_PENDING_WITH_PAY_PAL,
            self::VALUE_PAID_WITH_PAY_PAL,
            self::VALUE_MARKED_AS_PAID,
            self::VALUE_PAYMENT_PENDING_WITH_ESCROW,
            self::VALUE_PAID_WITH_ESCROW,
            self::VALUE_ESCROW_PAYMENT_CANCELLED,
            self::VALUE_PAYMENT_PENDING_WITH_PAISA_PAY,
            self::VALUE_PAID_WITH_PAISA_PAY,
            self::VALUE_PAYMENT_PENDING,
            self::VALUE_PAYMENT_PENDING_WITH_PAISA_PAY_ESCROW,
            self::VALUE_PAID_WITH_PAISA_PAY_ESCROW,
            self::VALUE_PAISA_PAY_NOT_PAID,
            self::VALUE_REFUNDED,
            self::VALUE_WAITING_FOR_CODPAYMENT,
            self::VALUE_PAID_COD,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_PAID,
            self::VALUE_PAY_UPON_INVOICE,
        ];
    }
}
