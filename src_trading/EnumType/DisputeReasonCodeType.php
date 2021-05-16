<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains the top-level reasons for a buyer or seller to create a case against one another. These values are specified in the <b>DisputeReason</b> field of <b>AddDispute</b>, and are returned in the
 * <b>GetUserDisputes</b> and <b>GetDispute</b> calls. The <b>DisputeReason</b> value will dictate what <b>DisputeExplanation</b> values that can be used/returned. <br/><br/> <span class="tablenote"><strong>Note:</strong> The dispute calls in the
 * Trading API are not compatible with 'Item Not Received' or 'Significantly Not As Described' cases initiated by buyers through the eBay Money Back Guarantee program. The <a
 * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve and/or respond to eBay Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeReasonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BuyerHasNotPaid'
     * Meta information extracted from the WSDL
     * - documentation: The seller has opened a case against the buyer because the buyer has not paid for the order line item. A seller can open an <i>Unpaid Item</i> case as early as two days after the end of the auction listing. An exception to this rule
     * occurs when the seller allows combined payment orders. If the seller does allow the buyer to combine orders and make one payment for those orders, the seller would not be able to open an Unpaid Item case until after the time period to combine orders
     * expires. <br>
     * @return string 'BuyerHasNotPaid'
     */
    const VALUE_BUYER_HAS_NOT_PAID = 'BuyerHasNotPaid';
    /**
     * Constant for value 'TransactionMutuallyCanceled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the dispute involves an order that is being cancelled by seller with mutual consent from the buyer.
     * @return string 'TransactionMutuallyCanceled'
     */
    const VALUE_TRANSACTION_MUTUALLY_CANCELED = 'TransactionMutuallyCanceled';
    /**
     * Constant for value 'ItemNotReceived'
     * Meta information extracted from the WSDL
     * - documentation: The buyer has opened a case against the seller because the item has not been received by the buyer. A buyer can open an <i>Item Not Received</i> case after the Estimated Delivery Date of the item has passed, or 7 days after payment
     * if the Estimated Delivery Date wasn't given by the seller. This value cannot be used in <b>AddDispute</b>.
     * @return string 'ItemNotReceived'
     */
    const VALUE_ITEM_NOT_RECEIVED = 'ItemNotReceived';
    /**
     * Constant for value 'SignificantlyNotAsDescribed'
     * Meta information extracted from the WSDL
     * - documentation: The buyer has opened a case against the seller because the item was received but does not match the item description in the listing. A buyer can open an <i>Item Significantly Not As Described</i> case immediately after receiving the
     * item. This value cannot be used in <b>AddDispute</b>.
     * @return string 'SignificantlyNotAsDescribed'
     */
    const VALUE_SIGNIFICANTLY_NOT_AS_DESCRIBED = 'SignificantlyNotAsDescribed';
    /**
     * Constant for value 'NoRefund'
     * Meta information extracted from the WSDL
     * - documentation: The item was returned but no refund was given. This value cannot be used in <b>AddDispute</b>.
     * @return string 'NoRefund'
     */
    const VALUE_NO_REFUND = 'NoRefund';
    /**
     * Constant for value 'ReturnPolicyUnpaidItem'
     * Meta information extracted from the WSDL
     * - documentation: Item was returned and seller was not paid. This value cannot be used in <b>AddDispute</b>.
     * @return string 'ReturnPolicyUnpaidItem'
     */
    const VALUE_RETURN_POLICY_UNPAID_ITEM = 'ReturnPolicyUnpaidItem';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BUYER_HAS_NOT_PAID
     * @uses self::VALUE_TRANSACTION_MUTUALLY_CANCELED
     * @uses self::VALUE_ITEM_NOT_RECEIVED
     * @uses self::VALUE_SIGNIFICANTLY_NOT_AS_DESCRIBED
     * @uses self::VALUE_NO_REFUND
     * @uses self::VALUE_RETURN_POLICY_UNPAID_ITEM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BUYER_HAS_NOT_PAID,
            self::VALUE_TRANSACTION_MUTUALLY_CANCELED,
            self::VALUE_ITEM_NOT_RECEIVED,
            self::VALUE_SIGNIFICANTLY_NOT_AS_DESCRIBED,
            self::VALUE_NO_REFUND,
            self::VALUE_RETURN_POLICY_UNPAID_ITEM,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
