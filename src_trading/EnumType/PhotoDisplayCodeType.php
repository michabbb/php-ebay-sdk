<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PhotoDisplayCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the type of image display used in a listing. Some options are only available if images are hosted through eBay Picture Services (EPS).
 * @subpackage Enumerations
 */
class PhotoDisplayCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: No special image display options. Valid for US Motors listings.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SlideShow'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'SlideShow'
     */
    const VALUE_SLIDE_SHOW = 'SlideShow';
    /**
     * Constant for value 'SuperSize'
     * Meta information extracted from the WSDL
     * - documentation: Increase the size of each image and allow buyers to enlarge images further. Only available for site-hosted (EPS) images. Not valid for US Motors listings. For all sites that do not automatically upgrade SuperSize to PicturePack (see
     * note below), specifying no SuperSize-qualified images is now accepted in the request. <br><br> <span class="tablenote"><b>Note:</b> SuperSize is automatically upgraded to PicturePack for the same SuperSize fee on the US Motors Parts & Accessories
     * Category and US (site ID 0) and CA (site ID 2) and CAFR (site ID 210). This upgrade applies only to EPS images. </span>
     * @return string 'SuperSize'
     */
    const VALUE_SUPER_SIZE = 'SuperSize';
    /**
     * Constant for value 'PicturePack'
     * Meta information extracted from the WSDL
     * - documentation: Increase the number of images displayed. This is only available for images hosted with eBay. See GetCategoryFeatures and the online Help (on the eBay site) for additional information. <br><br> Picture Pack applies to all sites
     * (including US Motors), except for NL (site ID 146). You can specify a minimum of one EPS picture, or no SuperSize-qualified EPS pictures in the request. For the NL site, PicturePack is replaced with SuperSize.
     * @return string 'PicturePack'
     */
    const VALUE_PICTURE_PACK = 'PicturePack';
    /**
     * Constant for value 'SiteHostedPictureShow'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'SiteHostedPictureShow'
     */
    const VALUE_SITE_HOSTED_PICTURE_SHOW = 'SiteHostedPictureShow';
    /**
     * Constant for value 'VendorHostedPictureShow'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'VendorHostedPictureShow'
     */
    const VALUE_VENDOR_HOSTED_PICTURE_SHOW = 'VendorHostedPictureShow';
    /**
     * Constant for value 'SuperSizePictureShow'
     * Meta information extracted from the WSDL
     * - documentation: This is valid for US Motors listing only. For other listings, use SuperSize.
     * @return string 'SuperSizePictureShow'
     */
    const VALUE_SUPER_SIZE_PICTURE_SHOW = 'SuperSizePictureShow';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal use <b>only</b>.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SLIDE_SHOW
     * @uses self::VALUE_SUPER_SIZE
     * @uses self::VALUE_PICTURE_PACK
     * @uses self::VALUE_SITE_HOSTED_PICTURE_SHOW
     * @uses self::VALUE_VENDOR_HOSTED_PICTURE_SHOW
     * @uses self::VALUE_SUPER_SIZE_PICTURE_SHOW
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_SLIDE_SHOW,
            self::VALUE_SUPER_SIZE,
            self::VALUE_PICTURE_PACK,
            self::VALUE_SITE_HOSTED_PICTURE_SHOW,
            self::VALUE_VENDOR_HOSTED_PICTURE_SHOW,
            self::VALUE_SUPER_SIZE_PICTURE_SHOW,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
