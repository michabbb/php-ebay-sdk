<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains the top-level reasons for a seller to create a Unpaid Item case against a buyer. These values are specified in the <b>DisputeReason</b> field of <b>AddDispute</b>, and are returned in the
 * <b>GetUserDisputes</b> and <b>GetDispute</b> calls. The <b>DisputeReason</b> value will dictate which <b>DisputeExplanation</b> values that can be used/returned. <br/><br/> <span class="tablenote"><strong>Note:</strong> The Dispute calls of the
 * Trading API now only support Unpaid Item cases, and no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR
 * case through eBay's Resolution Center, and these calls do not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a
 * href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Enumerations
 */
class DisputeReasonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BuyerHasNotPaid'
     * Meta information extracted from the WSDL
     * - documentation: The seller has opened an Unpaid Item case against the buyer because the buyer has not paid for the order line item. A seller can open an <i>Unpaid Item</i> case as early as four days after the buyer commits to purchasing the item.
     * @return string 'BuyerHasNotPaid'
     */
    const VALUE_BUYER_HAS_NOT_PAID = 'BuyerHasNotPaid';
    /**
     * Constant for value 'TransactionMutuallyCanceled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller cancelled an order after getting mutual consent from the buyer. This may be due to the buyer requesting that it be cancelled, or it could be that the seller ran out of stock on the item.
     * @return string 'TransactionMutuallyCanceled'
     */
    const VALUE_TRANSACTION_MUTUALLY_CANCELED = 'TransactionMutuallyCanceled';
    /**
     * Constant for value 'ItemNotReceived'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since the Dispute calls in Trading API no longer support INR disputes.
     * @return string 'ItemNotReceived'
     */
    const VALUE_ITEM_NOT_RECEIVED = 'ItemNotReceived';
    /**
     * Constant for value 'SignificantlyNotAsDescribed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since the Dispute calls in Trading API no longer support SNAD disputes.
     * @return string 'SignificantlyNotAsDescribed'
     */
    const VALUE_SIGNIFICANTLY_NOT_AS_DESCRIBED = 'SignificantlyNotAsDescribed';
    /**
     * Constant for value 'NoRefund'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since the Dispute calls in Trading API only support Unpaid Item cases, and there will be no refund involved.
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
