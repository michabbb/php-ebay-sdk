<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationEventPropertyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines properties associated with a particular event.
 * @subpackage Structs
 */
class NotificationEventPropertyType extends AbstractStructBase
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
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Specify property name associated with an particular event.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Specifies the value for the property.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for NotificationEventPropertyType
     * @uses NotificationEventPropertyType::setEventType()
     * @uses NotificationEventPropertyType::setName()
     * @uses NotificationEventPropertyType::setValue()
     * @uses NotificationEventPropertyType::setAny()
     * @param string $eventType
     * @param string $name
     * @param string $value
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eventType = null, ?string $name = null, ?string $value = null, $any = null)
    {
        $this
            ->setEventType($eventType)
            ->setName($name)
            ->setValue($value)
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
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
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
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
