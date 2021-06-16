<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>Variation</b> container, which provides full details on each item variation in a multiple-variation listing.
 * @subpackage Structs
 */
class VariationType extends AbstractStructBase
{
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: A SKU (stock keeping unit) is a seller-defined identifier. It is only intended for the seller's use (not for buyers). A SKU value is not required, but many large sellers like to add SKU value to their listings. If defined on a
     * listing, a SKU value can be used by sellers to reconcile their eBay inventory with your own inventory system, instead of using the <b>VariationSpecifics</b> identifying values. <br> <br> If specified, all SKU values must be unique within the
     * <b>Variations</b> node. That is, no two variations within the same listing can have the same SKU. <br> <br> If you include the <b>Item.InventoryTrackingMethod</b> field in an 'FixedPriceItem' call and set its value to <code>SKU</code>, the
     * <b>Variation.SKU</b> values become required for each variation..<br> <br> <b>For GetItem, GetOrders and other 'Get' calls:</b> Only returned if the seller specified a SKU for the variation. | Primitive type that represents a stock-keeping unit (SKU).
     * The usage of this string may vary in different contexts. For usage information and rules, see the fields that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * The StartPrice
     * Meta information extracted from the WSDL
     * - documentation: The fixed price for this item variation. For example, a "Blue, Large" variation price could be USD 10.00, and a "Black, Medium" variation price could be USD 5.00.<br> <br> Each variation requires this field, and the prices can be the
     * same for all variations, or be different for each variation. This enables sellers to provide discounts on certain variations without affecting the price of others. Required (and always returned) for listings with variations.<br> <br> You can revise a
     * variation's price at any time (even if it has purchases). When you modify a variation during revise or relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $StartPrice = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the quantity of the specific variation that are available for purchase. If you set <b>Variation.Quantity</b> to <code>0</code> when you create, revise, or relist an item listing, the variation is dropped from the
     * listing. To prevent this, you can set <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">SetUserPreferences.OutOfStockControlPreference</a> to <code>true</code>. <br/><br/>
     * For <b>GetItem</b> (and other related calls that retrieve the Item object), the <b>Variation.Quantity</b> value indicates the total quantity associated with the variation, including the quantity available and the quantity sold. To calculate the
     * quantity available for sale, subtract <b>SellingStatus.QuantitySold</b> from this value.<br> <br> <b>For RelistFixedPriceItem:</b> <ul> <li>For an item variation that had an available quantity greater than <code>0</code> when the listing ended, the
     * <b>Quantity</b> value of the item variation for the newly relisted item is set to the actual quantity available. For item variations, there is actually no <b>QuantityAvailable</b> field, but this value may be derived if you look at the corresponding
     * item variation in a <b>GetMyeBaySelling</b>) response and subtract the <b>Variation.QuantitySold</b> value from the <b>Variation.Quantity</b> value, which represents the original <b>Variation.Quantity</b> value at creation time of the previous
     * listing. </li> <li>For item variations with an available quantity of <code>0</code> when the listing ended, the relisted item will retain the <b>Variaton.Quantity</b> value that was passed in at creation time of the previous listing. </li> </ul> So,
     * if you are relisting an item that had one or more item variations with an available quantity of <code>0</code> when the listing ended, we strongly recommend that you pass in the correct available quantity through the corresponding
     * <b>Variation.Quantity</b> field of a relist call. Alternatively, you can update the correct quantity available by using a <b>ReviseInventoryStatus</b> call and passing in a <b>Quantity</b> value, while also making sure to pass in the correct
     * <b>SKU</b> value(s) to identify the correct item variation. A <b>ReviseInventoryStatus</b> call can be used to revise the quantity of up to four single item listings and/or item variations (from the same or different listings). <br> <br> <b>For
     * ReviseFixedPriceItem:</b> You can revise a variation's quantity at any time, even if it has purchases. However, unless you set the <a
     * href="http://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">OutOfStockControlPreference</a> boolean field of the <b>SetUserPreferences</b> call to <code>true</code>, at least one
     * variation must remain with a non-zero quantity in order for the listing to remain active. If you set the <b>OutOfStockControlPreference</b> field to <code>true</code>, a multiple-variation listing will remain active but hidden from search even if the
     * quantity of all variations in the listing is set to <code>0</code>. When you modify a variation during revise or relist, you need to include both its <b>StartPrice</b> and <b>Quantity</b>. If you revise the <b>Quantity</b> value for a variation after
     * items have already sold, specify the quantity available for sale. (eBay will automatically add the quantity sold to the value you specify.) If you set the quantity to <code>0</code> and the variation has no purchases, the variation may be dropped
     * from the listing. <br> <br> <b>For GetSellerTransactions:</b> See <b>Item.Quantity</b> instead.<br> <br> See the <a href="http://developer.ebay.com/Devzone/guides/features-guide/default.html#development/Variations-Updating.html">eBay Features
     * Guide</a> for more details about setting and modifying a variation's quantity. <br><br> <span class="tablenote"><b>Note:</b> The number in the <b>Variation.Quantity</b> field represents the current quantity of the item variation that is available
     * using the "Ship to home" fulfillment method. This number does not take into account any quantity of the item variation that is available through "local" fulfillment methods such as In-Store Pickup or Click and Collect. This is due to the fact that
     * there is no current implementation (or API field) where the seller informs eBay about the quantity of item variations available through each local fulfillment method. In the case where a listing is only offering the item variations through a local
     * fulfillment method, this value should default to <code>0</code>, and the <b>Item.IgnoreQuantity</b> will also be returned as <code>True</code>. </span> <br>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The VariationSpecifics
     * Meta information extracted from the WSDL
     * - documentation: A list of name/value pairs that uniquely identify the variation within the listing. All variations must specify the same set of Item Specific names, but each variation must provide a unique combination of values for those Item
     * Specific names. For example, if the items vary by color and size, then every variation must specify 'Color' and 'Size' as Item Specific names, but no two variations can specify the same combination of 'Color' and 'Size' values.<br> <br> When you
     * revise a listing that includes variations, you can change names of <b>Variationpecifics</b> by using the <b>Variations.ModifyNameList</b> container. You can also add, delete, or replace individual variations as needed to match your current inventory.
     * Use the <b>Variation.Delete</b> field to delete a variation that has no sales (order line items). If the variation has sales, then set the Quantity to 0.<br> <br> <b>For GetSellerEvents</b> To keep the <b>GetSellerEvents</b> response smaller,
     * <b>Variationpecifics</b> are not returned if the variation has a SKU. If the variation has no SKU, then <b>Variationpecifics</b> are returned instead. Optionally, you can pass <b>IncludeVariationSpecifics</b> as <code>true</code> in the request to
     * force <b>Variationpecifics</b> to be returned, even when the SKU is returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $VariationSpecifics = null;
    /**
     * The UnitsAvailable
     * Meta information extracted from the WSDL
     * - documentation: Quantity of items in the seller's inventory for this Selling Manager product. This is not the same as the quantity available in a listed item. Required when a Selling Manager product defines variations.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UnitsAvailable = null;
    /**
     * The SellingStatus
     * Meta information extracted from the WSDL
     * - documentation: Contains the variation's quantity sold. Always returned when variations are present.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingStatusType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingStatusType $SellingStatus = null;
    /**
     * The VariationTitle
     * Meta information extracted from the WSDL
     * - documentation: The title of the variation. This is a concatenation of the listing title plus the values (no names) from <b>Variationpecifics</b>. For example, if the Title is "Polo Shirt" and the variation is for a medium pink shirt, the variation
     * title could be "Polo Shirt[Pink,M]. <br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationTitle = null;
    /**
     * The VariationViewItemURL
     * Meta information extracted from the WSDL
     * - documentation: URL for the variation on eBay. This links to eBay's View Item page, with the page configured to show details of the specified variation. The syntax of this URL is similar to Item.ViewItemURL (not optimized for natural search).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationViewItemURL = null;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to <b>true</b>, the corresponding variation is deleted from the listing with a successful call. In general, a listing with variations must have at least one variation with a non-zero quantity in
     * order to remain active. Additional deletion rules depend on whether you are revising or relisting.<br> <br> <b>For ReviseFixedPriceItem only</b>: This boolean field can now be used in a Revise call to delete a variation even if the variation still
     * has quantity and/or has had one or more previous sales during the life of the listing. Previously, if a variation had any purchases, you could not delete the variation, but only set its quantity to zero. <br> <br> To replace a varation, you can
     * delete it and add the new or corrected one. However, you can't specify the same SKU twice in the same request (because the intent would be ambiguous). So, either use a new SKU for the newer variation, or use the call twice (once to delete the
     * variation, and once to add the new variation with the same SKU).<br> <br> <b>For RelistFixedPriceItem only</b>: You can delete any variation, as long as the relisted listing includes at least 1 variation with a non-zero quantity. (That is, when you
     * relist, you could delete all but one variation, or you could delete all existing variations and add a new one.)
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Delete = null;
    /**
     * The WatchCount
     * Meta information extracted from the WSDL
     * - documentation: The number of watches placed on this variation by eBay users.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $WatchCount = null;
    /**
     * The PrivateNotes
     * Meta information extracted from the WSDL
     * - documentation: A note a user makes on an item with variations in My eBay. <br> <br> For eBay.com, only GetMyeBaySelling (not GetItem) returns this field, and only if you pass IncludeNotes in the request. Only visible to the user who created the
     * note.<br> <br> Not supported as input in ReviseFixedPriceItem. Use SetUserNotes instead.<br> <br> In SoldList, notes for variations are only returned at the Item level, not the variation level.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrivateNotes = null;
    /**
     * The DiscountPriceInfo
     * Meta information extracted from the WSDL
     * - documentation: This container provides information for a single variation (within a multiple-variation listing) that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. For a multiple-variation listing,
     * the discount pricing information should be set at the variation level and not at the item level (e.g. <b>Item.DiscountPriceInfo</b>). STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada
     * (English and French), France, Italy, and Spain sites, while MAP is available only on the US site. <br><br> Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once
     * qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only. <br><br> As a seller listing Discount
     * Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $DiscountPriceInfo = null;
    /**
     * The VariationProductListingDetails
     * Meta information extracted from the WSDL
     * - documentation: This container is used to provide one or more product identifiers for a product variation within a multiple-variation, fixed-price listing. The same product identifier type(s) must be used for all product variations within the
     * listing. For instance, if one product variation uses ISBNs, all product variations must use ISBN values. <br> <br> <span class="tablenote"><b>Note:</b> Currently, the <b>EAN</b>, <b>ISBN</b>, or <b>UPC</b> fields are used to specify a Global Trade
     * Item Number (GTIN), and the <b>GetCategoryFeatures</b> call is used to see if particular product identifier types are supported/required. The <b>ProductReferenceID</b> field can only be used to specify an ePID for an eBay Catalog product that is part
     * of the Product-Based Shopping Experience mandate. For more information about PBSE, see the <a href="https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> page. </span> <br> When you include the
     * <b>VariationProductListingDetails</b> container in a call, you must specify at least one GTIN or ePID. If an ePID is provided, a matching eBay catalog product must exist for the value that is passed in. <br> <br> <b>For ReviseItem and RelistItem
     * only:</b> When you revise a listing, if it ends within 12 hours, you cannot change the product identifier and you cannot remove existing product variation listing details data.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $VariationProductListingDetails = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VariationType
     * @uses VariationType::setSKU()
     * @uses VariationType::setStartPrice()
     * @uses VariationType::setQuantity()
     * @uses VariationType::setVariationSpecifics()
     * @uses VariationType::setUnitsAvailable()
     * @uses VariationType::setSellingStatus()
     * @uses VariationType::setVariationTitle()
     * @uses VariationType::setVariationViewItemURL()
     * @uses VariationType::setDelete()
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
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @param string $variationTitle
     * @param string $variationViewItemURL
     * @param bool $delete
     * @param int $watchCount
     * @param string $privateNotes
     * @param \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo
     * @param \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $variationProductListingDetails
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $sKU = null, ?\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null, ?int $quantity = null, ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null, ?int $unitsAvailable = null, ?\macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null, ?string $variationTitle = null, ?string $variationViewItemURL = null, ?bool $delete = false, ?int $watchCount = null, ?string $privateNotes = null, ?\macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo = null, ?\macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $variationProductListingDetails = null, $any = null)
    {
        $this
            ->setSKU($sKU)
            ->setStartPrice($startPrice)
            ->setQuantity($quantity)
            ->setVariationSpecifics($variationSpecifics)
            ->setUnitsAvailable($unitsAvailable)
            ->setSellingStatus($sellingStatus)
            ->setVariationTitle($variationTitle)
            ->setVariationViewItemURL($variationViewItemURL)
            ->setDelete($delete)
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
    public function getSKU(): ?string
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        
        return $this;
    }
    /**
     * Get StartPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getStartPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setStartPrice(?\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null): self
    {
        $this->StartPrice = $startPrice;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics(): ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setVariationSpecifics(?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null): self
    {
        $this->VariationSpecifics = $variationSpecifics;
        
        return $this;
    }
    /**
     * Get UnitsAvailable value
     * @return int|null
     */
    public function getUnitsAvailable(): ?int
    {
        return $this->UnitsAvailable;
    }
    /**
     * Set UnitsAvailable value
     * @param int $unitsAvailable
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setUnitsAvailable(?int $unitsAvailable = null): self
    {
        // validation for constraint: int
        if (!is_null($unitsAvailable) && !(is_int($unitsAvailable) || ctype_digit($unitsAvailable))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unitsAvailable, true), gettype($unitsAvailable)), __LINE__);
        }
        $this->UnitsAvailable = $unitsAvailable;
        
        return $this;
    }
    /**
     * Get SellingStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingStatusType|null
     */
    public function getSellingStatus(): ?\macropage\ebaysdk\trading\StructType\SellingStatusType
    {
        return $this->SellingStatus;
    }
    /**
     * Set SellingStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setSellingStatus(?\macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null): self
    {
        $this->SellingStatus = $sellingStatus;
        
        return $this;
    }
    /**
     * Get VariationTitle value
     * @return string|null
     */
    public function getVariationTitle(): ?string
    {
        return $this->VariationTitle;
    }
    /**
     * Set VariationTitle value
     * @param string $variationTitle
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setVariationTitle(?string $variationTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($variationTitle) && !is_string($variationTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variationTitle, true), gettype($variationTitle)), __LINE__);
        }
        $this->VariationTitle = $variationTitle;
        
        return $this;
    }
    /**
     * Get VariationViewItemURL value
     * @return string|null
     */
    public function getVariationViewItemURL(): ?string
    {
        return $this->VariationViewItemURL;
    }
    /**
     * Set VariationViewItemURL value
     * @param string $variationViewItemURL
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setVariationViewItemURL(?string $variationViewItemURL = null): self
    {
        // validation for constraint: string
        if (!is_null($variationViewItemURL) && !is_string($variationViewItemURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variationViewItemURL, true), gettype($variationViewItemURL)), __LINE__);
        }
        $this->VariationViewItemURL = $variationViewItemURL;
        
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete(): ?bool
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setDelete(?bool $delete = false): self
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        
        return $this;
    }
    /**
     * Get WatchCount value
     * @return int|null
     */
    public function getWatchCount(): ?int
    {
        return $this->WatchCount;
    }
    /**
     * Set WatchCount value
     * @param int $watchCount
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setWatchCount(?int $watchCount = null): self
    {
        // validation for constraint: int
        if (!is_null($watchCount) && !(is_int($watchCount) || ctype_digit($watchCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($watchCount, true), gettype($watchCount)), __LINE__);
        }
        $this->WatchCount = $watchCount;
        
        return $this;
    }
    /**
     * Get PrivateNotes value
     * @return string|null
     */
    public function getPrivateNotes(): ?string
    {
        return $this->PrivateNotes;
    }
    /**
     * Set PrivateNotes value
     * @param string $privateNotes
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setPrivateNotes(?string $privateNotes = null): self
    {
        // validation for constraint: string
        if (!is_null($privateNotes) && !is_string($privateNotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($privateNotes, true), gettype($privateNotes)), __LINE__);
        }
        $this->PrivateNotes = $privateNotes;
        
        return $this;
    }
    /**
     * Get DiscountPriceInfo value
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType|null
     */
    public function getDiscountPriceInfo(): ?\macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
    {
        return $this->DiscountPriceInfo;
    }
    /**
     * Set DiscountPriceInfo value
     * @param \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setDiscountPriceInfo(?\macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo = null): self
    {
        $this->DiscountPriceInfo = $discountPriceInfo;
        
        return $this;
    }
    /**
     * Get VariationProductListingDetails value
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType|null
     */
    public function getVariationProductListingDetails(): ?\macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
    {
        return $this->VariationProductListingDetails;
    }
    /**
     * Set VariationProductListingDetails value
     * @param \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $variationProductListingDetails
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setVariationProductListingDetails(?\macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType $variationProductListingDetails = null): self
    {
        $this->VariationProductListingDetails = $variationProductListingDetails;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\VariationType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
