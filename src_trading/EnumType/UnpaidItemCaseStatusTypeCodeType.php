<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for UnpaidItemCaseStatusTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumeration type that indicates the current status of an Unpaid Item case.
 * @subpackage Enumerations
 */
class UnpaidItemCaseStatusTypeCodeType
{
    /**
     * Constant for value 'Open'
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'ClosedWithPayment'
     * @return string 'ClosedWithPayment'
     */
    const VALUE_CLOSED_WITH_PAYMENT = 'ClosedWithPayment';
    /**
     * Constant for value 'ClosedWithoutPayment'
     * @return string 'ClosedWithoutPayment'
     */
    const VALUE_CLOSED_WITHOUT_PAYMENT = 'ClosedWithoutPayment';
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
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_CLOSED_WITH_PAYMENT
     * @uses self::VALUE_CLOSED_WITHOUT_PAYMENT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPEN,
            self::VALUE_CLOSED_WITH_PAYMENT,
            self::VALUE_CLOSED_WITHOUT_PAYMENT,
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
