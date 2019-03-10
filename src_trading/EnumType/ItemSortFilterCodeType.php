<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ItemSortFilterCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ItemSortFilterCodeType
{
    /**
     * Constant for value 'EndingLast'
     * @return string 'EndingLast'
     */
    const VALUE_ENDING_LAST = 'EndingLast';
    /**
     * Constant for value 'EndingSoonest'
     * @return string 'EndingSoonest'
     */
    const VALUE_ENDING_SOONEST = 'EndingSoonest';
    /**
     * Constant for value 'HighestPrice'
     * @return string 'HighestPrice'
     */
    const VALUE_HIGHEST_PRICE = 'HighestPrice';
    /**
     * Constant for value 'LowestPrice'
     * @return string 'LowestPrice'
     */
    const VALUE_LOWEST_PRICE = 'LowestPrice';
    /**
     * Constant for value 'NewlyListed'
     * @return string 'NewlyListed'
     */
    const VALUE_NEWLY_LISTED = 'NewlyListed';
    /**
     * Constant for value 'RandomlySelected'
     * @return string 'RandomlySelected'
     */
    const VALUE_RANDOMLY_SELECTED = 'RandomlySelected';
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
     * @uses self::VALUE_ENDING_LAST
     * @uses self::VALUE_ENDING_SOONEST
     * @uses self::VALUE_HIGHEST_PRICE
     * @uses self::VALUE_LOWEST_PRICE
     * @uses self::VALUE_NEWLY_LISTED
     * @uses self::VALUE_RANDOMLY_SELECTED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENDING_LAST,
            self::VALUE_ENDING_SOONEST,
            self::VALUE_HIGHEST_PRICE,
            self::VALUE_LOWEST_PRICE,
            self::VALUE_NEWLY_LISTED,
            self::VALUE_RANDOMLY_SELECTED,
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
