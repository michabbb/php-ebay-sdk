<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for CategoryArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>CategoryArray</b> container that is returned in <b>GetCategories</b>. All categories that match the input criteria of the <b>GetCategories</b> request payload are returned under the <b>CategoryArray</b> container
 * @subpackage Arrays
 */
class CategoryArrayType extends AbstractStructArrayBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: This container provides details about the eBay category identified in the <b>CategoryID</b> field. The <b>DetailLevel</b> field must be included and set to <code>ReturnAll</code> for <b>Category</b>, nodes to appear.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType[]
     */
    protected array $Category = [];
    /**
     * Constructor method for CategoryArrayType
     * @uses CategoryArrayType::setCategory()
     * @param \macropage\ebaysdk\trading\StructType\CategoryType[] $category
     */
    public function __construct(array $category = [])
    {
        $this
            ->setCategory($category);
    }
    /**
     * Get Category value
     * @return \macropage\ebaysdk\trading\StructType\CategoryType[]
     */
    public function getCategory(): array
    {
        return $this->Category;
    }
    /**
     * This method is responsible for validating the values passed to the setCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryForArrayConstraintsFromSetCategory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryArrayTypeCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryArrayTypeCategoryItem instanceof \macropage\ebaysdk\trading\StructType\CategoryType) {
                $invalidValues[] = is_object($categoryArrayTypeCategoryItem) ? get_class($categoryArrayTypeCategoryItem) : sprintf('%s(%s)', gettype($categoryArrayTypeCategoryItem), var_export($categoryArrayTypeCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Category property can only contain items of type \macropage\ebaysdk\trading\StructType\CategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Category value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryType[] $category
     * @return \macropage\ebaysdk\trading\ArrayType\CategoryArrayType
     */
    public function setCategory(array $category = []): self
    {
        // validation for constraint: array
        if ('' !== ($categoryArrayErrorMessage = self::validateCategoryForArrayConstraintsFromSetCategory($category))) {
            throw new InvalidArgumentException($categoryArrayErrorMessage, __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\CategoryType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\CategoryType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\CategoryType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\CategoryType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\CategoryType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $item
     * @return \macropage\ebaysdk\trading\ArrayType\CategoryArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CategoryType) {
            throw new InvalidArgumentException(sprintf('The Category property can only contain items of type \macropage\ebaysdk\trading\StructType\CategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Category
     */
    public function getAttributeName(): string
    {
        return 'Category';
    }
}
