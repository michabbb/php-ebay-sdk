<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for AccountHistorySelectionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the suppported values that may be used in the <b>AccountHistorySelection</b> field to control the account entries that are returned in a <b>GetAccount</b> response.
 * @subpackage Enumerations
 */
class AccountHistorySelectionCodeType
{
    /**
     * Constant for value 'LastInvoice'
     * @return string 'LastInvoice'
     */
    const VALUE_LAST_INVOICE = 'LastInvoice';
    /**
     * Constant for value 'SpecifiedInvoice'
     * @return string 'SpecifiedInvoice'
     */
    const VALUE_SPECIFIED_INVOICE = 'SpecifiedInvoice';
    /**
     * Constant for value 'BetweenSpecifiedDates'
     * @return string 'BetweenSpecifiedDates'
     */
    const VALUE_BETWEEN_SPECIFIED_DATES = 'BetweenSpecifiedDates';
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
     * @uses self::VALUE_LAST_INVOICE
     * @uses self::VALUE_SPECIFIED_INVOICE
     * @uses self::VALUE_BETWEEN_SPECIFIED_DATES
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LAST_INVOICE,
            self::VALUE_SPECIFIED_INVOICE,
            self::VALUE_BETWEEN_SPECIFIED_DATES,
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
