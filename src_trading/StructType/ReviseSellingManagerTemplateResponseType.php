<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerTemplateResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the template ID and the estimated fees for the revised listing.
 * @subpackage Structs
 */
class ReviseSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: This sale template ID uniquely identifies the template that was revised in the request. This sale template ID should match the template ID specified in the request. specified for the call.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaleTemplateID = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of fees associated with the revised Selling Manager template. These fees may only be hypothetical in nature, unless there are one or more active listings based on this Selling Manager template. The fees in
     * this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale. <br> <br> All listing fee types are returned, even if those fees are not applicable for the
     * revised template/listing and are '0.0'. <br> <br> <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's
     * default/home currency. For example, if a Canadian seller is using the <b>ReviseSellingManagerTemplate</b> call to revise a template/item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     * </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FeesType $Fees = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: ID of the primary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID passed in Item.PrimaryCategory was mapped to a new ID by eBay. If the primary category
     * has not changed or it has expired with no replacement, CategoryID does not return a value.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: ID of the secondary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID passed in Item.SecondaryCategory was mapped to a new ID by eBay. If the secondary
     * category has not changed or it has expired with no replacement, Category2ID does not return a value.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Category2ID = null;
    /**
     * The VerifyOnly
     * Meta information extracted from the WSDL
     * - documentation: Instead of revising, only verifies the template.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $VerifyOnly = null;
    /**
     * The SaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: The name of the sale template.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SaleTemplateName = null;
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the product that this template belongs to.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $SellingManagerProductDetails = null;
    /**
     * Constructor method for ReviseSellingManagerTemplateResponseType
     * @uses ReviseSellingManagerTemplateResponseType::setSaleTemplateID()
     * @uses ReviseSellingManagerTemplateResponseType::setFees()
     * @uses ReviseSellingManagerTemplateResponseType::setCategoryID()
     * @uses ReviseSellingManagerTemplateResponseType::setCategory2ID()
     * @uses ReviseSellingManagerTemplateResponseType::setVerifyOnly()
     * @uses ReviseSellingManagerTemplateResponseType::setSaleTemplateName()
     * @uses ReviseSellingManagerTemplateResponseType::setSellingManagerProductDetails()
     * @param int $saleTemplateID
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @param string $categoryID
     * @param string $category2ID
     * @param bool $verifyOnly
     * @param string $saleTemplateName
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    public function __construct(?int $saleTemplateID = null, ?\macropage\ebaysdk\trading\StructType\FeesType $fees = null, ?string $categoryID = null, ?string $category2ID = null, ?bool $verifyOnly = null, ?string $saleTemplateName = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setFees($fees)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setVerifyOnly($verifyOnly)
            ->setSaleTemplateName($saleTemplateName)
            ->setSellingManagerProductDetails($sellingManagerProductDetails);
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType
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
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    public function getFees(): ?\macropage\ebaysdk\trading\StructType\FeesType
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setFees(?\macropage\ebaysdk\trading\StructType\FeesType $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID(): ?string
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setCategory2ID(?string $category2ID = null): self
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category2ID, true), gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerTemplateResponseType
     */
    public function setSellingManagerProductDetails(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null): self
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        
        return $this;
    }
}
