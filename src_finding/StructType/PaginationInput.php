<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginationInput StructType
 * Meta informations extracted from the WSDL
 * - documentation: Controls the pagination of the result set. Child elements specify the maximum number of item listings to return per call and which page of data to return. Controls which listings are returned in the response, but does not control the
 * details associated with the returned items.
 * @subpackage Structs
 */
class PaginationInput extends AbstractStructBase
{
    /**
     * The pageNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which subset of data (or "page") to return in the call response. The number of data pages is determined by the total number of items matching the request search criteria (returned in paginationOutput.totalEntries) divided
     * by the number of entries to display in each response (<b>entriesPerPage</b>). You can return up to the first 100 pages of the result set by issuing multiple requests and specifying, in sequence, the pages to return.
     * - minOccurs: 0
     * @var int
     */
    public $pageNumber;
    /**
     * The entriesPerPage
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the maximum number of entries to return in a single call. If the number of entries found on the specified <b>pageNumber</b> is less than the value specified here, the number of items returned will be less than the value of
     * <b>entriesPerPage</b>. This indicates the end of the result set. <br><br> If <b>entriesPerPage</b> is set to a number greater than 100, the default value, 100, will be used.
     * - minOccurs: 0
     * @var int
     */
    public $entriesPerPage;
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
     * Constructor method for PaginationInput
     * @uses PaginationInput::setPageNumber()
     * @uses PaginationInput::setEntriesPerPage()
     * @uses PaginationInput::setDelimiter()
     * @uses PaginationInput::setAny()
     * @param int $pageNumber
     * @param int $entriesPerPage
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($pageNumber = null, $entriesPerPage = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setPageNumber($pageNumber)
            ->setEntriesPerPage($entriesPerPage)
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
     * @return \macropage\ebaysdk\finding\StructType\PaginationInput
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
     * @return \macropage\ebaysdk\finding\StructType\PaginationInput
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
     * @return \macropage\ebaysdk\finding\StructType\PaginationInput
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
     * @uses \macropage\ebaysdk\finding\StructType\PaginationInput::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\PaginationInput
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
     * @return \macropage\ebaysdk\finding\StructType\PaginationInput
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
