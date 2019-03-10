<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SearchFlagCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type lists the possible values that can be returned under the <b>FavoriteSearch.SearchFlag</b> field of a <b>GetMyeBayBuying</b> response. These values are output only and are controlled by the filter types used in a
 * buyer's Saved Search.
 * @subpackage Enumerations
 */
class SearchFlagCodeType
{
    /**
     * Constant for value 'Charity'
     * @return string 'Charity'
     */
    const VALUE_CHARITY = 'Charity';
    /**
     * Constant for value 'Gift'
     * @return string 'Gift'
     */
    const VALUE_GIFT = 'Gift';
    /**
     * Constant for value 'NowAndNew'
     * @return string 'NowAndNew'
     */
    const VALUE_NOW_AND_NEW = 'NowAndNew';
    /**
     * Constant for value 'LocalSearch'
     * @return string 'LocalSearch'
     */
    const VALUE_LOCAL_SEARCH = 'LocalSearch';
    /**
     * Constant for value 'FreeShipping'
     * @return string 'FreeShipping'
     */
    const VALUE_FREE_SHIPPING = 'FreeShipping';
    /**
     * Constant for value 'Gallery'
     * @return string 'Gallery'
     */
    const VALUE_GALLERY = 'Gallery';
    /**
     * Constant for value 'Picture'
     * @return string 'Picture'
     */
    const VALUE_PICTURE = 'Picture';
    /**
     * Constant for value 'GetItFast'
     * @return string 'GetItFast'
     */
    const VALUE_GET_IT_FAST = 'GetItFast';
    /**
     * Constant for value 'Lot'
     * @return string 'Lot'
     */
    const VALUE_LOT = 'Lot';
    /**
     * Constant for value 'GermanMotorsSearchable'
     * @return string 'GermanMotorsSearchable'
     */
    const VALUE_GERMAN_MOTORS_SEARCHABLE = 'GermanMotorsSearchable';
    /**
     * Constant for value 'WorldOfGood'
     * @return string 'WorldOfGood'
     */
    const VALUE_WORLD_OF_GOOD = 'WorldOfGood';
    /**
     * Constant for value 'DigitalDelivery'
     * @return string 'DigitalDelivery'
     */
    const VALUE_DIGITAL_DELIVERY = 'DigitalDelivery';
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
     * @uses self::VALUE_CHARITY
     * @uses self::VALUE_GIFT
     * @uses self::VALUE_NOW_AND_NEW
     * @uses self::VALUE_LOCAL_SEARCH
     * @uses self::VALUE_FREE_SHIPPING
     * @uses self::VALUE_GALLERY
     * @uses self::VALUE_PICTURE
     * @uses self::VALUE_GET_IT_FAST
     * @uses self::VALUE_LOT
     * @uses self::VALUE_GERMAN_MOTORS_SEARCHABLE
     * @uses self::VALUE_WORLD_OF_GOOD
     * @uses self::VALUE_DIGITAL_DELIVERY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHARITY,
            self::VALUE_GIFT,
            self::VALUE_NOW_AND_NEW,
            self::VALUE_LOCAL_SEARCH,
            self::VALUE_FREE_SHIPPING,
            self::VALUE_GALLERY,
            self::VALUE_PICTURE,
            self::VALUE_GET_IT_FAST,
            self::VALUE_LOT,
            self::VALUE_GERMAN_MOTORS_SEARCHABLE,
            self::VALUE_WORLD_OF_GOOD,
            self::VALUE_DIGITAL_DELIVERY,
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
