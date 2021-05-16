<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AverageRatingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Applicable to sites that support the Detailed Seller Rating (DSR) feature. The <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive,
 * neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @subpackage Structs
 */
class AverageRatingDetailsType extends AbstractStructBase
{
    /**
     * The RatingDetail
     * Meta information extracted from the WSDL
     * - documentation: The value shown in this field indicates the Detailed Seller Rating area. The corresponding <b>Rating</b> value is the average rating that the seller has received for this DSR area, and the <b>RatingCount</b> value is the total number
     * of buyer ratings that the seller has received in this DSR area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time,
     * and charges for shipping and handling.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RatingDetail = null;
    /**
     * The Rating
     * Meta information extracted from the WSDL
     * - documentation: This value is the seller's average rating (given by buyers) for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Rating = null;
    /**
     * The RatingCount
     * Meta information extracted from the WSDL
     * - documentation: This value is the total count of buyer ratings given for the DSR area noted in the corresponding <b>RatingDetail</b> field.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RatingCount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for AverageRatingDetailsType
     * @uses AverageRatingDetailsType::setRatingDetail()
     * @uses AverageRatingDetailsType::setRating()
     * @uses AverageRatingDetailsType::setRatingCount()
     * @uses AverageRatingDetailsType::setAny()
     * @param string $ratingDetail
     * @param float $rating
     * @param int $ratingCount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $ratingDetail = null, ?float $rating = null, ?int $ratingCount = null, $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
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
     * @return float|null
     */
    public function getRating(): ?float
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param float $rating
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
     */
    public function setRating(?float $rating = null): self
    {
        // validation for constraint: float
        if (!is_null($rating) && !(is_float($rating) || is_numeric($rating))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rating, true), gettype($rating)), __LINE__);
        }
        $this->Rating = $rating;
        
        return $this;
    }
    /**
     * Get RatingCount value
     * @return int|null
     */
    public function getRatingCount(): ?int
    {
        return $this->RatingCount;
    }
    /**
     * Set RatingCount value
     * @param int $ratingCount
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
     */
    public function setRatingCount(?int $ratingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($ratingCount) && !(is_int($ratingCount) || ctype_digit($ratingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ratingCount, true), gettype($ratingCount)), __LINE__);
        }
        $this->RatingCount = $ratingCount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType
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
