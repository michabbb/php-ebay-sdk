<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductFamilyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductFamilyType extends AbstractStructBase
{
    /**
     * The ParentProduct
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductType
     */
    public $ParentProduct;
    /**
     * The FamilyMembers
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductType[]
     */
    public $FamilyMembers;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The hasMoreChildren
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool
     */
    public $hasMoreChildren;
    /**
     * Constructor method for ProductFamilyType
     * @uses ProductFamilyType::setParentProduct()
     * @uses ProductFamilyType::setFamilyMembers()
     * @uses ProductFamilyType::setAny()
     * @uses ProductFamilyType::setHasMoreChildren()
     * @param \macropage\ebaysdk\trading\StructType\ProductType $parentProduct
     * @param \macropage\ebaysdk\trading\StructType\ProductType[] $familyMembers
     * @param \DOMDocument $any
     * @param bool $hasMoreChildren
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ProductType $parentProduct = null, array $familyMembers = array(), \DOMDocument $any = null, $hasMoreChildren = null)
    {
        $this
            ->setParentProduct($parentProduct)
            ->setFamilyMembers($familyMembers)
            ->setAny($any)
            ->setHasMoreChildren($hasMoreChildren);
    }
    /**
     * Get ParentProduct value
     * @return \macropage\ebaysdk\trading\StructType\ProductType|null
     */
    public function getParentProduct()
    {
        return $this->ParentProduct;
    }
    /**
     * Set ParentProduct value
     * @param \macropage\ebaysdk\trading\StructType\ProductType $parentProduct
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function setParentProduct(\macropage\ebaysdk\trading\StructType\ProductType $parentProduct = null)
    {
        $this->ParentProduct = $parentProduct;
        return $this;
    }
    /**
     * Get FamilyMembers value
     * @return \macropage\ebaysdk\trading\StructType\ProductType[]|null
     */
    public function getFamilyMembers()
    {
        return $this->FamilyMembers;
    }
    /**
     * Set FamilyMembers value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductType[] $familyMembers
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function setFamilyMembers(array $familyMembers = array())
    {
        foreach ($familyMembers as $productFamilyTypeFamilyMembersItem) {
            // validation for constraint: itemType
            if (!$productFamilyTypeFamilyMembersItem instanceof \macropage\ebaysdk\trading\StructType\ProductType) {
                throw new \InvalidArgumentException(sprintf('The FamilyMembers property can only contain items of \macropage\ebaysdk\trading\StructType\ProductType, "%s" given', is_object($productFamilyTypeFamilyMembersItem) ? get_class($productFamilyTypeFamilyMembersItem) : gettype($productFamilyTypeFamilyMembersItem)), __LINE__);
            }
        }
        $this->FamilyMembers = $familyMembers;
        return $this;
    }
    /**
     * Add item to FamilyMembers value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function addToFamilyMembers(\macropage\ebaysdk\trading\StructType\ProductType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductType) {
            throw new \InvalidArgumentException(sprintf('The FamilyMembers property can only contain items of \macropage\ebaysdk\trading\StructType\ProductType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FamilyMembers[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductFamilyType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get hasMoreChildren value
     * @return bool|null
     */
    public function getHasMoreChildren()
    {
        return $this->hasMoreChildren;
    }
    /**
     * Set hasMoreChildren value
     * @param bool $hasMoreChildren
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
     */
    public function setHasMoreChildren($hasMoreChildren = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreChildren) && !is_bool($hasMoreChildren)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMoreChildren)), __LINE__);
        }
        $this->hasMoreChildren = $hasMoreChildren;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType
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
