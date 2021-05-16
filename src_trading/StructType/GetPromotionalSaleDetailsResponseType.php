<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionalSaleDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>GetPromotionalSaleDetails</b> call is being deprecated. No new features and/or fields will be added to <b>GetPromotionalSaleDetails</b>, and it will no longer be supported after May 17,
 * 2021. eBay recommends that sellers use the Marketing API, which provides all Promotions Manager and Promoted Listings capabilities. The Marketing API will continue to be improved and enhanced as more marketing features become available to sellers.
 * </span> The base response type for the <b>GetPromotionalSaleDetails</b> call. This call retrieves information about promotional sales set up by an eBay store owner.
 * @subpackage Structs
 */
class GetPromotionalSaleDetailsResponseType extends AbstractResponseType
{
    /**
     * The PromotionalSaleDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of one or more promotional sales for an eBay store owner. A <b>PromotionalSaleDetails.PromotionalSale</b> container is returned for each promotional sale that matches the input criteria in the call
     * request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType $PromotionalSaleDetails = null;
    /**
     * Constructor method for GetPromotionalSaleDetailsResponseType
     * @uses GetPromotionalSaleDetailsResponseType::setPromotionalSaleDetails()
     * @param \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType $promotionalSaleDetails
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType $promotionalSaleDetails = null)
    {
        $this
            ->setPromotionalSaleDetails($promotionalSaleDetails);
    }
    /**
     * Get PromotionalSaleDetails value
     * @return \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType|null
     */
    public function getPromotionalSaleDetails(): ?\macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType
    {
        return $this->PromotionalSaleDetails;
    }
    /**
     * Set PromotionalSaleDetails value
     * @param \macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType $promotionalSaleDetails
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsResponseType
     */
    public function setPromotionalSaleDetails(?\macropage\ebaysdk\trading\ArrayType\PromotionalSaleArrayType $promotionalSaleDetails = null): self
    {
        $this->PromotionalSaleDetails = $promotionalSaleDetails;
        
        return $this;
    }
}
