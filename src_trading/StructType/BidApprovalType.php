<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidApprovalType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidApprovalType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on.
     * <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's
     * actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * @var string
     */
    public $UserID;
    /**
     * The ApprovedBiddingLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ApprovedBiddingLimit;
    /**
     * The DeclinedComment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeclinedComment;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidApprovalType
     * @uses BidApprovalType::setUserID()
     * @uses BidApprovalType::setApprovedBiddingLimit()
     * @uses BidApprovalType::setDeclinedComment()
     * @uses BidApprovalType::setStatus()
     * @uses BidApprovalType::setAny()
     * @param string $userID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $approvedBiddingLimit
     * @param string $declinedComment
     * @param string $status
     * @param \DOMDocument $any
     */
    public function __construct($userID = null, \macropage\ebaysdk\trading\StructType\AmountType $approvedBiddingLimit = null, $declinedComment = null, $status = null, \DOMDocument $any = null)
    {
        $this
            ->setUserID($userID)
            ->setApprovedBiddingLimit($approvedBiddingLimit)
            ->setDeclinedComment($declinedComment)
            ->setStatus($status)
            ->setAny($any);
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get ApprovedBiddingLimit value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getApprovedBiddingLimit()
    {
        return $this->ApprovedBiddingLimit;
    }
    /**
     * Set ApprovedBiddingLimit value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $approvedBiddingLimit
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setApprovedBiddingLimit(\macropage\ebaysdk\trading\StructType\AmountType $approvedBiddingLimit = null)
    {
        $this->ApprovedBiddingLimit = $approvedBiddingLimit;
        return $this;
    }
    /**
     * Get DeclinedComment value
     * @return string|null
     */
    public function getDeclinedComment()
    {
        return $this->DeclinedComment;
    }
    /**
     * Set DeclinedComment value
     * @param string $declinedComment
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setDeclinedComment($declinedComment = null)
    {
        // validation for constraint: string
        if (!is_null($declinedComment) && !is_string($declinedComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($declinedComment)), __LINE__);
        }
        $this->DeclinedComment = $declinedComment;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\BidderStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BidderStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BidderStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\BidderStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BidApprovalType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
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
