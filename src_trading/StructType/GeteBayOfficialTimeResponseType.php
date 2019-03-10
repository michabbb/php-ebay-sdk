<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeteBayOfficialTimeResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Timestamp field indicates the official eBay system time in GMT. For information about converting between GMT and other time zones, see "Time Values" in the Data Types appendix in the eBay Features guide.
 * @subpackage Structs
 */
class GeteBayOfficialTimeResponseType extends AbstractResponseType
{
    /**
     * Constructor method for GeteBayOfficialTimeResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GeteBayOfficialTimeResponseType
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
