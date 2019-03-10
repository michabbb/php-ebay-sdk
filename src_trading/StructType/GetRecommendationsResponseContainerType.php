<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecommendationsResponseContainerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class GetRecommendationsResponseContainerType extends AbstractStructBase
{
    /**
     * The ListingAnalyzerRecommendations
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType
     */
    public $ListingAnalyzerRecommendations;
    /**
     * The SIFFTASRecommendations
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType
     */
    public $SIFFTASRecommendations;
    /**
     * The PricingRecommendations
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PricingRecommendationsType
     */
    public $PricingRecommendations;
    /**
     * The AttributeRecommendations
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeRecommendationsType
     */
    public $AttributeRecommendations;
    /**
     * The ProductRecommendations
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductRecommendationsType
     */
    public $ProductRecommendations;
    /**
     * The CorrelationID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The Recommendations
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public $Recommendations;
    /**
     * The ProductListingDetails
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public $ProductListingDetails;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for GetRecommendationsResponseContainerType
     * @uses GetRecommendationsResponseContainerType::setListingAnalyzerRecommendations()
     * @uses GetRecommendationsResponseContainerType::setSIFFTASRecommendations()
     * @uses GetRecommendationsResponseContainerType::setPricingRecommendations()
     * @uses GetRecommendationsResponseContainerType::setAttributeRecommendations()
     * @uses GetRecommendationsResponseContainerType::setProductRecommendations()
     * @uses GetRecommendationsResponseContainerType::setCorrelationID()
     * @uses GetRecommendationsResponseContainerType::setRecommendations()
     * @uses GetRecommendationsResponseContainerType::setProductListingDetails()
     * @uses GetRecommendationsResponseContainerType::setTitle()
     * @uses GetRecommendationsResponseContainerType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations
     * @param \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType $sIFFTASRecommendations
     * @param \macropage\ebaysdk\trading\StructType\PricingRecommendationsType $pricingRecommendations
     * @param \macropage\ebaysdk\trading\StructType\AttributeRecommendationsType $attributeRecommendations
     * @param \macropage\ebaysdk\trading\StructType\ProductRecommendationsType $productRecommendations
     * @param string $correlationID
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType $recommendations
     * @param \macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails
     * @param string $title
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations = null, \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType $sIFFTASRecommendations = null, \macropage\ebaysdk\trading\StructType\PricingRecommendationsType $pricingRecommendations = null, \macropage\ebaysdk\trading\StructType\AttributeRecommendationsType $attributeRecommendations = null, \macropage\ebaysdk\trading\StructType\ProductRecommendationsType $productRecommendations = null, $correlationID = null, \macropage\ebaysdk\trading\StructType\RecommendationsType $recommendations = null, \macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails = null, $title = null, \DOMDocument $any = null)
    {
        $this
            ->setListingAnalyzerRecommendations($listingAnalyzerRecommendations)
            ->setSIFFTASRecommendations($sIFFTASRecommendations)
            ->setPricingRecommendations($pricingRecommendations)
            ->setAttributeRecommendations($attributeRecommendations)
            ->setProductRecommendations($productRecommendations)
            ->setCorrelationID($correlationID)
            ->setRecommendations($recommendations)
            ->setProductListingDetails($productListingDetails)
            ->setTitle($title)
            ->setAny($any);
    }
    /**
     * Get ListingAnalyzerRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType|null
     */
    public function getListingAnalyzerRecommendations()
    {
        return $this->ListingAnalyzerRecommendations;
    }
    /**
     * Set ListingAnalyzerRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setListingAnalyzerRecommendations(\macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations = null)
    {
        $this->ListingAnalyzerRecommendations = $listingAnalyzerRecommendations;
        return $this;
    }
    /**
     * Get SIFFTASRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType|null
     */
    public function getSIFFTASRecommendations()
    {
        return $this->SIFFTASRecommendations;
    }
    /**
     * Set SIFFTASRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType $sIFFTASRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setSIFFTASRecommendations(\macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType $sIFFTASRecommendations = null)
    {
        $this->SIFFTASRecommendations = $sIFFTASRecommendations;
        return $this;
    }
    /**
     * Get PricingRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\PricingRecommendationsType|null
     */
    public function getPricingRecommendations()
    {
        return $this->PricingRecommendations;
    }
    /**
     * Set PricingRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\PricingRecommendationsType $pricingRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setPricingRecommendations(\macropage\ebaysdk\trading\StructType\PricingRecommendationsType $pricingRecommendations = null)
    {
        $this->PricingRecommendations = $pricingRecommendations;
        return $this;
    }
    /**
     * Get AttributeRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\AttributeRecommendationsType|null
     */
    public function getAttributeRecommendations()
    {
        return $this->AttributeRecommendations;
    }
    /**
     * Set AttributeRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\AttributeRecommendationsType $attributeRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setAttributeRecommendations(\macropage\ebaysdk\trading\StructType\AttributeRecommendationsType $attributeRecommendations = null)
    {
        $this->AttributeRecommendations = $attributeRecommendations;
        return $this;
    }
    /**
     * Get ProductRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\ProductRecommendationsType|null
     */
    public function getProductRecommendations()
    {
        return $this->ProductRecommendations;
    }
    /**
     * Set ProductRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\ProductRecommendationsType $productRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setProductRecommendations(\macropage\ebaysdk\trading\StructType\ProductRecommendationsType $productRecommendations = null)
    {
        $this->ProductRecommendations = $productRecommendations;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get Recommendations value
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType|null
     */
    public function getRecommendations()
    {
        return $this->Recommendations;
    }
    /**
     * Set Recommendations value
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType $recommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setRecommendations(\macropage\ebaysdk\trading\StructType\RecommendationsType $recommendations = null)
    {
        $this->Recommendations = $recommendations;
        return $this;
    }
    /**
     * Get ProductListingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType|null
     */
    public function getProductListingDetails()
    {
        return $this->ProductListingDetails;
    }
    /**
     * Set ProductListingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setProductListingDetails(\macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails = null)
    {
        $this->ProductListingDetails = $productListingDetails;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
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
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
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
