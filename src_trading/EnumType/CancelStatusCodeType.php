<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CancelStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible states of an eBay order cancellation.
 * @subpackage Enumerations
 */
class CancelStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order cancellation request is invalid.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'NotApplicable'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order cancellation request is not applicable.
     * @return string 'NotApplicable'
     */
    const VALUE_NOT_APPLICABLE = 'NotApplicable';
    /**
     * Constant for value 'CancelRequested'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has initiated the cancellation of the eBay order. It will be up to the seller to decide to approve or reject the cancellation request.
     * @return string 'CancelRequested'
     */
    const VALUE_CANCEL_REQUESTED = 'CancelRequested';
    /**
     * Constant for value 'CancelPending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the cancellation of the eBay order has been initiated by the buyer and approved by the seller, but the cancellation request has yet to be completed.
     * @return string 'CancelPending'
     */
    const VALUE_CANCEL_PENDING = 'CancelPending';
    /**
     * Constant for value 'CancelRejected'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the cancellation of the eBay order initiated by the buyer has been rejected by the seller.
     * @return string 'CancelRejected'
     */
    const VALUE_CANCEL_REJECTED = 'CancelRejected';
    /**
     * Constant for value 'CancelClosedNoRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order cancellation request has been closed, with no refund issued to the buyer.
     * @return string 'CancelClosedNoRefund'
     */
    const VALUE_CANCEL_CLOSED_NO_REFUND = 'CancelClosedNoRefund';
    /**
     * Constant for value 'CancelClosedWithRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order cancellation request has been closed, with a refund issued to the buyer.
     * @return string 'CancelClosedWithRefund'
     */
    const VALUE_CANCEL_CLOSED_WITH_REFUND = 'CancelClosedWithRefund';
    /**
     * Constant for value 'CancelClosedUnknownRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the order cancellation request has been closed, and it is unknown whether or not a refund was issued to the buyer. This value will generally be returned when the payment method used to pay for the order was
     * something other than PayPal.
     * @return string 'CancelClosedUnknownRefund'
     */
    const VALUE_CANCEL_CLOSED_UNKNOWN_REFUND = 'CancelClosedUnknownRefund';
    /**
     * Constant for value 'CancelClosedForCommitment'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that since the buyer committed to buying the item but did not pay for it, the cancellation succeeded and no refund is needed.
     * @return string 'CancelClosedForCommitment'
     */
    const VALUE_CANCEL_CLOSED_FOR_COMMITMENT = 'CancelClosedForCommitment';
    /**
     * Constant for value 'CancelComplete'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the cancellation of the eBay order has been completed.
     * @return string 'CancelComplete'
     */
    const VALUE_CANCEL_COMPLETE = 'CancelComplete';
    /**
     * Constant for value 'CancelFailed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the cancellation of the eBay order has failed.
     * @return string 'CancelFailed'
     */
    const VALUE_CANCEL_FAILED = 'CancelFailed';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_NOT_APPLICABLE
     * @uses self::VALUE_CANCEL_REQUESTED
     * @uses self::VALUE_CANCEL_PENDING
     * @uses self::VALUE_CANCEL_REJECTED
     * @uses self::VALUE_CANCEL_CLOSED_NO_REFUND
     * @uses self::VALUE_CANCEL_CLOSED_WITH_REFUND
     * @uses self::VALUE_CANCEL_CLOSED_UNKNOWN_REFUND
     * @uses self::VALUE_CANCEL_CLOSED_FOR_COMMITMENT
     * @uses self::VALUE_CANCEL_COMPLETE
     * @uses self::VALUE_CANCEL_FAILED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INVALID,
            self::VALUE_NOT_APPLICABLE,
            self::VALUE_CANCEL_REQUESTED,
            self::VALUE_CANCEL_PENDING,
            self::VALUE_CANCEL_REJECTED,
            self::VALUE_CANCEL_CLOSED_NO_REFUND,
            self::VALUE_CANCEL_CLOSED_WITH_REFUND,
            self::VALUE_CANCEL_CLOSED_UNKNOWN_REFUND,
            self::VALUE_CANCEL_CLOSED_FOR_COMMITMENT,
            self::VALUE_CANCEL_COMPLETE,
            self::VALUE_CANCEL_FAILED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
