<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyRelistItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enable the seller to verify that the data they plan to pass into a <b>RelistItem</b> call will produce the results that you are expecting, including a successful call with no errors.
 * @subpackage Structs
 */
class VerifyRelistItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: The <b>Item</b> container is used to configure the item that will be relisted. If the seller plans to relist the item with no changes, the only field under the <b>Item</b> container that is required is the <b>ItemID</b> field. In the
     * <b>ItemID</b> field, the seller specifies the item that will be relisted. If the seller wishes to change anything else for the listing, the seller should include this field in the call request and give it a new value. <br/><br/> If the seller wants
     * to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * The DeletedField
     * Meta information extracted from the WSDL
     * - documentation: Specifies the name of the field to delete from a listing. See the eBay Features Guide for rules on deleting values when relisting items. Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and
     * potential consequences). The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted). <br><br> Case-sensitivity must be taken into account when using a <b>DeletedField</b> tag to delete a field. The
     * value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path (Item.PictureDetails.GalleryURL), or the initial letter of each schema element name in the full field path must be lowercase
     * (item.pictureDetails.galleryURL). Do not change the case of letters in the middle of a field name. For example, item.picturedetails.galleryUrl is not allowed.<br><br> To delete a listing enhancement like 'BoldTitle', specify the value you are
     * deleting; for example, Item.ListingEnhancement[BoldTitle].
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $DeletedField = [];
    /**
     * Constructor method for VerifyRelistItemRequestType
     * @uses VerifyRelistItemRequestType::setItem()
     * @uses VerifyRelistItemRequestType::setDeletedField()
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param string[] $deletedField
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ItemType $item = null, array $deletedField = [])
    {
        $this
            ->setItem($item)
            ->setDeletedField($deletedField);
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemRequestType
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
        foreach ($values as $verifyRelistItemRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($verifyRelistItemRequestTypeDeletedFieldItem)) {
                $invalidValues[] = is_object($verifyRelistItemRequestTypeDeletedFieldItem) ? get_class($verifyRelistItemRequestTypeDeletedFieldItem) : sprintf('%s(%s)', gettype($verifyRelistItemRequestTypeDeletedFieldItem), var_export($verifyRelistItemRequestTypeDeletedFieldItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemRequestType
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
}
