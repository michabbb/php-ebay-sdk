<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerProductRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base request type of the <b>AddSellingManagerProduct</b> call, which is used to create a product or a group of product variations within the Selling Manager Pro system. Once a Selling Manager Pro product or production variation
 * group is created, the product settings and product specifics can be transferred over into a Selling Manager Pro listing template with the <b>AddSellingManagerTemplate</b> call.
 * @subpackage Structs
 */
class AddSellingManagerProductRequestType extends AbstractRequestType
{
    /**
     * The SellingManagerProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to provide details about the Selling Manager product, such as product name, quantity available, and unit price.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The FolderID
     * Meta informations extracted from the WSDL
     * - documentation: This is the unique identifier of the folder in which the new product will be placed. This folder can be a new folder or a folder that already exists for the seller in Selling Manager Pro. If no folder is specified through this field,
     * the new product is place into the <em>My Products</em> folder by default.
     * - minOccurs: 0
     * @var int
     */
    public $FolderID;
    /**
     * The SellingManagerProductSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: This container allows the seller to specify item specifics for a product, to create a product variation group and variation specifics, and/or to specify a listing category for the product or product variation group. A product
     * variation group can be transferred into a listing template that can create a multiple-variation listing. The listing category can either be provided through the <b>PrimaryCategoryID</b> value of this call, or through the
     * <b>Item.PrimaryCategory.CategoryID</b> field of the subsequent <b>AddSellingManagerTemplate</b> call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
     */
    public $SellingManagerProductSpecifics;
    /**
     * Constructor method for AddSellingManagerProductRequestType
     * @uses AddSellingManagerProductRequestType::setSellingManagerProductDetails()
     * @uses AddSellingManagerProductRequestType::setFolderID()
     * @uses AddSellingManagerProductRequestType::setSellingManagerProductSpecifics()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param int $folderID
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, $folderID = null, \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setFolderID($folderID)
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerProductRequestType
     */
    public function setSellingManagerProductDetails(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID()
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerProductRequestType
     */
    public function setFolderID($folderID = null)
    {
        // validation for constraint: int
        if (!is_null($folderID) && !is_numeric($folderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerProductRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerProductRequestType
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
