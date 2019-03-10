<?php

namespace macropage\ebaysdk\finding\EnumType;

/**
 * This class stands for GallerySizeEnum EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Values that can be used to describe relative sizes of item thumbnail images.
 * @subpackage Enumerations
 */
class GallerySizeEnum
{
    /**
     * Constant for value 'Small'
     * @return string 'Small'
     */
    const VALUE_SMALL = 'Small';
    /**
     * Constant for value 'Medium'
     * @return string 'Medium'
     */
    const VALUE_MEDIUM = 'Medium';
    /**
     * Constant for value 'Large'
     * @return string 'Large'
     */
    const VALUE_LARGE = 'Large';
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
     * @uses self::VALUE_SMALL
     * @uses self::VALUE_MEDIUM
     * @uses self::VALUE_LARGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SMALL,
            self::VALUE_MEDIUM,
            self::VALUE_LARGE,
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
