<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for RefundFailureCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RefundFailureCodeType
{
    /**
     * Constant for value 'PaypalBillingAgreementCanceled'
     * @return string 'PaypalBillingAgreementCanceled'
     */
    const VALUE_PAYPAL_BILLING_AGREEMENT_CANCELED = 'PaypalBillingAgreementCanceled';
    /**
     * Constant for value 'PaypalRiskDeclinesTransaction'
     * @return string 'PaypalRiskDeclinesTransaction'
     */
    const VALUE_PAYPAL_RISK_DECLINES_TRANSACTION = 'PaypalRiskDeclinesTransaction';
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
     * @uses self::VALUE_PAYPAL_BILLING_AGREEMENT_CANCELED
     * @uses self::VALUE_PAYPAL_RISK_DECLINES_TRANSACTION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAYPAL_BILLING_AGREEMENT_CANCELED,
            self::VALUE_PAYPAL_RISK_DECLINES_TRANSACTION,
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
