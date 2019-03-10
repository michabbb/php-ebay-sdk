<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesAlertType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class MyMessagesAlertType extends AbstractStructBase
{
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Sender;
    /**
     * The RecipientUserID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RecipientUserID;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Priority;
    /**
     * The AlertID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. | This type is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AlertID;
    /**
     * The ExternalAlertID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalAlertID;
    /**
     * The ContentType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ContentType;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The ResolutionStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ResolutionStatus;
    /**
     * The Read
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $Read;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CreationDate;
    /**
     * The ReceiveDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ReceiveDate;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * The ResolutionDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ResolutionDate;
    /**
     * The LastReadDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $LastReadDate;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The IsTimedResolution
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $IsTimedResolution;
    /**
     * The ActionURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ActionURL;
    /**
     * The ResponseDetails
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType
     */
    public $ResponseDetails;
    /**
     * The ForwardDetails
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
     */
    public $ForwardDetails;
    /**
     * The Folder
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesFolderType
     */
    public $Folder;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($sender = null, $recipientUserID = null, $subject = null, $priority = null, $alertID = null, $externalAlertID = null, $contentType = null, $text = null, $resolutionStatus = null, $read = null, $creationDate = null, $receiveDate = null, $expirationDate = null, $resolutionDate = null, $lastReadDate = null, $itemID = null, $isTimedResolution = null, $actionURL = null, \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails = null, \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails = null, \macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder = null, \DOMDocument $any = null)
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
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param string $sender
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setSender($sender = null)
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sender)), __LINE__);
        }
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get RecipientUserID value
     * @return string|null
     */
    public function getRecipientUserID()
    {
        return $this->RecipientUserID;
    }
    /**
     * Set RecipientUserID value
     * @param string $recipientUserID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setRecipientUserID($recipientUserID = null)
    {
        // validation for constraint: string
        if (!is_null($recipientUserID) && !is_string($recipientUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientUserID)), __LINE__);
        }
        $this->RecipientUserID = $recipientUserID;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get Priority value
     * @return string|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param string $priority
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: string
        if (!is_null($priority) && !is_string($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get AlertID value
     * @return string|null
     */
    public function getAlertID()
    {
        return $this->AlertID;
    }
    /**
     * Set AlertID value
     * @param string $alertID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setAlertID($alertID = null)
    {
        // validation for constraint: string
        if (!is_null($alertID) && !is_string($alertID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alertID)), __LINE__);
        }
        $this->AlertID = $alertID;
        return $this;
    }
    /**
     * Get ExternalAlertID value
     * @return string|null
     */
    public function getExternalAlertID()
    {
        return $this->ExternalAlertID;
    }
    /**
     * Set ExternalAlertID value
     * @param string $externalAlertID
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setExternalAlertID($externalAlertID = null)
    {
        // validation for constraint: string
        if (!is_null($externalAlertID) && !is_string($externalAlertID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalAlertID)), __LINE__);
        }
        $this->ExternalAlertID = $externalAlertID;
        return $this;
    }
    /**
     * Get ContentType value
     * @return string|null
     */
    public function getContentType()
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @param string $contentType
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentType)), __LINE__);
        }
        $this->ContentType = $contentType;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get ResolutionStatus value
     * @return string|null
     */
    public function getResolutionStatus()
    {
        return $this->ResolutionStatus;
    }
    /**
     * Set ResolutionStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resolutionStatus
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setResolutionStatus($resolutionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode::valueIsValid($resolutionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $resolutionStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\MyMessagesAlertResolutionStatusCode::getValidValues())), __LINE__);
        }
        $this->ResolutionStatus = $resolutionStatus;
        return $this;
    }
    /**
     * Get Read value
     * @return bool|null
     */
    public function getRead()
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param bool $read
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setRead($read = null)
    {
        // validation for constraint: boolean
        if (!is_null($read) && !is_bool($read)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($read)), __LINE__);
        }
        $this->Read = $read;
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get ReceiveDate value
     * @return string|null
     */
    public function getReceiveDate()
    {
        return $this->ReceiveDate;
    }
    /**
     * Set ReceiveDate value
     * @param string $receiveDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setReceiveDate($receiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($receiveDate) && !is_string($receiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiveDate)), __LINE__);
        }
        $this->ReceiveDate = $receiveDate;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get ResolutionDate value
     * @return string|null
     */
    public function getResolutionDate()
    {
        return $this->ResolutionDate;
    }
    /**
     * Set ResolutionDate value
     * @param string $resolutionDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setResolutionDate($resolutionDate = null)
    {
        // validation for constraint: string
        if (!is_null($resolutionDate) && !is_string($resolutionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resolutionDate)), __LINE__);
        }
        $this->ResolutionDate = $resolutionDate;
        return $this;
    }
    /**
     * Get LastReadDate value
     * @return string|null
     */
    public function getLastReadDate()
    {
        return $this->LastReadDate;
    }
    /**
     * Set LastReadDate value
     * @param string $lastReadDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setLastReadDate($lastReadDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastReadDate) && !is_string($lastReadDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastReadDate)), __LINE__);
        }
        $this->LastReadDate = $lastReadDate;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * Get IsTimedResolution value
     * @return bool|null
     */
    public function getIsTimedResolution()
    {
        return $this->IsTimedResolution;
    }
    /**
     * Set IsTimedResolution value
     * @param bool $isTimedResolution
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setIsTimedResolution($isTimedResolution = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTimedResolution) && !is_bool($isTimedResolution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTimedResolution)), __LINE__);
        }
        $this->IsTimedResolution = $isTimedResolution;
        return $this;
    }
    /**
     * Get ActionURL value
     * @return string|null
     */
    public function getActionURL()
    {
        return $this->ActionURL;
    }
    /**
     * Set ActionURL value
     * @param string $actionURL
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setActionURL($actionURL = null)
    {
        // validation for constraint: string
        if (!is_null($actionURL) && !is_string($actionURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionURL)), __LINE__);
        }
        $this->ActionURL = $actionURL;
        return $this;
    }
    /**
     * Get ResponseDetails value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType|null
     */
    public function getResponseDetails()
    {
        return $this->ResponseDetails;
    }
    /**
     * Set ResponseDetails value
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setResponseDetails(\macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType $responseDetails = null)
    {
        $this->ResponseDetails = $responseDetails;
        return $this;
    }
    /**
     * Get ForwardDetails value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType|null
     */
    public function getForwardDetails()
    {
        return $this->ForwardDetails;
    }
    /**
     * Set ForwardDetails value
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setForwardDetails(\macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType $forwardDetails = null)
    {
        $this->ForwardDetails = $forwardDetails;
        return $this;
    }
    /**
     * Get Folder value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesFolderType|null
     */
    public function getFolder()
    {
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
     */
    public function setFolder(\macropage\ebaysdk\trading\StructType\MyMessagesFolderType $folder = null)
    {
        $this->Folder = $folder;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MyMessagesAlertType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesAlertType
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
