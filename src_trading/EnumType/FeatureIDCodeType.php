<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for FeatureIDCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that lists all possible values that can be passed into the <b>FeatureID</b> field in a <b>GetCategoryFeatures</b> call. The <b>FeatureID</b> field is to used to check if specific listing features are enabled at the
 * site or category level. Multiple <b>FeatureID</b> fields can be used in the request. If no <b>FeatureID</b> fields are used, the call retrieves data for all features defined within this enumerated type.
 * @subpackage Enumerations
 */
class FeatureIDCodeType
{
    /**
     * Constant for value 'ListingDurations'
     * @return string 'ListingDurations'
     */
    const VALUE_LISTING_DURATIONS = 'ListingDurations';
    /**
     * Constant for value 'BestOfferEnabled'
     * @return string 'BestOfferEnabled'
     */
    const VALUE_BEST_OFFER_ENABLED = 'BestOfferEnabled';
    /**
     * Constant for value 'DutchBINEnabled'
     * @return string 'DutchBINEnabled'
     */
    const VALUE_DUTCH_BINENABLED = 'DutchBINEnabled';
    /**
     * Constant for value 'ShippingTermsRequired'
     * @return string 'ShippingTermsRequired'
     */
    const VALUE_SHIPPING_TERMS_REQUIRED = 'ShippingTermsRequired';
    /**
     * Constant for value 'UserConsentRequired'
     * @return string 'UserConsentRequired'
     */
    const VALUE_USER_CONSENT_REQUIRED = 'UserConsentRequired';
    /**
     * Constant for value 'HomePageFeaturedEnabled'
     * @return string 'HomePageFeaturedEnabled'
     */
    const VALUE_HOME_PAGE_FEATURED_ENABLED = 'HomePageFeaturedEnabled';
    /**
     * Constant for value 'AdFormatEnabled'
     * @return string 'AdFormatEnabled'
     */
    const VALUE_AD_FORMAT_ENABLED = 'AdFormatEnabled';
    /**
     * Constant for value 'DigitalDeliveryEnabled'
     * @return string 'DigitalDeliveryEnabled'
     */
    const VALUE_DIGITAL_DELIVERY_ENABLED = 'DigitalDeliveryEnabled';
    /**
     * Constant for value 'BestOfferCounterEnabled'
     * @return string 'BestOfferCounterEnabled'
     */
    const VALUE_BEST_OFFER_COUNTER_ENABLED = 'BestOfferCounterEnabled';
    /**
     * Constant for value 'BestOfferAutoDeclineEnabled'
     * @return string 'BestOfferAutoDeclineEnabled'
     */
    const VALUE_BEST_OFFER_AUTO_DECLINE_ENABLED = 'BestOfferAutoDeclineEnabled';
    /**
     * Constant for value 'ProPack'
     * @return string 'ProPack'
     */
    const VALUE_PRO_PACK = 'ProPack';
    /**
     * Constant for value 'BasicUpgradePack'
     * @return string 'BasicUpgradePack'
     */
    const VALUE_BASIC_UPGRADE_PACK = 'BasicUpgradePack';
    /**
     * Constant for value 'ValuePack'
     * @return string 'ValuePack'
     */
    const VALUE_VALUE_PACK = 'ValuePack';
    /**
     * Constant for value 'ProPackPlus'
     * @return string 'ProPackPlus'
     */
    const VALUE_PRO_PACK_PLUS = 'ProPackPlus';
    /**
     * Constant for value 'LocalMarketSpecialitySubscription'
     * @return string 'LocalMarketSpecialitySubscription'
     */
    const VALUE_LOCAL_MARKET_SPECIALITY_SUBSCRIPTION = 'LocalMarketSpecialitySubscription';
    /**
     * Constant for value 'LocalMarketRegularSubscription'
     * @return string 'LocalMarketRegularSubscription'
     */
    const VALUE_LOCAL_MARKET_REGULAR_SUBSCRIPTION = 'LocalMarketRegularSubscription';
    /**
     * Constant for value 'LocalMarketPremiumSubscription'
     * @return string 'LocalMarketPremiumSubscription'
     */
    const VALUE_LOCAL_MARKET_PREMIUM_SUBSCRIPTION = 'LocalMarketPremiumSubscription';
    /**
     * Constant for value 'LocalMarketNonSubscription'
     * @return string 'LocalMarketNonSubscription'
     */
    const VALUE_LOCAL_MARKET_NON_SUBSCRIPTION = 'LocalMarketNonSubscription';
    /**
     * Constant for value 'ExpressEnabled'
     * @return string 'ExpressEnabled'
     */
    const VALUE_EXPRESS_ENABLED = 'ExpressEnabled';
    /**
     * Constant for value 'ExpressPicturesRequired'
     * @return string 'ExpressPicturesRequired'
     */
    const VALUE_EXPRESS_PICTURES_REQUIRED = 'ExpressPicturesRequired';
    /**
     * Constant for value 'ExpressConditionRequired'
     * @return string 'ExpressConditionRequired'
     */
    const VALUE_EXPRESS_CONDITION_REQUIRED = 'ExpressConditionRequired';
    /**
     * Constant for value 'SellerContactDetailsEnabled'
     * @return string 'SellerContactDetailsEnabled'
     */
    const VALUE_SELLER_CONTACT_DETAILS_ENABLED = 'SellerContactDetailsEnabled';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'MinimumReservePrice'
     * @return string 'MinimumReservePrice'
     */
    const VALUE_MINIMUM_RESERVE_PRICE = 'MinimumReservePrice';
    /**
     * Constant for value 'TransactionConfirmationRequestEnabled'
     * @return string 'TransactionConfirmationRequestEnabled'
     */
    const VALUE_TRANSACTION_CONFIRMATION_REQUEST_ENABLED = 'TransactionConfirmationRequestEnabled';
    /**
     * Constant for value 'StoreInventoryEnabled'
     * @return string 'StoreInventoryEnabled'
     */
    const VALUE_STORE_INVENTORY_ENABLED = 'StoreInventoryEnabled';
    /**
     * Constant for value 'LocalListingDistances'
     * @return string 'LocalListingDistances'
     */
    const VALUE_LOCAL_LISTING_DISTANCES = 'LocalListingDistances';
    /**
     * Constant for value 'SkypeMeTransactionalEnabled'
     * @return string 'SkypeMeTransactionalEnabled'
     */
    const VALUE_SKYPE_ME_TRANSACTIONAL_ENABLED = 'SkypeMeTransactionalEnabled';
    /**
     * Constant for value 'SkypeMeNonTransactionalEnabled'
     * @return string 'SkypeMeNonTransactionalEnabled'
     */
    const VALUE_SKYPE_ME_NON_TRANSACTIONAL_ENABLED = 'SkypeMeNonTransactionalEnabled';
    /**
     * Constant for value 'ClassifiedAdPaymentMethodEnabled'
     * @return string 'ClassifiedAdPaymentMethodEnabled'
     */
    const VALUE_CLASSIFIED_AD_PAYMENT_METHOD_ENABLED = 'ClassifiedAdPaymentMethodEnabled';
    /**
     * Constant for value 'ClassifiedAdShippingMethodEnabled'
     * @return string 'ClassifiedAdShippingMethodEnabled'
     */
    const VALUE_CLASSIFIED_AD_SHIPPING_METHOD_ENABLED = 'ClassifiedAdShippingMethodEnabled';
    /**
     * Constant for value 'ClassifiedAdBestOfferEnabled'
     * @return string 'ClassifiedAdBestOfferEnabled'
     */
    const VALUE_CLASSIFIED_AD_BEST_OFFER_ENABLED = 'ClassifiedAdBestOfferEnabled';
    /**
     * Constant for value 'ClassifiedAdCounterOfferEnabled'
     * @return string 'ClassifiedAdCounterOfferEnabled'
     */
    const VALUE_CLASSIFIED_AD_COUNTER_OFFER_ENABLED = 'ClassifiedAdCounterOfferEnabled';
    /**
     * Constant for value 'ClassifiedAdAutoDeclineEnabled'
     * @return string 'ClassifiedAdAutoDeclineEnabled'
     */
    const VALUE_CLASSIFIED_AD_AUTO_DECLINE_ENABLED = 'ClassifiedAdAutoDeclineEnabled';
    /**
     * Constant for value 'ClassifiedAdContactByEmailEnabled'
     * @return string 'ClassifiedAdContactByEmailEnabled'
     */
    const VALUE_CLASSIFIED_AD_CONTACT_BY_EMAIL_ENABLED = 'ClassifiedAdContactByEmailEnabled';
    /**
     * Constant for value 'ClassifiedAdContactByPhoneEnabled'
     * @return string 'ClassifiedAdContactByPhoneEnabled'
     */
    const VALUE_CLASSIFIED_AD_CONTACT_BY_PHONE_ENABLED = 'ClassifiedAdContactByPhoneEnabled';
    /**
     * Constant for value 'SafePaymentRequired'
     * @return string 'SafePaymentRequired'
     */
    const VALUE_SAFE_PAYMENT_REQUIRED = 'SafePaymentRequired';
    /**
     * Constant for value 'MaximumBestOffersAllowed'
     * @return string 'MaximumBestOffersAllowed'
     */
    const VALUE_MAXIMUM_BEST_OFFERS_ALLOWED = 'MaximumBestOffersAllowed';
    /**
     * Constant for value 'ClassifiedAdMaximumBestOffersAllowed'
     * @return string 'ClassifiedAdMaximumBestOffersAllowed'
     */
    const VALUE_CLASSIFIED_AD_MAXIMUM_BEST_OFFERS_ALLOWED = 'ClassifiedAdMaximumBestOffersAllowed';
    /**
     * Constant for value 'ClassifiedAdContactByEmailAvailable'
     * @return string 'ClassifiedAdContactByEmailAvailable'
     */
    const VALUE_CLASSIFIED_AD_CONTACT_BY_EMAIL_AVAILABLE = 'ClassifiedAdContactByEmailAvailable';
    /**
     * Constant for value 'ClassifiedAdPayPerLeadEnabled'
     * @return string 'ClassifiedAdPayPerLeadEnabled'
     */
    const VALUE_CLASSIFIED_AD_PAY_PER_LEAD_ENABLED = 'ClassifiedAdPayPerLeadEnabled';
    /**
     * Constant for value 'ItemSpecificsEnabled'
     * @return string 'ItemSpecificsEnabled'
     */
    const VALUE_ITEM_SPECIFICS_ENABLED = 'ItemSpecificsEnabled';
    /**
     * Constant for value 'PaisaPayFullEscrowEnabled'
     * @return string 'PaisaPayFullEscrowEnabled'
     */
    const VALUE_PAISA_PAY_FULL_ESCROW_ENABLED = 'PaisaPayFullEscrowEnabled';
    /**
     * Constant for value 'ISBNIdentifierEnabled'
     * @return string 'ISBNIdentifierEnabled'
     */
    const VALUE_ISBNIDENTIFIER_ENABLED = 'ISBNIdentifierEnabled';
    /**
     * Constant for value 'UPCIdentifierEnabled'
     * @return string 'UPCIdentifierEnabled'
     */
    const VALUE_UPCIDENTIFIER_ENABLED = 'UPCIdentifierEnabled';
    /**
     * Constant for value 'EANIdentifierEnabled'
     * @return string 'EANIdentifierEnabled'
     */
    const VALUE_EANIDENTIFIER_ENABLED = 'EANIdentifierEnabled';
    /**
     * Constant for value 'BrandMPNIdentifierEnabled'
     * @return string 'BrandMPNIdentifierEnabled'
     */
    const VALUE_BRAND_MPNIDENTIFIER_ENABLED = 'BrandMPNIdentifierEnabled';
    /**
     * Constant for value 'ClassifiedAdAutoAcceptEnabled'
     * @return string 'ClassifiedAdAutoAcceptEnabled'
     */
    const VALUE_CLASSIFIED_AD_AUTO_ACCEPT_ENABLED = 'ClassifiedAdAutoAcceptEnabled';
    /**
     * Constant for value 'BestOfferAutoAcceptEnabled'
     * @return string 'BestOfferAutoAcceptEnabled'
     */
    const VALUE_BEST_OFFER_AUTO_ACCEPT_ENABLED = 'BestOfferAutoAcceptEnabled';
    /**
     * Constant for value 'CrossBorderTradeEnabled'
     * @return string 'CrossBorderTradeEnabled'
     */
    const VALUE_CROSS_BORDER_TRADE_ENABLED = 'CrossBorderTradeEnabled';
    /**
     * Constant for value 'PayPalBuyerProtectionEnabled'
     * @return string 'PayPalBuyerProtectionEnabled'
     */
    const VALUE_PAY_PAL_BUYER_PROTECTION_ENABLED = 'PayPalBuyerProtectionEnabled';
    /**
     * Constant for value 'BuyerGuaranteeEnabled'
     * @return string 'BuyerGuaranteeEnabled'
     */
    const VALUE_BUYER_GUARANTEE_ENABLED = 'BuyerGuaranteeEnabled';
    /**
     * Constant for value 'INEscrowWorkflowTimeline'
     * @return string 'INEscrowWorkflowTimeline'
     */
    const VALUE_INESCROW_WORKFLOW_TIMELINE = 'INEscrowWorkflowTimeline';
    /**
     * Constant for value 'CombinedFixedPriceTreatment'
     * @return string 'CombinedFixedPriceTreatment'
     */
    const VALUE_COMBINED_FIXED_PRICE_TREATMENT = 'CombinedFixedPriceTreatment';
    /**
     * Constant for value 'GalleryFeaturedDurations'
     * @return string 'GalleryFeaturedDurations'
     */
    const VALUE_GALLERY_FEATURED_DURATIONS = 'GalleryFeaturedDurations';
    /**
     * Constant for value 'PayPalRequired'
     * @return string 'PayPalRequired'
     */
    const VALUE_PAY_PAL_REQUIRED = 'PayPalRequired';
    /**
     * Constant for value 'eBayMotorsProAdFormatEnabled'
     * @return string 'eBayMotorsProAdFormatEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_AD_FORMAT_ENABLED = 'eBayMotorsProAdFormatEnabled';
    /**
     * Constant for value 'eBayMotorsProContactByPhoneEnabled'
     * @return string 'eBayMotorsProContactByPhoneEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_PHONE_ENABLED = 'eBayMotorsProContactByPhoneEnabled';
    /**
     * Constant for value 'eBayMotorsProContactByAddressEnabled'
     * @return string 'eBayMotorsProContactByAddressEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_ADDRESS_ENABLED = 'eBayMotorsProContactByAddressEnabled';
    /**
     * Constant for value 'eBayMotorsProCompanyNameEnabled'
     * @return string 'eBayMotorsProCompanyNameEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_COMPANY_NAME_ENABLED = 'eBayMotorsProCompanyNameEnabled';
    /**
     * Constant for value 'eBayMotorsProContactByEmailEnabled'
     * @return string 'eBayMotorsProContactByEmailEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_CONTACT_BY_EMAIL_ENABLED = 'eBayMotorsProContactByEmailEnabled';
    /**
     * Constant for value 'eBayMotorsProBestOfferEnabled'
     * @return string 'eBayMotorsProBestOfferEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_BEST_OFFER_ENABLED = 'eBayMotorsProBestOfferEnabled';
    /**
     * Constant for value 'eBayMotorsProAutoAcceptEnabled'
     * @return string 'eBayMotorsProAutoAcceptEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_AUTO_ACCEPT_ENABLED = 'eBayMotorsProAutoAcceptEnabled';
    /**
     * Constant for value 'eBayMotorsProAutoDeclineEnabled'
     * @return string 'eBayMotorsProAutoDeclineEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_AUTO_DECLINE_ENABLED = 'eBayMotorsProAutoDeclineEnabled';
    /**
     * Constant for value 'eBayMotorsProPaymentMethodCheckOutEnabled'
     * @return string 'eBayMotorsProPaymentMethodCheckOutEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_PAYMENT_METHOD_CHECK_OUT_ENABLED = 'eBayMotorsProPaymentMethodCheckOutEnabled';
    /**
     * Constant for value 'eBayMotorsProShippingMethodEnabled'
     * @return string 'eBayMotorsProShippingMethodEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_SHIPPING_METHOD_ENABLED = 'eBayMotorsProShippingMethodEnabled';
    /**
     * Constant for value 'eBayMotorsProCounterOfferEnabled'
     * @return string 'eBayMotorsProCounterOfferEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_COUNTER_OFFER_ENABLED = 'eBayMotorsProCounterOfferEnabled';
    /**
     * Constant for value 'eBayMotorsProSellerContactDetailsEnabled'
     * @return string 'eBayMotorsProSellerContactDetailsEnabled'
     */
    const VALUE_E_BAY_MOTORS_PRO_SELLER_CONTACT_DETAILS_ENABLED = 'eBayMotorsProSellerContactDetailsEnabled';
    /**
     * Constant for value 'LocalMarketAdFormatEnabled'
     * @return string 'LocalMarketAdFormatEnabled'
     */
    const VALUE_LOCAL_MARKET_AD_FORMAT_ENABLED = 'LocalMarketAdFormatEnabled';
    /**
     * Constant for value 'LocalMarketContactByPhoneEnabled'
     * @return string 'LocalMarketContactByPhoneEnabled'
     */
    const VALUE_LOCAL_MARKET_CONTACT_BY_PHONE_ENABLED = 'LocalMarketContactByPhoneEnabled';
    /**
     * Constant for value 'LocalMarketContactByAddressEnabled'
     * @return string 'LocalMarketContactByAddressEnabled'
     */
    const VALUE_LOCAL_MARKET_CONTACT_BY_ADDRESS_ENABLED = 'LocalMarketContactByAddressEnabled';
    /**
     * Constant for value 'LocalMarketCompanyNameEnabled'
     * @return string 'LocalMarketCompanyNameEnabled'
     */
    const VALUE_LOCAL_MARKET_COMPANY_NAME_ENABLED = 'LocalMarketCompanyNameEnabled';
    /**
     * Constant for value 'LocalMarketContactByEmailEnabled'
     * @return string 'LocalMarketContactByEmailEnabled'
     */
    const VALUE_LOCAL_MARKET_CONTACT_BY_EMAIL_ENABLED = 'LocalMarketContactByEmailEnabled';
    /**
     * Constant for value 'LocalMarketBestOfferEnabled'
     * @return string 'LocalMarketBestOfferEnabled'
     */
    const VALUE_LOCAL_MARKET_BEST_OFFER_ENABLED = 'LocalMarketBestOfferEnabled';
    /**
     * Constant for value 'LocalMarketAutoAcceptEnabled'
     * @return string 'LocalMarketAutoAcceptEnabled'
     */
    const VALUE_LOCAL_MARKET_AUTO_ACCEPT_ENABLED = 'LocalMarketAutoAcceptEnabled';
    /**
     * Constant for value 'LocalMarketAutoDeclineEnabled'
     * @return string 'LocalMarketAutoDeclineEnabled'
     */
    const VALUE_LOCAL_MARKET_AUTO_DECLINE_ENABLED = 'LocalMarketAutoDeclineEnabled';
    /**
     * Constant for value 'LocalMarketPaymentMethodCheckOutEnabled'
     * @return string 'LocalMarketPaymentMethodCheckOutEnabled'
     */
    const VALUE_LOCAL_MARKET_PAYMENT_METHOD_CHECK_OUT_ENABLED = 'LocalMarketPaymentMethodCheckOutEnabled';
    /**
     * Constant for value 'LocalMarketShippingMethodEnabled'
     * @return string 'LocalMarketShippingMethodEnabled'
     */
    const VALUE_LOCAL_MARKET_SHIPPING_METHOD_ENABLED = 'LocalMarketShippingMethodEnabled';
    /**
     * Constant for value 'LocalMarketCounterOfferEnabled'
     * @return string 'LocalMarketCounterOfferEnabled'
     */
    const VALUE_LOCAL_MARKET_COUNTER_OFFER_ENABLED = 'LocalMarketCounterOfferEnabled';
    /**
     * Constant for value 'LocalMarketSellerContactDetailsEnabled'
     * @return string 'LocalMarketSellerContactDetailsEnabled'
     */
    const VALUE_LOCAL_MARKET_SELLER_CONTACT_DETAILS_ENABLED = 'LocalMarketSellerContactDetailsEnabled';
    /**
     * Constant for value 'ClassifiedAdContactByAddressEnabled'
     * @return string 'ClassifiedAdContactByAddressEnabled'
     */
    const VALUE_CLASSIFIED_AD_CONTACT_BY_ADDRESS_ENABLED = 'ClassifiedAdContactByAddressEnabled';
    /**
     * Constant for value 'ClassifiedAdCompanyNameEnabled'
     * @return string 'ClassifiedAdCompanyNameEnabled'
     */
    const VALUE_CLASSIFIED_AD_COMPANY_NAME_ENABLED = 'ClassifiedAdCompanyNameEnabled';
    /**
     * Constant for value 'SpecialitySubscription'
     * @return string 'SpecialitySubscription'
     */
    const VALUE_SPECIALITY_SUBSCRIPTION = 'SpecialitySubscription';
    /**
     * Constant for value 'RegularSubscription'
     * @return string 'RegularSubscription'
     */
    const VALUE_REGULAR_SUBSCRIPTION = 'RegularSubscription';
    /**
     * Constant for value 'PremiumSubscription'
     * @return string 'PremiumSubscription'
     */
    const VALUE_PREMIUM_SUBSCRIPTION = 'PremiumSubscription';
    /**
     * Constant for value 'NonSubscription'
     * @return string 'NonSubscription'
     */
    const VALUE_NON_SUBSCRIPTION = 'NonSubscription';
    /**
     * Constant for value 'IntangibleEnabled'
     * @return string 'IntangibleEnabled'
     */
    const VALUE_INTANGIBLE_ENABLED = 'IntangibleEnabled';
    /**
     * Constant for value 'PayPalRequiredForStoreOwner'
     * @return string 'PayPalRequiredForStoreOwner'
     */
    const VALUE_PAY_PAL_REQUIRED_FOR_STORE_OWNER = 'PayPalRequiredForStoreOwner';
    /**
     * Constant for value 'ReviseQuantityAllowed'
     * @return string 'ReviseQuantityAllowed'
     */
    const VALUE_REVISE_QUANTITY_ALLOWED = 'ReviseQuantityAllowed';
    /**
     * Constant for value 'RevisePriceAllowed'
     * @return string 'RevisePriceAllowed'
     */
    const VALUE_REVISE_PRICE_ALLOWED = 'RevisePriceAllowed';
    /**
     * Constant for value 'StoreOwnerExtendedListingDurationsEnabled'
     * @return string 'StoreOwnerExtendedListingDurationsEnabled'
     */
    const VALUE_STORE_OWNER_EXTENDED_LISTING_DURATIONS_ENABLED = 'StoreOwnerExtendedListingDurationsEnabled';
    /**
     * Constant for value 'StoreOwnerExtendedListingDurations'
     * @return string 'StoreOwnerExtendedListingDurations'
     */
    const VALUE_STORE_OWNER_EXTENDED_LISTING_DURATIONS = 'StoreOwnerExtendedListingDurations';
    /**
     * Constant for value 'ReturnPolicyEnabled'
     * @return string 'ReturnPolicyEnabled'
     */
    const VALUE_RETURN_POLICY_ENABLED = 'ReturnPolicyEnabled';
    /**
     * Constant for value 'HandlingTimeEnabled'
     * @return string 'HandlingTimeEnabled'
     */
    const VALUE_HANDLING_TIME_ENABLED = 'HandlingTimeEnabled';
    /**
     * Constant for value 'PaymentMethods'
     * @return string 'PaymentMethods'
     */
    const VALUE_PAYMENT_METHODS = 'PaymentMethods';
    /**
     * Constant for value 'MaxFlatShippingCost'
     * @return string 'MaxFlatShippingCost'
     */
    const VALUE_MAX_FLAT_SHIPPING_COST = 'MaxFlatShippingCost';
    /**
     * Constant for value 'MaxFlatShippingCostCBTExempt'
     * @return string 'MaxFlatShippingCostCBTExempt'
     */
    const VALUE_MAX_FLAT_SHIPPING_COST_CBTEXEMPT = 'MaxFlatShippingCostCBTExempt';
    /**
     * Constant for value 'Group1MaxFlatShippingCost'
     * @return string 'Group1MaxFlatShippingCost'
     */
    const VALUE_GROUP_1_MAX_FLAT_SHIPPING_COST = 'Group1MaxFlatShippingCost';
    /**
     * Constant for value 'Group2MaxFlatShippingCost'
     * @return string 'Group2MaxFlatShippingCost'
     */
    const VALUE_GROUP_2_MAX_FLAT_SHIPPING_COST = 'Group2MaxFlatShippingCost';
    /**
     * Constant for value 'Group3MaxFlatShippingCost'
     * @return string 'Group3MaxFlatShippingCost'
     */
    const VALUE_GROUP_3_MAX_FLAT_SHIPPING_COST = 'Group3MaxFlatShippingCost';
    /**
     * Constant for value 'VariationsEnabled'
     * @return string 'VariationsEnabled'
     */
    const VALUE_VARIATIONS_ENABLED = 'VariationsEnabled';
    /**
     * Constant for value 'AttributeConversionEnabled'
     * @return string 'AttributeConversionEnabled'
     */
    const VALUE_ATTRIBUTE_CONVERSION_ENABLED = 'AttributeConversionEnabled';
    /**
     * Constant for value 'FreeGalleryPlusEnabled'
     * @return string 'FreeGalleryPlusEnabled'
     */
    const VALUE_FREE_GALLERY_PLUS_ENABLED = 'FreeGalleryPlusEnabled';
    /**
     * Constant for value 'FreePicturePackEnabled'
     * @return string 'FreePicturePackEnabled'
     */
    const VALUE_FREE_PICTURE_PACK_ENABLED = 'FreePicturePackEnabled';
    /**
     * Constant for value 'CompatibilityEnabled'
     * @return string 'CompatibilityEnabled'
     */
    const VALUE_COMPATIBILITY_ENABLED = 'CompatibilityEnabled';
    /**
     * Constant for value 'MinCompatibleApplications'
     * @return string 'MinCompatibleApplications'
     */
    const VALUE_MIN_COMPATIBLE_APPLICATIONS = 'MinCompatibleApplications';
    /**
     * Constant for value 'MaxCompatibleApplications'
     * @return string 'MaxCompatibleApplications'
     */
    const VALUE_MAX_COMPATIBLE_APPLICATIONS = 'MaxCompatibleApplications';
    /**
     * Constant for value 'ConditionEnabled'
     * @return string 'ConditionEnabled'
     */
    const VALUE_CONDITION_ENABLED = 'ConditionEnabled';
    /**
     * Constant for value 'ConditionValues'
     * @return string 'ConditionValues'
     */
    const VALUE_CONDITION_VALUES = 'ConditionValues';
    /**
     * Constant for value 'ValueCategory'
     * @return string 'ValueCategory'
     */
    const VALUE_VALUE_CATEGORY = 'ValueCategory';
    /**
     * Constant for value 'ProductCreationEnabled'
     * @return string 'ProductCreationEnabled'
     */
    const VALUE_PRODUCT_CREATION_ENABLED = 'ProductCreationEnabled';
    /**
     * Constant for value 'EANEnabled'
     * @return string 'EANEnabled'
     */
    const VALUE_EANENABLED = 'EANEnabled';
    /**
     * Constant for value 'ISBNEnabled'
     * @return string 'ISBNEnabled'
     */
    const VALUE_ISBNENABLED = 'ISBNEnabled';
    /**
     * Constant for value 'UPCEnabled'
     * @return string 'UPCEnabled'
     */
    const VALUE_UPCENABLED = 'UPCEnabled';
    /**
     * Constant for value 'MaxGranularFitmentCount'
     * @return string 'MaxGranularFitmentCount'
     */
    const VALUE_MAX_GRANULAR_FITMENT_COUNT = 'MaxGranularFitmentCount';
    /**
     * Constant for value 'CompatibleVehicleType'
     * @return string 'CompatibleVehicleType'
     */
    const VALUE_COMPATIBLE_VEHICLE_TYPE = 'CompatibleVehicleType';
    /**
     * Constant for value 'PaymentOptionsGroup'
     * @return string 'PaymentOptionsGroup'
     */
    const VALUE_PAYMENT_OPTIONS_GROUP = 'PaymentOptionsGroup';
    /**
     * Constant for value 'ShippingProfileCategoryGroup'
     * @return string 'ShippingProfileCategoryGroup'
     */
    const VALUE_SHIPPING_PROFILE_CATEGORY_GROUP = 'ShippingProfileCategoryGroup';
    /**
     * Constant for value 'PaymentProfileCategoryGroup'
     * @return string 'PaymentProfileCategoryGroup'
     */
    const VALUE_PAYMENT_PROFILE_CATEGORY_GROUP = 'PaymentProfileCategoryGroup';
    /**
     * Constant for value 'ReturnPolicyProfileCategoryGroup'
     * @return string 'ReturnPolicyProfileCategoryGroup'
     */
    const VALUE_RETURN_POLICY_PROFILE_CATEGORY_GROUP = 'ReturnPolicyProfileCategoryGroup';
    /**
     * Constant for value 'VINSupported'
     * @return string 'VINSupported'
     */
    const VALUE_VINSUPPORTED = 'VINSupported';
    /**
     * Constant for value 'VRMSupported'
     * @return string 'VRMSupported'
     */
    const VALUE_VRMSUPPORTED = 'VRMSupported';
    /**
     * Constant for value 'SellerProvidedTitleSupported'
     * @return string 'SellerProvidedTitleSupported'
     */
    const VALUE_SELLER_PROVIDED_TITLE_SUPPORTED = 'SellerProvidedTitleSupported';
    /**
     * Constant for value 'DepositSupported'
     * @return string 'DepositSupported'
     */
    const VALUE_DEPOSIT_SUPPORTED = 'DepositSupported';
    /**
     * Constant for value 'GlobalShippingEnabled'
     * @return string 'GlobalShippingEnabled'
     */
    const VALUE_GLOBAL_SHIPPING_ENABLED = 'GlobalShippingEnabled';
    /**
     * Constant for value 'AdditionalCompatibilityEnabled'
     * @return string 'AdditionalCompatibilityEnabled'
     */
    const VALUE_ADDITIONAL_COMPATIBILITY_ENABLED = 'AdditionalCompatibilityEnabled';
    /**
     * Constant for value 'PickupDropOffEnabled'
     * @return string 'PickupDropOffEnabled'
     */
    const VALUE_PICKUP_DROP_OFF_ENABLED = 'PickupDropOffEnabled';
    /**
     * Constant for value 'DigitalGoodDeliveryEnabled'
     * @return string 'DigitalGoodDeliveryEnabled'
     */
    const VALUE_DIGITAL_GOOD_DELIVERY_ENABLED = 'DigitalGoodDeliveryEnabled';
    /**
     * Constant for value 'EpidSupported'
     * @return string 'EpidSupported'
     */
    const VALUE_EPID_SUPPORTED = 'EpidSupported';
    /**
     * Constant for value 'KTypeSupported'
     * @return string 'KTypeSupported'
     */
    const VALUE_KTYPE_SUPPORTED = 'KTypeSupported';
    /**
     * Constant for value 'ProductRequiredEnabled'
     * @return string 'ProductRequiredEnabled'
     */
    const VALUE_PRODUCT_REQUIRED_ENABLED = 'ProductRequiredEnabled';
    /**
     * Constant for value 'DomesticReturnsAcceptedValues'
     * @return string 'DomesticReturnsAcceptedValues'
     */
    const VALUE_DOMESTIC_RETURNS_ACCEPTED_VALUES = 'DomesticReturnsAcceptedValues';
    /**
     * Constant for value 'InternationalReturnsAcceptedValues'
     * @return string 'InternationalReturnsAcceptedValues'
     */
    const VALUE_INTERNATIONAL_RETURNS_ACCEPTED_VALUES = 'InternationalReturnsAcceptedValues';
    /**
     * Constant for value 'DomesticReturnsDurationValues'
     * @return string 'DomesticReturnsDurationValues'
     */
    const VALUE_DOMESTIC_RETURNS_DURATION_VALUES = 'DomesticReturnsDurationValues';
    /**
     * Constant for value 'InternationalReturnsDurationValues'
     * @return string 'InternationalReturnsDurationValues'
     */
    const VALUE_INTERNATIONAL_RETURNS_DURATION_VALUES = 'InternationalReturnsDurationValues';
    /**
     * Constant for value 'DomesticReturnsShipmentPayeeValues'
     * @return string 'DomesticReturnsShipmentPayeeValues'
     */
    const VALUE_DOMESTIC_RETURNS_SHIPMENT_PAYEE_VALUES = 'DomesticReturnsShipmentPayeeValues';
    /**
     * Constant for value 'InternationalReturnsShipmentPayeeValues'
     * @return string 'InternationalReturnsShipmentPayeeValues'
     */
    const VALUE_INTERNATIONAL_RETURNS_SHIPMENT_PAYEE_VALUES = 'InternationalReturnsShipmentPayeeValues';
    /**
     * Constant for value 'DomesticRefundMethodValues'
     * @return string 'DomesticRefundMethodValues'
     */
    const VALUE_DOMESTIC_REFUND_METHOD_VALUES = 'DomesticRefundMethodValues';
    /**
     * Constant for value 'InternationalRefundMethodValues'
     * @return string 'InternationalRefundMethodValues'
     */
    const VALUE_INTERNATIONAL_REFUND_METHOD_VALUES = 'InternationalRefundMethodValues';
    /**
     * Constant for value 'ReturnPolicyDescriptionEnabled'
     * @return string 'ReturnPolicyDescriptionEnabled'
     */
    const VALUE_RETURN_POLICY_DESCRIPTION_ENABLED = 'ReturnPolicyDescriptionEnabled';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    public static function getValidValues()
    {
        return array(
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
        );
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
