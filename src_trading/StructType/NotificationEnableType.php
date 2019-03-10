<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationEnableType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a notification event and whether the notification is enabled or disabled.
 * @subpackage Structs
 */
class NotificationEnableType extends AbstractStructBase
{
    /**
     * The EventType
     * Meta informations extracted from the WSDL
     * - documentation: The name of the notification event.
     * - minOccurs: 0
     * @var string
     */
    public $EventType;
    /**
     * The EventEnable
     * Meta informations extracted from the WSDL
     * - documentation: Whether the event is enabled or disabled.
     * - minOccurs: 0
     * @var string
     */
    public $EventEnable;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationEnableType
     * @uses NotificationEnableType::setEventType()
     * @uses NotificationEnableType::setEventEnable()
     * @uses NotificationEnableType::setAny()
     * @param string $eventType
     * @param string $eventEnable
     * @param \DOMDocument $any
     */
    public function __construct($eventType = null, $eventEnable = null, \DOMDocument $any = null)
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
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eventType
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType
     */
    public function setEventType($eventType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::valueIsValid($eventType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eventType, implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EventType = $eventType;
        return $this;
    }
    /**
     * Get EventEnable value
     * @return string|null
     */
    public function getEventEnable()
    {
        return $this->EventEnable;
    }
    /**
     * Set EventEnable value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eventEnable
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType
     */
    public function setEventEnable($eventEnable = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($eventEnable)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eventEnable, implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->EventEnable = $eventEnable;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NotificationEnableType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType
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
