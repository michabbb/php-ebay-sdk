<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransactionReferenceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type defining the possible values that can returned in the attribute of the <b>Payment.ReferenceID</b> and <b>Payment.PaymentReferenceID</b> field.
 * @subpackage Enumerations
 */
class TransactionReferenceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ExternalTransactionID'
     * Meta information extracted from the WSDL
     * - documentation: This value is the unique identifier of an external payment transaction.
     * @return string 'ExternalTransactionID'
     */
    const VALUE_EXTERNAL_TRANSACTION_ID = 'ExternalTransactionID';
    /**
     * Constant for value 'MandateReferenceNumber'
     * Meta information extracted from the WSDL
     * - documentation: No longer applicable as the eBay Now service is no longer available to buyers and sellers.
     * @return string 'MandateReferenceNumber'
     */
    const VALUE_MANDATE_REFERENCE_NUMBER = 'MandateReferenceNumber';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_EXTERNAL_TRANSACTION_ID
     * @uses self::VALUE_MANDATE_REFERENCE_NUMBER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EXTERNAL_TRANSACTION_ID,
            self::VALUE_MANDATE_REFERENCE_NUMBER,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
