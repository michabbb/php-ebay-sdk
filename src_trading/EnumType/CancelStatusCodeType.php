<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CancelStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible states of an eBay order cancellation.
 * @subpackage Enumerations
 */
class CancelStatusCodeType
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
     * Constant for value 'CancelRequested'
     * @return string 'CancelRequested'
     */
    const VALUE_CANCEL_REQUESTED = 'CancelRequested';
    /**
     * Constant for value 'CancelPending'
     * @return string 'CancelPending'
     */
    const VALUE_CANCEL_PENDING = 'CancelPending';
    /**
     * Constant for value 'CancelRejected'
     * @return string 'CancelRejected'
     */
    const VALUE_CANCEL_REJECTED = 'CancelRejected';
    /**
     * Constant for value 'CancelClosedNoRefund'
     * @return string 'CancelClosedNoRefund'
     */
    const VALUE_CANCEL_CLOSED_NO_REFUND = 'CancelClosedNoRefund';
    /**
     * Constant for value 'CancelClosedWithRefund'
     * @return string 'CancelClosedWithRefund'
     */
    const VALUE_CANCEL_CLOSED_WITH_REFUND = 'CancelClosedWithRefund';
    /**
     * Constant for value 'CancelClosedUnknownRefund'
     * @return string 'CancelClosedUnknownRefund'
     */
    const VALUE_CANCEL_CLOSED_UNKNOWN_REFUND = 'CancelClosedUnknownRefund';
    /**
     * Constant for value 'CancelClosedForCommitment'
     * @return string 'CancelClosedForCommitment'
     */
    const VALUE_CANCEL_CLOSED_FOR_COMMITMENT = 'CancelClosedForCommitment';
    /**
     * Constant for value 'CancelComplete'
     * @return string 'CancelComplete'
     */
    const VALUE_CANCEL_COMPLETE = 'CancelComplete';
    /**
     * Constant for value 'CancelFailed'
     * @return string 'CancelFailed'
     */
    const VALUE_CANCEL_FAILED = 'CancelFailed';
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
    public static function getValidValues()
    {
        return array(
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
