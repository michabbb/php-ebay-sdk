<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for SKUArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: A list of stock-keeping unit (SKU) identifiers that a seller uses in listings.
 * @subpackage Arrays
 */
class SKUArrayType extends AbstractStructArrayBase
{
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: A SKU (stock keeping unit) is an identifier defined by a seller. Some sellers use SKUs to track complex flows of products and information on the client side. A seller can specify a SKU when listing an item with AddItem and related
     * calls. eBay preserves the SKU on the item, enabling you to obtain it before and after an order line item is created. (SKU is recommended as an alternative to ApplicationData.)<br> <br> A SKU is not required to be unique. A seller can specify a
     * particular SKU value on one item or on multiple items. Different sellers can use the same SKUs.<br> <br> If the SKU is unique across a seller's active listings, and if the seller listed the item by using AddFixedPriceItem or RelistFixedPriceItem, the
     * seller can also set Item.InventoryTrackingMethod to SKU. This allows the seller to use SKU instead of ItemID as a unique identifier in subsequent calls, such as GetItem and ReviseInventoryStatus.<br> <br> <span class="tablenote"><b>Note:</b>
     * AddFixedPriceItem and RelistFixedPriceItem are defined in the Merchant Data API (part of Large Merchant Services). </span> | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage
     * information and rules, see the fields that reference this type.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $SKU = [];
    /**
     * Constructor method for SKUArrayType
     * @uses SKUArrayType::setSKU()
     * @param string[] $sKU
     */
    public function __construct(array $sKU = [])
    {
        $this
            ->setSKU($sKU);
    }
    /**
     * Get SKU value
     * @return string[]
     */
    public function getSKU(): array
    {
        return $this->SKU;
    }
    /**
     * This method is responsible for validating the values passed to the setSKU method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSKU method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSKUForArrayConstraintsFromSetSKU(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sKUArrayTypeSKUItem) {
            // validation for constraint: itemType
            if (!is_string($sKUArrayTypeSKUItem)) {
                $invalidValues[] = is_object($sKUArrayTypeSKUItem) ? get_class($sKUArrayTypeSKUItem) : sprintf('%s(%s)', gettype($sKUArrayTypeSKUItem), var_export($sKUArrayTypeSKUItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SKU property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SKU value
     * @throws InvalidArgumentException
     * @param string[] $sKU
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType
     */
    public function setSKU(array $sKU = []): self
    {
        // validation for constraint: array
        if ('' !== ($sKUArrayErrorMessage = self::validateSKUForArrayConstraintsFromSetSKU($sKU))) {
            throw new InvalidArgumentException($sKUArrayErrorMessage, __LINE__);
        }
        $this->SKU = $sKU;
        
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
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SKU property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SKU
     */
    public function getAttributeName(): string
    {
        return 'SKU';
    }
}
