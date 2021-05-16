<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeedbackRatingStarCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The color of a feedback score star visually denotes the range in which the member's summary feedback score falls. The score is the net positive feedback minus the net negative feedback left for the member.
 * @subpackage Enumerations
 */
class FeedbackRatingStarCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: No graphic displayed, feedback score 0-9.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Yellow'
     * Meta information extracted from the WSDL
     * - documentation: Yellow Star, feedback score 10-49.
     * @return string 'Yellow'
     */
    const VALUE_YELLOW = 'Yellow';
    /**
     * Constant for value 'Blue'
     * Meta information extracted from the WSDL
     * - documentation: Blue Star, feedback score 50-99.
     * @return string 'Blue'
     */
    const VALUE_BLUE = 'Blue';
    /**
     * Constant for value 'Turquoise'
     * Meta information extracted from the WSDL
     * - documentation: Turquoise Star, feedback score 100-499.
     * @return string 'Turquoise'
     */
    const VALUE_TURQUOISE = 'Turquoise';
    /**
     * Constant for value 'Purple'
     * Meta information extracted from the WSDL
     * - documentation: Purple Star, feedback score 500-999.
     * @return string 'Purple'
     */
    const VALUE_PURPLE = 'Purple';
    /**
     * Constant for value 'Red'
     * Meta information extracted from the WSDL
     * - documentation: Red Star, feedback score 1,000-4,999
     * @return string 'Red'
     */
    const VALUE_RED = 'Red';
    /**
     * Constant for value 'Green'
     * Meta information extracted from the WSDL
     * - documentation: Green Star, feedback score 5,000-9,999.
     * @return string 'Green'
     */
    const VALUE_GREEN = 'Green';
    /**
     * Constant for value 'YellowShooting'
     * Meta information extracted from the WSDL
     * - documentation: Yellow Shooting Star, feedback score 10,000-24,999.
     * @return string 'YellowShooting'
     */
    const VALUE_YELLOW_SHOOTING = 'YellowShooting';
    /**
     * Constant for value 'TurquoiseShooting'
     * Meta information extracted from the WSDL
     * - documentation: Turquoise Shooting Star, feedback score 25,000-49,999.
     * @return string 'TurquoiseShooting'
     */
    const VALUE_TURQUOISE_SHOOTING = 'TurquoiseShooting';
    /**
     * Constant for value 'PurpleShooting'
     * Meta information extracted from the WSDL
     * - documentation: Purple Shooting Star, feedback score 50,000-99,999.
     * @return string 'PurpleShooting'
     */
    const VALUE_PURPLE_SHOOTING = 'PurpleShooting';
    /**
     * Constant for value 'RedShooting'
     * Meta information extracted from the WSDL
     * - documentation: Red Shooting Star, feedback score 100,000-499,999.
     * @return string 'RedShooting'
     */
    const VALUE_RED_SHOOTING = 'RedShooting';
    /**
     * Constant for value 'GreenShooting'
     * Meta information extracted from the WSDL
     * - documentation: Green Shooting Star, feedback score 500,000-999,999.
     * @return string 'GreenShooting'
     */
    const VALUE_GREEN_SHOOTING = 'GreenShooting';
    /**
     * Constant for value 'SilverShooting'
     * Meta information extracted from the WSDL
     * - documentation: Silver Shooting Star, feedback score 1,000,000 and above.
     * @return string 'SilverShooting'
     */
    const VALUE_SILVER_SHOOTING = 'SilverShooting';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
