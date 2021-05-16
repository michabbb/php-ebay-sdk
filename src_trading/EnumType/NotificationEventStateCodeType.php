<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationEventStateCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Valid notification status codes
 * @subpackage Enumerations
 */
class NotificationEventStateCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'New'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification is newly created
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Failed'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification was failed
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'MarkedDown'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the end user application is marked down
     * @return string 'MarkedDown'
     */
    const VALUE_MARKED_DOWN = 'MarkedDown';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification is pending
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'FailedPending'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification is failed pending
     * @return string 'FailedPending'
     */
    const VALUE_FAILED_PENDING = 'FailedPending';
    /**
     * Constant for value 'MarkedDownPending'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification is marked down pending
     * @return string 'MarkedDownPending'
     */
    const VALUE_MARKED_DOWN_PENDING = 'MarkedDownPending';
    /**
     * Constant for value 'Delivered'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification was successfully delivered
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
    /**
     * Constant for value 'Undeliverable'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification was unable to deliver
     * @return string 'Undeliverable'
     */
    const VALUE_UNDELIVERABLE = 'Undeliverable';
    /**
     * Constant for value 'Rejected'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification was rejected
     * @return string 'Rejected'
     */
    const VALUE_REJECTED = 'Rejected';
    /**
     * Constant for value 'Canceled'
     * Meta information extracted from the WSDL
     * - documentation: Status indicating the notification was cancelled
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future internal or external use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
