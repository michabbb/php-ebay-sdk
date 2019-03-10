<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PaymentStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the values that can be returned in the <b>eBayPaymentStatus</b> field of order management calls. These values indicate the current status of the buyer's payment for an order.
 * @subpackage Enumerations
 */
class PaymentStatusCodeType
{
    /**
     * Constant for value 'NoPaymentFailure'
     * @return string 'NoPaymentFailure'
     */
    const VALUE_NO_PAYMENT_FAILURE = 'NoPaymentFailure';
    /**
     * Constant for value 'BuyerECheckBounced'
     * @return string 'BuyerECheckBounced'
     */
    const VALUE_BUYER_ECHECK_BOUNCED = 'BuyerECheckBounced';
    /**
     * Constant for value 'BuyerCreditCardFailed'
     * @return string 'BuyerCreditCardFailed'
     */
    const VALUE_BUYER_CREDIT_CARD_FAILED = 'BuyerCreditCardFailed';
    /**
     * Constant for value 'BuyerFailedPaymentReportedBySeller'
     * @return string 'BuyerFailedPaymentReportedBySeller'
     */
    const VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER = 'BuyerFailedPaymentReportedBySeller';
    /**
     * Constant for value 'PayPalPaymentInProcess'
     * @return string 'PayPalPaymentInProcess'
     */
    const VALUE_PAY_PAL_PAYMENT_IN_PROCESS = 'PayPalPaymentInProcess';
    /**
     * Constant for value 'PaymentInProcess'
     * @return string 'PaymentInProcess'
     */
    const VALUE_PAYMENT_IN_PROCESS = 'PaymentInProcess';
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
     * @uses self::VALUE_NO_PAYMENT_FAILURE
     * @uses self::VALUE_BUYER_ECHECK_BOUNCED
     * @uses self::VALUE_BUYER_CREDIT_CARD_FAILED
     * @uses self::VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER
     * @uses self::VALUE_PAY_PAL_PAYMENT_IN_PROCESS
     * @uses self::VALUE_PAYMENT_IN_PROCESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_PAYMENT_FAILURE,
            self::VALUE_BUYER_ECHECK_BOUNCED,
            self::VALUE_BUYER_CREDIT_CARD_FAILED,
            self::VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER,
            self::VALUE_PAY_PAL_PAYMENT_IN_PROCESS,
            self::VALUE_PAYMENT_IN_PROCESS,
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
