<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeFilterTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumeration type that specifies the dispute filters that can be used in the <b>DisputeFilterType</b> field of the <b>GetUserDisputes</b> call. <b>Note</b> that eBay Money Back Guarantee cases are not returned with the
 * <b>GetUserDisputes</b> call, regardless of the filter that is used. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay Money Back Guarantee cases. </span>
 * @subpackage Enumerations
 */
class DisputeFilterTypeCodeType
{
    /**
     * Constant for value 'AllInvolvedDisputes'
     * @return string 'AllInvolvedDisputes'
     */
    const VALUE_ALL_INVOLVED_DISPUTES = 'AllInvolvedDisputes';
    /**
     * Constant for value 'DisputesAwaitingMyResponse'
     * @return string 'DisputesAwaitingMyResponse'
     */
    const VALUE_DISPUTES_AWAITING_MY_RESPONSE = 'DisputesAwaitingMyResponse';
    /**
     * Constant for value 'DisputesAwaitingOtherPartyResponse'
     * @return string 'DisputesAwaitingOtherPartyResponse'
     */
    const VALUE_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE = 'DisputesAwaitingOtherPartyResponse';
    /**
     * Constant for value 'AllInvolvedClosedDisputes'
     * @return string 'AllInvolvedClosedDisputes'
     */
    const VALUE_ALL_INVOLVED_CLOSED_DISPUTES = 'AllInvolvedClosedDisputes';
    /**
     * Constant for value 'EligibleForCredit'
     * @return string 'EligibleForCredit'
     */
    const VALUE_ELIGIBLE_FOR_CREDIT = 'EligibleForCredit';
    /**
     * Constant for value 'UnpaidItemDisputes'
     * @return string 'UnpaidItemDisputes'
     */
    const VALUE_UNPAID_ITEM_DISPUTES = 'UnpaidItemDisputes';
    /**
     * Constant for value 'ItemNotReceivedDisputes'
     * @return string 'ItemNotReceivedDisputes'
     */
    const VALUE_ITEM_NOT_RECEIVED_DISPUTES = 'ItemNotReceivedDisputes';
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
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL_INVOLVED_DISPUTES,
            self::VALUE_DISPUTES_AWAITING_MY_RESPONSE,
            self::VALUE_DISPUTES_AWAITING_OTHER_PARTY_RESPONSE,
            self::VALUE_ALL_INVOLVED_CLOSED_DISPUTES,
            self::VALUE_ELIGIBLE_FOR_CREDIT,
            self::VALUE_UNPAID_ITEM_DISPUTES,
            self::VALUE_ITEM_NOT_RECEIVED_DISPUTES,
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
