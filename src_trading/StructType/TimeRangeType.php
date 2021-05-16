<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeRangeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the Date range.
 * @subpackage Structs
 */
class TimeRangeType extends AbstractStructBase
{
    /**
     * The TimeFrom
     * Meta information extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) date to be used in a date range.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeFrom = null;
    /**
     * The TimeTo
     * Meta information extracted from the WSDL
     * - documentation: Specifies the latest (most recent) date to be used in a date range.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeTo = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TimeRangeType
     * @uses TimeRangeType::setTimeFrom()
     * @uses TimeRangeType::setTimeTo()
     * @uses TimeRangeType::setAny()
     * @param string $timeFrom
     * @param string $timeTo
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $timeFrom = null, ?string $timeTo = null, $any = null)
    {
        $this
            ->setTimeFrom($timeFrom)
            ->setTimeTo($timeTo)
            ->setAny($any);
    }
    /**
     * Get TimeFrom value
     * @return string|null
     */
    public function getTimeFrom(): ?string
    {
        return $this->TimeFrom;
    }
    /**
     * Set TimeFrom value
     * @param string $timeFrom
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType
     */
    public function setTimeFrom(?string $timeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($timeFrom) && !is_string($timeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeFrom, true), gettype($timeFrom)), __LINE__);
        }
        $this->TimeFrom = $timeFrom;
        
        return $this;
    }
    /**
     * Get TimeTo value
     * @return string|null
     */
    public function getTimeTo(): ?string
    {
        return $this->TimeTo;
    }
    /**
     * Set TimeTo value
     * @param string $timeTo
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType
     */
    public function setTimeTo(?string $timeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($timeTo) && !is_string($timeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeTo, true), gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType
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
