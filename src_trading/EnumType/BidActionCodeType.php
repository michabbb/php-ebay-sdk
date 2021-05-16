<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BidActionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type lists the possible actions that can be made on a listing or Best Offer and the possible states of a bid or Best Offer.
 * @subpackage Enumerations
 */
class BidActionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the action or state is unknown.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Bid'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>PlaceOffer</b> call if the buyer wants to bid on an auction listing. If this value is used, the prospective buyer must also include the <b>Offer.MaxBid</b> field in the <b>PlaceOffer</b> call and specify
     * the maximum amount that they are willing to bid in an attempt to win the auction. eBay will automatically rebid on behalf of the buyer each time the buyer is outbid up until the time when their <b>Offer.MaxBid</b> value threshold is met. The
     * <b>GetAllBidders</b> call will return this value as well if the buyer has set up automatic bidding using a maximum bid threshold.
     * @return string 'Bid'
     */
    const VALUE_BID = 'Bid';
    /**
     * Constant for value 'NotUsed'
     * Meta information extracted from the WSDL
     * - documentation: This value is no longer applicable.
     * @return string 'NotUsed'
     */
    const VALUE_NOT_USED = 'NotUsed';
    /**
     * Constant for value 'Retraction'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a buyer's Best Offer or a seller's or buyer's counter offer was retracted. This value cannot be used with the <b>PlaceOffer</b> call.
     * @return string 'Retraction'
     */
    const VALUE_RETRACTION = 'Retraction';
    /**
     * Constant for value 'AutoRetraction'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a buyer's Best Offer or a seller's or buyer's counter offer was automatically retracted. This value cannot be used with the <b>PlaceOffer</b> call.
     * @return string 'AutoRetraction'
     */
    const VALUE_AUTO_RETRACTION = 'AutoRetraction';
    /**
     * Constant for value 'Cancelled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a buyer's Best Offer or a seller's or buyer's counter offer was cancelled. This value cannot be used with the <b>PlaceOffer</b> call.
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'AutoCancel'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that a buyer's Best Offer or a seller's or buyer's counter offer was automatically cancelled. This value cannot be used with the <b>PlaceOffer</b> call.
     * @return string 'AutoCancel'
     */
    const VALUE_AUTO_CANCEL = 'AutoCancel';
    /**
     * Constant for value 'Absentee'
     * Meta information extracted from the WSDL
     * - documentation: This value is returned in the <b>GetAllBidders</b> call if an absentee bid was made, which means that eBay made a bid on the auction listing on behalf of the buyer, who has set a maximum bid threshold. This value is not applicable
     * for the <b>PlaceOffer</b> call, as the buyer would use the <code>Bid</code> value instead, as well as setting a <b>Offer.MaxBid</b> value that would specify the maxium amount that the buyer is willing to bid in an attempt to win the auction.
     * @return string 'Absentee'
     */
    const VALUE_ABSENTEE = 'Absentee';
    /**
     * Constant for value 'BuyItNow'
     * Meta information extracted from the WSDL
     * - documentation: This value is returned in the <b>GetAllBidders</b> call if the buyer purchased an item in an auction listing using the Buy It Now feature. This value is not applicable for the <b>PlaceOffer</b> call, as the buyer would use the
     * <code>Purchase</code> value instead.
     * @return string 'BuyItNow'
     */
    const VALUE_BUY_IT_NOW = 'BuyItNow';
    /**
     * Constant for value 'Purchase'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>PlaceOffer</b> call if the buyer wants to purchase a fixed-price item or purchase an auction item enabled with the Buy It Now feature. Note that this call cannot be used to purchase items that require
     * immediate payment. The <b>GetAllBidders</b> call will return this value as well if the buyer purchased the item. For items requiring immediate payment, the <b>PlaceOffer</b> call cannot be used for purchase.
     * @return string 'Purchase'
     */
    const VALUE_PURCHASE = 'Purchase';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'Offer'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>PlaceOffer</b> call if the buyer is proposing a Best Offer to the seller. The <b>GetAllBidders</b> call will return this value as well if the buyer proposed a Best Offer to the seller.
     * @return string 'Offer'
     */
    const VALUE_OFFER = 'Offer';
    /**
     * Constant for value 'Counter'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>PlaceOffer</b> call if the buyer is proposing a counter offer to the seller's proposed counter offer. The <b>GetAllBidders</b> call will return this value as well if the buyer proposed a counter offer to
     * the seller's counter offer.
     * @return string 'Counter'
     */
    const VALUE_COUNTER = 'Counter';
    /**
     * Constant for value 'Accept'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>PlaceOffer</b> call if the buyer is accepting a counter offer proposed by the seller. The <b>GetAllBidders</b> call will return this value as well if the buyer accepted a counter offer.
     * @return string 'Accept'
     */
    const VALUE_ACCEPT = 'Accept';
    /**
     * Constant for value 'Decline'
     * Meta information extracted from the WSDL
     * - documentation: This value is used in a <b>PlaceOffer</b> call if the buyer is declining a counter offer proposed by the seller. The <b>GetAllBidders</b> call will return this value as well if the buyer declined a counter offer.
     * @return string 'Decline'
     */
    const VALUE_DECLINE = 'Decline';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_BID
     * @uses self::VALUE_NOT_USED
     * @uses self::VALUE_RETRACTION
     * @uses self::VALUE_AUTO_RETRACTION
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_AUTO_CANCEL
     * @uses self::VALUE_ABSENTEE
     * @uses self::VALUE_BUY_IT_NOW
     * @uses self::VALUE_PURCHASE
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_OFFER
     * @uses self::VALUE_COUNTER
     * @uses self::VALUE_ACCEPT
     * @uses self::VALUE_DECLINE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_BID,
            self::VALUE_NOT_USED,
            self::VALUE_RETRACTION,
            self::VALUE_AUTO_RETRACTION,
            self::VALUE_CANCELLED,
            self::VALUE_AUTO_CANCEL,
            self::VALUE_ABSENTEE,
            self::VALUE_BUY_IT_NOW,
            self::VALUE_PURCHASE,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_OFFER,
            self::VALUE_COUNTER,
            self::VALUE_ACCEPT,
            self::VALUE_DECLINE,
        ];
    }
}
