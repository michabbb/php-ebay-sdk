<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SiteIDFilterCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Site criteria for filtering search results. The site value is determined by the site specified in the request (the site ID in the SOAP URL or, for Unified Schema XML requests, the site ID in the X-EBAY-API-SITEID HTTP Header).
 * @subpackage Enumerations
 */
class SiteIDFilterCodeType
{
    /**
     * Constant for value 'ListedInCurrencyImplied'
     * @return string 'ListedInCurrencyImplied'
     */
    const VALUE_LISTED_IN_CURRENCY_IMPLIED = 'ListedInCurrencyImplied';
    /**
     * Constant for value 'LocatedInCountryImplied'
     * @return string 'LocatedInCountryImplied'
     */
    const VALUE_LOCATED_IN_COUNTRY_IMPLIED = 'LocatedInCountryImplied';
    /**
     * Constant for value 'AvailableInCountryImplied'
     * @return string 'AvailableInCountryImplied'
     */
    const VALUE_AVAILABLE_IN_COUNTRY_IMPLIED = 'AvailableInCountryImplied';
    /**
     * Constant for value 'SiteImplied'
     * @return string 'SiteImplied'
     */
    const VALUE_SITE_IMPLIED = 'SiteImplied';
    /**
     * Constant for value 'BelgiumListing'
     * @return string 'BelgiumListing'
     */
    const VALUE_BELGIUM_LISTING = 'BelgiumListing';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_LISTED_IN_CURRENCY_IMPLIED
     * @uses self::VALUE_LOCATED_IN_COUNTRY_IMPLIED
     * @uses self::VALUE_AVAILABLE_IN_COUNTRY_IMPLIED
     * @uses self::VALUE_SITE_IMPLIED
     * @uses self::VALUE_BELGIUM_LISTING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LISTED_IN_CURRENCY_IMPLIED,
            self::VALUE_LOCATED_IN_COUNTRY_IMPLIED,
            self::VALUE_AVAILABLE_IN_COUNTRY_IMPLIED,
            self::VALUE_SITE_IMPLIED,
            self::VALUE_BELGIUM_LISTING,
            self::VALUE_CUSTOM_CODE,
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
