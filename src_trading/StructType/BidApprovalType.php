<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidApprovalType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidApprovalType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on.
     * <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's
     * actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The ApprovedBiddingLimit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ApprovedBiddingLimit = null;
    /**
     * The DeclinedComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeclinedComment = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $userID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $approvedBiddingLimit = null, ?string $declinedComment = null, ?string $status = null, $any = null)
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
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        
        return $this;
    }
    /**
     * Get ApprovedBiddingLimit value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getApprovedBiddingLimit(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ApprovedBiddingLimit;
    }
    /**
     * Set ApprovedBiddingLimit value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $approvedBiddingLimit
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setApprovedBiddingLimit(?\macropage\ebaysdk\trading\StructType\AmountType $approvedBiddingLimit = null): self
    {
        $this->ApprovedBiddingLimit = $approvedBiddingLimit;
        
        return $this;
    }
    /**
     * Get DeclinedComment value
     * @return string|null
     */
    public function getDeclinedComment(): ?string
    {
        return $this->DeclinedComment;
    }
    /**
     * Set DeclinedComment value
     * @param string $declinedComment
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setDeclinedComment(?string $declinedComment = null): self
    {
        // validation for constraint: string
        if (!is_null($declinedComment) && !is_string($declinedComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($declinedComment, true), gettype($declinedComment)), __LINE__);
        }
        $this->DeclinedComment = $declinedComment;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\BidderStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BidderStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BidderStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BidderStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BidderStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\BidApprovalType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
