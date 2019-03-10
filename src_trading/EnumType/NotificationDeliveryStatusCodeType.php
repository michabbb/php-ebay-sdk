<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for NotificationDeliveryStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class NotificationDeliveryStatusCodeType
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
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_REJECTED
     * @uses self::VALUE_MARKED_DOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOM_CODE,
            self::VALUE_DELIVERED,
            self::VALUE_FAILED,
            self::VALUE_REJECTED,
            self::VALUE_MARKED_DOWN,
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
