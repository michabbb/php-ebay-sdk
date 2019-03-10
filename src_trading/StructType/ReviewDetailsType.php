<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviewDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ReviewDetailsType extends AbstractStructBase
{
    /**
     * The AverageRating
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var float
     */
    public $AverageRating;
    /**
     * The Review
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReviewType[]
     */
    public $Review;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReviewDetailsType
     * @uses ReviewDetailsType::setAverageRating()
     * @uses ReviewDetailsType::setReview()
     * @uses ReviewDetailsType::setAny()
     * @param float $averageRating
     * @param \macropage\ebaysdk\trading\StructType\ReviewType[] $review
     * @param \DOMDocument $any
     */
    public function __construct($averageRating = null, array $review = array(), \DOMDocument $any = null)
    {
        $this
            ->setAverageRating($averageRating)
            ->setReview($review)
            ->setAny($any);
    }
    /**
     * Get AverageRating value
     * @return float|null
     */
    public function getAverageRating()
    {
        return $this->AverageRating;
    }
    /**
     * Set AverageRating value
     * @param float $averageRating
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
     */
    public function setAverageRating($averageRating = null)
    {
        $this->AverageRating = $averageRating;
        return $this;
    }
    /**
     * Get Review value
     * @return \macropage\ebaysdk\trading\StructType\ReviewType[]|null
     */
    public function getReview()
    {
        return $this->Review;
    }
    /**
     * Set Review value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReviewType[] $review
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
     */
    public function setReview(array $review = array())
    {
        foreach ($review as $reviewDetailsTypeReviewItem) {
            // validation for constraint: itemType
            if (!$reviewDetailsTypeReviewItem instanceof \macropage\ebaysdk\trading\StructType\ReviewType) {
                throw new \InvalidArgumentException(sprintf('The Review property can only contain items of \macropage\ebaysdk\trading\StructType\ReviewType, "%s" given', is_object($reviewDetailsTypeReviewItem) ? get_class($reviewDetailsTypeReviewItem) : gettype($reviewDetailsTypeReviewItem)), __LINE__);
            }
        }
        $this->Review = $review;
        return $this;
    }
    /**
     * Add item to Review value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReviewType $item
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
     */
    public function addToReview(\macropage\ebaysdk\trading\StructType\ReviewType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ReviewType) {
            throw new \InvalidArgumentException(sprintf('The Review property can only contain items of \macropage\ebaysdk\trading\StructType\ReviewType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Review[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ReviewDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
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
