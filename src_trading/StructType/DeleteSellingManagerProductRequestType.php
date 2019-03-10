<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerProductRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Deletes a Selling Manager product. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerProductRequestType extends AbstractRequestType
{
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager product to be deleted.
     * - minOccurs: 0
     * @var int
     */
    public $ProductID;
    /**
     * Constructor method for DeleteSellingManagerProductRequestType
     * @uses DeleteSellingManagerProductRequestType::setProductID()
     * @param int $productID
     */
    public function __construct($productID = null)
    {
        $this
            ->setProductID($productID);
    }
    /**
     * Get ProductID value
     * @return int|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param int $productID
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductRequestType
     */
    public function setProductID($productID = null)
    {
        // validation for constraint: int
        if (!is_null($productID) && !is_numeric($productID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerProductRequestType
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
