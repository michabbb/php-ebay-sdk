<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RecommendationEngineCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RecommendationEngineCodeType
{
    /**
     * Constant for value 'ListingAnalyzer'
     * @return string 'ListingAnalyzer'
     */
    const VALUE_LISTING_ANALYZER = 'ListingAnalyzer';
    /**
     * Constant for value 'SIFFTAS'
     * @return string 'SIFFTAS'
     */
    const VALUE_SIFFTAS = 'SIFFTAS';
    /**
     * Constant for value 'ProductPricing'
     * @return string 'ProductPricing'
     */
    const VALUE_PRODUCT_PRICING = 'ProductPricing';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'SuggestedAttributes'
     * @return string 'SuggestedAttributes'
     */
    const VALUE_SUGGESTED_ATTRIBUTES = 'SuggestedAttributes';
    /**
     * Constant for value 'ItemSpecifics'
     * @return string 'ItemSpecifics'
     */
    const VALUE_ITEM_SPECIFICS = 'ItemSpecifics';
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
     * @uses self::VALUE_LISTING_ANALYZER
     * @uses self::VALUE_SIFFTAS
     * @uses self::VALUE_PRODUCT_PRICING
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_SUGGESTED_ATTRIBUTES
     * @uses self::VALUE_ITEM_SPECIFICS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LISTING_ANALYZER,
            self::VALUE_SIFFTAS,
            self::VALUE_PRODUCT_PRICING,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_SUGGESTED_ATTRIBUTES,
            self::VALUE_ITEM_SPECIFICS,
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
