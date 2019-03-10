<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSaleRecordRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves the data for one or more Selling Manager sale records. <br><br> The standard Trading API deprecation process is not applicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerSaleRecordRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the eBay item listing associated with the Selling Manager sale record. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields
     * must be used to identify the Selling Manager sale record to retrieve. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale
     * record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the order line item associated with the Selling Manager sale record. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must
     * be used to identify the Selling Manager sale record to retrieve. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record
     * (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item (Combined Invoice) order associated with the Selling Manager sale record(s). <br><br> For a single line item order, the <b>OrderID</b> value is identical to
     * the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Invoice order, the <b>OrderID</b>value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple
     * order line items into a Combined Invoice order through the eBay site (or when the seller creates Combined Invoice order through <b>AddOrder</b>). If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     * <b>ItemID</b>/<b>TransactionID</b> pair are not required. | A unique identifier for an order.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item that is associated with the Selling Manager sale record. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of
     * <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling
     * Manager sale record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. Unless an <b>OrderID</b> or an
     * <b>ItemID</b>/<b>Transaction</b> pair is specified in the <b>GetSellingManagerSaleRecord</b> request, the <b>OrderLineItemID</b> is required. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for GetSellingManagerSaleRecordRequestType
     * @uses GetSellingManagerSaleRecordRequestType::setItemID()
     * @uses GetSellingManagerSaleRecordRequestType::setTransactionID()
     * @uses GetSellingManagerSaleRecordRequestType::setOrderID()
     * @uses GetSellingManagerSaleRecordRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderID
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $transactionID = null, $orderID = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordRequestType
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
