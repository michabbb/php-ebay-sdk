<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionHistogramContainer StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for condition histograms.
 * @subpackage Structs
 */
class ConditionHistogramContainer extends AbstractStructBase
{
    /**
     * The conditionHistogram
     * Meta informations extracted from the WSDL
     * - documentation: Statistical (item count) information on the condition of items that match the search criteria (or specified category). For example, the number of brand new items that match the query. <br> <br> Each conditionHistogram specifies one
     * condition and the number of matching items found. The list of all conditionHistogram containers returned represents the union of all conditions that were found in the item results. For example, if items were found in different categories, and if
     * those categories support different sets of item conditions, then all those conditions are returned in the list, regardless of category.<br> <br> If multiple items use the same condition ID, but some items use different display names for that
     * condition, the histogram shows the site's default display name for that condition. This means that the condition name in a histogram may not always exactly match the condition names on the counted items.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ConditionHistogram[]
     */
    public $conditionHistogram;
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
     * Constructor method for ConditionHistogramContainer
     * @uses ConditionHistogramContainer::setConditionHistogram()
     * @uses ConditionHistogramContainer::setDelimiter()
     * @uses ConditionHistogramContainer::setAny()
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogram[] $conditionHistogram
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct(array $conditionHistogram = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setConditionHistogram($conditionHistogram)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get conditionHistogram value
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogram[]|null
     */
    public function getConditionHistogram()
    {
        return $this->conditionHistogram;
    }
    /**
     * Set conditionHistogram value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogram[] $conditionHistogram
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
     */
    public function setConditionHistogram(array $conditionHistogram = array())
    {
        foreach ($conditionHistogram as $conditionHistogramContainerConditionHistogramItem) {
            // validation for constraint: itemType
            if (!$conditionHistogramContainerConditionHistogramItem instanceof \macropage\ebaysdk\finding\StructType\ConditionHistogram) {
                throw new \InvalidArgumentException(sprintf('The conditionHistogram property can only contain items of \macropage\ebaysdk\finding\StructType\ConditionHistogram, "%s" given', is_object($conditionHistogramContainerConditionHistogramItem) ? get_class($conditionHistogramContainerConditionHistogramItem) : gettype($conditionHistogramContainerConditionHistogramItem)), __LINE__);
            }
        }
        $this->conditionHistogram = $conditionHistogram;
        return $this;
    }
    /**
     * Add item to conditionHistogram value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogram $item
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
     */
    public function addToConditionHistogram(\macropage\ebaysdk\finding\StructType\ConditionHistogram $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\ConditionHistogram) {
            throw new \InvalidArgumentException(sprintf('The conditionHistogram property can only contain items of \macropage\ebaysdk\finding\StructType\ConditionHistogram, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->conditionHistogram[] = $item;
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
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
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
     * @uses \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
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
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
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
