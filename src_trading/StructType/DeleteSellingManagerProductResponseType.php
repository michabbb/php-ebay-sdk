<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerProductResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response for deleting a Selling Manager product.
 * @subpackage Structs
 */
class DeleteSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * The DeletedSellingManagerProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the unique identifier and name of the Seller Manager product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public $DeletedSellingManagerProductDetails;
    /**
     * Constructor method for DeleteSellingManagerProductResponseType
     * @uses DeleteSellingManagerProductResponseType::setDeletedSellingManagerProductDetails()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails = null)
    {
        $this
            ->setDeletedSellingManagerProductDetails($deletedSellingManagerProductDetails);
    }
    /**
     * Get DeletedSellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getDeletedSellingManagerProductDetails()
    {
        return $this->DeletedSellingManagerProductDetails;
    }
    /**
     * Set DeletedSellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductResponseType
     */
    public function setDeletedSellingManagerProductDetails(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $deletedSellingManagerProductDetails = null)
    {
        $this->DeletedSellingManagerProductDetails = $deletedSellingManagerProductDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductResponseType
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
