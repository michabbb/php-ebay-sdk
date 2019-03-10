<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingEnhancementDurationReferenceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>GalleryFeaturedDurations</b> container that is returned at the <b>SiteDefaults</b> and <b>Category</b> level in a <b>GetCategoryFeatures</b> response. <b>GalleryFeaturedDurations</b> container consists of the
 * supported time durations that a picture gallery can be featured
 * @subpackage Structs
 */
class ListingEnhancementDurationReferenceType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Each returned <b>Duration</b> field indicates a supported time duration that a picture gallery can be featured. The <code>Lifetime</code> value indicates that the Featured Gallery enhancement will be active for the lifetime of the
     * listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Duration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingEnhancementDurationReferenceType
     * @uses ListingEnhancementDurationReferenceType::setDuration()
     * @uses ListingEnhancementDurationReferenceType::setAny()
     * @param string[] $duration
     * @param \DOMDocument $any
     */
    public function __construct(array $duration = array(), \DOMDocument $any = null)
    {
        $this
            ->setDuration($duration)
            ->setAny($any);
    }
    /**
     * Get Duration value
     * @return string[]|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @throws \InvalidArgumentException
     * @param string[] $duration
     * @return \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType
     */
    public function setDuration(array $duration = array())
    {
        foreach ($duration as $listingEnhancementDurationReferenceTypeDurationItem) {
            // validation for constraint: itemType
            if (!is_string($listingEnhancementDurationReferenceTypeDurationItem)) {
                throw new \InvalidArgumentException(sprintf('The Duration property can only contain items of token, "%s" given', is_object($listingEnhancementDurationReferenceTypeDurationItem) ? get_class($listingEnhancementDurationReferenceTypeDurationItem) : gettype($listingEnhancementDurationReferenceTypeDurationItem)), __LINE__);
            }
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Add item to Duration value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType
     */
    public function addToDuration($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Duration property can only contain items of token, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Duration[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType
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
