<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GallerySortFilterCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class GallerySortFilterCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ShowAnyItems'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShowAnyItems'
     */
    const VALUE_SHOW_ANY_ITEMS = 'ShowAnyItems';
    /**
     * Constant for value 'ShowItemsWithGalleryImagesFirst'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShowItemsWithGalleryImagesFirst'
     */
    const VALUE_SHOW_ITEMS_WITH_GALLERY_IMAGES_FIRST = 'ShowItemsWithGalleryImagesFirst';
    /**
     * Constant for value 'ShowOnlyItemsWithGalleryImages'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ShowOnlyItemsWithGalleryImages'
     */
    const VALUE_SHOW_ONLY_ITEMS_WITH_GALLERY_IMAGES = 'ShowOnlyItemsWithGalleryImages';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SHOW_ANY_ITEMS
     * @uses self::VALUE_SHOW_ITEMS_WITH_GALLERY_IMAGES_FIRST
     * @uses self::VALUE_SHOW_ONLY_ITEMS_WITH_GALLERY_IMAGES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SHOW_ANY_ITEMS,
            self::VALUE_SHOW_ITEMS_WITH_GALLERY_IMAGES_FIRST,
            self::VALUE_SHOW_ONLY_ITEMS_WITH_GALLERY_IMAGES,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
