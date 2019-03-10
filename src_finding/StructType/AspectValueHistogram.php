<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AspectValueHistogram StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for details pertaining to individual aspect values, including their histogram information (item counts).
 * @subpackage Structs
 */
class AspectValueHistogram extends AbstractStructBase
{
    /**
     * The count
     * Meta informations extracted from the WSDL
     * - documentation: Number of items that share the characteristic the respective aspect value.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $count;
    /**
     * The valueName
     * Meta informations extracted from the WSDL
     * - documentation: Name of an aspect value. For example, "Short Sleeve" could be an aspect value of the Sleeve Style aspect in the Women's Dresses category, or "Athletic" could be an aspect value of the Style aspect in the Men's Shoes category.
     * - use: required
     * @var string
     */
    public $valueName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AspectValueHistogram
     * @uses AspectValueHistogram::setCount()
     * @uses AspectValueHistogram::setValueName()
     * @uses AspectValueHistogram::setAny()
     * @param int $count
     * @param string $valueName
     * @param \DOMDocument $any
     */
    public function __construct($count = null, $valueName = null, \DOMDocument $any = null)
    {
        $this
            ->setCount($count)
            ->setValueName($valueName)
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
     * @return \macropage\ebaysdk\finding\StructType\AspectValueHistogram
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
     * Get valueName value
     * @return string
     */
    public function getValueName()
    {
        return $this->valueName;
    }
    /**
     * Set valueName value
     * @param string $valueName
     * @return \macropage\ebaysdk\finding\StructType\AspectValueHistogram
     */
    public function setValueName($valueName = null)
    {
        // validation for constraint: string
        if (!is_null($valueName) && !is_string($valueName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueName)), __LINE__);
        }
        $this->valueName = $valueName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\AspectValueHistogram::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\AspectValueHistogram
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
     * @return \macropage\ebaysdk\finding\StructType\AspectValueHistogram
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
