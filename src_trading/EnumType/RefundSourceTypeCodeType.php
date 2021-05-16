<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundSourceTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type defining the refund types that a merchant can offer a buyer who is returning an In-Store Pickup item to the store.
 * @subpackage Enumerations
 */
class RefundSourceTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'StoreCredit'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the merchant issued a store credit to the buyer for the amount of the returned item(s).
     * @return string 'StoreCredit'
     */
    const VALUE_STORE_CREDIT = 'StoreCredit';
    /**
     * Constant for value 'PaymentRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the merchant issued a cash refund (or debit card/credit card reversal) to the buyer for the amount of the returned item(s).
     * @return string 'PaymentRefund'
     */
    const VALUE_PAYMENT_REFUND = 'PaymentRefund';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_STORE_CREDIT
     * @uses self::VALUE_PAYMENT_REFUND
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STORE_CREDIT,
            self::VALUE_PAYMENT_REFUND,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
