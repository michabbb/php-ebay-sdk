<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingRecommendationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ListingRecommendations</b> container that is conditionally returned in all Add/Revise/Relist/Verify API calls. A <b>ListingRecommendations</b> container consists of one or more <b>Recommendation</b> containers,
 * and each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality
 * requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> The <b>ListingRecommendations</b> container is only returned if the
 * <b>IncludeRecommendations</b> flag is included and set to 'true' in the API call request.
 * @subpackage Structs
 */
class ListingRecommendationsType extends AbstractStructBase
{
    /**
     * The Recommendation
     * Meta informations extracted from the WSDL
     * - documentation: Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture
     * quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned
     * for each listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingRecommendationType[]
     */
    public $Recommendation;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingRecommendationsType
     * @uses ListingRecommendationsType::setRecommendation()
     * @uses ListingRecommendationsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationType[] $recommendation
     * @param \DOMDocument $any
     */
    public function __construct(array $recommendation = array(), \DOMDocument $any = null)
    {
        $this
            ->setRecommendation($recommendation)
            ->setAny($any);
    }
    /**
     * Get Recommendation value
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationType[]|null
     */
    public function getRecommendation()
    {
        return $this->Recommendation;
    }
    /**
     * Set Recommendation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationType[] $recommendation
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
     */
    public function setRecommendation(array $recommendation = array())
    {
        foreach ($recommendation as $listingRecommendationsTypeRecommendationItem) {
            // validation for constraint: itemType
            if (!$listingRecommendationsTypeRecommendationItem instanceof \macropage\ebaysdk\trading\StructType\ListingRecommendationType) {
                throw new \InvalidArgumentException(sprintf('The Recommendation property can only contain items of \macropage\ebaysdk\trading\StructType\ListingRecommendationType, "%s" given', is_object($listingRecommendationsTypeRecommendationItem) ? get_class($listingRecommendationsTypeRecommendationItem) : gettype($listingRecommendationsTypeRecommendationItem)), __LINE__);
            }
        }
        $this->Recommendation = $recommendation;
        return $this;
    }
    /**
     * Add item to Recommendation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationType $item
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
     */
    public function addToRecommendation(\macropage\ebaysdk\trading\StructType\ListingRecommendationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingRecommendationType) {
            throw new \InvalidArgumentException(sprintf('The Recommendation property can only contain items of \macropage\ebaysdk\trading\StructType\ListingRecommendationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Recommendation[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingRecommendationsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
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
