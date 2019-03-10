<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationEventPropertyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines properties associated with a particular event.
 * @subpackage Structs
 */
class NotificationEventPropertyType extends AbstractStructBase
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
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Specify property name associated with an particular event.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the value for the property.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NotificationEventPropertyType
     * @uses NotificationEventPropertyType::setEventType()
     * @uses NotificationEventPropertyType::setName()
     * @uses NotificationEventPropertyType::setValue()
     * @uses NotificationEventPropertyType::setAny()
     * @param string $eventType
     * @param string $name
     * @param string $value
     * @param \DOMDocument $any
     */
    public function __construct($eventType = null, $name = null, $value = null, \DOMDocument $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationEventPropertyNameCodeType::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
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
     * @return \macropage\ebaysdk\trading\StructType\NotificationEventPropertyType
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
