<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingAnalyzerRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingAnalyzerRecommendationsType extends AbstractStructBase
{
    /**
     * The ListingTipArray
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $ListingTipArray = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ListingAnalyzerRecommendationsType
     * @uses ListingAnalyzerRecommendationsType::setListingTipArray()
     * @uses ListingAnalyzerRecommendationsType::setAny()
     * @param \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $listingTipArray
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $listingTipArray = null, $any = null)
    {
        $this
            ->setListingTipArray($listingTipArray)
            ->setAny($any);
    }
    /**
     * Get ListingTipArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType|null
     */
    public function getListingTipArray(): ?\macropage\ebaysdk\trading\ArrayType\ListingTipArrayType
    {
        return $this->ListingTipArray;
    }
    /**
     * Set ListingTipArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $listingTipArray
     * @return \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType
     */
    public function setListingTipArray(?\macropage\ebaysdk\trading\ArrayType\ListingTipArrayType $listingTipArray = null): self
    {
        $this->ListingTipArray = $listingTipArray;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
