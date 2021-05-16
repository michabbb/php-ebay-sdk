<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PictureFormatCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates the format of the picture returned. Sometimes this is different than the format of the uploaded picture.
 * @subpackage Enumerations
 */
class PictureFormatCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'JPG'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the picture was returned in JPG format. Uploaded pictures in JPG, TIF, or BMP will be returned as JPG.
     * @return string 'JPG'
     */
    const VALUE_JPG = 'JPG';
    /**
     * Constant for value 'GIF'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the picture was returned in GIF format.
     * @return string 'GIF'
     */
    const VALUE_GIF = 'GIF';
    /**
     * Constant for value 'PNG'
     * Meta information extracted from the WSDL
     * - documentation: Indicates the picture was returned in PNG format.
     * @return string 'PNG'
     */
    const VALUE_PNG = 'PNG';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal use <b>only</b>.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_JPG
     * @uses self::VALUE_GIF
     * @uses self::VALUE_PNG
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_JPG,
            self::VALUE_GIF,
            self::VALUE_PNG,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
