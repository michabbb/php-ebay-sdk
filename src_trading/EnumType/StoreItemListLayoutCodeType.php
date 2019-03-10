<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for StoreItemListLayoutCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Set of available layouts for items listed in an eBay Store.
 * @subpackage Enumerations
 */
class StoreItemListLayoutCodeType
{
    /**
     * Constant for value 'ListView'
     * @return string 'ListView'
     */
    const VALUE_LIST_VIEW = 'ListView';
    /**
     * Constant for value 'GalleryView'
     * @return string 'GalleryView'
     */
    const VALUE_GALLERY_VIEW = 'GalleryView';
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
     * @uses self::VALUE_LIST_VIEW
     * @uses self::VALUE_GALLERY_VIEW
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST_VIEW,
            self::VALUE_GALLERY_VIEW,
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
