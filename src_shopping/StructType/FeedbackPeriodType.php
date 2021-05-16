<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackPeriodType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by various Feedback count containers that are returned in the <b>GetUserProfile</b> call to indicate how many Negative, Neutral, Positive, Retracted, and Total Feedback entries a user has received within different
 * periods of time, typically 7 days, 30 days, 180 days, and 365 days.
 * @subpackage Structs
 */
class FeedbackPeriodType extends AbstractStructBase
{
    /**
     * The PeriodInDays
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of days in the time period for the Feedback count. Typically, the returned time periods are 7 days, 30 days, 180 days, and 365 days.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PeriodInDays = null;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of Feedback entries that occurred within the time period specified in the <b>PeriodInDays</b> field.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FeedbackPeriodType
     * @uses FeedbackPeriodType::setPeriodInDays()
     * @uses FeedbackPeriodType::setCount()
     * @uses FeedbackPeriodType::setAny()
     * @param int $periodInDays
     * @param int $count
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $periodInDays = null, ?int $count = null, $any = null)
    {
        $this
            ->setPeriodInDays($periodInDays)
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get PeriodInDays value
     * @return int|null
     */
    public function getPeriodInDays(): ?int
    {
        return $this->PeriodInDays;
    }
    /**
     * Set PeriodInDays value
     * @param int $periodInDays
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType
     */
    public function setPeriodInDays(?int $periodInDays = null): self
    {
        // validation for constraint: int
        if (!is_null($periodInDays) && !(is_int($periodInDays) || ctype_digit($periodInDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($periodInDays, true), gettype($periodInDays)), __LINE__);
        }
        $this->PeriodInDays = $periodInDays;
        
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\FeedbackPeriodType
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
