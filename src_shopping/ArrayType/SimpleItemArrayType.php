<?php

namespace macropage\ebaysdk\shopping\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SimpleItemArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call. </span>
 * @subpackage Arrays
 */
class SimpleItemArrayType extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>SimpleItemArrayType</b> and the <b>Item</b> element are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleItemType[]
     */
    public $Item;
    /**
     * Constructor method for SimpleItemArrayType
     * @uses SimpleItemArrayType::setItem()
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType[] $item
     * @return \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $simpleItemArrayTypeItemItem) {
            // validation for constraint: itemType
            if (!$simpleItemArrayTypeItemItem instanceof \macropage\ebaysdk\shopping\StructType\SimpleItemType) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \macropage\ebaysdk\shopping\StructType\SimpleItemType, "%s" given', is_object($simpleItemArrayTypeItemItem) ? get_class($simpleItemArrayTypeItemItem) : gettype($simpleItemArrayTypeItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType $item
     * @return \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType
     */
    public function addToItem(\macropage\ebaysdk\shopping\StructType\SimpleItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\SimpleItemType) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \macropage\ebaysdk\shopping\StructType\SimpleItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Item
     */
    public function getAttributeName()
    {
        return 'Item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\ArrayType\SimpleItemArrayType
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
