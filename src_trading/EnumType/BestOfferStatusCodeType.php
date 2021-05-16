<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BestOfferStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible values for the status of a Best Offer or a buyer's/seller's counter offer.
 * @subpackage Enumerations
 */
class BestOfferStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's Best Offer on an item is awaiting the seller's response (accept, decline, counter offer). A buyer's Best Offer expires after 48 hours without a seller's response.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Accepted'
     * Meta information extracted from the WSDL
     * - documentation: Depending on context, this value can indicate that the buyer's Best Offer was accepted by the seller, or that the seller's or buyer's counter offer was accepted by the other party.
     * @return string 'Accepted'
     */
    const VALUE_ACCEPTED = 'Accepted';
    /**
     * Constant for value 'Declined'
     * Meta information extracted from the WSDL
     * - documentation: Depending on context, this value can indicate that the buyer's Best Offer was declined by the seller, or that the seller's or buyer's counter offer was declined by the other party.
     * @return string 'Declined'
     */
    const VALUE_DECLINED = 'Declined';
    /**
     * Constant for value 'Expired'
     * Meta information extracted from the WSDL
     * - documentation: Depending on context, this value can indicate that the buyer's Best Offer expired due to the passing of 48 hours with no seller response (accept, decline, counter offer), or that the seller's or buyer's counter offer expired due to
     * the passing of 48 hours with no response from other party.
     * @return string 'Expired'
     */
    const VALUE_EXPIRED = 'Expired';
    /**
     * Constant for value 'Retracted'
     * Meta information extracted from the WSDL
     * - documentation: Depending on context, this value can indicate that the buyer has retracted the Best Offer, or that the seller's or buyer's counter offer has been retracted.
     * @return string 'Retracted'
     */
    const VALUE_RETRACTED = 'Retracted';
    /**
     * Constant for value 'AdminEnded'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the Best Offer was ended by an eBay administrator.
     * @return string 'AdminEnded'
     */
    const VALUE_ADMIN_ENDED = 'AdminEnded';
    /**
     * Constant for value 'Active'
     * Meta information extracted from the WSDL
     * - documentation: Depending on context, this value can indicate that a buyer's Best Offer or that the seller's or buyer's counter offer is in the active state. The <code>Active</code> value can also be used in the <b>GetBestOffers</b> request to
     * retrieve only active Best Offers.
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Countered'
     * Meta information extracted from the WSDL
     * - documentation: Depending on context, this value can indicate that a buyer's Best Offer has been countered by the seller, or that the seller's or buyer's counter offer has been countered by the other party.
     * @return string 'Countered'
     */
    const VALUE_COUNTERED = 'Countered';
    /**
     * Constant for value 'All'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in the <b>GetBestOffers</b> request to retrieve all Best Offers in all states. This value is only applicable to the <b>GetBestOffers</b> call.
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'PendingBuyerPayment'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer and seller have come to agreement on a Best Offer price, but the seller is still waiting for payment from the buyer. If the buyer does not pay within 48 hours, the Best Offer will expire.
     * @return string 'PendingBuyerPayment'
     */
    const VALUE_PENDING_BUYER_PAYMENT = 'PendingBuyerPayment';
    /**
     * Constant for value 'PendingBuyerConfirmation'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller is waiting on the buyer to commit to buying the item at the counter offer price.
     * @return string 'PendingBuyerConfirmation'
     */
    const VALUE_PENDING_BUYER_CONFIRMATION = 'PendingBuyerConfirmation';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_ACCEPTED
     * @uses self::VALUE_DECLINED
     * @uses self::VALUE_EXPIRED
     * @uses self::VALUE_RETRACTED
     * @uses self::VALUE_ADMIN_ENDED
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_COUNTERED
     * @uses self::VALUE_ALL
     * @uses self::VALUE_PENDING_BUYER_PAYMENT
     * @uses self::VALUE_PENDING_BUYER_CONFIRMATION
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PENDING,
            self::VALUE_ACCEPTED,
            self::VALUE_DECLINED,
            self::VALUE_EXPIRED,
            self::VALUE_RETRACTED,
            self::VALUE_ADMIN_ENDED,
            self::VALUE_ACTIVE,
            self::VALUE_COUNTERED,
            self::VALUE_ALL,
            self::VALUE_PENDING_BUYER_PAYMENT,
            self::VALUE_PENDING_BUYER_CONFIRMATION,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
