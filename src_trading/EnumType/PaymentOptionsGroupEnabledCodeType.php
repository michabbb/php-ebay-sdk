<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentOptionsGroupEnabledCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PaymentOptionsGroupEnabledCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'eBayPaymentProcessEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'eBayPaymentProcessEnabled'
     */
    const VALUE_E_BAY_PAYMENT_PROCESS_ENABLED = 'eBayPaymentProcessEnabled';
    /**
     * Constant for value 'NonStandardPaymentsEnabled'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'NonStandardPaymentsEnabled'
     */
    const VALUE_NON_STANDARD_PAYMENTS_ENABLED = 'NonStandardPaymentsEnabled';
    /**
     * Constant for value 'eBayPaymentProcessExcluded'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'eBayPaymentProcessExcluded'
     */
    const VALUE_E_BAY_PAYMENT_PROCESS_EXCLUDED = 'eBayPaymentProcessExcluded';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_E_BAY_PAYMENT_PROCESS_ENABLED
     * @uses self::VALUE_NON_STANDARD_PAYMENTS_ENABLED
     * @uses self::VALUE_E_BAY_PAYMENT_PROCESS_EXCLUDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_E_BAY_PAYMENT_PROCESS_ENABLED,
            self::VALUE_NON_STANDARD_PAYMENTS_ENABLED,
            self::VALUE_E_BAY_PAYMENT_PROCESS_EXCLUDED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
