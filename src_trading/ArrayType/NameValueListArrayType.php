<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NameValueListArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: A list of one or more valid names and corresponding values. Currently used to identify Item Specifics and individual variations within a multiple-variation listing.
 * @subpackage Arrays
 */
class NameValueListArrayType extends AbstractStructArrayBase
{
    /**
     * The NameValueList
     * Meta informations extracted from the WSDL
     * - documentation: <b>For the <b>AddItem</b> family of calls:</b> Contains the name and value(s) for an Item Specific. Only required when the <b>ItemSpecifics</b> container is specified.<br> <br> <b>For the AddFixedPriceItem family of calls:</b> The
     * same NameValueList schema is used for the <b>ItemSpecifics</b> node, the <b>VariationSpecifics</b> node, and the <b>VariationSpecifcsSet</b> node.<br> <br> If the listing has varations, any name that you use in the <b>VariationSpecifics</b> and
     * <b>VariationSpecificsSet</b> nodes can't be used in the <b>ItemSpecifics</b> node.<br> When you list with Item Variations:<br> <b></b> <ul> <li>Specify shared Item Specifics (e.g., Brand) in the <b>ItemSpecifics</b> node. </li> <li>Specify up to five
     * <b>VariationSpecifics</b> in each Variation node. </li> <li>Specify all applicable names with all their supported values in the <b>VariationSpecificSet</b> node. </li> </ul> See the Variation sample in the <b>AddFixedPriceItem</b> call reference for
     * examples.<br> <br> <b>For PlaceOffer:</b> Required if the item being purchased includes Item Variations. <br> <br> <span class="tablenote"><b>Note:</b> As of August 30, 2018, California will require certain sellers to display a Proposition 65 warning
     * on online retail sites if products contain chemicals and/or substances that may impact the health of California buyers. This requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and PBSE-enforced
     * categories. For category exceptions, see the <a href="https://developer.ebay.com/devzone/XML/docs/ReleaseNotes.html#1077-AN" target="_blank">Trading 1077 Release Notes</a>. The warning message can be customized by the seller, but should contain the
     * following information: <ul> <li>The name of at least one listed chemical that prompted the warning</li> <li>Text stating that the product 'can expose you to' the chemical(s) in the product </li> <li>The URL for OEHHA's new Proposition 65 warnings
     * website, which is <a href="www.P65Warnings.ca.gov" target="_blank">www.P65Warnings.ca.gov</a></li> </ul> Unlike standard item specifics that allow a maximum of 65 characters in the <b>Value</b> field, the matching value for the 'California Prop 65
     * Warning' item specific allows up to 800 characters of text. When a seller passes in this item specific, eBay will automatically insert a warning symbol icon for the listing. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameValueListType[]
     */
    public $NameValueList;
    /**
     * Constructor method for NameValueListArrayType
     * @uses NameValueListArrayType::setNameValueList()
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType[] $nameValueList
     */
    public function __construct(array $nameValueList = array())
    {
        $this
            ->setNameValueList($nameValueList);
    }
    /**
     * Get NameValueList value
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType[]|null
     */
    public function getNameValueList()
    {
        return $this->NameValueList;
    }
    /**
     * Set NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType[] $nameValueList
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
     */
    public function setNameValueList(array $nameValueList = array())
    {
        foreach ($nameValueList as $nameValueListArrayTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$nameValueListArrayTypeNameValueListItem instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
                throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\trading\StructType\NameValueListType, "%s" given', is_object($nameValueListArrayTypeNameValueListItem) ? get_class($nameValueListArrayTypeNameValueListItem) : gettype($nameValueListArrayTypeNameValueListItem)), __LINE__);
            }
        }
        $this->NameValueList = $nameValueList;
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType $item
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
     */
    public function addToNameValueList(\macropage\ebaysdk\trading\StructType\NameValueListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
            throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\trading\StructType\NameValueListType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameValueList[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType|null
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
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
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
