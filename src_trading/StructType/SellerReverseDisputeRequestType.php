<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReverseDisputeRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call allows a seller to reverse the results of an Unpaid Item case in a situation where the buyer and seller are able to reach a mutual agreement. If this action is successful, the buyer might have an Unpaid Item strike removed
 * (if applicable). <br><br> An Unpaid Item case can only be reversed if it was closed with <b>DisputeActivity</b> set to <b>SellerEndCommunication</b>, <b>CameToAgreementNeedFVFCredit</b>, or <b>MutualAgreementOrNoBuyerResponse</b>.
 * @subpackage Structs
 */
class SellerReverseDisputeRequestType extends AbstractRequestType
{
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Unpaid Item case that the seller is attempting to reverse the results of. | The unique identifier of an Unpaid Item case involving a buyer and seller. <br/><br/> <span
     * class="tablenote"><strong>Note:</strong> Despite the name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the <strong>DisputeID</strong> field in
     * Dispute calls handles Unpaid Item case IDs. These calls no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an
     * INR case through eBay's Resolution Center, and these calls also do not support eBay Money Back Guarantee cases. <br/><br/> To respond to an eBay Money Back Guarantee case, the seller should use the <a
     * href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisputeID = null;
    /**
     * The DisputeResolutionReason
     * Meta information extracted from the WSDL
     * - documentation: The reason why the seller is attempting to reverse the results of the Unpaid Item case.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisputeResolutionReason = null;
    /**
     * Constructor method for SellerReverseDisputeRequestType
     * @uses SellerReverseDisputeRequestType::setDisputeID()
     * @uses SellerReverseDisputeRequestType::setDisputeResolutionReason()
     * @param string $disputeID
     * @param string $disputeResolutionReason
     */
    public function __construct(?string $disputeID = null, ?string $disputeResolutionReason = null)
    {
        $this
            ->setDisputeID($disputeID)
            ->setDisputeResolutionReason($disputeResolutionReason);
    }
    /**
     * Get DisputeID value
     * @return string|null
     */
    public function getDisputeID(): ?string
    {
        return $this->DisputeID;
    }
    /**
     * Set DisputeID value
     * @param string $disputeID
     * @return \macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType
     */
    public function setDisputeID(?string $disputeID = null): self
    {
        // validation for constraint: string
        if (!is_null($disputeID) && !is_string($disputeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disputeID, true), gettype($disputeID)), __LINE__);
        }
        $this->DisputeID = $disputeID;
        
        return $this;
    }
    /**
     * Get DisputeResolutionReason value
     * @return string|null
     */
    public function getDisputeResolutionReason(): ?string
    {
        return $this->DisputeResolutionReason;
    }
    /**
     * Set DisputeResolutionReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $disputeResolutionReason
     * @return \macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType
     */
    public function setDisputeResolutionReason(?string $disputeResolutionReason = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::valueIsValid($disputeResolutionReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType', is_array($disputeResolutionReason) ? implode(', ', $disputeResolutionReason) : var_export($disputeResolutionReason, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionReason = $disputeResolutionReason;
        
        return $this;
    }
}
