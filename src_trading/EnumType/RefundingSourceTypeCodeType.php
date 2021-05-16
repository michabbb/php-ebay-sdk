<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundingSourceTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class RefundingSourceTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ScheduledPayout'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ScheduledPayout'
     */
    const VALUE_SCHEDULED_PAYOUT = 'ScheduledPayout';
    /**
     * Constant for value 'Paypal'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'Paypal'
     */
    const VALUE_PAYPAL = 'Paypal';
    /**
     * Constant for value 'BankAccount'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'BankAccount'
     */
    const VALUE_BANK_ACCOUNT = 'BankAccount';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SCHEDULED_PAYOUT
     * @uses self::VALUE_PAYPAL
     * @uses self::VALUE_BANK_ACCOUNT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SCHEDULED_PAYOUT,
            self::VALUE_PAYPAL,
            self::VALUE_BANK_ACCOUNT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
