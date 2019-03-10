<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for GallerySortFilterCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class GallerySortFilterCodeType
{
    /**
     * Constant for value 'ShowAnyItems'
     * @return string 'ShowAnyItems'
     */
    const VALUE_SHOW_ANY_ITEMS = 'ShowAnyItems';
    /**
     * Constant for value 'ShowItemsWithGalleryImagesFirst'
     * @return string 'ShowItemsWithGalleryImagesFirst'
     */
    const VALUE_SHOW_ITEMS_WITH_GALLERY_IMAGES_FIRST = 'ShowItemsWithGalleryImagesFirst';
    /**
     * Constant for value 'ShowOnlyItemsWithGalleryImages'
     * @return string 'ShowOnlyItemsWithGalleryImages'
     */
    const VALUE_SHOW_ONLY_ITEMS_WITH_GALLERY_IMAGES = 'ShowOnlyItemsWithGalleryImages';
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
     * @uses self::VALUE_SHOW_ANY_ITEMS
     * @uses self::VALUE_SHOW_ITEMS_WITH_GALLERY_IMAGES_FIRST
     * @uses self::VALUE_SHOW_ONLY_ITEMS_WITH_GALLERY_IMAGES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHOW_ANY_ITEMS,
            self::VALUE_SHOW_ITEMS_WITH_GALLERY_IMAGES_FIRST,
            self::VALUE_SHOW_ONLY_ITEMS_WITH_GALLERY_IMAGES,
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
