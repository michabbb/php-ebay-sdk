<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreCustomPageResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetStoreCustomPage</b> call.
 * @subpackage Structs
 */
class GetStoreCustomPageResponseType extends AbstractResponseType
{
    /**
     * The CustomPageArray
     * Meta information extracted from the WSDL
     * - documentation: This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $CustomPageArray = null;
    /**
     * Constructor method for GetStoreCustomPageResponseType
     * @uses GetStoreCustomPageResponseType::setCustomPageArray()
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $customPageArray
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $customPageArray = null)
    {
        $this
            ->setCustomPageArray($customPageArray);
    }
    /**
     * Get CustomPageArray value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType|null
     */
    public function getCustomPageArray(): ?\macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType
    {
        return $this->CustomPageArray;
    }
    /**
     * Set CustomPageArray value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $customPageArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCustomPageResponseType
     */
    public function setCustomPageArray(?\macropage\ebaysdk\trading\ArrayType\StoreCustomPageArrayType $customPageArray = null): self
    {
        $this->CustomPageArray = $customPageArray;
        
        return $this;
    }
}
