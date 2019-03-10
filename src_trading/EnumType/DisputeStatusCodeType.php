<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the status of the dispute, which supplements the DisputeState. Some values apply to Unpaid Item disputes and some to Item Not Received disputes. Disputes can be sorted by DisputeStatus. Ascending order is:<br> 1 -
 * WaitingForSellerResponse<br> 2 - WaitingForBuyerResponse<br> 3 - ClosedFVFCreditStrike<br> 4 - ClosedNoFVFCreditStrike<br> 5 - ClosedFVFCreditNoStrike<br> 6 - ClosedNoFVFCreditNoStrike<br> 7 - Closed<br> 8 - StrikeAppealedAfterClosing<br> 9 -
 * FVFCreditReversedAfterClosing<br> 10 - StrikeAppealedAndFVFCreditReversed<br> Descending order is the reverse. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeStatusCodeType
{
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'WaitingForSellerResponse'
     * @return string 'WaitingForSellerResponse'
     */
    const VALUE_WAITING_FOR_SELLER_RESPONSE = 'WaitingForSellerResponse';
    /**
     * Constant for value 'WaitingForBuyerResponse'
     * @return string 'WaitingForBuyerResponse'
     */
    const VALUE_WAITING_FOR_BUYER_RESPONSE = 'WaitingForBuyerResponse';
    /**
     * Constant for value 'ClosedFVFCreditStrike'
     * @return string 'ClosedFVFCreditStrike'
     */
    const VALUE_CLOSED_FVFCREDIT_STRIKE = 'ClosedFVFCreditStrike';
    /**
     * Constant for value 'ClosedNoFVFCreditStrike'
     * @return string 'ClosedNoFVFCreditStrike'
     */
    const VALUE_CLOSED_NO_FVFCREDIT_STRIKE = 'ClosedNoFVFCreditStrike';
    /**
     * Constant for value 'ClosedFVFCreditNoStrike'
     * @return string 'ClosedFVFCreditNoStrike'
     */
    const VALUE_CLOSED_FVFCREDIT_NO_STRIKE = 'ClosedFVFCreditNoStrike';
    /**
     * Constant for value 'ClosedNoFVFCreditNoStrike'
     * @return string 'ClosedNoFVFCreditNoStrike'
     */
    const VALUE_CLOSED_NO_FVFCREDIT_NO_STRIKE = 'ClosedNoFVFCreditNoStrike';
    /**
     * Constant for value 'StrikeAppealedAfterClosing'
     * @return string 'StrikeAppealedAfterClosing'
     */
    const VALUE_STRIKE_APPEALED_AFTER_CLOSING = 'StrikeAppealedAfterClosing';
    /**
     * Constant for value 'FVFCreditReversedAfterClosing'
     * @return string 'FVFCreditReversedAfterClosing'
     */
    const VALUE_FVFCREDIT_REVERSED_AFTER_CLOSING = 'FVFCreditReversedAfterClosing';
    /**
     * Constant for value 'StrikeAppealedAndFVFCreditReversed'
     * @return string 'StrikeAppealedAndFVFCreditReversed'
     */
    const VALUE_STRIKE_APPEALED_AND_FVFCREDIT_REVERSED = 'StrikeAppealedAndFVFCreditReversed';
    /**
     * Constant for value 'ClaimOpened'
     * @return string 'ClaimOpened'
     */
    const VALUE_CLAIM_OPENED = 'ClaimOpened';
    /**
     * Constant for value 'NoDocumentation'
     * @return string 'NoDocumentation'
     */
    const VALUE_NO_DOCUMENTATION = 'NoDocumentation';
    /**
     * Constant for value 'ClaimClosed'
     * @return string 'ClaimClosed'
     */
    const VALUE_CLAIM_CLOSED = 'ClaimClosed';
    /**
     * Constant for value 'ClaimDenied'
     * @return string 'ClaimDenied'
     */
    const VALUE_CLAIM_DENIED = 'ClaimDenied';
    /**
     * Constant for value 'ClaimInProcess'
     * @return string 'ClaimInProcess'
     */
    const VALUE_CLAIM_IN_PROCESS = 'ClaimInProcess';
    /**
     * Constant for value 'ClaimApproved'
     * @return string 'ClaimApproved'
     */
    const VALUE_CLAIM_APPROVED = 'ClaimApproved';
    /**
     * Constant for value 'ClaimPaid'
     * @return string 'ClaimPaid'
     */
    const VALUE_CLAIM_PAID = 'ClaimPaid';
    /**
     * Constant for value 'ClaimResolved'
     * @return string 'ClaimResolved'
     */
    const VALUE_CLAIM_RESOLVED = 'ClaimResolved';
    /**
     * Constant for value 'ClaimSubmitted'
     * @return string 'ClaimSubmitted'
     */
    const VALUE_CLAIM_SUBMITTED = 'ClaimSubmitted';
    /**
     * Constant for value 'UnpaidItemOpened'
     * @return string 'UnpaidItemOpened'
     */
    const VALUE_UNPAID_ITEM_OPENED = 'UnpaidItemOpened';
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
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_WAITING_FOR_SELLER_RESPONSE
     * @uses self::VALUE_WAITING_FOR_BUYER_RESPONSE
     * @uses self::VALUE_CLOSED_FVFCREDIT_STRIKE
     * @uses self::VALUE_CLOSED_NO_FVFCREDIT_STRIKE
     * @uses self::VALUE_CLOSED_FVFCREDIT_NO_STRIKE
     * @uses self::VALUE_CLOSED_NO_FVFCREDIT_NO_STRIKE
     * @uses self::VALUE_STRIKE_APPEALED_AFTER_CLOSING
     * @uses self::VALUE_FVFCREDIT_REVERSED_AFTER_CLOSING
     * @uses self::VALUE_STRIKE_APPEALED_AND_FVFCREDIT_REVERSED
     * @uses self::VALUE_CLAIM_OPENED
     * @uses self::VALUE_NO_DOCUMENTATION
     * @uses self::VALUE_CLAIM_CLOSED
     * @uses self::VALUE_CLAIM_DENIED
     * @uses self::VALUE_CLAIM_IN_PROCESS
     * @uses self::VALUE_CLAIM_APPROVED
     * @uses self::VALUE_CLAIM_PAID
     * @uses self::VALUE_CLAIM_RESOLVED
     * @uses self::VALUE_CLAIM_SUBMITTED
     * @uses self::VALUE_UNPAID_ITEM_OPENED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLOSED,
            self::VALUE_WAITING_FOR_SELLER_RESPONSE,
            self::VALUE_WAITING_FOR_BUYER_RESPONSE,
            self::VALUE_CLOSED_FVFCREDIT_STRIKE,
            self::VALUE_CLOSED_NO_FVFCREDIT_STRIKE,
            self::VALUE_CLOSED_FVFCREDIT_NO_STRIKE,
            self::VALUE_CLOSED_NO_FVFCREDIT_NO_STRIKE,
            self::VALUE_STRIKE_APPEALED_AFTER_CLOSING,
            self::VALUE_FVFCREDIT_REVERSED_AFTER_CLOSING,
            self::VALUE_STRIKE_APPEALED_AND_FVFCREDIT_REVERSED,
            self::VALUE_CLAIM_OPENED,
            self::VALUE_NO_DOCUMENTATION,
            self::VALUE_CLAIM_CLOSED,
            self::VALUE_CLAIM_DENIED,
            self::VALUE_CLAIM_IN_PROCESS,
            self::VALUE_CLAIM_APPROVED,
            self::VALUE_CLAIM_PAID,
            self::VALUE_CLAIM_RESOLVED,
            self::VALUE_CLAIM_SUBMITTED,
            self::VALUE_UNPAID_ITEM_OPENED,
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
