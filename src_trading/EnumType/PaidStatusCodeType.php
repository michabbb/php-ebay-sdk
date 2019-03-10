<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PaidStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the payment status of an order, as seen by the buyer and seller.
 * @subpackage Enumerations
 */
class PaidStatusCodeType
{
    /**
     * Constant for value 'NotPaid'
     * @return string 'NotPaid'
     */
    const VALUE_NOT_PAID = 'NotPaid';
    /**
     * Constant for value 'BuyerHasNotCompletedCheckout'
     * @return string 'BuyerHasNotCompletedCheckout'
     */
    const VALUE_BUYER_HAS_NOT_COMPLETED_CHECKOUT = 'BuyerHasNotCompletedCheckout';
    /**
     * Constant for value 'PaymentPendingWithPayPal'
     * @return string 'PaymentPendingWithPayPal'
     */
    const VALUE_PAYMENT_PENDING_WITH_PAY_PAL = 'PaymentPendingWithPayPal';
    /**
     * Constant for value 'PaidWithPayPal'
     * @return string 'PaidWithPayPal'
     */
    const VALUE_PAID_WITH_PAY_PAL = 'PaidWithPayPal';
    /**
     * Constant for value 'MarkedAsPaid'
     * @return string 'MarkedAsPaid'
     */
    const VALUE_MARKED_AS_PAID = 'MarkedAsPaid';
    /**
     * Constant for value 'PaymentPendingWithEscrow'
     * @return string 'PaymentPendingWithEscrow'
     */
    const VALUE_PAYMENT_PENDING_WITH_ESCROW = 'PaymentPendingWithEscrow';
    /**
     * Constant for value 'PaidWithEscrow'
     * @return string 'PaidWithEscrow'
     */
    const VALUE_PAID_WITH_ESCROW = 'PaidWithEscrow';
    /**
     * Constant for value 'EscrowPaymentCancelled'
     * @return string 'EscrowPaymentCancelled'
     */
    const VALUE_ESCROW_PAYMENT_CANCELLED = 'EscrowPaymentCancelled';
    /**
     * Constant for value 'PaymentPendingWithPaisaPay'
     * @return string 'PaymentPendingWithPaisaPay'
     */
    const VALUE_PAYMENT_PENDING_WITH_PAISA_PAY = 'PaymentPendingWithPaisaPay';
    /**
     * Constant for value 'PaidWithPaisaPay'
     * @return string 'PaidWithPaisaPay'
     */
    const VALUE_PAID_WITH_PAISA_PAY = 'PaidWithPaisaPay';
    /**
     * Constant for value 'PaymentPending'
     * @return string 'PaymentPending'
     */
    const VALUE_PAYMENT_PENDING = 'PaymentPending';
    /**
     * Constant for value 'PaymentPendingWithPaisaPayEscrow'
     * @return string 'PaymentPendingWithPaisaPayEscrow'
     */
    const VALUE_PAYMENT_PENDING_WITH_PAISA_PAY_ESCROW = 'PaymentPendingWithPaisaPayEscrow';
    /**
     * Constant for value 'PaidWithPaisaPayEscrow'
     * @return string 'PaidWithPaisaPayEscrow'
     */
    const VALUE_PAID_WITH_PAISA_PAY_ESCROW = 'PaidWithPaisaPayEscrow';
    /**
     * Constant for value 'PaisaPayNotPaid'
     * @return string 'PaisaPayNotPaid'
     */
    const VALUE_PAISA_PAY_NOT_PAID = 'PaisaPayNotPaid';
    /**
     * Constant for value 'Refunded'
     * @return string 'Refunded'
     */
    const VALUE_REFUNDED = 'Refunded';
    /**
     * Constant for value 'WaitingForCODPayment'
     * @return string 'WaitingForCODPayment'
     */
    const VALUE_WAITING_FOR_CODPAYMENT = 'WaitingForCODPayment';
    /**
     * Constant for value 'PaidCOD'
     * @return string 'PaidCOD'
     */
    const VALUE_PAID_COD = 'PaidCOD';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'Paid'
     * @return string 'Paid'
     */
    const VALUE_PAID = 'Paid';
    /**
     * Constant for value 'PayUponInvoice'
     * @return string 'PayUponInvoice'
     */
    const VALUE_PAY_UPON_INVOICE = 'PayUponInvoice';
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
    public static function getValidValues()
    {
        return array(
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
