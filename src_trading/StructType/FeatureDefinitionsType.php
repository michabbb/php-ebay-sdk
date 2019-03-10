<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeatureDefinitionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>FeatureDefinitions</b> container that is returned in the <b>GetCategoryFeatures</b> response to indicate which eBay features are available on one more eBay API-enabled sites. If no <b>FeatureID</b> field
 * is included in the call request, all eBay features available for one more eBay API-enabled sites are returned. If one or more <b>FeatureID</b> fields are included in the call request, only those eBay features specified in each <b>FeatureID</b> field
 * are returned in the response.
 * @subpackage Structs
 */
class FeatureDefinitionsType extends AbstractStructBase
{
    /**
     * The ListingDurations
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support listing durations. Listing durations will vary based on the selling format (auction, fixed-price, or
     * classified ad) and the eBay category. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ListingDurations</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
     */
    public $ListingDurations;
    /**
     * The ShippingTermsRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require shipping terms at listing time, whiche includesat least one domestic shipping service option and its
     * associated costs. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ShippingTermsRequired</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType
     */
    public $ShippingTermsRequired;
    /**
     * The BestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature. The Best Offer feature allows buyers and sellers to negotiate the price of the item.
     * Best Offer is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType
     */
    public $BestOfferEnabled;
    /**
     * The DutchBINEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType
     */
    public $DutchBINEnabled;
    /**
     * The UserConsentRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType
     */
    public $UserConsentRequired;
    /**
     * The HomePageFeaturedEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the temporary display of a seller's listing on a section of the eBay Home Page. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>HomePageFeaturedEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType
     */
    public $HomePageFeaturedEnabled;
    /**
     * The ProPackEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ProPackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType
     */
    public $ProPackEnabled;
    /**
     * The BasicUpgradePackEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType
     */
    public $BasicUpgradePackEnabled;
    /**
     * The ValuePackEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Value Pack listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ValuePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType
     */
    public $ValuePackEnabled;
    /**
     * The ProPackPlusEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Pro Pack Plus listing upgrade bundle. This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>ProPackPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType
     */
    public $ProPackPlusEnabled;
    /**
     * The AdFormatEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Classified Ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in
     * the call request and <code>AdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType
     */
    public $AdFormatEnabled;
    /**
     * The BestOfferCounterEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers. The Best Offer feature allows buyers and sellers to negotiate the price of the
     * item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. The Best Offer feature is not applicable to auction listings. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>BestOfferCounterEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType
     */
    public $BestOfferCounterEnabled;
    /**
     * The BestOfferAutoDeclineEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature. The Best Offer Auto-Decline feature allows a seller to set a lower
     * threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. The Best Offer feature is not applicable to auction listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>BestOfferAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType
     */
    public $BestOfferAutoDeclineEnabled;
    /**
     * The LocalMarketSpecialitySubscription
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a specialty subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSpecialitySubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See
     * the <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType
     */
    public $LocalMarketSpecialitySubscription;
    /**
     * The LocalMarketRegularSubscription
     * Meta informations extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a regular subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketRegularSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the
     * <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType
     */
    public $LocalMarketRegularSubscription;
    /**
     * The LocalMarketPremiumSubscription
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealership subscribers with a premium subscription. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPremiumSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the
     * <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType
     */
    public $LocalMarketPremiumSubscription;
    /**
     * The LocalMarketNonSubscription
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings for dealerships without a subscription. This field will not be returned if one or
     * more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketNonSubscription</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the <a href="
     * http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType
     */
    public $LocalMarketNonSubscription;
    /**
     * The ExpressEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType
     */
    public $ExpressEnabled;
    /**
     * The ExpressPicturesRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType
     */
    public $ExpressPicturesRequired;
    /**
     * The ExpressConditionRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType
     */
    public $ExpressConditionRequired;
    /**
     * The MinimumReservePrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require a minimum reserve price for an auction item. This feature is only applicable to auction listings. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MinimumReservePrice</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType
     */
    public $MinimumReservePrice;
    /**
     * The TransactionConfirmationRequestEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType
     */
    public $TransactionConfirmationRequestEnabled;
    /**
     * The SellerContactDetailsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a classified ad listing. This feature is only
     * applicable to classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>SellerContactDetailsEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType
     */
    public $SellerContactDetailsEnabled;
    /**
     * The StoreInventoryEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType
     */
    public $StoreInventoryEnabled;
    /**
     * The SkypeMeTransactionalEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType
     */
    public $SkypeMeTransactionalEnabled;
    /**
     * The SkypeMeNonTransactionalEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType
     */
    public $SkypeMeNonTransactionalEnabled;
    /**
     * The LocalListingDistancesRegular
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support allow dealership subscribers with a regular subscription to specify local market radius for Motors Local
     * Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesRegular</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType
     */
    public $LocalListingDistancesRegular;
    /**
     * The LocalListingDistancesSpecialty
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers with a specialty subscription to specify local market radius for Motors Local Market
     * listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesSpecialty</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType
     */
    public $LocalListingDistancesSpecialty;
    /**
     * The LocalListingDistancesNonSubscription
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow dealership subscribers without a subscription to specify local market radius for Motors Local Market listings.
     * This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalListingDistancesNonSubscription</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> See the <a href=" http://pages.ebay.com/help/sell/formats.html#market" target="_blank">Motors Local Market listing help topic</a> for more information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType
     */
    public $LocalListingDistancesNonSubscription;
    /**
     * The ClassifiedAdPaymentMethodEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for classified ad listings. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPaymentMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType
     */
    public $ClassifiedAdPaymentMethodEnabled;
    /**
     * The ClassifiedAdShippingMethodEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for classified ad listings. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType
     */
    public $ClassifiedAdShippingMethodEnabled;
    /**
     * The ClassifiedAdBestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature for classified ad listings. The Best Offer feature allows buyers and sellers to
     * negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType
     */
    public $ClassifiedAdBestOfferEnabled;
    /**
     * The ClassifiedAdCounterOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for classified ad listings. The Best Offer feature allows buyers and sellers to
     * negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType
     */
    public $ClassifiedAdCounterOfferEnabled;
    /**
     * The ClassifiedAdAutoDeclineEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for classified ad listings. The Best Offer Auto-Decline feature allows a
     * seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>ClassifiedAdAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType
     */
    public $ClassifiedAdAutoDeclineEnabled;
    /**
     * The ClassifiedAdContactByPhoneEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType
     */
    public $ClassifiedAdContactByPhoneEnabled;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType
     */
    public $ClassifiedAdContactByEmailEnabled;
    /**
     * The SafePaymentRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require at least one form of safe payment. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>SafePaymentRequired</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br><br> For the US, Canada and Australia sites, users registered after January
     * 17, 2007 are required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or one of the credit cards specified in <b>Item.PaymentMethods</b>). <br><br> If a seller has a <code>SafePaymentExempt</code> status, they are exempt from the
     * requirement to offer at least one safe payment method when listing an item on a site that has the safe payment requirement. <br> The safe payment requirement also applies to two-category listings that have one ship-to or available-to location in the
     * US, Canada, or Australia. The French Canadian (CAFR) site is a special case, because listings on the CAFR site with ship-to or available-to locations in Canada do not require a Safe Payment method, yet listings on the CAFR site with ship-to or
     * available-to locations in the US or Australia do require a Safe Payment method. <br><br> The Business and Industrial, Motors, Real Estate, and Mature Audiences categories, and all listings that don't support the <b>Item.PaymentMethods</b> field are
     * exempt from this requirement. Therefore, listings in those categories do not require a safe payment method.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType
     */
    public $SafePaymentRequired;
    /**
     * The ClassifiedAdPayPerLeadEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType
     */
    public $ClassifiedAdPayPerLeadEnabled;
    /**
     * The ItemSpecificsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of customized Item Specifics in listings. Item Specifics are typical aspects of items in the same
     * category. They enable users to classify items by presenting descriptive details in a structured way. For example, in a jewelry category, sellers might describe lockets with specifics like "Chain Length=18 in." and "Main Shape=Heart", but in a Washers
     * & Dryers category, sellers might include "Type=Top-Loading" instead of "Main Shape=Heart". This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemSpecificsEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType
     */
    public $ItemSpecificsEnabled;
    /**
     * The PaisaPayFullEscrowEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of PaisaPay Full Escrow as a payment method. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaisaPayFullEscrowEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType
     */
    public $PaisaPayFullEscrowEnabled;
    /**
     * The ISBNIdentifierEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType
     */
    public $ISBNIdentifierEnabled;
    /**
     * The UPCIdentifierEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType
     */
    public $UPCIdentifierEnabled;
    /**
     * The EANIdentifierEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType
     */
    public $EANIdentifierEnabled;
    /**
     * The BrandMPNIdentifierEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of Brand and MPN (Manufacturer Part Number) to identify a product. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>BrandMPNIdentifierEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType
     */
    public $BrandMPNIdentifierEnabled;
    /**
     * The BestOfferAutoAcceptEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature. The Best Offer Auto-Accept feature allows a seller to set a threshold
     * dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. The Best Offer feature is not applicable to auction listings. This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>BestOfferAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType
     */
    public $BestOfferAutoAcceptEnabled;
    /**
     * The ClassifiedAdAutoAcceptEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for classified ad listings. The Best Offer Auto-Accept feature allows a
     * seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>ClassifiedAdAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType
     */
    public $ClassifiedAdAutoAcceptEnabled;
    /**
     * The CrossBorderTradeNorthAmericaEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the US and CA (English) sites. In cross-border trading, also referred to as
     * International site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>CrossBorderTradeNorthAmericaEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br/><br/> See the <a href=" http://pages.ebay.com/help/sell/globalexposure.html"
     * target="_blank">Getting exposure on international sites</a> help page for more information on cross-border trade.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType
     */
    public $CrossBorderTradeNorthAmericaEnabled;
    /**
     * The CrossBorderTradeGBEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support cross-border trading on the UK and Ireland sites. In cross-border trading, also referred to as International
     * site visibility, a seller is able to post a listing to an additional eBay site for an additional small fee. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>CrossBorderTradeGBEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields. <br/><br/> See the <a href=" http://pages.ebay.com/help/sell/globalexposure.html" target="_blank">Getting
     * exposure on international sites</a> help page for more information on cross-border trade.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType
     */
    public $CrossBorderTradeGBEnabled;
    /**
     * The CrossBorderTradeAustraliaEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is for future use, as cross-border trading (aka International site visibility) is not currently supported for Australia.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType
     */
    public $CrossBorderTradeAustraliaEnabled;
    /**
     * The PayPalBuyerProtectionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PayPal Purchase Protection. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>PayPalBuyerProtectionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType
     */
    public $PayPalBuyerProtectionEnabled;
    /**
     * The BuyerGuaranteeEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType
     */
    public $BuyerGuaranteeEnabled;
    /**
     * The CombinedFixedPriceTreatmentEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType
     */
    public $CombinedFixedPriceTreatmentEnabled;
    /**
     * The GalleryFeaturedDurations
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType
     */
    public $GalleryFeaturedDurations;
    /**
     * The INEscrowWorkflowTimeline
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support PaisaPay Full Escrow workflow timeline.This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>INEscrowWorkflowTimeline</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType
     */
    public $INEscrowWorkflowTimeline;
    /**
     * The PayPalRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites require that PayPal is included as an accepted payment method. This is not applicable to classified ad listings, as
     * payment is handled by the buyer and seller, and not eBay. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>PayPalRequired</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType
     */
    public $PayPalRequired;
    /**
     * The eBayMotorsProAdFormatEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>eBayMotorsProAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType
     */
    public $eBayMotorsProAdFormatEnabled;
    /**
     * The eBayMotorsProContactByPhoneEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a phone number when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType
     */
    public $eBayMotorsProContactByPhoneEnabled;
    /**
     * The eBayMotorsProPhoneCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType
     */
    public $eBayMotorsProPhoneCount;
    /**
     * The eBayMotorsProContactByAddressEnabled
     * Meta informations extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the seller about a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType
     */
    public $eBayMotorsProContactByAddressEnabled;
    /**
     * The eBayMotorsProStreetCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street address for the seller for a motor vehicle classified ad listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType
     */
    public $eBayMotorsProStreetCount;
    /**
     * The eBayMotorsProCompanyNameEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType
     */
    public $eBayMotorsProCompanyNameEnabled;
    /**
     * The eBayMotorsProContactByEmailEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a motor vehicle classified ad listing. This field
     * will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType
     */
    public $eBayMotorsProContactByEmailEnabled;
    /**
     * The eBayMotorsProBestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for motor vehicle classified ad listings. The Best Offer feature allows buyers and
     * sellers to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType
     */
    public $eBayMotorsProBestOfferEnabled;
    /**
     * The eBayMotorsProAutoAcceptEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for motor vehicle classified ad listings. The Best Offer Auto-Accept
     * feature allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included
     * in the call request and <code>eBayMotorsProAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType
     */
    public $eBayMotorsProAutoAcceptEnabled;
    /**
     * The eBayMotorsProAutoDeclineEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for motor vehicle classified ad listings. The Best Offer Auto-Decline
     * feature allows a seller to set a lower threshold dollar value on a listing, and any Best Offer amount below this amount is automatically declined by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included
     * in the call request and <code>eBayMotorsProAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a> fields.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType
     */
    public $eBayMotorsProAutoDeclineEnabled;
    /**
     * The eBayMotorsProPaymentMethodCheckOutEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for motor vehicle classified ad listings. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
     */
    public $eBayMotorsProPaymentMethodCheckOutEnabled;
    /**
     * The eBayMotorsProShippingMethodEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for motor vehicle classified ad listings. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType
     */
    public $eBayMotorsProShippingMethodEnabled;
    /**
     * The eBayMotorsProCounterOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for motor vehicle classified ad listings. The Best Offer feature allows buyers
     * and sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType
     */
    public $eBayMotorsProCounterOfferEnabled;
    /**
     * The eBayMotorsProSellerContactDetailsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for a motor vehicle classified ad listing. This
     * feature is only applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>eBayMotorsProSellerContactDetailsEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType
     */
    public $eBayMotorsProSellerContactDetailsEnabled;
    /**
     * The LocalMarketAdFormatEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Motors Local Market listings. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>LocalMarketAdFormatEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType
     */
    public $LocalMarketAdFormatEnabled;
    /**
     * The LocalMarketContactByPhoneEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of a phone number when contacting the seller about a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByPhoneEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType
     */
    public $LocalMarketContactByPhoneEnabled;
    /**
     * The LocalMarketPhoneCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple phone numbers for the seller for a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType
     */
    public $LocalMarketPhoneCount;
    /**
     * The LocalMarketContactByAddressEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of an address when contacting the seller about a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType
     */
    public $LocalMarketContactByAddressEnabled;
    /**
     * The LocalMarketStreetCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the use of multiple street address for the seller for a Motors Local Market listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType
     */
    public $LocalMarketStreetCount;
    /**
     * The LocalMarketCompanyNameEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a Motors Local Market listing. This field will not
     * be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType
     */
    public $LocalMarketCompanyNameEnabled;
    /**
     * The LocalMarketContactByEmailEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an email address when contacting the seller about a Motors Local Market listing. This field will
     * not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketContactByEmailEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType
     */
    public $LocalMarketContactByEmailEnabled;
    /**
     * The LocalMarketBestOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer feature is for Motors Local Market listings. The Best Offer feature allows buyers and sellers
     * to negotiate the price of the item. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketBestOfferEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType
     */
    public $LocalMarketBestOfferEnabled;
    /**
     * The LocalMarketAutoAcceptEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for Motors Local Market listings. The Best Offer Auto-Accept feature allows
     * a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call
     * request and <code>LocalMarketAutoAcceptEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType
     */
    public $LocalMarketAutoAcceptEnabled;
    /**
     * The LocalMarketAutoDeclineEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Decline feature for Motors Local Market listings. The Best Offer Auto-Accept feature
     * allows a seller to set a threshold dollar value on a listing, and any Best Offer amount at or above this amount is automatically accepted by the eBay system. This field will not be returned if one or more <b>FeatureID</b> fields are included in the
     * call request and <code>LocalMarketAutoDeclineEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType
     */
    public $LocalMarketAutoDeclineEnabled;
    /**
     * The LocalMarketPaymentMethodCheckOutEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods for Motors Local Market listings. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketPaymentMethodCheckOutEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType
     */
    public $LocalMarketPaymentMethodCheckOutEnabled;
    /**
     * The LocalMarketShippingMethodEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of shipping service options for Motors Local Market listings. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketShippingMethodEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType
     */
    public $LocalMarketShippingMethodEnabled;
    /**
     * The LocalMarketCounterOfferEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support counter offers to Best Offers for Motors Local Market listings. The Best Offer feature allows buyers and
     * sellers to negotiate the price of the item, and once a Best Offer price is proposed, the seller can send the buyer a counter offer, and a buyer may even send another counter offer to the seller's counter offer. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketCounterOfferEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType
     */
    public $LocalMarketCounterOfferEnabled;
    /**
     * The LocalMarketSellerContactDetailsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the seller to provide contact information at listing time for Motors Local Market listings. This feature is only
     * applicable to motor vehicle classified ad listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>LocalMarketSellerContactDetailsEnabled</code> is not one of the values passed into
     * those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType
     */
    public $LocalMarketSellerContactDetailsEnabled;
    /**
     * The ClassifiedAdPhoneCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple phone numbers for the seller for a classified ad listing. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdPhoneCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType
     */
    public $ClassifiedAdPhoneCount;
    /**
     * The ClassifiedAdContactByAddressEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an address when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdContactByAddressEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType
     */
    public $ClassifiedAdContactByAddressEnabled;
    /**
     * The ClassifiedAdStreetCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of multiple street addresses for the seller for a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdStreetCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType
     */
    public $ClassifiedAdStreetCount;
    /**
     * The ClassifiedAdCompanyNameEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a company name when contacting the seller about a classified ad listing. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ClassifiedAdCompanyNameEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType
     */
    public $ClassifiedAdCompanyNameEnabled;
    /**
     * The SpecialitySubscription
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType
     */
    public $SpecialitySubscription;
    /**
     * The RegularSubscription
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType
     */
    public $RegularSubscription;
    /**
     * The PremiumSubscription
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType
     */
    public $PremiumSubscription;
    /**
     * The NonSubscription
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType
     */
    public $NonSubscription;
    /**
     * The ReturnPolicyEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of return policies in listings. This field will not be returned if one or more <b>FeatureID</b> fields
     * are included in the call request and <code>ReturnPolicyEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType
     */
    public $ReturnPolicyEnabled;
    /**
     * The HandlingTimeEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a stated handling time in listings. The handling time is the maximum number of business days the
     * seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time). This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>HandlingTimeEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType
     */
    public $HandlingTimeEnabled;
    /**
     * The PayPalRequiredForStoreOwner
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType
     */
    public $PayPalRequiredForStoreOwner;
    /**
     * The ReviseQuantityAllowed
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the quantity of a listing to be revised during the life of the listing. This feature is not applicable to
     * auction listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ReviseQuantityAllowed</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType
     */
    public $ReviseQuantityAllowed;
    /**
     * The RevisePriceAllowed
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow the price of a listing to be revised during the life of the listing. This feature is not applicable to auction
     * listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType
     */
    public $RevisePriceAllowed;
    /**
     * The StoreOwnerExtendedListingDurationsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support extended listing durations for eBay Business Sellers with eBay Stores. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>RevisePriceAllowed</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType
     */
    public $StoreOwnerExtendedListingDurationsEnabled;
    /**
     * The StoreOwnerExtendedListingDurations
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType
     */
    public $StoreOwnerExtendedListingDurations;
    /**
     * The PaymentMethod
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the display of acceptable payment methods in listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaymentMethod</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType
     */
    public $PaymentMethod;
    /**
     * The Group1MaxFlatShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group1. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>Group1MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType
     */
    public $Group1MaxFlatShippingCost;
    /**
     * The Group2MaxFlatShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group2. This field will not be returned if one
     * or more <b>FeatureID</b> fields are included in the call request and <code>Group2MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType
     */
    public $Group2MaxFlatShippingCost;
    /**
     * The Group3MaxFlatShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites allow for the applicable max cap per shipping cost for shipping service group3. This field will not be returned if
     * one or more <b>FeatureID</b> fields are included in the call request and <code>Group3MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType
     */
    public $Group3MaxFlatShippingCost;
    /**
     * The MaxFlatShippingCostCBTExempt
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost if the item is being shipped internationally. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxFlatShippingCostCBTExempt</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType
     */
    public $MaxFlatShippingCostCBTExempt;
    /**
     * The MaxFlatShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites do not impose a maximum flat-rate shipping cost. This field will not be returned if one or more <b>FeatureID</b>
     * fields are included in the call request and <code>MaxFlatShippingCost</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType
     */
    public $MaxFlatShippingCost;
    /**
     * The VariationsEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support multiple-variation listings for some categories. Multiple-variation listings contain items that are logically
     * the same product, but that vary in color, size, or other aspect. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. This feature is only applicable
     * to fixed-price listings. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VariationsEnabled</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType
     */
    public $VariationsEnabled;
    /**
     * The AttributeConversionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType
     */
    public $AttributeConversionEnabled;
    /**
     * The FreeGalleryPlusEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support free, automatic upgrades for Gallery Plus for some categories. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>FreeGalleryPlusEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType
     */
    public $FreeGalleryPlusEnabled;
    /**
     * The FreePicturePackEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support a free Picture Pack upgrade for some categories. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>FreePicturePackEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType
     */
    public $FreePicturePackEnabled;
    /**
     * The ItemCompatibilityEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Parts Compatibility for some Parts & Accessories categories. Parts compatibility allows a seller to show a
     * list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ItemCompatibilityEnabled</code> is not one of the
     * values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType
     */
    public $ItemCompatibilityEnabled;
    /**
     * The MaxItemCompatibility
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of compatible applications for items listed with parts compatibilities by
     * application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>MaxItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType
     */
    public $MaxItemCompatibility;
    /**
     * The MinItemCompatibility
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a minimum amount for the number of compatible applications for items listed with parts compatibilities by
     * application. Parts compatibility allows a seller to show a list of all the vehicles that a part or accessory is compatible with in a listing. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and
     * <code>MinItemCompatibility</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType
     */
    public $MinItemCompatibility;
    /**
     * The ConditionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the textual description of an item's condition at listing time. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ConditionEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType
     */
    public $ConditionEnabled;
    /**
     * The ConditionValues
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Condition IDs to specify an item's condition at listing time. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ConditionValues</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType
     */
    public $ConditionValues;
    /**
     * The ValueCategory
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support value categories. A Value category will typically have lower listing fees or another eBay promotion. This
     * field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>ValueCategory</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType
     */
    public $ValueCategory;
    /**
     * The ProductCreationEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the creation of listings through the specification of Global Trade Identification Numbers (GTINs) like UPC,
     * ISBN, EAN, or Brand/MPN combination. If a GTIN is matched to a product in eBay product catalog, a listing will automatically be created using the eBay catalog product's images, product aspects, description, and title. This field will not be returned
     * if one or more <b>FeatureID</b> fields are included in the call request and <code>ProductCreationEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType
     */
    public $ProductCreationEnabled;
    /**
     * The EANEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the EAN product identifying feature. This field will be returned as long as <b>EANEnabled</b> is included as a
     * <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the EAN product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.EANEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the EAN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>EANEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType
     */
    public $EANEnabled;
    /**
     * The ISBNEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the ISBN product identifying feature. This field will be returned as long as <b>ISBNEnabled</b> is included as
     * a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the ISBN product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.ISBNEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the ISBN product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>ISBNEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType
     */
    public $ISBNEnabled;
    /**
     * The UPCEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the UPC product identifying feature. This field will be returned as long as <b>UPCEnabled</b> is included as a
     * <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the UPC product identifying feature (for most categories), look for a <code>true</code>
     * value in the <b>SiteDefaults.UPCEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the UPC product identifying feature, pass in a <b>CategoryID</b> value in the request, and then look for a
     * <code>true</code> value in the <b>UPCEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType
     */
    public $UPCEnabled;
    /**
     * The CompatibleVehicleType
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Parts Compatibility feature for motor vehicles. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>CompatibleVehicleType</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType
     */
    public $CompatibleVehicleType;
    /**
     * The MaxGranularFitmentCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites define a maximum limit for the number of fine-grained item compatibilities that can be applied to a listing. This
     * field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>MaxGranularFitmentCount</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType
     */
    public $MaxGranularFitmentCount;
    /**
     * The PaymentOptionsGroup
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType
     */
    public $PaymentOptionsGroup;
    /**
     * The ShippingProfileCategoryGroup
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in shipping business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ShippingProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType
     */
    public $ShippingProfileCategoryGroup;
    /**
     * The PaymentProfileCategoryGroup
     * Meta informations extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in payment business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>PaymentProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType
     */
    public $PaymentProfileCategoryGroup;
    /**
     * The ReturnPolicyProfileCategoryGroup
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of category groups in return business policies. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>ReturnPolicyProfileCategoryGroup</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType
     */
    public $ReturnPolicyProfileCategoryGroup;
    /**
     * The VINSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VIN (Vehicle Identification Number) field to identify a motor vehicle and create a listing is
     * supported. VINs are supported on the US, Canada, Canada-French, and Australia sites. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VINSupported</code> is not one of the values passed
     * into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType
     */
    public $VINSupported;
    /**
     * The VRMSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of the VRM (Vehicle Registration Mark) field to identify a motor vehicle and create a listing is
     * supported. VRMs are only supported on the UK site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <code>VRMSupported</code> is not one of the values passed into those <a
     * href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType
     */
    public $VRMSupported;
    /**
     * The SellerProvidedTitleSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support seller-provided titles in listings. This field will not be returned if one or more <b>FeatureID</b> fields are
     * included in the call request and <code>SellerProvidedTitleSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType
     */
    public $SellerProvidedTitleSupported;
    /**
     * The DepositSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support deposits/down payments for motor vehicle listings. This field will not be returned if one or more
     * <b>FeatureID</b> fields are included in the call request and <code>DepositSupported</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType
     */
    public $DepositSupported;
    /**
     * The GlobalShippingEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Global Shipping Program (GSP) as the method for shipping orders internationally. This field will not be
     * returned if one or more <b>FeatureID</b> fields are included in the call request and <code>GlobalShippingEnabled</code> is not one of the values passed into those <a href="types/FeatureIDCodeType.html">FeatureID</a>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType
     */
    public $GlobalShippingEnabled;
    /**
     * The AdditionalCompatibilityEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Boat and Motorcycle Parts Compatibility feature. This field will be returned as long as
     * <b>AdditionalCompatibilityEnabled</b> is included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports
     * Boat or Motorcycle Parts Compatibility (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.AdditionalCompatibilityEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports Boat and
     * Motorcycle Parts Compatibility, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> <br> value in the <b>AdditionalCompatibilityEnabled</b> field of the corresponding <b>Category</b> node (match up the
     * <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType
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
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Click and Collect feature. This field will be returned as long as <b>PickupDropOffEnabled</b> is included
     * as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports the Click and Collect feature (for most
     * categories), look for a <code>true</code> value in the <b>SiteDefaults.PickupDropOffEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports the Click and Collect feature, pass in a <b>CategoryID</b> value in the
     * request, and then look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request). <br> <br> <span
     * class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and then each of the seller's listings within an Click and Collect enabled category will be automatically
     * evaluated for Click and Collect eligibility. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType
     */
    public $PickupDropOffEnabled;
    /**
     * The DigitalGoodDeliveryEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support digital gift card listings. This field will be returned as long as <b>DigitalGoodDeliveryEnabled</b> is
     * included as a <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br> <br> To verify if a specific eBay site supports digital gift card listings (for most
     * categories), look for a <code>true</code> value in the <b>SiteDefaults.DigitalGoodDeliveryEnabled</b> field. <br> <br> To verify if a specific category on a specific eBay site supports digital gift card listings, pass in a <b>CategoryID</b> value in
     * the request, and then look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request). <br>
     * <br> Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to selling gift cards, including the following: <ul> <li>Each seller can only have one gift card listing at any given time </li> <li>The
     * maximum dollar value of the gift card may not exceed 500.00</li> <li>Prepaid credit cards from American Express, Discover, MasterCard, or Visa are not allowed</li> </ul> For more information on eBay's Gift Card policy, see the <a href="
     * http://pages.ebay.com/help/policies/gift.html" target="_blank">Gift cards policy Help page</a>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType
     */
    public $DigitalGoodDeliveryEnabled;
    /**
     * The EpidSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles
     * and/or scooters are compatible with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. This field will be returned as long as <b>EpidSupported</b> is included as a
     * <b>FeatureID</b> value in the call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br/><br/> For more information on using an ePID to identify a compatible motorcycle or scooter through an
     * Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href="
     * http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType
     */
    public $EpidSupported;
    /**
     * The KTypeSupported
     * Meta informations extracted from the WSDL
     * - documentation: TThis field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are
     * compatible with a motor vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. This field will be returned as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the
     * call request or no <a href="types/FeatureIDCodeType.html">FeatureID</a> values are passed into the call request. <br/><br/> For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist API
     * call on the Germany site, see the documentation for the <a href=" http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request.Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.NameValueList</a> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType
     */
    public $KTypeSupported;
    /**
     * The ProductRequiredEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites requires association with an eBay Catalog product for some categories when listing/revising/relisting an item.
     * <br><br> Until Phase 2 of the Product-Based Shopping Experience (PBSE) rolls out later in 2018, this field will only be returned in Sandbox. For more information on PBSE, see the <a href=" https://developer.ebay.com/pbse/"
     * target="_blank">Product-Based Shopping Experience</a> page. <br><br> Will not be returned if one or more <a href="types/FeatureIDCodeType.html">FeatureID</a> values are used in the call request, and one of those values does not include
     * <code>ProductRequiredEnabled</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType
     */
    public $ProductRequiredEnabled;
    /**
     * The DomesticReturnsAcceptedValues
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set how to handle domestic returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType
     */
    public $DomesticReturnsAcceptedValues;
    /**
     * The InternationalReturnsAcceptedValues
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set how to handle international returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType
     */
    public $InternationalReturnsAcceptedValues;
    /**
     * The DomesticReturnsDurationValues
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the time duration for domestic returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType
     */
    public $DomesticReturnsDurationValues;
    /**
     * The InternationalReturnsDurationValues
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the time duration for international returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType
     */
    public $InternationalReturnsDurationValues;
    /**
     * The DomesticReturnsShipmentPayeeValues
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set who pays the shipping for domestic returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType
     */
    public $DomesticReturnsShipmentPayeeValues;
    /**
     * The InternationalReturnsShipmentPayeeValues
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set who pays the shipping for international returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType
     */
    public $InternationalReturnsShipmentPayeeValues;
    /**
     * The DomesticRefundMethodValues
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the method they use to refund domestic returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType
     */
    public $DomesticRefundMethodValues;
    /**
     * The InternationalRefundMethodValues
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can set the method they use to refund international returns.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType
     */
    public $InternationalRefundMethodValues;
    /**
     * The ReturnPolicyDescriptionEnabled
     * Meta informations extracted from the WSDL
     * - documentation: If present, this flag indicates the seller can choose to describe the return policy they offer (providing return-policy details is required in some EU countries).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType
     */
    public $ReturnPolicyDescriptionEnabled;
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
     * @param \DOMDocument $any
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
    public function __construct(\macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType $listingDurations = null, \macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired = null, \macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType $bestOfferEnabled = null, \macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType $dutchBINEnabled = null, \macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType $userConsentRequired = null, \macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled = null, \macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType $proPackEnabled = null, \macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled = null, \macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType $valuePackEnabled = null, \macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled = null, \macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType $adFormatEnabled = null, \macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled = null, \macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription = null, \macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription = null, \macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription = null, \macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription = null, \macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType $expressEnabled = null, \macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired = null, \macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired = null, \macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType $minimumReservePrice = null, \macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled = null, \macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled = null, \macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled = null, \macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled = null, \macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled = null, \macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular = null, \macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty = null, \macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled = null, \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType $safePaymentRequired = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled = null, \macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled = null, \macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled = null, \macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled = null, \macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled = null, \macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled = null, \macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled = null, \macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled = null, \macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled = null, \macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled = null, \macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled = null, \macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled = null, \macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled = null, \macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled = null, \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations = null, \macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline = null, \macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType $payPalRequired = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled = null, \macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount = null, \macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount = null, \macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled = null, \macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount = null, \macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled = null, \macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType $specialitySubscription = null, \macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType $regularSubscription = null, \macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType $premiumSubscription = null, \macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType $nonSubscription = null, \macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled = null, \macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled = null, \macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner = null, \macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed = null, \macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed = null, \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled = null, \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations = null, \macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType $paymentMethod = null, \macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost = null, \macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost = null, \macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost = null, \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt = null, \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost = null, \macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType $variationsEnabled = null, \macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled = null, \macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled = null, \macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled = null, \macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled = null, \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility = null, \macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType $minItemCompatibility = null, \macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType $conditionEnabled = null, \macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType $conditionValues = null, \macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType $valueCategory = null, \macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType $productCreationEnabled = null, \macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType $eANEnabled = null, \macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType $iSBNEnabled = null, \macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType $uPCEnabled = null, \macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType = null, \macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount = null, \macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup = null, \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup = null, \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup = null, \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup = null, \macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType $vINSupported = null, \macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType $vRMSupported = null, \macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported = null, \macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType $depositSupported = null, \macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled = null, \macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled = null, \DOMDocument $any = null, \macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled = null, \macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled = null, \macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType $epidSupported = null, \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType $kTypeSupported = null, \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled = null, \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues = null, \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues = null, \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues = null, \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues = null, \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues = null, \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues = null, \macropage\ebaysdk\trading\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null, \macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null, \macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled = null)
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
    public function getListingDurations()
    {
        return $this->ListingDurations;
    }
    /**
     * Set ListingDurations value
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType $listingDurations
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setListingDurations(\macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType $listingDurations = null)
    {
        $this->ListingDurations = $listingDurations;
        return $this;
    }
    /**
     * Get ShippingTermsRequired value
     * @return \macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType|null
     */
    public function getShippingTermsRequired()
    {
        return $this->ShippingTermsRequired;
    }
    /**
     * Set ShippingTermsRequired value
     * @param \macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setShippingTermsRequired(\macropage\ebaysdk\trading\StructType\ShippingTermRequiredDefinitionType $shippingTermsRequired = null)
    {
        $this->ShippingTermsRequired = $shippingTermsRequired;
        return $this;
    }
    /**
     * Get BestOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType|null
     */
    public function getBestOfferEnabled()
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType $bestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBestOfferEnabled(\macropage\ebaysdk\trading\StructType\BestOfferEnabledDefinitionType $bestOfferEnabled = null)
    {
        $this->BestOfferEnabled = $bestOfferEnabled;
        return $this;
    }
    /**
     * Get DutchBINEnabled value
     * @return \macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType|null
     */
    public function getDutchBINEnabled()
    {
        return $this->DutchBINEnabled;
    }
    /**
     * Set DutchBINEnabled value
     * @param \macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType $dutchBINEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDutchBINEnabled(\macropage\ebaysdk\trading\StructType\DutchBINEnabledDefinitionType $dutchBINEnabled = null)
    {
        $this->DutchBINEnabled = $dutchBINEnabled;
        return $this;
    }
    /**
     * Get UserConsentRequired value
     * @return \macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType|null
     */
    public function getUserConsentRequired()
    {
        return $this->UserConsentRequired;
    }
    /**
     * Set UserConsentRequired value
     * @param \macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType $userConsentRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setUserConsentRequired(\macropage\ebaysdk\trading\StructType\UserConsentRequiredDefinitionType $userConsentRequired = null)
    {
        $this->UserConsentRequired = $userConsentRequired;
        return $this;
    }
    /**
     * Get HomePageFeaturedEnabled value
     * @return \macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType|null
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->HomePageFeaturedEnabled;
    }
    /**
     * Set HomePageFeaturedEnabled value
     * @param \macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setHomePageFeaturedEnabled(\macropage\ebaysdk\trading\StructType\HomePageFeaturedEnabledDefinitionType $homePageFeaturedEnabled = null)
    {
        $this->HomePageFeaturedEnabled = $homePageFeaturedEnabled;
        return $this;
    }
    /**
     * Get ProPackEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType|null
     */
    public function getProPackEnabled()
    {
        return $this->ProPackEnabled;
    }
    /**
     * Set ProPackEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType $proPackEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setProPackEnabled(\macropage\ebaysdk\trading\StructType\ProPackEnabledDefinitionType $proPackEnabled = null)
    {
        $this->ProPackEnabled = $proPackEnabled;
        return $this;
    }
    /**
     * Get BasicUpgradePackEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType|null
     */
    public function getBasicUpgradePackEnabled()
    {
        return $this->BasicUpgradePackEnabled;
    }
    /**
     * Set BasicUpgradePackEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBasicUpgradePackEnabled(\macropage\ebaysdk\trading\StructType\BasicUpgradePackEnabledDefinitionType $basicUpgradePackEnabled = null)
    {
        $this->BasicUpgradePackEnabled = $basicUpgradePackEnabled;
        return $this;
    }
    /**
     * Get ValuePackEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType|null
     */
    public function getValuePackEnabled()
    {
        return $this->ValuePackEnabled;
    }
    /**
     * Set ValuePackEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType $valuePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setValuePackEnabled(\macropage\ebaysdk\trading\StructType\ValuePackEnabledDefinitionType $valuePackEnabled = null)
    {
        $this->ValuePackEnabled = $valuePackEnabled;
        return $this;
    }
    /**
     * Get ProPackPlusEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType|null
     */
    public function getProPackPlusEnabled()
    {
        return $this->ProPackPlusEnabled;
    }
    /**
     * Set ProPackPlusEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setProPackPlusEnabled(\macropage\ebaysdk\trading\StructType\ProPackPlusEnabledDefinitionType $proPackPlusEnabled = null)
    {
        $this->ProPackPlusEnabled = $proPackPlusEnabled;
        return $this;
    }
    /**
     * Get AdFormatEnabled value
     * @return \macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType|null
     */
    public function getAdFormatEnabled()
    {
        return $this->AdFormatEnabled;
    }
    /**
     * Set AdFormatEnabled value
     * @param \macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType $adFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setAdFormatEnabled(\macropage\ebaysdk\trading\StructType\AdFormatEnabledDefinitionType $adFormatEnabled = null)
    {
        $this->AdFormatEnabled = $adFormatEnabled;
        return $this;
    }
    /**
     * Get BestOfferCounterEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType|null
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->BestOfferCounterEnabled;
    }
    /**
     * Set BestOfferCounterEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBestOfferCounterEnabled(\macropage\ebaysdk\trading\StructType\BestOfferCounterEnabledDefinitionType $bestOfferCounterEnabled = null)
    {
        $this->BestOfferCounterEnabled = $bestOfferCounterEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoDeclineEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType|null
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->BestOfferAutoDeclineEnabled;
    }
    /**
     * Set BestOfferAutoDeclineEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBestOfferAutoDeclineEnabled(\macropage\ebaysdk\trading\StructType\BestOfferAutoDeclineEnabledDefinitionType $bestOfferAutoDeclineEnabled = null)
    {
        $this->BestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get LocalMarketSpecialitySubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType|null
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->LocalMarketSpecialitySubscription;
    }
    /**
     * Set LocalMarketSpecialitySubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketSpecialitySubscription(\macropage\ebaysdk\trading\StructType\LocalMarketSpecialitySubscriptionDefinitionType $localMarketSpecialitySubscription = null)
    {
        $this->LocalMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        return $this;
    }
    /**
     * Get LocalMarketRegularSubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType|null
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->LocalMarketRegularSubscription;
    }
    /**
     * Set LocalMarketRegularSubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketRegularSubscription(\macropage\ebaysdk\trading\StructType\LocalMarketRegularSubscriptionDefinitionType $localMarketRegularSubscription = null)
    {
        $this->LocalMarketRegularSubscription = $localMarketRegularSubscription;
        return $this;
    }
    /**
     * Get LocalMarketPremiumSubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType|null
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->LocalMarketPremiumSubscription;
    }
    /**
     * Set LocalMarketPremiumSubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPremiumSubscription(\macropage\ebaysdk\trading\StructType\LocalMarketPremiumSubscriptionDefinitionType $localMarketPremiumSubscription = null)
    {
        $this->LocalMarketPremiumSubscription = $localMarketPremiumSubscription;
        return $this;
    }
    /**
     * Get LocalMarketNonSubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType|null
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->LocalMarketNonSubscription;
    }
    /**
     * Set LocalMarketNonSubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketNonSubscription(\macropage\ebaysdk\trading\StructType\LocalMarketNonSubscriptionDefinitionType $localMarketNonSubscription = null)
    {
        $this->LocalMarketNonSubscription = $localMarketNonSubscription;
        return $this;
    }
    /**
     * Get ExpressEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType|null
     */
    public function getExpressEnabled()
    {
        return $this->ExpressEnabled;
    }
    /**
     * Set ExpressEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType $expressEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setExpressEnabled(\macropage\ebaysdk\trading\StructType\ExpressEnabledDefinitionType $expressEnabled = null)
    {
        $this->ExpressEnabled = $expressEnabled;
        return $this;
    }
    /**
     * Get ExpressPicturesRequired value
     * @return \macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType|null
     */
    public function getExpressPicturesRequired()
    {
        return $this->ExpressPicturesRequired;
    }
    /**
     * Set ExpressPicturesRequired value
     * @param \macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setExpressPicturesRequired(\macropage\ebaysdk\trading\StructType\ExpressPicturesRequiredDefinitionType $expressPicturesRequired = null)
    {
        $this->ExpressPicturesRequired = $expressPicturesRequired;
        return $this;
    }
    /**
     * Get ExpressConditionRequired value
     * @return \macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType|null
     */
    public function getExpressConditionRequired()
    {
        return $this->ExpressConditionRequired;
    }
    /**
     * Set ExpressConditionRequired value
     * @param \macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setExpressConditionRequired(\macropage\ebaysdk\trading\StructType\ExpressConditionRequiredDefinitionType $expressConditionRequired = null)
    {
        $this->ExpressConditionRequired = $expressConditionRequired;
        return $this;
    }
    /**
     * Get MinimumReservePrice value
     * @return \macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType|null
     */
    public function getMinimumReservePrice()
    {
        return $this->MinimumReservePrice;
    }
    /**
     * Set MinimumReservePrice value
     * @param \macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType $minimumReservePrice
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMinimumReservePrice(\macropage\ebaysdk\trading\StructType\MinimumReservePriceDefinitionType $minimumReservePrice = null)
    {
        $this->MinimumReservePrice = $minimumReservePrice;
        return $this;
    }
    /**
     * Get TransactionConfirmationRequestEnabled value
     * @return \macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType|null
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->TransactionConfirmationRequestEnabled;
    }
    /**
     * Set TransactionConfirmationRequestEnabled value
     * @param \macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setTransactionConfirmationRequestEnabled(\macropage\ebaysdk\trading\StructType\TCREnabledDefinitionType $transactionConfirmationRequestEnabled = null)
    {
        $this->TransactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        return $this;
    }
    /**
     * Get SellerContactDetailsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType|null
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->SellerContactDetailsEnabled;
    }
    /**
     * Set SellerContactDetailsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSellerContactDetailsEnabled(\macropage\ebaysdk\trading\StructType\SellerContactDetailsEnabledDefinitionType $sellerContactDetailsEnabled = null)
    {
        $this->SellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get StoreInventoryEnabled value
     * @return \macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType|null
     */
    public function getStoreInventoryEnabled()
    {
        return $this->StoreInventoryEnabled;
    }
    /**
     * Set StoreInventoryEnabled value
     * @param \macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setStoreInventoryEnabled(\macropage\ebaysdk\trading\StructType\StoreInventoryEnabledDefinitionType $storeInventoryEnabled = null)
    {
        $this->StoreInventoryEnabled = $storeInventoryEnabled;
        return $this;
    }
    /**
     * Get SkypeMeTransactionalEnabled value
     * @return \macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType|null
     */
    public function getSkypeMeTransactionalEnabled()
    {
        return $this->SkypeMeTransactionalEnabled;
    }
    /**
     * Set SkypeMeTransactionalEnabled value
     * @param \macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSkypeMeTransactionalEnabled(\macropage\ebaysdk\trading\StructType\SkypeMeTransactionalEnabledDefinitionType $skypeMeTransactionalEnabled = null)
    {
        $this->SkypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        return $this;
    }
    /**
     * Get SkypeMeNonTransactionalEnabled value
     * @return \macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType|null
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
        return $this->SkypeMeNonTransactionalEnabled;
    }
    /**
     * Set SkypeMeNonTransactionalEnabled value
     * @param \macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSkypeMeNonTransactionalEnabled(\macropage\ebaysdk\trading\StructType\SkypeMeNonTransactionalEnabledDefinitionType $skypeMeNonTransactionalEnabled = null)
    {
        $this->SkypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        return $this;
    }
    /**
     * Get LocalListingDistancesRegular value
     * @return \macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType|null
     */
    public function getLocalListingDistancesRegular()
    {
        return $this->LocalListingDistancesRegular;
    }
    /**
     * Set LocalListingDistancesRegular value
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesRegular(\macropage\ebaysdk\trading\StructType\LocalListingDistancesRegularDefinitionType $localListingDistancesRegular = null)
    {
        $this->LocalListingDistancesRegular = $localListingDistancesRegular;
        return $this;
    }
    /**
     * Get LocalListingDistancesSpecialty value
     * @return \macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType|null
     */
    public function getLocalListingDistancesSpecialty()
    {
        return $this->LocalListingDistancesSpecialty;
    }
    /**
     * Set LocalListingDistancesSpecialty value
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesSpecialty(\macropage\ebaysdk\trading\StructType\LocalListingDistancesSpecialtyDefinitionType $localListingDistancesSpecialty = null)
    {
        $this->LocalListingDistancesSpecialty = $localListingDistancesSpecialty;
        return $this;
    }
    /**
     * Get LocalListingDistancesNonSubscription value
     * @return \macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType|null
     */
    public function getLocalListingDistancesNonSubscription()
    {
        return $this->LocalListingDistancesNonSubscription;
    }
    /**
     * Set LocalListingDistancesNonSubscription value
     * @param \macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalListingDistancesNonSubscription(\macropage\ebaysdk\trading\StructType\LocalListingDistancesNonSubscriptionDefinitionType $localListingDistancesNonSubscription = null)
    {
        $this->LocalListingDistancesNonSubscription = $localListingDistancesNonSubscription;
        return $this;
    }
    /**
     * Get ClassifiedAdPaymentMethodEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType|null
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->ClassifiedAdPaymentMethodEnabled;
    }
    /**
     * Set ClassifiedAdPaymentMethodEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPaymentMethodEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdPaymentMethodEnabledDefinitionType $classifiedAdPaymentMethodEnabled = null)
    {
        $this->ClassifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdShippingMethodEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType|null
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->ClassifiedAdShippingMethodEnabled;
    }
    /**
     * Set ClassifiedAdShippingMethodEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdShippingMethodEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdShippingMethodEnabledDefinitionType $classifiedAdShippingMethodEnabled = null)
    {
        $this->ClassifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdBestOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType|null
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->ClassifiedAdBestOfferEnabled;
    }
    /**
     * Set ClassifiedAdBestOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdBestOfferEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdBestOfferEnabledDefinitionType $classifiedAdBestOfferEnabled = null)
    {
        $this->ClassifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdCounterOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType|null
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->ClassifiedAdCounterOfferEnabled;
    }
    /**
     * Set ClassifiedAdCounterOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdCounterOfferEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdCounterOfferEnabledDefinitionType $classifiedAdCounterOfferEnabled = null)
    {
        $this->ClassifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdAutoDeclineEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType|null
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->ClassifiedAdAutoDeclineEnabled;
    }
    /**
     * Set ClassifiedAdAutoDeclineEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdAutoDeclineEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType $classifiedAdAutoDeclineEnabled = null)
    {
        $this->ClassifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByPhoneEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType|null
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->ClassifiedAdContactByPhoneEnabled;
    }
    /**
     * Set ClassifiedAdContactByPhoneEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByPhoneEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByPhoneEnabledDefinitionType $classifiedAdContactByPhoneEnabled = null)
    {
        $this->ClassifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType|null
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByEmailEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByEmailEnabledDefintionType $classifiedAdContactByEmailEnabled = null)
    {
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }
    /**
     * Get SafePaymentRequired value
     * @return \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType|null
     */
    public function getSafePaymentRequired()
    {
        return $this->SafePaymentRequired;
    }
    /**
     * Set SafePaymentRequired value
     * @param \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType $safePaymentRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSafePaymentRequired(\macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType $safePaymentRequired = null)
    {
        $this->SafePaymentRequired = $safePaymentRequired;
        return $this;
    }
    /**
     * Get ClassifiedAdPayPerLeadEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType|null
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->ClassifiedAdPayPerLeadEnabled;
    }
    /**
     * Set ClassifiedAdPayPerLeadEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPayPerLeadEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdPayPerLeadEnabledDefinitionType $classifiedAdPayPerLeadEnabled = null)
    {
        $this->ClassifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        return $this;
    }
    /**
     * Get ItemSpecificsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType|null
     */
    public function getItemSpecificsEnabled()
    {
        return $this->ItemSpecificsEnabled;
    }
    /**
     * Set ItemSpecificsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setItemSpecificsEnabled(\macropage\ebaysdk\trading\StructType\ItemSpecificsEnabledDefinitionType $itemSpecificsEnabled = null)
    {
        $this->ItemSpecificsEnabled = $itemSpecificsEnabled;
        return $this;
    }
    /**
     * Get PaisaPayFullEscrowEnabled value
     * @return \macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType|null
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->PaisaPayFullEscrowEnabled;
    }
    /**
     * Set PaisaPayFullEscrowEnabled value
     * @param \macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPaisaPayFullEscrowEnabled(\macropage\ebaysdk\trading\StructType\PaisaPayFullEscrowEnabledDefinitionType $paisaPayFullEscrowEnabled = null)
    {
        $this->PaisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        return $this;
    }
    /**
     * Get ISBNIdentifierEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType|null
     */
    public function getISBNIdentifierEnabled()
    {
        return $this->ISBNIdentifierEnabled;
    }
    /**
     * Set ISBNIdentifierEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setISBNIdentifierEnabled(\macropage\ebaysdk\trading\StructType\ISBNIdentifierEnabledDefinitionType $iSBNIdentifierEnabled = null)
    {
        $this->ISBNIdentifierEnabled = $iSBNIdentifierEnabled;
        return $this;
    }
    /**
     * Get UPCIdentifierEnabled value
     * @return \macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType|null
     */
    public function getUPCIdentifierEnabled()
    {
        return $this->UPCIdentifierEnabled;
    }
    /**
     * Set UPCIdentifierEnabled value
     * @param \macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setUPCIdentifierEnabled(\macropage\ebaysdk\trading\StructType\UPCIdentifierEnabledDefinitionType $uPCIdentifierEnabled = null)
    {
        $this->UPCIdentifierEnabled = $uPCIdentifierEnabled;
        return $this;
    }
    /**
     * Get EANIdentifierEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType|null
     */
    public function getEANIdentifierEnabled()
    {
        return $this->EANIdentifierEnabled;
    }
    /**
     * Set EANIdentifierEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEANIdentifierEnabled(\macropage\ebaysdk\trading\StructType\EANIdentifierEnabledDefinitionType $eANIdentifierEnabled = null)
    {
        $this->EANIdentifierEnabled = $eANIdentifierEnabled;
        return $this;
    }
    /**
     * Get BrandMPNIdentifierEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType|null
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->BrandMPNIdentifierEnabled;
    }
    /**
     * Set BrandMPNIdentifierEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBrandMPNIdentifierEnabled(\macropage\ebaysdk\trading\StructType\BrandMPNIdentifierEnabledDefinitionType $brandMPNIdentifierEnabled = null)
    {
        $this->BrandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoAcceptEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType|null
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->BestOfferAutoAcceptEnabled;
    }
    /**
     * Set BestOfferAutoAcceptEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBestOfferAutoAcceptEnabled(\macropage\ebaysdk\trading\StructType\BestOfferAutoAcceptEnabledDefinitionType $bestOfferAutoAcceptEnabled = null)
    {
        $this->BestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdAutoAcceptEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType|null
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->ClassifiedAdAutoAcceptEnabled;
    }
    /**
     * Set ClassifiedAdAutoAcceptEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdAutoAcceptEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdAutoAcceptEnabledDefinitionType $classifiedAdAutoAcceptEnabled = null)
    {
        $this->ClassifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeNorthAmericaEnabled value
     * @return \macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType|null
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->CrossBorderTradeNorthAmericaEnabled;
    }
    /**
     * Set CrossBorderTradeNorthAmericaEnabled value
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeNorthAmericaEnabled(\macropage\ebaysdk\trading\StructType\CrossBorderTradeNorthAmericaEnabledDefinitionType $crossBorderTradeNorthAmericaEnabled = null)
    {
        $this->CrossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeGBEnabled value
     * @return \macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType|null
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->CrossBorderTradeGBEnabled;
    }
    /**
     * Set CrossBorderTradeGBEnabled value
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeGBEnabled(\macropage\ebaysdk\trading\StructType\CrossBorderTradeGBEnabledDefinitionType $crossBorderTradeGBEnabled = null)
    {
        $this->CrossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeAustraliaEnabled value
     * @return \macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType|null
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->CrossBorderTradeAustraliaEnabled;
    }
    /**
     * Set CrossBorderTradeAustraliaEnabled value
     * @param \macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCrossBorderTradeAustraliaEnabled(\macropage\ebaysdk\trading\StructType\CrossBorderTradeAustraliaEnabledDefinitionType $crossBorderTradeAustraliaEnabled = null)
    {
        $this->CrossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        return $this;
    }
    /**
     * Get PayPalBuyerProtectionEnabled value
     * @return \macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType|null
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->PayPalBuyerProtectionEnabled;
    }
    /**
     * Set PayPalBuyerProtectionEnabled value
     * @param \macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPayPalBuyerProtectionEnabled(\macropage\ebaysdk\trading\StructType\PayPalBuyerProtectionEnabledDefinitionType $payPalBuyerProtectionEnabled = null)
    {
        $this->PayPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        return $this;
    }
    /**
     * Get BuyerGuaranteeEnabled value
     * @return \macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType|null
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->BuyerGuaranteeEnabled;
    }
    /**
     * Set BuyerGuaranteeEnabled value
     * @param \macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setBuyerGuaranteeEnabled(\macropage\ebaysdk\trading\StructType\BuyerGuaranteeEnabledDefinitionType $buyerGuaranteeEnabled = null)
    {
        $this->BuyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        return $this;
    }
    /**
     * Get CombinedFixedPriceTreatmentEnabled value
     * @return \macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType|null
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
        return $this->CombinedFixedPriceTreatmentEnabled;
    }
    /**
     * Set CombinedFixedPriceTreatmentEnabled value
     * @param \macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCombinedFixedPriceTreatmentEnabled(\macropage\ebaysdk\trading\StructType\CombinedFixedPriceTreatmentEnabledDefinitionType $combinedFixedPriceTreatmentEnabled = null)
    {
        $this->CombinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        return $this;
    }
    /**
     * Get GalleryFeaturedDurations value
     * @return \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType|null
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->GalleryFeaturedDurations;
    }
    /**
     * Set GalleryFeaturedDurations value
     * @param \macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGalleryFeaturedDurations(\macropage\ebaysdk\trading\StructType\ListingEnhancementDurationDefinitionType $galleryFeaturedDurations = null)
    {
        $this->GalleryFeaturedDurations = $galleryFeaturedDurations;
        return $this;
    }
    /**
     * Get INEscrowWorkflowTimeline value
     * @return \macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType|null
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->INEscrowWorkflowTimeline;
    }
    /**
     * Set INEscrowWorkflowTimeline value
     * @param \macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setINEscrowWorkflowTimeline(\macropage\ebaysdk\trading\StructType\INEscrowWorkflowTimelineDefinitionType $iNEscrowWorkflowTimeline = null)
    {
        $this->INEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        return $this;
    }
    /**
     * Get PayPalRequired value
     * @return \macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType|null
     */
    public function getPayPalRequired()
    {
        return $this->PayPalRequired;
    }
    /**
     * Set PayPalRequired value
     * @param \macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType $payPalRequired
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPayPalRequired(\macropage\ebaysdk\trading\StructType\PayPalRequiredDefinitionType $payPalRequired = null)
    {
        $this->PayPalRequired = $payPalRequired;
        return $this;
    }
    /**
     * Get eBayMotorsProAdFormatEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType|null
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }
    /**
     * Set eBayMotorsProAdFormatEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAdFormatEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProAdFormatEnabledDefinitionType $eBayMotorsProAdFormatEnabled = null)
    {
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByPhoneEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }
    /**
     * Set eBayMotorsProContactByPhoneEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByPhoneEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByPhoneEnabledDefinitionType $eBayMotorsProContactByPhoneEnabled = null)
    {
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProPhoneCount value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType|null
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->eBayMotorsProPhoneCount;
    }
    /**
     * Set eBayMotorsProPhoneCount value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProPhoneCount(\macropage\ebaysdk\trading\StructType\EBayMotorsProPhoneCountDefinitionType $eBayMotorsProPhoneCount = null)
    {
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByAddressEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }
    /**
     * Set eBayMotorsProContactByAddressEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByAddressEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByAddressEnabledDefinitionType $eBayMotorsProContactByAddressEnabled = null)
    {
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProStreetCount value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType|null
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->eBayMotorsProStreetCount;
    }
    /**
     * Set eBayMotorsProStreetCount value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProStreetCount(\macropage\ebaysdk\trading\StructType\EBayMotorsProStreetCountDefinitionType $eBayMotorsProStreetCount = null)
    {
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        return $this;
    }
    /**
     * Get eBayMotorsProCompanyNameEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType|null
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }
    /**
     * Set eBayMotorsProCompanyNameEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProCompanyNameEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProCompanyNameEnabledDefinitionType $eBayMotorsProCompanyNameEnabled = null)
    {
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByEmailEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType|null
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }
    /**
     * Set eBayMotorsProContactByEmailEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProContactByEmailEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProContactByEmailEnabledDefinitionType $eBayMotorsProContactByEmailEnabled = null)
    {
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProBestOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType|null
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }
    /**
     * Set eBayMotorsProBestOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProBestOfferEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProBestOfferEnabledDefinitionType $eBayMotorsProBestOfferEnabled = null)
    {
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProAutoAcceptEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType|null
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }
    /**
     * Set eBayMotorsProAutoAcceptEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAutoAcceptEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType $eBayMotorsProAutoAcceptEnabled = null)
    {
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProAutoDeclineEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType|null
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }
    /**
     * Set eBayMotorsProAutoDeclineEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProAutoDeclineEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProAutoDeclineEnabledDefinitionType $eBayMotorsProAutoDeclineEnabled = null)
    {
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProPaymentMethodCheckOutEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType|null
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }
    /**
     * Set eBayMotorsProPaymentMethodCheckOutEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProPaymentMethodCheckOutEnabledDefinitionType $eBayMotorsProPaymentMethodCheckOutEnabled = null)
    {
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProShippingMethodEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType|null
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }
    /**
     * Set eBayMotorsProShippingMethodEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProShippingMethodEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProShippingMethodEnabledDefinitionType $eBayMotorsProShippingMethodEnabled = null)
    {
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProCounterOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType|null
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }
    /**
     * Set eBayMotorsProCounterOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProCounterOfferEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProCounterOfferEnabledDefinitionType $eBayMotorsProCounterOfferEnabled = null)
    {
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProSellerContactDetailsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType|null
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }
    /**
     * Set eBayMotorsProSellerContactDetailsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEBayMotorsProSellerContactDetailsEnabled(\macropage\ebaysdk\trading\StructType\EBayMotorsProSellerContactDetailsEnabledDefinitionType $eBayMotorsProSellerContactDetailsEnabled = null)
    {
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAdFormatEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType|null
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->LocalMarketAdFormatEnabled;
    }
    /**
     * Set LocalMarketAdFormatEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAdFormatEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketAdFormatEnabledDefinitionType $localMarketAdFormatEnabled = null)
    {
        $this->LocalMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        return $this;
    }
    /**
     * Get LocalMarketContactByPhoneEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType|null
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->LocalMarketContactByPhoneEnabled;
    }
    /**
     * Set LocalMarketContactByPhoneEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByPhoneEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketContactByPhoneEnabledDefinitionType $localMarketContactByPhoneEnabled = null)
    {
        $this->LocalMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get LocalMarketPhoneCount value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType|null
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->LocalMarketPhoneCount;
    }
    /**
     * Set LocalMarketPhoneCount value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPhoneCount(\macropage\ebaysdk\trading\StructType\LocalMarketPhoneCountDefinitionType $localMarketPhoneCount = null)
    {
        $this->LocalMarketPhoneCount = $localMarketPhoneCount;
        return $this;
    }
    /**
     * Get LocalMarketContactByAddressEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType|null
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->LocalMarketContactByAddressEnabled;
    }
    /**
     * Set LocalMarketContactByAddressEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByAddressEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketContactByAddressEnabledDefinitionType $localMarketContactByAddressEnabled = null)
    {
        $this->LocalMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        return $this;
    }
    /**
     * Get LocalMarketStreetCount value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType|null
     */
    public function getLocalMarketStreetCount()
    {
        return $this->LocalMarketStreetCount;
    }
    /**
     * Set LocalMarketStreetCount value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketStreetCount(\macropage\ebaysdk\trading\StructType\LocalMarketStreetCountDefinitionType $localMarketStreetCount = null)
    {
        $this->LocalMarketStreetCount = $localMarketStreetCount;
        return $this;
    }
    /**
     * Get LocalMarketCompanyNameEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType|null
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->LocalMarketCompanyNameEnabled;
    }
    /**
     * Set LocalMarketCompanyNameEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketCompanyNameEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketCompanyNameEnabledDefinitionType $localMarketCompanyNameEnabled = null)
    {
        $this->LocalMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        return $this;
    }
    /**
     * Get LocalMarketContactByEmailEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType|null
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->LocalMarketContactByEmailEnabled;
    }
    /**
     * Set LocalMarketContactByEmailEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketContactByEmailEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketContactByEmailEnabledDefinitionType $localMarketContactByEmailEnabled = null)
    {
        $this->LocalMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        return $this;
    }
    /**
     * Get LocalMarketBestOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType|null
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->LocalMarketBestOfferEnabled;
    }
    /**
     * Set LocalMarketBestOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketBestOfferEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketBestOfferEnabledDefinitionType $localMarketBestOfferEnabled = null)
    {
        $this->LocalMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAutoAcceptEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType|null
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->LocalMarketAutoAcceptEnabled;
    }
    /**
     * Set LocalMarketAutoAcceptEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAutoAcceptEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketAutoAcceptEnabledDefinitionType $localMarketAutoAcceptEnabled = null)
    {
        $this->LocalMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAutoDeclineEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType|null
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->LocalMarketAutoDeclineEnabled;
    }
    /**
     * Set LocalMarketAutoDeclineEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketAutoDeclineEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketAutoDeclineEnabledDefinitionType $localMarketAutoDeclineEnabled = null)
    {
        $this->LocalMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get LocalMarketPaymentMethodCheckOutEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType|null
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->LocalMarketPaymentMethodCheckOutEnabled;
    }
    /**
     * Set LocalMarketPaymentMethodCheckOutEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketPaymentMethodCheckOutEnabledDefinitionType $localMarketPaymentMethodCheckOutEnabled = null)
    {
        $this->LocalMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        return $this;
    }
    /**
     * Get LocalMarketShippingMethodEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType|null
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->LocalMarketShippingMethodEnabled;
    }
    /**
     * Set LocalMarketShippingMethodEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketShippingMethodEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketShippingMethodEnabledDefinitionType $localMarketShippingMethodEnabled = null)
    {
        $this->LocalMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        return $this;
    }
    /**
     * Get LocalMarketCounterOfferEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType|null
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->LocalMarketCounterOfferEnabled;
    }
    /**
     * Set LocalMarketCounterOfferEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketCounterOfferEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketCounterOfferEnabledDefinitionType $localMarketCounterOfferEnabled = null)
    {
        $this->LocalMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        return $this;
    }
    /**
     * Get LocalMarketSellerContactDetailsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType|null
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->LocalMarketSellerContactDetailsEnabled;
    }
    /**
     * Set LocalMarketSellerContactDetailsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setLocalMarketSellerContactDetailsEnabled(\macropage\ebaysdk\trading\StructType\LocalMarketSellerContactDetailsEnabledDefinitionType $localMarketSellerContactDetailsEnabled = null)
    {
        $this->LocalMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdPhoneCount value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType|null
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->ClassifiedAdPhoneCount;
    }
    /**
     * Set ClassifiedAdPhoneCount value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdPhoneCount(\macropage\ebaysdk\trading\StructType\ClassifiedAdPhoneCountDefinitionType $classifiedAdPhoneCount = null)
    {
        $this->ClassifiedAdPhoneCount = $classifiedAdPhoneCount;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByAddressEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType|null
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->ClassifiedAdContactByAddressEnabled;
    }
    /**
     * Set ClassifiedAdContactByAddressEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdContactByAddressEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdContactByAddressEnabledDefinitionType $classifiedAdContactByAddressEnabled = null)
    {
        $this->ClassifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdStreetCount value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType|null
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->ClassifiedAdStreetCount;
    }
    /**
     * Set ClassifiedAdStreetCount value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdStreetCount(\macropage\ebaysdk\trading\StructType\ClassifiedAdStreetCountDefinitionType $classifiedAdStreetCount = null)
    {
        $this->ClassifiedAdStreetCount = $classifiedAdStreetCount;
        return $this;
    }
    /**
     * Get ClassifiedAdCompanyNameEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType|null
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->ClassifiedAdCompanyNameEnabled;
    }
    /**
     * Set ClassifiedAdCompanyNameEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setClassifiedAdCompanyNameEnabled(\macropage\ebaysdk\trading\StructType\ClassifiedAdCompanyNameEnabledDefinitionType $classifiedAdCompanyNameEnabled = null)
    {
        $this->ClassifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        return $this;
    }
    /**
     * Get SpecialitySubscription value
     * @return \macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType|null
     */
    public function getSpecialitySubscription()
    {
        return $this->SpecialitySubscription;
    }
    /**
     * Set SpecialitySubscription value
     * @param \macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType $specialitySubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSpecialitySubscription(\macropage\ebaysdk\trading\StructType\SpecialitySubscriptionDefinitionType $specialitySubscription = null)
    {
        $this->SpecialitySubscription = $specialitySubscription;
        return $this;
    }
    /**
     * Get RegularSubscription value
     * @return \macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType|null
     */
    public function getRegularSubscription()
    {
        return $this->RegularSubscription;
    }
    /**
     * Set RegularSubscription value
     * @param \macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType $regularSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setRegularSubscription(\macropage\ebaysdk\trading\StructType\RegularSubscriptionDefinitionType $regularSubscription = null)
    {
        $this->RegularSubscription = $regularSubscription;
        return $this;
    }
    /**
     * Get PremiumSubscription value
     * @return \macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType|null
     */
    public function getPremiumSubscription()
    {
        return $this->PremiumSubscription;
    }
    /**
     * Set PremiumSubscription value
     * @param \macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType $premiumSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPremiumSubscription(\macropage\ebaysdk\trading\StructType\PremiumSubscriptionDefinitionType $premiumSubscription = null)
    {
        $this->PremiumSubscription = $premiumSubscription;
        return $this;
    }
    /**
     * Get NonSubscription value
     * @return \macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType|null
     */
    public function getNonSubscription()
    {
        return $this->NonSubscription;
    }
    /**
     * Set NonSubscription value
     * @param \macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType $nonSubscription
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setNonSubscription(\macropage\ebaysdk\trading\StructType\NonSubscriptionDefinitionType $nonSubscription = null)
    {
        $this->NonSubscription = $nonSubscription;
        return $this;
    }
    /**
     * Get ReturnPolicyEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType|null
     */
    public function getReturnPolicyEnabled()
    {
        return $this->ReturnPolicyEnabled;
    }
    /**
     * Set ReturnPolicyEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyEnabled(\macropage\ebaysdk\trading\StructType\ReturnPolicyEnabledDefinitionType $returnPolicyEnabled = null)
    {
        $this->ReturnPolicyEnabled = $returnPolicyEnabled;
        return $this;
    }
    /**
     * Get HandlingTimeEnabled value
     * @return \macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType|null
     */
    public function getHandlingTimeEnabled()
    {
        return $this->HandlingTimeEnabled;
    }
    /**
     * Set HandlingTimeEnabled value
     * @param \macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setHandlingTimeEnabled(\macropage\ebaysdk\trading\StructType\HandlingTimeEnabledDefinitionType $handlingTimeEnabled = null)
    {
        $this->HandlingTimeEnabled = $handlingTimeEnabled;
        return $this;
    }
    /**
     * Get PayPalRequiredForStoreOwner value
     * @return \macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType|null
     */
    public function getPayPalRequiredForStoreOwner()
    {
        return $this->PayPalRequiredForStoreOwner;
    }
    /**
     * Set PayPalRequiredForStoreOwner value
     * @param \macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPayPalRequiredForStoreOwner(\macropage\ebaysdk\trading\StructType\PayPalRequiredForStoreOwnerDefinitionType $payPalRequiredForStoreOwner = null)
    {
        $this->PayPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        return $this;
    }
    /**
     * Get ReviseQuantityAllowed value
     * @return \macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType|null
     */
    public function getReviseQuantityAllowed()
    {
        return $this->ReviseQuantityAllowed;
    }
    /**
     * Set ReviseQuantityAllowed value
     * @param \macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setReviseQuantityAllowed(\macropage\ebaysdk\trading\StructType\ReviseQuantityAllowedDefinitionType $reviseQuantityAllowed = null)
    {
        $this->ReviseQuantityAllowed = $reviseQuantityAllowed;
        return $this;
    }
    /**
     * Get RevisePriceAllowed value
     * @return \macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType|null
     */
    public function getRevisePriceAllowed()
    {
        return $this->RevisePriceAllowed;
    }
    /**
     * Set RevisePriceAllowed value
     * @param \macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setRevisePriceAllowed(\macropage\ebaysdk\trading\StructType\RevisePriceAllowedDefinitionType $revisePriceAllowed = null)
    {
        $this->RevisePriceAllowed = $revisePriceAllowed;
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurationsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType|null
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->StoreOwnerExtendedListingDurationsEnabled;
    }
    /**
     * Set StoreOwnerExtendedListingDurationsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setStoreOwnerExtendedListingDurationsEnabled(\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsEnabledDefinitionType $storeOwnerExtendedListingDurationsEnabled = null)
    {
        $this->StoreOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurations value
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType|null
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->StoreOwnerExtendedListingDurations;
    }
    /**
     * Set StoreOwnerExtendedListingDurations value
     * @param \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setStoreOwnerExtendedListingDurations(\macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsDefinitionType $storeOwnerExtendedListingDurations = null)
    {
        $this->StoreOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return \macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @param \macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPaymentMethod(\macropage\ebaysdk\trading\StructType\PaymentMethodDefinitionType $paymentMethod = null)
    {
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get Group1MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->Group1MaxFlatShippingCost;
    }
    /**
     * Set Group1MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGroup1MaxFlatShippingCost(\macropage\ebaysdk\trading\StructType\Group1MaxFlatShippingCostDefinitionType $group1MaxFlatShippingCost = null)
    {
        $this->Group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group2MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->Group2MaxFlatShippingCost;
    }
    /**
     * Set Group2MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGroup2MaxFlatShippingCost(\macropage\ebaysdk\trading\StructType\Group2MaxFlatShippingCostDefinitionType $group2MaxFlatShippingCost = null)
    {
        $this->Group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group3MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType|null
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->Group3MaxFlatShippingCost;
    }
    /**
     * Set Group3MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGroup3MaxFlatShippingCost(\macropage\ebaysdk\trading\StructType\Group3MaxFlatShippingCostDefinitionType $group3MaxFlatShippingCost = null)
    {
        $this->Group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get MaxFlatShippingCostCBTExempt value
     * @return \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType|null
     */
    public function getMaxFlatShippingCostCBTExempt()
    {
        return $this->MaxFlatShippingCostCBTExempt;
    }
    /**
     * Set MaxFlatShippingCostCBTExempt value
     * @param \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMaxFlatShippingCostCBTExempt(\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostCBTExemptDefinitionType $maxFlatShippingCostCBTExempt = null)
    {
        $this->MaxFlatShippingCostCBTExempt = $maxFlatShippingCostCBTExempt;
        return $this;
    }
    /**
     * Get MaxFlatShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType|null
     */
    public function getMaxFlatShippingCost()
    {
        return $this->MaxFlatShippingCost;
    }
    /**
     * Set MaxFlatShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMaxFlatShippingCost(\macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType $maxFlatShippingCost = null)
    {
        $this->MaxFlatShippingCost = $maxFlatShippingCost;
        return $this;
    }
    /**
     * Get VariationsEnabled value
     * @return \macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType|null
     */
    public function getVariationsEnabled()
    {
        return $this->VariationsEnabled;
    }
    /**
     * Set VariationsEnabled value
     * @param \macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType $variationsEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setVariationsEnabled(\macropage\ebaysdk\trading\StructType\VariationsEnabledDefinitionType $variationsEnabled = null)
    {
        $this->VariationsEnabled = $variationsEnabled;
        return $this;
    }
    /**
     * Get AttributeConversionEnabled value
     * @return \macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType|null
     */
    public function getAttributeConversionEnabled()
    {
        return $this->AttributeConversionEnabled;
    }
    /**
     * Set AttributeConversionEnabled value
     * @param \macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setAttributeConversionEnabled(\macropage\ebaysdk\trading\StructType\AttributeConversionEnabledFeatureDefinitionType $attributeConversionEnabled = null)
    {
        $this->AttributeConversionEnabled = $attributeConversionEnabled;
        return $this;
    }
    /**
     * Get FreeGalleryPlusEnabled value
     * @return \macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType|null
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->FreeGalleryPlusEnabled;
    }
    /**
     * Set FreeGalleryPlusEnabled value
     * @param \macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setFreeGalleryPlusEnabled(\macropage\ebaysdk\trading\StructType\FreeGalleryPlusEnabledDefinitionType $freeGalleryPlusEnabled = null)
    {
        $this->FreeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        return $this;
    }
    /**
     * Get FreePicturePackEnabled value
     * @return \macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType|null
     */
    public function getFreePicturePackEnabled()
    {
        return $this->FreePicturePackEnabled;
    }
    /**
     * Set FreePicturePackEnabled value
     * @param \macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setFreePicturePackEnabled(\macropage\ebaysdk\trading\StructType\FreePicturePackEnabledDefinitionType $freePicturePackEnabled = null)
    {
        $this->FreePicturePackEnabled = $freePicturePackEnabled;
        return $this;
    }
    /**
     * Get ItemCompatibilityEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType|null
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->ItemCompatibilityEnabled;
    }
    /**
     * Set ItemCompatibilityEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setItemCompatibilityEnabled(\macropage\ebaysdk\trading\StructType\ItemCompatibilityEnabledDefinitionType $itemCompatibilityEnabled = null)
    {
        $this->ItemCompatibilityEnabled = $itemCompatibilityEnabled;
        return $this;
    }
    /**
     * Get MaxItemCompatibility value
     * @return \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType|null
     */
    public function getMaxItemCompatibility()
    {
        return $this->MaxItemCompatibility;
    }
    /**
     * Set MaxItemCompatibility value
     * @param \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMaxItemCompatibility(\macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType $maxItemCompatibility = null)
    {
        $this->MaxItemCompatibility = $maxItemCompatibility;
        return $this;
    }
    /**
     * Get MinItemCompatibility value
     * @return \macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType|null
     */
    public function getMinItemCompatibility()
    {
        return $this->MinItemCompatibility;
    }
    /**
     * Set MinItemCompatibility value
     * @param \macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType $minItemCompatibility
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMinItemCompatibility(\macropage\ebaysdk\trading\StructType\MinItemCompatibilityDefinitionType $minItemCompatibility = null)
    {
        $this->MinItemCompatibility = $minItemCompatibility;
        return $this;
    }
    /**
     * Get ConditionEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType|null
     */
    public function getConditionEnabled()
    {
        return $this->ConditionEnabled;
    }
    /**
     * Set ConditionEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType $conditionEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setConditionEnabled(\macropage\ebaysdk\trading\StructType\ConditionEnabledDefinitionType $conditionEnabled = null)
    {
        $this->ConditionEnabled = $conditionEnabled;
        return $this;
    }
    /**
     * Get ConditionValues value
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType|null
     */
    public function getConditionValues()
    {
        return $this->ConditionValues;
    }
    /**
     * Set ConditionValues value
     * @param \macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType $conditionValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setConditionValues(\macropage\ebaysdk\trading\StructType\ConditionValuesDefinitionType $conditionValues = null)
    {
        $this->ConditionValues = $conditionValues;
        return $this;
    }
    /**
     * Get ValueCategory value
     * @return \macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType|null
     */
    public function getValueCategory()
    {
        return $this->ValueCategory;
    }
    /**
     * Set ValueCategory value
     * @param \macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType $valueCategory
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setValueCategory(\macropage\ebaysdk\trading\StructType\ValueCategoryDefinitionType $valueCategory = null)
    {
        $this->ValueCategory = $valueCategory;
        return $this;
    }
    /**
     * Get ProductCreationEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType|null
     */
    public function getProductCreationEnabled()
    {
        return $this->ProductCreationEnabled;
    }
    /**
     * Set ProductCreationEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType $productCreationEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setProductCreationEnabled(\macropage\ebaysdk\trading\StructType\ProductCreationEnabledDefinitionType $productCreationEnabled = null)
    {
        $this->ProductCreationEnabled = $productCreationEnabled;
        return $this;
    }
    /**
     * Get EANEnabled value
     * @return \macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType|null
     */
    public function getEANEnabled()
    {
        return $this->EANEnabled;
    }
    /**
     * Set EANEnabled value
     * @param \macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType $eANEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEANEnabled(\macropage\ebaysdk\trading\StructType\EANEnabledDefinitionType $eANEnabled = null)
    {
        $this->EANEnabled = $eANEnabled;
        return $this;
    }
    /**
     * Get ISBNEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType|null
     */
    public function getISBNEnabled()
    {
        return $this->ISBNEnabled;
    }
    /**
     * Set ISBNEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType $iSBNEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setISBNEnabled(\macropage\ebaysdk\trading\StructType\ISBNEnabledDefinitionType $iSBNEnabled = null)
    {
        $this->ISBNEnabled = $iSBNEnabled;
        return $this;
    }
    /**
     * Get UPCEnabled value
     * @return \macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType|null
     */
    public function getUPCEnabled()
    {
        return $this->UPCEnabled;
    }
    /**
     * Set UPCEnabled value
     * @param \macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType $uPCEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setUPCEnabled(\macropage\ebaysdk\trading\StructType\UPCEnabledDefinitionType $uPCEnabled = null)
    {
        $this->UPCEnabled = $uPCEnabled;
        return $this;
    }
    /**
     * Get CompatibleVehicleType value
     * @return \macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType|null
     */
    public function getCompatibleVehicleType()
    {
        return $this->CompatibleVehicleType;
    }
    /**
     * Set CompatibleVehicleType value
     * @param \macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setCompatibleVehicleType(\macropage\ebaysdk\trading\StructType\CompatibleVehicleTypeDefinitionType $compatibleVehicleType = null)
    {
        $this->CompatibleVehicleType = $compatibleVehicleType;
        return $this;
    }
    /**
     * Get MaxGranularFitmentCount value
     * @return \macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType|null
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->MaxGranularFitmentCount;
    }
    /**
     * Set MaxGranularFitmentCount value
     * @param \macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setMaxGranularFitmentCount(\macropage\ebaysdk\trading\StructType\MaxGranularFitmentCountDefinitionType $maxGranularFitmentCount = null)
    {
        $this->MaxGranularFitmentCount = $maxGranularFitmentCount;
        return $this;
    }
    /**
     * Get PaymentOptionsGroup value
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType|null
     */
    public function getPaymentOptionsGroup()
    {
        return $this->PaymentOptionsGroup;
    }
    /**
     * Set PaymentOptionsGroup value
     * @param \macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPaymentOptionsGroup(\macropage\ebaysdk\trading\StructType\PaymentOptionsGroupEnabledDefinitionType $paymentOptionsGroup = null)
    {
        $this->PaymentOptionsGroup = $paymentOptionsGroup;
        return $this;
    }
    /**
     * Get ShippingProfileCategoryGroup value
     * @return \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->ShippingProfileCategoryGroup;
    }
    /**
     * Set ShippingProfileCategoryGroup value
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setShippingProfileCategoryGroup(\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $shippingProfileCategoryGroup = null)
    {
        $this->ShippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        return $this;
    }
    /**
     * Get PaymentProfileCategoryGroup value
     * @return \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->PaymentProfileCategoryGroup;
    }
    /**
     * Set PaymentProfileCategoryGroup value
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPaymentProfileCategoryGroup(\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $paymentProfileCategoryGroup = null)
    {
        $this->PaymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        return $this;
    }
    /**
     * Get ReturnPolicyProfileCategoryGroup value
     * @return \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType|null
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->ReturnPolicyProfileCategoryGroup;
    }
    /**
     * Set ReturnPolicyProfileCategoryGroup value
     * @param \macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyProfileCategoryGroup(\macropage\ebaysdk\trading\StructType\ProfileCategoryGroupDefinitionType $returnPolicyProfileCategoryGroup = null)
    {
        $this->ReturnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        return $this;
    }
    /**
     * Get VINSupported value
     * @return \macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType|null
     */
    public function getVINSupported()
    {
        return $this->VINSupported;
    }
    /**
     * Set VINSupported value
     * @param \macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType $vINSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setVINSupported(\macropage\ebaysdk\trading\StructType\VINSupportedDefinitionType $vINSupported = null)
    {
        $this->VINSupported = $vINSupported;
        return $this;
    }
    /**
     * Get VRMSupported value
     * @return \macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType|null
     */
    public function getVRMSupported()
    {
        return $this->VRMSupported;
    }
    /**
     * Set VRMSupported value
     * @param \macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType $vRMSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setVRMSupported(\macropage\ebaysdk\trading\StructType\VRMSupportedDefinitionType $vRMSupported = null)
    {
        $this->VRMSupported = $vRMSupported;
        return $this;
    }
    /**
     * Get SellerProvidedTitleSupported value
     * @return \macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType|null
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->SellerProvidedTitleSupported;
    }
    /**
     * Set SellerProvidedTitleSupported value
     * @param \macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setSellerProvidedTitleSupported(\macropage\ebaysdk\trading\StructType\SellerProvidedTitleSupportedDefinitionType $sellerProvidedTitleSupported = null)
    {
        $this->SellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        return $this;
    }
    /**
     * Get DepositSupported value
     * @return \macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType|null
     */
    public function getDepositSupported()
    {
        return $this->DepositSupported;
    }
    /**
     * Set DepositSupported value
     * @param \macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType $depositSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDepositSupported(\macropage\ebaysdk\trading\StructType\DepositSupportedDefinitionType $depositSupported = null)
    {
        $this->DepositSupported = $depositSupported;
        return $this;
    }
    /**
     * Get GlobalShippingEnabled value
     * @return \macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType|null
     */
    public function getGlobalShippingEnabled()
    {
        return $this->GlobalShippingEnabled;
    }
    /**
     * Set GlobalShippingEnabled value
     * @param \macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setGlobalShippingEnabled(\macropage\ebaysdk\trading\StructType\GlobalShippingEnabledDefinitionType $globalShippingEnabled = null)
    {
        $this->GlobalShippingEnabled = $globalShippingEnabled;
        return $this;
    }
    /**
     * Get AdditionalCompatibilityEnabled value
     * @return \macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType|null
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->AdditionalCompatibilityEnabled;
    }
    /**
     * Set AdditionalCompatibilityEnabled value
     * @param \macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setAdditionalCompatibilityEnabled(\macropage\ebaysdk\trading\StructType\AdditionalCompatibilityEnabledDefinitionType $additionalCompatibilityEnabled = null)
    {
        $this->AdditionalCompatibilityEnabled = $additionalCompatibilityEnabled;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get PickupDropOffEnabled value
     * @return \macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType|null
     */
    public function getPickupDropOffEnabled()
    {
        return $this->PickupDropOffEnabled;
    }
    /**
     * Set PickupDropOffEnabled value
     * @param \macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setPickupDropOffEnabled(\macropage\ebaysdk\trading\StructType\PickupDropOffEnabledDefinitionType $pickupDropOffEnabled = null)
    {
        $this->PickupDropOffEnabled = $pickupDropOffEnabled;
        return $this;
    }
    /**
     * Get DigitalGoodDeliveryEnabled value
     * @return \macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType|null
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->DigitalGoodDeliveryEnabled;
    }
    /**
     * Set DigitalGoodDeliveryEnabled value
     * @param \macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDigitalGoodDeliveryEnabled(\macropage\ebaysdk\trading\StructType\DigitalGoodDeliveryEnabledDefinitionType $digitalGoodDeliveryEnabled = null)
    {
        $this->DigitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        return $this;
    }
    /**
     * Get EpidSupported value
     * @return \macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType|null
     */
    public function getEpidSupported()
    {
        return $this->EpidSupported;
    }
    /**
     * Set EpidSupported value
     * @param \macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType $epidSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setEpidSupported(\macropage\ebaysdk\trading\StructType\EpidSupportedDefinitionType $epidSupported = null)
    {
        $this->EpidSupported = $epidSupported;
        return $this;
    }
    /**
     * Get KTypeSupported value
     * @return \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType|null
     */
    public function getKTypeSupported()
    {
        return $this->KTypeSupported;
    }
    /**
     * Set KTypeSupported value
     * @param \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType $kTypeSupported
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setKTypeSupported(\macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType $kTypeSupported = null)
    {
        $this->KTypeSupported = $kTypeSupported;
        return $this;
    }
    /**
     * Get ProductRequiredEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType|null
     */
    public function getProductRequiredEnabled()
    {
        return $this->ProductRequiredEnabled;
    }
    /**
     * Set ProductRequiredEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setProductRequiredEnabled(\macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType $productRequiredEnabled = null)
    {
        $this->ProductRequiredEnabled = $productRequiredEnabled;
        return $this;
    }
    /**
     * Get DomesticReturnsAcceptedValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType|null
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->DomesticReturnsAcceptedValues;
    }
    /**
     * Set DomesticReturnsAcceptedValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsAcceptedValues(\macropage\ebaysdk\trading\StructType\DomesticReturnsAcceptedDefinitionType $domesticReturnsAcceptedValues = null)
    {
        $this->DomesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType|null
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->InternationalReturnsAcceptedValues;
    }
    /**
     * Set InternationalReturnsAcceptedValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsAcceptedValues(\macropage\ebaysdk\trading\StructType\InternationalReturnsAcceptedDefinitionType $internationalReturnsAcceptedValues = null)
    {
        $this->InternationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        return $this;
    }
    /**
     * Get DomesticReturnsDurationValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType|null
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->DomesticReturnsDurationValues;
    }
    /**
     * Set DomesticReturnsDurationValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsDurationValues(\macropage\ebaysdk\trading\StructType\DomesticReturnsDurationDefinitionType $domesticReturnsDurationValues = null)
    {
        $this->DomesticReturnsDurationValues = $domesticReturnsDurationValues;
        return $this;
    }
    /**
     * Get InternationalReturnsDurationValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType|null
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->InternationalReturnsDurationValues;
    }
    /**
     * Set InternationalReturnsDurationValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsDurationValues(\macropage\ebaysdk\trading\StructType\InternationalReturnsDurationDefinitionType $internationalReturnsDurationValues = null)
    {
        $this->InternationalReturnsDurationValues = $internationalReturnsDurationValues;
        return $this;
    }
    /**
     * Get DomesticReturnsShipmentPayeeValues value
     * @return \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType|null
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->DomesticReturnsShipmentPayeeValues;
    }
    /**
     * Set DomesticReturnsShipmentPayeeValues value
     * @param \macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setDomesticReturnsShipmentPayeeValues(\macropage\ebaysdk\trading\StructType\DomesticReturnsShipmentPayeeDefinitionType $domesticReturnsShipmentPayeeValues = null)
    {
        $this->DomesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        return $this;
    }
    /**
     * Get InternationalReturnsShipmentPayeeValues value
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType|null
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->InternationalReturnsShipmentPayeeValues;
    }
    /**
     * Set InternationalReturnsShipmentPayeeValues value
     * @param \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setInternationalReturnsShipmentPayeeValues(\macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeDefinitionType $internationalReturnsShipmentPayeeValues = null)
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setInternationalRefundMethodValues(\macropage\ebaysdk\trading\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null)
    {
        $this->InternationalRefundMethodValues = $internationalRefundMethodValues;
        return $this;
    }
    /**
     * Get ReturnPolicyDescriptionEnabled value
     * @return \macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType|null
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->ReturnPolicyDescriptionEnabled;
    }
    /**
     * Set ReturnPolicyDescriptionEnabled value
     * @param \macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
     */
    public function setReturnPolicyDescriptionEnabled(\macropage\ebaysdk\trading\StructType\ReturnPolicyDescriptionEnabledDefinitionType $returnPolicyDescriptionEnabled = null)
    {
        $this->ReturnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\FeatureDefinitionsType
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
