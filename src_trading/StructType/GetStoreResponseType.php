<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>GetStore</b> call. This response consists of the data describing a seller's eBay store, and includes the eBay Store name, the description of the store, the URL to the eBay Store, the subscription level,
 * store theme information, and eBay Store Category hierarchy.
 * @subpackage Structs
 */
class GetStoreResponseType extends AbstractResponseType
{
    /**
     * The Store
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information on the seller's eBay Store. The amount of information in this container will partially depend on the settings made in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreType
     */
    public $Store;
    /**
     * Constructor method for GetStoreResponseType
     * @uses GetStoreResponseType::setStore()
     * @param \macropage\ebaysdk\trading\StructType\StoreType $store
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\StoreType $store = null)
    {
        $this
            ->setStore($store);
    }
    /**
     * Get Store value
     * @return \macropage\ebaysdk\trading\StructType\StoreType|null
     */
    public function getStore()
    {
        return $this->Store;
    }
    /**
     * Set Store value
     * @param \macropage\ebaysdk\trading\StructType\StoreType $store
     * @return \macropage\ebaysdk\trading\StructType\GetStoreResponseType
     */
    public function setStore(\macropage\ebaysdk\trading\StructType\StoreType $store = null)
    {
        $this->Store = $store;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetStoreResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
