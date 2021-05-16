<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerTemplatesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetSellingManagerTemplates</b> call. A <b>SellingManagerTemplateDetails</b> container is returned for each Selling Manager Template that matches the input criteria.
 * @subpackage Structs
 */
class GetSellingManagerTemplatesResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerTemplateDetailsArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of Selling Manager Templates that match the input criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray = null;
    /**
     * Constructor method for GetSellingManagerTemplatesResponseType
     * @uses GetSellingManagerTemplatesResponseType::setSellingManagerTemplateDetailsArray()
     * @param \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null)
    {
        $this
            ->setSellingManagerTemplateDetailsArray($sellingManagerTemplateDetailsArray);
    }
    /**
     * Get SellingManagerTemplateDetailsArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType|null
     */
    public function getSellingManagerTemplateDetailsArray(): ?\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType
    {
        return $this->SellingManagerTemplateDetailsArray;
    }
    /**
     * Set SellingManagerTemplateDetailsArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesResponseType
     */
    public function setSellingManagerTemplateDetailsArray(?\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null): self
    {
        $this->SellingManagerTemplateDetailsArray = $sellingManagerTemplateDetailsArray;
        
        return $this;
    }
}
