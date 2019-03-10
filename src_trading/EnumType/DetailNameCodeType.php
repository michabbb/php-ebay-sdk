<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DetailNameCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains all data filters that can be used to control which metadata is returned in the response of a <b>GeteBayDetails</b> call. The user can use as little or as many values as desired. If none of these data
 * filters are used, all applicable metadata will be returned.
 * @subpackage Enumerations
 */
class DetailNameCodeType
{
    /**
     * Constant for value 'CountryDetails'
     * @return string 'CountryDetails'
     */
    const VALUE_COUNTRY_DETAILS = 'CountryDetails';
    /**
     * Constant for value 'CurrencyDetails'
     * @return string 'CurrencyDetails'
     */
    const VALUE_CURRENCY_DETAILS = 'CurrencyDetails';
    /**
     * Constant for value 'PaymentOptionDetails'
     * @return string 'PaymentOptionDetails'
     */
    const VALUE_PAYMENT_OPTION_DETAILS = 'PaymentOptionDetails';
    /**
     * Constant for value 'RegionDetails'
     * @return string 'RegionDetails'
     */
    const VALUE_REGION_DETAILS = 'RegionDetails';
    /**
     * Constant for value 'ShippingLocationDetails'
     * @return string 'ShippingLocationDetails'
     */
    const VALUE_SHIPPING_LOCATION_DETAILS = 'ShippingLocationDetails';
    /**
     * Constant for value 'ShippingServiceDetails'
     * @return string 'ShippingServiceDetails'
     */
    const VALUE_SHIPPING_SERVICE_DETAILS = 'ShippingServiceDetails';
    /**
     * Constant for value 'SiteDetails'
     * @return string 'SiteDetails'
     */
    const VALUE_SITE_DETAILS = 'SiteDetails';
    /**
     * Constant for value 'TaxJurisdiction'
     * @return string 'TaxJurisdiction'
     */
    const VALUE_TAX_JURISDICTION = 'TaxJurisdiction';
    /**
     * Constant for value 'URLDetails'
     * @return string 'URLDetails'
     */
    const VALUE_URLDETAILS = 'URLDetails';
    /**
     * Constant for value 'TimeZoneDetails'
     * @return string 'TimeZoneDetails'
     */
    const VALUE_TIME_ZONE_DETAILS = 'TimeZoneDetails';
    /**
     * Constant for value 'RegionOfOriginDetails'
     * @return string 'RegionOfOriginDetails'
     */
    const VALUE_REGION_OF_ORIGIN_DETAILS = 'RegionOfOriginDetails';
    /**
     * Constant for value 'DispatchTimeMaxDetails'
     * @return string 'DispatchTimeMaxDetails'
     */
    const VALUE_DISPATCH_TIME_MAX_DETAILS = 'DispatchTimeMaxDetails';
    /**
     * Constant for value 'ItemSpecificDetails'
     * @return string 'ItemSpecificDetails'
     */
    const VALUE_ITEM_SPECIFIC_DETAILS = 'ItemSpecificDetails';
    /**
     * Constant for value 'UnitOfMeasurementDetails'
     * @return string 'UnitOfMeasurementDetails'
     */
    const VALUE_UNIT_OF_MEASUREMENT_DETAILS = 'UnitOfMeasurementDetails';
    /**
     * Constant for value 'ShippingPackageDetails'
     * @return string 'ShippingPackageDetails'
     */
    const VALUE_SHIPPING_PACKAGE_DETAILS = 'ShippingPackageDetails';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ShippingCarrierDetails'
     * @return string 'ShippingCarrierDetails'
     */
    const VALUE_SHIPPING_CARRIER_DETAILS = 'ShippingCarrierDetails';
    /**
     * Constant for value 'ListingStartPriceDetails'
     * @return string 'ListingStartPriceDetails'
     */
    const VALUE_LISTING_START_PRICE_DETAILS = 'ListingStartPriceDetails';
    /**
     * Constant for value 'ReturnPolicyDetails'
     * @return string 'ReturnPolicyDetails'
     */
    const VALUE_RETURN_POLICY_DETAILS = 'ReturnPolicyDetails';
    /**
     * Constant for value 'BuyerRequirementDetails'
     * @return string 'BuyerRequirementDetails'
     */
    const VALUE_BUYER_REQUIREMENT_DETAILS = 'BuyerRequirementDetails';
    /**
     * Constant for value 'ListingFeatureDetails'
     * @return string 'ListingFeatureDetails'
     */
    const VALUE_LISTING_FEATURE_DETAILS = 'ListingFeatureDetails';
    /**
     * Constant for value 'VariationDetails'
     * @return string 'VariationDetails'
     */
    const VALUE_VARIATION_DETAILS = 'VariationDetails';
    /**
     * Constant for value 'ExcludeShippingLocationDetails'
     * @return string 'ExcludeShippingLocationDetails'
     */
    const VALUE_EXCLUDE_SHIPPING_LOCATION_DETAILS = 'ExcludeShippingLocationDetails';
    /**
     * Constant for value 'RecoupmentPolicyDetails'
     * @return string 'RecoupmentPolicyDetails'
     */
    const VALUE_RECOUPMENT_POLICY_DETAILS = 'RecoupmentPolicyDetails';
    /**
     * Constant for value 'ShippingCategoryDetails'
     * @return string 'ShippingCategoryDetails'
     */
    const VALUE_SHIPPING_CATEGORY_DETAILS = 'ShippingCategoryDetails';
    /**
     * Constant for value 'ProductDetails'
     * @return string 'ProductDetails'
     */
    const VALUE_PRODUCT_DETAILS = 'ProductDetails';
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
     * @uses self::VALUE_COUNTRY_DETAILS
     * @uses self::VALUE_CURRENCY_DETAILS
     * @uses self::VALUE_PAYMENT_OPTION_DETAILS
     * @uses self::VALUE_REGION_DETAILS
     * @uses self::VALUE_SHIPPING_LOCATION_DETAILS
     * @uses self::VALUE_SHIPPING_SERVICE_DETAILS
     * @uses self::VALUE_SITE_DETAILS
     * @uses self::VALUE_TAX_JURISDICTION
     * @uses self::VALUE_URLDETAILS
     * @uses self::VALUE_TIME_ZONE_DETAILS
     * @uses self::VALUE_REGION_OF_ORIGIN_DETAILS
     * @uses self::VALUE_DISPATCH_TIME_MAX_DETAILS
     * @uses self::VALUE_ITEM_SPECIFIC_DETAILS
     * @uses self::VALUE_UNIT_OF_MEASUREMENT_DETAILS
     * @uses self::VALUE_SHIPPING_PACKAGE_DETAILS
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_SHIPPING_CARRIER_DETAILS
     * @uses self::VALUE_LISTING_START_PRICE_DETAILS
     * @uses self::VALUE_RETURN_POLICY_DETAILS
     * @uses self::VALUE_BUYER_REQUIREMENT_DETAILS
     * @uses self::VALUE_LISTING_FEATURE_DETAILS
     * @uses self::VALUE_VARIATION_DETAILS
     * @uses self::VALUE_EXCLUDE_SHIPPING_LOCATION_DETAILS
     * @uses self::VALUE_RECOUPMENT_POLICY_DETAILS
     * @uses self::VALUE_SHIPPING_CATEGORY_DETAILS
     * @uses self::VALUE_PRODUCT_DETAILS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COUNTRY_DETAILS,
            self::VALUE_CURRENCY_DETAILS,
            self::VALUE_PAYMENT_OPTION_DETAILS,
            self::VALUE_REGION_DETAILS,
            self::VALUE_SHIPPING_LOCATION_DETAILS,
            self::VALUE_SHIPPING_SERVICE_DETAILS,
            self::VALUE_SITE_DETAILS,
            self::VALUE_TAX_JURISDICTION,
            self::VALUE_URLDETAILS,
            self::VALUE_TIME_ZONE_DETAILS,
            self::VALUE_REGION_OF_ORIGIN_DETAILS,
            self::VALUE_DISPATCH_TIME_MAX_DETAILS,
            self::VALUE_ITEM_SPECIFIC_DETAILS,
            self::VALUE_UNIT_OF_MEASUREMENT_DETAILS,
            self::VALUE_SHIPPING_PACKAGE_DETAILS,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_SHIPPING_CARRIER_DETAILS,
            self::VALUE_LISTING_START_PRICE_DETAILS,
            self::VALUE_RETURN_POLICY_DETAILS,
            self::VALUE_BUYER_REQUIREMENT_DETAILS,
            self::VALUE_LISTING_FEATURE_DETAILS,
            self::VALUE_VARIATION_DETAILS,
            self::VALUE_EXCLUDE_SHIPPING_LOCATION_DETAILS,
            self::VALUE_RECOUPMENT_POLICY_DETAILS,
            self::VALUE_SHIPPING_CATEGORY_DETAILS,
            self::VALUE_PRODUCT_DETAILS,
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
