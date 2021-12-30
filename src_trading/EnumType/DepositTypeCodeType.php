<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DepositTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is a list of applicable values that indicate how a motor vehicle deposit should be paid.
 * @subpackage Enumerations
 */
class DepositTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that no deposit is required.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OtherMethod'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a deposit is required from the buyer when purchasing a motor vehicle. Deposits for a motor vehicle are either due in 24, 48, or 72 hours after commitment to purchase. Or, in the case of a motor vehicle
     * listing that is requiring immediate payment, the deposit it due immediately after commitment to purchase. <br><br> This value should be used in an Add/Revise call if the seller is requiring a deposit for a motor vehicle listing.
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
