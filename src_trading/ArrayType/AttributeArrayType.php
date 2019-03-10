<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for AttributeArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is only applicable for Half.com listings, and since the Half.com site was taken down, this type is no longer applicable.
 * @subpackage Arrays
 */
class AttributeArrayType extends AbstractStructArrayBase
{
    /**
     * The Attribute
     * Meta informations extracted from the WSDL
     * - documentation: <b>AttributeArrayType</b> and the <b>Attribute</b> element are only applicable for Half.com listings, and since the Half.com site was taken down, this field is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeType[]
     */
    public $Attribute;
    /**
     * Constructor method for AttributeArrayType
     * @uses AttributeArrayType::setAttribute()
     * @param \macropage\ebaysdk\trading\StructType\AttributeType[] $attribute
     */
    public function __construct(array $attribute = array())
    {
        $this
            ->setAttribute($attribute);
    }
    /**
     * Get Attribute value
     * @return \macropage\ebaysdk\trading\StructType\AttributeType[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeType[] $attribute
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeArrayType
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $attributeArrayTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$attributeArrayTypeAttributeItem instanceof \macropage\ebaysdk\trading\StructType\AttributeType) {
                throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \macropage\ebaysdk\trading\StructType\AttributeType, "%s" given', is_object($attributeArrayTypeAttributeItem) ? get_class($attributeArrayTypeAttributeItem) : gettype($attributeArrayTypeAttributeItem)), __LINE__);
            }
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AttributeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeArrayType
     */
    public function addToAttribute(\macropage\ebaysdk\trading\StructType\AttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AttributeType) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \macropage\ebaysdk\trading\StructType\AttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attribute[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\AttributeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Attribute
     */
    public function getAttributeName()
    {
        return 'Attribute';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeArrayType
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
