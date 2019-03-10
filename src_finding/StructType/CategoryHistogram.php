<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryHistogram StructType
 * Meta informations extracted from the WSDL
 * - documentation: Statistical (histogram) information about categories that contain items that match the query, if any. For categories associated with specific items, see items returned in each search result. Shows the distribution of items across
 * each category. Not returned if there is no match.
 * @subpackage Structs
 */
class CategoryHistogram extends Category
{
    /**
     * The count
     * Meta informations extracted from the WSDL
     * - documentation: The total number of items in the associated category that match the search criteria.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $count;
    /**
     * The childCategoryHistogram
     * Meta informations extracted from the WSDL
     * - documentation: Container for histogram information pertaining to a child of the category specified in the request. Histograms return data on up to 10 children. Histograms are only a single level deep. That is, a given category histogram contains
     * only immediate children.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\CategoryHistogram[]
     */
    public $childCategoryHistogram;
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
     * Constructor method for CategoryHistogram
     * @uses CategoryHistogram::setCount()
     * @uses CategoryHistogram::setChildCategoryHistogram()
     * @uses CategoryHistogram::setDelimiter()
     * @uses CategoryHistogram::setAny()
     * @param int $count
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogram[] $childCategoryHistogram
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($count = null, array $childCategoryHistogram = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setCount($count)
            ->setChildCategoryHistogram($childCategoryHistogram)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogram
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
     * Get childCategoryHistogram value
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogram[]|null
     */
    public function getChildCategoryHistogram()
    {
        return $this->childCategoryHistogram;
    }
    /**
     * Set childCategoryHistogram value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogram[] $childCategoryHistogram
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogram
     */
    public function setChildCategoryHistogram(array $childCategoryHistogram = array())
    {
        foreach ($childCategoryHistogram as $categoryHistogramChildCategoryHistogramItem) {
            // validation for constraint: itemType
            if (!$categoryHistogramChildCategoryHistogramItem instanceof \macropage\ebaysdk\finding\StructType\CategoryHistogram) {
                throw new \InvalidArgumentException(sprintf('The childCategoryHistogram property can only contain items of \macropage\ebaysdk\finding\StructType\CategoryHistogram, "%s" given', is_object($categoryHistogramChildCategoryHistogramItem) ? get_class($categoryHistogramChildCategoryHistogramItem) : gettype($categoryHistogramChildCategoryHistogramItem)), __LINE__);
            }
        }
        $this->childCategoryHistogram = $childCategoryHistogram;
        return $this;
    }
    /**
     * Add item to childCategoryHistogram value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogram $item
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogram
     */
    public function addToChildCategoryHistogram(\macropage\ebaysdk\finding\StructType\CategoryHistogram $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\CategoryHistogram) {
            throw new \InvalidArgumentException(sprintf('The childCategoryHistogram property can only contain items of \macropage\ebaysdk\finding\StructType\CategoryHistogram, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->childCategoryHistogram[] = $item;
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
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogram
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
     * @uses \macropage\ebaysdk\finding\StructType\CategoryHistogram::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogram
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
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogram
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
