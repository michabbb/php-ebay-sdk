<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingSubtypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the two subtypes that can be used if the main listing type (in <strong>ListingType</strong> field) is <code>LeadGeneration</code>. A <strong>ListingSubtype2</strong> value must be specified if the
 * <strong>ListingType</strong> value is set to <code>LeadGeneration</code>.
 * @subpackage Enumerations
 */
class ListingSubtypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ClassifiedAd'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the lead generation listing is a classifed ad. Note that only some eBay categories support classified ad listings. Use the <strong>GetCategoryFeatures</strong> call (with <strong>FeatureID</strong> value set
     * to <code>AdFormatEnabled</code>) to see which categories support classified ad listings.
     * @return string 'ClassifiedAd'
     */
    const VALUE_CLASSIFIED_AD = 'ClassifiedAd';
    /**
     * Constant for value 'LocalMarketBestOfferOnly'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the lead generation listing is a US Motors Local Market listing. Note that only some eBay Motors categories support Motors Local Market listings. Use the <strong>GetCategoryFeatures</strong> call (with the
     * <strong>SITEID</strong> header set to <code>100</code> and the <strong>FeatureID</strong> value set to <code>LocalMarketAdFormatEnabled</code>) to see which eBay Motors categories support Motors Local Market listings.
     * @return string 'LocalMarketBestOfferOnly'
     */
    const VALUE_LOCAL_MARKET_BEST_OFFER_ONLY = 'LocalMarketBestOfferOnly';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CLASSIFIED_AD
     * @uses self::VALUE_LOCAL_MARKET_BEST_OFFER_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CLASSIFIED_AD,
            self::VALUE_LOCAL_MARKET_BEST_OFFER_ONLY,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
