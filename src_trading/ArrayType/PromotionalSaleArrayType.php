<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for PromotionalSaleArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <strong>PromotionalSaleDetails</strong> container returned in the <strong>GetPromotionalSaleDetails</strong> call. The <strong>PromotionalSaleDetails</strong> container consists of one or promotional sales
 * that match the input criteria. <br/><br/> Promotional Sales are only available to eBay sellers who are eBay Store subscribers.
 * @subpackage Arrays
 */
class PromotionalSaleArrayType extends AbstractStructArrayBase
{
    /**
     * The PromotionalSale
     * Meta informations extracted from the WSDL
     * - documentation: Each <strong>PromotionalSale</strong> container consists of detailed information on a seller's promotional sale. Each promotional sale that matches the input criteria is returned. <br/><br/> Promotional Sales are only available to
     * eBay sellers who are eBay Store subscribers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionalSaleType[]
     */
    public $PromotionalSale;
    /**
     * Constructor method for PromotionalSaleArrayType
     * @uses PromotionalSaleArrayType::setPromotionalSale()
     * @param \macropage\ebaysdk\trading\StructType\PromotionalSaleType[] $promotionalSale
     */
    public function __construct(array $promotionalSale = array())
    {
        $this
            ->setPromotionalSale($promotionalSale);
    }
    /**
     * Get PromotionalSale value
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType[]|null
     */
    public function getPromotionalSale()
    {
        return $this->PromotionalSale;
    }
    /**
     * Set PromotionalSale value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionalSaleType[] $promotionalSale
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType
     */
    public function setPromotionalSale(array $promotionalSale = array())
    {
        foreach ($promotionalSale as $promotionalSaleArrayTypePromotionalSaleItem) {
            // validation for constraint: itemType
            if (!$promotionalSaleArrayTypePromotionalSaleItem instanceof \macropage\ebaysdk\trading\StructType\PromotionalSaleType) {
                throw new \InvalidArgumentException(sprintf('The PromotionalSale property can only contain items of \macropage\ebaysdk\trading\StructType\PromotionalSaleType, "%s" given', is_object($promotionalSaleArrayTypePromotionalSaleItem) ? get_class($promotionalSaleArrayTypePromotionalSaleItem) : gettype($promotionalSaleArrayTypePromotionalSaleItem)), __LINE__);
            }
        }
        $this->PromotionalSale = $promotionalSale;
        return $this;
    }
    /**
     * Add item to PromotionalSale value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionalSaleType $item
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType
     */
    public function addToPromotionalSale(\macropage\ebaysdk\trading\StructType\PromotionalSaleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PromotionalSaleType) {
            throw new \InvalidArgumentException(sprintf('The PromotionalSale property can only contain items of \macropage\ebaysdk\trading\StructType\PromotionalSaleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PromotionalSale[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PromotionalSale
     */
    public function getAttributeName()
    {
        return 'PromotionalSale';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType
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
