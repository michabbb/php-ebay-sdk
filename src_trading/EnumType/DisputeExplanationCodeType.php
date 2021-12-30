<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeExplanationCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains the explanations that a seller can give for opening up an Unpaid Item case against a buyer. These values are specified in the <b>DisputeExplanation</b> field of <b>AddDispute</b> call, and are returned
 * in the <b>GetUserDisputes</b> and <b>GetDispute</b> calls. The <b>DisputeReason</b> value will dictate what <b>DisputeExplanation</b> values that can be used/returned. <br/><br/> <span class="tablenote"><strong>Note:</strong> Only Unpaid Item cases
 * are now supported by the Dispute calls of the Trading API. These calls no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers
 * must create an INR case through eBay's Resolution Center, and these calls also do not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a
 * href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Enumerations
 */
class DisputeExplanationCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BuyerHasNotResponded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has not paid for the order line item, and has not responded to the seller regarding payment. This value is allowed when the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b>.
     * @return string 'BuyerHasNotResponded'
     */
    const VALUE_BUYER_HAS_NOT_RESPONDED = 'BuyerHasNotResponded';
    /**
     * Constant for value 'BuyerRefusedToPay'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has not paid for the order line item, and according to the seller, has refused to pay for the order line item. This value is allowed when the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b>.
     * @return string 'BuyerRefusedToPay'
     */
    const VALUE_BUYER_REFUSED_TO_PAY = 'BuyerRefusedToPay';
    /**
     * Constant for value 'BuyerNotClearedToPay'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has not paid for the order line item, and is not cleared by eBay to pay. This value is allowed when the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b>.
     * @return string 'BuyerNotClearedToPay'
     */
    const VALUE_BUYER_NOT_CLEARED_TO_PAY = 'BuyerNotClearedToPay';
    /**
     * Constant for value 'BuyerReturnedItemForRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable and should not be used in an <b>AddDispute</b> call, as it only pertains to <i>Significantly Not As Described</i> disputes initiated through PayPal, and those disputes are no longer supported by the
     * <b>AddDispute</b>.
     * @return string 'BuyerReturnedItemForRefund'
     */
    const VALUE_BUYER_RETURNED_ITEM_FOR_REFUND = 'BuyerReturnedItemForRefund';
    /**
     * Constant for value 'UnableToResolveTerms'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer and seller were unable to resolve a disagreement over terms, and the seller is willing to cancel the order line item. This value is allowed when the <b>DisputeReason</b> value is
     * <b>TransactionMutuallyCanceled</b>.
     * @return string 'UnableToResolveTerms'
     */
    const VALUE_UNABLE_TO_RESOLVE_TERMS = 'UnableToResolveTerms';
    /**
     * Constant for value 'BuyerNoLongerWantsItem'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer no longer wants the item (buyer remorse), and the seller is willing to cancel the order line item. This value is allowed when the <b>DisputeReason</b> value is <b>TransactionMutuallyCanceled</b>.
     * @return string 'BuyerNoLongerWantsItem'
     */
    const VALUE_BUYER_NO_LONGER_WANTS_ITEM = 'BuyerNoLongerWantsItem';
    /**
     * Constant for value 'BuyerPurchasingMistake'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer made a mistake by purchasing the item, and the seller is willing to cancel the order line item. This value is allowed when the <b>DisputeReason</b> value is <b>TransactionMutuallyCanceled</b>.
     * @return string 'BuyerPurchasingMistake'
     */
    const VALUE_BUYER_PURCHASING_MISTAKE = 'BuyerPurchasingMistake';
    /**
     * Constant for value 'ShipCountryNotSupported'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated, and should not be used.
     * @return string 'ShipCountryNotSupported'
     */
    const VALUE_SHIP_COUNTRY_NOT_SUPPORTED = 'ShipCountryNotSupported';
    /**
     * Constant for value 'ShippingAddressNotConfirmed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer is requesting shipment of the item to an unconfirmed (not on file with eBay) address. This value is allowed when the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b> or
     * <b>TransactionMutuallyCanceled</b>.
     * @return string 'ShippingAddressNotConfirmed'
     */
    const VALUE_SHIPPING_ADDRESS_NOT_CONFIRMED = 'ShippingAddressNotConfirmed';
    /**
     * Constant for value 'PaymentMethodNotSupported'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated, and should not be used.
     * @return string 'PaymentMethodNotSupported'
     */
    const VALUE_PAYMENT_METHOD_NOT_SUPPORTED = 'PaymentMethodNotSupported';
    /**
     * Constant for value 'BuyerNoLongerRegistered'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated, and should not be used.
     * @return string 'BuyerNoLongerRegistered'
     */
    const VALUE_BUYER_NO_LONGER_REGISTERED = 'BuyerNoLongerRegistered';
    /**
     * Constant for value 'OtherExplanation'
     * Meta information extracted from the WSDL
     * - documentation: This value can be used when no other explanation in <b> DisputeExplanationCodeType</b> is appropriate for the situation. This value is allowed when the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b>.
     * @return string 'OtherExplanation'
     */
    const VALUE_OTHER_EXPLANATION = 'OtherExplanation';
    /**
     * Constant for value 'Unspecified'
     * Meta information extracted from the WSDL
     * - documentation: This value cannot be used in <b>AddDispute</b>, but it may be returned in the <b>GetDispute</b> or <b>GetUserDisputes</b> calls if the dispute explanation is unknown or was not specified.
     * @return string 'Unspecified'
     */
    const VALUE_UNSPECIFIED = 'Unspecified';
    /**
     * Constant for value 'UPIAssistance'
     * Meta information extracted from the WSDL
     * - documentation: This value will be returned in <b>GetDispute</b> or <b>GetUserDisputes</b> calls if the Unpaid Item case was opened by eBay through the Unpaid Item Assistance mechanism. This value cannot be used in <b>AddDispute</b>.
     * @return string 'UPIAssistance'
     */
    const VALUE_UPIASSISTANCE = 'UPIAssistance';
    /**
     * Constant for value 'BuyerPaymentNotReceivedOrCleared'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has not paid the seller for the order line item, or has paid the seller but the payment has not cleared. This value is allowed when the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b>.
     * @return string 'BuyerPaymentNotReceivedOrCleared'
     */
    const VALUE_BUYER_PAYMENT_NOT_RECEIVED_OR_CLEARED = 'BuyerPaymentNotReceivedOrCleared';
    /**
     * Constant for value 'SellerDoesntShipToCountry'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer is requesting shipment of the item to a country that is on the seller's ship-to exclusion list. This value is allowed when the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b> or
     * <b>TransactionMutuallyCanceled</b>.
     * @return string 'SellerDoesntShipToCountry'
     */
    const VALUE_SELLER_DOESNT_SHIP_TO_COUNTRY = 'SellerDoesntShipToCountry';
    /**
     * Constant for value 'BuyerNotPaid'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has not paid for the order line item. This value is allowed when the <b>DisputeReason</b> value is <b>BuyerHasNotPaid</b>.
     * @return string 'BuyerNotPaid'
     */
    const VALUE_BUYER_NOT_PAID = 'BuyerNotPaid';
    /**
     * Constant for value 'UPIAssistanceDisabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Unpaid Item case was opened by eBay through the Unpaid Item Assistance mechanism, and then was subsequently converted to a manual dispute, either by the seller or by eBay. This value cannot be used in
     * <b>AddDispute</b>.
     * @return string 'UPIAssistanceDisabled'
     */
    const VALUE_UPIASSISTANCE_DISABLED = 'UPIAssistanceDisabled';
    /**
     * Constant for value 'SellerRanOutOfStock'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller ran out of stock on the item, cannot fulfill the order, and has to cancel the order line item. This value is allowed when the <b>DisputeReason</b> value is <b>TransactionMutuallyCanceled</b>.
     * @return string 'SellerRanOutOfStock'
     */
    const VALUE_SELLER_RAN_OUT_OF_STOCK = 'SellerRanOutOfStock';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
