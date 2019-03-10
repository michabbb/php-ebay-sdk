<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DeliveryStatusEmailCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration type lists the possible delivery status values of a digital gift card. Currently, the only supported delivery status value is 'Notified', which indicates that the link to download the digital gift card has been sent
 * to the recipient by email.
 * @subpackage Enumerations
 */
class DeliveryStatusEmailCodeType
{
    /**
     * Constant for value 'Notified'
     * @return string 'Notified'
     */
    const VALUE_NOTIFIED = 'Notified';
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
     * @uses self::VALUE_NOTIFIED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOTIFIED,
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
