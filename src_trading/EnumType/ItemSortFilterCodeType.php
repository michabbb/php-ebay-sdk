<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemSortFilterCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ItemSortFilterCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EndingLast'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'EndingLast'
     */
    const VALUE_ENDING_LAST = 'EndingLast';
    /**
     * Constant for value 'EndingSoonest'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'EndingSoonest'
     */
    const VALUE_ENDING_SOONEST = 'EndingSoonest';
    /**
     * Constant for value 'HighestPrice'
     * Meta information extracted from the WSDL
     * - documentation: Sort items by price, with the highest price first.
     * @return string 'HighestPrice'
     */
    const VALUE_HIGHEST_PRICE = 'HighestPrice';
    /**
     * Constant for value 'LowestPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'LowestPrice'
     */
    const VALUE_LOWEST_PRICE = 'LowestPrice';
    /**
     * Constant for value 'NewlyListed'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'NewlyListed'
     */
    const VALUE_NEWLY_LISTED = 'NewlyListed';
    /**
     * Constant for value 'RandomlySelected'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'RandomlySelected'
     */
    const VALUE_RANDOMLY_SELECTED = 'RandomlySelected';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENDING_LAST,
            self::VALUE_ENDING_SOONEST,
            self::VALUE_HIGHEST_PRICE,
            self::VALUE_LOWEST_PRICE,
            self::VALUE_NEWLY_LISTED,
            self::VALUE_RANDOMLY_SELECTED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
