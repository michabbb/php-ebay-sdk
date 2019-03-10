<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AspectHistogramContainer StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for a top-level set of aspect histograms.
 * @subpackage Structs
 */
class AspectHistogramContainer extends AbstractStructBase
{
    /**
     * The domainName
     * Meta informations extracted from the WSDL
     * - documentation: As of October 2014, this field will no longer be returned.
     * - minOccurs: 1
     * @var string
     */
    public $domainName;
    /**
     * The domainDisplayName
     * Meta informations extracted from the WSDL
     * - documentation: As of October 2014, this field will no longer be returned.
     * - minOccurs: 1
     * @var string
     */
    public $domainDisplayName;
    /**
     * The aspect
     * Meta informations extracted from the WSDL
     * - documentation: A characteristic of an item in a category. For example, "Optical Zoom", "Brand", and "Megapixels" could be aspects of the Digital Cameras category. Aspects are well-known, standardized characteristics of a category, and they vary
     * from category to category (the aspects of "Men's Shoes" are different from those of "Digital Cameras"). A search request on the eBay site will often display aspects and their respective aspect values on the left-had side of a query response. <br><br>
     * Aspects are extracted from item listing properties (such as item titles and subtitles), and represent the characteristics of active items. Values returned in the Aspect container can be used as inputs to the aspectFilter fields in a query to distill
     * the items returned by the query. eBay generates aspects dynamically from the items currently listed; aspects provide a view into what is currently available on eBay. Because of this, aspect values returned one day cannot be guaranteed to be valid the
     * next day. <br><br> The following graphic shows how eBay might return a set of aspects for the Digital Cameras category. In this graphic, "Product Type", "Brand", and "Megapixels" are aspects, and "Point & Shoot", "Canon", and "12.0 to 12.9 MP" are
     * aspect values. Histogram values (item counts) are shown for each aspect value. <br><br> <img src="http://developer.ebay.com/DevZone/finding/Concepts/images/refinesearch.jpg" width="142" height="468" alt="eBay Aspects" />
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \macropage\ebaysdk\finding\StructType\Aspect[]
     */
    public $aspect;
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
     * Constructor method for AspectHistogramContainer
     * @uses AspectHistogramContainer::setDomainName()
     * @uses AspectHistogramContainer::setDomainDisplayName()
     * @uses AspectHistogramContainer::setAspect()
     * @uses AspectHistogramContainer::setDelimiter()
     * @uses AspectHistogramContainer::setAny()
     * @param string $domainName
     * @param string $domainDisplayName
     * @param \macropage\ebaysdk\finding\StructType\Aspect[] $aspect
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($domainName = null, $domainDisplayName = null, array $aspect = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setDomainName($domainName)
            ->setDomainDisplayName($domainDisplayName)
            ->setAspect($aspect)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get domainName value
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }
    /**
     * Set domainName value
     * @param string $domainName
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
     */
    public function setDomainName($domainName = null)
    {
        // validation for constraint: string
        if (!is_null($domainName) && !is_string($domainName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainName)), __LINE__);
        }
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * Get domainDisplayName value
     * @return string
     */
    public function getDomainDisplayName()
    {
        return $this->domainDisplayName;
    }
    /**
     * Set domainDisplayName value
     * @param string $domainDisplayName
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
     */
    public function setDomainDisplayName($domainDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($domainDisplayName) && !is_string($domainDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainDisplayName)), __LINE__);
        }
        $this->domainDisplayName = $domainDisplayName;
        return $this;
    }
    /**
     * Get aspect value
     * @return \macropage\ebaysdk\finding\StructType\Aspect[]
     */
    public function getAspect()
    {
        return $this->aspect;
    }
    /**
     * Set aspect value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\Aspect[] $aspect
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
     */
    public function setAspect(array $aspect = array())
    {
        foreach ($aspect as $aspectHistogramContainerAspectItem) {
            // validation for constraint: itemType
            if (!$aspectHistogramContainerAspectItem instanceof \macropage\ebaysdk\finding\StructType\Aspect) {
                throw new \InvalidArgumentException(sprintf('The aspect property can only contain items of \macropage\ebaysdk\finding\StructType\Aspect, "%s" given', is_object($aspectHistogramContainerAspectItem) ? get_class($aspectHistogramContainerAspectItem) : gettype($aspectHistogramContainerAspectItem)), __LINE__);
            }
        }
        $this->aspect = $aspect;
        return $this;
    }
    /**
     * Add item to aspect value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\Aspect $item
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
     */
    public function addToAspect(\macropage\ebaysdk\finding\StructType\Aspect $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\Aspect) {
            throw new \InvalidArgumentException(sprintf('The aspect property can only contain items of \macropage\ebaysdk\finding\StructType\Aspect, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->aspect[] = $item;
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
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
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
     * @uses \macropage\ebaysdk\finding\StructType\AspectHistogramContainer::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
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
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
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
