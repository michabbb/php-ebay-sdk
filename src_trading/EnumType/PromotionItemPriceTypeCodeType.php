<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PromotionItemPriceTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PromotionItemPriceTypeCodeType
{
    /**
     * Constant for value 'AuctionPrice'
     * @return string 'AuctionPrice'
     */
    const VALUE_AUCTION_PRICE = 'AuctionPrice';
    /**
     * Constant for value 'BuyItNowPrice'
     * @return string 'BuyItNowPrice'
     */
    const VALUE_BUY_IT_NOW_PRICE = 'BuyItNowPrice';
    /**
     * Constant for value 'BestOfferOnlyPrice'
     * @return string 'BestOfferOnlyPrice'
     */
    const VALUE_BEST_OFFER_ONLY_PRICE = 'BestOfferOnlyPrice';
    /**
     * Constant for value 'ClassifiedAdPrice'
     * @return string 'ClassifiedAdPrice'
     */
    const VALUE_CLASSIFIED_AD_PRICE = 'ClassifiedAdPrice';
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
     * @uses self::VALUE_AUCTION_PRICE
     * @uses self::VALUE_BUY_IT_NOW_PRICE
     * @uses self::VALUE_BEST_OFFER_ONLY_PRICE
     * @uses self::VALUE_CLASSIFIED_AD_PRICE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUCTION_PRICE,
            self::VALUE_BUY_IT_NOW_PRICE,
            self::VALUE_BEST_OFFER_ONLY_PRICE,
            self::VALUE_CLASSIFIED_AD_PRICE,
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
