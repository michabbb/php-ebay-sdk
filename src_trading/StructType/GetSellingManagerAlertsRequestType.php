<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerAlertsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves Selling Manager alerts. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class GetSellingManagerAlertsRequestType extends AbstractRequestType
{
    /**
     * Constructor method for GetSellingManagerAlertsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsRequestType
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
