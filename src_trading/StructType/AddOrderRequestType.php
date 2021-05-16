<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddOrderRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The <b>AddOrder</b> call can be used by a seller to combine two or more unpaid, single line item orders from the same buyer into one 'Combined Invoice' order with multiple line items. Once multiple line items are combined into one
 * order, the buyer can make one single payment for multiple line item order. If possible and agreed to, the seller can then ship multiple line items in the same shipping package, saving on shipping costs, and possibly passing that savings down to the
 * buyer through Combined Shipping Discount rules set up in My eBay.
 * @subpackage Structs
 */
class AddOrderRequestType extends AbstractRequestType
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: The root container of the <b>AddOrder</b> request. In this call, the seller identifies two or more unpaid order line items from the same buyer through the <b>TransactionArray</b> container, specifies one or more accepted payment
     * methods through the <b>PaymentMethods</b> field(s), and specifies available shipping services and other shipping details through the <b>ShippingDetails</b> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\OrderType $Order = null;
    /**
     * Constructor method for AddOrderRequestType
     * @uses AddOrderRequestType::setOrder()
     * @param \macropage\ebaysdk\trading\StructType\OrderType $order
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\OrderType $order = null)
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get Order value
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function getOrder(): ?\macropage\ebaysdk\trading\StructType\OrderType
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param \macropage\ebaysdk\trading\StructType\OrderType $order
     * @return \macropage\ebaysdk\trading\StructType\AddOrderRequestType
     */
    public function setOrder(?\macropage\ebaysdk\trading\StructType\OrderType $order = null): self
    {
        $this->Order = $order;
        
        return $this;
    }
}
