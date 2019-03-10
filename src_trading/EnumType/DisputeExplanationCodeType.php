<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeExplanationCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains the explanations for a buyer or seller opening a case against one another. These values are specified in the <b>DisputeExplanation</b> field of <b>AddDispute</b>, and are returned in the
 * <b>GetUserDisputes</b> and <b>GetDispute</b> calls. The <b>DisputeReason</b> value will dictate what <b>DisputeExplanation</b> values that can be used/returned. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back
 * guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeExplanationCodeType
{
    /**
     * Constant for value 'BuyerHasNotResponded'
     * @return string 'BuyerHasNotResponded'
     */
    const VALUE_BUYER_HAS_NOT_RESPONDED = 'BuyerHasNotResponded';
    /**
     * Constant for value 'BuyerRefusedToPay'
     * @return string 'BuyerRefusedToPay'
     */
    const VALUE_BUYER_REFUSED_TO_PAY = 'BuyerRefusedToPay';
    /**
     * Constant for value 'BuyerNotClearedToPay'
     * @return string 'BuyerNotClearedToPay'
     */
    const VALUE_BUYER_NOT_CLEARED_TO_PAY = 'BuyerNotClearedToPay';
    /**
     * Constant for value 'BuyerReturnedItemForRefund'
     * @return string 'BuyerReturnedItemForRefund'
     */
    const VALUE_BUYER_RETURNED_ITEM_FOR_REFUND = 'BuyerReturnedItemForRefund';
    /**
     * Constant for value 'UnableToResolveTerms'
     * @return string 'UnableToResolveTerms'
     */
    const VALUE_UNABLE_TO_RESOLVE_TERMS = 'UnableToResolveTerms';
    /**
     * Constant for value 'BuyerNoLongerWantsItem'
     * @return string 'BuyerNoLongerWantsItem'
     */
    const VALUE_BUYER_NO_LONGER_WANTS_ITEM = 'BuyerNoLongerWantsItem';
    /**
     * Constant for value 'BuyerPurchasingMistake'
     * @return string 'BuyerPurchasingMistake'
     */
    const VALUE_BUYER_PURCHASING_MISTAKE = 'BuyerPurchasingMistake';
    /**
     * Constant for value 'ShipCountryNotSupported'
     * @return string 'ShipCountryNotSupported'
     */
    const VALUE_SHIP_COUNTRY_NOT_SUPPORTED = 'ShipCountryNotSupported';
    /**
     * Constant for value 'ShippingAddressNotConfirmed'
     * @return string 'ShippingAddressNotConfirmed'
     */
    const VALUE_SHIPPING_ADDRESS_NOT_CONFIRMED = 'ShippingAddressNotConfirmed';
    /**
     * Constant for value 'PaymentMethodNotSupported'
     * @return string 'PaymentMethodNotSupported'
     */
    const VALUE_PAYMENT_METHOD_NOT_SUPPORTED = 'PaymentMethodNotSupported';
    /**
     * Constant for value 'BuyerNoLongerRegistered'
     * @return string 'BuyerNoLongerRegistered'
     */
    const VALUE_BUYER_NO_LONGER_REGISTERED = 'BuyerNoLongerRegistered';
    /**
     * Constant for value 'OtherExplanation'
     * @return string 'OtherExplanation'
     */
    const VALUE_OTHER_EXPLANATION = 'OtherExplanation';
    /**
     * Constant for value 'Unspecified'
     * @return string 'Unspecified'
     */
    const VALUE_UNSPECIFIED = 'Unspecified';
    /**
     * Constant for value 'UPIAssistance'
     * @return string 'UPIAssistance'
     */
    const VALUE_UPIASSISTANCE = 'UPIAssistance';
    /**
     * Constant for value 'BuyerPaymentNotReceivedOrCleared'
     * @return string 'BuyerPaymentNotReceivedOrCleared'
     */
    const VALUE_BUYER_PAYMENT_NOT_RECEIVED_OR_CLEARED = 'BuyerPaymentNotReceivedOrCleared';
    /**
     * Constant for value 'SellerDoesntShipToCountry'
     * @return string 'SellerDoesntShipToCountry'
     */
    const VALUE_SELLER_DOESNT_SHIP_TO_COUNTRY = 'SellerDoesntShipToCountry';
    /**
     * Constant for value 'BuyerNotPaid'
     * @return string 'BuyerNotPaid'
     */
    const VALUE_BUYER_NOT_PAID = 'BuyerNotPaid';
    /**
     * Constant for value 'UPIAssistanceDisabled'
     * @return string 'UPIAssistanceDisabled'
     */
    const VALUE_UPIASSISTANCE_DISABLED = 'UPIAssistanceDisabled';
    /**
     * Constant for value 'SellerRanOutOfStock'
     * @return string 'SellerRanOutOfStock'
     */
    const VALUE_SELLER_RAN_OUT_OF_STOCK = 'SellerRanOutOfStock';
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
     * @uses self::VALUE_BUYER_HAS_NOT_RESPONDED
     * @uses self::VALUE_BUYER_REFUSED_TO_PAY
     * @uses self::VALUE_BUYER_NOT_CLEARED_TO_PAY
     * @uses self::VALUE_BUYER_RETURNED_ITEM_FOR_REFUND
     * @uses self::VALUE_UNABLE_TO_RESOLVE_TERMS
     * @uses self::VALUE_BUYER_NO_LONGER_WANTS_ITEM
     * @uses self::VALUE_BUYER_PURCHASING_MISTAKE
     * @uses self::VALUE_SHIP_COUNTRY_NOT_SUPPORTED
     * @uses self::VALUE_SHIPPING_ADDRESS_NOT_CONFIRMED
     * @uses self::VALUE_PAYMENT_METHOD_NOT_SUPPORTED
     * @uses self::VALUE_BUYER_NO_LONGER_REGISTERED
     * @uses self::VALUE_OTHER_EXPLANATION
     * @uses self::VALUE_UNSPECIFIED
     * @uses self::VALUE_UPIASSISTANCE
     * @uses self::VALUE_BUYER_PAYMENT_NOT_RECEIVED_OR_CLEARED
     * @uses self::VALUE_SELLER_DOESNT_SHIP_TO_COUNTRY
     * @uses self::VALUE_BUYER_NOT_PAID
     * @uses self::VALUE_UPIASSISTANCE_DISABLED
     * @uses self::VALUE_SELLER_RAN_OUT_OF_STOCK
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYER_HAS_NOT_RESPONDED,
            self::VALUE_BUYER_REFUSED_TO_PAY,
            self::VALUE_BUYER_NOT_CLEARED_TO_PAY,
            self::VALUE_BUYER_RETURNED_ITEM_FOR_REFUND,
            self::VALUE_UNABLE_TO_RESOLVE_TERMS,
            self::VALUE_BUYER_NO_LONGER_WANTS_ITEM,
            self::VALUE_BUYER_PURCHASING_MISTAKE,
            self::VALUE_SHIP_COUNTRY_NOT_SUPPORTED,
            self::VALUE_SHIPPING_ADDRESS_NOT_CONFIRMED,
            self::VALUE_PAYMENT_METHOD_NOT_SUPPORTED,
            self::VALUE_BUYER_NO_LONGER_REGISTERED,
            self::VALUE_OTHER_EXPLANATION,
            self::VALUE_UNSPECIFIED,
            self::VALUE_UPIASSISTANCE,
            self::VALUE_BUYER_PAYMENT_NOT_RECEIVED_OR_CLEARED,
            self::VALUE_SELLER_DOESNT_SHIP_TO_COUNTRY,
            self::VALUE_BUYER_NOT_PAID,
            self::VALUE_UPIASSISTANCE_DISABLED,
            self::VALUE_SELLER_RAN_OUT_OF_STOCK,
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
