<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for the data of a single item that matches the search criteria. Finding API calls return an object of this type, filled with the item's data.
 * @subpackage Structs
 */
class SearchItem extends AbstractStructBase
{
    /**
     * The itemId
     * Meta informations extracted from the WSDL
     * - documentation: The ID that uniquely identifies the item listing. eBay generates this ID when an item is listed. ID values are unique across all eBay sites.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $itemId;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - documentation: Name of the item as it appears in the listing title, or in search and browse results.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $title;
    /**
     * The globalId
     * Meta informations extracted from the WSDL
     * - documentation: The identifier for the site on which the item is listed. Returns a Global ID, which is a unique identifier that specifies the combination of the site, language, and territory. In other eBay APIs (such as the Shopping API), this value
     * is know as the site ID.
     * - minOccurs: 0
     * @var string
     */
    public $globalId;
    /**
     * The subtitle
     * Meta informations extracted from the WSDL
     * - documentation: Subtitle of the item. Only returned if the seller included a subtitle for the listing.
     * - minOccurs: 0
     * @var string
     */
    public $subtitle;
    /**
     * The primaryCategory
     * Meta informations extracted from the WSDL
     * - documentation: Details about the first (or only) category in which the item is listed. <br><br> <span class="tablenote"><strong>Note:</strong> Items can be listed in more than a single category.</span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Category
     */
    public $primaryCategory;
    /**
     * The secondaryCategory
     * Meta informations extracted from the WSDL
     * - documentation: Details about the second category in which the item is listed. This element is not returned if the seller did not specify a secondary category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Category
     */
    public $secondaryCategory;
    /**
     * The galleryURL
     * Meta informations extracted from the WSDL
     * - documentation: URL for the Gallery thumbnail image. Returned only if the seller uploaded images for the item or the item was listed using a product identifier.
     * - minOccurs: 0
     * @var string
     */
    public $galleryURL;
    /**
     * The galleryInfoContainer
     * Meta informations extracted from the WSDL
     * - documentation: Contains three URLs for item thumbnail images in standard sizes. Not returned if the item has no images. That is, if the item was not listed using a product identifier and the seller has not uploaded images, the container will not be
     * returned, even when the <b>outputSelector</b> is set to GalleryInfo.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\GalleryInfoContainer
     */
    public $galleryInfoContainer;
    /**
     * The viewItemURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to view this specific listing on eBay. <br><br> The returned URL is optimized to support natural search. That is, the URL is designed to make items on eBay easier to find via popular internet search engines. The URL includes
     * the item title along with other optimizations. <br><br> If you enabled affiliate tracking in the call, viewItemURL contains a string that includes affiliate tracking information. <br><br> <span class="tablenote"><strong>Note:</strong> eBay URLs
     * returned in fields, such as <b class="con">viewItemURL</b>, are subject to syntax and other changes without notice. To avoid problems in your application when eBay alters the URL format, we advise you to avoid parsing eBay URLs programmatically. We
     * strive to ensure that other fields in the response contain all the information that is encoded in the URL, and more. </span>
     * - minOccurs: 0
     * @var string
     */
    public $viewItemURL;
    /**
     * The charityId
     * Meta informations extracted from the WSDL
     * - documentation: A unique identification number assigned by eBay to a registered non-profit charity organization.
     * - minOccurs: 0
     * @var string
     */
    public $charityId;
    /**
     * The productId
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the eBay catalog product with which the item was listed. An eBay catalog product consists of pre-filled Item Specifics, additional descriptive information, plus a stock photo (if available). These product
     * details are used to pre-fill item information, which is used to describe the item and can also help surface the item in searches. <br><br> eBay supports the following types of product ID types: ISBN, UPC, EAN, and ReferenceID (ePID, also known as an
     * eBay Product Reference ID). ReferenceID values are returned when available. A UPC, ISBN, or EAN product identifier will be returned only when a ReferenceID is not available. <br><br> This productId value can be used as input with findItemsByProduct
     * to retrieve items that were listed with the specified eBay catalog product. <br><br> This field is only returned when a product was used to list the item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ProductId
     */
    public $productId;
    /**
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the payment method (or methods) the seller will accept for the item (such as PayPal). <br><br> <span class="tablenote"><strong>Note:</strong> If the seller accepts only PayPal, the buyer can still pay with a credit card.
     * PayPal supports major credit cards. </span> Payment methods are not applicable to eBay Real Estate advertisement listings or other Classified Ad listing formats.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $paymentMethod;
    /**
     * The autoPay
     * Meta informations extracted from the WSDL
     * - documentation: If true, the seller requires immediate payment for the item. If false (or not specified), immediate payment is not requested. Buyers must have a PayPal account to purchase items that require immediate payment. <br><br> A seller can
     * choose to require immediate payment for Fixed Price and Buy It Now listings, including eBay Stores Inventory listings. If a Buy It Now item ends as an auction (that is, if the Buy It Now option is removed due to bids being placed on the listing), the
     * immediate payment requirement does not apply. <br><br> <span class="tablenote"><strong>Note:</strong> The value of the AutoPay flag indicates the seller's stated preference only. It does not indicate whether the listing is still a candidate for
     * purchase via immediate payment. For example, if a listing receives bids and no longer qualifies for immediate payment, the value of the AutoPay flag does not change. </span> <br> Only applicable to items listed on PayPal-enabled sites and in
     * categories that support immediate payment.
     * - minOccurs: 0
     * @var bool
     */
    public $autoPay;
    /**
     * The postalCode
     * Meta informations extracted from the WSDL
     * - documentation: The postal code where the listed item is located. This field is returned only if a postal code has been specified by the seller. eBay proximity and local search behavior can use the combination of <b>buyerPostalCode</b> and
     * <b>postalCode</b> values.
     * - minOccurs: 0
     * @var string
     */
    public $postalCode;
    /**
     * The location
     * Meta informations extracted from the WSDL
     * - documentation: Physical location of the item, as specified by the seller. This gives a general indication from where the item will be shipped (or delivered).
     * - minOccurs: 0
     * @var string
     */
    public $location;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - documentation: Two-letter ISO 3166 country code to indicate the country where the item is located (e.g., "US" for the United States or "GB" for the United Kingdom).
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The storeInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about the eBay store in which the item is listed. Only returned if the item is listed in a store and StoreInfo is specified in the <b>outputSelector</b> field in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Storefront
     */
    public $storeInfo;
    /**
     * The sellerInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about the item's seller. Only returned if SellerInfo is specified in the <b>outputSelector</b> field in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\SellerInfo
     */
    public $sellerInfo;
    /**
     * The shippingInfo
     * Meta informations extracted from the WSDL
     * - documentation: Container for data about a listing's shipping details.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ShippingInfo
     */
    public $shippingInfo;
    /**
     * The sellingStatus
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the item's selling status with regards to eBay's processing workflow.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\SellingStatus
     */
    public $sellingStatus;
    /**
     * The listingInfo
     * Meta informations extracted from the WSDL
     * - documentation: The format type of the listing, such as online auction, fixed price, or advertisement.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ListingInfo
     */
    public $listingInfo;
    /**
     * The returnsAccepted
     * Meta informations extracted from the WSDL
     * - documentation: This is set to true if the seller accepts return of the item.
     * - minOccurs: 0
     * @var bool
     */
    public $returnsAccepted;
    /**
     * The galleryPlusPictureURL
     * Meta informations extracted from the WSDL
     * - documentation: URL for the Gallery Plus image. The size of Gallery Plus images (up to 500 pixels on the longest side) is bigger than the size of standard gallery images. In site search results, you can view the Gallery Plus image by hovering over
     * or clicking the Enlarge link or magifying glass icon. This field is only returned when the seller has opted for the Gallery Plus option for the given item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $galleryPlusPictureURL;
    /**
     * The compatibility
     * Meta informations extracted from the WSDL
     * - documentation: This field returns terms from the keywords in the request that match values in one of the item's compatible applications (vehicles). If the keywords match more than one compatible application for an item, the field returns "Two or
     * more of your vehicles" to indicate multiple matches. <br><br> For example, keyword queries that contain vehicle details, such as make and model (e.g., Honda Accord), in addition to keywords for the part or accessory, will search through structured
     * parts compatibility information for matching listings. If an item has a 2017 Honda Accord (any trim or engine) specified as a compatible application, and the item matches the part or accessory terms in the query, this field will return the matching
     * terms from the query (i.e., Honda Accord). <br><br> Parts compatibility is an eBay feature that uses structured data to associate compatible assemblies with parts and accessories listed on eBay. For example, parts compatibility enables sellers to
     * specify accurately and comprehensively the vehicles on which a side mirror or a rim fit. Parts compatibility improves search relevancy and frees up item titles and descriptions for more useful descriptions of the part.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $compatibility;
    /**
     * The distance
     * Meta informations extracted from the WSDL
     * - documentation: The distance that the item is from the buyer, calculated using <b>buyerPostalCode</b>. The unit for distance varies by site, and is either miles or kilometers. If the country whose site you are searching uses kilometers to measure
     * distance (for example, India/EBAY-IN), the unit is kilometers. If the site is either the US or UK, the distance unit is miles. <br><br> This value is only returned for distance-based searches. You must specify a <b>buyerPostalCode</b> and either sort
     * by Distance, or use a combination of the MaxDistance LocalSearch <b>itemFilter</b>s.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Distance
     */
    public $distance;
    /**
     * The condition
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about the item's condition. Only returned when the seller listed the item with an item condition.<br> <br> Different categories can support different condition choices. If a listing is in two categories, the
     * seller uses condition details that are supported in the primary category. Thus, even if two nearly identical items are found in the same category search, they could support different condition details if they have different primary categories. For
     * example, suppose Seller A lists a concert T-shirt in clothing, and also in music accessories as the secondary category. Seller B lists an identical shirt in music accessories only. If you search against the music accessories category, you will find
     * both items, but seller A's shirt may have condition details that are slightly different from seller B's shirt, because the listings have different primary categories.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Condition
     */
    public $condition;
    /**
     * The isMultiVariationListing
     * Meta informations extracted from the WSDL
     * - documentation: Returns true if the item is a multi-variation listing.
     * - minOccurs: 0
     * @var bool
     */
    public $isMultiVariationListing;
    /**
     * The discountPriceInfo
     * Meta informations extracted from the WSDL
     * - documentation: Returns information on the item if it is listed as a Strikethrough Price (STP) or Minimum Advertised Price (MAP) item by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\DiscountPriceInfo
     */
    public $discountPriceInfo;
    /**
     * The pictureURLSuperSize
     * Meta informations extracted from the WSDL
     * - documentation: URL to a picture of the item that is 800x800 pixels in size.
     * - minOccurs: 0
     * @var string
     */
    public $pictureURLSuperSize;
    /**
     * The pictureURLLarge
     * Meta informations extracted from the WSDL
     * - documentation: URL to a picture of the item that is 400x400 pixels in size.
     * - minOccurs: 0
     * @var string
     */
    public $pictureURLLarge;
    /**
     * The unitPrice
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices.
     * eBay uses the <strong> UnitInfo</strong> data and the item's listed price to calculate and display the per-unit price on eBay EU sites. <br/><br/> <span class="tablenote"> <strong>Note:</strong> This information is currently required only for EU
     * business sellers, and only for listings with a Buy It Now option. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\UnitPriceInfo
     */
    public $unitPrice;
    /**
     * The attribute
     * Meta informations extracted from the WSDL
     * - documentation: Contains a name/value pair defining an item attribute. Multiple <strong>attribute</strong> containers can be returned for an item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ItemAttribute[]
     */
    public $attribute;
    /**
     * The topRatedListing
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item listing is a <b>Top-Rated Plus</b> listing. A <b>Top-Rated Plus</b> listing must meet the following requirements: <ul> <li>14-day (or longer) return policy with Money Back option</li> <li>1-day Handling
     * Time or better</li> <li>Listed by a <b>Top-Rated Seller</b></li> </ul> This field is returned only for the US (EBAY-US) site.
     * - minOccurs: 0
     * @var bool
     */
    public $topRatedListing;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The eekStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the energy efficiency rating of the item. Energy efficiency ratings apply to products listed by commercial vendors in electronics categories only. Rating values are of the form A+++, A++, A+, A, B, C, D, E, F, or G. This
     * field is only returned if the seller has specified the energy efficiency rating in the item specifics. <br><br> Applicable to the eBay Germany site (EBAY-DE) only.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $eekStatus;
    /**
     * The eBayPlusEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item is an ebayPlus item. This field is returned for the following sites only: DE (EBAY-DE)
     * - minOccurs: 0
     * @var bool
     */
    public $eBayPlusEnabled;
    /**
     * Constructor method for SearchItem
     * @uses SearchItem::setItemId()
     * @uses SearchItem::setTitle()
     * @uses SearchItem::setGlobalId()
     * @uses SearchItem::setSubtitle()
     * @uses SearchItem::setPrimaryCategory()
     * @uses SearchItem::setSecondaryCategory()
     * @uses SearchItem::setGalleryURL()
     * @uses SearchItem::setGalleryInfoContainer()
     * @uses SearchItem::setViewItemURL()
     * @uses SearchItem::setCharityId()
     * @uses SearchItem::setProductId()
     * @uses SearchItem::setPaymentMethod()
     * @uses SearchItem::setAutoPay()
     * @uses SearchItem::setPostalCode()
     * @uses SearchItem::setLocation()
     * @uses SearchItem::setCountry()
     * @uses SearchItem::setStoreInfo()
     * @uses SearchItem::setSellerInfo()
     * @uses SearchItem::setShippingInfo()
     * @uses SearchItem::setSellingStatus()
     * @uses SearchItem::setListingInfo()
     * @uses SearchItem::setReturnsAccepted()
     * @uses SearchItem::setGalleryPlusPictureURL()
     * @uses SearchItem::setCompatibility()
     * @uses SearchItem::setDistance()
     * @uses SearchItem::setCondition()
     * @uses SearchItem::setIsMultiVariationListing()
     * @uses SearchItem::setDiscountPriceInfo()
     * @uses SearchItem::setPictureURLSuperSize()
     * @uses SearchItem::setPictureURLLarge()
     * @uses SearchItem::setUnitPrice()
     * @uses SearchItem::setAttribute()
     * @uses SearchItem::setTopRatedListing()
     * @uses SearchItem::setDelimiter()
     * @uses SearchItem::setAny()
     * @uses SearchItem::setEekStatus()
     * @uses SearchItem::setEBayPlusEnabled()
     * @param string $itemId
     * @param string $title
     * @param string $globalId
     * @param string $subtitle
     * @param \macropage\ebaysdk\finding\StructType\Category $primaryCategory
     * @param \macropage\ebaysdk\finding\StructType\Category $secondaryCategory
     * @param string $galleryURL
     * @param \macropage\ebaysdk\finding\StructType\GalleryInfoContainer $galleryInfoContainer
     * @param string $viewItemURL
     * @param string $charityId
     * @param \macropage\ebaysdk\finding\StructType\ProductId $productId
     * @param string[] $paymentMethod
     * @param bool $autoPay
     * @param string $postalCode
     * @param string $location
     * @param string $country
     * @param \macropage\ebaysdk\finding\StructType\Storefront $storeInfo
     * @param \macropage\ebaysdk\finding\StructType\SellerInfo $sellerInfo
     * @param \macropage\ebaysdk\finding\StructType\ShippingInfo $shippingInfo
     * @param \macropage\ebaysdk\finding\StructType\SellingStatus $sellingStatus
     * @param \macropage\ebaysdk\finding\StructType\ListingInfo $listingInfo
     * @param bool $returnsAccepted
     * @param string[] $galleryPlusPictureURL
     * @param string $compatibility
     * @param \macropage\ebaysdk\finding\StructType\Distance $distance
     * @param \macropage\ebaysdk\finding\StructType\Condition $condition
     * @param bool $isMultiVariationListing
     * @param \macropage\ebaysdk\finding\StructType\DiscountPriceInfo $discountPriceInfo
     * @param string $pictureURLSuperSize
     * @param string $pictureURLLarge
     * @param \macropage\ebaysdk\finding\StructType\UnitPriceInfo $unitPrice
     * @param \macropage\ebaysdk\finding\StructType\ItemAttribute[] $attribute
     * @param bool $topRatedListing
     * @param string $delimiter
     * @param \DOMDocument $any
     * @param string[] $eekStatus
     * @param bool $eBayPlusEnabled
     */
    public function __construct($itemId = null, $title = null, $globalId = null, $subtitle = null, \macropage\ebaysdk\finding\StructType\Category $primaryCategory = null, \macropage\ebaysdk\finding\StructType\Category $secondaryCategory = null, $galleryURL = null, \macropage\ebaysdk\finding\StructType\GalleryInfoContainer $galleryInfoContainer = null, $viewItemURL = null, $charityId = null, \macropage\ebaysdk\finding\StructType\ProductId $productId = null, array $paymentMethod = array(), $autoPay = null, $postalCode = null, $location = null, $country = null, \macropage\ebaysdk\finding\StructType\Storefront $storeInfo = null, \macropage\ebaysdk\finding\StructType\SellerInfo $sellerInfo = null, \macropage\ebaysdk\finding\StructType\ShippingInfo $shippingInfo = null, \macropage\ebaysdk\finding\StructType\SellingStatus $sellingStatus = null, \macropage\ebaysdk\finding\StructType\ListingInfo $listingInfo = null, $returnsAccepted = null, array $galleryPlusPictureURL = array(), $compatibility = null, \macropage\ebaysdk\finding\StructType\Distance $distance = null, \macropage\ebaysdk\finding\StructType\Condition $condition = null, $isMultiVariationListing = null, \macropage\ebaysdk\finding\StructType\DiscountPriceInfo $discountPriceInfo = null, $pictureURLSuperSize = null, $pictureURLLarge = null, \macropage\ebaysdk\finding\StructType\UnitPriceInfo $unitPrice = null, array $attribute = array(), $topRatedListing = null, $delimiter = null, \DOMDocument $any = null, array $eekStatus = array(), $eBayPlusEnabled = null)
    {
        $this
            ->setItemId($itemId)
            ->setTitle($title)
            ->setGlobalId($globalId)
            ->setSubtitle($subtitle)
            ->setPrimaryCategory($primaryCategory)
            ->setSecondaryCategory($secondaryCategory)
            ->setGalleryURL($galleryURL)
            ->setGalleryInfoContainer($galleryInfoContainer)
            ->setViewItemURL($viewItemURL)
            ->setCharityId($charityId)
            ->setProductId($productId)
            ->setPaymentMethod($paymentMethod)
            ->setAutoPay($autoPay)
            ->setPostalCode($postalCode)
            ->setLocation($location)
            ->setCountry($country)
            ->setStoreInfo($storeInfo)
            ->setSellerInfo($sellerInfo)
            ->setShippingInfo($shippingInfo)
            ->setSellingStatus($sellingStatus)
            ->setListingInfo($listingInfo)
            ->setReturnsAccepted($returnsAccepted)
            ->setGalleryPlusPictureURL($galleryPlusPictureURL)
            ->setCompatibility($compatibility)
            ->setDistance($distance)
            ->setCondition($condition)
            ->setIsMultiVariationListing($isMultiVariationListing)
            ->setDiscountPriceInfo($discountPriceInfo)
            ->setPictureURLSuperSize($pictureURLSuperSize)
            ->setPictureURLLarge($pictureURLLarge)
            ->setUnitPrice($unitPrice)
            ->setAttribute($attribute)
            ->setTopRatedListing($topRatedListing)
            ->setDelimiter($delimiter)
            ->setAny($any)
            ->setEekStatus($eekStatus)
            ->setEBayPlusEnabled($eBayPlusEnabled);
    }
    /**
     * Get itemId value
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param string $itemId
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Get title value
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Get globalId value
     * @return string|null
     */
    public function getGlobalId()
    {
        return $this->globalId;
    }
    /**
     * Set globalId value
     * @param string $globalId
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setGlobalId($globalId = null)
    {
        // validation for constraint: string
        if (!is_null($globalId) && !is_string($globalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($globalId)), __LINE__);
        }
        $this->globalId = $globalId;
        return $this;
    }
    /**
     * Get subtitle value
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }
    /**
     * Set subtitle value
     * @param string $subtitle
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setSubtitle($subtitle = null)
    {
        // validation for constraint: string
        if (!is_null($subtitle) && !is_string($subtitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subtitle)), __LINE__);
        }
        $this->subtitle = $subtitle;
        return $this;
    }
    /**
     * Get primaryCategory value
     * @return \macropage\ebaysdk\finding\StructType\Category|null
     */
    public function getPrimaryCategory()
    {
        return $this->primaryCategory;
    }
    /**
     * Set primaryCategory value
     * @param \macropage\ebaysdk\finding\StructType\Category $primaryCategory
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setPrimaryCategory(\macropage\ebaysdk\finding\StructType\Category $primaryCategory = null)
    {
        $this->primaryCategory = $primaryCategory;
        return $this;
    }
    /**
     * Get secondaryCategory value
     * @return \macropage\ebaysdk\finding\StructType\Category|null
     */
    public function getSecondaryCategory()
    {
        return $this->secondaryCategory;
    }
    /**
     * Set secondaryCategory value
     * @param \macropage\ebaysdk\finding\StructType\Category $secondaryCategory
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setSecondaryCategory(\macropage\ebaysdk\finding\StructType\Category $secondaryCategory = null)
    {
        $this->secondaryCategory = $secondaryCategory;
        return $this;
    }
    /**
     * Get galleryURL value
     * @return string|null
     */
    public function getGalleryURL()
    {
        return $this->galleryURL;
    }
    /**
     * Set galleryURL value
     * @param string $galleryURL
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setGalleryURL($galleryURL = null)
    {
        // validation for constraint: string
        if (!is_null($galleryURL) && !is_string($galleryURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($galleryURL)), __LINE__);
        }
        $this->galleryURL = $galleryURL;
        return $this;
    }
    /**
     * Get galleryInfoContainer value
     * @return \macropage\ebaysdk\finding\StructType\GalleryInfoContainer|null
     */
    public function getGalleryInfoContainer()
    {
        return $this->galleryInfoContainer;
    }
    /**
     * Set galleryInfoContainer value
     * @param \macropage\ebaysdk\finding\StructType\GalleryInfoContainer $galleryInfoContainer
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setGalleryInfoContainer(\macropage\ebaysdk\finding\StructType\GalleryInfoContainer $galleryInfoContainer = null)
    {
        $this->galleryInfoContainer = $galleryInfoContainer;
        return $this;
    }
    /**
     * Get viewItemURL value
     * @return string|null
     */
    public function getViewItemURL()
    {
        return $this->viewItemURL;
    }
    /**
     * Set viewItemURL value
     * @param string $viewItemURL
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setViewItemURL($viewItemURL = null)
    {
        // validation for constraint: string
        if (!is_null($viewItemURL) && !is_string($viewItemURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewItemURL)), __LINE__);
        }
        $this->viewItemURL = $viewItemURL;
        return $this;
    }
    /**
     * Get charityId value
     * @return string|null
     */
    public function getCharityId()
    {
        return $this->charityId;
    }
    /**
     * Set charityId value
     * @param string $charityId
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setCharityId($charityId = null)
    {
        // validation for constraint: string
        if (!is_null($charityId) && !is_string($charityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charityId)), __LINE__);
        }
        $this->charityId = $charityId;
        return $this;
    }
    /**
     * Get productId value
     * @return \macropage\ebaysdk\finding\StructType\ProductId|null
     */
    public function getProductId()
    {
        return $this->productId;
    }
    /**
     * Set productId value
     * @param \macropage\ebaysdk\finding\StructType\ProductId $productId
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setProductId(\macropage\ebaysdk\finding\StructType\ProductId $productId = null)
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Get paymentMethod value
     * @return string[]|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethod
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setPaymentMethod(array $paymentMethod = array())
    {
        foreach ($paymentMethod as $searchItemPaymentMethodItem) {
            // validation for constraint: itemType
            if (!is_string($searchItemPaymentMethodItem)) {
                throw new \InvalidArgumentException(sprintf('The paymentMethod property can only contain items of token, "%s" given', is_object($searchItemPaymentMethodItem) ? get_class($searchItemPaymentMethodItem) : gettype($searchItemPaymentMethodItem)), __LINE__);
            }
        }
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Add item to paymentMethod value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function addToPaymentMethod($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The paymentMethod property can only contain items of token, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->paymentMethod[] = $item;
        return $this;
    }
    /**
     * Get autoPay value
     * @return bool|null
     */
    public function getAutoPay()
    {
        return $this->autoPay;
    }
    /**
     * Set autoPay value
     * @param bool $autoPay
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setAutoPay($autoPay = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoPay) && !is_bool($autoPay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoPay)), __LINE__);
        }
        $this->autoPay = $autoPay;
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->location = $location;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get storeInfo value
     * @return \macropage\ebaysdk\finding\StructType\Storefront|null
     */
    public function getStoreInfo()
    {
        return $this->storeInfo;
    }
    /**
     * Set storeInfo value
     * @param \macropage\ebaysdk\finding\StructType\Storefront $storeInfo
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setStoreInfo(\macropage\ebaysdk\finding\StructType\Storefront $storeInfo = null)
    {
        $this->storeInfo = $storeInfo;
        return $this;
    }
    /**
     * Get sellerInfo value
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo|null
     */
    public function getSellerInfo()
    {
        return $this->sellerInfo;
    }
    /**
     * Set sellerInfo value
     * @param \macropage\ebaysdk\finding\StructType\SellerInfo $sellerInfo
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setSellerInfo(\macropage\ebaysdk\finding\StructType\SellerInfo $sellerInfo = null)
    {
        $this->sellerInfo = $sellerInfo;
        return $this;
    }
    /**
     * Get shippingInfo value
     * @return \macropage\ebaysdk\finding\StructType\ShippingInfo|null
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }
    /**
     * Set shippingInfo value
     * @param \macropage\ebaysdk\finding\StructType\ShippingInfo $shippingInfo
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setShippingInfo(\macropage\ebaysdk\finding\StructType\ShippingInfo $shippingInfo = null)
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }
    /**
     * Get sellingStatus value
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus|null
     */
    public function getSellingStatus()
    {
        return $this->sellingStatus;
    }
    /**
     * Set sellingStatus value
     * @param \macropage\ebaysdk\finding\StructType\SellingStatus $sellingStatus
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setSellingStatus(\macropage\ebaysdk\finding\StructType\SellingStatus $sellingStatus = null)
    {
        $this->sellingStatus = $sellingStatus;
        return $this;
    }
    /**
     * Get listingInfo value
     * @return \macropage\ebaysdk\finding\StructType\ListingInfo|null
     */
    public function getListingInfo()
    {
        return $this->listingInfo;
    }
    /**
     * Set listingInfo value
     * @param \macropage\ebaysdk\finding\StructType\ListingInfo $listingInfo
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setListingInfo(\macropage\ebaysdk\finding\StructType\ListingInfo $listingInfo = null)
    {
        $this->listingInfo = $listingInfo;
        return $this;
    }
    /**
     * Get returnsAccepted value
     * @return bool|null
     */
    public function getReturnsAccepted()
    {
        return $this->returnsAccepted;
    }
    /**
     * Set returnsAccepted value
     * @param bool $returnsAccepted
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setReturnsAccepted($returnsAccepted = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnsAccepted) && !is_bool($returnsAccepted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnsAccepted)), __LINE__);
        }
        $this->returnsAccepted = $returnsAccepted;
        return $this;
    }
    /**
     * Get galleryPlusPictureURL value
     * @return string[]|null
     */
    public function getGalleryPlusPictureURL()
    {
        return $this->galleryPlusPictureURL;
    }
    /**
     * Set galleryPlusPictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $galleryPlusPictureURL
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setGalleryPlusPictureURL(array $galleryPlusPictureURL = array())
    {
        foreach ($galleryPlusPictureURL as $searchItemGalleryPlusPictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($searchItemGalleryPlusPictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The galleryPlusPictureURL property can only contain items of anyURI, "%s" given', is_object($searchItemGalleryPlusPictureURLItem) ? get_class($searchItemGalleryPlusPictureURLItem) : gettype($searchItemGalleryPlusPictureURLItem)), __LINE__);
            }
        }
        $this->galleryPlusPictureURL = $galleryPlusPictureURL;
        return $this;
    }
    /**
     * Add item to galleryPlusPictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function addToGalleryPlusPictureURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The galleryPlusPictureURL property can only contain items of anyURI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->galleryPlusPictureURL[] = $item;
        return $this;
    }
    /**
     * Get compatibility value
     * @return string|null
     */
    public function getCompatibility()
    {
        return $this->compatibility;
    }
    /**
     * Set compatibility value
     * @param string $compatibility
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setCompatibility($compatibility = null)
    {
        // validation for constraint: string
        if (!is_null($compatibility) && !is_string($compatibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compatibility)), __LINE__);
        }
        $this->compatibility = $compatibility;
        return $this;
    }
    /**
     * Get distance value
     * @return \macropage\ebaysdk\finding\StructType\Distance|null
     */
    public function getDistance()
    {
        return $this->distance;
    }
    /**
     * Set distance value
     * @param \macropage\ebaysdk\finding\StructType\Distance $distance
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setDistance(\macropage\ebaysdk\finding\StructType\Distance $distance = null)
    {
        $this->distance = $distance;
        return $this;
    }
    /**
     * Get condition value
     * @return \macropage\ebaysdk\finding\StructType\Condition|null
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /**
     * Set condition value
     * @param \macropage\ebaysdk\finding\StructType\Condition $condition
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setCondition(\macropage\ebaysdk\finding\StructType\Condition $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * Get isMultiVariationListing value
     * @return bool|null
     */
    public function getIsMultiVariationListing()
    {
        return $this->isMultiVariationListing;
    }
    /**
     * Set isMultiVariationListing value
     * @param bool $isMultiVariationListing
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setIsMultiVariationListing($isMultiVariationListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMultiVariationListing) && !is_bool($isMultiVariationListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMultiVariationListing)), __LINE__);
        }
        $this->isMultiVariationListing = $isMultiVariationListing;
        return $this;
    }
    /**
     * Get discountPriceInfo value
     * @return \macropage\ebaysdk\finding\StructType\DiscountPriceInfo|null
     */
    public function getDiscountPriceInfo()
    {
        return $this->discountPriceInfo;
    }
    /**
     * Set discountPriceInfo value
     * @param \macropage\ebaysdk\finding\StructType\DiscountPriceInfo $discountPriceInfo
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setDiscountPriceInfo(\macropage\ebaysdk\finding\StructType\DiscountPriceInfo $discountPriceInfo = null)
    {
        $this->discountPriceInfo = $discountPriceInfo;
        return $this;
    }
    /**
     * Get pictureURLSuperSize value
     * @return string|null
     */
    public function getPictureURLSuperSize()
    {
        return $this->pictureURLSuperSize;
    }
    /**
     * Set pictureURLSuperSize value
     * @param string $pictureURLSuperSize
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setPictureURLSuperSize($pictureURLSuperSize = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURLSuperSize) && !is_string($pictureURLSuperSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureURLSuperSize)), __LINE__);
        }
        $this->pictureURLSuperSize = $pictureURLSuperSize;
        return $this;
    }
    /**
     * Get pictureURLLarge value
     * @return string|null
     */
    public function getPictureURLLarge()
    {
        return $this->pictureURLLarge;
    }
    /**
     * Set pictureURLLarge value
     * @param string $pictureURLLarge
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setPictureURLLarge($pictureURLLarge = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURLLarge) && !is_string($pictureURLLarge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureURLLarge)), __LINE__);
        }
        $this->pictureURLLarge = $pictureURLLarge;
        return $this;
    }
    /**
     * Get unitPrice value
     * @return \macropage\ebaysdk\finding\StructType\UnitPriceInfo|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }
    /**
     * Set unitPrice value
     * @param \macropage\ebaysdk\finding\StructType\UnitPriceInfo $unitPrice
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setUnitPrice(\macropage\ebaysdk\finding\StructType\UnitPriceInfo $unitPrice = null)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * Get attribute value
     * @return \macropage\ebaysdk\finding\StructType\ItemAttribute[]|null
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
    /**
     * Set attribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemAttribute[] $attribute
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $searchItemAttributeItem) {
            // validation for constraint: itemType
            if (!$searchItemAttributeItem instanceof \macropage\ebaysdk\finding\StructType\ItemAttribute) {
                throw new \InvalidArgumentException(sprintf('The attribute property can only contain items of \macropage\ebaysdk\finding\StructType\ItemAttribute, "%s" given', is_object($searchItemAttributeItem) ? get_class($searchItemAttributeItem) : gettype($searchItemAttributeItem)), __LINE__);
            }
        }
        $this->attribute = $attribute;
        return $this;
    }
    /**
     * Add item to attribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ItemAttribute $item
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function addToAttribute(\macropage\ebaysdk\finding\StructType\ItemAttribute $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\ItemAttribute) {
            throw new \InvalidArgumentException(sprintf('The attribute property can only contain items of \macropage\ebaysdk\finding\StructType\ItemAttribute, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->attribute[] = $item;
        return $this;
    }
    /**
     * Get topRatedListing value
     * @return bool|null
     */
    public function getTopRatedListing()
    {
        return $this->topRatedListing;
    }
    /**
     * Set topRatedListing value
     * @param bool $topRatedListing
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setTopRatedListing($topRatedListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($topRatedListing) && !is_bool($topRatedListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($topRatedListing)), __LINE__);
        }
        $this->topRatedListing = $topRatedListing;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\SearchItem::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get eekStatus value
     * @return string[]|null
     */
    public function getEekStatus()
    {
        return $this->eekStatus;
    }
    /**
     * Set eekStatus value
     * @throws \InvalidArgumentException
     * @param string[] $eekStatus
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setEekStatus(array $eekStatus = array())
    {
        foreach ($eekStatus as $searchItemEekStatusItem) {
            // validation for constraint: itemType
            if (!is_string($searchItemEekStatusItem)) {
                throw new \InvalidArgumentException(sprintf('The eekStatus property can only contain items of string, "%s" given', is_object($searchItemEekStatusItem) ? get_class($searchItemEekStatusItem) : gettype($searchItemEekStatusItem)), __LINE__);
            }
        }
        $this->eekStatus = $eekStatus;
        return $this;
    }
    /**
     * Add item to eekStatus value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function addToEekStatus($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The eekStatus property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->eekStatus[] = $item;
        return $this;
    }
    /**
     * Get eBayPlusEnabled value
     * @return bool|null
     */
    public function getEBayPlusEnabled()
    {
        return $this->eBayPlusEnabled;
    }
    /**
     * Set eBayPlusEnabled value
     * @param bool $eBayPlusEnabled
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
     */
    public function setEBayPlusEnabled($eBayPlusEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayPlusEnabled) && !is_bool($eBayPlusEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayPlusEnabled)), __LINE__);
        }
        $this->eBayPlusEnabled = $eBayPlusEnabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\SearchItem
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
