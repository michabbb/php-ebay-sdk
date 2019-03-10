<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTransactionsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more eBay.com orders. An <b>OrderArray.Order</b> container is returned for each order that matches the input
 * criteria in the call request.
 * @subpackage Structs
 */
class GetOrderTransactionsResponseType extends AbstractResponseType
{
    /**
     * The OrderArray
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\OrderArrayType
     */
    public $OrderArray;
    /**
     * Constructor method for GetOrderTransactionsResponseType
     * @uses GetOrderTransactionsResponseType::setOrderArray()
     * @param \macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray = null)
    {
        $this
            ->setOrderArray($orderArray);
    }
    /**
     * Get OrderArray value
     * @return \macropage\ebaysdk\trading\ArrayType\OrderArrayType|null
     */
    public function getOrderArray()
    {
        return $this->OrderArray;
    }
    /**
     * Set OrderArray value
     * @param \macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsResponseType
     */
    public function setOrderArray(\macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray = null)
    {
        $this->OrderArray = $orderArray;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsResponseType
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
