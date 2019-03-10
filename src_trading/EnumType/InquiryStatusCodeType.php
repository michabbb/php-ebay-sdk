<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for InquiryStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines the possible states of a buyer's Item Not Received (INR) inquiry.
 * @subpackage Enumerations
 */
class InquiryStatusCodeType
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
     * Constant for value 'TrackInquiryPendingBuyerResponse'
     * @return string 'TrackInquiryPendingBuyerResponse'
     */
    const VALUE_TRACK_INQUIRY_PENDING_BUYER_RESPONSE = 'TrackInquiryPendingBuyerResponse';
    /**
     * Constant for value 'TrackInquiryPendingSellerResponse'
     * @return string 'TrackInquiryPendingSellerResponse'
     */
    const VALUE_TRACK_INQUIRY_PENDING_SELLER_RESPONSE = 'TrackInquiryPendingSellerResponse';
    /**
     * Constant for value 'TrackInquiryClosedWithRefund'
     * @return string 'TrackInquiryClosedWithRefund'
     */
    const VALUE_TRACK_INQUIRY_CLOSED_WITH_REFUND = 'TrackInquiryClosedWithRefund';
    /**
     * Constant for value 'TrackInquiryClosedNoRefund'
     * @return string 'TrackInquiryClosedNoRefund'
     */
    const VALUE_TRACK_INQUIRY_CLOSED_NO_REFUND = 'TrackInquiryClosedNoRefund';
    /**
     * Constant for value 'TrackInquiryEscalatedPendingBuyer'
     * @return string 'TrackInquiryEscalatedPendingBuyer'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_PENDING_BUYER = 'TrackInquiryEscalatedPendingBuyer';
    /**
     * Constant for value 'TrackInquiryEscalatedPendingSeller'
     * @return string 'TrackInquiryEscalatedPendingSeller'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_PENDING_SELLER = 'TrackInquiryEscalatedPendingSeller';
    /**
     * Constant for value 'TrackInquiryEscalatedPendingCS'
     * @return string 'TrackInquiryEscalatedPendingCS'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_PENDING_CS = 'TrackInquiryEscalatedPendingCS';
    /**
     * Constant for value 'TrackInquiryEscalatedClosedWithRefund'
     * @return string 'TrackInquiryEscalatedClosedWithRefund'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_CLOSED_WITH_REFUND = 'TrackInquiryEscalatedClosedWithRefund';
    /**
     * Constant for value 'TrackInquiryEscalatedClosedNoRefund'
     * @return string 'TrackInquiryEscalatedClosedNoRefund'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_CLOSED_NO_REFUND = 'TrackInquiryEscalatedClosedNoRefund';
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
     * @uses self::VALUE_TRACK_INQUIRY_PENDING_BUYER_RESPONSE
     * @uses self::VALUE_TRACK_INQUIRY_PENDING_SELLER_RESPONSE
     * @uses self::VALUE_TRACK_INQUIRY_CLOSED_WITH_REFUND
     * @uses self::VALUE_TRACK_INQUIRY_CLOSED_NO_REFUND
     * @uses self::VALUE_TRACK_INQUIRY_ESCALATED_PENDING_BUYER
     * @uses self::VALUE_TRACK_INQUIRY_ESCALATED_PENDING_SELLER
     * @uses self::VALUE_TRACK_INQUIRY_ESCALATED_PENDING_CS
     * @uses self::VALUE_TRACK_INQUIRY_ESCALATED_CLOSED_WITH_REFUND
     * @uses self::VALUE_TRACK_INQUIRY_ESCALATED_CLOSED_NO_REFUND
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INVALID,
            self::VALUE_NOT_APPLICABLE,
            self::VALUE_TRACK_INQUIRY_PENDING_BUYER_RESPONSE,
            self::VALUE_TRACK_INQUIRY_PENDING_SELLER_RESPONSE,
            self::VALUE_TRACK_INQUIRY_CLOSED_WITH_REFUND,
            self::VALUE_TRACK_INQUIRY_CLOSED_NO_REFUND,
            self::VALUE_TRACK_INQUIRY_ESCALATED_PENDING_BUYER,
            self::VALUE_TRACK_INQUIRY_ESCALATED_PENDING_SELLER,
            self::VALUE_TRACK_INQUIRY_ESCALATED_PENDING_CS,
            self::VALUE_TRACK_INQUIRY_ESCALATED_CLOSED_WITH_REFUND,
            self::VALUE_TRACK_INQUIRY_ESCALATED_CLOSED_NO_REFUND,
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
