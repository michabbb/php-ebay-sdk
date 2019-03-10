<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddToItemDescriptionResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the response of the <b>AddToItemDescription</b> call. There are no call-specific fields in this response. The seller should look for an <b>Ack</b> value of <code>true</code> in the response, that will indicate that
 * the additional text in the item description was added successfully.
 * @subpackage Structs
 */
class AddToItemDescriptionResponseType extends AbstractResponseType
{
    /**
     * Constructor method for AddToItemDescriptionResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\AddToItemDescriptionResponseType
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
