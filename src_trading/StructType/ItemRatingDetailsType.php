<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemRatingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Applicable to sites that support the Detailed Seller Ratings feature. The <b>ItemRatingDetailsType</b> contains detailed seller ratings for an order line item in one area. When buyers leave an overall Feedback rating (positive,
 * neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @subpackage Structs
 */
class ItemRatingDetailsType extends AbstractStructBase
{
    /**
     * The RatingDetail
     * Meta informations extracted from the WSDL
     * - documentation: The area of a specific detailed seller rating for an order line item. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described,
     * communication, shipping time, and charges for shipping and handling.
     * - minOccurs: 0
     * @var string
     */
    public $RatingDetail;
    /**
     * The Rating
     * Meta informations extracted from the WSDL
     * - documentation: A detailed seller rating for an order line item applied to the area in the corresponding RatingDetail field. Valid input values are numerical integers 1 though 5.
     * - minOccurs: 0
     * @var int
     */
    public $Rating;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemRatingDetailsType
     * @uses ItemRatingDetailsType::setRatingDetail()
     * @uses ItemRatingDetailsType::setRating()
     * @uses ItemRatingDetailsType::setAny()
     * @param string $ratingDetail
     * @param int $rating
     * @param \DOMDocument $any
     */
    public function __construct($ratingDetail = null, $rating = null, \DOMDocument $any = null)
    {
        $this
            ->setRatingDetail($ratingDetail)
            ->setRating($rating)
            ->setAny($any);
    }
    /**
     * Get RatingDetail value
     * @return string|null
     */
    public function getRatingDetail()
    {
        return $this->RatingDetail;
    }
    /**
     * Set RatingDetail value
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ratingDetail
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
     */
    public function setRatingDetail($ratingDetail = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType::valueIsValid($ratingDetail)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ratingDetail, implode(', ', \macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType::getValidValues())), __LINE__);
        }
        $this->RatingDetail = $ratingDetail;
        return $this;
    }
    /**
     * Get Rating value
     * @return int|null
     */
    public function getRating()
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param int $rating
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
     */
    public function setRating($rating = null)
    {
        // validation for constraint: int
        if (!is_null($rating) && !is_numeric($rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rating)), __LINE__);
        }
        $this->Rating = $rating;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
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
