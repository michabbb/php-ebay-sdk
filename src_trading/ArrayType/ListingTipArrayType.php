<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ListingTipArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class ListingTipArrayType extends AbstractStructArrayBase
{
    /**
     * The ListingTip
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingTipType[]
     */
    protected array $ListingTip = [];
    /**
     * Constructor method for ListingTipArrayType
     * @uses ListingTipArrayType::setListingTip()
     * @param \macropage\ebaysdk\trading\StructType\ListingTipType[] $listingTip
     */
    public function __construct(array $listingTip = [])
    {
        $this
            ->setListingTip($listingTip);
    }
    /**
     * Get ListingTip value
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType[]
     */
    public function getListingTip(): array
    {
        return $this->ListingTip;
    }
    /**
     * This method is responsible for validating the values passed to the setListingTip method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingTip method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingTipForArrayConstraintsFromSetListingTip(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listingTipArrayTypeListingTipItem) {
            // validation for constraint: itemType
            if (!$listingTipArrayTypeListingTipItem instanceof \macropage\ebaysdk\trading\StructType\ListingTipType) {
                $invalidValues[] = is_object($listingTipArrayTypeListingTipItem) ? get_class($listingTipArrayTypeListingTipItem) : sprintf('%s(%s)', gettype($listingTipArrayTypeListingTipItem), var_export($listingTipArrayTypeListingTipItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingTip property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingTipType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ListingTip value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingTipType[] $listingTip
     * @return \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType
     */
    public function setListingTip(array $listingTip = []): self
    {
        // validation for constraint: array
        if ('' !== ($listingTipArrayErrorMessage = self::validateListingTipForArrayConstraintsFromSetListingTip($listingTip))) {
            throw new InvalidArgumentException($listingTipArrayErrorMessage, __LINE__);
        }
        $this->ListingTip = $listingTip;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\ListingTipType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\ListingTipType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\ListingTipType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\ListingTipType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\ListingTipType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingTipType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingTipType) {
            throw new InvalidArgumentException(sprintf('The ListingTip property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingTipType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ListingTip
     */
    public function getAttributeName(): string
    {
        return 'ListingTip';
    }
}
