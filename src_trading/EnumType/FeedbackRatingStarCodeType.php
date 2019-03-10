<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for FeedbackRatingStarCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The color of a feedback score star visually denotes the range in which the member's summary feedback score falls. The score is the net positive feedback minus the net negative feedback left for the member.
 * @subpackage Enumerations
 */
class FeedbackRatingStarCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Yellow'
     * @return string 'Yellow'
     */
    const VALUE_YELLOW = 'Yellow';
    /**
     * Constant for value 'Blue'
     * @return string 'Blue'
     */
    const VALUE_BLUE = 'Blue';
    /**
     * Constant for value 'Turquoise'
     * @return string 'Turquoise'
     */
    const VALUE_TURQUOISE = 'Turquoise';
    /**
     * Constant for value 'Purple'
     * @return string 'Purple'
     */
    const VALUE_PURPLE = 'Purple';
    /**
     * Constant for value 'Red'
     * @return string 'Red'
     */
    const VALUE_RED = 'Red';
    /**
     * Constant for value 'Green'
     * @return string 'Green'
     */
    const VALUE_GREEN = 'Green';
    /**
     * Constant for value 'YellowShooting'
     * @return string 'YellowShooting'
     */
    const VALUE_YELLOW_SHOOTING = 'YellowShooting';
    /**
     * Constant for value 'TurquoiseShooting'
     * @return string 'TurquoiseShooting'
     */
    const VALUE_TURQUOISE_SHOOTING = 'TurquoiseShooting';
    /**
     * Constant for value 'PurpleShooting'
     * @return string 'PurpleShooting'
     */
    const VALUE_PURPLE_SHOOTING = 'PurpleShooting';
    /**
     * Constant for value 'RedShooting'
     * @return string 'RedShooting'
     */
    const VALUE_RED_SHOOTING = 'RedShooting';
    /**
     * Constant for value 'GreenShooting'
     * @return string 'GreenShooting'
     */
    const VALUE_GREEN_SHOOTING = 'GreenShooting';
    /**
     * Constant for value 'SilverShooting'
     * @return string 'SilverShooting'
     */
    const VALUE_SILVER_SHOOTING = 'SilverShooting';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_YELLOW
     * @uses self::VALUE_BLUE
     * @uses self::VALUE_TURQUOISE
     * @uses self::VALUE_PURPLE
     * @uses self::VALUE_RED
     * @uses self::VALUE_GREEN
     * @uses self::VALUE_YELLOW_SHOOTING
     * @uses self::VALUE_TURQUOISE_SHOOTING
     * @uses self::VALUE_PURPLE_SHOOTING
     * @uses self::VALUE_RED_SHOOTING
     * @uses self::VALUE_GREEN_SHOOTING
     * @uses self::VALUE_SILVER_SHOOTING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_YELLOW,
            self::VALUE_BLUE,
            self::VALUE_TURQUOISE,
            self::VALUE_PURPLE,
            self::VALUE_RED,
            self::VALUE_GREEN,
            self::VALUE_YELLOW_SHOOTING,
            self::VALUE_TURQUOISE_SHOOTING,
            self::VALUE_PURPLE_SHOOTING,
            self::VALUE_RED_SHOOTING,
            self::VALUE_GREEN_SHOOTING,
            self::VALUE_SILVER_SHOOTING,
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
