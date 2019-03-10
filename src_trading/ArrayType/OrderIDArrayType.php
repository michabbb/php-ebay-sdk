<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderIDArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>OrderIDArray</b> container, which consists of an array of order IDs. These order IDs specify the single and multiple line item orders to retrieve.
 * @subpackage Arrays
 */
class OrderIDArrayType extends AbstractStructArrayBase
{
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order. For a single line item order, this value is actually the <b>OrderLineItemID</b> value, which is a concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two
     * values, such as '121124971073-1094989827002' for a fixed-price listing, or '121124971074-0' for an auction listing. For a multiple line item order (known as a Combined Invoice order), the <b>OrderID</b> value is created by eBay when the buyer/seller
     * combines multiple line items into one order, and the buyer makes one payment for all line items from the same seller. "Combined Invoice" orders are created through the Web flow, or when the buyer or seller creates a "Combined Invoice" order by using
     * the <a href="AddOrder.html">AddOrder</a> call. An example of "Combined Invoice" order ID is '155643809010'. <br><br> If one or more <b>OrderID</b> values are used, all other input filters are ignored. <br><br> | A unique identifier for an order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $OrderID;
    /**
     * Constructor method for OrderIDArrayType
     * @uses OrderIDArrayType::setOrderID()
     * @param string[] $orderID
     */
    public function __construct(array $orderID = array())
    {
        $this
            ->setOrderID($orderID);
    }
    /**
     * Get OrderID value
     * @return string[]|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @throws \InvalidArgumentException
     * @param string[] $orderID
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
     */
    public function setOrderID(array $orderID = array())
    {
        foreach ($orderID as $orderIDArrayTypeOrderIDItem) {
            // validation for constraint: itemType
            if (!is_string($orderIDArrayTypeOrderIDItem)) {
                throw new \InvalidArgumentException(sprintf('The OrderID property can only contain items of string, "%s" given', is_object($orderIDArrayTypeOrderIDItem) ? get_class($orderIDArrayTypeOrderIDItem) : gettype($orderIDArrayTypeOrderIDItem)), __LINE__);
            }
        }
        $this->OrderID = $orderID;
        return $this;
    }
    /**
     * Add item to OrderID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
     */
    public function addToOrderID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The OrderID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OrderID[] = $item;
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
     * @return string OrderID
     */
    public function getAttributeName()
    {
        return 'OrderID';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
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
