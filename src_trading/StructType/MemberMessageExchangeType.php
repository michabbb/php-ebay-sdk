<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MemberMessageExchangeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for message metadata.
 * @subpackage Structs
 */
class MemberMessageExchangeType extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: The item about which the question was asked. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * The Question
     * Meta information extracted from the WSDL
     * - documentation: Contains all the information about the question being asked. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MemberMessageType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MemberMessageType $Question = null;
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - documentation: An answer to the question. Returned if the parent container is returned. <br/><br/> For GetAdFormatLeads, returned if the seller responded to the lead's question. Contains the body of the seller's response message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Response = null;
    /**
     * The MessageStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of the message. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageStatus = null;
    /**
     * The CreationDate
     * Meta information extracted from the WSDL
     * - documentation: Date the message was created. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationDate = null;
    /**
     * The LastModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: Date the message was last modified. Returned if the parent container is returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastModifiedDate = null;
    /**
     * The MessageMedia
     * Meta information extracted from the WSDL
     * - documentation: Media details stored as part of the message.
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ItemType $item = null, ?\macropage\ebaysdk\trading\StructType\MemberMessageType $question = null, ?array $response = null, ?string $messageStatus = null, ?string $creationDate = null, ?string $lastModifiedDate = null, ?array $messageMedia = null, $any = null)
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
    public function getItem(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setItem(?\macropage\ebaysdk\trading\StructType\ItemType $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Get Question value
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType|null
     */
    public function getQuestion(): ?\macropage\ebaysdk\trading\StructType\MemberMessageType
    {
        return $this->Question;
    }
    /**
     * Set Question value
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageType $question
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setQuestion(?\macropage\ebaysdk\trading\StructType\MemberMessageType $question = null): self
    {
        $this->Question = $question;
        
        return $this;
    }
    /**
     * Get Response value
     * @return string[]
     */
    public function getResponse(): ?array
    {
        return $this->Response;
    }
    /**
     * This method is responsible for validating the values passed to the setResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponseForArrayConstraintsFromSetResponse(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $memberMessageExchangeTypeResponseItem) {
            // validation for constraint: itemType
            if (!is_string($memberMessageExchangeTypeResponseItem)) {
                $invalidValues[] = is_object($memberMessageExchangeTypeResponseItem) ? get_class($memberMessageExchangeTypeResponseItem) : sprintf('%s(%s)', gettype($memberMessageExchangeTypeResponseItem), var_export($memberMessageExchangeTypeResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Response value
     * @throws InvalidArgumentException
     * @param string[] $response
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setResponse(?array $response = null): self
    {
        // validation for constraint: array
        if ('' !== ($responseArrayErrorMessage = self::validateResponseForArrayConstraintsFromSetResponse($response))) {
            throw new InvalidArgumentException($responseArrayErrorMessage, __LINE__);
        }
        $this->Response = $response;
        
        return $this;
    }
    /**
     * Add item to Response value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function addToResponse(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Response property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
     * Get LastModifiedDate value
     * @return string|null
     */
    public function getLastModifiedDate(): ?string
    {
        return $this->LastModifiedDate;
    }
    /**
     * Set LastModifiedDate value
     * @param string $lastModifiedDate
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
     */
    public function setLastModifiedDate(?string $lastModifiedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedDate) && !is_string($lastModifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedDate, true), gettype($lastModifiedDate)), __LINE__);
        }
        $this->LastModifiedDate = $lastModifiedDate;
        
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
        foreach ($values as $memberMessageExchangeTypeMessageMediaItem) {
            // validation for constraint: itemType
            if (!$memberMessageExchangeTypeMessageMediaItem instanceof \macropage\ebaysdk\trading\StructType\MessageMediaType) {
                $invalidValues[] = is_object($memberMessageExchangeTypeMessageMediaItem) ? get_class($memberMessageExchangeTypeMessageMediaItem) : sprintf('%s(%s)', gettype($memberMessageExchangeTypeMessageMediaItem), var_export($memberMessageExchangeTypeMessageMediaItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
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
