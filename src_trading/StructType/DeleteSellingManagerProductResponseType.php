<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerProductResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for deleting a Selling Manager product.
 * @subpackage Structs
 */
class DeleteSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * The DeletedSellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the unique identifier and name of the Seller Manager product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $DeletedSellingManagerProductDetails = null;
    /**
     * Constructor method for DeleteSellingManagerProductResponseType
     * @uses DeleteSellingManagerProductResponseType::setDeletedSellingManagerProductDetails()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails = null)
    {
        $this
            ->setDeletedSellingManagerProductDetails($deletedSellingManagerProductDetails);
    }
    /**
     * Get DeletedSellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getDeletedSellingManagerProductDetails(): ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
    {
        return $this->DeletedSellingManagerProductDetails;
    }
    /**
     * Set DeletedSellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductResponseType
     */
    public function setDeletedSellingManagerProductDetails(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails = null): self
    {
        $this->DeletedSellingManagerProductDetails = $deletedSellingManagerProductDetails;
        
        return $this;
    }
}
