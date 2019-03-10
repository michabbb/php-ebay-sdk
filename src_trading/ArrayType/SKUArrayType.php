<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SKUArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: A list of stock-keeping unit (SKU) identifiers that a seller uses in listings.
 * @subpackage Arrays
 */
class SKUArrayType extends AbstractStructArrayBase
{
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: A SKU (stock keeping unit) is an identifier defined by a seller. Some sellers use SKUs to track complex flows of products and information on the client side. A seller can specify a SKU when listing an item with AddItem and related
     * calls. eBay preserves the SKU on the item, enabling you to obtain it before and after an order line item is created. (SKU is recommended as an alternative to ApplicationData.)<br> <br> A SKU is not required to be unique. A seller can specify a
     * particular SKU value on one item or on multiple items. Different sellers can use the same SKUs.<br> <br> If the SKU is unique across a seller's active listings, and if the seller listed the item by using AddFixedPriceItem or RelistFixedPriceItem, the
     * seller can also set Item.InventoryTrackingMethod to SKU. This allows the seller to use SKU instead of ItemID as a unique identifier in subsequent calls, such as GetItem and ReviseInventoryStatus.<br> <br> <span class="tablenote"><b>Note:</b>
     * AddFixedPriceItem and RelistFixedPriceItem are defined in the Merchant Data API (part of Large Merchant Services). </span> | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage
     * information and rules, see the fields that reference this type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SKU;
    /**
     * Constructor method for SKUArrayType
     * @uses SKUArrayType::setSKU()
     * @param string[] $sKU
     */
    public function __construct(array $sKU = array())
    {
        $this
            ->setSKU($sKU);
    }
    /**
     * Get SKU value
     * @return string[]|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @throws \InvalidArgumentException
     * @param string[] $sKU
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType
     */
    public function setSKU(array $sKU = array())
    {
        foreach ($sKU as $sKUArrayTypeSKUItem) {
            // validation for constraint: itemType
            if (!is_string($sKUArrayTypeSKUItem)) {
                throw new \InvalidArgumentException(sprintf('The SKU property can only contain items of string, "%s" given', is_object($sKUArrayTypeSKUItem) ? get_class($sKUArrayTypeSKUItem) : gettype($sKUArrayTypeSKUItem)), __LINE__);
            }
        }
        $this->SKU = $sKU;
        return $this;
    }
    /**
     * Add item to SKU value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType
     */
    public function addToSKU($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SKU property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SKU[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SKU
     */
    public function getAttributeName()
    {
        return 'SKU';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType
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
