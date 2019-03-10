<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for OrderStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible values for order states.
 * @subpackage Enumerations
 */
class OrderStatusCodeType
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Inactive'
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Shipped'
     * @return string 'Shipped'
     */
    const VALUE_SHIPPED = 'Shipped';
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Authenticated'
     * @return string 'Authenticated'
     */
    const VALUE_AUTHENTICATED = 'Authenticated';
    /**
     * Constant for value 'InProcess'
     * @return string 'InProcess'
     */
    const VALUE_IN_PROCESS = 'InProcess';
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'CancelPending'
     * @return string 'CancelPending'
     */
    const VALUE_CANCEL_PENDING = 'CancelPending';
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
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_SHIPPED
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_AUTHENTICATED
     * @uses self::VALUE_IN_PROCESS
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_ALL
     * @uses self::VALUE_CANCEL_PENDING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE,
            self::VALUE_INACTIVE,
            self::VALUE_COMPLETED,
            self::VALUE_CANCELLED,
            self::VALUE_SHIPPED,
            self::VALUE_DEFAULT,
            self::VALUE_AUTHENTICATED,
            self::VALUE_IN_PROCESS,
            self::VALUE_INVALID,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_ALL,
            self::VALUE_CANCEL_PENDING,
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
