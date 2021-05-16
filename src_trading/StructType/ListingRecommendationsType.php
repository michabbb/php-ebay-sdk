<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is deprecated, as <b>ListingRecommendations</b> containers will no longer be returned in any responses after June 1, 2021. eBay recommends that you integrate with the REST-based <a
 * href="/api-docs/sell/recommendation/overview.html" target="_blank">Recommendation API</a> to retrieve recommendations for improving your listings and sales performance, or with the <a href="/api-docs/sell/compliance/overview.html"
 * target="_blank">Compliance API</a> to discover non-compliant listings or listings that are at risk at becoming non-compliant in the future. </span> <br><br> Type defining the <b>ListingRecommendations</b> container that is conditionally returned in
 * all Add/Revise/Relist/Verify API calls. A <b>ListingRecommendations</b> container consists of one or more <b>Recommendation</b> containers, and each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or
 * brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title,
 * and/or a recommendation to use Fast 'N Free shipping. <br><br> The <b>ListingRecommendations</b> container is only returned if the <b>IncludeRecommendations</b> flag is included and set to 'true' in the API call request.
 * @subpackage Structs
 */
class ListingRecommendationsType extends AbstractStructBase
{
    /**
     * The Recommendation
     * Meta information extracted from the WSDL
     * - documentation: Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture
     * quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned
     * for each listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingRecommendationType[]
     */
    protected array $Recommendation = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ListingRecommendationsType
     * @uses ListingRecommendationsType::setRecommendation()
     * @uses ListingRecommendationsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationType[] $recommendation
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $recommendation = [], $any = null)
    {
        $this
            ->setRecommendation($recommendation)
            ->setAny($any);
    }
    /**
     * Get Recommendation value
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationType[]
     */
    public function getRecommendation(): array
    {
        return $this->Recommendation;
    }
    /**
     * This method is responsible for validating the values passed to the setRecommendation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecommendation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecommendationForArrayConstraintsFromSetRecommendation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listingRecommendationsTypeRecommendationItem) {
            // validation for constraint: itemType
            if (!$listingRecommendationsTypeRecommendationItem instanceof \macropage\ebaysdk\trading\StructType\ListingRecommendationType) {
                $invalidValues[] = is_object($listingRecommendationsTypeRecommendationItem) ? get_class($listingRecommendationsTypeRecommendationItem) : sprintf('%s(%s)', gettype($listingRecommendationsTypeRecommendationItem), var_export($listingRecommendationsTypeRecommendationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Recommendation property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingRecommendationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Recommendation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationType[] $recommendation
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
     */
    public function setRecommendation(array $recommendation = []): self
    {
        // validation for constraint: array
        if ('' !== ($recommendationArrayErrorMessage = self::validateRecommendationForArrayConstraintsFromSetRecommendation($recommendation))) {
            throw new InvalidArgumentException($recommendationArrayErrorMessage, __LINE__);
        }
        $this->Recommendation = $recommendation;
        
        return $this;
    }
    /**
     * Add item to Recommendation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationType $item
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
     */
    public function addToRecommendation(\macropage\ebaysdk\trading\StructType\ListingRecommendationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingRecommendationType) {
            throw new InvalidArgumentException(sprintf('The Recommendation property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingRecommendationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Recommendation[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
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
