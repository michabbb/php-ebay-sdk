<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPromotionalSaleRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>SetPromotionalSale</b> call is being deprecated. No new features and/or fields will be added to <b>SetPromotionalSale</b>, and it will no longer be supported after May 17, 2021. eBay
 * recommends that sellers use the Marketing API, which provides all Promotions Manager and Promoted Listings capabilities. The Marketing API will continue to be improved and enhanced as more marketing features become available to sellers. </span>
 * Creates or modifies a promotional sale. Promotional sales enable sellers to apply discounts and/or free shipping across many listings. To use this call, the seller must be a registered eBay Store owner.
 * @subpackage Structs
 */
class SetPromotionalSaleRequestType extends AbstractRequestType
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: The seller must include this field and set it to 'Add' to create a new promotional sale, or set it to 'Update' to modify an existing promotional sale, or set it to 'Delete' to delete a promotional sale.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The PromotionalSaleDetails
     * Meta information extracted from the WSDL
     * - documentation: This container must be included in each <b>SetPromotionalSale</b> call. The fields of this container that will be used will depend on whether the seller is adding a new promotional sale, updating an existing promotional sale, or
     * deleting an existing promotional sale.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PromotionalSaleType $PromotionalSaleDetails = null;
    /**
     * Constructor method for SetPromotionalSaleRequestType
     * @uses SetPromotionalSaleRequestType::setAction()
     * @uses SetPromotionalSaleRequestType::setPromotionalSaleDetails()
     * @param string $action
     * @param \macropage\ebaysdk\trading\StructType\PromotionalSaleType $promotionalSaleDetails
     */
    public function __construct(?string $action = null, ?\macropage\ebaysdk\trading\StructType\PromotionalSaleType $promotionalSaleDetails = null)
    {
        $this
            ->setAction($action)
            ->setPromotionalSaleDetails($promotionalSaleDetails);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleRequestType
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ModifyActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get PromotionalSaleDetails value
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType|null
     */
    public function getPromotionalSaleDetails(): ?\macropage\ebaysdk\trading\StructType\PromotionalSaleType
    {
        return $this->PromotionalSaleDetails;
    }
    /**
     * Set PromotionalSaleDetails value
     * @param \macropage\ebaysdk\trading\StructType\PromotionalSaleType $promotionalSaleDetails
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleRequestType
     */
    public function setPromotionalSaleDetails(?\macropage\ebaysdk\trading\StructType\PromotionalSaleType $promotionalSaleDetails = null): self
    {
        $this->PromotionalSaleDetails = $promotionalSaleDetails;
        
        return $this;
    }
}
