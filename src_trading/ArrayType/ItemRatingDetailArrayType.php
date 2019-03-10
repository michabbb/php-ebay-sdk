<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemRatingDetailArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>SellerItemRatingDetailArray</b> container in the <b>LeaveFeedback</b> request payload. This container is used by an eBay buyer to leave one or more Detailed Seller Ratings for their order partner concerning an
 * order line item.
 * @subpackage Arrays
 */
class ItemRatingDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The ItemRatingDetails
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described,
     * Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas. <br><br> Applicable to sites that support the Detailed Seller Ratings feature.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType[]
     */
    public $ItemRatingDetails;
    /**
     * Constructor method for ItemRatingDetailArrayType
     * @uses ItemRatingDetailArrayType::setItemRatingDetails()
     * @param \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType[] $itemRatingDetails
     */
    public function __construct(array $itemRatingDetails = array())
    {
        $this
            ->setItemRatingDetails($itemRatingDetails);
    }
    /**
     * Get ItemRatingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType[]|null
     */
    public function getItemRatingDetails()
    {
        return $this->ItemRatingDetails;
    }
    /**
     * Set ItemRatingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType[] $itemRatingDetails
     * @return \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType
     */
    public function setItemRatingDetails(array $itemRatingDetails = array())
    {
        foreach ($itemRatingDetails as $itemRatingDetailArrayTypeItemRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$itemRatingDetailArrayTypeItemRatingDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ItemRatingDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType, "%s" given', is_object($itemRatingDetailArrayTypeItemRatingDetailsItem) ? get_class($itemRatingDetailArrayTypeItemRatingDetailsItem) : gettype($itemRatingDetailArrayTypeItemRatingDetailsItem)), __LINE__);
            }
        }
        $this->ItemRatingDetails = $itemRatingDetails;
        return $this;
    }
    /**
     * Add item to ItemRatingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType
     */
    public function addToItemRatingDetails(\macropage\ebaysdk\trading\StructType\ItemRatingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ItemRatingDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemRatingDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ItemRatingDetailsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemRatingDetails
     */
    public function getAttributeName()
    {
        return 'ItemRatingDetails';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\ItemRatingDetailArrayType
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
