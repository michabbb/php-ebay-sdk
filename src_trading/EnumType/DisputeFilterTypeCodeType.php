<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeFilterTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration type that specifies the dispute filters that can be used in the <b>DisputeFilterType</b> field of the <b>GetUserDisputes</b> call. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <b>GetUserDisputes</b> call
 * now only retrieves Unpaid Item cases. It is no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center,
 * and this call does not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management
 * calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Enumerations
 */
class DisputeFilterTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AllInvolvedDisputes'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open and closed Unpaid Item cases that involve the caller as a buyer or seller. This is the default value if the <b>DisputeFilterType</b> field is not used in the <b>GetUserDisputes</b> request.
     * @return string 'AllInvolvedDisputes'
     */
    const VALUE_ALL_INVOLVED_DISPUTES = 'AllInvolvedDisputes';
    /**
     * Constant for value 'DisputesAwaitingMyResponse'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open Unpaid Item cases that involve the caller as a buyer or seller and are awaiting a response from the caller. This is the default <b>DisputeFilterType</b> value. In other words, if no
     * <b>DisputeFilterType</b> field is used in the request, only those disputes where the caller's response is due are returned.
     * @return string 'DisputesAwaitingMyResponse'
     */
    const VALUE_DISPUTES_AWAITING_MY_RESPONSE = 'DisputesAwaitingMyResponse';
    /**
     * Constant for value 'DisputesAwaitingOtherPartyResponse'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open Unpaid Item cases that involve the caller as a buyer or seller and are awaiting a response from the other party.
     * @return string 'DisputesAwaitingOtherPartyResponse'
     */
    const VALUE_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE = 'DisputesAwaitingOtherPartyResponse';
    /**
     * Constant for value 'AllInvolvedClosedDisputes'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all closed Unpaid Item cases that involve the caller as a buyer or seller.
     * @return string 'AllInvolvedClosedDisputes'
     */
    const VALUE_ALL_INVOLVED_CLOSED_DISPUTES = 'AllInvolvedClosedDisputes';
    /**
     * Constant for value 'EligibleForCredit'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all Unpaid Item cases that involve the caller as a buyer or seller and are eligible for a Final Value Fee credit, regardless of whether or not the credit will/has been granted.
     * @return string 'EligibleForCredit'
     */
    const VALUE_ELIGIBLE_FOR_CREDIT = 'EligibleForCredit';
    /**
     * Constant for value 'UnpaidItemDisputes'
     * Meta information extracted from the WSDL
     * - documentation: If used, this filter returns all open and closed Unpaid Item cases that involve the caller as a buyer or seller.
     * @return string 'UnpaidItemDisputes'
     */
    const VALUE_UNPAID_ITEM_DISPUTES = 'UnpaidItemDisputes';
    /**
     * Constant for value 'ItemNotReceivedDisputes'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated, and should not longer be used since PayPal INR disputes no longer exist.
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
