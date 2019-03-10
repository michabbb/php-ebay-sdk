<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the data defining one item. A seller populates an object of this type at listing time with the definition of a new item. A seller also uses an object of this type to relist or revise an item. Calls that retrieve item data
 * (such as the <b>GetSellerList</b> call) return an object of this type, filled with the item's data.
 * @subpackage Structs
 */
class ItemType extends AbstractStructBase
{
    /**
     * The ApplicationData
     * Meta informations extracted from the WSDL
     * - documentation: Return custom, application-specific data associated with the item. The data you specify is stored by eBay with the item for your own reference, but it is not used by eBay in any way. Use <b>ApplicationData</b> to store special
     * information for yourself, such as a part number. For a SKU in an eBay.com listing, use the <b>SKU</b> element instead. To remove this value when revising or relisting an item, use <b>DeletedField</b>.
     * - minOccurs: 0
     * @var string
     */
    public $ApplicationData;
    /**
     * The AttributeSetArray
     * Meta informations extracted from the WSDL
     * - documentation: This field has been deprecated, and should no longer be used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType
     */
    public $AttributeSetArray;
    /**
     * The AttributeArray
     * Meta informations extracted from the WSDL
     * - documentation: This field has been deprecated, and should no longer be used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\AttributeArrayType
     */
    public $AttributeArray;
    /**
     * The LookupAttributeArray
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated, and should no longer be used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType
     */
    public $LookupAttributeArray;
    /**
     * The AutoPay
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, the seller requests immediate payment for the item. If <code>false</code> or not specified, immediate payment is not requested. (In responses, does not indicate whether the item is actually still a candidate for
     * purchase via immediate payment.)<br> <br> Only applicable to items listed on PayPal-enabled sites in categories that support immediate payment (see <b>AutoPayEnabled</b> in <b>GetCategories</b>), when seller has a Premier or Business PayPal account
     * (see <b>PayPalAccountType</b> in <b>GetUser</b>). <br> <br> To create an Immediate Payment listing, <b>AutoPay</b> must be <code>true</code>, <b>PayPalEmailAddress</b> must be a valid PayPal email address for the seller, and the only included
     * <b>PaymentMethods</b> value must be <code>PayPal</code>. <br/><br/> For a non-Immediate Payment listing, the <b>AutoPay</b> flag is not required since it defaults to <code>false</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $AutoPay;
    /**
     * The PaymentDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is used in an <b>Add/Revise/Relist/Verify</b> call if the seller is selling a motor vehicle, and is requiring an initial deposit on that vehicle. This container is only applicable for motor vehicle listings. <br><br>
     * This container will only be returned in 'Get' calls for motor vehicle listings where an initial deposit is required for that vehicle.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public $PaymentDetails;
    /**
     * The BiddingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Detailed information about a bid. For <b>GetMyeBayBuying</b>, returned as a self-closed element if no bids meet the request criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public $BiddingDetails;
    /**
     * The MotorsGermanySearchable
     * Meta informations extracted from the WSDL
     * - documentation: Listing upgrade that features the item in eBay search results on the mobile.de partner site. Applicable to eBay Germany motor vehicle listings only. <br> <br> If <code>true</code> in listing requests and responses, the seller is
     * purchasing or has purchased cross-promotional placement on the mobile.de site.
     * - minOccurs: 0
     * @var bool
     */
    public $MotorsGermanySearchable;
    /**
     * The BuyerProtection
     * Meta informations extracted from the WSDL
     * - documentation: Flag to indicate an item's eligibility for the PayPal Buyer Protection program. This field is only returned if <code>true</code>. If this field is not returned, the item is not eligible for PayPal Buyer Protection. For more
     * information on items that are eligible for PayPal Buyer Protection, see the <a href="https://pages.ebay.com/help/buy/paypal-buyer-protection.html#paypal">PayPal Buyer Protection</a> help page.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerProtection;
    /**
     * The BuyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is only applicable for auction listings. By specifying a 'Buy It Now' price, a seller is allowing prospective buyers the opportunity to purchase the item in the auction listing at this price immediately. When a buyer uses
     * the 'Buy It Now' option to purchase the item, the auction listing will end immediately. <br/><br/> By including this field and specifying a 'Buy It Now' price, the seller is enabling the 'Buy It Now' feature on the auction listing. If the seller
     * includes this field for any other listing type other than an auction, this field and its price will just be ignored. <br/><br/> The price in this field must be at least 30 percent higher than the starting bid price (which is specified in an Add call
     * through the <b>Item.StartPrice</b> field). Once a bid is made on an auction listing, and the bid meets or exceeds the <b>Item.ReservePrice</b> value (if set), the 'Buy It Now' option becomes unavailable, and this field will no longer be applicable.
     * If there is no Reserve Price, the first bid will nullify the 'Buy It Now' option. <br><br> Keep in mind that <b>GetItem</b> (and other 'Get' calls that retrieve the Item details) may still return the <b>BuyItNowPrice</b> field for an auction item
     * even if the 'Buy It Now' option is no longer available. Instead, a user should look for the <b>ListingDetails.BuyItNowAvailable</b> boolean field in the <b>GetItem</b> response to determine if the 'Buy It Now' option is still available for the
     * auction item. <br/><br/> <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which
     * limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they
     * can create and the remaining cumulative value of these listings. These values are shown in the <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or
     * revise an item would result in the exceeding of these limits, the add item or revise item call will fail. These fields will only be returned if the seller is subject to seller limits. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $BuyItNowPrice;
    /**
     * The CategoryMappingAllowed
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Controls how eBay handles cases in which an ID specified in <b>PrimaryCategory</b> and/or <b>SecondaryCategory</b> no longer exists in the current category structure: If you pass a value of <code>true</code> in
     * <b>CategoryMappingAllowed</b>, eBay will look up the current ID that is mapped to the same category and use the new ID for the listing (if any). The new ID will be returned in the response as <b>CategoryID</b> (for the primary category) or
     * <b>Category2ID</b> (for the secondary category). If <b>CategoryMappingAllowed</b> is not set or contains a value of <code>false</code> (the default), an error will be returned if a selected category ID no longer exists.
     * - minOccurs: 0
     * @var bool
     */
    public $CategoryMappingAllowed;
    /**
     * The Charity
     * Meta informations extracted from the WSDL
     * - documentation: This container identifies the nonprofit organization that will benefit with a percentage of the proceeds from the sale of an item through an auction or fixed-price listing. Charity names and IDs can be found by going to <a
     * href="https://charity.ebay.com/charity-auctions/my-causes" target="_blank">eBay for Charity</a> page and doing a search for a charity registered with the PayPal Giving Fund. The donation percentage can be set in 5 percent increments from 10 percent
     * to 100 percent. If a benefitting charity is specified, the seller must also accept PayPal as a payment method for the item (see <b>Item.PaymentMethods</b>). <br><br> When it comes to revising an auction or fixed-price listing, you can add a
     * benefitting charity (as long as there is at least 12 hours left before end of listing/close of auction), but you cannot remove or change a nonprofit company once one is already established in the original listing. <br><br> <b>For Revise calls</b>:
     * The non-profit organization and donation percentage can now be modified in a Revise call as long as there are no active bids on an auction listing, or no pending Best Offers/Counter Offers on a listing. <br><br> This container will only be returned
     * in Get calls for listings that will benefit a nonprofit organization if the item sells.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityType
     */
    public $Charity;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - documentation: This two-digit enumeration value indicates the country of the seller's registration address. <b>CountryCodeType</b> defines the supported values. The <a
     * href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call can also be used (include the <b>DetailName</b> field and set its value to <b>CountryDetails</b>) to see the full list of supported country
     * codes. <br><br> In an Add/Revise/Relist/Verify call, this field is required.
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The CrossPromotion
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated, and should not longer be used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public $CrossPromotion;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - documentation: In an Add/Revise/Relist/Verify call, this required three-digit enumeration value defines the currency associated with the listing site. The item price and all costs passed in the call request will be using this currency. Similarly,
     * the listing fees and other cost-related data will be using this currency. Since the Trading API can only be used for a select number of eBay sites, only a subset of values are supporting when adding/revising/relisting an item. These supported values
     * are discussed in the top section of <b>CurrencyCodeType</b>. <br><br> In 'Get' calls, it is possible that any of the values in <b>CurrencyCodeType</b> may appear, as some cost-related fields will show the buyer's currency type.
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: The seller's description of the item. In listing requests, you can submit your description using CDATA if you want to use HTML or XML-reserved characters in the description. However, a seller can not use any active content in their
     * listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions. All active content will be blocked/removed from a listing. Removing/blocking active content will lead to faster load times of listings,
     * make listings more mobile-friendly, improve SEO performance, and lead to a more secure eBay Marketplace. For more tips on creating listings that are even more mobile-friendly, see this <a
     * href="https://pages.ebay.com/sell/itemdescription/mobilefriendlyguidelines.html" target="_blank">Best practices</a> document. <br><br> For more information about eBay phasing out active content, see this <a
     * href="https://pages.ebay.com/sellerinformation/news/fallupdate16/active-content.html" target="_blank">Seller Update</a> page. For more information about eBay's JavaScript/Active Content policy, see the <a
     * href="https://pages.ebay.com/help/policies/listing-javascript.html" target="_blank">JavaScript policy</a> page. <br><br> In the listing description, sellers are only allowed to provide links to product videos, freight shipping services, or other
     * legally required information, and when providing these links in the listing description, the secure 'https' protocol must be used instead of 'http'. In addition, any valid links to sites outside of eBay should use the <em>target="_blank"</em>
     * attribute in the <b>a href</b> tag so a new browser window will be loaded when the link is clicked instead of buyers being redirected off of eBay. For more information on using links in the listing description, see eBay's <a
     * href="http://pages.ebay.com/help/policies/listing-links.html" target="_blank">Links policy</a>. For more information about the stronger security standards that eBay is using, see the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-fall/marketplace-update.html#use-secure-https" "target=_blank">Use secure HTTPS for enhanced browser security</a> topic in the 2018 Fall Seller Update. The <a
     * href="https://developer.ebay.com/api-docs/sell/compliance/resources/listing_violation/methods/getListingViolations" target="_blank">getListingViolations</a> method of the Compliance API can be used to see if any of the seller's active listings are
     * not 'HTTPS' compliant. <br><br> If you embed pictures in the description (by using IMG tags) instead of using <b>PictureURL</b>, but you want a camera icon to appear in search and listing pages, specify the following null-image URL in the
     * <b>PictureURL</b> field: https://pics.ebay.com/aw/pics/dot_clear.gif. See <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Pictures-InListing.html">Working with Pictures in an Item Listing</a> in the eBay Features Guide.
     * <br><br> This field is conditionally required for all listings. The exception is when the seller specifies a product identifier, such as a GTIN or ePID, through the <b>ProductListingDetails</b> container and a product match is found in the eBay
     * product catalog. If a matching product is found in the eBay product catalog, the item description will be created automatically (as long as the <b>ProductListingDetails.IncludeeBayProductDetails</b> value is <code>true</code>). <br>
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DescriptionReviseMode
     * Meta informations extracted from the WSDL
     * - documentation: This field is conditionally required if the listing is being revised through a Revise call, and the <b>Item.Description</b> field is one of the fields being changed. The enumeration value passed in this field specifies whether the
     * text provided in the <b>Item.Description</b> field will prepend, append, or replace the existing text in the current <b>Item.Description</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $DescriptionReviseMode;
    /**
     * The Distance
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated, and should no longer be used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DistanceType
     */
    public $Distance;
    /**
     * The HitCounter
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether an optional hit counter is displayed on the item's listing page and, if so, what type. See <b>HitCounterCodeType</b> for specific values. <br/> Restriction: <HitCounter>HiddenStyle</HitCounter> is not enabled on the
     * Germany, Austria, Switzerland, or Poland sites.
     * - minOccurs: 0
     * @var string
     */
    public $HitCounter;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing. This identifier is generated by eBay and returned in the response of an Add call if an item is successfully listed. Once an item is successfully created, the <b>ItemID</b> cannot be
     * modified. <br> <br> <span class="tablenote"><b>Note:</b> Although we represent item IDs as strings in the schema, we recommend you store them as 64-bit signed integers. If you choose to store item IDs as strings, allocate at least 19 characters
     * (assuming decimal digits are used) to hold them. Your code should be prepared to handle IDs of up to 19 digits. </span> | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The ListingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Various details about a listing, some of which are calculated or derived after the item is listed. These include the start and end time, converted (localized) prices, and certain flags that indicate whether the seller specified
     * fields whose values are not visible to the requesting user. For <b>GetMyeBayBuying</b>, returned as a self-closed element if no listings meet the request criteria. <br/><br/> In an Add/Revise/Relist call, this container is used to set the Best Offer
     * Auto-Accept and Best Offer Auto-Decline threshold values.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingDetailsType
     */
    public $ListingDetails;
    /**
     * The ListingDesigner
     * Meta informations extracted from the WSDL
     * - documentation: Contains the detail data for the Listing Designer theme and template (if either are used), which can optionally be used to enhance the appearance of the description area of an item's description.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingDesignerType
     */
    public $ListingDesigner;
    /**
     * The ListingDuration
     * Meta informations extracted from the WSDL
     * - documentation: Describes the number of days the seller wants the listing to be active (available for bidding/buying). The duration specifies the seller's initial intent at listing time. <br/><br/> The end time for a listing is calculated by adding
     * the duration to the item's start time. If the listing ends early, the value of the listing duration does not change. When a listing's duration is changed, any related fees (e.g., 10-day fee) may be debited or credited (as applicable). <br><br> The
     * valid choice of values depends on the listing format (see <b>Item.ListingType</b>). For a list of valid values, call <b>GetCategoryFeatures</b> with <b>DetailLevel</b> set to <b>ReturnAll</b> and look for <b>ListingDurations</b> information. <br><br>
     * When you revise a listing, the duration cannot be reduced if it will result in ending the listing within 24 hours of the current date-time. You are only allowed to increase the duration of the listing if fewer than 2 hours have passed since you
     * initially listed the item and the listing has no bids. You can decrease the value of this field only if the listing has no bids (or no items have sold) and the listing does not end within 12 hours.
     * - minOccurs: 0
     * @var string
     */
    public $ListingDuration;
    /**
     * The ListingEnhancement
     * Meta informations extracted from the WSDL
     * - documentation: Describes listing upgrades that sellers can select for a fee, such as the <b>BoldTitle</b> upgrade. Also includes feature packs for saving on listing upgrades. See <a
     * href="https://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing Upgrades</a> in the eBay site help. <br><br> You cannot remove listing upgrades when you revise a listing. When you relist an item, use <b>DeletedField</b> to remove a
     * listing upgrades.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ListingEnhancement;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: The selling format of the eBay listing, such as auction (indicated with <code>Chinese</code> value), fixed-price (indicated with <code>FixedPriceItem</code> value), or classified ad (indicated with <code>AdType</code> value).
     * <br><br> If this field is not included in an <b>AddItem</b>, <b>AddItems</b>, <b>AddSellingManagerTemplate</b>, or <b>VerifyAddItem</b> call, the listing type defaults to auction <br><br> For <b>AddFixedPriceItem</b>, <b>RelistFixedPriceItem</b>, or
     * <b>VerifyAddFixedPriceItem</b> call, this field must be included and set to <code>FixedPriceItem</code>, since these calls only work with fixed-price listings. <br><br> This field is not applicable to Revise calls because the selling format of active
     * listings cannot be changed.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the geographical location of the item (along with the value in the <b>Country</b> field). When you revise a listing, you can add or change this value only if the listing has no bids (or no items have sold) and it does not
     * end within 12 hours. <br><br> If you do not specify <b>Location</b>, you must specify <b>Item.PostalCode</b>. If you specify a postal code, but do not specify a location, then the location is given a default value derived from the postal code.
     * <br><br> For the Classified Ad format for motors vehicle listings, the value provided in the <b>Location</b> field is used as item location only if the <b>SellerContactDetails.Street</b> and the <b>SellerContactDetails.Street2</b> are empty. Else,
     * the <b>SellerContactDetails.Street</b> and the <b>SellerContactDetails.Street2</b> will be used for item location. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The LotSize
     * Meta informations extracted from the WSDL
     * - documentation: A lot is a set of two or more similar items included in a single listing that must be purchased together in a single order line item. The <b>Item.LotSize</b> value is the number of items in the lot. This field is required if two or
     * more items are including in one listing. <br><br> Lots can be used for auction and fixed-price listings. Lot items can be listed only in lot-enabled categories. Call <b>GetCategories</b> to determine if a category supports lots. If the returned
     * <b>CategoryArray.Category.LSD</b> (<b>LotSize</b> Disabled) value is <code>true</code>, the category does not support lots. <br>
     * - minOccurs: 0
     * @var int
     */
    public $LotSize;
    /**
     * The PartnerCode
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PartnerCode;
    /**
     * The PartnerName
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PartnerName;
    /**
     * The PaymentMethods
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the item. For Add/Revise/Relist calls, at least one payment method must be specified. <br><br> Use <b>GetCategoryFeatures</b> to
     * determine the payment methods that are allowed for a category on a site. For example, the response data of <b>GetCategoryFeatures</b> will show that on the US site, most categories only allow electronic payments. Also use <b>GetCategoryFeatures</b>
     * to determine the default payment methods for a site. <br><br> Do not use <b>GeteBayDetails</b> to determine the payment methods for a site. <br><br> If you specify multiple <b>PaymentMethods</b> fields, the repeating fields must be contiguous. For
     * example, you can specify <b>PayPalEmailAddress</b> after a list of repeating <b>PaymentMethods</b> fields, but not between them:<br> <br> <code> &lt;PaymentMethods&gt;VisaMC&lt;/PaymentMethods&gt;<br>
     * &lt;PaymentMethods&gt;PayPal&lt;/PaymentMethods&gt;<br> &lt;PayPalEmailAddress&gt;mypaypalemail@ebay.com&lt;/PayPalEmailAddress&gt; </code> <br><br> In general, if you separate repeating instances of a field, the results will be unpredictable. This
     * rule applies to all repeating fields (<code>maxOccurs="unbounded"</code> or greater than 1) in the schema. See <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Basics/Call-APISchema.html#OverviewoftheAPISchema">Overview of the API
     * Schema</a> in the eBay Features Guide. <br> <br> <span class="tablenote"><b>Note:</b> Required or allowed payment methods vary by site and category. Refer to <a
     * href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-PaymentMethod.html"> Determining the Payment Methods Allowed for a Category</a> in the eBay Features Guide to help you determine which payment methods you are required
     * or allowed to specify. </span><br> Payment methods are not applicable to any classified ad listings, as any agreement and payment is handled off of the eBay platform. <br> <br> <b>For <b>ReviseItem</b> and <b>RelistItem</b> only:</b> A listing must
     * have at least one valid payment method. When you revise or relist an item and you specify a payment method that is invalid for the target site, eBay ignores the invalid payment method, applies the other valid changes, and returns a warning to
     * indicate that the invalid payment method was ignored. <br/><br/> If multiple payment methods were invalid, the warning indicates that they were all ignored. If you modify the listing so that it includes no valid payment methods, an error is returned.
     * This situation could occur when the seller removes all valid payment methods or when all the payment methods specified for the item are no longer valid on the target site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentMethods;
    /**
     * The PayPalEmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: Valid PayPal email address for the PayPal account that the seller will use if they offer PayPal as a payment method for the listing. eBay uses this to identify the correct PayPal account when the buyer pays via PayPal during the
     * checkout process. (As a seller can have more than one PayPal account, you cannot necessarily rely on PayPal account data returned from <b>GetUser</b> for details about the account associated with the PayPal email address that the seller
     * specifies.)<br> <br> Required if seller has chosen PayPal as a payment method (<b>PaymentMethods</b>) for the listing.<br> <br> For digital listings, the seller needs to use an email address that is associated with a PayPal Premier or PayPal business
     * account. <br> <br> <b>For ReviseItem and RelistItem only:</b> To remove this value when you revise or relist an item, use <b>DeletedField</b>. When you revise a listing, if the listing has bids (or items have been sold) or it ends within 12 hours,
     * you can add <b>PayPalEmailAddress</b>, but you cannot remove it.<br> <br> Not applicable to eBay Motors listings.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalEmailAddress;
    /**
     * The PrimaryCategory
     * Meta informations extracted from the WSDL
     * - documentation: This container is used in an Add/Revise/Relist call to set the primary listing category. This field is conditionally required in an Add call unless the seller successfully uses the <b>ProductListingDetails</b> container to find an
     * eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing category, and stock photo defined in the catalog product is used to create the
     * listing.<br> <br> If you do not know the appropriate eBay category for your product, you can use the <b>GetSuggestedCategories</b> call. Once you know your category, and want to know which listing features it supports, you can use the
     * <b>GetCategoryFeatures</b> call. To discover if the category requires or recommends GTIN types and other item specifics, you can use the <b>GetCategorySpecifics</b> call. <br> <br> If you do use an eBay catalog product, it is advised that you do not
     * include this field, as any primary category ID you specify in this field may get dropped if this category is different than the primary category defined in the eBay catalog product. <br> <br> <b>For ReviseItem only:</b> When revising a listing, you
     * can change the primary category only if an auction listing has no bids or a multiple-quantity, fixed-price listing has no sales, and the listing does not end within 12 hours. If you change the listing category, any Item Specifics that were previously
     * specified may be dropped from the listing if they aren't valid for the new category. <br> <br> When you list an event ticket on the US site, you must specify one of the leaf categories under the Tickets & Experiences meta category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public $PrimaryCategory;
    /**
     * The ProductListingDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to provide one or more product identifiers for a product, and if desired by the seller, or required by eBay, the product can be matched to an eBay Catalog product. If a seller's product is matched to an eBay
     * Catalog product, the product details associated with that catalog product will be prefilled for the listing. Product details defined for a catalog product include the product title, product description, product aspects, and stock image(s) of the
     * product. <br> <br> In some eBay categories, one or more product identifier types (e.g. UPC or ISBN) may be required, but the category may not have any eBay Catalog products defined, or the category does not allow listings to be created using a
     * catalog product. To see if an eBay category supports/requires an eBay Catalog product, use the <b>GetCategoryFeatures</b> call and look for the value returned for the <b>Category.ProductCreationEnabled</b> field. Additionally, the user should also be
     * looking for the values returned in the <b>Category.EANEnabled</b>, <b>Category.ISBNEnabled</b>, and <b>Category.UPCEnabled</b> fields to see if these product identifier types are supported/required. Note that the <b>GetCategorySpecifics</b> call can
     * also be used to retrieve supported/required product identifier types. <br> <br> <span class="tablenote"><b>Note:</b> In May 2018, eBay (US, UK, AU, and CA-EN sites) started requiring that eBay catalog products be used for some product brands in
     * specific eBay categories. This requirement will be further expanded later in 2018. For more information on the categories/product brands affected by this project, see the <a
     * href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_playbook_intro.html" target="_blank">Product-Based Shopping Experience Playbook</a>. If a product identifier type is required, the corresponding field must be used, even if the
     * seller is not interested in finding an eBay catalog product match. A large percentage of eBay US categories require one or more product identifier types when listing an item. See the <a
     * href="http://pages.ebay.com/sell/item_specifics/product_identifiers.html" target="_blank">Structured Data - Product Identifiers</a> help page for more information on which eBay US categories require which product identifier types. If known, an ePID
     * (specified through the <b>ProductReferenceID</b> field) is always the best bet to find an eBay catalog product match, although an <b>EAN</b>, <b>ISBN</b>, <b>UPC</b>, or Brand/MPN pair can also be used in an attempt to find a catalog product match.
     * If a Brand/MPN pair is required for the product, these values must be input through the <b>BrandMPN</b> container. </span> <br> When you use <b>ProductListingDetails</b>, in an Add/Revise/Relist call, you must specify at least one GTIN, a
     * <b>ProductReferenceID</b> (also known as an ePID), a Brand/MPN pair, or <b>TicketListingDetails</b>. If you specify more than one GTIN value, eBay uses the first one that matches a product in eBay's catalog. <br> <br> <b>For ReviseItem and RelistItem
     * only:</b> When you revise a listing, if it has bids or it ends within 12 hours, you cannot change the product identifier and you cannot remove existing product listing details data. However, you can change or add preferences such as
     * <b>IncludeStockPhotoURL</b>, <b>UseStockPhotoURLAsGallery</b>, and <b>IncludePrefilledItemInformation</b>. To delete all catalog data when you revise or relist an item, specify Item.ProductListingDetails in <b>DeletedField</b> and don't pass
     * <b>ProductListingDetails</b> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public $ProductListingDetails;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: <b>For <b>AddItem</b> family of calls:</b> The <b>Quantity</b> value for auction listings must always be <code>1</code>. For a fixed-price listing, the <b>Quantity</b> value indicates the number of identical items the seller has
     * available for sale in the listing. If variations are specified in <b>AddFixedPriceItem</b> or <b> VerifyAddFixedPriceItem</b>, the <b>Item.Quantity</b> is not required since the quantity of variations is specified in <b>Variation.Quantity</b>
     * instead. See the <a href="https://pages.ebay.com/help/sell/listing-variations.html">Creating a listing with variations</a> eBay Help page for more information on variations. <br><br> <b>For ReviseItem and ReviseFixedPriceItem:</b> This value can only
     * be changed for a fixed-price listing with no variations. The quantity of variations is controlled in the <b>Variation.Quantity</b> field and the <b>Item.Quantity</b> value for an auction listing should always be <code>1</code>. <br><br> <b>For
     * RelistItem and RelistFixedPriceItem:</b> Like most fields, when you use <b>RelistItem</b> or <b>RelistFixedPriceItem</b>, <b>Quantity</b> retains its original value unless you specifically change it. This means that the item is relisted with the
     * value that was already in <b>Quantity</b>, not with the remaining quantity available. For example, if the original <b>Quantity</b> value was <code>10</code>, and three items have been sold, eBay sets the relisted item's <b>Quantity</b> to
     * <code>10</code> by default, and not <code>7</code>. So, we strongly recommend that you always set <b>Quantity</b> to the correct value (your actual quantity available) in your relist requests.<br> <br> When eBay auto-renews a GTC listing
     * (<b>ListingDuration</b> = <b>GTC</b>) on your behalf, eBay relists with correct quantity available. <br> <br> <b>For GetSellerEvents:</b> <b>Quantity</b> is only returned for listings where item quantity is greater than 1. <br><br> <b>For GetItem and
     * related calls:</b> This is the total of the number of items available for sale plus the quantity already sold. To determine the number of items available, subtract <b>SellingStatus.QuantitySold</b> from this value. <br><br> <b>For order line item
     * calls with variations:</b> In <b>GetItemTransactions</b>, <b>Item.Quantity</b> is the same as <b>GetItem</b> (the total quantity across all variations). In <b>GetSellerTransactions</b>, <b>Transaction.Item.Quantity</b> is the total quantity of the
     * applicable variation (quantity available plus quantity sold). <br> <br> <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a
     * href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to
     * these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the
     * <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call
     * will fail. These fields will only be returned if the seller is subject to seller limits. </span>
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The PrivateNotes
     * Meta informations extracted from the WSDL
     * - documentation: A note that a user makes on an item from their My eBay account. <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b> return this field, and only if you pass in the <b>IncludeNotes</b> field in the request, and set its value to
     * <b>true</b>. This field will only be returned if set for an item, and only returned to the user who created the note. <br><br> Not supported as input in <b>ReviseItem</b>. Use <b>SetUserNotes</b> instead. <br><br> <b>For GetMyeBayBuying</b> In
     * <b>WatchList</b>, notes for variations are only returned at the Item level, not the variation level. They are only set if you specified <b>ItemID</b> (if no purchases) or <b>ItemID</b> and <b>VariationSpecifics</b> (if there are purchases) in
     * <b>SetUserNotes</b> (or selected the equivalent in the My eBay UI on the site). <br><br> In <b>WonList</b>, notes for variations are only returned at the Item level, not the variation level. They are only set if you specified <b>ItemID</b> and
     * <b>TransactionID</b> in <b>SetUserNotes</b> (or selected the equivalent in the My eBay UI on the site).
     * - minOccurs: 0
     * @var string
     */
    public $PrivateNotes;
    /**
     * The RegionID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $RegionID;
    /**
     * The RelistLink
     * Meta informations extracted from the WSDL
     * - documentation: Applicable only to relisting an item. If true, creates a link in the item's old listing for the item that points to the new relist page, which accommodates users who might still look for the item under its old item ID.
     * - minOccurs: 0
     * @var bool
     */
    public $RelistLink;
    /**
     * The ReservePrice
     * Meta informations extracted from the WSDL
     * - documentation: The lowest price at which the seller is willing to sell an auction item. (<b>StartPrice</b> must be lower than <b>ReservePrice</b> .) Not all categories support a Reserve Price. Use <b>GetCategories</b> to see if a category supports
     * a Reserve Price. In calls that retrieve item data, the <b>ReservePrice</b> field will only be returned to the auction item's seller, and only if a Reserve Price has been set up. A Reserve Price is not applicable to fixed-price or classified ad
     * listings.<br> <br> You can remove the Reserve price of a US eBay Motors listing if the category allows it, the current Reserve Price has not been met, and the Reserve Price is at least $2.00 more than the current high bid. In this case, if the item
     * has bids, the Reserve Price is set to $1.00 over the current high bid. The next bid meets the Reserve Price and wins. See <i>Fees Overview</i> below for information about fee credits that may be available when the Reserve Price is removed for a
     * Motors listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ReservePrice;
    /**
     * The ReviseStatus
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned if a listing has been revised in any way since it first became active. One or more boolean fields will be returned under this container based on the type of revision(s) that occured, including a general
     * revision, a price change, or a feature added or removed.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReviseStatusType
     */
    public $ReviseStatus;
    /**
     * The ScheduleTime
     * Meta informations extracted from the WSDL
     * - documentation: Allows the user to specify a time in the future that the listing becomes active on eBay. To schedule the listing start time, specify a time in the future in GMT format. In <b>GetItem</b> and related calls, the scheduled time is
     * returned in <b>StartTime</b>. For <b>ReviseItem</b>, you can modify this value if the currently scheduled start time is in the future (listing has yet to go live). <br><br> When you schedule a start time, the start time is randomized within 15-minute
     * intervals. Randomized start times applies to the following sites: <br> <code>AT, BEFR, BENL, CH, DE, ES, FR, IE, IT, NL, PL, UK</code> <br><br> Also see the following article in the Knowledge Base: <a href=
     * "https://ebaydts.com/eBayKBDetails?KBid=1473" >Why scheduled time is sometimes getting reset</a>.
     * - minOccurs: 0
     * @var string
     */
    public $ScheduleTime;
    /**
     * The SecondaryCategory
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifer for a secondary category. This field is only applicable if the seller decides to list the item under two categories. <br> <br> You cannot list US eBay Motors vehicles in two categories. However, you can list
     * Parts & Accessories in two categories. The Final Value Fee is based on the primary category in which the item is listed. Furthermore, you can list the same item in an eBay Motors Parts & Accessories category and in an eligible eBay category, as long
     * as the primary category is associated with the site on which you are listing. That is, the two categories can be a mix of Motors Parts & Accessories and eBay site categories. (Real Estate, Mature Audience (adult), and Business & Industrial categories
     * are not eligible for listing in two categories in this manner.) For example, if you list on Motors, the primary category could be 6750 (eBay Motors > Parts & Accessories > Apparel & Merchandise > Motorcycle > Jackets & Leathers), and the secondary
     * category could be 57988 (eBay > Clothing, Shoes > Accessories > Men's Clothing > Outerwear). If you list on the main eBay site, the primary category could be 57988 and the secondary category could be 6750. <br> <br> If eBay has designated a category
     * as a value category (see ValueCategory in <b>GetCategoryFeatures</b>), items in that category cannot be listed in two categories. For example, if your <b>AddItem</b> request includes a primary or secondary category that is a value category, then eBay
     * drops <b>SecondaryCategory</b> and lists the item with only the <b>PrimaryCategory</b> you selected. Also, if the listing request includes item specifics (in <b>ItemSpecifics</b>) that are associated with <b>SecondaryCategory</b>, eBay drops those
     * values when we drop <b>SecondaryCategory</b>. (The same logic is used if you revise an existing listing to add a secondary category or to change one of the categories: If either the primary or secondary category is a value category, eBay drops the
     * secondary category from your request.)<br> <br> To remove this value when relisting an item, use <b>DeletedField</b>. <br><br> <b>For ReviseItem only:</b> When revising a listing within 12 hours of the listing's scheduled end time, you can only add
     * or change the secondary category when an auction listing has no active bids or a multiple-quantity, fixed-price listing has no items sold. If you change the secondary category, any corresponding Item Specifics that were previously specified may be
     * dropped from the listing if they aren't valid for the category. <br> <br> <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction
     * listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing
     * has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public $SecondaryCategory;
    /**
     * The FreeAddedCategory
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier for a secondary category that eBay has added as a free promotion. You cannot add this yourself. This container is only returned if the item was listed in a single category and eBay added a free secondary
     * category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public $FreeAddedCategory;
    /**
     * The Seller
     * Meta informations extracted from the WSDL
     * - documentation: Container for information about this listing's seller. <br><br> Returned by <b>GetItemsAwaitingFeedback</b> if Buyer is making the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType
     */
    public $Seller;
    /**
     * The SellingStatus
     * Meta informations extracted from the WSDL
     * - documentation: Various details about the current status of the listing, such as the current number of bids, the current high bidder, quantity sold, current price, and listing status.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingStatusType
     */
    public $SellingStatus;
    /**
     * The ShippingDetails
     * Meta informations extracted from the WSDL
     * - documentation: The shipping-related details for an order, including flat and calculated shipping costs and shipping insurance costs.<br> <br> New users who list their first items in selected categories on the US site must specify at least one
     * domestic shipping service. This applies to a category if <b>GetCategoryFeatures</b> returns <code>true</code> for <b>Category.ShippingTermsRequired</b>. <br> <br> For multi-quantity, fixed-price listings, a seller can revise all shipping details of
     * the listing (except for sales tax and for shipping type of Freight) for all unsold items. This applies to both domestic and international shipping. Checkout is not affected for those who bought items prior to the seller's shipping changes&#8212;the
     * shipping details that were in effect at the time of purchase are used for that buyer at the time of checkout.<br> <br> Shipping details are not applicable to any classified ad listings, as shipping/delivery/pickup is handled by the buyer and seller
     * off of the eBay platform. <br> <br><b>GetMyeBayBuying, GetMyeBaySelling</b>: <b>ShippingDetails</b> is not returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The ShipToLocations
     * Meta informations extracted from the WSDL
     * - documentation: An international location or region to which the seller is willing to ship, regardless of shipping service. The country of the listing site is added by eBay. Use <b>GeteBayDetails</b> with a <b>DetailName</b> of
     * <b>ShippingLocationDetails</b> to determine which international locations are valid for the site. Omit <b>ShipToLocations</b> if you want to ship only within the country of the listing site. To state that you do not wish to ship at all, set
     * <b>ShipToLocations</b> to <code>None</code>. <b>ReviseItem</b> can add a <b>ShipToLocations</b>. On output, <b>ShipToLocations</b> is the collection of all input item-level <b>ShipToLocations</b> plus international shipping service-level
     * ShipToLocation values. <br><br> If you have specified a region to which you will ship (such as Asia), you can use <b>ExcludeShipToLocation</b> to exclude certain countries within that region to where you will not ship (such as Afghanistan).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShipToLocations;
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - documentation: The name of the site on which the item is listed. The listing site affects the business logic and validation rules that are applied to the request, which in turn affect the values that are returned in the response, as well as values
     * that appear on the eBay site. For example, the listing site can affect the validation of <b>Category</b> in listing requests, international business seller requirements, the values of converted (localized) prices in responses, the item-related time
     * stamps that are displayed on the eBay site, the visibility of the item in some types of searches (e.g., <b>GetCategoryListings</b>), and other information. In some cases, the rules are determined by a combination of the site, the user's registration
     * address, and other information. You cannot change the site when you revise a listing.<br> <br> When you specify <b>Item.Site</b> in <b>AddItem</b> or <b>AddFixedPriceItem</b>, it must be consistent with the numeric site ID that you specify in the
     * request URL (for the SOAP API) or the <b>X-EBAY- API-SITEID</b> header (for the XML API).
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The StartPrice
     * Meta informations extracted from the WSDL
     * - documentation: The original price of the item at listing or re-listing time. If this value changes when the item is revised, the new value becomes the original price. <br><br> <b>For auction listings:</b> Competitive bidding starts at this value.
     * Once at least one bid has been placed, <b>StartPrice</b> remains the same but <b>CurrentPrice</b> is incremented to the amount of each succeeding bid. If <b>ReservePrice</b> is also specified, the value of <b>StartPrice</b> must be lower than the
     * value of <b>ReservePrice</b>. <br><br> <b>For input on fixed-price listings (<b>FixedPriceItem</b>): </b> This is the constant price at which a buyer may purchase the item. <br><br> <b>GetMyeBaySelling</b> does not return <b>Item.StartPrice</b> for
     * fixed price items&#8212;it returns <b>Item.SellingStatus.CurrentPrice</b>. <br><br> <b>For AddFixedPriceItem and VerifyAddFixedPriceItem:</b> Required when no variations are specified. If variations are specified, use <b>Variation.StartPrice</b> for
     * each variation instead. <br><br> <b>For Revise calls:</b> If the <b>StartPrice</b> value for a fixed-price item is changed with a Revise call, the <b>MinimumBestOfferPrice</b> and <b>BestOfferAutoAcceptPrice</b> fields in the <b>ListingDetails</b>
     * container will be dropped (if set), basically turning off the Best Offer Auto Accept and/or Auto Decline features. If the seller wanted to reintroduce either of these Best Offer threshold values in the listing again, an additional Revise call would
     * have to be made, passing in the desired threshold values. <br><br> <span class="tablenote"><b>Note: </b> For the US site, new eBay sellers are subject to <a
     * href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Listing-Policies.html#SellerLimits">Seller Limits</a>, which limit the quantity of items that may be listed and/or the total cumulative value of these listings. While subject to
     * these selling limits, an eBay seller can use the <b>GetMyeBaySelling</b> call to retrieve both the remaining number of listings they can create and the remaining cumulative value of these listings. These values are shown in the
     * <b>Summary.QuantityLimitRemaining</b> and <b>Summary.AmountLimitRemaining</b> fields in the <b>GetMyeBaySelling</b> response. If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call
     * will fail. These fields will only be returned if the seller is subject to seller limits. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $StartPrice;
    /**
     * The Storefront
     * Meta informations extracted from the WSDL
     * - documentation: Contains information related to the item in the context of a seller's eBay Store. Applicable for auctions and fixed-price listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StorefrontType
     */
    public $Storefront;
    /**
     * The SubTitle
     * Meta informations extracted from the WSDL
     * - documentation: Subtitle to use in addition to the title. Provides more keywords when buyers search in titles and descriptions. You cannot use HTML in the Subtitle. (HTML characters will be interpreted literally as plain text.) If you pass any
     * value, this feature is applied (with applicable fees).<br> <br> When you revise a item, you can add, change, or remove the subtitle. <br>
     * - minOccurs: 0
     * @var string
     */
    public $SubTitle;
    /**
     * The TimeLeft
     * Meta informations extracted from the WSDL
     * - documentation: Time left before the listing ends. The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). See Data Types in the Trading API Guide for information about this format. For ended listings, the time left is PT0S
     * (zero seconds).
     * - minOccurs: 0
     * @var string
     */
    public $TimeLeft;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to specify the title of the listing. This field is conditionally required in an Add call unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When
     * the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, and stock photo defined in the catalog product are used to create the listing. <br> <br> You cannot use HTML or
     * JavaScript in the Title. (HTML characters will be interpreted literally as plain text.)<br> <br> The listing title can only be changed if the active listing has yet to have any bids or sales, and the listing does not end within 12 hours. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The UUID
     * Meta informations extracted from the WSDL
     * - documentation: Universally unique constraint tag. Use <b>UUID</b> to ensure that you only list a particular item once, particularly if you are listing many items at once. If you add an item and do not get a response, resend the request with the
     * same <b>UUID</b>. If the item was successfully listed the first time, you will receive an error message for trying to use a <b>UUID</b> that you have already used. The error will also include the item ID for the duplicated item and a boolean value
     * indicating whether the duplicate <b>UUID</b> was sent by the same application. <br><br> We recommend you use <b>Item.UUID</b> with calls that add item objects (for example, <b>AddItem</b> and <b>RelistItem</b>). For calls that modify an existing
     * item, such as ReviseItem, use InvocationID instead. <br><br> The <b>UUID</b> can only contain digits from 0-9 and letters from A-F and must be 32 characters long. The <b>UUID</b> value must be unique across all item listings on all sites. <br> |
     * Specifies a universally unique identifier for an item. This is used to ensure that you only list a particular item once, particularly if you are listing many items at once. The identifier can contain only digits from 0-9 and letters from A-F. The
     * identifier must be 32 characters long. For example, 9CEBD9A6825644EC8D06C436D6CF494B.
     * - minOccurs: 0
     * @var string
     */
    public $UUID;
    /**
     * The VATDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container for eBay's VAT (value-added-tax) features. A business seller can choose to offer an item exclusively to bidders and buyers that also represent businesses. Only applicable when the item is listed in a B2B-enabled category
     * (on a site that supports B2B business features).<br> <br> <span class="tablenote"><strong>Note:</strong> The India site (Global ID 203) does not accept VAT values in item listings. If you submit an item to the India site with a VAT value, eBay
     * generates a warning message that indicates the listing was accepted, but the VAT value was removed. To include the VAT, relist the item with a Price value that includes the VAT. Sellers are solely responsible for compliance relating to tax
     * legislation in India. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VATDetailsType
     */
    public $VATDetails;
    /**
     * The SellerVacationNote
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned if the seller of the item is currently on vacation and that seller has turned on the Store vacation setting, and has included a message to display to shoppers who visit the eBay store. If the seller turns on
     * the Store vacation setting, the listing will be hidden from search result pages. <br/><br/> Store vacation settings, including this note, are set through the <b>Messages</b> tab in My eBay, or this message can also be set through the
     * <b>SetStorePreferences</b> call. <br/><br/> The Store vacation setting is only applicable for sellers with eBay stores.
     * - minOccurs: 0
     * @var string
     */
    public $SellerVacationNote;
    /**
     * The WatchCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of watches placed on this item from buyers' My eBay accounts. Specify <b>IncludeWatchCount</b> as <code>true</code> in the request. Returned by <b>GetMyeBaySelling</b> only if greater than 0.
     * - minOccurs: 0
     * @var int
     */
    public $WatchCount;
    /**
     * The HitCount
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the number of page views for the listing. This number is calculated by eBay and is returned in 'Get' calls if the <b>HitCounter</b> value is set to <code>BasicStyle</code>, <code>RetroStyle</code>, or
     * <code>HiddenStyle</code>. If the <b>HitCounter</b> value is set to <code>HiddenStyle</code> or <code>NoHitCounter</code>, <b>HitCount</b> is only returned if the one making the call is the item's seller.
     * - minOccurs: 0
     * @var int
     */
    public $HitCount;
    /**
     * The DisableBuyerRequirements
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, all buyer requirements (from <b>Item.BuyerRequirementDetails</b> or Buyer requirements preferences in My eBay) are ignored. <br> <br> If <code>false</code> (or omitted): <b>Item.BuyerRequirementDetails</b> or
     * Buyer requirements preferences are used, with <b>Item.BuyerRequirementDetails</b> having the higher precedence. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $DisableBuyerRequirements;
    /**
     * The BestOfferDetails
     * Meta informations extracted from the WSDL
     * - documentation: <b>For Add/Revise/Relist/Verify calls</b>: This container is used to enable the Best Offer feature on a listing. Note that the Best Offer feature can be set for auction listings, but a seller can only use Best Offer or Buy It Now,
     * but not both. Once an auction listing receives a qualifying bid, the Best Offer feature will be turned off and any pending Best Offers or Counteroffers will no longer be valid. <br><br> For <b>GetItem</b> and other calls that retrieve item data, this
     * container will include the status (<b>GetMyeBayBuying</b> only) and dollar amount of the latest Best Offer on a fixed-price listing, and the number of Best Offers received for the fixed-price listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public $BestOfferDetails;
    /**
     * The LocationDefaulted
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, eBay provided a central location as a result of the user not specifying a location. This typically occurs when the seller specifies <b>PostalCode</b> without Location.
     * - minOccurs: 0
     * @var bool
     */
    public $LocationDefaulted;
    /**
     * The UseTaxTable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the seller's tax table is to be used when applying and calculating sales tax for an order line item. A sales tax table can be created programmatically using the <b>SetTaxTable</b> call, or it can be created manually
     * in My eBay's Payment Preferences. If <b>UseTaxTable</b> is set to <code>true</code>, the values contained in the seller's sales tax table will supersede the values contained in the <b>Item.ShippingDetails.SalesTax</b> container (if included in the
     * request).
     * - minOccurs: 0
     * @var bool
     */
    public $UseTaxTable;
    /**
     * The GetItFast
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $GetItFast;
    /**
     * The BuyerResponsibleForShipping
     * Meta informations extracted from the WSDL
     * - documentation: Applicable for listings in vehicle categories on the US eBay Motors site and eBay Canada site. (No business effect if specified for other categories or sites, as the Web site will not display the information to buyers.) <b></b> <ul>
     * <li>If <code>true</code>, the buyer is responsible for vehicle pickup or shipping. </li> <li>If <code>false</code>, specify vehicle shipping arrangements in the item description. (The description can also include vehicle shipping arrangements when
     * this value is <code>true</code>.) </li> </ul> <b></b> If the item has bids or ends within 12 hours, you cannot modify this flag. Do not specify <b>ShippingDetails.ShippingServiceOptions</b> for vehicle listings. <br><br> If <code>true</code> and the
     * listing is on the US eBay Motors site, and you want the listing to be visible on the eBay Canada site, set <b>Item.ShipToLocations</b> to CA. <br><br> If <code>true</code> and the listing is on the eBay Canada site, and you want your listing to be
     * visible on the US eBay Motors site, set <b>Item.ShipToLocations</b> to US. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $BuyerResponsibleForShipping;
    /**
     * The LimitedWarrantyEligible
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $LimitedWarrantyEligible;
    /**
     * The eBayNotes
     * Meta informations extracted from the WSDL
     * - documentation: Returns a note from eBay displayed below items in the user's My eBay account.
     * - minOccurs: 0
     * @var string
     */
    public $eBayNotes;
    /**
     * The QuestionCount
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of questions buyers have posted about the item. Returned only if greater than 0.
     * - minOccurs: 0
     * @var int
     */
    public $QuestionCount;
    /**
     * The Relisted
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the item in this listing was relisted. When an item is relisted, a brand new Item ID value is automatically created by eBay. This field is only returned for an original listing
     * whose item has been relisted, so a <code>false</code> value should never get returned. <span class="tablenote"><b>Note: </b> A new listing will not return this field. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $Relisted;
    /**
     * The QuantityAvailable
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the quantity of an item that is still available for purchase in a multiple-quantity, fixed-price listing. This field is not applicable to auction listings.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityAvailable;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: A SKU (Stock Keeping Unit) value is a seller-defined identifier for a product. Each product within a seller's inventory should be unique. Most large-volume sellers use SKUs, but eBay only requires a SKU value if the
     * <b>InventoryTrackingMethod</b> field is included in an <b>AddFixedPriceItem</b> call and its value is set to <code>SKU</code>. Setting the <b>InventoryTrackingMethod</b> field to <code>SKU</code> allows the seller to use a SKU value instead of an
     * <b>ItemID</b> value as a unique identifier in calls such as <b>GetItem</b> and <b>ReviseInventoryStatus</b> <br><br> A seller can specify a SKU when listing an item with <b>AddItem</b> and related calls. eBay preserves the SKU on the item, enabling
     * you to obtain it before and after an order line item is created. (<b>SKU</b> is recommended as an alternative to <b>ApplicationData</b>.) <br> <br> If both <b>ItemID</b> and <b>SKU</b> are specified in calls that support the use of SKU as a unique
     * identifier, the <b>ItemID</b> value takes precedence.<br> <br> If a seller wants to use SKUs for multiple-variation listings, the SKU value for each product variation is actually specified at the variation level (Item.Variations.Variation.<b>SKU</b>)
     * field, and the Item.<b>SKU</b>) field should not be included in the call request. <br> <br> <span class="tablenote"><b>Note:</b> The eBay site cannot identify listings by SKU. For example, My eBay pages and Search pages all identify listings by item
     * ID. When a buyer contacts you via eBay's messaging functionality, eBay uses the item ID as the identifier. Buyer-focused APIs (like the Shopping API) also do not support SKU as an identifier. </span> <b>For revising and relisting only:</b> To remove
     * a SKU when you revise or relist an item, use <b>DeletedField</b>. (You cannot remove a SKU when <b>Item.InventoryTrackingMethod</b> is set to SKU.)<br> <br> For <b>GetItem</b>, <b>GetMyeBaySelling</b>, and other 'Get' call, the <b>SKU</b> value will
     * only be returned if defined for the listing. <br> | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields that reference this type.
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The SearchDetails
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SearchDetailsType
     */
    public $SearchDetails;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Postal code of the place where the item is located. This value is used for proximity searches. To remove this value when revising or relisting an item, use <b>DeletedField</b>. If you do not specify <b>PostalCode</b>, you must
     * specify <b>Item.Location</b>. If you specify <b>PostalCode</b>, but do not specify <b>Item.Location</b>, then <b>Item.Location</b> is given a default value derived from the postal code.
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The ShippingTermsInDescription
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether details about shipping costs and arrangements are specified in the item description.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingTermsInDescription;
    /**
     * The SellerInventoryID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> A <b>SellerInventoryID</b> value is only applicable to Half.com listings, and since the Half.com site has been shut down, this field is no longer applicable. </span> Unique identifier for a
     * Half.com item. Must be an alphanumeric value (with no symbols) that is unique across the seller's active (unsold) inventory on Half.com. For Half.com, you can specify either <b>ItemID</b> or <b>SellerInventoryID</b> in a <b>ReviseItem</b> request to
     * uniquely identify the listing. Only returned from <b>GetOrders</b> if the seller specified a value when the item was listed. You cannot revise this field. <br><br> Not applicable to eBay.com listings.
     * - minOccurs: 0
     * @var string
     */
    public $SellerInventoryID;
    /**
     * The PictureDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the data associated with photos within the listing. With most eBay sites and categories, a seller can add up to 12 photos to their listings free of charge. These photos can be hosted by eBay Picture
     * Services (EPS), or the seller can host pictures on a non-eBay server. If pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. <br/><br/> It is required that all listings have at least one picture. eBay
     * Motors listings can have up to 24 pictures.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public $PictureDetails;
    /**
     * The DispatchTimeMax
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. This time does not include the shipping time (the carrier's transit time). <br><br> <span
     * class="tablenote"><b>Note:</b> If the seller opts into the eBay Guaranteed Delivery feature and wants to make a listing eligible for eBay Guaranteed Delivery, the <b>DispatchTimeMax</b> value must be set to <code>0</code> or <code>1</code> (days) and
     * cumulative value of <b>DispatchTimeMax</b> plus the transit time of the shipping service (returned in <b>ShippingServiceDetails.ShippingTimeMax</b> field of <b>GeteBayDetails</b>) must be 3 business days or less to be eligible for this feature. See
     * the <a href="https://pages.ebay.com/seller-center/shipping/ebay-guaranteed-delivery.html" target="_blank">eBay Guaranteed Delivery</a> page in Seller Center for more information on this program. </span> <br> <b>For Add/Revise/Relist calls:</b>
     * Required for listings in certain categories when certain shipping services (with delivery) are offered. See <b>HandlingTimeEnabled</b> in <b>GetCategoryFeatures</b>.<br> <br> The seller sets this to a positive integer value corresponding to the
     * number of days. For a list of allowed values on each eBay site, use <b>DispatchTimeMaxDetails</b> in <b>GeteBayDetails</b>. (Typical values are <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, <code>5</code>, <code>10</code>,
     * <code>15</code>, or <code>20</code>, but this can vary by site and these may change over time.)<br> <br> Valid for flat and calculated shipping. Does not apply when there is no shipping, when it is local pickup only or it is freight shipping. For
     * example, when <b>ShippingService</b> = <code>Pickup</code> or <b>ShipToLocations</b> = <code>None</code>, then <b>DispatchTimeMax</b> is not required (or it can be <code>0</code>).<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales
     * and it ends within 12 hours, you can't change this value. If the listing is a GTC listing that has sales or ends within 12 hours (one or the other, but not both), you can add or change this value. If the listing has no bids or sales and more than 12
     * hours remain before the listing ends, you can add or change the dispatch (handling) time.<br> <br> <b>For GetItem:</b> <b>GetItem</b> returns <b>DispatchTimeMax</b> only when shipping service options are specified for the item and the seller
     * specified a dispatch time.
     * - minOccurs: 0
     * @var int
     */
    public $DispatchTimeMax;
    /**
     * The BestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. This information is returned in <b>BestOfferDetails</b>.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferEnabled;
    /**
     * The LocalListing
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalListing;
    /**
     * The SellerContactDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contact information for sellers using the Classified Ad format for eBay Motors vehicles categories. To remove seller contact information when revising or relisting an item, use <b>DeletedField</b>. The seller contact details for the
     * primary and secondary phone numbers cannot be deleted individually. <br><br> To provide City, State, and Zip code information in <b>SellerContactDetails</b> use the following field:<br> <b>Item.SellerContactDetails.Street2</b> <br><br> To delete the
     * secondary phone number, for example, you must delete all of the secondary phone fields:<br> <code>Item.SellerContactDetails.Phone2AreaOrCityCode<br> Item.SellerContactDetails.Phone2CountryCode<br> Item.SellerContactDetails.Phone2CountryPrefix<br>
     * Item.SellerContactDetails.Phone2LocalNumber </code>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $SellerContactDetails;
    /**
     * The TotalQuestionCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of questions asked about this item. Applies to eBay Motors Pro applications only.
     * - minOccurs: 0
     * @var int
     */
    public $TotalQuestionCount;
    /**
     * The ProxyItem
     * Meta informations extracted from the WSDL
     * - documentation: Some listings on the eBay platform originate from eBay affiliates. Depending on the relationship the affiliate has with eBay, there are times when the affiliate retains ownership of the listing. When this occurs the representation of
     * the listing on eBay is considered a proxy item. Proxy items can only be edited using API requests from the applications that originally listed them.
     * - minOccurs: 0
     * @var bool
     */
    public $ProxyItem;
    /**
     * The ExtendedSellerContactDetails
     * Meta informations extracted from the WSDL
     * - documentation: Extended contact information for sellers using the Classified Ad format. Specifies the days and hours when the seller can be contacted. To remove seller contact information when revising or relisting an item, use <b>DeletedField</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
     */
    public $ExtendedSellerContactDetails;
    /**
     * The LeadCount
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of leads (emails) buyers have posted about the item. You must be the seller of the item to retrieve the lead count.
     * - minOccurs: 0
     * @var int
     */
    public $LeadCount;
    /**
     * The NewLeadCount
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of new leads (unanswered emails) buyers have posted about the item.
     * - minOccurs: 0
     * @var int
     */
    public $NewLeadCount;
    /**
     * The ItemSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: A list of item specific <b>Name</b>/<b>Value</b> pairs that the seller provided for the item. (To retrieve mandatory and recommended item specifics for a category, use <b>GetCategorySpecifics</b>.) <br><br> In the <b>Add</b>,
     * <b>Relist</b>, <b>Revise</b>, and <b>Verify</b> families of calls, use this list to define custom item specifics. <br><br> <b>For ReviseItem only:</b> When you revise a listing, if the listing has bids and ends within 12 hours, you cannot change or
     * add item specifics. If the listing has bids but ends in more than 12 hours, you cannot change existing item specifics, but you can add item specifics that were not previously included. <br><br> If your item is in a catalog-enabled category, certain
     * <b>Name</b>/<b>Value</b> pairs will be accepted as product identifying information. The <b>Name</b> can be <code>Brand</code>, <code>MPN</code>, or a Global Trade Item Number (GTIN). GTINs are a set of globally recognized identifiers, including
     * <code>EAN</code>, <code>ISBN</code>, and <code>UPC</code>. However, the <b>Values</b> provided for these <b>Name</b>s must comply with eBay's constraints or they will not be recognized as product identifiers. The <b>Value</b> for Brand must be an
     * actual brand name (except that if the item is not branded, <b>Value</b> can be <code>Unbranded</code>.) The <b>Value</b> for Brand or MPN cannot contain only special characters (e.g. <code>%$*#@</code>). All GTINs must comply with international
     * formatting standards. For more details, see <a href="https://developer.ebay.com/devzone/guides/ebayfeatures/Development/ItemSpecifics-Listing.html" target="_blank">Listing with Custom Item Specifics</a>. <br><br> If the <b>ProductListingDetails</b>
     * container in an Add/Revise/Relist call is successfully used to find and use an eBay catalog product to create/revise listing, the seller cannot use Item Specifics name-value pairs that contradict the Item Specifics that are defined in the eBay
     * catalog product. <br><br> <span class="tablenote"><b>Note:</b> If the item is being listed in a Product-Based Shopping Experience (PBSE) category where an eBay Catalog product is being used, the seller should not pass in any item specifics that are
     * already defined in the eBay Catalog product. Sellers can make a <b>GetCategorySpecifics</b> call to see if the listing category supports any 'instance aspects', which can be thought of as item specifics that are unique to the specific item that is
     * being listed. Instance aspects are identified in the response by looking for a value of <code>Instance</code> in one or more <b>NameRecommendation.ValidationRules.aspectUsage</b> fields. Many PBSE categories now support the following instance
     * aspects: <em>Custom Bundle</em>, <em>Bundle Description</em>, <em>Modified Item</em>, and <em>Modification Description</em>. These instance aspects allow the seller to provide more information about product bundles or modified products in a
     * structured way. Depending on the category, there are other instance aspects as well. For more information about creating bundle listings or modified product listings in PBSE categories, see the <a
     * href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse-special-listings.html" target="_blank">Associating catalog products to special listings</a> topic in the PBSE Playbook. </span> <span class="tablenote"><b>Note:</b> To specify an
     * item's condition, use the <b>ConditionID</b> field instead of a condition item specific. Use <b>GetCategoryFeatures</b> to see which categories support <b>ConditionID</b> and to get a list of valid condition IDs. (If you specify <b>ConditionID</b>
     * and you also specify <b>Condition</b> as a custom item specific, eBay drops the condition item specific.) </span> <b>For GetItem</b>: This list is returned only when you specify <b>IncludeItemSpecifics</b> in the request (and the seller included
     * custom item specifics in their listing). <br><br> To delete all item specifics when you revise or relist, specify <b>Item.ItemSpecifics</b> in <b>DeletedField</b>, and don't pass <b>ItemSpecifics</b> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The GroupCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $GroupCategoryID;
    /**
     * The ClassifiedAdPayPerLeadFee
     * Meta informations extracted from the WSDL
     * - documentation: The email and phone lead fee for a pay-per-lead item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ClassifiedAdPayPerLeadFee;
    /**
     * The BidGroupItem
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $BidGroupItem;
    /**
     * The ApplyBuyerProtection
     * Meta informations extracted from the WSDL
     * - documentation: Different Buyer protection schemes and the various status associated with each one of them.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType
     */
    public $ApplyBuyerProtection;
    /**
     * The ListingSubtype2
     * Meta informations extracted from the WSDL
     * - documentation: Indicates a specific type of lead generation format listing, such as classified ad or local market best offer listing. Only applicable when <b>ListingType</b> = <b>LeadGeneration</b>. <br/><br/> <span class="tablenote"><b>Note:</b>
     * <b>ListingSubtype2</b> replaces the deprecated <b>ListingSubtype</b> field. If both are specified in a request, <b>ListingSubtype2</b> takes precedence. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ListingSubtype2;
    /**
     * The MechanicalCheckAccepted
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the seller allows the bidder to request mechanical inspection services from RAC. For the Car category listings on the UK site.
     * - minOccurs: 0
     * @var bool
     */
    public $MechanicalCheckAccepted;
    /**
     * The UpdateSellerInfo
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the following Business Seller fields have been updated for the item specified in the request: First Name, Last Name, Fax, Email Address, Additional Contact Information, Trade Registration Number, VAT Identification
     * Number.
     * - minOccurs: 0
     * @var bool
     */
    public $UpdateSellerInfo;
    /**
     * The UpdateReturnPolicy
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the Return Policy Details have been updated for the item specified in the request.
     * - minOccurs: 0
     * @var bool
     */
    public $UpdateReturnPolicy;
    /**
     * The ItemPolicyViolation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details of policy violations if the item was administratively canceled.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType
     */
    public $ItemPolicyViolation;
    /**
     * The CrossBorderTrade
     * Meta informations extracted from the WSDL
     * - documentation: This field is used by sellers who want their listing to be returned in the search results for other eBay sites. This feature is currently only supported by the US, UK, eBay Canada, and eBay Ireland sites. See <a href="
     * https://pages.ebay.com/help/sell/globalexposure.html">Getting exposure on international sites</a> for full requirements on using this feature. There is a small listing fee for each country specified as a Cross Border Trade country. <br><br> US
     * listings that offer shipping to Canada, North America, or worldwide are automatically returned on eBay.ca at no extra charge, so US listings that offer shipping to these locations do not need to specify Canada as a Cross Border Trade country.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CrossBorderTrade;
    /**
     * The BusinessSellerDetails
     * Meta informations extracted from the WSDL
     * - documentation: Returns the seller's information (in a business card format) if the seller's <b>SellerBusinessCodeType</b> is set to <code>Commercial</code>. This is only applicable for sites where Business Seller options are supported.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public $BusinessSellerDetails;
    /**
     * The BuyerGuaranteePrice
     * Meta informations extracted from the WSDL
     * - documentation: For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection coverage, offered for the item at the time of purchase. Details of coverage are in the following sections of the View Item page: the Buy Safely section
     * and the Payment Details section.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $BuyerGuaranteePrice;
    /**
     * The BuyerRequirementDetails
     * Meta informations extracted from the WSDL
     * - documentation: When this container is present in an <b>AddItem</b> or <b>AddFixedPriceItem</b> call, all buyer requirements for the resulting listing are set by this container. Furthermore, individual buyer requirements cannot be modified or added
     * when including this container in a <b>ReviseItem</b> call. The <b>ReviseItem</b> call needs to provide the entire set of buyer requirements to modify or add any of the requirements. <br/><br/> Unless otherwise specified, most buyer requirements are
     * only returned if the caller is the seller. All global My eBay Buyer Requirements are overridden by the contents of this container. This means that buyer requirements set in My eBay cannot be combined with buyer requirements included in this
     * container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
     */
    public $BuyerRequirementDetails;
    /**
     * The ReturnPolicy
     * Meta informations extracted from the WSDL
     * - documentation: Describes the seller's return policy. Most categories on most eBay sites require the seller to clearly specify whether or not returns are accepted (see <b>ReturnsAcceptedOption</b>). <br> <br> <b>For the <b>AddItem</b> family of
     * calls:</b> Required for most categories on most sites. Use <b>ReturnPolicyEnabled</b> in <b>GetCategoryFeatures</b> to determine which categories require this field. Also use <b>ReturnPolicyDetails</b> in <b>GeteBayDetails</b> to determine which
     * <b>ReturnPolicy</b> fields can be used on each site.<br> <br> eBay India (IN), Australia (AU), and US eBay Motors Parts and Accessories categories typically support but do not require a return policy. (However, we strongly recommend that you specify
     * a clear return policy whenever possible.)<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and it ends within 12 hours, you can't change the return policy details. If the listing is a GTC listing that has sales or ends within 12
     * hours (one or the other, but not both), you can add a return policy to the GTC listing (but you can't change return policy details if already present). If the listing has no bids or sales and more than 12 hours remain before the listing ends, you can
     * add or change the return policy. When you revise your return policy, you only need to specify the fields you want to add or change. You don't need to specify all the other <b>ReturnPolicy</b> fields again. The other fields will retain their existing
     * settings.<br> <br> <b>For the GetItem family of calls:</b> Only returned if the site you sent the request to supports the seller's return policy. Typically, the return policy details are only returned when the request is sent to the listing site.
     * <br><br> <span class="tablenote"><b>Note:</b> Currently, the <b>GeteBayDetails</b> call is used to retrieve return policy metadata. However, starting in September 2018, the <b>GetCategoryFeatures</b> call will start returning category-level metadata
     * for both domestic and international return policies, and developers should make plans to use that call for this metadata.</span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyType
     */
    public $ReturnPolicy;
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
     * The InventoryTrackingMethod
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether you prefer to track your eBay listings by eBay Item ID or by your own SKU. <br> <br> If a seller will be converting an existing eBay listing into the new Inventory model using the <b>bulkMigrateListings</b> call of
     * the <b>Inventory API</b>, the <b>InventoryTrackingMethod</b> value must be set to <code>ItemID</code> (default value), but the item must also have a SKU value (Item.<b>SKU</b> or Variation.<b>SKU</b>) associated with it. <b>For GetItem and related
     * calls</b>: Only returned when the value is <code>SKU</code>; not returned when the value is <code>ItemID</code>.
     * - minOccurs: 0
     * @var string
     */
    public $InventoryTrackingMethod;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the item can be paid for through a payment gateway (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then integrated merchant credit card (IMCC) is enabled for credit cards
     * because the seller has a payment gateway account. Therefore, if <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed
     * through a payment gateway account. A payment gateway account is used by sellers to accept online credit cards (Visa, MasterCard, American Express, and Discover).
     * - minOccurs: 0
     * @var bool
     */
    public $IntegratedMerchantCreditCardEnabled;
    /**
     * The Variations
     * Meta informations extracted from the WSDL
     * - documentation: Variations are multiple similar (but not identical) items in a single fixed-price listing. For example, a T-shirt listing could contain multiple items of the same brand that vary by color and size (like "Blue, Large" and "Black,
     * Medium"). Each variation specifies a combination of one of these colors and sizes. Each variation can have a different quantity and price. You can buy multiple items from one variation at the same time. (That is, one order line item can contain
     * multiple items from a single variation.) <br> <br> If you list in two categories, both categories must support listing with variations. See <b>VariationsEnabled</b> in <b>GetCategoryFeatures</b> to determine applicable categories.<br> <br> <b>For
     * ReviseFixedPriceItem and RelistFixedPriceItem:</b> Once a listing has been submitted with variations, you can't delete all the variations when you revise or relist the listing (because it would be considered a different listing). You also can't add
     * or change variation specifics (because they are unique identifiers). However, you can delete or replace individual variations as needed to match your current inventory. If a variation has no purchases, use the <b>Variation.Delete</b> field to delete
     * the variation. If it has inventory, set the Quantity to 0.<br> <br> As a best practice, if you want to revise multiple variations in the same listing at the same time (i.e., within a very short period), use a single <b>ReviseFixedPriceItem</b>
     * request and include all the variation revisions in the same request. If your application design requires you to revise each variation individually, then avoid using multiple parallel threads. Instead, use a serial, synchronous process. That is, wait
     * until each revision has been processed by eBay before submitting the next revision request for another variation in the same listing.<br> <br> <b>For GetItem and related calls</b> Only returned when a listing has variations. <br><br> <b>For
     * GetSellerList:</b> Only returned when a listing has variations, <b>IncludeVariations</b> was set to <code>true</code> in the request, the <b>DetailLevel</b> was set to <b>ReturnAll</b>, and an applicable pagination value and time range were
     * specified.<br> <br> <b>For GetItemTransactions</b> Only returned in Item when a listing has variations and <b>IncludeVariations</b> was set to <code>true</code> in the request. (Also see <b>Variation</b> returned in <b>Transaction</b> for information
     * about which variation was actually purchased.) <br> <br> <b>For GetSellerEvents, GetMyeBayBuying, and GetMyeBaySelling:</b> Only returned when a listing has variations and <b>HideVariations</b> was set to <code>false</code> or not specified in the
     * request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationsType
     */
    public $Variations;
    /**
     * The ItemCompatibilityList
     * Meta informations extracted from the WSDL
     * - documentation: A list of parts compatibility information specified as name and value pairs. Describes an assembly with which a part is compatible (i.e., compatibility by application). For example, to specify a part's compatibility with a vehicle,
     * the name (search name) would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values would describe the specific vehicle, such as a 2006 Honda Accord. Use the <b>Product Metadata API</b> to retrieve valid
     * search names and corresponding values. <br><br> <b>For the <b>AddItem</b> family of calls:</b> Use this for specifying parts compatibility by application manually. This can only be used in categories that support parts compatibility by application.
     * Use <b class="con">GetCategoryFeatures</b> with the <b>CompatibilityEnabled</b> feature ID to determine which categories support parts compatibility by application. <br><br> <b>For ReviseFixedPriceItem and ReviseItem:</b> When you revise a listing,
     * if the listing has bids and/or ends within 12 hours, item compatibilities cannot be deleted. You may add item compatibilities at any time. <br><br> <b>For GetItem:</b> <b class="con">ItemCompatibilityList</b> is only returned if the seller included
     * item compatibility in the listing and <b class="con">IncludeItemCompatibilityList</b> is set to <code>true</code> in the <b>GetItem</b> request. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories for the eBay Motors
     * (US) site (site ID 100) only. <br><br>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
     */
    public $ItemCompatibilityList;
    /**
     * The ItemCompatibilityCount
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of compatible applications specified for the given item. Applies to items listed with fitment by application only (either manually or with a catalog product that supports compatibility). <br><br> Not returned if
     * the item has no specified compatible applications. Not returned if <b>IncludeItemCompatibilityList</b> is specified in the request. <br><br> To retrieve the list of compatibility information, set <b> IncludeItemCompatibilityList</b> to
     * <code>true</code> in the request. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories for the eBay Motors (US) site (site ID 100) only.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCompatibilityCount;
    /**
     * The ConditionID
     * Meta informations extracted from the WSDL
     * - documentation: This is a numeric identifier for an item's condition. All numeric Condition ID values map to an item condition string value. For example, numeric identifer <code>1000</code> maps to <code>New</code> condition. <br><br> Most eBay
     * categories require an item condition, but a few eBay categories do not. To verify if the listing category requires an item condition, and if so, what are the supported item condition and <b>ConditionID</b> values, you can call
     * <b>GetCategoryFeatures</b>. In this <b>GetCategoryFeatures</b> call, you'd pass in the listing <b>CategoryID</b> value and two <b>FeatureID</b> fields - one of these fields set to <code>ConditionEnabled</code>, and the other field set to
     * <code>ConditionValues</code>. <br><br> In the <b>GetCategoryFeatures</b> response, look at the Category.<b>ConditionEnabled</b> to see if item condition is required for the category. Then look at the Category.<b>ConditionValues</b> container in the
     * response for the full list of Condition IDs that you can pass in through the <b>ConditionID</b> field of an Add/Revise/Relist/Verify call. Note that the Condition.<b>DisplayName</b> value in the response is the actual condition value that will appear
     * in the actual eBay listing. <br> <br> If you pass in a <b>ConditionID</b> value that is not valid for the category, or if you don't pass in a <b>ConditionID</b> value at all for a category that requires it, the listing request fails. <br><br> If you
     * are listing in two categories (using a secondary category), it is the primary listing category that determines which <b>ConditionID</b> values are supported. <br><br> <b>For Revise/Relist calls:</b> In most cases, you can change the
     * <b>ConditionID</b> value (if applicable/warranted), with the exception being an auction listing that has one or more bids, or any listing that is scheduled to end in 12 hours or less. <br> <br> <b>For GetItem:</b> The <b>ConditionID</b> value is
     * always returned if set for the listing. <b>GetItem</b> also returns the item condition string value in the <b>ConditionDisplayName</b> field.
     * - minOccurs: 0
     * @var int
     */
    public $ConditionID;
    /**
     * The ConditionDescription
     * Meta informations extracted from the WSDL
     * - documentation: This string field is used by the seller to more clearly describe the condition of items that are not brand new. <br> <br> The <b>ConditionDescription</b> field is available for all categories, including categories where the condition
     * type is not applicable (e.g., Antiques). This field is applicable for all item conditions except 'New', 'Brand New', 'New with tags', and 'New in box'. If <b>ConditionDescription</b> is used with these conditions (Condition IDs 1000-1499), eBay will
     * simply ignore this field if included, and eBay will return a warning message to the user. <br> <br> This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on
     * the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type
     * (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another. <br><br> <span class="tablenote"><strong>Note:</strong> The <b>ConditionDescription</b> field is
     * optional For <b>Add</b>/<b>Revise</b>/<b>Relist</b> API calls. <b>ConditionDescription</b> is currently supported on the eBay US and US eBay Motors (0), UK (3), CA (2), CAFR (210), AU (15), AT (16), BEFR (23), BENL (123), FR (71), DE (77), IT (101),
     * NL (146), ES (186), CH (193), IE (205) and PL (212) sites. </span> <br> The <b>ConditionDescription</b> field is returned by <b>GetItem</b> (and other related calls that return the Item object) if a condition description is specified in the listing.
     * <br>
     * - minOccurs: 0
     * @var string
     */
    public $ConditionDescription;
    /**
     * The ConditionDisplayName
     * Meta informations extracted from the WSDL
     * - documentation: The human-readable label for the item condition. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).<br> <br> Most categories use the same display name for the same
     * condition ID. Some categories may override the display name based on buyer expectations for items in the category. For example, condition ID 1000 could be called "New" in one category and "New with tags" in another.<br> <br> Behind the scenes, eBay's
     * search engine uses the ID (not the display name) to determine whether items are new, used, or refurbished.<br> <br> Only returned when the seller specified <b>ConditionID</b> in their listing.
     * - minOccurs: 0
     * @var string
     */
    public $ConditionDisplayName;
    /**
     * The TaxCategory
     * Meta informations extracted from the WSDL
     * - documentation: Tax exception category code. This is to be used only by sellers who have opted into sales tax being calculated by a sales tax calculation vendor. If you are interested in becoming a tax calculation vendor partner with eBay, contact
     * developer-relations@ebay.com.
     * - minOccurs: 0
     * @var string
     */
    public $TaxCategory;
    /**
     * The QuantityAvailableHint
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of message that will be returned describing the quantity available for the item.
     * - minOccurs: 0
     * @var string
     */
    public $QuantityAvailableHint;
    /**
     * The QuantityThreshold
     * Meta informations extracted from the WSDL
     * - documentation: The quantity threshold above which the seller prefers not to show the actual quantity available. Returned when the quantity available is greater than the value of quantity threshold. Currently, 10 is the only available value for this
     * threshold.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityThreshold;
    /**
     * The DiscountPriceInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay
     * Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site. <br><br> Discount pricing is available to qualified sellers (and their associated developers) who participate in the
     * Discount Pricing Program. Once qualified, sellers receive a 'special account flag' (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation items. STP is intended for eBay partners and their sellers only. <br><br>
     * As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing. <br><br> <b>For AddFixedPriceItem, RelistFixedPriceItem, ReviseFixedPriceItem,
     * and VerifyAddFixedPriceItem</b>: If you are listing variations (MSKU items), use <b>Variation.DiscountPriceInfo</b> for each variation.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType
     */
    public $DiscountPriceInfo;
    /**
     * The SellerProvidedTitle
     * Meta informations extracted from the WSDL
     * - documentation: A descriptive free-text title for a US or CA eBay Motors vehicle listing. This title appears below eBay's pre-filled listing title on the View Item page (not at the top of the View Item page). It's also appended to the listing title
     * in search results (like a subtitle) on the US eBay Motors site. Keywords in this title help buyers find or distinguish your listing. <br><br> Applicable to listings in US eBay Motors Cars and Trucks, Motorcycle, and some of the Powersport, Boats and
     * RV campers categories; or to Cars and Trucks listings on CA eBay Motors. <br><br> This replaces the older US and Canada eBay Motors Subtitle attribute (attribute ID 10246). <br>
     * - minOccurs: 0
     * @var string
     */
    public $SellerProvidedTitle;
    /**
     * The VIN
     * Meta informations extracted from the WSDL
     * - documentation: This field displays the Vehicle Identification Number, which is a unique serial number for a motor vehicle. <br><br> This field is applicable to listings in US eBay Motors Cars and Trucks (6001), Motorcycles (6024), Commercial Trucks
     * (63732), RVs and Campers (50054), ATVs (6723), Snowmobiles (42595), and UTVs (173665); and to Cars and Trucks listings in CA, CAFR and AU eBay Motors. For vehicle categories that do not use VIN, call <b>GetCategorySpecifics</b> to determine
     * applicable custom item specifics (such as 'Hull ID Number' for Boats). <br><br> For the US, CA, and CAFR eBay Motors sites, required for cars and trucks from model year 1981 and later. (The US developed national standards for VIN values in 1981.)
     * <br><br> For the eBay Australia site, required for vehicles from model year 1989 or later. For the eBay Australia site, only appears on the View Item page if you also specify the date of first registration in the listing's item specifics. <br><br>
     * Appears in the VIN field in the Item Specifics section of eBay's View Item page. <br>
     * - minOccurs: 0
     * @var string
     */
    public $VIN;
    /**
     * The VINLink
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $VINLink;
    /**
     * The VRM
     * Meta informations extracted from the WSDL
     * - documentation: Vehicle Registration Mark, which is a unique identifier for a motor vehicle in the UK. <br><br> Applicable to listings in UK eBay Motors Cars and Trucks, Motorcycle, and some Powersport categories. <br><br> Appears as a VRM field in
     * the Item Specifics section of eBay's View Item page. On the View Item page, the VRM value is masked (i.e., only a portion of the value is shown to users). In the <b>GetItem</b> response, the VRM is only returned if the call is made by the seller
     * (i.e., the AuthToken is associated with the vehicle's seller).
     * - minOccurs: 0
     * @var string
     */
    public $VRM;
    /**
     * The VRMLink
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $VRMLink;
    /**
     * The QuantityInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to set the minimum number of event tickets that should remain available after a buyer makes a purchase. This functionality allows the seller to avoid the possibility of being left with just one event ticket
     * after a sale. <br><br> This container can be used when adding, revising, or relisting event tickets, and it will only be returned in <b>GetItem</b> if set for the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\QuantityInfoType
     */
    public $QuantityInfo;
    /**
     * The SellerProfiles
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the seller would like to use/reference Business Policies to create, revise, relist, or verify their listing. The seller's account must be opted in to Business Policies to use this container. If this
     * container is used, exactly one Payment Business Policy, one Shipping Business Policy, and one Return Business Policy is applied to the listing. If the seller's account is not opted in to Business Policies, that seller may not use this container.
     * Sellers must opt-in to Business Policies through My eBay or by using the <b>optInToProgram</b> call of the <b>eBay Account API</b>. <br><br> If Business Policies are applied to a listing, all payment, shipping, and return policy settings in these
     * policies will override any other payment, shipping, or return policy legacy fields that are included in the call request. <br><br> This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the
     * API call is the seller of the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerProfilesType
     */
    public $SellerProfiles;
    /**
     * The ShippingServiceCostOverrideList
     * Meta informations extracted from the WSDL
     * - documentation: This container is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies shipping profile referenced in the
     * <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services. <br><br> A
     * <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service that is defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b>
     * containers of the Business Policies shipping profile. <br><br> Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container
     * will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile. <br><br> <b>For Revise and Relist calls</b>: To delete all shipping service cost overrides when you revise or relist, specify
     * <b>Item.ShippingServiceCostOverrideList</b> in <b>DeletedField</b>, and don't pass <b>ShippingServiceCostOverrideList</b> in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType
     */
    public $ShippingServiceCostOverrideList;
    /**
     * The ShippingOverride
     * Meta informations extracted from the WSDL
     * - documentation: This field is reserved for internal or future use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingOverrideType
     */
    public $ShippingOverride;
    /**
     * The ShippingPackageDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of dimension and size details related to a shipping package in which an item will be sent. The information in this container is applicable if the seller is using calculated shipping or flat rate shipping using
     * shipping rate tables with weight surcharges. This container is only returned in the <b>Get</b> calls if specified for the item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public $ShippingPackageDetails;
    /**
     * The TopRatedListing
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the listing was created by a Top-Rated Seller and the listing has all of the requirements that qualifies it as a Top-Rated Plus listing. The Top-Rated Seller program is only
     * available on the US, UK, and Germany sites. See the <a href="https://pages.ebay.com/help/sell/top-rated.html#what">Top-Rated Seller requirements</a> help topic for more information on qualifying as a Top-Rated Seller and the <a
     * href="https://pages.ebay.com/help/sell/top-rated.html#plus">Top-Rated Plus listing requirements</a> help topic for more information on what a listing must offer to qualify as a Top-Rated Plus listing and get the Top-Rated Plus badge. Information on
     * the overall program can be found on the <a href="https://pages.ebay.com/sellerinformation/build-your-business-online/status-standards/top-rated-seller.html">Top-Rated Seller home page</a> in the Seller Center.
     * - minOccurs: 0
     * @var bool
     */
    public $TopRatedListing;
    /**
     * The QuantityRestrictionPerBuyer
     * Meta informations extracted from the WSDL
     * - documentation: This container is used by the seller to restrict the quantity of items that may be purchased by one buyer during the duration of a fixed-price listing (single or multi-variation). This is an optional container that can be used with
     * an <b>Add</b>, <b>Revise</b>, or <b>Relist</b> call. <br><br> This container is not applicable to auction listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\QuantityRestrictionPerBuyerInfoType
     */
    public $QuantityRestrictionPerBuyer;
    /**
     * The FloorPrice
     * Meta informations extracted from the WSDL
     * - documentation: This value sets the minimum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on eBay Value Box or Amazon listings, the seller's product price will not be reduced lower than this
     * dollar value. <br><br> This value is only applicable to sellers enabled to use the <b>Dynamic Pricing</b> API, and if a dynamic pricing rule is assigned to the listing's product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $FloorPrice;
    /**
     * The CeilingPrice
     * Meta informations extracted from the WSDL
     * - documentation: This value sets the maximum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on Amazon or eBay Value Box, the seller's product price will not be raised higher than this dollar
     * value. <br><br> This value is only applicable to sellers enabled to use the <b>Dynamic Pricing</b> API, and if a dynamic pricing rule is assigned to the listing's product. If this field is not specified through the <b>Dynamic Pricing</b> API, an eBay
     * system-level threshold is used to avoid any undesirable results.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $CeilingPrice;
    /**
     * The IsIntermediatedShippingEligible
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the item is eligible is to be shipped internationally via eBay's Global Shipping Program. With the Global Shipping Program, the buyer pays a single shipping fee for the order,
     * which includes the domestic shipping leg, the international shipping leg, and handling charges, and import charges. <br/><br/> eBay uses a shipping partner that allows the seller to ship the package to a domestic location and then the shipping
     * partner takes care of the rest, including the international shipping leg.
     * - minOccurs: 0
     * @var bool
     */
    public $IsIntermediatedShippingEligible;
    /**
     * The UnitInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately
     * compare prices. eBay uses the <b>UnitType</b> and <b>UnitQuantity</b> values and the item's listed price to calculate and display the per-unit price on eBay EU sites. <br/><br/> This container will only be returned if price per unit information
     * exists for the listing, and the <b>IncludeItemSpecifics</b> field was included in the call request and set to <code>true</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UnitInfoType
     */
    public $UnitInfo;
    /**
     * The RelistParentID
     * Meta informations extracted from the WSDL
     * - documentation: The identifier of the original listing that contained the item before the item was relisted. This field is only returned for an item that was relisted.
     * - minOccurs: 0
     * @var int
     */
    public $RelistParentID;
    /**
     * The ConditionDefinition
     * Meta informations extracted from the WSDL
     * - documentation: This string value provides more details about the item's condition.
     * - minOccurs: 0
     * @var string
     */
    public $ConditionDefinition;
    /**
     * The HideFromSearch
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the listing has been hidden from all searches occurring on eBay. If a listing is hidden from eBay searches, the reason can be found in the <b>ReasonHideFromSearch</b> field.
     * - minOccurs: 0
     * @var bool
     */
    public $HideFromSearch;
    /**
     * The ReasonHideFromSearch
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned only when the listing is currently being hidden from any searches occurring on eBay. Listings may be hidden from search if an active listing is currently out of stock or if the listing has been determined by
     * eBay to be a duplicate listing.
     * - minOccurs: 0
     * @var string
     */
    public $ReasonHideFromSearch;
    /**
     * The IncludeRecommendations
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: This boolean field should be included and set to <code>true</code> if the seller wishes to see listing recommendations in the call response via the <b>ListingRecommendations</b> container. Listing recommendations provide one or more
     * messages to the seller on recommendations on: <b></b> <ul> <li>improving a listing </li> <li>bringing a listing up to standard in regards to Top-Rated seller/listing requirements </li> <li>mandated or recommended Item Specifics </li> <li>picture
     * quality requirements </li> <li>pricing and/or listing format recommendations </li> <li>recommended keywords and/or Item Specifics in a Title </li> <li>offering fast handling (same-day handling or handling time of 1 day) and/or a free shipping option
     * in order to qualify the listing for a Fast 'N Free badge </li> </ul>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeRecommendations;
    /**
     * The PickupInStoreDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is used in <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> listing calls by the seller to enable a listing with the 'In-Store Pickup' feature. The 'In-Store Pickup' feature is only available on the eBay US site.
     * This feature is discussed in more detail in this container's child fields. <br/><br/> This container is also returned in the <strong>GetItem</strong> call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType
     */
    public $PickupInStoreDetails;
    /**
     * The eBayNowEligible
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> eBay Now has been officially retired, so this field is no longer applicable. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $eBayNowEligible;
    /**
     * The eBayNowAvailable
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> eBay Now has been officially retired, so this field is no longer applicable. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $eBayNowAvailable;
    /**
     * The IgnoreQuantity
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the actual quantity of a multiple-quantity, fixed-price listing (indicated in the <b>Item.Quantity</b> field) can not be accurately determined by eBay.
     * - minOccurs: 0
     * @var bool
     */
    public $IgnoreQuantity;
    /**
     * The AvailableForPickupDropOff
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if <code>true</code>, and indicates that the 'Click and Collect' feature is available for this item. With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK, Australia,
     * and Germany sites, and then pick up their order from the nearest 'eBay Collection Point'. Note that an item may be eligible for Click and Collect, but this logistics option will only surface if the prospective buyer is within the vicinity of an 'eBay
     * Collection Point'. <br/><br/> The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the <a href="https://ebay.co.uk/clickandcollect/">Click and Collect</a> home
     * page on the eBay UK site, the <a href="https://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home
     * page on the eBay Germany site. <br> <br> Not all categories on the UK, Australia, and Germany sites support Click and Collect listings. To verify if a specific category on these eBay sites support Click and Collect listings, use the <a
     * href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in one or more <b>CategoryID</b> values and a <b>PickupDropOffEnabled</b> value in the <b>FeatureID</b> field. <br/><br/>
     * Look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request). <br> <br> <span
     * class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings will be automatically evaluated for Click and Collect eligibility.
     * </span>
     * - minOccurs: 0
     * @var bool
     */
    public $AvailableForPickupDropOff;
    /**
     * The EligibleForPickupDropOff
     * Meta informations extracted from the WSDL
     * - documentation: For 'Click and Collect' eligible sellers, this field was once used to set 'Click and Collect' eligibility at the listing level. However, now the seller can only opt in to 'Click and Collect' at the account level, and then each of
     * their listings will be automatically evaluated for 'Click and Collect' eligibility. <br/><br/> <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be
     * used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is available for the 'Click and Collect' logistics type. Instead,
     * the <b>Item.AvailableForPickupDropOff</b> field should be referenced to see if the item is available for 'Click and Collect'. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleForPickupDropOff;
    /**
     * The LiveAuction
     * Meta informations extracted from the WSDL
     * - documentation: This field must be included and set to <code>true</code> if the listing will be a part of a Live Auction. This boolean field is returned as <code>true</code> in <b>GetItem</b> if the listing is part of a Live Auction. See the <a
     * href="https://www.ebay.com/rpp/live-auctions">eBay Live Auctions</a> home page for more information about Live Auctions on eBay.com.
     * - minOccurs: 0
     * @var bool
     */
    public $LiveAuction;
    /**
     * The DigitalGoodInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container is used in <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing. It is also returned in <strong>GetItem</strong> to indicate that the listing
     * contains a digital gift card.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType
     */
    public $DigitalGoodInfo;
    /**
     * The eBayPlus
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, this item is being offered under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top-Rated
     * eBay sellers must opt in to eBay Plus to be able to offer the program on qualifying listings. Sellers must commit to next-day delivery of those items. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in
     * Germany, Austria, and Australia marketplaces. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $eBayPlus;
    /**
     * The eBayPlusEligible
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, this item is eligible to be listed under the eBay Plus program. eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items.
     * Top-Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to
     * buyers in Germany, Austria, and Australia marketplaces. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $eBayPlusEligible;
    /**
     * The eMailDeliveryAvailable
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This field was enabled with version 935. For those using versions older than 935, this field will not be returned. </span> <br> The boolean value that is returned in this field will
     * indicate whether or not a digital gift card can be delivered by email to the buyer or recipient of the gift card. This field is only applicable to digital gift card listings.
     * - minOccurs: 0
     * @var bool
     */
    public $eMailDeliveryAvailable;
    /**
     * The IsSecureDescription
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field indicates whether or not the listing description is HTTPS secure/compliant. To be HTTPS secure/compliant, the <b>Item.Description</b> field may not contain any links to site pages that use the HTTP (and not HTTPS)
     * protocol. This field will be returned with each listing that is found unless one or more <b>OutputSelector</b> fields are used and <code>Item.IsSecureDescription</code> is not one of the values passed in to one of these fields. <br/><br/> If this
     * field is returned as <code>true</code>, the listing is HTTPs secure/compliant, and the whole listing description will appear on the View Item page for the listing. If this field is returned as <code>false</code>, the listing is not HTTPs
     * secure/compliant, and only a partial/brief listing description will appear on the View Item page for the listing, with a link to the full listing description that will load in another tab. <br/><br/> If the listing description is not HTTPS compliant,
     * the fix is to call <b>ReviseItem</b> or <b>ReviseFixedPriceItem</b> and update the <b>Item.Description</b> field, removing all links to HTTP pages. <br/><br/> For more information about why eBay made this change, please see the <a
     * href="http://pages.ebay.com/seller-center/seller-updates/2017-fall/policy-updates.html" target="_blank">Policy Updates</a> page of the Fall 2017 Seller Updates page.
     * - minOccurs: 0
     * @var bool
     */
    public $IsSecureDescription;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemType
     * @uses ItemType::setApplicationData()
     * @uses ItemType::setAttributeSetArray()
     * @uses ItemType::setAttributeArray()
     * @uses ItemType::setLookupAttributeArray()
     * @uses ItemType::setAutoPay()
     * @uses ItemType::setPaymentDetails()
     * @uses ItemType::setBiddingDetails()
     * @uses ItemType::setMotorsGermanySearchable()
     * @uses ItemType::setBuyerProtection()
     * @uses ItemType::setBuyItNowPrice()
     * @uses ItemType::setCategoryMappingAllowed()
     * @uses ItemType::setCharity()
     * @uses ItemType::setCountry()
     * @uses ItemType::setCrossPromotion()
     * @uses ItemType::setCurrency()
     * @uses ItemType::setDescription()
     * @uses ItemType::setDescriptionReviseMode()
     * @uses ItemType::setDistance()
     * @uses ItemType::setHitCounter()
     * @uses ItemType::setItemID()
     * @uses ItemType::setListingDetails()
     * @uses ItemType::setListingDesigner()
     * @uses ItemType::setListingDuration()
     * @uses ItemType::setListingEnhancement()
     * @uses ItemType::setListingType()
     * @uses ItemType::setLocation()
     * @uses ItemType::setLotSize()
     * @uses ItemType::setPartnerCode()
     * @uses ItemType::setPartnerName()
     * @uses ItemType::setPaymentMethods()
     * @uses ItemType::setPayPalEmailAddress()
     * @uses ItemType::setPrimaryCategory()
     * @uses ItemType::setProductListingDetails()
     * @uses ItemType::setQuantity()
     * @uses ItemType::setPrivateNotes()
     * @uses ItemType::setRegionID()
     * @uses ItemType::setRelistLink()
     * @uses ItemType::setReservePrice()
     * @uses ItemType::setReviseStatus()
     * @uses ItemType::setScheduleTime()
     * @uses ItemType::setSecondaryCategory()
     * @uses ItemType::setFreeAddedCategory()
     * @uses ItemType::setSeller()
     * @uses ItemType::setSellingStatus()
     * @uses ItemType::setShippingDetails()
     * @uses ItemType::setShipToLocations()
     * @uses ItemType::setSite()
     * @uses ItemType::setStartPrice()
     * @uses ItemType::setStorefront()
     * @uses ItemType::setSubTitle()
     * @uses ItemType::setTimeLeft()
     * @uses ItemType::setTitle()
     * @uses ItemType::setUUID()
     * @uses ItemType::setVATDetails()
     * @uses ItemType::setSellerVacationNote()
     * @uses ItemType::setWatchCount()
     * @uses ItemType::setHitCount()
     * @uses ItemType::setDisableBuyerRequirements()
     * @uses ItemType::setBestOfferDetails()
     * @uses ItemType::setLocationDefaulted()
     * @uses ItemType::setUseTaxTable()
     * @uses ItemType::setGetItFast()
     * @uses ItemType::setBuyerResponsibleForShipping()
     * @uses ItemType::setLimitedWarrantyEligible()
     * @uses ItemType::setEBayNotes()
     * @uses ItemType::setQuestionCount()
     * @uses ItemType::setRelisted()
     * @uses ItemType::setQuantityAvailable()
     * @uses ItemType::setSKU()
     * @uses ItemType::setSearchDetails()
     * @uses ItemType::setPostalCode()
     * @uses ItemType::setShippingTermsInDescription()
     * @uses ItemType::setSellerInventoryID()
     * @uses ItemType::setPictureDetails()
     * @uses ItemType::setDispatchTimeMax()
     * @uses ItemType::setBestOfferEnabled()
     * @uses ItemType::setLocalListing()
     * @uses ItemType::setSellerContactDetails()
     * @uses ItemType::setTotalQuestionCount()
     * @uses ItemType::setProxyItem()
     * @uses ItemType::setExtendedSellerContactDetails()
     * @uses ItemType::setLeadCount()
     * @uses ItemType::setNewLeadCount()
     * @uses ItemType::setItemSpecifics()
     * @uses ItemType::setGroupCategoryID()
     * @uses ItemType::setClassifiedAdPayPerLeadFee()
     * @uses ItemType::setBidGroupItem()
     * @uses ItemType::setApplyBuyerProtection()
     * @uses ItemType::setListingSubtype2()
     * @uses ItemType::setMechanicalCheckAccepted()
     * @uses ItemType::setUpdateSellerInfo()
     * @uses ItemType::setUpdateReturnPolicy()
     * @uses ItemType::setItemPolicyViolation()
     * @uses ItemType::setCrossBorderTrade()
     * @uses ItemType::setBusinessSellerDetails()
     * @uses ItemType::setBuyerGuaranteePrice()
     * @uses ItemType::setBuyerRequirementDetails()
     * @uses ItemType::setReturnPolicy()
     * @uses ItemType::setPaymentAllowedSite()
     * @uses ItemType::setInventoryTrackingMethod()
     * @uses ItemType::setIntegratedMerchantCreditCardEnabled()
     * @uses ItemType::setVariations()
     * @uses ItemType::setItemCompatibilityList()
     * @uses ItemType::setItemCompatibilityCount()
     * @uses ItemType::setConditionID()
     * @uses ItemType::setConditionDescription()
     * @uses ItemType::setConditionDisplayName()
     * @uses ItemType::setTaxCategory()
     * @uses ItemType::setQuantityAvailableHint()
     * @uses ItemType::setQuantityThreshold()
     * @uses ItemType::setDiscountPriceInfo()
     * @uses ItemType::setSellerProvidedTitle()
     * @uses ItemType::setVIN()
     * @uses ItemType::setVINLink()
     * @uses ItemType::setVRM()
     * @uses ItemType::setVRMLink()
     * @uses ItemType::setQuantityInfo()
     * @uses ItemType::setSellerProfiles()
     * @uses ItemType::setShippingServiceCostOverrideList()
     * @uses ItemType::setShippingOverride()
     * @uses ItemType::setShippingPackageDetails()
     * @uses ItemType::setTopRatedListing()
     * @uses ItemType::setQuantityRestrictionPerBuyer()
     * @uses ItemType::setFloorPrice()
     * @uses ItemType::setCeilingPrice()
     * @uses ItemType::setIsIntermediatedShippingEligible()
     * @uses ItemType::setUnitInfo()
     * @uses ItemType::setRelistParentID()
     * @uses ItemType::setConditionDefinition()
     * @uses ItemType::setHideFromSearch()
     * @uses ItemType::setReasonHideFromSearch()
     * @uses ItemType::setIncludeRecommendations()
     * @uses ItemType::setPickupInStoreDetails()
     * @uses ItemType::setEBayNowEligible()
     * @uses ItemType::setEBayNowAvailable()
     * @uses ItemType::setIgnoreQuantity()
     * @uses ItemType::setAvailableForPickupDropOff()
     * @uses ItemType::setEligibleForPickupDropOff()
     * @uses ItemType::setLiveAuction()
     * @uses ItemType::setDigitalGoodInfo()
     * @uses ItemType::setEBayPlus()
     * @uses ItemType::setEBayPlusEligible()
     * @uses ItemType::setEMailDeliveryAvailable()
     * @uses ItemType::setIsSecureDescription()
     * @uses ItemType::setAny()
     * @param string $applicationData
     * @param \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType $attributeSetArray
     * @param \macropage\ebaysdk\trading\ArrayType\AttributeArrayType $attributeArray
     * @param \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType $lookupAttributeArray
     * @param bool $autoPay
     * @param \macropage\ebaysdk\trading\StructType\PaymentDetailsType $paymentDetails
     * @param \macropage\ebaysdk\trading\StructType\BiddingDetailsType $biddingDetails
     * @param bool $motorsGermanySearchable
     * @param string $buyerProtection
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice
     * @param bool $categoryMappingAllowed
     * @param \macropage\ebaysdk\trading\StructType\CharityType $charity
     * @param string $country
     * @param \macropage\ebaysdk\trading\StructType\CrossPromotionsType $crossPromotion
     * @param string $currency
     * @param string $description
     * @param string $descriptionReviseMode
     * @param \macropage\ebaysdk\trading\StructType\DistanceType $distance
     * @param string $hitCounter
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\ListingDetailsType $listingDetails
     * @param \macropage\ebaysdk\trading\StructType\ListingDesignerType $listingDesigner
     * @param string $listingDuration
     * @param string[] $listingEnhancement
     * @param string $listingType
     * @param string $location
     * @param int $lotSize
     * @param string $partnerCode
     * @param string $partnerName
     * @param string[] $paymentMethods
     * @param string $payPalEmailAddress
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $primaryCategory
     * @param \macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails
     * @param int $quantity
     * @param string $privateNotes
     * @param string $regionID
     * @param bool $relistLink
     * @param \macropage\ebaysdk\trading\StructType\AmountType $reservePrice
     * @param \macropage\ebaysdk\trading\StructType\ReviseStatusType $reviseStatus
     * @param string $scheduleTime
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $secondaryCategory
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $freeAddedCategory
     * @param \macropage\ebaysdk\trading\StructType\UserType $seller
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @param string[] $shipToLocations
     * @param string $site
     * @param \macropage\ebaysdk\trading\StructType\AmountType $startPrice
     * @param \macropage\ebaysdk\trading\StructType\StorefrontType $storefront
     * @param string $subTitle
     * @param string $timeLeft
     * @param string $title
     * @param string $uUID
     * @param \macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails
     * @param string $sellerVacationNote
     * @param int $watchCount
     * @param int $hitCount
     * @param bool $disableBuyerRequirements
     * @param \macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails
     * @param bool $locationDefaulted
     * @param bool $useTaxTable
     * @param bool $getItFast
     * @param bool $buyerResponsibleForShipping
     * @param bool $limitedWarrantyEligible
     * @param string $eBayNotes
     * @param int $questionCount
     * @param bool $relisted
     * @param int $quantityAvailable
     * @param string $sKU
     * @param \macropage\ebaysdk\trading\StructType\SearchDetailsType $searchDetails
     * @param string $postalCode
     * @param bool $shippingTermsInDescription
     * @param string $sellerInventoryID
     * @param \macropage\ebaysdk\trading\StructType\PictureDetailsType $pictureDetails
     * @param int $dispatchTimeMax
     * @param bool $bestOfferEnabled
     * @param bool $localListing
     * @param \macropage\ebaysdk\trading\StructType\AddressType $sellerContactDetails
     * @param int $totalQuestionCount
     * @param bool $proxyItem
     * @param \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType $extendedSellerContactDetails
     * @param int $leadCount
     * @param int $newLeadCount
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @param string $groupCategoryID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $classifiedAdPayPerLeadFee
     * @param bool $bidGroupItem
     * @param \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType $applyBuyerProtection
     * @param string $listingSubtype2
     * @param bool $mechanicalCheckAccepted
     * @param bool $updateSellerInfo
     * @param bool $updateReturnPolicy
     * @param \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType $itemPolicyViolation
     * @param string[] $crossBorderTrade
     * @param \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType $businessSellerDetails
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyerGuaranteePrice
     * @param \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType $buyerRequirementDetails
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyType $returnPolicy
     * @param string[] $paymentAllowedSite
     * @param string $inventoryTrackingMethod
     * @param bool $integratedMerchantCreditCardEnabled
     * @param \macropage\ebaysdk\trading\StructType\VariationsType $variations
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType $itemCompatibilityList
     * @param int $itemCompatibilityCount
     * @param int $conditionID
     * @param string $conditionDescription
     * @param string $conditionDisplayName
     * @param string $taxCategory
     * @param string $quantityAvailableHint
     * @param int $quantityThreshold
     * @param \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo
     * @param string $sellerProvidedTitle
     * @param string $vIN
     * @param string $vINLink
     * @param string $vRM
     * @param string $vRMLink
     * @param \macropage\ebaysdk\trading\StructType\QuantityInfoType $quantityInfo
     * @param \macropage\ebaysdk\trading\StructType\SellerProfilesType $sellerProfiles
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
     * @param \macropage\ebaysdk\trading\StructType\ShippingOverrideType $shippingOverride
     * @param \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType $shippingPackageDetails
     * @param bool $topRatedListing
     * @param \macropage\ebaysdk\trading\StructType\QuantityRestrictionPerBuyerInfoType $quantityRestrictionPerBuyer
     * @param \macropage\ebaysdk\trading\StructType\AmountType $floorPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $ceilingPrice
     * @param bool $isIntermediatedShippingEligible
     * @param \macropage\ebaysdk\trading\StructType\UnitInfoType $unitInfo
     * @param int $relistParentID
     * @param string $conditionDefinition
     * @param bool $hideFromSearch
     * @param string $reasonHideFromSearch
     * @param bool $includeRecommendations
     * @param \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType $pickupInStoreDetails
     * @param bool $eBayNowEligible
     * @param bool $eBayNowAvailable
     * @param bool $ignoreQuantity
     * @param bool $availableForPickupDropOff
     * @param bool $eligibleForPickupDropOff
     * @param bool $liveAuction
     * @param \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType $digitalGoodInfo
     * @param bool $eBayPlus
     * @param bool $eBayPlusEligible
     * @param bool $eMailDeliveryAvailable
     * @param bool $isSecureDescription
     * @param \DOMDocument $any
     */
    public function __construct($applicationData = null, \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType $attributeSetArray = null, \macropage\ebaysdk\trading\ArrayType\AttributeArrayType $attributeArray = null, \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType $lookupAttributeArray = null, $autoPay = null, \macropage\ebaysdk\trading\StructType\PaymentDetailsType $paymentDetails = null, \macropage\ebaysdk\trading\StructType\BiddingDetailsType $biddingDetails = null, $motorsGermanySearchable = null, $buyerProtection = null, \macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice = null, $categoryMappingAllowed = false, \macropage\ebaysdk\trading\StructType\CharityType $charity = null, $country = null, \macropage\ebaysdk\trading\StructType\CrossPromotionsType $crossPromotion = null, $currency = null, $description = null, $descriptionReviseMode = null, \macropage\ebaysdk\trading\StructType\DistanceType $distance = null, $hitCounter = null, $itemID = null, \macropage\ebaysdk\trading\StructType\ListingDetailsType $listingDetails = null, \macropage\ebaysdk\trading\StructType\ListingDesignerType $listingDesigner = null, $listingDuration = null, array $listingEnhancement = array(), $listingType = null, $location = null, $lotSize = null, $partnerCode = null, $partnerName = null, array $paymentMethods = array(), $payPalEmailAddress = null, \macropage\ebaysdk\trading\StructType\CategoryType $primaryCategory = null, \macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails = null, $quantity = null, $privateNotes = null, $regionID = null, $relistLink = null, \macropage\ebaysdk\trading\StructType\AmountType $reservePrice = null, \macropage\ebaysdk\trading\StructType\ReviseStatusType $reviseStatus = null, $scheduleTime = null, \macropage\ebaysdk\trading\StructType\CategoryType $secondaryCategory = null, \macropage\ebaysdk\trading\StructType\CategoryType $freeAddedCategory = null, \macropage\ebaysdk\trading\StructType\UserType $seller = null, \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null, \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null, array $shipToLocations = array(), $site = null, \macropage\ebaysdk\trading\StructType\AmountType $startPrice = null, \macropage\ebaysdk\trading\StructType\StorefrontType $storefront = null, $subTitle = null, $timeLeft = null, $title = null, $uUID = null, \macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails = null, $sellerVacationNote = null, $watchCount = null, $hitCount = null, $disableBuyerRequirements = null, \macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails = null, $locationDefaulted = null, $useTaxTable = null, $getItFast = null, $buyerResponsibleForShipping = null, $limitedWarrantyEligible = null, $eBayNotes = null, $questionCount = null, $relisted = null, $quantityAvailable = null, $sKU = null, \macropage\ebaysdk\trading\StructType\SearchDetailsType $searchDetails = null, $postalCode = null, $shippingTermsInDescription = null, $sellerInventoryID = null, \macropage\ebaysdk\trading\StructType\PictureDetailsType $pictureDetails = null, $dispatchTimeMax = null, $bestOfferEnabled = null, $localListing = null, \macropage\ebaysdk\trading\StructType\AddressType $sellerContactDetails = null, $totalQuestionCount = null, $proxyItem = null, \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType $extendedSellerContactDetails = null, $leadCount = null, $newLeadCount = null, \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null, $groupCategoryID = null, \macropage\ebaysdk\trading\StructType\AmountType $classifiedAdPayPerLeadFee = null, $bidGroupItem = null, \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType $applyBuyerProtection = null, $listingSubtype2 = null, $mechanicalCheckAccepted = null, $updateSellerInfo = null, $updateReturnPolicy = null, \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType $itemPolicyViolation = null, array $crossBorderTrade = array(), \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType $businessSellerDetails = null, \macropage\ebaysdk\trading\StructType\AmountType $buyerGuaranteePrice = null, \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType $buyerRequirementDetails = null, \macropage\ebaysdk\trading\StructType\ReturnPolicyType $returnPolicy = null, array $paymentAllowedSite = array(), $inventoryTrackingMethod = null, $integratedMerchantCreditCardEnabled = null, \macropage\ebaysdk\trading\StructType\VariationsType $variations = null, \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType $itemCompatibilityList = null, $itemCompatibilityCount = null, $conditionID = null, $conditionDescription = null, $conditionDisplayName = null, $taxCategory = null, $quantityAvailableHint = null, $quantityThreshold = null, \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo = null, $sellerProvidedTitle = null, $vIN = null, $vINLink = null, $vRM = null, $vRMLink = null, \macropage\ebaysdk\trading\StructType\QuantityInfoType $quantityInfo = null, \macropage\ebaysdk\trading\StructType\SellerProfilesType $sellerProfiles = null, \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList = null, \macropage\ebaysdk\trading\StructType\ShippingOverrideType $shippingOverride = null, \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType $shippingPackageDetails = null, $topRatedListing = null, \macropage\ebaysdk\trading\StructType\QuantityRestrictionPerBuyerInfoType $quantityRestrictionPerBuyer = null, \macropage\ebaysdk\trading\StructType\AmountType $floorPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $ceilingPrice = null, $isIntermediatedShippingEligible = null, \macropage\ebaysdk\trading\StructType\UnitInfoType $unitInfo = null, $relistParentID = null, $conditionDefinition = null, $hideFromSearch = null, $reasonHideFromSearch = null, $includeRecommendations = false, \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType $pickupInStoreDetails = null, $eBayNowEligible = null, $eBayNowAvailable = null, $ignoreQuantity = null, $availableForPickupDropOff = null, $eligibleForPickupDropOff = null, $liveAuction = null, \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType $digitalGoodInfo = null, $eBayPlus = null, $eBayPlusEligible = null, $eMailDeliveryAvailable = null, $isSecureDescription = null, \DOMDocument $any = null)
    {
        $this
            ->setApplicationData($applicationData)
            ->setAttributeSetArray($attributeSetArray)
            ->setAttributeArray($attributeArray)
            ->setLookupAttributeArray($lookupAttributeArray)
            ->setAutoPay($autoPay)
            ->setPaymentDetails($paymentDetails)
            ->setBiddingDetails($biddingDetails)
            ->setMotorsGermanySearchable($motorsGermanySearchable)
            ->setBuyerProtection($buyerProtection)
            ->setBuyItNowPrice($buyItNowPrice)
            ->setCategoryMappingAllowed($categoryMappingAllowed)
            ->setCharity($charity)
            ->setCountry($country)
            ->setCrossPromotion($crossPromotion)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setDescriptionReviseMode($descriptionReviseMode)
            ->setDistance($distance)
            ->setHitCounter($hitCounter)
            ->setItemID($itemID)
            ->setListingDetails($listingDetails)
            ->setListingDesigner($listingDesigner)
            ->setListingDuration($listingDuration)
            ->setListingEnhancement($listingEnhancement)
            ->setListingType($listingType)
            ->setLocation($location)
            ->setLotSize($lotSize)
            ->setPartnerCode($partnerCode)
            ->setPartnerName($partnerName)
            ->setPaymentMethods($paymentMethods)
            ->setPayPalEmailAddress($payPalEmailAddress)
            ->setPrimaryCategory($primaryCategory)
            ->setProductListingDetails($productListingDetails)
            ->setQuantity($quantity)
            ->setPrivateNotes($privateNotes)
            ->setRegionID($regionID)
            ->setRelistLink($relistLink)
            ->setReservePrice($reservePrice)
            ->setReviseStatus($reviseStatus)
            ->setScheduleTime($scheduleTime)
            ->setSecondaryCategory($secondaryCategory)
            ->setFreeAddedCategory($freeAddedCategory)
            ->setSeller($seller)
            ->setSellingStatus($sellingStatus)
            ->setShippingDetails($shippingDetails)
            ->setShipToLocations($shipToLocations)
            ->setSite($site)
            ->setStartPrice($startPrice)
            ->setStorefront($storefront)
            ->setSubTitle($subTitle)
            ->setTimeLeft($timeLeft)
            ->setTitle($title)
            ->setUUID($uUID)
            ->setVATDetails($vATDetails)
            ->setSellerVacationNote($sellerVacationNote)
            ->setWatchCount($watchCount)
            ->setHitCount($hitCount)
            ->setDisableBuyerRequirements($disableBuyerRequirements)
            ->setBestOfferDetails($bestOfferDetails)
            ->setLocationDefaulted($locationDefaulted)
            ->setUseTaxTable($useTaxTable)
            ->setGetItFast($getItFast)
            ->setBuyerResponsibleForShipping($buyerResponsibleForShipping)
            ->setLimitedWarrantyEligible($limitedWarrantyEligible)
            ->setEBayNotes($eBayNotes)
            ->setQuestionCount($questionCount)
            ->setRelisted($relisted)
            ->setQuantityAvailable($quantityAvailable)
            ->setSKU($sKU)
            ->setSearchDetails($searchDetails)
            ->setPostalCode($postalCode)
            ->setShippingTermsInDescription($shippingTermsInDescription)
            ->setSellerInventoryID($sellerInventoryID)
            ->setPictureDetails($pictureDetails)
            ->setDispatchTimeMax($dispatchTimeMax)
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setLocalListing($localListing)
            ->setSellerContactDetails($sellerContactDetails)
            ->setTotalQuestionCount($totalQuestionCount)
            ->setProxyItem($proxyItem)
            ->setExtendedSellerContactDetails($extendedSellerContactDetails)
            ->setLeadCount($leadCount)
            ->setNewLeadCount($newLeadCount)
            ->setItemSpecifics($itemSpecifics)
            ->setGroupCategoryID($groupCategoryID)
            ->setClassifiedAdPayPerLeadFee($classifiedAdPayPerLeadFee)
            ->setBidGroupItem($bidGroupItem)
            ->setApplyBuyerProtection($applyBuyerProtection)
            ->setListingSubtype2($listingSubtype2)
            ->setMechanicalCheckAccepted($mechanicalCheckAccepted)
            ->setUpdateSellerInfo($updateSellerInfo)
            ->setUpdateReturnPolicy($updateReturnPolicy)
            ->setItemPolicyViolation($itemPolicyViolation)
            ->setCrossBorderTrade($crossBorderTrade)
            ->setBusinessSellerDetails($businessSellerDetails)
            ->setBuyerGuaranteePrice($buyerGuaranteePrice)
            ->setBuyerRequirementDetails($buyerRequirementDetails)
            ->setReturnPolicy($returnPolicy)
            ->setPaymentAllowedSite($paymentAllowedSite)
            ->setInventoryTrackingMethod($inventoryTrackingMethod)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setVariations($variations)
            ->setItemCompatibilityList($itemCompatibilityList)
            ->setItemCompatibilityCount($itemCompatibilityCount)
            ->setConditionID($conditionID)
            ->setConditionDescription($conditionDescription)
            ->setConditionDisplayName($conditionDisplayName)
            ->setTaxCategory($taxCategory)
            ->setQuantityAvailableHint($quantityAvailableHint)
            ->setQuantityThreshold($quantityThreshold)
            ->setDiscountPriceInfo($discountPriceInfo)
            ->setSellerProvidedTitle($sellerProvidedTitle)
            ->setVIN($vIN)
            ->setVINLink($vINLink)
            ->setVRM($vRM)
            ->setVRMLink($vRMLink)
            ->setQuantityInfo($quantityInfo)
            ->setSellerProfiles($sellerProfiles)
            ->setShippingServiceCostOverrideList($shippingServiceCostOverrideList)
            ->setShippingOverride($shippingOverride)
            ->setShippingPackageDetails($shippingPackageDetails)
            ->setTopRatedListing($topRatedListing)
            ->setQuantityRestrictionPerBuyer($quantityRestrictionPerBuyer)
            ->setFloorPrice($floorPrice)
            ->setCeilingPrice($ceilingPrice)
            ->setIsIntermediatedShippingEligible($isIntermediatedShippingEligible)
            ->setUnitInfo($unitInfo)
            ->setRelistParentID($relistParentID)
            ->setConditionDefinition($conditionDefinition)
            ->setHideFromSearch($hideFromSearch)
            ->setReasonHideFromSearch($reasonHideFromSearch)
            ->setIncludeRecommendations($includeRecommendations)
            ->setPickupInStoreDetails($pickupInStoreDetails)
            ->setEBayNowEligible($eBayNowEligible)
            ->setEBayNowAvailable($eBayNowAvailable)
            ->setIgnoreQuantity($ignoreQuantity)
            ->setAvailableForPickupDropOff($availableForPickupDropOff)
            ->setEligibleForPickupDropOff($eligibleForPickupDropOff)
            ->setLiveAuction($liveAuction)
            ->setDigitalGoodInfo($digitalGoodInfo)
            ->setEBayPlus($eBayPlus)
            ->setEBayPlusEligible($eBayPlusEligible)
            ->setEMailDeliveryAvailable($eMailDeliveryAvailable)
            ->setIsSecureDescription($isSecureDescription)
            ->setAny($any);
    }
    /**
     * Get ApplicationData value
     * @return string|null
     */
    public function getApplicationData()
    {
        return $this->ApplicationData;
    }
    /**
     * Set ApplicationData value
     * @param string $applicationData
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setApplicationData($applicationData = null)
    {
        // validation for constraint: string
        if (!is_null($applicationData) && !is_string($applicationData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationData)), __LINE__);
        }
        $this->ApplicationData = $applicationData;
        return $this;
    }
    /**
     * Get AttributeSetArray value
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType|null
     */
    public function getAttributeSetArray()
    {
        return $this->AttributeSetArray;
    }
    /**
     * Set AttributeSetArray value
     * @param \macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType $attributeSetArray
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setAttributeSetArray(\macropage\ebaysdk\trading\ArrayType\AttributeSetArrayType $attributeSetArray = null)
    {
        $this->AttributeSetArray = $attributeSetArray;
        return $this;
    }
    /**
     * Get AttributeArray value
     * @return \macropage\ebaysdk\trading\ArrayType\AttributeArrayType|null
     */
    public function getAttributeArray()
    {
        return $this->AttributeArray;
    }
    /**
     * Set AttributeArray value
     * @param \macropage\ebaysdk\trading\ArrayType\AttributeArrayType $attributeArray
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setAttributeArray(\macropage\ebaysdk\trading\ArrayType\AttributeArrayType $attributeArray = null)
    {
        $this->AttributeArray = $attributeArray;
        return $this;
    }
    /**
     * Get LookupAttributeArray value
     * @return \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType|null
     */
    public function getLookupAttributeArray()
    {
        return $this->LookupAttributeArray;
    }
    /**
     * Set LookupAttributeArray value
     * @param \macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType $lookupAttributeArray
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setLookupAttributeArray(\macropage\ebaysdk\trading\ArrayType\LookupAttributeArrayType $lookupAttributeArray = null)
    {
        $this->LookupAttributeArray = $lookupAttributeArray;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get PaymentDetails value
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType|null
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @param \macropage\ebaysdk\trading\StructType\PaymentDetailsType $paymentDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPaymentDetails(\macropage\ebaysdk\trading\StructType\PaymentDetailsType $paymentDetails = null)
    {
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Get BiddingDetails value
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType|null
     */
    public function getBiddingDetails()
    {
        return $this->BiddingDetails;
    }
    /**
     * Set BiddingDetails value
     * @param \macropage\ebaysdk\trading\StructType\BiddingDetailsType $biddingDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBiddingDetails(\macropage\ebaysdk\trading\StructType\BiddingDetailsType $biddingDetails = null)
    {
        $this->BiddingDetails = $biddingDetails;
        return $this;
    }
    /**
     * Get MotorsGermanySearchable value
     * @return bool|null
     */
    public function getMotorsGermanySearchable()
    {
        return $this->MotorsGermanySearchable;
    }
    /**
     * Set MotorsGermanySearchable value
     * @param bool $motorsGermanySearchable
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setMotorsGermanySearchable($motorsGermanySearchable = null)
    {
        // validation for constraint: boolean
        if (!is_null($motorsGermanySearchable) && !is_bool($motorsGermanySearchable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($motorsGermanySearchable)), __LINE__);
        }
        $this->MotorsGermanySearchable = $motorsGermanySearchable;
        return $this;
    }
    /**
     * Get BuyerProtection value
     * @return string|null
     */
    public function getBuyerProtection()
    {
        return $this->BuyerProtection;
    }
    /**
     * Set BuyerProtection value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyerProtection
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBuyerProtection($buyerProtection = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::valueIsValid($buyerProtection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buyerProtection, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerProtection = $buyerProtection;
        return $this;
    }
    /**
     * Get BuyItNowPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBuyItNowPrice()
    {
        return $this->BuyItNowPrice;
    }
    /**
     * Set BuyItNowPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBuyItNowPrice(\macropage\ebaysdk\trading\StructType\AmountType $buyItNowPrice = null)
    {
        $this->BuyItNowPrice = $buyItNowPrice;
        return $this;
    }
    /**
     * Get CategoryMappingAllowed value
     * @return bool|null
     */
    public function getCategoryMappingAllowed()
    {
        return $this->CategoryMappingAllowed;
    }
    /**
     * Set CategoryMappingAllowed value
     * @param bool $categoryMappingAllowed
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setCategoryMappingAllowed($categoryMappingAllowed = false)
    {
        // validation for constraint: boolean
        if (!is_null($categoryMappingAllowed) && !is_bool($categoryMappingAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($categoryMappingAllowed)), __LINE__);
        }
        $this->CategoryMappingAllowed = $categoryMappingAllowed;
        return $this;
    }
    /**
     * Get Charity value
     * @return \macropage\ebaysdk\trading\StructType\CharityType|null
     */
    public function getCharity()
    {
        return $this->Charity;
    }
    /**
     * Set Charity value
     * @param \macropage\ebaysdk\trading\StructType\CharityType $charity
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setCharity(\macropage\ebaysdk\trading\StructType\CharityType $charity = null)
    {
        $this->Charity = $charity;
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
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $country
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($country)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $country, implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get CrossPromotion value
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType|null
     */
    public function getCrossPromotion()
    {
        return $this->CrossPromotion;
    }
    /**
     * Set CrossPromotion value
     * @param \macropage\ebaysdk\trading\StructType\CrossPromotionsType $crossPromotion
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setCrossPromotion(\macropage\ebaysdk\trading\StructType\CrossPromotionsType $crossPromotion = null)
    {
        $this->CrossPromotion = $crossPromotion;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency, implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get DescriptionReviseMode value
     * @return string|null
     */
    public function getDescriptionReviseMode()
    {
        return $this->DescriptionReviseMode;
    }
    /**
     * Set DescriptionReviseMode value
     * @uses \macropage\ebaysdk\trading\EnumType\DescriptionReviseModeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DescriptionReviseModeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $descriptionReviseMode
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setDescriptionReviseMode($descriptionReviseMode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DescriptionReviseModeCodeType::valueIsValid($descriptionReviseMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $descriptionReviseMode, implode(', ', \macropage\ebaysdk\trading\EnumType\DescriptionReviseModeCodeType::getValidValues())), __LINE__);
        }
        $this->DescriptionReviseMode = $descriptionReviseMode;
        return $this;
    }
    /**
     * Get Distance value
     * @return \macropage\ebaysdk\trading\StructType\DistanceType|null
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param \macropage\ebaysdk\trading\StructType\DistanceType $distance
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setDistance(\macropage\ebaysdk\trading\StructType\DistanceType $distance = null)
    {
        $this->Distance = $distance;
        return $this;
    }
    /**
     * Get HitCounter value
     * @return string|null
     */
    public function getHitCounter()
    {
        return $this->HitCounter;
    }
    /**
     * Set HitCounter value
     * @uses \macropage\ebaysdk\trading\EnumType\HitCounterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\HitCounterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $hitCounter
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setHitCounter($hitCounter = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\HitCounterCodeType::valueIsValid($hitCounter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $hitCounter, implode(', ', \macropage\ebaysdk\trading\EnumType\HitCounterCodeType::getValidValues())), __LINE__);
        }
        $this->HitCounter = $hitCounter;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get ListingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ListingDetailsType|null
     */
    public function getListingDetails()
    {
        return $this->ListingDetails;
    }
    /**
     * Set ListingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ListingDetailsType $listingDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setListingDetails(\macropage\ebaysdk\trading\StructType\ListingDetailsType $listingDetails = null)
    {
        $this->ListingDetails = $listingDetails;
        return $this;
    }
    /**
     * Get ListingDesigner value
     * @return \macropage\ebaysdk\trading\StructType\ListingDesignerType|null
     */
    public function getListingDesigner()
    {
        return $this->ListingDesigner;
    }
    /**
     * Set ListingDesigner value
     * @param \macropage\ebaysdk\trading\StructType\ListingDesignerType $listingDesigner
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setListingDesigner(\macropage\ebaysdk\trading\StructType\ListingDesignerType $listingDesigner = null)
    {
        $this->ListingDesigner = $listingDesigner;
        return $this;
    }
    /**
     * Get ListingDuration value
     * @return string|null
     */
    public function getListingDuration()
    {
        return $this->ListingDuration;
    }
    /**
     * Set ListingDuration value
     * @param string $listingDuration
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setListingDuration($listingDuration = null)
    {
        // validation for constraint: string
        if (!is_null($listingDuration) && !is_string($listingDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listingDuration)), __LINE__);
        }
        $this->ListingDuration = $listingDuration;
        return $this;
    }
    /**
     * Get ListingEnhancement value
     * @return string[]|null
     */
    public function getListingEnhancement()
    {
        return $this->ListingEnhancement;
    }
    /**
     * Set ListingEnhancement value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingEnhancementsCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingEnhancementsCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $listingEnhancement
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setListingEnhancement(array $listingEnhancement = array())
    {
        $invalidValues = array();
        foreach ($listingEnhancement as $itemTypeListingEnhancementItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ListingEnhancementsCodeType::valueIsValid($itemTypeListingEnhancementItem)) {
                $invalidValues[] = var_export($itemTypeListingEnhancementItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ListingEnhancementsCodeType::getValidValues())), __LINE__);
        }
        $this->ListingEnhancement = $listingEnhancement;
        return $this;
    }
    /**
     * Add item to ListingEnhancement value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingEnhancementsCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingEnhancementsCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function addToListingEnhancement($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingEnhancementsCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingEnhancementsCodeType::getValidValues())), __LINE__);
        }
        $this->ListingEnhancement[] = $item;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get PartnerCode value
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->PartnerCode;
    }
    /**
     * Set PartnerCode value
     * @param string $partnerCode
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPartnerCode($partnerCode = null)
    {
        // validation for constraint: string
        if (!is_null($partnerCode) && !is_string($partnerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerCode)), __LINE__);
        }
        $this->PartnerCode = $partnerCode;
        return $this;
    }
    /**
     * Get PartnerName value
     * @return string|null
     */
    public function getPartnerName()
    {
        return $this->PartnerName;
    }
    /**
     * Set PartnerName value
     * @param string $partnerName
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPartnerName($partnerName = null)
    {
        // validation for constraint: string
        if (!is_null($partnerName) && !is_string($partnerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerName)), __LINE__);
        }
        $this->PartnerName = $partnerName;
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
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethods
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPaymentMethods(array $paymentMethods = array())
    {
        $invalidValues = array();
        foreach ($paymentMethods as $itemTypePaymentMethodsItem) {
            if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($itemTypePaymentMethodsItem)) {
                $invalidValues[] = var_export($itemTypePaymentMethodsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Add item to PaymentMethods value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function addToPaymentMethods($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods[] = $item;
        return $this;
    }
    /**
     * Get PayPalEmailAddress value
     * @return string|null
     */
    public function getPayPalEmailAddress()
    {
        return $this->PayPalEmailAddress;
    }
    /**
     * Set PayPalEmailAddress value
     * @param string $payPalEmailAddress
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPayPalEmailAddress($payPalEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($payPalEmailAddress) && !is_string($payPalEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payPalEmailAddress)), __LINE__);
        }
        $this->PayPalEmailAddress = $payPalEmailAddress;
        return $this;
    }
    /**
     * Get PrimaryCategory value
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function getPrimaryCategory()
    {
        return $this->PrimaryCategory;
    }
    /**
     * Set PrimaryCategory value
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $primaryCategory
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPrimaryCategory(\macropage\ebaysdk\trading\StructType\CategoryType $primaryCategory = null)
    {
        $this->PrimaryCategory = $primaryCategory;
        return $this;
    }
    /**
     * Get ProductListingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType|null
     */
    public function getProductListingDetails()
    {
        return $this->ProductListingDetails;
    }
    /**
     * Set ProductListingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setProductListingDetails(\macropage\ebaysdk\trading\StructType\ProductListingDetailsType $productListingDetails = null)
    {
        $this->ProductListingDetails = $productListingDetails;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get RegionID value
     * @return string|null
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @param string $regionID
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setRegionID($regionID = null)
    {
        // validation for constraint: string
        if (!is_null($regionID) && !is_string($regionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionID)), __LINE__);
        }
        $this->RegionID = $regionID;
        return $this;
    }
    /**
     * Get RelistLink value
     * @return bool|null
     */
    public function getRelistLink()
    {
        return $this->RelistLink;
    }
    /**
     * Set RelistLink value
     * @param bool $relistLink
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setRelistLink($relistLink = null)
    {
        // validation for constraint: boolean
        if (!is_null($relistLink) && !is_bool($relistLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($relistLink)), __LINE__);
        }
        $this->RelistLink = $relistLink;
        return $this;
    }
    /**
     * Get ReservePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getReservePrice()
    {
        return $this->ReservePrice;
    }
    /**
     * Set ReservePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $reservePrice
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setReservePrice(\macropage\ebaysdk\trading\StructType\AmountType $reservePrice = null)
    {
        $this->ReservePrice = $reservePrice;
        return $this;
    }
    /**
     * Get ReviseStatus value
     * @return \macropage\ebaysdk\trading\StructType\ReviseStatusType|null
     */
    public function getReviseStatus()
    {
        return $this->ReviseStatus;
    }
    /**
     * Set ReviseStatus value
     * @param \macropage\ebaysdk\trading\StructType\ReviseStatusType $reviseStatus
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setReviseStatus(\macropage\ebaysdk\trading\StructType\ReviseStatusType $reviseStatus = null)
    {
        $this->ReviseStatus = $reviseStatus;
        return $this;
    }
    /**
     * Get ScheduleTime value
     * @return string|null
     */
    public function getScheduleTime()
    {
        return $this->ScheduleTime;
    }
    /**
     * Set ScheduleTime value
     * @param string $scheduleTime
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setScheduleTime($scheduleTime = null)
    {
        // validation for constraint: string
        if (!is_null($scheduleTime) && !is_string($scheduleTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduleTime)), __LINE__);
        }
        $this->ScheduleTime = $scheduleTime;
        return $this;
    }
    /**
     * Get SecondaryCategory value
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function getSecondaryCategory()
    {
        return $this->SecondaryCategory;
    }
    /**
     * Set SecondaryCategory value
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $secondaryCategory
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSecondaryCategory(\macropage\ebaysdk\trading\StructType\CategoryType $secondaryCategory = null)
    {
        $this->SecondaryCategory = $secondaryCategory;
        return $this;
    }
    /**
     * Get FreeAddedCategory value
     * @return \macropage\ebaysdk\trading\StructType\CategoryType|null
     */
    public function getFreeAddedCategory()
    {
        return $this->FreeAddedCategory;
    }
    /**
     * Set FreeAddedCategory value
     * @param \macropage\ebaysdk\trading\StructType\CategoryType $freeAddedCategory
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setFreeAddedCategory(\macropage\ebaysdk\trading\StructType\CategoryType $freeAddedCategory = null)
    {
        $this->FreeAddedCategory = $freeAddedCategory;
        return $this;
    }
    /**
     * Get Seller value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getSeller()
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \macropage\ebaysdk\trading\StructType\UserType $seller
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSeller(\macropage\ebaysdk\trading\StructType\UserType $seller = null)
    {
        $this->Seller = $seller;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSellingStatus(\macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null)
    {
        $this->SellingStatus = $sellingStatus;
        return $this;
    }
    /**
     * Get ShippingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails()
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setShippingDetails(\macropage\ebaysdk\trading\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setShipToLocations(array $shipToLocations = array())
    {
        foreach ($shipToLocations as $itemTypeShipToLocationsItem) {
            // validation for constraint: itemType
            if (!is_string($itemTypeShipToLocationsItem)) {
                throw new \InvalidArgumentException(sprintf('The ShipToLocations property can only contain items of string, "%s" given', is_object($itemTypeShipToLocationsItem) ? get_class($itemTypeShipToLocationsItem) : gettype($itemTypeShipToLocationsItem)), __LINE__);
            }
        }
        $this->ShipToLocations = $shipToLocations;
        return $this;
    }
    /**
     * Add item to ShipToLocations value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $site, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setStartPrice(\macropage\ebaysdk\trading\StructType\AmountType $startPrice = null)
    {
        $this->StartPrice = $startPrice;
        return $this;
    }
    /**
     * Get Storefront value
     * @return \macropage\ebaysdk\trading\StructType\StorefrontType|null
     */
    public function getStorefront()
    {
        return $this->Storefront;
    }
    /**
     * Set Storefront value
     * @param \macropage\ebaysdk\trading\StructType\StorefrontType $storefront
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setStorefront(\macropage\ebaysdk\trading\StructType\StorefrontType $storefront = null)
    {
        $this->Storefront = $storefront;
        return $this;
    }
    /**
     * Get SubTitle value
     * @return string|null
     */
    public function getSubTitle()
    {
        return $this->SubTitle;
    }
    /**
     * Set SubTitle value
     * @param string $subTitle
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSubTitle($subTitle = null)
    {
        // validation for constraint: string
        if (!is_null($subTitle) && !is_string($subTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subTitle)), __LINE__);
        }
        $this->SubTitle = $subTitle;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get UUID value
     * @return string|null
     */
    public function getUUID()
    {
        return $this->UUID;
    }
    /**
     * Set UUID value
     * @param string $uUID
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setUUID($uUID = null)
    {
        // validation for constraint: string
        if (!is_null($uUID) && !is_string($uUID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uUID)), __LINE__);
        }
        $this->UUID = $uUID;
        return $this;
    }
    /**
     * Get VATDetails value
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType|null
     */
    public function getVATDetails()
    {
        return $this->VATDetails;
    }
    /**
     * Set VATDetails value
     * @param \macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setVATDetails(\macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails = null)
    {
        $this->VATDetails = $vATDetails;
        return $this;
    }
    /**
     * Get SellerVacationNote value
     * @return string|null
     */
    public function getSellerVacationNote()
    {
        return $this->SellerVacationNote;
    }
    /**
     * Set SellerVacationNote value
     * @param string $sellerVacationNote
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSellerVacationNote($sellerVacationNote = null)
    {
        // validation for constraint: string
        if (!is_null($sellerVacationNote) && !is_string($sellerVacationNote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerVacationNote)), __LINE__);
        }
        $this->SellerVacationNote = $sellerVacationNote;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get DisableBuyerRequirements value
     * @return bool|null
     */
    public function getDisableBuyerRequirements()
    {
        return $this->DisableBuyerRequirements;
    }
    /**
     * Set DisableBuyerRequirements value
     * @param bool $disableBuyerRequirements
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setDisableBuyerRequirements($disableBuyerRequirements = null)
    {
        // validation for constraint: boolean
        if (!is_null($disableBuyerRequirements) && !is_bool($disableBuyerRequirements)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disableBuyerRequirements)), __LINE__);
        }
        $this->DisableBuyerRequirements = $disableBuyerRequirements;
        return $this;
    }
    /**
     * Get BestOfferDetails value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType|null
     */
    public function getBestOfferDetails()
    {
        return $this->BestOfferDetails;
    }
    /**
     * Set BestOfferDetails value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBestOfferDetails(\macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails = null)
    {
        $this->BestOfferDetails = $bestOfferDetails;
        return $this;
    }
    /**
     * Get LocationDefaulted value
     * @return bool|null
     */
    public function getLocationDefaulted()
    {
        return $this->LocationDefaulted;
    }
    /**
     * Set LocationDefaulted value
     * @param bool $locationDefaulted
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setLocationDefaulted($locationDefaulted = null)
    {
        // validation for constraint: boolean
        if (!is_null($locationDefaulted) && !is_bool($locationDefaulted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($locationDefaulted)), __LINE__);
        }
        $this->LocationDefaulted = $locationDefaulted;
        return $this;
    }
    /**
     * Get UseTaxTable value
     * @return bool|null
     */
    public function getUseTaxTable()
    {
        return $this->UseTaxTable;
    }
    /**
     * Set UseTaxTable value
     * @param bool $useTaxTable
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setUseTaxTable($useTaxTable = null)
    {
        // validation for constraint: boolean
        if (!is_null($useTaxTable) && !is_bool($useTaxTable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useTaxTable)), __LINE__);
        }
        $this->UseTaxTable = $useTaxTable;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get BuyerResponsibleForShipping value
     * @return bool|null
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->BuyerResponsibleForShipping;
    }
    /**
     * Set BuyerResponsibleForShipping value
     * @param bool $buyerResponsibleForShipping
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBuyerResponsibleForShipping($buyerResponsibleForShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyerResponsibleForShipping) && !is_bool($buyerResponsibleForShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($buyerResponsibleForShipping)), __LINE__);
        }
        $this->BuyerResponsibleForShipping = $buyerResponsibleForShipping;
        return $this;
    }
    /**
     * Get LimitedWarrantyEligible value
     * @return bool|null
     */
    public function getLimitedWarrantyEligible()
    {
        return $this->LimitedWarrantyEligible;
    }
    /**
     * Set LimitedWarrantyEligible value
     * @param bool $limitedWarrantyEligible
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setLimitedWarrantyEligible($limitedWarrantyEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($limitedWarrantyEligible) && !is_bool($limitedWarrantyEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($limitedWarrantyEligible)), __LINE__);
        }
        $this->LimitedWarrantyEligible = $limitedWarrantyEligible;
        return $this;
    }
    /**
     * Get eBayNotes value
     * @return string|null
     */
    public function getEBayNotes()
    {
        return $this->eBayNotes;
    }
    /**
     * Set eBayNotes value
     * @param string $eBayNotes
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setEBayNotes($eBayNotes = null)
    {
        // validation for constraint: string
        if (!is_null($eBayNotes) && !is_string($eBayNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eBayNotes)), __LINE__);
        }
        $this->eBayNotes = $eBayNotes;
        return $this;
    }
    /**
     * Get QuestionCount value
     * @return int|null
     */
    public function getQuestionCount()
    {
        return $this->QuestionCount;
    }
    /**
     * Set QuestionCount value
     * @param int $questionCount
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setQuestionCount($questionCount = null)
    {
        // validation for constraint: int
        if (!is_null($questionCount) && !is_numeric($questionCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($questionCount)), __LINE__);
        }
        $this->QuestionCount = $questionCount;
        return $this;
    }
    /**
     * Get Relisted value
     * @return bool|null
     */
    public function getRelisted()
    {
        return $this->Relisted;
    }
    /**
     * Set Relisted value
     * @param bool $relisted
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setRelisted($relisted = null)
    {
        // validation for constraint: boolean
        if (!is_null($relisted) && !is_bool($relisted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($relisted)), __LINE__);
        }
        $this->Relisted = $relisted;
        return $this;
    }
    /**
     * Get QuantityAvailable value
     * @return int|null
     */
    public function getQuantityAvailable()
    {
        return $this->QuantityAvailable;
    }
    /**
     * Set QuantityAvailable value
     * @param int $quantityAvailable
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setQuantityAvailable($quantityAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($quantityAvailable) && !is_numeric($quantityAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantityAvailable)), __LINE__);
        }
        $this->QuantityAvailable = $quantityAvailable;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get SearchDetails value
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType|null
     */
    public function getSearchDetails()
    {
        return $this->SearchDetails;
    }
    /**
     * Set SearchDetails value
     * @param \macropage\ebaysdk\trading\StructType\SearchDetailsType $searchDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSearchDetails(\macropage\ebaysdk\trading\StructType\SearchDetailsType $searchDetails = null)
    {
        $this->SearchDetails = $searchDetails;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get ShippingTermsInDescription value
     * @return bool|null
     */
    public function getShippingTermsInDescription()
    {
        return $this->ShippingTermsInDescription;
    }
    /**
     * Set ShippingTermsInDescription value
     * @param bool $shippingTermsInDescription
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setShippingTermsInDescription($shippingTermsInDescription = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingTermsInDescription) && !is_bool($shippingTermsInDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shippingTermsInDescription)), __LINE__);
        }
        $this->ShippingTermsInDescription = $shippingTermsInDescription;
        return $this;
    }
    /**
     * Get SellerInventoryID value
     * @return string|null
     */
    public function getSellerInventoryID()
    {
        return $this->SellerInventoryID;
    }
    /**
     * Set SellerInventoryID value
     * @param string $sellerInventoryID
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSellerInventoryID($sellerInventoryID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerInventoryID) && !is_string($sellerInventoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerInventoryID)), __LINE__);
        }
        $this->SellerInventoryID = $sellerInventoryID;
        return $this;
    }
    /**
     * Get PictureDetails value
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType|null
     */
    public function getPictureDetails()
    {
        return $this->PictureDetails;
    }
    /**
     * Set PictureDetails value
     * @param \macropage\ebaysdk\trading\StructType\PictureDetailsType $pictureDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPictureDetails(\macropage\ebaysdk\trading\StructType\PictureDetailsType $pictureDetails = null)
    {
        $this->PictureDetails = $pictureDetails;
        return $this;
    }
    /**
     * Get DispatchTimeMax value
     * @return int|null
     */
    public function getDispatchTimeMax()
    {
        return $this->DispatchTimeMax;
    }
    /**
     * Set DispatchTimeMax value
     * @param int $dispatchTimeMax
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setDispatchTimeMax($dispatchTimeMax = null)
    {
        // validation for constraint: int
        if (!is_null($dispatchTimeMax) && !is_numeric($dispatchTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dispatchTimeMax)), __LINE__);
        }
        $this->DispatchTimeMax = $dispatchTimeMax;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get LocalListing value
     * @return bool|null
     */
    public function getLocalListing()
    {
        return $this->LocalListing;
    }
    /**
     * Set LocalListing value
     * @param bool $localListing
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setLocalListing($localListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($localListing) && !is_bool($localListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localListing)), __LINE__);
        }
        $this->LocalListing = $localListing;
        return $this;
    }
    /**
     * Get SellerContactDetails value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getSellerContactDetails()
    {
        return $this->SellerContactDetails;
    }
    /**
     * Set SellerContactDetails value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $sellerContactDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSellerContactDetails(\macropage\ebaysdk\trading\StructType\AddressType $sellerContactDetails = null)
    {
        $this->SellerContactDetails = $sellerContactDetails;
        return $this;
    }
    /**
     * Get TotalQuestionCount value
     * @return int|null
     */
    public function getTotalQuestionCount()
    {
        return $this->TotalQuestionCount;
    }
    /**
     * Set TotalQuestionCount value
     * @param int $totalQuestionCount
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setTotalQuestionCount($totalQuestionCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalQuestionCount) && !is_numeric($totalQuestionCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalQuestionCount)), __LINE__);
        }
        $this->TotalQuestionCount = $totalQuestionCount;
        return $this;
    }
    /**
     * Get ProxyItem value
     * @return bool|null
     */
    public function getProxyItem()
    {
        return $this->ProxyItem;
    }
    /**
     * Set ProxyItem value
     * @param bool $proxyItem
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setProxyItem($proxyItem = null)
    {
        // validation for constraint: boolean
        if (!is_null($proxyItem) && !is_bool($proxyItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($proxyItem)), __LINE__);
        }
        $this->ProxyItem = $proxyItem;
        return $this;
    }
    /**
     * Get ExtendedSellerContactDetails value
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType|null
     */
    public function getExtendedSellerContactDetails()
    {
        return $this->ExtendedSellerContactDetails;
    }
    /**
     * Set ExtendedSellerContactDetails value
     * @param \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType $extendedSellerContactDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setExtendedSellerContactDetails(\macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType $extendedSellerContactDetails = null)
    {
        $this->ExtendedSellerContactDetails = $extendedSellerContactDetails;
        return $this;
    }
    /**
     * Get LeadCount value
     * @return int|null
     */
    public function getLeadCount()
    {
        return $this->LeadCount;
    }
    /**
     * Set LeadCount value
     * @param int $leadCount
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setLeadCount($leadCount = null)
    {
        // validation for constraint: int
        if (!is_null($leadCount) && !is_numeric($leadCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($leadCount)), __LINE__);
        }
        $this->LeadCount = $leadCount;
        return $this;
    }
    /**
     * Get NewLeadCount value
     * @return int|null
     */
    public function getNewLeadCount()
    {
        return $this->NewLeadCount;
    }
    /**
     * Set NewLeadCount value
     * @param int $newLeadCount
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setNewLeadCount($newLeadCount = null)
    {
        // validation for constraint: int
        if (!is_null($newLeadCount) && !is_numeric($newLeadCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($newLeadCount)), __LINE__);
        }
        $this->NewLeadCount = $newLeadCount;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setItemSpecifics(\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
        return $this;
    }
    /**
     * Get GroupCategoryID value
     * @return string|null
     */
    public function getGroupCategoryID()
    {
        return $this->GroupCategoryID;
    }
    /**
     * Set GroupCategoryID value
     * @param string $groupCategoryID
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setGroupCategoryID($groupCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($groupCategoryID) && !is_string($groupCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupCategoryID)), __LINE__);
        }
        $this->GroupCategoryID = $groupCategoryID;
        return $this;
    }
    /**
     * Get ClassifiedAdPayPerLeadFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getClassifiedAdPayPerLeadFee()
    {
        return $this->ClassifiedAdPayPerLeadFee;
    }
    /**
     * Set ClassifiedAdPayPerLeadFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $classifiedAdPayPerLeadFee
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setClassifiedAdPayPerLeadFee(\macropage\ebaysdk\trading\StructType\AmountType $classifiedAdPayPerLeadFee = null)
    {
        $this->ClassifiedAdPayPerLeadFee = $classifiedAdPayPerLeadFee;
        return $this;
    }
    /**
     * Get BidGroupItem value
     * @return bool|null
     */
    public function getBidGroupItem()
    {
        return $this->BidGroupItem;
    }
    /**
     * Set BidGroupItem value
     * @param bool $bidGroupItem
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBidGroupItem($bidGroupItem = null)
    {
        // validation for constraint: boolean
        if (!is_null($bidGroupItem) && !is_bool($bidGroupItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bidGroupItem)), __LINE__);
        }
        $this->BidGroupItem = $bidGroupItem;
        return $this;
    }
    /**
     * Get ApplyBuyerProtection value
     * @return \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType|null
     */
    public function getApplyBuyerProtection()
    {
        return $this->ApplyBuyerProtection;
    }
    /**
     * Set ApplyBuyerProtection value
     * @param \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType $applyBuyerProtection
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setApplyBuyerProtection(\macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType $applyBuyerProtection = null)
    {
        $this->ApplyBuyerProtection = $applyBuyerProtection;
        return $this;
    }
    /**
     * Get ListingSubtype2 value
     * @return string|null
     */
    public function getListingSubtype2()
    {
        return $this->ListingSubtype2;
    }
    /**
     * Set ListingSubtype2 value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingSubtypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingSubtypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingSubtype2
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setListingSubtype2($listingSubtype2 = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingSubtypeCodeType::valueIsValid($listingSubtype2)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingSubtype2, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingSubtypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingSubtype2 = $listingSubtype2;
        return $this;
    }
    /**
     * Get MechanicalCheckAccepted value
     * @return bool|null
     */
    public function getMechanicalCheckAccepted()
    {
        return $this->MechanicalCheckAccepted;
    }
    /**
     * Set MechanicalCheckAccepted value
     * @param bool $mechanicalCheckAccepted
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setMechanicalCheckAccepted($mechanicalCheckAccepted = null)
    {
        // validation for constraint: boolean
        if (!is_null($mechanicalCheckAccepted) && !is_bool($mechanicalCheckAccepted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mechanicalCheckAccepted)), __LINE__);
        }
        $this->MechanicalCheckAccepted = $mechanicalCheckAccepted;
        return $this;
    }
    /**
     * Get UpdateSellerInfo value
     * @return bool|null
     */
    public function getUpdateSellerInfo()
    {
        return $this->UpdateSellerInfo;
    }
    /**
     * Set UpdateSellerInfo value
     * @param bool $updateSellerInfo
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setUpdateSellerInfo($updateSellerInfo = null)
    {
        // validation for constraint: boolean
        if (!is_null($updateSellerInfo) && !is_bool($updateSellerInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($updateSellerInfo)), __LINE__);
        }
        $this->UpdateSellerInfo = $updateSellerInfo;
        return $this;
    }
    /**
     * Get UpdateReturnPolicy value
     * @return bool|null
     */
    public function getUpdateReturnPolicy()
    {
        return $this->UpdateReturnPolicy;
    }
    /**
     * Set UpdateReturnPolicy value
     * @param bool $updateReturnPolicy
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setUpdateReturnPolicy($updateReturnPolicy = null)
    {
        // validation for constraint: boolean
        if (!is_null($updateReturnPolicy) && !is_bool($updateReturnPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($updateReturnPolicy)), __LINE__);
        }
        $this->UpdateReturnPolicy = $updateReturnPolicy;
        return $this;
    }
    /**
     * Get ItemPolicyViolation value
     * @return \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType|null
     */
    public function getItemPolicyViolation()
    {
        return $this->ItemPolicyViolation;
    }
    /**
     * Set ItemPolicyViolation value
     * @param \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType $itemPolicyViolation
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setItemPolicyViolation(\macropage\ebaysdk\trading\StructType\ItemPolicyViolationType $itemPolicyViolation = null)
    {
        $this->ItemPolicyViolation = $itemPolicyViolation;
        return $this;
    }
    /**
     * Get CrossBorderTrade value
     * @return string[]|null
     */
    public function getCrossBorderTrade()
    {
        return $this->CrossBorderTrade;
    }
    /**
     * Set CrossBorderTrade value
     * @throws \InvalidArgumentException
     * @param string[] $crossBorderTrade
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setCrossBorderTrade(array $crossBorderTrade = array())
    {
        foreach ($crossBorderTrade as $itemTypeCrossBorderTradeItem) {
            // validation for constraint: itemType
            if (!is_string($itemTypeCrossBorderTradeItem)) {
                throw new \InvalidArgumentException(sprintf('The CrossBorderTrade property can only contain items of string, "%s" given', is_object($itemTypeCrossBorderTradeItem) ? get_class($itemTypeCrossBorderTradeItem) : gettype($itemTypeCrossBorderTradeItem)), __LINE__);
            }
        }
        $this->CrossBorderTrade = $crossBorderTrade;
        return $this;
    }
    /**
     * Add item to CrossBorderTrade value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function addToCrossBorderTrade($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CrossBorderTrade property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CrossBorderTrade[] = $item;
        return $this;
    }
    /**
     * Get BusinessSellerDetails value
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType|null
     */
    public function getBusinessSellerDetails()
    {
        return $this->BusinessSellerDetails;
    }
    /**
     * Set BusinessSellerDetails value
     * @param \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType $businessSellerDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBusinessSellerDetails(\macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType $businessSellerDetails = null)
    {
        $this->BusinessSellerDetails = $businessSellerDetails;
        return $this;
    }
    /**
     * Get BuyerGuaranteePrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBuyerGuaranteePrice()
    {
        return $this->BuyerGuaranteePrice;
    }
    /**
     * Set BuyerGuaranteePrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $buyerGuaranteePrice
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBuyerGuaranteePrice(\macropage\ebaysdk\trading\StructType\AmountType $buyerGuaranteePrice = null)
    {
        $this->BuyerGuaranteePrice = $buyerGuaranteePrice;
        return $this;
    }
    /**
     * Get BuyerRequirementDetails value
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType|null
     */
    public function getBuyerRequirementDetails()
    {
        return $this->BuyerRequirementDetails;
    }
    /**
     * Set BuyerRequirementDetails value
     * @param \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType $buyerRequirementDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setBuyerRequirementDetails(\macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType $buyerRequirementDetails = null)
    {
        $this->BuyerRequirementDetails = $buyerRequirementDetails;
        return $this;
    }
    /**
     * Get ReturnPolicy value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyType|null
     */
    public function getReturnPolicy()
    {
        return $this->ReturnPolicy;
    }
    /**
     * Set ReturnPolicy value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyType $returnPolicy
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setReturnPolicy(\macropage\ebaysdk\trading\StructType\ReturnPolicyType $returnPolicy = null)
    {
        $this->ReturnPolicy = $returnPolicy;
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
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentAllowedSite
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPaymentAllowedSite(array $paymentAllowedSite = array())
    {
        $invalidValues = array();
        foreach ($paymentAllowedSite as $itemTypePaymentAllowedSiteItem) {
            if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($itemTypePaymentAllowedSiteItem)) {
                $invalidValues[] = var_export($itemTypePaymentAllowedSiteItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentAllowedSite = $paymentAllowedSite;
        return $this;
    }
    /**
     * Add item to PaymentAllowedSite value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function addToPaymentAllowedSite($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentAllowedSite[] = $item;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationsType|null
     */
    public function getVariations()
    {
        return $this->Variations;
    }
    /**
     * Set Variations value
     * @param \macropage\ebaysdk\trading\StructType\VariationsType $variations
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setVariations(\macropage\ebaysdk\trading\StructType\VariationsType $variations = null)
    {
        $this->Variations = $variations;
        return $this;
    }
    /**
     * Get ItemCompatibilityList value
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType|null
     */
    public function getItemCompatibilityList()
    {
        return $this->ItemCompatibilityList;
    }
    /**
     * Set ItemCompatibilityList value
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType $itemCompatibilityList
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setItemCompatibilityList(\macropage\ebaysdk\trading\StructType\ItemCompatibilityListType $itemCompatibilityList = null)
    {
        $this->ItemCompatibilityList = $itemCompatibilityList;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get TaxCategory value
     * @return string|null
     */
    public function getTaxCategory()
    {
        return $this->TaxCategory;
    }
    /**
     * Set TaxCategory value
     * @param string $taxCategory
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setTaxCategory($taxCategory = null)
    {
        // validation for constraint: string
        if (!is_null($taxCategory) && !is_string($taxCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxCategory)), __LINE__);
        }
        $this->TaxCategory = $taxCategory;
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
     * @uses \macropage\ebaysdk\trading\EnumType\QuantityAvailableHintCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\QuantityAvailableHintCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $quantityAvailableHint
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setQuantityAvailableHint($quantityAvailableHint = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\QuantityAvailableHintCodeType::valueIsValid($quantityAvailableHint)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $quantityAvailableHint, implode(', ', \macropage\ebaysdk\trading\EnumType\QuantityAvailableHintCodeType::getValidValues())), __LINE__);
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType|null
     */
    public function getDiscountPriceInfo()
    {
        return $this->DiscountPriceInfo;
    }
    /**
     * Set DiscountPriceInfo value
     * @param \macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setDiscountPriceInfo(\macropage\ebaysdk\trading\StructType\DiscountPriceInfoType $discountPriceInfo = null)
    {
        $this->DiscountPriceInfo = $discountPriceInfo;
        return $this;
    }
    /**
     * Get SellerProvidedTitle value
     * @return string|null
     */
    public function getSellerProvidedTitle()
    {
        return $this->SellerProvidedTitle;
    }
    /**
     * Set SellerProvidedTitle value
     * @param string $sellerProvidedTitle
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSellerProvidedTitle($sellerProvidedTitle = null)
    {
        // validation for constraint: string
        if (!is_null($sellerProvidedTitle) && !is_string($sellerProvidedTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerProvidedTitle)), __LINE__);
        }
        $this->SellerProvidedTitle = $sellerProvidedTitle;
        return $this;
    }
    /**
     * Get VIN value
     * @return string|null
     */
    public function getVIN()
    {
        return $this->VIN;
    }
    /**
     * Set VIN value
     * @param string $vIN
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setVIN($vIN = null)
    {
        // validation for constraint: string
        if (!is_null($vIN) && !is_string($vIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vIN)), __LINE__);
        }
        $this->VIN = $vIN;
        return $this;
    }
    /**
     * Get VINLink value
     * @return string|null
     */
    public function getVINLink()
    {
        return $this->VINLink;
    }
    /**
     * Set VINLink value
     * @param string $vINLink
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setVINLink($vINLink = null)
    {
        // validation for constraint: string
        if (!is_null($vINLink) && !is_string($vINLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vINLink)), __LINE__);
        }
        $this->VINLink = $vINLink;
        return $this;
    }
    /**
     * Get VRM value
     * @return string|null
     */
    public function getVRM()
    {
        return $this->VRM;
    }
    /**
     * Set VRM value
     * @param string $vRM
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setVRM($vRM = null)
    {
        // validation for constraint: string
        if (!is_null($vRM) && !is_string($vRM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vRM)), __LINE__);
        }
        $this->VRM = $vRM;
        return $this;
    }
    /**
     * Get VRMLink value
     * @return string|null
     */
    public function getVRMLink()
    {
        return $this->VRMLink;
    }
    /**
     * Set VRMLink value
     * @param string $vRMLink
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setVRMLink($vRMLink = null)
    {
        // validation for constraint: string
        if (!is_null($vRMLink) && !is_string($vRMLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vRMLink)), __LINE__);
        }
        $this->VRMLink = $vRMLink;
        return $this;
    }
    /**
     * Get QuantityInfo value
     * @return \macropage\ebaysdk\trading\StructType\QuantityInfoType|null
     */
    public function getQuantityInfo()
    {
        return $this->QuantityInfo;
    }
    /**
     * Set QuantityInfo value
     * @param \macropage\ebaysdk\trading\StructType\QuantityInfoType $quantityInfo
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setQuantityInfo(\macropage\ebaysdk\trading\StructType\QuantityInfoType $quantityInfo = null)
    {
        $this->QuantityInfo = $quantityInfo;
        return $this;
    }
    /**
     * Get SellerProfiles value
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType|null
     */
    public function getSellerProfiles()
    {
        return $this->SellerProfiles;
    }
    /**
     * Set SellerProfiles value
     * @param \macropage\ebaysdk\trading\StructType\SellerProfilesType $sellerProfiles
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setSellerProfiles(\macropage\ebaysdk\trading\StructType\SellerProfilesType $sellerProfiles = null)
    {
        $this->SellerProfiles = $sellerProfiles;
        return $this;
    }
    /**
     * Get ShippingServiceCostOverrideList value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType|null
     */
    public function getShippingServiceCostOverrideList()
    {
        return $this->ShippingServiceCostOverrideList;
    }
    /**
     * Set ShippingServiceCostOverrideList value
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setShippingServiceCostOverrideList(\macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType $shippingServiceCostOverrideList = null)
    {
        $this->ShippingServiceCostOverrideList = $shippingServiceCostOverrideList;
        return $this;
    }
    /**
     * Get ShippingOverride value
     * @return \macropage\ebaysdk\trading\StructType\ShippingOverrideType|null
     */
    public function getShippingOverride()
    {
        return $this->ShippingOverride;
    }
    /**
     * Set ShippingOverride value
     * @param \macropage\ebaysdk\trading\StructType\ShippingOverrideType $shippingOverride
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setShippingOverride(\macropage\ebaysdk\trading\StructType\ShippingOverrideType $shippingOverride = null)
    {
        $this->ShippingOverride = $shippingOverride;
        return $this;
    }
    /**
     * Get ShippingPackageDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType|null
     */
    public function getShippingPackageDetails()
    {
        return $this->ShippingPackageDetails;
    }
    /**
     * Set ShippingPackageDetails value
     * @param \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType $shippingPackageDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setShippingPackageDetails(\macropage\ebaysdk\trading\StructType\ShipPackageDetailsType $shippingPackageDetails = null)
    {
        $this->ShippingPackageDetails = $shippingPackageDetails;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get QuantityRestrictionPerBuyer value
     * @return \macropage\ebaysdk\trading\StructType\QuantityRestrictionPerBuyerInfoType|null
     */
    public function getQuantityRestrictionPerBuyer()
    {
        return $this->QuantityRestrictionPerBuyer;
    }
    /**
     * Set QuantityRestrictionPerBuyer value
     * @param \macropage\ebaysdk\trading\StructType\QuantityRestrictionPerBuyerInfoType $quantityRestrictionPerBuyer
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setQuantityRestrictionPerBuyer(\macropage\ebaysdk\trading\StructType\QuantityRestrictionPerBuyerInfoType $quantityRestrictionPerBuyer = null)
    {
        $this->QuantityRestrictionPerBuyer = $quantityRestrictionPerBuyer;
        return $this;
    }
    /**
     * Get FloorPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFloorPrice()
    {
        return $this->FloorPrice;
    }
    /**
     * Set FloorPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $floorPrice
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setFloorPrice(\macropage\ebaysdk\trading\StructType\AmountType $floorPrice = null)
    {
        $this->FloorPrice = $floorPrice;
        return $this;
    }
    /**
     * Get CeilingPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCeilingPrice()
    {
        return $this->CeilingPrice;
    }
    /**
     * Set CeilingPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $ceilingPrice
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setCeilingPrice(\macropage\ebaysdk\trading\StructType\AmountType $ceilingPrice = null)
    {
        $this->CeilingPrice = $ceilingPrice;
        return $this;
    }
    /**
     * Get IsIntermediatedShippingEligible value
     * @return bool|null
     */
    public function getIsIntermediatedShippingEligible()
    {
        return $this->IsIntermediatedShippingEligible;
    }
    /**
     * Set IsIntermediatedShippingEligible value
     * @param bool $isIntermediatedShippingEligible
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setIsIntermediatedShippingEligible($isIntermediatedShippingEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isIntermediatedShippingEligible) && !is_bool($isIntermediatedShippingEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isIntermediatedShippingEligible)), __LINE__);
        }
        $this->IsIntermediatedShippingEligible = $isIntermediatedShippingEligible;
        return $this;
    }
    /**
     * Get UnitInfo value
     * @return \macropage\ebaysdk\trading\StructType\UnitInfoType|null
     */
    public function getUnitInfo()
    {
        return $this->UnitInfo;
    }
    /**
     * Set UnitInfo value
     * @param \macropage\ebaysdk\trading\StructType\UnitInfoType $unitInfo
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setUnitInfo(\macropage\ebaysdk\trading\StructType\UnitInfoType $unitInfo = null)
    {
        $this->UnitInfo = $unitInfo;
        return $this;
    }
    /**
     * Get RelistParentID value
     * @return int|null
     */
    public function getRelistParentID()
    {
        return $this->RelistParentID;
    }
    /**
     * Set RelistParentID value
     * @param int $relistParentID
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setRelistParentID($relistParentID = null)
    {
        // validation for constraint: int
        if (!is_null($relistParentID) && !is_numeric($relistParentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($relistParentID)), __LINE__);
        }
        $this->RelistParentID = $relistParentID;
        return $this;
    }
    /**
     * Get ConditionDefinition value
     * @return string|null
     */
    public function getConditionDefinition()
    {
        return $this->ConditionDefinition;
    }
    /**
     * Set ConditionDefinition value
     * @param string $conditionDefinition
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setConditionDefinition($conditionDefinition = null)
    {
        // validation for constraint: string
        if (!is_null($conditionDefinition) && !is_string($conditionDefinition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conditionDefinition)), __LINE__);
        }
        $this->ConditionDefinition = $conditionDefinition;
        return $this;
    }
    /**
     * Get HideFromSearch value
     * @return bool|null
     */
    public function getHideFromSearch()
    {
        return $this->HideFromSearch;
    }
    /**
     * Set HideFromSearch value
     * @param bool $hideFromSearch
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setHideFromSearch($hideFromSearch = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideFromSearch) && !is_bool($hideFromSearch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hideFromSearch)), __LINE__);
        }
        $this->HideFromSearch = $hideFromSearch;
        return $this;
    }
    /**
     * Get ReasonHideFromSearch value
     * @return string|null
     */
    public function getReasonHideFromSearch()
    {
        return $this->ReasonHideFromSearch;
    }
    /**
     * Set ReasonHideFromSearch value
     * @uses \macropage\ebaysdk\trading\EnumType\ReasonHideFromSearchCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReasonHideFromSearchCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reasonHideFromSearch
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setReasonHideFromSearch($reasonHideFromSearch = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReasonHideFromSearchCodeType::valueIsValid($reasonHideFromSearch)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reasonHideFromSearch, implode(', ', \macropage\ebaysdk\trading\EnumType\ReasonHideFromSearchCodeType::getValidValues())), __LINE__);
        }
        $this->ReasonHideFromSearch = $reasonHideFromSearch;
        return $this;
    }
    /**
     * Get IncludeRecommendations value
     * @return bool|null
     */
    public function getIncludeRecommendations()
    {
        return $this->IncludeRecommendations;
    }
    /**
     * Set IncludeRecommendations value
     * @param bool $includeRecommendations
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setIncludeRecommendations($includeRecommendations = false)
    {
        // validation for constraint: boolean
        if (!is_null($includeRecommendations) && !is_bool($includeRecommendations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeRecommendations)), __LINE__);
        }
        $this->IncludeRecommendations = $includeRecommendations;
        return $this;
    }
    /**
     * Get PickupInStoreDetails value
     * @return \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType|null
     */
    public function getPickupInStoreDetails()
    {
        return $this->PickupInStoreDetails;
    }
    /**
     * Set PickupInStoreDetails value
     * @param \macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType $pickupInStoreDetails
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setPickupInStoreDetails(\macropage\ebaysdk\trading\StructType\PickupInStoreDetailsType $pickupInStoreDetails = null)
    {
        $this->PickupInStoreDetails = $pickupInStoreDetails;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * Get LiveAuction value
     * @return bool|null
     */
    public function getLiveAuction()
    {
        return $this->LiveAuction;
    }
    /**
     * Set LiveAuction value
     * @param bool $liveAuction
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setLiveAuction($liveAuction = null)
    {
        // validation for constraint: boolean
        if (!is_null($liveAuction) && !is_bool($liveAuction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($liveAuction)), __LINE__);
        }
        $this->LiveAuction = $liveAuction;
        return $this;
    }
    /**
     * Get DigitalGoodInfo value
     * @return \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType|null
     */
    public function getDigitalGoodInfo()
    {
        return $this->DigitalGoodInfo;
    }
    /**
     * Set DigitalGoodInfo value
     * @param \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType $digitalGoodInfo
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setDigitalGoodInfo(\macropage\ebaysdk\trading\StructType\DigitalGoodInfoType $digitalGoodInfo = null)
    {
        $this->DigitalGoodInfo = $digitalGoodInfo;
        return $this;
    }
    /**
     * Get eBayPlus value
     * @return bool|null
     */
    public function getEBayPlus()
    {
        return $this->eBayPlus;
    }
    /**
     * Set eBayPlus value
     * @param bool $eBayPlus
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setEBayPlus($eBayPlus = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayPlus) && !is_bool($eBayPlus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayPlus)), __LINE__);
        }
        $this->eBayPlus = $eBayPlus;
        return $this;
    }
    /**
     * Get eBayPlusEligible value
     * @return bool|null
     */
    public function getEBayPlusEligible()
    {
        return $this->eBayPlusEligible;
    }
    /**
     * Set eBayPlusEligible value
     * @param bool $eBayPlusEligible
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setEBayPlusEligible($eBayPlusEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayPlusEligible) && !is_bool($eBayPlusEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayPlusEligible)), __LINE__);
        }
        $this->eBayPlusEligible = $eBayPlusEligible;
        return $this;
    }
    /**
     * Get eMailDeliveryAvailable value
     * @return bool|null
     */
    public function getEMailDeliveryAvailable()
    {
        return $this->eMailDeliveryAvailable;
    }
    /**
     * Set eMailDeliveryAvailable value
     * @param bool $eMailDeliveryAvailable
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setEMailDeliveryAvailable($eMailDeliveryAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($eMailDeliveryAvailable) && !is_bool($eMailDeliveryAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eMailDeliveryAvailable)), __LINE__);
        }
        $this->eMailDeliveryAvailable = $eMailDeliveryAvailable;
        return $this;
    }
    /**
     * Get IsSecureDescription value
     * @return bool|null
     */
    public function getIsSecureDescription()
    {
        return $this->IsSecureDescription;
    }
    /**
     * Set IsSecureDescription value
     * @param bool $isSecureDescription
     * @return \macropage\ebaysdk\trading\StructType\ItemType
     */
    public function setIsSecureDescription($isSecureDescription = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSecureDescription) && !is_bool($isSecureDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSecureDescription)), __LINE__);
        }
        $this->IsSecureDescription = $isSecureDescription;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemType
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
