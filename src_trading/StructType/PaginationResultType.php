<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginationResultType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Shows the pagination of data returned by call requests. Pagination of returned data is not needed nor supported for every Trading API call. See the documentation for individual calls to determine whether pagination is supported,
 * required, or desirable.
 * @subpackage Structs
 */
class PaginationResultType extends AbstractStructBase
{
    /**
     * The TotalNumberOfPages
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the total number of pages of data that could be returned by repeated requests. Returned with a value of 0 if no pages are available.
     * - minOccurs: 0
     * @var int
     */
    public $TotalNumberOfPages;
    /**
     * The TotalNumberOfEntries
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the total number of entries that could be returned by repeated call requests. Returned with a value of 0 if no entries are available.
     * - minOccurs: 0
     * @var int
     */
    public $TotalNumberOfEntries;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaginationResultType
     * @uses PaginationResultType::setTotalNumberOfPages()
     * @uses PaginationResultType::setTotalNumberOfEntries()
     * @uses PaginationResultType::setAny()
     * @param int $totalNumberOfPages
     * @param int $totalNumberOfEntries
     * @param \DOMDocument $any
     */
    public function __construct($totalNumberOfPages = null, $totalNumberOfEntries = null, \DOMDocument $any = null)
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
    public function getTotalNumberOfPages()
    {
        return $this->TotalNumberOfPages;
    }
    /**
     * Set TotalNumberOfPages value
     * @param int $totalNumberOfPages
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public function setTotalNumberOfPages($totalNumberOfPages = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfPages) && !is_numeric($totalNumberOfPages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalNumberOfPages)), __LINE__);
        }
        $this->TotalNumberOfPages = $totalNumberOfPages;
        return $this;
    }
    /**
     * Get TotalNumberOfEntries value
     * @return int|null
     */
    public function getTotalNumberOfEntries()
    {
        return $this->TotalNumberOfEntries;
    }
    /**
     * Set TotalNumberOfEntries value
     * @param int $totalNumberOfEntries
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public function setTotalNumberOfEntries($totalNumberOfEntries = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfEntries) && !is_numeric($totalNumberOfEntries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalNumberOfEntries)), __LINE__);
        }
        $this->TotalNumberOfEntries = $totalNumberOfEntries;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PaginationResultType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType
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
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType
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
