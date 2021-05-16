<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>OrderArray</b> container that is returned in order management calls. The <b>OrderArray</b> container consists of one or more eBay orders that match the input criteria.
 * @subpackage Arrays
 */
class OrderArrayType extends AbstractStructArrayBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderType[]
     */
    protected array $Order = [];
    /**
     * Constructor method for OrderArrayType
     * @uses OrderArrayType::setOrder()
     * @param \macropage\ebaysdk\trading\StructType\OrderType[] $order
     */
    public function __construct(array $order = [])
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get Order value
     * @return \macropage\ebaysdk\trading\StructType\OrderType[]
     */
    public function getOrder(): array
    {
        return $this->Order;
    }
    /**
     * This method is responsible for validating the values passed to the setOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderForArrayConstraintsFromSetOrder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderArrayTypeOrderItem) {
            // validation for constraint: itemType
            if (!$orderArrayTypeOrderItem instanceof \macropage\ebaysdk\trading\StructType\OrderType) {
                $invalidValues[] = is_object($orderArrayTypeOrderItem) ? get_class($orderArrayTypeOrderItem) : sprintf('%s(%s)', gettype($orderArrayTypeOrderItem), var_export($orderArrayTypeOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Order property can only contain items of type \macropage\ebaysdk\trading\StructType\OrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Order value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderType[] $order
     * @return \macropage\ebaysdk\trading\ArrayType\OrderArrayType
     */
    public function setOrder(array $order = []): self
    {
        // validation for constraint: array
        if ('' !== ($orderArrayErrorMessage = self::validateOrderForArrayConstraintsFromSetOrder($order))) {
            throw new InvalidArgumentException($orderArrayErrorMessage, __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\OrderType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\OrderType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\OrderType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\OrderType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\OrderType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderType $item
     * @return \macropage\ebaysdk\trading\ArrayType\OrderArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\OrderType) {
            throw new InvalidArgumentException(sprintf('The Order property can only contain items of type \macropage\ebaysdk\trading\StructType\OrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Order
     */
    public function getAttributeName(): string
    {
        return 'Order';
    }
}
