<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PayPalAccountStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines PayPal account states.
 * @subpackage Enumerations
 */
class PayPalAccountStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is active.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Closed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is closed.
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'HighRestricted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is in a highly restricted state.
     * @return string 'HighRestricted'
     */
    const VALUE_HIGH_RESTRICTED = 'HighRestricted';
    /**
     * Constant for value 'LowRestricted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is in a low restricted state.
     * @return string 'LowRestricted'
     */
    const VALUE_LOW_RESTRICTED = 'LowRestricted';
    /**
     * Constant for value 'Locked'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is locked.
     * @return string 'Locked'
     */
    const VALUE_LOCKED = 'Locked';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'WireOff'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is wired off.
     * @return string 'WireOff'
     */
    const VALUE_WIRE_OFF = 'WireOff';
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the state of the user's PayPal account is unknown.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the user's PayPal account is invalid.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_HIGH_RESTRICTED
     * @uses self::VALUE_LOW_RESTRICTED
     * @uses self::VALUE_LOCKED
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_WIRE_OFF
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_INVALID
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVE,
            self::VALUE_CLOSED,
            self::VALUE_HIGH_RESTRICTED,
            self::VALUE_LOW_RESTRICTED,
            self::VALUE_LOCKED,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_WIRE_OFF,
            self::VALUE_UNKNOWN,
            self::VALUE_INVALID,
        ];
    }
}
