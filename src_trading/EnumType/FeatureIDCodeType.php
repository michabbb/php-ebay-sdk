<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeatureIDCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists all possible values that can be passed into the <b>FeatureID</b> field in a <b>GetCategoryFeatures</b> call. The <b>FeatureID</b> field is to used to check if specific listing features are enabled at the
 * site or category level. Multiple <b>FeatureID</b> fields can be used in the request. If no <b>FeatureID</b> fields are used, the call retrieves data for all features defined within this enumerated type.
 * @subpackage Enumerations
 */
class FeatureIDCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ListingDurations'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, supported site-default and category-specific listing durations values for each listing type are returned in the <b>SiteDefaults.ListingDuration</b> and <b>Category.ListingDuration</b> fields of the
     * <b>GetCategoryFeatures</b> response.
     * @return string 'ListingDurations'
     */
    const VALUE_LISTING_DURATIONS = 'ListingDurations';
    /**
     * Constant for value 'BestOfferEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.BestOfferEnabled</b> and <b>Category.BestOfferEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports the
     * Best Offer feature, and which categories allow the Best Offer feature. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia, France, Italy, and Spain
     * marketplaces, but keep in mind that Best Offer and Buy It Now cannot be used simultaneously in a listing. Also, once a qualifying bid is made on an auction listing, the Best Offer feature is disabled, and any pending offer or counteroffers are no
     * longer valid. </span>
     * @return string 'BestOfferEnabled'
     */
    const VALUE_BEST_OFFER_ENABLED = 'BestOfferEnabled';
    /**
     * Constant for value 'DutchBINEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b>, as Dutch-style auctions are no longer available on any eBay sites.
     * @return string 'DutchBINEnabled'
     */
    const VALUE_DUTCH_BINENABLED = 'DutchBINEnabled';
    /**
     * Constant for value 'ShippingTermsRequired'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ShippingTermsRequired</b> and <b>Category.ShippingTermsRequired</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site, and
     * individual categories on that site, require at least one domestic shipping service option (with cost) to be specified before an item is listed.
     * @return string 'ShippingTermsRequired'
     */
    const VALUE_SHIPPING_TERMS_REQUIRED = 'ShippingTermsRequired';
    /**
     * Constant for value 'UserConsentRequired'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.UserConsentRequired</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site requires a prospective bidder of an auction item to
     * read and agree to the terms in eBay's privacy policy before bidding on the item.
     * @return string 'UserConsentRequired'
     */
    const VALUE_USER_CONSENT_REQUIRED = 'UserConsentRequired';
    /**
     * Constant for value 'HomePageFeaturedEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.HomePageFeaturedEnabled</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports the featuring of items within a
     * special area of eBay's home page. This is a listing enhancement that requires a fee, and support for this feature varies by site.
     * @return string 'HomePageFeaturedEnabled'
     */
    const VALUE_HOME_PAGE_FEATURED_ENABLED = 'HomePageFeaturedEnabled';
    /**
     * Constant for value 'AdFormatEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.AdFormatEnabled</b> and <b>Category.AdFormatEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and individual categories
     * support Classified Ad listings.
     * @return string 'AdFormatEnabled'
     */
    const VALUE_AD_FORMAT_ENABLED = 'AdFormatEnabled';
    /**
     * Constant for value 'DigitalDeliveryEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'DigitalDeliveryEnabled'
     */
    const VALUE_DIGITAL_DELIVERY_ENABLED = 'DigitalDeliveryEnabled';
    /**
     * Constant for value 'BestOfferCounterEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.BestOfferCounterEnabled</b> and <b>Category.BestOfferCounterEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site
     * supports the Best Offer counter offers, and which categories allow the Best Offer counter offers. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia,
     * France, Italy, and Spain marketplaces, but keep in mind that Best Offer and Buy It Now cannot be used simultaneously in a listing. Also, once a qualifying bid is made on an auction listing, the Best Offer feature is disabled, and any pending offer or
     * counteroffers are no longer valid. </span>
     * @return string 'BestOfferCounterEnabled'
     */
    const VALUE_BEST_OFFER_COUNTER_ENABLED = 'BestOfferCounterEnabled';
    /**
     * Constant for value 'BestOfferAutoDeclineEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.BestOfferAutoDeclineEnabled</b> and <b>Category.BestOfferAutoDeclineEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay
     * site and individual categories support the Best Offer auto decline feature. With the Best Offer auto decline feature, the seller sets a price threshold, and all Best Offers and counter offers below this price value are automatically declined without
     * any seller action. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia, France, Italy, and Spain marketplaces, but keep in mind that Best Offer and Buy It
     * Now cannot be used simultaneously in a listing. Also, once a qualifying bid is made on an auction listing, the Best Offer feature is disabled, and any pending offer or counteroffers are no longer valid. </span>
     * @return string 'BestOfferAutoDeclineEnabled'
     */
    const VALUE_BEST_OFFER_AUTO_DECLINE_ENABLED = 'BestOfferAutoDeclineEnabled';
    /**
     * Constant for value 'ProPack'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ProPackEnabled</b> and <b>Category.ProPackEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and individual
     * categories support the Pro Pack listing enhancement bundle.
     * @return string 'ProPack'
     */
    const VALUE_PRO_PACK = 'ProPack';
    /**
     * Constant for value 'BasicUpgradePack'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'BasicUpgradePack'
     */
    const VALUE_BASIC_UPGRADE_PACK = 'BasicUpgradePack';
    /**
     * Constant for value 'ValuePack'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ValuePackEnabled</b> and <b>Category.ValuePackEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and individual
     * categories support the Value Pack listing enhancement bundle. The Value Pack bundle includes the Gallery Plus feature, a listing subtitle, and use of a Listing Designer template. <br> <br> <span class="tablenote"><b>Note:</b> As of May 31, 2020,
     * sellers are no longer able to use Listing Designer templates when they create or revise listings, so use of a Listing Designer template will no longer be a part of this bundle.</span>
     * @return string 'ValuePack'
     */
    const VALUE_VALUE_PACK = 'ValuePack';
    /**
     * Constant for value 'ProPackPlus'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ProPackPlusEnabled</b> and <b>Category.ProPackPlusEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories support the Pro Pack Plus listing enhancement bundle. The Pro Pack Plus bundle includes the Bold Title, Border, Highlight, Featured, and Gallery features for a discounted price.
     * @return string 'ProPackPlus'
     */
    const VALUE_PRO_PACK_PLUS = 'ProPackPlus';
    /**
     * Constant for value 'LocalMarketSpecialitySubscription'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketSpecialitySubscription</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports Local Market listings for
     * sellers with a specialty subscription to Local Market for Vehicles.
     * @return string 'LocalMarketSpecialitySubscription'
     */
    const VALUE_LOCAL_MARKET_SPECIALITY_SUBSCRIPTION = 'LocalMarketSpecialitySubscription';
    /**
     * Constant for value 'LocalMarketRegularSubscription'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketRegularSubscription</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports Local Market listings for
     * sellers with a regular subscription to Local Market for Vehicles.
     * @return string 'LocalMarketRegularSubscription'
     */
    const VALUE_LOCAL_MARKET_REGULAR_SUBSCRIPTION = 'LocalMarketRegularSubscription';
    /**
     * Constant for value 'LocalMarketPremiumSubscription'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketPremiumSubscription</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports Local Market listings for
     * sellers with a premium subscription to Local Market for Vehicles.
     * @return string 'LocalMarketPremiumSubscription'
     */
    const VALUE_LOCAL_MARKET_PREMIUM_SUBSCRIPTION = 'LocalMarketPremiumSubscription';
    /**
     * Constant for value 'LocalMarketNonSubscription'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketNonSubscription</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports Local Market listings for sellers
     * without a subscription to Local Market for Vehicles.
     * @return string 'LocalMarketNonSubscription'
     */
    const VALUE_LOCAL_MARKET_NON_SUBSCRIPTION = 'LocalMarketNonSubscription';
    /**
     * Constant for value 'ExpressEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'ExpressEnabled'
     */
    const VALUE_EXPRESS_ENABLED = 'ExpressEnabled';
    /**
     * Constant for value 'ExpressPicturesRequired'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'ExpressPicturesRequired'
     */
    const VALUE_EXPRESS_PICTURES_REQUIRED = 'ExpressPicturesRequired';
    /**
     * Constant for value 'ExpressConditionRequired'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'ExpressConditionRequired'
     */
    const VALUE_EXPRESS_CONDITION_REQUIRED = 'ExpressConditionRequired';
    /**
     * Constant for value 'SellerContactDetailsEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.SellerContactDetailsEnabled</b> and <b>Category.SellerContactDetailsEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay
     * site and individual categories allow the seller to provide contact information within a Classified Ad listing. This feature is only applicable to Classified Ad listings.
     * @return string 'SellerContactDetailsEnabled'
     */
    const VALUE_SELLER_CONTACT_DETAILS_ENABLED = 'SellerContactDetailsEnabled';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'MinimumReservePrice'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.MinimumReservePrice</b> and <b>Category.MinimumReservePrice</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and individual
     * categories require a minimum Reserve Price for auction listings. This feature is only applicable to Auction listings and only if the seller decides to set a Reserve Price for the auction.
     * @return string 'MinimumReservePrice'
     */
    const VALUE_MINIMUM_RESERVE_PRICE = 'MinimumReservePrice';
    /**
     * Constant for value 'TransactionConfirmationRequestEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'TransactionConfirmationRequestEnabled'
     */
    const VALUE_TRANSACTION_CONFIRMATION_REQUEST_ENABLED = 'TransactionConfirmationRequestEnabled';
    /**
     * Constant for value 'StoreInventoryEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'StoreInventoryEnabled'
     */
    const VALUE_STORE_INVENTORY_ENABLED = 'StoreInventoryEnabled';
    /**
     * Constant for value 'LocalListingDistances'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the integer values in the <b>LocalListingDistancesRegular</b>, <b>LocalListingDistancesSpecialty</b>, and <b>LocalListingDistancesNonSubscription</b> fields in the <b>GetCategoryFeatures</b> response will
     * indicate the radius (in miles) of the selling area for Local Market Vehicle listings, based on Local Market subscription status of the motor vehicle seller (specialty subscription, regular subscription, or no subscription).
     * @return string 'LocalListingDistances'
     */
    const VALUE_LOCAL_LISTING_DISTANCES = 'LocalListingDistances';
    /**
     * Constant for value 'SkypeMeTransactionalEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, as Skype communication between eBay members is no longer supported.
     * @return string 'SkypeMeTransactionalEnabled'
     */
    const VALUE_SKYPE_ME_TRANSACTIONAL_ENABLED = 'SkypeMeTransactionalEnabled';
    /**
     * Constant for value 'SkypeMeNonTransactionalEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, as Skype communication between eBay members is no longer supported.
     * @return string 'SkypeMeNonTransactionalEnabled'
     */
    const VALUE_SKYPE_ME_NON_TRANSACTIONAL_ENABLED = 'SkypeMeNonTransactionalEnabled';
    /**
     * Constant for value 'ClassifiedAdPaymentMethodEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdPaymentMethodEnabled</b> and <b>Category.ClassifiedAdPaymentMethodEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not (and when)
     * accepted payment methods are displayed to buyers for the specified eBay site and for individual categories. This feature is only applicable for Classified Ad listings.
     * @return string 'ClassifiedAdPaymentMethodEnabled'
     */
    const VALUE_CLASSIFIED_AD_PAYMENT_METHOD_ENABLED = 'ClassifiedAdPaymentMethodEnabled';
    /**
     * Constant for value 'ClassifiedAdShippingMethodEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdShippingMethodEnabled</b> and <b>Category.ClassifiedAdShippingMethodEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support the display of available shipping methods to buyers. This feature is only applicable for Classified Ad listings.
     * @return string 'ClassifiedAdShippingMethodEnabled'
     */
    const VALUE_CLASSIFIED_AD_SHIPPING_METHOD_ENABLED = 'ClassifiedAdShippingMethodEnabled';
    /**
     * Constant for value 'ClassifiedAdBestOfferEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdBestOfferEnabled</b> and <b>Category.ClassifiedAdBestOfferEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer feature for Classified Ad listings.
     * @return string 'ClassifiedAdBestOfferEnabled'
     */
    const VALUE_CLASSIFIED_AD_BEST_OFFER_ENABLED = 'ClassifiedAdBestOfferEnabled';
    /**
     * Constant for value 'ClassifiedAdCounterOfferEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdCounterOfferEnabled</b> and <b>Category.ClassifiedAdCounterOfferEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support Best Offer counter offers for Classified Ad listings. This feature is only applicable for Classified Ad listings.
     * @return string 'ClassifiedAdCounterOfferEnabled'
     */
    const VALUE_CLASSIFIED_AD_COUNTER_OFFER_ENABLED = 'ClassifiedAdCounterOfferEnabled';
    /**
     * Constant for value 'ClassifiedAdAutoDeclineEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdAutoDeclineEnabled</b> and <b>Category.ClassifiedAdAutoDeclineEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support the Best Offer auto decline feature for Classified Ad listings. With the Best Offer auto decline feature, the seller sets a price threshold, and all Best Offers and counter offers below this price
     * value are automatically declined without any seller action. This feature is only applicable for Classified Ad listings.
     * @return string 'ClassifiedAdAutoDeclineEnabled'
     */
    const VALUE_CLASSIFIED_AD_AUTO_DECLINE_ENABLED = 'ClassifiedAdAutoDeclineEnabled';
    /**
     * Constant for value 'ClassifiedAdContactByEmailEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdContactByEmailEnabled</b> and <b>Category.ClassifiedAdContactByEmailEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow the seller to provide a contact email address within a Classified Ad listing. This feature is only applicable to Classified Ad listings.
     * @return string 'ClassifiedAdContactByEmailEnabled'
     */
    const VALUE_CLASSIFIED_AD_CONTACT_BY_EMAIL_ENABLED = 'ClassifiedAdContactByEmailEnabled';
    /**
     * Constant for value 'ClassifiedAdContactByPhoneEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdContactByPhoneEnabled</b> and <b>Category.ClassifiedAdContactByPhoneEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow the seller to provide a contact phone number within a Classified Ad listing. This feature is only applicable to Classified Ad listings.
     * @return string 'ClassifiedAdContactByPhoneEnabled'
     */
    const VALUE_CLASSIFIED_AD_CONTACT_BY_PHONE_ENABLED = 'ClassifiedAdContactByPhoneEnabled';
    /**
     * Constant for value 'SafePaymentRequired'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.SafePaymentRequired</b> and <b>Category.SafePaymentRequired</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site, and
     * individual categories on that site, require that the seller set at least one accepted payment method in the listing that is certified by eBay to be a "safe payment method".
     * @return string 'SafePaymentRequired'
     */
    const VALUE_SAFE_PAYMENT_REQUIRED = 'SafePaymentRequired';
    /**
     * Constant for value 'MaximumBestOffersAllowed'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'MaximumBestOffersAllowed'
     */
    const VALUE_MAXIMUM_BEST_OFFERS_ALLOWED = 'MaximumBestOffersAllowed';
    /**
     * Constant for value 'ClassifiedAdMaximumBestOffersAllowed'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'ClassifiedAdMaximumBestOffersAllowed'
     */
    const VALUE_CLASSIFIED_AD_MAXIMUM_BEST_OFFERS_ALLOWED = 'ClassifiedAdMaximumBestOffersAllowed';
    /**
     * Constant for value 'ClassifiedAdContactByEmailAvailable'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used. To verify if the seller's contact information can be shared with prospective buyers in the listing, use the <b>SellerContactDetailsEnabled</b> enumeration value instead.
     * @return string 'ClassifiedAdContactByEmailAvailable'
     */
    const VALUE_CLASSIFIED_AD_CONTACT_BY_EMAIL_AVAILABLE = 'ClassifiedAdContactByEmailAvailable';
    /**
     * Constant for value 'ClassifiedAdPayPerLeadEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'ClassifiedAdPayPerLeadEnabled'
     */
    const VALUE_CLASSIFIED_AD_PAY_PER_LEAD_ENABLED = 'ClassifiedAdPayPerLeadEnabled';
    /**
     * Constant for value 'ItemSpecificsEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ItemSpecificsEnabled</b> and <b>Category.ItemSpecificsEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate if the eBay site and individual categories support the
     * use of Item Specifics in listings.
     * @return string 'ItemSpecificsEnabled'
     */
    const VALUE_ITEM_SPECIFICS_ENABLED = 'ItemSpecificsEnabled';
    /**
     * Constant for value 'PaisaPayFullEscrowEnabled'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> This value is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span> If this value is specified, the
     * <b>SiteDefaults.PaisaPayFullEscrowEnabled</b> and <b>Category.PaisaPayFullEscrowEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and individual categories on that site support
     * Paisa Pay Full Escrow as an accepted payment method. This field is only relevant to listings on the eBay India site, which is the only site where Paisa Pay is available.
     * @return string 'PaisaPayFullEscrowEnabled'
     */
    const VALUE_PAISA_PAY_FULL_ESCROW_ENABLED = 'PaisaPayFullEscrowEnabled';
    /**
     * Constant for value 'ISBNIdentifierEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated and should no longer be used. Use <b>ISBNEnabled</b> instead.
     * @return string 'ISBNIdentifierEnabled'
     */
    const VALUE_ISBNIDENTIFIER_ENABLED = 'ISBNIdentifierEnabled';
    /**
     * Constant for value 'UPCIdentifierEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated and should no longer be used. Use <b>UPCEnabled</b> instead.
     * @return string 'UPCIdentifierEnabled'
     */
    const VALUE_UPCIDENTIFIER_ENABLED = 'UPCIdentifierEnabled';
    /**
     * Constant for value 'EANIdentifierEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated and should no longer be used. Use <b>EANEnabled</b> instead.
     * @return string 'EANIdentifierEnabled'
     */
    const VALUE_EANIDENTIFIER_ENABLED = 'EANIdentifierEnabled';
    /**
     * Constant for value 'BrandMPNIdentifierEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.BrandMPNIdentifierEnabled</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not individual categories on the specified site support the ability of a
     * seller to identify a product through a Brand/Manufacturer Part Number (MPN) combination.
     * @return string 'BrandMPNIdentifierEnabled'
     */
    const VALUE_BRAND_MPNIDENTIFIER_ENABLED = 'BrandMPNIdentifierEnabled';
    /**
     * Constant for value 'ClassifiedAdAutoAcceptEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdAutoAcceptEnabled</b> and <b>Category.ClassifiedAdAutoAcceptEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto accept feature for Classified Ad listings. With the Best Offer auto accept feature, the seller sets a price threshold, and all Best Offers and counter offers at or above this price value
     * are automatically accepted without any seller action. This feature is only applicable for Classified Ad listings.
     * @return string 'ClassifiedAdAutoAcceptEnabled'
     */
    const VALUE_CLASSIFIED_AD_AUTO_ACCEPT_ENABLED = 'ClassifiedAdAutoAcceptEnabled';
    /**
     * Constant for value 'BestOfferAutoAcceptEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.BestOfferAutoAcceptEnabled</b> and <b>Category.BestOfferAutoAcceptEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay
     * site and individual categories support the Best Offer auto accept feature. With the Best Offer auto accept feature, the seller sets a price threshold, and all Best Offers and counter offers at or above this price value are automatically accepted
     * without any seller action. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia, France, Italy, and Spain marketplaces, but keep in mind that Best Offer and
     * Buy It Now cannot be used simultaneously in a listing. Also, once a qualifying bid is made on an auction listing, the Best Offer feature is disabled, and any pending offer or counteroffers are no longer valid. </span>
     * @return string 'BestOfferAutoAcceptEnabled'
     */
    const VALUE_BEST_OFFER_AUTO_ACCEPT_ENABLED = 'BestOfferAutoAcceptEnabled';
    /**
     * Constant for value 'CrossBorderTradeEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>CrossBorderTradeNorthAmericaEnabled</b>, <b>CrossBorderTradeGBEnabled</b>, and <b>CrossBorderTradeAustraliaEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * the specified eBay site and individual categories support the International Site Visibility (Cross-Border Trade) feature, and on which sites. With the International Site Visibility feature, the seller is able to create a listing and make this listing
     * available on multiple eBay sites (not just their domestic eBay site).
     * @return string 'CrossBorderTradeEnabled'
     */
    const VALUE_CROSS_BORDER_TRADE_ENABLED = 'CrossBorderTradeEnabled';
    /**
     * Constant for value 'PayPalBuyerProtectionEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.PayPalBuyerProtectionEnabled</b> and <b>Category.PayPalBuyerProtectionEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories are enabled with PayPal Purchase Protection. Of course, an eligible item must be purchased with PayPal to be eligible for PayPal Purchase Protection.
     * @return string 'PayPalBuyerProtectionEnabled'
     */
    const VALUE_PAY_PAL_BUYER_PROTECTION_ENABLED = 'PayPalBuyerProtectionEnabled';
    /**
     * Constant for value 'BuyerGuaranteeEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.BuyerGuaranteeEnabled</b> and <b>Category.BuyerGuaranteeEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories are enabled with the Australian version of the Buyer Protection program. This enumeration value is only applicable to the eBay Australia site.
     * @return string 'BuyerGuaranteeEnabled'
     */
    const VALUE_BUYER_GUARANTEE_ENABLED = 'BuyerGuaranteeEnabled';
    /**
     * Constant for value 'INEscrowWorkflowTimeline'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note:</b> This value is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span> If this value is specified, the
     * <b>Category.INEscrowWorkflowTimeline</b> fields in the <b>GetCategoryFeatures</b> response will indicate the escrow workflows that will be used for individual categories on the eBay India site. This enumeration value is only applicable to the eBay
     * India site, and only if Paisa Pay Full Escrow is an accepted payment method.
     * @return string 'INEscrowWorkflowTimeline'
     */
    const VALUE_INESCROW_WORKFLOW_TIMELINE = 'INEscrowWorkflowTimeline';
    /**
     * Constant for value 'CombinedFixedPriceTreatment'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'CombinedFixedPriceTreatment'
     */
    const VALUE_COMBINED_FIXED_PRICE_TREATMENT = 'CombinedFixedPriceTreatment';
    /**
     * Constant for value 'GalleryFeaturedDurations'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.GalleryFeaturedDurations</b> container in the <b>GetCategoryFeatures</b> response will indicate the listing duration times that the Featured Gallery feature may be enabled for a
     * listing.
     * @return string 'GalleryFeaturedDurations'
     */
    const VALUE_GALLERY_FEATURED_DURATIONS = 'GalleryFeaturedDurations';
    /**
     * Constant for value 'PayPalRequired'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.PayPalRequired</b> and <b>Category.PayPalRequired</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and individual
     * categories require PayPal as one of the accepted payment methods in a listing. This value is not applicable in countries where PayPal is not available.
     * @return string 'PayPalRequired'
     */
    const VALUE_PAY_PAL_REQUIRED = 'PayPalRequired';
    /**
     * Constant for value 'eBayMotorsProAdFormatEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProAdFormatEnabled</b> and <b>Category.eBayMotorsProAdFormatEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow motor vehicles to be sold through Classified Ads. This value is only applicable for eBay Motors Pro users.
     * @return string 'eBayMotorsProAdFormatEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_AD_FORMAT_ENABLED = 'eBayMotorsProAdFormatEnabled';
    /**
     * Constant for value 'eBayMotorsProContactByPhoneEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProContactByPhoneEnabled</b> and <b>Category.eBayMotorsProContactByPhoneEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow eBay Motors Pro users to provide contact phone numbers within a Motor Vehicles Classified Ad listing. The <b>Category.eBayMotorsProPhoneCount</b> field indicates how many contact phone numbers are
     * supported in each listing. This feature is only applicable to Motor Vehicles Classified Ad listings.
     * @return string 'eBayMotorsProContactByPhoneEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_PHONE_ENABLED = 'eBayMotorsProContactByPhoneEnabled';
    /**
     * Constant for value 'eBayMotorsProContactByAddressEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProContactByAddressEnabled</b> and <b>Category.eBayMotorsProContactByAddressEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * the specified eBay site and individual categories allow eBay Motors Pro users to provide contact street addresses within a Motor Vehicles Classified Ad listing. The <b>Category.eBayMotorsProStreetCount</b> field indicates how many contact street
     * addresses are supported in each listing. This feature is only applicable to Motor Vehicles Classified Ad listings.
     * @return string 'eBayMotorsProContactByAddressEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_ADDRESS_ENABLED = 'eBayMotorsProContactByAddressEnabled';
    /**
     * Constant for value 'eBayMotorsProCompanyNameEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProCompanyNameEnabled</b> and <b>Category.eBayMotorsProCompanyNameEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow eBay Motors Pro users to provide a company name within a Motor Vehicles Classified Ad listing. This feature is only applicable to Motor Vehicles Classified Ad listings.
     * @return string 'eBayMotorsProCompanyNameEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_COMPANY_NAME_ENABLED = 'eBayMotorsProCompanyNameEnabled';
    /**
     * Constant for value 'eBayMotorsProContactByEmailEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProContactByEmailEnabled</b> and <b>Category.eBayMotorsProContactByEmailEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow eBay Motors Pro users to provide a contact email address within a Motor Vehicles Classified Ad listing. This feature is only applicable to Motor Vehicles Classified Ad listings.
     * @return string 'eBayMotorsProContactByEmailEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_EMAIL_ENABLED = 'eBayMotorsProContactByEmailEnabled';
    /**
     * Constant for value 'eBayMotorsProBestOfferEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProBestOfferEnabled</b> and <b>Category.eBayMotorsProBestOfferEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer feature for Motor Vehicles Classified Ad listings.
     * @return string 'eBayMotorsProBestOfferEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_BEST_OFFER_ENABLED = 'eBayMotorsProBestOfferEnabled';
    /**
     * Constant for value 'eBayMotorsProAutoAcceptEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProAutoAcceptEnabled</b> and <b>Category.eBayMotorsProAutoAcceptEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support the Best Offer auto accept feature for Motor Vehicles Classified Ad listings. With the Best Offer auto accept feature, the seller sets a price threshold, and all Best Offers and counter offers at
     * or above this price value are automatically accepted without any seller action. This feature is only applicable for Motor Vehicles Classified Ad listings, and is only available to eBay Motors Pro users.
     * @return string 'eBayMotorsProAutoAcceptEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_AUTO_ACCEPT_ENABLED = 'eBayMotorsProAutoAcceptEnabled';
    /**
     * Constant for value 'eBayMotorsProAutoDeclineEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProAutoDeclineEnabled</b> and <b>Category.eBayMotorsProAutoDeclineEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support the Best Offer auto decline feature for Motor Vehicles Classified Ad listings. With the Best Offer auto decline feature, the seller sets a price threshold, and all Best Offers and counter offers
     * below this price value are automatically declined without any seller action. This feature is only applicable for Motor Vehicles Classified Ad listings, and is only available to eBay Motors Pro users.
     * @return string 'eBayMotorsProAutoDeclineEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_AUTO_DECLINE_ENABLED = 'eBayMotorsProAutoDeclineEnabled';
    /**
     * Constant for value 'eBayMotorsProPaymentMethodCheckOutEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProPaymentMethodCheckOutEnabled</b> and <b>Category.eBayMotorsProPaymentMethodCheckOutEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or
     * not (and when) accepted payment methods are displayed to buyers for the specified eBay site and for individual categories. This feature is only applicable for Motor Vehicles Classified Ad listings, and is only available to eBay Motors Pro users.
     * @return string 'eBayMotorsProPaymentMethodCheckOutEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_PAYMENT_METHOD_CHECK_OUT_ENABLED = 'eBayMotorsProPaymentMethodCheckOutEnabled';
    /**
     * Constant for value 'eBayMotorsProShippingMethodEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProShippingMethodEnabled</b> and <b>Category.eBayMotorsProShippingMethodEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support the display of available shipping methods to buyers. This feature is only applicable for Motor Vehicles Classified Ad listings, and is only available to eBay Motors Pro users.
     * @return string 'eBayMotorsProShippingMethodEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_SHIPPING_METHOD_ENABLED = 'eBayMotorsProShippingMethodEnabled';
    /**
     * Constant for value 'eBayMotorsProCounterOfferEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProCounterOfferEnabled</b> and <b>Category.eBayMotorsProCounterOfferEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support Best Offer counter offers for Motor Vehicles Classified Ad listings. This feature is only applicable for Motor Vehicles Classified Ad listings, and is only available to eBay Motors Pro users.
     * @return string 'eBayMotorsProCounterOfferEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_COUNTER_OFFER_ENABLED = 'eBayMotorsProCounterOfferEnabled';
    /**
     * Constant for value 'eBayMotorsProSellerContactDetailsEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.eBayMotorsProSellerContactDetailsEnabled</b> and <b>Category.eBayMotorsProSellerContactDetailsEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether
     * or not the specified eBay site and individual categories allow the seller to provide contact information within a Motor Vehicles Classified Ad listing. This feature is only applicable for Motor Vehicles Classified Ad listings, and is only available
     * to eBay Motors Pro users.
     * @return string 'eBayMotorsProSellerContactDetailsEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_SELLER_CONTACT_DETAILS_ENABLED = 'eBayMotorsProSellerContactDetailsEnabled';
    /**
     * Constant for value 'LocalMarketAdFormatEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketAdFormatEnabled</b> and <b>Category.LocalMarketAdFormatEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories allow motor vehicles to be sold through Local Market Classified Ads. Motors Local Market listings are only available to eBay sellers who are Licensed Vehicle Dealers on eBay.
     * @return string 'LocalMarketAdFormatEnabled'
     */
    const VALUE_LOCAL_MARKET_AD_FORMAT_ENABLED = 'LocalMarketAdFormatEnabled';
    /**
     * Constant for value 'LocalMarketContactByPhoneEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketContactByPhoneEnabled</b> and <b>Category.LocalMarketContactByPhoneEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow eBay Licensed Vehicle Dealers to provide contact phone numbers within a Motors Local Market listing. The <b>Category.LocalMarketPhoneCount</b> field indicates how many contact phone numbers are
     * supported in each listing. This feature is only applicable to Motors Local Market listings.
     * @return string 'LocalMarketContactByPhoneEnabled'
     */
    const VALUE_LOCAL_MARKET_CONTACT_BY_PHONE_ENABLED = 'LocalMarketContactByPhoneEnabled';
    /**
     * Constant for value 'LocalMarketContactByAddressEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketContactByAddressEnabled</b> and <b>Category.LocalMarketContactByAddressEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow eBay Licensed Vehicle Dealers to provide contact street addresses within a Motors Local Market listing. This feature is only applicable to Motors Local Market listings.
     * @return string 'LocalMarketContactByAddressEnabled'
     */
    const VALUE_LOCAL_MARKET_CONTACT_BY_ADDRESS_ENABLED = 'LocalMarketContactByAddressEnabled';
    /**
     * Constant for value 'LocalMarketCompanyNameEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketCompanyNameEnabled</b> and <b>Category.LocalMarketCompanyNameEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories allow eBay Licensed Vehicle Dealers to provide a company name within a Motors Local Market listing. This feature is only applicable to Motors Local Market listings.
     * @return string 'LocalMarketCompanyNameEnabled'
     */
    const VALUE_LOCAL_MARKET_COMPANY_NAME_ENABLED = 'LocalMarketCompanyNameEnabled';
    /**
     * Constant for value 'LocalMarketContactByEmailEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketContactByEmailEnabled</b> and <b>Category.LocalMarketContactByEmailEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow eBay Licensed Vehicle Dealers to provide contact email addresses within a Motors Local Market listing. This feature is only applicable to Motors Local Market listings.
     * @return string 'LocalMarketContactByEmailEnabled'
     */
    const VALUE_LOCAL_MARKET_CONTACT_BY_EMAIL_ENABLED = 'LocalMarketContactByEmailEnabled';
    /**
     * Constant for value 'LocalMarketBestOfferEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketBestOfferEnabled</b> and <b>Category.LocalMarketBestOfferEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay
     * site and individual categories support the Best Offer feature for Motors Local Market listings.
     * @return string 'LocalMarketBestOfferEnabled'
     */
    const VALUE_LOCAL_MARKET_BEST_OFFER_ENABLED = 'LocalMarketBestOfferEnabled';
    /**
     * Constant for value 'LocalMarketAutoAcceptEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketAutoAcceptEnabled</b> and <b>Category.LocalMarketAutoAcceptEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto accept feature for Motors Local Market listings. With the Best Offer auto accept feature, the seller sets a price threshold, and all Best Offers and counter offers at or above this price
     * value are automatically accepted without any seller action. This feature is only applicable for Motors Local Market listings, and is only available to eBay Licensed Vehicle Dealers.
     * @return string 'LocalMarketAutoAcceptEnabled'
     */
    const VALUE_LOCAL_MARKET_AUTO_ACCEPT_ENABLED = 'LocalMarketAutoAcceptEnabled';
    /**
     * Constant for value 'LocalMarketAutoDeclineEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketAutoDeclineEnabled</b> and <b>Category.LocalMarketAutoDeclineEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified
     * eBay site and individual categories support the Best Offer auto decline feature for Motors Local Market listings. With the Best Offer auto decline feature, the seller sets a price threshold, and all Best Offers and counter offers below this price
     * value are automatically declined without any seller action. This feature is only applicable for Motors Local Market listings, and is only available to eBay Licensed Vehicle Dealers.
     * @return string 'LocalMarketAutoDeclineEnabled'
     */
    const VALUE_LOCAL_MARKET_AUTO_DECLINE_ENABLED = 'LocalMarketAutoDeclineEnabled';
    /**
     * Constant for value 'LocalMarketPaymentMethodCheckOutEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketPaymentMethodCheckOutEnabled</b> and <b>Category.LocalMarketPaymentMethodCheckOutEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * (and when) accepted payment methods are displayed to buyers for the specified eBay site and for individual categories. This feature is only applicable for Motors Local Market listings, and is only available to eBay Licensed Vehicle Dealers.
     * @return string 'LocalMarketPaymentMethodCheckOutEnabled'
     */
    const VALUE_LOCAL_MARKET_PAYMENT_METHOD_CHECK_OUT_ENABLED = 'LocalMarketPaymentMethodCheckOutEnabled';
    /**
     * Constant for value 'LocalMarketShippingMethodEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketShippingMethodEnabled</b> and <b>Category.LocalMarketShippingMethodEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support the display of available shipping methods to buyers. This feature is only applicable for Motors Local Market listings, and is only available to eBay Licensed Vehicle Dealers.
     * @return string 'LocalMarketShippingMethodEnabled'
     */
    const VALUE_LOCAL_MARKET_SHIPPING_METHOD_ENABLED = 'LocalMarketShippingMethodEnabled';
    /**
     * Constant for value 'LocalMarketCounterOfferEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketCounterOfferEnabled</b> and <b>Category.LocalMarketCounterOfferEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories support Best Offer counter offers for Motors Local Market listings. This feature is only applicable for Motors Local Market listings, and is only available to eBay Licensed Vehicle Dealers.
     * @return string 'LocalMarketCounterOfferEnabled'
     */
    const VALUE_LOCAL_MARKET_COUNTER_OFFER_ENABLED = 'LocalMarketCounterOfferEnabled';
    /**
     * Constant for value 'LocalMarketSellerContactDetailsEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.LocalMarketSellerContactDetailsEnabled</b> and <b>Category.LocalMarketSellerContactDetailsEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or
     * not the specified eBay site and individual categories allow the seller to provide contact information within a Motors Local Market listing. This feature is only applicable for Motors Local Market listings, and is only available to eBay Licensed
     * Vehicle Dealers.
     * @return string 'LocalMarketSellerContactDetailsEnabled'
     */
    const VALUE_LOCAL_MARKET_SELLER_CONTACT_DETAILS_ENABLED = 'LocalMarketSellerContactDetailsEnabled';
    /**
     * Constant for value 'ClassifiedAdContactByAddressEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdContactByAddressEnabled</b> and <b>Category.ClassifiedAdContactByAddressEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not
     * the specified eBay site and individual categories allow sellers to provide contact street addresses within a Classified Ad listing. The <b>Category.ClassifiedAdStreetCount</b> field indicates how many street addresses are allowed in each listing.
     * This feature is only applicable to Classified Ad listings.
     * @return string 'ClassifiedAdContactByAddressEnabled'
     */
    const VALUE_CLASSIFIED_AD_CONTACT_BY_ADDRESS_ENABLED = 'ClassifiedAdContactByAddressEnabled';
    /**
     * Constant for value 'ClassifiedAdCompanyNameEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ClassifiedAdCompanyNameEnabled</b> and <b>Category.ClassifiedAdCompanyNameEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the
     * specified eBay site and individual categories allow sellers to provide a company name within a Classified Ad listing. This feature is only applicable to Classified Ad listings.
     * @return string 'ClassifiedAdCompanyNameEnabled'
     */
    const VALUE_CLASSIFIED_AD_COMPANY_NAME_ENABLED = 'ClassifiedAdCompanyNameEnabled';
    /**
     * Constant for value 'SpecialitySubscription'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.SpecialitySubscription</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports Motors National listings for sellers
     * with a specialty dealer subscription for selling motor vehicles.
     * @return string 'SpecialitySubscription'
     */
    const VALUE_SPECIALITY_SUBSCRIPTION = 'SpecialitySubscription';
    /**
     * Constant for value 'RegularSubscription'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.RegularSubscription</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports Motors National listings for sellers with
     * a regular dealer subscription for selling motor vehicles.
     * @return string 'RegularSubscription'
     */
    const VALUE_REGULAR_SUBSCRIPTION = 'RegularSubscription';
    /**
     * Constant for value 'PremiumSubscription'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.PremiumSubscription</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports Motors National listings for sellers with
     * a premium dealer subscription for selling motor vehicles.
     * @return string 'PremiumSubscription'
     */
    const VALUE_PREMIUM_SUBSCRIPTION = 'PremiumSubscription';
    /**
     * Constant for value 'NonSubscription'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.NonSubscription</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site supports Motors National listings for sellers without a
     * dealer subscription for selling motor vehicles.
     * @return string 'NonSubscription'
     */
    const VALUE_NON_SUBSCRIPTION = 'NonSubscription';
    /**
     * Constant for value 'IntangibleEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.IntangibleEnabled</b> and <b>Category.IntangibleEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and individual
     * categories allow sellers to sell intangible items.
     * @return string 'IntangibleEnabled'
     */
    const VALUE_INTANGIBLE_ENABLED = 'IntangibleEnabled';
    /**
     * Constant for value 'PayPalRequiredForStoreOwner'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'PayPalRequiredForStoreOwner'
     */
    const VALUE_PAY_PAL_REQUIRED_FOR_STORE_OWNER = 'PayPalRequiredForStoreOwner';
    /**
     * Constant for value 'ReviseQuantityAllowed'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ReviseQuantityAllowed</b> and <b>Category.ReviseQuantityAllowed</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories allow sellers to revise quantity in a multi-quantity, fixed-price listing while the listing is in a semi- or fully-restricted mode (such as when the listing already has sales or when the listing is scheduled to end within 12
     * hours). This value is only applicable to fixed-price listings.
     * @return string 'ReviseQuantityAllowed'
     */
    const VALUE_REVISE_QUANTITY_ALLOWED = 'ReviseQuantityAllowed';
    /**
     * Constant for value 'RevisePriceAllowed'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.RevisePriceAllowed</b> and <b>Category.RevisePriceAllowed</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories allow sellers to revise the price in a fixed-price listing while the listing is in a semi- or fully-restricted mode (such as when the listing already has sales or when the listing is scheduled to end within 12 hours). This value
     * is only applicable to fixed-price listings.
     * @return string 'RevisePriceAllowed'
     */
    const VALUE_REVISE_PRICE_ALLOWED = 'RevisePriceAllowed';
    /**
     * Constant for value 'StoreOwnerExtendedListingDurationsEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.StoreOwnerExtendedListingDurationsEnabled</b> and <b>Category.StoreOwnerExtendedListingDurationsEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate
     * whether or not the specified eBay site and individual categories allow eBay Store sellers to create fixed-price listings with longer listing durations than sellers without eBay Stores. This value is only applicable to fixed-price listings.
     * @return string 'StoreOwnerExtendedListingDurationsEnabled'
     */
    const VALUE_STORE_OWNER_EXTENDED_LISTING_DURATIONS_ENABLED = 'StoreOwnerExtendedListingDurationsEnabled';
    /**
     * Constant for value 'StoreOwnerExtendedListingDurations'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.StoreOwnerExtendedListingDurations</b> container in the <b>GetCategoryFeatures</b> response will indicate the extended listing duration times that eBay Store sellers may set when
     * creating a fixed-price listing. This value is only applicable to fixed-price listings. The site and category must support extended listing durations (<b>StoreOwnerExtendedListingDurationsEnabled</b>=true).
     * @return string 'StoreOwnerExtendedListingDurations'
     */
    const VALUE_STORE_OWNER_EXTENDED_LISTING_DURATIONS = 'StoreOwnerExtendedListingDurations';
    /**
     * Constant for value 'ReturnPolicyEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ReturnPolicyEnabled</b> and <b>Category.ReturnPolicyEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories allow eBay sellers to create a return policy for the listing.
     * @return string 'ReturnPolicyEnabled'
     */
    const VALUE_RETURN_POLICY_ENABLED = 'ReturnPolicyEnabled';
    /**
     * Constant for value 'HandlingTimeEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.HandlingTimeEnabled</b> and <b>Category.HandlingTimeEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories require eBay sellers to set a handling time for products sold within the listing. The handling time is the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared
     * payment. The seller's handling time does not include the shipping time (the carrier's transit time).
     * @return string 'HandlingTimeEnabled'
     */
    const VALUE_HANDLING_TIME_ENABLED = 'HandlingTimeEnabled';
    /**
     * Constant for value 'PaymentMethods'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.PaymentMethod</b> and <b>SiteDefaults.PaymentMethod</b> fields in the <b>GetCategoryFeatures</b> response will indicate the accepted payment methods at the eBay site level and within
     * the individual categories.
     * @return string 'PaymentMethods'
     */
    const VALUE_PAYMENT_METHODS = 'PaymentMethods';
    /**
     * Constant for value 'MaxFlatShippingCost'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.MaxFlatShippingCost</b> fields in the <b>GetCategoryFeatures</b> response will indicate the maximum flat-rate shipping costs that the seller may charge the buyer to ship one item
     * domestically. At least one available shipping service option has to be under this value. Handling cost (if any) goes toward this maximum cost threshold.
     * @return string 'MaxFlatShippingCost'
     */
    const VALUE_MAX_FLAT_SHIPPING_COST = 'MaxFlatShippingCost';
    /**
     * Constant for value 'MaxFlatShippingCostCBTExempt'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.MaxFlatShippingCostCBTExempt</b> boolean field in the <b>GetCategoryFeatures</b> response will indicate whether or not sellers, who sell items to domestic buyers, but are shipping the
     * item from another country, are exempt from the <b>MaxFlatShippingCost</b> threshold.
     * @return string 'MaxFlatShippingCostCBTExempt'
     */
    const VALUE_MAX_FLAT_SHIPPING_COST_CBTEXEMPT = 'MaxFlatShippingCostCBTExempt';
    /**
     * Constant for value 'Group1MaxFlatShippingCost'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.Group1MaxFlatShippingCost</b> fields in the <b>GetCategoryFeatures</b> response will indicate the maximum flat-rate shipping costs that the seller may charge the buyer to ship one item
     * domestically using a Group 1 shipping service. At least one available Group 1 shipping service option has to be under this value. Handling cost (if any) goes toward this maximum cost threshold.
     * @return string 'Group1MaxFlatShippingCost'
     */
    const VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST = 'Group1MaxFlatShippingCost';
    /**
     * Constant for value 'Group2MaxFlatShippingCost'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.Group2MaxFlatShippingCost</b> fields in the <b>GetCategoryFeatures</b> response will indicate the maximum flat-rate shipping costs that the seller may charge the buyer to ship one item
     * domestically using a Group 2 shipping service. At least one available Group 2 shipping service option has to be under this value. Handling cost (if any) goes toward this maximum cost threshold.
     * @return string 'Group2MaxFlatShippingCost'
     */
    const VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST = 'Group2MaxFlatShippingCost';
    /**
     * Constant for value 'Group3MaxFlatShippingCost'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.Group3MaxFlatShippingCost</b> fields in the <b>GetCategoryFeatures</b> response will indicate the maximum flat-rate shipping costs that the seller may charge the buyer to ship one item
     * domestically using a Group 3 shipping service. At least one available Group 3 shipping service option has to be under this value. Handling cost (if any) goes toward this maximum cost threshold.
     * @return string 'Group3MaxFlatShippingCost'
     */
    const VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST = 'Group3MaxFlatShippingCost';
    /**
     * Constant for value 'VariationsEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.VariationsEnabled</b> and <b>Category.VariationsEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and individual
     * categories support multi-variation listings. Variations are items within the same listing that are logically the same product, but differ slightly in size, color, or other aspect.
     * @return string 'VariationsEnabled'
     */
    const VALUE_VARIATIONS_ENABLED = 'VariationsEnabled';
    /**
     * Constant for value 'AttributeConversionEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'AttributeConversionEnabled'
     */
    const VALUE_ATTRIBUTE_CONVERSION_ENABLED = 'AttributeConversionEnabled';
    /**
     * Constant for value 'FreeGalleryPlusEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.FreeGalleryPlusEnabled</b> and <b>Category.FreeGalleryPlusEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories support a free Gallery Plus upgrade. The Gallery Plus feature includes the picture zoom-in option (when you hover the mouse over the picture) and the ability to enlarge the photo by clicking a link.
     * @return string 'FreeGalleryPlusEnabled'
     */
    const VALUE_FREE_GALLERY_PLUS_ENABLED = 'FreeGalleryPlusEnabled';
    /**
     * Constant for value 'FreePicturePackEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.FreePicturePackEnabled</b> and <b>Category.FreePicturePackEnabled</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories support a free Picture Pack upgrade. The Picture Pack feature is only available for eBay Motors vehicle listings. The Picture Pack feature includes up to 12 supersized photos with the zoom-in feature enabled for each one.
     * @return string 'FreePicturePackEnabled'
     */
    const VALUE_FREE_PICTURE_PACK_ENABLED = 'FreePicturePackEnabled';
    /**
     * Constant for value 'CompatibilityEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.ItemCompatibilityEnabled</b> and <b>Category.ItemCompatibilityEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay site and
     * individual categories support the Parts Compatibility feature, and if so, the mode of compatibility that is used (by application or by specification). The Parts Compatibility feature allows sellers to list their motor vehicles parts and accessories
     * items with parts compatibility name-value pairs specific to motor vehicles, and allows potential buyers to search for these items using parts compatibility search fields.
     * @return string 'CompatibilityEnabled'
     */
    const VALUE_COMPATIBILITY_ENABLED = 'CompatibilityEnabled';
    /**
     * Constant for value 'MinCompatibleApplications'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.MinCompatibleApplications</b> fields in the <b>GetCategoryFeatures</b> response will indicate the minimum number of compatible applications that must be specified when listing a motor
     * vehicle part or accessory in the given category.
     * @return string 'MinCompatibleApplications'
     */
    const VALUE_MIN_COMPATIBLE_APPLICATIONS = 'MinCompatibleApplications';
    /**
     * Constant for value 'MaxCompatibleApplications'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.MaxCompatibleApplications</b> fields in the <b>GetCategoryFeatures</b> response will indicate the maximum number of compatible applications that can be specified when listing a motor
     * vehicle part or accessory in the given category.
     * @return string 'MaxCompatibleApplications'
     */
    const VALUE_MAX_COMPATIBLE_APPLICATIONS = 'MaxCompatibleApplications';
    /**
     * Constant for value 'ConditionEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.ConditionEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate which individual categories support (and even require) the use of <b>ConditionID</b> values to specify
     * the condition of an item within a listing.
     * @return string 'ConditionEnabled'
     */
    const VALUE_CONDITION_ENABLED = 'ConditionEnabled';
    /**
     * Constant for value 'ConditionValues'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.Condition</b> containers in the <b>GetCategoryFeatures</b> response will include Condition ID values and item conditions like 'Very Good', 'Acceptable', 'Used', etc. for all categories that
     * support the use of Condition ID values.
     * @return string 'ConditionValues'
     */
    const VALUE_CONDITION_VALUES = 'ConditionValues';
    /**
     * Constant for value 'ValueCategory'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.ValueCategory</b> boolean fields in the <b>GetCategoryFeatures</b> response will indicate the categories that are considered by eBay to be 'Value Categories'. 'Value Categories' are
     * generally categories where buyers can find good deals on items. If sellers decide to list within a value category, only this category may be used, and a secondary category is not supported.
     * @return string 'ValueCategory'
     */
    const VALUE_VALUE_CATEGORY = 'ValueCategory';
    /**
     * Constant for value 'ProductCreationEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable. Use the <code>ProductRequiredEnabled</code> enumeration value instead to see if a category supports listings that are associated with an eBay Catalog product.
     * @return string 'ProductCreationEnabled'
     */
    const VALUE_PRODUCT_CREATION_ENABLED = 'ProductCreationEnabled';
    /**
     * Constant for value 'EANEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.EANEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not items listed in the corresponding category may utilize EANs to identify a product. A value of
     * <code>Disabled</code> indicates that EANs cannot be used for the category, a value of <code>Enabled</code> indicates that EANs can be used for the category, and a value of <code>Required</code> indicates that an EAN is required when listing a product
     * in this category.
     * @return string 'EANEnabled'
     */
    const VALUE_EANENABLED = 'EANEnabled';
    /**
     * Constant for value 'ISBNEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.ISBNEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not items listed in the corresponding category may utilize ISBNs to identify a product. A value of
     * <code>Disabled</code> indicates that ISBNs cannot be used for the category, a value of <code>Enabled</code> indicates that ISBNs can be used for the category, and a value of <code>Required</code> indicates that an ISBN is required when listing a
     * product in this category.
     * @return string 'ISBNEnabled'
     */
    const VALUE_ISBNENABLED = 'ISBNEnabled';
    /**
     * Constant for value 'UPCEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.UPCEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not items listed in the corresponding category may utilize UPCs to identify a product. A value of
     * <code>Disabled</code> indicates that UPCs cannot be used for the category, a value of <code>Enabled</code> indicates that UPCs can be used for the category, and a value of <code>Required</code> indicates that a UPC is required when listing a product
     * in this category.
     * @return string 'UPCEnabled'
     */
    const VALUE_UPCENABLED = 'UPCEnabled';
    /**
     * Constant for value 'MaxGranularFitmentCount'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.MaxGranularFitmentCount</b> fields in the <b>GetCategoryFeatures</b> response will indicate how many Parts Compatibility name-value pairs may be passed in for each motor vehicle aspect
     * (Year, Make, and Model) in a motor vehicle parts and accessory listing. granularity. This field is only applicable to motor vehicle parts and accessory listings.
     * @return string 'MaxGranularFitmentCount'
     */
    const VALUE_MAX_GRANULAR_FITMENT_COUNT = 'MaxGranularFitmentCount';
    /**
     * Constant for value 'CompatibleVehicleType'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.CompatibleVehicleType</b> fields in the <b>GetCategoryFeatures</b> response will indicate the type of vehicle that parts compatibility name-value pairs in a listing will be referring to,
     * such as 'cars and trucks', 'all-terrain vehicles (ATV)', 'boats', and 'motorcycles'. This field is only applicable to motor vehicle parts and accessory listings.
     * @return string 'CompatibleVehicleType'
     */
    const VALUE_COMPATIBLE_VEHICLE_TYPE = 'CompatibleVehicleType';
    /**
     * Constant for value 'PaymentOptionsGroup'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'PaymentOptionsGroup'
     */
    const VALUE_PAYMENT_OPTIONS_GROUP = 'PaymentOptionsGroup';
    /**
     * Constant for value 'ShippingProfileCategoryGroup'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.ShippingProfileCategoryGroup</b> fields in the <b>GetCategoryFeatures</b> response will indicate which shipping business policy category group that each category will inherit as the default
     * category group. Currently, there are only two Business Policies category groups - 'MOTORS_VEHICLE' covers all motor-vehicle related categories, and 'ALL' covers all other categories.
     * @return string 'ShippingProfileCategoryGroup'
     */
    const VALUE_SHIPPING_PROFILE_CATEGORY_GROUP = 'ShippingProfileCategoryGroup';
    /**
     * Constant for value 'PaymentProfileCategoryGroup'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.PaymentProfileCategoryGroup</b> fields in the <b>GetCategoryFeatures</b> response will indicate which payment business policy category group that each category will inherit as the default
     * category group. Currently, there are only two Business Policies category groups - 'MOTORS_VEHICLE' covers all motor-vehicle related categories, and 'ALL' covers all other categories.
     * @return string 'PaymentProfileCategoryGroup'
     */
    const VALUE_PAYMENT_PROFILE_CATEGORY_GROUP = 'PaymentProfileCategoryGroup';
    /**
     * Constant for value 'ReturnPolicyProfileCategoryGroup'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.ReturnPolicyProfileCategoryGroup</b> fields in the <b>GetCategoryFeatures</b> response will indicate which return policy business policy category group that each category will inherit as
     * the default category group. Currently, there are only two Business Policies category groups - 'MOTORS_VEHICLE' covers all motor-vehicle related categories, and 'ALL' covers all other categories.
     * @return string 'ReturnPolicyProfileCategoryGroup'
     */
    const VALUE_RETURN_POLICY_PROFILE_CATEGORY_GROUP = 'ReturnPolicyProfileCategoryGroup';
    /**
     * Constant for value 'VINSupported'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'VINSupported'
     */
    const VALUE_VINSUPPORTED = 'VINSupported';
    /**
     * Constant for value 'VRMSupported'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'VRMSupported'
     */
    const VALUE_VRMSUPPORTED = 'VRMSupported';
    /**
     * Constant for value 'SellerProvidedTitleSupported'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.SellerProvidedTitleSupported</b> and <b>Category.SellerProvidedTitleSupported</b> fields in the <b>GetCategoryFeatures</b> response will indicate if the eBay site and individual
     * categories support the use of a seller-provided title for a motor vehicle listing on the US or Canada Motors marketplaces. A seller-provided title is a descriptive title, given by the seller, that appears below eBay's pre-filled listing title for the
     * motor vehicle.
     * @return string 'SellerProvidedTitleSupported'
     */
    const VALUE_SELLER_PROVIDED_TITLE_SUPPORTED = 'SellerProvidedTitleSupported';
    /**
     * Constant for value 'DepositSupported'
     * Meta information extracted from the WSDL
     * - documentation: This value is <b>deprecated</b> and should no longer be used.
     * @return string 'DepositSupported'
     */
    const VALUE_DEPOSIT_SUPPORTED = 'DepositSupported';
    /**
     * Constant for value 'GlobalShippingEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.GlobalShippingEnabled</b> and <b>Category.GlobalShippingEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate if the eBay site and individual categories support
     * the Global Shipping Program (GSP) as a means for shipping items internationally. The GSP feature is only applicable to shipping items internationally.
     * @return string 'GlobalShippingEnabled'
     */
    const VALUE_GLOBAL_SHIPPING_ENABLED = 'GlobalShippingEnabled';
    /**
     * Constant for value 'AdditionalCompatibilityEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> and <b>Category.AdditionalCompatibilityEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate whether or not the specified eBay
     * site and individual categories support the second-generation Parts Compatibility feature where parts-compatibility name-value pairs can be passed in for boats, motorcycles, and other vehicles instead of just cars and trucks. This feature is only
     * applicable to motor vehicle parts and accessory listings.
     * @return string 'AdditionalCompatibilityEnabled'
     */
    const VALUE_ADDITIONAL_COMPATIBILITY_ENABLED = 'AdditionalCompatibilityEnabled';
    /**
     * Constant for value 'PickupDropOffEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.PickupDropOffEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate that items listed in the corresponding category may be enabled with the 'Click and Collect' feature.
     * With the 'Click and Collect' feature, a buyer can purchase certain items on the eBay site and collect them at a local store. Buyers are notified by eBay once their items are available. A <code>false</code> value in this field indicates that items
     * listed in the category are not eligible for the 'Click and Collect' feature. <br/><br/> The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77)
     * sites.
     * @return string 'PickupDropOffEnabled'
     */
    const VALUE_PICKUP_DROP_OFF_ENABLED = 'PickupDropOffEnabled';
    /**
     * Constant for value 'DigitalGoodDeliveryEnabled'
     * Meta information extracted from the WSDL
     * - documentation: If this value is specified, the <b>Category.DigitalGoodDeliveryEnabled</b> fields in the <b>GetCategoryFeatures</b> response will indicate that digital gift cards can be listed in the corresponding category. A <code>false</code>
     * value in this field indicates that digital gift cards may not be listed in the category. <br/><br/> Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the
     * following: <ul> <li>Each seller can only have one gift card listing at any given time;</li> <li>The maximum dollar value of the gift card may not exceed 500.00; and</li> <li>prepaid credit cards from American Express, Discover, MasterCard, or Visa
     * are not allowed.</li> </ul> For more information on eBay's Gift Card policy, see the <a href="http://pages.ebay.com/help/policies/gift.html">Gift cards policy</a> Help page.
     * @return string 'DigitalGoodDeliveryEnabled'
     */
    const VALUE_DIGITAL_GOOD_DELIVERY_ENABLED = 'DigitalGoodDeliveryEnabled';
    /**
     * Constant for value 'EpidSupported'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to see if an eBay Product ID (e.g. ePID) can be used in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or accessory is supported. ePIDs can only
     * be used to identify motorcycles and scooters on the Germany and UK sites. <br/><br/> For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany or UK site, see the
     * documentation for the <a href=" http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     * @return string 'EpidSupported'
     */
    const VALUE_EPID_SUPPORTED = 'EpidSupported';
    /**
     * Constant for value 'KTypeSupported'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to see if a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory is supported. K type vehicle numbers can only be used to
     * identify cars and trucks on the Germany site. <br/><br/> For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site, see the documentation for the <a href="
     * http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     * @return string 'KTypeSupported'
     */
    const VALUE_KTYPE_SUPPORTED = 'KTypeSupported';
    /**
     * Constant for value 'ProductRequiredEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is used to see if the site supports Product-Based Shopping Experience listings (listings associated with an eBay catalog product). <br><br> The <b>Category.ProductRequiredEnabled</b> field will only be returned if the
     * category requires association with an eBay Catalog product. <br><br> <span class="tablenote"><b>Note:</b> Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, the value for this field should never get returned
     * as <code>Enabled</code> for <b>SiteDefaults</b> or for any categories.</span>
     * @return string 'ProductRequiredEnabled'
     */
    const VALUE_PRODUCT_REQUIRED_ENABLED = 'ProductRequiredEnabled';
    /**
     * Constant for value 'DomesticReturnsAcceptedValues'
     * Meta information extracted from the WSDL
     * - documentation: Use this ID to return the values you can specify for whether or not a seller accepts domestic returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to
     * <code>true</code> for the associated marketplace and category. <br><br> <span class="tablenote"><b>Note:</b> In May 2018, eBay added the ability to create a separate international return policy for items that are shipped to international customers.
     * If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For more information on setting separate domestic and international return policies, see the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy" target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see the
     * <b>InternationalReturnsAcceptedValues</b> field.</span>
     * @return string 'DomesticReturnsAcceptedValues'
     */
    const VALUE_DOMESTIC_RETURNS_ACCEPTED_VALUES = 'DomesticReturnsAcceptedValues';
    /**
     * Constant for value 'InternationalReturnsAcceptedValues'
     * Meta information extracted from the WSDL
     * - documentation: Use this ID to return the values you can specify for whether or not a seller accepts international returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to
     * <code>true</code> for the associated marketplace and category. <br><br> <span class="tablenote"><b>Note:</b> In May 2018, eBay added the ability to create a separate international return policy for items that are shipped to international customers.
     * If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For more information on setting separate domestic and international return policies, see the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy" target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see the
     * <b>InternationalReturnsAcceptedValues</b> field.</span>
     * @return string 'InternationalReturnsAcceptedValues'
     */
    const VALUE_INTERNATIONAL_RETURNS_ACCEPTED_VALUES = 'InternationalReturnsAcceptedValues';
    /**
     * Constant for value 'DomesticReturnsDurationValues'
     * Meta information extracted from the WSDL
     * - documentation: Use this ID to return the values you can specify for the return duration for domestic returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to
     * <code>true</code> for the associated marketplace and category. <br><br> <span class="tablenote"><b>Note:</b> In May 2018, eBay added the ability to create a separate international return policy for items that are shipped to international customers.
     * If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For more information on setting separate domestic and international return policies, see the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy" target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see the
     * <b>InternationalReturnsAcceptedValues</b> field.</span>
     * @return string 'DomesticReturnsDurationValues'
     */
    const VALUE_DOMESTIC_RETURNS_DURATION_VALUES = 'DomesticReturnsDurationValues';
    /**
     * Constant for value 'InternationalReturnsDurationValues'
     * Meta information extracted from the WSDL
     * - documentation: Use this ID to return the values you can specify for the return duration for international returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to
     * <code>true</code> for the associated marketplace and category. <br><br> <span class="tablenote"><b>Note:</b> In May 2018, eBay added the ability to create a separate international return policy for items that are shipped to international customers.
     * If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For more information on setting separate domestic and international return policies, see the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy" target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see the
     * <b>InternationalReturnsAcceptedValues</b> field.</span>
     * @return string 'InternationalReturnsDurationValues'
     */
    const VALUE_INTERNATIONAL_RETURNS_DURATION_VALUES = 'InternationalReturnsDurationValues';
    /**
     * Constant for value 'DomesticReturnsShipmentPayeeValues'
     * Meta information extracted from the WSDL
     * - documentation: Use this ID to return the values you can specify for who pays any return shipping costs for domestic returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set
     * to <code>true</code> for the associated marketplace and category. <br><br> <span class="tablenote"><b>Note:</b> In May 2018, eBay added the ability to create a separate international return policy for items that are shipped to international
     * customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For more information on setting separate domestic and international return policies, see the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy" target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see the
     * <b>InternationalReturnsAcceptedValues</b> field.</span>
     * @return string 'DomesticReturnsShipmentPayeeValues'
     */
    const VALUE_DOMESTIC_RETURNS_SHIPMENT_PAYEE_VALUES = 'DomesticReturnsShipmentPayeeValues';
    /**
     * Constant for value 'InternationalReturnsShipmentPayeeValues'
     * Meta information extracted from the WSDL
     * - documentation: Use this ID to return the values you can specify for who pays any return shipping costs for international returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is
     * set to <code>true</code> for the associated marketplace and category. <br><br> <span class="tablenote"><b>Note:</b> In May 2018, eBay added the ability to create a separate international return policy for items that are shipped to international
     * customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. For more information on setting separate domestic and international return policies, see the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy" target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see the
     * <b>InternationalReturnsAcceptedValues</b> field.</span>
     * @return string 'InternationalReturnsShipmentPayeeValues'
     */
    const VALUE_INTERNATIONAL_RETURNS_SHIPMENT_PAYEE_VALUES = 'InternationalReturnsShipmentPayeeValues';
    /**
     * Constant for value 'DomesticRefundMethodValues'
     * Meta information extracted from the WSDL
     * - documentation: In US, sellers can offer item replacement in addition to offering a money-back refund for domestic returns. Use this ID to return whether or not the seller can offer <code>MoneyBackorReplacement</code> for the specified category.
     * <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category. <br><br> <span class="tablenote"><b>Note:</b> In May 2018,
     * eBay added the ability to create a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be used
     * instead. For more information on setting separate domestic and international return policies, see the <a href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see the <b>InternationalReturnsAcceptedValues</b> field.</span>
     * @return string 'DomesticRefundMethodValues'
     */
    const VALUE_DOMESTIC_REFUND_METHOD_VALUES = 'DomesticRefundMethodValues';
    /**
     * Constant for value 'InternationalRefundMethodValues'
     * Meta information extracted from the WSDL
     * - documentation: In US, sellers can offer item replacement in addition to offering a money-back refund for international returns. Use this ID to return whether or not the seller can offer <code>MoneyBackorReplacement</code> for the specified
     * category. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category. <br><br> <span class="tablenote"><b>Note:</b> In May
     * 2018, eBay added the ability to create a separate international return policy for items that are shipped to international customers. If a seller does not add a separate international return policy, the settings in the domestic return policy will be
     * used instead. For more information on setting separate domestic and international return policies, see the <a href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy"
     * target="_blank">International returns policy</a> help topic. For the international equivalent of this field, see the <b>InternationalReturnsAcceptedValues</b> field.</span>
     * @return string 'InternationalRefundMethodValues'
     */
    const VALUE_INTERNATIONAL_REFUND_METHOD_VALUES = 'InternationalRefundMethodValues';
    /**
     * Constant for value 'ReturnPolicyDescriptionEnabled'
     * Meta information extracted from the WSDL
     * - documentation: In some EU countries, sellers are legally required to describe the return policy they offer. The value returned by this field indicates if sellers can provide such description within the given marketplace and category. <br><br> The
     * values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * @return string 'ReturnPolicyDescriptionEnabled'
     */
    const VALUE_RETURN_POLICY_DESCRIPTION_ENABLED = 'ReturnPolicyDescriptionEnabled';
    /**
     * Return allowed values
     * @uses self::VALUE_LISTING_DURATIONS
     * @uses self::VALUE_BEST_OFFER_ENABLED
     * @uses self::VALUE_DUTCH_BINENABLED
     * @uses self::VALUE_SHIPPING_TERMS_REQUIRED
     * @uses self::VALUE_USER_CONSENT_REQUIRED
     * @uses self::VALUE_HOME_PAGE_FEATURED_ENABLED
     * @uses self::VALUE_AD_FORMAT_ENABLED
     * @uses self::VALUE_DIGITAL_DELIVERY_ENABLED
     * @uses self::VALUE_BEST_OFFER_COUNTER_ENABLED
     * @uses self::VALUE_BEST_OFFER_AUTO_DECLINE_ENABLED
     * @uses self::VALUE_PRO_PACK
     * @uses self::VALUE_BASIC_UPGRADE_PACK
     * @uses self::VALUE_VALUE_PACK
     * @uses self::VALUE_PRO_PACK_PLUS
     * @uses self::VALUE_LOCAL_MARKET_SPECIALITY_SUBSCRIPTION
     * @uses self::VALUE_LOCAL_MARKET_REGULAR_SUBSCRIPTION
     * @uses self::VALUE_LOCAL_MARKET_PREMIUM_SUBSCRIPTION
     * @uses self::VALUE_LOCAL_MARKET_NON_SUBSCRIPTION
     * @uses self::VALUE_EXPRESS_ENABLED
     * @uses self::VALUE_EXPRESS_PICTURES_REQUIRED
     * @uses self::VALUE_EXPRESS_CONDITION_REQUIRED
     * @uses self::VALUE_SELLER_CONTACT_DETAILS_ENABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_MINIMUM_RESERVE_PRICE
     * @uses self::VALUE_TRANSACTION_CONFIRMATION_REQUEST_ENABLED
     * @uses self::VALUE_STORE_INVENTORY_ENABLED
     * @uses self::VALUE_LOCAL_LISTING_DISTANCES
     * @uses self::VALUE_SKYPE_ME_TRANSACTIONAL_ENABLED
     * @uses self::VALUE_SKYPE_ME_NON_TRANSACTIONAL_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_PAYMENT_METHOD_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_SHIPPING_METHOD_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_BEST_OFFER_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_COUNTER_OFFER_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_AUTO_DECLINE_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_CONTACT_BY_EMAIL_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_CONTACT_BY_PHONE_ENABLED
     * @uses self::VALUE_SAFE_PAYMENT_REQUIRED
     * @uses self::VALUE_MAXIMUM_BEST_OFFERS_ALLOWED
     * @uses self::VALUE_CLASSIFIED_AD_MAXIMUM_BEST_OFFERS_ALLOWED
     * @uses self::VALUE_CLASSIFIED_AD_CONTACT_BY_EMAIL_AVAILABLE
     * @uses self::VALUE_CLASSIFIED_AD_PAY_PER_LEAD_ENABLED
     * @uses self::VALUE_ITEM_SPECIFICS_ENABLED
     * @uses self::VALUE_PAISA_PAY_FULL_ESCROW_ENABLED
     * @uses self::VALUE_ISBNIDENTIFIER_ENABLED
     * @uses self::VALUE_UPCIDENTIFIER_ENABLED
     * @uses self::VALUE_EANIDENTIFIER_ENABLED
     * @uses self::VALUE_BRAND_MPNIDENTIFIER_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_AUTO_ACCEPT_ENABLED
     * @uses self::VALUE_BEST_OFFER_AUTO_ACCEPT_ENABLED
     * @uses self::VALUE_CROSS_BORDER_TRADE_ENABLED
     * @uses self::VALUE_PAY_PAL_BUYER_PROTECTION_ENABLED
     * @uses self::VALUE_BUYER_GUARANTEE_ENABLED
     * @uses self::VALUE_INESCROW_WORKFLOW_TIMELINE
     * @uses self::VALUE_COMBINED_FIXED_PRICE_TREATMENT
     * @uses self::VALUE_GALLERY_FEATURED_DURATIONS
     * @uses self::VALUE_PAY_PAL_REQUIRED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_AD_FORMAT_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_PHONE_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_ADDRESS_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_COMPANY_NAME_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_EMAIL_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_BEST_OFFER_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_AUTO_ACCEPT_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_AUTO_DECLINE_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_PAYMENT_METHOD_CHECK_OUT_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_SHIPPING_METHOD_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_COUNTER_OFFER_ENABLED
     * @uses self::VALUE_E_BAY_MOTORS_PRO_SELLER_CONTACT_DETAILS_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_AD_FORMAT_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_CONTACT_BY_PHONE_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_CONTACT_BY_ADDRESS_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_COMPANY_NAME_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_CONTACT_BY_EMAIL_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_BEST_OFFER_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_AUTO_ACCEPT_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_AUTO_DECLINE_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_PAYMENT_METHOD_CHECK_OUT_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_SHIPPING_METHOD_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_COUNTER_OFFER_ENABLED
     * @uses self::VALUE_LOCAL_MARKET_SELLER_CONTACT_DETAILS_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_CONTACT_BY_ADDRESS_ENABLED
     * @uses self::VALUE_CLASSIFIED_AD_COMPANY_NAME_ENABLED
     * @uses self::VALUE_SPECIALITY_SUBSCRIPTION
     * @uses self::VALUE_REGULAR_SUBSCRIPTION
     * @uses self::VALUE_PREMIUM_SUBSCRIPTION
     * @uses self::VALUE_NON_SUBSCRIPTION
     * @uses self::VALUE_INTANGIBLE_ENABLED
     * @uses self::VALUE_PAY_PAL_REQUIRED_FOR_STORE_OWNER
     * @uses self::VALUE_REVISE_QUANTITY_ALLOWED
     * @uses self::VALUE_REVISE_PRICE_ALLOWED
     * @uses self::VALUE_STORE_OWNER_EXTENDED_LISTING_DURATIONS_ENABLED
     * @uses self::VALUE_STORE_OWNER_EXTENDED_LISTING_DURATIONS
     * @uses self::VALUE_RETURN_POLICY_ENABLED
     * @uses self::VALUE_HANDLING_TIME_ENABLED
     * @uses self::VALUE_PAYMENT_METHODS
     * @uses self::VALUE_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_MAX_FLAT_SHIPPING_COST_CBTEXEMPT
     * @uses self::VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST
     * @uses self::VALUE_VARIATIONS_ENABLED
     * @uses self::VALUE_ATTRIBUTE_CONVERSION_ENABLED
     * @uses self::VALUE_FREE_GALLERY_PLUS_ENABLED
     * @uses self::VALUE_FREE_PICTURE_PACK_ENABLED
     * @uses self::VALUE_COMPATIBILITY_ENABLED
     * @uses self::VALUE_MIN_COMPATIBLE_APPLICATIONS
     * @uses self::VALUE_MAX_COMPATIBLE_APPLICATIONS
     * @uses self::VALUE_CONDITION_ENABLED
     * @uses self::VALUE_CONDITION_VALUES
     * @uses self::VALUE_VALUE_CATEGORY
     * @uses self::VALUE_PRODUCT_CREATION_ENABLED
     * @uses self::VALUE_EANENABLED
     * @uses self::VALUE_ISBNENABLED
     * @uses self::VALUE_UPCENABLED
     * @uses self::VALUE_MAX_GRANULAR_FITMENT_COUNT
     * @uses self::VALUE_COMPATIBLE_VEHICLE_TYPE
     * @uses self::VALUE_PAYMENT_OPTIONS_GROUP
     * @uses self::VALUE_SHIPPING_PROFILE_CATEGORY_GROUP
     * @uses self::VALUE_PAYMENT_PROFILE_CATEGORY_GROUP
     * @uses self::VALUE_RETURN_POLICY_PROFILE_CATEGORY_GROUP
     * @uses self::VALUE_VINSUPPORTED
     * @uses self::VALUE_VRMSUPPORTED
     * @uses self::VALUE_SELLER_PROVIDED_TITLE_SUPPORTED
     * @uses self::VALUE_DEPOSIT_SUPPORTED
     * @uses self::VALUE_GLOBAL_SHIPPING_ENABLED
     * @uses self::VALUE_ADDITIONAL_COMPATIBILITY_ENABLED
     * @uses self::VALUE_PICKUP_DROP_OFF_ENABLED
     * @uses self::VALUE_DIGITAL_GOOD_DELIVERY_ENABLED
     * @uses self::VALUE_EPID_SUPPORTED
     * @uses self::VALUE_KTYPE_SUPPORTED
     * @uses self::VALUE_PRODUCT_REQUIRED_ENABLED
     * @uses self::VALUE_DOMESTIC_RETURNS_ACCEPTED_VALUES
     * @uses self::VALUE_INTERNATIONAL_RETURNS_ACCEPTED_VALUES
     * @uses self::VALUE_DOMESTIC_RETURNS_DURATION_VALUES
     * @uses self::VALUE_INTERNATIONAL_RETURNS_DURATION_VALUES
     * @uses self::VALUE_DOMESTIC_RETURNS_SHIPMENT_PAYEE_VALUES
     * @uses self::VALUE_INTERNATIONAL_RETURNS_SHIPMENT_PAYEE_VALUES
     * @uses self::VALUE_DOMESTIC_REFUND_METHOD_VALUES
     * @uses self::VALUE_INTERNATIONAL_REFUND_METHOD_VALUES
     * @uses self::VALUE_RETURN_POLICY_DESCRIPTION_ENABLED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LISTING_DURATIONS,
            self::VALUE_BEST_OFFER_ENABLED,
            self::VALUE_DUTCH_BINENABLED,
            self::VALUE_SHIPPING_TERMS_REQUIRED,
            self::VALUE_USER_CONSENT_REQUIRED,
            self::VALUE_HOME_PAGE_FEATURED_ENABLED,
            self::VALUE_AD_FORMAT_ENABLED,
            self::VALUE_DIGITAL_DELIVERY_ENABLED,
            self::VALUE_BEST_OFFER_COUNTER_ENABLED,
            self::VALUE_BEST_OFFER_AUTO_DECLINE_ENABLED,
            self::VALUE_PRO_PACK,
            self::VALUE_BASIC_UPGRADE_PACK,
            self::VALUE_VALUE_PACK,
            self::VALUE_PRO_PACK_PLUS,
            self::VALUE_LOCAL_MARKET_SPECIALITY_SUBSCRIPTION,
            self::VALUE_LOCAL_MARKET_REGULAR_SUBSCRIPTION,
            self::VALUE_LOCAL_MARKET_PREMIUM_SUBSCRIPTION,
            self::VALUE_LOCAL_MARKET_NON_SUBSCRIPTION,
            self::VALUE_EXPRESS_ENABLED,
            self::VALUE_EXPRESS_PICTURES_REQUIRED,
            self::VALUE_EXPRESS_CONDITION_REQUIRED,
            self::VALUE_SELLER_CONTACT_DETAILS_ENABLED,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_MINIMUM_RESERVE_PRICE,
            self::VALUE_TRANSACTION_CONFIRMATION_REQUEST_ENABLED,
            self::VALUE_STORE_INVENTORY_ENABLED,
            self::VALUE_LOCAL_LISTING_DISTANCES,
            self::VALUE_SKYPE_ME_TRANSACTIONAL_ENABLED,
            self::VALUE_SKYPE_ME_NON_TRANSACTIONAL_ENABLED,
            self::VALUE_CLASSIFIED_AD_PAYMENT_METHOD_ENABLED,
            self::VALUE_CLASSIFIED_AD_SHIPPING_METHOD_ENABLED,
            self::VALUE_CLASSIFIED_AD_BEST_OFFER_ENABLED,
            self::VALUE_CLASSIFIED_AD_COUNTER_OFFER_ENABLED,
            self::VALUE_CLASSIFIED_AD_AUTO_DECLINE_ENABLED,
            self::VALUE_CLASSIFIED_AD_CONTACT_BY_EMAIL_ENABLED,
            self::VALUE_CLASSIFIED_AD_CONTACT_BY_PHONE_ENABLED,
            self::VALUE_SAFE_PAYMENT_REQUIRED,
            self::VALUE_MAXIMUM_BEST_OFFERS_ALLOWED,
            self::VALUE_CLASSIFIED_AD_MAXIMUM_BEST_OFFERS_ALLOWED,
            self::VALUE_CLASSIFIED_AD_CONTACT_BY_EMAIL_AVAILABLE,
            self::VALUE_CLASSIFIED_AD_PAY_PER_LEAD_ENABLED,
            self::VALUE_ITEM_SPECIFICS_ENABLED,
            self::VALUE_PAISA_PAY_FULL_ESCROW_ENABLED,
            self::VALUE_ISBNIDENTIFIER_ENABLED,
            self::VALUE_UPCIDENTIFIER_ENABLED,
            self::VALUE_EANIDENTIFIER_ENABLED,
            self::VALUE_BRAND_MPNIDENTIFIER_ENABLED,
            self::VALUE_CLASSIFIED_AD_AUTO_ACCEPT_ENABLED,
            self::VALUE_BEST_OFFER_AUTO_ACCEPT_ENABLED,
            self::VALUE_CROSS_BORDER_TRADE_ENABLED,
            self::VALUE_PAY_PAL_BUYER_PROTECTION_ENABLED,
            self::VALUE_BUYER_GUARANTEE_ENABLED,
            self::VALUE_INESCROW_WORKFLOW_TIMELINE,
            self::VALUE_COMBINED_FIXED_PRICE_TREATMENT,
            self::VALUE_GALLERY_FEATURED_DURATIONS,
            self::VALUE_PAY_PAL_REQUIRED,
            self::VALUE_E_BAY_MOTORS_PRO_AD_FORMAT_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_PHONE_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_ADDRESS_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_COMPANY_NAME_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_EMAIL_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_BEST_OFFER_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_AUTO_ACCEPT_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_AUTO_DECLINE_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_PAYMENT_METHOD_CHECK_OUT_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_SHIPPING_METHOD_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_COUNTER_OFFER_ENABLED,
            self::VALUE_E_BAY_MOTORS_PRO_SELLER_CONTACT_DETAILS_ENABLED,
            self::VALUE_LOCAL_MARKET_AD_FORMAT_ENABLED,
            self::VALUE_LOCAL_MARKET_CONTACT_BY_PHONE_ENABLED,
            self::VALUE_LOCAL_MARKET_CONTACT_BY_ADDRESS_ENABLED,
            self::VALUE_LOCAL_MARKET_COMPANY_NAME_ENABLED,
            self::VALUE_LOCAL_MARKET_CONTACT_BY_EMAIL_ENABLED,
            self::VALUE_LOCAL_MARKET_BEST_OFFER_ENABLED,
            self::VALUE_LOCAL_MARKET_AUTO_ACCEPT_ENABLED,
            self::VALUE_LOCAL_MARKET_AUTO_DECLINE_ENABLED,
            self::VALUE_LOCAL_MARKET_PAYMENT_METHOD_CHECK_OUT_ENABLED,
            self::VALUE_LOCAL_MARKET_SHIPPING_METHOD_ENABLED,
            self::VALUE_LOCAL_MARKET_COUNTER_OFFER_ENABLED,
            self::VALUE_LOCAL_MARKET_SELLER_CONTACT_DETAILS_ENABLED,
            self::VALUE_CLASSIFIED_AD_CONTACT_BY_ADDRESS_ENABLED,
            self::VALUE_CLASSIFIED_AD_COMPANY_NAME_ENABLED,
            self::VALUE_SPECIALITY_SUBSCRIPTION,
            self::VALUE_REGULAR_SUBSCRIPTION,
            self::VALUE_PREMIUM_SUBSCRIPTION,
            self::VALUE_NON_SUBSCRIPTION,
            self::VALUE_INTANGIBLE_ENABLED,
            self::VALUE_PAY_PAL_REQUIRED_FOR_STORE_OWNER,
            self::VALUE_REVISE_QUANTITY_ALLOWED,
            self::VALUE_REVISE_PRICE_ALLOWED,
            self::VALUE_STORE_OWNER_EXTENDED_LISTING_DURATIONS_ENABLED,
            self::VALUE_STORE_OWNER_EXTENDED_LISTING_DURATIONS,
            self::VALUE_RETURN_POLICY_ENABLED,
            self::VALUE_HANDLING_TIME_ENABLED,
            self::VALUE_PAYMENT_METHODS,
            self::VALUE_MAX_FLAT_SHIPPING_COST,
            self::VALUE_MAX_FLAT_SHIPPING_COST_CBTEXEMPT,
            self::VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST,
            self::VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST,
            self::VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST,
            self::VALUE_VARIATIONS_ENABLED,
            self::VALUE_ATTRIBUTE_CONVERSION_ENABLED,
            self::VALUE_FREE_GALLERY_PLUS_ENABLED,
            self::VALUE_FREE_PICTURE_PACK_ENABLED,
            self::VALUE_COMPATIBILITY_ENABLED,
            self::VALUE_MIN_COMPATIBLE_APPLICATIONS,
            self::VALUE_MAX_COMPATIBLE_APPLICATIONS,
            self::VALUE_CONDITION_ENABLED,
            self::VALUE_CONDITION_VALUES,
            self::VALUE_VALUE_CATEGORY,
            self::VALUE_PRODUCT_CREATION_ENABLED,
            self::VALUE_EANENABLED,
            self::VALUE_ISBNENABLED,
            self::VALUE_UPCENABLED,
            self::VALUE_MAX_GRANULAR_FITMENT_COUNT,
            self::VALUE_COMPATIBLE_VEHICLE_TYPE,
            self::VALUE_PAYMENT_OPTIONS_GROUP,
            self::VALUE_SHIPPING_PROFILE_CATEGORY_GROUP,
            self::VALUE_PAYMENT_PROFILE_CATEGORY_GROUP,
            self::VALUE_RETURN_POLICY_PROFILE_CATEGORY_GROUP,
            self::VALUE_VINSUPPORTED,
            self::VALUE_VRMSUPPORTED,
            self::VALUE_SELLER_PROVIDED_TITLE_SUPPORTED,
            self::VALUE_DEPOSIT_SUPPORTED,
            self::VALUE_GLOBAL_SHIPPING_ENABLED,
            self::VALUE_ADDITIONAL_COMPATIBILITY_ENABLED,
            self::VALUE_PICKUP_DROP_OFF_ENABLED,
            self::VALUE_DIGITAL_GOOD_DELIVERY_ENABLED,
            self::VALUE_EPID_SUPPORTED,
            self::VALUE_KTYPE_SUPPORTED,
            self::VALUE_PRODUCT_REQUIRED_ENABLED,
            self::VALUE_DOMESTIC_RETURNS_ACCEPTED_VALUES,
            self::VALUE_INTERNATIONAL_RETURNS_ACCEPTED_VALUES,
            self::VALUE_DOMESTIC_RETURNS_DURATION_VALUES,
            self::VALUE_INTERNATIONAL_RETURNS_DURATION_VALUES,
            self::VALUE_DOMESTIC_RETURNS_SHIPMENT_PAYEE_VALUES,
            self::VALUE_INTERNATIONAL_RETURNS_SHIPMENT_PAYEE_VALUES,
            self::VALUE_DOMESTIC_REFUND_METHOD_VALUES,
            self::VALUE_INTERNATIONAL_REFUND_METHOD_VALUES,
            self::VALUE_RETURN_POLICY_DESCRIPTION_ENABLED,
        ];
    }
}
