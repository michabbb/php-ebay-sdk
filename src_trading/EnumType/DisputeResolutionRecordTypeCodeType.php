<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeResolutionRecordTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the actions that eBay may take once a dispute is resolved. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers
 * through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a
 * href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeResolutionRecordTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'StrikeBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer received an Unpaid Item Strike.
     * @return string 'StrikeBuyer'
     */
    const VALUE_STRIKE_BUYER = 'StrikeBuyer';
    /**
     * Constant for value 'SuspendBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer's account has been suspended, and buyer will be unable to use the eBay site.
     * @return string 'SuspendBuyer'
     */
    const VALUE_SUSPEND_BUYER = 'SuspendBuyer';
    /**
     * Constant for value 'RestrictBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer's activity is restricted and will be unable to bid on or purchase items.
     * @return string 'RestrictBuyer'
     */
    const VALUE_RESTRICT_BUYER = 'RestrictBuyer';
    /**
     * Constant for value 'FVFCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller received a Final Value Fee credit.
     * @return string 'FVFCredit'
     */
    const VALUE_FVFCREDIT = 'FVFCredit';
    /**
     * Constant for value 'InsertionFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller's listing fees were credited.
     * @return string 'InsertionFeeCredit'
     */
    const VALUE_INSERTION_FEE_CREDIT = 'InsertionFeeCredit';
    /**
     * Constant for value 'AppealBuyerStrike'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer has appealed the Unpaid Item Strike against their account.
     * @return string 'AppealBuyerStrike'
     */
    const VALUE_APPEAL_BUYER_STRIKE = 'AppealBuyerStrike';
    /**
     * Constant for value 'UnsuspendBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer's account has been reinstated.
     * @return string 'UnsuspendBuyer'
     */
    const VALUE_UNSUSPEND_BUYER = 'UnsuspendBuyer';
    /**
     * Constant for value 'UnrestrictBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that all restrictions on the buyer's account have ended.
     * @return string 'UnrestrictBuyer'
     */
    const VALUE_UNRESTRICT_BUYER = 'UnrestrictBuyer';
    /**
     * Constant for value 'ReverseFVFCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller's Final Value Fee credit was reversed.
     * @return string 'ReverseFVFCredit'
     */
    const VALUE_REVERSE_FVFCREDIT = 'ReverseFVFCredit';
    /**
     * Constant for value 'ReverseInsertionFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller's listing fees credit was reversed.
     * @return string 'ReverseInsertionFeeCredit'
     */
    const VALUE_REVERSE_INSERTION_FEE_CREDIT = 'ReverseInsertionFeeCredit';
    /**
     * Constant for value 'GenerateCSTicketForSuspend'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a customer service ticket to suspend The buyer's account has been created.
     * @return string 'GenerateCSTicketForSuspend'
     */
    const VALUE_GENERATE_CSTICKET_FOR_SUSPEND = 'GenerateCSTicketForSuspend';
    /**
     * Constant for value 'FVFCreditNotGranted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller requested, but did not receive a Final Value Fee credit.
     * @return string 'FVFCreditNotGranted'
     */
    const VALUE_FVFCREDIT_NOT_GRANTED = 'FVFCreditNotGranted';
    /**
     * Constant for value 'ItemNotReceivedClaimFiled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer did not receive the item, and filed a claim against the seller.
     * @return string 'ItemNotReceivedClaimFiled'
     */
    const VALUE_ITEM_NOT_RECEIVED_CLAIM_FILED = 'ItemNotReceivedClaimFiled';
    /**
     * Constant for value 'UnpaidItemRelisted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an Unpaid Item was automatically relisted by the Unpaid Item Assistant mechanism.
     * @return string 'UnpaidItemRelisted'
     */
    const VALUE_UNPAID_ITEM_RELISTED = 'UnpaidItemRelisted';
    /**
     * Constant for value 'UnpaidItemRevised'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an Unpaid Item was automatically revised by the Unpaid Item Assistant mechanism.
     * @return string 'UnpaidItemRevised'
     */
    const VALUE_UNPAID_ITEM_REVISED = 'UnpaidItemRevised';
    /**
     * Constant for value 'FVFOnShippingCredit'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'FVFOnShippingCredit'
     */
    const VALUE_FVFON_SHIPPING_CREDIT = 'FVFOnShippingCredit';
    /**
     * Constant for value 'FVFOnShippingCreditNotGranted'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'FVFOnShippingCreditNotGranted'
     */
    const VALUE_FVFON_SHIPPING_CREDIT_NOT_GRANTED = 'FVFOnShippingCreditNotGranted';
    /**
     * Constant for value 'ReverseFVFOnShippingCredit'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'ReverseFVFOnShippingCredit'
     */
    const VALUE_REVERSE_FVFON_SHIPPING_CREDIT = 'ReverseFVFOnShippingCredit';
    /**
     * Constant for value 'FeatureFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller received a credit for feature fees.
     * @return string 'FeatureFeeCredit'
     */
    const VALUE_FEATURE_FEE_CREDIT = 'FeatureFeeCredit';
    /**
     * Constant for value 'FeatureFeeNotCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller did not receive a credit for feature fees.
     * @return string 'FeatureFeeNotCredit'
     */
    const VALUE_FEATURE_FEE_NOT_CREDIT = 'FeatureFeeNotCredit';
    /**
     * Constant for value 'ReverseFeatureFeeCredit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller's feature fees credit was reversed.
     * @return string 'ReverseFeatureFeeCredit'
     */
    const VALUE_REVERSE_FEATURE_FEE_CREDIT = 'ReverseFeatureFeeCredit';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_STRIKE_BUYER
     * @uses self::VALUE_SUSPEND_BUYER
     * @uses self::VALUE_RESTRICT_BUYER
     * @uses self::VALUE_FVFCREDIT
     * @uses self::VALUE_INSERTION_FEE_CREDIT
     * @uses self::VALUE_APPEAL_BUYER_STRIKE
     * @uses self::VALUE_UNSUSPEND_BUYER
     * @uses self::VALUE_UNRESTRICT_BUYER
     * @uses self::VALUE_REVERSE_FVFCREDIT
     * @uses self::VALUE_REVERSE_INSERTION_FEE_CREDIT
     * @uses self::VALUE_GENERATE_CSTICKET_FOR_SUSPEND
     * @uses self::VALUE_FVFCREDIT_NOT_GRANTED
     * @uses self::VALUE_ITEM_NOT_RECEIVED_CLAIM_FILED
     * @uses self::VALUE_UNPAID_ITEM_RELISTED
     * @uses self::VALUE_UNPAID_ITEM_REVISED
     * @uses self::VALUE_FVFON_SHIPPING_CREDIT
     * @uses self::VALUE_FVFON_SHIPPING_CREDIT_NOT_GRANTED
     * @uses self::VALUE_REVERSE_FVFON_SHIPPING_CREDIT
     * @uses self::VALUE_FEATURE_FEE_CREDIT
     * @uses self::VALUE_FEATURE_FEE_NOT_CREDIT
     * @uses self::VALUE_REVERSE_FEATURE_FEE_CREDIT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STRIKE_BUYER,
            self::VALUE_SUSPEND_BUYER,
            self::VALUE_RESTRICT_BUYER,
            self::VALUE_FVFCREDIT,
            self::VALUE_INSERTION_FEE_CREDIT,
            self::VALUE_APPEAL_BUYER_STRIKE,
            self::VALUE_UNSUSPEND_BUYER,
            self::VALUE_UNRESTRICT_BUYER,
            self::VALUE_REVERSE_FVFCREDIT,
            self::VALUE_REVERSE_INSERTION_FEE_CREDIT,
            self::VALUE_GENERATE_CSTICKET_FOR_SUSPEND,
            self::VALUE_FVFCREDIT_NOT_GRANTED,
            self::VALUE_ITEM_NOT_RECEIVED_CLAIM_FILED,
            self::VALUE_UNPAID_ITEM_RELISTED,
            self::VALUE_UNPAID_ITEM_REVISED,
            self::VALUE_FVFON_SHIPPING_CREDIT,
            self::VALUE_FVFON_SHIPPING_CREDIT_NOT_GRANTED,
            self::VALUE_REVERSE_FVFON_SHIPPING_CREDIT,
            self::VALUE_FEATURE_FEE_CREDIT,
            self::VALUE_FEATURE_FEE_NOT_CREDIT,
            self::VALUE_REVERSE_FEATURE_FEE_CREDIT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
