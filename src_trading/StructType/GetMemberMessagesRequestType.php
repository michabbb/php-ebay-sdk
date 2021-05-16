<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberMessagesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a list of the messages buyers have posted about your active item listings.
 * @subpackage Structs
 */
class GetMemberMessagesRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing for which you wish to retrieve member messages. <br><br> For <em>Ask Seller Question</em> messages, the <b>ItemID</b> and/or a date range (specified with <b>StartCreationTime</b> and
     * <b>EndCreationTime</b> fields), are required, or the call will fail. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The MailMessageType
     * Meta information extracted from the WSDL
     * - documentation: This required field indicates the type of member message to retrieve. Only the following two enumeration values are allowed. The call will fail if this field is not included in the request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MailMessageType = null;
    /**
     * The MessageStatus
     * Meta information extracted from the WSDL
     * - documentation: This field allows you to retrieve only unanswered member messages or answered member messages. If this field is omitted, both answered and unanswered member messages are retrieved.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageStatus = null;
    /**
     * The DisplayToPublic
     * Meta information extracted from the WSDL
     * - documentation: If included in the request and set to <code>true</code>, only public messages (viewable in the Item listing) are returned. If omitted or set to <code>false</code> in the request, all messages (that match other filters in the request)
     * are returned in the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DisplayToPublic = null;
    /**
     * The StartCreationTime
     * Meta information extracted from the WSDL
     * - documentation: Used as beginning of date range filter. If specified, filters the returned messages to only those with a creation date greater than or equal to the specified date and time. <br><br> For Contact eBay Member (CEM) messages,
     * <b>StartCreationTime</b> and <b>EndCreationTime</b> must be provided. <br><br> For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>), or both must be
     * included.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartCreationTime = null;
    /**
     * The EndCreationTime
     * Meta information extracted from the WSDL
     * - documentation: Used as end of date range filter. If specified, filters the returned messages to only those with a creation date less than or equal to the specified date and time. <br><br> For Contact eBay Member (CEM) messages,
     * <b>StartCreationTime</b> and <b>EndCreationTime</b> must be provided. <br><br> For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>), or both must be
     * included.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndCreationTime = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: Standard pagination argument used to reduce response.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The MemberMessageID
     * Meta information extracted from the WSDL
     * - documentation: An ID that uniquely identifies the message for a given user to be retrieved. Used for the <b>AskSellerQuestion</b> notification only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MemberMessageID = null;
    /**
     * The SenderID
     * Meta information extracted from the WSDL
     * - documentation: An eBay ID that uniquely identifies a user. For <b>GetMemberMessages</b>, this is the sender of the message. If included in the request, returns only messages from the specified sender. | This is a string wrapper for the eBay ID that
     * uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to
     * protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or
     * outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SenderID = null;
    /**
     * Constructor method for GetMemberMessagesRequestType
     * @uses GetMemberMessagesRequestType::setItemID()
     * @uses GetMemberMessagesRequestType::setMailMessageType()
     * @uses GetMemberMessagesRequestType::setMessageStatus()
     * @uses GetMemberMessagesRequestType::setDisplayToPublic()
     * @uses GetMemberMessagesRequestType::setStartCreationTime()
     * @uses GetMemberMessagesRequestType::setEndCreationTime()
     * @uses GetMemberMessagesRequestType::setPagination()
     * @uses GetMemberMessagesRequestType::setMemberMessageID()
     * @uses GetMemberMessagesRequestType::setSenderID()
     * @param string $itemID
     * @param string $mailMessageType
     * @param string $messageStatus
     * @param bool $displayToPublic
     * @param string $startCreationTime
     * @param string $endCreationTime
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param string $memberMessageID
     * @param string $senderID
     */
    public function __construct(?string $itemID = null, ?string $mailMessageType = null, ?string $messageStatus = null, ?bool $displayToPublic = null, ?string $startCreationTime = null, ?string $endCreationTime = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?string $memberMessageID = null, ?string $senderID = null)
    {
        $this
            ->setItemID($itemID)
            ->setMailMessageType($mailMessageType)
            ->setMessageStatus($messageStatus)
            ->setDisplayToPublic($displayToPublic)
            ->setStartCreationTime($startCreationTime)
            ->setEndCreationTime($endCreationTime)
            ->setPagination($pagination)
            ->setMemberMessageID($memberMessageID)
            ->setSenderID($senderID);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get MailMessageType value
     * @return string|null
     */
    public function getMailMessageType(): ?string
    {
        return $this->MailMessageType;
    }
    /**
     * Set MailMessageType value
     * @uses \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mailMessageType
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setMailMessageType(?string $mailMessageType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::valueIsValid($mailMessageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType', is_array($mailMessageType) ? implode(', ', $mailMessageType) : var_export($mailMessageType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MailMessageType = $mailMessageType;
        
        return $this;
    }
    /**
     * Get MessageStatus value
     * @return string|null
     */
    public function getMessageStatus(): ?string
    {
        return $this->MessageStatus;
    }
    /**
     * Set MessageStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $messageStatus
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setMessageStatus(?string $messageStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::valueIsValid($messageStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType', is_array($messageStatus) ? implode(', ', $messageStatus) : var_export($messageStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MessageStatus = $messageStatus;
        
        return $this;
    }
    /**
     * Get DisplayToPublic value
     * @return bool|null
     */
    public function getDisplayToPublic(): ?bool
    {
        return $this->DisplayToPublic;
    }
    /**
     * Set DisplayToPublic value
     * @param bool $displayToPublic
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setDisplayToPublic(?bool $displayToPublic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($displayToPublic) && !is_bool($displayToPublic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayToPublic, true), gettype($displayToPublic)), __LINE__);
        }
        $this->DisplayToPublic = $displayToPublic;
        
        return $this;
    }
    /**
     * Get StartCreationTime value
     * @return string|null
     */
    public function getStartCreationTime(): ?string
    {
        return $this->StartCreationTime;
    }
    /**
     * Set StartCreationTime value
     * @param string $startCreationTime
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setStartCreationTime(?string $startCreationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startCreationTime) && !is_string($startCreationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startCreationTime, true), gettype($startCreationTime)), __LINE__);
        }
        $this->StartCreationTime = $startCreationTime;
        
        return $this;
    }
    /**
     * Get EndCreationTime value
     * @return string|null
     */
    public function getEndCreationTime(): ?string
    {
        return $this->EndCreationTime;
    }
    /**
     * Set EndCreationTime value
     * @param string $endCreationTime
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setEndCreationTime(?string $endCreationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endCreationTime) && !is_string($endCreationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endCreationTime, true), gettype($endCreationTime)), __LINE__);
        }
        $this->EndCreationTime = $endCreationTime;
        
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination(): ?\macropage\ebaysdk\trading\StructType\PaginationType
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
        return $this;
    }
    /**
     * Get MemberMessageID value
     * @return string|null
     */
    public function getMemberMessageID(): ?string
    {
        return $this->MemberMessageID;
    }
    /**
     * Set MemberMessageID value
     * @param string $memberMessageID
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setMemberMessageID(?string $memberMessageID = null): self
    {
        // validation for constraint: string
        if (!is_null($memberMessageID) && !is_string($memberMessageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memberMessageID, true), gettype($memberMessageID)), __LINE__);
        }
        $this->MemberMessageID = $memberMessageID;
        
        return $this;
    }
    /**
     * Get SenderID value
     * @return string|null
     */
    public function getSenderID(): ?string
    {
        return $this->SenderID;
    }
    /**
     * Set SenderID value
     * @param string $senderID
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setSenderID(?string $senderID = null): self
    {
        // validation for constraint: string
        if (!is_null($senderID) && !is_string($senderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderID, true), gettype($senderID)), __LINE__);
        }
        $this->SenderID = $senderID;
        
        return $this;
    }
}
