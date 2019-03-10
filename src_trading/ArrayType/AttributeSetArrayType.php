<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AttributeSetArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class AttributeSetArrayType extends AbstractStructArrayBase
{
    /**
     * The AttributeSet
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeSetType[]
     */
    public $AttributeSet;
    /**
     * Constructor method for AttributeSetArrayType
     * @uses AttributeSetArrayType::setAttributeSet()
     * @param \macropage\ebaysdk\trading\StructType\AttributeSetType[] $attributeSet
     */
    public function __construct(array $attributeSet = array())
    {
        $this
            ->setAttributeSet($attributeSet);
    }
    /**
     * Get AttributeSet value
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType[]|null
     */
    public function getAttributeSet()
    {
        return $this->AttributeSet;
    }
    /**
     * Set AttributeSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeSetType[] $attributeSet
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType
     */
    public function setAttributeSet(array $attributeSet = array())
    {
        foreach ($attributeSet as $attributeSetArrayTypeAttributeSetItem) {
            // validation for constraint: itemType
            if (!$attributeSetArrayTypeAttributeSetItem instanceof \macropage\ebaysdk\trading\StructType\AttributeSetType) {
                throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of \macropage\ebaysdk\trading\StructType\AttributeSetType, "%s" given', is_object($attributeSetArrayTypeAttributeSetItem) ? get_class($attributeSetArrayTypeAttributeSetItem) : gettype($attributeSetArrayTypeAttributeSetItem)), __LINE__);
            }
        }
        $this->AttributeSet = $attributeSet;
        return $this;
    }
    /**
     * Add item to AttributeSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeSetType $item
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType
     */
    public function addToAttributeSet(\macropage\ebaysdk\trading\StructType\AttributeSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AttributeSetType) {
            throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of \macropage\ebaysdk\trading\StructType\AttributeSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AttributeSet[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\AttributeSetType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttributeSet
     */
    public function getAttributeName()
    {
        return 'AttributeSet';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType
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
