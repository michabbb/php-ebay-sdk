<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ItemSortTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type contains the possible values that can be used when sorting results in the <b>GetItemsAwaitingFeedback</b>, <b>GetMyeBayBuying</b>, and <b>GetMyeBaySelling<b> calls. Assume that each of sort values can be used in
 * any of the three calls above unless it is specifically called out that a certain enumeration value will not work/is not applicable to a call.
 * @subpackage Enumerations
 */
class ItemSortTypeCodeType
{
    /**
     * Constant for value 'ItemID'
     * @return string 'ItemID'
     */
    const VALUE_ITEM_ID = 'ItemID';
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Constant for value 'StartPrice'
     * @return string 'StartPrice'
     */
    const VALUE_START_PRICE = 'StartPrice';
    /**
     * Constant for value 'Title'
     * @return string 'Title'
     */
    const VALUE_TITLE = 'Title';
    /**
     * Constant for value 'BidCount'
     * @return string 'BidCount'
     */
    const VALUE_BID_COUNT = 'BidCount';
    /**
     * Constant for value 'Quantity'
     * @return string 'Quantity'
     */
    const VALUE_QUANTITY = 'Quantity';
    /**
     * Constant for value 'StartTime'
     * @return string 'StartTime'
     */
    const VALUE_START_TIME = 'StartTime';
    /**
     * Constant for value 'EndTime'
     * @return string 'EndTime'
     */
    const VALUE_END_TIME = 'EndTime';
    /**
     * Constant for value 'SellerUserID'
     * @return string 'SellerUserID'
     */
    const VALUE_SELLER_USER_ID = 'SellerUserID';
    /**
     * Constant for value 'TimeLeft'
     * @return string 'TimeLeft'
     */
    const VALUE_TIME_LEFT = 'TimeLeft';
    /**
     * Constant for value 'ListingDuration'
     * @return string 'ListingDuration'
     */
    const VALUE_LISTING_DURATION = 'ListingDuration';
    /**
     * Constant for value 'ListingType'
     * @return string 'ListingType'
     */
    const VALUE_LISTING_TYPE = 'ListingType';
    /**
     * Constant for value 'CurrentPrice'
     * @return string 'CurrentPrice'
     */
    const VALUE_CURRENT_PRICE = 'CurrentPrice';
    /**
     * Constant for value 'ReservePrice'
     * @return string 'ReservePrice'
     */
    const VALUE_RESERVE_PRICE = 'ReservePrice';
    /**
     * Constant for value 'MaxBid'
     * @return string 'MaxBid'
     */
    const VALUE_MAX_BID = 'MaxBid';
    /**
     * Constant for value 'BidderCount'
     * @return string 'BidderCount'
     */
    const VALUE_BIDDER_COUNT = 'BidderCount';
    /**
     * Constant for value 'HighBidderUserID'
     * @return string 'HighBidderUserID'
     */
    const VALUE_HIGH_BIDDER_USER_ID = 'HighBidderUserID';
    /**
     * Constant for value 'BuyerUserID'
     * @return string 'BuyerUserID'
     */
    const VALUE_BUYER_USER_ID = 'BuyerUserID';
    /**
     * Constant for value 'BuyerPostalCode'
     * @return string 'BuyerPostalCode'
     */
    const VALUE_BUYER_POSTAL_CODE = 'BuyerPostalCode';
    /**
     * Constant for value 'BuyerEmail'
     * @return string 'BuyerEmail'
     */
    const VALUE_BUYER_EMAIL = 'BuyerEmail';
    /**
     * Constant for value 'SellerEmail'
     * @return string 'SellerEmail'
     */
    const VALUE_SELLER_EMAIL = 'SellerEmail';
    /**
     * Constant for value 'TotalPrice'
     * @return string 'TotalPrice'
     */
    const VALUE_TOTAL_PRICE = 'TotalPrice';
    /**
     * Constant for value 'WatchCount'
     * @return string 'WatchCount'
     */
    const VALUE_WATCH_COUNT = 'WatchCount';
    /**
     * Constant for value 'BestOfferCount'
     * @return string 'BestOfferCount'
     */
    const VALUE_BEST_OFFER_COUNT = 'BestOfferCount';
    /**
     * Constant for value 'QuestionCount'
     * @return string 'QuestionCount'
     */
    const VALUE_QUESTION_COUNT = 'QuestionCount';
    /**
     * Constant for value 'ShippingServiceCost'
     * @return string 'ShippingServiceCost'
     */
    const VALUE_SHIPPING_SERVICE_COST = 'ShippingServiceCost';
    /**
     * Constant for value 'FeedbackReceived'
     * @return string 'FeedbackReceived'
     */
    const VALUE_FEEDBACK_RECEIVED = 'FeedbackReceived';
    /**
     * Constant for value 'FeedbackLeft'
     * @return string 'FeedbackLeft'
     */
    const VALUE_FEEDBACK_LEFT = 'FeedbackLeft';
    /**
     * Constant for value 'UserID'
     * @return string 'UserID'
     */
    const VALUE_USER_ID = 'UserID';
    /**
     * Constant for value 'QuantitySold'
     * @return string 'QuantitySold'
     */
    const VALUE_QUANTITY_SOLD = 'QuantitySold';
    /**
     * Constant for value 'BestOffer'
     * @return string 'BestOffer'
     */
    const VALUE_BEST_OFFER = 'BestOffer';
    /**
     * Constant for value 'QuantityAvailable'
     * @return string 'QuantityAvailable'
     */
    const VALUE_QUANTITY_AVAILABLE = 'QuantityAvailable';
    /**
     * Constant for value 'QuantityPurchased'
     * @return string 'QuantityPurchased'
     */
    const VALUE_QUANTITY_PURCHASED = 'QuantityPurchased';
    /**
     * Constant for value 'WonPlatform'
     * @return string 'WonPlatform'
     */
    const VALUE_WON_PLATFORM = 'WonPlatform';
    /**
     * Constant for value 'SoldPlatform'
     * @return string 'SoldPlatform'
     */
    const VALUE_SOLD_PLATFORM = 'SoldPlatform';
    /**
     * Constant for value 'ListingDurationDescending'
     * @return string 'ListingDurationDescending'
     */
    const VALUE_LISTING_DURATION_DESCENDING = 'ListingDurationDescending';
    /**
     * Constant for value 'ListingTypeDescending'
     * @return string 'ListingTypeDescending'
     */
    const VALUE_LISTING_TYPE_DESCENDING = 'ListingTypeDescending';
    /**
     * Constant for value 'CurrentPriceDescending'
     * @return string 'CurrentPriceDescending'
     */
    const VALUE_CURRENT_PRICE_DESCENDING = 'CurrentPriceDescending';
    /**
     * Constant for value 'ReservePriceDescending'
     * @return string 'ReservePriceDescending'
     */
    const VALUE_RESERVE_PRICE_DESCENDING = 'ReservePriceDescending';
    /**
     * Constant for value 'MaxBidDescending'
     * @return string 'MaxBidDescending'
     */
    const VALUE_MAX_BID_DESCENDING = 'MaxBidDescending';
    /**
     * Constant for value 'BidderCountDescending'
     * @return string 'BidderCountDescending'
     */
    const VALUE_BIDDER_COUNT_DESCENDING = 'BidderCountDescending';
    /**
     * Constant for value 'HighBidderUserIDDescending'
     * @return string 'HighBidderUserIDDescending'
     */
    const VALUE_HIGH_BIDDER_USER_IDDESCENDING = 'HighBidderUserIDDescending';
    /**
     * Constant for value 'BuyerUserIDDescending'
     * @return string 'BuyerUserIDDescending'
     */
    const VALUE_BUYER_USER_IDDESCENDING = 'BuyerUserIDDescending';
    /**
     * Constant for value 'BuyerPostalCodeDescending'
     * @return string 'BuyerPostalCodeDescending'
     */
    const VALUE_BUYER_POSTAL_CODE_DESCENDING = 'BuyerPostalCodeDescending';
    /**
     * Constant for value 'BuyerEmailDescending'
     * @return string 'BuyerEmailDescending'
     */
    const VALUE_BUYER_EMAIL_DESCENDING = 'BuyerEmailDescending';
    /**
     * Constant for value 'SellerEmailDescending'
     * @return string 'SellerEmailDescending'
     */
    const VALUE_SELLER_EMAIL_DESCENDING = 'SellerEmailDescending';
    /**
     * Constant for value 'TotalPriceDescending'
     * @return string 'TotalPriceDescending'
     */
    const VALUE_TOTAL_PRICE_DESCENDING = 'TotalPriceDescending';
    /**
     * Constant for value 'WatchCountDescending'
     * @return string 'WatchCountDescending'
     */
    const VALUE_WATCH_COUNT_DESCENDING = 'WatchCountDescending';
    /**
     * Constant for value 'QuestionCountDescending'
     * @return string 'QuestionCountDescending'
     */
    const VALUE_QUESTION_COUNT_DESCENDING = 'QuestionCountDescending';
    /**
     * Constant for value 'ShippingServiceCostDescending'
     * @return string 'ShippingServiceCostDescending'
     */
    const VALUE_SHIPPING_SERVICE_COST_DESCENDING = 'ShippingServiceCostDescending';
    /**
     * Constant for value 'FeedbackReceivedDescending'
     * @return string 'FeedbackReceivedDescending'
     */
    const VALUE_FEEDBACK_RECEIVED_DESCENDING = 'FeedbackReceivedDescending';
    /**
     * Constant for value 'FeedbackLeftDescending'
     * @return string 'FeedbackLeftDescending'
     */
    const VALUE_FEEDBACK_LEFT_DESCENDING = 'FeedbackLeftDescending';
    /**
     * Constant for value 'UserIDDescending'
     * @return string 'UserIDDescending'
     */
    const VALUE_USER_IDDESCENDING = 'UserIDDescending';
    /**
     * Constant for value 'QuantitySoldDescending'
     * @return string 'QuantitySoldDescending'
     */
    const VALUE_QUANTITY_SOLD_DESCENDING = 'QuantitySoldDescending';
    /**
     * Constant for value 'BestOfferCountDescending'
     * @return string 'BestOfferCountDescending'
     */
    const VALUE_BEST_OFFER_COUNT_DESCENDING = 'BestOfferCountDescending';
    /**
     * Constant for value 'QuantityAvailableDescending'
     * @return string 'QuantityAvailableDescending'
     */
    const VALUE_QUANTITY_AVAILABLE_DESCENDING = 'QuantityAvailableDescending';
    /**
     * Constant for value 'QuantityPurchasedDescending'
     * @return string 'QuantityPurchasedDescending'
     */
    const VALUE_QUANTITY_PURCHASED_DESCENDING = 'QuantityPurchasedDescending';
    /**
     * Constant for value 'BestOfferDescending'
     * @return string 'BestOfferDescending'
     */
    const VALUE_BEST_OFFER_DESCENDING = 'BestOfferDescending';
    /**
     * Constant for value 'ItemIDDescending'
     * @return string 'ItemIDDescending'
     */
    const VALUE_ITEM_IDDESCENDING = 'ItemIDDescending';
    /**
     * Constant for value 'PriceDescending'
     * @return string 'PriceDescending'
     */
    const VALUE_PRICE_DESCENDING = 'PriceDescending';
    /**
     * Constant for value 'StartPriceDescending'
     * @return string 'StartPriceDescending'
     */
    const VALUE_START_PRICE_DESCENDING = 'StartPriceDescending';
    /**
     * Constant for value 'TitleDescending'
     * @return string 'TitleDescending'
     */
    const VALUE_TITLE_DESCENDING = 'TitleDescending';
    /**
     * Constant for value 'BidCountDescending'
     * @return string 'BidCountDescending'
     */
    const VALUE_BID_COUNT_DESCENDING = 'BidCountDescending';
    /**
     * Constant for value 'QuantityDescending'
     * @return string 'QuantityDescending'
     */
    const VALUE_QUANTITY_DESCENDING = 'QuantityDescending';
    /**
     * Constant for value 'StartTimeDescending'
     * @return string 'StartTimeDescending'
     */
    const VALUE_START_TIME_DESCENDING = 'StartTimeDescending';
    /**
     * Constant for value 'EndTimeDescending'
     * @return string 'EndTimeDescending'
     */
    const VALUE_END_TIME_DESCENDING = 'EndTimeDescending';
    /**
     * Constant for value 'SellerUserIDDescending'
     * @return string 'SellerUserIDDescending'
     */
    const VALUE_SELLER_USER_IDDESCENDING = 'SellerUserIDDescending';
    /**
     * Constant for value 'TimeLeftDescending'
     * @return string 'TimeLeftDescending'
     */
    const VALUE_TIME_LEFT_DESCENDING = 'TimeLeftDescending';
    /**
     * Constant for value 'WonPlatformDescending'
     * @return string 'WonPlatformDescending'
     */
    const VALUE_WON_PLATFORM_DESCENDING = 'WonPlatformDescending';
    /**
     * Constant for value 'SoldPlatformDescending'
     * @return string 'SoldPlatformDescending'
     */
    const VALUE_SOLD_PLATFORM_DESCENDING = 'SoldPlatformDescending';
    /**
     * Constant for value 'LeadCount'
     * @return string 'LeadCount'
     */
    const VALUE_LEAD_COUNT = 'LeadCount';
    /**
     * Constant for value 'NewLeadCount'
     * @return string 'NewLeadCount'
     */
    const VALUE_NEW_LEAD_COUNT = 'NewLeadCount';
    /**
     * Constant for value 'LeadCountDescending'
     * @return string 'LeadCountDescending'
     */
    const VALUE_LEAD_COUNT_DESCENDING = 'LeadCountDescending';
    /**
     * Constant for value 'NewLeadCountDescending'
     * @return string 'NewLeadCountDescending'
     */
    const VALUE_NEW_LEAD_COUNT_DESCENDING = 'NewLeadCountDescending';
    /**
     * Constant for value 'ClassifiedAdPayPerLeadFee'
     * @return string 'ClassifiedAdPayPerLeadFee'
     */
    const VALUE_CLASSIFIED_AD_PAY_PER_LEAD_FEE = 'ClassifiedAdPayPerLeadFee';
    /**
     * Constant for value 'ClassifiedAdPayPerLeadFeeDescending'
     * @return string 'ClassifiedAdPayPerLeadFeeDescending'
     */
    const VALUE_CLASSIFIED_AD_PAY_PER_LEAD_FEE_DESCENDING = 'ClassifiedAdPayPerLeadFeeDescending';
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
     * @uses self::VALUE_ITEM_ID
     * @uses self::VALUE_PRICE
     * @uses self::VALUE_START_PRICE
     * @uses self::VALUE_TITLE
     * @uses self::VALUE_BID_COUNT
     * @uses self::VALUE_QUANTITY
     * @uses self::VALUE_START_TIME
     * @uses self::VALUE_END_TIME
     * @uses self::VALUE_SELLER_USER_ID
     * @uses self::VALUE_TIME_LEFT
     * @uses self::VALUE_LISTING_DURATION
     * @uses self::VALUE_LISTING_TYPE
     * @uses self::VALUE_CURRENT_PRICE
     * @uses self::VALUE_RESERVE_PRICE
     * @uses self::VALUE_MAX_BID
     * @uses self::VALUE_BIDDER_COUNT
     * @uses self::VALUE_HIGH_BIDDER_USER_ID
     * @uses self::VALUE_BUYER_USER_ID
     * @uses self::VALUE_BUYER_POSTAL_CODE
     * @uses self::VALUE_BUYER_EMAIL
     * @uses self::VALUE_SELLER_EMAIL
     * @uses self::VALUE_TOTAL_PRICE
     * @uses self::VALUE_WATCH_COUNT
     * @uses self::VALUE_BEST_OFFER_COUNT
     * @uses self::VALUE_QUESTION_COUNT
     * @uses self::VALUE_SHIPPING_SERVICE_COST
     * @uses self::VALUE_FEEDBACK_RECEIVED
     * @uses self::VALUE_FEEDBACK_LEFT
     * @uses self::VALUE_USER_ID
     * @uses self::VALUE_QUANTITY_SOLD
     * @uses self::VALUE_BEST_OFFER
     * @uses self::VALUE_QUANTITY_AVAILABLE
     * @uses self::VALUE_QUANTITY_PURCHASED
     * @uses self::VALUE_WON_PLATFORM
     * @uses self::VALUE_SOLD_PLATFORM
     * @uses self::VALUE_LISTING_DURATION_DESCENDING
     * @uses self::VALUE_LISTING_TYPE_DESCENDING
     * @uses self::VALUE_CURRENT_PRICE_DESCENDING
     * @uses self::VALUE_RESERVE_PRICE_DESCENDING
     * @uses self::VALUE_MAX_BID_DESCENDING
     * @uses self::VALUE_BIDDER_COUNT_DESCENDING
     * @uses self::VALUE_HIGH_BIDDER_USER_IDDESCENDING
     * @uses self::VALUE_BUYER_USER_IDDESCENDING
     * @uses self::VALUE_BUYER_POSTAL_CODE_DESCENDING
     * @uses self::VALUE_BUYER_EMAIL_DESCENDING
     * @uses self::VALUE_SELLER_EMAIL_DESCENDING
     * @uses self::VALUE_TOTAL_PRICE_DESCENDING
     * @uses self::VALUE_WATCH_COUNT_DESCENDING
     * @uses self::VALUE_QUESTION_COUNT_DESCENDING
     * @uses self::VALUE_SHIPPING_SERVICE_COST_DESCENDING
     * @uses self::VALUE_FEEDBACK_RECEIVED_DESCENDING
     * @uses self::VALUE_FEEDBACK_LEFT_DESCENDING
     * @uses self::VALUE_USER_IDDESCENDING
     * @uses self::VALUE_QUANTITY_SOLD_DESCENDING
     * @uses self::VALUE_BEST_OFFER_COUNT_DESCENDING
     * @uses self::VALUE_QUANTITY_AVAILABLE_DESCENDING
     * @uses self::VALUE_QUANTITY_PURCHASED_DESCENDING
     * @uses self::VALUE_BEST_OFFER_DESCENDING
     * @uses self::VALUE_ITEM_IDDESCENDING
     * @uses self::VALUE_PRICE_DESCENDING
     * @uses self::VALUE_START_PRICE_DESCENDING
     * @uses self::VALUE_TITLE_DESCENDING
     * @uses self::VALUE_BID_COUNT_DESCENDING
     * @uses self::VALUE_QUANTITY_DESCENDING
     * @uses self::VALUE_START_TIME_DESCENDING
     * @uses self::VALUE_END_TIME_DESCENDING
     * @uses self::VALUE_SELLER_USER_IDDESCENDING
     * @uses self::VALUE_TIME_LEFT_DESCENDING
     * @uses self::VALUE_WON_PLATFORM_DESCENDING
     * @uses self::VALUE_SOLD_PLATFORM_DESCENDING
     * @uses self::VALUE_LEAD_COUNT
     * @uses self::VALUE_NEW_LEAD_COUNT
     * @uses self::VALUE_LEAD_COUNT_DESCENDING
     * @uses self::VALUE_NEW_LEAD_COUNT_DESCENDING
     * @uses self::VALUE_CLASSIFIED_AD_PAY_PER_LEAD_FEE
     * @uses self::VALUE_CLASSIFIED_AD_PAY_PER_LEAD_FEE_DESCENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_ID,
            self::VALUE_PRICE,
            self::VALUE_START_PRICE,
            self::VALUE_TITLE,
            self::VALUE_BID_COUNT,
            self::VALUE_QUANTITY,
            self::VALUE_START_TIME,
            self::VALUE_END_TIME,
            self::VALUE_SELLER_USER_ID,
            self::VALUE_TIME_LEFT,
            self::VALUE_LISTING_DURATION,
            self::VALUE_LISTING_TYPE,
            self::VALUE_CURRENT_PRICE,
            self::VALUE_RESERVE_PRICE,
            self::VALUE_MAX_BID,
            self::VALUE_BIDDER_COUNT,
            self::VALUE_HIGH_BIDDER_USER_ID,
            self::VALUE_BUYER_USER_ID,
            self::VALUE_BUYER_POSTAL_CODE,
            self::VALUE_BUYER_EMAIL,
            self::VALUE_SELLER_EMAIL,
            self::VALUE_TOTAL_PRICE,
            self::VALUE_WATCH_COUNT,
            self::VALUE_BEST_OFFER_COUNT,
            self::VALUE_QUESTION_COUNT,
            self::VALUE_SHIPPING_SERVICE_COST,
            self::VALUE_FEEDBACK_RECEIVED,
            self::VALUE_FEEDBACK_LEFT,
            self::VALUE_USER_ID,
            self::VALUE_QUANTITY_SOLD,
            self::VALUE_BEST_OFFER,
            self::VALUE_QUANTITY_AVAILABLE,
            self::VALUE_QUANTITY_PURCHASED,
            self::VALUE_WON_PLATFORM,
            self::VALUE_SOLD_PLATFORM,
            self::VALUE_LISTING_DURATION_DESCENDING,
            self::VALUE_LISTING_TYPE_DESCENDING,
            self::VALUE_CURRENT_PRICE_DESCENDING,
            self::VALUE_RESERVE_PRICE_DESCENDING,
            self::VALUE_MAX_BID_DESCENDING,
            self::VALUE_BIDDER_COUNT_DESCENDING,
            self::VALUE_HIGH_BIDDER_USER_IDDESCENDING,
            self::VALUE_BUYER_USER_IDDESCENDING,
            self::VALUE_BUYER_POSTAL_CODE_DESCENDING,
            self::VALUE_BUYER_EMAIL_DESCENDING,
            self::VALUE_SELLER_EMAIL_DESCENDING,
            self::VALUE_TOTAL_PRICE_DESCENDING,
            self::VALUE_WATCH_COUNT_DESCENDING,
            self::VALUE_QUESTION_COUNT_DESCENDING,
            self::VALUE_SHIPPING_SERVICE_COST_DESCENDING,
            self::VALUE_FEEDBACK_RECEIVED_DESCENDING,
            self::VALUE_FEEDBACK_LEFT_DESCENDING,
            self::VALUE_USER_IDDESCENDING,
            self::VALUE_QUANTITY_SOLD_DESCENDING,
            self::VALUE_BEST_OFFER_COUNT_DESCENDING,
            self::VALUE_QUANTITY_AVAILABLE_DESCENDING,
            self::VALUE_QUANTITY_PURCHASED_DESCENDING,
            self::VALUE_BEST_OFFER_DESCENDING,
            self::VALUE_ITEM_IDDESCENDING,
            self::VALUE_PRICE_DESCENDING,
            self::VALUE_START_PRICE_DESCENDING,
            self::VALUE_TITLE_DESCENDING,
            self::VALUE_BID_COUNT_DESCENDING,
            self::VALUE_QUANTITY_DESCENDING,
            self::VALUE_START_TIME_DESCENDING,
            self::VALUE_END_TIME_DESCENDING,
            self::VALUE_SELLER_USER_IDDESCENDING,
            self::VALUE_TIME_LEFT_DESCENDING,
            self::VALUE_WON_PLATFORM_DESCENDING,
            self::VALUE_SOLD_PLATFORM_DESCENDING,
            self::VALUE_LEAD_COUNT,
            self::VALUE_NEW_LEAD_COUNT,
            self::VALUE_LEAD_COUNT_DESCENDING,
            self::VALUE_NEW_LEAD_COUNT_DESCENDING,
            self::VALUE_CLASSIFIED_AD_PAY_PER_LEAD_FEE,
            self::VALUE_CLASSIFIED_AD_PAY_PER_LEAD_FEE_DESCENDING,
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
