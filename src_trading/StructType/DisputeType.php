<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains all information describing a dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Structs
 */
class DisputeType extends AbstractStructBase
{
    /**
     * The DisputeID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of an eBay dispute. | An identifier of a dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The DisputeRecordType
     * Meta informations extracted from the WSDL
     * - documentation: A value to indicate the type of dispute.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeRecordType;
    /**
     * The DisputeState
     * Meta informations extracted from the WSDL
     * - documentation: The internal state of the dispute. The value determines which values of <b>DisputeActivity</b> are valid when responding to a dispute.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeState;
    /**
     * The DisputeStatus
     * Meta informations extracted from the WSDL
     * - documentation: The status of the dispute, which provides additional information about the dispute state.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeStatus;
    /**
     * The OtherPartyRole
     * Meta informations extracted from the WSDL
     * - documentation: The role of the person involved in the dispute who is not taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     * - minOccurs: 0
     * @var string
     */
    public $OtherPartyRole;
    /**
     * The OtherPartyName
     * Meta informations extracted from the WSDL
     * - documentation: The user name of the person involved in the dispute who is not taking action or requesting information.
     * - minOccurs: 0
     * @var string
     */
    public $OtherPartyName;
    /**
     * The UserRole
     * Meta informations extracted from the WSDL
     * - documentation: The role of the person involved in the dispute who is taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     * - minOccurs: 0
     * @var string
     */
    public $UserRole;
    /**
     * The BuyerUserID
     * Meta informations extracted from the WSDL
     * - documentation: The eBay user ID of the buyer involved in the dispute. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd,
     * FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerUserID;
    /**
     * The SellerUserID
     * Meta informations extracted from the WSDL
     * - documentation: The eBay user ID of the seller involved in the dispute. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd,
     * FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $SellerUserID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the order line item (transaction) under dispute. An order line item is created once there is a commitment from a buyer to purchase an item. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b>
     * responses, this value identifies the order line item involved in the dispute.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of high-level details about the item involved in the dispute.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The DisputeReason
     * Meta informations extracted from the WSDL
     * - documentation: The top-level reason for the dispute. The value of <b>DisputeReason</b> determines which values of <b>DisputeExplanation</b> are valid. See <b>DisputeExplanationCodeList</b> for details.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeReason;
    /**
     * The DisputeExplanation
     * Meta informations extracted from the WSDL
     * - documentation: The detailed explanation for the dispute. Valid values depend on the value of <b>DisputeReason</b>. See <b>DisputeExplanationCodeList</b> for details.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeExplanation;
    /**
     * The DisputeCreditEligibility
     * Meta informations extracted from the WSDL
     * - documentation: A value to indicate whether or not the seller is currently eligible for a Final Value Fee credit. The seller becomes eligible for a Final Value Fee credit after filing and winning an Unpaid Item case. This tag only indicates credit
     * eligibility and does not mean that the case can be closed. The seller can open a UPI case as soon as two days after the listing ends. <br>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeCreditEligibility;
    /**
     * The DisputeCreatedTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time the dispute was created, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeCreatedTime;
    /**
     * The DisputeModifiedTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time the dispute was modified, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeModifiedTime;
    /**
     * The DisputeResolution
     * Meta informations extracted from the WSDL
     * - documentation: The action resulting from the dispute resolution. The action might include a Final Value Fee credit to the seller, a strike to the buyer, a reversal, or an appeal.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DisputeResolutionType[]
     */
    public $DisputeResolution;
    /**
     * The DisputeMessage
     * Meta informations extracted from the WSDL
     * - documentation: A response or message posted to a dispute, either by an application or by a user on the eBay site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DisputeMessageType[]
     */
    public $DisputeMessage;
    /**
     * The Escalation
     * Meta informations extracted from the WSDL
     * - documentation: Whether the buyer can close a dispute unhappy and escalate it to the eBay Standard Purchase Protection Program. To escalate, the buyer must be eligible for the PPP. Used in Item Not Received disputes.
     * - minOccurs: 0
     * @var bool
     */
    public $Escalation;
    /**
     * The PurchaseProtection
     * Meta informations extracted from the WSDL
     * - documentation: Whether the buyer is eligible for the eBay Standard Purchase Protection Program. The eligibility rules are described in the eBay site online help. Used in Item Not Received disputes.
     * - minOccurs: 0
     * @var bool
     */
    public $PurchaseProtection;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. In the case of <b>GetDispute</b> and
     * <b>GetUserDisputes</b> responses, this value identifies the order line item involved in the dispute. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DisputeType
     * @uses DisputeType::setDisputeID()
     * @uses DisputeType::setDisputeRecordType()
     * @uses DisputeType::setDisputeState()
     * @uses DisputeType::setDisputeStatus()
     * @uses DisputeType::setOtherPartyRole()
     * @uses DisputeType::setOtherPartyName()
     * @uses DisputeType::setUserRole()
     * @uses DisputeType::setBuyerUserID()
     * @uses DisputeType::setSellerUserID()
     * @uses DisputeType::setTransactionID()
     * @uses DisputeType::setItem()
     * @uses DisputeType::setDisputeReason()
     * @uses DisputeType::setDisputeExplanation()
     * @uses DisputeType::setDisputeCreditEligibility()
     * @uses DisputeType::setDisputeCreatedTime()
     * @uses DisputeType::setDisputeModifiedTime()
     * @uses DisputeType::setDisputeResolution()
     * @uses DisputeType::setDisputeMessage()
     * @uses DisputeType::setEscalation()
     * @uses DisputeType::setPurchaseProtection()
     * @uses DisputeType::setOrderLineItemID()
     * @uses DisputeType::setAny()
     * @param string $disputeID
     * @param string $disputeRecordType
     * @param string $disputeState
     * @param string $disputeStatus
     * @param string $otherPartyRole
     * @param string $otherPartyName
     * @param string $userRole
     * @param string $buyerUserID
     * @param string $sellerUserID
     * @param string $transactionID
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param string $disputeReason
     * @param string $disputeExplanation
     * @param string $disputeCreditEligibility
     * @param string $disputeCreatedTime
     * @param string $disputeModifiedTime
     * @param \macropage\ebaysdk\trading\StructType\DisputeResolutionType[] $disputeResolution
     * @param \macropage\ebaysdk\trading\StructType\DisputeMessageType[] $disputeMessage
     * @param bool $escalation
     * @param bool $purchaseProtection
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($disputeID = null, $disputeRecordType = null, $disputeState = null, $disputeStatus = null, $otherPartyRole = null, $otherPartyName = null, $userRole = null, $buyerUserID = null, $sellerUserID = null, $transactionID = null, \macropage\ebaysdk\trading\StructType\ItemType $item = null, $disputeReason = null, $disputeExplanation = null, $disputeCreditEligibility = null, $disputeCreatedTime = null, $disputeModifiedTime = null, array $disputeResolution = array(), array $disputeMessage = array(), $escalation = null, $purchaseProtection = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setDisputeID($disputeID)
            ->setDisputeRecordType($disputeRecordType)
            ->setDisputeState($disputeState)
            ->setDisputeStatus($disputeStatus)
            ->setOtherPartyRole($otherPartyRole)
            ->setOtherPartyName($otherPartyName)
            ->setUserRole($userRole)
            ->setBuyerUserID($buyerUserID)
            ->setSellerUserID($sellerUserID)
            ->setTransactionID($transactionID)
            ->setItem($item)
            ->setDisputeReason($disputeReason)
            ->setDisputeExplanation($disputeExplanation)
            ->setDisputeCreditEligibility($disputeCreditEligibility)
            ->setDisputeCreatedTime($disputeCreatedTime)
            ->setDisputeModifiedTime($disputeModifiedTime)
            ->setDisputeResolution($disputeResolution)
            ->setDisputeMessage($disputeMessage)
            ->setEscalation($escalation)
            ->setPurchaseProtection($purchaseProtection)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
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
     * Get DisputeRecordType value
     * @return string|null
     */
    public function getDisputeRecordType()
    {
        return $this->DisputeRecordType;
    }
    /**
     * Set DisputeRecordType value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeRecordTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeRecordTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeRecordType
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeRecordType($disputeRecordType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeRecordTypeCodeType::valueIsValid($disputeRecordType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeRecordType, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeRecordTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeRecordType = $disputeRecordType;
        return $this;
    }
    /**
     * Get DisputeState value
     * @return string|null
     */
    public function getDisputeState()
    {
        return $this->DisputeState;
    }
    /**
     * Set DisputeState value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeState
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeState($disputeState = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeStateCodeType::valueIsValid($disputeState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeState, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeStateCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeState = $disputeState;
        return $this;
    }
    /**
     * Get DisputeStatus value
     * @return string|null
     */
    public function getDisputeStatus()
    {
        return $this->DisputeStatus;
    }
    /**
     * Set DisputeStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeStatus
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeStatus($disputeStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeStatusCodeType::valueIsValid($disputeStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeStatusCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeStatus = $disputeStatus;
        return $this;
    }
    /**
     * Get OtherPartyRole value
     * @return string|null
     */
    public function getOtherPartyRole()
    {
        return $this->OtherPartyRole;
    }
    /**
     * Set OtherPartyRole value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $otherPartyRole
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setOtherPartyRole($otherPartyRole = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($otherPartyRole)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $otherPartyRole, implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->OtherPartyRole = $otherPartyRole;
        return $this;
    }
    /**
     * Get OtherPartyName value
     * @return string|null
     */
    public function getOtherPartyName()
    {
        return $this->OtherPartyName;
    }
    /**
     * Set OtherPartyName value
     * @param string $otherPartyName
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setOtherPartyName($otherPartyName = null)
    {
        // validation for constraint: string
        if (!is_null($otherPartyName) && !is_string($otherPartyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherPartyName)), __LINE__);
        }
        $this->OtherPartyName = $otherPartyName;
        return $this;
    }
    /**
     * Get UserRole value
     * @return string|null
     */
    public function getUserRole()
    {
        return $this->UserRole;
    }
    /**
     * Set UserRole value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userRole
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setUserRole($userRole = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($userRole)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $userRole, implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->UserRole = $userRole;
        return $this;
    }
    /**
     * Get BuyerUserID value
     * @return string|null
     */
    public function getBuyerUserID()
    {
        return $this->BuyerUserID;
    }
    /**
     * Set BuyerUserID value
     * @param string $buyerUserID
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setBuyerUserID($buyerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerUserID) && !is_string($buyerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerUserID)), __LINE__);
        }
        $this->BuyerUserID = $buyerUserID;
        return $this;
    }
    /**
     * Get SellerUserID value
     * @return string|null
     */
    public function getSellerUserID()
    {
        return $this->SellerUserID;
    }
    /**
     * Set SellerUserID value
     * @param string $sellerUserID
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setSellerUserID($sellerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerUserID) && !is_string($sellerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerUserID)), __LINE__);
        }
        $this->SellerUserID = $sellerUserID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get DisputeReason value
     * @return string|null
     */
    public function getDisputeReason()
    {
        return $this->DisputeReason;
    }
    /**
     * Set DisputeReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeReason
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeReason($disputeReason = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeReasonCodeType::valueIsValid($disputeReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeReason, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeReason = $disputeReason;
        return $this;
    }
    /**
     * Get DisputeExplanation value
     * @return string|null
     */
    public function getDisputeExplanation()
    {
        return $this->DisputeExplanation;
    }
    /**
     * Set DisputeExplanation value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeExplanationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeExplanationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeExplanation
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeExplanation($disputeExplanation = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeExplanationCodeType::valueIsValid($disputeExplanation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeExplanation, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeExplanationCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeExplanation = $disputeExplanation;
        return $this;
    }
    /**
     * Get DisputeCreditEligibility value
     * @return string|null
     */
    public function getDisputeCreditEligibility()
    {
        return $this->DisputeCreditEligibility;
    }
    /**
     * Set DisputeCreditEligibility value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeCreditEligibilityCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeCreditEligibilityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeCreditEligibility
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeCreditEligibility($disputeCreditEligibility = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeCreditEligibilityCodeType::valueIsValid($disputeCreditEligibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeCreditEligibility, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeCreditEligibilityCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeCreditEligibility = $disputeCreditEligibility;
        return $this;
    }
    /**
     * Get DisputeCreatedTime value
     * @return string|null
     */
    public function getDisputeCreatedTime()
    {
        return $this->DisputeCreatedTime;
    }
    /**
     * Set DisputeCreatedTime value
     * @param string $disputeCreatedTime
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeCreatedTime($disputeCreatedTime = null)
    {
        // validation for constraint: string
        if (!is_null($disputeCreatedTime) && !is_string($disputeCreatedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($disputeCreatedTime)), __LINE__);
        }
        $this->DisputeCreatedTime = $disputeCreatedTime;
        return $this;
    }
    /**
     * Get DisputeModifiedTime value
     * @return string|null
     */
    public function getDisputeModifiedTime()
    {
        return $this->DisputeModifiedTime;
    }
    /**
     * Set DisputeModifiedTime value
     * @param string $disputeModifiedTime
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeModifiedTime($disputeModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($disputeModifiedTime) && !is_string($disputeModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($disputeModifiedTime)), __LINE__);
        }
        $this->DisputeModifiedTime = $disputeModifiedTime;
        return $this;
    }
    /**
     * Get DisputeResolution value
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType[]|null
     */
    public function getDisputeResolution()
    {
        return $this->DisputeResolution;
    }
    /**
     * Set DisputeResolution value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeResolutionType[] $disputeResolution
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeResolution(array $disputeResolution = array())
    {
        foreach ($disputeResolution as $disputeTypeDisputeResolutionItem) {
            // validation for constraint: itemType
            if (!$disputeTypeDisputeResolutionItem instanceof \macropage\ebaysdk\trading\StructType\DisputeResolutionType) {
                throw new \InvalidArgumentException(sprintf('The DisputeResolution property can only contain items of \macropage\ebaysdk\trading\StructType\DisputeResolutionType, "%s" given', is_object($disputeTypeDisputeResolutionItem) ? get_class($disputeTypeDisputeResolutionItem) : gettype($disputeTypeDisputeResolutionItem)), __LINE__);
            }
        }
        $this->DisputeResolution = $disputeResolution;
        return $this;
    }
    /**
     * Add item to DisputeResolution value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeResolutionType $item
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function addToDisputeResolution(\macropage\ebaysdk\trading\StructType\DisputeResolutionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DisputeResolutionType) {
            throw new \InvalidArgumentException(sprintf('The DisputeResolution property can only contain items of \macropage\ebaysdk\trading\StructType\DisputeResolutionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisputeResolution[] = $item;
        return $this;
    }
    /**
     * Get DisputeMessage value
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType[]|null
     */
    public function getDisputeMessage()
    {
        return $this->DisputeMessage;
    }
    /**
     * Set DisputeMessage value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeMessageType[] $disputeMessage
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setDisputeMessage(array $disputeMessage = array())
    {
        foreach ($disputeMessage as $disputeTypeDisputeMessageItem) {
            // validation for constraint: itemType
            if (!$disputeTypeDisputeMessageItem instanceof \macropage\ebaysdk\trading\StructType\DisputeMessageType) {
                throw new \InvalidArgumentException(sprintf('The DisputeMessage property can only contain items of \macropage\ebaysdk\trading\StructType\DisputeMessageType, "%s" given', is_object($disputeTypeDisputeMessageItem) ? get_class($disputeTypeDisputeMessageItem) : gettype($disputeTypeDisputeMessageItem)), __LINE__);
            }
        }
        $this->DisputeMessage = $disputeMessage;
        return $this;
    }
    /**
     * Add item to DisputeMessage value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeMessageType $item
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function addToDisputeMessage(\macropage\ebaysdk\trading\StructType\DisputeMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DisputeMessageType) {
            throw new \InvalidArgumentException(sprintf('The DisputeMessage property can only contain items of \macropage\ebaysdk\trading\StructType\DisputeMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisputeMessage[] = $item;
        return $this;
    }
    /**
     * Get Escalation value
     * @return bool|null
     */
    public function getEscalation()
    {
        return $this->Escalation;
    }
    /**
     * Set Escalation value
     * @param bool $escalation
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setEscalation($escalation = null)
    {
        // validation for constraint: boolean
        if (!is_null($escalation) && !is_bool($escalation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($escalation)), __LINE__);
        }
        $this->Escalation = $escalation;
        return $this;
    }
    /**
     * Get PurchaseProtection value
     * @return bool|null
     */
    public function getPurchaseProtection()
    {
        return $this->PurchaseProtection;
    }
    /**
     * Set PurchaseProtection value
     * @param bool $purchaseProtection
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setPurchaseProtection($purchaseProtection = null)
    {
        // validation for constraint: boolean
        if (!is_null($purchaseProtection) && !is_bool($purchaseProtection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($purchaseProtection)), __LINE__);
        }
        $this->PurchaseProtection = $purchaseProtection;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DisputeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
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
     * @return \macropage\ebaysdk\trading\StructType\DisputeType
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
