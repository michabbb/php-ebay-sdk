<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnpaidItemCaseStatusTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration type that indicates the current status of an Unpaid Item case.
 * @subpackage Enumerations
 */
class UnpaidItemCaseStatusTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Open'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Unpaid Item case is open.
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'ClosedWithPayment'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Unpaid Item case is closed with payment received from the buyer.
     * @return string 'ClosedWithPayment'
     */
    const VALUE_CLOSED_WITH_PAYMENT = 'ClosedWithPayment';
    /**
     * Constant for value 'ClosedWithoutPayment'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Unpaid Item case is closed with no payment received from the buyer.
     * @return string 'ClosedWithoutPayment'
     */
    const VALUE_CLOSED_WITHOUT_PAYMENT = 'ClosedWithoutPayment';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_CLOSED_WITH_PAYMENT
     * @uses self::VALUE_CLOSED_WITHOUT_PAYMENT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPEN,
            self::VALUE_CLOSED_WITH_PAYMENT,
            self::VALUE_CLOSED_WITHOUT_PAYMENT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
