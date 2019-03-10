<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ReturnStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible states of an eBay return request.
 * @subpackage Enumerations
 */
class ReturnStatusCodeType
{
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'NotApplicable'
     * @return string 'NotApplicable'
     */
    const VALUE_NOT_APPLICABLE = 'NotApplicable';
    /**
     * Constant for value 'ReturnRequestPendingApproval'
     * @return string 'ReturnRequestPendingApproval'
     */
    const VALUE_RETURN_REQUEST_PENDING_APPROVAL = 'ReturnRequestPendingApproval';
    /**
     * Constant for value 'ReturnRequestRejected'
     * @return string 'ReturnRequestRejected'
     */
    const VALUE_RETURN_REQUEST_REJECTED = 'ReturnRequestRejected';
    /**
     * Constant for value 'ReturnOpen'
     * @return string 'ReturnOpen'
     */
    const VALUE_RETURN_OPEN = 'ReturnOpen';
    /**
     * Constant for value 'ReturnShipped'
     * @return string 'ReturnShipped'
     */
    const VALUE_RETURN_SHIPPED = 'ReturnShipped';
    /**
     * Constant for value 'ReturnDelivered'
     * @return string 'ReturnDelivered'
     */
    const VALUE_RETURN_DELIVERED = 'ReturnDelivered';
    /**
     * Constant for value 'ReturnClosedWithRefund'
     * @return string 'ReturnClosedWithRefund'
     */
    const VALUE_RETURN_CLOSED_WITH_REFUND = 'ReturnClosedWithRefund';
    /**
     * Constant for value 'ReturnClosedEscalated'
     * @return string 'ReturnClosedEscalated'
     */
    const VALUE_RETURN_CLOSED_ESCALATED = 'ReturnClosedEscalated';
    /**
     * Constant for value 'ReturnClosedNoRefund'
     * @return string 'ReturnClosedNoRefund'
     */
    const VALUE_RETURN_CLOSED_NO_REFUND = 'ReturnClosedNoRefund';
    /**
     * Constant for value 'ReturnEscalatedPendingBuyer'
     * @return string 'ReturnEscalatedPendingBuyer'
     */
    const VALUE_RETURN_ESCALATED_PENDING_BUYER = 'ReturnEscalatedPendingBuyer';
    /**
     * Constant for value 'ReturnEscalatedPendingSeller'
     * @return string 'ReturnEscalatedPendingSeller'
     */
    const VALUE_RETURN_ESCALATED_PENDING_SELLER = 'ReturnEscalatedPendingSeller';
    /**
     * Constant for value 'ReturnEscalatedPendingCS'
     * @return string 'ReturnEscalatedPendingCS'
     */
    const VALUE_RETURN_ESCALATED_PENDING_CS = 'ReturnEscalatedPendingCS';
    /**
     * Constant for value 'ReturnEscalatedClosedWithRefund'
     * @return string 'ReturnEscalatedClosedWithRefund'
     */
    const VALUE_RETURN_ESCALATED_CLOSED_WITH_REFUND = 'ReturnEscalatedClosedWithRefund';
    /**
     * Constant for value 'ReturnEscalatedClosedNoRefund'
     * @return string 'ReturnEscalatedClosedNoRefund'
     */
    const VALUE_RETURN_ESCALATED_CLOSED_NO_REFUND = 'ReturnEscalatedClosedNoRefund';
    /**
     * Constant for value 'ReturnEscalated'
     * @return string 'ReturnEscalated'
     */
    const VALUE_RETURN_ESCALATED = 'ReturnEscalated';
    /**
     * Constant for value 'ReturnRequestPending'
     * @return string 'ReturnRequestPending'
     */
    const VALUE_RETURN_REQUEST_PENDING = 'ReturnRequestPending';
    /**
     * Constant for value 'ReturnRequestClosedWithRefund'
     * @return string 'ReturnRequestClosedWithRefund'
     */
    const VALUE_RETURN_REQUEST_CLOSED_WITH_REFUND = 'ReturnRequestClosedWithRefund';
    /**
     * Constant for value 'ReturnRequestClosedNoRefund'
     * @return string 'ReturnRequestClosedNoRefund'
     */
    const VALUE_RETURN_REQUEST_CLOSED_NO_REFUND = 'ReturnRequestClosedNoRefund';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    public static function getValidValues()
    {
        return array(
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
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
