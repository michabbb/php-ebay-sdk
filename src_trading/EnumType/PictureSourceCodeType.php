<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PictureSourceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type used to specify where a listing's image(s) are hosted.
 * @subpackage Enumerations
 */
class PictureSourceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EPS'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the image(s) specified in the <b>PictureURL</b> field(s) are hosted by eBay Picture Services.
     * @return string 'EPS'
     */
    const VALUE_EPS = 'EPS';
    /**
     * Constant for value 'PictureManager'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'PictureManager'
     */
    const VALUE_PICTURE_MANAGER = 'PictureManager';
    /**
     * Constant for value 'Vendor'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the image(s) specified in the <b>PictureURL</b> field(s) are hosted by a third-party vendor. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     * @return string 'Vendor'
     */
    const VALUE_VENDOR = 'Vendor';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_EPS
     * @uses self::VALUE_PICTURE_MANAGER
     * @uses self::VALUE_VENDOR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EPS,
            self::VALUE_PICTURE_MANAGER,
            self::VALUE_VENDOR,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
