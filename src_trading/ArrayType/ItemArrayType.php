<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Container for a list of items. Can contain zero, one, or multiple <b>ItemType</b> objects, each of which conveys the data for one item listing.
 * @subpackage Arrays
 */
class ItemArrayType extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Contains the data properties that define one item listing. <b>GetSellerEvents</b> and <b>GetSellerList</b> only return items if any are available for the seller within the time window specified in the request.<br> <br> Some optional
     * fields are only returned if the seller defined them for the item. Some fields are only returned under particular conditions specified in the individual field descriptions. For example, a buyer's contact information might only be returned if the
     * member who is making the request (as identified in the <b>eBayAuthToken</b>) has an order relationship with that buyer. <br> <br> For calls that support detail levels, the set of fields returned is also controlled by the value of <b>DetailLevel</b>
     * in the request. For some calls, other parameters in the request can also control the data returned for each item. For example, <b>GranularityLevel</b> controls the fields to return for each item in the <b>GetSellerList</b> response.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType[]
     */
    protected array $Item = [];
    /**
     * Constructor method for ItemArrayType
     * @uses ItemArrayType::setItem()
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $item
     */
    public function __construct(array $item = [])
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType[]
     */
    public function getItem(): array
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemArrayTypeItemItem) {
            // validation for constraint: itemType
            if (!$itemArrayTypeItemItem instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
                $invalidValues[] = is_object($itemArrayTypeItemItem) ? get_class($itemArrayTypeItemItem) : sprintf('%s(%s)', gettype($itemArrayTypeItemItem), var_export($itemArrayTypeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $item
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public function setItem(array $item = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
            throw new InvalidArgumentException(sprintf('The Item property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Item
     */
    public function getAttributeName(): string
    {
        return 'Item';
    }
}
