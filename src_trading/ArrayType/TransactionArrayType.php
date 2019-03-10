<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for TransactionArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>TransactionArray</b> container, which contains an array of <b>Transaction</b> containers. Each <b>Transaction</b> container consists of detailed information on one order line item.
 * @subpackage Arrays
 */
class TransactionArrayType extends AbstractStructArrayBase
{
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - documentation: A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item. <br/><br/> For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to
     * identified the unpaid order line items that are being combined into one Combined Invoice order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionType[]
     */
    public $Transaction;
    /**
     * Constructor method for TransactionArrayType
     * @uses TransactionArrayType::setTransaction()
     * @param \macropage\ebaysdk\trading\StructType\TransactionType[] $transaction
     */
    public function __construct(array $transaction = array())
    {
        $this
            ->setTransaction($transaction);
    }
    /**
     * Get Transaction value
     * @return \macropage\ebaysdk\trading\StructType\TransactionType[]|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TransactionType[] $transaction
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
     */
    public function setTransaction(array $transaction = array())
    {
        foreach ($transaction as $transactionArrayTypeTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionArrayTypeTransactionItem instanceof \macropage\ebaysdk\trading\StructType\TransactionType) {
                throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of \macropage\ebaysdk\trading\StructType\TransactionType, "%s" given', is_object($transactionArrayTypeTransactionItem) ? get_class($transactionArrayTypeTransactionItem) : gettype($transactionArrayTypeTransactionItem)), __LINE__);
            }
        }
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Add item to Transaction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TransactionType $item
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
     */
    public function addToTransaction(\macropage\ebaysdk\trading\StructType\TransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TransactionType) {
            throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of \macropage\ebaysdk\trading\StructType\TransactionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transaction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Transaction
     */
    public function getAttributeName()
    {
        return 'Transaction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
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
