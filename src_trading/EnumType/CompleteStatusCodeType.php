<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CompleteStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains values which indicate whether an order or order line item is complete, incomplete, or pending.
 * @subpackage Enumerations
 */
class CompleteStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Incomplete'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order or order line item is in the incomplete state. Generally speaking, an order or order line item is considered incomplete when payment from the buyer has yet to be initiated.
     * @return string 'Incomplete'
     */
    const VALUE_INCOMPLETE = 'Incomplete';
    /**
     * Constant for value 'Complete'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order or order line item is complete. Generally speaking, an order or order line item is complete when payment from the buyer has been initiated and has been processed. <br><br> <span
     * class="tablenote"><b>Note:</b> If the <b>PaymentMethodUsed</b> is <code>CashOnPickup</code>, the <b>CheckoutStatus.Status</b> value in <b>GetOrders</b> will be <code>Complete</code> at checkout time, even though the seller may not have been
     * officially paid yet. The <b>CheckoutStatus.Status</b> value in <b>GetOrders</b> will remain as <code>Complete</code> even if the seller uses <b>ReviseCheckoutStatus</b> to change the checkout status to <code>Pending</code>. However, the
     * <b>eBayPaymentStatus</b> value in <b>GetOrders</b> will change from <code>NoPaymentFailure</code> to <code>PaymentInProcess</code>. </span>
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order or order line item is in the pending state. Generally speaking, an order is considered pending when payment from the buyer has been initiated but has yet to be fully processed. <br><br> <span
     * class="tablenote"><b>Note:</b> If the payment method is <code>CashOnPickup</code>, the <b>CheckoutStatus.Status</b> value in <b>GetOrders</b> will read <code>Complete</code> at checkout time, even though the seller may not have been officially paid
     * yet. The <b>CheckoutStatus.Status</b> value in <b>GetOrders</b> will remain as <code>Complete</code> even if the seller uses <b>ReviseCheckoutStatus</b> to change the checkout status to <code>Pending</code>. However, the <b>eBayPaymentStatus</b>
     * value in <b>GetOrders</b> will change from <code>NoPaymentFailure</code> to <code>PaymentInProcess</code>. </span>
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_INCOMPLETE
     * @uses self::VALUE_COMPLETE
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INCOMPLETE,
            self::VALUE_COMPLETE,
            self::VALUE_PENDING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
