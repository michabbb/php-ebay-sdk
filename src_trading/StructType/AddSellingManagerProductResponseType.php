<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerProductResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response for the <b>AddSellingManagerProduct</b> call.
 * @subpackage Structs
 */
class AddSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: This container includes the same information that was passed into the <b>SellingManagerProductDetails</b> container in the request, as well as a new <b>ProductID</b> value if the new product was successfully created.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $SellingManagerProductDetails = null;
    /**
     * Constructor method for AddSellingManagerProductResponseType
     * @uses AddSellingManagerProductResponseType::setSellingManagerProductDetails()
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
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerProductResponseType
     */
    public function setSellingManagerProductDetails(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null): self
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        
        return $this;
    }
}
