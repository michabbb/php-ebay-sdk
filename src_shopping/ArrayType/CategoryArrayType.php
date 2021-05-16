<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for CategoryArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>CategoryArray</b> container that is returned in the <b>GetCategoryInfo</b> call. The <b>CategoryArray</b> container consists of high-level information about the category specified in the call request, as
 * well as information on that category's child category.
 * @subpackage Arrays
 */
class CategoryArrayType extends AbstractStructArrayBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: This container consists of high-level details of a category, including its category ID value, full category path (by name and by category ID), its level in the eBay site's category hierarchy, category ID of its parent category, and a
     * boolean value to indicate if it is a listing (leaf) category. <br/><br/> At least one <b>Category</b> container is returned (as long as the category is found based on the <b>CategoryID</b> value that is passed in to the request), and multiple
     * <b>Category</b> containers are returned if the <b>IncludeSelector</b> field is included in the request, set to <code>ChildCategories</code>, and the category has child categories.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\CategoryType[]
     */
    protected array $Category = [];
    /**
     * Constructor method for CategoryArrayType
     * @uses CategoryArrayType::setCategory()
     * @param \macropage\ebaysdk\shopping\StructType\CategoryType[] $category
     */
    public function __construct(array $category = [])
    {
        $this
            ->setCategory($category);
    }
    /**
     * Get Category value
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType[]
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
            if (!$categoryArrayTypeCategoryItem instanceof \macropage\ebaysdk\shopping\StructType\CategoryType) {
                $invalidValues[] = is_object($categoryArrayTypeCategoryItem) ? get_class($categoryArrayTypeCategoryItem) : sprintf('%s(%s)', gettype($categoryArrayTypeCategoryItem), var_export($categoryArrayTypeCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Category property can only contain items of type \macropage\ebaysdk\shopping\StructType\CategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Category value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\CategoryType[] $category
     * @return \macropage\ebaysdk\shopping\ArrayType\CategoryArrayType
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
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType|null
     */
    public function current(): ?\macropage\ebaysdk\shopping\StructType\CategoryType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType|null
     */
    public function item($index): ?\macropage\ebaysdk\shopping\StructType\CategoryType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType|null
     */
    public function first(): ?\macropage\ebaysdk\shopping\StructType\CategoryType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType|null
     */
    public function last(): ?\macropage\ebaysdk\shopping\StructType\CategoryType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\shopping\StructType\CategoryType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\CategoryType $item
     * @return \macropage\ebaysdk\shopping\ArrayType\CategoryArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\CategoryType) {
            throw new InvalidArgumentException(sprintf('The Category property can only contain items of type \macropage\ebaysdk\shopping\StructType\CategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
