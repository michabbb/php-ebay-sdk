<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreCustomCategoryArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Set of custom categories for the Store.
 * @subpackage Arrays
 */
class StoreCustomCategoryArrayType extends AbstractStructArrayBase
{
    /**
     * The CustomCategory
     * Meta informations extracted from the WSDL
     * - documentation: A custom category for your eBay Store.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[]
     */
    public $CustomCategory;
    /**
     * Constructor method for StoreCustomCategoryArrayType
     * @uses StoreCustomCategoryArrayType::setCustomCategory()
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[] $customCategory
     */
    public function __construct(array $customCategory = array())
    {
        $this
            ->setCustomCategory($customCategory);
    }
    /**
     * Get CustomCategory value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[]|null
     */
    public function getCustomCategory()
    {
        return $this->CustomCategory;
    }
    /**
     * Set CustomCategory value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[] $customCategory
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
     */
    public function setCustomCategory(array $customCategory = array())
    {
        foreach ($customCategory as $storeCustomCategoryArrayTypeCustomCategoryItem) {
            // validation for constraint: itemType
            if (!$storeCustomCategoryArrayTypeCustomCategoryItem instanceof \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType) {
                throw new \InvalidArgumentException(sprintf('The CustomCategory property can only contain items of \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType, "%s" given', is_object($storeCustomCategoryArrayTypeCustomCategoryItem) ? get_class($storeCustomCategoryArrayTypeCustomCategoryItem) : gettype($storeCustomCategoryArrayTypeCustomCategoryItem)), __LINE__);
            }
        }
        $this->CustomCategory = $customCategory;
        return $this;
    }
    /**
     * Add item to CustomCategory value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
     */
    public function addToCustomCategory(\macropage\ebaysdk\trading\StructType\StoreCustomCategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType) {
            throw new \InvalidArgumentException(sprintf('The CustomCategory property can only contain items of \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomCategory[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomCategory
     */
    public function getAttributeName()
    {
        return 'CustomCategory';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
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
