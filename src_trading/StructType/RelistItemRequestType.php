<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelistItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a seller to relist a listing that has recently ended on a specified eBay site. A seller has to up to 90 days to relist an ended listing. When an item is relisted, it will receive a new <b>ItemID</b> value, but this item will
 * remain on other users' Watch Lists after it is relisted. The seller has the opportunity to make changes to the listing through the <b>Item</b> container, and the seller can also use one or more <b>DeletedField</b> tags to remove an optional
 * field/setting from the listing.
 * @subpackage Structs
 */
class RelistItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: The <b>Item</b> container is used to configure the item that will be relisted. If the seller plans to relist the item with no changes, the only field under the <b>Item</b> container that is required is the <b>ItemID</b> field. In the
     * <b>ItemID</b> field, the seller specifies the item that will be relisted. If the seller wishes to change anything else for the listing, the seller should include this field in the call request and give it a new value. <br/><br/> If the seller wants
     * to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The DeletedField
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name of the field to delete from a listing. See <a href="http://developer.ebay.com/Devzone/guides/ebayfeatures/Development/Listings-RelistingItems.html">Relisting Items</a> for rules on deleting values when relisting
     * items. Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and potential consequences). The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted). <br><br>
     * Case-sensitivity must be taken into account when using a <b>DeletedField</b> tag to delete a field. The value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path
     * (Item.PictureDetails.GalleryURL), or the initial letter of each schema element name in the full field path must be lowercase (item.pictureDetails.galleryURL). Do not change the case of letters in the middle of a field name. For example,
     * item.picturedetails.galleryUrl is not allowed.<br><br> To delete a listing enhancement like 'BoldTitle', specify the value you are deleting; for example, Item.ListingEnhancement[BoldTitle].
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * Constructor method for RelistItemRequestType
     * @uses RelistItemRequestType::setItem()
     * @uses RelistItemRequestType::setDeletedField()
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param string[] $deletedField
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ItemType $item = null, array $deletedField = array())
    {
        $this
            ->setItem($item)
            ->setDeletedField($deletedField);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\RelistItemRequestType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get DeletedField value
     * @return string[]|null
     */
    public function getDeletedField()
    {
        return $this->DeletedField;
    }
    /**
     * Set DeletedField value
     * @throws \InvalidArgumentException
     * @param string[] $deletedField
     * @return \macropage\ebaysdk\trading\StructType\RelistItemRequestType
     */
    public function setDeletedField(array $deletedField = array())
    {
        foreach ($deletedField as $relistItemRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($relistItemRequestTypeDeletedFieldItem)) {
                throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of string, "%s" given', is_object($relistItemRequestTypeDeletedFieldItem) ? get_class($relistItemRequestTypeDeletedFieldItem) : gettype($relistItemRequestTypeDeletedFieldItem)), __LINE__);
            }
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\RelistItemRequestType
     */
    public function addToDeletedField($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeletedField[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\RelistItemRequestType
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
