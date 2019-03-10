<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddOrderRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The <b>AddOrder</b> call can be used by a seller to combine two or more unpaid, single line item orders from the same buyer into one 'Combined Invoice' order with multiple line items. Once multiple line items are combined into one
 * order, the buyer can make one single payment for multiple line item order. If possible and agreed to, the seller can then ship multiple line items in the same shipping package, saving on shipping costs, and possibly passing that savings down to the
 * buyer through Combined Shipping Discount rules set up in My eBay.
 * @subpackage Structs
 */
class AddOrderRequestType extends AbstractRequestType
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - documentation: The root container of the <b>AddOrder</b> request. In this call, the seller identifies two or more unpaid order line items from the same buyer through the <b>TransactionArray</b> container, specifies one or more accepted payment
     * methods through the <b>PaymentMethods</b> field(s), and specifies available shipping services and other shipping details through the <b>ShippingDetails</b> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderType
     */
    public $Order;
    /**
     * Constructor method for AddOrderRequestType
     * @uses AddOrderRequestType::setOrder()
     * @param \macropage\ebaysdk\trading\StructType\OrderType $order
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\OrderType $order = null)
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get Order value
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param \macropage\ebaysdk\trading\StructType\OrderType $order
     * @return \macropage\ebaysdk\trading\StructType\AddOrderRequestType
     */
    public function setOrder(\macropage\ebaysdk\trading\StructType\OrderType $order = null)
    {
        $this->Order = $order;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddOrderRequestType
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
