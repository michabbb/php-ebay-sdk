<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginationOutput StructType
 * Meta informations extracted from the WSDL
 * - documentation: Shows the pagination data for the item search. Child elements include the page number returned, the maximum entries returned per page, the total number of pages that can be returned, and the total number of items that match the
 * search criteria.
 * @subpackage Structs
 */
class PaginationOutput extends AbstractStructBase
{
    /**
     * The pageNumber
     * Meta informations extracted from the WSDL
     * - documentation: The subset of item data returned in the current response. Search results are divided into sets, or "pages," of item data. The number of pages is equal to the total number of items matching the search criteria divided by the value
     * specified for <b>entriesPerPage</b> in the request. The response for a request contains one "page" of item data. <br> <br> This returned value indicates the page number of item data returned (a subset of the complete result set). If this field
     * contains 1, the response contains the first page of item data (the default). If the value returned in totalEntries is less than the value for <b>entriesPerPage</b>, <b>pageNumber</b> returns 1 and the response contains the entire result set. <br>
     * <br> The value of <b>pageNumber</b> is normally equal to the value input for <b>paginationInput.pageNumber</b>. However, if the number input for <b>pageNumber</b> is greater than the total possible pages of output, eBay returns the last page of item
     * data in the result set, and the value for <b>pageNumber</b> is set to the respective (last) page number.
     * - minOccurs: 0
     * @var int
     */
    public $pageNumber;
    /**
     * The entriesPerPage
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of items that can be returned in the response. This number is always equal to the value input for <b>paginationInput.entriesPerPage</b>. <br> <br> The end of the result set has been reached if the number specified
     * for <b>entriesPerPage</b> is greater than the number of items found on the specified <b>pageNumber</b>. In this case, there will be fewer items returned than the number specified in entriesPerPage. This can be determined by comparing the
     * <b>entriesPerPage</b> value with the value returned in the count attribute for the searchResult field.
     * - minOccurs: 0
     * @var int
     */
    public $entriesPerPage;
    /**
     * The totalPages
     * Meta informations extracted from the WSDL
     * - documentation: The total number of pages of data that could be returned by repeated search requests. <b>Note: </b> If you modify the value of <b>inputPagination.entriesPerPage</b> in a request, the value output for <b>totalPages</b> will change. A
     * value of "0" is returned if eBay does not find any items that match the search criteria.
     * - minOccurs: 0
     * @var int
     */
    public $totalPages;
    /**
     * The totalEntries
     * Meta informations extracted from the WSDL
     * - documentation: The total number of items found that match the search criteria in your request. Depending on the input value for <b>entriesPerPage</b>, the response might include only a portion (a page) of the entire result set. A value of "0" is
     * returned if eBay does not find any items that match the search criteria.
     * - minOccurs: 0
     * @var int
     */
    public $totalEntries;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaginationOutput
     * @uses PaginationOutput::setPageNumber()
     * @uses PaginationOutput::setEntriesPerPage()
     * @uses PaginationOutput::setTotalPages()
     * @uses PaginationOutput::setTotalEntries()
     * @uses PaginationOutput::setDelimiter()
     * @uses PaginationOutput::setAny()
     * @param int $pageNumber
     * @param int $entriesPerPage
     * @param int $totalPages
     * @param int $totalEntries
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($pageNumber = null, $entriesPerPage = null, $totalPages = null, $totalEntries = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setPageNumber($pageNumber)
            ->setEntriesPerPage($entriesPerPage)
            ->setTotalPages($totalPages)
            ->setTotalEntries($totalEntries)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get pageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }
    /**
     * Set pageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\finding\StructType\PaginationOutput
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !is_numeric($pageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageNumber)), __LINE__);
        }
        $this->pageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get entriesPerPage value
     * @return int|null
     */
    public function getEntriesPerPage()
    {
        return $this->entriesPerPage;
    }
    /**
     * Set entriesPerPage value
     * @param int $entriesPerPage
     * @return \macropage\ebaysdk\finding\StructType\PaginationOutput
     */
    public function setEntriesPerPage($entriesPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($entriesPerPage) && !is_numeric($entriesPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($entriesPerPage)), __LINE__);
        }
        $this->entriesPerPage = $entriesPerPage;
        return $this;
    }
    /**
     * Get totalPages value
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }
    /**
     * Set totalPages value
     * @param int $totalPages
     * @return \macropage\ebaysdk\finding\StructType\PaginationOutput
     */
    public function setTotalPages($totalPages = null)
    {
        // validation for constraint: int
        if (!is_null($totalPages) && !is_numeric($totalPages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalPages)), __LINE__);
        }
        $this->totalPages = $totalPages;
        return $this;
    }
    /**
     * Get totalEntries value
     * @return int|null
     */
    public function getTotalEntries()
    {
        return $this->totalEntries;
    }
    /**
     * Set totalEntries value
     * @param int $totalEntries
     * @return \macropage\ebaysdk\finding\StructType\PaginationOutput
     */
    public function setTotalEntries($totalEntries = null)
    {
        // validation for constraint: int
        if (!is_null($totalEntries) && !is_numeric($totalEntries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalEntries)), __LINE__);
        }
        $this->totalEntries = $totalEntries;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\PaginationOutput
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\PaginationOutput::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\PaginationOutput
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
     * @return \macropage\ebaysdk\finding\StructType\PaginationOutput
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
