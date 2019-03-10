<?php

namespace macropage\ebaysdk\finding\EnumType;

/**
 * This class stands for OutputSelectorType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Values that specify additional information to be returned in the search results.
 * @subpackage Enumerations
 */
class OutputSelectorType
{
    /**
     * Constant for value 'SellerInfo'
     * @return string 'SellerInfo'
     */
    const VALUE_SELLER_INFO = 'SellerInfo';
    /**
     * Constant for value 'StoreInfo'
     * @return string 'StoreInfo'
     */
    const VALUE_STORE_INFO = 'StoreInfo';
    /**
     * Constant for value 'CategoryHistogram'
     * @return string 'CategoryHistogram'
     */
    const VALUE_CATEGORY_HISTOGRAM = 'CategoryHistogram';
    /**
     * Constant for value 'AspectHistogram'
     * @return string 'AspectHistogram'
     */
    const VALUE_ASPECT_HISTOGRAM = 'AspectHistogram';
    /**
     * Constant for value 'ConditionHistogram'
     * @return string 'ConditionHistogram'
     */
    const VALUE_CONDITION_HISTOGRAM = 'ConditionHistogram';
    /**
     * Constant for value 'GalleryInfo'
     * @return string 'GalleryInfo'
     */
    const VALUE_GALLERY_INFO = 'GalleryInfo';
    /**
     * Constant for value 'PictureURLSuperSize'
     * @return string 'PictureURLSuperSize'
     */
    const VALUE_PICTURE_URLSUPER_SIZE = 'PictureURLSuperSize';
    /**
     * Constant for value 'PictureURLLarge'
     * @return string 'PictureURLLarge'
     */
    const VALUE_PICTURE_URLLARGE = 'PictureURLLarge';
    /**
     * Constant for value 'UnitPriceInfo'
     * @return string 'UnitPriceInfo'
     */
    const VALUE_UNIT_PRICE_INFO = 'UnitPriceInfo';
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
     * @uses self::VALUE_SELLER_INFO
     * @uses self::VALUE_STORE_INFO
     * @uses self::VALUE_CATEGORY_HISTOGRAM
     * @uses self::VALUE_ASPECT_HISTOGRAM
     * @uses self::VALUE_CONDITION_HISTOGRAM
     * @uses self::VALUE_GALLERY_INFO
     * @uses self::VALUE_PICTURE_URLSUPER_SIZE
     * @uses self::VALUE_PICTURE_URLLARGE
     * @uses self::VALUE_UNIT_PRICE_INFO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SELLER_INFO,
            self::VALUE_STORE_INFO,
            self::VALUE_CATEGORY_HISTOGRAM,
            self::VALUE_ASPECT_HISTOGRAM,
            self::VALUE_CONDITION_HISTOGRAM,
            self::VALUE_GALLERY_INFO,
            self::VALUE_PICTURE_URLSUPER_SIZE,
            self::VALUE_PICTURE_URLLARGE,
            self::VALUE_UNIT_PRICE_INFO,
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
