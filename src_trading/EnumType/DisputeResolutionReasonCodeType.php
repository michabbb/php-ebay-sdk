<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeResolutionReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the possible reasons why an order dispute between a buyer and seller is resolved. <br/><br/> <span class="tablenote"><strong>Note:</strong> The Dispute calls of the Trading API now only support Unpaid
 * Item cases, and no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR or SNAD case through eBay's
 * Resolution Center, and these calls do not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html"
 * target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Enumerations
 */
class DisputeResolutionReasonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unresolved'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item case has yet to be resolved.
     * @return string 'Unresolved'
     */
    const VALUE_UNRESOLVED = 'Unresolved';
    /**
     * Constant for value 'ProofOfPayment'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer was able to provide proof of payment for an Unpaid Item case.
     * @return string 'ProofOfPayment'
     */
    const VALUE_PROOF_OF_PAYMENT = 'ProofOfPayment';
    /**
     * Constant for value 'ComputerTechnicalProblem'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer had not paid due to a technical problem with a computer.
     * @return string 'ComputerTechnicalProblem'
     */
    const VALUE_COMPUTER_TECHNICAL_PROBLEM = 'ComputerTechnicalProblem';
    /**
     * Constant for value 'NoContact'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer and seller have not made any contact with one another.
     * @return string 'NoContact'
     */
    const VALUE_NO_CONTACT = 'NoContact';
    /**
     * Constant for value 'FamilyEmergency'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer had not paid due to a family emergency.
     * @return string 'FamilyEmergency'
     */
    const VALUE_FAMILY_EMERGENCY = 'FamilyEmergency';
    /**
     * Constant for value 'ProofGivenInFeedback'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer was able to provide proof of payment for an Unpaid Item case through the Feedback system.
     * @return string 'ProofGivenInFeedback'
     */
    const VALUE_PROOF_GIVEN_IN_FEEDBACK = 'ProofGivenInFeedback';
    /**
     * Constant for value 'FirstInfraction'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item case was the buyer's first infraction, and thus resolved.
     * @return string 'FirstInfraction'
     */
    const VALUE_FIRST_INFRACTION = 'FirstInfraction';
    /**
     * Constant for value 'CameToAgreement'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer and seller came to an agreement regarding payment or mutual cancellation of the order.
     * @return string 'CameToAgreement'
     */
    const VALUE_CAME_TO_AGREEMENT = 'CameToAgreement';
    /**
     * Constant for value 'ItemReturned'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer successfully returned the item, and thus an Unpaid Item case was closed.
     * @return string 'ItemReturned'
     */
    const VALUE_ITEM_RETURNED = 'ItemReturned';
    /**
     * Constant for value 'BuyerPaidAuctionFees'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer reimbursed the seller's listing fees.
     * @return string 'BuyerPaidAuctionFees'
     */
    const VALUE_BUYER_PAID_AUCTION_FEES = 'BuyerPaidAuctionFees';
    /**
     * Constant for value 'SellerReceivedPayment'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller received payment for the item, and thus the Unpaid Item case was closed.
     * @return string 'SellerReceivedPayment'
     */
    const VALUE_SELLER_RECEIVED_PAYMENT = 'SellerReceivedPayment';
    /**
     * Constant for value 'OtherResolution'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an undefined resolution occurred.
     * @return string 'OtherResolution'
     */
    const VALUE_OTHER_RESOLUTION = 'OtherResolution';
    /**
     * Constant for value 'ClaimPaid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since it is related to an INR or SNAD dispute, which are no longer supported.
     * @return string 'ClaimPaid'
     */
    const VALUE_CLAIM_PAID = 'ClaimPaid';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
