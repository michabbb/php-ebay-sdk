<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVersionRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call returns the current version of the service. This simple call can be used to monitor the service for availability. This call has no input parameters and the response contains only the standard output fields.
 * @subpackage Structs
 */
class GetVersionRequest extends BaseServiceRequest
{
    /**
     * Constructor method for GetVersionRequest
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
     * @return \macropage\ebaysdk\finding\StructType\GetVersionRequest
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
