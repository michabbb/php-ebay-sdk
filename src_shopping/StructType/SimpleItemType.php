<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Complex type that is used to express the details of an eBay listing.
 * @subpackage Structs
 */
class SimpleItemType extends AbstractStructBase
{
    /**
     * The BestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field indicates whether the seller will accept a Best Offer for the item. The Best Offer feature allows a buyer to propose a price that is lower than the fixed price or lower than the current bid price on an auction
     * listing. A buyer should consider their Best Offer as a binding offer, and if the seller accepts the offer, that buyer is expected to purchase the item (and is actually charged immediately if the listing is set up for immediate payment. <br/><br/>
     * <span class="tablenote"><b>Note: </b> For auction listings, either the Best Offer feature or the Buy It Now feature can be enabled on the listing, but not both features. Once a qualifying bid is made on an auction listing, both the Best Offer feature
     * or the Buy It Now feature cease being an option to interested buyers. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferEnabled;
    /**
     * The BuyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if a seller enabled an auction listing with the Buy It Now feature. Sellers have the option of enabling the Buy It Now feature on auction listings. The price in this field is the price that an interested
     * buyer has to pay if that buyer wishes to bypass the auction procedure, and purchase the item immediately. The price in the field reflects the currency used in the eBay site's country. If an interested international buyer wants to view the Buy It Now
     * price in their country's currency, that buyer should view the <b>ConvertedBuyItNowPrice</b> field instead. <br /> <br /> Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers. Note
     * that it is possible that the <b>BuyItNowPrice</b> field may still get returned even after the Buy It Now feature is disabled, but the <b>BuyItNowAvailable</b> field should stop getting returned, since that field is only returned when
     * <code>true</code>. <br> <br /> To see the fixed price for a fixed-price or classified ad listing, or the starting/current bid price for an auction listing, see the <b>CurrentPrice</b> or <b>ConvertedCurrentPrice</b> fields instead.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $BuyItNowPrice;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: The seller's description of the listing. This field is only returned if the <b>IncludeSelector</b> field is included in the call request, and its value is set to either <code>TextDescription</code> or <code>Description</code>. If the
     * <code>Description</code> value is used, the full description is returned, with all HTML, XML, or CSS markup used in the listing (if any) by the seller. To only view the actual text of the listing description (no markup tags), the
     * <code>TextDescription</code> value shall be used instead. <br> <br> For product-based listings that are using the Product Description defined in the associated eBay catalog product, this field will either not be returned, or it will be returned as an
     * empty element.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing. This will be the same <b>ItemID</b> value that is passed into the call request.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The BuyItNowAvailable
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if the Buy It Now feature is enabled and available on an active auction listing. This field is only returned if <code>true</code>. With the Buy It Now feature, interested buyers have the option of
     * bypassing the auction procedure, and purchasing the item immediately at the price shown in the <b>BuyItNowPrice</b> field (or in the <b>ConvertedBuyItNowPrice</b> field for international buyers. <br /> <br /> Once a qualifying bid is made on an
     * auction listing, the Buy It Now feature ceases being an option to interested buyers, and the <b>BuyItNowAvailable</b> field will no longer be returned for the active auction listing.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyItNowAvailable;
    /**
     * The ConvertedBuyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if a seller enabled an auction listing with the Buy It Now feature. Sellers have the option of enabling the Buy It Now feature on auction listings. The price in this field is the price that an interested
     * buyer has to pay if that buyer wishes to bypass the auction procedure, and purchase the item immediately. The price in the field reflects the currency used in the buyer's country. This value and the <b>BuyItNowPrice</b> will be the same for domestic
     * buyers (for example, a US buyer purchasing an item on the US site). <br /> <br /> Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers. Note that it is possible that the
     * <b>ConvertedBuyItNowPrice</b> field may still get returned even after the Buy It Now feature is disabled, but the <b>BuyItNowAvailable</b> field should stop getting returned, since that field is only returned when <code>true</code>. <br /> <br /> To
     * see the fixed price for a fixed-price or classified ad listing, or the starting/current bid price for an auction listing, see the <b>ConvertedCurrentPrice</b> or <b>CurrentPrice</b> fields instead.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ConvertedBuyItNowPrice;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: For active listings, this timestamp indicates the date and time when the listing is scheduled to end, and for recently ended listings, this timestamp indicates the date and time when the listing actually ended.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the listing started.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The ViewItemURLForNaturalSearch
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the URL to the listing's View Item page on the eBay marketplace.
     * - minOccurs: 0
     * @var string
     */
    public $ViewItemURLForNaturalSearch;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value in this field indicates the format of the listing, such as auction, fixed-price, or classified ad format. See the <a href="types/ListingTypeCodeType.html">ListingTypeCodeType</a> definition to view the supported
     * enumeration values.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: The text string in this field provides the physical location of the item. Generally, this text will show the city and state/province of the item's location, but it may vary, and sometimes only a city will appear, or sometimes
     * acronymns will be used, and other times the full city and state will be spelled out. This gives the buyer a general indication of where the item will be shipped from, and if calculated shipping is used, shipping charges may be higher the further away
     * that the buyer resides from the shipping location.
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The PaymentMethods
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the item. <br> <br> <span class="tablenote"><b>Note:</b> At this time, if the seller is opted in to the new eBay Managed Payments
     * program, the available payment methods (which are controlled by eBay and not the seller) may not be returned, but those payment methods will be exposed on the listing's View Item page. For classified ad listings, the available payment methods may
     * appear in the response, but be aware that the exchange of money for a purchase happens off of eBay's platform. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentMethods;
    /**
     * The GalleryURL
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the URL to the thumbnail-size image of the listing's Gallery picture. The 'Gallery Picture' is the picture that displays by default when a user first visits a listing's View Item page. <br> <br> eBay listing images
     * must be one of the following image formats: JPEG, BMP, TIF, or GIF. <br> <br> This field is generally always returned as long as the seller is using eBay's picture server (also known as EPS) to host the listing's images.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryURL;
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the URL to a full-size version of one image associated with the eBay listing. A <b>PictureURL</b> field is returned for each image in the eBay listing. At least one <b>PictureURL</b> field is always returned since
     * every eBay listing must have at least one picture. <br> <br> Many eBay categories support up to 12 pictures, and motor vehicle categories support up to 24 pictures.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: This string value is the postal code (or zip code) of the item's physical location. Knowing the location gives the buyer a general indication of where the item will be shipped from, and if calculated shipping is used, shipping
     * charges may be higher the further away that the buyer resides from the shipping location.
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The PrimaryCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing's primay category. This field is always returned. Some listings are shown in an additional secondary category, and if this is the case, the unique identifier of the secondary category is
     * shown in the <b>SecondaryCategoryID</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryCategoryID;
    /**
     * The PrimaryCategoryName
     * Meta informations extracted from the WSDL
     * - documentation: This string field shows the full category path (using category names) to the primary listing category, starting with the L1 category and ending with the name of the primary listing category. This is a fully qualified category
     * breadcrumb (e.g., Cell Phones & Accessories:Cell Phones & Smartphones).
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryCategoryName;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: The quantity of the item available for purchase when the seller created, revised, or relisted the item. An auction listing always has a <strong>Quantity</strong> value of <code>1</code>, but a fixed-price listing can have multiple
     * quantity of an item. <br> <br> In a multiple-quantity, fixed-price listing, the user must also look at the <strong>QuantitySold</strong> field, and if the value of this field is an integer value greater than '0', that integer value should be
     * subtracted from the value in the <strong>Quantity</strong> field. So, if the <strong>Quantity</strong> field shows a value of '7', and the <strong>QuantitySold</strong> field shows a value of '3', the quantity available is actually '4' (7 - 3 = 4).
     * <br /> <br /> <span class="tablenote"><strong>Note:</strong> The <strong>Quantity</strong> field is always returned except in the case of a multiple-variation listing, and the user sets the <strong>IncludeSelector</strong> filter to
     * <code>Variations</code>. In this particular case, the (listing-level) <strong>Quantity</strong> field is not returned, and instead, the user will look at the <strong>Variation.Quantity</strong> and
     * <strong>Variation.SellingStatus.QuantitySold</strong> fields to get the quantity available for each item variation in the listing. If the user retrieves a multiple-variation listing, but does not set the <strong>IncludeSelector</strong> filter to
     * <code>Variations</code>, the listing-level <strong>Quantity</strong> and <strong>QuantitySold</strong> fields are returned, and these fields' values will be the cumulative values of all item variations in the listing. </span> <br /> <span
     * class="tablenote"><strong>Note:</strong> As mentioned earlier, an auction listing can only have a quantity of '1', but a lot-based auction listing can have multiple identical/similar items sold as one unit for one price. For example, instead of
     * listing 10 light bulbs for US 2.00 each, they might list 10 light bulbs for USD 20.00 (where you have to buy all 10). For lot-based listings (which are also supported by the fixed-price format), the number of identical/similar items in the 'lot' is
     * shown in the <strong>LotSize</strong> field. The seller is also expected to summarize all items in the lot in the <strong>Description</strong> field. </span>
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The Seller
     * Meta informations extracted from the WSDL
     * - documentation: This container provides a few details about the listing's seller, including the seller's eBay user ID, Feedback Score, and Positive Feedback Percentage. This container is only returned if <strong>IncludeSelector</strong> is included
     * in the request and set to <code>Details</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public $Seller;
    /**
     * The BidCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the number of bids that have been placed on an auction item. This field is only applicable to auction listings, but it is always returned for all listings, and its value will be '0' if bids are not
     * applicable to the listing.
     * - minOccurs: 0
     * @var int
     */
    public $BidCount;
    /**
     * The ConvertedCurrentPrice
     * Meta informations extracted from the WSDL
     * - documentation: In a fixed-price or classified ad listing, this price is the current price of the item, shown in the currency of the user's country. In an active auction listing, this field's value reflects the current bid price for the auction
     * item, so any submitted bids must be above this value. If the Buy It Now feature is available for an auction item (look for <b>BuyItNowAvailable</b> field), the user will want to look at the <b>ConvertedBuyItNowPrice</b> field instead if that user is
     * interested in skipping the auction process and buying that item immediately. <br /> <br /> <span class="tablenote"><strong>Note:</strong> If the user retrieves a multiple-variation listing, and the <strong>IncludeSelector</strong> filter is set to
     * <code>Variations</code>, the <strong>ConvertedCurrentPrice</strong> field is still returned, but its value will reflect the lowest-priced item variation. So, if the multiple-variation listing has item variations priced from 7.99 to 12.99, the
     * <strong>ConvertedCurrentPrice</strong> field's value will show '7.99'. If the price of all item variations are the same, the <strong>ConvertedCurrentPrice</strong> field value will be accurate, but it is recommended that the user scan down to
     * individual <strong>Variation.StartPrice</strong> fields to get the accurate price for all item variations. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ConvertedCurrentPrice;
    /**
     * The CurrentPrice
     * Meta informations extracted from the WSDL
     * - documentation: In a fixed-price or classified ad listing, this price is the current price of the item, shown in the currency of the listing site's country. In an active auction listing, this field's value reflects the current bid price for the
     * auction item, so any submitted bids must be above this value. If the Buy It Now feature is available for an auction item (look for <b>BuyItNowAvailable</b> field), the user will want to look at the <b>ConvertedBuyItNowPrice</b> (or
     * <b>ConvertedBuyItNowPrice</b>) field instead if that user is interested in skipping the auction process and buying that item immediately. <br /> <br /> This field is only returned if the <b>IncludeSelector</b> field is included and set to
     * <code>Details</code>. Alternatively, the user can view the <b>ConvertedCurrentPrice</b> field, as this field shows the price in the currency of the user's country, and it is always returned. <br /> <br /> <span
     * class="tablenote"><strong>Note:</strong> If the user retrieves a multiple-variation listing, and the <strong>IncludeSelector</strong> filter is set to <code>Variations</code>, the <b>CurrentPrice</b> is not returned, but the
     * <strong>ConvertedCurrentPrice</strong> field is returned, but its value will reflect the lowest-priced item variation. So, if the multiple-variation listing has item variations priced from 7.99 to 12.99, the <strong>ConvertedCurrentPrice</strong>
     * field's value will show '7.99'. If the price of all item variations are the same, the <strong>ConvertedCurrentPrice</strong> field value will be accurate, but it is recommended that the user scan down to individual
     * <strong>Variation.StartPrice</strong> fields to get the accurate price for all item variations. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $CurrentPrice;
    /**
     * The HighBidder
     * Meta informations extracted from the WSDL
     * - documentation: This container provides a few details about the current high bidder for an active auction listing, or the winning bidder for a completed auction listing. This container is only returned for auction listings with at least one bid, and
     * only if the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>. The high bidder details include the bidder's eBay user ID and Feedback Score. For the <strong>GetItemStatus</strong> call, only the eBay
     * user ID is returned. <br> <br> <span class="tablenote"><strong>Note:</strong> The eBay user ID and the Feedback data will actually be obfuscated to all users except for the owner (seller) of the listing, so essentially, the
     * <strong>HighBidder</strong> container only has value to the seller of the listing. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleUserType
     */
    public $HighBidder;
    /**
     * The ListingStatus
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the current status of the listing. The three different listing states are discussed below.
     * - minOccurs: 0
     * @var string
     */
    public $ListingStatus;
    /**
     * The QuantitySold
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the quantity of items sold for the listing. If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, this field is always returned even if its value is
     * '0'. <br> <br> If the <strong>QuantitySold</strong> value is greater than '0', this value should be subtracted from the value in the <strong>Quantity</strong> field to get the accurate quantity that is available for purchase. <br> <br> <span
     * class="tablenote"><strong>Note:</strong> If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, but the retrieved listing is a multiple-variation listing, the <strong>Quantity</strong> and
     * <strong>QuantitySold</strong> field values will reflect the quantity and quantity sold of all item variations in the listing. If a user wanted quantity available and quantity sold information on individual item variations, that user would set the
     * <strong>IncludeSelector</strong> filter to <code>Variations</code> instead, and the user will look at the <strong>Variation.Quantity</strong> and <strong>Variation.SellingStatus.QuantitySold</strong> fields to get the quantity available for each item
     * variation in the listing. </span>
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The ReserveMet
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field indicates if the current/highest bid price has matched or exceeded the price set as the Reserve Price by the seller. A Reserve Price is the lowest price at which the seller is willing to sell the item through an
     * auction. If the highest bid does not meet or exceed the Reserve Price, the auction listing will end without a sale (winning bidder) when the scheduled end time is reached. <br> <br> The Reserve Price must be higher than the starting bid price, but
     * lower than the Buy It Now price (if one is set). This field is only applicable to auction listings, and only returned for auction listings if the seller has set a Reserve Price.
     * - minOccurs: 0
     * @var bool
     */
    public $ReserveMet;
    /**
     * The ShipToLocations
     * Meta informations extracted from the WSDL
     * - documentation: A <strong>ShipToLocations</strong> field is returned for each domestic or international region that the seller is willing to ship the item. At least one <strong>ShipToLocations</strong> field should be returned for every listing.
     * 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocations</strong> and
     * <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API. <br> <br> 'Ship-to' locations range from continents and other large geographical regions, such as <code>Africa</code>, <code>Asia</code>,
     * <code>Caribbean</code>, or <code>MiddleEast</code>, all the way down to the state/province level and even cities within those state/provinces. A user will be able to see the international and domestic shipping regions that can be set by looking at
     * the <strong>Shipping rate tables</strong> UI in My eBay. The Trading API's <strong>GeteBayDetails</strong> can also be used to view available shipping locations. <br> <br> If a US seller only ships to domestic locations, the only
     * <strong>ShipToLocations</strong> value that should be returned is <code>US</code>. If a US seller is willing to ship to any location in the world, the only <strong>ShipToLocations</strong> value that should be returned is <code>Worldwide</code> <br>
     * <br> Countries are represented by the two-digit codes defined in the ISO 3166 standard, or these codes can also be found in the <a href="types/CountryCodeType.html">CountryCodeType</a> definition.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShipToLocations;
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay marketplace on which the item was originally listed. For example, if the item is listed on the eBay US site, the value would be <code>US</code>. If it's listed on the eBay Germany site, the
     * value would be <code>Germany</code>.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The TimeLeft
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates the precise time left before the listing is scheduled to end. The format used in this field is the format defined in the ISO 8601 duration format standard. See the <a
     * href="types/simpletypes.html#duration">duration</a> simple type definition for more information on syntax/notation used for this type. <br> <br> This field is always returned, even if the listing is in the <code>Completed</code> state. A
     * completed/ended listing will essentially have 0 seconds left, so the <b>Completed</b> value will be <code>PT0S</code>, which indicates '0 seconds' left.
     * - minOccurs: 0
     * @var string
     */
    public $TimeLeft;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: The listing title, as it appears in search results or on the View Item page. <br />
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The ShippingCostSummary
     * Meta informations extracted from the WSDL
     * - documentation: This container returns a few details of the lowest-priced shipping service option that is available to the eBay user making the call. For Calculated shipping, the item's location and the destination location are considered when
     * calculating the shipping cost. <br> <br> <span class="tablenote"> <strong>Important:</strong> To retrieve detailed information on every shipping service option available that the seller has set for the listing, the <b>GetShippingCosts</b> call is the
     * better call to use, as the <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls only return the <b>ShippingCostSummary</b> container. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType
     */
    public $ShippingCostSummary;
    /**
     * The ItemSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: This container is a list of Item Specific name-value pairs used by the seller to provide desciptive details of an item in a structured manner. Depending on the eBay category, some Item Specifics are mandatory (including some GTIN
     * values), some are recommended by eBay, and some are fully optional to the seller. A full set of helpful, accurate Item Specifics are always helpful to prospective buyers in assisting them to find and purchase the right product. <br> <br> A book's
     * Item Specifics name-value pairs might include <code>Publication Year=2017</code> and <code>Format=Hardcover</code>. A motor vehicle's Item Specifics name-value pairs might include <code>Make= Toyota</code>, <code>Model=Prius</code>, and
     * <code>Year=2017</code>. An event listing's Item Specifics name-value pairs might include <code>Event Type=Concert</code> and <code>Venue Name=The Fillmore</code>. <br> <br> In order for Item Specifics to be returned, the <b>IncludeSelector</b> must
     * be included in the call request and set to <code>ItemSpecifics</code>. Most eBay listings will include at least a few Item Specifics.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The HitCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of times the listing's View Item page has been viewed (as determined by eBay). Only returned if the seller has chosen to include a hit counter in the listing, and if the seller has also chosen to make the listing's hit
     * count publicly visible. This field is retrieved asynchronously. If you believe the item has a publicly visible hit count, but this field is not returned, retry the call.
     * - minOccurs: 0
     * @var int
     */
    public $HitCount;
    /**
     * The Subtitle
     * Meta informations extracted from the WSDL
     * - documentation: The subtitle of the listing. This field is only returned if the seller included a subtitle for the listing and the <b>IncludeSelector</b> is included in the call request and set to <code>Details</code>.
     * - minOccurs: 0
     * @var string
     */
    public $Subtitle;
    /**
     * The PrimaryCategoryIDPath
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the full path to the primary listing category, starting with the Category ID of the Level 1 (L1) category, and all the way to primary listing category (also referred to as the leaf category). So, if the primary
     * listing category is a Level 4 (L4) category, the Category ID path in this field might look like the following, where '6000' is the L1 category ID, and '6444' is the primary listing category ID: <br> <br>
     * <code><PrimaryCategoryIDPath>6000:6001:6016:6444</PrimaryCategoryIDPath></code>
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryCategoryIDPath;
    /**
     * The SecondaryCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing's secondary category. This field is only returned if the listing is surfacing in a secondary category. The listing's primary category is found in the <b>PrimaryCategoryID</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $SecondaryCategoryID;
    /**
     * The SecondaryCategoryName
     * Meta informations extracted from the WSDL
     * - documentation: This string field shows the full category path (using category names) to the secondary listing category, starting with the L1 category and ending with the name of the secondary listing category. This field is only returned if the
     * listing is surfacing in a secondary category.
     * - minOccurs: 0
     * @var string
     */
    public $SecondaryCategoryName;
    /**
     * The SecondaryCategoryIDPath
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the full path to the secondary listing category, starting with the Category ID of the Level 1 (L1) category, and all the way to secondary listing category. This field is only returned if the listing is surfacing in a
     * secondary category.
     * - minOccurs: 0
     * @var string
     */
    public $SecondaryCategoryIDPath;
    /**
     * The Charity
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned if any percentage of the sales proceeds is going to a nonprofit organization registered with the PayPal Giving Fund. This container consists of details related to the nonprofit charity organization,
     * including the name and identifier of the charity, as well as the percentage rate of the sale proceeds that will go to the charity for each sale. <br> <br> This container is not returned for non-charitable listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public $Charity;
    /**
     * The GermanMotorsSearchable
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned (as <code>true</code>) if an eBay Germany motor vehicle listing has an upgrade that allows the motor vehicle listing to appear on the <b>mobile.de</b> partner site. This field is only applicable to eBay Germany
     * motor vehicle listings.
     * - minOccurs: 0
     * @var bool
     */
    public $GermanMotorsSearchable;
    /**
     * The GetItFast
     * Meta informations extracted from the WSDL
     * - documentation: The Get It Fast feature and icon are no longer supported in eBay listings.
     * - minOccurs: 0
     * @var bool
     */
    public $GetItFast;
    /**
     * The Gift
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is deprecated, as the gift icon and gift services are no longer available on any eBay Marketplace site. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $Gift;
    /**
     * The PictureExists
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PictureExists;
    /**
     * The RecentListing
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $RecentListing;
    /**
     * The Storefront
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the eBay seller's store name and the URL to the eBay store. This container is returned if the seller has an eBay Store subscription and the <b>IncludeSelector</b> field is included in the call request and
     * set to <code>Details</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\StorefrontType
     */
    public $Storefront;
    /**
     * The DistanceFromBuyer
     * Meta informations extracted from the WSDL
     * - documentation: The distance of the item from the buyer. The DistanceFromBuyer unit (miles or kilometers) varies by site. If the country whose site you are searching, e.g. India, uses kilometers, then the DistanceFromBuyer unit is kilometers.
     * Otherwise, e.g. if the country is US or UK, then the DistanceFromBuyer unit is miles. DistanceFromBuyer is returned if a value for PostalCode is supplied in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\DistanceType
     */
    public $DistanceFromBuyer;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - documentation: A two-letter code that represents the country in which the item is located. <br><br> To see the list of currently supported country codes, and the English names associated with each code (e.g., KY="Cayman Islands"), call the Trading
     * API's <b>GeteBayDetails</b>, with <b>DetailName</b> set to <b>CountryDetails</b>, and then look for <b>CountryDetails.Country</b> fields in the response. <br><br> Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the
     * codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO codes in the eBay list. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The <a href="types/CountryCodeType.html">CountryCodeType</a> list is only a subset of
     * all supported country codes, so to ensure that you are seeing the latest list, you should make a <b>GeteBayDetails</b> call as explained above. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The WatchCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $WatchCount;
    /**
     * The HalfItemCondition
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $HalfItemCondition;
    /**
     * The SellerComments
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerComments;
    /**
     * The ReturnPolicy
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of details related to the seller's Return Policy, both for domestic and international buyers (if the seller ships internationally). If the seller does not accept returns, only the <b>ReturnsAccepted</b> field
     * (or <b>InternationalReturnsAccepted</b> field for international buyers) is returned with a value of <code>ReturnsNotAccepted</code>. If a seller does accept returns, more details are returned, including the return period, the refund method, and the
     * order partner (buyer or seller) who is responsible for return shipping costs. This container is only returned if the <b>IncludeSelector</b> field is included in the call request and set to <code>Details</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ReturnPolicyType
     */
    public $ReturnPolicy;
    /**
     * The MinimumToBid
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned for auction listings. The value in this field is the minimum value that the next bid on the item must be to be accepted. If no bids have been placed on the item, the value in this field will be the same
     * value that is returned in the <b>Item.ConvertedCurrentPrice</b> field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $MinimumToBid;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer returned in the <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls. To view the eBay Product ID (also known as an ePID) or Global Trade Item Number (UPC, EAN, ISBN, or MPN) for a product in a listing (or
     * product variation within a multiple-variation listing), use the Trading API's <b>GetItem</b> call instead.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType
     */
    public $ProductID;
    /**
     * The AutoPay
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates if the seller requests immediate payment for the item. If <code>true</code>, immediate payment is required before the checkout process can begin. If <code>false</code>, immediate payment is not requested.
     * <br/><br/> The immediate payment feature is only applicable to fixed-price listings, or for auction listings where the buyer chooses to purchase the item through the 'Buy It Now' option. The immediate payment feature is not applicable (even if the
     * <b>AutoPay</b> field has a <code>true</code> value) in the following types of listings/transactions: <ul> <li>Classified ad listings where payment/checkout happens between buyer and seller off of eBay's platform</li> <li>Auction listings that end
     * with a winning bidder</li> <li>A buyer's Best Offer (on Fixed-Price or Auction items) that is accepted by the seller</li> </ul> The immediate payment feature is only applicable to listings on PayPal-enabled sites in categories that support immediate
     * payment, or if the seller is opted into the new eBay Managed Payments program. For the former, the only returned <b>PaymentMethods</b> value should be <code>PayPal</code>. For sellers, opted into the new eBay Managed Payments program, the supported
     * payment methods are managed by eBay, so no payment methods may get returned.
     * - minOccurs: 0
     * @var bool
     */
    public $AutoPay;
    /**
     * The BusinessSellerDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned if the seller of the item is registered on the eBay listing site as a Business Seller. This container consists of information related to the Business Seller's account. Not all eBay sites support Business
     * Sellers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\BusinessSellerDetailsType
     */
    public $BusinessSellerDetails;
    /**
     * The PaymentAllowedSite
     * Meta informations extracted from the WSDL
     * - documentation: Enables you to view the sites on which an item can be purchased, based on the payment methods offered for the item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentAllowedSite;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field indicates whether or not the seller's account is enabled with a payment gateway account, that allows that seller to accept common credit cards as payment methods. If the value of
     * <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then the seller accepts common credit cards as payment methods.
     * - minOccurs: 0
     * @var bool
     */
    public $IntegratedMerchantCreditCardEnabled;
    /**
     * The Variations
     * Meta informations extracted from the WSDL
     * - documentation: This container is only returned for multiple-variation listings, and it is required that the user include the <b>IncludeSelector</b> field in the call request, and set its value to <code>Variations</code>. Multiple-variation listings
     * are fixed-price listings that feature similar, but not identicial items. For example, a T-shirt listing could contain multiple items of the same brand and style that vary by color and size (like <code>Blue, Large</code> and <code>Black,
     * Medium</code>). Each variation in the listing specifies a unique combination of one of the available colors and sizes. Each variation can have a different quantity and price.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public $Variations;
    /**
     * The HandlingTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. Typically, the seller's stated handling time ranges from zero to three business days. This
     * time does not include the expected transit time of the shipping service option selected by the buyer. <br/><br/> <strong>GetSingleItem</strong> or <strong>GetMultipleItems</strong> returns <strong>HandlingTime</strong> in most cases, but there may be
     * instances where the seller has not specified any shipping service options, or the the type of listing or eBay category does not require a handling time. For example, handling time is not relevant for 'local pickup' only, for freight shipping, or for
     * classified ad listings where the transaction and delivery/shipping happens off of eBay's platform. <br/><br/> A <strong>HandlingTime</strong> value of <code>0</code> indicates <em>same business day handling</em> for an item. In this case, the
     * seller's shipping commitment depends on the <em>order cut off time</em> set in the seller's My eBay Shipping preferences. The buyer must purchase and pay for the order line item before this <em>order cut off time</em> in order for the seller to be
     * obligated to ship out the order on that same business day. A different cutoff time can be specified for each business day of the week. By default, the <em>order cut off time</em> is set to 2:00 PM local time on most sites, but the seller can change
     * the times for any of the business days. For orders completed after the order cut off time, the item must be shipped by the end of the following business day (weekends and local holidays excluded).
     * - minOccurs: 0
     * @var int
     */
    public $HandlingTime;
    /**
     * The LotSize
     * Meta informations extracted from the WSDL
     * - documentation: A lot is a collection or set of two or more similar or identical items that must be purchased together in a single transaction, through an auction or a fixed-price listing. Examples of lot-based listings may include a collection of
     * baby clothes, a collection of books or magazines, or a set of identical items such as batteries or light bulbs. The <b>LotSize</b> is the number of items in the lot. <br/><br/> A fixed-price listing can have multiple lots available for purchase, but
     * if this is the case, each lot available in that listing should be identical (instead of a mixed collection of items). So, if a fixed-price listing has multiple lots available for purchase, the number of lots available for purchase is shown in the
     * <b>Item.Quantity</b> field. <br/><br/> Not all eBay listing categories support lot-based listings. To see which eBay listing categories do not support lot-based listing, a user can use the Trading API's <b>GetCategories</b> call and then look for any
     * <b>Category.LSD</b> tags (with value of <code>true</code>) that are returned in the response.
     * - minOccurs: 0
     * @var int
     */
    public $LotSize;
    /**
     * The ConditionID
     * Meta informations extracted from the WSDL
     * - documentation: A numeric identifier that represents the condition of an item. These numeric IDs can vary by eBay category, but many are the same across categories. For example, <code>1000</code> indicates an item in <em>New</em> condition,
     * <code>3000</code> indicates an item in <em>Used</em> condition, and <code>5000</code> indicates an item in <em>Good</em> condition. <br/><br/> This field will get returned for most listings since most eBay listing categories require an item
     * condition, but this field may not get returned for listings in eBay categories that don't require an item condition. A <b>ConditionID</b> value always maps to a text-based description of the condition, and this display text is shown in the
     * <b>ConditionDisplayName</b> field.
     * - minOccurs: 0
     * @var int
     */
    public $ConditionID;
    /**
     * The ConditionDisplayName
     * Meta informations extracted from the WSDL
     * - documentation: The user-friendly display name for the item condition, such as <em>New</em>, <em>Like New</em> <em>Used</em>, <em>Good</em>, or <em>Manufacturer refurbished</em>. Display names are localized for the site on which they're listed (not
     * necessarily the site on which they're viewed). <br> <br> <b>ConditionDisplayName</b> values all map to <b>ConditionID</b> values, but keep in mind that based on the eBay category, some item conditions can have the same <b>ConditionID</b>, but a
     * slightly different <b>ConditionDisplayName</b>. For example, a <b>ConditionID</b> value of <code>1000</code> typically indicates an item in new condtion, but the text displayed in the <b>ConditionDisplayName</b> can be just <em>New</em>, or some
     * categories will show <em>Brand New</em>, <em>New with tags</em>, or <em>New with box</em>. <br/><br/> This field will get returned for most listings since most eBay listing categories require an item condition, but this field may not get returned for
     * listings in eBay categories that don't require an item condition. A <b>ConditionDisplayName</b> value always maps to a text-based description of the condition, and this Condition ID is shown in the <b>ConditionID</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $ConditionDisplayName;
    /**
     * The QuantityAvailableHint
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration returned in this field indicates if the listing displays a 'quantity available' hint on the View Item page. For example, the View Item page may say 'Limited quantity available', or it may say 'More than 10 available'.
     * It is up to the seller of the listing whether or not to included a 'quantity available' hint in the listing. The 'quantity available' feature is used by the seller that prefers not to show the actual quantity available for purchase. <br/><br/> This
     * field is only applicable to multiple-quantity, fixed-price listings, and will only be returned if the seller set this feature on the listing.
     * - minOccurs: 0
     * @var string
     */
    public $QuantityAvailableHint;
    /**
     * The QuantityThreshold
     * Meta informations extracted from the WSDL
     * - documentation: This field works together with the 'quantity available' feature. This integer value in this field controls whether the 'quantity available' hint on the View Item page will say 'Limited quantity available' or 'More than <em>N</em>
     * available'. If this threshold value is '10', and the quantity available is any number more than 10, the 'quantity available' hint will read 'More than 10 available'. If the quantity available is '10' or less, the 'quantity available' hint will read
     * 'Limited quantity available'.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityThreshold;
    /**
     * The DiscountPriceInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay
     * Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site. <br > <br > Discount pricing is available to qualified sellers (and their associated developers) who participate in the
     * Discount Pricing Program. Once qualified, sellers receive a "special account flag" (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType
     */
    public $DiscountPriceInfo;
    /**
     * The ExcludeShipToLocation
     * Meta informations extracted from the WSDL
     * - documentation: An <b>ExcludeShipToLocation</b> field is returned for each geographical region, country, state/province, city, or other special domestic location that the seller has added to their 'Excluded shipping locations' list. Sellers can
     * exclude shipping locations through the Shipping preferences in My eBay, through a Shipping Business Policy that is associated with the listing, or through an Add/Revise/Relist call in the Trading API. Buyers in excluded shipping locations will be
     * blocked from buying the item. If a seller has not created an 'Exclusion list' through any of the three means discussion below, no <b>ExcludeShipToLocation</b> fields are returned. <br><br> Geographical regions include the continents, as well as other
     * geographical regions like the 'Middle East' or 'Southeast Asia'. Individual countries are represented by the two-digit ISO 3166-1 values. Special domestic regions will vary by country, but for the US, these value include 'Alaska/Hawaii', 'US
     * Protectorates', and 'PO Boxes'. <br><br> This field works in conjunction with <b>Item.ShipToLocations</b> to create a set of international countries and regions to where the seler will, and will not, ship. These values should not contradict one
     * another.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExcludeShipToLocation;
    /**
     * The TopRatedListing
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the listing was created by a Top-Rated Seller and the listing has all of the requirements that qualifies it as a Top-Rated Plus listing. The Top-Rated Seller program is only
     * available on the US, UK, and Germany sites. See the <a href="http://pages.ebay.com/help/sell/top-rated.html#what">Top-Rated Seller requirements</a> help topic for more information on qualifying as a Top-Rated Seller and the <a
     * href="http://pages.ebay.com/help/sell/top-rated.html#plus">Top-Rated Plus listing requirements</a> help topic for more information on what a listing must offer to qualify as a Top-Rated Plus listing and get the Top-Rated Plus badge. Information on
     * the overall program can be found on the <a href="http://pages.ebay.com/sellerinformation/build-your-business-online/status-standards/top-rated-seller.html">Top-Rated Seller home page</a> in the Seller Center. <br><br> This field is not returned if
     * <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $TopRatedListing;
    /**
     * The VhrUrl
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned with the URL to the Vehicle History Report if the seller has made one available for a motor vehicle listing. This field is only applicable to motor vehicle listings with a Vehicle History Report avaialable.
     * - minOccurs: 0
     * @var string
     */
    public $VhrUrl;
    /**
     * The VhrAvailable
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if a Vehicle History Report is available for a motor vehicle listing. This field is only applicable to motor vehicle listings with a Vehicle History Report avaialable. The URL to the
     * Vehicle History Report can be found in the <b>VhrUrl</b> field.
     * - minOccurs: 0
     * @var bool
     */
    public $VhrAvailable;
    /**
     * The QuantityInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the <b>MinimumRemnantSet</b> field, which indicates the minimum amount of event tickets that can remain in the fixed-price listing's inventory after a buyer purchases one or more tickets (but not all) from
     * the listing. <br/><br/> This field is currently only applicable for event ticket listings in US and CA, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\QuantityInfo
     */
    public $QuantityInfo;
    /**
     * The UnitInfo
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about the weight, volume or other quantity measurement of a listed item so buyers can compare per-unit prices. The European Union requires listings for certain types of products to include the price per unit.
     * eBay uses this information and the item's listed price to calculate and display the unit price on eBay EU sites. <br/><br/> <span class="tablenote"> <strong>Note:</strong> This information is currently required only for business sellers, and only for
     * listings with a 'Buy It Now' option. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\UnitInfoType
     */
    public $UnitInfo;
    /**
     * The GlobalShipping
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if eBay's Global Shipping Program is an option for international shipping. With eBay's Global Shipping Program, the seller ships the item to that country's eBay shipping partner,
     * and then eBay's shipping partner handles all aspects of the international leg of the shipment, including any export or import charges. <br/><br/> In addition to making the Global Shipping Program available for international shipment, the seller can
     * also specify up to four other international shipping service options. This may be necessay if the shipment is going to a country where the Global Shipping Program is not available. <br/><br/> If the value of <strong>GlobalShipping</strong> is
     * <code>false</code>, the seller is responsible for specifying one or more international shipping service options to serve those countries that the seller is willing to ship items.
     * - minOccurs: 0
     * @var bool
     */
    public $GlobalShipping;
    /**
     * The ConditionDescription
     * Meta informations extracted from the WSDL
     * - documentation: This string field is used by the seller to more clearly describe the condition of items that are not brand new. <br><br> The <b>ConditionDescription</b> field is available for all categories, including categories where the condition
     * type is not applicable (e.g., Antiques). This field is applicable for all item conditions except "New", "Brand New", "New with tags", and "New in box". If <b>ConditionDescription</b> is used with these conditions (Condition IDs 1000-1499), eBay will
     * simply ignore this field if included, and eBay will return a warning message to the user. <br><br> This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on
     * the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type
     * (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another. <br><br> The <b>ConditionDescription</b> field is only returned if a condition description is
     * specified in the listing.
     * - minOccurs: 0
     * @var string
     */
    public $ConditionDescription;
    /**
     * The ItemCompatibilityCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the number of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. The compatible vehicle list is shown in the <strong>ItemCompatibilityList</strong>
     * container. <br><br> This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility
     * list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing. <br><br> To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field
     * in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCompatibilityCount;
    /**
     * The ItemCompatibilityList
     * Meta informations extracted from the WSDL
     * - documentation: A list of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. Compatible vehicles are expressed through a set of name-value pairs with aspects such as 'Year, 'Make', 'Model', 'Trim',
     * and 'Engine'. Each set of values describe the specific vehicle, such as a '2016 Honda Accord'. <br><br> This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create
     * their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing. <br><br> To retrieve the compatibility
     * count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType
     */
    public $ItemCompatibilityList;
    /**
     * The QuantitySoldByPickupInStore
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the quantity of items sold for the listing through the In-Store Pickup option. If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, this field is
     * always returned even if its value is '0'. <br> <br> If the <strong>QuantitySoldByPickupInStore</strong> value is greater than '0', this value (along with the value in <strong>QuantitySold</strong>) should be subtracted from the value in the
     * <strong>Quantity</strong> field to get the accurate quantity that is available for purchase. <br> <br> <span class="tablenote"><strong>Note:</strong> If the <strong>IncludeSelector</strong> filter is included in the request and set to
     * <code>Details</code>, but the retrieved listing is a multiple-variation listing, the <strong>Quantity</strong>, the <strong>QuantitySoldByPickupInStore</strong>, and <strong>QuantitySold</strong> field values will reflect the quantity and quantity
     * sold of all item variations in the listing. If a user wanted quantity available and quantity sold information on individual item variations, that user would set the <strong>IncludeSelector</strong> filter to <code>Variations</code> instead, and the
     * user will look at the <strong>Variation.SellingStatus.QuantitySoldByPickupInStore</strong> fields to get the quantity sold for each item variation in the listing through the In-Store Pickup option. </span> <br/> <span class="tablenote">
     * <strong>Note:</strong> The In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySoldByPickupInStore;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: A SKU (stock keeping unit) value is a seller-defined identifier of a product within their inventory. Some sellers use product SKUs to track complex flows of products and information on the client side. A seller can specify a SKU
     * value for a product (or for all variations within a multiple-variation listing) when creating a listing. eBay preserves the SKU values, and the SKU value becomes another way to identify the product/listing, and another way to track orders associated
     * with the SKU value. <br> <br> A SKU is not required to be unique across an eBay marketplace, but a seller cannot have any active listings or variations within a multiple-variation listing that have the same SKU value. The seller will be blocked from
     * listing, revising, or relisting with a SKU value that is already associated with an active listing. <br> <br> The <b>SKU</b> field, if defined for a single-variation listing, will be returned if the <b>IncludeSelector</b> field is set to
     * <code>Details</code>. For multi-variation listings, the SKU value for each variation (if defined) will actually be returned in the <b>Variation.SKU</b> field, and to return variations data, the user must include the <b>IncludeSelector</b> field and
     * set it to <code>Variations</code>.
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The NewBestOffer
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     * - minOccurs: 0
     * @var bool
     */
    public $NewBestOffer;
    /**
     * The eBayNowEligible
     * Meta informations extracted from the WSDL
     * - documentation: The eBay Now delivery option is no longer available, so this field is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayNowEligible;
    /**
     * The eBayNowAvailable
     * Meta informations extracted from the WSDL
     * - documentation: The eBay Now delivery option is no longer available, so this field is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayNowAvailable;
    /**
     * The IgnoreQuantity
     * Meta informations extracted from the WSDL
     * - documentation: This field is only be returned (as <code>true</code>) in the case where an order line item in a listing is only available to buyers through a local fulfillment method such as In-Store Pickup or Click and Collect. And if a listing is
     * truly a <em>local fulfillment only</em> listing, the value in the <b>Item.Quantity</b> field (for single-variation listings) or the <b>Variation.Quantity</b> field (for multi-variation listings) defaults to <code>0</code> even though the quantity
     * available is technically not zero, since the order line item in the listing is still available through one or more local fulfillment methods.
     * - minOccurs: 0
     * @var bool
     */
    public $IgnoreQuantity;
    /**
     * The AvailableForPickupDropOff
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the order line item is enabled with the 'Click and Collect' feature. With Click and Collect, buyers are able to purchase an order line item on the eBay UK, Australia, and Germany sites,
     * and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. <br/><br/> The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about
     * Click and Collect, see the <a href="http://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="http://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site,
     * or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site. <br> <br> Not all categories on the UK, Australia, and Germany sites support Click and Collect listings. To verify if a
     * specific category on these eBay sites support Click and Collect listings, use the <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in one or more <b>CategoryID</b>
     * values and a <b>PickupDropOffEnabled</b> value in the <b>FeatureID</b> field. <br/><br/> Look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if
     * more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var bool
     */
    public $AvailableForPickupDropOff;
    /**
     * The EligibleForPickupDropOff
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the listing category supports 'Click and Collect' listings. A <code>true</code> value does not necessarily mean that the seller has enabled the item with the Click and Collect
     * feature. A listing is enabled with the Click and Collect feature if the <b>AvailableForPickupDropOff</b> field is returned as <code>true</code>. <br> <br> With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK,
     * Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more
     * information about Click and Collect, see the <a href="http://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="http://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay
     * Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleForPickupDropOff;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SimpleItemType
     * @uses SimpleItemType::setBestOfferEnabled()
     * @uses SimpleItemType::setBuyItNowPrice()
     * @uses SimpleItemType::setDescription()
     * @uses SimpleItemType::setItemID()
     * @uses SimpleItemType::setBuyItNowAvailable()
     * @uses SimpleItemType::setConvertedBuyItNowPrice()
     * @uses SimpleItemType::setEndTime()
     * @uses SimpleItemType::setStartTime()
     * @uses SimpleItemType::setViewItemURLForNaturalSearch()
     * @uses SimpleItemType::setListingType()
     * @uses SimpleItemType::setLocation()
     * @uses SimpleItemType::setPaymentMethods()
     * @uses SimpleItemType::setGalleryURL()
     * @uses SimpleItemType::setPictureURL()
     * @uses SimpleItemType::setPostalCode()
     * @uses SimpleItemType::setPrimaryCategoryID()
     * @uses SimpleItemType::setPrimaryCategoryName()
     * @uses SimpleItemType::setQuantity()
     * @uses SimpleItemType::setSeller()
     * @uses SimpleItemType::setBidCount()
     * @uses SimpleItemType::setConvertedCurrentPrice()
     * @uses SimpleItemType::setCurrentPrice()
     * @uses SimpleItemType::setHighBidder()
     * @uses SimpleItemType::setListingStatus()
     * @uses SimpleItemType::setQuantitySold()
     * @uses SimpleItemType::setReserveMet()
     * @uses SimpleItemType::setShipToLocations()
     * @uses SimpleItemType::setSite()
     * @uses SimpleItemType::setTimeLeft()
     * @uses SimpleItemType::setTitle()
     * @uses SimpleItemType::setShippingCostSummary()
     * @uses SimpleItemType::setItemSpecifics()
     * @uses SimpleItemType::setHitCount()
     * @uses SimpleItemType::setSubtitle()
     * @uses SimpleItemType::setPrimaryCategoryIDPath()
     * @uses SimpleItemType::setSecondaryCategoryID()
     * @uses SimpleItemType::setSecondaryCategoryName()
     * @uses SimpleItemType::setSecondaryCategoryIDPath()
     * @uses SimpleItemType::setCharity()
     * @uses SimpleItemType::setGermanMotorsSearchable()
     * @uses SimpleItemType::setGetItFast()
     * @uses SimpleItemType::setGift()
     * @uses SimpleItemType::setPictureExists()
     * @uses SimpleItemType::setRecentListing()
     * @uses SimpleItemType::setStorefront()
     * @uses SimpleItemType::setDistanceFromBuyer()
     * @uses SimpleItemType::setCountry()
     * @uses SimpleItemType::setWatchCount()
     * @uses SimpleItemType::setHalfItemCondition()
     * @uses SimpleItemType::setSellerComments()
     * @uses SimpleItemType::setReturnPolicy()
     * @uses SimpleItemType::setMinimumToBid()
     * @uses SimpleItemType::setProductID()
     * @uses SimpleItemType::setAutoPay()
     * @uses SimpleItemType::setBusinessSellerDetails()
     * @uses SimpleItemType::setPaymentAllowedSite()
     * @uses SimpleItemType::setIntegratedMerchantCreditCardEnabled()
     * @uses SimpleItemType::setVariations()
     * @uses SimpleItemType::setHandlingTime()
     * @uses SimpleItemType::setLotSize()
     * @uses SimpleItemType::setConditionID()
     * @uses SimpleItemType::setConditionDisplayName()
     * @uses SimpleItemType::setQuantityAvailableHint()
     * @uses SimpleItemType::setQuantityThreshold()
     * @uses SimpleItemType::setDiscountPriceInfo()
     * @uses SimpleItemType::setExcludeShipToLocation()
     * @uses SimpleItemType::setTopRatedListing()
     * @uses SimpleItemType::setVhrUrl()
     * @uses SimpleItemType::setVhrAvailable()
     * @uses SimpleItemType::setQuantityInfo()
     * @uses SimpleItemType::setUnitInfo()
     * @uses SimpleItemType::setGlobalShipping()
     * @uses SimpleItemType::setConditionDescription()
     * @uses SimpleItemType::setItemCompatibilityCount()
     * @uses SimpleItemType::setItemCompatibilityList()
     * @uses SimpleItemType::setQuantitySoldByPickupInStore()
     * @uses SimpleItemType::setSKU()
     * @uses SimpleItemType::setNewBestOffer()
     * @uses SimpleItemType::setEBayNowEligible()
     * @uses SimpleItemType::setEBayNowAvailable()
     * @uses SimpleItemType::setIgnoreQuantity()
     * @uses SimpleItemType::setAvailableForPickupDropOff()
     * @uses SimpleItemType::setEligibleForPickupDropOff()
     * @uses SimpleItemType::setAny()
     * @param bool $bestOfferEnabled
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $buyItNowPrice
     * @param string $description
     * @param string $itemID
     * @param bool $buyItNowAvailable
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $convertedBuyItNowPrice
     * @param string $endTime
     * @param string $startTime
     * @param string $viewItemURLForNaturalSearch
     * @param string $listingType
     * @param string $location
     * @param string[] $paymentMethods
     * @param string $galleryURL
     * @param string[] $pictureURL
     * @param string $postalCode
     * @param string $primaryCategoryID
     * @param string $primaryCategoryName
     * @param int $quantity
     * @param \macropage\ebaysdk\shopping\StructType\SimpleUserType $seller
     * @param int $bidCount
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $currentPrice
     * @param \macropage\ebaysdk\shopping\StructType\SimpleUserType $highBidder
     * @param string $listingStatus
     * @param int $quantitySold
     * @param bool $reserveMet
     * @param string[] $shipToLocations
     * @param string $site
     * @param string $timeLeft
     * @param string $title
     * @param \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics
     * @param int $hitCount
     * @param string $subtitle
     * @param string $primaryCategoryIDPath
     * @param string $secondaryCategoryID
     * @param string $secondaryCategoryName
     * @param string $secondaryCategoryIDPath
     * @param \macropage\ebaysdk\shopping\StructType\CharityType $charity
     * @param bool $germanMotorsSearchable
     * @param bool $getItFast
     * @param bool $gift
     * @param bool $pictureExists
     * @param bool $recentListing
     * @param \macropage\ebaysdk\shopping\StructType\StorefrontType $storefront
     * @param \macropage\ebaysdk\shopping\StructType\DistanceType $distanceFromBuyer
     * @param string $country
     * @param int $watchCount
     * @param string $halfItemCondition
     * @param string $sellerComments
     * @param \macropage\ebaysdk\shopping\StructType\ReturnPolicyType $returnPolicy
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $minimumToBid
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @param bool $autoPay
     * @param \macropage\ebaysdk\shopping\StructType\BusinessSellerDetailsType $businessSellerDetails
     * @param string[] $paymentAllowedSite
     * @param bool $integratedMerchantCreditCardEnabled
     * @param \macropage\ebaysdk\shopping\StructType\VariationsType $variations
     * @param int $handlingTime
     * @param int $lotSize
     * @param int $conditionID
     * @param string $conditionDisplayName
     * @param string $quantityAvailableHint
     * @param int $quantityThreshold
     * @param \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $discountPriceInfo
     * @param string[] $excludeShipToLocation
     * @param bool $topRatedListing
     * @param string $vhrUrl
     * @param bool $vhrAvailable
     * @param \macropage\ebaysdk\shopping\StructType\QuantityInfo $quantityInfo
     * @param \macropage\ebaysdk\shopping\StructType\UnitInfoType $unitInfo
     * @param bool $globalShipping
     * @param string $conditionDescription
     * @param int $itemCompatibilityCount
     * @param \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType $itemCompatibilityList
     * @param int $quantitySoldByPickupInStore
     * @param string $sKU
     * @param bool $newBestOffer
     * @param bool $eBayNowEligible
     * @param bool $eBayNowAvailable
     * @param bool $ignoreQuantity
     * @param bool $availableForPickupDropOff
     * @param bool $eligibleForPickupDropOff
     * @param \DOMDocument $any
     */
    public function __construct($bestOfferEnabled = null, \macropage\ebaysdk\shopping\StructType\AmountType $buyItNowPrice = null, $description = null, $itemID = null, $buyItNowAvailable = null, \macropage\ebaysdk\shopping\StructType\AmountType $convertedBuyItNowPrice = null, $endTime = null, $startTime = null, $viewItemURLForNaturalSearch = null, $listingType = null, $location = null, array $paymentMethods = array(), $galleryURL = null, array $pictureURL = array(), $postalCode = null, $primaryCategoryID = null, $primaryCategoryName = null, $quantity = null, \macropage\ebaysdk\shopping\StructType\SimpleUserType $seller = null, $bidCount = null, \macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice = null, \macropage\ebaysdk\shopping\StructType\AmountType $currentPrice = null, \macropage\ebaysdk\shopping\StructType\SimpleUserType $highBidder = null, $listingStatus = null, $quantitySold = null, $reserveMet = null, array $shipToLocations = array(), $site = null, $timeLeft = null, $title = null, \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary = null, \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics = null, $hitCount = null, $subtitle = null, $primaryCategoryIDPath = null, $secondaryCategoryID = null, $secondaryCategoryName = null, $secondaryCategoryIDPath = null, \macropage\ebaysdk\shopping\StructType\CharityType $charity = null, $germanMotorsSearchable = null, $getItFast = null, $gift = null, $pictureExists = null, $recentListing = null, \macropage\ebaysdk\shopping\StructType\StorefrontType $storefront = null, \macropage\ebaysdk\shopping\StructType\DistanceType $distanceFromBuyer = null, $country = null, $watchCount = null, $halfItemCondition = null, $sellerComments = null, \macropage\ebaysdk\shopping\StructType\ReturnPolicyType $returnPolicy = null, \macropage\ebaysdk\shopping\StructType\AmountType $minimumToBid = null, \macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null, $autoPay = null, \macropage\ebaysdk\shopping\StructType\BusinessSellerDetailsType $businessSellerDetails = null, array $paymentAllowedSite = array(), $integratedMerchantCreditCardEnabled = null, \macropage\ebaysdk\shopping\StructType\VariationsType $variations = null, $handlingTime = null, $lotSize = null, $conditionID = null, $conditionDisplayName = null, $quantityAvailableHint = null, $quantityThreshold = null, \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $discountPriceInfo = null, array $excludeShipToLocation = array(), $topRatedListing = null, $vhrUrl = null, $vhrAvailable = null, \macropage\ebaysdk\shopping\StructType\QuantityInfo $quantityInfo = null, \macropage\ebaysdk\shopping\StructType\UnitInfoType $unitInfo = null, $globalShipping = null, $conditionDescription = null, $itemCompatibilityCount = null, \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType $itemCompatibilityList = null, $quantitySoldByPickupInStore = null, $sKU = null, $newBestOffer = null, $eBayNowEligible = null, $eBayNowAvailable = null, $ignoreQuantity = null, $availableForPickupDropOff = null, $eligibleForPickupDropOff = null, \DOMDocument $any = null)
    {
        $this
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setBuyItNowPrice($buyItNowPrice)
            ->setDescription($description)
            ->setItemID($itemID)
            ->setBuyItNowAvailable($buyItNowAvailable)
            ->setConvertedBuyItNowPrice($convertedBuyItNowPrice)
            ->setEndTime($endTime)
            ->setStartTime($startTime)
            ->setViewItemURLForNaturalSearch($viewItemURLForNaturalSearch)
            ->setListingType($listingType)
            ->setLocation($location)
            ->setPaymentMethods($paymentMethods)
            ->setGalleryURL($galleryURL)
            ->setPictureURL($pictureURL)
            ->setPostalCode($postalCode)
            ->setPrimaryCategoryID($primaryCategoryID)
            ->setPrimaryCategoryName($primaryCategoryName)
            ->setQuantity($quantity)
            ->setSeller($seller)
            ->setBidCount($bidCount)
            ->setConvertedCurrentPrice($convertedCurrentPrice)
            ->setCurrentPrice($currentPrice)
            ->setHighBidder($highBidder)
            ->setListingStatus($listingStatus)
            ->setQuantitySold($quantitySold)
            ->setReserveMet($reserveMet)
            ->setShipToLocations($shipToLocations)
            ->setSite($site)
            ->setTimeLeft($timeLeft)
            ->setTitle($title)
            ->setShippingCostSummary($shippingCostSummary)
            ->setItemSpecifics($itemSpecifics)
            ->setHitCount($hitCount)
            ->setSubtitle($subtitle)
            ->setPrimaryCategoryIDPath($primaryCategoryIDPath)
            ->setSecondaryCategoryID($secondaryCategoryID)
            ->setSecondaryCategoryName($secondaryCategoryName)
            ->setSecondaryCategoryIDPath($secondaryCategoryIDPath)
            ->setCharity($charity)
            ->setGermanMotorsSearchable($germanMotorsSearchable)
            ->setGetItFast($getItFast)
            ->setGift($gift)
            ->setPictureExists($pictureExists)
            ->setRecentListing($recentListing)
            ->setStorefront($storefront)
            ->setDistanceFromBuyer($distanceFromBuyer)
            ->setCountry($country)
            ->setWatchCount($watchCount)
            ->setHalfItemCondition($halfItemCondition)
            ->setSellerComments($sellerComments)
            ->setReturnPolicy($returnPolicy)
            ->setMinimumToBid($minimumToBid)
            ->setProductID($productID)
            ->setAutoPay($autoPay)
            ->setBusinessSellerDetails($businessSellerDetails)
            ->setPaymentAllowedSite($paymentAllowedSite)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setVariations($variations)
            ->setHandlingTime($handlingTime)
            ->setLotSize($lotSize)
            ->setConditionID($conditionID)
            ->setConditionDisplayName($conditionDisplayName)
            ->setQuantityAvailableHint($quantityAvailableHint)
            ->setQuantityThreshold($quantityThreshold)
            ->setDiscountPriceInfo($discountPriceInfo)
            ->setExcludeShipToLocation($excludeShipToLocation)
            ->setTopRatedListing($topRatedListing)
            ->setVhrUrl($vhrUrl)
            ->setVhrAvailable($vhrAvailable)
            ->setQuantityInfo($quantityInfo)
            ->setUnitInfo($unitInfo)
            ->setGlobalShipping($globalShipping)
            ->setConditionDescription($conditionDescription)
            ->setItemCompatibilityCount($itemCompatibilityCount)
            ->setItemCompatibilityList($itemCompatibilityList)
            ->setQuantitySoldByPickupInStore($quantitySoldByPickupInStore)
            ->setSKU($sKU)
            ->setNewBestOffer($newBestOffer)
            ->setEBayNowEligible($eBayNowEligible)
            ->setEBayNowAvailable($eBayNowAvailable)
            ->setIgnoreQuantity($ignoreQuantity)
            ->setAvailableForPickupDropOff($availableForPickupDropOff)
            ->setEligibleForPickupDropOff($eligibleForPickupDropOff)
            ->setAny($any);
    }
    /**
     * Get BestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled()
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setBestOfferEnabled($bestOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOfferEnabled)), __LINE__);
        }
        $this->BestOfferEnabled = $bestOfferEnabled;
        return $this;
    }
    /**
     * Get BuyItNowPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getBuyItNowPrice()
    {
        return $this->BuyItNowPrice;
    }
    /**
     * Set BuyItNowPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $buyItNowPrice
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setBuyItNowPrice(\macropage\ebaysdk\shopping\StructType\AmountType $buyItNowPrice = null)
    {
        $this->BuyItNowPrice = $buyItNowPrice;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
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
     * Get BuyItNowAvailable value
     * @return bool|null
     */
    public function getBuyItNowAvailable()
    {
        return $this->BuyItNowAvailable;
    }
    /**
     * Set BuyItNowAvailable value
     * @param bool $buyItNowAvailable
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setBuyItNowAvailable($buyItNowAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowAvailable) && !is_bool($buyItNowAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($buyItNowAvailable)), __LINE__);
        }
        $this->BuyItNowAvailable = $buyItNowAvailable;
        return $this;
    }
    /**
     * Get ConvertedBuyItNowPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getConvertedBuyItNowPrice()
    {
        return $this->ConvertedBuyItNowPrice;
    }
    /**
     * Set ConvertedBuyItNowPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $convertedBuyItNowPrice
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setConvertedBuyItNowPrice(\macropage\ebaysdk\shopping\StructType\AmountType $convertedBuyItNowPrice = null)
    {
        $this->ConvertedBuyItNowPrice = $convertedBuyItNowPrice;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get ViewItemURLForNaturalSearch value
     * @return string|null
     */
    public function getViewItemURLForNaturalSearch()
    {
        return $this->ViewItemURLForNaturalSearch;
    }
    /**
     * Set ViewItemURLForNaturalSearch value
     * @param string $viewItemURLForNaturalSearch
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setViewItemURLForNaturalSearch($viewItemURLForNaturalSearch = null)
    {
        // validation for constraint: string
        if (!is_null($viewItemURLForNaturalSearch) && !is_string($viewItemURLForNaturalSearch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewItemURLForNaturalSearch)), __LINE__);
        }
        $this->ViewItemURLForNaturalSearch = $viewItemURLForNaturalSearch;
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
     * @uses \macropage\ebaysdk\shopping\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \macropage\ebaysdk\shopping\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get PaymentMethods value
     * @return string[]|null
     */
    public function getPaymentMethods()
    {
        return $this->PaymentMethods;
    }
    /**
     * Set PaymentMethods value
     * @uses \macropage\ebaysdk\shopping\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethods
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setPaymentMethods(array $paymentMethods = array())
    {
        $invalidValues = array();
        foreach ($paymentMethods as $simpleItemTypePaymentMethodsItem) {
            if (!\macropage\ebaysdk\shopping\EnumType\BuyerPaymentMethodCodeType::valueIsValid($simpleItemTypePaymentMethodsItem)) {
                $invalidValues[] = var_export($simpleItemTypePaymentMethodsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\shopping\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Add item to PaymentMethods value
     * @uses \macropage\ebaysdk\shopping\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function addToPaymentMethods($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\shopping\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods[] = $item;
        return $this;
    }
    /**
     * Get GalleryURL value
     * @return string|null
     */
    public function getGalleryURL()
    {
        return $this->GalleryURL;
    }
    /**
     * Set GalleryURL value
     * @param string $galleryURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setGalleryURL($galleryURL = null)
    {
        // validation for constraint: string
        if (!is_null($galleryURL) && !is_string($galleryURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($galleryURL)), __LINE__);
        }
        $this->GalleryURL = $galleryURL;
        return $this;
    }
    /**
     * Get PictureURL value
     * @return string[]|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $pictureURL
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setPictureURL(array $pictureURL = array())
    {
        foreach ($pictureURL as $simpleItemTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($simpleItemTypePictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($simpleItemTypePictureURLItem) ? get_class($simpleItemTypePictureURLItem) : gettype($simpleItemTypePictureURLItem)), __LINE__);
            }
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function addToPictureURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PictureURL[] = $item;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get PrimaryCategoryID value
     * @return string|null
     */
    public function getPrimaryCategoryID()
    {
        return $this->PrimaryCategoryID;
    }
    /**
     * Set PrimaryCategoryID value
     * @param string $primaryCategoryID
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setPrimaryCategoryID($primaryCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($primaryCategoryID) && !is_string($primaryCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryCategoryID)), __LINE__);
        }
        $this->PrimaryCategoryID = $primaryCategoryID;
        return $this;
    }
    /**
     * Get PrimaryCategoryName value
     * @return string|null
     */
    public function getPrimaryCategoryName()
    {
        return $this->PrimaryCategoryName;
    }
    /**
     * Set PrimaryCategoryName value
     * @param string $primaryCategoryName
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setPrimaryCategoryName($primaryCategoryName = null)
    {
        // validation for constraint: string
        if (!is_null($primaryCategoryName) && !is_string($primaryCategoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryCategoryName)), __LINE__);
        }
        $this->PrimaryCategoryName = $primaryCategoryName;
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
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
     * Get Seller value
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType|null
     */
    public function getSeller()
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \macropage\ebaysdk\shopping\StructType\SimpleUserType $seller
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setSeller(\macropage\ebaysdk\shopping\StructType\SimpleUserType $seller = null)
    {
        $this->Seller = $seller;
        return $this;
    }
    /**
     * Get BidCount value
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->BidCount;
    }
    /**
     * Set BidCount value
     * @param int $bidCount
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setBidCount($bidCount = null)
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !is_numeric($bidCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidCount)), __LINE__);
        }
        $this->BidCount = $bidCount;
        return $this;
    }
    /**
     * Get ConvertedCurrentPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getConvertedCurrentPrice()
    {
        return $this->ConvertedCurrentPrice;
    }
    /**
     * Set ConvertedCurrentPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setConvertedCurrentPrice(\macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice = null)
    {
        $this->ConvertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }
    /**
     * Get CurrentPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getCurrentPrice()
    {
        return $this->CurrentPrice;
    }
    /**
     * Set CurrentPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $currentPrice
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setCurrentPrice(\macropage\ebaysdk\shopping\StructType\AmountType $currentPrice = null)
    {
        $this->CurrentPrice = $currentPrice;
        return $this;
    }
    /**
     * Get HighBidder value
     * @return \macropage\ebaysdk\shopping\StructType\SimpleUserType|null
     */
    public function getHighBidder()
    {
        return $this->HighBidder;
    }
    /**
     * Set HighBidder value
     * @param \macropage\ebaysdk\shopping\StructType\SimpleUserType $highBidder
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setHighBidder(\macropage\ebaysdk\shopping\StructType\SimpleUserType $highBidder = null)
    {
        $this->HighBidder = $highBidder;
        return $this;
    }
    /**
     * Get ListingStatus value
     * @return string|null
     */
    public function getListingStatus()
    {
        return $this->ListingStatus;
    }
    /**
     * Set ListingStatus value
     * @uses \macropage\ebaysdk\shopping\EnumType\ListingStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ListingStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingStatus
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setListingStatus($listingStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ListingStatusCodeType::valueIsValid($listingStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingStatus, implode(', ', \macropage\ebaysdk\shopping\EnumType\ListingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ListingStatus = $listingStatus;
        return $this;
    }
    /**
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold()
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setQuantitySold($quantitySold = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !is_numeric($quantitySold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        return $this;
    }
    /**
     * Get ReserveMet value
     * @return bool|null
     */
    public function getReserveMet()
    {
        return $this->ReserveMet;
    }
    /**
     * Set ReserveMet value
     * @param bool $reserveMet
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setReserveMet($reserveMet = null)
    {
        // validation for constraint: boolean
        if (!is_null($reserveMet) && !is_bool($reserveMet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reserveMet)), __LINE__);
        }
        $this->ReserveMet = $reserveMet;
        return $this;
    }
    /**
     * Get ShipToLocations value
     * @return string[]|null
     */
    public function getShipToLocations()
    {
        return $this->ShipToLocations;
    }
    /**
     * Set ShipToLocations value
     * @throws \InvalidArgumentException
     * @param string[] $shipToLocations
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setShipToLocations(array $shipToLocations = array())
    {
        foreach ($shipToLocations as $simpleItemTypeShipToLocationsItem) {
            // validation for constraint: itemType
            if (!is_string($simpleItemTypeShipToLocationsItem)) {
                throw new \InvalidArgumentException(sprintf('The ShipToLocations property can only contain items of string, "%s" given', is_object($simpleItemTypeShipToLocationsItem) ? get_class($simpleItemTypeShipToLocationsItem) : gettype($simpleItemTypeShipToLocationsItem)), __LINE__);
            }
        }
        $this->ShipToLocations = $shipToLocations;
        return $this;
    }
    /**
     * Add item to ShipToLocations value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function addToShipToLocations($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ShipToLocations property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipToLocations[] = $item;
        return $this;
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $site, implode(', ', \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Get TimeLeft value
     * @return string|null
     */
    public function getTimeLeft()
    {
        return $this->TimeLeft;
    }
    /**
     * Set TimeLeft value
     * @param string $timeLeft
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setTimeLeft($timeLeft = null)
    {
        // validation for constraint: string
        if (!is_null($timeLeft) && !is_string($timeLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeLeft)), __LINE__);
        }
        $this->TimeLeft = $timeLeft;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get ShippingCostSummary value
     * @return \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType|null
     */
    public function getShippingCostSummary()
    {
        return $this->ShippingCostSummary;
    }
    /**
     * Set ShippingCostSummary value
     * @param \macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setShippingCostSummary(\macropage\ebaysdk\shopping\StructType\ShippingCostSummaryType $shippingCostSummary = null)
    {
        $this->ShippingCostSummary = $shippingCostSummary;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setItemSpecifics(\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
        return $this;
    }
    /**
     * Get HitCount value
     * @return int|null
     */
    public function getHitCount()
    {
        return $this->HitCount;
    }
    /**
     * Set HitCount value
     * @param int $hitCount
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setHitCount($hitCount = null)
    {
        // validation for constraint: int
        if (!is_null($hitCount) && !is_numeric($hitCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hitCount)), __LINE__);
        }
        $this->HitCount = $hitCount;
        return $this;
    }
    /**
     * Get Subtitle value
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->Subtitle;
    }
    /**
     * Set Subtitle value
     * @param string $subtitle
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setSubtitle($subtitle = null)
    {
        // validation for constraint: string
        if (!is_null($subtitle) && !is_string($subtitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subtitle)), __LINE__);
        }
        $this->Subtitle = $subtitle;
        return $this;
    }
    /**
     * Get PrimaryCategoryIDPath value
     * @return string|null
     */
    public function getPrimaryCategoryIDPath()
    {
        return $this->PrimaryCategoryIDPath;
    }
    /**
     * Set PrimaryCategoryIDPath value
     * @param string $primaryCategoryIDPath
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setPrimaryCategoryIDPath($primaryCategoryIDPath = null)
    {
        // validation for constraint: string
        if (!is_null($primaryCategoryIDPath) && !is_string($primaryCategoryIDPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryCategoryIDPath)), __LINE__);
        }
        $this->PrimaryCategoryIDPath = $primaryCategoryIDPath;
        return $this;
    }
    /**
     * Get SecondaryCategoryID value
     * @return string|null
     */
    public function getSecondaryCategoryID()
    {
        return $this->SecondaryCategoryID;
    }
    /**
     * Set SecondaryCategoryID value
     * @param string $secondaryCategoryID
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setSecondaryCategoryID($secondaryCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryCategoryID) && !is_string($secondaryCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryCategoryID)), __LINE__);
        }
        $this->SecondaryCategoryID = $secondaryCategoryID;
        return $this;
    }
    /**
     * Get SecondaryCategoryName value
     * @return string|null
     */
    public function getSecondaryCategoryName()
    {
        return $this->SecondaryCategoryName;
    }
    /**
     * Set SecondaryCategoryName value
     * @param string $secondaryCategoryName
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setSecondaryCategoryName($secondaryCategoryName = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryCategoryName) && !is_string($secondaryCategoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryCategoryName)), __LINE__);
        }
        $this->SecondaryCategoryName = $secondaryCategoryName;
        return $this;
    }
    /**
     * Get SecondaryCategoryIDPath value
     * @return string|null
     */
    public function getSecondaryCategoryIDPath()
    {
        return $this->SecondaryCategoryIDPath;
    }
    /**
     * Set SecondaryCategoryIDPath value
     * @param string $secondaryCategoryIDPath
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setSecondaryCategoryIDPath($secondaryCategoryIDPath = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryCategoryIDPath) && !is_string($secondaryCategoryIDPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryCategoryIDPath)), __LINE__);
        }
        $this->SecondaryCategoryIDPath = $secondaryCategoryIDPath;
        return $this;
    }
    /**
     * Get Charity value
     * @return \macropage\ebaysdk\shopping\StructType\CharityType|null
     */
    public function getCharity()
    {
        return $this->Charity;
    }
    /**
     * Set Charity value
     * @param \macropage\ebaysdk\shopping\StructType\CharityType $charity
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setCharity(\macropage\ebaysdk\shopping\StructType\CharityType $charity = null)
    {
        $this->Charity = $charity;
        return $this;
    }
    /**
     * Get GermanMotorsSearchable value
     * @return bool|null
     */
    public function getGermanMotorsSearchable()
    {
        return $this->GermanMotorsSearchable;
    }
    /**
     * Set GermanMotorsSearchable value
     * @param bool $germanMotorsSearchable
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setGermanMotorsSearchable($germanMotorsSearchable = null)
    {
        // validation for constraint: boolean
        if (!is_null($germanMotorsSearchable) && !is_bool($germanMotorsSearchable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($germanMotorsSearchable)), __LINE__);
        }
        $this->GermanMotorsSearchable = $germanMotorsSearchable;
        return $this;
    }
    /**
     * Get GetItFast value
     * @return bool|null
     */
    public function getGetItFast()
    {
        return $this->GetItFast;
    }
    /**
     * Set GetItFast value
     * @param bool $getItFast
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setGetItFast($getItFast = null)
    {
        // validation for constraint: boolean
        if (!is_null($getItFast) && !is_bool($getItFast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($getItFast)), __LINE__);
        }
        $this->GetItFast = $getItFast;
        return $this;
    }
    /**
     * Get Gift value
     * @return bool|null
     */
    public function getGift()
    {
        return $this->Gift;
    }
    /**
     * Set Gift value
     * @param bool $gift
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setGift($gift = null)
    {
        // validation for constraint: boolean
        if (!is_null($gift) && !is_bool($gift)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($gift)), __LINE__);
        }
        $this->Gift = $gift;
        return $this;
    }
    /**
     * Get PictureExists value
     * @return bool|null
     */
    public function getPictureExists()
    {
        return $this->PictureExists;
    }
    /**
     * Set PictureExists value
     * @param bool $pictureExists
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setPictureExists($pictureExists = null)
    {
        // validation for constraint: boolean
        if (!is_null($pictureExists) && !is_bool($pictureExists)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($pictureExists)), __LINE__);
        }
        $this->PictureExists = $pictureExists;
        return $this;
    }
    /**
     * Get RecentListing value
     * @return bool|null
     */
    public function getRecentListing()
    {
        return $this->RecentListing;
    }
    /**
     * Set RecentListing value
     * @param bool $recentListing
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setRecentListing($recentListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($recentListing) && !is_bool($recentListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($recentListing)), __LINE__);
        }
        $this->RecentListing = $recentListing;
        return $this;
    }
    /**
     * Get Storefront value
     * @return \macropage\ebaysdk\shopping\StructType\StorefrontType|null
     */
    public function getStorefront()
    {
        return $this->Storefront;
    }
    /**
     * Set Storefront value
     * @param \macropage\ebaysdk\shopping\StructType\StorefrontType $storefront
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setStorefront(\macropage\ebaysdk\shopping\StructType\StorefrontType $storefront = null)
    {
        $this->Storefront = $storefront;
        return $this;
    }
    /**
     * Get DistanceFromBuyer value
     * @return \macropage\ebaysdk\shopping\StructType\DistanceType|null
     */
    public function getDistanceFromBuyer()
    {
        return $this->DistanceFromBuyer;
    }
    /**
     * Set DistanceFromBuyer value
     * @param \macropage\ebaysdk\shopping\StructType\DistanceType $distanceFromBuyer
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setDistanceFromBuyer(\macropage\ebaysdk\shopping\StructType\DistanceType $distanceFromBuyer = null)
    {
        $this->DistanceFromBuyer = $distanceFromBuyer;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \macropage\ebaysdk\shopping\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $country
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\CountryCodeType::valueIsValid($country)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $country, implode(', ', \macropage\ebaysdk\shopping\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country = $country;
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
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
     * Get HalfItemCondition value
     * @return string|null
     */
    public function getHalfItemCondition()
    {
        return $this->HalfItemCondition;
    }
    /**
     * Set HalfItemCondition value
     * @uses \macropage\ebaysdk\shopping\EnumType\HalfItemConditionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\HalfItemConditionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $halfItemCondition
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setHalfItemCondition($halfItemCondition = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\HalfItemConditionCodeType::valueIsValid($halfItemCondition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $halfItemCondition, implode(', ', \macropage\ebaysdk\shopping\EnumType\HalfItemConditionCodeType::getValidValues())), __LINE__);
        }
        $this->HalfItemCondition = $halfItemCondition;
        return $this;
    }
    /**
     * Get SellerComments value
     * @return string|null
     */
    public function getSellerComments()
    {
        return $this->SellerComments;
    }
    /**
     * Set SellerComments value
     * @param string $sellerComments
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setSellerComments($sellerComments = null)
    {
        // validation for constraint: string
        if (!is_null($sellerComments) && !is_string($sellerComments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerComments)), __LINE__);
        }
        $this->SellerComments = $sellerComments;
        return $this;
    }
    /**
     * Get ReturnPolicy value
     * @return \macropage\ebaysdk\shopping\StructType\ReturnPolicyType|null
     */
    public function getReturnPolicy()
    {
        return $this->ReturnPolicy;
    }
    /**
     * Set ReturnPolicy value
     * @param \macropage\ebaysdk\shopping\StructType\ReturnPolicyType $returnPolicy
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setReturnPolicy(\macropage\ebaysdk\shopping\StructType\ReturnPolicyType $returnPolicy = null)
    {
        $this->ReturnPolicy = $returnPolicy;
        return $this;
    }
    /**
     * Get MinimumToBid value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getMinimumToBid()
    {
        return $this->MinimumToBid;
    }
    /**
     * Set MinimumToBid value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $minimumToBid
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setMinimumToBid(\macropage\ebaysdk\shopping\StructType\AmountType $minimumToBid = null)
    {
        $this->MinimumToBid = $minimumToBid;
        return $this;
    }
    /**
     * Get ProductID value
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $productID
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setProductID(\macropage\ebaysdk\shopping\StructType\ProductIDType $productID = null)
    {
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Get AutoPay value
     * @return bool|null
     */
    public function getAutoPay()
    {
        return $this->AutoPay;
    }
    /**
     * Set AutoPay value
     * @param bool $autoPay
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setAutoPay($autoPay = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoPay) && !is_bool($autoPay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoPay)), __LINE__);
        }
        $this->AutoPay = $autoPay;
        return $this;
    }
    /**
     * Get BusinessSellerDetails value
     * @return \macropage\ebaysdk\shopping\StructType\BusinessSellerDetailsType|null
     */
    public function getBusinessSellerDetails()
    {
        return $this->BusinessSellerDetails;
    }
    /**
     * Set BusinessSellerDetails value
     * @param \macropage\ebaysdk\shopping\StructType\BusinessSellerDetailsType $businessSellerDetails
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setBusinessSellerDetails(\macropage\ebaysdk\shopping\StructType\BusinessSellerDetailsType $businessSellerDetails = null)
    {
        $this->BusinessSellerDetails = $businessSellerDetails;
        return $this;
    }
    /**
     * Get PaymentAllowedSite value
     * @return string[]|null
     */
    public function getPaymentAllowedSite()
    {
        return $this->PaymentAllowedSite;
    }
    /**
     * Set PaymentAllowedSite value
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentAllowedSite
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setPaymentAllowedSite(array $paymentAllowedSite = array())
    {
        $invalidValues = array();
        foreach ($paymentAllowedSite as $simpleItemTypePaymentAllowedSiteItem) {
            if (!\macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid($simpleItemTypePaymentAllowedSiteItem)) {
                $invalidValues[] = var_export($simpleItemTypePaymentAllowedSiteItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentAllowedSite = $paymentAllowedSite;
        return $this;
    }
    /**
     * Add item to PaymentAllowedSite value
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function addToPaymentAllowedSite($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SiteCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\shopping\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentAllowedSite[] = $item;
        return $this;
    }
    /**
     * Get IntegratedMerchantCreditCardEnabled value
     * @return bool|null
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->IntegratedMerchantCreditCardEnabled;
    }
    /**
     * Set IntegratedMerchantCreditCardEnabled value
     * @param bool $integratedMerchantCreditCardEnabled
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($integratedMerchantCreditCardEnabled) && !is_bool($integratedMerchantCreditCardEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($integratedMerchantCreditCardEnabled)), __LINE__);
        }
        $this->IntegratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }
    /**
     * Get Variations value
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType|null
     */
    public function getVariations()
    {
        return $this->Variations;
    }
    /**
     * Set Variations value
     * @param \macropage\ebaysdk\shopping\StructType\VariationsType $variations
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setVariations(\macropage\ebaysdk\shopping\StructType\VariationsType $variations = null)
    {
        $this->Variations = $variations;
        return $this;
    }
    /**
     * Get HandlingTime value
     * @return int|null
     */
    public function getHandlingTime()
    {
        return $this->HandlingTime;
    }
    /**
     * Set HandlingTime value
     * @param int $handlingTime
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setHandlingTime($handlingTime = null)
    {
        // validation for constraint: int
        if (!is_null($handlingTime) && !is_numeric($handlingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($handlingTime)), __LINE__);
        }
        $this->HandlingTime = $handlingTime;
        return $this;
    }
    /**
     * Get LotSize value
     * @return int|null
     */
    public function getLotSize()
    {
        return $this->LotSize;
    }
    /**
     * Set LotSize value
     * @param int $lotSize
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setLotSize($lotSize = null)
    {
        // validation for constraint: int
        if (!is_null($lotSize) && !is_numeric($lotSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lotSize)), __LINE__);
        }
        $this->LotSize = $lotSize;
        return $this;
    }
    /**
     * Get ConditionID value
     * @return int|null
     */
    public function getConditionID()
    {
        return $this->ConditionID;
    }
    /**
     * Set ConditionID value
     * @param int $conditionID
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setConditionID($conditionID = null)
    {
        // validation for constraint: int
        if (!is_null($conditionID) && !is_numeric($conditionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($conditionID)), __LINE__);
        }
        $this->ConditionID = $conditionID;
        return $this;
    }
    /**
     * Get ConditionDisplayName value
     * @return string|null
     */
    public function getConditionDisplayName()
    {
        return $this->ConditionDisplayName;
    }
    /**
     * Set ConditionDisplayName value
     * @param string $conditionDisplayName
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setConditionDisplayName($conditionDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($conditionDisplayName) && !is_string($conditionDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conditionDisplayName)), __LINE__);
        }
        $this->ConditionDisplayName = $conditionDisplayName;
        return $this;
    }
    /**
     * Get QuantityAvailableHint value
     * @return string|null
     */
    public function getQuantityAvailableHint()
    {
        return $this->QuantityAvailableHint;
    }
    /**
     * Set QuantityAvailableHint value
     * @uses \macropage\ebaysdk\shopping\EnumType\QuantityAvailableHintCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\QuantityAvailableHintCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $quantityAvailableHint
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setQuantityAvailableHint($quantityAvailableHint = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\QuantityAvailableHintCodeType::valueIsValid($quantityAvailableHint)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $quantityAvailableHint, implode(', ', \macropage\ebaysdk\shopping\EnumType\QuantityAvailableHintCodeType::getValidValues())), __LINE__);
        }
        $this->QuantityAvailableHint = $quantityAvailableHint;
        return $this;
    }
    /**
     * Get QuantityThreshold value
     * @return int|null
     */
    public function getQuantityThreshold()
    {
        return $this->QuantityThreshold;
    }
    /**
     * Set QuantityThreshold value
     * @param int $quantityThreshold
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setQuantityThreshold($quantityThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($quantityThreshold) && !is_numeric($quantityThreshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantityThreshold)), __LINE__);
        }
        $this->QuantityThreshold = $quantityThreshold;
        return $this;
    }
    /**
     * Get DiscountPriceInfo value
     * @return \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType|null
     */
    public function getDiscountPriceInfo()
    {
        return $this->DiscountPriceInfo;
    }
    /**
     * Set DiscountPriceInfo value
     * @param \macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $discountPriceInfo
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setDiscountPriceInfo(\macropage\ebaysdk\shopping\StructType\DiscountPriceInfoType $discountPriceInfo = null)
    {
        $this->DiscountPriceInfo = $discountPriceInfo;
        return $this;
    }
    /**
     * Get ExcludeShipToLocation value
     * @return string[]|null
     */
    public function getExcludeShipToLocation()
    {
        return $this->ExcludeShipToLocation;
    }
    /**
     * Set ExcludeShipToLocation value
     * @throws \InvalidArgumentException
     * @param string[] $excludeShipToLocation
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setExcludeShipToLocation(array $excludeShipToLocation = array())
    {
        foreach ($excludeShipToLocation as $simpleItemTypeExcludeShipToLocationItem) {
            // validation for constraint: itemType
            if (!is_string($simpleItemTypeExcludeShipToLocationItem)) {
                throw new \InvalidArgumentException(sprintf('The ExcludeShipToLocation property can only contain items of string, "%s" given', is_object($simpleItemTypeExcludeShipToLocationItem) ? get_class($simpleItemTypeExcludeShipToLocationItem) : gettype($simpleItemTypeExcludeShipToLocationItem)), __LINE__);
            }
        }
        $this->ExcludeShipToLocation = $excludeShipToLocation;
        return $this;
    }
    /**
     * Add item to ExcludeShipToLocation value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function addToExcludeShipToLocation($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExcludeShipToLocation property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExcludeShipToLocation[] = $item;
        return $this;
    }
    /**
     * Get TopRatedListing value
     * @return bool|null
     */
    public function getTopRatedListing()
    {
        return $this->TopRatedListing;
    }
    /**
     * Set TopRatedListing value
     * @param bool $topRatedListing
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setTopRatedListing($topRatedListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($topRatedListing) && !is_bool($topRatedListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($topRatedListing)), __LINE__);
        }
        $this->TopRatedListing = $topRatedListing;
        return $this;
    }
    /**
     * Get VhrUrl value
     * @return string|null
     */
    public function getVhrUrl()
    {
        return $this->VhrUrl;
    }
    /**
     * Set VhrUrl value
     * @param string $vhrUrl
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setVhrUrl($vhrUrl = null)
    {
        // validation for constraint: string
        if (!is_null($vhrUrl) && !is_string($vhrUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vhrUrl)), __LINE__);
        }
        $this->VhrUrl = $vhrUrl;
        return $this;
    }
    /**
     * Get VhrAvailable value
     * @return bool|null
     */
    public function getVhrAvailable()
    {
        return $this->VhrAvailable;
    }
    /**
     * Set VhrAvailable value
     * @param bool $vhrAvailable
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setVhrAvailable($vhrAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($vhrAvailable) && !is_bool($vhrAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vhrAvailable)), __LINE__);
        }
        $this->VhrAvailable = $vhrAvailable;
        return $this;
    }
    /**
     * Get QuantityInfo value
     * @return \macropage\ebaysdk\shopping\StructType\QuantityInfo|null
     */
    public function getQuantityInfo()
    {
        return $this->QuantityInfo;
    }
    /**
     * Set QuantityInfo value
     * @param \macropage\ebaysdk\shopping\StructType\QuantityInfo $quantityInfo
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setQuantityInfo(\macropage\ebaysdk\shopping\StructType\QuantityInfo $quantityInfo = null)
    {
        $this->QuantityInfo = $quantityInfo;
        return $this;
    }
    /**
     * Get UnitInfo value
     * @return \macropage\ebaysdk\shopping\StructType\UnitInfoType|null
     */
    public function getUnitInfo()
    {
        return $this->UnitInfo;
    }
    /**
     * Set UnitInfo value
     * @param \macropage\ebaysdk\shopping\StructType\UnitInfoType $unitInfo
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setUnitInfo(\macropage\ebaysdk\shopping\StructType\UnitInfoType $unitInfo = null)
    {
        $this->UnitInfo = $unitInfo;
        return $this;
    }
    /**
     * Get GlobalShipping value
     * @return bool|null
     */
    public function getGlobalShipping()
    {
        return $this->GlobalShipping;
    }
    /**
     * Set GlobalShipping value
     * @param bool $globalShipping
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setGlobalShipping($globalShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($globalShipping) && !is_bool($globalShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($globalShipping)), __LINE__);
        }
        $this->GlobalShipping = $globalShipping;
        return $this;
    }
    /**
     * Get ConditionDescription value
     * @return string|null
     */
    public function getConditionDescription()
    {
        return $this->ConditionDescription;
    }
    /**
     * Set ConditionDescription value
     * @param string $conditionDescription
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setConditionDescription($conditionDescription = null)
    {
        // validation for constraint: string
        if (!is_null($conditionDescription) && !is_string($conditionDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conditionDescription)), __LINE__);
        }
        $this->ConditionDescription = $conditionDescription;
        return $this;
    }
    /**
     * Get ItemCompatibilityCount value
     * @return int|null
     */
    public function getItemCompatibilityCount()
    {
        return $this->ItemCompatibilityCount;
    }
    /**
     * Set ItemCompatibilityCount value
     * @param int $itemCompatibilityCount
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setItemCompatibilityCount($itemCompatibilityCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCompatibilityCount) && !is_numeric($itemCompatibilityCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemCompatibilityCount)), __LINE__);
        }
        $this->ItemCompatibilityCount = $itemCompatibilityCount;
        return $this;
    }
    /**
     * Get ItemCompatibilityList value
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType|null
     */
    public function getItemCompatibilityList()
    {
        return $this->ItemCompatibilityList;
    }
    /**
     * Set ItemCompatibilityList value
     * @param \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType $itemCompatibilityList
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setItemCompatibilityList(\macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType $itemCompatibilityList = null)
    {
        $this->ItemCompatibilityList = $itemCompatibilityList;
        return $this;
    }
    /**
     * Get QuantitySoldByPickupInStore value
     * @return int|null
     */
    public function getQuantitySoldByPickupInStore()
    {
        return $this->QuantitySoldByPickupInStore;
    }
    /**
     * Set QuantitySoldByPickupInStore value
     * @param int $quantitySoldByPickupInStore
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setQuantitySoldByPickupInStore($quantitySoldByPickupInStore = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySoldByPickupInStore) && !is_numeric($quantitySoldByPickupInStore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantitySoldByPickupInStore)), __LINE__);
        }
        $this->QuantitySoldByPickupInStore = $quantitySoldByPickupInStore;
        return $this;
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
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
     * Get NewBestOffer value
     * @return bool|null
     */
    public function getNewBestOffer()
    {
        return $this->NewBestOffer;
    }
    /**
     * Set NewBestOffer value
     * @param bool $newBestOffer
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setNewBestOffer($newBestOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($newBestOffer) && !is_bool($newBestOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($newBestOffer)), __LINE__);
        }
        $this->NewBestOffer = $newBestOffer;
        return $this;
    }
    /**
     * Get eBayNowEligible value
     * @return bool|null
     */
    public function getEBayNowEligible()
    {
        return $this->eBayNowEligible;
    }
    /**
     * Set eBayNowEligible value
     * @param bool $eBayNowEligible
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setEBayNowEligible($eBayNowEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayNowEligible) && !is_bool($eBayNowEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayNowEligible)), __LINE__);
        }
        $this->eBayNowEligible = $eBayNowEligible;
        return $this;
    }
    /**
     * Get eBayNowAvailable value
     * @return bool|null
     */
    public function getEBayNowAvailable()
    {
        return $this->eBayNowAvailable;
    }
    /**
     * Set eBayNowAvailable value
     * @param bool $eBayNowAvailable
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setEBayNowAvailable($eBayNowAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayNowAvailable) && !is_bool($eBayNowAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayNowAvailable)), __LINE__);
        }
        $this->eBayNowAvailable = $eBayNowAvailable;
        return $this;
    }
    /**
     * Get IgnoreQuantity value
     * @return bool|null
     */
    public function getIgnoreQuantity()
    {
        return $this->IgnoreQuantity;
    }
    /**
     * Set IgnoreQuantity value
     * @param bool $ignoreQuantity
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setIgnoreQuantity($ignoreQuantity = null)
    {
        // validation for constraint: boolean
        if (!is_null($ignoreQuantity) && !is_bool($ignoreQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ignoreQuantity)), __LINE__);
        }
        $this->IgnoreQuantity = $ignoreQuantity;
        return $this;
    }
    /**
     * Get AvailableForPickupDropOff value
     * @return bool|null
     */
    public function getAvailableForPickupDropOff()
    {
        return $this->AvailableForPickupDropOff;
    }
    /**
     * Set AvailableForPickupDropOff value
     * @param bool $availableForPickupDropOff
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setAvailableForPickupDropOff($availableForPickupDropOff = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableForPickupDropOff) && !is_bool($availableForPickupDropOff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($availableForPickupDropOff)), __LINE__);
        }
        $this->AvailableForPickupDropOff = $availableForPickupDropOff;
        return $this;
    }
    /**
     * Get EligibleForPickupDropOff value
     * @return bool|null
     */
    public function getEligibleForPickupDropOff()
    {
        return $this->EligibleForPickupDropOff;
    }
    /**
     * Set EligibleForPickupDropOff value
     * @param bool $eligibleForPickupDropOff
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
     */
    public function setEligibleForPickupDropOff($eligibleForPickupDropOff = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligibleForPickupDropOff) && !is_bool($eligibleForPickupDropOff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligibleForPickupDropOff)), __LINE__);
        }
        $this->EligibleForPickupDropOff = $eligibleForPickupDropOff;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\SimpleItemType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
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
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType
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
