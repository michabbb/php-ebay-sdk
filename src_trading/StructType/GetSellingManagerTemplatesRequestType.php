<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerTemplatesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves Selling Manager templates. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerTemplatesRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager Template whose data will be returned. A Selling Manager Template contains the data needed to list an item. One or more template IDs can be specified, each in its own field. You can obtain
     * a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $SaleTemplateID;
    /**
     * Constructor method for GetSellingManagerTemplatesRequestType
     * @uses GetSellingManagerTemplatesRequestType::setSaleTemplateID()
     * @param int[] $saleTemplateID
     */
    public function __construct(array $saleTemplateID = array())
    {
        $this
            ->setSaleTemplateID($saleTemplateID);
    }
    /**
     * Get SaleTemplateID value
     * @return int[]|null
     */
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @throws \InvalidArgumentException
     * @param int[] $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesRequestType
     */
    public function setSaleTemplateID(array $saleTemplateID = array())
    {
        foreach ($saleTemplateID as $getSellingManagerTemplatesRequestTypeSaleTemplateIDItem) {
            // validation for constraint: itemType
            if (!is_numeric($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem)) {
                throw new \InvalidArgumentException(sprintf('The SaleTemplateID property can only contain items of long, "%s" given', is_object($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem) ? get_class($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem) : gettype($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem)), __LINE__);
            }
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
    }
    /**
     * Add item to SaleTemplateID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesRequestType
     */
    public function addToSaleTemplateID($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The SaleTemplateID property can only contain items of long, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SaleTemplateID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesRequestType
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
