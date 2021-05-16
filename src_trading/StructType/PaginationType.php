<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data for controlling pagination in API requests. Pagination of returned data is required for some calls and not needed in or not supported for some calls. See the documentation for individual calls to determine whether
 * pagination is supported, required, or desirable.
 * @subpackage Structs
 */
class PaginationType extends AbstractStructBase
{
    /**
     * The EntriesPerPage
     * Meta information extracted from the WSDL
     * - documentation: This integer value is used to specify the maximum number of entries to return in a single "page" of data. This value, along with the number of entries that match the input criteria, will determine the total pages (see
     * <b>PaginationResult.TotalNumberOfPages</b>) in the result set. <br/><br/> The maximum and default values are not the same for all calls. For most <b>Trading API</b> calls, the maximum value is 200 and the default value is 25 entries per page. <br>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EntriesPerPage = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: Specifies the number of the page of data to return in the current call. Default is 1 for most calls. For some calls, the default is 0. Specify a positive value equal to or lower than the number of pages available (which you determine
     * by examining the results of your initial request). See the documentation for the individual calls to determine the correct default value.<br>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaginationType
     * @uses PaginationType::setEntriesPerPage()
     * @uses PaginationType::setPageNumber()
     * @uses PaginationType::setAny()
     * @param int $entriesPerPage
     * @param int $pageNumber
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $entriesPerPage = null, ?int $pageNumber = null, $any = null)
    {
        $this
            ->setEntriesPerPage($entriesPerPage)
            ->setPageNumber($pageNumber)
            ->setAny($any);
    }
    /**
     * Get EntriesPerPage value
     * @return int|null
     */
    public function getEntriesPerPage(): ?int
    {
        return $this->EntriesPerPage;
    }
    /**
     * Set EntriesPerPage value
     * @param int $entriesPerPage
     * @return \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public function setEntriesPerPage(?int $entriesPerPage = null): self
    {
        // validation for constraint: int
        if (!is_null($entriesPerPage) && !(is_int($entriesPerPage) || ctype_digit($entriesPerPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entriesPerPage, true), gettype($entriesPerPage)), __LINE__);
        }
        $this->EntriesPerPage = $entriesPerPage;
        
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaginationType
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
