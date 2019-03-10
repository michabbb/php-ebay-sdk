<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ShipmentDeliveryStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Status of the delivery.
 * @subpackage Enumerations
 */
class ShipmentDeliveryStatusCodeType
{
    /**
     * Constant for value 'Created'
     * @return string 'Created'
     */
    const VALUE_CREATED = 'Created';
    /**
     * Constant for value 'DroppedOff'
     * @return string 'DroppedOff'
     */
    const VALUE_DROPPED_OFF = 'DroppedOff';
    /**
     * Constant for value 'InTransit'
     * @return string 'InTransit'
     */
    const VALUE_IN_TRANSIT = 'InTransit';
    /**
     * Constant for value 'Delivered'
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
    /**
     * Constant for value 'Returned'
     * @return string 'Returned'
     */
    const VALUE_RETURNED = 'Returned';
    /**
     * Constant for value 'Canceled'
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'LabelPrinted'
     * @return string 'LabelPrinted'
     */
    const VALUE_LABEL_PRINTED = 'LabelPrinted';
    /**
     * Constant for value 'Unconfirmed'
     * @return string 'Unconfirmed'
     */
    const VALUE_UNCONFIRMED = 'Unconfirmed';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
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
    public static function getValidValues()
    {
        return array(
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
