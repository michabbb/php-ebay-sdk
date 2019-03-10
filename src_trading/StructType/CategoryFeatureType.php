<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryFeatureType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>Category</b> container that is returned in the <b>GetCategoryFeatures</b> response. A <b>Category</b> node is returned for each category that is relevant/applicable to the input criteria in the
 * <b>GetCategoryFeatures</b> request. The <b>CategoryID</b> value identifies the eBay category. The rest of the <b>CategoryFeatureType</b> fields that are returned will be dependent on which <b>FeatureID</b> value(s) are specified in the
 * <b>GetCategoryFeatures</b> request.
 * @subpackage Structs
 */
class CategoryFeatureType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the unique identifier of the eBay category. All eBay feature information that is returned under the corresponding <b>Category</b> container is relevant to this eBay category.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The ListingDuration
     * Meta informations extracted from the WSDL
     * - documentation: A <b>ListingDuration</b> field is returned for each listing type and listing duration combination that is supported for the category. The integer value indicates the number of days of the listing duration, and the <b>type</b>
     * attribute identifies the supported listing type. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ListingDurations</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType[]
     */
    public $ListingDuration;
    /**
     * The ShippingTermsRequired
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category requires sellers to specify shipping details at listing time. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site
     * default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ShippingTermsRequired</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingTermsRequired;
    /**
     * The BestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Best Offer feature for listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not
     * be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferEnabled;
    /**
     * The DutchBINEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DutchBINEnabled;
    /**
     * The UserConsentRequired
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether a bidder must consent to the bid by confirming that he or she read and agrees to the terms in eBay's privacy policy. <br><br> Only returned when this value (or this category's setting) overrides the value inherited
     * from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>UserConsentRequired</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $UserConsentRequired;
    /**
     * The HomePageFeaturedEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not it is possible to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Support for this feature varies by site. Item or feedback restrictions may apply.
     * <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used
     * in the call request, and one of those values does not include <code>HomePageFeaturedEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $HomePageFeaturedEnabled;
    /**
     * The ProPackEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Pro Pack Bundle listing upgrade. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not
     * be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProPack</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ProPackEnabled;
    /**
     * The BasicUpgradePackEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $BasicUpgradePackEnabled;
    /**
     * The ValuePackEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Value Pack bundle listing upgrade. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not
     * be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ValuePack</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ValuePackEnabled;
    /**
     * The ProPackPlusEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Pro Pack Plus bundle listing upgrade. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will
     * not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProPackPlus</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ProPackPlusEnabled;
    /**
     * The AdFormatEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports Classified Ad listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if
     * one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>AdFormatEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $AdFormatEnabled;
    /**
     * The BestOfferCounterEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports sellers offering a counter offer against a buyer's Best Offer, or a buyer offering a counter offer against the seller's counter offer. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>BestOfferCounterEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferCounterEnabled;
    /**
     * The BestOfferAutoDeclineEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Best Offer Auto Decline feature. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not
     * be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferAutoDeclineEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferAutoDeclineEnabled;
    /**
     * The LocalMarketSpecialitySubscription
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Speciality level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>LocalMarketSpecialitySubscription</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketSpecialitySubscription;
    /**
     * The LocalMarketRegularSubscription
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Regular level subscription to Motors Local Market listings. This feature is only available to licensed vehicle dealers. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketRegularSubscription</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketRegularSubscription;
    /**
     * The LocalMarketPremiumSubscription
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Premium level subscription Motors Local Market listings. This feature is only available to licensed vehicle dealers. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketPremiumSubscription</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketPremiumSubscription;
    /**
     * The LocalMarketNonSubscription
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports a seller creating a Motors Local Market listing without a subscription. This feature is only available to licensed vehicle dealers. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>LocalMarketNonSubscription</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketNonSubscription;
    /**
     * The ExpressEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressEnabled;
    /**
     * The ExpressPicturesRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressPicturesRequired;
    /**
     * The ExpressConditionRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressConditionRequired;
    /**
     * The MinimumReservePrice
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the Minimum Reserve Price for an auction listing in this category. If there is no Minimum Reserve Price, a value of <code>0.0</code> is returned in this field. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>MinimumReservePrice</code>.
     * - minOccurs: 0
     * @var float
     */
    public $MinimumReservePrice;
    /**
     * The SellerContactDetailsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports seller-level contact information for Classified Ad listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the
     * site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>SellerContactDetailsEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerContactDetailsEnabled;
    /**
     * The TransactionConfirmationRequestEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the Transaction Confirmation Request feature is supported for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site
     * default.
     * - minOccurs: 0
     * @var bool
     */
    public $TransactionConfirmationRequestEnabled;
    /**
     * The StoreInventoryEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $StoreInventoryEnabled;
    /**
     * The SkypeMeTransactionalEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $SkypeMeTransactionalEnabled;
    /**
     * The SkypeMeNonTransactionalEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $SkypeMeNonTransactionalEnabled;
    /**
     * The ClassifiedAdPaymentMethodEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the payment method should be displayed to the user for Classified Ad format listings. Even if enabled, checkout may or may not be enabled. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>ClassifiedAdPaymentMethodEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ClassifiedAdPaymentMethodEnabled;
    /**
     * The ClassifiedAdShippingMethodEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if shipping options are available for Classified Ad listings in the category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
     * Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdShippingMethodEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdShippingMethodEnabled;
    /**
     * The ClassifiedAdBestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if Best offer is enabled for Classified Ad listings for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will
     * not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdBestOfferEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ClassifiedAdBestOfferEnabled;
    /**
     * The ClassifiedAdCounterOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed in Classified Ad listings for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site
     * default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdCounterOfferEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdCounterOfferEnabled;
    /**
     * The ClassifiedAdAutoDeclineEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether automatic decline for best offers for Classified Ad listings is enabled for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent
     * or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdAutoDeclineEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdAutoDeclineEnabled;
    /**
     * The ClassifiedAdContactByPhoneEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the telephone as a contact method for Classified Ad listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the
     * site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByPhoneEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdContactByPhoneEnabled;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports email as a contact method for Classified Ad listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site
     * default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdContactByEmailEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdContactByEmailEnabled;
    /**
     * The SafePaymentRequired
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether listings in this category need to have a safe payment method. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will
     * not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>SafePaymentRequired</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $SafePaymentRequired;
    /**
     * The ClassifiedAdPayPerLeadEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if pay-per-lead listings are allowed for this category. Pay-per-lead listings can be applicable if the value of <b>ListingType</b> is <code>LeadGeneration</code> and the value of <b>ListingSubtype</b> is
     * <code>ClassifiedAd</code>. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdPayPerLeadEnabled;
    /**
     * The ItemSpecificsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports custom Item Specifics. If enabled, sellers can use the <b>Item.ItemSpecifics</b> node in Add/Revise/Relist calls to specify custom Item Specifics. <br><br> Only returned when this value (or
     * this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those
     * values does not include <code>ItemSpecificsEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ItemSpecificsEnabled;
    /**
     * The PaisaPayFullEscrowEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the <code>PaisaPayEscrow</code> payment method. This feature is only applicable to the India site. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>PaisaPayFullEscrowEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $PaisaPayFullEscrowEnabled;
    /**
     * The BrandMPNIdentifierEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the capability to identify a product using the brand/manufacturer part number combination. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from
     * the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BrandMPNIdentifierEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $BrandMPNIdentifierEnabled;
    /**
     * The ClassifiedAdAutoAcceptEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Best Offer Automatic Accept feature for Classified Ad listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent
     * or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ClassifiedAdAutoAcceptEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdAutoAcceptEnabled;
    /**
     * The BestOfferAutoAcceptEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports the Best Offer Automatic Accept feature for listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site
     * default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>BestOfferAutoAcceptEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferAutoAcceptEnabled;
    /**
     * The CrossBorderTradeNorthAmericaEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports specifying that listings be displayed in the default search results of North America sites (US and Canada (English). <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>CrossBorderTradeEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $CrossBorderTradeNorthAmericaEnabled;
    /**
     * The CrossBorderTradeGBEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports specifying that listings be displayed in the default search results of the UK and Ireland sites. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>CrossBorderTradeEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $CrossBorderTradeGBEnabled;
    /**
     * The CrossBorderTradeAustraliaEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports specifying that listings be displayed in the default search results of the Australia site. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from
     * the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CrossBorderTradeEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $CrossBorderTradeAustraliaEnabled;
    /**
     * The PayPalBuyerProtectionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: For the Australia site, if both <b>PayPalBuyerProtectionEnabled</b> and <b>BuyerGuaranteeEnabled</b> are returned, then buyer protection is allowed for this category. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>PayPalBuyerProtectionEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalBuyerProtectionEnabled;
    /**
     * The BuyerGuaranteeEnabled
     * Meta informations extracted from the WSDL
     * - documentation: For the Australia site, if both <b>PayPalBuyerProtectionEnabled</b> and <b>BuyerGuaranteeEnabled</b> are returned, then buyer protection is allowed for this category. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>PayPalBuyerProtectionEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyerGuaranteeEnabled;
    /**
     * The CombinedFixedPriceTreatmentEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $CombinedFixedPriceTreatmentEnabled;
    /**
     * The GalleryFeaturedDurations
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned if the Featured Gallery feature is supported for the category. The time unit that is returned in this field indicates how long a gallery will be featured on eBay. <br><br> Only returned when this value (or this
     * category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values
     * does not include <code>GalleryFeaturedDurations</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType
     */
    public $GalleryFeaturedDurations;
    /**
     * The PayPalRequired
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category requires PayPal as a payment method. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be
     * returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PayPalRequired</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalRequired;
    /**
     * The eBayMotorsProAdFormatEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether this category allows Classified Ad listings on eBay Motors. This element is applicable for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited
     * from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProAdFormatEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $eBayMotorsProAdFormatEnabled;
    /**
     * The eBayMotorsProContactByPhoneEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProContactByPhoneEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProContactByPhoneEnabled;
    /**
     * The eBayMotorsProPhoneCount
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which telephone option is enabled for the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the
     * category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProContactByPhoneEnabled</code>.
     * - minOccurs: 0
     * @var int
     */
    public $eBayMotorsProPhoneCount;
    /**
     * The eBayMotorsProContactByAddressEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProContactByAddressEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProContactByAddressEnabled;
    /**
     * The eBayMotorsProStreetCount
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which address option is enabled for the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the
     * category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProContactByAddressEnabled</code>.
     * - minOccurs: 0
     * @var int
     */
    public $eBayMotorsProStreetCount;
    /**
     * The eBayMotorsProCompanyNameEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProCompanyNameEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProCompanyNameEnabled;
    /**
     * The eBayMotorsProContactByEmailEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProContactByEmailEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProContactByEmailEnabled;
    /**
     * The eBayMotorsProBestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if Best Offer is supported for eBay Motors Classified Ad listings in this category. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProBestOfferEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $eBayMotorsProBestOfferEnabled;
    /**
     * The eBayMotorsProAutoAcceptEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether this category allows auto-accept for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProAutoAcceptEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProAutoAcceptEnabled;
    /**
     * The eBayMotorsProAutoDeclineEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether this category allows auto-decline for Best Offers for eBay Motors Classified Ad listings. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProAutoDeclineEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProAutoDeclineEnabled;
    /**
     * The eBayMotorsProPaymentMethodCheckOutEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the payment method should be displayed to the user for this category in an eBay Motors Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users. <br><br> Only
     * returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call
     * request, and one of those values does not include <code>eBayMotorsProPaymentMethodCheckOutEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $eBayMotorsProPaymentMethodCheckOutEnabled;
    /**
     * The eBayMotorsProShippingMethodEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if shipping options should be displayed to the user for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProShippingMethodEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProShippingMethodEnabled;
    /**
     * The eBayMotorsProCounterOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed on Best Offers for this category in an eBay Motors Classified Ad listing. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>eBayMotorsProCounterOfferEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProCounterOfferEnabled;
    /**
     * The eBayMotorsProSellerContactDetailsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether this category allows seller-level contact information for eBay Motors Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element is for eBay
     * Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>eBayMotorsProSellerContactDetailsEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProSellerContactDetailsEnabled;
    /**
     * The LocalMarketAdFormatEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether this category supports Motor Local Market Classified Ad listings. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the
     * category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>LocalMarketAdFormatEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $LocalMarketAdFormatEnabled;
    /**
     * The LocalMarketContactByPhoneEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports including the telephone in the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketContactByPhoneEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketContactByPhoneEnabled;
    /**
     * The LocalMarketPhoneCount
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which telephone option is enabled for the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the
     * category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketContactByPhoneEnabled</code>.
     * - minOccurs: 0
     * @var int
     */
    public $LocalMarketPhoneCount;
    /**
     * The LocalMarketContactByAddressEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports including the address in the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketContactByAddressEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketContactByAddressEnabled;
    /**
     * The LocalMarketStreetCount
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which address option is enabled for the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the
     * category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketContactByAddressEnabled</code>.
     * - minOccurs: 0
     * @var int
     */
    public $LocalMarketStreetCount;
    /**
     * The LocalMarketCompanyNameEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports including a company name in the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketCompanyNameEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketCompanyNameEnabled;
    /**
     * The LocalMarketContactByEmailEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports including an email address in the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketContactByEmailEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketContactByEmailEnabled;
    /**
     * The LocalMarketBestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if Best Offer is enabled/required for Motors Local Market Classified Ad listings in this category. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketBestOfferEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $LocalMarketBestOfferEnabled;
    /**
     * The LocalMarketAutoAcceptEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether this category supports auto-accept for Best Offers for Motors Local Market Classified Ads. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketAutoAcceptEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketAutoAcceptEnabled;
    /**
     * The LocalMarketAutoDeclineEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether this category supports auto-decline for Best Offers for Motors Local Market Classified Ads. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketAutoDeclineEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketAutoDeclineEnabled;
    /**
     * The LocalMarketPaymentMethodCheckOutEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the payment method should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     * <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used
     * in the call request, and one of those values does not include <code>LocalMarketPaymentMethodCheckOutEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $LocalMarketPaymentMethodCheckOutEnabled;
    /**
     * The LocalMarketShippingMethodEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if shipping methods should be displayed to the user for this category in an Motors Local Market Classified Ad listing. Even if enabled, checkout may or may not be enabled. This element is for Local market dealers. <br><br>
     * Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the
     * call request, and one of those values does not include <code>LocalMarketShippingMethodEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketShippingMethodEnabled;
    /**
     * The LocalMarketCounterOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed on Best Offers for this category for Motors Local Market Classified Ad listings. This element is for Local market dealers. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>LocalMarketCounterOfferEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketCounterOfferEnabled;
    /**
     * The LocalMarketSellerContactDetailsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the whether this category allows seller-level contact information for Motors Local Market Classified Ad listings. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>LocalMarketSellerContactDetailsEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketSellerContactDetailsEnabled;
    /**
     * The ClassifiedAdPhoneCount
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which telephone option is included in the seller's contact information. This element is for For Sale By Owner listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from
     * the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>ClassifiedAdContactByPhoneEnabled</code>.
     * - minOccurs: 0
     * @var int
     */
    public $ClassifiedAdPhoneCount;
    /**
     * The ClassifiedAdContactByAddressEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports including an address in the seller's contact information. This element is for For Sale By Owner listings. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>ClassifiedAdContactByAddressEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdContactByAddressEnabled;
    /**
     * The ClassifiedAdStreetCount
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which address option is included in the seller's contact information. This element is for For Sale By Owner listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from
     * the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>ClassifiedAdContactByAddressEnabled</code>.
     * - minOccurs: 0
     * @var int
     */
    public $ClassifiedAdStreetCount;
    /**
     * The ClassifiedAdCompanyNameEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this category supports including a company name in the seller's contact information. This element is for For Sale By Owner listings. <br><br> Only returned when this value (or this category's setting) overrides the
     * value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>ClassifiedAdCompanyNameEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdCompanyNameEnabled;
    /**
     * The SpecialitySubscription
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Specialty vehicle subscription. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>SpecialitySubscription</code>.
     * - minOccurs: 0
     * @var string
     */
    public $SpecialitySubscription;
    /**
     * The RegularSubscription
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Regular vehicle subscription. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>RegularSubscription</code>.
     * - minOccurs: 0
     * @var string
     */
    public $RegularSubscription;
    /**
     * The PremiumSubscription
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates whether the category supports Motors Local Market listings if the seller has a Premium vehicle subscription. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>PremiumSubscription</code>.
     * - minOccurs: 0
     * @var string
     */
    public $PremiumSubscription;
    /**
     * The NonSubscription
     * Meta informations extracted from the WSDL
     * - documentation: The value in this field indicates whether the category supports Motors Local Market listings if the seller does not have a vehicle subscription. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>NonSubscription</code>.
     * - minOccurs: 0
     * @var string
     */
    public $NonSubscription;
    /**
     * The INEscrowWorkflowTimeline
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the escrow workflow version that applies to the category on the India site: Default Workflow, Workflow A or Workflow B. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from
     * the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>INEscrowWorkflowTimeline</code>.
     * - minOccurs: 0
     * @var string
     */
    public $INEscrowWorkflowTimeline;
    /**
     * The PayPalRequiredForStoreOwner
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalRequiredForStoreOwner;
    /**
     * The ReviseQuantityAllowed
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the category allows the seller to revise the quantity of a multi-quantity, active listing. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or
     * the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReviseQuantityAllowed</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ReviseQuantityAllowed;
    /**
     * The RevisePriceAllowed
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the category allows the seller to revise the price of a fixed-price listing. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site
     * default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>RevisePriceAllowed</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $RevisePriceAllowed;
    /**
     * The StoreOwnerExtendedListingDurationsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if an eBay Store owner gets extended listing durations in a given category. When the value of this element is true, it means the listing duration values defined in <b>StoreOwnerExtendedListingDurations</b> are applicable to
     * fixed-price listings in a given category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurationsEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $StoreOwnerExtendedListingDurationsEnabled;
    /**
     * The StoreOwnerExtendedListingDurations
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional listings durations that are available to eBay Store owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the
     * <b>ListingDurations</b> element. Applies to fixed-price Listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>StoreOwnerExtendedListingDurations</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
     */
    public $StoreOwnerExtendedListingDurations;
    /**
     * The ReturnPolicyEnabled
     * Meta informations extracted from the WSDL
     * - documentation: <b>For most sites:</b> If true, listings in this category require a return policy. <br> <br> <b>For eBay India (IN), Australia (AU), and US eBay Motors Parts and Accessories:</b> If true, the category supports but does not require a
     * return policy. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * values are used in the call request, and one of those values does not include <code>ReturnPolicyEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnPolicyEnabled;
    /**
     * The HandlingTimeEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if a seller's stated handling time is enabled for a category. A handling time is generally needed for items that are shipped to the buyer, but not necessarily applicable to freight shipping or local pickup. <br> <br> The
     * handling time is the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time). <br> For a
     * list of the handling time values allowed for each site, use <code>DispatchTimeMaxDetails</code> in <b>GeteBayDetails</b>.<br> <br> <span class="tablenote"><b>Note:</b> Although the field name ends with "Enabled", a value of true means that a handling
     * time is NOT supported, and value of false means that a handling time IS supported.</span> <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be
     * returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>HandlingTimeEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $HandlingTimeEnabled;
    /**
     * The MaxFlatShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: The maximum cost the seller can charge for the first domestic flat-rate shipping service. The total shipping cost is the seller's base flat-rate shipping cost plus the cost of insurance, if insurance is required. Mutually exclusive
     * with the <b>Group</b><code>N</code><b>MaxFlatShippingCost</b> elements. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or
     * more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxFlatShippingCost</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MaxFlatShippingCost;
    /**
     * The Group1MaxFlatShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group1. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not
     * be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group1MaxFlatShippingCost</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Group1MaxFlatShippingCost;
    /**
     * The Group2MaxFlatShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group2. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not
     * be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group2MaxFlatShippingCost</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Group2MaxFlatShippingCost;
    /**
     * The Group3MaxFlatShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group3. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not
     * be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>Group3MaxFlatShippingCost</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Group3MaxFlatShippingCost;
    /**
     * The PaymentMethod
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the acceptable payment methods that can be used when listing an item for sale in the corresponding category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the
     * category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentMethods</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentMethod;
    /**
     * The VariationsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, you can pass in <b>Item.Variations</b> in an Add/Revise/Relist fixed-price item call when you list in this category.<br> <br> Multi-variation listings contain items that are logically the same product, but that
     * vary in their manufacturing details or packaging. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. <br><br> Only returned when this value (or this
     * category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values
     * does not include <code>VariationsEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $VariationsEnabled;
    /**
     * The AttributeConversionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AttributeConversionEnabled;
    /**
     * The FreeGalleryPlusEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports free, automatic upgrades for Gallery Plus, which enhances pictures in search results. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the
     * category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>FreeGalleryPlusEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $FreeGalleryPlusEnabled;
    /**
     * The FreePicturePackEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures. <br><br> Only returned when this value (or this category's setting) overrides the value
     * inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>FreePicturePackEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $FreePicturePackEnabled;
    /**
     * The ItemCompatibilityEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports parts compatibility by application (<b>ByApplication</b>), by specification (<b>BySpecification</b>), or not at all (<b>Disabled</b>). Categories cannot support both types of parts
     * compatibility. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories for the eBay Motors (US) site (site ID 100) only. <br><br> Only returned when this value (or this category's setting) overrides the value inherited
     * from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>CompatibilityEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ItemCompatibilityEnabled;
    /**
     * The MinItemCompatibility
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies the minimum number of required compatible applications for listing items. A value of "0" indicates it is not mandatory to specify parts compatibilities when listing. <br><br> This applies to categories that are
     * enabled for compatibility by application only. Parts compatiblity by application can be specified by listing with a catalog product that supports parts compatibility or by specifying parts compatibility by application manually (<b class="con">
     * Item.ItemCompatibilityList</b>). <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MinCompatibleApplications</code>.
     * - minOccurs: 0
     * @var int
     */
    public $MinItemCompatibility;
    /**
     * The MaxItemCompatibility
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies the maximum number of compatible applications allowed per item when adding or revising items. This is relevant for specifying parts compatibility by application manually (<b class="con">
     * Item.ItemCompatibilityList</b>) only. <br><br> Applicable for the US site only. <br><br> For DE, UK, and AU sites, this field returns the same value as <b>MaxGranularFitmentCount</b>. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>MaxCompatibleApplications</code>.
     * - minOccurs: 0
     * @var int
     */
    public $MaxItemCompatibility;
    /**
     * The ConditionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the category supports (or requires) using <b>Item.ConditionID</b> to specify an item's condition in Add/Revise/Relist calls. See the <b>ConditionValues</b> type for a list of valid condition ID values. <br><br> Only
     * returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call
     * request, and one of those values does not include <code>ConditionEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ConditionEnabled;
    /**
     * The ConditionValues
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the supported item conditions for the category, plus related policies and other details. <br><br> Only returned <b>ConditionEnabled</b> value is <code>Enabled</code> or <code>Required</code> and when any of the condition
     * values are different from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>ConditionValues</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionValuesType
     */
    public $ConditionValues;
    /**
     * The ValueCategory
     * Meta informations extracted from the WSDL
     * - documentation: Some eBay sites may select a few categories and designate them as "value categories". These are typically selected from categories where buyers can find great deals. (Not all categories with great deals are designated as value
     * categories.) This designation can change over time. <br> <br> While a category is designated as a value category (i.e., when <b>ValueCategory</b> is <code>true</code>), it is subject to the following rule: Items in value categories can only be listed
     * in one category.<br> <br> For example, if you attempt to list in two categories and the primary category or secondary category is a value category, then eBay drops the secondary category and lists the item in the primary category only. Similarly, if
     * you attempt to add a secondary category to an existing listing, or you change the category for an existing listing, and if the primary or secondary category is a value category, then eBay drops the secondary category. <br><br> Only returned when this
     * value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of
     * those values does not include <code>ValueCategory</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $ValueCategory;
    /**
     * The ProductCreationEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether a category supports (or requires) the creation of a listing using an eBay Catalog product. To create a listing based on an eBay Catalog product, the seller passed in Global Trade Item Number (GTIN) or eBay Product
     * ID (ePID) value in an Add/Revise/Relist call and then eBay tries to match the product identifier to a product in the eBay Catalog. If a match is found, the listing picks up the details of the eBay Catalog product, including product title, product
     * description, product aspects, primary eBay listing category ID, and links to any product stock photos. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
     * Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ProductCreationEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ProductCreationEnabled;
    /**
     * The EANEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not European Article Numbers (EANs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that EANs cannot be used for the category, a value of
     * <code>Enabled</code> indicates that EANs can be used for the category, and a value of <code>Required</code> indicates that an EAN is required when listing a product in this category. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>EANEnabled</code>. <br> <br> <span class="tablenote"><b>Note:</b> It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that
     * means that they should look for <b>EANEnabled</b>, <b>ISBNEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. When Phase 2 of the <a href="
     * https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> launches later in 2018, sellers should also start looking for the <b>ProductRequiredEnabled</b> field at the category level in the <b>GetCategoryFeatures</b>
     * response, as this boolean field will indicate if the eBay category requires that the seller associate an eBay Catalog product to the listing. In Phase 2 of PBSE, an ePID value will have to be passed in at list/revise/relist time if the category
     * requires that listings in that category be associated with an eBay Catalog product. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EANEnabled;
    /**
     * The ISBNEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not International Standard Book Numbers (ISBNs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that ISBNs cannot be used for the category, a value of
     * <code>Enabled</code> indicates that ISBNs can be used for the category, and a value of <code>Required</code> indicates that an ISBN is required when listing a product in this category. <br><br> Only returned when this value (or this category's
     * setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not
     * include <code>ISBNEnabled</code>. <br> <br> <span class="tablenote"><b>Note:</b> It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination.
     * So, that means that they should look for <b>ISBNEnabled</b>, <b>EANEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. When Phase 2 of the <a href="
     * https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> launches later in 2018, sellers should also start looking for the <b>ProductRequiredEnabled</b> field at the category level in the <b>GetCategoryFeatures</b>
     * response, as this boolean field will indicate if the eBay category requires that the seller associate an eBay Catalog product to the listing. In Phase 2 of PBSE, an ePID value will have to be passed in at list/revise/relist time if the category
     * requires that listings in that category be associated with an eBay Catalog product. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ISBNEnabled;
    /**
     * The UPCEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not Universal Product Codes (UPCs) are supported/required when listing products in the category. A value of <code>Disabled</code> indicates that UPCs cannot be used for the category, a value of
     * <code>Enabled</code> indicates that UPCs can be used for the category, and a value of <code>Required</code> indicates that a UPC is required when listing a product in this category. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>UPCEnabled</code>. <br> <br> <span class="tablenote"><b>Note:</b> It is recommended that sellers always use <b>GetCategoryFeatures</b> to see if an eBay category requires a Global Trade Item Number (GTIN) or a Brand/MPN combination. So, that
     * means that they should look for <b>UPCEnabled</b>, <b>ISBNEnabled</b>, <b>EANEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> at the category level in the <b>GetCategoryFeatures</b> response. When Phase 2 of the <a href="
     * https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> launches later in 2018, sellers should also start looking for the <b>ProductRequiredEnabled</b> field at the category level in the <b>GetCategoryFeatures</b>
     * response, as this boolean field will indicate if the eBay category requires that the seller associate an eBay Catalog product to the listing. In Phase 2 of PBSE, an ePID value will have to be passed in at list/revise/relist time if the category
     * requires that listings in that category be associated with an eBay Catalog product. </span>
     * - minOccurs: 0
     * @var string
     */
    public $UPCEnabled;
    /**
     * The MaxGranularFitmentCount
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the maximum number of compatible applications allowed per item when adding or revising items with compatibilities provided at the most detailed granularity. For example, in Car and Truck Parts on the US site, the most
     * granular application would include Year, Make, Model, Trim, and Engine. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or
     * more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>MaxGranularFitmentCount</code>.
     * - minOccurs: 0
     * @var int
     */
    public $MaxGranularFitmentCount;
    /**
     * The CompatibleVehicleType
     * Meta informations extracted from the WSDL
     * - documentation: This field is for future use. It is currently returned as an empty field, but in the future, the string value in this field will indicate Parts Compatibility vehicle type (e.g. cars, motorcycles, boats). <br><br> Only returned when
     * this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and
     * one of those values does not include <code>CompatibleVehicleType</code>.
     * - minOccurs: 0
     * @var string
     */
    public $CompatibleVehicleType;
    /**
     * The PaymentOptionsGroup
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentOptionsGroup;
    /**
     * The ShippingProfileCategoryGroup
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the Business Policies category group that may be used for Shipping profiles. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
     * Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ShippingProfileCategoryGroup</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingProfileCategoryGroup;
    /**
     * The PaymentProfileCategoryGroup
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the Business Policies category group that may be used for Payment profiles. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default.
     * Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>PaymentProfileCategoryGroup</code>.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentProfileCategoryGroup;
    /**
     * The ReturnPolicyProfileCategoryGroup
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the Business Policies category group that may be used for Return Policy profiles. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site
     * default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>ReturnPolicyProfileCategoryGroup</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnPolicyProfileCategoryGroup;
    /**
     * The VINSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $VINSupported;
    /**
     * The VRMSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $VRMSupported;
    /**
     * The SellerProvidedTitleSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerProvidedTitleSupported;
    /**
     * The DepositSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DepositSupported;
    /**
     * The GlobalShippingEnabled
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the Global Shipping Program (GSP) is supported for the category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not
     * be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>GlobalShippingEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $GlobalShippingEnabled;
    /**
     * The AdditionalCompatibilityEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates whether or not the category (specified in the <b>Category.CategoryID</b> field) supports Boats and Motorcycles Parts compatibility. If <code>true</code>, parts compatibility name-value pairs for boats and
     * motorcycles can be added to an item listed in the specified category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or
     * more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include <code>AdditionalCompatibilityEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $AdditionalCompatibilityEnabled;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The PickupDropOffEnabled
     * Meta informations extracted from the WSDL
     * - documentation: A <code>true</code> value in this field indicates that items listed in the category (specified in the <b>Category.CategoryID</b> field) may be enabled with the 'Click and Collect' feature. With the 'Click and Collect' feature, a
     * buyer can purchase certain items on an eBay site and collect them at a local store. Buyers are notified by eBay once their items are available. A <code>false</code> value in this field indicates that items listed in the category are not eligible for
     * the 'Click and Collect' feature. <br/><br/> The 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites. <br><br> Only returned when this
     * value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of
     * those values does not include <code>PickupDropOffEnabled</code>. <br> <br> <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the
     * seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $PickupDropOffEnabled;
    /**
     * The DigitalGoodDeliveryEnabled
     * Meta informations extracted from the WSDL
     * - documentation: A <code>true</code> value in this field indicates that digital gift cards (eBay gift cards or third-party gift cards) can be listed in the category specified in the <b>Category.CategoryID</b> field. A <code>false</code> value in this
     * field indicates that digital gift cards can not be listed in the specified category. <br/><br/> Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following:
     * <ul> <li>Each seller can only have one gift card listing at any given time </li> <li>The maximum dollar value of the gift card may not exceed 500.00</li> <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not
     * allowed</li> </ul> For more information on eBay's Gift Card policy, see the <a href=" http://pages.ebay.com/help/policies/gift.html" target="_blank">Gift cards policy Help page</a>. <br><br> Only returned when this value (or this category's setting)
     * overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>DigitalGoodDeliveryEnabled</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $DigitalGoodDeliveryEnabled;
    /**
     * The EpidSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the category supports the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible with a motor vehicle part or
     * accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. <br/><br/> For more information on using an ePID to identify a compatible motorcycle or scooter through an Add/Revise/Relist API call on the Germany
     * or UK site, see the documentation for the <a href=" http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container. <br><br> Only
     * returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call
     * request, and one of those values does not include <code>EpidSupported</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $EpidSupported;
    /**
     * The KTypeSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the category supports the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor vehicle part or accessory. K
     * type vehicle numbers can only be used to identify cars and trucks on the Germany site. <br/><br/> For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API call on the Germany site,
     * see the documentation for the <a href=" http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container. <br><br> Only returned when this
     * value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of
     * those values does not include <code>KTypeSupported</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $KTypeSupported;
    /**
     * The ProductRequiredEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates if the category requires association with an eBay Catalog product when listing/revising/relisting an item. This field is only returned if <code>Enabled</code>. <br><br> Until Phase 2 of the Product-Based Shopping
     * Experience (PBSE) rolls out later in 2018, this field will only be returned in Sandbox. For more information on PBSE, see the <a href=" https://developer.ebay.com/pbse/" target="_blank">Product-Based Shopping Experience</a> page. <br><br> Only
     * returned when this value (or this category's setting) overrides the value inherited from the category's parent or the site default. Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call
     * request, and one of those values does not include <code>ProductRequiredEnabled</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ProductRequiredEnabled;
    /**
     * The DomesticReturnsAcceptedValues
     * Meta informations extracted from the WSDL
     * - documentation: The values returned in this field indicate whether or not the seller accepts domestic returns for items listed in the associated marketplace and category. <br><br>While most categories return the <b>ReturnsAccepted</b> flag
     * (indicating the category supports returns), some categories will also return the <b>ReturnsNotAccepted</b> flag to indicate the seller can choose to not accept returns for an item listed in that category. <br><br>The values returned in this field are
     * pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. Here, it's worth noting that not accepting
     * returns is a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account and Business Policies Management APIs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType
     */
    public $DomesticReturnsAcceptedValues;
    /**
     * The InternationalReturnsAcceptedValues
     * Meta informations extracted from the WSDL
     * - documentation: The values returned in this field indicate whether or not the seller can offer international returns. <br><br>The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to
     * <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and its related family of calls, and in the return policies you
     * configure for use with the Account and Business Policies Management APIs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType
     */
    public $InternationalReturnsAcceptedValues;
    /**
     * The DomesticReturnsDurationValues
     * Meta informations extracted from the WSDL
     * - documentation: The values returned in this field indicate the return-duration options that are available for domestic returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent only
     * if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem and
     * its related family of calls, and in the return policies you configure for use with the Account and Business Policies Management APIs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
     */
    public $DomesticReturnsDurationValues;
    /**
     * The InternationalReturnsDurationValues
     * Meta informations extracted from the WSDL
     * - documentation: The values returned in this field indicate the return-duration options that are available for international returns for items listed in the associated marketplace and category. <br><br>The values returned in this field are pertinent
     * only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid in AddItem
     * and its related family of calls, and in the return policies you configure for use with the Account and Business Policies Management APIs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType
     */
    public $InternationalReturnsDurationValues;
    /**
     * The DomesticReturnsShipmentPayeeValues
     * Meta informations extracted from the WSDL
     * - documentation: The values returned in this field indicate the available options for who pays the return shipping for domestic returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field are
     * pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are valid
     * in AddItem and its related family of calls, and in the return policies you configure for use with the Account and Business Policies Management APIs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType
     */
    public $DomesticReturnsShipmentPayeeValues;
    /**
     * The InternationalReturnsShipmentPayeeValues
     * Meta informations extracted from the WSDL
     * - documentation: The values returned in this field indicate the available options for who pays the return shipping for international returns. Possible values are <code>BUYER</code> and <code>SELLER</code>. <br><br>The values returned in this field
     * are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values returned in this field are
     * valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account and Business Policies Management APIs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public $InternationalReturnsShipmentPayeeValues;
    /**
     * The DomesticRefundMethodValues
     * Meta informations extracted from the WSDL
     * - documentation: On the EBAY_US marketplace only, sellers can offer item replacement in addition to offering money back returns. This flag defines the availability of such options for the given US marketplace category. Sellers can offer item
     * replacements only if returns are enabled (<b>returnPolicyEnabled</b> is set to <code>true</code>) for the item. You can specify item replacement in the AddItem family of calls and in the return policy settings of the Account and Business Policies
     * Management APIs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
     */
    public $DomesticRefundMethodValues;
    /**
     * The InternationalRefundMethodValues
     * Meta informations extracted from the WSDL
     * - documentation: In US, sellers can offer an item replacement for returns, in addition to offering money back returns. The values returned in this field indicate the availability of such options for the given marketplace and category. <br><br>The
     * values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values
     * returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account and Business Policies Management APIs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
     */
    public $InternationalRefundMethodValues;
    /**
     * The ReturnPolicyDescriptionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: In some EU countries, sellers are legally required to describe the return policy they offer. The value returned by this field indicates if sellers can provide such a description within the given marketplace and category. <br><br>The
     * values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated category, which indicates that items listed in the category must include a return policy. The values
     * returned in this field are valid in AddItem and its related family of calls, and in the return policies you configure for use with the Account and Business Policies Management APIs.
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnPolicyDescriptionEnabled;
    /**
     * Constructor method for CategoryFeatureType
     * @uses CategoryFeatureType::setCategoryID()
     * @uses CategoryFeatureType::setListingDuration()
     * @uses CategoryFeatureType::setShippingTermsRequired()
     * @uses CategoryFeatureType::setBestOfferEnabled()
     * @uses CategoryFeatureType::setDutchBINEnabled()
     * @uses CategoryFeatureType::setUserConsentRequired()
     * @uses CategoryFeatureType::setHomePageFeaturedEnabled()
     * @uses CategoryFeatureType::setProPackEnabled()
     * @uses CategoryFeatureType::setBasicUpgradePackEnabled()
     * @uses CategoryFeatureType::setValuePackEnabled()
     * @uses CategoryFeatureType::setProPackPlusEnabled()
     * @uses CategoryFeatureType::setAdFormatEnabled()
     * @uses CategoryFeatureType::setBestOfferCounterEnabled()
     * @uses CategoryFeatureType::setBestOfferAutoDeclineEnabled()
     * @uses CategoryFeatureType::setLocalMarketSpecialitySubscription()
     * @uses CategoryFeatureType::setLocalMarketRegularSubscription()
     * @uses CategoryFeatureType::setLocalMarketPremiumSubscription()
     * @uses CategoryFeatureType::setLocalMarketNonSubscription()
     * @uses CategoryFeatureType::setExpressEnabled()
     * @uses CategoryFeatureType::setExpressPicturesRequired()
     * @uses CategoryFeatureType::setExpressConditionRequired()
     * @uses CategoryFeatureType::setMinimumReservePrice()
     * @uses CategoryFeatureType::setSellerContactDetailsEnabled()
     * @uses CategoryFeatureType::setTransactionConfirmationRequestEnabled()
     * @uses CategoryFeatureType::setStoreInventoryEnabled()
     * @uses CategoryFeatureType::setSkypeMeTransactionalEnabled()
     * @uses CategoryFeatureType::setSkypeMeNonTransactionalEnabled()
     * @uses CategoryFeatureType::setClassifiedAdPaymentMethodEnabled()
     * @uses CategoryFeatureType::setClassifiedAdShippingMethodEnabled()
     * @uses CategoryFeatureType::setClassifiedAdBestOfferEnabled()
     * @uses CategoryFeatureType::setClassifiedAdCounterOfferEnabled()
     * @uses CategoryFeatureType::setClassifiedAdAutoDeclineEnabled()
     * @uses CategoryFeatureType::setClassifiedAdContactByPhoneEnabled()
     * @uses CategoryFeatureType::setClassifiedAdContactByEmailEnabled()
     * @uses CategoryFeatureType::setSafePaymentRequired()
     * @uses CategoryFeatureType::setClassifiedAdPayPerLeadEnabled()
     * @uses CategoryFeatureType::setItemSpecificsEnabled()
     * @uses CategoryFeatureType::setPaisaPayFullEscrowEnabled()
     * @uses CategoryFeatureType::setBrandMPNIdentifierEnabled()
     * @uses CategoryFeatureType::setClassifiedAdAutoAcceptEnabled()
     * @uses CategoryFeatureType::setBestOfferAutoAcceptEnabled()
     * @uses CategoryFeatureType::setCrossBorderTradeNorthAmericaEnabled()
     * @uses CategoryFeatureType::setCrossBorderTradeGBEnabled()
     * @uses CategoryFeatureType::setCrossBorderTradeAustraliaEnabled()
     * @uses CategoryFeatureType::setPayPalBuyerProtectionEnabled()
     * @uses CategoryFeatureType::setBuyerGuaranteeEnabled()
     * @uses CategoryFeatureType::setCombinedFixedPriceTreatmentEnabled()
     * @uses CategoryFeatureType::setGalleryFeaturedDurations()
     * @uses CategoryFeatureType::setPayPalRequired()
     * @uses CategoryFeatureType::setEBayMotorsProAdFormatEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProContactByPhoneEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProPhoneCount()
     * @uses CategoryFeatureType::setEBayMotorsProContactByAddressEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProStreetCount()
     * @uses CategoryFeatureType::setEBayMotorsProCompanyNameEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProContactByEmailEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProBestOfferEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProAutoAcceptEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProAutoDeclineEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProPaymentMethodCheckOutEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProShippingMethodEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProCounterOfferEnabled()
     * @uses CategoryFeatureType::setEBayMotorsProSellerContactDetailsEnabled()
     * @uses CategoryFeatureType::setLocalMarketAdFormatEnabled()
     * @uses CategoryFeatureType::setLocalMarketContactByPhoneEnabled()
     * @uses CategoryFeatureType::setLocalMarketPhoneCount()
     * @uses CategoryFeatureType::setLocalMarketContactByAddressEnabled()
     * @uses CategoryFeatureType::setLocalMarketStreetCount()
     * @uses CategoryFeatureType::setLocalMarketCompanyNameEnabled()
     * @uses CategoryFeatureType::setLocalMarketContactByEmailEnabled()
     * @uses CategoryFeatureType::setLocalMarketBestOfferEnabled()
     * @uses CategoryFeatureType::setLocalMarketAutoAcceptEnabled()
     * @uses CategoryFeatureType::setLocalMarketAutoDeclineEnabled()
     * @uses CategoryFeatureType::setLocalMarketPaymentMethodCheckOutEnabled()
     * @uses CategoryFeatureType::setLocalMarketShippingMethodEnabled()
     * @uses CategoryFeatureType::setLocalMarketCounterOfferEnabled()
     * @uses CategoryFeatureType::setLocalMarketSellerContactDetailsEnabled()
     * @uses CategoryFeatureType::setClassifiedAdPhoneCount()
     * @uses CategoryFeatureType::setClassifiedAdContactByAddressEnabled()
     * @uses CategoryFeatureType::setClassifiedAdStreetCount()
     * @uses CategoryFeatureType::setClassifiedAdCompanyNameEnabled()
     * @uses CategoryFeatureType::setSpecialitySubscription()
     * @uses CategoryFeatureType::setRegularSubscription()
     * @uses CategoryFeatureType::setPremiumSubscription()
     * @uses CategoryFeatureType::setNonSubscription()
     * @uses CategoryFeatureType::setINEscrowWorkflowTimeline()
     * @uses CategoryFeatureType::setPayPalRequiredForStoreOwner()
     * @uses CategoryFeatureType::setReviseQuantityAllowed()
     * @uses CategoryFeatureType::setRevisePriceAllowed()
     * @uses CategoryFeatureType::setStoreOwnerExtendedListingDurationsEnabled()
     * @uses CategoryFeatureType::setStoreOwnerExtendedListingDurations()
     * @uses CategoryFeatureType::setReturnPolicyEnabled()
     * @uses CategoryFeatureType::setHandlingTimeEnabled()
     * @uses CategoryFeatureType::setMaxFlatShippingCost()
     * @uses CategoryFeatureType::setGroup1MaxFlatShippingCost()
     * @uses CategoryFeatureType::setGroup2MaxFlatShippingCost()
     * @uses CategoryFeatureType::setGroup3MaxFlatShippingCost()
     * @uses CategoryFeatureType::setPaymentMethod()
     * @uses CategoryFeatureType::setVariationsEnabled()
     * @uses CategoryFeatureType::setAttributeConversionEnabled()
     * @uses CategoryFeatureType::setFreeGalleryPlusEnabled()
     * @uses CategoryFeatureType::setFreePicturePackEnabled()
     * @uses CategoryFeatureType::setItemCompatibilityEnabled()
     * @uses CategoryFeatureType::setMinItemCompatibility()
     * @uses CategoryFeatureType::setMaxItemCompatibility()
     * @uses CategoryFeatureType::setConditionEnabled()
     * @uses CategoryFeatureType::setConditionValues()
     * @uses CategoryFeatureType::setValueCategory()
     * @uses CategoryFeatureType::setProductCreationEnabled()
     * @uses CategoryFeatureType::setEANEnabled()
     * @uses CategoryFeatureType::setISBNEnabled()
     * @uses CategoryFeatureType::setUPCEnabled()
     * @uses CategoryFeatureType::setMaxGranularFitmentCount()
     * @uses CategoryFeatureType::setCompatibleVehicleType()
     * @uses CategoryFeatureType::setPaymentOptionsGroup()
     * @uses CategoryFeatureType::setShippingProfileCategoryGroup()
     * @uses CategoryFeatureType::setPaymentProfileCategoryGroup()
     * @uses CategoryFeatureType::setReturnPolicyProfileCategoryGroup()
     * @uses CategoryFeatureType::setVINSupported()
     * @uses CategoryFeatureType::setVRMSupported()
     * @uses CategoryFeatureType::setSellerProvidedTitleSupported()
     * @uses CategoryFeatureType::setDepositSupported()
     * @uses CategoryFeatureType::setGlobalShippingEnabled()
     * @uses CategoryFeatureType::setAdditionalCompatibilityEnabled()
     * @uses CategoryFeatureType::setAny()
     * @uses CategoryFeatureType::setPickupDropOffEnabled()
     * @uses CategoryFeatureType::setDigitalGoodDeliveryEnabled()
     * @uses CategoryFeatureType::setEpidSupported()
     * @uses CategoryFeatureType::setKTypeSupported()
     * @uses CategoryFeatureType::setProductRequiredEnabled()
     * @uses CategoryFeatureType::setDomesticReturnsAcceptedValues()
     * @uses CategoryFeatureType::setInternationalReturnsAcceptedValues()
     * @uses CategoryFeatureType::setDomesticReturnsDurationValues()
     * @uses CategoryFeatureType::setInternationalReturnsDurationValues()
     * @uses CategoryFeatureType::setDomesticReturnsShipmentPayeeValues()
     * @uses CategoryFeatureType::setInternationalReturnsShipmentPayeeValues()
     * @uses CategoryFeatureType::setDomesticRefundMethodValues()
     * @uses CategoryFeatureType::setInternationalRefundMethodValues()
     * @uses CategoryFeatureType::setReturnPolicyDescriptionEnabled()
     * @param string $categoryID
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType[] $listingDuration
     * @param bool $shippingTermsRequired
     * @param bool $bestOfferEnabled
     * @param bool $dutchBINEnabled
     * @param bool $userConsentRequired
     * @param bool $homePageFeaturedEnabled
     * @param bool $proPackEnabled
     * @param bool $basicUpgradePackEnabled
     * @param bool $valuePackEnabled
     * @param bool $proPackPlusEnabled
     * @param string $adFormatEnabled
     * @param bool $bestOfferCounterEnabled
     * @param bool $bestOfferAutoDeclineEnabled
     * @param bool $localMarketSpecialitySubscription
     * @param bool $localMarketRegularSubscription
     * @param bool $localMarketPremiumSubscription
     * @param bool $localMarketNonSubscription
     * @param bool $expressEnabled
     * @param bool $expressPicturesRequired
     * @param bool $expressConditionRequired
     * @param float $minimumReservePrice
     * @param bool $sellerContactDetailsEnabled
     * @param bool $transactionConfirmationRequestEnabled
     * @param bool $storeInventoryEnabled
     * @param bool $skypeMeTransactionalEnabled
     * @param bool $skypeMeNonTransactionalEnabled
     * @param string $classifiedAdPaymentMethodEnabled
     * @param bool $classifiedAdShippingMethodEnabled
     * @param string $classifiedAdBestOfferEnabled
     * @param bool $classifiedAdCounterOfferEnabled
     * @param bool $classifiedAdAutoDeclineEnabled
     * @param bool $classifiedAdContactByPhoneEnabled
     * @param bool $classifiedAdContactByEmailEnabled
     * @param bool $safePaymentRequired
     * @param bool $classifiedAdPayPerLeadEnabled
     * @param string $itemSpecificsEnabled
     * @param bool $paisaPayFullEscrowEnabled
     * @param bool $brandMPNIdentifierEnabled
     * @param bool $classifiedAdAutoAcceptEnabled
     * @param bool $bestOfferAutoAcceptEnabled
     * @param bool $crossBorderTradeNorthAmericaEnabled
     * @param bool $crossBorderTradeGBEnabled
     * @param bool $crossBorderTradeAustraliaEnabled
     * @param bool $payPalBuyerProtectionEnabled
     * @param bool $buyerGuaranteeEnabled
     * @param bool $combinedFixedPriceTreatmentEnabled
     * @param \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations
     * @param bool $payPalRequired
     * @param string $eBayMotorsProAdFormatEnabled
     * @param bool $eBayMotorsProContactByPhoneEnabled
     * @param int $eBayMotorsProPhoneCount
     * @param bool $eBayMotorsProContactByAddressEnabled
     * @param int $eBayMotorsProStreetCount
     * @param bool $eBayMotorsProCompanyNameEnabled
     * @param bool $eBayMotorsProContactByEmailEnabled
     * @param string $eBayMotorsProBestOfferEnabled
     * @param bool $eBayMotorsProAutoAcceptEnabled
     * @param bool $eBayMotorsProAutoDeclineEnabled
     * @param string $eBayMotorsProPaymentMethodCheckOutEnabled
     * @param bool $eBayMotorsProShippingMethodEnabled
     * @param bool $eBayMotorsProCounterOfferEnabled
     * @param bool $eBayMotorsProSellerContactDetailsEnabled
     * @param string $localMarketAdFormatEnabled
     * @param bool $localMarketContactByPhoneEnabled
     * @param int $localMarketPhoneCount
     * @param bool $localMarketContactByAddressEnabled
     * @param int $localMarketStreetCount
     * @param bool $localMarketCompanyNameEnabled
     * @param bool $localMarketContactByEmailEnabled
     * @param string $localMarketBestOfferEnabled
     * @param bool $localMarketAutoAcceptEnabled
     * @param bool $localMarketAutoDeclineEnabled
     * @param string $localMarketPaymentMethodCheckOutEnabled
     * @param bool $localMarketShippingMethodEnabled
     * @param bool $localMarketCounterOfferEnabled
     * @param bool $localMarketSellerContactDetailsEnabled
     * @param int $classifiedAdPhoneCount
     * @param bool $classifiedAdContactByAddressEnabled
     * @param int $classifiedAdStreetCount
     * @param bool $classifiedAdCompanyNameEnabled
     * @param string $specialitySubscription
     * @param string $regularSubscription
     * @param string $premiumSubscription
     * @param string $nonSubscription
     * @param string $iNEscrowWorkflowTimeline
     * @param bool $payPalRequiredForStoreOwner
     * @param bool $reviseQuantityAllowed
     * @param bool $revisePriceAllowed
     * @param bool $storeOwnerExtendedListingDurationsEnabled
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations
     * @param bool $returnPolicyEnabled
     * @param bool $handlingTimeEnabled
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxFlatShippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group1MaxFlatShippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group2MaxFlatShippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group3MaxFlatShippingCost
     * @param string[] $paymentMethod
     * @param bool $variationsEnabled
     * @param string $attributeConversionEnabled
     * @param bool $freeGalleryPlusEnabled
     * @param bool $freePicturePackEnabled
     * @param string $itemCompatibilityEnabled
     * @param int $minItemCompatibility
     * @param int $maxItemCompatibility
     * @param string $conditionEnabled
     * @param \macropage\ebaysdk\trading\StructType\ConditionValuesType $conditionValues
     * @param bool $valueCategory
     * @param string $productCreationEnabled
     * @param string $eANEnabled
     * @param string $iSBNEnabled
     * @param string $uPCEnabled
     * @param int $maxGranularFitmentCount
     * @param string $compatibleVehicleType
     * @param string $paymentOptionsGroup
     * @param string $shippingProfileCategoryGroup
     * @param string $paymentProfileCategoryGroup
     * @param string $returnPolicyProfileCategoryGroup
     * @param bool $vINSupported
     * @param bool $vRMSupported
     * @param bool $sellerProvidedTitleSupported
     * @param bool $depositSupported
     * @param bool $globalShippingEnabled
     * @param bool $additionalCompatibilityEnabled
     * @param \DOMDocument $any
     * @param bool $pickupDropOffEnabled
     * @param bool $digitalGoodDeliveryEnabled
     * @param bool $epidSupported
     * @param bool $kTypeSupported
     * @param string $productRequiredEnabled
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues
     * @param \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues
     * @param \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues
     * @param bool $returnPolicyDescriptionEnabled
     */
    public function __construct($categoryID = null, array $listingDuration = array(), $shippingTermsRequired = null, $bestOfferEnabled = null, $dutchBINEnabled = null, $userConsentRequired = null, $homePageFeaturedEnabled = null, $proPackEnabled = null, $basicUpgradePackEnabled = null, $valuePackEnabled = null, $proPackPlusEnabled = null, $adFormatEnabled = null, $bestOfferCounterEnabled = null, $bestOfferAutoDeclineEnabled = null, $localMarketSpecialitySubscription = null, $localMarketRegularSubscription = null, $localMarketPremiumSubscription = null, $localMarketNonSubscription = null, $expressEnabled = null, $expressPicturesRequired = null, $expressConditionRequired = null, $minimumReservePrice = null, $sellerContactDetailsEnabled = null, $transactionConfirmationRequestEnabled = null, $storeInventoryEnabled = null, $skypeMeTransactionalEnabled = null, $skypeMeNonTransactionalEnabled = null, $classifiedAdPaymentMethodEnabled = null, $classifiedAdShippingMethodEnabled = null, $classifiedAdBestOfferEnabled = null, $classifiedAdCounterOfferEnabled = null, $classifiedAdAutoDeclineEnabled = null, $classifiedAdContactByPhoneEnabled = null, $classifiedAdContactByEmailEnabled = null, $safePaymentRequired = null, $classifiedAdPayPerLeadEnabled = null, $itemSpecificsEnabled = null, $paisaPayFullEscrowEnabled = null, $brandMPNIdentifierEnabled = null, $classifiedAdAutoAcceptEnabled = null, $bestOfferAutoAcceptEnabled = null, $crossBorderTradeNorthAmericaEnabled = null, $crossBorderTradeGBEnabled = null, $crossBorderTradeAustraliaEnabled = null, $payPalBuyerProtectionEnabled = null, $buyerGuaranteeEnabled = null, $combinedFixedPriceTreatmentEnabled = null, \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations = null, $payPalRequired = null, $eBayMotorsProAdFormatEnabled = null, $eBayMotorsProContactByPhoneEnabled = null, $eBayMotorsProPhoneCount = null, $eBayMotorsProContactByAddressEnabled = null, $eBayMotorsProStreetCount = null, $eBayMotorsProCompanyNameEnabled = null, $eBayMotorsProContactByEmailEnabled = null, $eBayMotorsProBestOfferEnabled = null, $eBayMotorsProAutoAcceptEnabled = null, $eBayMotorsProAutoDeclineEnabled = null, $eBayMotorsProPaymentMethodCheckOutEnabled = null, $eBayMotorsProShippingMethodEnabled = null, $eBayMotorsProCounterOfferEnabled = null, $eBayMotorsProSellerContactDetailsEnabled = null, $localMarketAdFormatEnabled = null, $localMarketContactByPhoneEnabled = null, $localMarketPhoneCount = null, $localMarketContactByAddressEnabled = null, $localMarketStreetCount = null, $localMarketCompanyNameEnabled = null, $localMarketContactByEmailEnabled = null, $localMarketBestOfferEnabled = null, $localMarketAutoAcceptEnabled = null, $localMarketAutoDeclineEnabled = null, $localMarketPaymentMethodCheckOutEnabled = null, $localMarketShippingMethodEnabled = null, $localMarketCounterOfferEnabled = null, $localMarketSellerContactDetailsEnabled = null, $classifiedAdPhoneCount = null, $classifiedAdContactByAddressEnabled = null, $classifiedAdStreetCount = null, $classifiedAdCompanyNameEnabled = null, $specialitySubscription = null, $regularSubscription = null, $premiumSubscription = null, $nonSubscription = null, $iNEscrowWorkflowTimeline = null, $payPalRequiredForStoreOwner = null, $reviseQuantityAllowed = null, $revisePriceAllowed = null, $storeOwnerExtendedListingDurationsEnabled = null, \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations = null, $returnPolicyEnabled = null, $handlingTimeEnabled = null, \macropage\ebaysdk\trading\StructType\AmountType $maxFlatShippingCost = null, \macropage\ebaysdk\trading\StructType\AmountType $group1MaxFlatShippingCost = null, \macropage\ebaysdk\trading\StructType\AmountType $group2MaxFlatShippingCost = null, \macropage\ebaysdk\trading\StructType\AmountType $group3MaxFlatShippingCost = null, array $paymentMethod = array(), $variationsEnabled = null, $attributeConversionEnabled = null, $freeGalleryPlusEnabled = null, $freePicturePackEnabled = null, $itemCompatibilityEnabled = null, $minItemCompatibility = null, $maxItemCompatibility = null, $conditionEnabled = null, \macropage\ebaysdk\trading\StructType\ConditionValuesType $conditionValues = null, $valueCategory = null, $productCreationEnabled = null, $eANEnabled = null, $iSBNEnabled = null, $uPCEnabled = null, $maxGranularFitmentCount = null, $compatibleVehicleType = null, $paymentOptionsGroup = null, $shippingProfileCategoryGroup = null, $paymentProfileCategoryGroup = null, $returnPolicyProfileCategoryGroup = null, $vINSupported = null, $vRMSupported = null, $sellerProvidedTitleSupported = null, $depositSupported = null, $globalShippingEnabled = null, $additionalCompatibilityEnabled = null, \DOMDocument $any = null, $pickupDropOffEnabled = null, $digitalGoodDeliveryEnabled = null, $epidSupported = null, $kTypeSupported = null, $productRequiredEnabled = null, \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues = null, \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues = null, \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues = null, \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues = null, \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues = null, \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues = null, \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null, \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null, $returnPolicyDescriptionEnabled = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setListingDuration($listingDuration)
            ->setShippingTermsRequired($shippingTermsRequired)
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setDutchBINEnabled($dutchBINEnabled)
            ->setUserConsentRequired($userConsentRequired)
            ->setHomePageFeaturedEnabled($homePageFeaturedEnabled)
            ->setProPackEnabled($proPackEnabled)
            ->setBasicUpgradePackEnabled($basicUpgradePackEnabled)
            ->setValuePackEnabled($valuePackEnabled)
            ->setProPackPlusEnabled($proPackPlusEnabled)
            ->setAdFormatEnabled($adFormatEnabled)
            ->setBestOfferCounterEnabled($bestOfferCounterEnabled)
            ->setBestOfferAutoDeclineEnabled($bestOfferAutoDeclineEnabled)
            ->setLocalMarketSpecialitySubscription($localMarketSpecialitySubscription)
            ->setLocalMarketRegularSubscription($localMarketRegularSubscription)
            ->setLocalMarketPremiumSubscription($localMarketPremiumSubscription)
            ->setLocalMarketNonSubscription($localMarketNonSubscription)
            ->setExpressEnabled($expressEnabled)
            ->setExpressPicturesRequired($expressPicturesRequired)
            ->setExpressConditionRequired($expressConditionRequired)
            ->setMinimumReservePrice($minimumReservePrice)
            ->setSellerContactDetailsEnabled($sellerContactDetailsEnabled)
            ->setTransactionConfirmationRequestEnabled($transactionConfirmationRequestEnabled)
            ->setStoreInventoryEnabled($storeInventoryEnabled)
            ->setSkypeMeTransactionalEnabled($skypeMeTransactionalEnabled)
            ->setSkypeMeNonTransactionalEnabled($skypeMeNonTransactionalEnabled)
            ->setClassifiedAdPaymentMethodEnabled($classifiedAdPaymentMethodEnabled)
            ->setClassifiedAdShippingMethodEnabled($classifiedAdShippingMethodEnabled)
            ->setClassifiedAdBestOfferEnabled($classifiedAdBestOfferEnabled)
            ->setClassifiedAdCounterOfferEnabled($classifiedAdCounterOfferEnabled)
            ->setClassifiedAdAutoDeclineEnabled($classifiedAdAutoDeclineEnabled)
            ->setClassifiedAdContactByPhoneEnabled($classifiedAdContactByPhoneEnabled)
            ->setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled)
            ->setSafePaymentRequired($safePaymentRequired)
            ->setClassifiedAdPayPerLeadEnabled($classifiedAdPayPerLeadEnabled)
            ->setItemSpecificsEnabled($itemSpecificsEnabled)
            ->setPaisaPayFullEscrowEnabled($paisaPayFullEscrowEnabled)
            ->setBrandMPNIdentifierEnabled($brandMPNIdentifierEnabled)
            ->setClassifiedAdAutoAcceptEnabled($classifiedAdAutoAcceptEnabled)
            ->setBestOfferAutoAcceptEnabled($bestOfferAutoAcceptEnabled)
            ->setCrossBorderTradeNorthAmericaEnabled($crossBorderTradeNorthAmericaEnabled)
            ->setCrossBorderTradeGBEnabled($crossBorderTradeGBEnabled)
            ->setCrossBorderTradeAustraliaEnabled($crossBorderTradeAustraliaEnabled)
            ->setPayPalBuyerProtectionEnabled($payPalBuyerProtectionEnabled)
            ->setBuyerGuaranteeEnabled($buyerGuaranteeEnabled)
            ->setCombinedFixedPriceTreatmentEnabled($combinedFixedPriceTreatmentEnabled)
            ->setGalleryFeaturedDurations($galleryFeaturedDurations)
            ->setPayPalRequired($payPalRequired)
            ->setEBayMotorsProAdFormatEnabled($eBayMotorsProAdFormatEnabled)
            ->setEBayMotorsProContactByPhoneEnabled($eBayMotorsProContactByPhoneEnabled)
            ->setEBayMotorsProPhoneCount($eBayMotorsProPhoneCount)
            ->setEBayMotorsProContactByAddressEnabled($eBayMotorsProContactByAddressEnabled)
            ->setEBayMotorsProStreetCount($eBayMotorsProStreetCount)
            ->setEBayMotorsProCompanyNameEnabled($eBayMotorsProCompanyNameEnabled)
            ->setEBayMotorsProContactByEmailEnabled($eBayMotorsProContactByEmailEnabled)
            ->setEBayMotorsProBestOfferEnabled($eBayMotorsProBestOfferEnabled)
            ->setEBayMotorsProAutoAcceptEnabled($eBayMotorsProAutoAcceptEnabled)
            ->setEBayMotorsProAutoDeclineEnabled($eBayMotorsProAutoDeclineEnabled)
            ->setEBayMotorsProPaymentMethodCheckOutEnabled($eBayMotorsProPaymentMethodCheckOutEnabled)
            ->setEBayMotorsProShippingMethodEnabled($eBayMotorsProShippingMethodEnabled)
            ->setEBayMotorsProCounterOfferEnabled($eBayMotorsProCounterOfferEnabled)
            ->setEBayMotorsProSellerContactDetailsEnabled($eBayMotorsProSellerContactDetailsEnabled)
            ->setLocalMarketAdFormatEnabled($localMarketAdFormatEnabled)
            ->setLocalMarketContactByPhoneEnabled($localMarketContactByPhoneEnabled)
            ->setLocalMarketPhoneCount($localMarketPhoneCount)
            ->setLocalMarketContactByAddressEnabled($localMarketContactByAddressEnabled)
            ->setLocalMarketStreetCount($localMarketStreetCount)
            ->setLocalMarketCompanyNameEnabled($localMarketCompanyNameEnabled)
            ->setLocalMarketContactByEmailEnabled($localMarketContactByEmailEnabled)
            ->setLocalMarketBestOfferEnabled($localMarketBestOfferEnabled)
            ->setLocalMarketAutoAcceptEnabled($localMarketAutoAcceptEnabled)
            ->setLocalMarketAutoDeclineEnabled($localMarketAutoDeclineEnabled)
            ->setLocalMarketPaymentMethodCheckOutEnabled($localMarketPaymentMethodCheckOutEnabled)
            ->setLocalMarketShippingMethodEnabled($localMarketShippingMethodEnabled)
            ->setLocalMarketCounterOfferEnabled($localMarketCounterOfferEnabled)
            ->setLocalMarketSellerContactDetailsEnabled($localMarketSellerContactDetailsEnabled)
            ->setClassifiedAdPhoneCount($classifiedAdPhoneCount)
            ->setClassifiedAdContactByAddressEnabled($classifiedAdContactByAddressEnabled)
            ->setClassifiedAdStreetCount($classifiedAdStreetCount)
            ->setClassifiedAdCompanyNameEnabled($classifiedAdCompanyNameEnabled)
            ->setSpecialitySubscription($specialitySubscription)
            ->setRegularSubscription($regularSubscription)
            ->setPremiumSubscription($premiumSubscription)
            ->setNonSubscription($nonSubscription)
            ->setINEscrowWorkflowTimeline($iNEscrowWorkflowTimeline)
            ->setPayPalRequiredForStoreOwner($payPalRequiredForStoreOwner)
            ->setReviseQuantityAllowed($reviseQuantityAllowed)
            ->setRevisePriceAllowed($revisePriceAllowed)
            ->setStoreOwnerExtendedListingDurationsEnabled($storeOwnerExtendedListingDurationsEnabled)
            ->setStoreOwnerExtendedListingDurations($storeOwnerExtendedListingDurations)
            ->setReturnPolicyEnabled($returnPolicyEnabled)
            ->setHandlingTimeEnabled($handlingTimeEnabled)
            ->setMaxFlatShippingCost($maxFlatShippingCost)
            ->setGroup1MaxFlatShippingCost($group1MaxFlatShippingCost)
            ->setGroup2MaxFlatShippingCost($group2MaxFlatShippingCost)
            ->setGroup3MaxFlatShippingCost($group3MaxFlatShippingCost)
            ->setPaymentMethod($paymentMethod)
            ->setVariationsEnabled($variationsEnabled)
            ->setAttributeConversionEnabled($attributeConversionEnabled)
            ->setFreeGalleryPlusEnabled($freeGalleryPlusEnabled)
            ->setFreePicturePackEnabled($freePicturePackEnabled)
            ->setItemCompatibilityEnabled($itemCompatibilityEnabled)
            ->setMinItemCompatibility($minItemCompatibility)
            ->setMaxItemCompatibility($maxItemCompatibility)
            ->setConditionEnabled($conditionEnabled)
            ->setConditionValues($conditionValues)
            ->setValueCategory($valueCategory)
            ->setProductCreationEnabled($productCreationEnabled)
            ->setEANEnabled($eANEnabled)
            ->setISBNEnabled($iSBNEnabled)
            ->setUPCEnabled($uPCEnabled)
            ->setMaxGranularFitmentCount($maxGranularFitmentCount)
            ->setCompatibleVehicleType($compatibleVehicleType)
            ->setPaymentOptionsGroup($paymentOptionsGroup)
            ->setShippingProfileCategoryGroup($shippingProfileCategoryGroup)
            ->setPaymentProfileCategoryGroup($paymentProfileCategoryGroup)
            ->setReturnPolicyProfileCategoryGroup($returnPolicyProfileCategoryGroup)
            ->setVINSupported($vINSupported)
            ->setVRMSupported($vRMSupported)
            ->setSellerProvidedTitleSupported($sellerProvidedTitleSupported)
            ->setDepositSupported($depositSupported)
            ->setGlobalShippingEnabled($globalShippingEnabled)
            ->setAdditionalCompatibilityEnabled($additionalCompatibilityEnabled)
            ->setAny($any)
            ->setPickupDropOffEnabled($pickupDropOffEnabled)
            ->setDigitalGoodDeliveryEnabled($digitalGoodDeliveryEnabled)
            ->setEpidSupported($epidSupported)
            ->setKTypeSupported($kTypeSupported)
            ->setProductRequiredEnabled($productRequiredEnabled)
            ->setDomesticReturnsAcceptedValues($domesticReturnsAcceptedValues)
            ->setInternationalReturnsAcceptedValues($internationalReturnsAcceptedValues)
            ->setDomesticReturnsDurationValues($domesticReturnsDurationValues)
            ->setInternationalReturnsDurationValues($internationalReturnsDurationValues)
            ->setDomesticReturnsShipmentPayeeValues($domesticReturnsShipmentPayeeValues)
            ->setInternationalReturnsShipmentPayeeValues($internationalReturnsShipmentPayeeValues)
            ->setDomesticRefundMethodValues($domesticRefundMethodValues)
            ->setInternationalRefundMethodValues($internationalRefundMethodValues)
            ->setReturnPolicyDescriptionEnabled($returnPolicyDescriptionEnabled);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get ListingDuration value
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType[]|null
     */
    public function getListingDuration()
    {
        return $this->ListingDuration;
    }
    /**
     * Set ListingDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType[] $listingDuration
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setListingDuration(array $listingDuration = array())
    {
        foreach ($listingDuration as $categoryFeatureTypeListingDurationItem) {
            // validation for constraint: itemType
            if (!$categoryFeatureTypeListingDurationItem instanceof \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType) {
                throw new \InvalidArgumentException(sprintf('The ListingDuration property can only contain items of \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType, "%s" given', is_object($categoryFeatureTypeListingDurationItem) ? get_class($categoryFeatureTypeListingDurationItem) : gettype($categoryFeatureTypeListingDurationItem)), __LINE__);
            }
        }
        $this->ListingDuration = $listingDuration;
        return $this;
    }
    /**
     * Add item to ListingDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType $item
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function addToListingDuration(\macropage\ebaysdk\trading\StructType\ListingDurationReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType) {
            throw new \InvalidArgumentException(sprintf('The ListingDuration property can only contain items of \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ListingDuration[] = $item;
        return $this;
    }
    /**
     * Get ShippingTermsRequired value
     * @return bool|null
     */
    public function getShippingTermsRequired()
    {
        return $this->ShippingTermsRequired;
    }
    /**
     * Set ShippingTermsRequired value
     * @param bool $shippingTermsRequired
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setShippingTermsRequired($shippingTermsRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingTermsRequired) && !is_bool($shippingTermsRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shippingTermsRequired)), __LINE__);
        }
        $this->ShippingTermsRequired = $shippingTermsRequired;
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
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
     * Get DutchBINEnabled value
     * @return bool|null
     */
    public function getDutchBINEnabled()
    {
        return $this->DutchBINEnabled;
    }
    /**
     * Set DutchBINEnabled value
     * @param bool $dutchBINEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setDutchBINEnabled($dutchBINEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($dutchBINEnabled) && !is_bool($dutchBINEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dutchBINEnabled)), __LINE__);
        }
        $this->DutchBINEnabled = $dutchBINEnabled;
        return $this;
    }
    /**
     * Get UserConsentRequired value
     * @return bool|null
     */
    public function getUserConsentRequired()
    {
        return $this->UserConsentRequired;
    }
    /**
     * Set UserConsentRequired value
     * @param bool $userConsentRequired
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setUserConsentRequired($userConsentRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($userConsentRequired) && !is_bool($userConsentRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($userConsentRequired)), __LINE__);
        }
        $this->UserConsentRequired = $userConsentRequired;
        return $this;
    }
    /**
     * Get HomePageFeaturedEnabled value
     * @return bool|null
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->HomePageFeaturedEnabled;
    }
    /**
     * Set HomePageFeaturedEnabled value
     * @param bool $homePageFeaturedEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setHomePageFeaturedEnabled($homePageFeaturedEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($homePageFeaturedEnabled) && !is_bool($homePageFeaturedEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($homePageFeaturedEnabled)), __LINE__);
        }
        $this->HomePageFeaturedEnabled = $homePageFeaturedEnabled;
        return $this;
    }
    /**
     * Get ProPackEnabled value
     * @return bool|null
     */
    public function getProPackEnabled()
    {
        return $this->ProPackEnabled;
    }
    /**
     * Set ProPackEnabled value
     * @param bool $proPackEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setProPackEnabled($proPackEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($proPackEnabled) && !is_bool($proPackEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($proPackEnabled)), __LINE__);
        }
        $this->ProPackEnabled = $proPackEnabled;
        return $this;
    }
    /**
     * Get BasicUpgradePackEnabled value
     * @return bool|null
     */
    public function getBasicUpgradePackEnabled()
    {
        return $this->BasicUpgradePackEnabled;
    }
    /**
     * Set BasicUpgradePackEnabled value
     * @param bool $basicUpgradePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setBasicUpgradePackEnabled($basicUpgradePackEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($basicUpgradePackEnabled) && !is_bool($basicUpgradePackEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($basicUpgradePackEnabled)), __LINE__);
        }
        $this->BasicUpgradePackEnabled = $basicUpgradePackEnabled;
        return $this;
    }
    /**
     * Get ValuePackEnabled value
     * @return bool|null
     */
    public function getValuePackEnabled()
    {
        return $this->ValuePackEnabled;
    }
    /**
     * Set ValuePackEnabled value
     * @param bool $valuePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setValuePackEnabled($valuePackEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($valuePackEnabled) && !is_bool($valuePackEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($valuePackEnabled)), __LINE__);
        }
        $this->ValuePackEnabled = $valuePackEnabled;
        return $this;
    }
    /**
     * Get ProPackPlusEnabled value
     * @return bool|null
     */
    public function getProPackPlusEnabled()
    {
        return $this->ProPackPlusEnabled;
    }
    /**
     * Set ProPackPlusEnabled value
     * @param bool $proPackPlusEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setProPackPlusEnabled($proPackPlusEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($proPackPlusEnabled) && !is_bool($proPackPlusEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($proPackPlusEnabled)), __LINE__);
        }
        $this->ProPackPlusEnabled = $proPackPlusEnabled;
        return $this;
    }
    /**
     * Get AdFormatEnabled value
     * @return string|null
     */
    public function getAdFormatEnabled()
    {
        return $this->AdFormatEnabled;
    }
    /**
     * Set AdFormatEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $adFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setAdFormatEnabled($adFormatEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid($adFormatEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $adFormatEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->AdFormatEnabled = $adFormatEnabled;
        return $this;
    }
    /**
     * Get BestOfferCounterEnabled value
     * @return bool|null
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->BestOfferCounterEnabled;
    }
    /**
     * Set BestOfferCounterEnabled value
     * @param bool $bestOfferCounterEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setBestOfferCounterEnabled($bestOfferCounterEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferCounterEnabled) && !is_bool($bestOfferCounterEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOfferCounterEnabled)), __LINE__);
        }
        $this->BestOfferCounterEnabled = $bestOfferCounterEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoDeclineEnabled value
     * @return bool|null
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->BestOfferAutoDeclineEnabled;
    }
    /**
     * Set BestOfferAutoDeclineEnabled value
     * @param bool $bestOfferAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setBestOfferAutoDeclineEnabled($bestOfferAutoDeclineEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferAutoDeclineEnabled) && !is_bool($bestOfferAutoDeclineEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOfferAutoDeclineEnabled)), __LINE__);
        }
        $this->BestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get LocalMarketSpecialitySubscription value
     * @return bool|null
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->LocalMarketSpecialitySubscription;
    }
    /**
     * Set LocalMarketSpecialitySubscription value
     * @param bool $localMarketSpecialitySubscription
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketSpecialitySubscription($localMarketSpecialitySubscription = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketSpecialitySubscription) && !is_bool($localMarketSpecialitySubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketSpecialitySubscription)), __LINE__);
        }
        $this->LocalMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        return $this;
    }
    /**
     * Get LocalMarketRegularSubscription value
     * @return bool|null
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->LocalMarketRegularSubscription;
    }
    /**
     * Set LocalMarketRegularSubscription value
     * @param bool $localMarketRegularSubscription
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketRegularSubscription($localMarketRegularSubscription = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketRegularSubscription) && !is_bool($localMarketRegularSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketRegularSubscription)), __LINE__);
        }
        $this->LocalMarketRegularSubscription = $localMarketRegularSubscription;
        return $this;
    }
    /**
     * Get LocalMarketPremiumSubscription value
     * @return bool|null
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->LocalMarketPremiumSubscription;
    }
    /**
     * Set LocalMarketPremiumSubscription value
     * @param bool $localMarketPremiumSubscription
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketPremiumSubscription($localMarketPremiumSubscription = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketPremiumSubscription) && !is_bool($localMarketPremiumSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketPremiumSubscription)), __LINE__);
        }
        $this->LocalMarketPremiumSubscription = $localMarketPremiumSubscription;
        return $this;
    }
    /**
     * Get LocalMarketNonSubscription value
     * @return bool|null
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->LocalMarketNonSubscription;
    }
    /**
     * Set LocalMarketNonSubscription value
     * @param bool $localMarketNonSubscription
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketNonSubscription($localMarketNonSubscription = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketNonSubscription) && !is_bool($localMarketNonSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketNonSubscription)), __LINE__);
        }
        $this->LocalMarketNonSubscription = $localMarketNonSubscription;
        return $this;
    }
    /**
     * Get ExpressEnabled value
     * @return bool|null
     */
    public function getExpressEnabled()
    {
        return $this->ExpressEnabled;
    }
    /**
     * Set ExpressEnabled value
     * @param bool $expressEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setExpressEnabled($expressEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressEnabled) && !is_bool($expressEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expressEnabled)), __LINE__);
        }
        $this->ExpressEnabled = $expressEnabled;
        return $this;
    }
    /**
     * Get ExpressPicturesRequired value
     * @return bool|null
     */
    public function getExpressPicturesRequired()
    {
        return $this->ExpressPicturesRequired;
    }
    /**
     * Set ExpressPicturesRequired value
     * @param bool $expressPicturesRequired
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setExpressPicturesRequired($expressPicturesRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressPicturesRequired) && !is_bool($expressPicturesRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expressPicturesRequired)), __LINE__);
        }
        $this->ExpressPicturesRequired = $expressPicturesRequired;
        return $this;
    }
    /**
     * Get ExpressConditionRequired value
     * @return bool|null
     */
    public function getExpressConditionRequired()
    {
        return $this->ExpressConditionRequired;
    }
    /**
     * Set ExpressConditionRequired value
     * @param bool $expressConditionRequired
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setExpressConditionRequired($expressConditionRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressConditionRequired) && !is_bool($expressConditionRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expressConditionRequired)), __LINE__);
        }
        $this->ExpressConditionRequired = $expressConditionRequired;
        return $this;
    }
    /**
     * Get MinimumReservePrice value
     * @return float|null
     */
    public function getMinimumReservePrice()
    {
        return $this->MinimumReservePrice;
    }
    /**
     * Set MinimumReservePrice value
     * @param float $minimumReservePrice
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setMinimumReservePrice($minimumReservePrice = null)
    {
        $this->MinimumReservePrice = $minimumReservePrice;
        return $this;
    }
    /**
     * Get SellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->SellerContactDetailsEnabled;
    }
    /**
     * Set SellerContactDetailsEnabled value
     * @param bool $sellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setSellerContactDetailsEnabled($sellerContactDetailsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerContactDetailsEnabled) && !is_bool($sellerContactDetailsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sellerContactDetailsEnabled)), __LINE__);
        }
        $this->SellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get TransactionConfirmationRequestEnabled value
     * @return bool|null
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->TransactionConfirmationRequestEnabled;
    }
    /**
     * Set TransactionConfirmationRequestEnabled value
     * @param bool $transactionConfirmationRequestEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setTransactionConfirmationRequestEnabled($transactionConfirmationRequestEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($transactionConfirmationRequestEnabled) && !is_bool($transactionConfirmationRequestEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($transactionConfirmationRequestEnabled)), __LINE__);
        }
        $this->TransactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        return $this;
    }
    /**
     * Get StoreInventoryEnabled value
     * @return bool|null
     */
    public function getStoreInventoryEnabled()
    {
        return $this->StoreInventoryEnabled;
    }
    /**
     * Set StoreInventoryEnabled value
     * @param bool $storeInventoryEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setStoreInventoryEnabled($storeInventoryEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($storeInventoryEnabled) && !is_bool($storeInventoryEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($storeInventoryEnabled)), __LINE__);
        }
        $this->StoreInventoryEnabled = $storeInventoryEnabled;
        return $this;
    }
    /**
     * Get SkypeMeTransactionalEnabled value
     * @return bool|null
     */
    public function getSkypeMeTransactionalEnabled()
    {
        return $this->SkypeMeTransactionalEnabled;
    }
    /**
     * Set SkypeMeTransactionalEnabled value
     * @param bool $skypeMeTransactionalEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setSkypeMeTransactionalEnabled($skypeMeTransactionalEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($skypeMeTransactionalEnabled) && !is_bool($skypeMeTransactionalEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($skypeMeTransactionalEnabled)), __LINE__);
        }
        $this->SkypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        return $this;
    }
    /**
     * Get SkypeMeNonTransactionalEnabled value
     * @return bool|null
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
        return $this->SkypeMeNonTransactionalEnabled;
    }
    /**
     * Set SkypeMeNonTransactionalEnabled value
     * @param bool $skypeMeNonTransactionalEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setSkypeMeNonTransactionalEnabled($skypeMeNonTransactionalEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($skypeMeNonTransactionalEnabled) && !is_bool($skypeMeNonTransactionalEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($skypeMeNonTransactionalEnabled)), __LINE__);
        }
        $this->SkypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdPaymentMethodEnabled value
     * @return string|null
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->ClassifiedAdPaymentMethodEnabled;
    }
    /**
     * Set ClassifiedAdPaymentMethodEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $classifiedAdPaymentMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdPaymentMethodEnabled($classifiedAdPaymentMethodEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($classifiedAdPaymentMethodEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $classifiedAdPaymentMethodEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ClassifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdShippingMethodEnabled value
     * @return bool|null
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->ClassifiedAdShippingMethodEnabled;
    }
    /**
     * Set ClassifiedAdShippingMethodEnabled value
     * @param bool $classifiedAdShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdShippingMethodEnabled($classifiedAdShippingMethodEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdShippingMethodEnabled) && !is_bool($classifiedAdShippingMethodEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdShippingMethodEnabled)), __LINE__);
        }
        $this->ClassifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdBestOfferEnabled value
     * @return string|null
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->ClassifiedAdBestOfferEnabled;
    }
    /**
     * Set ClassifiedAdBestOfferEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $classifiedAdBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdBestOfferEnabled($classifiedAdBestOfferEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($classifiedAdBestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $classifiedAdBestOfferEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ClassifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdCounterOfferEnabled value
     * @return bool|null
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->ClassifiedAdCounterOfferEnabled;
    }
    /**
     * Set ClassifiedAdCounterOfferEnabled value
     * @param bool $classifiedAdCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdCounterOfferEnabled($classifiedAdCounterOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdCounterOfferEnabled) && !is_bool($classifiedAdCounterOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdCounterOfferEnabled)), __LINE__);
        }
        $this->ClassifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdAutoDeclineEnabled value
     * @return bool|null
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->ClassifiedAdAutoDeclineEnabled;
    }
    /**
     * Set ClassifiedAdAutoDeclineEnabled value
     * @param bool $classifiedAdAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdAutoDeclineEnabled($classifiedAdAutoDeclineEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdAutoDeclineEnabled) && !is_bool($classifiedAdAutoDeclineEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdAutoDeclineEnabled)), __LINE__);
        }
        $this->ClassifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByPhoneEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->ClassifiedAdContactByPhoneEnabled;
    }
    /**
     * Set ClassifiedAdContactByPhoneEnabled value
     * @param bool $classifiedAdContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdContactByPhoneEnabled($classifiedAdContactByPhoneEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByPhoneEnabled) && !is_bool($classifiedAdContactByPhoneEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdContactByPhoneEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param bool $classifiedAdContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByEmailEnabled) && !is_bool($classifiedAdContactByEmailEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdContactByEmailEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }
    /**
     * Get SafePaymentRequired value
     * @return bool|null
     */
    public function getSafePaymentRequired()
    {
        return $this->SafePaymentRequired;
    }
    /**
     * Set SafePaymentRequired value
     * @param bool $safePaymentRequired
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setSafePaymentRequired($safePaymentRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($safePaymentRequired) && !is_bool($safePaymentRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($safePaymentRequired)), __LINE__);
        }
        $this->SafePaymentRequired = $safePaymentRequired;
        return $this;
    }
    /**
     * Get ClassifiedAdPayPerLeadEnabled value
     * @return bool|null
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->ClassifiedAdPayPerLeadEnabled;
    }
    /**
     * Set ClassifiedAdPayPerLeadEnabled value
     * @param bool $classifiedAdPayPerLeadEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdPayPerLeadEnabled($classifiedAdPayPerLeadEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdPayPerLeadEnabled) && !is_bool($classifiedAdPayPerLeadEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdPayPerLeadEnabled)), __LINE__);
        }
        $this->ClassifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        return $this;
    }
    /**
     * Get ItemSpecificsEnabled value
     * @return string|null
     */
    public function getItemSpecificsEnabled()
    {
        return $this->ItemSpecificsEnabled;
    }
    /**
     * Set ItemSpecificsEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemSpecificsEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setItemSpecificsEnabled($itemSpecificsEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType::valueIsValid($itemSpecificsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemSpecificsEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ItemSpecificsEnabled = $itemSpecificsEnabled;
        return $this;
    }
    /**
     * Get PaisaPayFullEscrowEnabled value
     * @return bool|null
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->PaisaPayFullEscrowEnabled;
    }
    /**
     * Set PaisaPayFullEscrowEnabled value
     * @param bool $paisaPayFullEscrowEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPaisaPayFullEscrowEnabled($paisaPayFullEscrowEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($paisaPayFullEscrowEnabled) && !is_bool($paisaPayFullEscrowEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($paisaPayFullEscrowEnabled)), __LINE__);
        }
        $this->PaisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        return $this;
    }
    /**
     * Get BrandMPNIdentifierEnabled value
     * @return bool|null
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->BrandMPNIdentifierEnabled;
    }
    /**
     * Set BrandMPNIdentifierEnabled value
     * @param bool $brandMPNIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setBrandMPNIdentifierEnabled($brandMPNIdentifierEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($brandMPNIdentifierEnabled) && !is_bool($brandMPNIdentifierEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($brandMPNIdentifierEnabled)), __LINE__);
        }
        $this->BrandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdAutoAcceptEnabled value
     * @return bool|null
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->ClassifiedAdAutoAcceptEnabled;
    }
    /**
     * Set ClassifiedAdAutoAcceptEnabled value
     * @param bool $classifiedAdAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdAutoAcceptEnabled($classifiedAdAutoAcceptEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdAutoAcceptEnabled) && !is_bool($classifiedAdAutoAcceptEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdAutoAcceptEnabled)), __LINE__);
        }
        $this->ClassifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoAcceptEnabled value
     * @return bool|null
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->BestOfferAutoAcceptEnabled;
    }
    /**
     * Set BestOfferAutoAcceptEnabled value
     * @param bool $bestOfferAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setBestOfferAutoAcceptEnabled($bestOfferAutoAcceptEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferAutoAcceptEnabled) && !is_bool($bestOfferAutoAcceptEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOfferAutoAcceptEnabled)), __LINE__);
        }
        $this->BestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeNorthAmericaEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->CrossBorderTradeNorthAmericaEnabled;
    }
    /**
     * Set CrossBorderTradeNorthAmericaEnabled value
     * @param bool $crossBorderTradeNorthAmericaEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setCrossBorderTradeNorthAmericaEnabled($crossBorderTradeNorthAmericaEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeNorthAmericaEnabled) && !is_bool($crossBorderTradeNorthAmericaEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($crossBorderTradeNorthAmericaEnabled)), __LINE__);
        }
        $this->CrossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeGBEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->CrossBorderTradeGBEnabled;
    }
    /**
     * Set CrossBorderTradeGBEnabled value
     * @param bool $crossBorderTradeGBEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setCrossBorderTradeGBEnabled($crossBorderTradeGBEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeGBEnabled) && !is_bool($crossBorderTradeGBEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($crossBorderTradeGBEnabled)), __LINE__);
        }
        $this->CrossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeAustraliaEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->CrossBorderTradeAustraliaEnabled;
    }
    /**
     * Set CrossBorderTradeAustraliaEnabled value
     * @param bool $crossBorderTradeAustraliaEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setCrossBorderTradeAustraliaEnabled($crossBorderTradeAustraliaEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeAustraliaEnabled) && !is_bool($crossBorderTradeAustraliaEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($crossBorderTradeAustraliaEnabled)), __LINE__);
        }
        $this->CrossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        return $this;
    }
    /**
     * Get PayPalBuyerProtectionEnabled value
     * @return bool|null
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->PayPalBuyerProtectionEnabled;
    }
    /**
     * Set PayPalBuyerProtectionEnabled value
     * @param bool $payPalBuyerProtectionEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPayPalBuyerProtectionEnabled($payPalBuyerProtectionEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalBuyerProtectionEnabled) && !is_bool($payPalBuyerProtectionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payPalBuyerProtectionEnabled)), __LINE__);
        }
        $this->PayPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        return $this;
    }
    /**
     * Get BuyerGuaranteeEnabled value
     * @return bool|null
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->BuyerGuaranteeEnabled;
    }
    /**
     * Set BuyerGuaranteeEnabled value
     * @param bool $buyerGuaranteeEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setBuyerGuaranteeEnabled($buyerGuaranteeEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyerGuaranteeEnabled) && !is_bool($buyerGuaranteeEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($buyerGuaranteeEnabled)), __LINE__);
        }
        $this->BuyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        return $this;
    }
    /**
     * Get CombinedFixedPriceTreatmentEnabled value
     * @return bool|null
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
        return $this->CombinedFixedPriceTreatmentEnabled;
    }
    /**
     * Set CombinedFixedPriceTreatmentEnabled value
     * @param bool $combinedFixedPriceTreatmentEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setCombinedFixedPriceTreatmentEnabled($combinedFixedPriceTreatmentEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($combinedFixedPriceTreatmentEnabled) && !is_bool($combinedFixedPriceTreatmentEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($combinedFixedPriceTreatmentEnabled)), __LINE__);
        }
        $this->CombinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        return $this;
    }
    /**
     * Get GalleryFeaturedDurations value
     * @return \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType|null
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->GalleryFeaturedDurations;
    }
    /**
     * Set GalleryFeaturedDurations value
     * @param \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setGalleryFeaturedDurations(\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations = null)
    {
        $this->GalleryFeaturedDurations = $galleryFeaturedDurations;
        return $this;
    }
    /**
     * Get PayPalRequired value
     * @return bool|null
     */
    public function getPayPalRequired()
    {
        return $this->PayPalRequired;
    }
    /**
     * Set PayPalRequired value
     * @param bool $payPalRequired
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPayPalRequired($payPalRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalRequired) && !is_bool($payPalRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payPalRequired)), __LINE__);
        }
        $this->PayPalRequired = $payPalRequired;
        return $this;
    }
    /**
     * Get eBayMotorsProAdFormatEnabled value
     * @return string|null
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }
    /**
     * Set eBayMotorsProAdFormatEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayMotorsProAdFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProAdFormatEnabled($eBayMotorsProAdFormatEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid($eBayMotorsProAdFormatEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eBayMotorsProAdFormatEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByPhoneEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }
    /**
     * Set eBayMotorsProContactByPhoneEnabled value
     * @param bool $eBayMotorsProContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProContactByPhoneEnabled($eBayMotorsProContactByPhoneEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByPhoneEnabled) && !is_bool($eBayMotorsProContactByPhoneEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProContactByPhoneEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProPhoneCount value
     * @return int|null
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->eBayMotorsProPhoneCount;
    }
    /**
     * Set eBayMotorsProPhoneCount value
     * @param int $eBayMotorsProPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProPhoneCount($eBayMotorsProPhoneCount = null)
    {
        // validation for constraint: int
        if (!is_null($eBayMotorsProPhoneCount) && !is_numeric($eBayMotorsProPhoneCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eBayMotorsProPhoneCount)), __LINE__);
        }
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByAddressEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }
    /**
     * Set eBayMotorsProContactByAddressEnabled value
     * @param bool $eBayMotorsProContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProContactByAddressEnabled($eBayMotorsProContactByAddressEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByAddressEnabled) && !is_bool($eBayMotorsProContactByAddressEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProContactByAddressEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProStreetCount value
     * @return int|null
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->eBayMotorsProStreetCount;
    }
    /**
     * Set eBayMotorsProStreetCount value
     * @param int $eBayMotorsProStreetCount
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProStreetCount($eBayMotorsProStreetCount = null)
    {
        // validation for constraint: int
        if (!is_null($eBayMotorsProStreetCount) && !is_numeric($eBayMotorsProStreetCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eBayMotorsProStreetCount)), __LINE__);
        }
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        return $this;
    }
    /**
     * Get eBayMotorsProCompanyNameEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }
    /**
     * Set eBayMotorsProCompanyNameEnabled value
     * @param bool $eBayMotorsProCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProCompanyNameEnabled($eBayMotorsProCompanyNameEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProCompanyNameEnabled) && !is_bool($eBayMotorsProCompanyNameEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProCompanyNameEnabled)), __LINE__);
        }
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByEmailEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }
    /**
     * Set eBayMotorsProContactByEmailEnabled value
     * @param bool $eBayMotorsProContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProContactByEmailEnabled($eBayMotorsProContactByEmailEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByEmailEnabled) && !is_bool($eBayMotorsProContactByEmailEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProContactByEmailEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProBestOfferEnabled value
     * @return string|null
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }
    /**
     * Set eBayMotorsProBestOfferEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayMotorsProBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProBestOfferEnabled($eBayMotorsProBestOfferEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($eBayMotorsProBestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eBayMotorsProBestOfferEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProAutoAcceptEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }
    /**
     * Set eBayMotorsProAutoAcceptEnabled value
     * @param bool $eBayMotorsProAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProAutoAcceptEnabled($eBayMotorsProAutoAcceptEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProAutoAcceptEnabled) && !is_bool($eBayMotorsProAutoAcceptEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProAutoAcceptEnabled)), __LINE__);
        }
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProAutoDeclineEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }
    /**
     * Set eBayMotorsProAutoDeclineEnabled value
     * @param bool $eBayMotorsProAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProAutoDeclineEnabled($eBayMotorsProAutoDeclineEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProAutoDeclineEnabled) && !is_bool($eBayMotorsProAutoDeclineEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProAutoDeclineEnabled)), __LINE__);
        }
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProPaymentMethodCheckOutEnabled value
     * @return string|null
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }
    /**
     * Set eBayMotorsProPaymentMethodCheckOutEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled($eBayMotorsProPaymentMethodCheckOutEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($eBayMotorsProPaymentMethodCheckOutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eBayMotorsProPaymentMethodCheckOutEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProShippingMethodEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }
    /**
     * Set eBayMotorsProShippingMethodEnabled value
     * @param bool $eBayMotorsProShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProShippingMethodEnabled($eBayMotorsProShippingMethodEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProShippingMethodEnabled) && !is_bool($eBayMotorsProShippingMethodEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProShippingMethodEnabled)), __LINE__);
        }
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProCounterOfferEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }
    /**
     * Set eBayMotorsProCounterOfferEnabled value
     * @param bool $eBayMotorsProCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProCounterOfferEnabled($eBayMotorsProCounterOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProCounterOfferEnabled) && !is_bool($eBayMotorsProCounterOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProCounterOfferEnabled)), __LINE__);
        }
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProSellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }
    /**
     * Set eBayMotorsProSellerContactDetailsEnabled value
     * @param bool $eBayMotorsProSellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEBayMotorsProSellerContactDetailsEnabled($eBayMotorsProSellerContactDetailsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProSellerContactDetailsEnabled) && !is_bool($eBayMotorsProSellerContactDetailsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eBayMotorsProSellerContactDetailsEnabled)), __LINE__);
        }
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAdFormatEnabled value
     * @return string|null
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->LocalMarketAdFormatEnabled;
    }
    /**
     * Set LocalMarketAdFormatEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $localMarketAdFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketAdFormatEnabled($localMarketAdFormatEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid($localMarketAdFormatEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $localMarketAdFormatEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        return $this;
    }
    /**
     * Get LocalMarketContactByPhoneEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->LocalMarketContactByPhoneEnabled;
    }
    /**
     * Set LocalMarketContactByPhoneEnabled value
     * @param bool $localMarketContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketContactByPhoneEnabled($localMarketContactByPhoneEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByPhoneEnabled) && !is_bool($localMarketContactByPhoneEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketContactByPhoneEnabled)), __LINE__);
        }
        $this->LocalMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get LocalMarketPhoneCount value
     * @return int|null
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->LocalMarketPhoneCount;
    }
    /**
     * Set LocalMarketPhoneCount value
     * @param int $localMarketPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketPhoneCount($localMarketPhoneCount = null)
    {
        // validation for constraint: int
        if (!is_null($localMarketPhoneCount) && !is_numeric($localMarketPhoneCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($localMarketPhoneCount)), __LINE__);
        }
        $this->LocalMarketPhoneCount = $localMarketPhoneCount;
        return $this;
    }
    /**
     * Get LocalMarketContactByAddressEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->LocalMarketContactByAddressEnabled;
    }
    /**
     * Set LocalMarketContactByAddressEnabled value
     * @param bool $localMarketContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketContactByAddressEnabled($localMarketContactByAddressEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByAddressEnabled) && !is_bool($localMarketContactByAddressEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketContactByAddressEnabled)), __LINE__);
        }
        $this->LocalMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        return $this;
    }
    /**
     * Get LocalMarketStreetCount value
     * @return int|null
     */
    public function getLocalMarketStreetCount()
    {
        return $this->LocalMarketStreetCount;
    }
    /**
     * Set LocalMarketStreetCount value
     * @param int $localMarketStreetCount
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketStreetCount($localMarketStreetCount = null)
    {
        // validation for constraint: int
        if (!is_null($localMarketStreetCount) && !is_numeric($localMarketStreetCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($localMarketStreetCount)), __LINE__);
        }
        $this->LocalMarketStreetCount = $localMarketStreetCount;
        return $this;
    }
    /**
     * Get LocalMarketCompanyNameEnabled value
     * @return bool|null
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->LocalMarketCompanyNameEnabled;
    }
    /**
     * Set LocalMarketCompanyNameEnabled value
     * @param bool $localMarketCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketCompanyNameEnabled($localMarketCompanyNameEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketCompanyNameEnabled) && !is_bool($localMarketCompanyNameEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketCompanyNameEnabled)), __LINE__);
        }
        $this->LocalMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        return $this;
    }
    /**
     * Get LocalMarketContactByEmailEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->LocalMarketContactByEmailEnabled;
    }
    /**
     * Set LocalMarketContactByEmailEnabled value
     * @param bool $localMarketContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketContactByEmailEnabled($localMarketContactByEmailEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByEmailEnabled) && !is_bool($localMarketContactByEmailEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketContactByEmailEnabled)), __LINE__);
        }
        $this->LocalMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        return $this;
    }
    /**
     * Get LocalMarketBestOfferEnabled value
     * @return string|null
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->LocalMarketBestOfferEnabled;
    }
    /**
     * Set LocalMarketBestOfferEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $localMarketBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketBestOfferEnabled($localMarketBestOfferEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($localMarketBestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $localMarketBestOfferEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAutoAcceptEnabled value
     * @return bool|null
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->LocalMarketAutoAcceptEnabled;
    }
    /**
     * Set LocalMarketAutoAcceptEnabled value
     * @param bool $localMarketAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketAutoAcceptEnabled($localMarketAutoAcceptEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketAutoAcceptEnabled) && !is_bool($localMarketAutoAcceptEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketAutoAcceptEnabled)), __LINE__);
        }
        $this->LocalMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAutoDeclineEnabled value
     * @return bool|null
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->LocalMarketAutoDeclineEnabled;
    }
    /**
     * Set LocalMarketAutoDeclineEnabled value
     * @param bool $localMarketAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketAutoDeclineEnabled($localMarketAutoDeclineEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketAutoDeclineEnabled) && !is_bool($localMarketAutoDeclineEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketAutoDeclineEnabled)), __LINE__);
        }
        $this->LocalMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get LocalMarketPaymentMethodCheckOutEnabled value
     * @return string|null
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->LocalMarketPaymentMethodCheckOutEnabled;
    }
    /**
     * Set LocalMarketPaymentMethodCheckOutEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $localMarketPaymentMethodCheckOutEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled($localMarketPaymentMethodCheckOutEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($localMarketPaymentMethodCheckOutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $localMarketPaymentMethodCheckOutEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        return $this;
    }
    /**
     * Get LocalMarketShippingMethodEnabled value
     * @return bool|null
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->LocalMarketShippingMethodEnabled;
    }
    /**
     * Set LocalMarketShippingMethodEnabled value
     * @param bool $localMarketShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketShippingMethodEnabled($localMarketShippingMethodEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketShippingMethodEnabled) && !is_bool($localMarketShippingMethodEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketShippingMethodEnabled)), __LINE__);
        }
        $this->LocalMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        return $this;
    }
    /**
     * Get LocalMarketCounterOfferEnabled value
     * @return bool|null
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->LocalMarketCounterOfferEnabled;
    }
    /**
     * Set LocalMarketCounterOfferEnabled value
     * @param bool $localMarketCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketCounterOfferEnabled($localMarketCounterOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketCounterOfferEnabled) && !is_bool($localMarketCounterOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketCounterOfferEnabled)), __LINE__);
        }
        $this->LocalMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        return $this;
    }
    /**
     * Get LocalMarketSellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->LocalMarketSellerContactDetailsEnabled;
    }
    /**
     * Set LocalMarketSellerContactDetailsEnabled value
     * @param bool $localMarketSellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setLocalMarketSellerContactDetailsEnabled($localMarketSellerContactDetailsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketSellerContactDetailsEnabled) && !is_bool($localMarketSellerContactDetailsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($localMarketSellerContactDetailsEnabled)), __LINE__);
        }
        $this->LocalMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdPhoneCount value
     * @return int|null
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->ClassifiedAdPhoneCount;
    }
    /**
     * Set ClassifiedAdPhoneCount value
     * @param int $classifiedAdPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdPhoneCount($classifiedAdPhoneCount = null)
    {
        // validation for constraint: int
        if (!is_null($classifiedAdPhoneCount) && !is_numeric($classifiedAdPhoneCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($classifiedAdPhoneCount)), __LINE__);
        }
        $this->ClassifiedAdPhoneCount = $classifiedAdPhoneCount;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByAddressEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->ClassifiedAdContactByAddressEnabled;
    }
    /**
     * Set ClassifiedAdContactByAddressEnabled value
     * @param bool $classifiedAdContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdContactByAddressEnabled($classifiedAdContactByAddressEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByAddressEnabled) && !is_bool($classifiedAdContactByAddressEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdContactByAddressEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdStreetCount value
     * @return int|null
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->ClassifiedAdStreetCount;
    }
    /**
     * Set ClassifiedAdStreetCount value
     * @param int $classifiedAdStreetCount
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdStreetCount($classifiedAdStreetCount = null)
    {
        // validation for constraint: int
        if (!is_null($classifiedAdStreetCount) && !is_numeric($classifiedAdStreetCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($classifiedAdStreetCount)), __LINE__);
        }
        $this->ClassifiedAdStreetCount = $classifiedAdStreetCount;
        return $this;
    }
    /**
     * Get ClassifiedAdCompanyNameEnabled value
     * @return bool|null
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->ClassifiedAdCompanyNameEnabled;
    }
    /**
     * Set ClassifiedAdCompanyNameEnabled value
     * @param bool $classifiedAdCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setClassifiedAdCompanyNameEnabled($classifiedAdCompanyNameEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdCompanyNameEnabled) && !is_bool($classifiedAdCompanyNameEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdCompanyNameEnabled)), __LINE__);
        }
        $this->ClassifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        return $this;
    }
    /**
     * Get SpecialitySubscription value
     * @return string|null
     */
    public function getSpecialitySubscription()
    {
        return $this->SpecialitySubscription;
    }
    /**
     * Set SpecialitySubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $specialitySubscription
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setSpecialitySubscription($specialitySubscription = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid($specialitySubscription)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $specialitySubscription, implode(', ', \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->SpecialitySubscription = $specialitySubscription;
        return $this;
    }
    /**
     * Get RegularSubscription value
     * @return string|null
     */
    public function getRegularSubscription()
    {
        return $this->RegularSubscription;
    }
    /**
     * Set RegularSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regularSubscription
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setRegularSubscription($regularSubscription = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid($regularSubscription)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $regularSubscription, implode(', ', \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->RegularSubscription = $regularSubscription;
        return $this;
    }
    /**
     * Get PremiumSubscription value
     * @return string|null
     */
    public function getPremiumSubscription()
    {
        return $this->PremiumSubscription;
    }
    /**
     * Set PremiumSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $premiumSubscription
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPremiumSubscription($premiumSubscription = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid($premiumSubscription)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $premiumSubscription, implode(', ', \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->PremiumSubscription = $premiumSubscription;
        return $this;
    }
    /**
     * Get NonSubscription value
     * @return string|null
     */
    public function getNonSubscription()
    {
        return $this->NonSubscription;
    }
    /**
     * Set NonSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nonSubscription
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setNonSubscription($nonSubscription = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid($nonSubscription)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $nonSubscription, implode(', ', \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->NonSubscription = $nonSubscription;
        return $this;
    }
    /**
     * Get INEscrowWorkflowTimeline value
     * @return string|null
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->INEscrowWorkflowTimeline;
    }
    /**
     * Set INEscrowWorkflowTimeline value
     * @uses \macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $iNEscrowWorkflowTimeline
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setINEscrowWorkflowTimeline($iNEscrowWorkflowTimeline = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType::valueIsValid($iNEscrowWorkflowTimeline)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iNEscrowWorkflowTimeline, implode(', ', \macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType::getValidValues())), __LINE__);
        }
        $this->INEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        return $this;
    }
    /**
     * Get PayPalRequiredForStoreOwner value
     * @return bool|null
     */
    public function getPayPalRequiredForStoreOwner()
    {
        return $this->PayPalRequiredForStoreOwner;
    }
    /**
     * Set PayPalRequiredForStoreOwner value
     * @param bool $payPalRequiredForStoreOwner
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPayPalRequiredForStoreOwner($payPalRequiredForStoreOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalRequiredForStoreOwner) && !is_bool($payPalRequiredForStoreOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payPalRequiredForStoreOwner)), __LINE__);
        }
        $this->PayPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        return $this;
    }
    /**
     * Get ReviseQuantityAllowed value
     * @return bool|null
     */
    public function getReviseQuantityAllowed()
    {
        return $this->ReviseQuantityAllowed;
    }
    /**
     * Set ReviseQuantityAllowed value
     * @param bool $reviseQuantityAllowed
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setReviseQuantityAllowed($reviseQuantityAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($reviseQuantityAllowed) && !is_bool($reviseQuantityAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reviseQuantityAllowed)), __LINE__);
        }
        $this->ReviseQuantityAllowed = $reviseQuantityAllowed;
        return $this;
    }
    /**
     * Get RevisePriceAllowed value
     * @return bool|null
     */
    public function getRevisePriceAllowed()
    {
        return $this->RevisePriceAllowed;
    }
    /**
     * Set RevisePriceAllowed value
     * @param bool $revisePriceAllowed
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setRevisePriceAllowed($revisePriceAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($revisePriceAllowed) && !is_bool($revisePriceAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($revisePriceAllowed)), __LINE__);
        }
        $this->RevisePriceAllowed = $revisePriceAllowed;
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurationsEnabled value
     * @return bool|null
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->StoreOwnerExtendedListingDurationsEnabled;
    }
    /**
     * Set StoreOwnerExtendedListingDurationsEnabled value
     * @param bool $storeOwnerExtendedListingDurationsEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setStoreOwnerExtendedListingDurationsEnabled($storeOwnerExtendedListingDurationsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($storeOwnerExtendedListingDurationsEnabled) && !is_bool($storeOwnerExtendedListingDurationsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($storeOwnerExtendedListingDurationsEnabled)), __LINE__);
        }
        $this->StoreOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurations value
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType|null
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->StoreOwnerExtendedListingDurations;
    }
    /**
     * Set StoreOwnerExtendedListingDurations value
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setStoreOwnerExtendedListingDurations(\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations = null)
    {
        $this->StoreOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        return $this;
    }
    /**
     * Get ReturnPolicyEnabled value
     * @return bool|null
     */
    public function getReturnPolicyEnabled()
    {
        return $this->ReturnPolicyEnabled;
    }
    /**
     * Set ReturnPolicyEnabled value
     * @param bool $returnPolicyEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setReturnPolicyEnabled($returnPolicyEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnPolicyEnabled) && !is_bool($returnPolicyEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnPolicyEnabled)), __LINE__);
        }
        $this->ReturnPolicyEnabled = $returnPolicyEnabled;
        return $this;
    }
    /**
     * Get HandlingTimeEnabled value
     * @return bool|null
     */
    public function getHandlingTimeEnabled()
    {
        return $this->HandlingTimeEnabled;
    }
    /**
     * Set HandlingTimeEnabled value
     * @param bool $handlingTimeEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setHandlingTimeEnabled($handlingTimeEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($handlingTimeEnabled) && !is_bool($handlingTimeEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($handlingTimeEnabled)), __LINE__);
        }
        $this->HandlingTimeEnabled = $handlingTimeEnabled;
        return $this;
    }
    /**
     * Get MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxFlatShippingCost()
    {
        return $this->MaxFlatShippingCost;
    }
    /**
     * Set MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setMaxFlatShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $maxFlatShippingCost = null)
    {
        $this->MaxFlatShippingCost = $maxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group1MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->Group1MaxFlatShippingCost;
    }
    /**
     * Set Group1MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group1MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setGroup1MaxFlatShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $group1MaxFlatShippingCost = null)
    {
        $this->Group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group2MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->Group2MaxFlatShippingCost;
    }
    /**
     * Set Group2MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group2MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setGroup2MaxFlatShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $group2MaxFlatShippingCost = null)
    {
        $this->Group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group3MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->Group3MaxFlatShippingCost;
    }
    /**
     * Set Group3MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group3MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setGroup3MaxFlatShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $group3MaxFlatShippingCost = null)
    {
        $this->Group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string[]|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPaymentMethod(array $paymentMethod = array())
    {
        $invalidValues = array();
        foreach ($paymentMethod as $categoryFeatureTypePaymentMethodItem) {
            if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($categoryFeatureTypePaymentMethodItem)) {
                $invalidValues[] = var_export($categoryFeatureTypePaymentMethodItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Add item to PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function addToPaymentMethod($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod[] = $item;
        return $this;
    }
    /**
     * Get VariationsEnabled value
     * @return bool|null
     */
    public function getVariationsEnabled()
    {
        return $this->VariationsEnabled;
    }
    /**
     * Set VariationsEnabled value
     * @param bool $variationsEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setVariationsEnabled($variationsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($variationsEnabled) && !is_bool($variationsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($variationsEnabled)), __LINE__);
        }
        $this->VariationsEnabled = $variationsEnabled;
        return $this;
    }
    /**
     * Get AttributeConversionEnabled value
     * @return string|null
     */
    public function getAttributeConversionEnabled()
    {
        return $this->AttributeConversionEnabled;
    }
    /**
     * Set AttributeConversionEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $attributeConversionEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setAttributeConversionEnabled($attributeConversionEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType::valueIsValid($attributeConversionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $attributeConversionEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->AttributeConversionEnabled = $attributeConversionEnabled;
        return $this;
    }
    /**
     * Get FreeGalleryPlusEnabled value
     * @return bool|null
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->FreeGalleryPlusEnabled;
    }
    /**
     * Set FreeGalleryPlusEnabled value
     * @param bool $freeGalleryPlusEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setFreeGalleryPlusEnabled($freeGalleryPlusEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($freeGalleryPlusEnabled) && !is_bool($freeGalleryPlusEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($freeGalleryPlusEnabled)), __LINE__);
        }
        $this->FreeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        return $this;
    }
    /**
     * Get FreePicturePackEnabled value
     * @return bool|null
     */
    public function getFreePicturePackEnabled()
    {
        return $this->FreePicturePackEnabled;
    }
    /**
     * Set FreePicturePackEnabled value
     * @param bool $freePicturePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setFreePicturePackEnabled($freePicturePackEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($freePicturePackEnabled) && !is_bool($freePicturePackEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($freePicturePackEnabled)), __LINE__);
        }
        $this->FreePicturePackEnabled = $freePicturePackEnabled;
        return $this;
    }
    /**
     * Get ItemCompatibilityEnabled value
     * @return string|null
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->ItemCompatibilityEnabled;
    }
    /**
     * Set ItemCompatibilityEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemCompatibilityEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setItemCompatibilityEnabled($itemCompatibilityEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType::valueIsValid($itemCompatibilityEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemCompatibilityEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ItemCompatibilityEnabled = $itemCompatibilityEnabled;
        return $this;
    }
    /**
     * Get MinItemCompatibility value
     * @return int|null
     */
    public function getMinItemCompatibility()
    {
        return $this->MinItemCompatibility;
    }
    /**
     * Set MinItemCompatibility value
     * @param int $minItemCompatibility
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setMinItemCompatibility($minItemCompatibility = null)
    {
        // validation for constraint: int
        if (!is_null($minItemCompatibility) && !is_numeric($minItemCompatibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minItemCompatibility)), __LINE__);
        }
        $this->MinItemCompatibility = $minItemCompatibility;
        return $this;
    }
    /**
     * Get MaxItemCompatibility value
     * @return int|null
     */
    public function getMaxItemCompatibility()
    {
        return $this->MaxItemCompatibility;
    }
    /**
     * Set MaxItemCompatibility value
     * @param int $maxItemCompatibility
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setMaxItemCompatibility($maxItemCompatibility = null)
    {
        // validation for constraint: int
        if (!is_null($maxItemCompatibility) && !is_numeric($maxItemCompatibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxItemCompatibility)), __LINE__);
        }
        $this->MaxItemCompatibility = $maxItemCompatibility;
        return $this;
    }
    /**
     * Get ConditionEnabled value
     * @return string|null
     */
    public function getConditionEnabled()
    {
        return $this->ConditionEnabled;
    }
    /**
     * Set ConditionEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $conditionEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setConditionEnabled($conditionEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType::valueIsValid($conditionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $conditionEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ConditionEnabled = $conditionEnabled;
        return $this;
    }
    /**
     * Get ConditionValues value
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType|null
     */
    public function getConditionValues()
    {
        return $this->ConditionValues;
    }
    /**
     * Set ConditionValues value
     * @param \macropage\ebaysdk\trading\StructType\ConditionValuesType $conditionValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setConditionValues(\macropage\ebaysdk\trading\StructType\ConditionValuesType $conditionValues = null)
    {
        $this->ConditionValues = $conditionValues;
        return $this;
    }
    /**
     * Get ValueCategory value
     * @return bool|null
     */
    public function getValueCategory()
    {
        return $this->ValueCategory;
    }
    /**
     * Set ValueCategory value
     * @param bool $valueCategory
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setValueCategory($valueCategory = null)
    {
        // validation for constraint: boolean
        if (!is_null($valueCategory) && !is_bool($valueCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($valueCategory)), __LINE__);
        }
        $this->ValueCategory = $valueCategory;
        return $this;
    }
    /**
     * Get ProductCreationEnabled value
     * @return string|null
     */
    public function getProductCreationEnabled()
    {
        return $this->ProductCreationEnabled;
    }
    /**
     * Set ProductCreationEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productCreationEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setProductCreationEnabled($productCreationEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType::valueIsValid($productCreationEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productCreationEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ProductCreationEnabled = $productCreationEnabled;
        return $this;
    }
    /**
     * Get EANEnabled value
     * @return string|null
     */
    public function getEANEnabled()
    {
        return $this->EANEnabled;
    }
    /**
     * Set EANEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eANEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEANEnabled($eANEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($eANEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eANEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->EANEnabled = $eANEnabled;
        return $this;
    }
    /**
     * Get ISBNEnabled value
     * @return string|null
     */
    public function getISBNEnabled()
    {
        return $this->ISBNEnabled;
    }
    /**
     * Set ISBNEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $iSBNEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setISBNEnabled($iSBNEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($iSBNEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iSBNEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ISBNEnabled = $iSBNEnabled;
        return $this;
    }
    /**
     * Get UPCEnabled value
     * @return string|null
     */
    public function getUPCEnabled()
    {
        return $this->UPCEnabled;
    }
    /**
     * Set UPCEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uPCEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setUPCEnabled($uPCEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($uPCEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $uPCEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->UPCEnabled = $uPCEnabled;
        return $this;
    }
    /**
     * Get MaxGranularFitmentCount value
     * @return int|null
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->MaxGranularFitmentCount;
    }
    /**
     * Set MaxGranularFitmentCount value
     * @param int $maxGranularFitmentCount
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setMaxGranularFitmentCount($maxGranularFitmentCount = null)
    {
        // validation for constraint: int
        if (!is_null($maxGranularFitmentCount) && !is_numeric($maxGranularFitmentCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxGranularFitmentCount)), __LINE__);
        }
        $this->MaxGranularFitmentCount = $maxGranularFitmentCount;
        return $this;
    }
    /**
     * Get CompatibleVehicleType value
     * @return string|null
     */
    public function getCompatibleVehicleType()
    {
        return $this->CompatibleVehicleType;
    }
    /**
     * Set CompatibleVehicleType value
     * @param string $compatibleVehicleType
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setCompatibleVehicleType($compatibleVehicleType = null)
    {
        // validation for constraint: string
        if (!is_null($compatibleVehicleType) && !is_string($compatibleVehicleType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compatibleVehicleType)), __LINE__);
        }
        $this->CompatibleVehicleType = $compatibleVehicleType;
        return $this;
    }
    /**
     * Get PaymentOptionsGroup value
     * @return string|null
     */
    public function getPaymentOptionsGroup()
    {
        return $this->PaymentOptionsGroup;
    }
    /**
     * Set PaymentOptionsGroup value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentOptionsGroup
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPaymentOptionsGroup($paymentOptionsGroup = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType::valueIsValid($paymentOptionsGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentOptionsGroup, implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentOptionsGroup = $paymentOptionsGroup;
        return $this;
    }
    /**
     * Get ShippingProfileCategoryGroup value
     * @return string|null
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->ShippingProfileCategoryGroup;
    }
    /**
     * Set ShippingProfileCategoryGroup value
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setShippingProfileCategoryGroup($shippingProfileCategoryGroup = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid($shippingProfileCategoryGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingProfileCategoryGroup, implode(', ', \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        return $this;
    }
    /**
     * Get PaymentProfileCategoryGroup value
     * @return string|null
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->PaymentProfileCategoryGroup;
    }
    /**
     * Set PaymentProfileCategoryGroup value
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPaymentProfileCategoryGroup($paymentProfileCategoryGroup = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid($paymentProfileCategoryGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentProfileCategoryGroup, implode(', ', \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        return $this;
    }
    /**
     * Get ReturnPolicyProfileCategoryGroup value
     * @return string|null
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->ReturnPolicyProfileCategoryGroup;
    }
    /**
     * Set ReturnPolicyProfileCategoryGroup value
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnPolicyProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setReturnPolicyProfileCategoryGroup($returnPolicyProfileCategoryGroup = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid($returnPolicyProfileCategoryGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnPolicyProfileCategoryGroup, implode(', ', \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->ReturnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        return $this;
    }
    /**
     * Get VINSupported value
     * @return bool|null
     */
    public function getVINSupported()
    {
        return $this->VINSupported;
    }
    /**
     * Set VINSupported value
     * @param bool $vINSupported
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setVINSupported($vINSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($vINSupported) && !is_bool($vINSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vINSupported)), __LINE__);
        }
        $this->VINSupported = $vINSupported;
        return $this;
    }
    /**
     * Get VRMSupported value
     * @return bool|null
     */
    public function getVRMSupported()
    {
        return $this->VRMSupported;
    }
    /**
     * Set VRMSupported value
     * @param bool $vRMSupported
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setVRMSupported($vRMSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($vRMSupported) && !is_bool($vRMSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vRMSupported)), __LINE__);
        }
        $this->VRMSupported = $vRMSupported;
        return $this;
    }
    /**
     * Get SellerProvidedTitleSupported value
     * @return bool|null
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->SellerProvidedTitleSupported;
    }
    /**
     * Set SellerProvidedTitleSupported value
     * @param bool $sellerProvidedTitleSupported
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setSellerProvidedTitleSupported($sellerProvidedTitleSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerProvidedTitleSupported) && !is_bool($sellerProvidedTitleSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sellerProvidedTitleSupported)), __LINE__);
        }
        $this->SellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        return $this;
    }
    /**
     * Get DepositSupported value
     * @return bool|null
     */
    public function getDepositSupported()
    {
        return $this->DepositSupported;
    }
    /**
     * Set DepositSupported value
     * @param bool $depositSupported
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setDepositSupported($depositSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($depositSupported) && !is_bool($depositSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($depositSupported)), __LINE__);
        }
        $this->DepositSupported = $depositSupported;
        return $this;
    }
    /**
     * Get GlobalShippingEnabled value
     * @return bool|null
     */
    public function getGlobalShippingEnabled()
    {
        return $this->GlobalShippingEnabled;
    }
    /**
     * Set GlobalShippingEnabled value
     * @param bool $globalShippingEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setGlobalShippingEnabled($globalShippingEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($globalShippingEnabled) && !is_bool($globalShippingEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($globalShippingEnabled)), __LINE__);
        }
        $this->GlobalShippingEnabled = $globalShippingEnabled;
        return $this;
    }
    /**
     * Get AdditionalCompatibilityEnabled value
     * @return bool|null
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->AdditionalCompatibilityEnabled;
    }
    /**
     * Set AdditionalCompatibilityEnabled value
     * @param bool $additionalCompatibilityEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setAdditionalCompatibilityEnabled($additionalCompatibilityEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($additionalCompatibilityEnabled) && !is_bool($additionalCompatibilityEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($additionalCompatibilityEnabled)), __LINE__);
        }
        $this->AdditionalCompatibilityEnabled = $additionalCompatibilityEnabled;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CategoryFeatureType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get PickupDropOffEnabled value
     * @return bool|null
     */
    public function getPickupDropOffEnabled()
    {
        return $this->PickupDropOffEnabled;
    }
    /**
     * Set PickupDropOffEnabled value
     * @param bool $pickupDropOffEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setPickupDropOffEnabled($pickupDropOffEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($pickupDropOffEnabled) && !is_bool($pickupDropOffEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($pickupDropOffEnabled)), __LINE__);
        }
        $this->PickupDropOffEnabled = $pickupDropOffEnabled;
        return $this;
    }
    /**
     * Get DigitalGoodDeliveryEnabled value
     * @return bool|null
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->DigitalGoodDeliveryEnabled;
    }
    /**
     * Set DigitalGoodDeliveryEnabled value
     * @param bool $digitalGoodDeliveryEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setDigitalGoodDeliveryEnabled($digitalGoodDeliveryEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($digitalGoodDeliveryEnabled) && !is_bool($digitalGoodDeliveryEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($digitalGoodDeliveryEnabled)), __LINE__);
        }
        $this->DigitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        return $this;
    }
    /**
     * Get EpidSupported value
     * @return bool|null
     */
    public function getEpidSupported()
    {
        return $this->EpidSupported;
    }
    /**
     * Set EpidSupported value
     * @param bool $epidSupported
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setEpidSupported($epidSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($epidSupported) && !is_bool($epidSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($epidSupported)), __LINE__);
        }
        $this->EpidSupported = $epidSupported;
        return $this;
    }
    /**
     * Get KTypeSupported value
     * @return bool|null
     */
    public function getKTypeSupported()
    {
        return $this->KTypeSupported;
    }
    /**
     * Set KTypeSupported value
     * @param bool $kTypeSupported
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setKTypeSupported($kTypeSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($kTypeSupported) && !is_bool($kTypeSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($kTypeSupported)), __LINE__);
        }
        $this->KTypeSupported = $kTypeSupported;
        return $this;
    }
    /**
     * Get ProductRequiredEnabled value
     * @return string|null
     */
    public function getProductRequiredEnabled()
    {
        return $this->ProductRequiredEnabled;
    }
    /**
     * Set ProductRequiredEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productRequiredEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setProductRequiredEnabled($productRequiredEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType::valueIsValid($productRequiredEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productRequiredEnabled, implode(', ', \macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ProductRequiredEnabled = $productRequiredEnabled;
        return $this;
    }
    /**
     * Get DomesticReturnsAcceptedValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType|null
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->DomesticReturnsAcceptedValues;
    }
    /**
     * Set DomesticReturnsAcceptedValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setDomesticReturnsAcceptedValues(\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues = null)
    {
        $this->DomesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType|null
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->InternationalReturnsAcceptedValues;
    }
    /**
     * Set InternationalReturnsAcceptedValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setInternationalReturnsAcceptedValues(\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues = null)
    {
        $this->InternationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        return $this;
    }
    /**
     * Get DomesticReturnsDurationValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType|null
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->DomesticReturnsDurationValues;
    }
    /**
     * Set DomesticReturnsDurationValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setDomesticReturnsDurationValues(\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues = null)
    {
        $this->DomesticReturnsDurationValues = $domesticReturnsDurationValues;
        return $this;
    }
    /**
     * Get InternationalReturnsDurationValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType|null
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->InternationalReturnsDurationValues;
    }
    /**
     * Set InternationalReturnsDurationValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setInternationalReturnsDurationValues(\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues = null)
    {
        $this->InternationalReturnsDurationValues = $internationalReturnsDurationValues;
        return $this;
    }
    /**
     * Get DomesticReturnsShipmentPayeeValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType|null
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->DomesticReturnsShipmentPayeeValues;
    }
    /**
     * Set DomesticReturnsShipmentPayeeValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setDomesticReturnsShipmentPayeeValues(\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues = null)
    {
        $this->DomesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        return $this;
    }
    /**
     * Get InternationalReturnsShipmentPayeeValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType|null
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->InternationalReturnsShipmentPayeeValues;
    }
    /**
     * Set InternationalReturnsShipmentPayeeValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setInternationalReturnsShipmentPayeeValues(\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues = null)
    {
        $this->InternationalReturnsShipmentPayeeValues = $internationalReturnsShipmentPayeeValues;
        return $this;
    }
    /**
     * Get DomesticRefundMethodValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType|null
     */
    public function getDomesticRefundMethodValues()
    {
        return $this->DomesticRefundMethodValues;
    }
    /**
     * Set DomesticRefundMethodValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setDomesticRefundMethodValues(\macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null)
    {
        $this->DomesticRefundMethodValues = $domesticRefundMethodValues;
        return $this;
    }
    /**
     * Get InternationalRefundMethodValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType|null
     */
    public function getInternationalRefundMethodValues()
    {
        return $this->InternationalRefundMethodValues;
    }
    /**
     * Set InternationalRefundMethodValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setInternationalRefundMethodValues(\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null)
    {
        $this->InternationalRefundMethodValues = $internationalRefundMethodValues;
        return $this;
    }
    /**
     * Get ReturnPolicyDescriptionEnabled value
     * @return bool|null
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->ReturnPolicyDescriptionEnabled;
    }
    /**
     * Set ReturnPolicyDescriptionEnabled value
     * @param bool $returnPolicyDescriptionEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
     */
    public function setReturnPolicyDescriptionEnabled($returnPolicyDescriptionEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnPolicyDescriptionEnabled) && !is_bool($returnPolicyDescriptionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnPolicyDescriptionEnabled)), __LINE__);
        }
        $this->ReturnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\CategoryFeatureType
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
