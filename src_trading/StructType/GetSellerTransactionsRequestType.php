<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerTransactionsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves a seller's order line item information. To retrieve order line items for another seller, the <b>GetItemTransactions</b>) call must be used. This call cannot retrieve sales older than 90 days old.
 * @subpackage Structs
 */
class GetSellerTransactionsRequestType extends AbstractRequestType
{
    /**
     * The ModTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the seller. The <b>ModTimeFrom</b> field is the starting date range. All of the seller's order line items that
     * were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales older than 90 days old.
     * This field is not applicable if the <b>NumberOfDays</b> date filter is used. <br><br> If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeFrom;
    /**
     * The ModTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the seller. The <b>ModTimeTo</b> field is the ending date range. All of the seller's order line items that were
     * last modified within this date range are returned in the output. <br/><br/> The maximum date range that may be specified is 30 days. <br/><br/> If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b>
     * value defaults to the present time or to 30 days past the <b>ModTimeFrom</b> value (if <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not applicable if the <b>NumberOfDays</b> date filter is used. <br><br> If you don't
     * specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeTo;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: Child elements control pagination of the output. Use <b>EntriesPerPage</b> property to control the number of transactions to return per call and <b>PageNumber</b> property to specify the page of data to return.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The IncludeFinalValueFee
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether to include Final Value Fee (FVF) in the response. For most listing types, the Final Value Fee is returned in <b>Transaction.FinalValueFee</b>. The Final Value Fee is returned for each order line item. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFinalValueFee;
    /**
     * The IncludeContainingOrder
     * Meta informations extracted from the WSDL
     * - documentation: Include this field and set it to <code>true</code> if you want the <b>ContainingOrder</b> container to be returned in the response under each <b>Transaction</b> node. For single line item orders, the <b>ContainingOrder.OrderID</b>
     * value takes the value of the <b>OrderLineItemID</b> value for the order line item. For Combined Invoice orders, the <b>ContainingOrder.OrderID</b> value will be shared by at least two order line items (transactions) that are part of the same order.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeContainingOrder;
    /**
     * The SKUArray
     * Meta informations extracted from the WSDL
     * - documentation: Container for a set of SKUs. Filters (reduces) the response to only include order line items for listings that include any of the specified SKUs. If multiple listings include the same SKU, order line items for all of them are
     * returned (assuming they also match the other criteria in the <b>GetSellerTransactions</b> request).<br> <br> You can combine SKUArray with <b>InventoryTrackingMethod</b>. For example, if you also pass in <code>InventoryTrackingMethod=SKU</code>, the
     * response only includes order line items for listings that include <code>InventoryTrackingMethod=SKU</code> and one of the requested SKUs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SKUArrayType
     */
    public $SKUArray;
    /**
     * The Platform
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field's purpose is to allow the seller to retrieve only eBay listings or only Half.com listings instead of both order types. Since the Half.com site has been shut down, this field is no
     * longer necessary to use since eBay orders will be the only orders that are retrieved. </span> The default behavior of <b>GetSellerTransactions</b> is to retrieve all order line items originating from eBay.com and Half.com. If the user wants to
     * retrieve only eBay.com order line items or Half.com order line items, this filter can be used to perform that function. Inserting 'eBay' into this field will restrict retrieved order line items to those originating on eBay.com, and inserting 'Half'
     * into this field will restrict retrieved order line items to those originating on Half.com.
     * - minOccurs: 0
     * @var string
     */
    public $Platform;
    /**
     * The NumberOfDays
     * Meta informations extracted from the WSDL
     * - documentation: Enables you to specify the number of days' worth of new and modified order line items that you want to retrieve. The maximum value for this field is <code>30</code> <br/><br/> The call response contains the order line items whose
     * status was modified within the specified number of days since the API call was made. <b>NumberOfDays</b> is often preferable to using the <b>ModTimeFrom</b> and <b>ModTimeTo</b> filters because you only need to specify one value. If you use
     * <b>NumberOfDays</b>, then <b>ModTimeFrom</b> and <b>ModTimeTo</b> are ignored. <br/><br/> For this field, one day is defined as 24 hours.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfDays;
    /**
     * The InventoryTrackingMethod
     * Meta informations extracted from the WSDL
     * - documentation: Filters the response to only include order line items for listings that match this <b>InventoryTrackingMethod</b> setting. <br> <br> For example, <b></b> <ul> <li>If you set this to <b>SKU</b>, the call returns order line items for
     * your listings that are tracked by SKU.</li> <li>If you set this to <b>ItemID</b>, the call omits order line items for your listings that are tracked by SKU.</li> <li>If you don't pass this in, the call returns all order line items, regardless of
     * whether they are tracked by <b>SKU</b>, or <b>ItemID</b>.</li> </ul> <br> <span class="tablenote"><b>Note:</b> To specify the <b>InventoryTrackingMethod</b> when you create a listing, use <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b>.
     * <b>AddFixedPriceItem</b> and <b>RelistFixedPriceItem</b> are defined in the Merchant Data API (part of Large Merchant Services). </span> <br> You can combine <b>SKUArray</b> with <b>InventoryTrackingMethod</b>. For example, if you set this to SKU and
     * you also pass in <b>SKUArray</b>, the response only includes order line items for listings that include <code>InventoryTrackingMethod</code> = <code>SKU</code> and one of the requested SKUs.
     * - minOccurs: 0
     * @var string
     */
    public $InventoryTrackingMethod;
    /**
     * The IncludeCodiceFiscale
     * Meta informations extracted from the WSDL
     * - documentation: If this field is included in the call request and set to <code>true</code>, taxpayer identification information for the buyer is returned under the <b>BuyerTaxIdentifier</b> <br><br> Codice Fiscale is only applicable to buyers on the
     * Italy and Spain sites. It is required that buyers on the Italy site provide their Codice Fiscale ID before buying an item, and sellers on the Spain site have the option of requiring buyers on the Spain site to provide their taxpayer ID.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeCodiceFiscale;
    /**
     * Constructor method for GetSellerTransactionsRequestType
     * @uses GetSellerTransactionsRequestType::setModTimeFrom()
     * @uses GetSellerTransactionsRequestType::setModTimeTo()
     * @uses GetSellerTransactionsRequestType::setPagination()
     * @uses GetSellerTransactionsRequestType::setIncludeFinalValueFee()
     * @uses GetSellerTransactionsRequestType::setIncludeContainingOrder()
     * @uses GetSellerTransactionsRequestType::setSKUArray()
     * @uses GetSellerTransactionsRequestType::setPlatform()
     * @uses GetSellerTransactionsRequestType::setNumberOfDays()
     * @uses GetSellerTransactionsRequestType::setInventoryTrackingMethod()
     * @uses GetSellerTransactionsRequestType::setIncludeCodiceFiscale()
     * @param string $modTimeFrom
     * @param string $modTimeTo
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param bool $includeFinalValueFee
     * @param bool $includeContainingOrder
     * @param \macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray
     * @param string $platform
     * @param int $numberOfDays
     * @param string $inventoryTrackingMethod
     * @param bool $includeCodiceFiscale
     */
    public function __construct($modTimeFrom = null, $modTimeTo = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $includeFinalValueFee = null, $includeContainingOrder = null, \macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray = null, $platform = null, $numberOfDays = null, $inventoryTrackingMethod = null, $includeCodiceFiscale = null)
    {
        $this
            ->setModTimeFrom($modTimeFrom)
            ->setModTimeTo($modTimeTo)
            ->setPagination($pagination)
            ->setIncludeFinalValueFee($includeFinalValueFee)
            ->setIncludeContainingOrder($includeContainingOrder)
            ->setSKUArray($sKUArray)
            ->setPlatform($platform)
            ->setNumberOfDays($numberOfDays)
            ->setInventoryTrackingMethod($inventoryTrackingMethod)
            ->setIncludeCodiceFiscale($includeCodiceFiscale);
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * Get SKUArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType|null
     */
    public function getSKUArray()
    {
        return $this->SKUArray;
    }
    /**
     * Set SKUArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setSKUArray(\macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray = null)
    {
        $this->SKUArray = $sKUArray;
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * Get InventoryTrackingMethod value
     * @return string|null
     */
    public function getInventoryTrackingMethod()
    {
        return $this->InventoryTrackingMethod;
    }
    /**
     * Set InventoryTrackingMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inventoryTrackingMethod
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setInventoryTrackingMethod($inventoryTrackingMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType::valueIsValid($inventoryTrackingMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $inventoryTrackingMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType::getValidValues())), __LINE__);
        }
        $this->InventoryTrackingMethod = $inventoryTrackingMethod;
        return $this;
    }
    /**
     * Get IncludeCodiceFiscale value
     * @return bool|null
     */
    public function getIncludeCodiceFiscale()
    {
        return $this->IncludeCodiceFiscale;
    }
    /**
     * Set IncludeCodiceFiscale value
     * @param bool $includeCodiceFiscale
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setIncludeCodiceFiscale($includeCodiceFiscale = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeCodiceFiscale) && !is_bool($includeCodiceFiscale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeCodiceFiscale)), __LINE__);
        }
        $this->IncludeCodiceFiscale = $includeCodiceFiscale;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
