<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTokenStatusRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call is used to get the current status of a user token. There are no call-specific fields in the request payload.
 * @subpackage Structs
 */
class GetTokenStatusRequestType extends AbstractRequestType
{
    /**
     * Constructor method for GetTokenStatusRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetTokenStatusRequestType
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
