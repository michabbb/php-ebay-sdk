<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains data for controlling pagination in API requests. Pagination of returned data is required for some calls and not needed in or not supported for some calls. See the documentation for individual calls to determine whether
 * pagination is supported, required, or desirable.
 * @subpackage Structs
 */
class PaginationType extends AbstractStructBase
{
    /**
     * The EntriesPerPage
     * Meta informations extracted from the WSDL
     * - documentation: This integer value is used to specify the maximum number of entries to return in a single "page" of data. This value, along with the number of entries that match the input criteria, will determine the total pages (see
     * <b>PaginationResult.TotalNumberOfPages</b>) in the result set. <br/><br/> The maximum and default values are not the same for all calls. For most <b>Trading API</b> calls, the maximum value is 200 and the default value is 25 entries per page. <br>
     * - minOccurs: 0
     * @var int
     */
    public $EntriesPerPage;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of the page of data to return in the current call. Default is 1 for most calls. For some calls, the default is 0. Specify a positive value equal to or lower than the number of pages available (which you determine
     * by examining the results of your initial request). See the documentation for the individual calls to determine the correct default value.<br>
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaginationType
     * @uses PaginationType::setEntriesPerPage()
     * @uses PaginationType::setPageNumber()
     * @uses PaginationType::setAny()
     * @param int $entriesPerPage
     * @param int $pageNumber
     * @param \DOMDocument $any
     */
    public function __construct($entriesPerPage = null, $pageNumber = null, \DOMDocument $any = null)
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
    public function getEntriesPerPage()
    {
        return $this->EntriesPerPage;
    }
    /**
     * Set EntriesPerPage value
     * @param int $entriesPerPage
     * @return \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public function setEntriesPerPage($entriesPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($entriesPerPage) && !is_numeric($entriesPerPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($entriesPerPage)), __LINE__);
        }
        $this->EntriesPerPage = $entriesPerPage;
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !is_numeric($pageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PaginationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PaginationType
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
     * @return \macropage\ebaysdk\trading\StructType\PaginationType
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
