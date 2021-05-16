<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCustomPageResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response for the <b>SetStoreCustomPage</b> call. This serves as confirmation that the custom page was successfully submitted.
 * @subpackage Structs
 */
class SetStoreCustomPageResponseType extends AbstractResponseType
{
    /**
     * The CustomPage
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details for the newly-added or modified eBay Store custom page.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreCustomPageType $CustomPage = null;
    /**
     * Constructor method for SetStoreCustomPageResponseType
     * @uses SetStoreCustomPageResponseType::setCustomPage()
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
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCustomPageResponseType
     */
    public function setCustomPage(?\macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage = null): self
    {
        $this->CustomPage = $customPage;
        
        return $this;
    }
}
