<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberMessageExchangeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for message metadata.
 * @subpackage Structs
 */
class MemberMessageExchangeType extends AbstractStructBase
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: The item about which the question was asked. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The Question
     * Meta informations extracted from the WSDL
     * - documentation: Contains all the information about the question being asked. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public $Question;
    /**
     * The Response
     * Meta informations extracted from the WSDL
     * - documentation: An answer to the question. Returned if the parent container is returned. <br/><br/> For GetAdFormatLeads, returned if the seller responded to the lead's question. Contains the body of the seller's response message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Response;
    /**
     * The MessageStatus
     * Meta informations extracted from the WSDL
     * - documentation: Status of the message. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string
     */
    public $MessageStatus;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date the message was created. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string
     */
    public $CreationDate;
    /**
     * The LastModifiedDate
     * Meta informations extracted from the WSDL
     * - documentation: Date the message was last modified. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedDate;
    /**
     * The MessageMedia
     * Meta informations extracted from the WSDL
     * - documentation: Media details stored as part of the message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MessageMediaType[]
     */
    public $MessageMedia;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MemberMessageExchangeType
     * @uses MemberMessageExchangeType::setItem()
     * @uses MemberMessageExchangeType::setQuestion()
     * @uses MemberMessageExchangeType::setResponse()
     * @uses MemberMessageExchangeType::setMessageStatus()
     * @uses MemberMessageExchangeType::setCreationDate()
     * @uses MemberMessageExchangeType::setLastModifiedDate()
     * @uses MemberMessageExchangeType::setMessageMedia()
     * @uses MemberMessageExchangeType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageType $question
     * @param string[] $response
     * @param string $messageStatus
     * @param string $creationDate
     * @param string $lastModifiedDate
     * @param \macropage\ebaysdk\trading\StructType\MessageMediaType[] $messageMedia
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ItemType $item = null, \macropage\ebaysdk\trading\StructType\MemberMessageType $question = null, array $response = array(), $messageStatus = null, $creationDate = null, $lastModifiedDate = null, array $messageMedia = array(), \DOMDocument $any = null)
    {
        $this
            ->setItem($item)
            ->setQuestion($question)
            ->setResponse($response)
            ->setMessageStatus($messageStatus)
            ->setCreationDate($creationDate)
            ->setLastModifiedDate($lastModifiedDate)
            ->setMessageMedia($messageMedia)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get Question value
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType|null
     */
    public function getQuestion()
    {
        return $this->Question;
    }
    /**
     * Set Question value
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageType $question
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setQuestion(\macropage\ebaysdk\trading\StructType\MemberMessageType $question = null)
    {
        $this->Question = $question;
        return $this;
    }
    /**
     * Get Response value
     * @return string[]|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @throws \InvalidArgumentException
     * @param string[] $response
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setResponse(array $response = array())
    {
        foreach ($response as $memberMessageExchangeTypeResponseItem) {
            // validation for constraint: itemType
            if (!is_string($memberMessageExchangeTypeResponseItem)) {
                throw new \InvalidArgumentException(sprintf('The Response property can only contain items of string, "%s" given', is_object($memberMessageExchangeTypeResponseItem) ? get_class($memberMessageExchangeTypeResponseItem) : gettype($memberMessageExchangeTypeResponseItem)), __LINE__);
            }
        }
        $this->Response = $response;
        return $this;
    }
    /**
     * Add item to Response value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function addToResponse($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Response property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Response[] = $item;
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
     * Get LastModifiedDate value
     * @return string|null
     */
    public function getLastModifiedDate()
    {
        return $this->LastModifiedDate;
    }
    /**
     * Set LastModifiedDate value
     * @param string $lastModifiedDate
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setLastModifiedDate($lastModifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedDate) && !is_string($lastModifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedDate)), __LINE__);
        }
        $this->LastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * Get MessageMedia value
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType[]|null
     */
    public function getMessageMedia()
    {
        return $this->MessageMedia;
    }
    /**
     * Set MessageMedia value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MessageMediaType[] $messageMedia
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setMessageMedia(array $messageMedia = array())
    {
        foreach ($messageMedia as $memberMessageExchangeTypeMessageMediaItem) {
            // validation for constraint: itemType
            if (!$memberMessageExchangeTypeMessageMediaItem instanceof \macropage\ebaysdk\trading\StructType\MessageMediaType) {
                throw new \InvalidArgumentException(sprintf('The MessageMedia property can only contain items of \macropage\ebaysdk\trading\StructType\MessageMediaType, "%s" given', is_object($memberMessageExchangeTypeMessageMediaItem) ? get_class($memberMessageExchangeTypeMessageMediaItem) : gettype($memberMessageExchangeTypeMessageMediaItem)), __LINE__);
            }
        }
        $this->MessageMedia = $messageMedia;
        return $this;
    }
    /**
     * Add item to MessageMedia value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MessageMediaType $item
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function addToMessageMedia(\macropage\ebaysdk\trading\StructType\MessageMediaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MessageMediaType) {
            throw new \InvalidArgumentException(sprintf('The MessageMedia property can only contain items of \macropage\ebaysdk\trading\StructType\MessageMediaType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MessageMedia[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
