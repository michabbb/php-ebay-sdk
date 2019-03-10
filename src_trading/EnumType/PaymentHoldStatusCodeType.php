<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PaymentHoldStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains the list of possible values that can be returned in the PaymentHoldStatus container.
 * @subpackage Enumerations
 */
class PaymentHoldStatusCodeType
{
    /**
     * Constant for value 'PaymentReview'
     * @return string 'PaymentReview'
     */
    const VALUE_PAYMENT_REVIEW = 'PaymentReview';
    /**
     * Constant for value 'MerchantHold'
     * @return string 'MerchantHold'
     */
    const VALUE_MERCHANT_HOLD = 'MerchantHold';
    /**
     * Constant for value 'Released'
     * @return string 'Released'
     */
    const VALUE_RELEASED = 'Released';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'NewSellerHold'
     * @return string 'NewSellerHold'
     */
    const VALUE_NEW_SELLER_HOLD = 'NewSellerHold';
    /**
     * Constant for value 'PaymentHold'
     * @return string 'PaymentHold'
     */
    const VALUE_PAYMENT_HOLD = 'PaymentHold';
    /**
     * Constant for value 'ReleasePending'
     * @return string 'ReleasePending'
     */
    const VALUE_RELEASE_PENDING = 'ReleasePending';
    /**
     * Constant for value 'ReleaseConfirmed'
     * @return string 'ReleaseConfirmed'
     */
    const VALUE_RELEASE_CONFIRMED = 'ReleaseConfirmed';
    /**
     * Constant for value 'ReleaseFailed'
     * @return string 'ReleaseFailed'
     */
    const VALUE_RELEASE_FAILED = 'ReleaseFailed';
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
     * @uses self::VALUE_PAYMENT_REVIEW
     * @uses self::VALUE_MERCHANT_HOLD
     * @uses self::VALUE_RELEASED
     * @uses self::VALUE_NONE
     * @uses self::VALUE_NEW_SELLER_HOLD
     * @uses self::VALUE_PAYMENT_HOLD
     * @uses self::VALUE_RELEASE_PENDING
     * @uses self::VALUE_RELEASE_CONFIRMED
     * @uses self::VALUE_RELEASE_FAILED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAYMENT_REVIEW,
            self::VALUE_MERCHANT_HOLD,
            self::VALUE_RELEASED,
            self::VALUE_NONE,
            self::VALUE_NEW_SELLER_HOLD,
            self::VALUE_PAYMENT_HOLD,
            self::VALUE_RELEASE_PENDING,
            self::VALUE_RELEASE_CONFIRMED,
            self::VALUE_RELEASE_FAILED,
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
