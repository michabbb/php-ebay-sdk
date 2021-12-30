<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves the orders for which the authenticated user is a participant, either as the buyer or the seller. The call returns all the orders that meet the request criteria. Orders older than 90 days old will not be returned.
 * @subpackage Structs
 */
class GetOrdersRequestType extends AbstractRequestType
{
    /**
     * The OrderIDArray
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the user wants to retrieve one or more specific orders in which they are involved as either the seller or buyer. If one or more order IDs are specified in this container, any order role, order status, or
     * date range filters are ignored if specified in the request. <br><br> <span class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all
     * eBay marketplaces, and consistent for both single line item and multiple line item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer
     * and eBay customer support. <br><br> For developers and sellers who are already integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g.,
     * <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is
     * dependent upon the old identifier format, eBay is rolling out this Trading API change with version control to support a transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the
     * transition period, for developers/sellers using a Trading WSDL older than Version 1113, they can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call
     * response payloads. To get the new <b>OrderID</b> format, the value of the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will
     * still be supported/accepted in all Trading API call request payloads. After the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL
     * version used or specified compatibility level. </span> <br> <span class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status.
     * Sellers can check to see if an order has been paid by looking for a value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in
     * the response of <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either
     * of these order IDs (paid or unpaid status) can be used to retrieve an order. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $OrderIDArray = null;
    /**
     * The CreateTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders that were created during this time period. The <b>CreateTimeFrom</b> field is the starting date range. All eBay orders that were
     * created within this date range are returned in the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if
     * the <b>NumberOfDays</b> date filter is used in the request, or if one or more order IDs are passed in the request. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old. <br><br> <span
     * class="tablenote"><strong>Note:</strong> Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreateTimeFrom = null;
    /**
     * The CreateTimeTo
     * Meta information extracted from the WSDL
     * - documentation: The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders that were created during this time period. The <b>CreateTimeTo</b> field is the ending date range. All eBay orders that were created
     * within this date range are returned in the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. If the <b>CreateTimeFrom</b> field is used and the <b>CreateTimeTo</b> field is
     * omitted, the "TimeTo" value defaults to the present time or to 90 days past the <b>CreateTimeFrom</b> value (if <b>CreateTimeFrom</b> value is more than 90 days in the past). <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the
     * <b>NumberOfDays</b> date filter is used in the request, or if one or more order IDs are passed in the request. <br><br> <span class="tablenote"><strong>Note:</strong> If a <b>GetOrders</b> call is made within a few seconds after the creation of a
     * multiple line item order, the caller runs the risk of retrieving orders that are in an inconsistent state, since the order consolidation involved in a multiple line item order may not have been completed. For this reason, it is recommended that
     * sellers include the <b>CreateTimeTo</b> field in the call, and set its value to: <i>Current Time</i> - 2 minutes. </span> <br> <span class="tablenote"><strong>Note:</strong> Unless one or more <b>OrderID</b> values are used, one of the three
     * available date range filters must be used. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreateTimeTo = null;
    /**
     * The OrderRole
     * Meta information extracted from the WSDL
     * - documentation: This filter is used to toggle between retrieving orders based on the role of the user (seller or buyer). The order role defaults to <code>Seller</code> if this field is not used. If this field is used with a date filter, returned
     * orders must satisfy both the date range and the <b>OrderRole</b> value. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderRole = null;
    /**
     * The OrderStatus
     * Meta information extracted from the WSDL
     * - documentation: The field is used to retrieve eBay orders that are in a specific state. If this field is used with a date filter, only orders that satisfy both the date range and the <b>OrderStatus</b> value are retrieved. <br><br> If one or more
     * <b>OrderID</b> values are specified through the <b>OrderIDArray</b> container, the <b>OrderStatus</b> field should not be used, and it is ignored if it is used. If an <b>OrderStatus</b> value is not used and no <b>OrderID</b> values are specified,
     * orders in all states are returned. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderStatus = null;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field's purpose was to allow the seller to retrieve only Half.com listings. Since the Half.com site has been shut down, this field is no longer applicable. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingType = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: If many orders are available to retrieve, you may need to call <b>GetOrders</b> multiple times to retrieve all the data. Each result set is returned as a page of orders. Use the <b>Pagination</b> filters to control the maximum number
     * of orders to retrieve per page (i.e., per call), and the page number to retrieve.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The ModTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time period (for example, <code>Incomplete</code> status to <code>Pending</code> status or
     * <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeFrom</b> field is the starting date range. All eBay orders that were last modified within this date range are returned in the output. Unlike the
     * <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> filters, which may cover a maximum period of 90 days, the maximum date range that may be specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is only 30 days. This value cannot be set back more
     * than 90 days in the past, as this call cannot retrieve sales older than 90 days old. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the
     * request, or if one or more order IDs are passed in the request. <br><br> <span class="tablenote"><strong>Note:</strong> Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModTimeFrom = null;
    /**
     * The ModTimeTo
     * Meta information extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time window (for example, <code>Incomplete</code> status to <code>Pending</code> status or
     * <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeTo</b> field is the ending date range. All eBay orders that were last modified within this date range are returned in the output. Unlike the
     * <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> filters, which may cover a maximum period of 90 days, the maximum date range that may be specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is 30 days. If the <b>ModTimeFrom</b> field is used
     * and the <b>ModTimeTo</b> field is omitted, the 'TimeTo' value defaults to the present time (if <b>ModTimeFrom</b> value is less than 30 days in the past) or to 30 days past the <b>ModTimeFrom</b> value. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date
     * filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more order IDs are passed in the request. <br><br> <span class="tablenote"><strong>Note:</strong> Unless
     * one or more <b>OrderID</b> values are used, one of the three available date range filters must be used. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModTimeTo = null;
    /**
     * The NumberOfDays
     * Meta information extracted from the WSDL
     * - documentation: This filter specifies the number of days (24-hour periods) in the past to search for orders. All eBay orders that were either created or modified within this period are returned in the output. This field cannot be used in conjunction
     * with the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters. <br><br> <span class="tablenote"><strong>Note:</strong> This date filter only allows you to retrieve orders created/modified within the last 30
     * days. So, if you wish to retrieve orders created and/or modified more than 30 days in the past, the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters should be used instead. </span> <br> <span
     * class="tablenote"><strong>Note:</strong> Unless one or more <b>OrderID</b> values are used, one of the three available date range filters must be used. </span>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumberOfDays = null;
    /**
     * The IncludeFinalValueFee
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The
     * Final Value Fee is assessed right after the creation of an order line item. <br> <br> See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more information about
     * how Final Value Fees are calculated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeFinalValueFee = null;
    /**
     * The SortingOrder
     * Meta information extracted from the WSDL
     * - documentation: This filter controls whether orders are retrieved in ascending order (oldest to newest according to modification date) or descending order (newest to oldest according to modification date). The default is <code>Ascending</code>, so
     * the user will need to include this field and set it to <code>Descending</code> if the user wishes to view the most recent orders first in the retrieved output. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SortingOrder = null;
    /**
     * Constructor method for GetOrdersRequestType
     * @uses GetOrdersRequestType::setOrderIDArray()
     * @uses GetOrdersRequestType::setCreateTimeFrom()
     * @uses GetOrdersRequestType::setCreateTimeTo()
     * @uses GetOrdersRequestType::setOrderRole()
     * @uses GetOrdersRequestType::setOrderStatus()
     * @uses GetOrdersRequestType::setListingType()
     * @uses GetOrdersRequestType::setPagination()
     * @uses GetOrdersRequestType::setModTimeFrom()
     * @uses GetOrdersRequestType::setModTimeTo()
     * @uses GetOrdersRequestType::setNumberOfDays()
     * @uses GetOrdersRequestType::setIncludeFinalValueFee()
     * @uses GetOrdersRequestType::setSortingOrder()
     * @param \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray
     * @param string $createTimeFrom
     * @param string $createTimeTo
     * @param string $orderRole
     * @param string $orderStatus
     * @param string $listingType
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param string $modTimeFrom
     * @param string $modTimeTo
     * @param int $numberOfDays
     * @param bool $includeFinalValueFee
     * @param string $sortingOrder
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray = null, ?string $createTimeFrom = null, ?string $createTimeTo = null, ?string $orderRole = null, ?string $orderStatus = null, ?string $listingType = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?string $modTimeFrom = null, ?string $modTimeTo = null, ?int $numberOfDays = null, ?bool $includeFinalValueFee = null, ?string $sortingOrder = null)
    {
        $this
            ->setOrderIDArray($orderIDArray)
            ->setCreateTimeFrom($createTimeFrom)
            ->setCreateTimeTo($createTimeTo)
            ->setOrderRole($orderRole)
            ->setOrderStatus($orderStatus)
            ->setListingType($listingType)
            ->setPagination($pagination)
            ->setModTimeFrom($modTimeFrom)
            ->setModTimeTo($modTimeTo)
            ->setNumberOfDays($numberOfDays)
            ->setIncludeFinalValueFee($includeFinalValueFee)
            ->setSortingOrder($sortingOrder);
    }
    /**
     * Get OrderIDArray value
     * @return \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType|null
     */
    public function getOrderIDArray(): ?\macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
    {
        return $this->OrderIDArray;
    }
    /**
     * Set OrderIDArray value
     * @param \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setOrderIDArray(?\macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray = null): self
    {
        $this->OrderIDArray = $orderIDArray;
        
        return $this;
    }
    /**
     * Get CreateTimeFrom value
     * @return string|null
     */
    public function getCreateTimeFrom(): ?string
    {
        return $this->CreateTimeFrom;
    }
    /**
     * Set CreateTimeFrom value
     * @param string $createTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setCreateTimeFrom(?string $createTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($createTimeFrom) && !is_string($createTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createTimeFrom, true), gettype($createTimeFrom)), __LINE__);
        }
        $this->CreateTimeFrom = $createTimeFrom;
        
        return $this;
    }
    /**
     * Get CreateTimeTo value
     * @return string|null
     */
    public function getCreateTimeTo(): ?string
    {
        return $this->CreateTimeTo;
    }
    /**
     * Set CreateTimeTo value
     * @param string $createTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setCreateTimeTo(?string $createTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($createTimeTo) && !is_string($createTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createTimeTo, true), gettype($createTimeTo)), __LINE__);
        }
        $this->CreateTimeTo = $createTimeTo;
        
        return $this;
    }
    /**
     * Get OrderRole value
     * @return string|null
     */
    public function getOrderRole(): ?string
    {
        return $this->OrderRole;
    }
    /**
     * Set OrderRole value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderRole
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setOrderRole(?string $orderRole = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($orderRole)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType', is_array($orderRole) ? implode(', ', $orderRole) : var_export($orderRole, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->OrderRole = $orderRole;
        
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return string|null
     */
    public function getOrderStatus(): ?string
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $orderStatus
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setOrderStatus(?string $orderStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::valueIsValid($orderStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType', is_array($orderStatus) ? implode(', ', $orderStatus) : var_export($orderStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::getValidValues())), __LINE__);
        }
        $this->OrderStatus = $orderStatus;
        
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType(): ?string
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setListingType(?string $listingType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination(): ?\macropage\ebaysdk\trading\StructType\PaginationType
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
        return $this;
    }
    /**
     * Get ModTimeFrom value
     * @return string|null
     */
    public function getModTimeFrom(): ?string
    {
        return $this->ModTimeFrom;
    }
    /**
     * Set ModTimeFrom value
     * @param string $modTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setModTimeFrom(?string $modTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($modTimeFrom) && !is_string($modTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTimeFrom, true), gettype($modTimeFrom)), __LINE__);
        }
        $this->ModTimeFrom = $modTimeFrom;
        
        return $this;
    }
    /**
     * Get ModTimeTo value
     * @return string|null
     */
    public function getModTimeTo(): ?string
    {
        return $this->ModTimeTo;
    }
    /**
     * Set ModTimeTo value
     * @param string $modTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setModTimeTo(?string $modTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($modTimeTo) && !is_string($modTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTimeTo, true), gettype($modTimeTo)), __LINE__);
        }
        $this->ModTimeTo = $modTimeTo;
        
        return $this;
    }
    /**
     * Get NumberOfDays value
     * @return int|null
     */
    public function getNumberOfDays(): ?int
    {
        return $this->NumberOfDays;
    }
    /**
     * Set NumberOfDays value
     * @param int $numberOfDays
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setNumberOfDays(?int $numberOfDays = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfDays) && !(is_int($numberOfDays) || ctype_digit($numberOfDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfDays, true), gettype($numberOfDays)), __LINE__);
        }
        $this->NumberOfDays = $numberOfDays;
        
        return $this;
    }
    /**
     * Get IncludeFinalValueFee value
     * @return bool|null
     */
    public function getIncludeFinalValueFee(): ?bool
    {
        return $this->IncludeFinalValueFee;
    }
    /**
     * Set IncludeFinalValueFee value
     * @param bool $includeFinalValueFee
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setIncludeFinalValueFee(?bool $includeFinalValueFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeFinalValueFee) && !is_bool($includeFinalValueFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFinalValueFee, true), gettype($includeFinalValueFee)), __LINE__);
        }
        $this->IncludeFinalValueFee = $includeFinalValueFee;
        
        return $this;
    }
    /**
     * Get SortingOrder value
     * @return string|null
     */
    public function getSortingOrder(): ?string
    {
        return $this->SortingOrder;
    }
    /**
     * Set SortingOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortingOrder
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setSortingOrder(?string $sortingOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid($sortingOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SortOrderCodeType', is_array($sortingOrder) ? implode(', ', $sortingOrder) : var_export($sortingOrder, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortingOrder = $sortingOrder;
        
        return $this;
    }
}
