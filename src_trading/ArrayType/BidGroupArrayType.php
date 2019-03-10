<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BidGroupArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class BidGroupArrayType extends AbstractStructArrayBase
{
    /**
     * The BidGroup
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidGroupType[]
     */
    public $BidGroup;
    /**
     * Constructor method for BidGroupArrayType
     * @uses BidGroupArrayType::setBidGroup()
     * @param \macropage\ebaysdk\trading\StructType\BidGroupType[] $bidGroup
     */
    public function __construct(array $bidGroup = array())
    {
        $this
            ->setBidGroup($bidGroup);
    }
    /**
     * Get BidGroup value
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType[]|null
     */
    public function getBidGroup()
    {
        return $this->BidGroup;
    }
    /**
     * Set BidGroup value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidGroupType[] $bidGroup
     * @return \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType
     */
    public function setBidGroup(array $bidGroup = array())
    {
        foreach ($bidGroup as $bidGroupArrayTypeBidGroupItem) {
            // validation for constraint: itemType
            if (!$bidGroupArrayTypeBidGroupItem instanceof \macropage\ebaysdk\trading\StructType\BidGroupType) {
                throw new \InvalidArgumentException(sprintf('The BidGroup property can only contain items of \macropage\ebaysdk\trading\StructType\BidGroupType, "%s" given', is_object($bidGroupArrayTypeBidGroupItem) ? get_class($bidGroupArrayTypeBidGroupItem) : gettype($bidGroupArrayTypeBidGroupItem)), __LINE__);
            }
        }
        $this->BidGroup = $bidGroup;
        return $this;
    }
    /**
     * Add item to BidGroup value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidGroupType $item
     * @return \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType
     */
    public function addToBidGroup(\macropage\ebaysdk\trading\StructType\BidGroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BidGroupType) {
            throw new \InvalidArgumentException(sprintf('The BidGroup property can only contain items of \macropage\ebaysdk\trading\StructType\BidGroupType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BidGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BidGroup
     */
    public function getAttributeName()
    {
        return 'BidGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType
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
