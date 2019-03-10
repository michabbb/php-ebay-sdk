<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ListingTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the valid selling formats for eBay listings.
 * @subpackage Enumerations
 */
class ListingTypeCodeType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Chinese'
     * @return string 'Chinese'
     */
    const VALUE_CHINESE = 'Chinese';
    /**
     * Constant for value 'Dutch'
     * @return string 'Dutch'
     */
    const VALUE_DUTCH = 'Dutch';
    /**
     * Constant for value 'Live'
     * @return string 'Live'
     */
    const VALUE_LIVE = 'Live';
    /**
     * Constant for value 'Auction'
     * @return string 'Auction'
     */
    const VALUE_AUCTION = 'Auction';
    /**
     * Constant for value 'AdType'
     * @return string 'AdType'
     */
    const VALUE_AD_TYPE = 'AdType';
    /**
     * Constant for value 'StoresFixedPrice'
     * @return string 'StoresFixedPrice'
     */
    const VALUE_STORES_FIXED_PRICE = 'StoresFixedPrice';
    /**
     * Constant for value 'PersonalOffer'
     * @return string 'PersonalOffer'
     */
    const VALUE_PERSONAL_OFFER = 'PersonalOffer';
    /**
     * Constant for value 'FixedPriceItem'
     * @return string 'FixedPriceItem'
     */
    const VALUE_FIXED_PRICE_ITEM = 'FixedPriceItem';
    /**
     * Constant for value 'Half'
     * @return string 'Half'
     */
    const VALUE_HALF = 'Half';
    /**
     * Constant for value 'LeadGeneration'
     * @return string 'LeadGeneration'
     */
    const VALUE_LEAD_GENERATION = 'LeadGeneration';
    /**
     * Constant for value 'Express'
     * @return string 'Express'
     */
    const VALUE_EXPRESS = 'Express';
    /**
     * Constant for value 'Shopping'
     * @return string 'Shopping'
     */
    const VALUE_SHOPPING = 'Shopping';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_CHINESE
     * @uses self::VALUE_DUTCH
     * @uses self::VALUE_LIVE
     * @uses self::VALUE_AUCTION
     * @uses self::VALUE_AD_TYPE
     * @uses self::VALUE_STORES_FIXED_PRICE
     * @uses self::VALUE_PERSONAL_OFFER
     * @uses self::VALUE_FIXED_PRICE_ITEM
     * @uses self::VALUE_HALF
     * @uses self::VALUE_LEAD_GENERATION
     * @uses self::VALUE_EXPRESS
     * @uses self::VALUE_SHOPPING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_CHINESE,
            self::VALUE_DUTCH,
            self::VALUE_LIVE,
            self::VALUE_AUCTION,
            self::VALUE_AD_TYPE,
            self::VALUE_STORES_FIXED_PRICE,
            self::VALUE_PERSONAL_OFFER,
            self::VALUE_FIXED_PRICE_ITEM,
            self::VALUE_HALF,
            self::VALUE_LEAD_GENERATION,
            self::VALUE_EXPRESS,
            self::VALUE_SHOPPING,
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
