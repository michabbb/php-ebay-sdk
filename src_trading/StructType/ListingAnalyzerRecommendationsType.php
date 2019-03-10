<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingAnalyzerRecommendationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingAnalyzerRecommendationsType extends AbstractStructBase
{
    /**
     * The ListingTipArray
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType
     */
    public $ListingTipArray;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingAnalyzerRecommendationsType
     * @uses ListingAnalyzerRecommendationsType::setListingTipArray()
     * @uses ListingAnalyzerRecommendationsType::setAny()
     * @param \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $listingTipArray
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $listingTipArray = null, \DOMDocument $any = null)
    {
        $this
            ->setListingTipArray($listingTipArray)
            ->setAny($any);
    }
    /**
     * Get ListingTipArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType|null
     */
    public function getListingTipArray()
    {
        return $this->ListingTipArray;
    }
    /**
     * Set ListingTipArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $listingTipArray
     * @return \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType
     */
    public function setListingTipArray(\macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $listingTipArray = null)
    {
        $this->ListingTipArray = $listingTipArray;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType
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
