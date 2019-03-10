<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ApplicationDeviceTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type list the possible devices that may be running a affiliate user's application. The affiliate must mark the type of device that is running their application when the <b>PlaceOffer</b> call is made.
 * @subpackage Enumerations
 */
class ApplicationDeviceTypeCodeType
{
    /**
     * Constant for value 'Browser'
     * @return string 'Browser'
     */
    const VALUE_BROWSER = 'Browser';
    /**
     * Constant for value 'Wireless'
     * @return string 'Wireless'
     */
    const VALUE_WIRELESS = 'Wireless';
    /**
     * Constant for value 'Desktop'
     * @return string 'Desktop'
     */
    const VALUE_DESKTOP = 'Desktop';
    /**
     * Constant for value 'SetTopTVBox'
     * @return string 'SetTopTVBox'
     */
    const VALUE_SET_TOP_TVBOX = 'SetTopTVBox';
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
     * @uses self::VALUE_BROWSER
     * @uses self::VALUE_WIRELESS
     * @uses self::VALUE_DESKTOP
     * @uses self::VALUE_SET_TOP_TVBOX
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BROWSER,
            self::VALUE_WIRELESS,
            self::VALUE_DESKTOP,
            self::VALUE_SET_TOP_TVBOX,
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
