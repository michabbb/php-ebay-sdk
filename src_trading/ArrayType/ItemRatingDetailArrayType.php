<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemRatingDetailArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>SellerItemRatingDetailArray</b> container in the <b>LeaveFeedback</b> request payload. This container is used by an eBay buyer to leave one or more Detailed Seller Ratings for their order partner concerning an
 * order line item.
 * @subpackage Arrays
 */
class ItemRatingDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The ItemRatingDetails
     * Meta information extracted from the WSDL
     * - documentation: The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described,
     * Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas. <br><br> Applicable to sites that support the Detailed Seller Ratings feature.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType[]
     */
    protected ?array $ItemRatingDetails = null;
    /**
     * Constructor method for ItemRatingDetailArrayType
     * @uses ItemRatingDetailArrayType::setItemRatingDetails()
     * @param \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType[] $itemRatingDetails
     */
    public function __construct(?array $itemRatingDetails = null)
    {
        $this
            ->setItemRatingDetails($itemRatingDetails);
    }
    /**
     * Get ItemRatingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType[]
     */
    public function getItemRatingDetails(): ?array
    {
        return $this->ItemRatingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setItemRatingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemRatingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemRatingDetailsForArrayConstraintsFromSetItemRatingDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemRatingDetailArrayTypeItemRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$itemRatingDetailArrayTypeItemRatingDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType) {
                $invalidValues[] = is_object($itemRatingDetailArrayTypeItemRatingDetailsItem) ? get_class($itemRatingDetailArrayTypeItemRatingDetailsItem) : sprintf('%s(%s)', gettype($itemRatingDetailArrayTypeItemRatingDetailsItem), var_export($itemRatingDetailArrayTypeItemRatingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemRatingDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemRatingDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType[] $itemRatingDetails
     * @return \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType
     */
    public function setItemRatingDetails(?array $itemRatingDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemRatingDetailsArrayErrorMessage = self::validateItemRatingDetailsForArrayConstraintsFromSetItemRatingDetails($itemRatingDetails))) {
            throw new InvalidArgumentException($itemRatingDetailsArrayErrorMessage, __LINE__);
        }
        $this->ItemRatingDetails = $itemRatingDetails;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\ItemRatingDetailsType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType) {
            throw new InvalidArgumentException(sprintf('The ItemRatingDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemRatingDetails
     */
    public function getAttributeName(): string
    {
        return 'ItemRatingDetails';
    }
}
