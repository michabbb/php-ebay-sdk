<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for NotificationEventStateCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Valid notification status codes
 * @subpackage Enumerations
 */
class NotificationEventStateCodeType
{
    /**
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Failed'
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'MarkedDown'
     * @return string 'MarkedDown'
     */
    const VALUE_MARKED_DOWN = 'MarkedDown';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'FailedPending'
     * @return string 'FailedPending'
     */
    const VALUE_FAILED_PENDING = 'FailedPending';
    /**
     * Constant for value 'MarkedDownPending'
     * @return string 'MarkedDownPending'
     */
    const VALUE_MARKED_DOWN_PENDING = 'MarkedDownPending';
    /**
     * Constant for value 'Delivered'
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
    /**
     * Constant for value 'Undeliverable'
     * @return string 'Undeliverable'
     */
    const VALUE_UNDELIVERABLE = 'Undeliverable';
    /**
     * Constant for value 'Rejected'
     * @return string 'Rejected'
     */
    const VALUE_REJECTED = 'Rejected';
    /**
     * Constant for value 'Canceled'
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_NEW
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_MARKED_DOWN
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_FAILED_PENDING
     * @uses self::VALUE_MARKED_DOWN_PENDING
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_UNDELIVERABLE
     * @uses self::VALUE_REJECTED
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW,
            self::VALUE_FAILED,
            self::VALUE_MARKED_DOWN,
            self::VALUE_PENDING,
            self::VALUE_FAILED_PENDING,
            self::VALUE_MARKED_DOWN_PENDING,
            self::VALUE_DELIVERED,
            self::VALUE_UNDELIVERABLE,
            self::VALUE_REJECTED,
            self::VALUE_CANCELED,
            self::VALUE_CUSTOM_CODE,
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
