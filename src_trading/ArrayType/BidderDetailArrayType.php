<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for BidderDetailArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class BidderDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The BidderDetail
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidderDetailType[]
     */
    public $BidderDetail;
    /**
     * Constructor method for BidderDetailArrayType
     * @uses BidderDetailArrayType::setBidderDetail()
     * @param \macropage\ebaysdk\trading\StructType\BidderDetailType[] $bidderDetail
     */
    public function __construct(array $bidderDetail = array())
    {
        $this
            ->setBidderDetail($bidderDetail);
    }
    /**
     * Get BidderDetail value
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType[]|null
     */
    public function getBidderDetail()
    {
        return $this->BidderDetail;
    }
    /**
     * Set BidderDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidderDetailType[] $bidderDetail
     * @return \macropage\ebaysdk\trading\ArrayType\BidderDetailArrayType
     */
    public function setBidderDetail(array $bidderDetail = array())
    {
        foreach ($bidderDetail as $bidderDetailArrayTypeBidderDetailItem) {
            // validation for constraint: itemType
            if (!$bidderDetailArrayTypeBidderDetailItem instanceof \macropage\ebaysdk\trading\StructType\BidderDetailType) {
                throw new \InvalidArgumentException(sprintf('The BidderDetail property can only contain items of \macropage\ebaysdk\trading\StructType\BidderDetailType, "%s" given', is_object($bidderDetailArrayTypeBidderDetailItem) ? get_class($bidderDetailArrayTypeBidderDetailItem) : gettype($bidderDetailArrayTypeBidderDetailItem)), __LINE__);
            }
        }
        $this->BidderDetail = $bidderDetail;
        return $this;
    }
    /**
     * Add item to BidderDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidderDetailType $item
     * @return \macropage\ebaysdk\trading\ArrayType\BidderDetailArrayType
     */
    public function addToBidderDetail(\macropage\ebaysdk\trading\StructType\BidderDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BidderDetailType) {
            throw new \InvalidArgumentException(sprintf('The BidderDetail property can only contain items of \macropage\ebaysdk\trading\StructType\BidderDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BidderDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\BidderDetailType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BidderDetail
     */
    public function getAttributeName()
    {
        return 'BidderDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\BidderDetailArrayType
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
