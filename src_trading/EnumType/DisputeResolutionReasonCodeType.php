<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeResolutionReasonCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the reason a dispute was resolved. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeResolutionReasonCodeType
{
    /**
     * Constant for value 'Unresolved'
     * @return string 'Unresolved'
     */
    const VALUE_UNRESOLVED = 'Unresolved';
    /**
     * Constant for value 'ProofOfPayment'
     * @return string 'ProofOfPayment'
     */
    const VALUE_PROOF_OF_PAYMENT = 'ProofOfPayment';
    /**
     * Constant for value 'ComputerTechnicalProblem'
     * @return string 'ComputerTechnicalProblem'
     */
    const VALUE_COMPUTER_TECHNICAL_PROBLEM = 'ComputerTechnicalProblem';
    /**
     * Constant for value 'NoContact'
     * @return string 'NoContact'
     */
    const VALUE_NO_CONTACT = 'NoContact';
    /**
     * Constant for value 'FamilyEmergency'
     * @return string 'FamilyEmergency'
     */
    const VALUE_FAMILY_EMERGENCY = 'FamilyEmergency';
    /**
     * Constant for value 'ProofGivenInFeedback'
     * @return string 'ProofGivenInFeedback'
     */
    const VALUE_PROOF_GIVEN_IN_FEEDBACK = 'ProofGivenInFeedback';
    /**
     * Constant for value 'FirstInfraction'
     * @return string 'FirstInfraction'
     */
    const VALUE_FIRST_INFRACTION = 'FirstInfraction';
    /**
     * Constant for value 'CameToAgreement'
     * @return string 'CameToAgreement'
     */
    const VALUE_CAME_TO_AGREEMENT = 'CameToAgreement';
    /**
     * Constant for value 'ItemReturned'
     * @return string 'ItemReturned'
     */
    const VALUE_ITEM_RETURNED = 'ItemReturned';
    /**
     * Constant for value 'BuyerPaidAuctionFees'
     * @return string 'BuyerPaidAuctionFees'
     */
    const VALUE_BUYER_PAID_AUCTION_FEES = 'BuyerPaidAuctionFees';
    /**
     * Constant for value 'SellerReceivedPayment'
     * @return string 'SellerReceivedPayment'
     */
    const VALUE_SELLER_RECEIVED_PAYMENT = 'SellerReceivedPayment';
    /**
     * Constant for value 'OtherResolution'
     * @return string 'OtherResolution'
     */
    const VALUE_OTHER_RESOLUTION = 'OtherResolution';
    /**
     * Constant for value 'ClaimPaid'
     * @return string 'ClaimPaid'
     */
    const VALUE_CLAIM_PAID = 'ClaimPaid';
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
     * @uses self::VALUE_UNRESOLVED
     * @uses self::VALUE_PROOF_OF_PAYMENT
     * @uses self::VALUE_COMPUTER_TECHNICAL_PROBLEM
     * @uses self::VALUE_NO_CONTACT
     * @uses self::VALUE_FAMILY_EMERGENCY
     * @uses self::VALUE_PROOF_GIVEN_IN_FEEDBACK
     * @uses self::VALUE_FIRST_INFRACTION
     * @uses self::VALUE_CAME_TO_AGREEMENT
     * @uses self::VALUE_ITEM_RETURNED
     * @uses self::VALUE_BUYER_PAID_AUCTION_FEES
     * @uses self::VALUE_SELLER_RECEIVED_PAYMENT
     * @uses self::VALUE_OTHER_RESOLUTION
     * @uses self::VALUE_CLAIM_PAID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNRESOLVED,
            self::VALUE_PROOF_OF_PAYMENT,
            self::VALUE_COMPUTER_TECHNICAL_PROBLEM,
            self::VALUE_NO_CONTACT,
            self::VALUE_FAMILY_EMERGENCY,
            self::VALUE_PROOF_GIVEN_IN_FEEDBACK,
            self::VALUE_FIRST_INFRACTION,
            self::VALUE_CAME_TO_AGREEMENT,
            self::VALUE_ITEM_RETURNED,
            self::VALUE_BUYER_PAID_AUCTION_FEES,
            self::VALUE_SELLER_RECEIVED_PAYMENT,
            self::VALUE_OTHER_RESOLUTION,
            self::VALUE_CLAIM_PAID,
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
