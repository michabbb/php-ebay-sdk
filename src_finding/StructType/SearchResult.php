<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchResult StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the returned item listings, if any. The data for each listing is returned in individual item containers.
 * @subpackage Structs
 */
class SearchResult extends AbstractStructBase
{
    /**
     * The count
     * Meta informations extracted from the WSDL
     * - documentation: The total number of items returned in the search response. This is often equal to the <b class="con">entriesPerPage</b> value. If the count is less than the specified <b class="con">entriesPerPage</b>, it indicates the end of the
     * result set.
     * - use: required
     * @var int
     */
    public $count;
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - documentation: Container for the data of a single item that matches the search criteria.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\SearchItem[]
     */
    public $item;
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
     * Constructor method for SearchResult
     * @uses SearchResult::setCount()
     * @uses SearchResult::setItem()
     * @uses SearchResult::setDelimiter()
     * @uses SearchResult::setAny()
     * @param int $count
     * @param \macropage\ebaysdk\finding\StructType\SearchItem[] $item
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($count = null, array $item = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setCount($count)
            ->setItem($item)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get count value
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \macropage\ebaysdk\finding\StructType\SearchResult
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->count = $count;
        return $this;
    }
    /**
     * Get item value
     * @return \macropage\ebaysdk\finding\StructType\SearchItem[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\SearchItem[] $item
     * @return \macropage\ebaysdk\finding\StructType\SearchResult
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $searchResultItemItem) {
            // validation for constraint: itemType
            if (!$searchResultItemItem instanceof \macropage\ebaysdk\finding\StructType\SearchItem) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \macropage\ebaysdk\finding\StructType\SearchItem, "%s" given', is_object($searchResultItemItem) ? get_class($searchResultItemItem) : gettype($searchResultItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\SearchItem $item
     * @return \macropage\ebaysdk\finding\StructType\SearchResult
     */
    public function addToItem(\macropage\ebaysdk\finding\StructType\SearchItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\SearchItem) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \macropage\ebaysdk\finding\StructType\SearchItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
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
     * @return \macropage\ebaysdk\finding\StructType\SearchResult
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
     * @uses \macropage\ebaysdk\finding\StructType\SearchResult::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\SearchResult
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
     * @return \macropage\ebaysdk\finding\StructType\SearchResult
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
