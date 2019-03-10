<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PictureSetCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies whether to generate the 'standard' set of images for each picture or to also generate a super-sized image. <br/><br/> <b>Note:</b> This type is used only for images that will be used in a listing.
 * @subpackage Enumerations
 */
class PictureSetCodeType
{
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Supersize'
     * @return string 'Supersize'
     */
    const VALUE_SUPERSIZE = 'Supersize';
    /**
     * Constant for value 'Large'
     * @return string 'Large'
     */
    const VALUE_LARGE = 'Large';
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
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_SUPERSIZE
     * @uses self::VALUE_LARGE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STANDARD,
            self::VALUE_SUPERSIZE,
            self::VALUE_LARGE,
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
