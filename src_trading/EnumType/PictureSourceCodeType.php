<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PictureSourceCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type used to specify where a listing's image(s) are hosted.
 * @subpackage Enumerations
 */
class PictureSourceCodeType
{
    /**
     * Constant for value 'EPS'
     * @return string 'EPS'
     */
    const VALUE_EPS = 'EPS';
    /**
     * Constant for value 'PictureManager'
     * @return string 'PictureManager'
     */
    const VALUE_PICTURE_MANAGER = 'PictureManager';
    /**
     * Constant for value 'Vendor'
     * @return string 'Vendor'
     */
    const VALUE_VENDOR = 'Vendor';
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
     * @uses self::VALUE_EPS
     * @uses self::VALUE_PICTURE_MANAGER
     * @uses self::VALUE_VENDOR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EPS,
            self::VALUE_PICTURE_MANAGER,
            self::VALUE_VENDOR,
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
