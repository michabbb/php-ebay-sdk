<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnouncementMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ShippingServiceDetails.DeprecationDetails</b> container that is returned in the <b>GeteBayDetails</b> response. The <b>ShippingServiceDetails.DeprecationDetails</b> container consists of information related to a
 * deprecated shipping service.
 * @subpackage Structs
 */
class AnnouncementMessageType extends AbstractStructBase
{
    /**
     * The AnnouncementStartTime
     * Meta informations extracted from the WSDL
     * - documentation: The date on which an upcoming event can start to be announced.
     * - minOccurs: 0
     * @var string
     */
    public $AnnouncementStartTime;
    /**
     * The EventTime
     * Meta informations extracted from the WSDL
     * - documentation: The date on which the event occurs. This is also the ending date of the announcement that lead up to the event (see <b>AnnouncementStartTime</b>).
     * - minOccurs: 0
     * @var string
     */
    public $EventTime;
    /**
     * The MessageType
     * Meta informations extracted from the WSDL
     * - documentation: Control of what messages to display.
     * - minOccurs: 0
     * @var string
     */
    public $MessageType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AnnouncementMessageType
     * @uses AnnouncementMessageType::setAnnouncementStartTime()
     * @uses AnnouncementMessageType::setEventTime()
     * @uses AnnouncementMessageType::setMessageType()
     * @uses AnnouncementMessageType::setAny()
     * @param string $announcementStartTime
     * @param string $eventTime
     * @param string $messageType
     * @param \DOMDocument $any
     */
    public function __construct($announcementStartTime = null, $eventTime = null, $messageType = null, \DOMDocument $any = null)
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
    public function getAnnouncementStartTime()
    {
        return $this->AnnouncementStartTime;
    }
    /**
     * Set AnnouncementStartTime value
     * @param string $announcementStartTime
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
     */
    public function setAnnouncementStartTime($announcementStartTime = null)
    {
        // validation for constraint: string
        if (!is_null($announcementStartTime) && !is_string($announcementStartTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($announcementStartTime)), __LINE__);
        }
        $this->AnnouncementStartTime = $announcementStartTime;
        return $this;
    }
    /**
     * Get EventTime value
     * @return string|null
     */
    public function getEventTime()
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
     */
    public function setEventTime($eventTime = null)
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventTime)), __LINE__);
        }
        $this->EventTime = $eventTime;
        return $this;
    }
    /**
     * Get MessageType value
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @uses \macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageType
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
     */
    public function setMessageType($messageType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType::valueIsValid($messageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $messageType, implode(', ', \macropage\ebaysdk\trading\EnumType\AnnouncementMessageCodeType::getValidValues())), __LINE__);
        }
        $this->MessageType = $messageType;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AnnouncementMessageType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
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
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType
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
