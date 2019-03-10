<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SummaryEventScheduleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details about a summary event schedule.
 * @subpackage Structs
 */
class SummaryEventScheduleType extends AbstractStructBase
{
    /**
     * The EventType
     * Meta informations extracted from the WSDL
     * - documentation: The event type associated with this alert.
     * - minOccurs: 0
     * @var string
     */
    public $EventType;
    /**
     * The SummaryPeriod
     * Meta informations extracted from the WSDL
     * - documentation: The period of time for which to create a summary.
     * - minOccurs: 0
     * @var string
     */
    public $SummaryPeriod;
    /**
     * The Frequency
     * Meta informations extracted from the WSDL
     * - documentation: How often the summary is to be delivered.
     * - minOccurs: 0
     * @var string
     */
    public $Frequency;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SummaryEventScheduleType
     * @uses SummaryEventScheduleType::setEventType()
     * @uses SummaryEventScheduleType::setSummaryPeriod()
     * @uses SummaryEventScheduleType::setFrequency()
     * @uses SummaryEventScheduleType::setAny()
     * @param string $eventType
     * @param string $summaryPeriod
     * @param string $frequency
     * @param \DOMDocument $any
     */
    public function __construct($eventType = null, $summaryPeriod = null, $frequency = null, \DOMDocument $any = null)
    {
        $this
            ->setEventType($eventType)
            ->setSummaryPeriod($summaryPeriod)
            ->setFrequency($frequency)
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
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
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
     * Get SummaryPeriod value
     * @return string|null
     */
    public function getSummaryPeriod()
    {
        return $this->SummaryPeriod;
    }
    /**
     * Set SummaryPeriod value
     * @uses \macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $summaryPeriod
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
     */
    public function setSummaryPeriod($summaryPeriod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType::valueIsValid($summaryPeriod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $summaryPeriod, implode(', ', \macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->SummaryPeriod = $summaryPeriod;
        return $this;
    }
    /**
     * Get Frequency value
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }
    /**
     * Set Frequency value
     * @uses \macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $frequency
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
     */
    public function setFrequency($frequency = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType::valueIsValid($frequency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $frequency, implode(', ', \macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType::getValidValues())), __LINE__);
        }
        $this->Frequency = $frequency;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
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
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
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
