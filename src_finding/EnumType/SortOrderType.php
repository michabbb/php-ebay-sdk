<?php

namespace macropage\ebaysdk\finding\EnumType;

/**
 * This class stands for SortOrderType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Values that can be used to sort search results.
 * @subpackage Enumerations
 */
class SortOrderType
{
    /**
     * Constant for value 'BestMatch'
     * @return string 'BestMatch'
     */
    const VALUE_BEST_MATCH = 'BestMatch';
    /**
     * Constant for value 'CurrentPriceHighest'
     * @return string 'CurrentPriceHighest'
     */
    const VALUE_CURRENT_PRICE_HIGHEST = 'CurrentPriceHighest';
    /**
     * Constant for value 'DistanceNearest'
     * @return string 'DistanceNearest'
     */
    const VALUE_DISTANCE_NEAREST = 'DistanceNearest';
    /**
     * Constant for value 'EndTimeSoonest'
     * @return string 'EndTimeSoonest'
     */
    const VALUE_END_TIME_SOONEST = 'EndTimeSoonest';
    /**
     * Constant for value 'PricePlusShippingLowest'
     * @return string 'PricePlusShippingLowest'
     */
    const VALUE_PRICE_PLUS_SHIPPING_LOWEST = 'PricePlusShippingLowest';
    /**
     * Constant for value 'PricePlusShippingHighest'
     * @return string 'PricePlusShippingHighest'
     */
    const VALUE_PRICE_PLUS_SHIPPING_HIGHEST = 'PricePlusShippingHighest';
    /**
     * Constant for value 'StartTimeNewest'
     * @return string 'StartTimeNewest'
     */
    const VALUE_START_TIME_NEWEST = 'StartTimeNewest';
    /**
     * Constant for value 'BidCountMost'
     * @return string 'BidCountMost'
     */
    const VALUE_BID_COUNT_MOST = 'BidCountMost';
    /**
     * Constant for value 'BidCountFewest'
     * @return string 'BidCountFewest'
     */
    const VALUE_BID_COUNT_FEWEST = 'BidCountFewest';
    /**
     * Constant for value 'CountryAscending'
     * @return string 'CountryAscending'
     */
    const VALUE_COUNTRY_ASCENDING = 'CountryAscending';
    /**
     * Constant for value 'CountryDescending'
     * @return string 'CountryDescending'
     */
    const VALUE_COUNTRY_DESCENDING = 'CountryDescending';
    /**
     * Constant for value 'WatchCountDecreaseSort'
     * @return string 'WatchCountDecreaseSort'
     */
    const VALUE_WATCH_COUNT_DECREASE_SORT = 'WatchCountDecreaseSort';
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
     * @uses self::VALUE_CURRENT_PRICE_HIGHEST
     * @uses self::VALUE_DISTANCE_NEAREST
     * @uses self::VALUE_END_TIME_SOONEST
     * @uses self::VALUE_PRICE_PLUS_SHIPPING_LOWEST
     * @uses self::VALUE_PRICE_PLUS_SHIPPING_HIGHEST
     * @uses self::VALUE_START_TIME_NEWEST
     * @uses self::VALUE_BID_COUNT_MOST
     * @uses self::VALUE_BID_COUNT_FEWEST
     * @uses self::VALUE_COUNTRY_ASCENDING
     * @uses self::VALUE_COUNTRY_DESCENDING
     * @uses self::VALUE_WATCH_COUNT_DECREASE_SORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BEST_MATCH,
            self::VALUE_CURRENT_PRICE_HIGHEST,
            self::VALUE_DISTANCE_NEAREST,
            self::VALUE_END_TIME_SOONEST,
            self::VALUE_PRICE_PLUS_SHIPPING_LOWEST,
            self::VALUE_PRICE_PLUS_SHIPPING_HIGHEST,
            self::VALUE_START_TIME_NEWEST,
            self::VALUE_BID_COUNT_MOST,
            self::VALUE_BID_COUNT_FEWEST,
            self::VALUE_COUNTRY_ASCENDING,
            self::VALUE_COUNTRY_DESCENDING,
            self::VALUE_WATCH_COUNT_DECREASE_SORT,
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
