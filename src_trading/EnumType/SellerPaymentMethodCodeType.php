<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerPaymentMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the payment methods that an eBay user can use to pay fees on monthly eBay invoice.
 * @subpackage Enumerations
 */
class SellerPaymentMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NothingOnFile'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay does not currently have a payment method on file for the eBay user.
     * @return string 'NothingOnFile'
     */
    const VALUE_NOTHING_ON_FILE = 'NothingOnFile';
    /**
     * Constant for value 'CreditCard'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay will use the credit card on file to process the eBay user's monthly invoice.
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay will use the user's PayPal account to process the monthly invoice.
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'DirectDebit'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay will debit the bank account on file to process the eBay user's monthly invoice.
     * @return string 'DirectDebit'
     */
    const VALUE_DIRECT_DEBIT = 'DirectDebit';
    /**
     * Constant for value 'DirectDebitPendingSignatureMandate'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay will debit the bank account on file to process the eBay user's monthly invoice. A signature will be needed from the eBay user before a payment can be processed.
     * @return string 'DirectDebitPendingSignatureMandate'
     */
    const VALUE_DIRECT_DEBIT_PENDING_SIGNATURE_MANDATE = 'DirectDebitPendingSignatureMandate';
    /**
     * Constant for value 'eBayDirectPay'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user will use eBay Direct Pay to pay the monthly invoice.
     * @return string 'eBayDirectPay'
     */
    const VALUE_E_BAY_DIRECT_PAY = 'eBayDirectPay';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'DirectDebitPendingVerification'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that eBay will debit the bank account on file to process the eBay user's monthly invoice. However, the bank account information must be verified before a payment can be processed.
     * @return string 'DirectDebitPendingVerification'
     */
    const VALUE_DIRECT_DEBIT_PENDING_VERIFICATION = 'DirectDebitPendingVerification';
    /**
     * Return allowed values
     * @uses self::VALUE_NOTHING_ON_FILE
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_DIRECT_DEBIT
     * @uses self::VALUE_DIRECT_DEBIT_PENDING_SIGNATURE_MANDATE
     * @uses self::VALUE_E_BAY_DIRECT_PAY
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_DIRECT_DEBIT_PENDING_VERIFICATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOTHING_ON_FILE,
            self::VALUE_CREDIT_CARD,
            self::VALUE_PAY_PAL,
            self::VALUE_DIRECT_DEBIT,
            self::VALUE_DIRECT_DEBIT_PENDING_SIGNATURE_MANDATE,
            self::VALUE_E_BAY_DIRECT_PAY,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_DIRECT_DEBIT_PENDING_VERIFICATION,
        ];
    }
}
