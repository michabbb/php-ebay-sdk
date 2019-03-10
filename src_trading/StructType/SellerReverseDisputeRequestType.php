<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReverseDisputeRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a seller to "reverse" an Unpaid Item dispute that has been closed in case the buyer and seller are able to reach a mutual agreement. If this action is successful, the seller receives a Final Value Fee credit and the buyer's
 * Unpaid Item strike are both reversed, if applicable. The dispute might have resulted in a strike to the buyer and a Final Value Fee credit to the seller. A buyer and seller sometimes come to agreement after a dispute has been closed. In particular,
 * the seller might discover that the buyer actually paid, or the buyer might agree to pay the seller's fees in exchange for having the strike removed. <br><br> A dispute can only be reversed if it was closed with <b>DisputeActivity</b> set to
 * <b>SellerEndCommunication</b>, <b>CameToAgreementNeedFVFCredit</b>, or <b>MutualAgreementOrNoBuyerResponse</b>.
 * @subpackage Structs
 */
class SellerReverseDisputeRequestType extends AbstractRequestType
{
    /**
     * The DisputeID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the dispute that was returned when the dispute was created. The dispute must be an Unpaid Item dispute that the seller opened. | An identifier of a dispute. <br/><br/> <span
     * class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The DisputeResolutionReason
     * Meta informations extracted from the WSDL
     * - documentation: The reason the dispute is being reversed.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeResolutionReason;
    /**
     * Constructor method for SellerReverseDisputeRequestType
     * @uses SellerReverseDisputeRequestType::setDisputeID()
     * @uses SellerReverseDisputeRequestType::setDisputeResolutionReason()
     * @param string $disputeID
     * @param string $disputeResolutionReason
     */
    public function __construct($disputeID = null, $disputeResolutionReason = null)
    {
        $this
            ->setDisputeID($disputeID)
            ->setDisputeResolutionReason($disputeResolutionReason);
    }
    /**
     * Get DisputeID value
     * @return string|null
     */
    public function getDisputeID()
    {
        return $this->DisputeID;
    }
    /**
     * Set DisputeID value
     * @param string $disputeID
     * @return \macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType
     */
    public function setDisputeID($disputeID = null)
    {
        // validation for constraint: string
        if (!is_null($disputeID) && !is_string($disputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($disputeID)), __LINE__);
        }
        $this->DisputeID = $disputeID;
        return $this;
    }
    /**
     * Get DisputeResolutionReason value
     * @return string|null
     */
    public function getDisputeResolutionReason()
    {
        return $this->DisputeResolutionReason;
    }
    /**
     * Set DisputeResolutionReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeResolutionReason
     * @return \macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType
     */
    public function setDisputeResolutionReason($disputeResolutionReason = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::valueIsValid($disputeResolutionReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeResolutionReason, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionReason = $disputeResolutionReason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SellerReverseDisputeRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
