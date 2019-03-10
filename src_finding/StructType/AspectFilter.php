<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AspectFilter StructType
 * Meta informations extracted from the WSDL
 * - documentation: Use aspect filters to refine the number of results returned in a response. Populate the <b>aspectFilter</b> container with aspect values obtained from the response of a query that returns an aspectHistogram.
 * @subpackage Structs
 */
class AspectFilter extends AbstractStructBase
{
    /**
     * The aspectName
     * Meta informations extracted from the WSDL
     * - documentation: Name of a standard item characteristic associated with a given category. For example, "Optical Zoom" or "Megapixels" are aspects for the Digital Cameras category. The current aspect names associated with a specific category can be
     * found in the aspect histogram. Aspect histograms can be retrieved for a given keyword query or category. The aspect histogram contains information about aspects from the category that is most relevant to your search.
     * - minOccurs: 1
     * @var string
     */
    public $aspectName;
    /**
     * The aspectValueName
     * Meta informations extracted from the WSDL
     * - documentation: A value name for a given aspect. For example, "Point & Shoot" is a value name for the "Product Type" aspect in the "Digital Cameras" category.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $aspectValueName;
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
     * Constructor method for AspectFilter
     * @uses AspectFilter::setAspectName()
     * @uses AspectFilter::setAspectValueName()
     * @uses AspectFilter::setDelimiter()
     * @uses AspectFilter::setAny()
     * @param string $aspectName
     * @param string[] $aspectValueName
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($aspectName = null, array $aspectValueName = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setAspectName($aspectName)
            ->setAspectValueName($aspectValueName)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get aspectName value
     * @return string
     */
    public function getAspectName()
    {
        return $this->aspectName;
    }
    /**
     * Set aspectName value
     * @param string $aspectName
     * @return \macropage\ebaysdk\finding\StructType\AspectFilter
     */
    public function setAspectName($aspectName = null)
    {
        // validation for constraint: string
        if (!is_null($aspectName) && !is_string($aspectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aspectName)), __LINE__);
        }
        $this->aspectName = $aspectName;
        return $this;
    }
    /**
     * Get aspectValueName value
     * @return string[]
     */
    public function getAspectValueName()
    {
        return $this->aspectValueName;
    }
    /**
     * Set aspectValueName value
     * @throws \InvalidArgumentException
     * @param string[] $aspectValueName
     * @return \macropage\ebaysdk\finding\StructType\AspectFilter
     */
    public function setAspectValueName(array $aspectValueName = array())
    {
        foreach ($aspectValueName as $aspectFilterAspectValueNameItem) {
            // validation for constraint: itemType
            if (!is_string($aspectFilterAspectValueNameItem)) {
                throw new \InvalidArgumentException(sprintf('The aspectValueName property can only contain items of string, "%s" given', is_object($aspectFilterAspectValueNameItem) ? get_class($aspectFilterAspectValueNameItem) : gettype($aspectFilterAspectValueNameItem)), __LINE__);
            }
        }
        $this->aspectValueName = $aspectValueName;
        return $this;
    }
    /**
     * Add item to aspectValueName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\AspectFilter
     */
    public function addToAspectValueName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The aspectValueName property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->aspectValueName[] = $item;
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
     * @return \macropage\ebaysdk\finding\StructType\AspectFilter
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
     * @uses \macropage\ebaysdk\finding\StructType\AspectFilter::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\AspectFilter
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
     * @return \macropage\ebaysdk\finding\StructType\AspectFilter
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
