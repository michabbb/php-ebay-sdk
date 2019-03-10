<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreColorSchemeArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Set of eBay Store color schemes.
 * @subpackage Arrays
 */
class StoreColorSchemeArrayType extends AbstractStructArrayBase
{
    /**
     * The ColorScheme
     * Meta informations extracted from the WSDL
     * - documentation: A Store color scheme.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreColorSchemeType[]
     */
    public $ColorScheme;
    /**
     * Constructor method for StoreColorSchemeArrayType
     * @uses StoreColorSchemeArrayType::setColorScheme()
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType[] $colorScheme
     */
    public function __construct(array $colorScheme = array())
    {
        $this
            ->setColorScheme($colorScheme);
    }
    /**
     * Get ColorScheme value
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType[]|null
     */
    public function getColorScheme()
    {
        return $this->ColorScheme;
    }
    /**
     * Set ColorScheme value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType[] $colorScheme
     * @return \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType
     */
    public function setColorScheme(array $colorScheme = array())
    {
        foreach ($colorScheme as $storeColorSchemeArrayTypeColorSchemeItem) {
            // validation for constraint: itemType
            if (!$storeColorSchemeArrayTypeColorSchemeItem instanceof \macropage\ebaysdk\trading\StructType\StoreColorSchemeType) {
                throw new \InvalidArgumentException(sprintf('The ColorScheme property can only contain items of \macropage\ebaysdk\trading\StructType\StoreColorSchemeType, "%s" given', is_object($storeColorSchemeArrayTypeColorSchemeItem) ? get_class($storeColorSchemeArrayTypeColorSchemeItem) : gettype($storeColorSchemeArrayTypeColorSchemeItem)), __LINE__);
            }
        }
        $this->ColorScheme = $colorScheme;
        return $this;
    }
    /**
     * Add item to ColorScheme value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType
     */
    public function addToColorScheme(\macropage\ebaysdk\trading\StructType\StoreColorSchemeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreColorSchemeType) {
            throw new \InvalidArgumentException(sprintf('The ColorScheme property can only contain items of \macropage\ebaysdk\trading\StructType\StoreColorSchemeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ColorScheme[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ColorScheme
     */
    public function getAttributeName()
    {
        return 'ColorScheme';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType
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
