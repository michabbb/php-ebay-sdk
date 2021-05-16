<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines year, month, and day as individual components of a date. Only applicable to use cases that support incomplete dates. Otherwise, we use xs:dateTime (or xs:date, as appropriate).
 * @subpackage Structs
 */
class DateType extends AbstractStructBase
{
    /**
     * The Year
     * Meta information extracted from the WSDL
     * - documentation: A year in the form YYYY.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Year = null;
    /**
     * The Month
     * Meta information extracted from the WSDL
     * - documentation: A calendar month (e.g., 2 or 02 for February). For ticket searches, Month is required if Day is specified.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Month = null;
    /**
     * The Day
     * Meta information extracted from the WSDL
     * - documentation: A calendar day (e.g., 2 or 02). For ticket searches, Day is only valid if Month is also specified.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Day = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DateType
     * @uses DateType::setYear()
     * @uses DateType::setMonth()
     * @uses DateType::setDay()
     * @uses DateType::setAny()
     * @param int $year
     * @param int $month
     * @param int $day
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $year = null, ?int $month = null, ?int $day = null, $any = null)
    {
        $this
            ->setYear($year)
            ->setMonth($month)
            ->setDay($day)
            ->setAny($any);
    }
    /**
     * Get Year value
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param int $year
     * @return \macropage\ebaysdk\trading\StructType\DateType
     */
    public function setYear(?int $year = null): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->Year = $year;
        
        return $this;
    }
    /**
     * Get Month value
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \macropage\ebaysdk\trading\StructType\DateType
     */
    public function setMonth(?int $month = null): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->Month = $month;
        
        return $this;
    }
    /**
     * Get Day value
     * @return int|null
     */
    public function getDay(): ?int
    {
        return $this->Day;
    }
    /**
     * Set Day value
     * @param int $day
     * @return \macropage\ebaysdk\trading\StructType\DateType
     */
    public function setDay(?int $day = null): self
    {
        // validation for constraint: int
        if (!is_null($day) && !(is_int($day) || ctype_digit($day))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($day, true), gettype($day)), __LINE__);
        }
        $this->Day = $day;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DateType
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
