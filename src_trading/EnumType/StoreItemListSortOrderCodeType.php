<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreItemListSortOrderCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: List of available options for how items are sorted in an eBay Store.
 * @subpackage Enumerations
 */
class StoreItemListSortOrderCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EndingFirst'
     * Meta information extracted from the WSDL
     * - documentation: Lists items with those ending soon listed first.
     * @return string 'EndingFirst'
     */
    const VALUE_ENDING_FIRST = 'EndingFirst';
    /**
     * Constant for value 'NewlyListed'
     * Meta information extracted from the WSDL
     * - documentation: Lists items with those newly listed appearing in the list first.
     * @return string 'NewlyListed'
     */
    const VALUE_NEWLY_LISTED = 'NewlyListed';
    /**
     * Constant for value 'LowestPriced'
     * Meta information extracted from the WSDL
     * - documentation: Lists items by price in ascending order. The item with the lowest starting price is listed first.
     * @return string 'LowestPriced'
     */
    const VALUE_LOWEST_PRICED = 'LowestPriced';
    /**
     * Constant for value 'HighestPriced'
     * Meta information extracted from the WSDL
     * - documentation: Lists items by price in descending order. The item with the highest starting price is listed first.
     * @return string 'HighestPriced'
     */
    const VALUE_HIGHEST_PRICED = 'HighestPriced';
    /**
     * Constant for value 'LowestPricedPlusShipping'
     * Meta information extracted from the WSDL
     * - documentation: Lists items by combined price and shipping cost in ascending order. The item with the lowest combined starting price plus shipping cost is listed first.
     * @return string 'LowestPricedPlusShipping'
     */
    const VALUE_LOWEST_PRICED_PLUS_SHIPPING = 'LowestPricedPlusShipping';
    /**
     * Constant for value 'HighestPricedPlusShipping'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use. Lists items by combined price and shipping cost in descending order. The item with the highest combined starting price plus shipping cost is listed first.
     * @return string 'HighestPricedPlusShipping'
     */
    const VALUE_HIGHEST_PRICED_PLUS_SHIPPING = 'HighestPricedPlusShipping';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ENDING_FIRST
     * @uses self::VALUE_NEWLY_LISTED
     * @uses self::VALUE_LOWEST_PRICED
     * @uses self::VALUE_HIGHEST_PRICED
     * @uses self::VALUE_LOWEST_PRICED_PLUS_SHIPPING
     * @uses self::VALUE_HIGHEST_PRICED_PLUS_SHIPPING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENDING_FIRST,
            self::VALUE_NEWLY_LISTED,
            self::VALUE_LOWEST_PRICED,
            self::VALUE_HIGHEST_PRICED,
            self::VALUE_LOWEST_PRICED_PLUS_SHIPPING,
            self::VALUE_HIGHEST_PRICED_PLUS_SHIPPING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
