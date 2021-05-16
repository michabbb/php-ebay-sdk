<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used to set/modify the configuration of a seller's eBay Store. Configuration information includes store theme information and eBay Store category hierarchy.
 * @subpackage Structs
 */
class SetStoreRequestType extends AbstractRequestType
{
    /**
     * The Store
     * Meta information extracted from the WSDL
     * - documentation: This container is used to set/modify the configuration of a seller's eBay Store.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreType $Store = null;
    /**
     * Constructor method for SetStoreRequestType
     * @uses SetStoreRequestType::setStore()
     * @param \macropage\ebaysdk\trading\StructType\StoreType $store
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\StoreType $store = null)
    {
        $this
            ->setStore($store);
    }
    /**
     * Get Store value
     * @return \macropage\ebaysdk\trading\StructType\StoreType|null
     */
    public function getStore(): ?\macropage\ebaysdk\trading\StructType\StoreType
    {
        return $this->Store;
    }
    /**
     * Set Store value
     * @param \macropage\ebaysdk\trading\StructType\StoreType $store
     * @return \macropage\ebaysdk\trading\StructType\SetStoreRequestType
     */
    public function setStore(?\macropage\ebaysdk\trading\StructType\StoreType $store = null): self
    {
        $this->Store = $store;
        
        return $this;
    }
}
