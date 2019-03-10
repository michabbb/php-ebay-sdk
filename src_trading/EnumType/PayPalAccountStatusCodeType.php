<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PayPalAccountStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines PayPal account states.
 * @subpackage Enumerations
 */
class PayPalAccountStatusCodeType
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Closed'
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'HighRestricted'
     * @return string 'HighRestricted'
     */
    const VALUE_HIGH_RESTRICTED = 'HighRestricted';
    /**
     * Constant for value 'LowRestricted'
     * @return string 'LowRestricted'
     */
    const VALUE_LOW_RESTRICTED = 'LowRestricted';
    /**
     * Constant for value 'Locked'
     * @return string 'Locked'
     */
    const VALUE_LOCKED = 'Locked';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'WireOff'
     * @return string 'WireOff'
     */
    const VALUE_WIRE_OFF = 'WireOff';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
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
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_CLOSED,
            self::VALUE_HIGH_RESTRICTED,
            self::VALUE_LOW_RESTRICTED,
            self::VALUE_LOCKED,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_WIRE_OFF,
            self::VALUE_UNKNOWN,
            self::VALUE_INVALID,
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
