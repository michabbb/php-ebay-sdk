<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundFailureCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RefundFailureCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PaypalBillingAgreementCanceled'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PaypalBillingAgreementCanceled'
     */
    const VALUE_PAYPAL_BILLING_AGREEMENT_CANCELED = 'PaypalBillingAgreementCanceled';
    /**
     * Constant for value 'PaypalRiskDeclinesTransaction'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'PaypalRiskDeclinesTransaction'
     */
    const VALUE_PAYPAL_RISK_DECLINES_TRANSACTION = 'PaypalRiskDeclinesTransaction';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PAYPAL_BILLING_AGREEMENT_CANCELED
     * @uses self::VALUE_PAYPAL_RISK_DECLINES_TRANSACTION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAYPAL_BILLING_AGREEMENT_CANCELED,
            self::VALUE_PAYPAL_RISK_DECLINES_TRANSACTION,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
