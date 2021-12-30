<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SellerRatingSummaryArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerRatingSummaryArray</b> container that is returned in the <b>GetFeedback</b> response. The <b>SellerRatingSummaryArray</b> container consists of an array of <b>AverageRatingSummary</b> containers, which
 * provide details on Detailed Seller Ratings (DSRs), including the type of rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the seller's average rating for that DSR type, the total number of DSR ratings, and
 * the period in which those ratings were received (the last year or the last 30 days).
 * @subpackage Arrays
 */
class SellerRatingSummaryArrayType extends AbstractStructArrayBase
{
    /**
     * The AverageRatingSummary
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of a seller's Detailed Seller Rating (DSR) for each type of rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the seller's average rating for each DSR type, the total
     * number of DSR ratings for each DSR type, and the period in which those ratings were received (the last year or the last 30 days).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType[]
     */
    protected ?array $AverageRatingSummary = null;
    /**
     * Constructor method for SellerRatingSummaryArrayType
     * @uses SellerRatingSummaryArrayType::setAverageRatingSummary()
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType[] $averageRatingSummary
     */
    public function __construct(?array $averageRatingSummary = null)
    {
        $this
            ->setAverageRatingSummary($averageRatingSummary);
    }
    /**
     * Get AverageRatingSummary value
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType[]
     */
    public function getAverageRatingSummary(): ?array
    {
        return $this->AverageRatingSummary;
    }
    /**
     * This method is responsible for validating the values passed to the setAverageRatingSummary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAverageRatingSummary method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAverageRatingSummaryForArrayConstraintsFromSetAverageRatingSummary(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellerRatingSummaryArrayTypeAverageRatingSummaryItem) {
            // validation for constraint: itemType
            if (!$sellerRatingSummaryArrayTypeAverageRatingSummaryItem instanceof \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType) {
                $invalidValues[] = is_object($sellerRatingSummaryArrayTypeAverageRatingSummaryItem) ? get_class($sellerRatingSummaryArrayTypeAverageRatingSummaryItem) : sprintf('%s(%s)', gettype($sellerRatingSummaryArrayTypeAverageRatingSummaryItem), var_export($sellerRatingSummaryArrayTypeAverageRatingSummaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AverageRatingSummary property can only contain items of type \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AverageRatingSummary value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType[] $averageRatingSummary
     * @return \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType
     */
    public function setAverageRatingSummary(?array $averageRatingSummary = null): self
    {
        // validation for constraint: array
        if ('' !== ($averageRatingSummaryArrayErrorMessage = self::validateAverageRatingSummaryForArrayConstraintsFromSetAverageRatingSummary($averageRatingSummary))) {
            throw new InvalidArgumentException($averageRatingSummaryArrayErrorMessage, __LINE__);
        }
        $this->AverageRatingSummary = $averageRatingSummary;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType $item
     * @return \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType) {
            throw new InvalidArgumentException(sprintf('The AverageRatingSummary property can only contain items of type \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AverageRatingSummary
     */
    public function getAttributeName(): string
    {
        return 'AverageRatingSummary';
    }
}
