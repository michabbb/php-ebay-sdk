<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationEventPropertyNameCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines all property names that can be used.
 * @subpackage Enumerations
 */
class NotificationEventPropertyNameCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TimeLeft'
     * Meta information extracted from the WSDL
     * - documentation: Property name for WatchedItemEndingSoon events, enabling a user to specify a time in minutes before the end of the listing. Acceptable values: 5, 10, 15, 30, 60, 75, and 180. For example, to receive a WatchedItemEndingSoon
     * notification 30 minutes before the item listing ends, specify 30.
     * @return string 'TimeLeft'
     */
    const VALUE_TIME_LEFT = 'TimeLeft';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_TIME_LEFT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TIME_LEFT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
