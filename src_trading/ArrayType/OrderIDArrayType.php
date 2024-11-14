<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for OrderIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>OrderIDArray</b> container, which consists of an array of order IDs. The <b>OrderIDArray</b> container is used to specify one or more orders to retrieve in a <b>GetOrders</b> call.
 * @subpackage Arrays
 */
class OrderIDArrayType extends AbstractStructArrayBase
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order. If one or more <b>OrderID</b> values are used in a <b>GetOrders</b> call, any order status or date range filters are ignored. <br><br> <span class="tablenote"><b>Note: </b> The unique identifier
     * of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as request filters/parameters, including the <b>GetOrders</b> call, will support the
     * identifiers for both unpaid and paid orders. </span> | Type that represents the unique identifier for an eBay order. The format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and
     * multiple line item orders.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $OrderID = null;
    /**
     * Constructor method for OrderIDArrayType
     * @uses OrderIDArrayType::setOrderID()
     * @param string[] $orderID
     */
    public function __construct(?array $orderID = null)
    {
        $this
            ->setOrderID($orderID);
    }
    /**
     * Get OrderID value
     * @return string[]
     */
    public function getOrderID(): ?array
    {
        return $this->OrderID;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderIDForArrayConstraintsFromSetOrderID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderIDArrayTypeOrderIDItem) {
            // validation for constraint: itemType
            if (!is_string($orderIDArrayTypeOrderIDItem)) {
                $invalidValues[] = is_object($orderIDArrayTypeOrderIDItem) ? get_class($orderIDArrayTypeOrderIDItem) : sprintf('%s(%s)', gettype($orderIDArrayTypeOrderIDItem), var_export($orderIDArrayTypeOrderIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OrderID value
     * @throws InvalidArgumentException
     * @param string[] $orderID
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
     */
    public function setOrderID(?array $orderID = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderIDArrayErrorMessage = self::validateOrderIDForArrayConstraintsFromSetOrderID($orderID))) {
            throw new InvalidArgumentException($orderIDArrayErrorMessage, __LINE__);
        }
        $this->OrderID = $orderID;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OrderID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderID
     */
    public function getAttributeName(): string
    {
        return 'OrderID';
    }
}
