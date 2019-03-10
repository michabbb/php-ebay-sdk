<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaxTableRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base request type of the <b>GetTaxTable</b> call, which retrieves information on the seller's Sales Tax Table. This information includes all of the site's tax jurisdictions, a boolean field to indicate if sales tax is applied to
 * shipping and handling charges, and the sales tax rate for each jurisdiction (if a sales tax rate is set for that jurisdiction). <br/><br/> Sales tax tables are only supported on the eBay US, Candada, and India sites.
 * @subpackage Structs
 */
class GetTaxTableRequestType extends AbstractRequestType
{
    /**
     * Constructor method for GetTaxTableRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetTaxTableRequestType
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
