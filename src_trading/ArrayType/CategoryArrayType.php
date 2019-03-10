<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for CategoryArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Container for a list of categories.
 * @subpackage Arrays
 */
class CategoryArrayType extends AbstractStructArrayBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - documentation: This container provides details about the eBay category identified in the <b>CategoryID</b> field. For <b>GetCategories</b>, this node is not returned when no <b>DetailLevel</b> value is specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType[]
     */
    public $Category;
    /**
     * Constructor method for CategoryArrayType
     * @uses CategoryArrayType::setCategory()
     * @param \macropage\ebaysdk\trading\StructType\CategoryType[] $category
     */
    public function __construct(array $category = array())
    {
        $this
            ->setCategory($category);
    }
    /**
     * Get Category value
     * @return \macropage\ebaysdk\trading\StructType\CategoryType[]|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryType[] $category
     * @return \macropage\ebaysdk\trading\ArrayType\CategoryArrayType
     */
    public function setCategory(array $category = array())
    {
        foreach ($category as $categoryArrayTypeCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryArrayTypeCategoryItem instanceof \macropage\ebaysdk\trading\StructType\CategoryType) {
                throw new \InvalidArgumentException(sprintf('The Category property can only contain items of \macropage\ebaysdk\trading\StructType\CategoryType, "%s" given', is_object($categoryArrayTypeCategoryItem) ? get_class($categoryArrayTypeCategoryItem) : gettype($categoryArrayTypeCategoryItem)), __LINE__);
            }
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Add item to Category value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $item
     * @return \macropage\ebaysdk\trading\ArrayType\CategoryArrayType
     */
    public function addToCategory(\macropage\ebaysdk\trading\StructType\CategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CategoryType) {
            throw new \InvalidArgumentException(sprintf('The Category property can only contain items of \macropage\ebaysdk\trading\StructType\CategoryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Category[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Category
     */
    public function getAttributeName()
    {
        return 'Category';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\CategoryArrayType
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
