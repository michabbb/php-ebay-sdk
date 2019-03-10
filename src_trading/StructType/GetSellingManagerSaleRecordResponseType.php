<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSaleRecordResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response to a <b>GetSellingManagerSaleRecord</b> call.
 * @subpackage Structs
 */
class GetSellingManagerSaleRecordResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerSoldOrder
     * Meta informations extracted from the WSDL
     * - documentation: Contains the data in a Selling Manager Sale Record.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public $SellingManagerSoldOrder;
    /**
     * Constructor method for GetSellingManagerSaleRecordResponseType
     * @uses GetSellingManagerSaleRecordResponseType::setSellingManagerSoldOrder()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null)
    {
        $this
            ->setSellingManagerSoldOrder($sellingManagerSoldOrder);
    }
    /**
     * Get SellingManagerSoldOrder value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType|null
     */
    public function getSellingManagerSoldOrder()
    {
        return $this->SellingManagerSoldOrder;
    }
    /**
     * Set SellingManagerSoldOrder value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordResponseType
     */
    public function setSellingManagerSoldOrder(\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null)
    {
        $this->SellingManagerSoldOrder = $sellingManagerSoldOrder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordResponseType
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
