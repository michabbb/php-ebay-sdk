<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerSaleRecordRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type containing the input fields for the <b>ReviseSellingManagerSaleRecord</b> call. The standard Trading API deprecation process is not applicable to this call. The user must have a Selling Manager Pro subscription to use
 * this call.
 * @subpackage Structs
 */
class ReviseSellingManagerSaleRecordRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used as an input filter for
     * <b>ReviseSellingManagerSaleRecord</b>. The <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved with the <b>GetSellingManagerSaleRecord</b> call. <br><br> Unless an
     * <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line
     * item (Combined Payment) order, <b>OrderID</b> should be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request. | Type that represents the unique
     * identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing,
     * the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed. The
     * <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for <b>ReviseSellingManagerSaleRecord</b>. The <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved with the
     * <b>GetSellingManagerSaleRecord</b> call. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the
     * <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item (Combined Payment) order, <b>OrderID</b> must be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is
     * ignored if present in the same request.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item (Combined Invoice) order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated
     * upon creation of the order line item. For a Combined Invoice order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Invoice order
     * through the eBay site. A Combined Invoice order can also be created by the seller through the <b>AddOrder</b> call. The <b>OrderID</b> can be used as an input filter for <b>ReviseSellingManagerSaleRecord</b>. The <b>OrderID</b> is linked to a Selling
     * Manager <b>SaleRecordID</b>, and can be retrieved with the <b>GetSellingManagerSaleRecord</b> call. <br><br> <b>OrderID</b> overrides an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same
     * request. | A unique identifier for an order.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The SellingManagerSoldOrder
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of order costs, shipping details, order status, and other information. The changes made under this container will update the order in Selling Manager.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
     */
    public $SellingManagerSoldOrder;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. For a single line item order, the
     * <b>OrderLineItemID</b> value can be passed into the <b>OrderID</b> field to revise the order in Selling Manager. <br><br> Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify a single line item order, or the <b>OrderID</b> is used to
     * identify a single or multiple line item (Combined Invoice) order, the <b>OrderLineItemID</b> must be specified. For a multiple line item (Combined Invoice) order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the
     * <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request. <br><br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for ReviseSellingManagerSaleRecordRequestType
     * @uses ReviseSellingManagerSaleRecordRequestType::setItemID()
     * @uses ReviseSellingManagerSaleRecordRequestType::setTransactionID()
     * @uses ReviseSellingManagerSaleRecordRequestType::setOrderID()
     * @uses ReviseSellingManagerSaleRecordRequestType::setSellingManagerSoldOrder()
     * @uses ReviseSellingManagerSaleRecordRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderID
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $transactionID = null, $orderID = null, \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
            ->setSellingManagerSoldOrder($sellingManagerSoldOrder)
            ->setOrderLineItemID($orderLineItemID);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType
     */
    public function setSellingManagerSoldOrder(\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null)
    {
        $this->SellingManagerSoldOrder = $sellingManagerSoldOrder;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerSaleRecordRequestType
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
