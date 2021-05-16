<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnableCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type is used to indicate whether an application/URL/device is enabled to receive notifications, or to indicate whether a specific notification event is enabled.
 * @subpackage Enumerations
 */
class EnableCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Enable'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an application/URL/device is enabled to receive notifications, or to indicate that a specific notification event is enabled.
     * @return string 'Enable'
     */
    const VALUE_ENABLE = 'Enable';
    /**
     * Constant for value 'Disable'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an application/URL/device is disabled, or being blocked from receiving notifications, or to indicate that a specific notification event is disabled.
     * @return string 'Disable'
     */
    const VALUE_DISABLE = 'Disable';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_ENABLE
     * @uses self::VALUE_DISABLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENABLE,
            self::VALUE_DISABLE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
