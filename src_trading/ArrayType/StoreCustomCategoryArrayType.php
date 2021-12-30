<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreCustomCategoryArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of custom categories for the Store.
 * @subpackage Arrays
 */
class StoreCustomCategoryArrayType extends AbstractStructArrayBase
{
    /**
     * The CustomCategory
     * Meta information extracted from the WSDL
     * - documentation: A custom category for your eBay Store.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[]
     */
    protected ?array $CustomCategory = null;
    /**
     * Constructor method for StoreCustomCategoryArrayType
     * @uses StoreCustomCategoryArrayType::setCustomCategory()
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[] $customCategory
     */
    public function __construct(?array $customCategory = null)
    {
        $this
            ->setCustomCategory($customCategory);
    }
    /**
     * Get CustomCategory value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[]
     */
    public function getCustomCategory(): ?array
    {
        return $this->CustomCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomCategoryForArrayConstraintsFromSetCustomCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeCustomCategoryArrayTypeCustomCategoryItem) {
            // validation for constraint: itemType
            if (!$storeCustomCategoryArrayTypeCustomCategoryItem instanceof \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType) {
                $invalidValues[] = is_object($storeCustomCategoryArrayTypeCustomCategoryItem) ? get_class($storeCustomCategoryArrayTypeCustomCategoryItem) : sprintf('%s(%s)', gettype($storeCustomCategoryArrayTypeCustomCategoryItem), var_export($storeCustomCategoryArrayTypeCustomCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomCategory property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomCategory value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[] $customCategory
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
     */
    public function setCustomCategory(?array $customCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($customCategoryArrayErrorMessage = self::validateCustomCategoryForArrayConstraintsFromSetCustomCategory($customCategory))) {
            throw new InvalidArgumentException($customCategoryArrayErrorMessage, __LINE__);
        }
        $this->CustomCategory = $customCategory;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType) {
            throw new InvalidArgumentException(sprintf('The CustomCategory property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomCategory
     */
    public function getAttributeName(): string
    {
        return 'CustomCategory';
    }
}
