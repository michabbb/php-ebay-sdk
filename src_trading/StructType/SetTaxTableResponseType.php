<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetTaxTableResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The response of a <b>SetTaxTable</b> call only includes the standard response fields for Trading API calls, such as the <b>Ack</b> field (to indicate the success or failure of the call), the timestamp, and an <b>Errors</b> container
 * (if there were any errors and/or warnings).
 * @subpackage Structs
 */
class SetTaxTableResponseType extends AbstractResponseType
{
    /**
     * Constructor method for SetTaxTableResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\SetTaxTableResponseType
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
