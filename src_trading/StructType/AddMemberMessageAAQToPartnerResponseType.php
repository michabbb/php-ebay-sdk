<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessageAAQToPartnerResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the response to the <b>AddMemberMessageAAQToPartner</b> call. There are no call-specific fields in this response.
 * @subpackage Structs
 */
class AddMemberMessageAAQToPartnerResponseType extends AbstractResponseType
{
    /**
     * Constructor method for AddMemberMessageAAQToPartnerResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerResponseType
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
