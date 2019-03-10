<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderTransactionArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>OrderTransactionArray</b> container that is returned in the <b>GetMyeBaySelling</b> and <b>GetMyeBayBuying</b> calls. The <b>OrderTransactionArray</b> container consists a list of orders and each order line item
 * in that order.
 * @subpackage Arrays
 */
class OrderTransactionArrayType extends AbstractStructArrayBase
{
    /**
     * The OrderTransaction
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information on a specific order and each order line item in that order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderTransactionType[]
     */
    public $OrderTransaction;
    /**
     * Constructor method for OrderTransactionArrayType
     * @uses OrderTransactionArrayType::setOrderTransaction()
     * @param \macropage\ebaysdk\trading\StructType\OrderTransactionType[] $orderTransaction
     */
    public function __construct(array $orderTransaction = array())
    {
        $this
            ->setOrderTransaction($orderTransaction);
    }
    /**
     * Get OrderTransaction value
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType[]|null
     */
    public function getOrderTransaction()
    {
        return $this->OrderTransaction;
    }
    /**
     * Set OrderTransaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderTransactionType[] $orderTransaction
     * @return \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType
     */
    public function setOrderTransaction(array $orderTransaction = array())
    {
        foreach ($orderTransaction as $orderTransactionArrayTypeOrderTransactionItem) {
            // validation for constraint: itemType
            if (!$orderTransactionArrayTypeOrderTransactionItem instanceof \macropage\ebaysdk\trading\StructType\OrderTransactionType) {
                throw new \InvalidArgumentException(sprintf('The OrderTransaction property can only contain items of \macropage\ebaysdk\trading\StructType\OrderTransactionType, "%s" given', is_object($orderTransactionArrayTypeOrderTransactionItem) ? get_class($orderTransactionArrayTypeOrderTransactionItem) : gettype($orderTransactionArrayTypeOrderTransactionItem)), __LINE__);
            }
        }
        $this->OrderTransaction = $orderTransaction;
        return $this;
    }
    /**
     * Add item to OrderTransaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderTransactionType $item
     * @return \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType
     */
    public function addToOrderTransaction(\macropage\ebaysdk\trading\StructType\OrderTransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\OrderTransactionType) {
            throw new \InvalidArgumentException(sprintf('The OrderTransaction property can only contain items of \macropage\ebaysdk\trading\StructType\OrderTransactionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OrderTransaction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderTransaction
     */
    public function getAttributeName()
    {
        return 'OrderTransaction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType
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
