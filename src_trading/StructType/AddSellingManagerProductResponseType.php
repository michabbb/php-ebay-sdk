<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerProductResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response for the <b>AddSellingManagerProduct</b> call.
 * @subpackage Structs
 */
class AddSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container includes the same information that was passed into the <b>SellingManagerProductDetails</b> container in the request, as well as a new <b>ProductID</b> value if the new product was successfully created.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * Constructor method for AddSellingManagerProductResponseType
     * @uses AddSellingManagerProductResponseType::setSellingManagerProductDetails()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails);
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerProductResponseType
     */
    public function setSellingManagerProductDetails(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerProductResponseType
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
