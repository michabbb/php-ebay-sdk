<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentTransactionStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the possible states of a payment transaction. This type is used by several containers in order management-related calls.
 * @subpackage Enumerations
 */
class PaymentTransactionStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Failed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the payment transaction failed.
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'Succeeded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the payment transaction succeeded. If the payment transaction is a buyer's payment for an order, once this <code>Succeeded</code> value is returned in an order management call, it is safe for the seller to
     * ship the order to the buyer. <br><br> <span class="tablenote"><b>Note: </b> Previously, the <code>Succeeded</code> value would automatically get returned for order payment transactions that were occurring off of eBay's platform. As of March 2020, the
     * <code>Pending</code> value will get returned instead for order payment transactions occurring off of eBay's platform, and the seller can use the <b>CompleteSale</b> call to mark the order as paid. Once the seller does this, the payment status will
     * change from <code>Pending</code> to <code>Succeeded</code>. </span>
     * @return string 'Succeeded'
     */
    const VALUE_SUCCEEDED = 'Succeeded';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the payment transaction is pending. <br><br> <span class="tablenote"><b>Note: </b> Previously, the <code>Succeeded</code> value would automatically get returned for order payment transactions that were
     * occurring off of eBay's platform. As of March 2020, the <code>Pending</code> value will get returned instead for order payment transactions occurring off of eBay's platform, and the seller can use the <b>CompleteSale</b> call to mark the order as
     * paid. Once the seller does this, the payment status will change from <code>Pending</code> to <code>Succeeded</code>. </span>
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_SUCCEEDED
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FAILED,
            self::VALUE_SUCCEEDED,
            self::VALUE_PENDING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
