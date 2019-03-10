<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerProductRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Revises a Selling Manager Product. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class ReviseSellingManagerProductRequestType extends AbstractRequestType
{
    /**
     * The SellingManagerProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: The details of the product that is being revised.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The SellingManagerFolderDetails
     * Meta informations extracted from the WSDL
     * - documentation: The details of the folder for this product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public $SellingManagerFolderDetails;
    /**
     * The DeletedField
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name of a field to remove from a Selling Manager product. The request can contain zero, one, or many instances of DeletedField (one for each field to be removed). DeletedField accepts the following path names, which
     * remove the corresponding fields:<br><br> SellingManagerProductDetails.CustomLabel<br> SellingManagerProductDetails.QuantityAvailable<br> SellingManagerProductDetails.UnitCost<br> These values are case-sensitive. Use values that match the case of the
     * schema element names.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * The SellingManagerProductSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: Specifies an eBay category associated with the product, defines Item Specifics that are relevant to the product, and defines variations available for the product (which may be used to create multi-variation listings).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
     */
    public $SellingManagerProductSpecifics;
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
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails = null, array $deletedField = array(), \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null)
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
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerProductDetails(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get SellingManagerFolderDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType|null
     */
    public function getSellingManagerFolderDetails()
    {
        return $this->SellingManagerFolderDetails;
    }
    /**
     * Set SellingManagerFolderDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerFolderDetails(\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $sellingManagerFolderDetails = null)
    {
        $this->SellingManagerFolderDetails = $sellingManagerFolderDetails;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
     */
    public function setDeletedField(array $deletedField = array())
    {
        foreach ($deletedField as $reviseSellingManagerProductRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($reviseSellingManagerProductRequestTypeDeletedFieldItem)) {
                throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of string, "%s" given', is_object($reviseSellingManagerProductRequestTypeDeletedFieldItem) ? get_class($reviseSellingManagerProductRequestTypeDeletedFieldItem) : gettype($reviseSellingManagerProductRequestTypeDeletedFieldItem)), __LINE__);
            }
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
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
     * Get SellingManagerProductSpecifics value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType|null
     */
    public function getSellingManagerProductSpecifics()
    {
        return $this->SellingManagerProductSpecifics;
    }
    /**
     * Set SellingManagerProductSpecifics value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
     */
    public function setSellingManagerProductSpecifics(\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null)
    {
        $this->SellingManagerProductSpecifics = $sellingManagerProductSpecifics;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductRequestType
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
