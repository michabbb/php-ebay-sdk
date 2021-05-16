<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <br> <span class="tablenote"><b>Note: </b> This type is only applicable to the <b>GetSellerPayments</b> call, which is only relevant to Half.com orders, and since the Half.com site has been shut down, this type is no longer
 * applicable. </span>
 * @subpackage Enumerations
 */
class PaymentTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sale'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its values will no longer be applicable since the Half.com site has been shut down. </span>
     * @return string 'Sale'
     */
    const VALUE_SALE = 'Sale';
    /**
     * Constant for value 'Refund'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its values will no longer be applicable since the Half.com site has been shut down. </span>
     * @return string 'Refund'
     */
    const VALUE_REFUND = 'Refund';
    /**
     * Constant for value 'SellerDeniedPayment'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its values will no longer be applicable since the Half.com site has been shut down. </span>
     * @return string 'SellerDeniedPayment'
     */
    const VALUE_SELLER_DENIED_PAYMENT = 'SellerDeniedPayment';
    /**
     * Constant for value 'AdminReversal'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its values will no longer be applicable since the Half.com site has been shut down. </span>
     * @return string 'AdminReversal'
     */
    const VALUE_ADMIN_REVERSAL = 'AdminReversal';
    /**
     * Constant for value 'AllOther'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its values will no longer be applicable since the Half.com site has been shut down. </span>
     * @return string 'AllOther'
     */
    const VALUE_ALL_OTHER = 'AllOther';
    /**
     * Constant for value 'RentalExtension'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its values will no longer be applicable since the Half.com site has been shut down </span>
     * @return string 'RentalExtension'
     */
    const VALUE_RENTAL_EXTENSION = 'RentalExtension';
    /**
     * Constant for value 'RentalBuyout'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its values will no longer be applicable since the Half.com site has been shut down. </span>
     * @return string 'RentalBuyout'
     */
    const VALUE_RENTAL_BUYOUT = 'RentalBuyout';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>PaymentTypeCodeType</b> and all of its values will no longer be applicable since the Half.com site has been shut down. </span>
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SALE,
            self::VALUE_REFUND,
            self::VALUE_SELLER_DENIED_PAYMENT,
            self::VALUE_ADMIN_REVERSAL,
            self::VALUE_ALL_OTHER,
            self::VALUE_RENTAL_EXTENSION,
            self::VALUE_RENTAL_BUYOUT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
