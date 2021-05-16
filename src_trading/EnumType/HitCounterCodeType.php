<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for HitCounterCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type containing a list of visit counter styles that can be used in an eBay listing to track page visits.
 * @subpackage Enumerations
 */
class HitCounterCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoHitCounter'
     * Meta information extracted from the WSDL
     * - documentation: No hit counter. The number of page views will not be available.
     * @return string 'NoHitCounter'
     */
    const VALUE_NO_HIT_COUNTER = 'NoHitCounter';
    /**
     * Constant for value 'HonestyStyle'
     * Meta information extracted from the WSDL
     * - documentation: A basic style hit counter (US only). Non-US sites will return errors if they use HonestyStyle as input, and should use BasicStyle instead.
     * @return string 'HonestyStyle'
     */
    const VALUE_HONESTY_STYLE = 'HonestyStyle';
    /**
     * Constant for value 'GreenLED'
     * Meta information extracted from the WSDL
     * - documentation: A green LED, computer-style hit counter (US only). Non-US sites will return errors if they use GreenLED as input, and should use RetroStyle instead.
     * @return string 'GreenLED'
     */
    const VALUE_GREEN_LED = 'GreenLED';
    /**
     * Constant for value 'Hidden'
     * Meta information extracted from the WSDL
     * - documentation: A hidden hit counter (US only). The number of page views will only be available to the item's seller. For faster "View Item" page loads, use HiddenStyle.
     * @return string 'Hidden'
     */
    const VALUE_HIDDEN = 'Hidden';
    /**
     * Constant for value 'BasicStyle'
     * Meta information extracted from the WSDL
     * - documentation: A basic style hit counter.
     * @return string 'BasicStyle'
     */
    const VALUE_BASIC_STYLE = 'BasicStyle';
    /**
     * Constant for value 'RetroStyle'
     * Meta information extracted from the WSDL
     * - documentation: A retro, computer-style hit counter.
     * @return string 'RetroStyle'
     */
    const VALUE_RETRO_STYLE = 'RetroStyle';
    /**
     * Constant for value 'HiddenStyle'
     * Meta information extracted from the WSDL
     * - documentation: A hidden hit counter. The number of page views will only be available to the item's seller.
     * @return string 'HiddenStyle'
     */
    const VALUE_HIDDEN_STYLE = 'HiddenStyle';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_HIT_COUNTER,
            self::VALUE_HONESTY_STYLE,
            self::VALUE_GREEN_LED,
            self::VALUE_HIDDEN,
            self::VALUE_BASIC_STYLE,
            self::VALUE_RETRO_STYLE,
            self::VALUE_HIDDEN_STYLE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
