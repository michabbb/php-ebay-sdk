<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentInstructionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type indicates the type of payment instructions included in the shipping package.
 * @subpackage Enumerations
 */
class PaymentInstructionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PaymentInstruction'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that payment instructions were included in the shipping package for the 'Pay Upon Invoice' order.
     * @return string 'PaymentInstruction'
     */
    const VALUE_PAYMENT_INSTRUCTION = 'PaymentInstruction';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PAYMENT_INSTRUCTION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAYMENT_INSTRUCTION,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
