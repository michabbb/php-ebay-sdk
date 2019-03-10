<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for TransactionReferenceCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type defining the possible values that can returned in the attribute of the <b>Payment.ReferenceID</b> and <b>Payment.PaymentReferenceID</b> field.
 * @subpackage Enumerations
 */
class TransactionReferenceCodeType
{
    /**
     * Constant for value 'ExternalTransactionID'
     * @return string 'ExternalTransactionID'
     */
    const VALUE_EXTERNAL_TRANSACTION_ID = 'ExternalTransactionID';
    /**
     * Constant for value 'MandateReferenceNumber'
     * @return string 'MandateReferenceNumber'
     */
    const VALUE_MANDATE_REFERENCE_NUMBER = 'MandateReferenceNumber';
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
     * @uses self::VALUE_EXTERNAL_TRANSACTION_ID
     * @uses self::VALUE_MANDATE_REFERENCE_NUMBER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXTERNAL_TRANSACTION_ID,
            self::VALUE_MANDATE_REFERENCE_NUMBER,
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
