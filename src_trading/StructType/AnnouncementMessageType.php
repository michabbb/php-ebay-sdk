<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnouncementMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ShippingServiceDetails.DeprecationDetails</b> container that is returned in the <b>GeteBayDetails</b> response. The <b>ShippingServiceDetails.DeprecationDetails</b> container consists of information related to a
 * deprecated shipping service.
 * @subpackage Structs
 */
class AnnouncementMessageType extends AbstractStructBase
{
    /**
     * The AnnouncementStartTime
     * Meta information extracted from the WSDL
     * - documentation: The date on which an upcoming event can start to be announced.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AnnouncementStartTime = null;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - documentation: The date on which the event occurs. This is also the ending date of the announcement that lead up to the event (see <b>AnnouncementStartTime</b>).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventTime = null;
    /**
     * The MessageType
     * Meta information extracted from the WSDL
     * - documentation: Control of what messages to display.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageType = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for AnnouncementMessageType
     * @uses AnnouncementMessageType::setAnnouncementStartTime()
     * @uses AnnouncementMessageType::setEventTime()
     * @uses AnnouncementMessageType::setMessageType()
     * @uses AnnouncementMessageType::setAny()
     * @param string $announcementStartTime
     * @param string $eventTime
     * @param string $messageType
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $announcementStartTime = null, ?string $eventTime = null, ?string $messageType = null, $any = null)
    {
        $this
            ->setAnnouncementStartTime($announcementStartTime)
            ->setEventTime($eventTime)
            ->setMessageType($messageType)
            ->setAny($any);
    }
    /**
     * Get AnnouncementStartTime value
     * @return string|null
     */
    public function getAnnouncementStartTime(): ?string
    {
        return $this->AnnouncementStartTime;
    }
    /**
     * Set AnnouncementStartTime value
     * @param string $announcementStartTime
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
     */
    public function setAnnouncementStartTime(?string $announcementStartTime = null): self
    {
        // validation for constraint: string
        if (!is_null($announcementStartTime) && !is_string($announcementStartTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($announcementStartTime, true), gettype($announcementStartTime)), __LINE__);
        }
        $this->AnnouncementStartTime = $announcementStartTime;
        
        return $this;
    }
    /**
     * Get EventTime value
     * @return string|null
     */
    public function getEventTime(): ?string
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
     */
    public function setEventTime(?string $eventTime = null): self
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTime, true), gettype($eventTime)), __LINE__);
        }
        $this->EventTime = $eventTime;
        
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
     * @uses \macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $messageType
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType::valueIsValid($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType', is_array($messageType) ? implode(', ', $messageType) : var_export($messageType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType::getValidValues())), __LINE__);
        }
        $this->MessageType = $messageType;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
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
