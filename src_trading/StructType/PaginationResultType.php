<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginationResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: Shows the pagination of data returned by call requests. Pagination of returned data is not needed nor supported for every Trading API call. See the documentation for individual calls to determine whether pagination is supported,
 * required, or desirable.
 * @subpackage Structs
 */
class PaginationResultType extends AbstractStructBase
{
    /**
     * The TotalNumberOfPages
     * Meta information extracted from the WSDL
     * - documentation: Indicates the total number of pages of data that could be returned by repeated requests. Returned with a value of 0 if no pages are available.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalNumberOfPages = null;
    /**
     * The TotalNumberOfEntries
     * Meta information extracted from the WSDL
     * - documentation: Indicates the total number of entries that could be returned by repeated call requests. Returned with a value of 0 if no entries are available.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalNumberOfEntries = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaginationResultType
     * @uses PaginationResultType::setTotalNumberOfPages()
     * @uses PaginationResultType::setTotalNumberOfEntries()
     * @uses PaginationResultType::setAny()
     * @param int $totalNumberOfPages
     * @param int $totalNumberOfEntries
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $totalNumberOfPages = null, ?int $totalNumberOfEntries = null, $any = null)
    {
        $this
            ->setTotalNumberOfPages($totalNumberOfPages)
            ->setTotalNumberOfEntries($totalNumberOfEntries)
            ->setAny($any);
    }
    /**
     * Get TotalNumberOfPages value
     * @return int|null
     */
    public function getTotalNumberOfPages(): ?int
    {
        return $this->TotalNumberOfPages;
    }
    /**
     * Set TotalNumberOfPages value
     * @param int $totalNumberOfPages
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public function setTotalNumberOfPages(?int $totalNumberOfPages = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfPages) && !(is_int($totalNumberOfPages) || ctype_digit($totalNumberOfPages))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNumberOfPages, true), gettype($totalNumberOfPages)), __LINE__);
        }
        $this->TotalNumberOfPages = $totalNumberOfPages;
        
        return $this;
    }
    /**
     * Get TotalNumberOfEntries value
     * @return int|null
     */
    public function getTotalNumberOfEntries(): ?int
    {
        return $this->TotalNumberOfEntries;
    }
    /**
     * Set TotalNumberOfEntries value
     * @param int $totalNumberOfEntries
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public function setTotalNumberOfEntries(?int $totalNumberOfEntries = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfEntries) && !(is_int($totalNumberOfEntries) || ctype_digit($totalNumberOfEntries))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNumberOfEntries, true), gettype($totalNumberOfEntries)), __LINE__);
        }
        $this->TotalNumberOfEntries = $totalNumberOfEntries;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType
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
