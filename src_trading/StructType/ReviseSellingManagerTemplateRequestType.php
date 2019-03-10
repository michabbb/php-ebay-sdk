<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerTemplateRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Revises a Selling Manager template. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class ReviseSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager template. You can obtain a <b>SaleTemplateID</b> value by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - minOccurs: 0
     * @var int
     */
    public $ProductID;
    /**
     * The SaleTemplateName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the Selling Manager template.
     * - minOccurs: 0
     * @var string
     */
    public $SaleTemplateName;
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to modify the Selling Manager template. In the <b>Item.ItemID</b> field, you specify the same value as the one specified in <b>SaleTemplateID</b>. Other child elements hold the values for properties that are
     * being changed. Set values in the Item object only for those properties that are changing. Use <b>DeletedField</b> to remove a property.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The DeletedField
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name of a field to remove from a template. See the eBay Web Services guide for rules on removing values when revising items. Also see the relevant field descriptions to determine when to use DeletedField (and potential
     * consequences). The request can contain zero, one, or many instances of DeletedField (one for each field to be removed). DeletedField accepts the following path names, which remove the corresponding fields: <br><br> Item.ApplicationData<br>
     * Item.AttributeSetArray<br> Item.ConditionID<br> Item.ItemSpecifics<br> Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br> Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br> Item.ListingDesigner.LayoutID<br>
     * Item.ListingDesigner.ThemeID<br> Item.ListingEnhancement[Value]<br> Item.PayPalEmailAddress<br> Item.PictureDetails.GalleryURL<br> Item.PictureDetails.PictureURL<br> Item.PostalCode<br> Item.ProductListingDetails<br>
     * item.ShippingDetails.PaymentInstructions<br> item.SKU<br> Item.SubTitle<br><br> These values are case-sensitive. Use values that match the case of the schema element names (Item.PictureDetails.GalleryURL) or make the initial letter of each field name
     * lowercase (item.pictureDetails.galleryURL). However, do not change the case of letters in the middle of a field name (e.g., item.picturedetails.galleryUrl is not allowed). <br><br> Depending on how you have configured your pictures, you cannot
     * necessarily delete both GalleryURL and PictureURL from an existing listing. If GalleryType was already set for the item you are revising, you cannot remove it. This means you still need to include either a first picture or a gallery URL in your
     * revised listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * The VerifyOnly
     * Meta informations extracted from the WSDL
     * - documentation: Use this field to verify the template instead of revising it.
     * - minOccurs: 0
     * @var bool
     */
    public $VerifyOnly;
    /**
     * Constructor method for ReviseSellingManagerTemplateRequestType
     * @uses ReviseSellingManagerTemplateRequestType::setSaleTemplateID()
     * @uses ReviseSellingManagerTemplateRequestType::setProductID()
     * @uses ReviseSellingManagerTemplateRequestType::setSaleTemplateName()
     * @uses ReviseSellingManagerTemplateRequestType::setItem()
     * @uses ReviseSellingManagerTemplateRequestType::setDeletedField()
     * @uses ReviseSellingManagerTemplateRequestType::setVerifyOnly()
     * @param int $saleTemplateID
     * @param int $productID
     * @param string $saleTemplateName
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param string[] $deletedField
     * @param bool $verifyOnly
     */
    public function __construct($saleTemplateID = null, $productID = null, $saleTemplateName = null, \macropage\ebaysdk\trading\StructType\ItemType $item = null, array $deletedField = array(), $verifyOnly = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setProductID($productID)
            ->setSaleTemplateName($saleTemplateName)
            ->setItem($item)
            ->setDeletedField($deletedField)
            ->setVerifyOnly($verifyOnly);
    }
    /**
     * Get SaleTemplateID value
     * @return int|null
     */
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setSaleTemplateID($saleTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !is_numeric($saleTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
    }
    /**
     * Get ProductID value
     * @return int|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param int $productID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: int
        if (!is_null($productID) && !is_numeric($productID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Get SaleTemplateName value
     * @return string|null
     */
    public function getSaleTemplateName()
    {
        return $this->SaleTemplateName;
    }
    /**
     * Set SaleTemplateName value
     * @param string $saleTemplateName
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setSaleTemplateName($saleTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($saleTemplateName) && !is_string($saleTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($saleTemplateName)), __LINE__);
        }
        $this->SaleTemplateName = $saleTemplateName;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setDeletedField(array $deletedField = array())
    {
        foreach ($deletedField as $reviseSellingManagerTemplateRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($reviseSellingManagerTemplateRequestTypeDeletedFieldItem)) {
                throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of string, "%s" given', is_object($reviseSellingManagerTemplateRequestTypeDeletedFieldItem) ? get_class($reviseSellingManagerTemplateRequestTypeDeletedFieldItem) : gettype($reviseSellingManagerTemplateRequestTypeDeletedFieldItem)), __LINE__);
            }
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
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
     * Get VerifyOnly value
     * @return bool|null
     */
    public function getVerifyOnly()
    {
        return $this->VerifyOnly;
    }
    /**
     * Set VerifyOnly value
     * @param bool $verifyOnly
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setVerifyOnly($verifyOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($verifyOnly) && !is_bool($verifyOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($verifyOnly)), __LINE__);
        }
        $this->VerifyOnly = $verifyOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
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
