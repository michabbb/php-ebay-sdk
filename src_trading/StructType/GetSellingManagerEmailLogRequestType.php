<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerEmailLogRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a log of emails sent, or scheduled to be sent, to buyers. <br><br> The standard Trading API deprecation process is not applicable to this call.
 * @subpackage Structs
 */
class GetSellingManagerEmailLogRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the eBay listing associated with the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be
     * used to identify the Selling Manager email log to retrieve. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record
     * (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the sales transaction associated with the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must
     * be used to identify the Selling Manager email log to retrieve. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record
     * (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. <br> <br> The <b>TransactionID</b> value for auction listings is always
     * <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TransactionID = null;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier that identifies a single line item or multiple line item order associated with the Selling Manager email log. <br><br> If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and
     * <b>ItemID</b>/<b>TransactionID</b> pair are not required. <br><br> <span class="tablenote"><b>Note: </b> In June 2019, eBay introduced a new order ID format, but allowed developers/sellers to decide whether to immediately adopt the new format, or to
     * continue working with the old format. Users who wanted to adopt the new format, could either use a Trading WSDL Version 1113 (or newer), or they could even use an older Trading WSDL but set the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header value
     * to <code>1113</code> in API calls. <b>Beginning in June 2020, only the new order ID format will be returned in response payloads for paid orders, regardless of the WSDL version number or compatibility level.</b> <br><br> Note that the unique
     * identifier of a 'non-immediate payment' order will change as it goes from an unpaid order to a paid order. Due to this scenario, all calls that accept Order ID values as filters in the request payload, including the <b>GetSellingManagerEmailLog</b>
     * call, will support the identifiers for both unpaid and paid orders. The new order ID format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the
     * past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> Sellers can check to see if an order has been paid by looking for a
     * value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or
     * <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. </span> | Type that represents the unique identifier for an eBay order. <br><br> <span class="tablenote"><b>Note: </b> As of June 2019, eBay has
     * changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being
     * known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers who are already integrated with the Trading API's order management
     * calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order
     * versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of
     * approximately 9 months before applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b>
     * HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to
     * <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new
     * <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span> <br> <span class="tablenote"><b>Note: </b> For sellers integrated with the new
     * order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the
     * response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. When using a <b>GetOrders</b> or
     * <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can be used to retrieve an order. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderID = null;
    /**
     * The EmailDateRange
     * Meta information extracted from the WSDL
     * - documentation: Specifies the earliest (oldest) and latest (most recent) dates to use in a date range filter based on email sent date. Each of the time ranges can be up to 90 days.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TimeRangeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TimeRangeType $EmailDateRange = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item that is associated with the Selling Manager email log. This field is created as soon as there is a commitment to buy (bidder wins the auction, buyer clicks buy button, or buyer
     * purchases item through <b>PlaceOffer</b> call). <br><br> You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record
     * (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. Unless an <b>OrderID</b> or an <b>ItemID</b>/<b>TransactionID</b> pair is
     * specified in the <b>GetSellingManagerSaleRecord</b> request, the <b>OrderLineItemID</b> field is required. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
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
    public function __construct(?string $itemID = null, ?int $transactionID = null, ?string $orderID = null, ?\macropage\ebaysdk\trading\StructType\TimeRangeType $emailDateRange = null, ?string $orderLineItemID = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get TransactionID value
     * @return int|null
     */
    public function getTransactionID(): ?int
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param int $transactionID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
     */
    public function setTransactionID(?int $transactionID = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionID) && !(is_int($transactionID) || ctype_digit($transactionID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        
        return $this;
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID(): ?string
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        
        return $this;
    }
    /**
     * Get EmailDateRange value
     * @return \macropage\ebaysdk\trading\StructType\TimeRangeType|null
     */
    public function getEmailDateRange(): ?\macropage\ebaysdk\trading\StructType\TimeRangeType
    {
        return $this->EmailDateRange;
    }
    /**
     * Set EmailDateRange value
     * @param \macropage\ebaysdk\trading\StructType\TimeRangeType $emailDateRange
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
     */
    public function setEmailDateRange(?\macropage\ebaysdk\trading\StructType\TimeRangeType $emailDateRange = null): self
    {
        $this->EmailDateRange = $emailDateRange;
        
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID(): ?string
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogRequestType
     */
    public function setOrderLineItemID(?string $orderLineItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        
        return $this;
    }
}
