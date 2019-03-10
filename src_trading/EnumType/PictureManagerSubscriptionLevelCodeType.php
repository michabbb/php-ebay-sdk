<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PictureManagerSubscriptionLevelCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureManagerSubscriptionLevelCodeType
{
    /**
     * Constant for value 'Free'
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'Level1'
     * @return string 'Level1'
     */
    const VALUE_LEVEL_1 = 'Level1';
    /**
     * Constant for value 'Level2'
     * @return string 'Level2'
     */
    const VALUE_LEVEL_2 = 'Level2';
    /**
     * Constant for value 'Level3'
     * @return string 'Level3'
     */
    const VALUE_LEVEL_3 = 'Level3';
    /**
     * Constant for value 'Level4'
     * @return string 'Level4'
     */
    const VALUE_LEVEL_4 = 'Level4';
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
     * @uses self::VALUE_FREE
     * @uses self::VALUE_LEVEL_1
     * @uses self::VALUE_LEVEL_2
     * @uses self::VALUE_LEVEL_3
     * @uses self::VALUE_LEVEL_4
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FREE,
            self::VALUE_LEVEL_1,
            self::VALUE_LEVEL_2,
            self::VALUE_LEVEL_3,
            self::VALUE_LEVEL_4,
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
