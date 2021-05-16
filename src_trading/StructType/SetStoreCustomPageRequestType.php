<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCustomPageRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates or updates a custom page on a user's eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * @subpackage Structs
 */
class SetStoreCustomPageRequestType extends AbstractRequestType
{
    /**
     * The CustomPage
     * Meta information extracted from the WSDL
     * - documentation: This container is used to create a new eBay Store custom page or modify an existing custom page.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreCustomPageType $CustomPage = null;
    /**
     * Constructor method for SetStoreCustomPageRequestType
     * @uses SetStoreCustomPageRequestType::setCustomPage()
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage = null)
    {
        $this
            ->setCustomPage($customPage);
    }
    /**
     * Get CustomPage value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function getCustomPage(): ?\macropage\ebaysdk\trading\StructType\StoreCustomPageType
    {
        return $this->CustomPage;
    }
    /**
     * Set CustomPage value
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCustomPageRequestType
     */
    public function setCustomPage(?\macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage = null): self
    {
        $this->CustomPage = $customPage;
        
        return $this;
    }
}
