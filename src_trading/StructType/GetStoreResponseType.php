<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetStore</b> call. This response consists of the data describing a seller's eBay store, and includes the eBay Store name, the description of the store, the URL to the eBay Store, the subscription level,
 * store theme information, and eBay Store Category hierarchy.
 * @subpackage Structs
 */
class GetStoreResponseType extends AbstractResponseType
{
    /**
     * The Store
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information on the seller's eBay Store. The amount of information in this container will partially depend on the settings made in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreType $Store = null;
    /**
     * Constructor method for GetStoreResponseType
     * @uses GetStoreResponseType::setStore()
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
     * @return \macropage\ebaysdk\trading\StructType\GetStoreResponseType
     */
    public function setStore(?\macropage\ebaysdk\trading\StructType\StoreType $store = null): self
    {
        $this->Store = $store;
        
        return $this;
    }
}
