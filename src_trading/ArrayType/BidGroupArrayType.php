<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BidGroupArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class BidGroupArrayType extends AbstractStructArrayBase
{
    /**
     * The BidGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidGroupType[]
     */
    protected array $BidGroup = [];
    /**
     * Constructor method for BidGroupArrayType
     * @uses BidGroupArrayType::setBidGroup()
     * @param \macropage\ebaysdk\trading\StructType\BidGroupType[] $bidGroup
     */
    public function __construct(array $bidGroup = [])
    {
        $this
            ->setBidGroup($bidGroup);
    }
    /**
     * Get BidGroup value
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType[]
     */
    public function getBidGroup(): array
    {
        return $this->BidGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setBidGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidGroupForArrayConstraintsFromSetBidGroup(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bidGroupArrayTypeBidGroupItem) {
            // validation for constraint: itemType
            if (!$bidGroupArrayTypeBidGroupItem instanceof \macropage\ebaysdk\trading\StructType\BidGroupType) {
                $invalidValues[] = is_object($bidGroupArrayTypeBidGroupItem) ? get_class($bidGroupArrayTypeBidGroupItem) : sprintf('%s(%s)', gettype($bidGroupArrayTypeBidGroupItem), var_export($bidGroupArrayTypeBidGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidGroup property can only contain items of type \macropage\ebaysdk\trading\StructType\BidGroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BidGroup value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidGroupType[] $bidGroup
     * @return \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType
     */
    public function setBidGroup(array $bidGroup = []): self
    {
        // validation for constraint: array
        if ('' !== ($bidGroupArrayErrorMessage = self::validateBidGroupForArrayConstraintsFromSetBidGroup($bidGroup))) {
            throw new InvalidArgumentException($bidGroupArrayErrorMessage, __LINE__);
        }
        $this->BidGroup = $bidGroup;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\BidGroupType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\BidGroupType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\BidGroupType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\BidGroupType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\BidGroupType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidGroupType $item
     * @return \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BidGroupType) {
            throw new InvalidArgumentException(sprintf('The BidGroup property can only contain items of type \macropage\ebaysdk\trading\StructType\BidGroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BidGroup
     */
    public function getAttributeName(): string
    {
        return 'BidGroup';
    }
}
