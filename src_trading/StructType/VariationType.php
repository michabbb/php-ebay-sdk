<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <b>Variation</b> container, which provides full details on each item variation in a multiple-variation listing.
 * @subpackage Structs
 */
class VariationType extends AbstractStructBase
{
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: A SKU (stock keeping unit) is an identifier defined by a seller. It is only intended for the seller's use (not for buyers). Many sellers assign a SKU to an item of a specific type, size, and color. For the seller's convenience, eBay
     * preserves the SKU on the variation, and also on corresponding order line items. This enables you (as a seller) use the SKU to reconcile your eBay inventory with your own inventory system instead of using the variation specifics. It is a good idea to
     * track how many items of each type, size, and color are selling so that you can restock your shelves or update the variation quantity on eBay according to customer demand. (eBay does not use the SKU.)<br> <br> If specified, all SKU values must be
     * unique within the Variations node. That is, no two variations within the same listing can have the same SKU. <br> <br> If you set Item.InventoryTrackingMethod to true, the variation SKU values are required and they must be unique across all the
     * seller's active listings.<br> <br> <b>For GetItem and related calls:</b> Only returned if the seller specified a SKU for the variation. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different
     * contexts. For usage information and rules, see the fields that reference this type.
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The StartPrice
     * Meta informations extracted from the WSDL
     * - documentation: The fixed price for this item variation. For example, a "Blue, Large" variation price could be USD 10.00, and a "Black, Medium" variation price could be USD 5.00.<br> <br> Each variation requires its own price, and the prices can be
     * different for each variation. This enables sellers to provide discounts on certain variations without affecting the price of others. Required (and always returned) for listings with variations.<br> <br> You can revise a variation's price at any time
     * (even if it has purchases). When you modify a variation during revise or relist, you need to include both its StartPrice and Quantity.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $StartPrice;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the quantity of items in the specific variation that are available for purchase. If you set <b>Variation.Quantity</b> to <code>0</code> when you create, revise, or relist an item listing, the variation is dropped
     * from the listing. To prevent this, you can set <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>.
     * <br/><br/> For <b>GetItem</b> (and other related calls that retrieve the Item object), the <b>Variation.Quantity</b> value indicates the total number of items associated with the variation, including the quantity available and the quantity sold. To
     * calculate the quantity available for sale, subtract <b>SellingStatus.QuantitySold</b> from this value.<br> <br> <b>For RelistFixedPriceItem:</b> <ul> <li>For an item variation that had an available quantity greater than <code>0</code> when the
     * listing ended, the <b>Quantity</b> value of the item variation for the newly relisted item is set to the actual quantity available. For item variations, there is actually no <b>QuantityAvailable</b> field, but this value may be derived if you look at
     * the corresponding item variation in a <b>GetMyeBaySelling</b>) response and subtract the <b>Variation.QuantitySold</b> value from the <b>Variation.Quantity</b> value, which represents the original <b>Variation.Quantity</b> value at creation time of
     * the previous listing. </li> <li>For item variations with an available quantity of <code>0</code> when the listing ended, the relisted item will retain the <b>Variaton.Quantity</b> value that was passed in at creation time of the previous listing.
     * </li> </ul> So, if you are relisting an item that had one or more item variations with an available quantity of <code>0</code> when the listing ended, we strongly recommend that you pass in the correct available quantity through the corresponding
     * <b>Variation.Quantity</b> field of a relist call. Alternatively, you can update the correct quantity available by using a <b>ReviseInventoryStatus</b> call and passing in a <b>Quantity</b> value, while also making sure to pass in the correct
     * <b>SKU</b> value(s) to identify the correct item variation. A <b>ReviseInventoryStatus</b> call can be used to revise the quantity of up to four single item listings and/or item variations (from the same or different listings). <br> <br> <b>For
     * ReviseFixedPriceItem:</b> You can revise a variation's quantity at any time, even if it has purchases. However, unless you set the <a
     * href="http://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">OutOfStockControlPreference</a> boolean field of the <b>SetUserPreferences</b> call to <code>true</code>, at least one
     * variation must remain with a non-zero quantity in order for the listing to remain active. If you set the <b>OutOfStockControlPreference</b> field to <code>true</code>, a multiple-variation listing will remain active but hidden from search even if the
     * quantity of all variations in the listing is set to <code>0</code>. When you modify a variation during revise or relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>. If you revise the <b>Quantity</b> value for a variation after
     * items have already sold, specify the quantity available for sale. (eBay will automatically add the quantity sold to the value you specify.) If you set the quantity to <code>0</code> and the variation has no purchases, the variation may be dropped
     * from the listing. <br> <br> <b>For GetSellerTransactions:</b> See <b>Item.Quantity</b>instead.<br> <br> See the <a href="http://developer.ebay.com/Devzone/guides/ebayfeatures/Development/Variations-Updating.html">eBay Features Guide</a> for more
     * details about setting and modifying a variation's quantity. <br><br> <span class="tablenote"><b>Note:</b> The number in the <b>Variation.Quantity</b> field represents the current quantity of the item variation that is available using the "Ship to
     * home" fulfillment method. This number does not take into account any quantity of the item variation that is available through "local" fulfillment methods such as In-Store Pickup or Click and Collect. This is due to the fact that there is no current
     * implementation (or API field) where the seller informs eBay about the quantity of item variations available through each local fulfillment method. In the case where a listing is only offering the item variations through a local fulfillment method,
     * this value should default to <code>0</code>, and the <b>Item.IgnoreQuantity</b> will also be returned as <code>True</code>. </span> <br>
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The VariationSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: A list of name/value pairs that uniquely identify the variation within the listing. All variations must specify the same set of names, and each variation must provide a unique combination of values for those names. For example, if
     * the items vary by color and size, then every variation must specify Color and Size as names, and no two variations can specify the same combination of color and size values.<br> <br> When you revise a listing that includes variations, you can change
     * names in variation specifics by using ModifyNameList. You can also add, delete, or replace individual variations as needed to match your current inventory. Use the Variation.Delete field to delete a variation that has no sales (order line items). If
     * the variation has sales, then set the Quantity to 0.<br> <br> <b>For GetSellerEvents</b> To keep the GetSellerEvents response smaller, variation specifics are not returned if the variation has a SKU. If the variation has no SKU, then variation
     * specifics are returned instead. Optionally, you can pass IncludeVariationSpecifics as true in the request to force variation specifics to be returned, even when the SKU is returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
     */
    public $VariationSpecifics;
    /**
     * The UnitsAvailable
     * Meta informations extracted from the WSDL
     * - documentation: Quantity of items in the seller's inventory for this Selling Manager product. This is not the same as the quantity available in a listed item. Required when a Selling Manager product defines variations.
     * - minOccurs: 0
     * @var int
     */
    public $UnitsAvailable;
    /**
     * The UnitCost
     * Meta informations extracted from the WSDL
     * - documentation: Cost of the Selling Manager product that matches this variation.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $UnitCost;
    /**
     * The SellingStatus
     * Meta informations extracted from the WSDL
     * - documentation: Contains the variation's quantity sold. Always returned when variations are present.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingStatusType
     */
    public $SellingStatus;
    /**
     * The VariationTitle
     * Meta informations extracted from the WSDL
     * - documentation: The title of the variation. This is a concatenation of the listing title plus the values (no names) from the VariationSpecifics. For example, if the Title is "Polo Shirt" and the variation is for a medium pink shirt, the variation
     * title could be "Polo Shirt[Pink,M]. PayPal may also use this value to identify item variations(for buyers and sellers).
     * - minOccurs: 0
     * @var string
     */
    public $VariationTitle;
    /**
     * The VariationViewItemURL
     * Meta informations extracted from the WSDL
     * - documentation: URL for the variation on eBay. This links to eBay's View Item page, with the page configured to show details of the specified variation. The syntax of this URL is similar to Item.ViewItemURL (not optimized for natural search).
     * - minOccurs: 0
     * @var string
     */
    public $VariationViewItemURL;
    /**
     * The Delete
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Deletes the specified variation from the listing. In general, a listing with Item Variations must have at least one variation with a non-zero Quantity in order to remain active. Additional deletion rules depend on whether you are
     * revising or relisting.<br> <br> <b>For ReviseFixedPriceItem only</b>: This boolean field can now be used in a Revise call to delete a variation even if the variation still has quantity and/or has had one or more previous sales during the life of the
     * listing. Previously, if a variation had any purchases, you could not delete the variation, but only set its quantity to zero. <br> <br> To replace a varation, you can delete it and add the new or corrected one. However, you can't specify the same SKU
     * twice in the same request (because the intent would be ambiguous). So, either use a new SKU for the newer variation, or use the call twice (once to delete the variation, and once to add the new variation with the same SKU).<br> <br> <b>For
     * RelistFixedPriceItem only</b>: You can delete any variation, as long as the relisted listing includes at least 1 variation with a non-zero quantity. (That is, when you relist, you could delete all but one variation, or you could delete all existing
     * variations and add a new one.)
     * - minOccurs: 0
     * @var bool
     */
    public $Delete;
    /**
     * The SellingManagerProductInventoryStatus
     * Meta informations extracted from the WSDL
     * - documentation: Container for statistics about the Selling Manager product that is associated with this variation.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public $SellingManagerProductInventoryStatus;
    /**
     * The WatchCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of watches placed on this variation by eBay users.
     * - minOccurs: 0
     * @var int
     */
    public $WatchCount;
    /**
     * The PrivateNotes
     * Meta informations extracted from the WSDL
     * - documentation: A note a user makes on an item with variations in My eBay. <br> <br> For eBay.com, only GetMyeBaySelling (not GetItem) returns this field, and only if you pass IncludeNotes in the request. Only visible to the user who created the
     * note.<br> <br> Not supported as input in ReviseFixedPriceItem. Use SetUserNotes instead.<br> <br> In SoldList, notes for variations are only returned at the Item level, not the variation level.
     * - minOccurs: 0
     * @var string
     */
    public $PrivateNotes;
    /**
     * The DiscountPriceInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. For a multiple-variation listing,
     * the discount pricing information should be set at the variation level and not at the item level (e.g. <b>Item.DiscountPriceInfo</b>). STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada
     * (English and French), France, Italy, and Spain sites, while MAP is available only on the US site. <br><br> Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once
     * qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only. <br><br> As a seller listing Discount
     * Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public $DiscountPriceInfo;
    /**
     * The VariationProductListingDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to provide one or more product identifiers for a product variation within a multiple-variation, fixed-price listing. The same product identifier type(s) must be used for all product variations within the
     * listing. For instance, if one product variation uses ISBNs, all product variations must use ISBN values. <br> <br> <span class="tablenote"><b>Note:</b> Currently, the <b>EAN</b>, <b>ISBN</b>, or <b>UPC</b> fields are used to specify a Global Trade
     * Item Number (GTIN), and the <b>GetCategoryFeatures</b> call is used to see if particular product identifier types are supported/required. The <b>ProductReferenceID</b> field can only be used to specify an ePID for an eBay Catalog product that is part
     * of the Product-Based Shopping Experience mandate. For more information about PBSE, see the <a href="https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> page. </span> <br> <br> When you include the
     * <b>VariationProductListingDetails</b> container in a call, you must specify at least one GTIN or ePID (currently only available in Sandbox for PBSE catalog products). . <br> <br> <b>For ReviseItem and RelistItem only:</b> When you revise a listing,
     * if it ends within 12 hours, you cannot change the product identifier and you cannot remove existing product variation listing details data.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
     */
    public $VariationProductListingDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VariationType
     * @uses VariationType::setSKU()
     * @uses VariationType::setStartPrice()
     * @uses VariationType::setQuantity()
     * @uses VariationType::setVariationSpecifics()
     * @uses VariationType::setUnitsAvailable()
     * @uses VariationType::setUnitCost()
     * @uses VariationType::setSellingStatus()
     * @uses VariationType::setVariationTitle()
     * @uses VariationType::setVariationViewItemURL()
     * @uses VariationType::setDelete()
     * @uses VariationType::setSellingManagerProductInventoryStatus()
     * @uses VariationType::setWatchCount()
     * @uses VariationType::setPrivateNotes()
     * @uses VariationType::setDiscountPriceInfo()
     * @uses VariationType::setVariationProductListingDetails()
     * @uses VariationType::setAny()
     * @param string $sKU
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @param int $quantity
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @param int $unitsAvailable
     * @param \macropage\ebaysdk\trading\StructType\AmountType $unitCost
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @param string $variationTitle
     * @param string $variationViewItemURL
     * @param bool $delete
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @param int $watchCount
     * @param string $privateNotes
     * @param \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo
     * @param \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $variationProductListingDetails
     * @param \DOMDocument $any
     */
    public function __construct($sKU = null, \macropage\ebaysdk\trading\StructType\AmountType $startPrice = null, $quantity = null, \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null, $unitsAvailable = null, \macropage\ebaysdk\trading\StructType\AmountType $unitCost = null, \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null, $variationTitle = null, $variationViewItemURL = null, $delete = false, \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus = null, $watchCount = null, $privateNotes = null, \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo = null, \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $variationProductListingDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setSKU($sKU)
            ->setStartPrice($startPrice)
            ->setQuantity($quantity)
            ->setVariationSpecifics($variationSpecifics)
            ->setUnitsAvailable($unitsAvailable)
            ->setUnitCost($unitCost)
            ->setSellingStatus($sellingStatus)
            ->setVariationTitle($variationTitle)
            ->setVariationViewItemURL($variationViewItemURL)
            ->setDelete($delete)
            ->setSellingManagerProductInventoryStatus($sellingManagerProductInventoryStatus)
            ->setWatchCount($watchCount)
            ->setPrivateNotes($privateNotes)
            ->setDiscountPriceInfo($discountPriceInfo)
            ->setVariationProductListingDetails($variationProductListingDetails)
            ->setAny($any);
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        return $this;
    }
    /**
     * Get StartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getStartPrice()
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setStartPrice(\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null)
    {
        $this->StartPrice = $startPrice;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics()
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setVariationSpecifics(\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null)
    {
        $this->VariationSpecifics = $variationSpecifics;
        return $this;
    }
    /**
     * Get UnitsAvailable value
     * @return int|null
     */
    public function getUnitsAvailable()
    {
        return $this->UnitsAvailable;
    }
    /**
     * Set UnitsAvailable value
     * @param int $unitsAvailable
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setUnitsAvailable($unitsAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($unitsAvailable) && !is_numeric($unitsAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unitsAvailable)), __LINE__);
        }
        $this->UnitsAvailable = $unitsAvailable;
        return $this;
    }
    /**
     * Get UnitCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getUnitCost()
    {
        return $this->UnitCost;
    }
    /**
     * Set UnitCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $unitCost
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setUnitCost(\macropage\ebaysdk\trading\StructType\AmountType $unitCost = null)
    {
        $this->UnitCost = $unitCost;
        return $this;
    }
    /**
     * Get SellingStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingStatusType|null
     */
    public function getSellingStatus()
    {
        return $this->SellingStatus;
    }
    /**
     * Set SellingStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setSellingStatus(\macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null)
    {
        $this->SellingStatus = $sellingStatus;
        return $this;
    }
    /**
     * Get VariationTitle value
     * @return string|null
     */
    public function getVariationTitle()
    {
        return $this->VariationTitle;
    }
    /**
     * Set VariationTitle value
     * @param string $variationTitle
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setVariationTitle($variationTitle = null)
    {
        // validation for constraint: string
        if (!is_null($variationTitle) && !is_string($variationTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($variationTitle)), __LINE__);
        }
        $this->VariationTitle = $variationTitle;
        return $this;
    }
    /**
     * Get VariationViewItemURL value
     * @return string|null
     */
    public function getVariationViewItemURL()
    {
        return $this->VariationViewItemURL;
    }
    /**
     * Set VariationViewItemURL value
     * @param string $variationViewItemURL
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setVariationViewItemURL($variationViewItemURL = null)
    {
        // validation for constraint: string
        if (!is_null($variationViewItemURL) && !is_string($variationViewItemURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($variationViewItemURL)), __LINE__);
        }
        $this->VariationViewItemURL = $variationViewItemURL;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setDelete($delete = false)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get SellingManagerProductInventoryStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType|null
     */
    public function getSellingManagerProductInventoryStatus()
    {
        return $this->SellingManagerProductInventoryStatus;
    }
    /**
     * Set SellingManagerProductInventoryStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setSellingManagerProductInventoryStatus(\macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus = null)
    {
        $this->SellingManagerProductInventoryStatus = $sellingManagerProductInventoryStatus;
        return $this;
    }
    /**
     * Get WatchCount value
     * @return int|null
     */
    public function getWatchCount()
    {
        return $this->WatchCount;
    }
    /**
     * Set WatchCount value
     * @param int $watchCount
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setWatchCount($watchCount = null)
    {
        // validation for constraint: int
        if (!is_null($watchCount) && !is_numeric($watchCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($watchCount)), __LINE__);
        }
        $this->WatchCount = $watchCount;
        return $this;
    }
    /**
     * Get PrivateNotes value
     * @return string|null
     */
    public function getPrivateNotes()
    {
        return $this->PrivateNotes;
    }
    /**
     * Set PrivateNotes value
     * @param string $privateNotes
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setPrivateNotes($privateNotes = null)
    {
        // validation for constraint: string
        if (!is_null($privateNotes) && !is_string($privateNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($privateNotes)), __LINE__);
        }
        $this->PrivateNotes = $privateNotes;
        return $this;
    }
    /**
     * Get DiscountPriceInfo value
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType|null
     */
    public function getDiscountPriceInfo()
    {
        return $this->DiscountPriceInfo;
    }
    /**
     * Set DiscountPriceInfo value
     * @param \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setDiscountPriceInfo(\macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo = null)
    {
        $this->DiscountPriceInfo = $discountPriceInfo;
        return $this;
    }
    /**
     * Get VariationProductListingDetails value
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType|null
     */
    public function getVariationProductListingDetails()
    {
        return $this->VariationProductListingDetails;
    }
    /**
     * Set VariationProductListingDetails value
     * @param \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $variationProductListingDetails
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setVariationProductListingDetails(\macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $variationProductListingDetails = null)
    {
        $this->VariationProductListingDetails = $variationProductListingDetails;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\VariationType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VariationType
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
