<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for LookupAttributeArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class LookupAttributeArrayType extends AbstractStructArrayBase
{
    /**
     * The LookupAttribute
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LookupAttributeType[]
     */
    public $LookupAttribute;
    /**
     * Constructor method for LookupAttributeArrayType
     * @uses LookupAttributeArrayType::setLookupAttribute()
     * @param \macropage\ebaysdk\trading\StructType\LookupAttributeType[] $lookupAttribute
     */
    public function __construct(array $lookupAttribute = array())
    {
        $this
            ->setLookupAttribute($lookupAttribute);
    }
    /**
     * Get LookupAttribute value
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType[]|null
     */
    public function getLookupAttribute()
    {
        return $this->LookupAttribute;
    }
    /**
     * Set LookupAttribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\LookupAttributeType[] $lookupAttribute
     * @return \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType
     */
    public function setLookupAttribute(array $lookupAttribute = array())
    {
        foreach ($lookupAttribute as $lookupAttributeArrayTypeLookupAttributeItem) {
            // validation for constraint: itemType
            if (!$lookupAttributeArrayTypeLookupAttributeItem instanceof \macropage\ebaysdk\trading\StructType\LookupAttributeType) {
                throw new \InvalidArgumentException(sprintf('The LookupAttribute property can only contain items of \macropage\ebaysdk\trading\StructType\LookupAttributeType, "%s" given', is_object($lookupAttributeArrayTypeLookupAttributeItem) ? get_class($lookupAttributeArrayTypeLookupAttributeItem) : gettype($lookupAttributeArrayTypeLookupAttributeItem)), __LINE__);
            }
        }
        $this->LookupAttribute = $lookupAttribute;
        return $this;
    }
    /**
     * Add item to LookupAttribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\LookupAttributeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType
     */
    public function addToLookupAttribute(\macropage\ebaysdk\trading\StructType\LookupAttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\LookupAttributeType) {
            throw new \InvalidArgumentException(sprintf('The LookupAttribute property can only contain items of \macropage\ebaysdk\trading\StructType\LookupAttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LookupAttribute[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\LookupAttributeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LookupAttribute
     */
    public function getAttributeName()
    {
        return 'LookupAttribute';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType
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
