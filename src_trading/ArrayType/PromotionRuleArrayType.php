<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for PromotionRuleArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class PromotionRuleArrayType extends AbstractStructArrayBase
{
    /**
     * The PromotionRule
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionRuleType[]
     */
    public $PromotionRule;
    /**
     * Constructor method for PromotionRuleArrayType
     * @uses PromotionRuleArrayType::setPromotionRule()
     * @param \macropage\ebaysdk\trading\StructType\PromotionRuleType[] $promotionRule
     */
    public function __construct(array $promotionRule = array())
    {
        $this
            ->setPromotionRule($promotionRule);
    }
    /**
     * Get PromotionRule value
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType[]|null
     */
    public function getPromotionRule()
    {
        return $this->PromotionRule;
    }
    /**
     * Set PromotionRule value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionRuleType[] $promotionRule
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionRuleArrayType
     */
    public function setPromotionRule(array $promotionRule = array())
    {
        foreach ($promotionRule as $promotionRuleArrayTypePromotionRuleItem) {
            // validation for constraint: itemType
            if (!$promotionRuleArrayTypePromotionRuleItem instanceof \macropage\ebaysdk\trading\StructType\PromotionRuleType) {
                throw new \InvalidArgumentException(sprintf('The PromotionRule property can only contain items of \macropage\ebaysdk\trading\StructType\PromotionRuleType, "%s" given', is_object($promotionRuleArrayTypePromotionRuleItem) ? get_class($promotionRuleArrayTypePromotionRuleItem) : gettype($promotionRuleArrayTypePromotionRuleItem)), __LINE__);
            }
        }
        $this->PromotionRule = $promotionRule;
        return $this;
    }
    /**
     * Add item to PromotionRule value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionRuleType $item
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionRuleArrayType
     */
    public function addToPromotionRule(\macropage\ebaysdk\trading\StructType\PromotionRuleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PromotionRuleType) {
            throw new \InvalidArgumentException(sprintf('The PromotionRule property can only contain items of \macropage\ebaysdk\trading\StructType\PromotionRuleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PromotionRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PromotionRule
     */
    public function getAttributeName()
    {
        return 'PromotionRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionRuleArrayType
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
