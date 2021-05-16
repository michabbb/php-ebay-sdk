<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerPaidStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Mark paid status type.
 * @subpackage Enumerations
 */
class SellingManagerPaidStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Paid'
     * Meta information extracted from the WSDL
     * - documentation: The status of the order is "paid."
     * @return string 'Paid'
     */
    const VALUE_PAID = 'Paid';
    /**
     * Constant for value 'PartiallyPaid'
     * Meta information extracted from the WSDL
     * - documentation: The status of the order is "partially paid."
     * @return string 'PartiallyPaid'
     */
    const VALUE_PARTIALLY_PAID = 'PartiallyPaid';
    /**
     * Constant for value 'Unpaid'
     * Meta information extracted from the WSDL
     * - documentation: The status of the order is "unpaid."
     * @return string 'Unpaid'
     */
    const VALUE_UNPAID = 'Unpaid';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: The status of the order is "pending."
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Refunded'
     * Meta information extracted from the WSDL
     * - documentation: The status of the order is "refunded."
     * @return string 'Refunded'
     */
    const VALUE_REFUNDED = 'Refunded';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PAID
     * @uses self::VALUE_PARTIALLY_PAID
     * @uses self::VALUE_UNPAID
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_REFUNDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAID,
            self::VALUE_PARTIALLY_PAID,
            self::VALUE_UNPAID,
            self::VALUE_PENDING,
            self::VALUE_REFUNDED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
