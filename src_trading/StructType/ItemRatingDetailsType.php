<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemRatingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Applicable to sites that support the Detailed Seller Ratings feature. The <b>ItemRatingDetailsType</b> contains detailed seller ratings for an order line item in one area. When buyers leave an overall Feedback rating (positive,
 * neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @subpackage Structs
 */
class ItemRatingDetailsType extends AbstractStructBase
{
    /**
     * The RatingDetail
     * Meta information extracted from the WSDL
     * - documentation: The area of a specific detailed seller rating for an order line item. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described,
     * communication, shipping time, and charges for shipping and handling.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RatingDetail = null;
    /**
     * The Rating
     * Meta information extracted from the WSDL
     * - documentation: A detailed seller rating for an order line item applied to the area in the corresponding RatingDetail field. Valid input values are numerical integers 1 though 5.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Rating = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemRatingDetailsType
     * @uses ItemRatingDetailsType::setRatingDetail()
     * @uses ItemRatingDetailsType::setRating()
     * @uses ItemRatingDetailsType::setAny()
     * @param string $ratingDetail
     * @param int $rating
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $ratingDetail = null, ?int $rating = null, $any = null)
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
    public function getRatingDetail(): ?string
    {
        return $this->RatingDetail;
    }
    /**
     * Set RatingDetail value
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ratingDetail
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
     */
    public function setRatingDetail(?string $ratingDetail = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType::valueIsValid($ratingDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType', is_array($ratingDetail) ? implode(', ', $ratingDetail) : var_export($ratingDetail, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FeedbackRatingDetailCodeType::getValidValues())), __LINE__);
        }
        $this->RatingDetail = $ratingDetail;
        
        return $this;
    }
    /**
     * Get Rating value
     * @return int|null
     */
    public function getRating(): ?int
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param int $rating
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
     */
    public function setRating(?int $rating = null): self
    {
        // validation for constraint: int
        if (!is_null($rating) && !(is_int($rating) || ctype_digit($rating))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rating, true), gettype($rating)), __LINE__);
        }
        $this->Rating = $rating;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
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
