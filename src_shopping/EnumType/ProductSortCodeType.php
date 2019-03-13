<?php

namespace macropage\ebaysdk\shopping\EnumType;

/**
 * This class stands for ProductSortCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type defines the sort values that can be used to control the order of eBay Catalog products that are returned with a <b>FindProducts</b> call.
 * @subpackage Enumerations
 */
class ProductSortCodeType
{
    /**
     * Constant for value 'Popularity'
     * @return string 'Popularity'
     */
    const VALUE_POPULARITY = 'Popularity';
    /**
     * Constant for value 'Rating'
     * @return string 'Rating'
     */
    const VALUE_RATING = 'Rating';
    /**
     * Constant for value 'ReviewCount'
     * @return string 'ReviewCount'
     */
    const VALUE_REVIEW_COUNT = 'ReviewCount';
    /**
     * Constant for value 'ItemCount'
     * @return string 'ItemCount'
     */
    const VALUE_ITEM_COUNT = 'ItemCount';
    /**
     * Constant for value 'Title'
     * @return string 'Title'
     */
    const VALUE_TITLE = 'Title';
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
     * @uses self::VALUE_POPULARITY
     * @uses self::VALUE_RATING
     * @uses self::VALUE_REVIEW_COUNT
     * @uses self::VALUE_ITEM_COUNT
     * @uses self::VALUE_TITLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POPULARITY,
            self::VALUE_RATING,
            self::VALUE_REVIEW_COUNT,
            self::VALUE_ITEM_COUNT,
            self::VALUE_TITLE,
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
