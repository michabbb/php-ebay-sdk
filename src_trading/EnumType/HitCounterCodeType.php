<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for HitCounterCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type containing a list of visit counter styles that can be used in an eBay listing to track page visits.
 * @subpackage Enumerations
 */
class HitCounterCodeType
{
    /**
     * Constant for value 'NoHitCounter'
     * @return string 'NoHitCounter'
     */
    const VALUE_NO_HIT_COUNTER = 'NoHitCounter';
    /**
     * Constant for value 'HonestyStyle'
     * @return string 'HonestyStyle'
     */
    const VALUE_HONESTY_STYLE = 'HonestyStyle';
    /**
     * Constant for value 'GreenLED'
     * @return string 'GreenLED'
     */
    const VALUE_GREEN_LED = 'GreenLED';
    /**
     * Constant for value 'Hidden'
     * @return string 'Hidden'
     */
    const VALUE_HIDDEN = 'Hidden';
    /**
     * Constant for value 'BasicStyle'
     * @return string 'BasicStyle'
     */
    const VALUE_BASIC_STYLE = 'BasicStyle';
    /**
     * Constant for value 'RetroStyle'
     * @return string 'RetroStyle'
     */
    const VALUE_RETRO_STYLE = 'RetroStyle';
    /**
     * Constant for value 'HiddenStyle'
     * @return string 'HiddenStyle'
     */
    const VALUE_HIDDEN_STYLE = 'HiddenStyle';
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
     * @uses self::VALUE_NO_HIT_COUNTER
     * @uses self::VALUE_HONESTY_STYLE
     * @uses self::VALUE_GREEN_LED
     * @uses self::VALUE_HIDDEN
     * @uses self::VALUE_BASIC_STYLE
     * @uses self::VALUE_RETRO_STYLE
     * @uses self::VALUE_HIDDEN_STYLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_HIT_COUNTER,
            self::VALUE_HONESTY_STYLE,
            self::VALUE_GREEN_LED,
            self::VALUE_HIDDEN,
            self::VALUE_BASIC_STYLE,
            self::VALUE_RETRO_STYLE,
            self::VALUE_HIDDEN_STYLE,
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
