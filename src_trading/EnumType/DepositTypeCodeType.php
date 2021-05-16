<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DepositTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: For vehicles listed through the US eBay Motors site, DepositType indicates how the buyer should pay the deposit amount. It is used in conjunction with a buyer payment method (BuyerPaymentMethodCodeType).
 * @subpackage Enumerations
 */
class DepositTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: (out) No deposit needed.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OtherMethod'
     * Meta information extracted from the WSDL
     * - documentation: (out) Pay the deposit using PayPal, and then use any of the other specified payment methods to pay the balance.
     * @return string 'OtherMethod'
     */
    const VALUE_OTHER_METHOD = 'OtherMethod';
    /**
     * Constant for value 'FastDeposit'
     * Meta information extracted from the WSDL
     * - documentation: (out) No longer used.
     * @return string 'FastDeposit'
     */
    const VALUE_FAST_DEPOSIT = 'FastDeposit';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OTHER_METHOD
     * @uses self::VALUE_FAST_DEPOSIT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_OTHER_METHOD,
            self::VALUE_FAST_DEPOSIT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
