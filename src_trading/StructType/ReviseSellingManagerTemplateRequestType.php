<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerTemplateRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Revises a Selling Manager template. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class ReviseSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager template. You can obtain a <b>SaleTemplateID</b> value by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaleTemplateID = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ProductID = null;
    /**
     * The SaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: The name of the Selling Manager template.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SaleTemplateName = null;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This container is used to modify the Selling Manager template. In the <b>Item.ItemID</b> field, you specify the same value as the one specified in <b>SaleTemplateID</b>. Other child elements hold the values for properties that are
     * being changed. Set values in the Item object only for those properties that are changing. Use <b>DeletedField</b> to remove a property.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * The DeletedField
     * Meta information extracted from the WSDL
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
    protected array $DeletedField = [];
    /**
     * The VerifyOnly
     * Meta information extracted from the WSDL
     * - documentation: Use this field to verify the template instead of revising it.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $VerifyOnly = null;
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
    public function __construct(?int $saleTemplateID = null, ?int $productID = null, ?string $saleTemplateName = null, ?\macropage\ebaysdk\trading\StructType\ItemType $item = null, array $deletedField = [], ?bool $verifyOnly = null)
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
    public function getSaleTemplateID(): ?int
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setSaleTemplateID(?int $saleTemplateID = null): self
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !(is_int($saleTemplateID) || ctype_digit($saleTemplateID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleTemplateID, true), gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        
        return $this;
    }
    /**
     * Get ProductID value
     * @return int|null
     */
    public function getProductID(): ?int
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param int $productID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setProductID(?int $productID = null): self
    {
        // validation for constraint: int
        if (!is_null($productID) && !(is_int($productID) || ctype_digit($productID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        
        return $this;
    }
    /**
     * Get SaleTemplateName value
     * @return string|null
     */
    public function getSaleTemplateName(): ?string
    {
        return $this->SaleTemplateName;
    }
    /**
     * Set SaleTemplateName value
     * @param string $saleTemplateName
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setSaleTemplateName(?string $saleTemplateName = null): self
    {
        // validation for constraint: string
        if (!is_null($saleTemplateName) && !is_string($saleTemplateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleTemplateName, true), gettype($saleTemplateName)), __LINE__);
        }
        $this->SaleTemplateName = $saleTemplateName;
        
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setItem(?\macropage\ebaysdk\trading\StructType\ItemType $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Get DeletedField value
     * @return string[]
     */
    public function getDeletedField(): array
    {
        return $this->DeletedField;
    }
    /**
     * This method is responsible for validating the values passed to the setDeletedField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedFieldForArrayConstraintsFromSetDeletedField(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reviseSellingManagerTemplateRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($reviseSellingManagerTemplateRequestTypeDeletedFieldItem)) {
                $invalidValues[] = is_object($reviseSellingManagerTemplateRequestTypeDeletedFieldItem) ? get_class($reviseSellingManagerTemplateRequestTypeDeletedFieldItem) : sprintf('%s(%s)', gettype($reviseSellingManagerTemplateRequestTypeDeletedFieldItem), var_export($reviseSellingManagerTemplateRequestTypeDeletedFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedField property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DeletedField value
     * @throws InvalidArgumentException
     * @param string[] $deletedField
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setDeletedField(array $deletedField = []): self
    {
        // validation for constraint: array
        if ('' !== ($deletedFieldArrayErrorMessage = self::validateDeletedFieldForArrayConstraintsFromSetDeletedField($deletedField))) {
            throw new InvalidArgumentException($deletedFieldArrayErrorMessage, __LINE__);
        }
        $this->DeletedField = $deletedField;
        
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function addToDeletedField(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The DeletedField property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeletedField[] = $item;
        
        return $this;
    }
    /**
     * Get VerifyOnly value
     * @return bool|null
     */
    public function getVerifyOnly(): ?bool
    {
        return $this->VerifyOnly;
    }
    /**
     * Set VerifyOnly value
     * @param bool $verifyOnly
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateRequestType
     */
    public function setVerifyOnly(?bool $verifyOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($verifyOnly) && !is_bool($verifyOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verifyOnly, true), gettype($verifyOnly)), __LINE__);
        }
        $this->VerifyOnly = $verifyOnly;
        
        return $this;
    }
}
