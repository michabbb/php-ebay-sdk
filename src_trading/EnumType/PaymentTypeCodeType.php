<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PaymentTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: <br> <span class="tablenote"><b>Note: </b> This type is only applicable to the <b>GetSellerPayments</b> call, which is only relevant to Half.com orders, and since the Half.com site has been shut down, this type is no longer
 * applicable. </span>
 * @subpackage Enumerations
 */
class PaymentTypeCodeType
{
    /**
     * Constant for value 'Sale'
     * @return string 'Sale'
     */
    const VALUE_SALE = 'Sale';
    /**
     * Constant for value 'Refund'
     * @return string 'Refund'
     */
    const VALUE_REFUND = 'Refund';
    /**
     * Constant for value 'SellerDeniedPayment'
     * @return string 'SellerDeniedPayment'
     */
    const VALUE_SELLER_DENIED_PAYMENT = 'SellerDeniedPayment';
    /**
     * Constant for value 'AdminReversal'
     * @return string 'AdminReversal'
     */
    const VALUE_ADMIN_REVERSAL = 'AdminReversal';
    /**
     * Constant for value 'AllOther'
     * @return string 'AllOther'
     */
    const VALUE_ALL_OTHER = 'AllOther';
    /**
     * Constant for value 'RentalExtension'
     * @return string 'RentalExtension'
     */
    const VALUE_RENTAL_EXTENSION = 'RentalExtension';
    /**
     * Constant for value 'RentalBuyout'
     * @return string 'RentalBuyout'
     */
    const VALUE_RENTAL_BUYOUT = 'RentalBuyout';
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
     * @uses self::VALUE_SALE
     * @uses self::VALUE_REFUND
     * @uses self::VALUE_SELLER_DENIED_PAYMENT
     * @uses self::VALUE_ADMIN_REVERSAL
     * @uses self::VALUE_ALL_OTHER
     * @uses self::VALUE_RENTAL_EXTENSION
     * @uses self::VALUE_RENTAL_BUYOUT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SALE,
            self::VALUE_REFUND,
            self::VALUE_SELLER_DENIED_PAYMENT,
            self::VALUE_ADMIN_REVERSAL,
            self::VALUE_ALL_OTHER,
            self::VALUE_RENTAL_EXTENSION,
            self::VALUE_RENTAL_BUYOUT,
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
