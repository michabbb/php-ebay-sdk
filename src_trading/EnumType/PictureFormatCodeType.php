<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PictureFormatCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the format of the picture returned. Sometimes this is different than the format of the uploaded picture.
 * @subpackage Enumerations
 */
class PictureFormatCodeType
{
    /**
     * Constant for value 'JPG'
     * @return string 'JPG'
     */
    const VALUE_JPG = 'JPG';
    /**
     * Constant for value 'GIF'
     * @return string 'GIF'
     */
    const VALUE_GIF = 'GIF';
    /**
     * Constant for value 'PNG'
     * @return string 'PNG'
     */
    const VALUE_PNG = 'PNG';
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
     * @uses self::VALUE_JPG
     * @uses self::VALUE_GIF
     * @uses self::VALUE_PNG
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_JPG,
            self::VALUE_GIF,
            self::VALUE_PNG,
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
