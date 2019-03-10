<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStorePreferencesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response for the <b>SetStorePreferences<b> call. There are no call-specific fields in this response, but the seller should look for an <b>Ack</b> value of <code>Success</code> to know that the preferences were successfully
 * updated.
 * @subpackage Structs
 */
class SetStorePreferencesResponseType extends AbstractResponseType
{
    /**
     * Constructor method for SetStorePreferencesResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\SetStorePreferencesResponseType
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
