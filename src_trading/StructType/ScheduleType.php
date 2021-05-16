<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScheduleType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ScheduleType extends AbstractStructBase
{
    /**
     * The ScheduleID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ScheduleID = null;
    /**
     * The ScheduleTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ScheduleTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ScheduleType
     * @uses ScheduleType::setScheduleID()
     * @uses ScheduleType::setScheduleTime()
     * @uses ScheduleType::setAny()
     * @param int $scheduleID
     * @param string $scheduleTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $scheduleID = null, ?string $scheduleTime = null, $any = null)
    {
        $this
            ->setScheduleID($scheduleID)
            ->setScheduleTime($scheduleTime)
            ->setAny($any);
    }
    /**
     * Get ScheduleID value
     * @return int|null
     */
    public function getScheduleID(): ?int
    {
        return $this->ScheduleID;
    }
    /**
     * Set ScheduleID value
     * @param int $scheduleID
     * @return \macropage\ebaysdk\trading\StructType\ScheduleType
     */
    public function setScheduleID(?int $scheduleID = null): self
    {
        // validation for constraint: int
        if (!is_null($scheduleID) && !(is_int($scheduleID) || ctype_digit($scheduleID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scheduleID, true), gettype($scheduleID)), __LINE__);
        }
        $this->ScheduleID = $scheduleID;
        
        return $this;
    }
    /**
     * Get ScheduleTime value
     * @return string|null
     */
    public function getScheduleTime(): ?string
    {
        return $this->ScheduleTime;
    }
    /**
     * Set ScheduleTime value
     * @param string $scheduleTime
     * @return \macropage\ebaysdk\trading\StructType\ScheduleType
     */
    public function setScheduleTime(?string $scheduleTime = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduleTime) && !is_string($scheduleTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduleTime, true), gettype($scheduleTime)), __LINE__);
        }
        $this->ScheduleTime = $scheduleTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ScheduleType
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
