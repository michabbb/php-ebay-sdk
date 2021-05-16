<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for TransactionArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>TransactionArray</b> container, which contains an array of <b>Transaction</b> containers. Each <b>Transaction</b> container consists of detailed information on one order line item.
 * @subpackage Arrays
 */
class TransactionArrayType extends AbstractStructArrayBase
{
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - documentation: A <b>Transaction</b> container is returned for each line item in the order. This container consists of detailed information on one order line item. <br/><br/> For the <b>AddOrder</b> call, a <b>Transaction</b> container is used to
     * identified the unpaid order line items that are being combined into one Combined Invoice order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionType[]
     */
    protected array $Transaction = [];
    /**
     * Constructor method for TransactionArrayType
     * @uses TransactionArrayType::setTransaction()
     * @param \macropage\ebaysdk\trading\StructType\TransactionType[] $transaction
     */
    public function __construct(array $transaction = [])
    {
        $this
            ->setTransaction($transaction);
    }
    /**
     * Get Transaction value
     * @return \macropage\ebaysdk\trading\StructType\TransactionType[]
     */
    public function getTransaction(): array
    {
        return $this->Transaction;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionForArrayConstraintsFromSetTransaction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $transactionArrayTypeTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionArrayTypeTransactionItem instanceof \macropage\ebaysdk\trading\StructType\TransactionType) {
                $invalidValues[] = is_object($transactionArrayTypeTransactionItem) ? get_class($transactionArrayTypeTransactionItem) : sprintf('%s(%s)', gettype($transactionArrayTypeTransactionItem), var_export($transactionArrayTypeTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction property can only contain items of type \macropage\ebaysdk\trading\StructType\TransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Transaction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TransactionType[] $transaction
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
     */
    public function setTransaction(array $transaction = []): self
    {
        // validation for constraint: array
        if ('' !== ($transactionArrayErrorMessage = self::validateTransactionForArrayConstraintsFromSetTransaction($transaction))) {
            throw new InvalidArgumentException($transactionArrayErrorMessage, __LINE__);
        }
        $this->Transaction = $transaction;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\TransactionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\TransactionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\TransactionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\TransactionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\TransactionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TransactionType $item
     * @return \macropage\ebaysdk\trading\ArrayType\TransactionArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TransactionType) {
            throw new InvalidArgumentException(sprintf('The Transaction property can only contain items of type \macropage\ebaysdk\trading\StructType\TransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Transaction
     */
    public function getAttributeName(): string
    {
        return 'Transaction';
    }
}
