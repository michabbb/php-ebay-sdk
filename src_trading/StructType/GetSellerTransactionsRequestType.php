<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerTransactionsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a seller's order line item information. To retrieve order line items for another seller, the <b>GetItemTransactions</b>) call should be used. This call cannot retrieve sales older than 90 days old. <br><br> If one or more
 * <b>SKU</b> values or the date range filters (<b>ModTimeFrom</b>/<b>ModTimeTo</b> or <b>NumberOfDays</b>) are not used, the <b>GetItemTransactions</b>) call will retrieve order line items created (or modified) within the last 30 days.
 * @subpackage Structs
 */
class GetSellerTransactionsRequestType extends AbstractRequestType
{
    /**
     * The ModTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields are used to specify a date range for retrieving order line items associated with the seller. The <b>ModTimeFrom</b> field is the starting date range. All of the seller's order line
     * items that were created (or last modified) within this date range are returned in the output. The maximum date range that may be specified is 30 days. This value cannot be set back more than 90 days in the past, as this call cannot retrieve sales
     * older than 90 days. This field is not applicable if the <b>NumberOfDays</b> date filter is used. <br><br> If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModTimeFrom = null;
    /**
     * The ModTimeTo
     * Meta information extracted from the WSDL
     * - documentation: The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields are used to specify a date range for retrieving order line items associated with the seller. The <b>ModTimeTo</b> field is the ending date range. All of the seller's order line items
     * that were created (or last modified) within this date range are returned in the output. The maximum date range that may be specified is 30 days. <br/><br/> If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the
     * <b>ModTimeTo</b> value defaults to the present time or to 30 days past the <b>ModTimeFrom</b> value (if <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not applicable if the <b>NumberOfDays</b> date filter is used. <br><br>
     * If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModTimeTo = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: If many order line items are available to retrieve, you may need to call <b>GetSellerTransactions</b> multiple times to retrieve all the data. Each result set is returned as a page of order line items. Use the <b>Pagination</b>
     * filters to control the maximum number of order line items to retrieve per page (i.e., per call), and the page number to retrieve.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * The IncludeFinalValueFee
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The
     * Final Value Fee is assessed right after the creation of an order line item. <br> <br> <span class="tablenote"><b>Note:</b> The calculation of the Final Value Fee is changing for managed payments sellers, so the value returned in the
     * <b>FinalValueFee</b> fields for each order line item in the response should only be considered as estimated values. The <b>getTransactions</b> method of the <b>Finances API</b> can be used to get accurate Final Value Fee values. <br><br> See the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees for managed payments sellers</a> help page for more information about how Final Value Fees are changing for managed payments sellers.
     * </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeFinalValueFee = null;
    /**
     * The IncludeContainingOrder
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user wants to view order-level details, including the unique identifier of the order and the status of the order. The order-level details will be shown in the
     * <b>ContainingOrder</b> container in the response. <br/>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeContainingOrder = null;
    /**
     * The SKUArray
     * Meta information extracted from the WSDL
     * - documentation: This container is used to search for order line items generated from one or more product SKU values. The response will only include order line items for the seller's product(s) that are represented by the specified SKU value(s). <br>
     * <br> If a user wants to retrieve order line items based on SKUs, the <b>InventoryTrackingMethod</b> must be set to <code>SKU</code>. The <b>InventoryTrackingMethod</b> value can be set when the seller lists the item through an
     * <b>AddFixedPriceItem</b> call, or it can be set by including the <b>InventoryTrackingMethod</b> field in a <b>GetSellerTransactions</b> call and setting its value to <code>SKU</code>. <br> <br> <span class="tablenote"><b>Note: </b> SKU values must be
     * defined for products in listings for this container to be applicable. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SKUArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\SKUArrayType $SKUArray = null;
    /**
     * The Platform
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field should no longer be used since its sole purpose was to allow the seller to filter between eBay orders and Half.com orders, and the Half.com site no longer exists. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Platform = null;
    /**
     * The NumberOfDays
     * Meta information extracted from the WSDL
     * - documentation: This field is used to specify how many days (24-hour periods) back in the past you wish to retrieve order line items. All order line items created (or last modified) within this period are retrieved. This value can be set between 1
     * (day) and 30 (days), and defaults to 30 (days) if omitted from the call. <br/><br/> If the <b>NumberOfDays</b> filter is used, <b>ModTimeFrom</b> and <b>ModTimeTo</b> date range filters are ignored (if included in the same request). <br/>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumberOfDays = null;
    /**
     * The InventoryTrackingMethod
     * Meta information extracted from the WSDL
     * - documentation: This filter is used if the seller wishes to set/change the inventory tracking method. When creating a listing with the <b>AddFixedPriceItem</b> call (or relisting with <b>RelistFixedPriceItem</b> call), sellers can decide whether to
     * track their inventory by Item ID (generated by eBay at listing time) or by seller-defined SKU value. <br><br> This field is needed (and its value must be set to <code>SKU</code>) if the seller wishes to retrieve order line items based on specified
     * SKU values (specified through <b>SKUArray</b> container) and the current inventory tracking method is set to Item ID. <br><br> A seller can use a <b>GetItem</b> call for a listing (and look for the <b>Item.InventoryTrackingMethod</b> in the response)
     * to see which inventory tracking method is used for the listing/product.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InventoryTrackingMethod = null;
    /**
     * The IncludeCodiceFiscale
     * Meta information extracted from the WSDL
     * - documentation: If this field is included in the call request and set to <code>true</code>, taxpayer identification information for the buyer is returned under the <b>BuyerTaxIdentifier</b> container. <br><br> Codice Fiscale is only applicable to
     * buyers on the Italy and Spain sites. It is required that buyers on the Italy site provide their Codice Fiscale ID before buying an item, and sellers on the Spain site have the option of requiring buyers on the Spain site to provide their taxpayer ID.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeCodiceFiscale = null;
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
    public function __construct(?string $modTimeFrom = null, ?string $modTimeTo = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, ?bool $includeFinalValueFee = null, ?bool $includeContainingOrder = null, ?\macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray = null, ?string $platform = null, ?int $numberOfDays = null, ?string $inventoryTrackingMethod = null, ?bool $includeCodiceFiscale = null)
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
    public function getModTimeFrom(): ?string
    {
        return $this->ModTimeFrom;
    }
    /**
     * Set ModTimeFrom value
     * @param string $modTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * Get IncludeContainingOrder value
     * @return bool|null
     */
    public function getIncludeContainingOrder(): ?bool
    {
        return $this->IncludeContainingOrder;
    }
    /**
     * Set IncludeContainingOrder value
     * @param bool $includeContainingOrder
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setIncludeContainingOrder(?bool $includeContainingOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeContainingOrder) && !is_bool($includeContainingOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeContainingOrder, true), gettype($includeContainingOrder)), __LINE__);
        }
        $this->IncludeContainingOrder = $includeContainingOrder;
        
        return $this;
    }
    /**
     * Get SKUArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SKUArrayType|null
     */
    public function getSKUArray(): ?\macropage\ebaysdk\trading\ArrayType\SKUArrayType
    {
        return $this->SKUArray;
    }
    /**
     * Set SKUArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setSKUArray(?\macropage\ebaysdk\trading\ArrayType\SKUArrayType $sKUArray = null): self
    {
        $this->SKUArray = $sKUArray;
        
        return $this;
    }
    /**
     * Get Platform value
     * @return string|null
     */
    public function getPlatform(): ?string
    {
        return $this->Platform;
    }
    /**
     * Set Platform value
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $platform
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setPlatform(?string $platform = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::valueIsValid($platform)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType', is_array($platform) ? implode(', ', $platform) : var_export($platform, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->Platform = $platform;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
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
     * Get InventoryTrackingMethod value
     * @return string|null
     */
    public function getInventoryTrackingMethod(): ?string
    {
        return $this->InventoryTrackingMethod;
    }
    /**
     * Set InventoryTrackingMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $inventoryTrackingMethod
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setInventoryTrackingMethod(?string $inventoryTrackingMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType::valueIsValid($inventoryTrackingMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType', is_array($inventoryTrackingMethod) ? implode(', ', $inventoryTrackingMethod) : var_export($inventoryTrackingMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\InventoryTrackingMethodCodeType::getValidValues())), __LINE__);
        }
        $this->InventoryTrackingMethod = $inventoryTrackingMethod;
        
        return $this;
    }
    /**
     * Get IncludeCodiceFiscale value
     * @return bool|null
     */
    public function getIncludeCodiceFiscale(): ?bool
    {
        return $this->IncludeCodiceFiscale;
    }
    /**
     * Set IncludeCodiceFiscale value
     * @param bool $includeCodiceFiscale
     * @return \macropage\ebaysdk\trading\StructType\GetSellerTransactionsRequestType
     */
    public function setIncludeCodiceFiscale(?bool $includeCodiceFiscale = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeCodiceFiscale) && !is_bool($includeCodiceFiscale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeCodiceFiscale, true), gettype($includeCodiceFiscale)), __LINE__);
        }
        $this->IncludeCodiceFiscale = $includeCodiceFiscale;
        
        return $this;
    }
}
