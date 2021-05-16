<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SchedulingInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information for scheduling limits for the user.
 * @subpackage Structs
 */
class SchedulingInfoType extends AbstractStructBase
{
    /**
     * The MaxScheduledMinutes
     * Meta information extracted from the WSDL
     * - documentation: Maximum number of minutes that a listing may be scheduled in advance of its going live.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxScheduledMinutes = null;
    /**
     * The MinScheduledMinutes
     * Meta information extracted from the WSDL
     * - documentation: Minimum number of minutes that a listing may be scheduled in advance of its going live.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinScheduledMinutes = null;
    /**
     * The MaxScheduledItems
     * Meta information extracted from the WSDL
     * - documentation: Maximum number of Items that a user may schedule.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxScheduledItems = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SchedulingInfoType
     * @uses SchedulingInfoType::setMaxScheduledMinutes()
     * @uses SchedulingInfoType::setMinScheduledMinutes()
     * @uses SchedulingInfoType::setMaxScheduledItems()
     * @uses SchedulingInfoType::setAny()
     * @param int $maxScheduledMinutes
     * @param int $minScheduledMinutes
     * @param int $maxScheduledItems
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $maxScheduledMinutes = null, ?int $minScheduledMinutes = null, ?int $maxScheduledItems = null, $any = null)
    {
        $this
            ->setMaxScheduledMinutes($maxScheduledMinutes)
            ->setMinScheduledMinutes($minScheduledMinutes)
            ->setMaxScheduledItems($maxScheduledItems)
            ->setAny($any);
    }
    /**
     * Get MaxScheduledMinutes value
     * @return int|null
     */
    public function getMaxScheduledMinutes(): ?int
    {
        return $this->MaxScheduledMinutes;
    }
    /**
     * Set MaxScheduledMinutes value
     * @param int $maxScheduledMinutes
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
     */
    public function setMaxScheduledMinutes(?int $maxScheduledMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($maxScheduledMinutes) && !(is_int($maxScheduledMinutes) || ctype_digit($maxScheduledMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxScheduledMinutes, true), gettype($maxScheduledMinutes)), __LINE__);
        }
        $this->MaxScheduledMinutes = $maxScheduledMinutes;
        
        return $this;
    }
    /**
     * Get MinScheduledMinutes value
     * @return int|null
     */
    public function getMinScheduledMinutes(): ?int
    {
        return $this->MinScheduledMinutes;
    }
    /**
     * Set MinScheduledMinutes value
     * @param int $minScheduledMinutes
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
     */
    public function setMinScheduledMinutes(?int $minScheduledMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($minScheduledMinutes) && !(is_int($minScheduledMinutes) || ctype_digit($minScheduledMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minScheduledMinutes, true), gettype($minScheduledMinutes)), __LINE__);
        }
        $this->MinScheduledMinutes = $minScheduledMinutes;
        
        return $this;
    }
    /**
     * Get MaxScheduledItems value
     * @return int|null
     */
    public function getMaxScheduledItems(): ?int
    {
        return $this->MaxScheduledItems;
    }
    /**
     * Set MaxScheduledItems value
     * @param int $maxScheduledItems
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
     */
    public function setMaxScheduledItems(?int $maxScheduledItems = null): self
    {
        // validation for constraint: int
        if (!is_null($maxScheduledItems) && !(is_int($maxScheduledItems) || ctype_digit($maxScheduledItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxScheduledItems, true), gettype($maxScheduledItems)), __LINE__);
        }
        $this->MaxScheduledItems = $maxScheduledItems;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType
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
