<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationEventTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains the complete list of platform notifications that can be sent out to subscribed users, servers, or applications. Some notifications are only sent to buyers or sellers, and some are sent to both buyers and
 * sellers.
 * @subpackage Enumerations
 */
class NotificationEventTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This notification is for internal or future use.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OutBid'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when another buyer has outbid (placed a higher bid) the subscribed buyer on an auction listing, and the subscribed buyer is no longer the current high bidder. <br><br> This notification
     * is only applicable for auction listings.
     * @return string 'OutBid'
     */
    const VALUE_OUT_BID = 'OutBid';
    /**
     * Constant for value 'EndOfAuction'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to all subscribed bidders of an auction item and to the subscribed seller of the auction item as soon as the auction listing ends with or without a winning bidder. This notification will also be sent to
     * subscribed bidders and the subscribed seller if the auction ends as a result of a buyer using the auction listing's Buy It Now feature. <br><br> This notification is only applicable for auction listings.
     * @return string 'EndOfAuction'
     */
    const VALUE_END_OF_AUCTION = 'EndOfAuction';
    /**
     * Constant for value 'AuctionCheckoutComplete'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed seller when the winning bidder or buyer has paid for the auction or fixed-price item and completed the checkout process. <br><br> For multiple line item orders, an
     * <b>AuctionCheckoutComplete</b> notification is only generated for one of the line items in the order.
     * @return string 'AuctionCheckoutComplete'
     */
    const VALUE_AUCTION_CHECKOUT_COMPLETE = 'AuctionCheckoutComplete';
    /**
     * Constant for value 'CheckoutBuyerRequestsTotal'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when a buyer/winning bidder is requesting a total price before paying for the item. <br><br> This notification is applicable for auction listings and for fixed-price listings that do
     * not require immediate payment.
     * @return string 'CheckoutBuyerRequestsTotal'
     */
    const VALUE_CHECKOUT_BUYER_REQUESTS_TOTAL = 'CheckoutBuyerRequestsTotal';
    /**
     * Constant for value 'Feedback'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that buyer or seller has left Feedback for the other party in the order, or has received Feedback from the other party in the order. Feedback is given at the order line
     * item level.
     * @return string 'Feedback'
     */
    const VALUE_FEEDBACK = 'Feedback';
    /**
     * Constant for value 'FeedbackForSeller'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated. Use the <b>Feedback</b> notification instead.
     * @return string 'FeedbackForSeller'
     */
    const VALUE_FEEDBACK_FOR_SELLER = 'FeedbackForSeller';
    /**
     * Constant for value 'FixedPriceTransaction'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller each time a buyer purchases an item in a single or multiple-quantity, fixed-price listing. <br><br> This notification is only applicable for fixed-price listings.
     * @return string 'FixedPriceTransaction'
     */
    const VALUE_FIXED_PRICE_TRANSACTION = 'FixedPriceTransaction';
    /**
     * Constant for value 'SecondChanceOffer'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when that buyer is offered a Second Chance Offer from the seller, after that buyer failed to win the original auction of the item. <br><br> If subscribed to by a buyer and when
     * applicable, this notification will appear in the <b>GetItem</b> call response.
     * @return string 'SecondChanceOffer'
     */
    const VALUE_SECOND_CHANCE_OFFER = 'SecondChanceOffer';
    /**
     * Constant for value 'AskSellerQuestion'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when an eBay user has used the Ask a Question feature on the seller's active listing. An eBay user does not have to be an active bidder on an auction listing to ask a seller a
     * question. <br><br> If subscribed to by a seller and when applicable, this notification will appear in the <b>GetMemberMessages</b> call response.
     * @return string 'AskSellerQuestion'
     */
    const VALUE_ASK_SELLER_QUESTION = 'AskSellerQuestion';
    /**
     * Constant for value 'ItemListed'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller each time one of the subscribed seller's items is listed or relisted. This notification is also triggered when the Unpaid Item Assistant mechanism relists an item for the seller.
     * @return string 'ItemListed'
     */
    const VALUE_ITEM_LISTED = 'ItemListed';
    /**
     * Constant for value 'ItemRevised'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when one of the subscribed seller's items is revised. <br><br> If subscribed to by a seller and when applicable, this notification will appear in the <b>GetItem</b> call response.
     * @return string 'ItemRevised'
     */
    const VALUE_ITEM_REVISED = 'ItemRevised';
    /**
     * Constant for value 'BuyerResponseDispute'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller each time a buyer responds to an Unpaid Item or Cancel Transaction case that the subscribed seller has opened up against the buyer.
     * @return string 'BuyerResponseDispute'
     */
    const VALUE_BUYER_RESPONSE_DISPUTE = 'BuyerResponseDispute';
    /**
     * Constant for value 'SellerOpenedDispute'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer if a seller opens up an Unpaid Item or Cancel Transaction case against the subscribed buyer. <br><br> If subscribed to by a buyer and when applicable, this notification will appear
     * through the <b>GetDispute</b> call response.
     * @return string 'SellerOpenedDispute'
     */
    const VALUE_SELLER_OPENED_DISPUTE = 'SellerOpenedDispute';
    /**
     * Constant for value 'SellerRespondedToDispute'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer each time a seller responds to an Item Not Received or (Item) Significantly Not As Described case that the subscribed buyer has opened up against the seller. <br><br> If subscribed to
     * by a buyer and when applicable, this notification will appear in the <b>GetDispute</b> call response.
     * @return string 'SellerRespondedToDispute'
     */
    const VALUE_SELLER_RESPONDED_TO_DISPUTE = 'SellerRespondedToDispute';
    /**
     * Constant for value 'SellerClosedDispute'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed buyer and seller if the seller closes an Unpaid Item or Cancel Transaction case against the buyer. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification
     * will appear in the <b>GetDispute</b> call response.
     * @return string 'SellerClosedDispute'
     */
    const VALUE_SELLER_CLOSED_DISPUTE = 'SellerClosedDispute';
    /**
     * Constant for value 'BestOffer'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller if a potential buyer has made a Best Offer on a Best Offer-enabled listing. <br><br> If subscribed to by a seller and when applicable, this notification will appear in the
     * <b>GetBestOffers</b> call response. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature can be set for auction listings on the US, Canada, UK, Germany, Australia, France, Italy, and Spain marketplaces, but keep in mind that Best
     * Offer and Buy It Now cannot be used simultaneously in a listing. Also, once a qualifying bid is made on an auction listing, the Best Offer feature is disabled, and any pending offer or counteroffers are no longer valid. </span>
     * @return string 'BestOffer'
     */
    const VALUE_BEST_OFFER = 'BestOffer';
    /**
     * Constant for value 'MyMessagesAlertHeader'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated and can no longer be used.
     * @return string 'MyMessagesAlertHeader'
     */
    const VALUE_MY_MESSAGES_ALERT_HEADER = 'MyMessagesAlertHeader';
    /**
     * Constant for value 'MyMessagesAlert'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated. Use <b>MyMessagesHighPriorityMessage</b> instead.
     * @return string 'MyMessagesAlert'
     */
    const VALUE_MY_MESSAGES_ALERT = 'MyMessagesAlert';
    /**
     * Constant for value 'MyMessageseBayMessageHeader'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when eBay sends a message to that user's InBox. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the <b>GetMyMessages</b>
     * call response. For this notification to be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the <b>GetMyMessages</b> request must be set to <code>ReturnHeaders</code>. <br><br> <b>MyMessageseBayMessageHeader</b> and
     * <b>MyMessageseBayMessage</b> cannot be subscribed to at the same time or specified in the same call.
     * @return string 'MyMessageseBayMessageHeader'
     */
    const VALUE_MY_MESSAGESE_BAY_MESSAGE_HEADER = 'MyMessageseBayMessageHeader';
    /**
     * Constant for value 'MyMessageseBayMessage'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when eBay sends a message to that user's InBox. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the <b>GetMyMessages</b>
     * call response. For this notification to be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the <b>GetMyMessages</b> request must be set to <code>ReturnMessages</code>. <br><br> <b>MyMessageseBayMessageHeader</b> and
     * <b>MyMessageseBayMessage</b> cannot be subscribed to at the same time or specified in the same call.
     * @return string 'MyMessageseBayMessage'
     */
    const VALUE_MY_MESSAGESE_BAY_MESSAGE = 'MyMessageseBayMessage';
    /**
     * Constant for value 'MyMessagesM2MMessageHeader'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when another eBay user sends a message to that user's InBox. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * <b>GetMyMessages</b> call response. For this notification to be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the <b>GetMyMessages</b> request must be set to <code>ReturnHeaders</code>. <br><br> <b>MyMessagesM2MMessageHeader</b>
     * and <b>MyMessagesM2MMessage</b> cannot be subscribed to at the same time or specified in the same call.
     * @return string 'MyMessagesM2MMessageHeader'
     */
    const VALUE_MY_MESSAGES_M_2_MMESSAGE_HEADER = 'MyMessagesM2MMessageHeader';
    /**
     * Constant for value 'MyMessagesM2MMessage'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when another eBay user sends a message to that user's InBox. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * <b>GetMyMessages</b> call response. For this notification to be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the <b>GetMyMessages</b> request must be set to <code>ReturnMessages</code>. <br><br> <b>MyMessagesM2MMessageHeader</b>
     * and <b>MyMessagesM2MMessage</b> cannot be subscribed to at the same time or specified in the same call.
     * @return string 'MyMessagesM2MMessage'
     */
    const VALUE_MY_MESSAGES_M_2_MMESSAGE = 'MyMessagesM2MMessage';
    /**
     * Constant for value 'INRBuyerOpenedDispute'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when a buyer opens an Item Not Received dispute against that seller. <br><br> If subscribed to by the seller and when applicable, this notification will appear in the <b>GetDispute</b>
     * call response.
     * @return string 'INRBuyerOpenedDispute'
     */
    const VALUE_INRBUYER_OPENED_DISPUTE = 'INRBuyerOpenedDispute';
    /**
     * Constant for value 'INRBuyerRespondedToDispute'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when a buyer responds to an Item Not Received dispute opened by that buyer. <br><br> If subscribed to by the seller and when applicable, this notification will appear in the
     * <b>GetDispute</b> call response.
     * @return string 'INRBuyerRespondedToDispute'
     */
    const VALUE_INRBUYER_RESPONDED_TO_DISPUTE = 'INRBuyerRespondedToDispute';
    /**
     * Constant for value 'INRBuyerClosedDispute'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when a buyer closes an Item Not Received dispute opened by that buyer. <br><br> If subscribed to by the seller and when applicable, this notification will appear in the
     * <b>GetDispute</b> call response.
     * @return string 'INRBuyerClosedDispute'
     */
    const VALUE_INRBUYER_CLOSED_DISPUTE = 'INRBuyerClosedDispute';
    /**
     * Constant for value 'INRSellerRespondedToDispute'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when a seller responds to an Item Not Received dispute opened by the buyer. <br><br> If subscribed to by the buyer and when applicable, this notification will appear in the
     * <b>GetDispute</b> call response.
     * @return string 'INRSellerRespondedToDispute'
     */
    const VALUE_INRSELLER_RESPONDED_TO_DISPUTE = 'INRSellerRespondedToDispute';
    /**
     * Constant for value 'Checkout'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated. Use <b>AuctionCheckoutComplete</b> instead.
     * @return string 'Checkout'
     */
    const VALUE_CHECKOUT = 'Checkout';
    /**
     * Constant for value 'WatchedItemEndingSoon'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when a listing that the buyer is watching is ending soon. This event has a <b>TimeLeft</b> property that defines the 'ending soon' threshold value.
     * @return string 'WatchedItemEndingSoon'
     */
    const VALUE_WATCHED_ITEM_ENDING_SOON = 'WatchedItemEndingSoon';
    /**
     * Constant for value 'ItemClosed'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when a listing ends. This notification can be triggered by an <b>ItemWon</b>, an <b>ItemSold</b>, or an <b>ItemUnsold</b> event.
     * @return string 'ItemClosed'
     */
    const VALUE_ITEM_CLOSED = 'ItemClosed';
    /**
     * Constant for value 'ItemSuspended'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when a listing is administratively taken down by eBay.
     * @return string 'ItemSuspended'
     */
    const VALUE_ITEM_SUSPENDED = 'ItemSuspended';
    /**
     * Constant for value 'ItemSold'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when an eBay listing ends in a sale.
     * @return string 'ItemSold'
     */
    const VALUE_ITEM_SOLD = 'ItemSold';
    /**
     * Constant for value 'ItemExtended'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when the duration of an eBay listing has been extended.
     * @return string 'ItemExtended'
     */
    const VALUE_ITEM_EXTENDED = 'ItemExtended';
    /**
     * Constant for value 'UserIDChanged'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user has modified their eBay user ID.
     * @return string 'UserIDChanged'
     */
    const VALUE_USER_IDCHANGED = 'UserIDChanged';
    /**
     * Constant for value 'EmailAddressChanged'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user has changed the email address associated with the user account. This notification is available for Client Alerts and for SMS only. Not applicable to Platform
     * Notifications.
     * @return string 'EmailAddressChanged'
     */
    const VALUE_EMAIL_ADDRESS_CHANGED = 'EmailAddressChanged';
    /**
     * Constant for value 'PasswordChanged'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user has changed the password used for login. This notification is available for Client Alerts and for SMS only. Not applicable to Platform Notifications.
     * @return string 'PasswordChanged'
     */
    const VALUE_PASSWORD_CHANGED = 'PasswordChanged';
    /**
     * Constant for value 'PasswordHintChanged'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user has changed the password hint. This notification is available for Client Alerts and for SMS only. Not applicable to Platform Notifications.
     * @return string 'PasswordHintChanged'
     */
    const VALUE_PASSWORD_HINT_CHANGED = 'PasswordHintChanged';
    /**
     * Constant for value 'PaymentDetailChanged'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when that seller has changed the payment methods used to pay seller fees for the account. This notification is available for Client Alerts and for SMS only. Not applicable to Platform
     * Notifications.
     * @return string 'PaymentDetailChanged'
     */
    const VALUE_PAYMENT_DETAIL_CHANGED = 'PaymentDetailChanged';
    /**
     * Constant for value 'AccountSuspended'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that eBay user's account is suspended. This notification is available for Client Alerts and for SMS only. Not applicable to Platform Notifications.
     * @return string 'AccountSuspended'
     */
    const VALUE_ACCOUNT_SUSPENDED = 'AccountSuspended';
    /**
     * Constant for value 'AccountSummary'
     * Meta information extracted from the WSDL
     * - documentation: An informational alert about account activity. A buyer or seller can subscribe to receive an account activity summary via SMS or Client Alerts. The user can specify the period (time range) for the account summary and can select how
     * often the summary is to be sent. It is not triggered by an event but rather by an eBay daemon process that monitors a schedule database.
     * @return string 'AccountSummary'
     */
    const VALUE_ACCOUNT_SUMMARY = 'AccountSummary';
    /**
     * Constant for value 'ThirdPartyCartCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated.
     * @return string 'ThirdPartyCartCheckout'
     */
    const VALUE_THIRD_PARTY_CART_CHECKOUT = 'ThirdPartyCartCheckout';
    /**
     * Constant for value 'ItemRevisedAddCharity'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when the seller has revised a listing and added a nonprofit organization to receive a percentage (10 percent up to 100 percent) of the proceeds.
     * @return string 'ItemRevisedAddCharity'
     */
    const VALUE_ITEM_REVISED_ADD_CHARITY = 'ItemRevisedAddCharity';
    /**
     * Constant for value 'ItemAddedToWatchList'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when that buyer adds an item to the Watch List. <br><br> If subscribed to by a buyer and when applicable, this notification will appear in the <b>GetItem</b> call response.
     * @return string 'ItemAddedToWatchList'
     */
    const VALUE_ITEM_ADDED_TO_WATCH_LIST = 'ItemAddedToWatchList';
    /**
     * Constant for value 'ItemRemovedFromWatchList'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when that buyer removes an item from the Watch List. <br><br> If subscribed to by a buyer and when applicable, this notification will appear in the <b>GetItem</b> call response.
     * @return string 'ItemRemovedFromWatchList'
     */
    const VALUE_ITEM_REMOVED_FROM_WATCH_LIST = 'ItemRemovedFromWatchList';
    /**
     * Constant for value 'ItemAddedToBidGroup'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated.
     * @return string 'ItemAddedToBidGroup'
     */
    const VALUE_ITEM_ADDED_TO_BID_GROUP = 'ItemAddedToBidGroup';
    /**
     * Constant for value 'ItemRemovedFromBidGroup'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated.
     * @return string 'ItemRemovedFromBidGroup'
     */
    const VALUE_ITEM_REMOVED_FROM_BID_GROUP = 'ItemRemovedFromBidGroup';
    /**
     * Constant for value 'FeedbackLeft'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user leaves feedback for an order partner. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * <b>GetFeedback</b> call response.
     * @return string 'FeedbackLeft'
     */
    const VALUE_FEEDBACK_LEFT = 'FeedbackLeft';
    /**
     * Constant for value 'FeedbackReceived'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user receives feedback from an order partner. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * <b>GetFeedback</b> call response.
     * @return string 'FeedbackReceived'
     */
    const VALUE_FEEDBACK_RECEIVED = 'FeedbackReceived';
    /**
     * Constant for value 'FeedbackStarChanged'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user's Feedback star has changed. Sent to a subscribing third party when a user's Feedback star level changes. <br><br> If subscribed to by a buyer or seller, and
     * when applicable, this notification will appear in the <b>GetUser</b> call response.
     * @return string 'FeedbackStarChanged'
     */
    const VALUE_FEEDBACK_STAR_CHANGED = 'FeedbackStarChanged';
    /**
     * Constant for value 'BidPlaced'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when that buyer places a bid for an auction item. <br><br> If subscribed to by a buyer and when applicable, this notification will appear in the <b>GetItem</b> call response.
     * @return string 'BidPlaced'
     */
    const VALUE_BID_PLACED = 'BidPlaced';
    /**
     * Constant for value 'BidReceived'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller each time a prospective buyer places a bid for the seller's auction item. <br><br> If subscribed to by a seller and when applicable, this notification will appear in the <b>GetItem</b>
     * call response.
     * @return string 'BidReceived'
     */
    const VALUE_BID_RECEIVED = 'BidReceived';
    /**
     * Constant for value 'ItemWon'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer if that buyer is the winner of an auction item. <br><br> If subscribed to by a buyer and when applicable, this notification will appear in the <b>GetItem</b> call response.
     * @return string 'ItemWon'
     */
    const VALUE_ITEM_WON = 'ItemWon';
    /**
     * Constant for value 'ItemLost'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer if that buyer did not end up as the highest bidder for an auction item. <br><br> If subscribed to by a buyer and when applicable, this notification will appear in the <b>GetItem</b>
     * call response.
     * @return string 'ItemLost'
     */
    const VALUE_ITEM_LOST = 'ItemLost';
    /**
     * Constant for value 'ItemUnsold'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when an auction listing ends with no winning bidder or when a fixed-price listing ends with no sale(s). <br><br> If subscribed to by a seller and when applicable, this notification
     * will appear in the <b>GetItem</b> call response.
     * @return string 'ItemUnsold'
     */
    const VALUE_ITEM_UNSOLD = 'ItemUnsold';
    /**
     * Constant for value 'CounterOfferReceived'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when a seller makes a counter offer to the buyer's Best Offer on an item. <br><br> If subscribed to by a buyer and when applicable, this notification will appear in the
     * <b>GetBestOffers</b> call response.
     * @return string 'CounterOfferReceived'
     */
    const VALUE_COUNTER_OFFER_RECEIVED = 'CounterOfferReceived';
    /**
     * Constant for value 'BestOfferDeclined'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when a seller declines the buyer's Best Offer on an item. <br><br> If subscribed to by a buyer and when applicable, this notification will appear in the <b>GetBestOffers</b> call
     * response.
     * @return string 'BestOfferDeclined'
     */
    const VALUE_BEST_OFFER_DECLINED = 'BestOfferDeclined';
    /**
     * Constant for value 'BestOfferPlaced'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller each time a prospective buyer places a Best Offer on an item.
     * @return string 'BestOfferPlaced'
     */
    const VALUE_BEST_OFFER_PLACED = 'BestOfferPlaced';
    /**
     * Constant for value 'AddToWatchList'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated. Use <b>ItemAddedToWatchList</b> notification instead.
     * @return string 'AddToWatchList'
     */
    const VALUE_ADD_TO_WATCH_LIST = 'AddToWatchList';
    /**
     * Constant for value 'PlaceOffer'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated. Use <b>BidPlaced</b> notification instead.
     * @return string 'PlaceOffer'
     */
    const VALUE_PLACE_OFFER = 'PlaceOffer';
    /**
     * Constant for value 'RemoveFromWatchList'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated. Use <b>ItemRemovedFromWatchList</b> notification instead. ItemRemovedFromWatchList
     * @return string 'RemoveFromWatchList'
     */
    const VALUE_REMOVE_FROM_WATCH_LIST = 'RemoveFromWatchList';
    /**
     * Constant for value 'AddToBidGroup'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated.
     * @return string 'AddToBidGroup'
     */
    const VALUE_ADD_TO_BID_GROUP = 'AddToBidGroup';
    /**
     * Constant for value 'RemoveFromBidGroup'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated.
     * @return string 'RemoveFromBidGroup'
     */
    const VALUE_REMOVE_FROM_BID_GROUP = 'RemoveFromBidGroup';
    /**
     * Constant for value 'ItemsCanceled'
     * Meta information extracted from the WSDL
     * - documentation: This notification is deprecated.
     * @return string 'ItemsCanceled'
     */
    const VALUE_ITEMS_CANCELED = 'ItemsCanceled';
    /**
     * Constant for value 'TokenRevocation'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller if that user's authentication token is revoked. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the <b>GetTokenStatus</b>
     * call response.
     * @return string 'TokenRevocation'
     */
    const VALUE_TOKEN_REVOCATION = 'TokenRevocation';
    /**
     * Constant for value 'BulkDataExchangeJobCompleted'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when that seller's Bulk Data Exchange job completes.
     * @return string 'BulkDataExchangeJobCompleted'
     */
    const VALUE_BULK_DATA_EXCHANGE_JOB_COMPLETED = 'BulkDataExchangeJobCompleted';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ItemMarkedShipped'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer and seller when that seller has marked an item as 'shipped'.
     * @return string 'ItemMarkedShipped'
     */
    const VALUE_ITEM_MARKED_SHIPPED = 'ItemMarkedShipped';
    /**
     * Constant for value 'ItemMarkedPaid'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer and seller when that seller has marked an order as 'paid'.
     * @return string 'ItemMarkedPaid'
     */
    const VALUE_ITEM_MARKED_PAID = 'ItemMarkedPaid';
    /**
     * Constant for value 'EBPMyResponseDue'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribing buyer or seller when a response to the eBay Money Back Guarantee case is due from that user. When an eBay Money Back Guarantee case is opened, this notification is only sent to the seller
     * involved in the case and not the buyer.
     * @return string 'EBPMyResponseDue'
     */
    const VALUE_EBPMY_RESPONSE_DUE = 'EBPMyResponseDue';
    /**
     * Constant for value 'EBPOtherPartyResponseDue'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed buyer or seller when a response to the eBay Money Back Guarantee case is due from the other party in the case.
     * @return string 'EBPOtherPartyResponseDue'
     */
    const VALUE_EBPOTHER_PARTY_RESPONSE_DUE = 'EBPOtherPartyResponseDue';
    /**
     * Constant for value 'EBPEscalatedCase'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed buyer or seller when an eBay Money Back Guarantee case is escalated to eBay customer support.
     * @return string 'EBPEscalatedCase'
     */
    const VALUE_EBPESCALATED_CASE = 'EBPEscalatedCase';
    /**
     * Constant for value 'EBPAppealedCase'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed buyer or seller when the decision of an eBay Money Back Guarantee case is appealed.
     * @return string 'EBPAppealedCase'
     */
    const VALUE_EBPAPPEALED_CASE = 'EBPAppealedCase';
    /**
     * Constant for value 'EBPMyPaymentDue'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed seller when payment (to eBay or buyer) related to the outcome of an eBay Money Back Guarantee case is due.
     * @return string 'EBPMyPaymentDue'
     */
    const VALUE_EBPMY_PAYMENT_DUE = 'EBPMyPaymentDue';
    /**
     * Constant for value 'EBPPaymentDone'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed seller when payment (to eBay or buyer) related to the outcome of an eBay Money Back Guarantee case is processed.
     * @return string 'EBPPaymentDone'
     */
    const VALUE_EBPPAYMENT_DONE = 'EBPPaymentDone';
    /**
     * Constant for value 'EBPClosedAppeal'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed buyer or seller when an appeal of an eBay Money Back Guarantee case decision has been closed.
     * @return string 'EBPClosedAppeal'
     */
    const VALUE_EBPCLOSED_APPEAL = 'EBPClosedAppeal';
    /**
     * Constant for value 'EBPClosedCase'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to the subscribed buyer or seller when an eBay Money Back Guarantee case has been closed.
     * @return string 'EBPClosedCase'
     */
    const VALUE_EBPCLOSED_CASE = 'EBPClosedCase';
    /**
     * Constant for value 'MyMessagesHighPriorityMessage'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user receives a high-priority message in InBox. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * <b>GetMyMessages</b> call response. For this notification to be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the <b>GetMyMessages</b> request must be set to <code>ReturnMessages</code>. <br><br>
     * <b>MyMessagesHighPriorityMessage</b>, <b>MyMessagesM2MMessage</b>, and <b>MyMessagesHighPriorityMessageHeader</b> cannot be subscribed to at the same time or specified in the same call.
     * @return string 'MyMessagesHighPriorityMessage'
     */
    const VALUE_MY_MESSAGES_HIGH_PRIORITY_MESSAGE = 'MyMessagesHighPriorityMessage';
    /**
     * Constant for value 'MyMessagesHighPriorityMessageHeader'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when that user receives a high-priority message in InBox. <br><br> If subscribed to by a buyer or seller, and when applicable, this notification will appear in the
     * <b>GetMyMessages</b> call response. For this notification to be returned in <b>GetMyMessages</b>, the <b>DetailLevel</b> value in the <b>GetMyMessages</b> request must be set to <code>ReturnHeaders</code>. <br><br>
     * <b>MyMessagesHighPriorityMessage</b>, <b>MyMessagesM2MMessage</b>, and <b>MyMessagesHighPriorityMessageHeader</b> cannot be subscribed to at the same time or specified in the same call.
     * @return string 'MyMessagesHighPriorityMessageHeader'
     */
    const VALUE_MY_MESSAGES_HIGH_PRIORITY_MESSAGE_HEADER = 'MyMessagesHighPriorityMessageHeader';
    /**
     * Constant for value 'EBPOnHoldCase'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when an eBay Money Back Guarantee case has been put on hold by eBay customer support.
     * @return string 'EBPOnHoldCase'
     */
    const VALUE_EBPON_HOLD_CASE = 'EBPOnHoldCase';
    /**
     * Constant for value 'ReadyToShip'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller after the buyer's payment on an order has cleared.
     * @return string 'ReadyToShip'
     */
    const VALUE_READY_TO_SHIP = 'ReadyToShip';
    /**
     * Constant for value 'ReadyForPayout'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when eBay is prepared to send the seller's funds for an order that was previously placed on hold.
     * @return string 'ReadyForPayout'
     */
    const VALUE_READY_FOR_PAYOUT = 'ReadyForPayout';
    /**
     * Constant for value 'BidItemEndingSoon'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when the listing of the auction item where the buyer has an active bid is about to end. This event has a <b>TimeLeft</b> property that defines the 'ending soon' threshold value.
     * @return string 'BidItemEndingSoon'
     */
    const VALUE_BID_ITEM_ENDING_SOON = 'BidItemEndingSoon';
    /**
     * Constant for value 'ShoppingCartItemEndingSoon'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when an item in the buyer's shopping cart is about to end. This event has a <b>TimeLeft</b> property that defines the 'ending soon' threshold value.
     * @return string 'ShoppingCartItemEndingSoon'
     */
    const VALUE_SHOPPING_CART_ITEM_ENDING_SOON = 'ShoppingCartItemEndingSoon';
    /**
     * Constant for value 'ReturnCreated'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when a return request involving those users is created.
     * @return string 'ReturnCreated'
     */
    const VALUE_RETURN_CREATED = 'ReturnCreated';
    /**
     * Constant for value 'ReturnWaitingForSellerInfo'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when a return request is waiting for information from the seller, like a Return Merchandise Authorization (RMA) number or a correct return address.
     * @return string 'ReturnWaitingForSellerInfo'
     */
    const VALUE_RETURN_WAITING_FOR_SELLER_INFO = 'ReturnWaitingForSellerInfo';
    /**
     * Constant for value 'ReturnSellerInfoOverdue'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when information from the seller (e.g. a Return Merchandise Authorization number) is overdue.
     * @return string 'ReturnSellerInfoOverdue'
     */
    const VALUE_RETURN_SELLER_INFO_OVERDUE = 'ReturnSellerInfoOverdue';
    /**
     * Constant for value 'ReturnShipped'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when the buyer has shipped a return item back to the seller.
     * @return string 'ReturnShipped'
     */
    const VALUE_RETURN_SHIPPED = 'ReturnShipped';
    /**
     * Constant for value 'ReturnDelivered'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when a return item is received by the seller.
     * @return string 'ReturnDelivered'
     */
    const VALUE_RETURN_DELIVERED = 'ReturnDelivered';
    /**
     * Constant for value 'ReturnRefundOverdue'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when a refund to the buyer is overdue on a return.
     * @return string 'ReturnRefundOverdue'
     */
    const VALUE_RETURN_REFUND_OVERDUE = 'ReturnRefundOverdue';
    /**
     * Constant for value 'ReturnClosed'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when a return request is closed.
     * @return string 'ReturnClosed'
     */
    const VALUE_RETURN_CLOSED = 'ReturnClosed';
    /**
     * Constant for value 'ReturnEscalated'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller when a return request is escalated into a eBay Money Back Guarantee case.
     * @return string 'ReturnEscalated'
     */
    const VALUE_RETURN_ESCALATED = 'ReturnEscalated';
    /**
     * Constant for value 'BuyerCancelRequested'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when a buyer has requested an order cancellation.
     * @return string 'BuyerCancelRequested'
     */
    const VALUE_BUYER_CANCEL_REQUESTED = 'BuyerCancelRequested';
    /**
     * Constant for value 'UnmatchedPaymentReceived'
     * Meta information extracted from the WSDL
     * - documentation: This notification is no longer applicable. Do not use.
     * @return string 'UnmatchedPaymentReceived'
     */
    const VALUE_UNMATCHED_PAYMENT_RECEIVED = 'UnmatchedPaymentReceived';
    /**
     * Constant for value 'RefundSuccess'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when a refund to the buyer has been successfully processed.
     * @return string 'RefundSuccess'
     */
    const VALUE_REFUND_SUCCESS = 'RefundSuccess';
    /**
     * Constant for value 'RefundFailure'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when a refund to the buyer has failed.
     * @return string 'RefundFailure'
     */
    const VALUE_REFUND_FAILURE = 'RefundFailure';
    /**
     * Constant for value 'OrderInquiryOpened'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when the buyer has opened up an Item Not Received inquiry against an order line item.
     * @return string 'OrderInquiryOpened'
     */
    const VALUE_ORDER_INQUIRY_OPENED = 'OrderInquiryOpened';
    /**
     * Constant for value 'OrderInquiryReminderForEscalation'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller alerting the seller that the buyer will soon be eligible to escalate an Item Not Received inquiry into an eBay Money Back Guarantee case.
     * @return string 'OrderInquiryReminderForEscalation'
     */
    const VALUE_ORDER_INQUIRY_REMINDER_FOR_ESCALATION = 'OrderInquiryReminderForEscalation';
    /**
     * Constant for value 'OrderInquiryProvideShipmentInformation'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller alerting the seller that he/she should provide shipment tracking information to the buyer in order to expedite the closure of an Item Not Received inquiry, and to avoid the possibility
     * that the buyer will escalate the inquiry into an eBay Money Back Guarantee case.
     * @return string 'OrderInquiryProvideShipmentInformation'
     */
    const VALUE_ORDER_INQUIRY_PROVIDE_SHIPMENT_INFORMATION = 'OrderInquiryProvideShipmentInformation';
    /**
     * Constant for value 'OrderInquiryClosed'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when an Item Not Received inquiry against an order line item has closed.
     * @return string 'OrderInquiryClosed'
     */
    const VALUE_ORDER_INQUIRY_CLOSED = 'OrderInquiryClosed';
    /**
     * Constant for value 'OrderInquiryEscalatedToCase'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when an Item Not Received inquiry against an order line item has been escalated to an eBay Money Back Guarantee case.
     * @return string 'OrderInquiryEscalatedToCase'
     */
    const VALUE_ORDER_INQUIRY_ESCALATED_TO_CASE = 'OrderInquiryEscalatedToCase';
    /**
     * Constant for value 'ItemReadyForPickup'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer when an In-Store Pickup or Click and Collect order is ready to be picked up at the merchant's store.
     * @return string 'ItemReadyForPickup'
     */
    const VALUE_ITEM_READY_FOR_PICKUP = 'ItemReadyForPickup';
    /**
     * Constant for value 'ItemOutOfStock'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller when the quantity of a multiple-quantity, Good 'Til Cancelled, fixed-price listing has reached '0'. This notification will only be sent if the seller has the out-of-stock feature
     * turned on in My eBay Preferences.
     * @return string 'ItemOutOfStock'
     */
    const VALUE_ITEM_OUT_OF_STOCK = 'ItemOutOfStock';
    /**
     * Constant for value 'BuyerNoShow'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller if an eBay courier was unable to deliver an eBay Scheduled Delivery order to a buyer. This notification is only applicable for eBay Scheduled Delivery orders, which are only available
     * in the London (UK) area.
     * @return string 'BuyerNoShow'
     */
    const VALUE_BUYER_NO_SHOW = 'BuyerNoShow';
    /**
     * Constant for value 'WebnextMobilePhotoSync'
     * Meta information extracted from the WSDL
     * - documentation: This notification is no longer applicable.
     * @return string 'WebnextMobilePhotoSync'
     */
    const VALUE_WEBNEXT_MOBILE_PHOTO_SYNC = 'WebnextMobilePhotoSync';
    /**
     * Constant for value 'PaymentReminder'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer if payment is still due for an order.
     * @return string 'PaymentReminder'
     */
    const VALUE_PAYMENT_REMINDER = 'PaymentReminder';
    /**
     * Constant for value 'EBNOrderPickedUp'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller if an eBay courier has picked up an eBay On Demand Delivery order from a store for delivery to a buyer. This notification is only applicable for eBay On Demand Delivery orders, which
     * are only available in the London (UK) area.
     * @return string 'EBNOrderPickedUp'
     */
    const VALUE_EBNORDER_PICKED_UP = 'EBNOrderPickedUp';
    /**
     * Constant for value 'EBNOrderCanceled'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed seller if an eBay On Demand Delivery order has been cancelled. This notification is only applicable for eBay On Demand Delivery orders, which are only available in the London (UK) area.
     * @return string 'EBNOrderCanceled'
     */
    const VALUE_EBNORDER_CANCELED = 'EBNOrderCanceled';
    /**
     * Constant for value 'M2MMessageStatusChange'
     * Meta information extracted from the WSDL
     * - documentation: This notification is sent to a subscribed buyer or seller if the status of a member-to-member message has changed.
     * @return string 'M2MMessageStatusChange'
     */
    const VALUE_M_2_MMESSAGE_STATUS_CHANGE = 'M2MMessageStatusChange';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OUT_BID
     * @uses self::VALUE_END_OF_AUCTION
     * @uses self::VALUE_AUCTION_CHECKOUT_COMPLETE
     * @uses self::VALUE_CHECKOUT_BUYER_REQUESTS_TOTAL
     * @uses self::VALUE_FEEDBACK
     * @uses self::VALUE_FEEDBACK_FOR_SELLER
     * @uses self::VALUE_FIXED_PRICE_TRANSACTION
     * @uses self::VALUE_SECOND_CHANCE_OFFER
     * @uses self::VALUE_ASK_SELLER_QUESTION
     * @uses self::VALUE_ITEM_LISTED
     * @uses self::VALUE_ITEM_REVISED
     * @uses self::VALUE_BUYER_RESPONSE_DISPUTE
     * @uses self::VALUE_SELLER_OPENED_DISPUTE
     * @uses self::VALUE_SELLER_RESPONDED_TO_DISPUTE
     * @uses self::VALUE_SELLER_CLOSED_DISPUTE
     * @uses self::VALUE_BEST_OFFER
     * @uses self::VALUE_MY_MESSAGES_ALERT_HEADER
     * @uses self::VALUE_MY_MESSAGES_ALERT
     * @uses self::VALUE_MY_MESSAGESE_BAY_MESSAGE_HEADER
     * @uses self::VALUE_MY_MESSAGESE_BAY_MESSAGE
     * @uses self::VALUE_MY_MESSAGES_M_2_MMESSAGE_HEADER
     * @uses self::VALUE_MY_MESSAGES_M_2_MMESSAGE
     * @uses self::VALUE_INRBUYER_OPENED_DISPUTE
     * @uses self::VALUE_INRBUYER_RESPONDED_TO_DISPUTE
     * @uses self::VALUE_INRBUYER_CLOSED_DISPUTE
     * @uses self::VALUE_INRSELLER_RESPONDED_TO_DISPUTE
     * @uses self::VALUE_CHECKOUT
     * @uses self::VALUE_WATCHED_ITEM_ENDING_SOON
     * @uses self::VALUE_ITEM_CLOSED
     * @uses self::VALUE_ITEM_SUSPENDED
     * @uses self::VALUE_ITEM_SOLD
     * @uses self::VALUE_ITEM_EXTENDED
     * @uses self::VALUE_USER_IDCHANGED
     * @uses self::VALUE_EMAIL_ADDRESS_CHANGED
     * @uses self::VALUE_PASSWORD_CHANGED
     * @uses self::VALUE_PASSWORD_HINT_CHANGED
     * @uses self::VALUE_PAYMENT_DETAIL_CHANGED
     * @uses self::VALUE_ACCOUNT_SUSPENDED
     * @uses self::VALUE_ACCOUNT_SUMMARY
     * @uses self::VALUE_THIRD_PARTY_CART_CHECKOUT
     * @uses self::VALUE_ITEM_REVISED_ADD_CHARITY
     * @uses self::VALUE_ITEM_ADDED_TO_WATCH_LIST
     * @uses self::VALUE_ITEM_REMOVED_FROM_WATCH_LIST
     * @uses self::VALUE_ITEM_ADDED_TO_BID_GROUP
     * @uses self::VALUE_ITEM_REMOVED_FROM_BID_GROUP
     * @uses self::VALUE_FEEDBACK_LEFT
     * @uses self::VALUE_FEEDBACK_RECEIVED
     * @uses self::VALUE_FEEDBACK_STAR_CHANGED
     * @uses self::VALUE_BID_PLACED
     * @uses self::VALUE_BID_RECEIVED
     * @uses self::VALUE_ITEM_WON
     * @uses self::VALUE_ITEM_LOST
     * @uses self::VALUE_ITEM_UNSOLD
     * @uses self::VALUE_COUNTER_OFFER_RECEIVED
     * @uses self::VALUE_BEST_OFFER_DECLINED
     * @uses self::VALUE_BEST_OFFER_PLACED
     * @uses self::VALUE_ADD_TO_WATCH_LIST
     * @uses self::VALUE_PLACE_OFFER
     * @uses self::VALUE_REMOVE_FROM_WATCH_LIST
     * @uses self::VALUE_ADD_TO_BID_GROUP
     * @uses self::VALUE_REMOVE_FROM_BID_GROUP
     * @uses self::VALUE_ITEMS_CANCELED
     * @uses self::VALUE_TOKEN_REVOCATION
     * @uses self::VALUE_BULK_DATA_EXCHANGE_JOB_COMPLETED
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_ITEM_MARKED_SHIPPED
     * @uses self::VALUE_ITEM_MARKED_PAID
     * @uses self::VALUE_EBPMY_RESPONSE_DUE
     * @uses self::VALUE_EBPOTHER_PARTY_RESPONSE_DUE
     * @uses self::VALUE_EBPESCALATED_CASE
     * @uses self::VALUE_EBPAPPEALED_CASE
     * @uses self::VALUE_EBPMY_PAYMENT_DUE
     * @uses self::VALUE_EBPPAYMENT_DONE
     * @uses self::VALUE_EBPCLOSED_APPEAL
     * @uses self::VALUE_EBPCLOSED_CASE
     * @uses self::VALUE_MY_MESSAGES_HIGH_PRIORITY_MESSAGE
     * @uses self::VALUE_MY_MESSAGES_HIGH_PRIORITY_MESSAGE_HEADER
     * @uses self::VALUE_EBPON_HOLD_CASE
     * @uses self::VALUE_READY_TO_SHIP
     * @uses self::VALUE_READY_FOR_PAYOUT
     * @uses self::VALUE_BID_ITEM_ENDING_SOON
     * @uses self::VALUE_SHOPPING_CART_ITEM_ENDING_SOON
     * @uses self::VALUE_RETURN_CREATED
     * @uses self::VALUE_RETURN_WAITING_FOR_SELLER_INFO
     * @uses self::VALUE_RETURN_SELLER_INFO_OVERDUE
     * @uses self::VALUE_RETURN_SHIPPED
     * @uses self::VALUE_RETURN_DELIVERED
     * @uses self::VALUE_RETURN_REFUND_OVERDUE
     * @uses self::VALUE_RETURN_CLOSED
     * @uses self::VALUE_RETURN_ESCALATED
     * @uses self::VALUE_BUYER_CANCEL_REQUESTED
     * @uses self::VALUE_UNMATCHED_PAYMENT_RECEIVED
     * @uses self::VALUE_REFUND_SUCCESS
     * @uses self::VALUE_REFUND_FAILURE
     * @uses self::VALUE_ORDER_INQUIRY_OPENED
     * @uses self::VALUE_ORDER_INQUIRY_REMINDER_FOR_ESCALATION
     * @uses self::VALUE_ORDER_INQUIRY_PROVIDE_SHIPMENT_INFORMATION
     * @uses self::VALUE_ORDER_INQUIRY_CLOSED
     * @uses self::VALUE_ORDER_INQUIRY_ESCALATED_TO_CASE
     * @uses self::VALUE_ITEM_READY_FOR_PICKUP
     * @uses self::VALUE_ITEM_OUT_OF_STOCK
     * @uses self::VALUE_BUYER_NO_SHOW
     * @uses self::VALUE_WEBNEXT_MOBILE_PHOTO_SYNC
     * @uses self::VALUE_PAYMENT_REMINDER
     * @uses self::VALUE_EBNORDER_PICKED_UP
     * @uses self::VALUE_EBNORDER_CANCELED
     * @uses self::VALUE_M_2_MMESSAGE_STATUS_CHANGE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_OUT_BID,
            self::VALUE_END_OF_AUCTION,
            self::VALUE_AUCTION_CHECKOUT_COMPLETE,
            self::VALUE_CHECKOUT_BUYER_REQUESTS_TOTAL,
            self::VALUE_FEEDBACK,
            self::VALUE_FEEDBACK_FOR_SELLER,
            self::VALUE_FIXED_PRICE_TRANSACTION,
            self::VALUE_SECOND_CHANCE_OFFER,
            self::VALUE_ASK_SELLER_QUESTION,
            self::VALUE_ITEM_LISTED,
            self::VALUE_ITEM_REVISED,
            self::VALUE_BUYER_RESPONSE_DISPUTE,
            self::VALUE_SELLER_OPENED_DISPUTE,
            self::VALUE_SELLER_RESPONDED_TO_DISPUTE,
            self::VALUE_SELLER_CLOSED_DISPUTE,
            self::VALUE_BEST_OFFER,
            self::VALUE_MY_MESSAGES_ALERT_HEADER,
            self::VALUE_MY_MESSAGES_ALERT,
            self::VALUE_MY_MESSAGESE_BAY_MESSAGE_HEADER,
            self::VALUE_MY_MESSAGESE_BAY_MESSAGE,
            self::VALUE_MY_MESSAGES_M_2_MMESSAGE_HEADER,
            self::VALUE_MY_MESSAGES_M_2_MMESSAGE,
            self::VALUE_INRBUYER_OPENED_DISPUTE,
            self::VALUE_INRBUYER_RESPONDED_TO_DISPUTE,
            self::VALUE_INRBUYER_CLOSED_DISPUTE,
            self::VALUE_INRSELLER_RESPONDED_TO_DISPUTE,
            self::VALUE_CHECKOUT,
            self::VALUE_WATCHED_ITEM_ENDING_SOON,
            self::VALUE_ITEM_CLOSED,
            self::VALUE_ITEM_SUSPENDED,
            self::VALUE_ITEM_SOLD,
            self::VALUE_ITEM_EXTENDED,
            self::VALUE_USER_IDCHANGED,
            self::VALUE_EMAIL_ADDRESS_CHANGED,
            self::VALUE_PASSWORD_CHANGED,
            self::VALUE_PASSWORD_HINT_CHANGED,
            self::VALUE_PAYMENT_DETAIL_CHANGED,
            self::VALUE_ACCOUNT_SUSPENDED,
            self::VALUE_ACCOUNT_SUMMARY,
            self::VALUE_THIRD_PARTY_CART_CHECKOUT,
            self::VALUE_ITEM_REVISED_ADD_CHARITY,
            self::VALUE_ITEM_ADDED_TO_WATCH_LIST,
            self::VALUE_ITEM_REMOVED_FROM_WATCH_LIST,
            self::VALUE_ITEM_ADDED_TO_BID_GROUP,
            self::VALUE_ITEM_REMOVED_FROM_BID_GROUP,
            self::VALUE_FEEDBACK_LEFT,
            self::VALUE_FEEDBACK_RECEIVED,
            self::VALUE_FEEDBACK_STAR_CHANGED,
            self::VALUE_BID_PLACED,
            self::VALUE_BID_RECEIVED,
            self::VALUE_ITEM_WON,
            self::VALUE_ITEM_LOST,
            self::VALUE_ITEM_UNSOLD,
            self::VALUE_COUNTER_OFFER_RECEIVED,
            self::VALUE_BEST_OFFER_DECLINED,
            self::VALUE_BEST_OFFER_PLACED,
            self::VALUE_ADD_TO_WATCH_LIST,
            self::VALUE_PLACE_OFFER,
            self::VALUE_REMOVE_FROM_WATCH_LIST,
            self::VALUE_ADD_TO_BID_GROUP,
            self::VALUE_REMOVE_FROM_BID_GROUP,
            self::VALUE_ITEMS_CANCELED,
            self::VALUE_TOKEN_REVOCATION,
            self::VALUE_BULK_DATA_EXCHANGE_JOB_COMPLETED,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_ITEM_MARKED_SHIPPED,
            self::VALUE_ITEM_MARKED_PAID,
            self::VALUE_EBPMY_RESPONSE_DUE,
            self::VALUE_EBPOTHER_PARTY_RESPONSE_DUE,
            self::VALUE_EBPESCALATED_CASE,
            self::VALUE_EBPAPPEALED_CASE,
            self::VALUE_EBPMY_PAYMENT_DUE,
            self::VALUE_EBPPAYMENT_DONE,
            self::VALUE_EBPCLOSED_APPEAL,
            self::VALUE_EBPCLOSED_CASE,
            self::VALUE_MY_MESSAGES_HIGH_PRIORITY_MESSAGE,
            self::VALUE_MY_MESSAGES_HIGH_PRIORITY_MESSAGE_HEADER,
            self::VALUE_EBPON_HOLD_CASE,
            self::VALUE_READY_TO_SHIP,
            self::VALUE_READY_FOR_PAYOUT,
            self::VALUE_BID_ITEM_ENDING_SOON,
            self::VALUE_SHOPPING_CART_ITEM_ENDING_SOON,
            self::VALUE_RETURN_CREATED,
            self::VALUE_RETURN_WAITING_FOR_SELLER_INFO,
            self::VALUE_RETURN_SELLER_INFO_OVERDUE,
            self::VALUE_RETURN_SHIPPED,
            self::VALUE_RETURN_DELIVERED,
            self::VALUE_RETURN_REFUND_OVERDUE,
            self::VALUE_RETURN_CLOSED,
            self::VALUE_RETURN_ESCALATED,
            self::VALUE_BUYER_CANCEL_REQUESTED,
            self::VALUE_UNMATCHED_PAYMENT_RECEIVED,
            self::VALUE_REFUND_SUCCESS,
            self::VALUE_REFUND_FAILURE,
            self::VALUE_ORDER_INQUIRY_OPENED,
            self::VALUE_ORDER_INQUIRY_REMINDER_FOR_ESCALATION,
            self::VALUE_ORDER_INQUIRY_PROVIDE_SHIPMENT_INFORMATION,
            self::VALUE_ORDER_INQUIRY_CLOSED,
            self::VALUE_ORDER_INQUIRY_ESCALATED_TO_CASE,
            self::VALUE_ITEM_READY_FOR_PICKUP,
            self::VALUE_ITEM_OUT_OF_STOCK,
            self::VALUE_BUYER_NO_SHOW,
            self::VALUE_WEBNEXT_MOBILE_PHOTO_SYNC,
            self::VALUE_PAYMENT_REMINDER,
            self::VALUE_EBNORDER_PICKED_UP,
            self::VALUE_EBNORDER_CANCELED,
            self::VALUE_M_2_MMESSAGE_STATUS_CHANGE,
        ];
    }
}
