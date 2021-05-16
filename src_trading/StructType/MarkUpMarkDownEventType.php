<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkUpMarkDownEventType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes an individual mark-up or mark-down event. eBay will automatically mark an application as down if attempts to deliver a notification fail repeatedly. eBay may mark an application down manually under certain circumstances.
 * @subpackage Structs
 */
class MarkUpMarkDownEventType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Whether the application has been marked up or marked down.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - documentation: Time when the application was marked up or marked down.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Time = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Describes how the application was marked down, automatically or manually. When an application is automatically marked down, eBay will ping the application periodically, and if communication is restored, eBay will automatically mark
     * the application up. If your application is marked down manually, you must contact eBay Developer Support to get your application marked up. A Reason is not provided for mark up events.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MarkUpMarkDownEventType
     * @uses MarkUpMarkDownEventType::setType()
     * @uses MarkUpMarkDownEventType::setTime()
     * @uses MarkUpMarkDownEventType::setReason()
     * @uses MarkUpMarkDownEventType::setAny()
     * @param string $type
     * @param string $time
     * @param string $reason
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $type = null, ?string $time = null, ?string $reason = null, $any = null)
    {
        $this
            ->setType($type)
            ->setTime($time)
            ->setReason($reason)
            ->setAny($any);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MarkUpMarkDownEventTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MarkUpMarkDownEventType
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
