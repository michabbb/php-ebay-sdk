<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeatureDefinitionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>FeatureDefinitions</b> container that is returned in the <b>GetCategoryFeatures</b> response to indicate which eBay features are available on one more eBay API-enabled sites. If no <b>FeatureID</b> field
 * is included in the call request, all eBay features available for one more eBay API-enabled sites are returned. If one or more <b>FeatureID</b> fields are included in the call request, only those eBay features specified in each <b>FeatureID</b> field
 * are returned in the response.
 * @subpackage Structs
 */
class FeatureDefinitionsType extends AbstractStructBase
{
    /**
     * The ListingDurations
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or
     * classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType $ListingDurations = null;
    /**
     * The ShippingTermsRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require shipping terms at listing time, whiche includesat least one domestic shipping service option and its
     * associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType $ShippingTermsRequired = null;
    /**
     * The BestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item.
     * This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best
     * Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType $BestOfferEnabled = null;
    /**
     * The DutchBINEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType $DutchBINEnabled = null;
    /**
     * The UserConsentRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType $UserConsentRequired = null;
    /**
     * The HomePageFeaturedEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType $HomePageFeaturedEnabled = null;
    /**
     * The ProPackEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType $ProPackEnabled = null;
    /**
     * The BasicUpgradePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType $BasicUpgradePackEnabled = null;
    /**
     * The ValuePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType $ValuePackEnabled = null;
    /**
     * The ProPackPlusEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType $ProPackPlusEnabled = null;
    /**
     * The AdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in
     * the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType $AdFormatEnabled = null;
    /**
     * The BestOfferCounterEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the
     * item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is
     * now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled
     * on the same auction listing. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType $BestOfferCounterEnabled = null;
    /**
     * The BestOfferAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower
     * threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction
     * listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction
     * listing. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType $BestOfferAutoDeclineEnabled = null;
    /**
     * The LocalMarketSpecialitySubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See
     * the <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType $LocalMarketSpecialitySubscription = null;
    /**
     * The LocalMarketRegularSubscription
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the
     * <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType $LocalMarketRegularSubscription = null;
    /**
     * The LocalMarketPremiumSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the
     * <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType $LocalMarketPremiumSubscription = null;
    /**
     * The LocalMarketNonSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or
     * more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the <a href="
     * http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType $LocalMarketNonSubscription = null;
    /**
     * The ExpressEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType $ExpressEnabled = null;
    /**
     * The ExpressPicturesRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType $ExpressPicturesRequired = null;
    /**
     * The ExpressConditionRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType $ExpressConditionRequired = null;
    /**
     * The MinimumReservePrice
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType $MinimumReservePrice = null;
    /**
     * The TransactionConfirmationRequestEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType $TransactionConfirmationRequestEnabled = null;
    /**
     * The SellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a classified ad listing. This feature is only
     * applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType $SellerContactDetailsEnabled = null;
    /**
     * The StoreInventoryEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType $StoreInventoryEnabled = null;
    /**
     * The SkypeMeTransactionalEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType $SkypeMeTransactionalEnabled = null;
    /**
     * The SkypeMeNonTransactionalEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType $SkypeMeNonTransactionalEnabled = null;
    /**
     * The LocalListingDistancesRegular
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local
     * Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType $LocalListingDistancesRegular = null;
    /**
     * The LocalListingDistancesSpecialty
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market
     * listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType $LocalListingDistancesSpecialty = null;
    /**
     * The LocalListingDistancesNonSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings.
     * This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType $LocalListingDistancesNonSubscription = null;
    /**
     * The ClassifiedAdPaymentMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $ClassifiedAdPaymentMethodEnabled = null;
    /**
     * The ClassifiedAdShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for classified ad listings. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $ClassifiedAdShippingMethodEnabled = null;
    /**
     * The ClassifiedAdBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to
     * negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType $ClassifiedAdBestOfferEnabled = null;
    /**
     * The ClassifiedAdCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to
     * negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $ClassifiedAdCounterOfferEnabled = null;
    /**
     * The ClassifiedAdAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a
     * seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $ClassifiedAdAutoDeclineEnabled = null;
    /**
     * The ClassifiedAdContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $ClassifiedAdContactByPhoneEnabled = null;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType $ClassifiedAdContactByEmailEnabled = null;
    /**
     * The SafePaymentRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require at least one form of safe payment. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>SafePaymentRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> For the US, Canada and Australia sites, users registered after January
     * 17, 2007 are required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or one of the credit cards specified in <b>Item.PaymentMethods</b>). <br><br> If a seller has a <code>SafePaymentExempt</code> status, they are exempt from the
     * requirement to offer at least one safe payment method when listing an item on a site that has the safe payment requirement. <br> The safe payment requirement also applies to two-category listings that have one ship-to or available-to location in the
     * US, Canada, or Australia. The French Canadian (CAFR) site is a special case, because listings on the CAFR site with ship-to or available-to locations in Canada do not require a Safe Payment method, yet listings on the CAFR site with ship-to or
     * available-to locations in the US or Australia do require a Safe Payment method. <br><br> The Business and Industrial, Motors, Real Estate, and Mature Audiences categories, and all listings that don't support the <b>Item.PaymentMethods</b> field are
     * exempt from this requirement. Therefore, listings in those categories do not require a safe payment method.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType $SafePaymentRequired = null;
    /**
     * The ClassifiedAdPayPerLeadEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $ClassifiedAdPayPerLeadEnabled = null;
    /**
     * The ItemSpecificsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Item Specifics in listings. Item Specifics are typical aspects that items in a specific category
     * tend to have, and they allow sellers to provide descriptive details of an item in a structured manner. For example, in a jewelry category, sellers might describe lockets with Item Specifics name-value pairs like "Chain Length=18 in." and "Main
     * Shape=Heart", or in a Washers & Dryers category, sellers might include "Type=Top-Loading". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType $ItemSpecificsEnabled = null;
    /**
     * The PaisaPayFullEscrowEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of PaisaPay Full Escrow as a payment method. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaisaPayFullEscrowEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType $PaisaPayFullEscrowEnabled = null;
    /**
     * The ISBNIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType $ISBNIdentifierEnabled = null;
    /**
     * The UPCIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType $UPCIdentifierEnabled = null;
    /**
     * The EANIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType $EANIdentifierEnabled = null;
    /**
     * The BrandMPNIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType $BrandMPNIdentifierEnabled = null;
    /**
     * The BestOfferAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold
     * dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction
     * listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction
     * listing. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType $BestOfferAutoAcceptEnabled = null;
    /**
     * The ClassifiedAdAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a
     * seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $ClassifiedAdAutoAcceptEnabled = null;
    /**
     * The CrossBorderTradeNorthAmericaEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as
     * International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $CrossBorderTradeNorthAmericaEnabled = null;
    /**
     * The CrossBorderTradeGBEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International
     * site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType $CrossBorderTradeGBEnabled = null;
    /**
     * The CrossBorderTradeAustraliaEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $CrossBorderTradeAustraliaEnabled = null;
    /**
     * The PayPalBuyerProtectionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PayPal Purchase Protection. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>PayPalBuyerProtectionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType $PayPalBuyerProtectionEnabled = null;
    /**
     * The BuyerGuaranteeEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType $BuyerGuaranteeEnabled = null;
    /**
     * The CombinedFixedPriceTreatmentEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $CombinedFixedPriceTreatmentEnabled = null;
    /**
     * The GalleryFeaturedDurations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType $GalleryFeaturedDurations = null;
    /**
     * The INEscrowWorkflowTimeline
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PaisaPay Full Escrow workflow timeline.This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>INEscrowWorkflowTimeline</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType $INEscrowWorkflowTimeline = null;
    /**
     * The PayPalRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require that PayPal is included as an accepted payment method. This is not applicable to classified ad listings, as
     * payment is handled by the buyer and seller, and not eBay. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalRequired</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType $PayPalRequired = null;
    /**
     * The eBayMotorsProAdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled = null;
    /**
     * The eBayMotorsProContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled = null;
    /**
     * The eBayMotorsProPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount = null;
    /**
     * The eBayMotorsProContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the seller about a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled = null;
    /**
     * The eBayMotorsProStreetCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount = null;
    /**
     * The eBayMotorsProCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled = null;
    /**
     * The eBayMotorsProContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled = null;
    /**
     * The eBayMotorsProBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and
     * sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled = null;
    /**
     * The eBayMotorsProAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept
     * feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included
     * in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled = null;
    /**
     * The eBayMotorsProAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline
     * feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included
     * in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled = null;
    /**
     * The eBayMotorsProPaymentMethodCheckOutEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled = null;
    /**
     * The eBayMotorsProShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled = null;
    /**
     * The eBayMotorsProCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers
     * and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled = null;
    /**
     * The eBayMotorsProSellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This
     * feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled = null;
    /**
     * The LocalMarketAdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType $LocalMarketAdFormatEnabled = null;
    /**
     * The LocalMarketContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of a phone number when contacting the seller about a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType $LocalMarketContactByPhoneEnabled = null;
    /**
     * The LocalMarketPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType $LocalMarketPhoneCount = null;
    /**
     * The LocalMarketContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of an address when contacting the seller about a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType $LocalMarketContactByAddressEnabled = null;
    /**
     * The LocalMarketStreetCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType $LocalMarketStreetCount = null;
    /**
     * The LocalMarketCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a Motors Local Market listing. This field will not
     * be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType $LocalMarketCompanyNameEnabled = null;
    /**
     * The LocalMarketContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a Motors Local Market listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType $LocalMarketContactByEmailEnabled = null;
    /**
     * The LocalMarketBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers
     * to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType $LocalMarketBestOfferEnabled = null;
    /**
     * The LocalMarketAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows
     * a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType $LocalMarketAutoAcceptEnabled = null;
    /**
     * The LocalMarketAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature
     * allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the
     * call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType $LocalMarketAutoDeclineEnabled = null;
    /**
     * The LocalMarketPaymentMethodCheckOutEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $LocalMarketPaymentMethodCheckOutEnabled = null;
    /**
     * The LocalMarketShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType $LocalMarketShippingMethodEnabled = null;
    /**
     * The LocalMarketCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and
     * sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType $LocalMarketCounterOfferEnabled = null;
    /**
     * The LocalMarketSellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only
     * applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into
     * those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $LocalMarketSellerContactDetailsEnabled = null;
    /**
     * The ClassifiedAdPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType $ClassifiedAdPhoneCount = null;
    /**
     * The ClassifiedAdContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $ClassifiedAdContactByAddressEnabled = null;
    /**
     * The ClassifiedAdStreetCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street addresses for the seller for a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType $ClassifiedAdStreetCount = null;
    /**
     * The ClassifiedAdCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $ClassifiedAdCompanyNameEnabled = null;
    /**
     * The SpecialitySubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType $SpecialitySubscription = null;
    /**
     * The RegularSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType $RegularSubscription = null;
    /**
     * The PremiumSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType $PremiumSubscription = null;
    /**
     * The NonSubscription
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType $NonSubscription = null;
    /**
     * The ReturnPolicyEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType $ReturnPolicyEnabled = null;
    /**
     * The HandlingTimeEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a stated handling time in listings. The handling time is the maximum number of business days the
     * seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType $HandlingTimeEnabled = null;
    /**
     * The PayPalRequiredForStoreOwner
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType $PayPalRequiredForStoreOwner = null;
    /**
     * The ReviseQuantityAllowed
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to
     * auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType $ReviseQuantityAllowed = null;
    /**
     * The RevisePriceAllowed
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction
     * listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType $RevisePriceAllowed = null;
    /**
     * The StoreOwnerExtendedListingDurationsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $StoreOwnerExtendedListingDurationsEnabled = null;
    /**
     * The StoreOwnerExtendedListingDurations
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType $StoreOwnerExtendedListingDurations = null;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods in listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType $PaymentMethod = null;
    /**
     * The Group1MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType $Group1MaxFlatShippingCost = null;
    /**
     * The Group2MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType $Group2MaxFlatShippingCost = null;
    /**
     * The Group3MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType $Group3MaxFlatShippingCost = null;
    /**
     * The MaxFlatShippingCostCBTExempt
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType $MaxFlatShippingCostCBTExempt = null;
    /**
     * The MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType $MaxFlatShippingCost = null;
    /**
     * The VariationsEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically
     * the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable
     * to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType $VariationsEnabled = null;
    /**
     * The AttributeConversionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType $AttributeConversionEnabled = null;
    /**
     * The FreeGalleryPlusEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType $FreeGalleryPlusEnabled = null;
    /**
     * The FreePicturePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support a free Picture Pack upgrade for some categories. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType $FreePicturePackEnabled = null;
    /**
     * The ItemCompatibilityEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a
     * list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType $ItemCompatibilityEnabled = null;
    /**
     * The MaxItemCompatibility
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of compatible applications for items listed with parts compatibilities by
     * application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType $MaxItemCompatibility = null;
    /**
     * The MinItemCompatibility
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a minimum amount for the number of compatible applications for items listed with parts compatibilities by
     * application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType $MinItemCompatibility = null;
    /**
     * The ConditionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the textual description of an item's condition at listing time. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType $ConditionEnabled = null;
    /**
     * The ConditionValues
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType $ConditionValues = null;
    /**
     * The ValueCategory
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support value categories. A Value category will typically have lower listing fees or another eBay promotion. This
     * field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType $ValueCategory = null;
    /**
     * The ProductCreationEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC,
     * ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType $ProductCreationEnabled = null;
    /**
     * The EANEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a
     * <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.EANEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType $EANEnabled = null;
    /**
     * The ISBNEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as
     * a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.ISBNEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType $ISBNEnabled = null;
    /**
     * The UPCEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a
     * <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.UPCEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType $UPCEnabled = null;
    /**
     * The CompatibleVehicleType
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType $CompatibleVehicleType = null;
    /**
     * The MaxGranularFitmentCount
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This
     * field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType $MaxGranularFitmentCount = null;
    /**
     * The PaymentOptionsGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType $PaymentOptionsGroup = null;
    /**
     * The ShippingProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in shipping business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $ShippingProfileCategoryGroup = null;
    /**
     * The PaymentProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in payment business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $PaymentProfileCategoryGroup = null;
    /**
     * The ReturnPolicyProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in return business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $ReturnPolicyProfileCategoryGroup = null;
    /**
     * The VINSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is
     * supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed
     * into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType $VINSupported = null;
    /**
     * The VRMSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is
     * supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType $VRMSupported = null;
    /**
     * The SellerProvidedTitleSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support seller-provided titles in motor vehicle listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType $SellerProvidedTitleSupported = null;
    /**
     * The DepositSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support deposits/down payments for motor vehicle listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType $DepositSupported = null;
    /**
     * The GlobalShippingEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType $GlobalShippingEnabled = null;
    /**
     * The AdditionalCompatibilityEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as
     * <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports
     * Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports Boat and
     * Motorcycle Parts Compatibility, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the
     * <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType $AdditionalCompatibilityEnabled = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The PickupDropOffEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included
     * as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the Click and Collect feature (for most
     * categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the
     * request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request). <br> <br> <span
     * class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically
     * evaluated for Click and Collect eligibility. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType $PickupDropOffEnabled = null;
    /**
     * The DigitalGoodDeliveryEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is
     * included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports digital gift card listings (for most
     * categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in
     * the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request). <br>
     * <br> Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following: <ul> <li>Each seller can only have one gift card listing at any given time </li> <li>The
     * maximum dollar value of the gift card may not exceed 500.00</li> <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li> </ul> For more information on eBay's Gift Card policy, see the <a href="
     * https://www.ebay.com/help/policies/prohibited-restricted-items/gift-cards-policy?id=4294" target="_blank">Gift cards policy</a> help page.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType $DigitalGoodDeliveryEnabled = null;
    /**
     * The EpidSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles
     * and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a
     * <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br/><br/> For more information on using an ePID to identify a compatible motorcycle or scooter through an
     * Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     * http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType $EpidSupported = null;
    /**
     * The KTypeSupported
     * Meta information extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are
     * compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the
     * call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br/><br/> For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API
     * call on the Germany site, see the documentation for the <a href=" http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType $KTypeSupported = null;
    /**
     * The ProductRequiredEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites supports Product-Based Shopping Experience listings (listings associated with eBay catalog products). <br><br> <span
     * class="tablenote"><b>Note:</b> Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, association with an eBay catalog product will no longer be required for any categories on any eBay marketplace.</span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType $ProductRequiredEnabled = null;
    /**
     * The DomesticReturnsAcceptedValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set how to handle domestic returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType $DomesticReturnsAcceptedValues = null;
    /**
     * The InternationalReturnsAcceptedValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set how to handle international returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType $InternationalReturnsAcceptedValues = null;
    /**
     * The DomesticReturnsDurationValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the time duration for domestic returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType $DomesticReturnsDurationValues = null;
    /**
     * The InternationalReturnsDurationValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the time duration for international returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType $InternationalReturnsDurationValues = null;
    /**
     * The DomesticReturnsShipmentPayeeValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType $DomesticReturnsShipmentPayeeValues = null;
    /**
     * The InternationalReturnsShipmentPayeeValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set who pays the shipping for international returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType $InternationalReturnsShipmentPayeeValues = null;
    /**
     * The DomesticRefundMethodValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the method they use to refund domestic returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $DomesticRefundMethodValues = null;
    /**
     * The InternationalRefundMethodValues
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the method they use to refund international returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $InternationalRefundMethodValues = null;
    /**
     * The ReturnPolicyDescriptionEnabled
     * Meta information extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType $ReturnPolicyDescriptionEnabled = null;
    /**
     * Constructor method for FeatureDefinitionsType
     * @uses FeatureDefinitionsType::setListingDurations()
     * @uses FeatureDefinitionsType::setShippingTermsRequired()
     * @uses FeatureDefinitionsType::setBestOfferEnabled()
     * @uses FeatureDefinitionsType::setDutchBINEnabled()
     * @uses FeatureDefinitionsType::setUserConsentRequired()
     * @uses FeatureDefinitionsType::setHomePageFeaturedEnabled()
     * @uses FeatureDefinitionsType::setProPackEnabled()
     * @uses FeatureDefinitionsType::setBasicUpgradePackEnabled()
     * @uses FeatureDefinitionsType::setValuePackEnabled()
     * @uses FeatureDefinitionsType::setProPackPlusEnabled()
     * @uses FeatureDefinitionsType::setAdFormatEnabled()
     * @uses FeatureDefinitionsType::setBestOfferCounterEnabled()
     * @uses FeatureDefinitionsType::setBestOfferAutoDeclineEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketSpecialitySubscription()
     * @uses FeatureDefinitionsType::setLocalMarketRegularSubscription()
     * @uses FeatureDefinitionsType::setLocalMarketPremiumSubscription()
     * @uses FeatureDefinitionsType::setLocalMarketNonSubscription()
     * @uses FeatureDefinitionsType::setExpressEnabled()
     * @uses FeatureDefinitionsType::setExpressPicturesRequired()
     * @uses FeatureDefinitionsType::setExpressConditionRequired()
     * @uses FeatureDefinitionsType::setMinimumReservePrice()
     * @uses FeatureDefinitionsType::setTransactionConfirmationRequestEnabled()
     * @uses FeatureDefinitionsType::setSellerContactDetailsEnabled()
     * @uses FeatureDefinitionsType::setStoreInventoryEnabled()
     * @uses FeatureDefinitionsType::setSkypeMeTransactionalEnabled()
     * @uses FeatureDefinitionsType::setSkypeMeNonTransactionalEnabled()
     * @uses FeatureDefinitionsType::setLocalListingDistancesRegular()
     * @uses FeatureDefinitionsType::setLocalListingDistancesSpecialty()
     * @uses FeatureDefinitionsType::setLocalListingDistancesNonSubscription()
     * @uses FeatureDefinitionsType::setClassifiedAdPaymentMethodEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdShippingMethodEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdBestOfferEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdCounterOfferEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdAutoDeclineEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdContactByPhoneEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdContactByEmailEnabled()
     * @uses FeatureDefinitionsType::setSafePaymentRequired()
     * @uses FeatureDefinitionsType::setClassifiedAdPayPerLeadEnabled()
     * @uses FeatureDefinitionsType::setItemSpecificsEnabled()
     * @uses FeatureDefinitionsType::setPaisaPayFullEscrowEnabled()
     * @uses FeatureDefinitionsType::setISBNIdentifierEnabled()
     * @uses FeatureDefinitionsType::setUPCIdentifierEnabled()
     * @uses FeatureDefinitionsType::setEANIdentifierEnabled()
     * @uses FeatureDefinitionsType::setBrandMPNIdentifierEnabled()
     * @uses FeatureDefinitionsType::setBestOfferAutoAcceptEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdAutoAcceptEnabled()
     * @uses FeatureDefinitionsType::setCrossBorderTradeNorthAmericaEnabled()
     * @uses FeatureDefinitionsType::setCrossBorderTradeGBEnabled()
     * @uses FeatureDefinitionsType::setCrossBorderTradeAustraliaEnabled()
     * @uses FeatureDefinitionsType::setPayPalBuyerProtectionEnabled()
     * @uses FeatureDefinitionsType::setBuyerGuaranteeEnabled()
     * @uses FeatureDefinitionsType::setCombinedFixedPriceTreatmentEnabled()
     * @uses FeatureDefinitionsType::setGalleryFeaturedDurations()
     * @uses FeatureDefinitionsType::setINEscrowWorkflowTimeline()
     * @uses FeatureDefinitionsType::setPayPalRequired()
     * @uses FeatureDefinitionsType::setEBayMotorsProAdFormatEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProContactByPhoneEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProPhoneCount()
     * @uses FeatureDefinitionsType::setEBayMotorsProContactByAddressEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProStreetCount()
     * @uses FeatureDefinitionsType::setEBayMotorsProCompanyNameEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProContactByEmailEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProBestOfferEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProAutoAcceptEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProAutoDeclineEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProPaymentMethodCheckOutEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProShippingMethodEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProCounterOfferEnabled()
     * @uses FeatureDefinitionsType::setEBayMotorsProSellerContactDetailsEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketAdFormatEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketContactByPhoneEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketPhoneCount()
     * @uses FeatureDefinitionsType::setLocalMarketContactByAddressEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketStreetCount()
     * @uses FeatureDefinitionsType::setLocalMarketCompanyNameEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketContactByEmailEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketBestOfferEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketAutoAcceptEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketAutoDeclineEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketPaymentMethodCheckOutEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketShippingMethodEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketCounterOfferEnabled()
     * @uses FeatureDefinitionsType::setLocalMarketSellerContactDetailsEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdPhoneCount()
     * @uses FeatureDefinitionsType::setClassifiedAdContactByAddressEnabled()
     * @uses FeatureDefinitionsType::setClassifiedAdStreetCount()
     * @uses FeatureDefinitionsType::setClassifiedAdCompanyNameEnabled()
     * @uses FeatureDefinitionsType::setSpecialitySubscription()
     * @uses FeatureDefinitionsType::setRegularSubscription()
     * @uses FeatureDefinitionsType::setPremiumSubscription()
     * @uses FeatureDefinitionsType::setNonSubscription()
     * @uses FeatureDefinitionsType::setReturnPolicyEnabled()
     * @uses FeatureDefinitionsType::setHandlingTimeEnabled()
     * @uses FeatureDefinitionsType::setPayPalRequiredForStoreOwner()
     * @uses FeatureDefinitionsType::setReviseQuantityAllowed()
     * @uses FeatureDefinitionsType::setRevisePriceAllowed()
     * @uses FeatureDefinitionsType::setStoreOwnerExtendedListingDurationsEnabled()
     * @uses FeatureDefinitionsType::setStoreOwnerExtendedListingDurations()
     * @uses FeatureDefinitionsType::setPaymentMethod()
     * @uses FeatureDefinitionsType::setGroup1MaxFlatShippingCost()
     * @uses FeatureDefinitionsType::setGroup2MaxFlatShippingCost()
     * @uses FeatureDefinitionsType::setGroup3MaxFlatShippingCost()
     * @uses FeatureDefinitionsType::setMaxFlatShippingCostCBTExempt()
     * @uses FeatureDefinitionsType::setMaxFlatShippingCost()
     * @uses FeatureDefinitionsType::setVariationsEnabled()
     * @uses FeatureDefinitionsType::setAttributeConversionEnabled()
     * @uses FeatureDefinitionsType::setFreeGalleryPlusEnabled()
     * @uses FeatureDefinitionsType::setFreePicturePackEnabled()
     * @uses FeatureDefinitionsType::setItemCompatibilityEnabled()
     * @uses FeatureDefinitionsType::setMaxItemCompatibility()
     * @uses FeatureDefinitionsType::setMinItemCompatibility()
     * @uses FeatureDefinitionsType::setConditionEnabled()
     * @uses FeatureDefinitionsType::setConditionValues()
     * @uses FeatureDefinitionsType::setValueCategory()
     * @uses FeatureDefinitionsType::setProductCreationEnabled()
     * @uses FeatureDefinitionsType::setEANEnabled()
     * @uses FeatureDefinitionsType::setISBNEnabled()
     * @uses FeatureDefinitionsType::setUPCEnabled()
     * @uses FeatureDefinitionsType::setCompatibleVehicleType()
     * @uses FeatureDefinitionsType::setMaxGranularFitmentCount()
     * @uses FeatureDefinitionsType::setPaymentOptionsGroup()
     * @uses FeatureDefinitionsType::setShippingProfileCategoryGroup()
     * @uses FeatureDefinitionsType::setPaymentProfileCategoryGroup()
     * @uses FeatureDefinitionsType::setReturnPolicyProfileCategoryGroup()
     * @uses FeatureDefinitionsType::setVINSupported()
     * @uses FeatureDefinitionsType::setVRMSupported()
     * @uses FeatureDefinitionsType::setSellerProvidedTitleSupported()
     * @uses FeatureDefinitionsType::setDepositSupported()
     * @uses FeatureDefinitionsType::setGlobalShippingEnabled()
     * @uses FeatureDefinitionsType::setAdditionalCompatibilityEnabled()
     * @uses FeatureDefinitionsType::setAny()
     * @uses FeatureDefinitionsType::setPickupDropOffEnabled()
     * @uses FeatureDefinitionsType::setDigitalGoodDeliveryEnabled()
     * @uses FeatureDefinitionsType::setEpidSupported()
     * @uses FeatureDefinitionsType::setKTypeSupported()
     * @uses FeatureDefinitionsType::setProductRequiredEnabled()
     * @uses FeatureDefinitionsType::setDomesticReturnsAcceptedValues()
     * @uses FeatureDefinitionsType::setInternationalReturnsAcceptedValues()
     * @uses FeatureDefinitionsType::setDomesticReturnsDurationValues()
     * @uses FeatureDefinitionsType::setInternationalReturnsDurationValues()
     * @uses FeatureDefinitionsType::setDomesticReturnsShipmentPayeeValues()
     * @uses FeatureDefinitionsType::setInternationalReturnsShipmentPayeeValues()
     * @uses FeatureDefinitionsType::setDomesticRefundMethodValues()
     * @uses FeatureDefinitionsType::setInternationalRefundMethodValues()
     * @uses FeatureDefinitionsType::setReturnPolicyDescriptionEnabled()
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType $listingDurations
     * @param \macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired
     * @param \macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType $bestOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType $dutchBINEnabled
     * @param \macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType $userConsentRequired
     * @param \macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     * @param \macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType $proPackEnabled
     * @param \macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     * @param \macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType $valuePackEnabled
     * @param \macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     * @param \macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType $adFormatEnabled
     * @param \macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     * @param \macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     * @param \macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType $expressEnabled
     * @param \macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     * @param \macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired
     * @param \macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType $minimumReservePrice
     * @param \macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     * @param \macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     * @param \macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     * @param \macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     * @param \macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     * @param \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType $safePaymentRequired
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     * @param \macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     * @param \macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     * @param \macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     * @param \macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     * @param \macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     * @param \macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     * @param \macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     * @param \macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     * @param \macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     * @param \macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     * @param \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     * @param \macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     * @param \macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType $payPalRequired
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     * @param \macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType $specialitySubscription
     * @param \macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType $regularSubscription
     * @param \macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType $premiumSubscription
     * @param \macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType $nonSubscription
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     * @param \macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     * @param \macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     * @param \macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     * @param \macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     * @param \macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType $paymentMethod
     * @param \macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     * @param \macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     * @param \macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     * @param \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     * @param \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     * @param \macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType $variationsEnabled
     * @param \macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     * @param \macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     * @param \macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     * @param \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     * @param \macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType $minItemCompatibility
     * @param \macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType $conditionEnabled
     * @param \macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType $conditionValues
     * @param \macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType $valueCategory
     * @param \macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType $productCreationEnabled
     * @param \macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType $eANEnabled
     * @param \macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType $iSBNEnabled
     * @param \macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType $uPCEnabled
     * @param \macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     * @param \macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     * @param \macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     * @param \macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType $vINSupported
     * @param \macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType $vRMSupported
     * @param \macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     * @param \macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType $depositSupported
     * @param \macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     * @param \macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     * @param \DOMDocument|string|null $any
     * @param \macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     * @param \macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     * @param \macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType $epidSupported
     * @param \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType $kTypeSupported
     * @param \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     * @param \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues
     * @param \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType $listingDurations = null, ?\macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired = null, ?\macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType $bestOfferEnabled = null, ?\macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType $dutchBINEnabled = null, ?\macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType $userConsentRequired = null, ?\macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled = null, ?\macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType $proPackEnabled = null, ?\macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled = null, ?\macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType $valuePackEnabled = null, ?\macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled = null, ?\macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType $adFormatEnabled = null, ?\macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled = null, ?\macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription = null, ?\macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType $expressEnabled = null, ?\macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired = null, ?\macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired = null, ?\macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType $minimumReservePrice = null, ?\macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled = null, ?\macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled = null, ?\macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled = null, ?\macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled = null, ?\macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular = null, ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty = null, ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled = null, ?\macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType $safePaymentRequired = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled = null, ?\macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled = null, ?\macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled = null, ?\macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled = null, ?\macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled = null, ?\macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled = null, ?\macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled = null, ?\macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled = null, ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled = null, ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled = null, ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled = null, ?\macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled = null, ?\macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled = null, ?\macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled = null, ?\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations = null, ?\macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline = null, ?\macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType $payPalRequired = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled = null, ?\macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled = null, ?\macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount = null, ?\macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled = null, ?\macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType $specialitySubscription = null, ?\macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType $regularSubscription = null, ?\macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType $premiumSubscription = null, ?\macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType $nonSubscription = null, ?\macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled = null, ?\macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled = null, ?\macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner = null, ?\macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed = null, ?\macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed = null, ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled = null, ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations = null, ?\macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType $paymentMethod = null, ?\macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost = null, ?\macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost = null, ?\macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost = null, ?\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt = null, ?\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost = null, ?\macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType $variationsEnabled = null, ?\macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled = null, ?\macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled = null, ?\macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled = null, ?\macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled = null, ?\macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility = null, ?\macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType $minItemCompatibility = null, ?\macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType $conditionEnabled = null, ?\macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType $conditionValues = null, ?\macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType $valueCategory = null, ?\macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType $productCreationEnabled = null, ?\macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType $eANEnabled = null, ?\macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType $iSBNEnabled = null, ?\macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType $uPCEnabled = null, ?\macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType = null, ?\macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount = null, ?\macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup = null, ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup = null, ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup = null, ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup = null, ?\macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType $vINSupported = null, ?\macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType $vRMSupported = null, ?\macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported = null, ?\macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType $depositSupported = null, ?\macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled = null, ?\macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled = null, $any = null, ?\macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled = null, ?\macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled = null, ?\macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType $epidSupported = null, ?\macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType $kTypeSupported = null, ?\macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled = null, ?\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues = null, ?\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues = null, ?\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues = null, ?\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues = null, ?\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues = null, ?\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues = null, ?\macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null, ?\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null, ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled = null)
    {
        $this
            ->setListingDurations($listingDurations)
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
            ->setTransactionConfirmationRequestEnabled($transactionConfirmationRequestEnabled)
            ->setSellerContactDetailsEnabled($sellerContactDetailsEnabled)
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
            ->setBestOfferAutoAcceptEnabled($bestOfferAutoAcceptEnabled)
            ->setClassifiedAdAutoAcceptEnabled($classifiedAdAutoAcceptEnabled)
            ->setCrossBorderTradeNorthAmericaEnabled($crossBorderTradeNorthAmericaEnabled)
            ->setCrossBorderTradeGBEnabled($crossBorderTradeGBEnabled)
            ->setCrossBorderTradeAustraliaEnabled($crossBorderTradeAustraliaEnabled)
            ->setPayPalBuyerProtectionEnabled($payPalBuyerProtectionEnabled)
            ->setBuyerGuaranteeEnabled($buyerGuaranteeEnabled)
            ->setCombinedFixedPriceTreatmentEnabled($combinedFixedPriceTreatmentEnabled)
            ->setGalleryFeaturedDurations($galleryFeaturedDurations)
            ->setINEscrowWorkflowTimeline($iNEscrowWorkflowTimeline)
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
            ->setReturnPolicyEnabled($returnPolicyEnabled)
            ->setHandlingTimeEnabled($handlingTimeEnabled)
            ->setPayPalRequiredForStoreOwner($payPalRequiredForStoreOwner)
            ->setReviseQuantityAllowed($reviseQuantityAllowed)
            ->setRevisePriceAllowed($revisePriceAllowed)
            ->setStoreOwnerExtendedListingDurationsEnabled($storeOwnerExtendedListingDurationsEnabled)
            ->setStoreOwnerExtendedListingDurations($storeOwnerExtendedListingDurations)
            ->setPaymentMethod($paymentMethod)
            ->setGroup1MaxFlatShippingCost($group1MaxFlatShippingCost)
            ->setGroup2MaxFlatShippingCost($group2MaxFlatShippingCost)
            ->setGroup3MaxFlatShippingCost($group3MaxFlatShippingCost)
            ->setMaxFlatShippingCostCBTExempt($maxFlatShippingCostCBTExempt)
            ->setMaxFlatShippingCost($maxFlatShippingCost)
            ->setVariationsEnabled($variationsEnabled)
            ->setAttributeConversionEnabled($attributeConversionEnabled)
            ->setFreeGalleryPlusEnabled($freeGalleryPlusEnabled)
            ->setFreePicturePackEnabled($freePicturePackEnabled)
            ->setItemCompatibilityEnabled($itemCompatibilityEnabled)
            ->setMaxItemCompatibility($maxItemCompatibility)
            ->setMinItemCompatibility($minItemCompatibility)
            ->setConditionEnabled($conditionEnabled)
            ->setConditionValues($conditionValues)
            ->setValueCategory($valueCategory)
            ->setProductCreationEnabled($productCreationEnabled)
            ->setEANEnabled($eANEnabled)
            ->setISBNEnabled($iSBNEnabled)
            ->setUPCEnabled($uPCEnabled)
            ->setCompatibleVehicleType($compatibleVehicleType)
            ->setMaxGranularFitmentCount($maxGranularFitmentCount)
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
     * Get ListingDurations value
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType|null
     */
    public function getListingDurations(): ?\macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
    {
        return $this->ListingDurations;
    }
    /**
     * Set ListingDurations value
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType $listingDurations
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setListingDurations(?\macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType $listingDurations = null): self
    {
        $this->ListingDurations = $listingDurations;
        
        return $this;
    }
    /**
     * Get ShippingTermsRequired value
     * @return \macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType|null
     */
    public function getShippingTermsRequired(): ?\macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType
    {
        return $this->ShippingTermsRequired;
    }
    /**
     * Set ShippingTermsRequired value
     * @param \macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setShippingTermsRequired(?\macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired = null): self
    {
        $this->ShippingTermsRequired = $shippingTermsRequired;
        
        return $this;
    }
    /**
     * Get BestOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType|null
     */
    public function getBestOfferEnabled(): ?\macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType $bestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBestOfferEnabled(?\macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType $bestOfferEnabled = null): self
    {
        $this->BestOfferEnabled = $bestOfferEnabled;
        
        return $this;
    }
    /**
     * Get DutchBINEnabled value
     * @return \macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType|null
     */
    public function getDutchBINEnabled(): ?\macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType
    {
        return $this->DutchBINEnabled;
    }
    /**
     * Set DutchBINEnabled value
     * @param \macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType $dutchBINEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDutchBINEnabled(?\macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType $dutchBINEnabled = null): self
    {
        $this->DutchBINEnabled = $dutchBINEnabled;
        
        return $this;
    }
    /**
     * Get UserConsentRequired value
     * @return \macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType|null
     */
    public function getUserConsentRequired(): ?\macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType
    {
        return $this->UserConsentRequired;
    }
    /**
     * Set UserConsentRequired value
     * @param \macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType $userConsentRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setUserConsentRequired(?\macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType $userConsentRequired = null): self
    {
        $this->UserConsentRequired = $userConsentRequired;
        
        return $this;
    }
    /**
     * Get HomePageFeaturedEnabled value
     * @return \macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType|null
     */
    public function getHomePageFeaturedEnabled(): ?\macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType
    {
        return $this->HomePageFeaturedEnabled;
    }
    /**
     * Set HomePageFeaturedEnabled value
     * @param \macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setHomePageFeaturedEnabled(?\macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled = null): self
    {
        $this->HomePageFeaturedEnabled = $homePageFeaturedEnabled;
        
        return $this;
    }
    /**
     * Get ProPackEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType|null
     */
    public function getProPackEnabled(): ?\macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType
    {
        return $this->ProPackEnabled;
    }
    /**
     * Set ProPackEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType $proPackEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setProPackEnabled(?\macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType $proPackEnabled = null): self
    {
        $this->ProPackEnabled = $proPackEnabled;
        
        return $this;
    }
    /**
     * Get BasicUpgradePackEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType|null
     */
    public function getBasicUpgradePackEnabled(): ?\macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType
    {
        return $this->BasicUpgradePackEnabled;
    }
    /**
     * Set BasicUpgradePackEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBasicUpgradePackEnabled(?\macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled = null): self
    {
        $this->BasicUpgradePackEnabled = $basicUpgradePackEnabled;
        
        return $this;
    }
    /**
     * Get ValuePackEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType|null
     */
    public function getValuePackEnabled(): ?\macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType
    {
        return $this->ValuePackEnabled;
    }
    /**
     * Set ValuePackEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType $valuePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setValuePackEnabled(?\macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType $valuePackEnabled = null): self
    {
        $this->ValuePackEnabled = $valuePackEnabled;
        
        return $this;
    }
    /**
     * Get ProPackPlusEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType|null
     */
    public function getProPackPlusEnabled(): ?\macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType
    {
        return $this->ProPackPlusEnabled;
    }
    /**
     * Set ProPackPlusEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setProPackPlusEnabled(?\macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled = null): self
    {
        $this->ProPackPlusEnabled = $proPackPlusEnabled;
        
        return $this;
    }
    /**
     * Get AdFormatEnabled value
     * @return \macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType|null
     */
    public function getAdFormatEnabled(): ?\macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType
    {
        return $this->AdFormatEnabled;
    }
    /**
     * Set AdFormatEnabled value
     * @param \macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType $adFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setAdFormatEnabled(?\macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType $adFormatEnabled = null): self
    {
        $this->AdFormatEnabled = $adFormatEnabled;
        
        return $this;
    }
    /**
     * Get BestOfferCounterEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType|null
     */
    public function getBestOfferCounterEnabled(): ?\macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType
    {
        return $this->BestOfferCounterEnabled;
    }
    /**
     * Set BestOfferCounterEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBestOfferCounterEnabled(?\macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled = null): self
    {
        $this->BestOfferCounterEnabled = $bestOfferCounterEnabled;
        
        return $this;
    }
    /**
     * Get BestOfferAutoDeclineEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType|null
     */
    public function getBestOfferAutoDeclineEnabled(): ?\macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType
    {
        return $this->BestOfferAutoDeclineEnabled;
    }
    /**
     * Set BestOfferAutoDeclineEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBestOfferAutoDeclineEnabled(?\macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled = null): self
    {
        $this->BestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketSpecialitySubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType|null
     */
    public function getLocalMarketSpecialitySubscription(): ?\macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType
    {
        return $this->LocalMarketSpecialitySubscription;
    }
    /**
     * Set LocalMarketSpecialitySubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketSpecialitySubscription(?\macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription = null): self
    {
        $this->LocalMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        
        return $this;
    }
    /**
     * Get LocalMarketRegularSubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType|null
     */
    public function getLocalMarketRegularSubscription(): ?\macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType
    {
        return $this->LocalMarketRegularSubscription;
    }
    /**
     * Set LocalMarketRegularSubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketRegularSubscription(?\macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription = null): self
    {
        $this->LocalMarketRegularSubscription = $localMarketRegularSubscription;
        
        return $this;
    }
    /**
     * Get LocalMarketPremiumSubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType|null
     */
    public function getLocalMarketPremiumSubscription(): ?\macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType
    {
        return $this->LocalMarketPremiumSubscription;
    }
    /**
     * Set LocalMarketPremiumSubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPremiumSubscription(?\macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription = null): self
    {
        $this->LocalMarketPremiumSubscription = $localMarketPremiumSubscription;
        
        return $this;
    }
    /**
     * Get LocalMarketNonSubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType|null
     */
    public function getLocalMarketNonSubscription(): ?\macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType
    {
        return $this->LocalMarketNonSubscription;
    }
    /**
     * Set LocalMarketNonSubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketNonSubscription(?\macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription = null): self
    {
        $this->LocalMarketNonSubscription = $localMarketNonSubscription;
        
        return $this;
    }
    /**
     * Get ExpressEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType|null
     */
    public function getExpressEnabled(): ?\macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType
    {
        return $this->ExpressEnabled;
    }
    /**
     * Set ExpressEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType $expressEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setExpressEnabled(?\macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType $expressEnabled = null): self
    {
        $this->ExpressEnabled = $expressEnabled;
        
        return $this;
    }
    /**
     * Get ExpressPicturesRequired value
     * @return \macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType|null
     */
    public function getExpressPicturesRequired(): ?\macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType
    {
        return $this->ExpressPicturesRequired;
    }
    /**
     * Set ExpressPicturesRequired value
     * @param \macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setExpressPicturesRequired(?\macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired = null): self
    {
        $this->ExpressPicturesRequired = $expressPicturesRequired;
        
        return $this;
    }
    /**
     * Get ExpressConditionRequired value
     * @return \macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType|null
     */
    public function getExpressConditionRequired(): ?\macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType
    {
        return $this->ExpressConditionRequired;
    }
    /**
     * Set ExpressConditionRequired value
     * @param \macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setExpressConditionRequired(?\macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired = null): self
    {
        $this->ExpressConditionRequired = $expressConditionRequired;
        
        return $this;
    }
    /**
     * Get MinimumReservePrice value
     * @return \macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType|null
     */
    public function getMinimumReservePrice(): ?\macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType
    {
        return $this->MinimumReservePrice;
    }
    /**
     * Set MinimumReservePrice value
     * @param \macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType $minimumReservePrice
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMinimumReservePrice(?\macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType $minimumReservePrice = null): self
    {
        $this->MinimumReservePrice = $minimumReservePrice;
        
        return $this;
    }
    /**
     * Get TransactionConfirmationRequestEnabled value
     * @return \macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType|null
     */
    public function getTransactionConfirmationRequestEnabled(): ?\macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType
    {
        return $this->TransactionConfirmationRequestEnabled;
    }
    /**
     * Set TransactionConfirmationRequestEnabled value
     * @param \macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setTransactionConfirmationRequestEnabled(?\macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled = null): self
    {
        $this->TransactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        
        return $this;
    }
    /**
     * Get SellerContactDetailsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType|null
     */
    public function getSellerContactDetailsEnabled(): ?\macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType
    {
        return $this->SellerContactDetailsEnabled;
    }
    /**
     * Set SellerContactDetailsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSellerContactDetailsEnabled(?\macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled = null): self
    {
        $this->SellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        
        return $this;
    }
    /**
     * Get StoreInventoryEnabled value
     * @return \macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType|null
     */
    public function getStoreInventoryEnabled(): ?\macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType
    {
        return $this->StoreInventoryEnabled;
    }
    /**
     * Set StoreInventoryEnabled value
     * @param \macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setStoreInventoryEnabled(?\macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled = null): self
    {
        $this->StoreInventoryEnabled = $storeInventoryEnabled;
        
        return $this;
    }
    /**
     * Get SkypeMeTransactionalEnabled value
     * @return \macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType|null
     */
    public function getSkypeMeTransactionalEnabled(): ?\macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType
    {
        return $this->SkypeMeTransactionalEnabled;
    }
    /**
     * Set SkypeMeTransactionalEnabled value
     * @param \macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSkypeMeTransactionalEnabled(?\macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled = null): self
    {
        $this->SkypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        
        return $this;
    }
    /**
     * Get SkypeMeNonTransactionalEnabled value
     * @return \macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType|null
     */
    public function getSkypeMeNonTransactionalEnabled(): ?\macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType
    {
        return $this->SkypeMeNonTransactionalEnabled;
    }
    /**
     * Set SkypeMeNonTransactionalEnabled value
     * @param \macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSkypeMeNonTransactionalEnabled(?\macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled = null): self
    {
        $this->SkypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        
        return $this;
    }
    /**
     * Get LocalListingDistancesRegular value
     * @return \macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType|null
     */
    public function getLocalListingDistancesRegular(): ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType
    {
        return $this->LocalListingDistancesRegular;
    }
    /**
     * Set LocalListingDistancesRegular value
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesRegular(?\macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular = null): self
    {
        $this->LocalListingDistancesRegular = $localListingDistancesRegular;
        
        return $this;
    }
    /**
     * Get LocalListingDistancesSpecialty value
     * @return \macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType|null
     */
    public function getLocalListingDistancesSpecialty(): ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType
    {
        return $this->LocalListingDistancesSpecialty;
    }
    /**
     * Set LocalListingDistancesSpecialty value
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesSpecialty(?\macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty = null): self
    {
        $this->LocalListingDistancesSpecialty = $localListingDistancesSpecialty;
        
        return $this;
    }
    /**
     * Get LocalListingDistancesNonSubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType|null
     */
    public function getLocalListingDistancesNonSubscription(): ?\macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType
    {
        return $this->LocalListingDistancesNonSubscription;
    }
    /**
     * Set LocalListingDistancesNonSubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesNonSubscription(?\macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription = null): self
    {
        $this->LocalListingDistancesNonSubscription = $localListingDistancesNonSubscription;
        
        return $this;
    }
    /**
     * Get ClassifiedAdPaymentMethodEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType|null
     */
    public function getClassifiedAdPaymentMethodEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType
    {
        return $this->ClassifiedAdPaymentMethodEnabled;
    }
    /**
     * Set ClassifiedAdPaymentMethodEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPaymentMethodEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled = null): self
    {
        $this->ClassifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdShippingMethodEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType|null
     */
    public function getClassifiedAdShippingMethodEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType
    {
        return $this->ClassifiedAdShippingMethodEnabled;
    }
    /**
     * Set ClassifiedAdShippingMethodEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdShippingMethodEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled = null): self
    {
        $this->ClassifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdBestOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType|null
     */
    public function getClassifiedAdBestOfferEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType
    {
        return $this->ClassifiedAdBestOfferEnabled;
    }
    /**
     * Set ClassifiedAdBestOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdBestOfferEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled = null): self
    {
        $this->ClassifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdCounterOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType|null
     */
    public function getClassifiedAdCounterOfferEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType
    {
        return $this->ClassifiedAdCounterOfferEnabled;
    }
    /**
     * Set ClassifiedAdCounterOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdCounterOfferEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled = null): self
    {
        $this->ClassifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdAutoDeclineEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType|null
     */
    public function getClassifiedAdAutoDeclineEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType
    {
        return $this->ClassifiedAdAutoDeclineEnabled;
    }
    /**
     * Set ClassifiedAdAutoDeclineEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdAutoDeclineEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled = null): self
    {
        $this->ClassifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdContactByPhoneEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType|null
     */
    public function getClassifiedAdContactByPhoneEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType
    {
        return $this->ClassifiedAdContactByPhoneEnabled;
    }
    /**
     * Set ClassifiedAdContactByPhoneEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByPhoneEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled = null): self
    {
        $this->ClassifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType|null
     */
    public function getClassifiedAdContactByEmailEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByEmailEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled = null): self
    {
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        
        return $this;
    }
    /**
     * Get SafePaymentRequired value
     * @return \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType|null
     */
    public function getSafePaymentRequired(): ?\macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType
    {
        return $this->SafePaymentRequired;
    }
    /**
     * Set SafePaymentRequired value
     * @param \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType $safePaymentRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSafePaymentRequired(?\macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType $safePaymentRequired = null): self
    {
        $this->SafePaymentRequired = $safePaymentRequired;
        
        return $this;
    }
    /**
     * Get ClassifiedAdPayPerLeadEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType|null
     */
    public function getClassifiedAdPayPerLeadEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType
    {
        return $this->ClassifiedAdPayPerLeadEnabled;
    }
    /**
     * Set ClassifiedAdPayPerLeadEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPayPerLeadEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled = null): self
    {
        $this->ClassifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        
        return $this;
    }
    /**
     * Get ItemSpecificsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType|null
     */
    public function getItemSpecificsEnabled(): ?\macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType
    {
        return $this->ItemSpecificsEnabled;
    }
    /**
     * Set ItemSpecificsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setItemSpecificsEnabled(?\macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled = null): self
    {
        $this->ItemSpecificsEnabled = $itemSpecificsEnabled;
        
        return $this;
    }
    /**
     * Get PaisaPayFullEscrowEnabled value
     * @return \macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType|null
     */
    public function getPaisaPayFullEscrowEnabled(): ?\macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType
    {
        return $this->PaisaPayFullEscrowEnabled;
    }
    /**
     * Set PaisaPayFullEscrowEnabled value
     * @param \macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPaisaPayFullEscrowEnabled(?\macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled = null): self
    {
        $this->PaisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        
        return $this;
    }
    /**
     * Get ISBNIdentifierEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType|null
     */
    public function getISBNIdentifierEnabled(): ?\macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType
    {
        return $this->ISBNIdentifierEnabled;
    }
    /**
     * Set ISBNIdentifierEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setISBNIdentifierEnabled(?\macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled = null): self
    {
        $this->ISBNIdentifierEnabled = $iSBNIdentifierEnabled;
        
        return $this;
    }
    /**
     * Get UPCIdentifierEnabled value
     * @return \macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType|null
     */
    public function getUPCIdentifierEnabled(): ?\macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType
    {
        return $this->UPCIdentifierEnabled;
    }
    /**
     * Set UPCIdentifierEnabled value
     * @param \macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setUPCIdentifierEnabled(?\macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled = null): self
    {
        $this->UPCIdentifierEnabled = $uPCIdentifierEnabled;
        
        return $this;
    }
    /**
     * Get EANIdentifierEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType|null
     */
    public function getEANIdentifierEnabled(): ?\macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType
    {
        return $this->EANIdentifierEnabled;
    }
    /**
     * Set EANIdentifierEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEANIdentifierEnabled(?\macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled = null): self
    {
        $this->EANIdentifierEnabled = $eANIdentifierEnabled;
        
        return $this;
    }
    /**
     * Get BrandMPNIdentifierEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType|null
     */
    public function getBrandMPNIdentifierEnabled(): ?\macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType
    {
        return $this->BrandMPNIdentifierEnabled;
    }
    /**
     * Set BrandMPNIdentifierEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBrandMPNIdentifierEnabled(?\macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled = null): self
    {
        $this->BrandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        
        return $this;
    }
    /**
     * Get BestOfferAutoAcceptEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType|null
     */
    public function getBestOfferAutoAcceptEnabled(): ?\macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType
    {
        return $this->BestOfferAutoAcceptEnabled;
    }
    /**
     * Set BestOfferAutoAcceptEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBestOfferAutoAcceptEnabled(?\macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled = null): self
    {
        $this->BestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdAutoAcceptEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType|null
     */
    public function getClassifiedAdAutoAcceptEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType
    {
        return $this->ClassifiedAdAutoAcceptEnabled;
    }
    /**
     * Set ClassifiedAdAutoAcceptEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdAutoAcceptEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled = null): self
    {
        $this->ClassifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        
        return $this;
    }
    /**
     * Get CrossBorderTradeNorthAmericaEnabled value
     * @return \macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType|null
     */
    public function getCrossBorderTradeNorthAmericaEnabled(): ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType
    {
        return $this->CrossBorderTradeNorthAmericaEnabled;
    }
    /**
     * Set CrossBorderTradeNorthAmericaEnabled value
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeNorthAmericaEnabled(?\macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled = null): self
    {
        $this->CrossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        
        return $this;
    }
    /**
     * Get CrossBorderTradeGBEnabled value
     * @return \macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType|null
     */
    public function getCrossBorderTradeGBEnabled(): ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType
    {
        return $this->CrossBorderTradeGBEnabled;
    }
    /**
     * Set CrossBorderTradeGBEnabled value
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeGBEnabled(?\macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled = null): self
    {
        $this->CrossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        
        return $this;
    }
    /**
     * Get CrossBorderTradeAustraliaEnabled value
     * @return \macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType|null
     */
    public function getCrossBorderTradeAustraliaEnabled(): ?\macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType
    {
        return $this->CrossBorderTradeAustraliaEnabled;
    }
    /**
     * Set CrossBorderTradeAustraliaEnabled value
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeAustraliaEnabled(?\macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled = null): self
    {
        $this->CrossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        
        return $this;
    }
    /**
     * Get PayPalBuyerProtectionEnabled value
     * @return \macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType|null
     */
    public function getPayPalBuyerProtectionEnabled(): ?\macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType
    {
        return $this->PayPalBuyerProtectionEnabled;
    }
    /**
     * Set PayPalBuyerProtectionEnabled value
     * @param \macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPayPalBuyerProtectionEnabled(?\macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled = null): self
    {
        $this->PayPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        
        return $this;
    }
    /**
     * Get BuyerGuaranteeEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType|null
     */
    public function getBuyerGuaranteeEnabled(): ?\macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType
    {
        return $this->BuyerGuaranteeEnabled;
    }
    /**
     * Set BuyerGuaranteeEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBuyerGuaranteeEnabled(?\macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled = null): self
    {
        $this->BuyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        
        return $this;
    }
    /**
     * Get CombinedFixedPriceTreatmentEnabled value
     * @return \macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType|null
     */
    public function getCombinedFixedPriceTreatmentEnabled(): ?\macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType
    {
        return $this->CombinedFixedPriceTreatmentEnabled;
    }
    /**
     * Set CombinedFixedPriceTreatmentEnabled value
     * @param \macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCombinedFixedPriceTreatmentEnabled(?\macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled = null): self
    {
        $this->CombinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        
        return $this;
    }
    /**
     * Get GalleryFeaturedDurations value
     * @return \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType|null
     */
    public function getGalleryFeaturedDurations(): ?\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType
    {
        return $this->GalleryFeaturedDurations;
    }
    /**
     * Set GalleryFeaturedDurations value
     * @param \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGalleryFeaturedDurations(?\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations = null): self
    {
        $this->GalleryFeaturedDurations = $galleryFeaturedDurations;
        
        return $this;
    }
    /**
     * Get INEscrowWorkflowTimeline value
     * @return \macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType|null
     */
    public function getINEscrowWorkflowTimeline(): ?\macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType
    {
        return $this->INEscrowWorkflowTimeline;
    }
    /**
     * Set INEscrowWorkflowTimeline value
     * @param \macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setINEscrowWorkflowTimeline(?\macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline = null): self
    {
        $this->INEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        
        return $this;
    }
    /**
     * Get PayPalRequired value
     * @return \macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType|null
     */
    public function getPayPalRequired(): ?\macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType
    {
        return $this->PayPalRequired;
    }
    /**
     * Set PayPalRequired value
     * @param \macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType $payPalRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPayPalRequired(?\macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType $payPalRequired = null): self
    {
        $this->PayPalRequired = $payPalRequired;
        
        return $this;
    }
    /**
     * Get eBayMotorsProAdFormatEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType|null
     */
    public function getEBayMotorsProAdFormatEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }
    /**
     * Set eBayMotorsProAdFormatEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAdFormatEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled = null): self
    {
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProContactByPhoneEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByPhoneEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }
    /**
     * Set eBayMotorsProContactByPhoneEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByPhoneEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled = null): self
    {
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProPhoneCount value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType|null
     */
    public function getEBayMotorsProPhoneCount(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType
    {
        return $this->eBayMotorsProPhoneCount;
    }
    /**
     * Set eBayMotorsProPhoneCount value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProPhoneCount(?\macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount = null): self
    {
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        
        return $this;
    }
    /**
     * Get eBayMotorsProContactByAddressEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByAddressEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }
    /**
     * Set eBayMotorsProContactByAddressEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByAddressEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled = null): self
    {
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProStreetCount value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType|null
     */
    public function getEBayMotorsProStreetCount(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType
    {
        return $this->eBayMotorsProStreetCount;
    }
    /**
     * Set eBayMotorsProStreetCount value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProStreetCount(?\macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount = null): self
    {
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        
        return $this;
    }
    /**
     * Get eBayMotorsProCompanyNameEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType|null
     */
    public function getEBayMotorsProCompanyNameEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }
    /**
     * Set eBayMotorsProCompanyNameEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProCompanyNameEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled = null): self
    {
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProContactByEmailEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByEmailEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }
    /**
     * Set eBayMotorsProContactByEmailEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByEmailEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled = null): self
    {
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProBestOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType|null
     */
    public function getEBayMotorsProBestOfferEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }
    /**
     * Set eBayMotorsProBestOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProBestOfferEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled = null): self
    {
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProAutoAcceptEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType|null
     */
    public function getEBayMotorsProAutoAcceptEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }
    /**
     * Set eBayMotorsProAutoAcceptEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAutoAcceptEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled = null): self
    {
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProAutoDeclineEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType|null
     */
    public function getEBayMotorsProAutoDeclineEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }
    /**
     * Set eBayMotorsProAutoDeclineEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAutoDeclineEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled = null): self
    {
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProPaymentMethodCheckOutEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType|null
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }
    /**
     * Set eBayMotorsProPaymentMethodCheckOutEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled = null): self
    {
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProShippingMethodEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType|null
     */
    public function getEBayMotorsProShippingMethodEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }
    /**
     * Set eBayMotorsProShippingMethodEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProShippingMethodEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled = null): self
    {
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProCounterOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType|null
     */
    public function getEBayMotorsProCounterOfferEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }
    /**
     * Set eBayMotorsProCounterOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProCounterOfferEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled = null): self
    {
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        
        return $this;
    }
    /**
     * Get eBayMotorsProSellerContactDetailsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType|null
     */
    public function getEBayMotorsProSellerContactDetailsEnabled(): ?\macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }
    /**
     * Set eBayMotorsProSellerContactDetailsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProSellerContactDetailsEnabled(?\macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled = null): self
    {
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketAdFormatEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType|null
     */
    public function getLocalMarketAdFormatEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType
    {
        return $this->LocalMarketAdFormatEnabled;
    }
    /**
     * Set LocalMarketAdFormatEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAdFormatEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled = null): self
    {
        $this->LocalMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketContactByPhoneEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType|null
     */
    public function getLocalMarketContactByPhoneEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType
    {
        return $this->LocalMarketContactByPhoneEnabled;
    }
    /**
     * Set LocalMarketContactByPhoneEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByPhoneEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled = null): self
    {
        $this->LocalMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketPhoneCount value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType|null
     */
    public function getLocalMarketPhoneCount(): ?\macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType
    {
        return $this->LocalMarketPhoneCount;
    }
    /**
     * Set LocalMarketPhoneCount value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPhoneCount(?\macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount = null): self
    {
        $this->LocalMarketPhoneCount = $localMarketPhoneCount;
        
        return $this;
    }
    /**
     * Get LocalMarketContactByAddressEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType|null
     */
    public function getLocalMarketContactByAddressEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType
    {
        return $this->LocalMarketContactByAddressEnabled;
    }
    /**
     * Set LocalMarketContactByAddressEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByAddressEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled = null): self
    {
        $this->LocalMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketStreetCount value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType|null
     */
    public function getLocalMarketStreetCount(): ?\macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType
    {
        return $this->LocalMarketStreetCount;
    }
    /**
     * Set LocalMarketStreetCount value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketStreetCount(?\macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount = null): self
    {
        $this->LocalMarketStreetCount = $localMarketStreetCount;
        
        return $this;
    }
    /**
     * Get LocalMarketCompanyNameEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType|null
     */
    public function getLocalMarketCompanyNameEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType
    {
        return $this->LocalMarketCompanyNameEnabled;
    }
    /**
     * Set LocalMarketCompanyNameEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketCompanyNameEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled = null): self
    {
        $this->LocalMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketContactByEmailEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType|null
     */
    public function getLocalMarketContactByEmailEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType
    {
        return $this->LocalMarketContactByEmailEnabled;
    }
    /**
     * Set LocalMarketContactByEmailEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByEmailEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled = null): self
    {
        $this->LocalMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketBestOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType|null
     */
    public function getLocalMarketBestOfferEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType
    {
        return $this->LocalMarketBestOfferEnabled;
    }
    /**
     * Set LocalMarketBestOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketBestOfferEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled = null): self
    {
        $this->LocalMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketAutoAcceptEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType|null
     */
    public function getLocalMarketAutoAcceptEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType
    {
        return $this->LocalMarketAutoAcceptEnabled;
    }
    /**
     * Set LocalMarketAutoAcceptEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAutoAcceptEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled = null): self
    {
        $this->LocalMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketAutoDeclineEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType|null
     */
    public function getLocalMarketAutoDeclineEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType
    {
        return $this->LocalMarketAutoDeclineEnabled;
    }
    /**
     * Set LocalMarketAutoDeclineEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAutoDeclineEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled = null): self
    {
        $this->LocalMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketPaymentMethodCheckOutEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType|null
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType
    {
        return $this->LocalMarketPaymentMethodCheckOutEnabled;
    }
    /**
     * Set LocalMarketPaymentMethodCheckOutEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled = null): self
    {
        $this->LocalMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketShippingMethodEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType|null
     */
    public function getLocalMarketShippingMethodEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType
    {
        return $this->LocalMarketShippingMethodEnabled;
    }
    /**
     * Set LocalMarketShippingMethodEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketShippingMethodEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled = null): self
    {
        $this->LocalMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketCounterOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType|null
     */
    public function getLocalMarketCounterOfferEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType
    {
        return $this->LocalMarketCounterOfferEnabled;
    }
    /**
     * Set LocalMarketCounterOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketCounterOfferEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled = null): self
    {
        $this->LocalMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        
        return $this;
    }
    /**
     * Get LocalMarketSellerContactDetailsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType|null
     */
    public function getLocalMarketSellerContactDetailsEnabled(): ?\macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType
    {
        return $this->LocalMarketSellerContactDetailsEnabled;
    }
    /**
     * Set LocalMarketSellerContactDetailsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketSellerContactDetailsEnabled(?\macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled = null): self
    {
        $this->LocalMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdPhoneCount value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType|null
     */
    public function getClassifiedAdPhoneCount(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType
    {
        return $this->ClassifiedAdPhoneCount;
    }
    /**
     * Set ClassifiedAdPhoneCount value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPhoneCount(?\macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount = null): self
    {
        $this->ClassifiedAdPhoneCount = $classifiedAdPhoneCount;
        
        return $this;
    }
    /**
     * Get ClassifiedAdContactByAddressEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType|null
     */
    public function getClassifiedAdContactByAddressEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType
    {
        return $this->ClassifiedAdContactByAddressEnabled;
    }
    /**
     * Set ClassifiedAdContactByAddressEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByAddressEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled = null): self
    {
        $this->ClassifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        
        return $this;
    }
    /**
     * Get ClassifiedAdStreetCount value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType|null
     */
    public function getClassifiedAdStreetCount(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType
    {
        return $this->ClassifiedAdStreetCount;
    }
    /**
     * Set ClassifiedAdStreetCount value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdStreetCount(?\macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount = null): self
    {
        $this->ClassifiedAdStreetCount = $classifiedAdStreetCount;
        
        return $this;
    }
    /**
     * Get ClassifiedAdCompanyNameEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType|null
     */
    public function getClassifiedAdCompanyNameEnabled(): ?\macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType
    {
        return $this->ClassifiedAdCompanyNameEnabled;
    }
    /**
     * Set ClassifiedAdCompanyNameEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdCompanyNameEnabled(?\macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled = null): self
    {
        $this->ClassifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        
        return $this;
    }
    /**
     * Get SpecialitySubscription value
     * @return \macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType|null
     */
    public function getSpecialitySubscription(): ?\macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType
    {
        return $this->SpecialitySubscription;
    }
    /**
     * Set SpecialitySubscription value
     * @param \macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType $specialitySubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSpecialitySubscription(?\macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType $specialitySubscription = null): self
    {
        $this->SpecialitySubscription = $specialitySubscription;
        
        return $this;
    }
    /**
     * Get RegularSubscription value
     * @return \macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType|null
     */
    public function getRegularSubscription(): ?\macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType
    {
        return $this->RegularSubscription;
    }
    /**
     * Set RegularSubscription value
     * @param \macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType $regularSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setRegularSubscription(?\macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType $regularSubscription = null): self
    {
        $this->RegularSubscription = $regularSubscription;
        
        return $this;
    }
    /**
     * Get PremiumSubscription value
     * @return \macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType|null
     */
    public function getPremiumSubscription(): ?\macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType
    {
        return $this->PremiumSubscription;
    }
    /**
     * Set PremiumSubscription value
     * @param \macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType $premiumSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPremiumSubscription(?\macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType $premiumSubscription = null): self
    {
        $this->PremiumSubscription = $premiumSubscription;
        
        return $this;
    }
    /**
     * Get NonSubscription value
     * @return \macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType|null
     */
    public function getNonSubscription(): ?\macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType
    {
        return $this->NonSubscription;
    }
    /**
     * Set NonSubscription value
     * @param \macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType $nonSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setNonSubscription(?\macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType $nonSubscription = null): self
    {
        $this->NonSubscription = $nonSubscription;
        
        return $this;
    }
    /**
     * Get ReturnPolicyEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType|null
     */
    public function getReturnPolicyEnabled(): ?\macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType
    {
        return $this->ReturnPolicyEnabled;
    }
    /**
     * Set ReturnPolicyEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyEnabled(?\macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled = null): self
    {
        $this->ReturnPolicyEnabled = $returnPolicyEnabled;
        
        return $this;
    }
    /**
     * Get HandlingTimeEnabled value
     * @return \macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType|null
     */
    public function getHandlingTimeEnabled(): ?\macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType
    {
        return $this->HandlingTimeEnabled;
    }
    /**
     * Set HandlingTimeEnabled value
     * @param \macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setHandlingTimeEnabled(?\macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled = null): self
    {
        $this->HandlingTimeEnabled = $handlingTimeEnabled;
        
        return $this;
    }
    /**
     * Get PayPalRequiredForStoreOwner value
     * @return \macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType|null
     */
    public function getPayPalRequiredForStoreOwner(): ?\macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType
    {
        return $this->PayPalRequiredForStoreOwner;
    }
    /**
     * Set PayPalRequiredForStoreOwner value
     * @param \macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPayPalRequiredForStoreOwner(?\macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner = null): self
    {
        $this->PayPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        
        return $this;
    }
    /**
     * Get ReviseQuantityAllowed value
     * @return \macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType|null
     */
    public function getReviseQuantityAllowed(): ?\macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType
    {
        return $this->ReviseQuantityAllowed;
    }
    /**
     * Set ReviseQuantityAllowed value
     * @param \macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setReviseQuantityAllowed(?\macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed = null): self
    {
        $this->ReviseQuantityAllowed = $reviseQuantityAllowed;
        
        return $this;
    }
    /**
     * Get RevisePriceAllowed value
     * @return \macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType|null
     */
    public function getRevisePriceAllowed(): ?\macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType
    {
        return $this->RevisePriceAllowed;
    }
    /**
     * Set RevisePriceAllowed value
     * @param \macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setRevisePriceAllowed(?\macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed = null): self
    {
        $this->RevisePriceAllowed = $revisePriceAllowed;
        
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurationsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType|null
     */
    public function getStoreOwnerExtendedListingDurationsEnabled(): ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType
    {
        return $this->StoreOwnerExtendedListingDurationsEnabled;
    }
    /**
     * Set StoreOwnerExtendedListingDurationsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setStoreOwnerExtendedListingDurationsEnabled(?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled = null): self
    {
        $this->StoreOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurations value
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType|null
     */
    public function getStoreOwnerExtendedListingDurations(): ?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType
    {
        return $this->StoreOwnerExtendedListingDurations;
    }
    /**
     * Set StoreOwnerExtendedListingDurations value
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setStoreOwnerExtendedListingDurations(?\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations = null): self
    {
        $this->StoreOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return \macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType|null
     */
    public function getPaymentMethod(): ?\macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @param \macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPaymentMethod(?\macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType $paymentMethod = null): self
    {
        $this->PaymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Get Group1MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup1MaxFlatShippingCost(): ?\macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType
    {
        return $this->Group1MaxFlatShippingCost;
    }
    /**
     * Set Group1MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGroup1MaxFlatShippingCost(?\macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost = null): self
    {
        $this->Group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        
        return $this;
    }
    /**
     * Get Group2MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup2MaxFlatShippingCost(): ?\macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType
    {
        return $this->Group2MaxFlatShippingCost;
    }
    /**
     * Set Group2MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGroup2MaxFlatShippingCost(?\macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost = null): self
    {
        $this->Group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        
        return $this;
    }
    /**
     * Get Group3MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup3MaxFlatShippingCost(): ?\macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType
    {
        return $this->Group3MaxFlatShippingCost;
    }
    /**
     * Set Group3MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGroup3MaxFlatShippingCost(?\macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost = null): self
    {
        $this->Group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        
        return $this;
    }
    /**
     * Get MaxFlatShippingCostCBTExempt value
     * @return \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType|null
     */
    public function getMaxFlatShippingCostCBTExempt(): ?\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType
    {
        return $this->MaxFlatShippingCostCBTExempt;
    }
    /**
     * Set MaxFlatShippingCostCBTExempt value
     * @param \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMaxFlatShippingCostCBTExempt(?\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt = null): self
    {
        $this->MaxFlatShippingCostCBTExempt = $maxFlatShippingCostCBTExempt;
        
        return $this;
    }
    /**
     * Get MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType|null
     */
    public function getMaxFlatShippingCost(): ?\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType
    {
        return $this->MaxFlatShippingCost;
    }
    /**
     * Set MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMaxFlatShippingCost(?\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost = null): self
    {
        $this->MaxFlatShippingCost = $maxFlatShippingCost;
        
        return $this;
    }
    /**
     * Get VariationsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType|null
     */
    public function getVariationsEnabled(): ?\macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType
    {
        return $this->VariationsEnabled;
    }
    /**
     * Set VariationsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType $variationsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setVariationsEnabled(?\macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType $variationsEnabled = null): self
    {
        $this->VariationsEnabled = $variationsEnabled;
        
        return $this;
    }
    /**
     * Get AttributeConversionEnabled value
     * @return \macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType|null
     */
    public function getAttributeConversionEnabled(): ?\macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType
    {
        return $this->AttributeConversionEnabled;
    }
    /**
     * Set AttributeConversionEnabled value
     * @param \macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setAttributeConversionEnabled(?\macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled = null): self
    {
        $this->AttributeConversionEnabled = $attributeConversionEnabled;
        
        return $this;
    }
    /**
     * Get FreeGalleryPlusEnabled value
     * @return \macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType|null
     */
    public function getFreeGalleryPlusEnabled(): ?\macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType
    {
        return $this->FreeGalleryPlusEnabled;
    }
    /**
     * Set FreeGalleryPlusEnabled value
     * @param \macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setFreeGalleryPlusEnabled(?\macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled = null): self
    {
        $this->FreeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        
        return $this;
    }
    /**
     * Get FreePicturePackEnabled value
     * @return \macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType|null
     */
    public function getFreePicturePackEnabled(): ?\macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType
    {
        return $this->FreePicturePackEnabled;
    }
    /**
     * Set FreePicturePackEnabled value
     * @param \macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setFreePicturePackEnabled(?\macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled = null): self
    {
        $this->FreePicturePackEnabled = $freePicturePackEnabled;
        
        return $this;
    }
    /**
     * Get ItemCompatibilityEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType|null
     */
    public function getItemCompatibilityEnabled(): ?\macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType
    {
        return $this->ItemCompatibilityEnabled;
    }
    /**
     * Set ItemCompatibilityEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setItemCompatibilityEnabled(?\macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled = null): self
    {
        $this->ItemCompatibilityEnabled = $itemCompatibilityEnabled;
        
        return $this;
    }
    /**
     * Get MaxItemCompatibility value
     * @return \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType|null
     */
    public function getMaxItemCompatibility(): ?\macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType
    {
        return $this->MaxItemCompatibility;
    }
    /**
     * Set MaxItemCompatibility value
     * @param \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMaxItemCompatibility(?\macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility = null): self
    {
        $this->MaxItemCompatibility = $maxItemCompatibility;
        
        return $this;
    }
    /**
     * Get MinItemCompatibility value
     * @return \macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType|null
     */
    public function getMinItemCompatibility(): ?\macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType
    {
        return $this->MinItemCompatibility;
    }
    /**
     * Set MinItemCompatibility value
     * @param \macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType $minItemCompatibility
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMinItemCompatibility(?\macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType $minItemCompatibility = null): self
    {
        $this->MinItemCompatibility = $minItemCompatibility;
        
        return $this;
    }
    /**
     * Get ConditionEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType|null
     */
    public function getConditionEnabled(): ?\macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType
    {
        return $this->ConditionEnabled;
    }
    /**
     * Set ConditionEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType $conditionEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setConditionEnabled(?\macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType $conditionEnabled = null): self
    {
        $this->ConditionEnabled = $conditionEnabled;
        
        return $this;
    }
    /**
     * Get ConditionValues value
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType|null
     */
    public function getConditionValues(): ?\macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType
    {
        return $this->ConditionValues;
    }
    /**
     * Set ConditionValues value
     * @param \macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType $conditionValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setConditionValues(?\macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType $conditionValues = null): self
    {
        $this->ConditionValues = $conditionValues;
        
        return $this;
    }
    /**
     * Get ValueCategory value
     * @return \macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType|null
     */
    public function getValueCategory(): ?\macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType
    {
        return $this->ValueCategory;
    }
    /**
     * Set ValueCategory value
     * @param \macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType $valueCategory
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setValueCategory(?\macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType $valueCategory = null): self
    {
        $this->ValueCategory = $valueCategory;
        
        return $this;
    }
    /**
     * Get ProductCreationEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType|null
     */
    public function getProductCreationEnabled(): ?\macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType
    {
        return $this->ProductCreationEnabled;
    }
    /**
     * Set ProductCreationEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType $productCreationEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setProductCreationEnabled(?\macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType $productCreationEnabled = null): self
    {
        $this->ProductCreationEnabled = $productCreationEnabled;
        
        return $this;
    }
    /**
     * Get EANEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType|null
     */
    public function getEANEnabled(): ?\macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType
    {
        return $this->EANEnabled;
    }
    /**
     * Set EANEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType $eANEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEANEnabled(?\macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType $eANEnabled = null): self
    {
        $this->EANEnabled = $eANEnabled;
        
        return $this;
    }
    /**
     * Get ISBNEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType|null
     */
    public function getISBNEnabled(): ?\macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType
    {
        return $this->ISBNEnabled;
    }
    /**
     * Set ISBNEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType $iSBNEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setISBNEnabled(?\macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType $iSBNEnabled = null): self
    {
        $this->ISBNEnabled = $iSBNEnabled;
        
        return $this;
    }
    /**
     * Get UPCEnabled value
     * @return \macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType|null
     */
    public function getUPCEnabled(): ?\macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType
    {
        return $this->UPCEnabled;
    }
    /**
     * Set UPCEnabled value
     * @param \macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType $uPCEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setUPCEnabled(?\macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType $uPCEnabled = null): self
    {
        $this->UPCEnabled = $uPCEnabled;
        
        return $this;
    }
    /**
     * Get CompatibleVehicleType value
     * @return \macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType|null
     */
    public function getCompatibleVehicleType(): ?\macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType
    {
        return $this->CompatibleVehicleType;
    }
    /**
     * Set CompatibleVehicleType value
     * @param \macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCompatibleVehicleType(?\macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType = null): self
    {
        $this->CompatibleVehicleType = $compatibleVehicleType;
        
        return $this;
    }
    /**
     * Get MaxGranularFitmentCount value
     * @return \macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType|null
     */
    public function getMaxGranularFitmentCount(): ?\macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType
    {
        return $this->MaxGranularFitmentCount;
    }
    /**
     * Set MaxGranularFitmentCount value
     * @param \macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMaxGranularFitmentCount(?\macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount = null): self
    {
        $this->MaxGranularFitmentCount = $maxGranularFitmentCount;
        
        return $this;
    }
    /**
     * Get PaymentOptionsGroup value
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType|null
     */
    public function getPaymentOptionsGroup(): ?\macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType
    {
        return $this->PaymentOptionsGroup;
    }
    /**
     * Set PaymentOptionsGroup value
     * @param \macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPaymentOptionsGroup(?\macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup = null): self
    {
        $this->PaymentOptionsGroup = $paymentOptionsGroup;
        
        return $this;
    }
    /**
     * Get ShippingProfileCategoryGroup value
     * @return \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getShippingProfileCategoryGroup(): ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType
    {
        return $this->ShippingProfileCategoryGroup;
    }
    /**
     * Set ShippingProfileCategoryGroup value
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setShippingProfileCategoryGroup(?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup = null): self
    {
        $this->ShippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        
        return $this;
    }
    /**
     * Get PaymentProfileCategoryGroup value
     * @return \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getPaymentProfileCategoryGroup(): ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType
    {
        return $this->PaymentProfileCategoryGroup;
    }
    /**
     * Set PaymentProfileCategoryGroup value
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPaymentProfileCategoryGroup(?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup = null): self
    {
        $this->PaymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        
        return $this;
    }
    /**
     * Get ReturnPolicyProfileCategoryGroup value
     * @return \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getReturnPolicyProfileCategoryGroup(): ?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType
    {
        return $this->ReturnPolicyProfileCategoryGroup;
    }
    /**
     * Set ReturnPolicyProfileCategoryGroup value
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyProfileCategoryGroup(?\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup = null): self
    {
        $this->ReturnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        
        return $this;
    }
    /**
     * Get VINSupported value
     * @return \macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType|null
     */
    public function getVINSupported(): ?\macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType
    {
        return $this->VINSupported;
    }
    /**
     * Set VINSupported value
     * @param \macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType $vINSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setVINSupported(?\macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType $vINSupported = null): self
    {
        $this->VINSupported = $vINSupported;
        
        return $this;
    }
    /**
     * Get VRMSupported value
     * @return \macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType|null
     */
    public function getVRMSupported(): ?\macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType
    {
        return $this->VRMSupported;
    }
    /**
     * Set VRMSupported value
     * @param \macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType $vRMSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setVRMSupported(?\macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType $vRMSupported = null): self
    {
        $this->VRMSupported = $vRMSupported;
        
        return $this;
    }
    /**
     * Get SellerProvidedTitleSupported value
     * @return \macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType|null
     */
    public function getSellerProvidedTitleSupported(): ?\macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType
    {
        return $this->SellerProvidedTitleSupported;
    }
    /**
     * Set SellerProvidedTitleSupported value
     * @param \macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSellerProvidedTitleSupported(?\macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported = null): self
    {
        $this->SellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        
        return $this;
    }
    /**
     * Get DepositSupported value
     * @return \macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType|null
     */
    public function getDepositSupported(): ?\macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType
    {
        return $this->DepositSupported;
    }
    /**
     * Set DepositSupported value
     * @param \macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType $depositSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDepositSupported(?\macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType $depositSupported = null): self
    {
        $this->DepositSupported = $depositSupported;
        
        return $this;
    }
    /**
     * Get GlobalShippingEnabled value
     * @return \macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType|null
     */
    public function getGlobalShippingEnabled(): ?\macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType
    {
        return $this->GlobalShippingEnabled;
    }
    /**
     * Set GlobalShippingEnabled value
     * @param \macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGlobalShippingEnabled(?\macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled = null): self
    {
        $this->GlobalShippingEnabled = $globalShippingEnabled;
        
        return $this;
    }
    /**
     * Get AdditionalCompatibilityEnabled value
     * @return \macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType|null
     */
    public function getAdditionalCompatibilityEnabled(): ?\macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType
    {
        return $this->AdditionalCompatibilityEnabled;
    }
    /**
     * Set AdditionalCompatibilityEnabled value
     * @param \macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setAdditionalCompatibilityEnabled(?\macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled = null): self
    {
        $this->AdditionalCompatibilityEnabled = $additionalCompatibilityEnabled;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
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
    /**
     * Get PickupDropOffEnabled value
     * @return \macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType|null
     */
    public function getPickupDropOffEnabled(): ?\macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType
    {
        return $this->PickupDropOffEnabled;
    }
    /**
     * Set PickupDropOffEnabled value
     * @param \macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPickupDropOffEnabled(?\macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled = null): self
    {
        $this->PickupDropOffEnabled = $pickupDropOffEnabled;
        
        return $this;
    }
    /**
     * Get DigitalGoodDeliveryEnabled value
     * @return \macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType|null
     */
    public function getDigitalGoodDeliveryEnabled(): ?\macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType
    {
        return $this->DigitalGoodDeliveryEnabled;
    }
    /**
     * Set DigitalGoodDeliveryEnabled value
     * @param \macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDigitalGoodDeliveryEnabled(?\macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled = null): self
    {
        $this->DigitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        
        return $this;
    }
    /**
     * Get EpidSupported value
     * @return \macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType|null
     */
    public function getEpidSupported(): ?\macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType
    {
        return $this->EpidSupported;
    }
    /**
     * Set EpidSupported value
     * @param \macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType $epidSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEpidSupported(?\macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType $epidSupported = null): self
    {
        $this->EpidSupported = $epidSupported;
        
        return $this;
    }
    /**
     * Get KTypeSupported value
     * @return \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType|null
     */
    public function getKTypeSupported(): ?\macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType
    {
        return $this->KTypeSupported;
    }
    /**
     * Set KTypeSupported value
     * @param \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType $kTypeSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setKTypeSupported(?\macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType $kTypeSupported = null): self
    {
        $this->KTypeSupported = $kTypeSupported;
        
        return $this;
    }
    /**
     * Get ProductRequiredEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType|null
     */
    public function getProductRequiredEnabled(): ?\macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType
    {
        return $this->ProductRequiredEnabled;
    }
    /**
     * Set ProductRequiredEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setProductRequiredEnabled(?\macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled = null): self
    {
        $this->ProductRequiredEnabled = $productRequiredEnabled;
        
        return $this;
    }
    /**
     * Get DomesticReturnsAcceptedValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType|null
     */
    public function getDomesticReturnsAcceptedValues(): ?\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType
    {
        return $this->DomesticReturnsAcceptedValues;
    }
    /**
     * Set DomesticReturnsAcceptedValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsAcceptedValues(?\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues = null): self
    {
        $this->DomesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType|null
     */
    public function getInternationalReturnsAcceptedValues(): ?\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType
    {
        return $this->InternationalReturnsAcceptedValues;
    }
    /**
     * Set InternationalReturnsAcceptedValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsAcceptedValues(?\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues = null): self
    {
        $this->InternationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        
        return $this;
    }
    /**
     * Get DomesticReturnsDurationValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType|null
     */
    public function getDomesticReturnsDurationValues(): ?\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType
    {
        return $this->DomesticReturnsDurationValues;
    }
    /**
     * Set DomesticReturnsDurationValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsDurationValues(?\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues = null): self
    {
        $this->DomesticReturnsDurationValues = $domesticReturnsDurationValues;
        
        return $this;
    }
    /**
     * Get InternationalReturnsDurationValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType|null
     */
    public function getInternationalReturnsDurationValues(): ?\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType
    {
        return $this->InternationalReturnsDurationValues;
    }
    /**
     * Set InternationalReturnsDurationValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsDurationValues(?\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues = null): self
    {
        $this->InternationalReturnsDurationValues = $internationalReturnsDurationValues;
        
        return $this;
    }
    /**
     * Get DomesticReturnsShipmentPayeeValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType|null
     */
    public function getDomesticReturnsShipmentPayeeValues(): ?\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType
    {
        return $this->DomesticReturnsShipmentPayeeValues;
    }
    /**
     * Set DomesticReturnsShipmentPayeeValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsShipmentPayeeValues(?\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues = null): self
    {
        $this->DomesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        
        return $this;
    }
    /**
     * Get InternationalReturnsShipmentPayeeValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType|null
     */
    public function getInternationalReturnsShipmentPayeeValues(): ?\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType
    {
        return $this->InternationalReturnsShipmentPayeeValues;
    }
    /**
     * Set InternationalReturnsShipmentPayeeValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsShipmentPayeeValues(?\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setInternationalRefundMethodValues(?\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null): self
    {
        $this->InternationalRefundMethodValues = $internationalRefundMethodValues;
        
        return $this;
    }
    /**
     * Get ReturnPolicyDescriptionEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType|null
     */
    public function getReturnPolicyDescriptionEnabled(): ?\macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType
    {
        return $this->ReturnPolicyDescriptionEnabled;
    }
    /**
     * Set ReturnPolicyDescriptionEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyDescriptionEnabled(?\macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled = null): self
    {
        $this->ReturnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
        
        return $this;
    }
}
