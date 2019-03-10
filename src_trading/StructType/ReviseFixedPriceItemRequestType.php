<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseFixedPriceItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a seller to revise a fixed-price listing on a specified eBay site. To revise an active listing, the seller specifies the <b>ItemID</b> value for the listing. The seller makes one or multiple changes to the listing through the
 * <b>Item</b> container, and the seller can also use one or more <b>DeletedField</b> tags to remove an optional field/setting from the listing.
 * @subpackage Structs
 */
class ReviseFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: The <b>Item</b> container is used to make changes to the active listing. The seller must pass in the <b>ItemID</b> value for the listing that is being revised. For anything else that the seller wishes to change, such as quantity or
     * price, the seller should include this field in the call request and give it a new value. <br/><br/> If the seller wants to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The DeletedField
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name of a field to delete from a listing. The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted). See the relevant field descriptions to determine when to use
     * <b>DeletedField</b> (and potential consequences). <br><br> You cannot delete required fields from a listing. <br><br> Some fields are optional when you first list an item (e.g., <b>SecondaryCategory</b>), but once they are set they cannot be deleted
     * when you revise an item. Some optional fields cannot be deleted if the item has bids and/or ends within 12 hours. Some optional fields cannot be deleted if other fields depend on them. <br><br> Some data (such as <b>Variation</b> nodes within the
     * <b>Variations</b> container) can't be deleted by using <b>DeletedField</b>. See the relevant field descriptions for how to delete such data. <br><br> Use values that match the case of the schema element names (<b>Item.PictureDetails.GalleryURL</b>)
     * or make the initial letter of each field name lowercase (<b>item.pictureDetails.galleryURL</b>). However, do not change the case of letters in the middle of a field name. For example, <b>item.picturedetails.galleryUrl</b> is not allowed. <br><br> To
     * delete a listing enhancement like <b>BoldTitle</b>, specify the value you are deleting in square brackets ("[ ]"); for example, <b>Item.ListingEnhancement[BoldTitle]</b>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * Constructor method for ReviseFixedPriceItemRequestType
     * @uses ReviseFixedPriceItemRequestType::setItem()
     * @uses ReviseFixedPriceItemRequestType::setDeletedField()
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType
     */
    public function setDeletedField(array $deletedField = array())
    {
        foreach ($deletedField as $reviseFixedPriceItemRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($reviseFixedPriceItemRequestTypeDeletedFieldItem)) {
                throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of string, "%s" given', is_object($reviseFixedPriceItemRequestTypeDeletedFieldItem) ? get_class($reviseFixedPriceItemRequestTypeDeletedFieldItem) : gettype($reviseFixedPriceItemRequestTypeDeletedFieldItem)), __LINE__);
            }
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseFixedPriceItemRequestType
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
