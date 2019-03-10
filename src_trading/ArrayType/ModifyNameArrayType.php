<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ModifyNameArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>ModifyNameList</b> container in a <b>ReviseFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call to rename one or more Variation Specific names for a multiple-variation listing.
 * @subpackage Arrays
 */
class ModifyNameArrayType extends AbstractStructArrayBase
{
    /**
     * The ModifyName
     * Meta informations extracted from the WSDL
     * - documentation: A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing. <br><br> You cannot change the name of an Item Specific that is required for the listing
     * category. Use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to determine which Item Specifics names are required for a category. <br><br> To get a current list of Variation Specifics defined for a multiple-variation listing, the
     * seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ModifyNameType[]
     */
    public $ModifyName;
    /**
     * Constructor method for ModifyNameArrayType
     * @uses ModifyNameArrayType::setModifyName()
     * @param \macropage\ebaysdk\trading\StructType\ModifyNameType[] $modifyName
     */
    public function __construct(array $modifyName = array())
    {
        $this
            ->setModifyName($modifyName);
    }
    /**
     * Get ModifyName value
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType[]|null
     */
    public function getModifyName()
    {
        return $this->ModifyName;
    }
    /**
     * Set ModifyName value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ModifyNameType[] $modifyName
     * @return \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType
     */
    public function setModifyName(array $modifyName = array())
    {
        foreach ($modifyName as $modifyNameArrayTypeModifyNameItem) {
            // validation for constraint: itemType
            if (!$modifyNameArrayTypeModifyNameItem instanceof \macropage\ebaysdk\trading\StructType\ModifyNameType) {
                throw new \InvalidArgumentException(sprintf('The ModifyName property can only contain items of \macropage\ebaysdk\trading\StructType\ModifyNameType, "%s" given', is_object($modifyNameArrayTypeModifyNameItem) ? get_class($modifyNameArrayTypeModifyNameItem) : gettype($modifyNameArrayTypeModifyNameItem)), __LINE__);
            }
        }
        $this->ModifyName = $modifyName;
        return $this;
    }
    /**
     * Add item to ModifyName value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ModifyNameType $item
     * @return \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType
     */
    public function addToModifyName(\macropage\ebaysdk\trading\StructType\ModifyNameType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ModifyNameType) {
            throw new \InvalidArgumentException(sprintf('The ModifyName property can only contain items of \macropage\ebaysdk\trading\StructType\ModifyNameType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyName[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyName
     */
    public function getAttributeName()
    {
        return 'ModifyName';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType
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
