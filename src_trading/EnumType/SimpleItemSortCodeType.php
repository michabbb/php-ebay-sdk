<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SimpleItemSortCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the sort values that can be used in the <b>FavoriteSearch.ItemSort</b> filter in a <b>GetMyeBayBuying</b> request.
 * @subpackage Enumerations
 */
class SimpleItemSortCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BestMatch'
     * Meta information extracted from the WSDL
     * - documentation: Sorts items by Best Match, and no sort order applies. If specified, then Best Match sort also applies to CategoryHistogram.
     * @return string 'BestMatch'
     */
    const VALUE_BEST_MATCH = 'BestMatch';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'EndTime'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by the end time of the listing, in ascending or descending order according to the <b>SortOrder</b> value.
     * @return string 'EndTime'
     */
    const VALUE_END_TIME = 'EndTime';
    /**
     * Constant for value 'BidCount'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by number of bids on the item, in ascending or descending order according to the <b>SortOrder</b> value.
     * @return string 'BidCount'
     */
    const VALUE_BID_COUNT = 'BidCount';
    /**
     * Constant for value 'Country'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by country; no sort order can be specified.
     * @return string 'Country'
     */
    const VALUE_COUNTRY = 'Country';
    /**
     * Constant for value 'CurrentBid'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by current bid; descending order only.
     * @return string 'CurrentBid'
     */
    const VALUE_CURRENT_BID = 'CurrentBid';
    /**
     * Constant for value 'Distance'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by distance; ascending order only.
     * @return string 'Distance'
     */
    const VALUE_DISTANCE = 'Distance';
    /**
     * Constant for value 'StartDate'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by the start time of the listing; recently-listed first.
     * @return string 'StartDate'
     */
    const VALUE_START_DATE = 'StartDate';
    /**
     * Constant for value 'BestMatchCategoryGroup'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by BestMatchCategoryGroup, so results are grouped by Best Match within a category.
     * @return string 'BestMatchCategoryGroup'
     */
    const VALUE_BEST_MATCH_CATEGORY_GROUP = 'BestMatchCategoryGroup';
    /**
     * Constant for value 'PricePlusShipping'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by total cost, which is item cost plus shipping cost. If <b>SortOrder</b> is included and set to 'Ascending', items are sorted in the following order: Lowest total cost (for items where shipping was properly specified); then
     * freight-shipping items (lowest to highest); and finally, items for which shipping was not specified (lowest to highest).
     * @return string 'PricePlusShipping'
     */
    const VALUE_PRICE_PLUS_SHIPPING = 'PricePlusShipping';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
