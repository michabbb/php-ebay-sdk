<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SimpleItemSortCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type defines the sort values that can be used in the <b>FavoriteSearch.ItemSort</b> filter in a <b>GetMyeBayBuying</b> request.
 * @subpackage Enumerations
 */
class SimpleItemSortCodeType
{
    /**
     * Constant for value 'BestMatch'
     * @return string 'BestMatch'
     */
    const VALUE_BEST_MATCH = 'BestMatch';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'EndTime'
     * @return string 'EndTime'
     */
    const VALUE_END_TIME = 'EndTime';
    /**
     * Constant for value 'BidCount'
     * @return string 'BidCount'
     */
    const VALUE_BID_COUNT = 'BidCount';
    /**
     * Constant for value 'Country'
     * @return string 'Country'
     */
    const VALUE_COUNTRY = 'Country';
    /**
     * Constant for value 'CurrentBid'
     * @return string 'CurrentBid'
     */
    const VALUE_CURRENT_BID = 'CurrentBid';
    /**
     * Constant for value 'Distance'
     * @return string 'Distance'
     */
    const VALUE_DISTANCE = 'Distance';
    /**
     * Constant for value 'StartDate'
     * @return string 'StartDate'
     */
    const VALUE_START_DATE = 'StartDate';
    /**
     * Constant for value 'BestMatchCategoryGroup'
     * @return string 'BestMatchCategoryGroup'
     */
    const VALUE_BEST_MATCH_CATEGORY_GROUP = 'BestMatchCategoryGroup';
    /**
     * Constant for value 'PricePlusShipping'
     * @return string 'PricePlusShipping'
     */
    const VALUE_PRICE_PLUS_SHIPPING = 'PricePlusShipping';
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
     * @uses self::VALUE_BEST_MATCH
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_END_TIME
     * @uses self::VALUE_BID_COUNT
     * @uses self::VALUE_COUNTRY
     * @uses self::VALUE_CURRENT_BID
     * @uses self::VALUE_DISTANCE
     * @uses self::VALUE_START_DATE
     * @uses self::VALUE_BEST_MATCH_CATEGORY_GROUP
     * @uses self::VALUE_PRICE_PLUS_SHIPPING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BEST_MATCH,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_END_TIME,
            self::VALUE_BID_COUNT,
            self::VALUE_COUNTRY,
            self::VALUE_CURRENT_BID,
            self::VALUE_DISTANCE,
            self::VALUE_START_DATE,
            self::VALUE_BEST_MATCH_CATEGORY_GROUP,
            self::VALUE_PRICE_PLUS_SHIPPING,
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
