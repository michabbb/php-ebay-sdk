<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDisputeResponseResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is the base response of the <b>AddDisputeResponse</b> call. This type has no call-specific fields, but the applicable fields of the <b>AbstractResponseType</b> will be returned in the <b>AddDisputeResponse</b> response.
 * @subpackage Structs
 */
class AddDisputeResponseResponseType extends AbstractResponseType
{
    /**
     * Constructor method for AddDisputeResponseResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseResponseType
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
