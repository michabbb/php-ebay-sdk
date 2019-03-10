<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StoreItemListSortOrderCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: List of available options for how items are sorted in an eBay Store.
 * @subpackage Enumerations
 */
class StoreItemListSortOrderCodeType
{
    /**
     * Constant for value 'EndingFirst'
     * @return string 'EndingFirst'
     */
    const VALUE_ENDING_FIRST = 'EndingFirst';
    /**
     * Constant for value 'NewlyListed'
     * @return string 'NewlyListed'
     */
    const VALUE_NEWLY_LISTED = 'NewlyListed';
    /**
     * Constant for value 'LowestPriced'
     * @return string 'LowestPriced'
     */
    const VALUE_LOWEST_PRICED = 'LowestPriced';
    /**
     * Constant for value 'HighestPriced'
     * @return string 'HighestPriced'
     */
    const VALUE_HIGHEST_PRICED = 'HighestPriced';
    /**
     * Constant for value 'LowestPricedPlusShipping'
     * @return string 'LowestPricedPlusShipping'
     */
    const VALUE_LOWEST_PRICED_PLUS_SHIPPING = 'LowestPricedPlusShipping';
    /**
     * Constant for value 'HighestPricedPlusShipping'
     * @return string 'HighestPricedPlusShipping'
     */
    const VALUE_HIGHEST_PRICED_PLUS_SHIPPING = 'HighestPricedPlusShipping';
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
     * @uses self::VALUE_ENDING_FIRST
     * @uses self::VALUE_NEWLY_LISTED
     * @uses self::VALUE_LOWEST_PRICED
     * @uses self::VALUE_HIGHEST_PRICED
     * @uses self::VALUE_LOWEST_PRICED_PLUS_SHIPPING
     * @uses self::VALUE_HIGHEST_PRICED_PLUS_SHIPPING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENDING_FIRST,
            self::VALUE_NEWLY_LISTED,
            self::VALUE_LOWEST_PRICED,
            self::VALUE_HIGHEST_PRICED,
            self::VALUE_LOWEST_PRICED_PLUS_SHIPPING,
            self::VALUE_HIGHEST_PRICED_PLUS_SHIPPING,
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
