<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesAlertType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class MyMessagesAlertType extends AbstractStructBase
{
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sender = null;
    /**
     * The RecipientUserID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecipientUserID = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Priority = null;
    /**
     * The AlertID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | This type is deprecated.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AlertID = null;
    /**
     * The ExternalAlertID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalAlertID = null;
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContentType = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The ResolutionStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResolutionStatus = null;
    /**
     * The Read
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Read = null;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The ReceiveDate
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReceiveDate = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The ResolutionDate
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResolutionDate = null;
    /**
     * The LastReadDate
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastReadDate = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The IsTimedResolution
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsTimedResolution = null;
    /**
     * The ActionURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActionURL = null;
    /**
     * The ResponseDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $ResponseDetails = null;
    /**
     * The ForwardDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $ForwardDetails = null;
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesFolderType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyMessagesFolderType $Folder = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyMessagesAlertType
     * @uses MyMessagesAlertType::setSender()
     * @uses MyMessagesAlertType::setRecipientUserID()
     * @uses MyMessagesAlertType::setSubject()
     * @uses MyMessagesAlertType::setPriority()
     * @uses MyMessagesAlertType::setAlertID()
     * @uses MyMessagesAlertType::setExternalAlertID()
     * @uses MyMessagesAlertType::setContentType()
     * @uses MyMessagesAlertType::setText()
     * @uses MyMessagesAlertType::setResolutionStatus()
     * @uses MyMessagesAlertType::setRead()
     * @uses MyMessagesAlertType::setCreationDate()
     * @uses MyMessagesAlertType::setReceiveDate()
     * @uses MyMessagesAlertType::setExpirationDate()
     * @uses MyMessagesAlertType::setResolutionDate()
     * @uses MyMessagesAlertType::setLastReadDate()
     * @uses MyMessagesAlertType::setItemID()
     * @uses MyMessagesAlertType::setIsTimedResolution()
     * @uses MyMessagesAlertType::setActionURL()
     * @uses MyMessagesAlertType::setResponseDetails()
     * @uses MyMessagesAlertType::setForwardDetails()
     * @uses MyMessagesAlertType::setFolder()
     * @uses MyMessagesAlertType::setAny()
     * @param string $sender
     * @param string $recipientUserID
     * @param string $subject
     * @param string $priority
     * @param string $alertID
     * @param string $externalAlertID
     * @param string $contentType
     * @param string $text
     * @param string $resolutionStatus
     * @param bool $read
     * @param string $creationDate
     * @param string $receiveDate
     * @param string $expirationDate
     * @param string $resolutionDate
     * @param string $lastReadDate
     * @param string $itemID
     * @param bool $isTimedResolution
     * @param string $actionURL
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $sender = null, ?string $recipientUserID = null, ?string $subject = null, ?string $priority = null, ?string $alertID = null, ?string $externalAlertID = null, ?string $contentType = null, ?string $text = null, ?string $resolutionStatus = null, ?bool $read = null, ?string $creationDate = null, ?string $receiveDate = null, ?string $expirationDate = null, ?string $resolutionDate = null, ?string $lastReadDate = null, ?string $itemID = null, ?bool $isTimedResolution = null, ?string $actionURL = null, ?\macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails = null, ?\macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails = null, ?\macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder = null, $any = null)
    {
        $this
            ->setSender($sender)
            ->setRecipientUserID($recipientUserID)
            ->setSubject($subject)
            ->setPriority($priority)
            ->setAlertID($alertID)
            ->setExternalAlertID($externalAlertID)
            ->setContentType($contentType)
            ->setText($text)
            ->setResolutionStatus($resolutionStatus)
            ->setRead($read)
            ->setCreationDate($creationDate)
            ->setReceiveDate($receiveDate)
            ->setExpirationDate($expirationDate)
            ->setResolutionDate($resolutionDate)
            ->setLastReadDate($lastReadDate)
            ->setItemID($itemID)
            ->setIsTimedResolution($isTimedResolution)
            ->setActionURL($actionURL)
            ->setResponseDetails($responseDetails)
            ->setForwardDetails($forwardDetails)
            ->setFolder($folder)
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * Get Priority value
     * @return string|null
     */
    public function getPriority(): ?string
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param string $priority
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setPriority(?string $priority = null): self
    {
        // validation for constraint: string
        if (!is_null($priority) && !is_string($priority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        
        return $this;
    }
    /**
     * Get AlertID value
     * @return string|null
     */
    public function getAlertID(): ?string
    {
        return $this->AlertID;
    }
    /**
     * Set AlertID value
     * @param string $alertID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setAlertID(?string $alertID = null): self
    {
        // validation for constraint: string
        if (!is_null($alertID) && !is_string($alertID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alertID, true), gettype($alertID)), __LINE__);
        }
        $this->AlertID = $alertID;
        
        return $this;
    }
    /**
     * Get ExternalAlertID value
     * @return string|null
     */
    public function getExternalAlertID(): ?string
    {
        return $this->ExternalAlertID;
    }
    /**
     * Set ExternalAlertID value
     * @param string $externalAlertID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setExternalAlertID(?string $externalAlertID = null): self
    {
        // validation for constraint: string
        if (!is_null($externalAlertID) && !is_string($externalAlertID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalAlertID, true), gettype($externalAlertID)), __LINE__);
        }
        $this->ExternalAlertID = $externalAlertID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * Get ResolutionStatus value
     * @return string|null
     */
    public function getResolutionStatus(): ?string
    {
        return $this->ResolutionStatus;
    }
    /**
     * Set ResolutionStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resolutionStatus
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setResolutionStatus(?string $resolutionStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode::valueIsValid($resolutionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode', is_array($resolutionStatus) ? implode(', ', $resolutionStatus) : var_export($resolutionStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode::getValidValues())), __LINE__);
        }
        $this->ResolutionStatus = $resolutionStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * Get ResolutionDate value
     * @return string|null
     */
    public function getResolutionDate(): ?string
    {
        return $this->ResolutionDate;
    }
    /**
     * Set ResolutionDate value
     * @param string $resolutionDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setResolutionDate(?string $resolutionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($resolutionDate) && !is_string($resolutionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resolutionDate, true), gettype($resolutionDate)), __LINE__);
        }
        $this->ResolutionDate = $resolutionDate;
        
        return $this;
    }
    /**
     * Get LastReadDate value
     * @return string|null
     */
    public function getLastReadDate(): ?string
    {
        return $this->LastReadDate;
    }
    /**
     * Set LastReadDate value
     * @param string $lastReadDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setLastReadDate(?string $lastReadDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastReadDate) && !is_string($lastReadDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastReadDate, true), gettype($lastReadDate)), __LINE__);
        }
        $this->LastReadDate = $lastReadDate;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * Get IsTimedResolution value
     * @return bool|null
     */
    public function getIsTimedResolution(): ?bool
    {
        return $this->IsTimedResolution;
    }
    /**
     * Set IsTimedResolution value
     * @param bool $isTimedResolution
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setIsTimedResolution(?bool $isTimedResolution = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTimedResolution) && !is_bool($isTimedResolution)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTimedResolution, true), gettype($isTimedResolution)), __LINE__);
        }
        $this->IsTimedResolution = $isTimedResolution;
        
        return $this;
    }
    /**
     * Get ActionURL value
     * @return string|null
     */
    public function getActionURL(): ?string
    {
        return $this->ActionURL;
    }
    /**
     * Set ActionURL value
     * @param string $actionURL
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setActionURL(?string $actionURL = null): self
    {
        // validation for constraint: string
        if (!is_null($actionURL) && !is_string($actionURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionURL, true), gettype($actionURL)), __LINE__);
        }
        $this->ActionURL = $actionURL;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setFolder(?\macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder = null): self
    {
        $this->Folder = $folder;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
