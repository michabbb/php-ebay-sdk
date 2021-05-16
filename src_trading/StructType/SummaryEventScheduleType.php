<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SummaryEventScheduleType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about a summary event schedule.
 * @subpackage Structs
 */
class SummaryEventScheduleType extends AbstractStructBase
{
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - documentation: The event type associated with this alert.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventType = null;
    /**
     * The SummaryPeriod
     * Meta information extracted from the WSDL
     * - documentation: The period of time for which to create a summary.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SummaryPeriod = null;
    /**
     * The Frequency
     * Meta information extracted from the WSDL
     * - documentation: How often the summary is to be delivered.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Frequency = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SummaryEventScheduleType
     * @uses SummaryEventScheduleType::setEventType()
     * @uses SummaryEventScheduleType::setSummaryPeriod()
     * @uses SummaryEventScheduleType::setFrequency()
     * @uses SummaryEventScheduleType::setAny()
     * @param string $eventType
     * @param string $summaryPeriod
     * @param string $frequency
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eventType = null, ?string $summaryPeriod = null, ?string $frequency = null, $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
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
     * Get SummaryPeriod value
     * @return string|null
     */
    public function getSummaryPeriod(): ?string
    {
        return $this->SummaryPeriod;
    }
    /**
     * Set SummaryPeriod value
     * @uses \macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $summaryPeriod
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
     */
    public function setSummaryPeriod(?string $summaryPeriod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType::valueIsValid($summaryPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType', is_array($summaryPeriod) ? implode(', ', $summaryPeriod) : var_export($summaryPeriod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SummaryWindowPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->SummaryPeriod = $summaryPeriod;
        
        return $this;
    }
    /**
     * Get Frequency value
     * @return string|null
     */
    public function getFrequency(): ?string
    {
        return $this->Frequency;
    }
    /**
     * Set Frequency value
     * @uses \macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $frequency
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
     */
    public function setFrequency(?string $frequency = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType::valueIsValid($frequency)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType', is_array($frequency) ? implode(', ', $frequency) : var_export($frequency, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SummaryFrequencyCodeType::getValidValues())), __LINE__);
        }
        $this->Frequency = $frequency;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SummaryEventScheduleType
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
