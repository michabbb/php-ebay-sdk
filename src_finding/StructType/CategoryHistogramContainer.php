<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryHistogramContainer StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base container for histogram information.
 * @subpackage Structs
 */
class CategoryHistogramContainer extends AbstractStructBase
{
    /**
     * The categoryHistogram
     * Meta informations extracted from the WSDL
     * - documentation: Statistical (item count) information on the categories that contain items that match the search criteria or specified category or categories. A category histogram contains information for up to 10 child categories. Search result
     * total entries may not necessarily match the sum of category histogram item counts. <br><br> For search calls, the item count shows the distribution of matching items across each of the returned categories. A category histogram is not returned if
     * there are no matching items or if the search is restricted to a single leaf category. <br><br> For <b class="con">getHistograms</b>, the category histogram contains the total item count for the specified category and item counts for the child
     * categories containing the most item listings. A category histogram is not returned if the specified category is a leaf category. <br><br> For categories associated with specific items, review the individual item containers returned in the search
     * result.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\CategoryHistogram[]
     */
    public $categoryHistogram;
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
     * Constructor method for CategoryHistogramContainer
     * @uses CategoryHistogramContainer::setCategoryHistogram()
     * @uses CategoryHistogramContainer::setDelimiter()
     * @uses CategoryHistogramContainer::setAny()
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogram[] $categoryHistogram
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct(array $categoryHistogram = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setCategoryHistogram($categoryHistogram)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get categoryHistogram value
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogram[]|null
     */
    public function getCategoryHistogram()
    {
        return $this->categoryHistogram;
    }
    /**
     * Set categoryHistogram value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogram[] $categoryHistogram
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer
     */
    public function setCategoryHistogram(array $categoryHistogram = array())
    {
        foreach ($categoryHistogram as $categoryHistogramContainerCategoryHistogramItem) {
            // validation for constraint: itemType
            if (!$categoryHistogramContainerCategoryHistogramItem instanceof \macropage\ebaysdk\finding\StructType\CategoryHistogram) {
                throw new \InvalidArgumentException(sprintf('The categoryHistogram property can only contain items of \macropage\ebaysdk\finding\StructType\CategoryHistogram, "%s" given', is_object($categoryHistogramContainerCategoryHistogramItem) ? get_class($categoryHistogramContainerCategoryHistogramItem) : gettype($categoryHistogramContainerCategoryHistogramItem)), __LINE__);
            }
        }
        $this->categoryHistogram = $categoryHistogram;
        return $this;
    }
    /**
     * Add item to categoryHistogram value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogram $item
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer
     */
    public function addToCategoryHistogram(\macropage\ebaysdk\finding\StructType\CategoryHistogram $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\CategoryHistogram) {
            throw new \InvalidArgumentException(sprintf('The categoryHistogram property can only contain items of \macropage\ebaysdk\finding\StructType\CategoryHistogram, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->categoryHistogram[] = $item;
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
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer
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
     * @uses \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer
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
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer
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
