<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerProductResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for revising a Selling Manager product.
 * @subpackage Structs
 */
class ReviseSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $SellingManagerProductDetails = null;
    /**
     * Constructor method for ReviseSellingManagerProductResponseType
     * @uses ReviseSellingManagerProductResponseType::setSellingManagerProductDetails()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails);
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerProductResponseType
     */
    public function setSellingManagerProductDetails(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null): self
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        
        return $this;
    }
}
