<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AverageRatingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Applicable to sites that support the Detailed Seller Rating (DSR) feature. The <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive,
 * neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @subpackage Structs
 */
class AverageRatingDetailsType extends AbstractStructBase
{
    /**
     * The RatingDetail
     * Meta informations extracted from the WSDL
     * - documentation: The value shown in this field indicates the Detailed Seller Rating area. The corresponding <b>Rating</b> value is the average rating that the seller has received for this DSR area, and the <b>RatingCount</b> value is the total number
     * of buyer ratings that the seller has received in this DSR area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time,
     * and charges for shipping and handling.
     * - minOccurs: 0
     * @var string
     */
    public $RatingDetail;
    /**
     * The Rating
     * Meta informations extracted from the WSDL
     * - documentation: This value is the seller's average rating (given by buyers) for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     * - minOccurs: 0
     * @var float
     */
    public $Rating;
    /**
     * The RatingCount
     * Meta informations extracted from the WSDL
     * - documentation: This value is the total count of buyer ratings given for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     * - minOccurs: 0
     * @var int
     */
    public $RatingCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AverageRatingDetailsType
     * @uses AverageRatingDetailsType::setRatingDetail()
     * @uses AverageRatingDetailsType::setRating()
     * @uses AverageRatingDetailsType::setRatingCount()
     * @uses AverageRatingDetailsType::setAny()
     * @param string $ratingDetail
     * @param float $rating
     * @param int $ratingCount
     * @param \DOMDocument $any
     */
    public function __construct($ratingDetail = null, $rating = null, $ratingCount = null, \DOMDocument $any = null)
    {
        $this
            ->setRatingDetail($ratingDetail)
            ->setRating($rating)
            ->setRatingCount($ratingCount)
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
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
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
     * @return float|null
     */
    public function getRating()
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param float $rating
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
     */
    public function setRating($rating = null)
    {
        $this->Rating = $rating;
        return $this;
    }
    /**
     * Get RatingCount value
     * @return int|null
     */
    public function getRatingCount()
    {
        return $this->RatingCount;
    }
    /**
     * Set RatingCount value
     * @param int $ratingCount
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
     */
    public function setRatingCount($ratingCount = null)
    {
        // validation for constraint: int
        if (!is_null($ratingCount) && !is_numeric($ratingCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ratingCount)), __LINE__);
        }
        $this->RatingCount = $ratingCount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
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
