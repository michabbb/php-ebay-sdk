<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemSortTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the possible values that can be used when sorting results in the <b>GetItemsAwaitingFeedback</b>, <b>GetMyeBayBuying</b>, and <b>GetMyeBaySelling</b> calls. Assume that each of sort values can be used in
 * any of the three calls above unless it is specifically called out that a certain enumeration value will not work/is not applicable to a call.
 * @subpackage Enumerations
 */
class ItemSortTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ItemID'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to Item ID value in ascending order.
     * @return string 'ItemID'
     */
    const VALUE_ITEM_ID = 'ItemID';
    /**
     * Constant for value 'Price'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings according to item price value in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
    /**
     * Constant for value 'StartPrice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings or orders according to the starting price value in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'StartPrice'
     */
    const VALUE_START_PRICE = 'StartPrice';
    /**
     * Constant for value 'Title'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings or orders according to listing title in ascending (alphabetical) order.
     * @return string 'Title'
     */
    const VALUE_TITLE = 'Title';
    /**
     * Constant for value 'BidCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort auction listings according to the number of bids received in ascending order. This enumeration value is only applicable to auction listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'BidCount'
     */
    const VALUE_BID_COUNT = 'BidCount';
    /**
     * Constant for value 'Quantity'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort fixed-price listings and orders according to item quantity in ascending order. This enumeration value is only applicable to fixed-price listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'Quantity'
     */
    const VALUE_QUANTITY = 'Quantity';
    /**
     * Constant for value 'StartTime'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to start time in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'StartTime'
     */
    const VALUE_START_TIME = 'StartTime';
    /**
     * Constant for value 'EndTime'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to end time in ascending order.
     * @return string 'EndTime'
     */
    const VALUE_END_TIME = 'EndTime';
    /**
     * Constant for value 'SellerUserID'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to the seller's user ID in ascending (alphabetical) order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBaySelling</b> calls.
     * @return string 'SellerUserID'
     */
    const VALUE_SELLER_USER_ID = 'SellerUserID';
    /**
     * Constant for value 'TimeLeft'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort active listings and orders according to the time left before listing ends (in ascending order). <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'TimeLeft'
     */
    const VALUE_TIME_LEFT = 'TimeLeft';
    /**
     * Constant for value 'ListingDuration'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings according to the listing duration in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBayBuying</b> calls.
     * @return string 'ListingDuration'
     */
    const VALUE_LISTING_DURATION = 'ListingDuration';
    /**
     * Constant for value 'ListingType'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to the listing type in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'ListingType'
     */
    const VALUE_LISTING_TYPE = 'ListingType';
    /**
     * Constant for value 'CurrentPrice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to the current/final price in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'CurrentPrice'
     */
    const VALUE_CURRENT_PRICE = 'CurrentPrice';
    /**
     * Constant for value 'ReservePrice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort auction listings and orders according to the reserve price in ascending order. This enumeration value is only applicable when a seller wants to retrieve information on their own auction listings
     * that have reserve prices set on them. This enumeration is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'ReservePrice'
     */
    const VALUE_RESERVE_PRICE = 'ReservePrice';
    /**
     * Constant for value 'MaxBid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by a buyer to sort auction listings and orders according to the maximum bid price that they placed on an auction listing in ascending order. This enumeration value is only applicable to auction
     * listings, and is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBaySelling</b> calls.
     * @return string 'MaxBid'
     */
    const VALUE_MAX_BID = 'MaxBid';
    /**
     * Constant for value 'BidderCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort auction listings according to the number of unique bidders in ascending order. This enumeration value is only applicable to auction listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'BidderCount'
     */
    const VALUE_BIDDER_COUNT = 'BidderCount';
    /**
     * Constant for value 'HighBidderUserID'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort auction listings according to the user ID of the highest bidder in ascending order. This enumeration value is only applicable to auction listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'HighBidderUserID'
     */
    const VALUE_HIGH_BIDDER_USER_ID = 'HighBidderUserID';
    /**
     * Constant for value 'BuyerUserID'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings according to the buyer's user ID in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBayBuying</b> calls.
     * @return string 'BuyerUserID'
     */
    const VALUE_BUYER_USER_ID = 'BuyerUserID';
    /**
     * Constant for value 'BuyerPostalCode'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings according to the buyer's location in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBayBuying</b> calls.
     * @return string 'BuyerPostalCode'
     */
    const VALUE_BUYER_POSTAL_CODE = 'BuyerPostalCode';
    /**
     * Constant for value 'BuyerEmail'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings according to the buyer's email address in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls, and a buyer's email address will only be exposed to the seller within two weeks of order purchase.
     * @return string 'BuyerEmail'
     */
    const VALUE_BUYER_EMAIL = 'BuyerEmail';
    /**
     * Constant for value 'SellerEmail'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort listings and orders according to the seller's email address in ascending order. <br/><br/> This enumeration value is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBaySelling</b> calls.
     * @return string 'SellerEmail'
     */
    const VALUE_SELLER_EMAIL = 'SellerEmail';
    /**
     * Constant for value 'TotalPrice'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort orders according to item price value in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'TotalPrice'
     */
    const VALUE_TOTAL_PRICE = 'TotalPrice';
    /**
     * Constant for value 'WatchCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings and orders according to the number of users watching the listing in ascending order. <br/><br/> This enumeration value is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'WatchCount'
     */
    const VALUE_WATCH_COUNT = 'WatchCount';
    /**
     * Constant for value 'BestOfferCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort active listings according to the number of Best Offers that the listing has received in ascending order. <br/><br/> This enumeration value is not applicable
     * to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'BestOfferCount'
     */
    const VALUE_BEST_OFFER_COUNT = 'BestOfferCount';
    /**
     * Constant for value 'QuestionCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings and orders according to the number of questions that the listing has received in ascending order. <br/><br/> This enumeration value is not applicable
     * to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'QuestionCount'
     */
    const VALUE_QUESTION_COUNT = 'QuestionCount';
    /**
     * Constant for value 'ShippingServiceCost'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort orders according to the cost to ship one unit of the order line item in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'ShippingServiceCost'
     */
    const VALUE_SHIPPING_SERVICE_COST = 'ShippingServiceCost';
    /**
     * Constant for value 'FeedbackReceived'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort orders according to the type of feedback that a user received in ascending order. The Feedback ratings are defined in <b>CommentTypeCodeType</b>.
     * @return string 'FeedbackReceived'
     */
    const VALUE_FEEDBACK_RECEIVED = 'FeedbackReceived';
    /**
     * Constant for value 'FeedbackLeft'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort orders according to the type of feedback that a user left for another user in ascending order. The Feedback ratings are defined in <b>CommentTypeCodeType</b>.
     * @return string 'FeedbackLeft'
     */
    const VALUE_FEEDBACK_LEFT = 'FeedbackLeft';
    /**
     * Constant for value 'UserID'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to the eBay user ID of the order partner/owner of listing in ascending order.
     * @return string 'UserID'
     */
    const VALUE_USER_ID = 'UserID';
    /**
     * Constant for value 'QuantitySold'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort order line items according to the quantity sold in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b>
     * or <b>GetMyeBayBuying</b> calls.
     * @return string 'QuantitySold'
     */
    const VALUE_QUANTITY_SOLD = 'QuantitySold';
    /**
     * Constant for value 'BestOffer'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the buyer in a <b>GetMyeBayBuying</b> call to sort all Best Offers made in ascending order according to the dollar amount of the Best Offer. This sort option is only applicable if the buyer has at
     * least one pending Best Offer on an order line item. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBaySelling</b> calls.
     * @return string 'BestOffer'
     */
    const VALUE_BEST_OFFER = 'BestOffer';
    /**
     * Constant for value 'QuantityAvailable'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort order line items according to quantity available for purchase in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call, and it is only
     * relevant to the <b>WatchList</b> container of the <b>GetMyeBayBuying</b> call.
     * @return string 'QuantityAvailable'
     */
    const VALUE_QUANTITY_AVAILABLE = 'QuantityAvailable';
    /**
     * Constant for value 'QuantityPurchased'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort purchased line items according to the quantity purchased by the buyer in ascending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'QuantityPurchased'
     */
    const VALUE_QUANTITY_PURCHASED = 'QuantityPurchased';
    /**
     * Constant for value 'WonPlatform'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Half.com has been shut down, and eBay marketplace is the only remaining platform.
     * @return string 'WonPlatform'
     */
    const VALUE_WON_PLATFORM = 'WonPlatform';
    /**
     * Constant for value 'SoldPlatform'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Half.com has been shut down, and eBay marketplace is the only remaining platform.
     * @return string 'SoldPlatform'
     */
    const VALUE_SOLD_PLATFORM = 'SoldPlatform';
    /**
     * Constant for value 'ListingDurationDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings according to the listing duration in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBayBuying</b> calls.
     * @return string 'ListingDurationDescending'
     */
    const VALUE_LISTING_DURATION_DESCENDING = 'ListingDurationDescending';
    /**
     * Constant for value 'ListingTypeDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to the listing type in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'ListingTypeDescending'
     */
    const VALUE_LISTING_TYPE_DESCENDING = 'ListingTypeDescending';
    /**
     * Constant for value 'CurrentPriceDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to the current/final price in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'CurrentPriceDescending'
     */
    const VALUE_CURRENT_PRICE_DESCENDING = 'CurrentPriceDescending';
    /**
     * Constant for value 'ReservePriceDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort auction listings and orders according to the reserve price in descending order. This enumeration value is only applicable when a seller wants to retrieve
     * information on their own auction listings that have reserve prices set on them. <br/><br/> This enumeration is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'ReservePriceDescending'
     */
    const VALUE_RESERVE_PRICE_DESCENDING = 'ReservePriceDescending';
    /**
     * Constant for value 'MaxBidDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort auction listings and orders according to the maximum bid price that a buyer placed on an auction listing in descending order. <br/><br/> This enumeration value
     * is only applicable to auction listings, and is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBaySelling</b> calls.
     * @return string 'MaxBidDescending'
     */
    const VALUE_MAX_BID_DESCENDING = 'MaxBidDescending';
    /**
     * Constant for value 'BidderCountDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort auction listings according to the number of unique bidders in descending order. <br/><br/> This enumeration value is only applicable to auction listings, and
     * is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'BidderCountDescending'
     */
    const VALUE_BIDDER_COUNT_DESCENDING = 'BidderCountDescending';
    /**
     * Constant for value 'HighBidderUserIDDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort auction listings according to the user ID of the highest bidder in descending order. <br/><br/> This enumeration value is only applicable to auction listings,
     * and is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'HighBidderUserIDDescending'
     */
    const VALUE_HIGH_BIDDER_USER_IDDESCENDING = 'HighBidderUserIDDescending';
    /**
     * Constant for value 'BuyerUserIDDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings according to the buyer's user ID in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBayBuying</b> calls.
     * @return string 'BuyerUserIDDescending'
     */
    const VALUE_BUYER_USER_IDDESCENDING = 'BuyerUserIDDescending';
    /**
     * Constant for value 'BuyerPostalCodeDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings according to the buyer's location in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or
     * <b>GetMyeBayBuying</b> calls.
     * @return string 'BuyerPostalCodeDescending'
     */
    const VALUE_BUYER_POSTAL_CODE_DESCENDING = 'BuyerPostalCodeDescending';
    /**
     * Constant for value 'BuyerEmailDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings according to the buyer's email address in descending order. A buyer's actual email address will only be exposed to the seller within two weeks of
     * order purchase. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'BuyerEmailDescending'
     */
    const VALUE_BUYER_EMAIL_DESCENDING = 'BuyerEmailDescending';
    /**
     * Constant for value 'SellerEmailDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort listings and orders according to the seller's email address in descending order. <br/><br/> This enumeration value is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBaySelling</b> calls.
     * @return string 'SellerEmailDescending'
     */
    const VALUE_SELLER_EMAIL_DESCENDING = 'SellerEmailDescending';
    /**
     * Constant for value 'TotalPriceDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort orders according to item price value in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'TotalPriceDescending'
     */
    const VALUE_TOTAL_PRICE_DESCENDING = 'TotalPriceDescending';
    /**
     * Constant for value 'WatchCountDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings and orders according to the number of users watching the listing in descending order. <br/><br/> This enumeration value is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'WatchCountDescending'
     */
    const VALUE_WATCH_COUNT_DESCENDING = 'WatchCountDescending';
    /**
     * Constant for value 'QuestionCountDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort listings and orders according to the number of questions that the listing has received in descending order. <br/><br/> This enumeration value is not
     * applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'QuestionCountDescending'
     */
    const VALUE_QUESTION_COUNT_DESCENDING = 'QuestionCountDescending';
    /**
     * Constant for value 'ShippingServiceCostDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort orders according to the cost to ship one unit of the order line item in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'ShippingServiceCostDescending'
     */
    const VALUE_SHIPPING_SERVICE_COST_DESCENDING = 'ShippingServiceCostDescending';
    /**
     * Constant for value 'FeedbackReceivedDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort orders according to the type of feedback that a user received in descending order. The Feedback ratings are defined in <b>CommentTypeCodeType</b>.
     * @return string 'FeedbackReceivedDescending'
     */
    const VALUE_FEEDBACK_RECEIVED_DESCENDING = 'FeedbackReceivedDescending';
    /**
     * Constant for value 'FeedbackLeftDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort orders according to the type of feedback that a user left for another user in descending order. The Feedback ratings are defined in <b>CommentTypeCodeType</b>.
     * @return string 'FeedbackLeftDescending'
     */
    const VALUE_FEEDBACK_LEFT_DESCENDING = 'FeedbackLeftDescending';
    /**
     * Constant for value 'UserIDDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to the eBay user ID of the order partner/owner of listing in descending order.
     * @return string 'UserIDDescending'
     */
    const VALUE_USER_IDDESCENDING = 'UserIDDescending';
    /**
     * Constant for value 'QuantitySoldDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort order line items according to the quantity sold in descending order. <br/><br/> This enumeration value is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'QuantitySoldDescending'
     */
    const VALUE_QUANTITY_SOLD_DESCENDING = 'QuantitySoldDescending';
    /**
     * Constant for value 'BestOfferCountDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBaySelling</b> call to sort active listings according to the number of Best Offers that the listing has received in descending order. <br/><br/> This enumeration value is not applicable
     * to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'BestOfferCountDescending'
     */
    const VALUE_BEST_OFFER_COUNT_DESCENDING = 'BestOfferCountDescending';
    /**
     * Constant for value 'QuantityAvailableDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort order line items according to quantity available for purchase in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call, and it is only
     * relevant to the <b>WatchList</b> container of the <b>GetMyeBayBuying</b> call.
     * @return string 'QuantityAvailableDescending'
     */
    const VALUE_QUANTITY_AVAILABLE_DESCENDING = 'QuantityAvailableDescending';
    /**
     * Constant for value 'QuantityPurchasedDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort purchased line items according to the quantity purchased by the buyer in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'QuantityPurchasedDescending'
     */
    const VALUE_QUANTITY_PURCHASED_DESCENDING = 'QuantityPurchasedDescending';
    /**
     * Constant for value 'BestOfferDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort all Best Offers made in descending order according to the dollar amount of the Best Offer. This sort option is only applicable if the buyer has at least one
     * pending Best Offer on an order line item. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBaySelling</b> calls.
     * @return string 'BestOfferDescending'
     */
    const VALUE_BEST_OFFER_DESCENDING = 'BestOfferDescending';
    /**
     * Constant for value 'ItemIDDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to Item ID value in descending order.
     * @return string 'ItemIDDescending'
     */
    const VALUE_ITEM_IDDESCENDING = 'ItemIDDescending';
    /**
     * Constant for value 'PriceDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings according to item price value in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'PriceDescending'
     */
    const VALUE_PRICE_DESCENDING = 'PriceDescending';
    /**
     * Constant for value 'StartPriceDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings or orders according to the starting price value in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'StartPriceDescending'
     */
    const VALUE_START_PRICE_DESCENDING = 'StartPriceDescending';
    /**
     * Constant for value 'TitleDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings or orders according to listing title in descending (alphabetical) order.
     * @return string 'TitleDescending'
     */
    const VALUE_TITLE_DESCENDING = 'TitleDescending';
    /**
     * Constant for value 'BidCountDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort auction listings according to the number of bids received in descending order. <br/><br/> This enumeration value is only applicable to auction listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'BidCountDescending'
     */
    const VALUE_BID_COUNT_DESCENDING = 'BidCountDescending';
    /**
     * Constant for value 'QuantityDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort fixed-price listings and orders according to item quantity in descending order. <br/><br/> This enumeration value is only applicable to fixed-price listings, and is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'QuantityDescending'
     */
    const VALUE_QUANTITY_DESCENDING = 'QuantityDescending';
    /**
     * Constant for value 'StartTimeDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to start time in descending order. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'StartTimeDescending'
     */
    const VALUE_START_TIME_DESCENDING = 'StartTimeDescending';
    /**
     * Constant for value 'EndTimeDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort listings and orders according to end time in descending order.
     * @return string 'EndTimeDescending'
     */
    const VALUE_END_TIME_DESCENDING = 'EndTimeDescending';
    /**
     * Constant for value 'SellerUserIDDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the <b>GetMyeBayBuying</b> call to sort listings and orders according to the seller's user ID in descending order. <br/><br/> This enumeration value is not applicable to the
     * <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBaySelling</b> calls.
     * @return string 'SellerUserIDDescending'
     */
    const VALUE_SELLER_USER_IDDESCENDING = 'SellerUserIDDescending';
    /**
     * Constant for value 'TimeLeftDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to sort active listings and orders according to the time left before listing ends (in descending order). <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> call.
     * @return string 'TimeLeftDescending'
     */
    const VALUE_TIME_LEFT_DESCENDING = 'TimeLeftDescending';
    /**
     * Constant for value 'WonPlatformDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Half.com has been shut down, and eBay marketplace is the only remaining platform.
     * @return string 'WonPlatformDescending'
     */
    const VALUE_WON_PLATFORM_DESCENDING = 'WonPlatformDescending';
    /**
     * Constant for value 'SoldPlatformDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as Half.com has been shut down, and eBay marketplace is the only remaining platform.
     * @return string 'SoldPlatformDescending'
     */
    const VALUE_SOLD_PLATFORM_DESCENDING = 'SoldPlatformDescending';
    /**
     * Constant for value 'LeadCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the seller of a classified ad listing in a <b>GetMyeBaySelling</b> call to sort classified ad listings according to the total number of leads (prospective buyer inquiries) in ascending order. Each
     * lead involves an email to the buyer, and the <b>LeadCount</b> value includes read and unread emails. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'LeadCount'
     */
    const VALUE_LEAD_COUNT = 'LeadCount';
    /**
     * Constant for value 'NewLeadCount'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the seller of a classified ad listing in a <b>GetMyeBaySelling</b> call to sort classified ad listings according to the number of new leads (prospective buyer inquiries) in ascending order. Each lead
     * involves an email to the buyer, and the <b>NewLeadCount</b> value only includes unread emails. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'NewLeadCount'
     */
    const VALUE_NEW_LEAD_COUNT = 'NewLeadCount';
    /**
     * Constant for value 'LeadCountDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the seller of a classified ad listing in a <b>GetMyeBaySelling</b> call to sort classified ad listings according to the total number of leads (prospective buyer inquiries) in descending order. Each
     * lead involves an email to the buyer, and the <b>LeadCount</b> value includes read and unread emails. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'LeadCountDescending'
     */
    const VALUE_LEAD_COUNT_DESCENDING = 'LeadCountDescending';
    /**
     * Constant for value 'NewLeadCountDescending'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used by the seller of a classified ad listing in a <b>GetMyeBaySelling</b> call to sort classified ad listings according to the number of new leads (prospective buyer inquiries) in descending order. Each
     * lead involves an email to the buyer, and the <b>NewLeadCount</b> value only includes unread emails. <br/><br/> This enumeration value is not applicable to the <b>GetItemsAwaitingFeedback</b> or <b>GetMyeBayBuying</b> calls.
     * @return string 'NewLeadCountDescending'
     */
    const VALUE_NEW_LEAD_COUNT_DESCENDING = 'NewLeadCountDescending';
    /**
     * Constant for value 'ClassifiedAdPayPerLeadFee'
     * Meta information extracted from the WSDL
     * - documentation: The pay-per-lead feature is no longer available, so this value is no longer applicable.
     * @return string 'ClassifiedAdPayPerLeadFee'
     */
    const VALUE_CLASSIFIED_AD_PAY_PER_LEAD_FEE = 'ClassifiedAdPayPerLeadFee';
    /**
     * Constant for value 'ClassifiedAdPayPerLeadFeeDescending'
     * Meta information extracted from the WSDL
     * - documentation: The pay-per-lead feature is no longer available, so this value is no longer applicable.
     * @return string 'ClassifiedAdPayPerLeadFeeDescending'
     */
    const VALUE_CLASSIFIED_AD_PAY_PER_LEAD_FEE_DESCENDING = 'ClassifiedAdPayPerLeadFeeDescending';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
