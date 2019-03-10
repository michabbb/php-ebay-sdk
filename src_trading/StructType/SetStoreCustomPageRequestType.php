<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCustomPageRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Creates or updates a custom page on a user's eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * @subpackage Structs
 */
class SetStoreCustomPageRequestType extends AbstractRequestType
{
    /**
     * The CustomPage
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to create a new eBay Store custom page or modify an existing custom page.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public $CustomPage;
    /**
     * Constructor method for SetStoreCustomPageRequestType
     * @uses SetStoreCustomPageRequestType::setCustomPage()
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage = null)
    {
        $this
            ->setCustomPage($customPage);
    }
    /**
     * Get CustomPage value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function getCustomPage()
    {
        return $this->CustomPage;
    }
    /**
     * Set CustomPage value
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCustomPageRequestType
     */
    public function setCustomPage(\macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage = null)
    {
        $this->CustomPage = $customPage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCustomPageRequestType
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
