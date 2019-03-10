<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemTransactionsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves order line item information for a specified <b>ItemID</b>. The call returns zero, one, or multiple order line items, depending on the number of items sold from the listing. <br><br> You can retrieve order line item data for
 * a specific time range or number of days. If you don't specify a range or number of days, order line item data will be returned for the past 30 days. This call cannot retrieve sales older than 90 days old.
 * @subpackage Structs
 */
class GetItemTransactionsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. When you use <b>ItemID</b> alone, eBay returns all order line items that are associated with the <b>ItemID</b>. If you
     * pair <b>ItemID</b> with a specific <b>TransactionID</b>, data on a specific order line item is returned. If <b>OrderLineItemID</b> is specified in the request, any <b>ItemID</b>/<b>TransactionID</b> pair specified in the same request will be ignored.
     * <br> <br> <span class="tablenote"><b>Note:</b> <b>GetItemTransactions</b> doesn't support SKU as an input because this call requires an identifier that is unique across your active and ended listings. Even when <b>InventoryTrackingMethod</b> is set
     * to <b>SKU</b> in a listing, the SKU is only unique across your active listings (not your ended listings). To retrieve order line items by SKU, use <b>GetSellerTransactions</b> or <b>GetOrderTransactions</b> instead. </span> | Type that represents the
     * unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The ModTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b>. The <b>ModTimeFrom</b> field is the starting date range. All of the listing's order
     * line items that were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than
     * 90 days old. The maximum date range that may be specified is 30 days. This field is not applicable if a specific <b>TransactionID</b> or <b>OrderLineItemID</b> is included in the request or if the <b>NumberOfDays</b> date filter is used. <br><br> If
     * you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeFrom;
    /**
     * The ModTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b>. The <b>ModTimeTo</b> field is the ending date range. All eBay order line items that
     * were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b> value defaults to
     * the present time or to 30 days past the <b>ModTimeFrom</b> value (if <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not applicable if a specific <b>TransactionID</b> or <b>OrderLineItemID</b> is included in the request or
     * if the <b>NumberOfDays</b> date filter is used. <br><br> If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeTo;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Include a <b>TransactionID</b> field in the request if you want to retrieve the data for a specific order line item. If a <b>TransactionID</b> is provided, any specified time filter is ignored.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: Child elements control pagination of the output. Use the <b>EntriesPerPage</b> property to control the number of order line items to return per call and the <b>PageNumber</b> property to specify the specific page of data to return.
     * If multiple pages of order line items are returned based on input criteria and Pagination properties, <b>GetItemTransactions</b> will need to be called multiple times (with the <b>PageNumber</b> value being increased by 1 each time) to scroll through
     * all results.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The IncludeFinalValueFee
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether to include the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation
     * of an order line item.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFinalValueFee;
    /**
     * The IncludeContainingOrder
     * Meta informations extracted from the WSDL
     * - documentation: Include this field and set it to True if you want the <b>ContainingOrder</b> container to be returned in the response under each <b>Transaction</b> node. For single line item orders, the <b>ContainingOrder.OrderID</b> value takes the
     * value of the <b>OrderLineItemID</b> value for the order line item. For <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> orders, the <b>ContainingOrder.OrderID</b>
     * value will be shared by at least two order line items that are part of the same order.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeContainingOrder;
    /**
     * The Platform
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field's purpose is to allow the seller to retrieve only eBay listings or only Half.com listings instead of both order types. Since API support for Half.com listings is being deprecated, this
     * field is no longer necessary to use since eBay orders will be the only orders that are retrieved. </span> The default behavior of <b>GetItemTransactions</b> is to retrieve all order line items originating from eBay.com and Half.com. If the user wants
     * to retrieve only eBay.com order line items or only Half.com order line items, this filter can be used to perform that function. Inserting <code>eBay</code> into this field will restrict retrieved order line items to those originating on eBay.com, and
     * inserting <code>Half</code> into this field will restrict retrieved order line items to those originating on Half.com.
     * - minOccurs: 0
     * @var string
     */
    public $Platform;
    /**
     * The NumberOfDays
     * Meta informations extracted from the WSDL
     * - documentation: This time filter specifies the number of days (24-hour periods) in the past to search for order line items. All eBay order line items that were either created or modified within this period are returned in the response. If specified,
     * <b>NumberOfDays</b> will override any date range specified with the <b>ModTimeFrom</b>/<b>ModTimeTo</b> time filters. This field is not applicable if a specific <b>TransactionID</b> or <b>OrderLineItemID</b> is included in the request.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfDays;
    /**
     * The IncludeVariations
     * Meta informations extracted from the WSDL
     * - documentation: If included in the request and set to True, all variations defined for the item are returned at the root level, including variations that have no sales. If not included in the request or set to false, the variations with sales are
     * still returned in separate <b>Transaction</b> nodes. This information is intended to help sellers to reconcile their local inventory with eBay's records, while processing order line items (without requiring a separate call to <b>GetItem</b>).
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeVariations;
    /**
     * The OrderLineItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in
     * between these two IDs. If you want to retrieve data on a specific order line item, you can use an <b>OrderLineItemID</b> value in the request instead of the <b>ItemID</b>/<b>TransactionID</b> pair. If an <b>OrderLineItemID</b> is provided, any
     * specified time filter is ignored.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for GetItemTransactionsRequestType
     * @uses GetItemTransactionsRequestType::setItemID()
     * @uses GetItemTransactionsRequestType::setModTimeFrom()
     * @uses GetItemTransactionsRequestType::setModTimeTo()
     * @uses GetItemTransactionsRequestType::setTransactionID()
     * @uses GetItemTransactionsRequestType::setPagination()
     * @uses GetItemTransactionsRequestType::setIncludeFinalValueFee()
     * @uses GetItemTransactionsRequestType::setIncludeContainingOrder()
     * @uses GetItemTransactionsRequestType::setPlatform()
     * @uses GetItemTransactionsRequestType::setNumberOfDays()
     * @uses GetItemTransactionsRequestType::setIncludeVariations()
     * @uses GetItemTransactionsRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $modTimeFrom
     * @param string $modTimeTo
     * @param string $transactionID
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param bool $includeFinalValueFee
     * @param bool $includeContainingOrder
     * @param string $platform
     * @param int $numberOfDays
     * @param bool $includeVariations
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $modTimeFrom = null, $modTimeTo = null, $transactionID = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $includeFinalValueFee = null, $includeContainingOrder = null, $platform = null, $numberOfDays = null, $includeVariations = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setModTimeFrom($modTimeFrom)
            ->setModTimeTo($modTimeTo)
            ->setTransactionID($transactionID)
            ->setPagination($pagination)
            ->setIncludeFinalValueFee($includeFinalValueFee)
            ->setIncludeContainingOrder($includeContainingOrder)
            ->setPlatform($platform)
            ->setNumberOfDays($numberOfDays)
            ->setIncludeVariations($includeVariations)
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
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
     * Get ModTimeFrom value
     * @return string|null
     */
    public function getModTimeFrom()
    {
        return $this->ModTimeFrom;
    }
    /**
     * Set ModTimeFrom value
     * @param string $modTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
     */
    public function setModTimeFrom($modTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeFrom) && !is_string($modTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modTimeFrom)), __LINE__);
        }
        $this->ModTimeFrom = $modTimeFrom;
        return $this;
    }
    /**
     * Get ModTimeTo value
     * @return string|null
     */
    public function getModTimeTo()
    {
        return $this->ModTimeTo;
    }
    /**
     * Set ModTimeTo value
     * @param string $modTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
     */
    public function setModTimeTo($modTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeTo) && !is_string($modTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modTimeTo)), __LINE__);
        }
        $this->ModTimeTo = $modTimeTo;
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
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
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get IncludeFinalValueFee value
     * @return bool|null
     */
    public function getIncludeFinalValueFee()
    {
        return $this->IncludeFinalValueFee;
    }
    /**
     * Set IncludeFinalValueFee value
     * @param bool $includeFinalValueFee
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
     */
    public function setIncludeFinalValueFee($includeFinalValueFee = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFinalValueFee) && !is_bool($includeFinalValueFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeFinalValueFee)), __LINE__);
        }
        $this->IncludeFinalValueFee = $includeFinalValueFee;
        return $this;
    }
    /**
     * Get IncludeContainingOrder value
     * @return bool|null
     */
    public function getIncludeContainingOrder()
    {
        return $this->IncludeContainingOrder;
    }
    /**
     * Set IncludeContainingOrder value
     * @param bool $includeContainingOrder
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
     */
    public function setIncludeContainingOrder($includeContainingOrder = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeContainingOrder) && !is_bool($includeContainingOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeContainingOrder)), __LINE__);
        }
        $this->IncludeContainingOrder = $includeContainingOrder;
        return $this;
    }
    /**
     * Get Platform value
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->Platform;
    }
    /**
     * Set Platform value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $platform
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
     */
    public function setPlatform($platform = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($platform)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $platform, implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->Platform = $platform;
        return $this;
    }
    /**
     * Get NumberOfDays value
     * @return int|null
     */
    public function getNumberOfDays()
    {
        return $this->NumberOfDays;
    }
    /**
     * Set NumberOfDays value
     * @param int $numberOfDays
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
     */
    public function setNumberOfDays($numberOfDays = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfDays) && !is_numeric($numberOfDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfDays)), __LINE__);
        }
        $this->NumberOfDays = $numberOfDays;
        return $this;
    }
    /**
     * Get IncludeVariations value
     * @return bool|null
     */
    public function getIncludeVariations()
    {
        return $this->IncludeVariations;
    }
    /**
     * Set IncludeVariations value
     * @param bool $includeVariations
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
     */
    public function setIncludeVariations($includeVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeVariations) && !is_bool($includeVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeVariations)), __LINE__);
        }
        $this->IncludeVariations = $includeVariations;
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemTransactionsRequestType
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
