<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecommendationsResponseContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class GetRecommendationsResponseContainerType extends AbstractStructBase
{
    /**
     * The ListingAnalyzerRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType $ListingAnalyzerRecommendations = null;
    /**
     * The SIFFTASRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType $SIFFTASRecommendations = null;
    /**
     * The PricingRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PricingRecommendationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PricingRecommendationsType $PricingRecommendations = null;
    /**
     * The AttributeRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeRecommendationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AttributeRecommendationsType $AttributeRecommendations = null;
    /**
     * The ProductRecommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductRecommendationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductRecommendationsType $ProductRecommendations = null;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CorrelationID = null;
    /**
     * The Recommendations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecommendationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RecommendationsType $Recommendations = null;
    /**
     * The ProductListingDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductListingDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductListingDetailsType $ProductListingDetails = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations = null, ?\macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType $sIFFTASRecommendations = null, ?\macropage\ebaysdk\trading\StructType\PricingRecommendationsType $pricingRecommendations = null, ?\macropage\ebaysdk\trading\StructType\AttributeRecommendationsType $attributeRecommendations = null, ?\macropage\ebaysdk\trading\StructType\ProductRecommendationsType $productRecommendations = null, ?string $correlationID = null, ?\macropage\ebaysdk\trading\StructType\RecommendationsType $recommendations = null, ?\macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails = null, ?string $title = null, $any = null)
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
    public function getListingAnalyzerRecommendations(): ?\macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType
    {
        return $this->ListingAnalyzerRecommendations;
    }
    /**
     * Set ListingAnalyzerRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setListingAnalyzerRecommendations(?\macropage\ebaysdk\trading\StructType\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations = null): self
    {
        $this->ListingAnalyzerRecommendations = $listingAnalyzerRecommendations;
        
        return $this;
    }
    /**
     * Get SIFFTASRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType|null
     */
    public function getSIFFTASRecommendations(): ?\macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType
    {
        return $this->SIFFTASRecommendations;
    }
    /**
     * Set SIFFTASRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType $sIFFTASRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setSIFFTASRecommendations(?\macropage\ebaysdk\trading\StructType\SIFFTASRecommendationsType $sIFFTASRecommendations = null): self
    {
        $this->SIFFTASRecommendations = $sIFFTASRecommendations;
        
        return $this;
    }
    /**
     * Get PricingRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\PricingRecommendationsType|null
     */
    public function getPricingRecommendations(): ?\macropage\ebaysdk\trading\StructType\PricingRecommendationsType
    {
        return $this->PricingRecommendations;
    }
    /**
     * Set PricingRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\PricingRecommendationsType $pricingRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setPricingRecommendations(?\macropage\ebaysdk\trading\StructType\PricingRecommendationsType $pricingRecommendations = null): self
    {
        $this->PricingRecommendations = $pricingRecommendations;
        
        return $this;
    }
    /**
     * Get AttributeRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\AttributeRecommendationsType|null
     */
    public function getAttributeRecommendations(): ?\macropage\ebaysdk\trading\StructType\AttributeRecommendationsType
    {
        return $this->AttributeRecommendations;
    }
    /**
     * Set AttributeRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\AttributeRecommendationsType $attributeRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setAttributeRecommendations(?\macropage\ebaysdk\trading\StructType\AttributeRecommendationsType $attributeRecommendations = null): self
    {
        $this->AttributeRecommendations = $attributeRecommendations;
        
        return $this;
    }
    /**
     * Get ProductRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\ProductRecommendationsType|null
     */
    public function getProductRecommendations(): ?\macropage\ebaysdk\trading\StructType\ProductRecommendationsType
    {
        return $this->ProductRecommendations;
    }
    /**
     * Set ProductRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\ProductRecommendationsType $productRecommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setProductRecommendations(?\macropage\ebaysdk\trading\StructType\ProductRecommendationsType $productRecommendations = null): self
    {
        $this->ProductRecommendations = $productRecommendations;
        
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID(): ?string
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setCorrelationID(?string $correlationID = null): self
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        
        return $this;
    }
    /**
     * Get Recommendations value
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType|null
     */
    public function getRecommendations(): ?\macropage\ebaysdk\trading\StructType\RecommendationsType
    {
        return $this->Recommendations;
    }
    /**
     * Set Recommendations value
     * @param \macropage\ebaysdk\trading\StructType\RecommendationsType $recommendations
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setRecommendations(?\macropage\ebaysdk\trading\StructType\RecommendationsType $recommendations = null): self
    {
        $this->Recommendations = $recommendations;
        
        return $this;
    }
    /**
     * Get ProductListingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType|null
     */
    public function getProductListingDetails(): ?\macropage\ebaysdk\trading\StructType\ProductListingDetailsType
    {
        return $this->ProductListingDetails;
    }
    /**
     * Set ProductListingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setProductListingDetails(?\macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails = null): self
    {
        $this->ProductListingDetails = $productListingDetails;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetRecommendationsResponseContainerType
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
