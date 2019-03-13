<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeteBayTimeResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Timestamp field indicates the official eBay system time in GMT. The value returned represents the date and time when eBay processed the request. The value is in the ISO 8601 date-time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
 * @subpackage Structs
 */
class GeteBayTimeResponseType extends AbstractResponseType
{
    /**
     * Constructor method for GeteBayTimeResponseType
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
     * @return \macropage\ebaysdk\shopping\StructType\GeteBayTimeResponseType
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
