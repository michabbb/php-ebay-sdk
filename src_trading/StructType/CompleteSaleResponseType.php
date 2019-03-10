<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteSaleResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the success or failure of the attempt to leave feedback for the buyer, change the paid status in My eBay, and/or change the shipped status in My eBay. <br><br> When <b>CompleteSale</b> is applied to a specified order (by
 * specifying <b>OrderID</b>), it applies to each line item within the order.
 * @subpackage Structs
 */
class CompleteSaleResponseType extends AbstractResponseType
{
    /**
     * Constructor method for CompleteSaleResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\CompleteSaleResponseType
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
