<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Container for a list of items. Can contain zero, one, or multiple <b>ItemType</b> objects, each of which conveys the data for one item listing.
 * @subpackage Arrays
 */
class ItemArrayType extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: Contains the data properties that define one item listing. <b>GetSellerEvents</b> and <b>GetSellerList</b> only return items if any are available for the seller within the time window specified in the request.<br> <br> Some optional
     * fields are only returned if the seller defined them for the item. Some fields are only returned under particular conditions specified in the individual field descriptions. For example, a buyer's contact information might only be returned if the
     * member who is making the request (as identified in the <b>eBayAuthToken</b>) has an order relationship with that buyer. <br> <br> For calls that support detail levels, the set of fields returned is also controlled by the value of <b>DetailLevel</b>
     * in the request. For some calls, other parameters in the request can also control the data returned for each item. For example, <b>GranularityLevel</b> controls the fields to return for each item in the <b>GetSellerList</b> response.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType[]
     */
    public $Item;
    /**
     * Constructor method for ItemArrayType
     * @uses ItemArrayType::setItem()
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $item
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $itemArrayTypeItemItem) {
            // validation for constraint: itemType
            if (!$itemArrayTypeItemItem instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \macropage\ebaysdk\trading\StructType\ItemType, "%s" given', is_object($itemArrayTypeItemItem) ? get_class($itemArrayTypeItemItem) : gettype($itemArrayTypeItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public function addToItem(\macropage\ebaysdk\trading\StructType\ItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \macropage\ebaysdk\trading\StructType\ItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
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
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType
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
