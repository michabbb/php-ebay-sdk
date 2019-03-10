<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Aspect StructType
 * Meta informations extracted from the WSDL
 * - documentation: Characteristic of an item in a category. For example, "Shoes Size" or "Style" might be aspects of the Men's Shoes category, while "Genre" and "Album Type" could be aspects of the Music CDs category. <br><br> This container is not
 * returned if there are no matching aspects for the category.
 * @subpackage Structs
 */
class Aspect extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: Name of an aspect that is part of a category. For example, "Optical Zoom" or "Megapixels" could be aspects of the Digital Cameras category. For the current aspect names associated with a specific item, refer to the
     * aspectHistogramContainer returned for the respective item. <br><br> This value is not returned if there are no matching aspects for the category.
     * - use: required
     * @var string
     */
    public $name;
    /**
     * The valueHistogram
     * Meta informations extracted from the WSDL
     * - documentation: Container that returns the name of the respective aspect value and the histogram (the number of available items) that share that item characteristic. <br><br> This value is not returned if there are no matching aspects for the
     * category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\AspectValueHistogram[]
     */
    public $valueHistogram;
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
     * Constructor method for Aspect
     * @uses Aspect::setName()
     * @uses Aspect::setValueHistogram()
     * @uses Aspect::setDelimiter()
     * @uses Aspect::setAny()
     * @param string $name
     * @param \macropage\ebaysdk\finding\StructType\AspectValueHistogram[] $valueHistogram
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($name = null, array $valueHistogram = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setValueHistogram($valueHistogram)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get name value
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \macropage\ebaysdk\finding\StructType\Aspect
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get valueHistogram value
     * @return \macropage\ebaysdk\finding\StructType\AspectValueHistogram[]|null
     */
    public function getValueHistogram()
    {
        return $this->valueHistogram;
    }
    /**
     * Set valueHistogram value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\AspectValueHistogram[] $valueHistogram
     * @return \macropage\ebaysdk\finding\StructType\Aspect
     */
    public function setValueHistogram(array $valueHistogram = array())
    {
        foreach ($valueHistogram as $aspectValueHistogramItem) {
            // validation for constraint: itemType
            if (!$aspectValueHistogramItem instanceof \macropage\ebaysdk\finding\StructType\AspectValueHistogram) {
                throw new \InvalidArgumentException(sprintf('The valueHistogram property can only contain items of \macropage\ebaysdk\finding\StructType\AspectValueHistogram, "%s" given', is_object($aspectValueHistogramItem) ? get_class($aspectValueHistogramItem) : gettype($aspectValueHistogramItem)), __LINE__);
            }
        }
        $this->valueHistogram = $valueHistogram;
        return $this;
    }
    /**
     * Add item to valueHistogram value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\AspectValueHistogram $item
     * @return \macropage\ebaysdk\finding\StructType\Aspect
     */
    public function addToValueHistogram(\macropage\ebaysdk\finding\StructType\AspectValueHistogram $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\AspectValueHistogram) {
            throw new \InvalidArgumentException(sprintf('The valueHistogram property can only contain items of \macropage\ebaysdk\finding\StructType\AspectValueHistogram, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->valueHistogram[] = $item;
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
     * @return \macropage\ebaysdk\finding\StructType\Aspect
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
     * @uses \macropage\ebaysdk\finding\StructType\Aspect::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\Aspect
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
     * @return \macropage\ebaysdk\finding\StructType\Aspect
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
