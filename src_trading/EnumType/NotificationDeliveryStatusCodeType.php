<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationDeliveryStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class NotificationDeliveryStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'Delivered'
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
    /**
     * Constant for value 'Failed'
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'Rejected'
     * @return string 'Rejected'
     */
    const VALUE_REJECTED = 'Rejected';
    /**
     * Constant for value 'MarkedDown'
     * @return string 'MarkedDown'
     */
    const VALUE_MARKED_DOWN = 'MarkedDown';
    /**
     * Return allowed values
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_REJECTED
     * @uses self::VALUE_MARKED_DOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CUSTOM_CODE,
            self::VALUE_DELIVERED,
            self::VALUE_FAILED,
            self::VALUE_REJECTED,
            self::VALUE_MARKED_DOWN,
        ];
    }
}
