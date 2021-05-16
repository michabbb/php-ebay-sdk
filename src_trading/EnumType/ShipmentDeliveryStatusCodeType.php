<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShipmentDeliveryStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Status of the delivery.
 * @subpackage Enumerations
 */
class ShipmentDeliveryStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Created'
     * Meta information extracted from the WSDL
     * - documentation: Created (default).
     * @return string 'Created'
     */
    const VALUE_CREATED = 'Created';
    /**
     * Constant for value 'DroppedOff'
     * Meta information extracted from the WSDL
     * - documentation: Dropped off.
     * @return string 'DroppedOff'
     */
    const VALUE_DROPPED_OFF = 'DroppedOff';
    /**
     * Constant for value 'InTransit'
     * Meta information extracted from the WSDL
     * - documentation: In transit.
     * @return string 'InTransit'
     */
    const VALUE_IN_TRANSIT = 'InTransit';
    /**
     * Constant for value 'Delivered'
     * Meta information extracted from the WSDL
     * - documentation: Delivered.
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
    /**
     * Constant for value 'Returned'
     * Meta information extracted from the WSDL
     * - documentation: Returned.
     * @return string 'Returned'
     */
    const VALUE_RETURNED = 'Returned';
    /**
     * Constant for value 'Canceled'
     * Meta information extracted from the WSDL
     * - documentation: Cancelled.
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'LabelPrinted'
     * Meta information extracted from the WSDL
     * - documentation: Label printed.
     * @return string 'LabelPrinted'
     */
    const VALUE_LABEL_PRINTED = 'LabelPrinted';
    /**
     * Constant for value 'Unconfirmed'
     * Meta information extracted from the WSDL
     * - documentation: Unconfirmed.
     * @return string 'Unconfirmed'
     */
    const VALUE_UNCONFIRMED = 'Unconfirmed';
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: Unknown.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Error'
     * Meta information extracted from the WSDL
     * - documentation: Error.
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_DROPPED_OFF
     * @uses self::VALUE_IN_TRANSIT
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_RETURNED
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_LABEL_PRINTED
     * @uses self::VALUE_UNCONFIRMED
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CREATED,
            self::VALUE_DROPPED_OFF,
            self::VALUE_IN_TRANSIT,
            self::VALUE_DELIVERED,
            self::VALUE_RETURNED,
            self::VALUE_CANCELED,
            self::VALUE_LABEL_PRINTED,
            self::VALUE_UNCONFIRMED,
            self::VALUE_UNKNOWN,
            self::VALUE_ERROR,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
