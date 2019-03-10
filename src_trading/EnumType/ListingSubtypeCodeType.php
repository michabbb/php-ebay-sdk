<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ListingSubtypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type defines the two subtypes that can be used if the main listing type (in <strong>ListingType</strong> field) is <code>LeadGeneration</code>. A <strong>ListingSubtype2</strong> value must be specified if the
 * <strong>ListingType</strong> value is set to <code>LeadGeneration</code>.
 * @subpackage Enumerations
 */
class ListingSubtypeCodeType
{
    /**
     * Constant for value 'ClassifiedAd'
     * @return string 'ClassifiedAd'
     */
    const VALUE_CLASSIFIED_AD = 'ClassifiedAd';
    /**
     * Constant for value 'LocalMarketBestOfferOnly'
     * @return string 'LocalMarketBestOfferOnly'
     */
    const VALUE_LOCAL_MARKET_BEST_OFFER_ONLY = 'LocalMarketBestOfferOnly';
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
     * @uses self::VALUE_CLASSIFIED_AD
     * @uses self::VALUE_LOCAL_MARKET_BEST_OFFER_ONLY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLASSIFIED_AD,
            self::VALUE_LOCAL_MARKET_BEST_OFFER_ONLY,
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
