<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStorePreferencesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call is used to retrieve an eBay seller's Store preferences. This call does not have any call-specific request payload.
 * @subpackage Structs
 */
class GetStorePreferencesRequestType extends AbstractRequestType
{
    /**
     * Constructor method for GetStorePreferencesRequestType
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetStorePreferencesRequestType
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
