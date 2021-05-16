<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationRoleCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines roles for platform notifications.
 * @subpackage Enumerations
 */
class NotificationRoleCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Application'
     * Meta information extracted from the WSDL
     * - documentation: (in) Specifies that you want to set or return application-level preferences. Default value.
     * @return string 'Application'
     */
    const VALUE_APPLICATION = 'Application';
    /**
     * Constant for value 'User'
     * Meta information extracted from the WSDL
     * - documentation: (in) Specifies that you want to set or return user-level preferences.
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Constant for value 'UserData'
     * Meta information extracted from the WSDL
     * - documentation: (in) Specifies that you want to set or return user data-level preferences.
     * @return string 'UserData'
     */
    const VALUE_USER_DATA = 'UserData';
    /**
     * Constant for value 'Event'
     * Meta information extracted from the WSDL
     * - documentation: (in) Specifies that you want to set or return event-level preferences.
     * @return string 'Event'
     */
    const VALUE_EVENT = 'Event';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_APPLICATION
     * @uses self::VALUE_USER
     * @uses self::VALUE_USER_DATA
     * @uses self::VALUE_EVENT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_APPLICATION,
            self::VALUE_USER,
            self::VALUE_USER_DATA,
            self::VALUE_EVENT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
