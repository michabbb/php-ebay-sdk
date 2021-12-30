<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemTransactionIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ItemTransactionIDArray</b> container in the <b>GetOrderTransactions</b> call. The <b>ItemTransactionIDArray</b> container is used to specify one or more specific order line items to retrieve.
 * @subpackage Arrays
 */
class ItemTransactionIDArrayType extends AbstractStructArrayBase
{
    /**
     * The ItemTransactionID
     * Meta information extracted from the WSDL
     * - documentation: An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve. <br><br> The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and
     * the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[]
     */
    protected ?array $ItemTransactionID = null;
    /**
     * Constructor method for ItemTransactionIDArrayType
     * @uses ItemTransactionIDArrayType::setItemTransactionID()
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[] $itemTransactionID
     */
    public function __construct(?array $itemTransactionID = null)
    {
        $this
            ->setItemTransactionID($itemTransactionID);
    }
    /**
     * Get ItemTransactionID value
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[]
     */
    public function getItemTransactionID(): ?array
    {
        return $this->ItemTransactionID;
    }
    /**
     * This method is responsible for validating the values passed to the setItemTransactionID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemTransactionID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemTransactionIDForArrayConstraintsFromSetItemTransactionID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemTransactionIDArrayTypeItemTransactionIDItem) {
            // validation for constraint: itemType
            if (!$itemTransactionIDArrayTypeItemTransactionIDItem instanceof \macropage\ebaysdk\trading\StructType\ItemTransactionIDType) {
                $invalidValues[] = is_object($itemTransactionIDArrayTypeItemTransactionIDItem) ? get_class($itemTransactionIDArrayTypeItemTransactionIDItem) : sprintf('%s(%s)', gettype($itemTransactionIDArrayTypeItemTransactionIDItem), var_export($itemTransactionIDArrayTypeItemTransactionIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemTransactionID property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemTransactionIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemTransactionID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[] $itemTransactionID
     * @return \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType
     */
    public function setItemTransactionID(?array $itemTransactionID = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemTransactionIDArrayErrorMessage = self::validateItemTransactionIDForArrayConstraintsFromSetItemTransactionID($itemTransactionID))) {
            throw new InvalidArgumentException($itemTransactionIDArrayErrorMessage, __LINE__);
        }
        $this->ItemTransactionID = $itemTransactionID;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\ItemTransactionIDType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\ItemTransactionIDType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\ItemTransactionIDType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\ItemTransactionIDType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\ItemTransactionIDType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ItemTransactionIDArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemTransactionIDType) {
            throw new InvalidArgumentException(sprintf('The ItemTransactionID property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemTransactionIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemTransactionID
     */
    public function getAttributeName(): string
    {
        return 'ItemTransactionID';
    }
}
