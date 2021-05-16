<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ApplicationDeviceTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type list the possible devices that may be running a affiliate user's application. The affiliate must mark the type of device that is running their application when the <b>PlaceOffer</b> call is made.
 * @subpackage Enumerations
 */
class ApplicationDeviceTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Browser'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's application is running in a browser.
     * @return string 'Browser'
     */
    const VALUE_BROWSER = 'Browser';
    /**
     * Constant for value 'Wireless'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's application is a wireless application.
     * @return string 'Wireless'
     */
    const VALUE_WIRELESS = 'Wireless';
    /**
     * Constant for value 'Desktop'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's application is a desktop application.
     * @return string 'Desktop'
     */
    const VALUE_DESKTOP = 'Desktop';
    /**
     * Constant for value 'SetTopTVBox'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's application is running through a television set-top box.
     * @return string 'SetTopTVBox'
     */
    const VALUE_SET_TOP_TVBOX = 'SetTopTVBox';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BROWSER
     * @uses self::VALUE_WIRELESS
     * @uses self::VALUE_DESKTOP
     * @uses self::VALUE_SET_TOP_TVBOX
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BROWSER,
            self::VALUE_WIRELESS,
            self::VALUE_DESKTOP,
            self::VALUE_SET_TOP_TVBOX,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
