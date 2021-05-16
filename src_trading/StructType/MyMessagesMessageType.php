<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the message information for each message specified in MessageIDs. The amount and type of information returned varies based on the requested detail level.
 * @subpackage Structs
 */
class MyMessagesMessageType extends AbstractStructBase
{
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - documentation: Display name of the eBay user that sent the message.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sender = null;
    /**
     * The RecipientUserID
     * Meta information extracted from the WSDL
     * - documentation: Displayable user ID of the recipient.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecipientUserID = null;
    /**
     * The SendToName
     * Meta information extracted from the WSDL
     * - documentation: Displayable name of the user or eBay application to which the message is sent. Only returned for M2M, and if a value exists.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SendToName = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - documentation: Subject of the message.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: ID that uniquely identifies a message for a given user. <br/> <br/> This value is not the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages value (used as the GetMyMessages ExternalID) instead. |
     * Type defining the <b>MessageID</b> field used in <b>GetMyMessages</b>, <b>ReviseMyMessages</b>, and <b>DeleteMyMessages</b> to identify a specific eBay message to retrieve, revise, or delete, respectively. Up to 10 <b>MessageID</b> values can be
     * specified in one API call.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageID = null;
    /**
     * The ExternalMessageID
     * Meta information extracted from the WSDL
     * - documentation: ID used by an external application to uniquely identify a message. Returned only when specified by the external application on message creation. <br><br> This value is equivalent to the value used for MessageID in GetMemberMessages.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalMessageID = null;
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - documentation: Content type of the body text. The three acceptable values are "TEXT", "HTML", and "XML" (Note: This is case sensitive).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContentType = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Contains the message content, and can contain a threaded message. This field can contain plain text or HTML, depending on the format of the original message. The API does not check the email-format preferences in My Messages on the
     * eBay Web site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The Flagged
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the message is displayed with a flag in the seller's My Messages mailbox on eBay. It is strongly recommended that the seller act on the message by the specified date (or within 60 days, if not specified).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Flagged = null;
    /**
     * The Read
     * Meta information extracted from the WSDL
     * - documentation: Indicates if a message has been viewed by a given user. Note that retrieving a message with the API does not mark it as read.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Read = null;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time that a message was created by the sender.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The ReceiveDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time that a message was received by My Messages and stored in a database for the recipient.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReceiveDate = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time at which a message expires.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of an eBay listing. This field is returned if the corresponding message is associated with a specific listing. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The ResponseDetails
     * Meta information extracted from the WSDL
     * - documentation: Details relating to the response to a message.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $ResponseDetails = null;
    /**
     * The ForwardDetails
     * Meta information extracted from the WSDL
     * - documentation: Details relating to the forwarding of a message. Only returned if the message is forwarded.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $ForwardDetails = null;
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: Details relating to a My Messages folder.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesFolderType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyMessagesFolderType $Folder = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - documentation: Message body in plain text format. The message body is displayed in plain text even if the eBay user's Preferred Email Format preference on My eBay is set to HTML. Graphics and text formatting are dropped if the eBay user's
     * preference is set to HTML.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * The MessageType
     * Meta information extracted from the WSDL
     * - documentation: Type of message being retrieved through GetMyMessages. This is available only on the US site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageType = null;
    /**
     * The ListingStatus
     * Meta information extracted from the WSDL
     * - documentation: Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the final value fee. This
     * processing can take several minutes. If you retrieve a sold item and no details about the buyer/high bidder are returned or no final value fee is available, use this listing status information to determine whether eBay has finished processing the
     * listing. <br><br> <span class="tablenote"><b>Note:</b> For GetMyMessages, the listing status reflects the status of the listing at the time the question was created. The listing status for this call must not match the listing status returned by other
     * calls (such as GetItemTransactions). This is returned only if Messages.Message.MessageType is AskSellerQuestion. This tag is no longer returned in the Sandbox environment. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingStatus = null;
    /**
     * The QuestionType
     * Meta information extracted from the WSDL
     * - documentation: Currently available only on the US site. Context of the question (e.g. Shipping, General). Corresponds to the message subject. Applies if Messages.Message.MessageType is AskSellerQuestion.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QuestionType = null;
    /**
     * The Replied
     * Meta information extracted from the WSDL
     * - documentation: Indicates if there has been a reply to the message.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Replied = null;
    /**
     * The HighPriority
     * Meta information extracted from the WSDL
     * - documentation: Indicates if this message is marked as a high-priority message.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HighPriority = null;
    /**
     * The ItemEndTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time for the ended item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemEndTime = null;
    /**
     * The ItemTitle
     * Meta information extracted from the WSDL
     * - documentation: Title of the item listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemTitle = null;
    /**
     * The MessageMedia
     * Meta information extracted from the WSDL
     * - documentation: Media details stored as part of the message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MessageMediaType[]
     */
    protected array $MessageMedia = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyMessagesMessageType
     * @uses MyMessagesMessageType::setSender()
     * @uses MyMessagesMessageType::setRecipientUserID()
     * @uses MyMessagesMessageType::setSendToName()
     * @uses MyMessagesMessageType::setSubject()
     * @uses MyMessagesMessageType::setMessageID()
     * @uses MyMessagesMessageType::setExternalMessageID()
     * @uses MyMessagesMessageType::setContentType()
     * @uses MyMessagesMessageType::setText()
     * @uses MyMessagesMessageType::setFlagged()
     * @uses MyMessagesMessageType::setRead()
     * @uses MyMessagesMessageType::setCreationDate()
     * @uses MyMessagesMessageType::setReceiveDate()
     * @uses MyMessagesMessageType::setExpirationDate()
     * @uses MyMessagesMessageType::setItemID()
     * @uses MyMessagesMessageType::setResponseDetails()
     * @uses MyMessagesMessageType::setForwardDetails()
     * @uses MyMessagesMessageType::setFolder()
     * @uses MyMessagesMessageType::setContent()
     * @uses MyMessagesMessageType::setMessageType()
     * @uses MyMessagesMessageType::setListingStatus()
     * @uses MyMessagesMessageType::setQuestionType()
     * @uses MyMessagesMessageType::setReplied()
     * @uses MyMessagesMessageType::setHighPriority()
     * @uses MyMessagesMessageType::setItemEndTime()
     * @uses MyMessagesMessageType::setItemTitle()
     * @uses MyMessagesMessageType::setMessageMedia()
     * @uses MyMessagesMessageType::setAny()
     * @param string $sender
     * @param string $recipientUserID
     * @param string $sendToName
     * @param string $subject
     * @param string $messageID
     * @param string $externalMessageID
     * @param string $contentType
     * @param string $text
     * @param bool $flagged
     * @param bool $read
     * @param string $creationDate
     * @param string $receiveDate
     * @param string $expirationDate
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder
     * @param string $content
     * @param string $messageType
     * @param string $listingStatus
     * @param string $questionType
     * @param bool $replied
     * @param bool $highPriority
     * @param string $itemEndTime
     * @param string $itemTitle
     * @param \macropage\ebaysdk\trading\StructType\MessageMediaType[] $messageMedia
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $sender = null, ?string $recipientUserID = null, ?string $sendToName = null, ?string $subject = null, ?string $messageID = null, ?string $externalMessageID = null, ?string $contentType = null, ?string $text = null, ?bool $flagged = null, ?bool $read = null, ?string $creationDate = null, ?string $receiveDate = null, ?string $expirationDate = null, ?string $itemID = null, ?\macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails = null, ?\macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails = null, ?\macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder = null, ?string $content = null, ?string $messageType = null, ?string $listingStatus = null, ?string $questionType = null, ?bool $replied = null, ?bool $highPriority = null, ?string $itemEndTime = null, ?string $itemTitle = null, array $messageMedia = [], $any = null)
    {
        $this
            ->setSender($sender)
            ->setRecipientUserID($recipientUserID)
            ->setSendToName($sendToName)
            ->setSubject($subject)
            ->setMessageID($messageID)
            ->setExternalMessageID($externalMessageID)
            ->setContentType($contentType)
            ->setText($text)
            ->setFlagged($flagged)
            ->setRead($read)
            ->setCreationDate($creationDate)
            ->setReceiveDate($receiveDate)
            ->setExpirationDate($expirationDate)
            ->setItemID($itemID)
            ->setResponseDetails($responseDetails)
            ->setForwardDetails($forwardDetails)
            ->setFolder($folder)
            ->setContent($content)
            ->setMessageType($messageType)
            ->setListingStatus($listingStatus)
            ->setQuestionType($questionType)
            ->setReplied($replied)
            ->setHighPriority($highPriority)
            ->setItemEndTime($itemEndTime)
            ->setItemTitle($itemTitle)
            ->setMessageMedia($messageMedia)
            ->setAny($any);
    }
    /**
     * Get Sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param string $sender
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->Sender = $sender;
        
        return $this;
    }
    /**
     * Get RecipientUserID value
     * @return string|null
     */
    public function getRecipientUserID(): ?string
    {
        return $this->RecipientUserID;
    }
    /**
     * Set RecipientUserID value
     * @param string $recipientUserID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setRecipientUserID(?string $recipientUserID = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientUserID) && !is_string($recipientUserID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientUserID, true), gettype($recipientUserID)), __LINE__);
        }
        $this->RecipientUserID = $recipientUserID;
        
        return $this;
    }
    /**
     * Get SendToName value
     * @return string|null
     */
    public function getSendToName(): ?string
    {
        return $this->SendToName;
    }
    /**
     * Set SendToName value
     * @param string $sendToName
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setSendToName(?string $sendToName = null): self
    {
        // validation for constraint: string
        if (!is_null($sendToName) && !is_string($sendToName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendToName, true), gettype($sendToName)), __LINE__);
        }
        $this->SendToName = $sendToName;
        
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
        return $this;
    }
    /**
     * Get MessageID value
     * @return string|null
     */
    public function getMessageID(): ?string
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param string $messageID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setMessageID(?string $messageID = null): self
    {
        // validation for constraint: string
        if (!is_null($messageID) && !is_string($messageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageID, true), gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        
        return $this;
    }
    /**
     * Get ExternalMessageID value
     * @return string|null
     */
    public function getExternalMessageID(): ?string
    {
        return $this->ExternalMessageID;
    }
    /**
     * Set ExternalMessageID value
     * @param string $externalMessageID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setExternalMessageID(?string $externalMessageID = null): self
    {
        // validation for constraint: string
        if (!is_null($externalMessageID) && !is_string($externalMessageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalMessageID, true), gettype($externalMessageID)), __LINE__);
        }
        $this->ExternalMessageID = $externalMessageID;
        
        return $this;
    }
    /**
     * Get ContentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @param string $contentType
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->ContentType = $contentType;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Get Flagged value
     * @return bool|null
     */
    public function getFlagged(): ?bool
    {
        return $this->Flagged;
    }
    /**
     * Set Flagged value
     * @param bool $flagged
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setFlagged(?bool $flagged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flagged) && !is_bool($flagged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flagged, true), gettype($flagged)), __LINE__);
        }
        $this->Flagged = $flagged;
        
        return $this;
    }
    /**
     * Get Read value
     * @return bool|null
     */
    public function getRead(): ?bool
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setRead(?bool $read = null): self
    {
        // validation for constraint: boolean
        if (!is_null($read) && !is_bool($read)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($read, true), gettype($read)), __LINE__);
        }
        $this->Read = $read;
        
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get ReceiveDate value
     * @return string|null
     */
    public function getReceiveDate(): ?string
    {
        return $this->ReceiveDate;
    }
    /**
     * Set ReceiveDate value
     * @param string $receiveDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setReceiveDate(?string $receiveDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiveDate) && !is_string($receiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiveDate, true), gettype($receiveDate)), __LINE__);
        }
        $this->ReceiveDate = $receiveDate;
        
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
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
     * Get ResponseDetails value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType|null
     */
    public function getResponseDetails(): ?\macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType
    {
        return $this->ResponseDetails;
    }
    /**
     * Set ResponseDetails value
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setResponseDetails(?\macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails = null): self
    {
        $this->ResponseDetails = $responseDetails;
        
        return $this;
    }
    /**
     * Get ForwardDetails value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType|null
     */
    public function getForwardDetails(): ?\macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
    {
        return $this->ForwardDetails;
    }
    /**
     * Set ForwardDetails value
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setForwardDetails(?\macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails = null): self
    {
        $this->ForwardDetails = $forwardDetails;
        
        return $this;
    }
    /**
     * Get Folder value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderType|null
     */
    public function getFolder(): ?\macropage\ebaysdk\trading\StructType\MyMessagesFolderType
    {
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setFolder(?\macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder = null): self
    {
        $this->Folder = $folder;
        
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->Content = $content;
        
        return $this;
    }
    /**
     * Get MessageType value
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @uses \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $messageType
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::valueIsValid($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType', is_array($messageType) ? implode(', ', $messageType) : var_export($messageType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MessageTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MessageType = $messageType;
        
        return $this;
    }
    /**
     * Get ListingStatus value
     * @return string|null
     */
    public function getListingStatus(): ?string
    {
        return $this->ListingStatus;
    }
    /**
     * Set ListingStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $listingStatus
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setListingStatus(?string $listingStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingStatusCodeType::valueIsValid($listingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ListingStatusCodeType', is_array($listingStatus) ? implode(', ', $listingStatus) : var_export($listingStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ListingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ListingStatus = $listingStatus;
        
        return $this;
    }
    /**
     * Get QuestionType value
     * @return string|null
     */
    public function getQuestionType(): ?string
    {
        return $this->QuestionType;
    }
    /**
     * Set QuestionType value
     * @uses \macropage\ebaysdk\trading\EnumType\QuestionTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\QuestionTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $questionType
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setQuestionType(?string $questionType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\QuestionTypeCodeType::valueIsValid($questionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\QuestionTypeCodeType', is_array($questionType) ? implode(', ', $questionType) : var_export($questionType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\QuestionTypeCodeType::getValidValues())), __LINE__);
        }
        $this->QuestionType = $questionType;
        
        return $this;
    }
    /**
     * Get Replied value
     * @return bool|null
     */
    public function getReplied(): ?bool
    {
        return $this->Replied;
    }
    /**
     * Set Replied value
     * @param bool $replied
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setReplied(?bool $replied = null): self
    {
        // validation for constraint: boolean
        if (!is_null($replied) && !is_bool($replied)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replied, true), gettype($replied)), __LINE__);
        }
        $this->Replied = $replied;
        
        return $this;
    }
    /**
     * Get HighPriority value
     * @return bool|null
     */
    public function getHighPriority(): ?bool
    {
        return $this->HighPriority;
    }
    /**
     * Set HighPriority value
     * @param bool $highPriority
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setHighPriority(?bool $highPriority = null): self
    {
        // validation for constraint: boolean
        if (!is_null($highPriority) && !is_bool($highPriority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($highPriority, true), gettype($highPriority)), __LINE__);
        }
        $this->HighPriority = $highPriority;
        
        return $this;
    }
    /**
     * Get ItemEndTime value
     * @return string|null
     */
    public function getItemEndTime(): ?string
    {
        return $this->ItemEndTime;
    }
    /**
     * Set ItemEndTime value
     * @param string $itemEndTime
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setItemEndTime(?string $itemEndTime = null): self
    {
        // validation for constraint: string
        if (!is_null($itemEndTime) && !is_string($itemEndTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemEndTime, true), gettype($itemEndTime)), __LINE__);
        }
        $this->ItemEndTime = $itemEndTime;
        
        return $this;
    }
    /**
     * Get ItemTitle value
     * @return string|null
     */
    public function getItemTitle(): ?string
    {
        return $this->ItemTitle;
    }
    /**
     * Set ItemTitle value
     * @param string $itemTitle
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setItemTitle(?string $itemTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($itemTitle) && !is_string($itemTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemTitle, true), gettype($itemTitle)), __LINE__);
        }
        $this->ItemTitle = $itemTitle;
        
        return $this;
    }
    /**
     * Get MessageMedia value
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType[]
     */
    public function getMessageMedia(): array
    {
        return $this->MessageMedia;
    }
    /**
     * This method is responsible for validating the values passed to the setMessageMedia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessageMedia method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageMediaForArrayConstraintsFromSetMessageMedia(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesMessageTypeMessageMediaItem) {
            // validation for constraint: itemType
            if (!$myMessagesMessageTypeMessageMediaItem instanceof \macropage\ebaysdk\trading\StructType\MessageMediaType) {
                $invalidValues[] = is_object($myMessagesMessageTypeMessageMediaItem) ? get_class($myMessagesMessageTypeMessageMediaItem) : sprintf('%s(%s)', gettype($myMessagesMessageTypeMessageMediaItem), var_export($myMessagesMessageTypeMessageMediaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MessageMedia property can only contain items of type \macropage\ebaysdk\trading\StructType\MessageMediaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MessageMedia value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MessageMediaType[] $messageMedia
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function setMessageMedia(array $messageMedia = []): self
    {
        // validation for constraint: array
        if ('' !== ($messageMediaArrayErrorMessage = self::validateMessageMediaForArrayConstraintsFromSetMessageMedia($messageMedia))) {
            throw new InvalidArgumentException($messageMediaArrayErrorMessage, __LINE__);
        }
        $this->MessageMedia = $messageMedia;
        
        return $this;
    }
    /**
     * Add item to MessageMedia value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MessageMediaType $item
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
     */
    public function addToMessageMedia(\macropage\ebaysdk\trading\StructType\MessageMediaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MessageMediaType) {
            throw new InvalidArgumentException(sprintf('The MessageMedia property can only contain items of type \macropage\ebaysdk\trading\StructType\MessageMediaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MessageMedia[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType
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
