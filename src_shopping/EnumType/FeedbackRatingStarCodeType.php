<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeedbackRatingStarCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The color of a Feedback score star visually denotes the range in which the member's summary Feedback score falls. The score is the net positive Feedback minus the net negative Feedback left for the member.
 * @subpackage Enumerations
 */
class FeedbackRatingStarCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 0-9. There is no Feedback Rating Star associated with this score range.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Yellow'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 10-49. A Yellow Feedback Rating Star is used with this score range.
     * @return string 'Yellow'
     */
    const VALUE_YELLOW = 'Yellow';
    /**
     * Constant for value 'Blue'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 50-99. A Blue Feedback Rating Star is used with this score range.
     * @return string 'Blue'
     */
    const VALUE_BLUE = 'Blue';
    /**
     * Constant for value 'Turquoise'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 100-499. A Turquoise Feedback Rating Star is used with this score range.
     * @return string 'Turquoise'
     */
    const VALUE_TURQUOISE = 'Turquoise';
    /**
     * Constant for value 'Purple'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 500-999. A Purple Feedback Rating Star is used with this score range.
     * @return string 'Purple'
     */
    const VALUE_PURPLE = 'Purple';
    /**
     * Constant for value 'Red'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 1000-4999. A Red Feedback Rating Star is used with this score range.
     * @return string 'Red'
     */
    const VALUE_RED = 'Red';
    /**
     * Constant for value 'Green'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 5000-9999. A Green Feedback Rating Star is used with this score range.
     * @return string 'Green'
     */
    const VALUE_GREEN = 'Green';
    /**
     * Constant for value 'YellowShooting'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 10000-24999. A Yellow Shooting Feedback Rating Star is used with this score range.
     * @return string 'YellowShooting'
     */
    const VALUE_YELLOW_SHOOTING = 'YellowShooting';
    /**
     * Constant for value 'TurquoiseShooting'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 25000-49999. A Turquoise Shooting Feedback Rating Star is used with this score range.
     * @return string 'TurquoiseShooting'
     */
    const VALUE_TURQUOISE_SHOOTING = 'TurquoiseShooting';
    /**
     * Constant for value 'PurpleShooting'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 50000-99999. A Purple Shooting Feedback Rating Star is used with this score range.
     * @return string 'PurpleShooting'
     */
    const VALUE_PURPLE_SHOOTING = 'PurpleShooting';
    /**
     * Constant for value 'RedShooting'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 100000-499999. A Red Shooting Feedback Rating Star is used with this score range.
     * @return string 'RedShooting'
     */
    const VALUE_RED_SHOOTING = 'RedShooting';
    /**
     * Constant for value 'GreenShooting'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score ranging from 500000-90000. A Green Shooting Feedback Rating Star is used with this score range.
     * @return string 'GreenShooting'
     */
    const VALUE_GREEN_SHOOTING = 'GreenShooting';
    /**
     * Constant for value 'SilverShooting'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the user has a Feedback score of 1000000 or above. A Silver Shooting Feedback Rating Star is used with this score range.
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
