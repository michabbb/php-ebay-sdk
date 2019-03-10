<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerTemplateRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Deletes a Selling Manager template. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the Selling Manager template to be deleted. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * Constructor method for DeleteSellingManagerTemplateRequestType
     * @uses DeleteSellingManagerTemplateRequestType::setSaleTemplateID()
     * @param int $saleTemplateID
     */
    public function __construct($saleTemplateID = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID);
    }
    /**
     * Get SaleTemplateID value
     * @return int|null
     */
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateRequestType
     */
    public function setSaleTemplateID($saleTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !is_numeric($saleTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateRequestType
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
