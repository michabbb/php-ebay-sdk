<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreCustomPageArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Set of Store custom pages.
 * @subpackage Arrays
 */
class StoreCustomPageArrayType extends AbstractStructArrayBase
{
    /**
     * The CustomPage
     * Meta informations extracted from the WSDL
     * - documentation: A Store custom page.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomPageType[]
     */
    public $CustomPage;
    /**
     * Constructor method for StoreCustomPageArrayType
     * @uses StoreCustomPageArrayType::setCustomPage()
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType[] $customPage
     */
    public function __construct(array $customPage = array())
    {
        $this
            ->setCustomPage($customPage);
    }
    /**
     * Get CustomPage value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType[]|null
     */
    public function getCustomPage()
    {
        return $this->CustomPage;
    }
    /**
     * Set CustomPage value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType[] $customPage
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType
     */
    public function setCustomPage(array $customPage = array())
    {
        foreach ($customPage as $storeCustomPageArrayTypeCustomPageItem) {
            // validation for constraint: itemType
            if (!$storeCustomPageArrayTypeCustomPageItem instanceof \macropage\ebaysdk\trading\StructType\StoreCustomPageType) {
                throw new \InvalidArgumentException(sprintf('The CustomPage property can only contain items of \macropage\ebaysdk\trading\StructType\StoreCustomPageType, "%s" given', is_object($storeCustomPageArrayTypeCustomPageItem) ? get_class($storeCustomPageArrayTypeCustomPageItem) : gettype($storeCustomPageArrayTypeCustomPageItem)), __LINE__);
            }
        }
        $this->CustomPage = $customPage;
        return $this;
    }
    /**
     * Add item to CustomPage value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType
     */
    public function addToCustomPage(\macropage\ebaysdk\trading\StructType\StoreCustomPageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreCustomPageType) {
            throw new \InvalidArgumentException(sprintf('The CustomPage property can only contain items of \macropage\ebaysdk\trading\StructType\StoreCustomPageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomPage[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomPage
     */
    public function getAttributeName()
    {
        return 'CustomPage';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType
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
