<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviewDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ReviewDetailsType extends AbstractStructBase
{
    /**
     * The AverageRating
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $AverageRating = null;
    /**
     * The Review
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReviewType[]
     */
    protected array $Review = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ReviewDetailsType
     * @uses ReviewDetailsType::setAverageRating()
     * @uses ReviewDetailsType::setReview()
     * @uses ReviewDetailsType::setAny()
     * @param float $averageRating
     * @param \macropage\ebaysdk\trading\StructType\ReviewType[] $review
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?float $averageRating = null, array $review = [], $any = null)
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
    public function getAverageRating(): ?float
    {
        return $this->AverageRating;
    }
    /**
     * Set AverageRating value
     * @param float $averageRating
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
     */
    public function setAverageRating(?float $averageRating = null): self
    {
        // validation for constraint: float
        if (!is_null($averageRating) && !(is_float($averageRating) || is_numeric($averageRating))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($averageRating, true), gettype($averageRating)), __LINE__);
        }
        $this->AverageRating = $averageRating;
        
        return $this;
    }
    /**
     * Get Review value
     * @return \macropage\ebaysdk\trading\StructType\ReviewType[]
     */
    public function getReview(): array
    {
        return $this->Review;
    }
    /**
     * This method is responsible for validating the values passed to the setReview method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReview method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReviewForArrayConstraintsFromSetReview(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviewDetailsTypeReviewItem) {
            // validation for constraint: itemType
            if (!$reviewDetailsTypeReviewItem instanceof \macropage\ebaysdk\trading\StructType\ReviewType) {
                $invalidValues[] = is_object($reviewDetailsTypeReviewItem) ? get_class($reviewDetailsTypeReviewItem) : sprintf('%s(%s)', gettype($reviewDetailsTypeReviewItem), var_export($reviewDetailsTypeReviewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Review property can only contain items of type \macropage\ebaysdk\trading\StructType\ReviewType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Review value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReviewType[] $review
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
     */
    public function setReview(array $review = []): self
    {
        // validation for constraint: array
        if ('' !== ($reviewArrayErrorMessage = self::validateReviewForArrayConstraintsFromSetReview($review))) {
            throw new InvalidArgumentException($reviewArrayErrorMessage, __LINE__);
        }
        $this->Review = $review;
        
        return $this;
    }
    /**
     * Add item to Review value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReviewType $item
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
     */
    public function addToReview(\macropage\ebaysdk\trading\StructType\ReviewType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ReviewType) {
            throw new InvalidArgumentException(sprintf('The Review property can only contain items of type \macropage\ebaysdk\trading\StructType\ReviewType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Review[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReviewDetailsType
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
