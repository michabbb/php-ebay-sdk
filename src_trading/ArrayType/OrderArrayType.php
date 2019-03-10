<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>OrderArray</b> container that is returned in order management calls. The <b>OrderArray</b> container consists of one or more eBay orders that match the input criteria.
 * @subpackage Arrays
 */
class OrderArrayType extends AbstractStructArrayBase
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - documentation: Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderType[]
     */
    public $Order;
    /**
     * Constructor method for OrderArrayType
     * @uses OrderArrayType::setOrder()
     * @param \macropage\ebaysdk\trading\StructType\OrderType[] $order
     */
    public function __construct(array $order = array())
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get Order value
     * @return \macropage\ebaysdk\trading\StructType\OrderType[]|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderType[] $order
     * @return \macropage\ebaysdk\trading\ArrayType\OrderArrayType
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $orderArrayTypeOrderItem) {
            // validation for constraint: itemType
            if (!$orderArrayTypeOrderItem instanceof \macropage\ebaysdk\trading\StructType\OrderType) {
                throw new \InvalidArgumentException(sprintf('The Order property can only contain items of \macropage\ebaysdk\trading\StructType\OrderType, "%s" given', is_object($orderArrayTypeOrderItem) ? get_class($orderArrayTypeOrderItem) : gettype($orderArrayTypeOrderItem)), __LINE__);
            }
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Add item to Order value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderType $item
     * @return \macropage\ebaysdk\trading\ArrayType\OrderArrayType
     */
    public function addToOrder(\macropage\ebaysdk\trading\StructType\OrderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\OrderType) {
            throw new \InvalidArgumentException(sprintf('The Order property can only contain items of \macropage\ebaysdk\trading\StructType\OrderType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Order[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Order
     */
    public function getAttributeName()
    {
        return 'Order';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\OrderArrayType
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
