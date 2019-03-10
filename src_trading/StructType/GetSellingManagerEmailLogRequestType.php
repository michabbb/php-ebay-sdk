<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerEmailLogRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves a log of emails sent, or scheduled to be sent, to buyers. <br><br> The standard Trading API deprecation process is not applicable to this call.
 * @subpackage Structs
 */
class GetSellingManagerEmailLogRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the eBay item listing associated with the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must
     * be used to identify the Selling Manager email log to retrieve. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record
     * (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the order line item associated with the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be
     * used to identify the Selling Manager email log to retrieve. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record
     * (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request.
     * - minOccurs: 0
     * @var int
     */
    public $TransactionID;
    /**
     * The OrderID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item (Combined Invoice) order associated with the Selling Manager email log. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the
     * <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Payment order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple
     * order line items into a Combined Payment order through the eBay site (or when the seller creates Combined Payment order through <b>AddOrder</b>). If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     * <b>ItemID</b>/<b>TransactionID</b> pair are not required. | A unique identifier for an order.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The EmailDateRange
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) and latest (most recent) dates to use in a date range filter based on email sent date. Each of the time ranges can be up to 90 days.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TimeRangeType
     */
    public $EmailDateRange;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item that is associated with the Selling Manager email log. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of
     * <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling
     * Manager sale record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. Unless an <b>OrderID</b> or an
     * <b>ItemID</b>/<b>TransactionID</b> pair is specified in the <b>GetSellingManagerSaleRecord</b> request, the <b>OrderLineItemID</b> is required. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for GetSellingManagerEmailLogRequestType
     * @uses GetSellingManagerEmailLogRequestType::setItemID()
     * @uses GetSellingManagerEmailLogRequestType::setTransactionID()
     * @uses GetSellingManagerEmailLogRequestType::setOrderID()
     * @uses GetSellingManagerEmailLogRequestType::setEmailDateRange()
     * @uses GetSellingManagerEmailLogRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param int $transactionID
     * @param string $orderID
     * @param \macropage\ebaysdk\trading\StructType\TimeRangeType $emailDateRange
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $transactionID = null, $orderID = null, \macropage\ebaysdk\trading\StructType\TimeRangeType $emailDateRange = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderID($orderID)
            ->setEmailDateRange($emailDateRange)
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
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
     * @return int|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param int $transactionID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: int
        if (!is_null($transactionID) && !is_numeric($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transactionID)), __LINE__);
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
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
     * Get EmailDateRange value
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType|null
     */
    public function getEmailDateRange()
    {
        return $this->EmailDateRange;
    }
    /**
     * Set EmailDateRange value
     * @param \macropage\ebaysdk\trading\StructType\TimeRangeType $emailDateRange
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
     */
    public function setEmailDateRange(\macropage\ebaysdk\trading\StructType\TimeRangeType $emailDateRange = null)
    {
        $this->EmailDateRange = $emailDateRange;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
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
