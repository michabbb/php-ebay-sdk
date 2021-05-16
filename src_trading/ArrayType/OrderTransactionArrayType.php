<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderTransactionArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>OrderTransactionArray</b> container that is returned in the <b>GetMyeBaySelling</b> and <b>GetMyeBayBuying</b> calls. The <b>OrderTransactionArray</b> container consists a list of orders and each order line item
 * in that order.
 * @subpackage Arrays
 */
class OrderTransactionArrayType extends AbstractStructArrayBase
{
    /**
     * The OrderTransaction
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information on a specific order and each order line item in that order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderTransactionType[]
     */
    protected array $OrderTransaction = [];
    /**
     * Constructor method for OrderTransactionArrayType
     * @uses OrderTransactionArrayType::setOrderTransaction()
     * @param \macropage\ebaysdk\trading\StructType\OrderTransactionType[] $orderTransaction
     */
    public function __construct(array $orderTransaction = [])
    {
        $this
            ->setOrderTransaction($orderTransaction);
    }
    /**
     * Get OrderTransaction value
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType[]
     */
    public function getOrderTransaction(): array
    {
        return $this->OrderTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderTransactionForArrayConstraintsFromSetOrderTransaction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderTransactionArrayTypeOrderTransactionItem) {
            // validation for constraint: itemType
            if (!$orderTransactionArrayTypeOrderTransactionItem instanceof \macropage\ebaysdk\trading\StructType\OrderTransactionType) {
                $invalidValues[] = is_object($orderTransactionArrayTypeOrderTransactionItem) ? get_class($orderTransactionArrayTypeOrderTransactionItem) : sprintf('%s(%s)', gettype($orderTransactionArrayTypeOrderTransactionItem), var_export($orderTransactionArrayTypeOrderTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderTransaction property can only contain items of type \macropage\ebaysdk\trading\StructType\OrderTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OrderTransaction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderTransactionType[] $orderTransaction
     * @return \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType
     */
    public function setOrderTransaction(array $orderTransaction = []): self
    {
        // validation for constraint: array
        if ('' !== ($orderTransactionArrayErrorMessage = self::validateOrderTransactionForArrayConstraintsFromSetOrderTransaction($orderTransaction))) {
            throw new InvalidArgumentException($orderTransactionArrayErrorMessage, __LINE__);
        }
        $this->OrderTransaction = $orderTransaction;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\OrderTransactionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\OrderTransactionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\OrderTransactionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\OrderTransactionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\OrderTransactionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderTransactionType $item
     * @return \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\OrderTransactionType) {
            throw new InvalidArgumentException(sprintf('The OrderTransaction property can only contain items of type \macropage\ebaysdk\trading\StructType\OrderTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderTransaction
     */
    public function getAttributeName(): string
    {
        return 'OrderTransaction';
    }
}
