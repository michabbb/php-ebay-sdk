<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for OrderStatusFilterCodeType EnumType
 * @subpackage Enumerations
 */
class OrderStatusFilterCodeType
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'AwaitingPayment'
     * @return string 'AwaitingPayment'
     */
    const VALUE_AWAITING_PAYMENT = 'AwaitingPayment';
    /**
     * Constant for value 'AwaitingShipment'
     * @return string 'AwaitingShipment'
     */
    const VALUE_AWAITING_SHIPMENT = 'AwaitingShipment';
    /**
     * Constant for value 'PaidAndShipped'
     * @return string 'PaidAndShipped'
     */
    const VALUE_PAID_AND_SHIPPED = 'PaidAndShipped';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_AWAITING_PAYMENT
     * @uses self::VALUE_AWAITING_SHIPMENT
     * @uses self::VALUE_PAID_AND_SHIPPED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_AWAITING_PAYMENT,
            self::VALUE_AWAITING_SHIPMENT,
            self::VALUE_PAID_AND_SHIPPED,
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
