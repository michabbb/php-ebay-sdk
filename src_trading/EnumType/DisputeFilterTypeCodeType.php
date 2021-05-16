<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeFilterTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration type that specifies the dispute filters that can be used in the <b>DisputeFilterType</b> field of the <b>GetUserDisputes</b> call. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or
 * 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>, regardless of what filter value is used. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeFilterTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AllInvolvedDisputes'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open and closed disputes that involve the caller as a buyer or seller.
     * @return string 'AllInvolvedDisputes'
     */
    const VALUE_ALL_INVOLVED_DISPUTES = 'AllInvolvedDisputes';
    /**
     * Constant for value 'DisputesAwaitingMyResponse'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open disputes that involve the caller as a buyer or seller and are awaiting a response from the caller. This is the default <b>DisputeFilterType</b> value. In other words, if no
     * <b>DisputeFilterType</b> is specified in the request, only those disputes where the caller's response is due are returned.
     * @return string 'DisputesAwaitingMyResponse'
     */
    const VALUE_DISPUTES_AWAITING_MY_RESPONSE = 'DisputesAwaitingMyResponse';
    /**
     * Constant for value 'DisputesAwaitingOtherPartyResponse'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open disputes that involve the caller as a buyer or seller and are awaiting a response from the other party.
     * @return string 'DisputesAwaitingOtherPartyResponse'
     */
    const VALUE_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE = 'DisputesAwaitingOtherPartyResponse';
    /**
     * Constant for value 'AllInvolvedClosedDisputes'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all closed disputes that involve the caller as a buyer or seller.
     * @return string 'AllInvolvedClosedDisputes'
     */
    const VALUE_ALL_INVOLVED_CLOSED_DISPUTES = 'AllInvolvedClosedDisputes';
    /**
     * Constant for value 'EligibleForCredit'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all disputes that involve the caller as a buyer or seller and are eligible for a Final Value Fee credit, regardless of whether or not the credit has been granted.
     * @return string 'EligibleForCredit'
     */
    const VALUE_ELIGIBLE_FOR_CREDIT = 'EligibleForCredit';
    /**
     * Constant for value 'UnpaidItemDisputes'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open and closed <i>Unpaid Item</i> disputes that involve the caller as a buyer or seller.
     * @return string 'UnpaidItemDisputes'
     */
    const VALUE_UNPAID_ITEM_DISPUTES = 'UnpaidItemDisputes';
    /**
     * Constant for value 'ItemNotReceivedDisputes'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open and closed <i>Item Not Received</i> disputes that involve the caller as a buyer or seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> This filter is only used to retrieve any 'Item
     * Not Received' or 'Significantly Not As Described' disputes that a buyer initiated through their PayPal account. As noted above, the <b>GetUserDisputes</b> call will not return any eBay Money Back Guarantee cases. </span>
     * @return string 'ItemNotReceivedDisputes'
     */
    const VALUE_ITEM_NOT_RECEIVED_DISPUTES = 'ItemNotReceivedDisputes';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL_INVOLVED_DISPUTES
     * @uses self::VALUE_DISPUTES_AWAITING_MY_RESPONSE
     * @uses self::VALUE_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE
     * @uses self::VALUE_ALL_INVOLVED_CLOSED_DISPUTES
     * @uses self::VALUE_ELIGIBLE_FOR_CREDIT
     * @uses self::VALUE_UNPAID_ITEM_DISPUTES
     * @uses self::VALUE_ITEM_NOT_RECEIVED_DISPUTES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALL_INVOLVED_DISPUTES,
            self::VALUE_DISPUTES_AWAITING_MY_RESPONSE,
            self::VALUE_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE,
            self::VALUE_ALL_INVOLVED_CLOSED_DISPUTES,
            self::VALUE_ELIGIBLE_FOR_CREDIT,
            self::VALUE_UNPAID_ITEM_DISPUTES,
            self::VALUE_ITEM_NOT_RECEIVED_DISPUTES,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
