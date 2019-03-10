<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeStateCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the current state of the dispute, which determines the values that are valid for DisputeActivity. DisputeState is an internal value returned in the response. A value can apply to an Unpaid Item or Item Not Received dispute. A
 * dispute filed when an item is significantly not as described in the product listing is a variation of an Item Not Received dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeStateCodeType
{
    /**
     * Constant for value 'Locked'
     * @return string 'Locked'
     */
    const VALUE_LOCKED = 'Locked';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'BuyerFirstResponsePayOption'
     * @return string 'BuyerFirstResponsePayOption'
     */
    const VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION = 'BuyerFirstResponsePayOption';
    /**
     * Constant for value 'BuyerFirstResponseNoPayOption'
     * @return string 'BuyerFirstResponseNoPayOption'
     */
    const VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION = 'BuyerFirstResponseNoPayOption';
    /**
     * Constant for value 'BuyerFirstResponsePayOptionLateResponse'
     * @return string 'BuyerFirstResponsePayOptionLateResponse'
     */
    const VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponsePayOptionLateResponse';
    /**
     * Constant for value 'BuyerFirstResponseNoPayOptionLateResponse'
     * @return string 'BuyerFirstResponseNoPayOptionLateResponse'
     */
    const VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE = 'BuyerFirstResponseNoPayOptionLateResponse';
    /**
     * Constant for value 'MutualCommunicationPayOption'
     * @return string 'MutualCommunicationPayOption'
     */
    const VALUE_MUTUAL_COMMUNICATION_PAY_OPTION = 'MutualCommunicationPayOption';
    /**
     * Constant for value 'MutualCommunicationNoPayOption'
     * @return string 'MutualCommunicationNoPayOption'
     */
    const VALUE_MUTUAL_COMMUNICATION_NO_PAY_OPTION = 'MutualCommunicationNoPayOption';
    /**
     * Constant for value 'PendingResolve'
     * @return string 'PendingResolve'
     */
    const VALUE_PENDING_RESOLVE = 'PendingResolve';
    /**
     * Constant for value 'MutualWithdrawalAgreement'
     * @return string 'MutualWithdrawalAgreement'
     */
    const VALUE_MUTUAL_WITHDRAWAL_AGREEMENT = 'MutualWithdrawalAgreement';
    /**
     * Constant for value 'MutualWithdrawalAgreementLate'
     * @return string 'MutualWithdrawalAgreementLate'
     */
    const VALUE_MUTUAL_WITHDRAWAL_AGREEMENT_LATE = 'MutualWithdrawalAgreementLate';
    /**
     * Constant for value 'NotReceivedNoSellerResponse'
     * @return string 'NotReceivedNoSellerResponse'
     */
    const VALUE_NOT_RECEIVED_NO_SELLER_RESPONSE = 'NotReceivedNoSellerResponse';
    /**
     * Constant for value 'NotAsDescribedNoSellerResponse'
     * @return string 'NotAsDescribedNoSellerResponse'
     */
    const VALUE_NOT_AS_DESCRIBED_NO_SELLER_RESPONSE = 'NotAsDescribedNoSellerResponse';
    /**
     * Constant for value 'NotReceivedMutualCommunication'
     * @return string 'NotReceivedMutualCommunication'
     */
    const VALUE_NOT_RECEIVED_MUTUAL_COMMUNICATION = 'NotReceivedMutualCommunication';
    /**
     * Constant for value 'NotAsDescribedMutualCommunication'
     * @return string 'NotAsDescribedMutualCommunication'
     */
    const VALUE_NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION = 'NotAsDescribedMutualCommunication';
    /**
     * Constant for value 'MutualAgreementOrBuyerReturningItem'
     * @return string 'MutualAgreementOrBuyerReturningItem'
     */
    const VALUE_MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM = 'MutualAgreementOrBuyerReturningItem';
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
     * Constant for value 'ClaimPending'
     * @return string 'ClaimPending'
     */
    const VALUE_CLAIM_PENDING = 'ClaimPending';
    /**
     * Constant for value 'ClaimPaymentPending'
     * @return string 'ClaimPaymentPending'
     */
    const VALUE_CLAIM_PAYMENT_PENDING = 'ClaimPaymentPending';
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
     * Constant for value 'UnpaidItemOpen'
     * @return string 'UnpaidItemOpen'
     */
    const VALUE_UNPAID_ITEM_OPEN = 'UnpaidItemOpen';
    /**
     * Constant for value 'UPIAssistanceDisabledByeBay'
     * @return string 'UPIAssistanceDisabledByeBay'
     */
    const VALUE_UPIASSISTANCE_DISABLED_BYE_BAY = 'UPIAssistanceDisabledByeBay';
    /**
     * Constant for value 'UPIAssistanceDisabledBySeller'
     * @return string 'UPIAssistanceDisabledBySeller'
     */
    const VALUE_UPIASSISTANCE_DISABLED_BY_SELLER = 'UPIAssistanceDisabledBySeller';
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
     * @uses self::VALUE_LOCKED
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION
     * @uses self::VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION
     * @uses self::VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE
     * @uses self::VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE
     * @uses self::VALUE_MUTUAL_COMMUNICATION_PAY_OPTION
     * @uses self::VALUE_MUTUAL_COMMUNICATION_NO_PAY_OPTION
     * @uses self::VALUE_PENDING_RESOLVE
     * @uses self::VALUE_MUTUAL_WITHDRAWAL_AGREEMENT
     * @uses self::VALUE_MUTUAL_WITHDRAWAL_AGREEMENT_LATE
     * @uses self::VALUE_NOT_RECEIVED_NO_SELLER_RESPONSE
     * @uses self::VALUE_NOT_AS_DESCRIBED_NO_SELLER_RESPONSE
     * @uses self::VALUE_NOT_RECEIVED_MUTUAL_COMMUNICATION
     * @uses self::VALUE_NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION
     * @uses self::VALUE_MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM
     * @uses self::VALUE_CLAIM_OPENED
     * @uses self::VALUE_NO_DOCUMENTATION
     * @uses self::VALUE_CLAIM_CLOSED
     * @uses self::VALUE_CLAIM_DENIED
     * @uses self::VALUE_CLAIM_PENDING
     * @uses self::VALUE_CLAIM_PAYMENT_PENDING
     * @uses self::VALUE_CLAIM_PAID
     * @uses self::VALUE_CLAIM_RESOLVED
     * @uses self::VALUE_CLAIM_SUBMITTED
     * @uses self::VALUE_UNPAID_ITEM_OPEN
     * @uses self::VALUE_UPIASSISTANCE_DISABLED_BYE_BAY
     * @uses self::VALUE_UPIASSISTANCE_DISABLED_BY_SELLER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LOCKED,
            self::VALUE_CLOSED,
            self::VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION,
            self::VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION,
            self::VALUE_BUYER_FIRST_RESPONSE_PAY_OPTION_LATE_RESPONSE,
            self::VALUE_BUYER_FIRST_RESPONSE_NO_PAY_OPTION_LATE_RESPONSE,
            self::VALUE_MUTUAL_COMMUNICATION_PAY_OPTION,
            self::VALUE_MUTUAL_COMMUNICATION_NO_PAY_OPTION,
            self::VALUE_PENDING_RESOLVE,
            self::VALUE_MUTUAL_WITHDRAWAL_AGREEMENT,
            self::VALUE_MUTUAL_WITHDRAWAL_AGREEMENT_LATE,
            self::VALUE_NOT_RECEIVED_NO_SELLER_RESPONSE,
            self::VALUE_NOT_AS_DESCRIBED_NO_SELLER_RESPONSE,
            self::VALUE_NOT_RECEIVED_MUTUAL_COMMUNICATION,
            self::VALUE_NOT_AS_DESCRIBED_MUTUAL_COMMUNICATION,
            self::VALUE_MUTUAL_AGREEMENT_OR_BUYER_RETURNING_ITEM,
            self::VALUE_CLAIM_OPENED,
            self::VALUE_NO_DOCUMENTATION,
            self::VALUE_CLAIM_CLOSED,
            self::VALUE_CLAIM_DENIED,
            self::VALUE_CLAIM_PENDING,
            self::VALUE_CLAIM_PAYMENT_PENDING,
            self::VALUE_CLAIM_PAID,
            self::VALUE_CLAIM_RESOLVED,
            self::VALUE_CLAIM_SUBMITTED,
            self::VALUE_UNPAID_ITEM_OPEN,
            self::VALUE_UPIASSISTANCE_DISABLED_BYE_BAY,
            self::VALUE_UPIASSISTANCE_DISABLED_BY_SELLER,
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
