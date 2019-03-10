<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ListingTipArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class ListingTipArrayType extends AbstractStructArrayBase
{
    /**
     * The ListingTip
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingTipType[]
     */
    public $ListingTip;
    /**
     * Constructor method for ListingTipArrayType
     * @uses ListingTipArrayType::setListingTip()
     * @param \macropage\ebaysdk\trading\StructType\ListingTipType[] $listingTip
     */
    public function __construct(array $listingTip = array())
    {
        $this
            ->setListingTip($listingTip);
    }
    /**
     * Get ListingTip value
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType[]|null
     */
    public function getListingTip()
    {
        return $this->ListingTip;
    }
    /**
     * Set ListingTip value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingTipType[] $listingTip
     * @return \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType
     */
    public function setListingTip(array $listingTip = array())
    {
        foreach ($listingTip as $listingTipArrayTypeListingTipItem) {
            // validation for constraint: itemType
            if (!$listingTipArrayTypeListingTipItem instanceof \macropage\ebaysdk\trading\StructType\ListingTipType) {
                throw new \InvalidArgumentException(sprintf('The ListingTip property can only contain items of \macropage\ebaysdk\trading\StructType\ListingTipType, "%s" given', is_object($listingTipArrayTypeListingTipItem) ? get_class($listingTipArrayTypeListingTipItem) : gettype($listingTipArrayTypeListingTipItem)), __LINE__);
            }
        }
        $this->ListingTip = $listingTip;
        return $this;
    }
    /**
     * Add item to ListingTip value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingTipType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType
     */
    public function addToListingTip(\macropage\ebaysdk\trading\StructType\ListingTipType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingTipType) {
            throw new \InvalidArgumentException(sprintf('The ListingTip property can only contain items of \macropage\ebaysdk\trading\StructType\ListingTipType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ListingTip[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ListingTip
     */
    public function getAttributeName()
    {
        return 'ListingTip';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\ListingTipArrayType
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
