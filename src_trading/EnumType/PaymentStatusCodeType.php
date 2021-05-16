<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the values that can be returned in the <b>eBayPaymentStatus</b> field of order management calls. These values indicate the current status of the buyer's payment for an order.
 * @subpackage Enumerations
 */
class PaymentStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoPaymentFailure'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment for the order has cleared. A <b>CheckoutStatus.eBayPaymentStatus</b> value of 'NoPaymentFailure' and a <b>CheckoutStatus.Status</b> value of 'Complete' indicates that checkout is
     * complete.
     * @return string 'NoPaymentFailure'
     */
    const VALUE_NO_PAYMENT_FAILURE = 'NoPaymentFailure';
    /**
     * Constant for value 'BuyerECheckBounced'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's eCheck bounced. This value is only applicable if the seller accepts eChecks as a form of payment.
     * @return string 'BuyerECheckBounced'
     */
    const VALUE_BUYER_ECHECK_BOUNCED = 'BuyerECheckBounced';
    /**
     * Constant for value 'BuyerCreditCardFailed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment via a credit card failed. This value is only applicable if the seller accepts credit cards as a form of payment.
     * @return string 'BuyerCreditCardFailed'
     */
    const VALUE_BUYER_CREDIT_CARD_FAILED = 'BuyerCreditCardFailed';
    /**
     * Constant for value 'BuyerFailedPaymentReportedBySeller'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller reported the buyer's payment as failed.
     * @return string 'BuyerFailedPaymentReportedBySeller'
     */
    const VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER = 'BuyerFailedPaymentReportedBySeller';
    /**
     * Constant for value 'PayPalPaymentInProcess'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's PayPal payment is in process. This value is only applicable if the buyer has selected PayPal as the payment method.
     * @return string 'PayPalPaymentInProcess'
     */
    const VALUE_PAY_PAL_PAYMENT_IN_PROCESS = 'PayPalPaymentInProcess';
    /**
     * Constant for value 'PaymentInProcess'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's non-PayPal payment is in process. This value is only applicable if the buyer has selected a payment method other than PayPal.
     * @return string 'PaymentInProcess'
     */
    const VALUE_PAYMENT_IN_PROCESS = 'PaymentInProcess';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_PAYMENT_FAILURE
     * @uses self::VALUE_BUYER_ECHECK_BOUNCED
     * @uses self::VALUE_BUYER_CREDIT_CARD_FAILED
     * @uses self::VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER
     * @uses self::VALUE_PAY_PAL_PAYMENT_IN_PROCESS
     * @uses self::VALUE_PAYMENT_IN_PROCESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_PAYMENT_FAILURE,
            self::VALUE_BUYER_ECHECK_BOUNCED,
            self::VALUE_BUYER_CREDIT_CARD_FAILED,
            self::VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER,
            self::VALUE_PAY_PAL_PAYMENT_IN_PROCESS,
            self::VALUE_PAYMENT_IN_PROCESS,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
