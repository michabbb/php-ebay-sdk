<?php

namespace macropage\ebaysdk\shopping\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NameValueListArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: A list of one or more valid names and corresponding values used to identify Item Specifics at the listing level and at the variation level for individual variations within a multiple-variation listing. For the <b>FindProducts</b>
 * call, this container is also used to express the Item Specifics for an eBay Catalog product.
 * @subpackage Arrays
 */
class NameValueListArrayType extends AbstractStructArrayBase
{
    /**
     * The NameValueList
     * Meta informations extracted from the WSDL
     * - documentation: This list is an array of Item Specifics name-value pairs for an eBay Catalog product (if <b>FindProducts</b> is used) or Item Specifics name-value pairs for a single-variation listing or individual variation within a
     * multiple-variation listing (if <b>GetSingleItem</b> or <b>GetMultipleItems</b> is used). <br><br> For example, Item Specifics for a motor vehicle might include a field like Make=Toyota (where <code>Make</code> is returned in <b>Name</b> field, and
     * <code>Toyota</code> is returned in <b>Value</b> field) and Model=Prius (where <code>Model</code> is returned in <b>Name</b> field, and <code>Prius</code> is returned in <b>Value</b> field).<br> <br> In multiple-variation listings, the same name
     * cannot appear in both the <b>ItemSpecifics</b> node and <b>Variation.VariationSpecifics</b> nodes. Common aspects for all variations within the multiple-variation listings will appear in the <b>ItemSpecifics</b> node, and aspects unique to individual
     * variations within the multiple-variation listings will appear in the <b>Variation.VariationSpecifics</b> nodes. <br><br> For <b>GetSingleItem</b>, the user can use the <b>NameValueList</b> container in the call input to identify one or more
     * variations to retrieve from a specific multiple-variation listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\NameValueListType[]
     */
    public $NameValueList;
    /**
     * Constructor method for NameValueListArrayType
     * @uses NameValueListArrayType::setNameValueList()
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType[] $nameValueList
     */
    public function __construct(array $nameValueList = array())
    {
        $this
            ->setNameValueList($nameValueList);
    }
    /**
     * Get NameValueList value
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType[]|null
     */
    public function getNameValueList()
    {
        return $this->NameValueList;
    }
    /**
     * Set NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType[] $nameValueList
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public function setNameValueList(array $nameValueList = array())
    {
        foreach ($nameValueList as $nameValueListArrayTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$nameValueListArrayTypeNameValueListItem instanceof \macropage\ebaysdk\shopping\StructType\NameValueListType) {
                throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\shopping\StructType\NameValueListType, "%s" given', is_object($nameValueListArrayTypeNameValueListItem) ? get_class($nameValueListArrayTypeNameValueListItem) : gettype($nameValueListArrayTypeNameValueListItem)), __LINE__);
            }
        }
        $this->NameValueList = $nameValueList;
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType $item
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public function addToNameValueList(\macropage\ebaysdk\shopping\StructType\NameValueListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\NameValueListType) {
            throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\shopping\StructType\NameValueListType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameValueList[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NameValueList
     */
    public function getAttributeName()
    {
        return 'NameValueList';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
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
