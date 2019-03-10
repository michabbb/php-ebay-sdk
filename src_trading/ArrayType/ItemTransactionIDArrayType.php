<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemTransactionIDArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>ItemTransactionIDArray</b> container in the <b>GetOrderTransactions</b> call. The <b>ItemTransactionIDArray</b> container is used to specify one or more specific order line items to retrieve.
 * @subpackage Arrays
 */
class ItemTransactionIDArrayType extends AbstractStructArrayBase
{
    /**
     * The ItemTransactionID
     * Meta informations extracted from the WSDL
     * - documentation: An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve. <br><br> The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and
     * the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[]
     */
    public $ItemTransactionID;
    /**
     * Constructor method for ItemTransactionIDArrayType
     * @uses ItemTransactionIDArrayType::setItemTransactionID()
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[] $itemTransactionID
     */
    public function __construct(array $itemTransactionID = array())
    {
        $this
            ->setItemTransactionID($itemTransactionID);
    }
    /**
     * Get ItemTransactionID value
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[]|null
     */
    public function getItemTransactionID()
    {
        return $this->ItemTransactionID;
    }
    /**
     * Set ItemTransactionID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[] $itemTransactionID
     * @return \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType
     */
    public function setItemTransactionID(array $itemTransactionID = array())
    {
        foreach ($itemTransactionID as $itemTransactionIDArrayTypeItemTransactionIDItem) {
            // validation for constraint: itemType
            if (!$itemTransactionIDArrayTypeItemTransactionIDItem instanceof \macropage\ebaysdk\trading\StructType\ItemTransactionIDType) {
                throw new \InvalidArgumentException(sprintf('The ItemTransactionID property can only contain items of \macropage\ebaysdk\trading\StructType\ItemTransactionIDType, "%s" given', is_object($itemTransactionIDArrayTypeItemTransactionIDItem) ? get_class($itemTransactionIDArrayTypeItemTransactionIDItem) : gettype($itemTransactionIDArrayTypeItemTransactionIDItem)), __LINE__);
            }
        }
        $this->ItemTransactionID = $itemTransactionID;
        return $this;
    }
    /**
     * Add item to ItemTransactionID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType
     */
    public function addToItemTransactionID(\macropage\ebaysdk\trading\StructType\ItemTransactionIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemTransactionIDType) {
            throw new \InvalidArgumentException(sprintf('The ItemTransactionID property can only contain items of \macropage\ebaysdk\trading\StructType\ItemTransactionIDType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemTransactionID[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemTransactionID
     */
    public function getAttributeName()
    {
        return 'ItemTransactionID';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType
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
