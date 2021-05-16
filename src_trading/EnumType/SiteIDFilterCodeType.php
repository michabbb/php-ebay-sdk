<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SiteIDFilterCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Site criteria for filtering search results. The site value is determined by the site specified in the request (the site ID in the SOAP URL or, for Unified Schema XML requests, the site ID in the X-EBAY-API-SITEID HTTP Header).
 * @subpackage Enumerations
 */
class SiteIDFilterCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ListedInCurrencyImplied'
     * Meta information extracted from the WSDL
     * - documentation: (in) Items listed in the currency implied by the site specified in the request.
     * @return string 'ListedInCurrencyImplied'
     */
    const VALUE_LISTED_IN_CURRENCY_IMPLIED = 'ListedInCurrencyImplied';
    /**
     * Constant for value 'LocatedInCountryImplied'
     * Meta information extracted from the WSDL
     * - documentation: (in) Items located in the country implied by the site specified in the request.
     * @return string 'LocatedInCountryImplied'
     */
    const VALUE_LOCATED_IN_COUNTRY_IMPLIED = 'LocatedInCountryImplied';
    /**
     * Constant for value 'AvailableInCountryImplied'
     * Meta information extracted from the WSDL
     * - documentation: (in) Items available to the country implied by the site specified in the request. For the US site, this implies listings from ALL English-language countries that are available to the US.
     * @return string 'AvailableInCountryImplied'
     */
    const VALUE_AVAILABLE_IN_COUNTRY_IMPLIED = 'AvailableInCountryImplied';
    /**
     * Constant for value 'SiteImplied'
     * Meta information extracted from the WSDL
     * - documentation: (in) Items listed on the site specified in the request, regardless of listing currency.
     * @return string 'SiteImplied'
     */
    const VALUE_SITE_IMPLIED = 'SiteImplied';
    /**
     * Constant for value 'BelgiumListing'
     * Meta information extracted from the WSDL
     * - documentation: (in) Items located in Belgium or listed on one of the two Belgian sites.
     * @return string 'BelgiumListing'
     */
    const VALUE_BELGIUM_LISTING = 'BelgiumListing';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LISTED_IN_CURRENCY_IMPLIED,
            self::VALUE_LOCATED_IN_COUNTRY_IMPLIED,
            self::VALUE_AVAILABLE_IN_COUNTRY_IMPLIED,
            self::VALUE_SITE_IMPLIED,
            self::VALUE_BELGIUM_LISTING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
