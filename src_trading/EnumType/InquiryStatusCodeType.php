<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InquiryStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible states of a buyer's Item Not Received (INR) inquiry.
 * @subpackage Enumerations
 */
class InquiryStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry is invalid.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'NotApplicable'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry is not applicable.
     * @return string 'NotApplicable'
     */
    const VALUE_NOT_APPLICABLE = 'NotApplicable';
    /**
     * Constant for value 'TrackInquiryPendingBuyerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry is pending a response from the buyer.
     * @return string 'TrackInquiryPendingBuyerResponse'
     */
    const VALUE_TRACK_INQUIRY_PENDING_BUYER_RESPONSE = 'TrackInquiryPendingBuyerResponse';
    /**
     * Constant for value 'TrackInquiryPendingSellerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry is pending a response from the seller.
     * @return string 'TrackInquiryPendingSellerResponse'
     */
    const VALUE_TRACK_INQUIRY_PENDING_SELLER_RESPONSE = 'TrackInquiryPendingSellerResponse';
    /**
     * Constant for value 'TrackInquiryClosedWithRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry was closed with a refund issued to the buyer.
     * @return string 'TrackInquiryClosedWithRefund'
     */
    const VALUE_TRACK_INQUIRY_CLOSED_WITH_REFUND = 'TrackInquiryClosedWithRefund';
    /**
     * Constant for value 'TrackInquiryClosedNoRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry was closed with no refund issued to the buyer.
     * @return string 'TrackInquiryClosedNoRefund'
     */
    const VALUE_TRACK_INQUIRY_CLOSED_NO_REFUND = 'TrackInquiryClosedNoRefund';
    /**
     * Constant for value 'TrackInquiryEscalatedPendingBuyer'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, and it is pending a response from the buyer.
     * @return string 'TrackInquiryEscalatedPendingBuyer'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_PENDING_BUYER = 'TrackInquiryEscalatedPendingBuyer';
    /**
     * Constant for value 'TrackInquiryEscalatedPendingSeller'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, and it is pending a response from the seller.
     * @return string 'TrackInquiryEscalatedPendingSeller'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_PENDING_SELLER = 'TrackInquiryEscalatedPendingSeller';
    /**
     * Constant for value 'TrackInquiryEscalatedPendingCS'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, and it is pending a response from eBay Customer Support.
     * @return string 'TrackInquiryEscalatedPendingCS'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_PENDING_CS = 'TrackInquiryEscalatedPendingCS';
    /**
     * Constant for value 'TrackInquiryEscalatedClosedWithRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, but it was closed with a refund issued to the buyer.
     * @return string 'TrackInquiryEscalatedClosedWithRefund'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_CLOSED_WITH_REFUND = 'TrackInquiryEscalatedClosedWithRefund';
    /**
     * Constant for value 'TrackInquiryEscalatedClosedNoRefund'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the INR inquiry was escalated to an eBay Money Back Guarantee case, but it was closed with no refund issued to the buyer.
     * @return string 'TrackInquiryEscalatedClosedNoRefund'
     */
    const VALUE_TRACK_INQUIRY_ESCALATED_CLOSED_NO_REFUND = 'TrackInquiryEscalatedClosedNoRefund';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
