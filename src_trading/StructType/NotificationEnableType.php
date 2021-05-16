<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationEnableType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies a notification event and whether the notification is enabled or disabled.
 * @subpackage Structs
 */
class NotificationEnableType extends AbstractStructBase
{
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - documentation: The name of the notification event.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventType = null;
    /**
     * The EventEnable
     * Meta information extracted from the WSDL
     * - documentation: Whether the event is enabled or disabled.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventEnable = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for NotificationEnableType
     * @uses NotificationEnableType::setEventType()
     * @uses NotificationEnableType::setEventEnable()
     * @uses NotificationEnableType::setAny()
     * @param string $eventType
     * @param string $eventEnable
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eventType = null, ?string $eventEnable = null, $any = null)
    {
        $this
            ->setEventType($eventType)
            ->setEventEnable($eventEnable)
            ->setAny($any);
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eventType
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType
     */
    public function setEventType(?string $eventType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($eventType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType', is_array($eventType) ? implode(', ', $eventType) : var_export($eventType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EventType = $eventType;
        
        return $this;
    }
    /**
     * Get EventEnable value
     * @return string|null
     */
    public function getEventEnable(): ?string
    {
        return $this->EventEnable;
    }
    /**
     * Set EventEnable value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eventEnable
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType
     */
    public function setEventEnable(?string $eventEnable = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($eventEnable)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EnableCodeType', is_array($eventEnable) ? implode(', ', $eventEnable) : var_export($eventEnable, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->EventEnable = $eventEnable;
        
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType
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
