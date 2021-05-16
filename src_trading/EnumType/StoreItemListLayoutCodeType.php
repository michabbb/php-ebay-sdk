<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreItemListLayoutCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Set of available layouts for items listed in an eBay Store.
 * @subpackage Enumerations
 */
class StoreItemListLayoutCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ListView'
     * Meta information extracted from the WSDL
     * - documentation: Displays item list as a single column, with smaller item pictures.
     * @return string 'ListView'
     */
    const VALUE_LIST_VIEW = 'ListView';
    /**
     * Constant for value 'GalleryView'
     * Meta information extracted from the WSDL
     * - documentation: Displays item list in two columns, with larger item pictures.
     * @return string 'GalleryView'
     */
    const VALUE_GALLERY_VIEW = 'GalleryView';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_LIST_VIEW
     * @uses self::VALUE_GALLERY_VIEW
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LIST_VIEW,
            self::VALUE_GALLERY_VIEW,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
