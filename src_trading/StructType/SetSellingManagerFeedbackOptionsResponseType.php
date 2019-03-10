<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSellingManagerFeedbackOptionsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response of <b>SetSellingManagerFeedbackOptions</b> call. This response provides confirmation that feedback comments and (optionally) automated feedback preferences were added successfully.
 * @subpackage Structs
 */
class SetSellingManagerFeedbackOptionsResponseType extends AbstractResponseType
{
    /**
     * Constructor method for SetSellingManagerFeedbackOptionsResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerFeedbackOptionsResponseType
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
