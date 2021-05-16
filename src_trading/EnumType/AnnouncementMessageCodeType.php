<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AnnouncementMessageCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Part of the mechanism for eBay to control which announcement messages are to be made available to the user.
 * @subpackage Enumerations
 */
class AnnouncementMessageCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: No message is to be made available.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Deprecation'
     * Meta information extracted from the WSDL
     * - documentation: A deprecation message is to be made available, but only if today's date is between <b>AnnouncementMessageType.AnnouncementStartTime</b> and <b>AnnouncementMessageType.EventTime</b>.
     * @return string 'Deprecation'
     */
    const VALUE_DEPRECATION = 'Deprecation';
    /**
     * Constant for value 'Mapping'
     * Meta information extracted from the WSDL
     * - documentation: A mapping message is to be made available, but only if today's date is after <b>AnnouncementMessageType.EventTime</b>.
     * @return string 'Mapping'
     */
    const VALUE_MAPPING = 'Mapping';
    /**
     * Constant for value 'DeprecationAndMapping'
     * Meta information extracted from the WSDL
     * - documentation: Both "Deprecation" and "Mapping" enumerations are to apply.
     * @return string 'DeprecationAndMapping'
     */
    const VALUE_DEPRECATION_AND_MAPPING = 'DeprecationAndMapping';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DEPRECATION
     * @uses self::VALUE_MAPPING
     * @uses self::VALUE_DEPRECATION_AND_MAPPING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_DEPRECATION,
            self::VALUE_MAPPING,
            self::VALUE_DEPRECATION_AND_MAPPING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
