<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for RefundArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type was only used for Half.com order refunds, and since the Half.com site has been shut down, this type is no longer applicable. </span> Type used by the <strong>RefundArray</strong>
 * container, which consists of an array of Half.com refunds.
 * @subpackage Arrays
 */
class RefundArrayType extends AbstractStructArrayBase
{
    /**
     * The Refund
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down. </span> This container consists of information about a Half.com refund. It
     * is only returned if a Half.com order is going through (or has completed) the refund process.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundType[]
     */
    public $Refund;
    /**
     * Constructor method for RefundArrayType
     * @uses RefundArrayType::setRefund()
     * @param \macropage\ebaysdk\trading\StructType\RefundType[] $refund
     */
    public function __construct(array $refund = array())
    {
        $this
            ->setRefund($refund);
    }
    /**
     * Get Refund value
     * @return \macropage\ebaysdk\trading\StructType\RefundType[]|null
     */
    public function getRefund()
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundType[] $refund
     * @return \macropage\ebaysdk\trading\ArrayType\RefundArrayType
     */
    public function setRefund(array $refund = array())
    {
        foreach ($refund as $refundArrayTypeRefundItem) {
            // validation for constraint: itemType
            if (!$refundArrayTypeRefundItem instanceof \macropage\ebaysdk\trading\StructType\RefundType) {
                throw new \InvalidArgumentException(sprintf('The Refund property can only contain items of \macropage\ebaysdk\trading\StructType\RefundType, "%s" given', is_object($refundArrayTypeRefundItem) ? get_class($refundArrayTypeRefundItem) : gettype($refundArrayTypeRefundItem)), __LINE__);
            }
        }
        $this->Refund = $refund;
        return $this;
    }
    /**
     * Add item to Refund value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundType $item
     * @return \macropage\ebaysdk\trading\ArrayType\RefundArrayType
     */
    public function addToRefund(\macropage\ebaysdk\trading\StructType\RefundType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundType) {
            throw new \InvalidArgumentException(sprintf('The Refund property can only contain items of \macropage\ebaysdk\trading\StructType\RefundType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Refund[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\RefundType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Refund
     */
    public function getAttributeName()
    {
        return 'Refund';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\RefundArrayType
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
