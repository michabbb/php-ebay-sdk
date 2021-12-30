<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for individual message information.
 * @subpackage Structs
 */
class MemberMessageType extends AbstractStructBase
{
    /**
     * The MessageType
     * Meta information extracted from the WSDL
     * - documentation: Type of message being retrieved. Note that some message types can only be created via the eBay Web site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageType = null;
    /**
     * The QuestionType
     * Meta information extracted from the WSDL
     * - documentation: Context of the question (e.g. Shipping, General).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QuestionType = null;
    /**
     * The EmailCopyToSender
     * Meta information extracted from the WSDL
     * - documentation: Indicates if a copy of the messages is to be emailed to the sender. If omitted, this defaults to whatever the user set in preferences.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EmailCopyToSender = null;
    /**
     * The HideSendersEmailAddress
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HideSendersEmailAddress = null;
    /**
     * The DisplayToPublic
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the member message is viewable in the item listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DisplayToPublic = null;
    /**
     * The SenderID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the person who asked the question or sent the message.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SenderID = null;
    /**
     * The SenderEmail
     * Meta information extracted from the WSDL
     * - documentation: SenderEmail contains the static email address of an eBay member, used within the "reply to" email address when the eBay member sends a message. (Each eBay member is assigned a static alias. The alias is used within a static email
     * address.) SenderEmail is returned if MessageType is AskSellerQuestion. SenderEmail is also returned in the AskSellerQuestion notification. The following functionality of this field has been deprecated: return of a dynamic email address.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SenderEmail = null;
    /**
     * The RecipientID
     * Meta information extracted from the WSDL
     * - documentation: Recipient's eBay user ID. For AddMemberMessagesAAQToBidder, it must be the seller of an item, that item's bidder, or a user who has made an offer on that item using Best Offer. Note: maxOccurs is a shared schema element and needs to
     * be unbounded for AddMemberMessagesAAQToBidder. For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request. For all other uses, there can only be one RecipientID.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $RecipientID = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - documentation: Subject of this email message.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - documentation: Content of the message is input into this string field. HTML formatting is not allowed in the body of the message. If plain HTML is used, an error occurs and the message will not go through. If encoded HTML is used, the message may
     * go through but the formatting will not be successful, and the recipient of the message will just see the HTML formatting tags.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Body = null;
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: ID that uniquely identifies a message for a given user. <br><br> This value is not the same as the value used for the GetMyMessages MessageID. However, this MessageID value can be used as the GetMyMessages ExternalID.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageID = null;
    /**
     * The ParentMessageID
     * Meta information extracted from the WSDL
     * - documentation: ID number of the question to which this message is responding.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ParentMessageID = null;
    /**
     * The MessageMedia
     * Meta information extracted from the WSDL
     * - documentation: Media details attached to the message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MessageMediaType[]
     */
    protected ?array $MessageMedia = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MemberMessageType
     * @uses MemberMessageType::setMessageType()
     * @uses MemberMessageType::setQuestionType()
     * @uses MemberMessageType::setEmailCopyToSender()
     * @uses MemberMessageType::setHideSendersEmailAddress()
     * @uses MemberMessageType::setDisplayToPublic()
     * @uses MemberMessageType::setSenderID()
     * @uses MemberMessageType::setSenderEmail()
     * @uses MemberMessageType::setRecipientID()
     * @uses MemberMessageType::setSubject()
     * @uses MemberMessageType::setBody()
     * @uses MemberMessageType::setMessageID()
     * @uses MemberMessageType::setParentMessageID()
     * @uses MemberMessageType::setMessageMedia()
     * @uses MemberMessageType::setAny()
     * @param string $messageType
     * @param string $questionType
     * @param bool $emailCopyToSender
     * @param bool $hideSendersEmailAddress
     * @param bool $displayToPublic
     * @param string $senderID
     * @param string $senderEmail
     * @param string[] $recipientID
     * @param string $subject
     * @param string $body
     * @param string $messageID
     * @param string $parentMessageID
     * @param \macropage\ebaysdk\trading\StructType\MessageMediaType[] $messageMedia
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $messageType = null, ?string $questionType = null, ?bool $emailCopyToSender = null, ?bool $hideSendersEmailAddress = null, ?bool $displayToPublic = null, ?string $senderID = null, ?string $senderEmail = null, ?array $recipientID = null, ?string $subject = null, ?string $body = null, ?string $messageID = null, ?string $parentMessageID = null, ?array $messageMedia = null, $any = null)
    {
        $this
            ->setMessageType($messageType)
            ->setQuestionType($questionType)
            ->setEmailCopyToSender($emailCopyToSender)
            ->setHideSendersEmailAddress($hideSendersEmailAddress)
            ->setDisplayToPublic($displayToPublic)
            ->setSenderID($senderID)
            ->setSenderEmail($senderEmail)
            ->setRecipientID($recipientID)
            ->setSubject($subject)
            ->setBody($body)
            ->setMessageID($messageID)
            ->setParentMessageID($parentMessageID)
            ->setMessageMedia($messageMedia)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
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
     * Get EmailCopyToSender value
     * @return bool|null
     */
    public function getEmailCopyToSender(): ?bool
    {
        return $this->EmailCopyToSender;
    }
    /**
     * Set EmailCopyToSender value
     * @param bool $emailCopyToSender
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public function setEmailCopyToSender(?bool $emailCopyToSender = null): self
    {
        // validation for constraint: boolean
        if (!is_null($emailCopyToSender) && !is_bool($emailCopyToSender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailCopyToSender, true), gettype($emailCopyToSender)), __LINE__);
        }
        $this->EmailCopyToSender = $emailCopyToSender;
        
        return $this;
    }
    /**
     * Get HideSendersEmailAddress value
     * @return bool|null
     */
    public function getHideSendersEmailAddress(): ?bool
    {
        return $this->HideSendersEmailAddress;
    }
    /**
     * Set HideSendersEmailAddress value
     * @param bool $hideSendersEmailAddress
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public function setHideSendersEmailAddress(?bool $hideSendersEmailAddress = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideSendersEmailAddress) && !is_bool($hideSendersEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideSendersEmailAddress, true), gettype($hideSendersEmailAddress)), __LINE__);
        }
        $this->HideSendersEmailAddress = $hideSendersEmailAddress;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
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
    /**
     * Get SenderEmail value
     * @return string|null
     */
    public function getSenderEmail(): ?string
    {
        return $this->SenderEmail;
    }
    /**
     * Set SenderEmail value
     * @param string $senderEmail
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public function setSenderEmail(?string $senderEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($senderEmail) && !is_string($senderEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmail, true), gettype($senderEmail)), __LINE__);
        }
        $this->SenderEmail = $senderEmail;
        
        return $this;
    }
    /**
     * Get RecipientID value
     * @return string[]
     */
    public function getRecipientID(): ?array
    {
        return $this->RecipientID;
    }
    /**
     * This method is responsible for validating the values passed to the setRecipientID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientIDForArrayConstraintsFromSetRecipientID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $memberMessageTypeRecipientIDItem) {
            // validation for constraint: itemType
            if (!is_string($memberMessageTypeRecipientIDItem)) {
                $invalidValues[] = is_object($memberMessageTypeRecipientIDItem) ? get_class($memberMessageTypeRecipientIDItem) : sprintf('%s(%s)', gettype($memberMessageTypeRecipientIDItem), var_export($memberMessageTypeRecipientIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RecipientID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RecipientID value
     * @throws InvalidArgumentException
     * @param string[] $recipientID
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public function setRecipientID(?array $recipientID = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientIDArrayErrorMessage = self::validateRecipientIDForArrayConstraintsFromSetRecipientID($recipientID))) {
            throw new InvalidArgumentException($recipientIDArrayErrorMessage, __LINE__);
        }
        $this->RecipientID = $recipientID;
        
        return $this;
    }
    /**
     * Add item to RecipientID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public function addToRecipientID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The RecipientID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RecipientID[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
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
     * Get Body value
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param string $body
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public function setBody(?string $body = null): self
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        $this->Body = $body;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
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
     * Get ParentMessageID value
     * @return string|null
     */
    public function getParentMessageID(): ?string
    {
        return $this->ParentMessageID;
    }
    /**
     * Set ParentMessageID value
     * @param string $parentMessageID
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public function setParentMessageID(?string $parentMessageID = null): self
    {
        // validation for constraint: string
        if (!is_null($parentMessageID) && !is_string($parentMessageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentMessageID, true), gettype($parentMessageID)), __LINE__);
        }
        $this->ParentMessageID = $parentMessageID;
        
        return $this;
    }
    /**
     * Get MessageMedia value
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType[]
     */
    public function getMessageMedia(): ?array
    {
        return $this->MessageMedia;
    }
    /**
     * This method is responsible for validating the values passed to the setMessageMedia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessageMedia method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageMediaForArrayConstraintsFromSetMessageMedia(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $memberMessageTypeMessageMediaItem) {
            // validation for constraint: itemType
            if (!$memberMessageTypeMessageMediaItem instanceof \macropage\ebaysdk\trading\StructType\MessageMediaType) {
                $invalidValues[] = is_object($memberMessageTypeMessageMediaItem) ? get_class($memberMessageTypeMessageMediaItem) : sprintf('%s(%s)', gettype($memberMessageTypeMessageMediaItem), var_export($memberMessageTypeMessageMediaItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public function setMessageMedia(?array $messageMedia = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType
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
