<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerPaidStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Mark paid status type.
 * @subpackage Enumerations
 */
class SellingManagerPaidStatusCodeType
{
    /**
     * Constant for value 'Paid'
     * @return string 'Paid'
     */
    const VALUE_PAID = 'Paid';
    /**
     * Constant for value 'PartiallyPaid'
     * @return string 'PartiallyPaid'
     */
    const VALUE_PARTIALLY_PAID = 'PartiallyPaid';
    /**
     * Constant for value 'Unpaid'
     * @return string 'Unpaid'
     */
    const VALUE_UNPAID = 'Unpaid';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Refunded'
     * @return string 'Refunded'
     */
    const VALUE_REFUNDED = 'Refunded';
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
     * @uses self::VALUE_PAID
     * @uses self::VALUE_PARTIALLY_PAID
     * @uses self::VALUE_UNPAID
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_REFUNDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAID,
            self::VALUE_PARTIALLY_PAID,
            self::VALUE_UNPAID,
            self::VALUE_PENDING,
            self::VALUE_REFUNDED,
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
