<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ProductSortCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class ProductSortCodeType
{
    /**
     * Constant for value 'PopularityAsc'
     * @return string 'PopularityAsc'
     */
    const VALUE_POPULARITY_ASC = 'PopularityAsc';
    /**
     * Constant for value 'PopularityDesc'
     * @return string 'PopularityDesc'
     */
    const VALUE_POPULARITY_DESC = 'PopularityDesc';
    /**
     * Constant for value 'RatingAsc'
     * @return string 'RatingAsc'
     */
    const VALUE_RATING_ASC = 'RatingAsc';
    /**
     * Constant for value 'RatingDesc'
     * @return string 'RatingDesc'
     */
    const VALUE_RATING_DESC = 'RatingDesc';
    /**
     * Constant for value 'ReviewCountAsc'
     * @return string 'ReviewCountAsc'
     */
    const VALUE_REVIEW_COUNT_ASC = 'ReviewCountAsc';
    /**
     * Constant for value 'ReviewCountDesc'
     * @return string 'ReviewCountDesc'
     */
    const VALUE_REVIEW_COUNT_DESC = 'ReviewCountDesc';
    /**
     * Constant for value 'ItemCountAsc'
     * @return string 'ItemCountAsc'
     */
    const VALUE_ITEM_COUNT_ASC = 'ItemCountAsc';
    /**
     * Constant for value 'ItemCountDesc'
     * @return string 'ItemCountDesc'
     */
    const VALUE_ITEM_COUNT_DESC = 'ItemCountDesc';
    /**
     * Constant for value 'TitleAsc'
     * @return string 'TitleAsc'
     */
    const VALUE_TITLE_ASC = 'TitleAsc';
    /**
     * Constant for value 'TitleDesc'
     * @return string 'TitleDesc'
     */
    const VALUE_TITLE_DESC = 'TitleDesc';
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
     * @uses self::VALUE_POPULARITY_ASC
     * @uses self::VALUE_POPULARITY_DESC
     * @uses self::VALUE_RATING_ASC
     * @uses self::VALUE_RATING_DESC
     * @uses self::VALUE_REVIEW_COUNT_ASC
     * @uses self::VALUE_REVIEW_COUNT_DESC
     * @uses self::VALUE_ITEM_COUNT_ASC
     * @uses self::VALUE_ITEM_COUNT_DESC
     * @uses self::VALUE_TITLE_ASC
     * @uses self::VALUE_TITLE_DESC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POPULARITY_ASC,
            self::VALUE_POPULARITY_DESC,
            self::VALUE_RATING_ASC,
            self::VALUE_RATING_DESC,
            self::VALUE_REVIEW_COUNT_ASC,
            self::VALUE_REVIEW_COUNT_DESC,
            self::VALUE_ITEM_COUNT_ASC,
            self::VALUE_ITEM_COUNT_DESC,
            self::VALUE_TITLE_ASC,
            self::VALUE_TITLE_DESC,
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
