<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SellerRatingSummaryArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerRatingSummaryArray</b> container that is returned in the <b>GetFeedback</b> response. The <b>SellerRatingSummaryArray</b> container consists of an array of <b>AverageRatingSummary</b> containers, which
 * provide details on Detailed Seller Ratings (DSRs), including the type of rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the seller's average rating for that DSR type, the total number of DSR ratings, and
 * the period in which those ratings were received (the last year or the last 30 days).
 * @subpackage Arrays
 */
class SellerRatingSummaryArrayType extends AbstractStructArrayBase
{
    /**
     * The AverageRatingSummary
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of a seller's Detailed Seller Rating (DSR) for each type of rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the seller's average rating for each DSR type, the total
     * number of DSR ratings for each DSR type, and the period in which those ratings were received (the last year or the last 30 days).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType[]
     */
    public $AverageRatingSummary;
    /**
     * Constructor method for SellerRatingSummaryArrayType
     * @uses SellerRatingSummaryArrayType::setAverageRatingSummary()
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType[] $averageRatingSummary
     */
    public function __construct(array $averageRatingSummary = array())
    {
        $this
            ->setAverageRatingSummary($averageRatingSummary);
    }
    /**
     * Get AverageRatingSummary value
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType[]|null
     */
    public function getAverageRatingSummary()
    {
        return $this->AverageRatingSummary;
    }
    /**
     * Set AverageRatingSummary value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType[] $averageRatingSummary
     * @return \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType
     */
    public function setAverageRatingSummary(array $averageRatingSummary = array())
    {
        foreach ($averageRatingSummary as $sellerRatingSummaryArrayTypeAverageRatingSummaryItem) {
            // validation for constraint: itemType
            if (!$sellerRatingSummaryArrayTypeAverageRatingSummaryItem instanceof \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType) {
                throw new \InvalidArgumentException(sprintf('The AverageRatingSummary property can only contain items of \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType, "%s" given', is_object($sellerRatingSummaryArrayTypeAverageRatingSummaryItem) ? get_class($sellerRatingSummaryArrayTypeAverageRatingSummaryItem) : gettype($sellerRatingSummaryArrayTypeAverageRatingSummaryItem)), __LINE__);
            }
        }
        $this->AverageRatingSummary = $averageRatingSummary;
        return $this;
    }
    /**
     * Add item to AverageRatingSummary value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType $item
     * @return \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType
     */
    public function addToAverageRatingSummary(\macropage\ebaysdk\trading\StructType\AverageRatingSummaryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType) {
            throw new \InvalidArgumentException(sprintf('The AverageRatingSummary property can only contain items of \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AverageRatingSummary[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AverageRatingSummary
     */
    public function getAttributeName()
    {
        return 'AverageRatingSummary';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\SellerRatingSummaryArrayType
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
