<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteDefaultsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>SiteDefaults</b> container to display the features/settings that are default for most categories on the eBay marketplace.
 * @subpackage Structs
 */
class SiteDefaultsType extends AbstractStructBase
{
    /**
     * The ListingDuration
     * Meta information extracted from the WSDL
     * - documentation: A <b>ListingDuration</b> field will be returned for each different listing type that is supported on the eBay marketplace. Each field will show the listing type and the identifier associated with this listing type. These IDs will be
     * used to match the default listing duration values that are displayed in the <b>FeatureDefinitions.ListingDurations</b> containers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType[]
     */
    protected ?array $ListingDuration = null;
    /**
     * The ShippingTermsRequired
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether sellers are required to specify a domestic shipping service and its associated cost when listing items. True means the shipping terms are required unless a specific category overrides
     * this setting.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShippingTermsRequired = null;
    /**
     * The BestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow Best Offers. A value of <code>true</code> means Best Offers are allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BestOfferEnabled = null;
    /**
     * The DutchBINEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as Dutch auctions are no longer available on eBay sites.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DutchBINEnabled = null;
    /**
     * The UserConsentRequired
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a bidder must consent to the bid by confirming that he or she read and agrees to the terms in eBay's privacy policy.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UserConsentRequired = null;
    /**
     * The HomePageFeaturedEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not it is possible to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Support for this feature varies by site. Item or feedback restrictions may apply.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HomePageFeaturedEnabled = null;
    /**
     * The ProPackEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow the ProPack feature (a feature pack). True means ProPack is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ProPackEnabled = null;
    /**
     * The BasicUpgradePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow the <b>BasicUpgradePack</b> feature (a feature pack). No longer allowed on any sites. Formerly, Australia site (site ID 15, abbreviation AU) only.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BasicUpgradePackEnabled = null;
    /**
     * The ValuePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow the ValuePack feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ValuePackEnabled = null;
    /**
     * The ProPackPlusEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow the ProPackPlus feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ProPackPlusEnabled = null;
    /**
     * The AdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow Classified Ad format listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AdFormatEnabled = null;
    /**
     * The BestOfferCounterEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow counter offers for Best Offers. A value of <code>true</code> means counter offers are allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BestOfferCounterEnabled = null;
    /**
     * The BestOfferAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto decline for Best Offers. A value of <code>true</code> means auto decline is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BestOfferAutoDeclineEnabled = null;
    /**
     * The LocalMarketSpecialitySubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketSpecialitySubscription = null;
    /**
     * The LocalMarketRegularSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketRegularSubscription = null;
    /**
     * The LocalMarketPremiumSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketPremiumSubscription = null;
    /**
     * The LocalMarketNonSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketNonSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketNonSubscription = null;
    /**
     * The ExpressEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpressEnabled = null;
    /**
     * The ExpressPicturesRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpressPicturesRequired = null;
    /**
     * The ExpressConditionRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpressConditionRequired = null;
    /**
     * The MinimumReservePrice
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether the Minimum Reserve Price feature is supported for most categories.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $MinimumReservePrice = null;
    /**
     * The SellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories allow seller-level contact information for Classified Ad listings. <br/><br/> A value of <code>true</code> means seller-level contact information is available for
     * Classified Ad format listings site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SellerContactDetailsEnabled = null;
    /**
     * The TransactionConfirmationRequestEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether the Transaction Confirmation Request feature is supported for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $TransactionConfirmationRequestEnabled = null;
    /**
     * The StoreInventoryEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is is no longer applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $StoreInventoryEnabled = null;
    /**
     * The SkypeMeTransactionalEnabled
     * Meta information extracted from the WSDL
     * - documentation: This feature is no longer applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SkypeMeTransactionalEnabled = null;
    /**
     * The SkypeMeNonTransactionalEnabled
     * Meta information extracted from the WSDL
     * - documentation: This feature is no longer applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SkypeMeNonTransactionalEnabled = null;
    /**
     * The LocalListingDistancesRegular
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supported local listing distances of regular vehicles for most categories.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalListingDistancesRegular = null;
    /**
     * The LocalListingDistancesSpecialty
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supported local listing distances of specialty vehicles for most categories.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalListingDistancesSpecialty = null;
    /**
     * The LocalListingDistancesNonSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supported local listing distances for most categories, for users who have not subscribed to either Regular or Specialty vehicles.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalListingDistancesNonSubscription = null;
    /**
     * The ClassifiedAdPaymentMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ClassifiedAdPaymentMethodEnabled = null;
    /**
     * The ClassifiedAdShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if shipping options are available for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdShippingMethodEnabled = null;
    /**
     * The ClassifiedAdBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if Best Offer is enabled for Classified Ad listings in most categories.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ClassifiedAdBestOfferEnabled = null;
    /**
     * The ClassifiedAdCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed on Best Offers for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdCounterOfferEnabled = null;
    /**
     * The ClassifiedAdAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether automatic decline for Best Offers is allowed for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdAutoDeclineEnabled = null;
    /**
     * The ClassifiedAdContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a phone number in the seller's contact information.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdContactByPhoneEnabled = null;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an email address in the seller's contact information.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdContactByEmailEnabled = null;
    /**
     * The SafePaymentRequired
     * Meta information extracted from the WSDL
     * - documentation: eBay controls all forms of electronic payment methods that are avaialable to buyers, so this field is no longer applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SafePaymentRequired = null;
    /**
     * The ClassifiedAdPayPerLeadEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether the pay-per-lead feature is supported for most categories.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdPayPerLeadEnabled = null;
    /**
     * The ItemSpecificsEnabled
     * Meta information extracted from the WSDL
     * - documentation: The value returned in this field indicates whether most categories on the specified eBay site support listings with Item Specifics. Item Specifics enable sellers to present descriptive details of an item in a structured manner.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemSpecificsEnabled = null;
    /**
     * The PaisaPayFullEscrowEnabled
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so the <code>PaisaPayEscrow</code> payment method is no longer applicable since this payment method was only supported on the eBay India
     * site. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PaisaPayFullEscrowEnabled = null;
    /**
     * The ISBNIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ISBNIdentifierEnabled = null;
    /**
     * The UPCIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UPCIdentifierEnabled = null;
    /**
     * The EANIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EANIdentifierEnabled = null;
    /**
     * The BrandMPNIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the category is enabled for the <b>BrandMPN</b> field for a specific item. If <code>true</code>, sellers can add <b>BrandMPN</b> for that item.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BrandMPNIdentifierEnabled = null;
    /**
     * The ClassifiedAdAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdAutoAcceptEnabled = null;
    /**
     * The BestOfferAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-accept for Best Offers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BestOfferAutoAcceptEnabled = null;
    /**
     * The CrossBorderTradeNorthAmericaEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective sites.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CrossBorderTradeNorthAmericaEnabled = null;
    /**
     * The CrossBorderTradeGBEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CrossBorderTradeGBEnabled = null;
    /**
     * The CrossBorderTradeAustraliaEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CrossBorderTradeAustraliaEnabled = null;
    /**
     * The PayPalBuyerProtectionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. eBay now manages the complete payment and checkout process, so PayPal Purchase Protection no longer applies to eBay orders.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PayPalBuyerProtectionEnabled = null;
    /**
     * The BuyerGuaranteeEnabled
     * Meta information extracted from the WSDL
     * - documentation: For the Australia site, if the <b>BuyerGuaranteeEnabled</b> is returned, then the default site setting is that categories allow buyer protection.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BuyerGuaranteeEnabled = null;
    /**
     * The INEscrowWorkflowTimeline
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so this feature is no longer applicable since it was only supported on the eBay India site. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $INEscrowWorkflowTimeline = null;
    /**
     * The CombinedFixedPriceTreatmentEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CombinedFixedPriceTreatmentEnabled = null;
    /**
     * The GalleryFeaturedDurations
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting that enables durations for "Gallery Featured".
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType $GalleryFeaturedDurations = null;
    /**
     * The PayPalRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. eBay now controls the electronic payment methods avaialable to buyers, and the seller does not specify any electronic payment methods.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PayPalRequired = null;
    /**
     * The eBayMotorsProAdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for eBay
     * Motors Pro users.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayMotorsProAdFormatEnabled = null;
    /**
     * The eBayMotorsProContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a phone number in the seller's contact information. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProContactByPhoneEnabled = null;
    /**
     * The eBayMotorsProPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which telephone option is enabled to contact the seller. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $eBayMotorsProPhoneCount = null;
    /**
     * The eBayMotorsProContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an address in the seller's contact information. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProContactByAddressEnabled = null;
    /**
     * The eBayMotorsProStreetCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which address option is enabled to contact the seller. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $eBayMotorsProStreetCount = null;
    /**
     * The eBayMotorsProCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a company name in the seller's contact information. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProCompanyNameEnabled = null;
    /**
     * The eBayMotorsProContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an email address in the seller's contact information. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProContactByEmailEnabled = null;
    /**
     * The eBayMotorsProBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if Best Offer is enabled for Classified Ad listings in most categories. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayMotorsProBestOfferEnabled = null;
    /**
     * The eBayMotorsProAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProAutoAcceptEnabled = null;
    /**
     * The eBayMotorsProAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-decline for Best Offers for Classified Ads. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProAutoDeclineEnabled = null;
    /**
     * The eBayMotorsProPaymentMethodCheckOutEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayMotorsProPaymentMethodCheckOutEnabled = null;
    /**
     * The eBayMotorsProShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if shipping options are available for most categories. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProShippingMethodEnabled = null;
    /**
     * The eBayMotorsProCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed on Best Offers for most categories. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProCounterOfferEnabled = null;
    /**
     * The eBayMotorsProSellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories allow seller- level contact information for Classified Ad format listings. A value of <code>true</code> means seller-level contact information is available for Classified
     * Ad listings site-wide, unless a specific category overrides the setting. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $eBayMotorsProSellerContactDetailsEnabled = null;
    /**
     * The LocalMarketAdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for Local
     * Market dealers.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalMarketAdFormatEnabled = null;
    /**
     * The LocalMarketContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a phone number in the seller's contact information. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketContactByPhoneEnabled = null;
    /**
     * The LocalMarketPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which telephone option is enabled to contact the seller. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LocalMarketPhoneCount = null;
    /**
     * The LocalMarketContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an address in the seller's contact information. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketContactByAddressEnabled = null;
    /**
     * The LocalMarketStreetCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which address option is enabled to contact the seller. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LocalMarketStreetCount = null;
    /**
     * The LocalMarketCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a company name in the seller's contact information. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketCompanyNameEnabled = null;
    /**
     * The LocalMarketContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an email address in the seller's contact information. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketContactByEmailEnabled = null;
    /**
     * The LocalMarketBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if Best Offer is enabled for Classified Ad listings in most categories. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalMarketBestOfferEnabled = null;
    /**
     * The LocalMarketAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketAutoAcceptEnabled = null;
    /**
     * The LocalMarketAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-decline for Best Offers for Classified Ads. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketAutoDeclineEnabled = null;
    /**
     * The LocalMarketPaymentMethodCheckOutEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalMarketPaymentMethodCheckOutEnabled = null;
    /**
     * The LocalMarketShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if shipping options are available for most categories. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketShippingMethodEnabled = null;
    /**
     * The LocalMarketCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed on Best Offers for most categories. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketCounterOfferEnabled = null;
    /**
     * The LocalMarketSellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories allow seller- level contact information for Classified Ad format listings. A value of <code>true</code> means seller-level contact information is available for Classified
     * Ad format listings site-wide, unless a specific category overrides the setting. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LocalMarketSellerContactDetailsEnabled = null;
    /**
     * The ClassifiedAdPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which telephone option is enabled to contact the seller. This element is for For Sale By Owner.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ClassifiedAdPhoneCount = null;
    /**
     * The ClassifiedAdContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an address in the seller's contact information. This element is for For Sale By Owner.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdContactByAddressEnabled = null;
    /**
     * The ClassifiedAdStreetCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which address option is enabled to contact the seller. This element is for For Sale By Owner.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ClassifiedAdStreetCount = null;
    /**
     * The ClassifiedAdCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a company name in the seller's contact information. This element is for For Sale By Owner.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdCompanyNameEnabled = null;
    /**
     * The SpecialitySubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SpecialitySubscription = null;
    /**
     * The RegularSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RegularSubscription = null;
    /**
     * The PremiumSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PremiumSubscription = null;
    /**
     * The NonSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supported local listing distances for most categories, for users who have not subscribed to either Regular or Specialty vehicles.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NonSubscription = null;
    /**
     * The PayPalRequiredForStoreOwner
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PayPalRequiredForStoreOwner = null;
    /**
     * The ReviseQuantityAllowed
     * Meta information extracted from the WSDL
     * - documentation: Defines if quantity can be revised while a listing is in semi or fully restricted mode. Applies to fixed-price listings.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReviseQuantityAllowed = null;
    /**
     * The RevisePriceAllowed
     * Meta information extracted from the WSDL
     * - documentation: Defines if price can be revised while a listing is in semi or fully restricted mode. Applies to fixed-price listings.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RevisePriceAllowed = null;
    /**
     * The StoreOwnerExtendedListingDurationsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Defines if extended business seller listing durations are enabled on a given site. When the value of this element is <code>true</code>, it means the listing duration values defined in <b>StoreOwnerExtendedListingDurations</b> are
     * applicable to fixed-price listings.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $StoreOwnerExtendedListingDurationsEnabled = null;
    /**
     * The StoreOwnerExtendedListingDurations
     * Meta information extracted from the WSDL
     * - documentation: Provides additional listings durations that are supported by Store Owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the <b>ListingDurations</b>
     * container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $StoreOwnerExtendedListingDurations = null;
    /**
     * The ReturnPolicyEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a return policy is required for most categories. <br> <br> <b>For most sites:</b> If true, listings in most categories require a return policy. <br> <br> <b>For eBay Australia (AU) and
     * US eBay Motors Parts and Accessories:</b> If true, most categories support but do not require a return policy. <br> <br> Individual categories can override the site default.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReturnPolicyEnabled = null;
    /**
     * The HandlingTimeEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a handling time (dispatch time) is required for most categories. <br> <br> The handling time is the maximum number of business days the seller commits to for preparing an item to be
     * shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time). <br> <br> If <code>false</code>, most listings on the site require a handling time (see <b>DispatchTimeMax</b> in
     * <b>AddItem</b>) when flat or calculated shipping is specified. (A handling time is not required for local pickup or for freight shipping.) <br> <br> For a list of the handling time values allowed for each site, use <b>DispatchTimeMaxDetails</b> in
     * <b>GeteBayDetails</b>. <br> <br> <span class="tablenote"><b>Note:</b> Although the field name ends with "Enabled", a value of <code>true</code> means that a handling time is NOT required, and value of <code>false</code> means that a handling time IS
     * required.</span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HandlingTimeEnabled = null;
    /**
     * The MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a maximum flat rate shipping cost is imposed for listings in most categories on the site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MaxFlatShippingCost = null;
    /**
     * The MaxFlatShippingCostCBTExempt
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a maximum flat rate shipping cost is imposed on sellers who list in categories on this site yet are shipping an item into the country of this site from another country.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MaxFlatShippingCostCBTExempt = null;
    /**
     * The Group1MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Group1MaxFlatShippingCost = null;
    /**
     * The Group2MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group2
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Group2MaxFlatShippingCost = null;
    /**
     * The Group3MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group3
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Group3MaxFlatShippingCost = null;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: Indicates the acceptable payment methods that can be used when using the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls for an item listed on the corresponding site. <br><br> <span class="tablenote"><b>Note:</b> eBay now controls all
     * electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $PaymentMethod = null;
    /**
     * The VariationsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories support multi-variation listings. If true, you can pass in Item.Variations in the AddFixedPriceItem family of calls when you list in categories that support this feature. <br>
     * <br> Multi-variation listings contain items that are logically the same product, but that vary in their manufacturing details or packaging. For example, a particular brand and style of shirt could be available in different sizes and colors, such as
     * "large blue" and "medium black" variations.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $VariationsEnabled = null;
    /**
     * The AttributeConversionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AttributeConversionEnabled = null;
    /**
     * The FreeGalleryPlusEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow free, automatic upgrades for Gallery Plus, which enhances pictures in search results.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FreeGalleryPlusEnabled = null;
    /**
     * The FreePicturePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FreePicturePackEnabled = null;
    /**
     * The ItemCompatibilityEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether listing items with parts compatibility is supported by application (<code>ByApplication</code>), by specification (<code>BySpecification</code>), or not at all (<code>Disabled</code>). A
     * given category cannot support both types of parts compatibility. <br><br> Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts
     * compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories for the US eBay Motors site only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemCompatibilityEnabled = null;
    /**
     * The MinItemCompatibility
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether parts compatibility information is required when listing items, and if so, how many compatibilities must be specified. If the value is "0," you are not required to specify compatibility
     * information. A value greater than "0" indicates that listing with parts compatibity is mandatory and the listing must contain the specified number of compatibilities at a minimum. <br><br> Parts compatibility listings contain information to determine
     * the assemblies with which a part is compatible. For example, an automotive part or accessory listed witih parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     * <br><br> This field applies only to listings in which compatibility is specified by application. Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies. This can
     * be done automatically by listing with a catalog product that supports parts compatibility, or manually, using <b class="con">Item.ItemCompatibilityList</b> when listing or revising an item.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinItemCompatibility = null;
    /**
     * The MaxItemCompatibility
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for the maximum number of compatible applications allowed per item when adding or revising items with parts compatibility. <br><br> Parts compatibility listings contain structured information to
     * determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be
     * used. <br><br> This field applies only to listings in which compatibility is specified by application manually when listing or revising an item. Entering parts compatibility by application manually specifies the assemblies (e.g., a specific year,
     * make, and model of car) to which the item applies, using <b class="con">Item.ItemCompatibilityList</b>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxItemCompatibility = null;
    /**
     * The ConditionEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories support (or require) <b>Item.ConditionID</b> in listings. Use this to determine whether to use <b>ConditionID</b> in <b>AddItem</b> and related calls. See
     * <b>ConditionValues</b> for a list of valid IDs. <br><br> In general, this is set to <code>Disabled</code>, and meta-categories (level 1 categories) define their own default settings.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConditionEnabled = null;
    /**
     * The ConditionValues
     * Meta information extracted from the WSDL
     * - documentation: This container shows the site default item condition values. Individual leaf categories define their own default set of item condition values and always override this list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionValuesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ConditionValuesType $ConditionValues = null;
    /**
     * The SpecialFeatures
     * Meta information extracted from the WSDL
     * - documentation: This container shows the site default special item condition values, such as <b>Certified - Refurbished</b> condition (condition ID 2000), <b>Excellent - Refurbished</b> condition (condition ID 2010), <b>Very Good - Refurbished</b>
     * condition (condition ID 2020), and <b>Good - Refurbished</b> condition (condition ID 2030). A seller must be pre-qualified by eBay to list items with the any of these refurbished item conditions. The <b>Excellent - Refurbished</b>, <b>Very Good -
     * Refurbished</b> and <b>Good - Refurbished</b> conditions are currently only applicable for the <strong>Cell Phones & Smartphones</strong> category (category ID 9355). <br/><br/> All other item conditions supported by a category will be returned in
     * the <b>ConditionValues</b> container instead. Individual leaf categories define their own default set of item condition values and always override this list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionValuesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ConditionValuesType $SpecialFeatures = null;
    /**
     * The ValueCategory
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories follow specific rules associated with "value categories". <br> <br> Some eBay sites may select a few categories and designate them as "value categories". These are
     * typically selected from categories where buyers can find great deals. (Not all categories with great deals are designated as value categories.) This designation can change over time. <br> <br> While a category is designated as a value category (i.e.,
     * when <b>ValueCategory</b> = <code>true</code>), it is subject to the following rule: Items in value categories can only be listed in one category. <br> <br> For example, if you attempt to list in two categories and the <b>PrimaryCategory</b> or
     * <b>SecondaryCategory</b> is a value category, then eBay drops the <b>SecondaryCategory</b> and lists the item in the <b>PrimaryCategory</b> only. Similarly, if you attempt to add a secondary category to an existing listing, or you change the category
     * for an existing listing, and if the primary or secondary category is a value category, then eBay drops the secondary category.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ValueCategory = null;
    /**
     * The ProductCreationEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories support creating/revising listings based off an eBay catalog product.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductCreationEnabled = null;
    /**
     * The EANEnabled
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not most categories on the specified eBay site support the use of European Article Numbers (EANs) to help create a listing in an <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API
     * call. <b></b> <ul> <li>A value of <code>Disabled</code> indicates that EANs cannot be used for most categories on the specified eBay site. </li> <li>A value of <code>Enabled</code> indicates that EANs can be used for most categories on the specified
     * eBay site. </li> <li>A value of <code>Required</code> indicates that an EAN is required for most categories on the specified eBay site. </li> </ul>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EANEnabled = null;
    /**
     * The ISBNEnabled
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not most categories on the specified eBay site support the use of International Standard Book Numbers (ISBNs) to help create a listing in an
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API call. <br/><br/> A value of <code>Disabled</code> indicates that ISBNs cannot be used for most categories on the specified eBay site, a value of <code>Enabled</code> indicates that ISBNs can be
     * used for most categories on the specified eBay site, and a value of <code>Required</code> indicates that an ISBN is required for most categories on the specified eBay site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ISBNEnabled = null;
    /**
     * The UPCEnabled
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not most categories on the specified eBay site support the use of Universal Product Codes (UPCs) to help create a listing in an Add/Revise/Relist/Verify API call. A value of
     * <code>Disabled</code> indicates that UPCs cannot be used for most categories on the specified eBay site, a value of <code>Enabled</code> indicates that UPCs can be used for most categories on the specified eBay site, and a value of
     * <code>Required</code> indicates that a UPC is required for most categories on the specified eBay site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UPCEnabled = null;
    /**
     * The MaxGranularFitmentCount
     * Meta information extracted from the WSDL
     * - documentation: Specifies the maximum fitment count. Sellers can provide up to 1000 fitments at the lowest level of granularity.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxGranularFitmentCount = null;
    /**
     * The CompatibleVehicleType
     * Meta information extracted from the WSDL
     * - documentation: Indicates the type of vehicle; car, truck, boat, or motorcycle.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompatibleVehicleType = null;
    /**
     * The PaymentOptionsGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentOptionsGroup = null;
    /**
     * The ShippingProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: Specifies what categories the Shipping profile is applicable to. Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingProfileCategoryGroup = null;
    /**
     * The PaymentProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: Specifies what categories the Payment profile is applicable to.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentProfileCategoryGroup = null;
    /**
     * The ReturnPolicyProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: Specifies what categories the Return Policy profile is applicable to.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnPolicyProfileCategoryGroup = null;
    /**
     * The VINSupported
     * Meta information extracted from the WSDL
     * - documentation: After EOL Attributes, VIN will no longer be supported as primary attributes, rather consumers should use new tag. This feature helps consumers in identifying if category supports VIN.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $VINSupported = null;
    /**
     * The VRMSupported
     * Meta information extracted from the WSDL
     * - documentation: After EOL Attributes, VRM will no longer be supported as primary attributes, rather consumers should use new tag. This feature helps consumers in identifying if category supports VRM.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $VRMSupported = null;
    /**
     * The SellerProvidedTitleSupported
     * Meta information extracted from the WSDL
     * - documentation: After EOL Attributes, Seller Provided Title will no longer be supported as primary attributes, rather consumers should use new tag. This feature helps consumers in identifying if category supports Seller Provided Title.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SellerProvidedTitleSupported = null;
    /**
     * The DepositSupported
     * Meta information extracted from the WSDL
     * - documentation: After EOL Attributes, Deposit will no longer be supported as primary attributes, rather consumers should use new tags. This feature helps consumers in identifying if category supports Deposit.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DepositSupported = null;
    /**
     * The GlobalShippingEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the the specified category is enabled for Global Shipping Program.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GlobalShippingEnabled = null;
    /**
     * The AdditionalCompatibilityEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories on the specified eBay site support the Boat and Motorcycle Parts Compatibility feature. The Boats Parts Compatibility feature allows sellers to list their boats' parts and accessories items with
     * parts compatibility name-value pairs specific to boats, and allows potential buyers to search for these items using parts compatibility search fields.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AdditionalCompatibilityEnabled = null;
    /**
     * The PickupDropOffEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories on the specified eBay site support the "Click and Collect" feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers
     * are notified by eBay once their items are available. <br/><br/> The "Click and Collect" feature is only available to large merchants on the UK and Australia sites. The 'Click and Collect' feature is only available to large merchants on the eBay UK
     * (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites. <br> <br> <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and
     * then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PickupDropOffEnabled = null;
    /**
     * The DigitalGoodDeliveryEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether or not most categories on the specified eBay site support digital gift cards. <br/><br/> Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to
     * selling gift cards, including the following: <ul> <li>Each seller can only have one gift card listing at any given time</li> <li>The maximum dollar value of the gift card may not exceed 500.00</li> <li>Prepaid credit cards from American Express,
     * Discover, MasterCard, or Visa are not allowed</li> </ul> For more information on eBay's Gift Card policy, see the <a href="http://pages.ebay.com/help/policies/gift.html">Gift cards policy</a> Help page.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DigitalGoodDeliveryEnabled = null;
    /**
     * The EpidSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if one or more categories on an eBay site support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible
     * with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. <br/><br/> For more information on using an ePID to identify a compatible motorcycle or scooter through an
     * Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href=" https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name
     * ValueList</a> container.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EpidSupported = null;
    /**
     * The KTypeSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if one or more categories on an eBay site support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor
     * vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. <br/><br/> For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist
     * API call on the Germany site, see the documentation for the <a href=" https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name ValueList</a> container.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $KTypeSupported = null;
    /**
     * The ProductRequiredEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. No eBay categories require listings based on an eBay catalog product.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductRequiredEnabled = null;
    /**
     * The DomesticReturnsAcceptedValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for accepting or not accepting returns from domestic buyers. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to
     * <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType $DomesticReturnsAcceptedValues = null;
    /**
     * The InternationalReturnsAcceptedValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for accepting or not accepting returns from international buyers. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set
     * to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType $InternationalReturnsAcceptedValues = null;
    /**
     * The DomesticReturnsDurationValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for specifying the return period for returns from domestic buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item. <br><br> The
     * values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType $DomesticReturnsDurationValues = null;
    /**
     * The InternationalReturnsDurationValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for specifying the return period for returns from international buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item. <br><br>
     * The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType $InternationalReturnsDurationValues = null;
    /**
     * The DomesticReturnsShipmentPayeeValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for specifying who pays the return shipping cost for domestic returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is
     * set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType $DomesticReturnsShipmentPayeeValues = null;
    /**
     * The InternationalReturnsShipmentPayeeValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for specifying who pays the return shipping cost for international returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in
     * GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType $InternationalReturnsShipmentPayeeValues = null;
    /**
     * The DomesticRefundMethodValues
     * Meta information extracted from the WSDL
     * - documentation: In US, sellers can offer an item replacement in addition to offering money-back for domestic returns. This field returns the options a seller has for specifying how they will handle domestic returns. <br><br> The values returned in
     * this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $DomesticRefundMethodValues = null;
    /**
     * The InternationalRefundMethodValues
     * Meta information extracted from the WSDL
     * - documentation: In US, sellers can offer an item replacement in addition to offering money-back for international returns. This field returns the options a seller has for specifying how they will handle international returns. <br><br> The values
     * returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $InternationalRefundMethodValues = null;
    /**
     * The ReturnPolicyDescriptionEnabled
     * Meta information extracted from the WSDL
     * - documentation: In some EU countries, sellers are legally required to describe the return policy they offer. This field returns a flag that indicates whether or not the seller can specify their return-policy details in the associated marketplace.
     * <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReturnPolicyDescriptionEnabled = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SiteDefaultsType
     * @uses SiteDefaultsType::setListingDuration()
     * @uses SiteDefaultsType::setShippingTermsRequired()
     * @uses SiteDefaultsType::setBestOfferEnabled()
     * @uses SiteDefaultsType::setDutchBINEnabled()
     * @uses SiteDefaultsType::setUserConsentRequired()
     * @uses SiteDefaultsType::setHomePageFeaturedEnabled()
     * @uses SiteDefaultsType::setProPackEnabled()
     * @uses SiteDefaultsType::setBasicUpgradePackEnabled()
     * @uses SiteDefaultsType::setValuePackEnabled()
     * @uses SiteDefaultsType::setProPackPlusEnabled()
     * @uses SiteDefaultsType::setAdFormatEnabled()
     * @uses SiteDefaultsType::setBestOfferCounterEnabled()
     * @uses SiteDefaultsType::setBestOfferAutoDeclineEnabled()
     * @uses SiteDefaultsType::setLocalMarketSpecialitySubscription()
     * @uses SiteDefaultsType::setLocalMarketRegularSubscription()
     * @uses SiteDefaultsType::setLocalMarketPremiumSubscription()
     * @uses SiteDefaultsType::setLocalMarketNonSubscription()
     * @uses SiteDefaultsType::setExpressEnabled()
     * @uses SiteDefaultsType::setExpressPicturesRequired()
     * @uses SiteDefaultsType::setExpressConditionRequired()
     * @uses SiteDefaultsType::setMinimumReservePrice()
     * @uses SiteDefaultsType::setSellerContactDetailsEnabled()
     * @uses SiteDefaultsType::setTransactionConfirmationRequestEnabled()
     * @uses SiteDefaultsType::setStoreInventoryEnabled()
     * @uses SiteDefaultsType::setSkypeMeTransactionalEnabled()
     * @uses SiteDefaultsType::setSkypeMeNonTransactionalEnabled()
     * @uses SiteDefaultsType::setLocalListingDistancesRegular()
     * @uses SiteDefaultsType::setLocalListingDistancesSpecialty()
     * @uses SiteDefaultsType::setLocalListingDistancesNonSubscription()
     * @uses SiteDefaultsType::setClassifiedAdPaymentMethodEnabled()
     * @uses SiteDefaultsType::setClassifiedAdShippingMethodEnabled()
     * @uses SiteDefaultsType::setClassifiedAdBestOfferEnabled()
     * @uses SiteDefaultsType::setClassifiedAdCounterOfferEnabled()
     * @uses SiteDefaultsType::setClassifiedAdAutoDeclineEnabled()
     * @uses SiteDefaultsType::setClassifiedAdContactByPhoneEnabled()
     * @uses SiteDefaultsType::setClassifiedAdContactByEmailEnabled()
     * @uses SiteDefaultsType::setSafePaymentRequired()
     * @uses SiteDefaultsType::setClassifiedAdPayPerLeadEnabled()
     * @uses SiteDefaultsType::setItemSpecificsEnabled()
     * @uses SiteDefaultsType::setPaisaPayFullEscrowEnabled()
     * @uses SiteDefaultsType::setISBNIdentifierEnabled()
     * @uses SiteDefaultsType::setUPCIdentifierEnabled()
     * @uses SiteDefaultsType::setEANIdentifierEnabled()
     * @uses SiteDefaultsType::setBrandMPNIdentifierEnabled()
     * @uses SiteDefaultsType::setClassifiedAdAutoAcceptEnabled()
     * @uses SiteDefaultsType::setBestOfferAutoAcceptEnabled()
     * @uses SiteDefaultsType::setCrossBorderTradeNorthAmericaEnabled()
     * @uses SiteDefaultsType::setCrossBorderTradeGBEnabled()
     * @uses SiteDefaultsType::setCrossBorderTradeAustraliaEnabled()
     * @uses SiteDefaultsType::setPayPalBuyerProtectionEnabled()
     * @uses SiteDefaultsType::setBuyerGuaranteeEnabled()
     * @uses SiteDefaultsType::setINEscrowWorkflowTimeline()
     * @uses SiteDefaultsType::setCombinedFixedPriceTreatmentEnabled()
     * @uses SiteDefaultsType::setGalleryFeaturedDurations()
     * @uses SiteDefaultsType::setPayPalRequired()
     * @uses SiteDefaultsType::setEBayMotorsProAdFormatEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProContactByPhoneEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProPhoneCount()
     * @uses SiteDefaultsType::setEBayMotorsProContactByAddressEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProStreetCount()
     * @uses SiteDefaultsType::setEBayMotorsProCompanyNameEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProContactByEmailEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProBestOfferEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProAutoAcceptEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProAutoDeclineEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProPaymentMethodCheckOutEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProShippingMethodEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProCounterOfferEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProSellerContactDetailsEnabled()
     * @uses SiteDefaultsType::setLocalMarketAdFormatEnabled()
     * @uses SiteDefaultsType::setLocalMarketContactByPhoneEnabled()
     * @uses SiteDefaultsType::setLocalMarketPhoneCount()
     * @uses SiteDefaultsType::setLocalMarketContactByAddressEnabled()
     * @uses SiteDefaultsType::setLocalMarketStreetCount()
     * @uses SiteDefaultsType::setLocalMarketCompanyNameEnabled()
     * @uses SiteDefaultsType::setLocalMarketContactByEmailEnabled()
     * @uses SiteDefaultsType::setLocalMarketBestOfferEnabled()
     * @uses SiteDefaultsType::setLocalMarketAutoAcceptEnabled()
     * @uses SiteDefaultsType::setLocalMarketAutoDeclineEnabled()
     * @uses SiteDefaultsType::setLocalMarketPaymentMethodCheckOutEnabled()
     * @uses SiteDefaultsType::setLocalMarketShippingMethodEnabled()
     * @uses SiteDefaultsType::setLocalMarketCounterOfferEnabled()
     * @uses SiteDefaultsType::setLocalMarketSellerContactDetailsEnabled()
     * @uses SiteDefaultsType::setClassifiedAdPhoneCount()
     * @uses SiteDefaultsType::setClassifiedAdContactByAddressEnabled()
     * @uses SiteDefaultsType::setClassifiedAdStreetCount()
     * @uses SiteDefaultsType::setClassifiedAdCompanyNameEnabled()
     * @uses SiteDefaultsType::setSpecialitySubscription()
     * @uses SiteDefaultsType::setRegularSubscription()
     * @uses SiteDefaultsType::setPremiumSubscription()
     * @uses SiteDefaultsType::setNonSubscription()
     * @uses SiteDefaultsType::setPayPalRequiredForStoreOwner()
     * @uses SiteDefaultsType::setReviseQuantityAllowed()
     * @uses SiteDefaultsType::setRevisePriceAllowed()
     * @uses SiteDefaultsType::setStoreOwnerExtendedListingDurationsEnabled()
     * @uses SiteDefaultsType::setStoreOwnerExtendedListingDurations()
     * @uses SiteDefaultsType::setReturnPolicyEnabled()
     * @uses SiteDefaultsType::setHandlingTimeEnabled()
     * @uses SiteDefaultsType::setMaxFlatShippingCost()
     * @uses SiteDefaultsType::setMaxFlatShippingCostCBTExempt()
     * @uses SiteDefaultsType::setGroup1MaxFlatShippingCost()
     * @uses SiteDefaultsType::setGroup2MaxFlatShippingCost()
     * @uses SiteDefaultsType::setGroup3MaxFlatShippingCost()
     * @uses SiteDefaultsType::setPaymentMethod()
     * @uses SiteDefaultsType::setVariationsEnabled()
     * @uses SiteDefaultsType::setAttributeConversionEnabled()
     * @uses SiteDefaultsType::setFreeGalleryPlusEnabled()
     * @uses SiteDefaultsType::setFreePicturePackEnabled()
     * @uses SiteDefaultsType::setItemCompatibilityEnabled()
     * @uses SiteDefaultsType::setMinItemCompatibility()
     * @uses SiteDefaultsType::setMaxItemCompatibility()
     * @uses SiteDefaultsType::setConditionEnabled()
     * @uses SiteDefaultsType::setConditionValues()
     * @uses SiteDefaultsType::setSpecialFeatures()
     * @uses SiteDefaultsType::setValueCategory()
     * @uses SiteDefaultsType::setProductCreationEnabled()
     * @uses SiteDefaultsType::setEANEnabled()
     * @uses SiteDefaultsType::setISBNEnabled()
     * @uses SiteDefaultsType::setUPCEnabled()
     * @uses SiteDefaultsType::setMaxGranularFitmentCount()
     * @uses SiteDefaultsType::setCompatibleVehicleType()
     * @uses SiteDefaultsType::setPaymentOptionsGroup()
     * @uses SiteDefaultsType::setShippingProfileCategoryGroup()
     * @uses SiteDefaultsType::setPaymentProfileCategoryGroup()
     * @uses SiteDefaultsType::setReturnPolicyProfileCategoryGroup()
     * @uses SiteDefaultsType::setVINSupported()
     * @uses SiteDefaultsType::setVRMSupported()
     * @uses SiteDefaultsType::setSellerProvidedTitleSupported()
     * @uses SiteDefaultsType::setDepositSupported()
     * @uses SiteDefaultsType::setGlobalShippingEnabled()
     * @uses SiteDefaultsType::setAdditionalCompatibilityEnabled()
     * @uses SiteDefaultsType::setPickupDropOffEnabled()
     * @uses SiteDefaultsType::setDigitalGoodDeliveryEnabled()
     * @uses SiteDefaultsType::setEpidSupported()
     * @uses SiteDefaultsType::setKTypeSupported()
     * @uses SiteDefaultsType::setProductRequiredEnabled()
     * @uses SiteDefaultsType::setDomesticReturnsAcceptedValues()
     * @uses SiteDefaultsType::setInternationalReturnsAcceptedValues()
     * @uses SiteDefaultsType::setDomesticReturnsDurationValues()
     * @uses SiteDefaultsType::setInternationalReturnsDurationValues()
     * @uses SiteDefaultsType::setDomesticReturnsShipmentPayeeValues()
     * @uses SiteDefaultsType::setInternationalReturnsShipmentPayeeValues()
     * @uses SiteDefaultsType::setDomesticRefundMethodValues()
     * @uses SiteDefaultsType::setInternationalRefundMethodValues()
     * @uses SiteDefaultsType::setReturnPolicyDescriptionEnabled()
     * @uses SiteDefaultsType::setAny()
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
     * @param string $localListingDistancesRegular
     * @param string $localListingDistancesSpecialty
     * @param string $localListingDistancesNonSubscription
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
     * @param bool $iSBNIdentifierEnabled
     * @param bool $uPCIdentifierEnabled
     * @param bool $eANIdentifierEnabled
     * @param bool $brandMPNIdentifierEnabled
     * @param bool $classifiedAdAutoAcceptEnabled
     * @param bool $bestOfferAutoAcceptEnabled
     * @param bool $crossBorderTradeNorthAmericaEnabled
     * @param bool $crossBorderTradeGBEnabled
     * @param bool $crossBorderTradeAustraliaEnabled
     * @param bool $payPalBuyerProtectionEnabled
     * @param bool $buyerGuaranteeEnabled
     * @param string $iNEscrowWorkflowTimeline
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
     * @param bool $payPalRequiredForStoreOwner
     * @param bool $reviseQuantityAllowed
     * @param bool $revisePriceAllowed
     * @param bool $storeOwnerExtendedListingDurationsEnabled
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations
     * @param bool $returnPolicyEnabled
     * @param bool $handlingTimeEnabled
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxFlatShippingCost
     * @param bool $maxFlatShippingCostCBTExempt
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
     * @param \macropage\ebaysdk\trading\StructType\ConditionValuesType $specialFeatures
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $listingDuration = null, ?bool $shippingTermsRequired = null, ?bool $bestOfferEnabled = null, ?bool $dutchBINEnabled = null, ?bool $userConsentRequired = null, ?bool $homePageFeaturedEnabled = null, ?bool $proPackEnabled = null, ?bool $basicUpgradePackEnabled = null, ?bool $valuePackEnabled = null, ?bool $proPackPlusEnabled = null, ?string $adFormatEnabled = null, ?bool $bestOfferCounterEnabled = null, ?bool $bestOfferAutoDeclineEnabled = null, ?bool $localMarketSpecialitySubscription = null, ?bool $localMarketRegularSubscription = null, ?bool $localMarketPremiumSubscription = null, ?bool $localMarketNonSubscription = null, ?bool $expressEnabled = null, ?bool $expressPicturesRequired = null, ?bool $expressConditionRequired = null, ?float $minimumReservePrice = null, ?bool $sellerContactDetailsEnabled = null, ?bool $transactionConfirmationRequestEnabled = null, ?bool $storeInventoryEnabled = null, ?bool $skypeMeTransactionalEnabled = null, ?bool $skypeMeNonTransactionalEnabled = null, ?string $localListingDistancesRegular = null, ?string $localListingDistancesSpecialty = null, ?string $localListingDistancesNonSubscription = null, ?string $classifiedAdPaymentMethodEnabled = null, ?bool $classifiedAdShippingMethodEnabled = null, ?string $classifiedAdBestOfferEnabled = null, ?bool $classifiedAdCounterOfferEnabled = null, ?bool $classifiedAdAutoDeclineEnabled = null, ?bool $classifiedAdContactByPhoneEnabled = null, ?bool $classifiedAdContactByEmailEnabled = null, ?bool $safePaymentRequired = null, ?bool $classifiedAdPayPerLeadEnabled = null, ?string $itemSpecificsEnabled = null, ?bool $paisaPayFullEscrowEnabled = null, ?bool $iSBNIdentifierEnabled = null, ?bool $uPCIdentifierEnabled = null, ?bool $eANIdentifierEnabled = null, ?bool $brandMPNIdentifierEnabled = null, ?bool $classifiedAdAutoAcceptEnabled = null, ?bool $bestOfferAutoAcceptEnabled = null, ?bool $crossBorderTradeNorthAmericaEnabled = null, ?bool $crossBorderTradeGBEnabled = null, ?bool $crossBorderTradeAustraliaEnabled = null, ?bool $payPalBuyerProtectionEnabled = null, ?bool $buyerGuaranteeEnabled = null, ?string $iNEscrowWorkflowTimeline = null, ?bool $combinedFixedPriceTreatmentEnabled = null, ?\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations = null, ?bool $payPalRequired = null, ?string $eBayMotorsProAdFormatEnabled = null, ?bool $eBayMotorsProContactByPhoneEnabled = null, ?int $eBayMotorsProPhoneCount = null, ?bool $eBayMotorsProContactByAddressEnabled = null, ?int $eBayMotorsProStreetCount = null, ?bool $eBayMotorsProCompanyNameEnabled = null, ?bool $eBayMotorsProContactByEmailEnabled = null, ?string $eBayMotorsProBestOfferEnabled = null, ?bool $eBayMotorsProAutoAcceptEnabled = null, ?bool $eBayMotorsProAutoDeclineEnabled = null, ?string $eBayMotorsProPaymentMethodCheckOutEnabled = null, ?bool $eBayMotorsProShippingMethodEnabled = null, ?bool $eBayMotorsProCounterOfferEnabled = null, ?bool $eBayMotorsProSellerContactDetailsEnabled = null, ?string $localMarketAdFormatEnabled = null, ?bool $localMarketContactByPhoneEnabled = null, ?int $localMarketPhoneCount = null, ?bool $localMarketContactByAddressEnabled = null, ?int $localMarketStreetCount = null, ?bool $localMarketCompanyNameEnabled = null, ?bool $localMarketContactByEmailEnabled = null, ?string $localMarketBestOfferEnabled = null, ?bool $localMarketAutoAcceptEnabled = null, ?bool $localMarketAutoDeclineEnabled = null, ?string $localMarketPaymentMethodCheckOutEnabled = null, ?bool $localMarketShippingMethodEnabled = null, ?bool $localMarketCounterOfferEnabled = null, ?bool $localMarketSellerContactDetailsEnabled = null, ?int $classifiedAdPhoneCount = null, ?bool $classifiedAdContactByAddressEnabled = null, ?int $classifiedAdStreetCount = null, ?bool $classifiedAdCompanyNameEnabled = null, ?string $specialitySubscription = null, ?string $regularSubscription = null, ?string $premiumSubscription = null, ?string $nonSubscription = null, ?bool $payPalRequiredForStoreOwner = null, ?bool $reviseQuantityAllowed = null, ?bool $revisePriceAllowed = null, ?bool $storeOwnerExtendedListingDurationsEnabled = null, ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations = null, ?bool $returnPolicyEnabled = null, ?bool $handlingTimeEnabled = null, ?\macropage\ebaysdk\trading\StructType\AmountType $maxFlatShippingCost = null, ?bool $maxFlatShippingCostCBTExempt = null, ?\macropage\ebaysdk\trading\StructType\AmountType $group1MaxFlatShippingCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $group2MaxFlatShippingCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $group3MaxFlatShippingCost = null, ?array $paymentMethod = null, ?bool $variationsEnabled = null, ?string $attributeConversionEnabled = null, ?bool $freeGalleryPlusEnabled = null, ?bool $freePicturePackEnabled = null, ?string $itemCompatibilityEnabled = null, ?int $minItemCompatibility = null, ?int $maxItemCompatibility = null, ?string $conditionEnabled = null, ?\macropage\ebaysdk\trading\StructType\ConditionValuesType $conditionValues = null, ?\macropage\ebaysdk\trading\StructType\ConditionValuesType $specialFeatures = null, ?bool $valueCategory = null, ?string $productCreationEnabled = null, ?string $eANEnabled = null, ?string $iSBNEnabled = null, ?string $uPCEnabled = null, ?int $maxGranularFitmentCount = null, ?string $compatibleVehicleType = null, ?string $paymentOptionsGroup = null, ?string $shippingProfileCategoryGroup = null, ?string $paymentProfileCategoryGroup = null, ?string $returnPolicyProfileCategoryGroup = null, ?bool $vINSupported = null, ?bool $vRMSupported = null, ?bool $sellerProvidedTitleSupported = null, ?bool $depositSupported = null, ?bool $globalShippingEnabled = null, ?bool $additionalCompatibilityEnabled = null, ?bool $pickupDropOffEnabled = null, ?bool $digitalGoodDeliveryEnabled = null, ?bool $epidSupported = null, ?bool $kTypeSupported = null, ?string $productRequiredEnabled = null, ?\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues = null, ?\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues = null, ?\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues = null, ?\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues = null, ?\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues = null, ?\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues = null, ?\macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null, ?\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null, ?bool $returnPolicyDescriptionEnabled = null, $any = null)
    {
        $this
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
            ->setLocalListingDistancesRegular($localListingDistancesRegular)
            ->setLocalListingDistancesSpecialty($localListingDistancesSpecialty)
            ->setLocalListingDistancesNonSubscription($localListingDistancesNonSubscription)
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
            ->setISBNIdentifierEnabled($iSBNIdentifierEnabled)
            ->setUPCIdentifierEnabled($uPCIdentifierEnabled)
            ->setEANIdentifierEnabled($eANIdentifierEnabled)
            ->setBrandMPNIdentifierEnabled($brandMPNIdentifierEnabled)
            ->setClassifiedAdAutoAcceptEnabled($classifiedAdAutoAcceptEnabled)
            ->setBestOfferAutoAcceptEnabled($bestOfferAutoAcceptEnabled)
            ->setCrossBorderTradeNorthAmericaEnabled($crossBorderTradeNorthAmericaEnabled)
            ->setCrossBorderTradeGBEnabled($crossBorderTradeGBEnabled)
            ->setCrossBorderTradeAustraliaEnabled($crossBorderTradeAustraliaEnabled)
            ->setPayPalBuyerProtectionEnabled($payPalBuyerProtectionEnabled)
            ->setBuyerGuaranteeEnabled($buyerGuaranteeEnabled)
            ->setINEscrowWorkflowTimeline($iNEscrowWorkflowTimeline)
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
            ->setPayPalRequiredForStoreOwner($payPalRequiredForStoreOwner)
            ->setReviseQuantityAllowed($reviseQuantityAllowed)
            ->setRevisePriceAllowed($revisePriceAllowed)
            ->setStoreOwnerExtendedListingDurationsEnabled($storeOwnerExtendedListingDurationsEnabled)
            ->setStoreOwnerExtendedListingDurations($storeOwnerExtendedListingDurations)
            ->setReturnPolicyEnabled($returnPolicyEnabled)
            ->setHandlingTimeEnabled($handlingTimeEnabled)
            ->setMaxFlatShippingCost($maxFlatShippingCost)
            ->setMaxFlatShippingCostCBTExempt($maxFlatShippingCostCBTExempt)
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
            ->setSpecialFeatures($specialFeatures)
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
            ->setReturnPolicyDescriptionEnabled($returnPolicyDescriptionEnabled)
            ->setAny($any);
    }
    /**
     * Get ListingDuration value
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType[]
     */
    public function getListingDuration(): ?array
    {
        return $this->ListingDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setListingDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingDurationForArrayConstraintsFromSetListingDuration(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteDefaultsTypeListingDurationItem) {
            // validation for constraint: itemType
            if (!$siteDefaultsTypeListingDurationItem instanceof \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType) {
                $invalidValues[] = is_object($siteDefaultsTypeListingDurationItem) ? get_class($siteDefaultsTypeListingDurationItem) : sprintf('%s(%s)', gettype($siteDefaultsTypeListingDurationItem), var_export($siteDefaultsTypeListingDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ListingDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType[] $listingDuration
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setListingDuration(?array $listingDuration = null): self
    {
        // validation for constraint: array
        if ('' !== ($listingDurationArrayErrorMessage = self::validateListingDurationForArrayConstraintsFromSetListingDuration($listingDuration))) {
            throw new InvalidArgumentException($listingDurationArrayErrorMessage, __LINE__);
        }
        $this->ListingDuration = $listingDuration;
        
        return $this;
    }
    /**
     * Add item to ListingDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType $item
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function addToListingDuration(\macropage\ebaysdk\trading\StructType\ListingDurationReferenceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType) {
            throw new InvalidArgumentException(sprintf('The ListingDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListingDuration[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingTermsRequired value
     * @return bool|null
     */
    public function getShippingTermsRequired(): ?bool
    {
        return $this->ShippingTermsRequired;
    }
    /**
     * Set ShippingTermsRequired value
     * @param bool $shippingTermsRequired
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setShippingTermsRequired(?bool $shippingTermsRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shippingTermsRequired) && !is_bool($shippingTermsRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingTermsRequired, true), gettype($shippingTermsRequired)), __LINE__);
        }
        $this->ShippingTermsRequired = $shippingTermsRequired;
        
        return $this;
    }
    /**
     * Get BestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled(): ?bool
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setBestOfferEnabled(?bool $bestOfferEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferEnabled, true), gettype($bestOfferEnabled)), __LINE__);
        }
        $this->BestOfferEnabled = $bestOfferEnabled;
        
        return $this;
    }
    /**
     * Get DutchBINEnabled value
     * @return bool|null
     */
    public function getDutchBINEnabled(): ?bool
    {
        return $this->DutchBINEnabled;
    }
    /**
     * Set DutchBINEnabled value
     * @param bool $dutchBINEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setDutchBINEnabled(?bool $dutchBINEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dutchBINEnabled) && !is_bool($dutchBINEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dutchBINEnabled, true), gettype($dutchBINEnabled)), __LINE__);
        }
        $this->DutchBINEnabled = $dutchBINEnabled;
        
        return $this;
    }
    /**
     * Get UserConsentRequired value
     * @return bool|null
     */
    public function getUserConsentRequired(): ?bool
    {
        return $this->UserConsentRequired;
    }
    /**
     * Set UserConsentRequired value
     * @param bool $userConsentRequired
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setUserConsentRequired(?bool $userConsentRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($userConsentRequired) && !is_bool($userConsentRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userConsentRequired, true), gettype($userConsentRequired)), __LINE__);
        }
        $this->UserConsentRequired = $userConsentRequired;
        
        return $this;
    }
    /**
     * Get HomePageFeaturedEnabled value
     * @return bool|null
     */
    public function getHomePageFeaturedEnabled(): ?bool
    {
        return $this->HomePageFeaturedEnabled;
    }
    /**
     * Set HomePageFeaturedEnabled value
     * @param bool $homePageFeaturedEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setHomePageFeaturedEnabled(?bool $homePageFeaturedEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($homePageFeaturedEnabled) && !is_bool($homePageFeaturedEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($homePageFeaturedEnabled, true), gettype($homePageFeaturedEnabled)), __LINE__);
        }
        $this->HomePageFeaturedEnabled = $homePageFeaturedEnabled;
        
        return $this;
    }
    /**
     * Get ProPackEnabled value
     * @return bool|null
     */
    public function getProPackEnabled(): ?bool
    {
        return $this->ProPackEnabled;
    }
    /**
     * Set ProPackEnabled value
     * @param bool $proPackEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setProPackEnabled(?bool $proPackEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($proPackEnabled) && !is_bool($proPackEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($proPackEnabled, true), gettype($proPackEnabled)), __LINE__);
        }
        $this->ProPackEnabled = $proPackEnabled;
        
        return $this;
    }
    /**
     * Get BasicUpgradePackEnabled value
     * @return bool|null
     */
    public function getBasicUpgradePackEnabled(): ?bool
    {
        return $this->BasicUpgradePackEnabled;
    }
    /**
     * Set BasicUpgradePackEnabled value
     * @param bool $basicUpgradePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setBasicUpgradePackEnabled(?bool $basicUpgradePackEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($basicUpgradePackEnabled) && !is_bool($basicUpgradePackEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($basicUpgradePackEnabled, true), gettype($basicUpgradePackEnabled)), __LINE__);
        }
        $this->BasicUpgradePackEnabled = $basicUpgradePackEnabled;
        
        return $this;
    }
    /**
     * Get ValuePackEnabled value
     * @return bool|null
     */
    public function getValuePackEnabled(): ?bool
    {
        return $this->ValuePackEnabled;
    }
    /**
     * Set ValuePackEnabled value
     * @param bool $valuePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setValuePackEnabled(?bool $valuePackEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valuePackEnabled) && !is_bool($valuePackEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valuePackEnabled, true), gettype($valuePackEnabled)), __LINE__);
        }
        $this->ValuePackEnabled = $valuePackEnabled;
        
        return $this;
    }
    /**
     * Get ProPackPlusEnabled value
     * @return bool|null
     */
    public function getProPackPlusEnabled(): ?bool
    {
        return $this->ProPackPlusEnabled;
    }
    /**
     * Set ProPackPlusEnabled value
     * @param bool $proPackPlusEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setProPackPlusEnabled(?bool $proPackPlusEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($proPackPlusEnabled) && !is_bool($proPackPlusEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($proPackPlusEnabled, true), gettype($proPackPlusEnabled)), __LINE__);
        }
        $this->ProPackPlusEnabled = $proPackPlusEnabled;
        
        return $this;
    }
    /**
     * Get AdFormatEnabled value
     * @return string|null
     */
    public function getAdFormatEnabled(): ?string
    {
        return $this->AdFormatEnabled;
    }
    /**
     * Set AdFormatEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $adFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setAdFormatEnabled(?string $adFormatEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid($adFormatEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType', is_array($adFormatEnabled) ? implode(', ', $adFormatEnabled) : var_export($adFormatEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->AdFormatEnabled = $adFormatEnabled;
        
        return $this;
    }
    /**
     * Get BestOfferCounterEnabled value
     * @return bool|null
     */
    public function getBestOfferCounterEnabled(): ?bool
    {
        return $this->BestOfferCounterEnabled;
    }
    /**
     * Set BestOfferCounterEnabled value
     * @param bool $bestOfferCounterEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setBestOfferCounterEnabled(?bool $bestOfferCounterEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferCounterEnabled) && !is_bool($bestOfferCounterEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferCounterEnabled, true), gettype($bestOfferCounterEnabled)), __LINE__);
        }
        $this->BestOfferCounterEnabled = $bestOfferCounterEnabled;
        
        return $this;
    }
    /**
     * Get BestOfferAutoDeclineEnabled value
     * @return bool|null
     */
    public function getBestOfferAutoDeclineEnabled(): ?bool
    {
        return $this->BestOfferAutoDeclineEnabled;
    }
    /**
     * Set BestOfferAutoDeclineEnabled value
     * @param bool $bestOfferAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setBestOfferAutoDeclineEnabled(?bool $bestOfferAutoDeclineEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferAutoDeclineEnabled) && !is_bool($bestOfferAutoDeclineEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferAutoDeclineEnabled, true), gettype($bestOfferAutoDeclineEnabled)), __LINE__);
        }
        $this->BestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketSpecialitySubscription value
     * @return bool|null
     */
    public function getLocalMarketSpecialitySubscription(): ?bool
    {
        return $this->LocalMarketSpecialitySubscription;
    }
    /**
     * Set LocalMarketSpecialitySubscription value
     * @param bool $localMarketSpecialitySubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketSpecialitySubscription(?bool $localMarketSpecialitySubscription = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketSpecialitySubscription) && !is_bool($localMarketSpecialitySubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketSpecialitySubscription, true), gettype($localMarketSpecialitySubscription)), __LINE__);
        }
        $this->LocalMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        
        return $this;
    }
    /**
     * Get LocalMarketRegularSubscription value
     * @return bool|null
     */
    public function getLocalMarketRegularSubscription(): ?bool
    {
        return $this->LocalMarketRegularSubscription;
    }
    /**
     * Set LocalMarketRegularSubscription value
     * @param bool $localMarketRegularSubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketRegularSubscription(?bool $localMarketRegularSubscription = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketRegularSubscription) && !is_bool($localMarketRegularSubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketRegularSubscription, true), gettype($localMarketRegularSubscription)), __LINE__);
        }
        $this->LocalMarketRegularSubscription = $localMarketRegularSubscription;
        
        return $this;
    }
    /**
     * Get LocalMarketPremiumSubscription value
     * @return bool|null
     */
    public function getLocalMarketPremiumSubscription(): ?bool
    {
        return $this->LocalMarketPremiumSubscription;
    }
    /**
     * Set LocalMarketPremiumSubscription value
     * @param bool $localMarketPremiumSubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketPremiumSubscription(?bool $localMarketPremiumSubscription = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketPremiumSubscription) && !is_bool($localMarketPremiumSubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketPremiumSubscription, true), gettype($localMarketPremiumSubscription)), __LINE__);
        }
        $this->LocalMarketPremiumSubscription = $localMarketPremiumSubscription;
        
        return $this;
    }
    /**
     * Get LocalMarketNonSubscription value
     * @return bool|null
     */
    public function getLocalMarketNonSubscription(): ?bool
    {
        return $this->LocalMarketNonSubscription;
    }
    /**
     * Set LocalMarketNonSubscription value
     * @param bool $localMarketNonSubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketNonSubscription(?bool $localMarketNonSubscription = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketNonSubscription) && !is_bool($localMarketNonSubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketNonSubscription, true), gettype($localMarketNonSubscription)), __LINE__);
        }
        $this->LocalMarketNonSubscription = $localMarketNonSubscription;
        
        return $this;
    }
    /**
     * Get ExpressEnabled value
     * @return bool|null
     */
    public function getExpressEnabled(): ?bool
    {
        return $this->ExpressEnabled;
    }
    /**
     * Set ExpressEnabled value
     * @param bool $expressEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setExpressEnabled(?bool $expressEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expressEnabled) && !is_bool($expressEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressEnabled, true), gettype($expressEnabled)), __LINE__);
        }
        $this->ExpressEnabled = $expressEnabled;
        
        return $this;
    }
    /**
     * Get ExpressPicturesRequired value
     * @return bool|null
     */
    public function getExpressPicturesRequired(): ?bool
    {
        return $this->ExpressPicturesRequired;
    }
    /**
     * Set ExpressPicturesRequired value
     * @param bool $expressPicturesRequired
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setExpressPicturesRequired(?bool $expressPicturesRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expressPicturesRequired) && !is_bool($expressPicturesRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressPicturesRequired, true), gettype($expressPicturesRequired)), __LINE__);
        }
        $this->ExpressPicturesRequired = $expressPicturesRequired;
        
        return $this;
    }
    /**
     * Get ExpressConditionRequired value
     * @return bool|null
     */
    public function getExpressConditionRequired(): ?bool
    {
        return $this->ExpressConditionRequired;
    }
    /**
     * Set ExpressConditionRequired value
     * @param bool $expressConditionRequired
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setExpressConditionRequired(?bool $expressConditionRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expressConditionRequired) && !is_bool($expressConditionRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressConditionRequired, true), gettype($expressConditionRequired)), __LINE__);
        }
        $this->ExpressConditionRequired = $expressConditionRequired;
        
        return $this;
    }
    /**
     * Get MinimumReservePrice value
     * @return float|null
     */
    public function getMinimumReservePrice(): ?float
    {
        return $this->MinimumReservePrice;
    }
    /**
     * Set MinimumReservePrice value
     * @param float $minimumReservePrice
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setMinimumReservePrice(?float $minimumReservePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($minimumReservePrice) && !(is_float($minimumReservePrice) || is_numeric($minimumReservePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimumReservePrice, true), gettype($minimumReservePrice)), __LINE__);
        }
        $this->MinimumReservePrice = $minimumReservePrice;
        
        return $this;
    }
    /**
     * Get SellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getSellerContactDetailsEnabled(): ?bool
    {
        return $this->SellerContactDetailsEnabled;
    }
    /**
     * Set SellerContactDetailsEnabled value
     * @param bool $sellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setSellerContactDetailsEnabled(?bool $sellerContactDetailsEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sellerContactDetailsEnabled) && !is_bool($sellerContactDetailsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerContactDetailsEnabled, true), gettype($sellerContactDetailsEnabled)), __LINE__);
        }
        $this->SellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        
        return $this;
    }
    /**
     * Get TransactionConfirmationRequestEnabled value
     * @return bool|null
     */
    public function getTransactionConfirmationRequestEnabled(): ?bool
    {
        return $this->TransactionConfirmationRequestEnabled;
    }
    /**
     * Set TransactionConfirmationRequestEnabled value
     * @param bool $transactionConfirmationRequestEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setTransactionConfirmationRequestEnabled(?bool $transactionConfirmationRequestEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($transactionConfirmationRequestEnabled) && !is_bool($transactionConfirmationRequestEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transactionConfirmationRequestEnabled, true), gettype($transactionConfirmationRequestEnabled)), __LINE__);
        }
        $this->TransactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        
        return $this;
    }
    /**
     * Get StoreInventoryEnabled value
     * @return bool|null
     */
    public function getStoreInventoryEnabled(): ?bool
    {
        return $this->StoreInventoryEnabled;
    }
    /**
     * Set StoreInventoryEnabled value
     * @param bool $storeInventoryEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setStoreInventoryEnabled(?bool $storeInventoryEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($storeInventoryEnabled) && !is_bool($storeInventoryEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($storeInventoryEnabled, true), gettype($storeInventoryEnabled)), __LINE__);
        }
        $this->StoreInventoryEnabled = $storeInventoryEnabled;
        
        return $this;
    }
    /**
     * Get SkypeMeTransactionalEnabled value
     * @return bool|null
     */
    public function getSkypeMeTransactionalEnabled(): ?bool
    {
        return $this->SkypeMeTransactionalEnabled;
    }
    /**
     * Set SkypeMeTransactionalEnabled value
     * @param bool $skypeMeTransactionalEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setSkypeMeTransactionalEnabled(?bool $skypeMeTransactionalEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($skypeMeTransactionalEnabled) && !is_bool($skypeMeTransactionalEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skypeMeTransactionalEnabled, true), gettype($skypeMeTransactionalEnabled)), __LINE__);
        }
        $this->SkypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        
        return $this;
    }
    /**
     * Get SkypeMeNonTransactionalEnabled value
     * @return bool|null
     */
    public function getSkypeMeNonTransactionalEnabled(): ?bool
    {
        return $this->SkypeMeNonTransactionalEnabled;
    }
    /**
     * Set SkypeMeNonTransactionalEnabled value
     * @param bool $skypeMeNonTransactionalEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setSkypeMeNonTransactionalEnabled(?bool $skypeMeNonTransactionalEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($skypeMeNonTransactionalEnabled) && !is_bool($skypeMeNonTransactionalEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skypeMeNonTransactionalEnabled, true), gettype($skypeMeNonTransactionalEnabled)), __LINE__);
        }
        $this->SkypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        
        return $this;
    }
    /**
     * Get LocalListingDistancesRegular value
     * @return string|null
     */
    public function getLocalListingDistancesRegular(): ?string
    {
        return $this->LocalListingDistancesRegular;
    }
    /**
     * Set LocalListingDistancesRegular value
     * @param string $localListingDistancesRegular
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalListingDistancesRegular(?string $localListingDistancesRegular = null): self
    {
        // validation for constraint: string
        if (!is_null($localListingDistancesRegular) && !is_string($localListingDistancesRegular)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localListingDistancesRegular, true), gettype($localListingDistancesRegular)), __LINE__);
        }
        $this->LocalListingDistancesRegular = $localListingDistancesRegular;
        
        return $this;
    }
    /**
     * Get LocalListingDistancesSpecialty value
     * @return string|null
     */
    public function getLocalListingDistancesSpecialty(): ?string
    {
        return $this->LocalListingDistancesSpecialty;
    }
    /**
     * Set LocalListingDistancesSpecialty value
     * @param string $localListingDistancesSpecialty
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalListingDistancesSpecialty(?string $localListingDistancesSpecialty = null): self
    {
        // validation for constraint: string
        if (!is_null($localListingDistancesSpecialty) && !is_string($localListingDistancesSpecialty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localListingDistancesSpecialty, true), gettype($localListingDistancesSpecialty)), __LINE__);
        }
        $this->LocalListingDistancesSpecialty = $localListingDistancesSpecialty;
        
        return $this;
    }
    /**
     * Get LocalListingDistancesNonSubscription value
     * @return string|null
     */
    public function getLocalListingDistancesNonSubscription(): ?string
    {
        return $this->LocalListingDistancesNonSubscription;
    }
    /**
     * Set LocalListingDistancesNonSubscription value
     * @param string $localListingDistancesNonSubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalListingDistancesNonSubscription(?string $localListingDistancesNonSubscription = null): self
    {
        // validation for constraint: string
        if (!is_null($localListingDistancesNonSubscription) && !is_string($localListingDistancesNonSubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localListingDistancesNonSubscription, true), gettype($localListingDistancesNonSubscription)), __LINE__);
        }
        $this->LocalListingDistancesNonSubscription = $localListingDistancesNonSubscription;
        
        return $this;
    }
    /**
     * Get ClassifiedAdPaymentMethodEnabled value
     * @return string|null
     */
    public function getClassifiedAdPaymentMethodEnabled(): ?string
    {
        return $this->ClassifiedAdPaymentMethodEnabled;
    }
    /**
     * Set ClassifiedAdPaymentMethodEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $classifiedAdPaymentMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdPaymentMethodEnabled(?string $classifiedAdPaymentMethodEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($classifiedAdPaymentMethodEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType', is_array($classifiedAdPaymentMethodEnabled) ? implode(', ', $classifiedAdPaymentMethodEnabled) : var_export($classifiedAdPaymentMethodEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ClassifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdShippingMethodEnabled value
     * @return bool|null
     */
    public function getClassifiedAdShippingMethodEnabled(): ?bool
    {
        return $this->ClassifiedAdShippingMethodEnabled;
    }
    /**
     * Set ClassifiedAdShippingMethodEnabled value
     * @param bool $classifiedAdShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdShippingMethodEnabled(?bool $classifiedAdShippingMethodEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdShippingMethodEnabled) && !is_bool($classifiedAdShippingMethodEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdShippingMethodEnabled, true), gettype($classifiedAdShippingMethodEnabled)), __LINE__);
        }
        $this->ClassifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdBestOfferEnabled value
     * @return string|null
     */
    public function getClassifiedAdBestOfferEnabled(): ?string
    {
        return $this->ClassifiedAdBestOfferEnabled;
    }
    /**
     * Set ClassifiedAdBestOfferEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $classifiedAdBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdBestOfferEnabled(?string $classifiedAdBestOfferEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($classifiedAdBestOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType', is_array($classifiedAdBestOfferEnabled) ? implode(', ', $classifiedAdBestOfferEnabled) : var_export($classifiedAdBestOfferEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ClassifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdCounterOfferEnabled value
     * @return bool|null
     */
    public function getClassifiedAdCounterOfferEnabled(): ?bool
    {
        return $this->ClassifiedAdCounterOfferEnabled;
    }
    /**
     * Set ClassifiedAdCounterOfferEnabled value
     * @param bool $classifiedAdCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdCounterOfferEnabled(?bool $classifiedAdCounterOfferEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdCounterOfferEnabled) && !is_bool($classifiedAdCounterOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdCounterOfferEnabled, true), gettype($classifiedAdCounterOfferEnabled)), __LINE__);
        }
        $this->ClassifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdAutoDeclineEnabled value
     * @return bool|null
     */
    public function getClassifiedAdAutoDeclineEnabled(): ?bool
    {
        return $this->ClassifiedAdAutoDeclineEnabled;
    }
    /**
     * Set ClassifiedAdAutoDeclineEnabled value
     * @param bool $classifiedAdAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdAutoDeclineEnabled(?bool $classifiedAdAutoDeclineEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdAutoDeclineEnabled) && !is_bool($classifiedAdAutoDeclineEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdAutoDeclineEnabled, true), gettype($classifiedAdAutoDeclineEnabled)), __LINE__);
        }
        $this->ClassifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdContactByPhoneEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByPhoneEnabled(): ?bool
    {
        return $this->ClassifiedAdContactByPhoneEnabled;
    }
    /**
     * Set ClassifiedAdContactByPhoneEnabled value
     * @param bool $classifiedAdContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdContactByPhoneEnabled(?bool $classifiedAdContactByPhoneEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByPhoneEnabled) && !is_bool($classifiedAdContactByPhoneEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdContactByPhoneEnabled, true), gettype($classifiedAdContactByPhoneEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByEmailEnabled(): ?bool
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param bool $classifiedAdContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdContactByEmailEnabled(?bool $classifiedAdContactByEmailEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByEmailEnabled) && !is_bool($classifiedAdContactByEmailEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdContactByEmailEnabled, true), gettype($classifiedAdContactByEmailEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        
        return $this;
    }
    /**
     * Get SafePaymentRequired value
     * @return bool|null
     */
    public function getSafePaymentRequired(): ?bool
    {
        return $this->SafePaymentRequired;
    }
    /**
     * Set SafePaymentRequired value
     * @param bool $safePaymentRequired
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setSafePaymentRequired(?bool $safePaymentRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($safePaymentRequired) && !is_bool($safePaymentRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($safePaymentRequired, true), gettype($safePaymentRequired)), __LINE__);
        }
        $this->SafePaymentRequired = $safePaymentRequired;
        
        return $this;
    }
    /**
     * Get ClassifiedAdPayPerLeadEnabled value
     * @return bool|null
     */
    public function getClassifiedAdPayPerLeadEnabled(): ?bool
    {
        return $this->ClassifiedAdPayPerLeadEnabled;
    }
    /**
     * Set ClassifiedAdPayPerLeadEnabled value
     * @param bool $classifiedAdPayPerLeadEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdPayPerLeadEnabled(?bool $classifiedAdPayPerLeadEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdPayPerLeadEnabled) && !is_bool($classifiedAdPayPerLeadEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdPayPerLeadEnabled, true), gettype($classifiedAdPayPerLeadEnabled)), __LINE__);
        }
        $this->ClassifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        
        return $this;
    }
    /**
     * Get ItemSpecificsEnabled value
     * @return string|null
     */
    public function getItemSpecificsEnabled(): ?string
    {
        return $this->ItemSpecificsEnabled;
    }
    /**
     * Set ItemSpecificsEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemSpecificsEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setItemSpecificsEnabled(?string $itemSpecificsEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType::valueIsValid($itemSpecificsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType', is_array($itemSpecificsEnabled) ? implode(', ', $itemSpecificsEnabled) : var_export($itemSpecificsEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSpecificsEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ItemSpecificsEnabled = $itemSpecificsEnabled;
        
        return $this;
    }
    /**
     * Get PaisaPayFullEscrowEnabled value
     * @return bool|null
     */
    public function getPaisaPayFullEscrowEnabled(): ?bool
    {
        return $this->PaisaPayFullEscrowEnabled;
    }
    /**
     * Set PaisaPayFullEscrowEnabled value
     * @param bool $paisaPayFullEscrowEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPaisaPayFullEscrowEnabled(?bool $paisaPayFullEscrowEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paisaPayFullEscrowEnabled) && !is_bool($paisaPayFullEscrowEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paisaPayFullEscrowEnabled, true), gettype($paisaPayFullEscrowEnabled)), __LINE__);
        }
        $this->PaisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        
        return $this;
    }
    /**
     * Get ISBNIdentifierEnabled value
     * @return bool|null
     */
    public function getISBNIdentifierEnabled(): ?bool
    {
        return $this->ISBNIdentifierEnabled;
    }
    /**
     * Set ISBNIdentifierEnabled value
     * @param bool $iSBNIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setISBNIdentifierEnabled(?bool $iSBNIdentifierEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($iSBNIdentifierEnabled) && !is_bool($iSBNIdentifierEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($iSBNIdentifierEnabled, true), gettype($iSBNIdentifierEnabled)), __LINE__);
        }
        $this->ISBNIdentifierEnabled = $iSBNIdentifierEnabled;
        
        return $this;
    }
    /**
     * Get UPCIdentifierEnabled value
     * @return bool|null
     */
    public function getUPCIdentifierEnabled(): ?bool
    {
        return $this->UPCIdentifierEnabled;
    }
    /**
     * Set UPCIdentifierEnabled value
     * @param bool $uPCIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setUPCIdentifierEnabled(?bool $uPCIdentifierEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($uPCIdentifierEnabled) && !is_bool($uPCIdentifierEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($uPCIdentifierEnabled, true), gettype($uPCIdentifierEnabled)), __LINE__);
        }
        $this->UPCIdentifierEnabled = $uPCIdentifierEnabled;
        
        return $this;
    }
    /**
     * Get EANIdentifierEnabled value
     * @return bool|null
     */
    public function getEANIdentifierEnabled(): ?bool
    {
        return $this->EANIdentifierEnabled;
    }
    /**
     * Set EANIdentifierEnabled value
     * @param bool $eANIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEANIdentifierEnabled(?bool $eANIdentifierEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eANIdentifierEnabled) && !is_bool($eANIdentifierEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eANIdentifierEnabled, true), gettype($eANIdentifierEnabled)), __LINE__);
        }
        $this->EANIdentifierEnabled = $eANIdentifierEnabled;
        
        return $this;
    }
    /**
     * Get BrandMPNIdentifierEnabled value
     * @return bool|null
     */
    public function getBrandMPNIdentifierEnabled(): ?bool
    {
        return $this->BrandMPNIdentifierEnabled;
    }
    /**
     * Set BrandMPNIdentifierEnabled value
     * @param bool $brandMPNIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setBrandMPNIdentifierEnabled(?bool $brandMPNIdentifierEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($brandMPNIdentifierEnabled) && !is_bool($brandMPNIdentifierEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($brandMPNIdentifierEnabled, true), gettype($brandMPNIdentifierEnabled)), __LINE__);
        }
        $this->BrandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdAutoAcceptEnabled value
     * @return bool|null
     */
    public function getClassifiedAdAutoAcceptEnabled(): ?bool
    {
        return $this->ClassifiedAdAutoAcceptEnabled;
    }
    /**
     * Set ClassifiedAdAutoAcceptEnabled value
     * @param bool $classifiedAdAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdAutoAcceptEnabled(?bool $classifiedAdAutoAcceptEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdAutoAcceptEnabled) && !is_bool($classifiedAdAutoAcceptEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdAutoAcceptEnabled, true), gettype($classifiedAdAutoAcceptEnabled)), __LINE__);
        }
        $this->ClassifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        
        return $this;
    }
    /**
     * Get BestOfferAutoAcceptEnabled value
     * @return bool|null
     */
    public function getBestOfferAutoAcceptEnabled(): ?bool
    {
        return $this->BestOfferAutoAcceptEnabled;
    }
    /**
     * Set BestOfferAutoAcceptEnabled value
     * @param bool $bestOfferAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setBestOfferAutoAcceptEnabled(?bool $bestOfferAutoAcceptEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferAutoAcceptEnabled) && !is_bool($bestOfferAutoAcceptEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferAutoAcceptEnabled, true), gettype($bestOfferAutoAcceptEnabled)), __LINE__);
        }
        $this->BestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        
        return $this;
    }
    /**
     * Get CrossBorderTradeNorthAmericaEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeNorthAmericaEnabled(): ?bool
    {
        return $this->CrossBorderTradeNorthAmericaEnabled;
    }
    /**
     * Set CrossBorderTradeNorthAmericaEnabled value
     * @param bool $crossBorderTradeNorthAmericaEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setCrossBorderTradeNorthAmericaEnabled(?bool $crossBorderTradeNorthAmericaEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeNorthAmericaEnabled) && !is_bool($crossBorderTradeNorthAmericaEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossBorderTradeNorthAmericaEnabled, true), gettype($crossBorderTradeNorthAmericaEnabled)), __LINE__);
        }
        $this->CrossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        
        return $this;
    }
    /**
     * Get CrossBorderTradeGBEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeGBEnabled(): ?bool
    {
        return $this->CrossBorderTradeGBEnabled;
    }
    /**
     * Set CrossBorderTradeGBEnabled value
     * @param bool $crossBorderTradeGBEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setCrossBorderTradeGBEnabled(?bool $crossBorderTradeGBEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeGBEnabled) && !is_bool($crossBorderTradeGBEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossBorderTradeGBEnabled, true), gettype($crossBorderTradeGBEnabled)), __LINE__);
        }
        $this->CrossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        
        return $this;
    }
    /**
     * Get CrossBorderTradeAustraliaEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeAustraliaEnabled(): ?bool
    {
        return $this->CrossBorderTradeAustraliaEnabled;
    }
    /**
     * Set CrossBorderTradeAustraliaEnabled value
     * @param bool $crossBorderTradeAustraliaEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setCrossBorderTradeAustraliaEnabled(?bool $crossBorderTradeAustraliaEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeAustraliaEnabled) && !is_bool($crossBorderTradeAustraliaEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossBorderTradeAustraliaEnabled, true), gettype($crossBorderTradeAustraliaEnabled)), __LINE__);
        }
        $this->CrossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        
        return $this;
    }
    /**
     * Get PayPalBuyerProtectionEnabled value
     * @return bool|null
     */
    public function getPayPalBuyerProtectionEnabled(): ?bool
    {
        return $this->PayPalBuyerProtectionEnabled;
    }
    /**
     * Set PayPalBuyerProtectionEnabled value
     * @param bool $payPalBuyerProtectionEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPayPalBuyerProtectionEnabled(?bool $payPalBuyerProtectionEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payPalBuyerProtectionEnabled) && !is_bool($payPalBuyerProtectionEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalBuyerProtectionEnabled, true), gettype($payPalBuyerProtectionEnabled)), __LINE__);
        }
        $this->PayPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        
        return $this;
    }
    /**
     * Get BuyerGuaranteeEnabled value
     * @return bool|null
     */
    public function getBuyerGuaranteeEnabled(): ?bool
    {
        return $this->BuyerGuaranteeEnabled;
    }
    /**
     * Set BuyerGuaranteeEnabled value
     * @param bool $buyerGuaranteeEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setBuyerGuaranteeEnabled(?bool $buyerGuaranteeEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buyerGuaranteeEnabled) && !is_bool($buyerGuaranteeEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyerGuaranteeEnabled, true), gettype($buyerGuaranteeEnabled)), __LINE__);
        }
        $this->BuyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        
        return $this;
    }
    /**
     * Get INEscrowWorkflowTimeline value
     * @return string|null
     */
    public function getINEscrowWorkflowTimeline(): ?string
    {
        return $this->INEscrowWorkflowTimeline;
    }
    /**
     * Set INEscrowWorkflowTimeline value
     * @uses \macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $iNEscrowWorkflowTimeline
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setINEscrowWorkflowTimeline(?string $iNEscrowWorkflowTimeline = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType::valueIsValid($iNEscrowWorkflowTimeline)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType', is_array($iNEscrowWorkflowTimeline) ? implode(', ', $iNEscrowWorkflowTimeline) : var_export($iNEscrowWorkflowTimeline, true), implode(', ', \macropage\ebaysdk\trading\EnumType\INEscrowWorkflowTimelineCodeType::getValidValues())), __LINE__);
        }
        $this->INEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        
        return $this;
    }
    /**
     * Get CombinedFixedPriceTreatmentEnabled value
     * @return bool|null
     */
    public function getCombinedFixedPriceTreatmentEnabled(): ?bool
    {
        return $this->CombinedFixedPriceTreatmentEnabled;
    }
    /**
     * Set CombinedFixedPriceTreatmentEnabled value
     * @param bool $combinedFixedPriceTreatmentEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setCombinedFixedPriceTreatmentEnabled(?bool $combinedFixedPriceTreatmentEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($combinedFixedPriceTreatmentEnabled) && !is_bool($combinedFixedPriceTreatmentEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($combinedFixedPriceTreatmentEnabled, true), gettype($combinedFixedPriceTreatmentEnabled)), __LINE__);
        }
        $this->CombinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        
        return $this;
    }
    /**
     * Get GalleryFeaturedDurations value
     * @return \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType|null
     */
    public function getGalleryFeaturedDurations(): ?\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType
    {
        return $this->GalleryFeaturedDurations;
    }
    /**
     * Set GalleryFeaturedDurations value
     * @param \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setGalleryFeaturedDurations(?\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations = null): self
    {
        $this->GalleryFeaturedDurations = $galleryFeaturedDurations;
        
        return $this;
    }
    /**
     * Get PayPalRequired value
     * @return bool|null
     */
    public function getPayPalRequired(): ?bool
    {
        return $this->PayPalRequired;
    }
    /**
     * Set PayPalRequired value
     * @param bool $payPalRequired
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPayPalRequired(?bool $payPalRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payPalRequired) && !is_bool($payPalRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalRequired, true), gettype($payPalRequired)), __LINE__);
        }
        $this->PayPalRequired = $payPalRequired;
        
        return $this;
    }
    /**
     * Get eBayMotorsProAdFormatEnabled value
     * @return string|null
     */
    public function getEBayMotorsProAdFormatEnabled(): ?string
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }
    /**
     * Set eBayMotorsProAdFormatEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eBayMotorsProAdFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProAdFormatEnabled(?string $eBayMotorsProAdFormatEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid($eBayMotorsProAdFormatEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType', is_array($eBayMotorsProAdFormatEnabled) ? implode(', ', $eBayMotorsProAdFormatEnabled) : var_export($eBayMotorsProAdFormatEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProContactByPhoneEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByPhoneEnabled(): ?bool
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }
    /**
     * Set eBayMotorsProContactByPhoneEnabled value
     * @param bool $eBayMotorsProContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProContactByPhoneEnabled(?bool $eBayMotorsProContactByPhoneEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByPhoneEnabled) && !is_bool($eBayMotorsProContactByPhoneEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProContactByPhoneEnabled, true), gettype($eBayMotorsProContactByPhoneEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProPhoneCount value
     * @return int|null
     */
    public function getEBayMotorsProPhoneCount(): ?int
    {
        return $this->eBayMotorsProPhoneCount;
    }
    /**
     * Set eBayMotorsProPhoneCount value
     * @param int $eBayMotorsProPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProPhoneCount(?int $eBayMotorsProPhoneCount = null): self
    {
        // validation for constraint: int
        if (!is_null($eBayMotorsProPhoneCount) && !(is_int($eBayMotorsProPhoneCount) || ctype_digit($eBayMotorsProPhoneCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eBayMotorsProPhoneCount, true), gettype($eBayMotorsProPhoneCount)), __LINE__);
        }
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        
        return $this;
    }
    /**
     * Get eBayMotorsProContactByAddressEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByAddressEnabled(): ?bool
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }
    /**
     * Set eBayMotorsProContactByAddressEnabled value
     * @param bool $eBayMotorsProContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProContactByAddressEnabled(?bool $eBayMotorsProContactByAddressEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByAddressEnabled) && !is_bool($eBayMotorsProContactByAddressEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProContactByAddressEnabled, true), gettype($eBayMotorsProContactByAddressEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProStreetCount value
     * @return int|null
     */
    public function getEBayMotorsProStreetCount(): ?int
    {
        return $this->eBayMotorsProStreetCount;
    }
    /**
     * Set eBayMotorsProStreetCount value
     * @param int $eBayMotorsProStreetCount
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProStreetCount(?int $eBayMotorsProStreetCount = null): self
    {
        // validation for constraint: int
        if (!is_null($eBayMotorsProStreetCount) && !(is_int($eBayMotorsProStreetCount) || ctype_digit($eBayMotorsProStreetCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eBayMotorsProStreetCount, true), gettype($eBayMotorsProStreetCount)), __LINE__);
        }
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        
        return $this;
    }
    /**
     * Get eBayMotorsProCompanyNameEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProCompanyNameEnabled(): ?bool
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }
    /**
     * Set eBayMotorsProCompanyNameEnabled value
     * @param bool $eBayMotorsProCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProCompanyNameEnabled(?bool $eBayMotorsProCompanyNameEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProCompanyNameEnabled) && !is_bool($eBayMotorsProCompanyNameEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProCompanyNameEnabled, true), gettype($eBayMotorsProCompanyNameEnabled)), __LINE__);
        }
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProContactByEmailEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByEmailEnabled(): ?bool
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }
    /**
     * Set eBayMotorsProContactByEmailEnabled value
     * @param bool $eBayMotorsProContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProContactByEmailEnabled(?bool $eBayMotorsProContactByEmailEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByEmailEnabled) && !is_bool($eBayMotorsProContactByEmailEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProContactByEmailEnabled, true), gettype($eBayMotorsProContactByEmailEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProBestOfferEnabled value
     * @return string|null
     */
    public function getEBayMotorsProBestOfferEnabled(): ?string
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }
    /**
     * Set eBayMotorsProBestOfferEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eBayMotorsProBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProBestOfferEnabled(?string $eBayMotorsProBestOfferEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($eBayMotorsProBestOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType', is_array($eBayMotorsProBestOfferEnabled) ? implode(', ', $eBayMotorsProBestOfferEnabled) : var_export($eBayMotorsProBestOfferEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProAutoAcceptEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProAutoAcceptEnabled(): ?bool
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }
    /**
     * Set eBayMotorsProAutoAcceptEnabled value
     * @param bool $eBayMotorsProAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProAutoAcceptEnabled(?bool $eBayMotorsProAutoAcceptEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProAutoAcceptEnabled) && !is_bool($eBayMotorsProAutoAcceptEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProAutoAcceptEnabled, true), gettype($eBayMotorsProAutoAcceptEnabled)), __LINE__);
        }
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProAutoDeclineEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProAutoDeclineEnabled(): ?bool
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }
    /**
     * Set eBayMotorsProAutoDeclineEnabled value
     * @param bool $eBayMotorsProAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProAutoDeclineEnabled(?bool $eBayMotorsProAutoDeclineEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProAutoDeclineEnabled) && !is_bool($eBayMotorsProAutoDeclineEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProAutoDeclineEnabled, true), gettype($eBayMotorsProAutoDeclineEnabled)), __LINE__);
        }
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProPaymentMethodCheckOutEnabled value
     * @return string|null
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled(): ?string
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }
    /**
     * Set eBayMotorsProPaymentMethodCheckOutEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled(?string $eBayMotorsProPaymentMethodCheckOutEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($eBayMotorsProPaymentMethodCheckOutEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType', is_array($eBayMotorsProPaymentMethodCheckOutEnabled) ? implode(', ', $eBayMotorsProPaymentMethodCheckOutEnabled) : var_export($eBayMotorsProPaymentMethodCheckOutEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProShippingMethodEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProShippingMethodEnabled(): ?bool
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }
    /**
     * Set eBayMotorsProShippingMethodEnabled value
     * @param bool $eBayMotorsProShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProShippingMethodEnabled(?bool $eBayMotorsProShippingMethodEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProShippingMethodEnabled) && !is_bool($eBayMotorsProShippingMethodEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProShippingMethodEnabled, true), gettype($eBayMotorsProShippingMethodEnabled)), __LINE__);
        }
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProCounterOfferEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProCounterOfferEnabled(): ?bool
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }
    /**
     * Set eBayMotorsProCounterOfferEnabled value
     * @param bool $eBayMotorsProCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProCounterOfferEnabled(?bool $eBayMotorsProCounterOfferEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProCounterOfferEnabled) && !is_bool($eBayMotorsProCounterOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProCounterOfferEnabled, true), gettype($eBayMotorsProCounterOfferEnabled)), __LINE__);
        }
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProSellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProSellerContactDetailsEnabled(): ?bool
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }
    /**
     * Set eBayMotorsProSellerContactDetailsEnabled value
     * @param bool $eBayMotorsProSellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEBayMotorsProSellerContactDetailsEnabled(?bool $eBayMotorsProSellerContactDetailsEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProSellerContactDetailsEnabled) && !is_bool($eBayMotorsProSellerContactDetailsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProSellerContactDetailsEnabled, true), gettype($eBayMotorsProSellerContactDetailsEnabled)), __LINE__);
        }
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketAdFormatEnabled value
     * @return string|null
     */
    public function getLocalMarketAdFormatEnabled(): ?string
    {
        return $this->LocalMarketAdFormatEnabled;
    }
    /**
     * Set LocalMarketAdFormatEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $localMarketAdFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketAdFormatEnabled(?string $localMarketAdFormatEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::valueIsValid($localMarketAdFormatEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType', is_array($localMarketAdFormatEnabled) ? implode(', ', $localMarketAdFormatEnabled) : var_export($localMarketAdFormatEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketContactByPhoneEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByPhoneEnabled(): ?bool
    {
        return $this->LocalMarketContactByPhoneEnabled;
    }
    /**
     * Set LocalMarketContactByPhoneEnabled value
     * @param bool $localMarketContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketContactByPhoneEnabled(?bool $localMarketContactByPhoneEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByPhoneEnabled) && !is_bool($localMarketContactByPhoneEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketContactByPhoneEnabled, true), gettype($localMarketContactByPhoneEnabled)), __LINE__);
        }
        $this->LocalMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketPhoneCount value
     * @return int|null
     */
    public function getLocalMarketPhoneCount(): ?int
    {
        return $this->LocalMarketPhoneCount;
    }
    /**
     * Set LocalMarketPhoneCount value
     * @param int $localMarketPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketPhoneCount(?int $localMarketPhoneCount = null): self
    {
        // validation for constraint: int
        if (!is_null($localMarketPhoneCount) && !(is_int($localMarketPhoneCount) || ctype_digit($localMarketPhoneCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($localMarketPhoneCount, true), gettype($localMarketPhoneCount)), __LINE__);
        }
        $this->LocalMarketPhoneCount = $localMarketPhoneCount;
        
        return $this;
    }
    /**
     * Get LocalMarketContactByAddressEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByAddressEnabled(): ?bool
    {
        return $this->LocalMarketContactByAddressEnabled;
    }
    /**
     * Set LocalMarketContactByAddressEnabled value
     * @param bool $localMarketContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketContactByAddressEnabled(?bool $localMarketContactByAddressEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByAddressEnabled) && !is_bool($localMarketContactByAddressEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketContactByAddressEnabled, true), gettype($localMarketContactByAddressEnabled)), __LINE__);
        }
        $this->LocalMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketStreetCount value
     * @return int|null
     */
    public function getLocalMarketStreetCount(): ?int
    {
        return $this->LocalMarketStreetCount;
    }
    /**
     * Set LocalMarketStreetCount value
     * @param int $localMarketStreetCount
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketStreetCount(?int $localMarketStreetCount = null): self
    {
        // validation for constraint: int
        if (!is_null($localMarketStreetCount) && !(is_int($localMarketStreetCount) || ctype_digit($localMarketStreetCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($localMarketStreetCount, true), gettype($localMarketStreetCount)), __LINE__);
        }
        $this->LocalMarketStreetCount = $localMarketStreetCount;
        
        return $this;
    }
    /**
     * Get LocalMarketCompanyNameEnabled value
     * @return bool|null
     */
    public function getLocalMarketCompanyNameEnabled(): ?bool
    {
        return $this->LocalMarketCompanyNameEnabled;
    }
    /**
     * Set LocalMarketCompanyNameEnabled value
     * @param bool $localMarketCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketCompanyNameEnabled(?bool $localMarketCompanyNameEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketCompanyNameEnabled) && !is_bool($localMarketCompanyNameEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketCompanyNameEnabled, true), gettype($localMarketCompanyNameEnabled)), __LINE__);
        }
        $this->LocalMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketContactByEmailEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByEmailEnabled(): ?bool
    {
        return $this->LocalMarketContactByEmailEnabled;
    }
    /**
     * Set LocalMarketContactByEmailEnabled value
     * @param bool $localMarketContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketContactByEmailEnabled(?bool $localMarketContactByEmailEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByEmailEnabled) && !is_bool($localMarketContactByEmailEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketContactByEmailEnabled, true), gettype($localMarketContactByEmailEnabled)), __LINE__);
        }
        $this->LocalMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketBestOfferEnabled value
     * @return string|null
     */
    public function getLocalMarketBestOfferEnabled(): ?string
    {
        return $this->LocalMarketBestOfferEnabled;
    }
    /**
     * Set LocalMarketBestOfferEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $localMarketBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketBestOfferEnabled(?string $localMarketBestOfferEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($localMarketBestOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType', is_array($localMarketBestOfferEnabled) ? implode(', ', $localMarketBestOfferEnabled) : var_export($localMarketBestOfferEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketAutoAcceptEnabled value
     * @return bool|null
     */
    public function getLocalMarketAutoAcceptEnabled(): ?bool
    {
        return $this->LocalMarketAutoAcceptEnabled;
    }
    /**
     * Set LocalMarketAutoAcceptEnabled value
     * @param bool $localMarketAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketAutoAcceptEnabled(?bool $localMarketAutoAcceptEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketAutoAcceptEnabled) && !is_bool($localMarketAutoAcceptEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketAutoAcceptEnabled, true), gettype($localMarketAutoAcceptEnabled)), __LINE__);
        }
        $this->LocalMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketAutoDeclineEnabled value
     * @return bool|null
     */
    public function getLocalMarketAutoDeclineEnabled(): ?bool
    {
        return $this->LocalMarketAutoDeclineEnabled;
    }
    /**
     * Set LocalMarketAutoDeclineEnabled value
     * @param bool $localMarketAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketAutoDeclineEnabled(?bool $localMarketAutoDeclineEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketAutoDeclineEnabled) && !is_bool($localMarketAutoDeclineEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketAutoDeclineEnabled, true), gettype($localMarketAutoDeclineEnabled)), __LINE__);
        }
        $this->LocalMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketPaymentMethodCheckOutEnabled value
     * @return string|null
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled(): ?string
    {
        return $this->LocalMarketPaymentMethodCheckOutEnabled;
    }
    /**
     * Set LocalMarketPaymentMethodCheckOutEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $localMarketPaymentMethodCheckOutEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled(?string $localMarketPaymentMethodCheckOutEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($localMarketPaymentMethodCheckOutEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType', is_array($localMarketPaymentMethodCheckOutEnabled) ? implode(', ', $localMarketPaymentMethodCheckOutEnabled) : var_export($localMarketPaymentMethodCheckOutEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketShippingMethodEnabled value
     * @return bool|null
     */
    public function getLocalMarketShippingMethodEnabled(): ?bool
    {
        return $this->LocalMarketShippingMethodEnabled;
    }
    /**
     * Set LocalMarketShippingMethodEnabled value
     * @param bool $localMarketShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketShippingMethodEnabled(?bool $localMarketShippingMethodEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketShippingMethodEnabled) && !is_bool($localMarketShippingMethodEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketShippingMethodEnabled, true), gettype($localMarketShippingMethodEnabled)), __LINE__);
        }
        $this->LocalMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketCounterOfferEnabled value
     * @return bool|null
     */
    public function getLocalMarketCounterOfferEnabled(): ?bool
    {
        return $this->LocalMarketCounterOfferEnabled;
    }
    /**
     * Set LocalMarketCounterOfferEnabled value
     * @param bool $localMarketCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketCounterOfferEnabled(?bool $localMarketCounterOfferEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketCounterOfferEnabled) && !is_bool($localMarketCounterOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketCounterOfferEnabled, true), gettype($localMarketCounterOfferEnabled)), __LINE__);
        }
        $this->LocalMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketSellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getLocalMarketSellerContactDetailsEnabled(): ?bool
    {
        return $this->LocalMarketSellerContactDetailsEnabled;
    }
    /**
     * Set LocalMarketSellerContactDetailsEnabled value
     * @param bool $localMarketSellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setLocalMarketSellerContactDetailsEnabled(?bool $localMarketSellerContactDetailsEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($localMarketSellerContactDetailsEnabled) && !is_bool($localMarketSellerContactDetailsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketSellerContactDetailsEnabled, true), gettype($localMarketSellerContactDetailsEnabled)), __LINE__);
        }
        $this->LocalMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdPhoneCount value
     * @return int|null
     */
    public function getClassifiedAdPhoneCount(): ?int
    {
        return $this->ClassifiedAdPhoneCount;
    }
    /**
     * Set ClassifiedAdPhoneCount value
     * @param int $classifiedAdPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdPhoneCount(?int $classifiedAdPhoneCount = null): self
    {
        // validation for constraint: int
        if (!is_null($classifiedAdPhoneCount) && !(is_int($classifiedAdPhoneCount) || ctype_digit($classifiedAdPhoneCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($classifiedAdPhoneCount, true), gettype($classifiedAdPhoneCount)), __LINE__);
        }
        $this->ClassifiedAdPhoneCount = $classifiedAdPhoneCount;
        
        return $this;
    }
    /**
     * Get ClassifiedAdContactByAddressEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByAddressEnabled(): ?bool
    {
        return $this->ClassifiedAdContactByAddressEnabled;
    }
    /**
     * Set ClassifiedAdContactByAddressEnabled value
     * @param bool $classifiedAdContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdContactByAddressEnabled(?bool $classifiedAdContactByAddressEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByAddressEnabled) && !is_bool($classifiedAdContactByAddressEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdContactByAddressEnabled, true), gettype($classifiedAdContactByAddressEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdStreetCount value
     * @return int|null
     */
    public function getClassifiedAdStreetCount(): ?int
    {
        return $this->ClassifiedAdStreetCount;
    }
    /**
     * Set ClassifiedAdStreetCount value
     * @param int $classifiedAdStreetCount
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdStreetCount(?int $classifiedAdStreetCount = null): self
    {
        // validation for constraint: int
        if (!is_null($classifiedAdStreetCount) && !(is_int($classifiedAdStreetCount) || ctype_digit($classifiedAdStreetCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($classifiedAdStreetCount, true), gettype($classifiedAdStreetCount)), __LINE__);
        }
        $this->ClassifiedAdStreetCount = $classifiedAdStreetCount;
        
        return $this;
    }
    /**
     * Get ClassifiedAdCompanyNameEnabled value
     * @return bool|null
     */
    public function getClassifiedAdCompanyNameEnabled(): ?bool
    {
        return $this->ClassifiedAdCompanyNameEnabled;
    }
    /**
     * Set ClassifiedAdCompanyNameEnabled value
     * @param bool $classifiedAdCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setClassifiedAdCompanyNameEnabled(?bool $classifiedAdCompanyNameEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdCompanyNameEnabled) && !is_bool($classifiedAdCompanyNameEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdCompanyNameEnabled, true), gettype($classifiedAdCompanyNameEnabled)), __LINE__);
        }
        $this->ClassifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        
        return $this;
    }
    /**
     * Get SpecialitySubscription value
     * @return string|null
     */
    public function getSpecialitySubscription(): ?string
    {
        return $this->SpecialitySubscription;
    }
    /**
     * Set SpecialitySubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $specialitySubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setSpecialitySubscription(?string $specialitySubscription = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid($specialitySubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType', is_array($specialitySubscription) ? implode(', ', $specialitySubscription) : var_export($specialitySubscription, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->SpecialitySubscription = $specialitySubscription;
        
        return $this;
    }
    /**
     * Get RegularSubscription value
     * @return string|null
     */
    public function getRegularSubscription(): ?string
    {
        return $this->RegularSubscription;
    }
    /**
     * Set RegularSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $regularSubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setRegularSubscription(?string $regularSubscription = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid($regularSubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType', is_array($regularSubscription) ? implode(', ', $regularSubscription) : var_export($regularSubscription, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->RegularSubscription = $regularSubscription;
        
        return $this;
    }
    /**
     * Get PremiumSubscription value
     * @return string|null
     */
    public function getPremiumSubscription(): ?string
    {
        return $this->PremiumSubscription;
    }
    /**
     * Set PremiumSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $premiumSubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPremiumSubscription(?string $premiumSubscription = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid($premiumSubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType', is_array($premiumSubscription) ? implode(', ', $premiumSubscription) : var_export($premiumSubscription, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->PremiumSubscription = $premiumSubscription;
        
        return $this;
    }
    /**
     * Get NonSubscription value
     * @return string|null
     */
    public function getNonSubscription(): ?string
    {
        return $this->NonSubscription;
    }
    /**
     * Set NonSubscription value
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $nonSubscription
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setNonSubscription(?string $nonSubscription = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::valueIsValid($nonSubscription)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType', is_array($nonSubscription) ? implode(', ', $nonSubscription) : var_export($nonSubscription, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->NonSubscription = $nonSubscription;
        
        return $this;
    }
    /**
     * Get PayPalRequiredForStoreOwner value
     * @return bool|null
     */
    public function getPayPalRequiredForStoreOwner(): ?bool
    {
        return $this->PayPalRequiredForStoreOwner;
    }
    /**
     * Set PayPalRequiredForStoreOwner value
     * @param bool $payPalRequiredForStoreOwner
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPayPalRequiredForStoreOwner(?bool $payPalRequiredForStoreOwner = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payPalRequiredForStoreOwner) && !is_bool($payPalRequiredForStoreOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalRequiredForStoreOwner, true), gettype($payPalRequiredForStoreOwner)), __LINE__);
        }
        $this->PayPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        
        return $this;
    }
    /**
     * Get ReviseQuantityAllowed value
     * @return bool|null
     */
    public function getReviseQuantityAllowed(): ?bool
    {
        return $this->ReviseQuantityAllowed;
    }
    /**
     * Set ReviseQuantityAllowed value
     * @param bool $reviseQuantityAllowed
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setReviseQuantityAllowed(?bool $reviseQuantityAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reviseQuantityAllowed) && !is_bool($reviseQuantityAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reviseQuantityAllowed, true), gettype($reviseQuantityAllowed)), __LINE__);
        }
        $this->ReviseQuantityAllowed = $reviseQuantityAllowed;
        
        return $this;
    }
    /**
     * Get RevisePriceAllowed value
     * @return bool|null
     */
    public function getRevisePriceAllowed(): ?bool
    {
        return $this->RevisePriceAllowed;
    }
    /**
     * Set RevisePriceAllowed value
     * @param bool $revisePriceAllowed
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setRevisePriceAllowed(?bool $revisePriceAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($revisePriceAllowed) && !is_bool($revisePriceAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($revisePriceAllowed, true), gettype($revisePriceAllowed)), __LINE__);
        }
        $this->RevisePriceAllowed = $revisePriceAllowed;
        
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurationsEnabled value
     * @return bool|null
     */
    public function getStoreOwnerExtendedListingDurationsEnabled(): ?bool
    {
        return $this->StoreOwnerExtendedListingDurationsEnabled;
    }
    /**
     * Set StoreOwnerExtendedListingDurationsEnabled value
     * @param bool $storeOwnerExtendedListingDurationsEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setStoreOwnerExtendedListingDurationsEnabled(?bool $storeOwnerExtendedListingDurationsEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($storeOwnerExtendedListingDurationsEnabled) && !is_bool($storeOwnerExtendedListingDurationsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($storeOwnerExtendedListingDurationsEnabled, true), gettype($storeOwnerExtendedListingDurationsEnabled)), __LINE__);
        }
        $this->StoreOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurations value
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType|null
     */
    public function getStoreOwnerExtendedListingDurations(): ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
    {
        return $this->StoreOwnerExtendedListingDurations;
    }
    /**
     * Set StoreOwnerExtendedListingDurations value
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setStoreOwnerExtendedListingDurations(?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations = null): self
    {
        $this->StoreOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        
        return $this;
    }
    /**
     * Get ReturnPolicyEnabled value
     * @return bool|null
     */
    public function getReturnPolicyEnabled(): ?bool
    {
        return $this->ReturnPolicyEnabled;
    }
    /**
     * Set ReturnPolicyEnabled value
     * @param bool $returnPolicyEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setReturnPolicyEnabled(?bool $returnPolicyEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnPolicyEnabled) && !is_bool($returnPolicyEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnPolicyEnabled, true), gettype($returnPolicyEnabled)), __LINE__);
        }
        $this->ReturnPolicyEnabled = $returnPolicyEnabled;
        
        return $this;
    }
    /**
     * Get HandlingTimeEnabled value
     * @return bool|null
     */
    public function getHandlingTimeEnabled(): ?bool
    {
        return $this->HandlingTimeEnabled;
    }
    /**
     * Set HandlingTimeEnabled value
     * @param bool $handlingTimeEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setHandlingTimeEnabled(?bool $handlingTimeEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($handlingTimeEnabled) && !is_bool($handlingTimeEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($handlingTimeEnabled, true), gettype($handlingTimeEnabled)), __LINE__);
        }
        $this->HandlingTimeEnabled = $handlingTimeEnabled;
        
        return $this;
    }
    /**
     * Get MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxFlatShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MaxFlatShippingCost;
    }
    /**
     * Set MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setMaxFlatShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $maxFlatShippingCost = null): self
    {
        $this->MaxFlatShippingCost = $maxFlatShippingCost;
        
        return $this;
    }
    /**
     * Get MaxFlatShippingCostCBTExempt value
     * @return bool|null
     */
    public function getMaxFlatShippingCostCBTExempt(): ?bool
    {
        return $this->MaxFlatShippingCostCBTExempt;
    }
    /**
     * Set MaxFlatShippingCostCBTExempt value
     * @param bool $maxFlatShippingCostCBTExempt
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setMaxFlatShippingCostCBTExempt(?bool $maxFlatShippingCostCBTExempt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($maxFlatShippingCostCBTExempt) && !is_bool($maxFlatShippingCostCBTExempt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($maxFlatShippingCostCBTExempt, true), gettype($maxFlatShippingCostCBTExempt)), __LINE__);
        }
        $this->MaxFlatShippingCostCBTExempt = $maxFlatShippingCostCBTExempt;
        
        return $this;
    }
    /**
     * Get Group1MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getGroup1MaxFlatShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Group1MaxFlatShippingCost;
    }
    /**
     * Set Group1MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group1MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setGroup1MaxFlatShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $group1MaxFlatShippingCost = null): self
    {
        $this->Group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        
        return $this;
    }
    /**
     * Get Group2MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getGroup2MaxFlatShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Group2MaxFlatShippingCost;
    }
    /**
     * Set Group2MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group2MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setGroup2MaxFlatShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $group2MaxFlatShippingCost = null): self
    {
        $this->Group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        
        return $this;
    }
    /**
     * Get Group3MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getGroup3MaxFlatShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Group3MaxFlatShippingCost;
    }
    /**
     * Set Group3MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $group3MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setGroup3MaxFlatShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $group3MaxFlatShippingCost = null): self
    {
        $this->Group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string[]
     */
    public function getPaymentMethod(): ?array
    {
        return $this->PaymentMethod;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentMethodForArrayConstraintsFromSetPaymentMethod(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteDefaultsTypePaymentMethodItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($siteDefaultsTypePaymentMethodItem)) {
                $invalidValues[] = is_object($siteDefaultsTypePaymentMethodItem) ? get_class($siteDefaultsTypePaymentMethodItem) : sprintf('%s(%s)', gettype($siteDefaultsTypePaymentMethodItem), var_export($siteDefaultsTypePaymentMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPaymentMethod(?array $paymentMethod = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentMethodArrayErrorMessage = self::validatePaymentMethodForArrayConstraintsFromSetPaymentMethod($paymentMethod))) {
            throw new InvalidArgumentException($paymentMethodArrayErrorMessage, __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Add item to PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function addToPaymentMethod(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod[] = $item;
        
        return $this;
    }
    /**
     * Get VariationsEnabled value
     * @return bool|null
     */
    public function getVariationsEnabled(): ?bool
    {
        return $this->VariationsEnabled;
    }
    /**
     * Set VariationsEnabled value
     * @param bool $variationsEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setVariationsEnabled(?bool $variationsEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($variationsEnabled) && !is_bool($variationsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($variationsEnabled, true), gettype($variationsEnabled)), __LINE__);
        }
        $this->VariationsEnabled = $variationsEnabled;
        
        return $this;
    }
    /**
     * Get AttributeConversionEnabled value
     * @return string|null
     */
    public function getAttributeConversionEnabled(): ?string
    {
        return $this->AttributeConversionEnabled;
    }
    /**
     * Set AttributeConversionEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $attributeConversionEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setAttributeConversionEnabled(?string $attributeConversionEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType::valueIsValid($attributeConversionEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType', is_array($attributeConversionEnabled) ? implode(', ', $attributeConversionEnabled) : var_export($attributeConversionEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AttributeConversionEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->AttributeConversionEnabled = $attributeConversionEnabled;
        
        return $this;
    }
    /**
     * Get FreeGalleryPlusEnabled value
     * @return bool|null
     */
    public function getFreeGalleryPlusEnabled(): ?bool
    {
        return $this->FreeGalleryPlusEnabled;
    }
    /**
     * Set FreeGalleryPlusEnabled value
     * @param bool $freeGalleryPlusEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setFreeGalleryPlusEnabled(?bool $freeGalleryPlusEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($freeGalleryPlusEnabled) && !is_bool($freeGalleryPlusEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freeGalleryPlusEnabled, true), gettype($freeGalleryPlusEnabled)), __LINE__);
        }
        $this->FreeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        
        return $this;
    }
    /**
     * Get FreePicturePackEnabled value
     * @return bool|null
     */
    public function getFreePicturePackEnabled(): ?bool
    {
        return $this->FreePicturePackEnabled;
    }
    /**
     * Set FreePicturePackEnabled value
     * @param bool $freePicturePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setFreePicturePackEnabled(?bool $freePicturePackEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($freePicturePackEnabled) && !is_bool($freePicturePackEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freePicturePackEnabled, true), gettype($freePicturePackEnabled)), __LINE__);
        }
        $this->FreePicturePackEnabled = $freePicturePackEnabled;
        
        return $this;
    }
    /**
     * Get ItemCompatibilityEnabled value
     * @return string|null
     */
    public function getItemCompatibilityEnabled(): ?string
    {
        return $this->ItemCompatibilityEnabled;
    }
    /**
     * Set ItemCompatibilityEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemCompatibilityEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setItemCompatibilityEnabled(?string $itemCompatibilityEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType::valueIsValid($itemCompatibilityEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType', is_array($itemCompatibilityEnabled) ? implode(', ', $itemCompatibilityEnabled) : var_export($itemCompatibilityEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemCompatibilityEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ItemCompatibilityEnabled = $itemCompatibilityEnabled;
        
        return $this;
    }
    /**
     * Get MinItemCompatibility value
     * @return int|null
     */
    public function getMinItemCompatibility(): ?int
    {
        return $this->MinItemCompatibility;
    }
    /**
     * Set MinItemCompatibility value
     * @param int $minItemCompatibility
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setMinItemCompatibility(?int $minItemCompatibility = null): self
    {
        // validation for constraint: int
        if (!is_null($minItemCompatibility) && !(is_int($minItemCompatibility) || ctype_digit($minItemCompatibility))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minItemCompatibility, true), gettype($minItemCompatibility)), __LINE__);
        }
        $this->MinItemCompatibility = $minItemCompatibility;
        
        return $this;
    }
    /**
     * Get MaxItemCompatibility value
     * @return int|null
     */
    public function getMaxItemCompatibility(): ?int
    {
        return $this->MaxItemCompatibility;
    }
    /**
     * Set MaxItemCompatibility value
     * @param int $maxItemCompatibility
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setMaxItemCompatibility(?int $maxItemCompatibility = null): self
    {
        // validation for constraint: int
        if (!is_null($maxItemCompatibility) && !(is_int($maxItemCompatibility) || ctype_digit($maxItemCompatibility))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItemCompatibility, true), gettype($maxItemCompatibility)), __LINE__);
        }
        $this->MaxItemCompatibility = $maxItemCompatibility;
        
        return $this;
    }
    /**
     * Get ConditionEnabled value
     * @return string|null
     */
    public function getConditionEnabled(): ?string
    {
        return $this->ConditionEnabled;
    }
    /**
     * Set ConditionEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $conditionEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setConditionEnabled(?string $conditionEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType::valueIsValid($conditionEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType', is_array($conditionEnabled) ? implode(', ', $conditionEnabled) : var_export($conditionEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ConditionEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ConditionEnabled = $conditionEnabled;
        
        return $this;
    }
    /**
     * Get ConditionValues value
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType|null
     */
    public function getConditionValues(): ?\macropage\ebaysdk\trading\StructType\ConditionValuesType
    {
        return $this->ConditionValues;
    }
    /**
     * Set ConditionValues value
     * @param \macropage\ebaysdk\trading\StructType\ConditionValuesType $conditionValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setConditionValues(?\macropage\ebaysdk\trading\StructType\ConditionValuesType $conditionValues = null): self
    {
        $this->ConditionValues = $conditionValues;
        
        return $this;
    }
    /**
     * Get SpecialFeatures value
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType|null
     */
    public function getSpecialFeatures(): ?\macropage\ebaysdk\trading\StructType\ConditionValuesType
    {
        return $this->SpecialFeatures;
    }
    /**
     * Set SpecialFeatures value
     * @param \macropage\ebaysdk\trading\StructType\ConditionValuesType $specialFeatures
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setSpecialFeatures(?\macropage\ebaysdk\trading\StructType\ConditionValuesType $specialFeatures = null): self
    {
        $this->SpecialFeatures = $specialFeatures;
        
        return $this;
    }
    /**
     * Get ValueCategory value
     * @return bool|null
     */
    public function getValueCategory(): ?bool
    {
        return $this->ValueCategory;
    }
    /**
     * Set ValueCategory value
     * @param bool $valueCategory
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setValueCategory(?bool $valueCategory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valueCategory) && !is_bool($valueCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valueCategory, true), gettype($valueCategory)), __LINE__);
        }
        $this->ValueCategory = $valueCategory;
        
        return $this;
    }
    /**
     * Get ProductCreationEnabled value
     * @return string|null
     */
    public function getProductCreationEnabled(): ?string
    {
        return $this->ProductCreationEnabled;
    }
    /**
     * Set ProductCreationEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productCreationEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setProductCreationEnabled(?string $productCreationEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType::valueIsValid($productCreationEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType', is_array($productCreationEnabled) ? implode(', ', $productCreationEnabled) : var_export($productCreationEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProductCreationEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ProductCreationEnabled = $productCreationEnabled;
        
        return $this;
    }
    /**
     * Get EANEnabled value
     * @return string|null
     */
    public function getEANEnabled(): ?string
    {
        return $this->EANEnabled;
    }
    /**
     * Set EANEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eANEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEANEnabled(?string $eANEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($eANEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType', is_array($eANEnabled) ? implode(', ', $eANEnabled) : var_export($eANEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->EANEnabled = $eANEnabled;
        
        return $this;
    }
    /**
     * Get ISBNEnabled value
     * @return string|null
     */
    public function getISBNEnabled(): ?string
    {
        return $this->ISBNEnabled;
    }
    /**
     * Set ISBNEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $iSBNEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setISBNEnabled(?string $iSBNEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($iSBNEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType', is_array($iSBNEnabled) ? implode(', ', $iSBNEnabled) : var_export($iSBNEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ISBNEnabled = $iSBNEnabled;
        
        return $this;
    }
    /**
     * Get UPCEnabled value
     * @return string|null
     */
    public function getUPCEnabled(): ?string
    {
        return $this->UPCEnabled;
    }
    /**
     * Set UPCEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uPCEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setUPCEnabled(?string $uPCEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($uPCEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType', is_array($uPCEnabled) ? implode(', ', $uPCEnabled) : var_export($uPCEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->UPCEnabled = $uPCEnabled;
        
        return $this;
    }
    /**
     * Get MaxGranularFitmentCount value
     * @return int|null
     */
    public function getMaxGranularFitmentCount(): ?int
    {
        return $this->MaxGranularFitmentCount;
    }
    /**
     * Set MaxGranularFitmentCount value
     * @param int $maxGranularFitmentCount
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setMaxGranularFitmentCount(?int $maxGranularFitmentCount = null): self
    {
        // validation for constraint: int
        if (!is_null($maxGranularFitmentCount) && !(is_int($maxGranularFitmentCount) || ctype_digit($maxGranularFitmentCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxGranularFitmentCount, true), gettype($maxGranularFitmentCount)), __LINE__);
        }
        $this->MaxGranularFitmentCount = $maxGranularFitmentCount;
        
        return $this;
    }
    /**
     * Get CompatibleVehicleType value
     * @return string|null
     */
    public function getCompatibleVehicleType(): ?string
    {
        return $this->CompatibleVehicleType;
    }
    /**
     * Set CompatibleVehicleType value
     * @param string $compatibleVehicleType
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setCompatibleVehicleType(?string $compatibleVehicleType = null): self
    {
        // validation for constraint: string
        if (!is_null($compatibleVehicleType) && !is_string($compatibleVehicleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compatibleVehicleType, true), gettype($compatibleVehicleType)), __LINE__);
        }
        $this->CompatibleVehicleType = $compatibleVehicleType;
        
        return $this;
    }
    /**
     * Get PaymentOptionsGroup value
     * @return string|null
     */
    public function getPaymentOptionsGroup(): ?string
    {
        return $this->PaymentOptionsGroup;
    }
    /**
     * Set PaymentOptionsGroup value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentOptionsGroup
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPaymentOptionsGroup(?string $paymentOptionsGroup = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType::valueIsValid($paymentOptionsGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType', is_array($paymentOptionsGroup) ? implode(', ', $paymentOptionsGroup) : var_export($paymentOptionsGroup, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentOptionsGroupEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentOptionsGroup = $paymentOptionsGroup;
        
        return $this;
    }
    /**
     * Get ShippingProfileCategoryGroup value
     * @return string|null
     */
    public function getShippingProfileCategoryGroup(): ?string
    {
        return $this->ShippingProfileCategoryGroup;
    }
    /**
     * Set ShippingProfileCategoryGroup value
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setShippingProfileCategoryGroup(?string $shippingProfileCategoryGroup = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid($shippingProfileCategoryGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType', is_array($shippingProfileCategoryGroup) ? implode(', ', $shippingProfileCategoryGroup) : var_export($shippingProfileCategoryGroup, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        
        return $this;
    }
    /**
     * Get PaymentProfileCategoryGroup value
     * @return string|null
     */
    public function getPaymentProfileCategoryGroup(): ?string
    {
        return $this->PaymentProfileCategoryGroup;
    }
    /**
     * Set PaymentProfileCategoryGroup value
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPaymentProfileCategoryGroup(?string $paymentProfileCategoryGroup = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid($paymentProfileCategoryGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType', is_array($paymentProfileCategoryGroup) ? implode(', ', $paymentProfileCategoryGroup) : var_export($paymentProfileCategoryGroup, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        
        return $this;
    }
    /**
     * Get ReturnPolicyProfileCategoryGroup value
     * @return string|null
     */
    public function getReturnPolicyProfileCategoryGroup(): ?string
    {
        return $this->ReturnPolicyProfileCategoryGroup;
    }
    /**
     * Set ReturnPolicyProfileCategoryGroup value
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $returnPolicyProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setReturnPolicyProfileCategoryGroup(?string $returnPolicyProfileCategoryGroup = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::valueIsValid($returnPolicyProfileCategoryGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType', is_array($returnPolicyProfileCategoryGroup) ? implode(', ', $returnPolicyProfileCategoryGroup) : var_export($returnPolicyProfileCategoryGroup, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->ReturnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        
        return $this;
    }
    /**
     * Get VINSupported value
     * @return bool|null
     */
    public function getVINSupported(): ?bool
    {
        return $this->VINSupported;
    }
    /**
     * Set VINSupported value
     * @param bool $vINSupported
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setVINSupported(?bool $vINSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vINSupported) && !is_bool($vINSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vINSupported, true), gettype($vINSupported)), __LINE__);
        }
        $this->VINSupported = $vINSupported;
        
        return $this;
    }
    /**
     * Get VRMSupported value
     * @return bool|null
     */
    public function getVRMSupported(): ?bool
    {
        return $this->VRMSupported;
    }
    /**
     * Set VRMSupported value
     * @param bool $vRMSupported
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setVRMSupported(?bool $vRMSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vRMSupported) && !is_bool($vRMSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vRMSupported, true), gettype($vRMSupported)), __LINE__);
        }
        $this->VRMSupported = $vRMSupported;
        
        return $this;
    }
    /**
     * Get SellerProvidedTitleSupported value
     * @return bool|null
     */
    public function getSellerProvidedTitleSupported(): ?bool
    {
        return $this->SellerProvidedTitleSupported;
    }
    /**
     * Set SellerProvidedTitleSupported value
     * @param bool $sellerProvidedTitleSupported
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setSellerProvidedTitleSupported(?bool $sellerProvidedTitleSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sellerProvidedTitleSupported) && !is_bool($sellerProvidedTitleSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerProvidedTitleSupported, true), gettype($sellerProvidedTitleSupported)), __LINE__);
        }
        $this->SellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        
        return $this;
    }
    /**
     * Get DepositSupported value
     * @return bool|null
     */
    public function getDepositSupported(): ?bool
    {
        return $this->DepositSupported;
    }
    /**
     * Set DepositSupported value
     * @param bool $depositSupported
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setDepositSupported(?bool $depositSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($depositSupported) && !is_bool($depositSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($depositSupported, true), gettype($depositSupported)), __LINE__);
        }
        $this->DepositSupported = $depositSupported;
        
        return $this;
    }
    /**
     * Get GlobalShippingEnabled value
     * @return bool|null
     */
    public function getGlobalShippingEnabled(): ?bool
    {
        return $this->GlobalShippingEnabled;
    }
    /**
     * Set GlobalShippingEnabled value
     * @param bool $globalShippingEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setGlobalShippingEnabled(?bool $globalShippingEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($globalShippingEnabled) && !is_bool($globalShippingEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalShippingEnabled, true), gettype($globalShippingEnabled)), __LINE__);
        }
        $this->GlobalShippingEnabled = $globalShippingEnabled;
        
        return $this;
    }
    /**
     * Get AdditionalCompatibilityEnabled value
     * @return bool|null
     */
    public function getAdditionalCompatibilityEnabled(): ?bool
    {
        return $this->AdditionalCompatibilityEnabled;
    }
    /**
     * Set AdditionalCompatibilityEnabled value
     * @param bool $additionalCompatibilityEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setAdditionalCompatibilityEnabled(?bool $additionalCompatibilityEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($additionalCompatibilityEnabled) && !is_bool($additionalCompatibilityEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($additionalCompatibilityEnabled, true), gettype($additionalCompatibilityEnabled)), __LINE__);
        }
        $this->AdditionalCompatibilityEnabled = $additionalCompatibilityEnabled;
        
        return $this;
    }
    /**
     * Get PickupDropOffEnabled value
     * @return bool|null
     */
    public function getPickupDropOffEnabled(): ?bool
    {
        return $this->PickupDropOffEnabled;
    }
    /**
     * Set PickupDropOffEnabled value
     * @param bool $pickupDropOffEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setPickupDropOffEnabled(?bool $pickupDropOffEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($pickupDropOffEnabled) && !is_bool($pickupDropOffEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pickupDropOffEnabled, true), gettype($pickupDropOffEnabled)), __LINE__);
        }
        $this->PickupDropOffEnabled = $pickupDropOffEnabled;
        
        return $this;
    }
    /**
     * Get DigitalGoodDeliveryEnabled value
     * @return bool|null
     */
    public function getDigitalGoodDeliveryEnabled(): ?bool
    {
        return $this->DigitalGoodDeliveryEnabled;
    }
    /**
     * Set DigitalGoodDeliveryEnabled value
     * @param bool $digitalGoodDeliveryEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setDigitalGoodDeliveryEnabled(?bool $digitalGoodDeliveryEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($digitalGoodDeliveryEnabled) && !is_bool($digitalGoodDeliveryEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($digitalGoodDeliveryEnabled, true), gettype($digitalGoodDeliveryEnabled)), __LINE__);
        }
        $this->DigitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        
        return $this;
    }
    /**
     * Get EpidSupported value
     * @return bool|null
     */
    public function getEpidSupported(): ?bool
    {
        return $this->EpidSupported;
    }
    /**
     * Set EpidSupported value
     * @param bool $epidSupported
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setEpidSupported(?bool $epidSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($epidSupported) && !is_bool($epidSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($epidSupported, true), gettype($epidSupported)), __LINE__);
        }
        $this->EpidSupported = $epidSupported;
        
        return $this;
    }
    /**
     * Get KTypeSupported value
     * @return bool|null
     */
    public function getKTypeSupported(): ?bool
    {
        return $this->KTypeSupported;
    }
    /**
     * Set KTypeSupported value
     * @param bool $kTypeSupported
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setKTypeSupported(?bool $kTypeSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($kTypeSupported) && !is_bool($kTypeSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kTypeSupported, true), gettype($kTypeSupported)), __LINE__);
        }
        $this->KTypeSupported = $kTypeSupported;
        
        return $this;
    }
    /**
     * Get ProductRequiredEnabled value
     * @return string|null
     */
    public function getProductRequiredEnabled(): ?string
    {
        return $this->ProductRequiredEnabled;
    }
    /**
     * Set ProductRequiredEnabled value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productRequiredEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setProductRequiredEnabled(?string $productRequiredEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType::valueIsValid($productRequiredEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType', is_array($productRequiredEnabled) ? implode(', ', $productRequiredEnabled) : var_export($productRequiredEnabled, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProductRequiredEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ProductRequiredEnabled = $productRequiredEnabled;
        
        return $this;
    }
    /**
     * Get DomesticReturnsAcceptedValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType|null
     */
    public function getDomesticReturnsAcceptedValues(): ?\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType
    {
        return $this->DomesticReturnsAcceptedValues;
    }
    /**
     * Set DomesticReturnsAcceptedValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setDomesticReturnsAcceptedValues(?\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues = null): self
    {
        $this->DomesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType|null
     */
    public function getInternationalReturnsAcceptedValues(): ?\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType
    {
        return $this->InternationalReturnsAcceptedValues;
    }
    /**
     * Set InternationalReturnsAcceptedValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setInternationalReturnsAcceptedValues(?\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues = null): self
    {
        $this->InternationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        
        return $this;
    }
    /**
     * Get DomesticReturnsDurationValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType|null
     */
    public function getDomesticReturnsDurationValues(): ?\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType
    {
        return $this->DomesticReturnsDurationValues;
    }
    /**
     * Set DomesticReturnsDurationValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setDomesticReturnsDurationValues(?\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues = null): self
    {
        $this->DomesticReturnsDurationValues = $domesticReturnsDurationValues;
        
        return $this;
    }
    /**
     * Get InternationalReturnsDurationValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType|null
     */
    public function getInternationalReturnsDurationValues(): ?\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType
    {
        return $this->InternationalReturnsDurationValues;
    }
    /**
     * Set InternationalReturnsDurationValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setInternationalReturnsDurationValues(?\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues = null): self
    {
        $this->InternationalReturnsDurationValues = $internationalReturnsDurationValues;
        
        return $this;
    }
    /**
     * Get DomesticReturnsShipmentPayeeValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType|null
     */
    public function getDomesticReturnsShipmentPayeeValues(): ?\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType
    {
        return $this->DomesticReturnsShipmentPayeeValues;
    }
    /**
     * Set DomesticReturnsShipmentPayeeValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setDomesticReturnsShipmentPayeeValues(?\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues = null): self
    {
        $this->DomesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        
        return $this;
    }
    /**
     * Get InternationalReturnsShipmentPayeeValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType|null
     */
    public function getInternationalReturnsShipmentPayeeValues(): ?\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
    {
        return $this->InternationalReturnsShipmentPayeeValues;
    }
    /**
     * Set InternationalReturnsShipmentPayeeValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setInternationalReturnsShipmentPayeeValues(?\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues = null): self
    {
        $this->InternationalReturnsShipmentPayeeValues = $internationalReturnsShipmentPayeeValues;
        
        return $this;
    }
    /**
     * Get DomesticRefundMethodValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType|null
     */
    public function getDomesticRefundMethodValues(): ?\macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
    {
        return $this->DomesticRefundMethodValues;
    }
    /**
     * Set DomesticRefundMethodValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setDomesticRefundMethodValues(?\macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null): self
    {
        $this->DomesticRefundMethodValues = $domesticRefundMethodValues;
        
        return $this;
    }
    /**
     * Get InternationalRefundMethodValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType|null
     */
    public function getInternationalRefundMethodValues(): ?\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
    {
        return $this->InternationalRefundMethodValues;
    }
    /**
     * Set InternationalRefundMethodValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setInternationalRefundMethodValues(?\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null): self
    {
        $this->InternationalRefundMethodValues = $internationalRefundMethodValues;
        
        return $this;
    }
    /**
     * Get ReturnPolicyDescriptionEnabled value
     * @return bool|null
     */
    public function getReturnPolicyDescriptionEnabled(): ?bool
    {
        return $this->ReturnPolicyDescriptionEnabled;
    }
    /**
     * Set ReturnPolicyDescriptionEnabled value
     * @param bool $returnPolicyDescriptionEnabled
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
     */
    public function setReturnPolicyDescriptionEnabled(?bool $returnPolicyDescriptionEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnPolicyDescriptionEnabled) && !is_bool($returnPolicyDescriptionEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnPolicyDescriptionEnabled, true), gettype($returnPolicyDescriptionEnabled)), __LINE__);
        }
        $this->ReturnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SiteDefaultsType
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
