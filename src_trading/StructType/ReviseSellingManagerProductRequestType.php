<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerProductRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Revises a Selling Manager Product. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class ReviseSellingManagerProductRequestType extends AbstractRequestType
{
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the product that is being revised.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $SellingManagerProductDetails = null;
    /**
     * The SellingManagerFolderDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the folder for this product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $SellingManagerFolderDetails = null;
    /**
     * The DeletedField
     * Meta information extracted from the WSDL
     * - documentation: Specifies the name of a field to remove from a Selling Manager product. The request can contain zero, one, or many instances of DeletedField (one for each field to be removed). DeletedField accepts the following path names, which
     * remove the corresponding fields:<br><br> SellingManagerProductDetails.CustomLabel<br> SellingManagerProductDetails.QuantityAvailable<br> SellingManagerProductDetails.UnitCost<br> These values are case-sensitive. Use values that match the case of the
     * schema element names.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $DeletedField = [];
    /**
     * The SellingManagerProductSpecifics
     * Meta information extracted from the WSDL
     * - documentation: Specifies an eBay category associated with the product, defines Item Specifics that are relevant to the product, and defines variations available for the product (which may be used to create multi-variation listings).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $SellingManagerProductSpecifics = null;
    /**
     * Constructor method for ReviseSellingManagerProductRequestType
     * @uses ReviseSellingManagerProductRequestType::setSellingManagerProductDetails()
     * @uses ReviseSellingManagerProductRequestType::setSellingManagerFolderDetails()
     * @uses ReviseSellingManagerProductRequestType::setDeletedField()
     * @uses ReviseSellingManagerProductRequestType::setSellingManagerProductSpecifics()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails
     * @param string[] $deletedField
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails = null, array $deletedField = [], ?\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setSellingManagerFolderDetails($sellingManagerFolderDetails)
            ->setDeletedField($deletedField)
            ->setSellingManagerProductSpecifics($sellingManagerProductSpecifics);
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails(): ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerProductDetails(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null): self
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        
        return $this;
    }
    /**
     * Get SellingManagerFolderDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType|null
     */
    public function getSellingManagerFolderDetails(): ?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
    {
        return $this->SellingManagerFolderDetails;
    }
    /**
     * Set SellingManagerFolderDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerFolderDetails(?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails = null): self
    {
        $this->SellingManagerFolderDetails = $sellingManagerFolderDetails;
        
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
        foreach ($values as $reviseSellingManagerProductRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($reviseSellingManagerProductRequestTypeDeletedFieldItem)) {
                $invalidValues[] = is_object($reviseSellingManagerProductRequestTypeDeletedFieldItem) ? get_class($reviseSellingManagerProductRequestTypeDeletedFieldItem) : sprintf('%s(%s)', gettype($reviseSellingManagerProductRequestTypeDeletedFieldItem), var_export($reviseSellingManagerProductRequestTypeDeletedFieldItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
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
     * Get SellingManagerProductSpecifics value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType|null
     */
    public function getSellingManagerProductSpecifics(): ?\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
    {
        return $this->SellingManagerProductSpecifics;
    }
    /**
     * Set SellingManagerProductSpecifics value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerProductSpecifics(?\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null): self
    {
        $this->SellingManagerProductSpecifics = $sellingManagerProductSpecifics;
        
        return $this;
    }
}
