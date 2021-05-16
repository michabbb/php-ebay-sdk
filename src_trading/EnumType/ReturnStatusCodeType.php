<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReturnStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible states of an eBay return request.
 * @subpackage Enumerations
 */
class ReturnStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the return request is invalid.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'NotApplicable'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the return request is not applicable.
     * @return string 'NotApplicable'
     */
    const VALUE_NOT_APPLICABLE = 'NotApplicable';
    /**
     * Constant for value 'ReturnRequestPendingApproval'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the return request has been initiated by the buyer and is pending approval by the seller.
     * @return string 'ReturnRequestPendingApproval'
     */
    const VALUE_RETURN_REQUEST_PENDING_APPROVAL = 'ReturnRequestPendingApproval';
    /**
     * Constant for value 'ReturnRequestRejected'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's return request was rejected by the seller.
     * @return string 'ReturnRequestRejected'
     */
    const VALUE_RETURN_REQUEST_REJECTED = 'ReturnRequestRejected';
    /**
     * Constant for value 'ReturnOpen'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was successfully opened by the buyer.
     * @return string 'ReturnOpen'
     */
    const VALUE_RETURN_OPEN = 'ReturnOpen';
    /**
     * Constant for value 'ReturnShipped'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer has return shipped the item(s) in the return request back to the seller.
     * @return string 'ReturnShipped'
     */
    const VALUE_RETURN_SHIPPED = 'ReturnShipped';
    /**
     * Constant for value 'ReturnDelivered'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller has received the item(s) that the buyer return shipped.
     * @return string 'ReturnDelivered'
     */
    const VALUE_RETURN_DELIVERED = 'ReturnDelivered';
    /**
     * Constant for value 'ReturnClosedWithRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was closed with a refund issued to the buyer.
     * @return string 'ReturnClosedWithRefund'
     */
    const VALUE_RETURN_CLOSED_WITH_REFUND = 'ReturnClosedWithRefund';
    /**
     * Constant for value 'ReturnClosedEscalated'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was closed after being escalated to an eBay return case.
     * @return string 'ReturnClosedEscalated'
     */
    const VALUE_RETURN_CLOSED_ESCALATED = 'ReturnClosedEscalated';
    /**
     * Constant for value 'ReturnClosedNoRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was closed with no refund issued to the buyer.
     * @return string 'ReturnClosedNoRefund'
     */
    const VALUE_RETURN_CLOSED_NO_REFUND = 'ReturnClosedNoRefund';
    /**
     * Constant for value 'ReturnEscalatedPendingBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was escalated to an eBay return case, and the case is awaiting a response from the buyer.
     * @return string 'ReturnEscalatedPendingBuyer'
     */
    const VALUE_RETURN_ESCALATED_PENDING_BUYER = 'ReturnEscalatedPendingBuyer';
    /**
     * Constant for value 'ReturnEscalatedPendingSeller'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was escalated to an eBay return case, and the case is awaiting a response from the seller.
     * @return string 'ReturnEscalatedPendingSeller'
     */
    const VALUE_RETURN_ESCALATED_PENDING_SELLER = 'ReturnEscalatedPendingSeller';
    /**
     * Constant for value 'ReturnEscalatedPendingCS'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was escalated to an eBay return case, and the case is awaiting a response from eBay Customer Support.
     * @return string 'ReturnEscalatedPendingCS'
     */
    const VALUE_RETURN_ESCALATED_PENDING_CS = 'ReturnEscalatedPendingCS';
    /**
     * Constant for value 'ReturnEscalatedClosedWithRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was escalated to an eBay return case, but the case was closed with a refund issued to the buyer.
     * @return string 'ReturnEscalatedClosedWithRefund'
     */
    const VALUE_RETURN_ESCALATED_CLOSED_WITH_REFUND = 'ReturnEscalatedClosedWithRefund';
    /**
     * Constant for value 'ReturnEscalatedClosedNoRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was escalated to an eBay return case, but the case was closed with no refund issued to the buyer.
     * @return string 'ReturnEscalatedClosedNoRefund'
     */
    const VALUE_RETURN_ESCALATED_CLOSED_NO_REFUND = 'ReturnEscalatedClosedNoRefund';
    /**
     * Constant for value 'ReturnEscalated'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a return request was escalated to an eBay return case.
     * @return string 'ReturnEscalated'
     */
    const VALUE_RETURN_ESCALATED = 'ReturnEscalated';
    /**
     * Constant for value 'ReturnRequestPending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the return request is currently in the pending state.
     * @return string 'ReturnRequestPending'
     */
    const VALUE_RETURN_REQUEST_PENDING = 'ReturnRequestPending';
    /**
     * Constant for value 'ReturnRequestClosedWithRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the return request was closed with a refund to the buyer.
     * @return string 'ReturnRequestClosedWithRefund'
     */
    const VALUE_RETURN_REQUEST_CLOSED_WITH_REFUND = 'ReturnRequestClosedWithRefund';
    /**
     * Constant for value 'ReturnRequestClosedNoRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the return request was closed with no refund to the buyer.
     * @return string 'ReturnRequestClosedNoRefund'
     */
    const VALUE_RETURN_REQUEST_CLOSED_NO_REFUND = 'ReturnRequestClosedNoRefund';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_NOT_APPLICABLE
     * @uses self::VALUE_RETURN_REQUEST_PENDING_APPROVAL
     * @uses self::VALUE_RETURN_REQUEST_REJECTED
     * @uses self::VALUE_RETURN_OPEN
     * @uses self::VALUE_RETURN_SHIPPED
     * @uses self::VALUE_RETURN_DELIVERED
     * @uses self::VALUE_RETURN_CLOSED_WITH_REFUND
     * @uses self::VALUE_RETURN_CLOSED_ESCALATED
     * @uses self::VALUE_RETURN_CLOSED_NO_REFUND
     * @uses self::VALUE_RETURN_ESCALATED_PENDING_BUYER
     * @uses self::VALUE_RETURN_ESCALATED_PENDING_SELLER
     * @uses self::VALUE_RETURN_ESCALATED_PENDING_CS
     * @uses self::VALUE_RETURN_ESCALATED_CLOSED_WITH_REFUND
     * @uses self::VALUE_RETURN_ESCALATED_CLOSED_NO_REFUND
     * @uses self::VALUE_RETURN_ESCALATED
     * @uses self::VALUE_RETURN_REQUEST_PENDING
     * @uses self::VALUE_RETURN_REQUEST_CLOSED_WITH_REFUND
     * @uses self::VALUE_RETURN_REQUEST_CLOSED_NO_REFUND
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INVALID,
            self::VALUE_NOT_APPLICABLE,
            self::VALUE_RETURN_REQUEST_PENDING_APPROVAL,
            self::VALUE_RETURN_REQUEST_REJECTED,
            self::VALUE_RETURN_OPEN,
            self::VALUE_RETURN_SHIPPED,
            self::VALUE_RETURN_DELIVERED,
            self::VALUE_RETURN_CLOSED_WITH_REFUND,
            self::VALUE_RETURN_CLOSED_ESCALATED,
            self::VALUE_RETURN_CLOSED_NO_REFUND,
            self::VALUE_RETURN_ESCALATED_PENDING_BUYER,
            self::VALUE_RETURN_ESCALATED_PENDING_SELLER,
            self::VALUE_RETURN_ESCALATED_PENDING_CS,
            self::VALUE_RETURN_ESCALATED_CLOSED_WITH_REFUND,
            self::VALUE_RETURN_ESCALATED_CLOSED_NO_REFUND,
            self::VALUE_RETURN_ESCALATED,
            self::VALUE_RETURN_REQUEST_PENDING,
            self::VALUE_RETURN_REQUEST_CLOSED_WITH_REFUND,
            self::VALUE_RETURN_REQUEST_CLOSED_NO_REFUND,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
