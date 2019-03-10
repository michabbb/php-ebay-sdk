<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for LogisticsPlanCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is used by <b>OrderType</b> and <b>TransactionType</b> to indicate which logistics plan was selected by the buyer at the order or order line item level. Currently, this type is only supporting the "Click and
 * Collect" and digital gift card use cases, but more logistics plan types may be added in the future.
 * @subpackage Enumerations
 */
class LogisticsPlanCodeType
{
    /**
     * Constant for value 'PickUpDropOff'
     * @return string 'PickUpDropOff'
     */
    const VALUE_PICK_UP_DROP_OFF = 'PickUpDropOff';
    /**
     * Constant for value 'DigitalDelivery'
     * @return string 'DigitalDelivery'
     */
    const VALUE_DIGITAL_DELIVERY = 'DigitalDelivery';
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
     * @uses self::VALUE_PICK_UP_DROP_OFF
     * @uses self::VALUE_DIGITAL_DELIVERY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PICK_UP_DROP_OFF,
            self::VALUE_DIGITAL_DELIVERY,
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
