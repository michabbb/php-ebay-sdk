<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call is used to set/modify the configuration of a seller's eBay Store. Configuration information includes store theme information and eBay Store category hierarchy.
 * @subpackage Structs
 */
class SetStoreRequestType extends AbstractRequestType
{
    /**
     * The Store
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to set/modify the configuration of a seller's eBay Store.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreType
     */
    public $Store;
    /**
     * Constructor method for SetStoreRequestType
     * @uses SetStoreRequestType::setStore()
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
     * @return \macropage\ebaysdk\trading\StructType\SetStoreRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetStoreRequestType
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
