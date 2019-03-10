<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberMessagesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves a list of the messages buyers have posted about your active item listings.
 * @subpackage Structs
 */
class GetMemberMessagesRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The ID of the item the message is about. <br><br> For ASQ messages, either the ItemID, or a date range (specified with StartCreationTime and EndCreationTime), or both must be included. ItemID is otherwise ignored. | Type that
     * represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The MailMessageType
     * Meta informations extracted from the WSDL
     * - documentation: The type of message. Note that <b>GetMemberMessages</b> does not return messages when this field is set to <b>AskSellerQuestion</b>.
     * - minOccurs: 0
     * @var string
     */
    public $MailMessageType;
    /**
     * The MessageStatus
     * Meta informations extracted from the WSDL
     * - documentation: The status of the message.
     * - minOccurs: 0
     * @var string
     */
    public $MessageStatus;
    /**
     * The DisplayToPublic
     * Meta informations extracted from the WSDL
     * - documentation: If included in the request and set to <code>true</code>, only public messages (viewable in the Item listing) are returned. If omitted or set to <code>false</code> in the request, all messages (that match other filters in the request)
     * are returned in the response.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayToPublic;
    /**
     * The StartCreationTime
     * Meta informations extracted from the WSDL
     * - documentation: Used as beginning of date range filter. If specified, filters the returned messages to only those with a creation date greater than or equal to the specified date and time. <br><br> For Contact eBay Member (CEM) messages,
     * <b>StartCreationTime</b> and <b>EndCreationTime</b> must be provided. <br><br> For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>), or both must be
     * included.
     * - minOccurs: 0
     * @var string
     */
    public $StartCreationTime;
    /**
     * The EndCreationTime
     * Meta informations extracted from the WSDL
     * - documentation: Used as end of date range filter. If specified, filters the returned messages to only those with a creation date less than or equal to the specified date and time. <br><br> For Contact eBay Member (CEM) messages,
     * <b>StartCreationTime</b> and <b>EndCreationTime</b> must be provided. <br><br> For Ask Seller a Question (ASQ) messages, either the <b>ItemID</b>, or a date range (specified with <b>StartCreationTime</b> and <b>EndCreationTime</b>), or both must be
     * included.
     * - minOccurs: 0
     * @var string
     */
    public $EndCreationTime;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: Standard pagination argument used to reduce response.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The MemberMessageID
     * Meta informations extracted from the WSDL
     * - documentation: An ID that uniquely identifies the message for a given user to be retrieved. Used for the <b>AskSellerQuestion</b> notification only.
     * - minOccurs: 0
     * @var string
     */
    public $MemberMessageID;
    /**
     * The SenderID
     * Meta informations extracted from the WSDL
     * - documentation: An eBay ID that uniquely identifies a user. For <b>GetMemberMessages</b>, this is the sender of the message. If included in the request, returns only messages from the specified sender. | This is a string wrapper for the eBay ID that
     * uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to
     * protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or
     * outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $SenderID;
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
    public function __construct($itemID = null, $mailMessageType = null, $messageStatus = null, $displayToPublic = null, $startCreationTime = null, $endCreationTime = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $memberMessageID = null, $senderID = null)
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
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get MailMessageType value
     * @return string|null
     */
    public function getMailMessageType()
    {
        return $this->MailMessageType;
    }
    /**
     * Set MailMessageType value
     * @uses \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mailMessageType
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setMailMessageType($mailMessageType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::valueIsValid($mailMessageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailMessageType, implode(', ', \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MailMessageType = $mailMessageType;
        return $this;
    }
    /**
     * Get MessageStatus value
     * @return string|null
     */
    public function getMessageStatus()
    {
        return $this->MessageStatus;
    }
    /**
     * Set MessageStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageStatus
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setMessageStatus($messageStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::valueIsValid($messageStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $messageStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MessageStatus = $messageStatus;
        return $this;
    }
    /**
     * Get DisplayToPublic value
     * @return bool|null
     */
    public function getDisplayToPublic()
    {
        return $this->DisplayToPublic;
    }
    /**
     * Set DisplayToPublic value
     * @param bool $displayToPublic
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setDisplayToPublic($displayToPublic = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayToPublic) && !is_bool($displayToPublic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayToPublic)), __LINE__);
        }
        $this->DisplayToPublic = $displayToPublic;
        return $this;
    }
    /**
     * Get StartCreationTime value
     * @return string|null
     */
    public function getStartCreationTime()
    {
        return $this->StartCreationTime;
    }
    /**
     * Set StartCreationTime value
     * @param string $startCreationTime
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setStartCreationTime($startCreationTime = null)
    {
        // validation for constraint: string
        if (!is_null($startCreationTime) && !is_string($startCreationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startCreationTime)), __LINE__);
        }
        $this->StartCreationTime = $startCreationTime;
        return $this;
    }
    /**
     * Get EndCreationTime value
     * @return string|null
     */
    public function getEndCreationTime()
    {
        return $this->EndCreationTime;
    }
    /**
     * Set EndCreationTime value
     * @param string $endCreationTime
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setEndCreationTime($endCreationTime = null)
    {
        // validation for constraint: string
        if (!is_null($endCreationTime) && !is_string($endCreationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endCreationTime)), __LINE__);
        }
        $this->EndCreationTime = $endCreationTime;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get MemberMessageID value
     * @return string|null
     */
    public function getMemberMessageID()
    {
        return $this->MemberMessageID;
    }
    /**
     * Set MemberMessageID value
     * @param string $memberMessageID
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setMemberMessageID($memberMessageID = null)
    {
        // validation for constraint: string
        if (!is_null($memberMessageID) && !is_string($memberMessageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memberMessageID)), __LINE__);
        }
        $this->MemberMessageID = $memberMessageID;
        return $this;
    }
    /**
     * Get SenderID value
     * @return string|null
     */
    public function getSenderID()
    {
        return $this->SenderID;
    }
    /**
     * Set SenderID value
     * @param string $senderID
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
     */
    public function setSenderID($senderID = null)
    {
        // validation for constraint: string
        if (!is_null($senderID) && !is_string($senderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderID)), __LINE__);
        }
        $this->SenderID = $senderID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesRequestType
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
