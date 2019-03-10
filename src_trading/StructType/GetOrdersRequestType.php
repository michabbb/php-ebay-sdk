<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves the orders for which the authenticated user is a participant, either as the buyer or the seller. The call returns all the orders that meet the request criteria. Orders older than 90 days old will not be returned.
 * @subpackage Structs
 */
class GetOrdersRequestType extends AbstractRequestType
{
    /**
     * The OrderIDArray
     * Meta informations extracted from the WSDL
     * - documentation: A container for eBay order IDs. If one or more order IDs are specified in this container, no other call-specific input fields are applicable.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType
     */
    public $OrderIDArray;
    /**
     * The CreateTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders. The <b>CreateTimeFrom</b> field is the starting date range. All eBay orders that were created within this date range are returned in
     * the output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the <b>NumberOfDays</b> date filter is used in
     * the request, or if one or more order IDs are passed in the request. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old.
     * - minOccurs: 0
     * @var string
     */
    public $CreateTimeFrom;
    /**
     * The CreateTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: The <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields specify a date range for retrieving orders. The <b>CreateTimeTo</b> field is the ending date range. All eBay orders that were created within this date range are returned in the
     * output. The maximum date range that may be specified with the <b>CreateTimeFrom</b> and <b>CreateTimeTo</b> fields is 90 days. If the <b>CreateTimeFrom</b> field is used and the <b>CreateTimeTo</b> field is omitted, the "TimeTo" value defaults to the
     * present time or to 90 days past the <b>CreateTimeFrom</b> value (if <b>CreateTimeFrom</b> value is more than 90 days in the past). <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> date filters are ignored if the <b>NumberOfDays</b> date filter is used in
     * the request, or if one or more order IDs are passed in the request. <br><br> <span class="tablenote"><strong>Note:</strong> If a GetOrders call is made within a few seconds after the creation of a multiple line item order, the caller runs the risk of
     * retrieving orders that are in an inconsistent state, since the order consolidation involved in a multi-line item order may not have been completed. For this reason, it is recommended that sellers include the <b>CreateTimeTo</b> field in the call, and
     * set its value to: <i> Current Time</i> - 2 minutes.
     * - minOccurs: 0
     * @var string
     */
    public $CreateTimeTo;
    /**
     * The OrderRole
     * Meta informations extracted from the WSDL
     * - documentation: Filters the returned orders based on the role of the user. The user's role is either buyer or seller. If this field is used with a date filter, returned orders must satisfy both the date range and the <b>OrderRole</b> value.
     * - minOccurs: 0
     * @var string
     */
    public $OrderRole;
    /**
     * The OrderStatus
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> Since the Half.com site has been shut down, the <code>Shipped</code> value is no longer applicable since this value is only used for retrieving Half.com listings. </span> The field is used to
     * retrieve eBay orders that are in a specific state. If this field is used with a date filter, only orders that satisfy both the date range and the <b>OrderStatus</b> value are retrieved. <br><br> If one or more <b>OrderID</b> values are specified
     * through the <b>OrderIDArray</b> container, the <b>OrderStatus</b> field should not be used, and it is ignored if it is used.
     * - minOccurs: 0
     * @var string
     */
    public $OrderStatus;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field's purpose was to allow the seller to retrieve only Half.com listings. Since the Half.com site has been shut down, this field is no longer applicable. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: If many orders are available to retrieve, you may need to call GetOrders multiple times to retrieve all the data. Each result set is returned as a page of entries. Use the Pagination filters to control the maximum number of entries
     * to retrieve per page (i.e., per call), the page number to retrieve, and other data.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The ModTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time window (for example, <code>Incomplete</code> status to <code>Pending</code> status or
     * <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeFrom</b> field is the starting date range. All eBay orders that were last modified within this date range are returned in the output. The maximum date range that may be
     * specified with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are
     * ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more order IDs are passed in the request.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeFrom;
    /**
     * The ModTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving existing orders that have been modified within this time window (for example, <code>Incomplete</code> status to <code>Pending</code> status or
     * <code>Pending</code> status to <code>Complete</code> status). The <b>ModTimeTo</b> field is the ending date range. All eBay orders that were last modified within this date range are returned in the output. The maximum date range that may be specified
     * with the <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the "TimeTo" value defaults to the present time (if <b>ModTimeFrom</b> value is less than 30 days
     * in the past) or to 30 days past the <b>ModTimeFrom</b> value. <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters are ignored if the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>NumberOfDays</b> date filters are used in the request, or if one or more
     * order IDs are passed in the request.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeTo;
    /**
     * The NumberOfDays
     * Meta informations extracted from the WSDL
     * - documentation: This filter specifies the number of days (24-hour periods) in the past to search for orders. All eBay orders that were either created or modified within this period are returned in the output. This field cannot be used in conjunction
     * with the <b>CreateTimeFrom</b>/<b>CreateTimeTo</b> or <b>ModTimeFrom</b>/<b>ModTimeTo</b> date filters. <br>
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfDays;
    /**
     * The IncludeFinalValueFee
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether to include the Final Value Fee (FVF) for all Transaction objects in the response. The Final Value Fee is returned in Transaction.FinalValueFee. The Final Value Fee is assessed right after the creation of an eBay
     * order line item. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFinalValueFee;
    /**
     * The SortingOrder
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how orders returned by this call should be sorted (using <strong>LastModifiedTime</strong> as the sort key). A value of <code>Ascending</code> returns the earliest modified orders first, and a value of
     * <code>Descending</code> returns the latest modified orders first. <br/><br/> Default: <code>Ascending</code>
     * - minOccurs: 0
     * @var string
     */
    public $SortingOrder;
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
    public function __construct(\macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray = null, $createTimeFrom = null, $createTimeTo = null, $orderRole = null, $orderStatus = null, $listingType = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $modTimeFrom = null, $modTimeTo = null, $numberOfDays = null, $includeFinalValueFee = null, $sortingOrder = null)
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
    public function getOrderIDArray()
    {
        return $this->OrderIDArray;
    }
    /**
     * Set OrderIDArray value
     * @param \macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setOrderIDArray(\macropage\ebaysdk\trading\ArrayType\OrderIDArrayType $orderIDArray = null)
    {
        $this->OrderIDArray = $orderIDArray;
        return $this;
    }
    /**
     * Get CreateTimeFrom value
     * @return string|null
     */
    public function getCreateTimeFrom()
    {
        return $this->CreateTimeFrom;
    }
    /**
     * Set CreateTimeFrom value
     * @param string $createTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setCreateTimeFrom($createTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($createTimeFrom) && !is_string($createTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createTimeFrom)), __LINE__);
        }
        $this->CreateTimeFrom = $createTimeFrom;
        return $this;
    }
    /**
     * Get CreateTimeTo value
     * @return string|null
     */
    public function getCreateTimeTo()
    {
        return $this->CreateTimeTo;
    }
    /**
     * Set CreateTimeTo value
     * @param string $createTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setCreateTimeTo($createTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($createTimeTo) && !is_string($createTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createTimeTo)), __LINE__);
        }
        $this->CreateTimeTo = $createTimeTo;
        return $this;
    }
    /**
     * Get OrderRole value
     * @return string|null
     */
    public function getOrderRole()
    {
        return $this->OrderRole;
    }
    /**
     * Set OrderRole value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderRole
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setOrderRole($orderRole = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($orderRole)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $orderRole, implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->OrderRole = $orderRole;
        return $this;
    }
    /**
     * Get OrderStatus value
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderStatus
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setOrderStatus($orderStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::valueIsValid($orderStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $orderStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\OrderStatusCodeType::getValidValues())), __LINE__);
        }
        $this->OrderStatus = $orderStatus;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
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
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
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
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
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
     * Get SortingOrder value
     * @return string|null
     */
    public function getSortingOrder()
    {
        return $this->SortingOrder;
    }
    /**
     * Set SortingOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortingOrder
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
     */
    public function setSortingOrder($sortingOrder = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid($sortingOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortingOrder, implode(', ', \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->SortingOrder = $sortingOrder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetOrdersRequestType
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
