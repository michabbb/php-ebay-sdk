<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PictureManagerPictureDisplayTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureManagerPictureDisplayTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Thumbnail'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Thumbnail'
     */
    const VALUE_THUMBNAIL = 'Thumbnail';
    /**
     * Constant for value 'BIBO'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'BIBO'
     */
    const VALUE_BIBO = 'BIBO';
    /**
     * Constant for value 'Standard'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Large'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Large'
     */
    const VALUE_LARGE = 'Large';
    /**
     * Constant for value 'Supersize'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Supersize'
     */
    const VALUE_SUPERSIZE = 'Supersize';
    /**
     * Constant for value 'Original'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_THUMBNAIL
     * @uses self::VALUE_BIBO
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_LARGE
     * @uses self::VALUE_SUPERSIZE
     * @uses self::VALUE_ORIGINAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_THUMBNAIL,
            self::VALUE_BIBO,
            self::VALUE_STANDARD,
            self::VALUE_LARGE,
            self::VALUE_SUPERSIZE,
            self::VALUE_ORIGINAL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
