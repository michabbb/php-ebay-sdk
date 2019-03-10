<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisableUnpaidItemAssistanceResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response of the <b>DisableUnpaidItemAssistance</b> call, which includes only the standard response fields like <b>Ack</b>, <b>Timestamp</b>, <b>Errors</b>, etc.
 * @subpackage Structs
 */
class DisableUnpaidItemAssistanceResponseType extends AbstractResponseType
{
    /**
     * Constructor method for DisableUnpaidItemAssistanceResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\DisableUnpaidItemAssistanceResponseType
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
