<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerTemplateResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>AddSellingManagerTemplate</b> call. The response includes the unique identifier and name of the new Selling Manager template, the listing category, some information on the Selling Manager product
 * associated with the template, and the expected listing fees if a listing is created using this Selling Manager template.
 * @subpackage Structs
 */
class AddSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the eBay category in which the product associated with the Selling Manager template will be listed. The primary listing category is provided through the <b>PrimaryCategoryID</b> field of an
     * <b>AddSellingManagerProduct</b> call or through the <b>Item.PrimaryCategory.CategoryID</b> field.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the secondary eBay category in which the product associated with the Selling Manager template will be listed. This field will only be returned if defined through a <b>Item.SecondaryCategory.CategoryID</b>
     * field.
     * - minOccurs: 0
     * @var int
     */
    public $Category2ID;
    /**
     * The SaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: This is the unique identifier of the new Selling Manager template. This value is created by eBay upon successful creation of the Selling Manager template.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * The SaleTemplateGroupID
     * Meta informations extracted from the WSDL
     * - documentation: Ihis field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateGroupID;
    /**
     * The SaleTemplateName
     * Meta informations extracted from the WSDL
     * - documentation: This is the unique name of the newly created Selling Manager template. This name will be the value that was provided in the <b>SaleTemplateName</b> field of the call request. If the <b>SaleTemplateName</b> field was omitted the
     * Selling Manager template inherits the name specified in the <b>Item.Title</b> field instead.
     * - minOccurs: 0
     * @var string
     */
    public $SaleTemplateName;
    /**
     * The SellingManagerProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of details related to the Selling Manager product associated with the Selling Manager template, including the unique identifer, product name, and current quantity available.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of listing fees that can be expected to be assessed against an eBay listing created with Selling Manager template. Each <b>Fee</b> container will contain the name of the listing fee, the expected amount, and
     * any eBay promotional discount that will be applied towards the expected fee. The Final Value Fee (FVF) will never be returned in this container, as this fee cannot be determined until an item is sold.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType
     */
    public $Fees;
    /**
     * Constructor method for AddSellingManagerTemplateResponseType
     * @uses AddSellingManagerTemplateResponseType::setCategoryID()
     * @uses AddSellingManagerTemplateResponseType::setCategory2ID()
     * @uses AddSellingManagerTemplateResponseType::setSaleTemplateID()
     * @uses AddSellingManagerTemplateResponseType::setSaleTemplateGroupID()
     * @uses AddSellingManagerTemplateResponseType::setSaleTemplateName()
     * @uses AddSellingManagerTemplateResponseType::setSellingManagerProductDetails()
     * @uses AddSellingManagerTemplateResponseType::setFees()
     * @param int $categoryID
     * @param int $category2ID
     * @param int $saleTemplateID
     * @param int $saleTemplateGroupID
     * @param string $saleTemplateName
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     */
    public function __construct($categoryID = null, $category2ID = null, $saleTemplateID = null, $saleTemplateGroupID = null, $saleTemplateName = null, \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \macropage\ebaysdk\trading\StructType\FeesType $fees = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setSaleTemplateID($saleTemplateID)
            ->setSaleTemplateGroupID($saleTemplateGroupID)
            ->setSaleTemplateName($saleTemplateName)
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setFees($fees);
    }
    /**
     * Get CategoryID value
     * @return int|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !is_numeric($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get Category2ID value
     * @return int|null
     */
    public function getCategory2ID()
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param int $category2ID
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType
     */
    public function setCategory2ID($category2ID = null)
    {
        // validation for constraint: int
        if (!is_null($category2ID) && !is_numeric($category2ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType
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
     * Get SaleTemplateGroupID value
     * @return int|null
     */
    public function getSaleTemplateGroupID()
    {
        return $this->SaleTemplateGroupID;
    }
    /**
     * Set SaleTemplateGroupID value
     * @param int $saleTemplateGroupID
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType
     */
    public function setSaleTemplateGroupID($saleTemplateGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($saleTemplateGroupID) && !is_numeric($saleTemplateGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($saleTemplateGroupID)), __LINE__);
        }
        $this->SaleTemplateGroupID = $saleTemplateGroupID;
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType
     */
    public function setSellingManagerProductDetails(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType
     */
    public function setFees(\macropage\ebaysdk\trading\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateResponseType
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
