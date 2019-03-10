<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for NotificationEventTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains the complete list of platform notifications that can be sent out to subscribed users, servers, or applications. Some notifications are only sent to buyers or sellers, and some are sent to both buyers and
 * sellers.
 * @subpackage Enumerations
 */
class NotificationEventTypeCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OutBid'
     * @return string 'OutBid'
     */
    const VALUE_OUT_BID = 'OutBid';
    /**
     * Constant for value 'EndOfAuction'
     * @return string 'EndOfAuction'
     */
    const VALUE_END_OF_AUCTION = 'EndOfAuction';
    /**
     * Constant for value 'AuctionCheckoutComplete'
     * @return string 'AuctionCheckoutComplete'
     */
    const VALUE_AUCTION_CHECKOUT_COMPLETE = 'AuctionCheckoutComplete';
    /**
     * Constant for value 'CheckoutBuyerRequestsTotal'
     * @return string 'CheckoutBuyerRequestsTotal'
     */
    const VALUE_CHECKOUT_BUYER_REQUESTS_TOTAL = 'CheckoutBuyerRequestsTotal';
    /**
     * Constant for value 'Feedback'
     * @return string 'Feedback'
     */
    const VALUE_FEEDBACK = 'Feedback';
    /**
     * Constant for value 'FeedbackForSeller'
     * @return string 'FeedbackForSeller'
     */
    const VALUE_FEEDBACK_FOR_SELLER = 'FeedbackForSeller';
    /**
     * Constant for value 'FixedPriceTransaction'
     * @return string 'FixedPriceTransaction'
     */
    const VALUE_FIXED_PRICE_TRANSACTION = 'FixedPriceTransaction';
    /**
     * Constant for value 'SecondChanceOffer'
     * @return string 'SecondChanceOffer'
     */
    const VALUE_SECOND_CHANCE_OFFER = 'SecondChanceOffer';
    /**
     * Constant for value 'AskSellerQuestion'
     * @return string 'AskSellerQuestion'
     */
    const VALUE_ASK_SELLER_QUESTION = 'AskSellerQuestion';
    /**
     * Constant for value 'ItemListed'
     * @return string 'ItemListed'
     */
    const VALUE_ITEM_LISTED = 'ItemListed';
    /**
     * Constant for value 'ItemRevised'
     * @return string 'ItemRevised'
     */
    const VALUE_ITEM_REVISED = 'ItemRevised';
    /**
     * Constant for value 'BuyerResponseDispute'
     * @return string 'BuyerResponseDispute'
     */
    const VALUE_BUYER_RESPONSE_DISPUTE = 'BuyerResponseDispute';
    /**
     * Constant for value 'SellerOpenedDispute'
     * @return string 'SellerOpenedDispute'
     */
    const VALUE_SELLER_OPENED_DISPUTE = 'SellerOpenedDispute';
    /**
     * Constant for value 'SellerRespondedToDispute'
     * @return string 'SellerRespondedToDispute'
     */
    const VALUE_SELLER_RESPONDED_TO_DISPUTE = 'SellerRespondedToDispute';
    /**
     * Constant for value 'SellerClosedDispute'
     * @return string 'SellerClosedDispute'
     */
    const VALUE_SELLER_CLOSED_DISPUTE = 'SellerClosedDispute';
    /**
     * Constant for value 'BestOffer'
     * @return string 'BestOffer'
     */
    const VALUE_BEST_OFFER = 'BestOffer';
    /**
     * Constant for value 'MyMessagesAlertHeader'
     * @return string 'MyMessagesAlertHeader'
     */
    const VALUE_MY_MESSAGES_ALERT_HEADER = 'MyMessagesAlertHeader';
    /**
     * Constant for value 'MyMessagesAlert'
     * @return string 'MyMessagesAlert'
     */
    const VALUE_MY_MESSAGES_ALERT = 'MyMessagesAlert';
    /**
     * Constant for value 'MyMessageseBayMessageHeader'
     * @return string 'MyMessageseBayMessageHeader'
     */
    const VALUE_MY_MESSAGESE_BAY_MESSAGE_HEADER = 'MyMessageseBayMessageHeader';
    /**
     * Constant for value 'MyMessageseBayMessage'
     * @return string 'MyMessageseBayMessage'
     */
    const VALUE_MY_MESSAGESE_BAY_MESSAGE = 'MyMessageseBayMessage';
    /**
     * Constant for value 'MyMessagesM2MMessageHeader'
     * @return string 'MyMessagesM2MMessageHeader'
     */
    const VALUE_MY_MESSAGES_M_2_MMESSAGE_HEADER = 'MyMessagesM2MMessageHeader';
    /**
     * Constant for value 'MyMessagesM2MMessage'
     * @return string 'MyMessagesM2MMessage'
     */
    const VALUE_MY_MESSAGES_M_2_MMESSAGE = 'MyMessagesM2MMessage';
    /**
     * Constant for value 'INRBuyerOpenedDispute'
     * @return string 'INRBuyerOpenedDispute'
     */
    const VALUE_INRBUYER_OPENED_DISPUTE = 'INRBuyerOpenedDispute';
    /**
     * Constant for value 'INRBuyerRespondedToDispute'
     * @return string 'INRBuyerRespondedToDispute'
     */
    const VALUE_INRBUYER_RESPONDED_TO_DISPUTE = 'INRBuyerRespondedToDispute';
    /**
     * Constant for value 'INRBuyerClosedDispute'
     * @return string 'INRBuyerClosedDispute'
     */
    const VALUE_INRBUYER_CLOSED_DISPUTE = 'INRBuyerClosedDispute';
    /**
     * Constant for value 'INRSellerRespondedToDispute'
     * @return string 'INRSellerRespondedToDispute'
     */
    const VALUE_INRSELLER_RESPONDED_TO_DISPUTE = 'INRSellerRespondedToDispute';
    /**
     * Constant for value 'Checkout'
     * @return string 'Checkout'
     */
    const VALUE_CHECKOUT = 'Checkout';
    /**
     * Constant for value 'WatchedItemEndingSoon'
     * @return string 'WatchedItemEndingSoon'
     */
    const VALUE_WATCHED_ITEM_ENDING_SOON = 'WatchedItemEndingSoon';
    /**
     * Constant for value 'ItemClosed'
     * @return string 'ItemClosed'
     */
    const VALUE_ITEM_CLOSED = 'ItemClosed';
    /**
     * Constant for value 'ItemSuspended'
     * @return string 'ItemSuspended'
     */
    const VALUE_ITEM_SUSPENDED = 'ItemSuspended';
    /**
     * Constant for value 'ItemSold'
     * @return string 'ItemSold'
     */
    const VALUE_ITEM_SOLD = 'ItemSold';
    /**
     * Constant for value 'ItemExtended'
     * @return string 'ItemExtended'
     */
    const VALUE_ITEM_EXTENDED = 'ItemExtended';
    /**
     * Constant for value 'UserIDChanged'
     * @return string 'UserIDChanged'
     */
    const VALUE_USER_IDCHANGED = 'UserIDChanged';
    /**
     * Constant for value 'EmailAddressChanged'
     * @return string 'EmailAddressChanged'
     */
    const VALUE_EMAIL_ADDRESS_CHANGED = 'EmailAddressChanged';
    /**
     * Constant for value 'PasswordChanged'
     * @return string 'PasswordChanged'
     */
    const VALUE_PASSWORD_CHANGED = 'PasswordChanged';
    /**
     * Constant for value 'PasswordHintChanged'
     * @return string 'PasswordHintChanged'
     */
    const VALUE_PASSWORD_HINT_CHANGED = 'PasswordHintChanged';
    /**
     * Constant for value 'PaymentDetailChanged'
     * @return string 'PaymentDetailChanged'
     */
    const VALUE_PAYMENT_DETAIL_CHANGED = 'PaymentDetailChanged';
    /**
     * Constant for value 'AccountSuspended'
     * @return string 'AccountSuspended'
     */
    const VALUE_ACCOUNT_SUSPENDED = 'AccountSuspended';
    /**
     * Constant for value 'AccountSummary'
     * @return string 'AccountSummary'
     */
    const VALUE_ACCOUNT_SUMMARY = 'AccountSummary';
    /**
     * Constant for value 'ThirdPartyCartCheckout'
     * @return string 'ThirdPartyCartCheckout'
     */
    const VALUE_THIRD_PARTY_CART_CHECKOUT = 'ThirdPartyCartCheckout';
    /**
     * Constant for value 'ItemRevisedAddCharity'
     * @return string 'ItemRevisedAddCharity'
     */
    const VALUE_ITEM_REVISED_ADD_CHARITY = 'ItemRevisedAddCharity';
    /**
     * Constant for value 'ItemAddedToWatchList'
     * @return string 'ItemAddedToWatchList'
     */
    const VALUE_ITEM_ADDED_TO_WATCH_LIST = 'ItemAddedToWatchList';
    /**
     * Constant for value 'ItemRemovedFromWatchList'
     * @return string 'ItemRemovedFromWatchList'
     */
    const VALUE_ITEM_REMOVED_FROM_WATCH_LIST = 'ItemRemovedFromWatchList';
    /**
     * Constant for value 'ItemAddedToBidGroup'
     * @return string 'ItemAddedToBidGroup'
     */
    const VALUE_ITEM_ADDED_TO_BID_GROUP = 'ItemAddedToBidGroup';
    /**
     * Constant for value 'ItemRemovedFromBidGroup'
     * @return string 'ItemRemovedFromBidGroup'
     */
    const VALUE_ITEM_REMOVED_FROM_BID_GROUP = 'ItemRemovedFromBidGroup';
    /**
     * Constant for value 'FeedbackLeft'
     * @return string 'FeedbackLeft'
     */
    const VALUE_FEEDBACK_LEFT = 'FeedbackLeft';
    /**
     * Constant for value 'FeedbackReceived'
     * @return string 'FeedbackReceived'
     */
    const VALUE_FEEDBACK_RECEIVED = 'FeedbackReceived';
    /**
     * Constant for value 'FeedbackStarChanged'
     * @return string 'FeedbackStarChanged'
     */
    const VALUE_FEEDBACK_STAR_CHANGED = 'FeedbackStarChanged';
    /**
     * Constant for value 'BidPlaced'
     * @return string 'BidPlaced'
     */
    const VALUE_BID_PLACED = 'BidPlaced';
    /**
     * Constant for value 'BidReceived'
     * @return string 'BidReceived'
     */
    const VALUE_BID_RECEIVED = 'BidReceived';
    /**
     * Constant for value 'ItemWon'
     * @return string 'ItemWon'
     */
    const VALUE_ITEM_WON = 'ItemWon';
    /**
     * Constant for value 'ItemLost'
     * @return string 'ItemLost'
     */
    const VALUE_ITEM_LOST = 'ItemLost';
    /**
     * Constant for value 'ItemUnsold'
     * @return string 'ItemUnsold'
     */
    const VALUE_ITEM_UNSOLD = 'ItemUnsold';
    /**
     * Constant for value 'CounterOfferReceived'
     * @return string 'CounterOfferReceived'
     */
    const VALUE_COUNTER_OFFER_RECEIVED = 'CounterOfferReceived';
    /**
     * Constant for value 'BestOfferDeclined'
     * @return string 'BestOfferDeclined'
     */
    const VALUE_BEST_OFFER_DECLINED = 'BestOfferDeclined';
    /**
     * Constant for value 'BestOfferPlaced'
     * @return string 'BestOfferPlaced'
     */
    const VALUE_BEST_OFFER_PLACED = 'BestOfferPlaced';
    /**
     * Constant for value 'AddToWatchList'
     * @return string 'AddToWatchList'
     */
    const VALUE_ADD_TO_WATCH_LIST = 'AddToWatchList';
    /**
     * Constant for value 'PlaceOffer'
     * @return string 'PlaceOffer'
     */
    const VALUE_PLACE_OFFER = 'PlaceOffer';
    /**
     * Constant for value 'RemoveFromWatchList'
     * @return string 'RemoveFromWatchList'
     */
    const VALUE_REMOVE_FROM_WATCH_LIST = 'RemoveFromWatchList';
    /**
     * Constant for value 'AddToBidGroup'
     * @return string 'AddToBidGroup'
     */
    const VALUE_ADD_TO_BID_GROUP = 'AddToBidGroup';
    /**
     * Constant for value 'RemoveFromBidGroup'
     * @return string 'RemoveFromBidGroup'
     */
    const VALUE_REMOVE_FROM_BID_GROUP = 'RemoveFromBidGroup';
    /**
     * Constant for value 'ItemsCanceled'
     * @return string 'ItemsCanceled'
     */
    const VALUE_ITEMS_CANCELED = 'ItemsCanceled';
    /**
     * Constant for value 'TokenRevocation'
     * @return string 'TokenRevocation'
     */
    const VALUE_TOKEN_REVOCATION = 'TokenRevocation';
    /**
     * Constant for value 'BulkDataExchangeJobCompleted'
     * @return string 'BulkDataExchangeJobCompleted'
     */
    const VALUE_BULK_DATA_EXCHANGE_JOB_COMPLETED = 'BulkDataExchangeJobCompleted';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'ItemMarkedShipped'
     * @return string 'ItemMarkedShipped'
     */
    const VALUE_ITEM_MARKED_SHIPPED = 'ItemMarkedShipped';
    /**
     * Constant for value 'ItemMarkedPaid'
     * @return string 'ItemMarkedPaid'
     */
    const VALUE_ITEM_MARKED_PAID = 'ItemMarkedPaid';
    /**
     * Constant for value 'EBPMyResponseDue'
     * @return string 'EBPMyResponseDue'
     */
    const VALUE_EBPMY_RESPONSE_DUE = 'EBPMyResponseDue';
    /**
     * Constant for value 'EBPOtherPartyResponseDue'
     * @return string 'EBPOtherPartyResponseDue'
     */
    const VALUE_EBPOTHER_PARTY_RESPONSE_DUE = 'EBPOtherPartyResponseDue';
    /**
     * Constant for value 'EBPEscalatedCase'
     * @return string 'EBPEscalatedCase'
     */
    const VALUE_EBPESCALATED_CASE = 'EBPEscalatedCase';
    /**
     * Constant for value 'EBPAppealedCase'
     * @return string 'EBPAppealedCase'
     */
    const VALUE_EBPAPPEALED_CASE = 'EBPAppealedCase';
    /**
     * Constant for value 'EBPMyPaymentDue'
     * @return string 'EBPMyPaymentDue'
     */
    const VALUE_EBPMY_PAYMENT_DUE = 'EBPMyPaymentDue';
    /**
     * Constant for value 'EBPPaymentDone'
     * @return string 'EBPPaymentDone'
     */
    const VALUE_EBPPAYMENT_DONE = 'EBPPaymentDone';
    /**
     * Constant for value 'EBPClosedAppeal'
     * @return string 'EBPClosedAppeal'
     */
    const VALUE_EBPCLOSED_APPEAL = 'EBPClosedAppeal';
    /**
     * Constant for value 'EBPClosedCase'
     * @return string 'EBPClosedCase'
     */
    const VALUE_EBPCLOSED_CASE = 'EBPClosedCase';
    /**
     * Constant for value 'MyMessagesHighPriorityMessage'
     * @return string 'MyMessagesHighPriorityMessage'
     */
    const VALUE_MY_MESSAGES_HIGH_PRIORITY_MESSAGE = 'MyMessagesHighPriorityMessage';
    /**
     * Constant for value 'MyMessagesHighPriorityMessageHeader'
     * @return string 'MyMessagesHighPriorityMessageHeader'
     */
    const VALUE_MY_MESSAGES_HIGH_PRIORITY_MESSAGE_HEADER = 'MyMessagesHighPriorityMessageHeader';
    /**
     * Constant for value 'EBPOnHoldCase'
     * @return string 'EBPOnHoldCase'
     */
    const VALUE_EBPON_HOLD_CASE = 'EBPOnHoldCase';
    /**
     * Constant for value 'ReadyToShip'
     * @return string 'ReadyToShip'
     */
    const VALUE_READY_TO_SHIP = 'ReadyToShip';
    /**
     * Constant for value 'ReadyForPayout'
     * @return string 'ReadyForPayout'
     */
    const VALUE_READY_FOR_PAYOUT = 'ReadyForPayout';
    /**
     * Constant for value 'BidItemEndingSoon'
     * @return string 'BidItemEndingSoon'
     */
    const VALUE_BID_ITEM_ENDING_SOON = 'BidItemEndingSoon';
    /**
     * Constant for value 'ShoppingCartItemEndingSoon'
     * @return string 'ShoppingCartItemEndingSoon'
     */
    const VALUE_SHOPPING_CART_ITEM_ENDING_SOON = 'ShoppingCartItemEndingSoon';
    /**
     * Constant for value 'ReturnCreated'
     * @return string 'ReturnCreated'
     */
    const VALUE_RETURN_CREATED = 'ReturnCreated';
    /**
     * Constant for value 'ReturnWaitingForSellerInfo'
     * @return string 'ReturnWaitingForSellerInfo'
     */
    const VALUE_RETURN_WAITING_FOR_SELLER_INFO = 'ReturnWaitingForSellerInfo';
    /**
     * Constant for value 'ReturnSellerInfoOverdue'
     * @return string 'ReturnSellerInfoOverdue'
     */
    const VALUE_RETURN_SELLER_INFO_OVERDUE = 'ReturnSellerInfoOverdue';
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
     * Constant for value 'ReturnRefundOverdue'
     * @return string 'ReturnRefundOverdue'
     */
    const VALUE_RETURN_REFUND_OVERDUE = 'ReturnRefundOverdue';
    /**
     * Constant for value 'ReturnClosed'
     * @return string 'ReturnClosed'
     */
    const VALUE_RETURN_CLOSED = 'ReturnClosed';
    /**
     * Constant for value 'ReturnEscalated'
     * @return string 'ReturnEscalated'
     */
    const VALUE_RETURN_ESCALATED = 'ReturnEscalated';
    /**
     * Constant for value 'BuyerCancelRequested'
     * @return string 'BuyerCancelRequested'
     */
    const VALUE_BUYER_CANCEL_REQUESTED = 'BuyerCancelRequested';
    /**
     * Constant for value 'UnmatchedPaymentReceived'
     * @return string 'UnmatchedPaymentReceived'
     */
    const VALUE_UNMATCHED_PAYMENT_RECEIVED = 'UnmatchedPaymentReceived';
    /**
     * Constant for value 'RefundSuccess'
     * @return string 'RefundSuccess'
     */
    const VALUE_REFUND_SUCCESS = 'RefundSuccess';
    /**
     * Constant for value 'RefundFailure'
     * @return string 'RefundFailure'
     */
    const VALUE_REFUND_FAILURE = 'RefundFailure';
    /**
     * Constant for value 'OrderInquiryOpened'
     * @return string 'OrderInquiryOpened'
     */
    const VALUE_ORDER_INQUIRY_OPENED = 'OrderInquiryOpened';
    /**
     * Constant for value 'OrderInquiryReminderForEscalation'
     * @return string 'OrderInquiryReminderForEscalation'
     */
    const VALUE_ORDER_INQUIRY_REMINDER_FOR_ESCALATION = 'OrderInquiryReminderForEscalation';
    /**
     * Constant for value 'OrderInquiryProvideShipmentInformation'
     * @return string 'OrderInquiryProvideShipmentInformation'
     */
    const VALUE_ORDER_INQUIRY_PROVIDE_SHIPMENT_INFORMATION = 'OrderInquiryProvideShipmentInformation';
    /**
     * Constant for value 'OrderInquiryClosed'
     * @return string 'OrderInquiryClosed'
     */
    const VALUE_ORDER_INQUIRY_CLOSED = 'OrderInquiryClosed';
    /**
     * Constant for value 'OrderInquiryEscalatedToCase'
     * @return string 'OrderInquiryEscalatedToCase'
     */
    const VALUE_ORDER_INQUIRY_ESCALATED_TO_CASE = 'OrderInquiryEscalatedToCase';
    /**
     * Constant for value 'ItemReadyForPickup'
     * @return string 'ItemReadyForPickup'
     */
    const VALUE_ITEM_READY_FOR_PICKUP = 'ItemReadyForPickup';
    /**
     * Constant for value 'ItemOutOfStock'
     * @return string 'ItemOutOfStock'
     */
    const VALUE_ITEM_OUT_OF_STOCK = 'ItemOutOfStock';
    /**
     * Constant for value 'BuyerNoShow'
     * @return string 'BuyerNoShow'
     */
    const VALUE_BUYER_NO_SHOW = 'BuyerNoShow';
    /**
     * Constant for value 'WebnextMobilePhotoSync'
     * @return string 'WebnextMobilePhotoSync'
     */
    const VALUE_WEBNEXT_MOBILE_PHOTO_SYNC = 'WebnextMobilePhotoSync';
    /**
     * Constant for value 'PaymentReminder'
     * @return string 'PaymentReminder'
     */
    const VALUE_PAYMENT_REMINDER = 'PaymentReminder';
    /**
     * Constant for value 'EBNOrderPickedUp'
     * @return string 'EBNOrderPickedUp'
     */
    const VALUE_EBNORDER_PICKED_UP = 'EBNOrderPickedUp';
    /**
     * Constant for value 'EBNOrderCanceled'
     * @return string 'EBNOrderCanceled'
     */
    const VALUE_EBNORDER_CANCELED = 'EBNOrderCanceled';
    /**
     * Constant for value 'M2MMessageStatusChange'
     * @return string 'M2MMessageStatusChange'
     */
    const VALUE_M_2_MMESSAGE_STATUS_CHANGE = 'M2MMessageStatusChange';
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
    public static function getValidValues()
    {
        return array(
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
