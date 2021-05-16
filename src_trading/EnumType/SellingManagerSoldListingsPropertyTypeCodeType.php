<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerSoldListingsPropertyTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates the filters for Selling Manager sold listings.
 * @subpackage Enumerations
 */
class SellingManagerSoldListingsPropertyTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotPaidNotShipped'
     * Meta information extracted from the WSDL
     * - documentation: Item is not paid and not shipped.
     * @return string 'NotPaidNotShipped'
     */
    const VALUE_NOT_PAID_NOT_SHIPPED = 'NotPaidNotShipped';
    /**
     * Constant for value 'PaidNotShipped'
     * Meta information extracted from the WSDL
     * - documentation: Item is paid but not shipped.
     * @return string 'PaidNotShipped'
     */
    const VALUE_PAID_NOT_SHIPPED = 'PaidNotShipped';
    /**
     * Constant for value 'PrintShippingLabel'
     * Meta information extracted from the WSDL
     * - documentation: Item is paid but not shipped.
     * @return string 'PrintShippingLabel'
     */
    const VALUE_PRINT_SHIPPING_LABEL = 'PrintShippingLabel';
    /**
     * Constant for value 'PaidShipped'
     * Meta information extracted from the WSDL
     * - documentation: Item is paid for and is shipped.
     * @return string 'PaidShipped'
     */
    const VALUE_PAID_SHIPPED = 'PaidShipped';
    /**
     * Constant for value 'PaidNoFeedback'
     * Meta information extracted from the WSDL
     * - documentation: An alert has been issued about a listing that is paid with no feedback left.
     * @return string 'PaidNoFeedback'
     */
    const VALUE_PAID_NO_FEEDBACK = 'PaidNoFeedback';
    /**
     * Constant for value 'PaymentReminderSendError'
     * Meta information extracted from the WSDL
     * - documentation: Payment Reminder emails not sent due to system error.
     * @return string 'PaymentReminderSendError'
     */
    const VALUE_PAYMENT_REMINDER_SEND_ERROR = 'PaymentReminderSendError';
    /**
     * Constant for value 'PaymentReceivedNotificationSendError'
     * Meta information extracted from the WSDL
     * - documentation: Payment received notification not sent due to system error.
     * @return string 'PaymentReceivedNotificationSendError'
     */
    const VALUE_PAYMENT_RECEIVED_NOTIFICATION_SEND_ERROR = 'PaymentReceivedNotificationSendError';
    /**
     * Constant for value 'RequestForShippingAddressSendError'
     * Meta information extracted from the WSDL
     * - documentation: Request shipping address emails not sent due to system error.
     * @return string 'RequestForShippingAddressSendError'
     */
    const VALUE_REQUEST_FOR_SHIPPING_ADDRESS_SEND_ERROR = 'RequestForShippingAddressSendError';
    /**
     * Constant for value 'ShippingNotificationSendError'
     * Meta information extracted from the WSDL
     * - documentation: Request shipping address emails not sent due to system error.
     * @return string 'ShippingNotificationSendError'
     */
    const VALUE_SHIPPING_NOTIFICATION_SEND_ERROR = 'ShippingNotificationSendError';
    /**
     * Constant for value 'PersonalizedEmailsSendError'
     * Meta information extracted from the WSDL
     * - documentation: Personalized emails not sent due to system error.
     * @return string 'PersonalizedEmailsSendError'
     */
    const VALUE_PERSONALIZED_EMAILS_SEND_ERROR = 'PersonalizedEmailsSendError';
    /**
     * Constant for value 'WinningBuyerNotificationSendError'
     * Meta information extracted from the WSDL
     * - documentation: Winning Buyer Notification not sent due to system error.
     * @return string 'WinningBuyerNotificationSendError'
     */
    const VALUE_WINNING_BUYER_NOTIFICATION_SEND_ERROR = 'WinningBuyerNotificationSendError';
    /**
     * Constant for value 'FeeCreditRequest'
     * Meta information extracted from the WSDL
     * - documentation: Final value fee credit requests can be filed.
     * @return string 'FeeCreditRequest'
     */
    const VALUE_FEE_CREDIT_REQUEST = 'FeeCreditRequest';
    /**
     * Constant for value 'PayPalPayment'
     * Meta information extracted from the WSDL
     * - documentation: If true, indicates that the PayPal Payment Received alert has been issued.
     * @return string 'PayPalPayment'
     */
    const VALUE_PAY_PAL_PAYMENT = 'PayPalPayment';
    /**
     * Constant for value 'FeedbackMessageNotSent'
     * Meta information extracted from the WSDL
     * - documentation: Automated feedback message is not sent.
     * @return string 'FeedbackMessageNotSent'
     */
    const VALUE_FEEDBACK_MESSAGE_NOT_SENT = 'FeedbackMessageNotSent';
    /**
     * Constant for value 'FeedbackReminderSendError'
     * Meta information extracted from the WSDL
     * - documentation: Feedback Reminder emails not sent due to system error.
     * @return string 'FeedbackReminderSendError'
     */
    const VALUE_FEEDBACK_REMINDER_SEND_ERROR = 'FeedbackReminderSendError';
    /**
     * Constant for value 'NotShipped'
     * Meta information extracted from the WSDL
     * - documentation: Item is not shipped.
     * @return string 'NotShipped'
     */
    const VALUE_NOT_SHIPPED = 'NotShipped';
    /**
     * Constant for value 'UnpaidItemReminder'
     * Meta information extracted from the WSDL
     * - documentation: Listing eligible for unpaid item reminder
     * @return string 'UnpaidItemReminder'
     */
    const VALUE_UNPAID_ITEM_REMINDER = 'UnpaidItemReminder';
    /**
     * Constant for value 'EscrowCancelled'
     * Meta information extracted from the WSDL
     * - documentation: Escrow status is Cancelled.
     * @return string 'EscrowCancelled'
     */
    const VALUE_ESCROW_CANCELLED = 'EscrowCancelled';
    /**
     * Constant for value 'EscrowCompleted'
     * Meta information extracted from the WSDL
     * - documentation: Escrow status is Completed.
     * @return string 'EscrowCompleted'
     */
    const VALUE_ESCROW_COMPLETED = 'EscrowCompleted';
    /**
     * Constant for value 'EscrowInitiated'
     * Meta information extracted from the WSDL
     * - documentation: Escrow status is Initiated.
     * @return string 'EscrowInitiated'
     */
    const VALUE_ESCROW_INITIATED = 'EscrowInitiated';
    /**
     * Constant for value 'EscrowManageRefund'
     * Meta information extracted from the WSDL
     * - documentation: Escrow status is in refund state.
     * @return string 'EscrowManageRefund'
     */
    const VALUE_ESCROW_MANAGE_REFUND = 'EscrowManageRefund';
    /**
     * Constant for value 'EscrowReleasePayment'
     * Meta information extracted from the WSDL
     * - documentation: Item is shipped and Escrow status is in Release payment.
     * @return string 'EscrowReleasePayment'
     */
    const VALUE_ESCROW_RELEASE_PAYMENT = 'EscrowReleasePayment';
    /**
     * Constant for value 'EscrowShipToBuyer'
     * Meta information extracted from the WSDL
     * - documentation: Payment is confirmed and item can be shipped to buyer.
     * @return string 'EscrowShipToBuyer'
     */
    const VALUE_ESCROW_SHIP_TO_BUYER = 'EscrowShipToBuyer';
    /**
     * Constant for value 'EscrowSoldAll'
     * Meta information extracted from the WSDL
     * - documentation: All Escrow states.
     * @return string 'EscrowSoldAll'
     */
    const VALUE_ESCROW_SOLD_ALL = 'EscrowSoldAll';
    /**
     * Constant for value 'ShippedAndAwaitingFeedback'
     * Meta information extracted from the WSDL
     * - documentation: Item is shipped and feedback is not yet received.
     * @return string 'ShippedAndAwaitingFeedback'
     */
    const VALUE_SHIPPED_AND_AWAITING_FEEDBACK = 'ShippedAndAwaitingFeedback';
    /**
     * Constant for value 'InternationalSale'
     * Meta information extracted from the WSDL
     * - documentation: New international sale.
     * @return string 'InternationalSale'
     */
    const VALUE_INTERNATIONAL_SALE = 'InternationalSale';
    /**
     * Constant for value 'eBayGivingWorksDonationOwed'
     * Meta information extracted from the WSDL
     * - documentation: Charity filter.
     * @return string 'eBayGivingWorksDonationOwed'
     */
    const VALUE_E_BAY_GIVING_WORKS_DONATION_OWED = 'eBayGivingWorksDonationOwed';
    /**
     * Constant for value 'PaymentOverDue'
     * Meta information extracted from the WSDL
     * - documentation: Payment is overdue.
     * @return string 'PaymentOverDue'
     */
    const VALUE_PAYMENT_OVER_DUE = 'PaymentOverDue';
    /**
     * Constant for value 'PadiWithPaisaPayEscrow'
     * Meta information extracted from the WSDL
     * - documentation: Payment is done with PaisaPay Escrow.
     * @return string 'PadiWithPaisaPayEscrow'
     */
    const VALUE_PADI_WITH_PAISA_PAY_ESCROW = 'PadiWithPaisaPayEscrow';
    /**
     * Constant for value 'CustomEmailTemplate1SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 1.
     * @return string 'CustomEmailTemplate1SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_1_SEND_ERROR = 'CustomEmailTemplate1SendError';
    /**
     * Constant for value 'CustomEmailTemplate2SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 2.
     * @return string 'CustomEmailTemplate2SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_2_SEND_ERROR = 'CustomEmailTemplate2SendError';
    /**
     * Constant for value 'CustomEmailTemplate3SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 3.
     * @return string 'CustomEmailTemplate3SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_3_SEND_ERROR = 'CustomEmailTemplate3SendError';
    /**
     * Constant for value 'CustomEmailTemplate4SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 4.
     * @return string 'CustomEmailTemplate4SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_4_SEND_ERROR = 'CustomEmailTemplate4SendError';
    /**
     * Constant for value 'CustomEmailTemplate5SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 5.
     * @return string 'CustomEmailTemplate5SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_5_SEND_ERROR = 'CustomEmailTemplate5SendError';
    /**
     * Constant for value 'CustomEmailTemplate6SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 6.
     * @return string 'CustomEmailTemplate6SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_6_SEND_ERROR = 'CustomEmailTemplate6SendError';
    /**
     * Constant for value 'CustomEmailTemplate7SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 7.
     * @return string 'CustomEmailTemplate7SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_7_SEND_ERROR = 'CustomEmailTemplate7SendError';
    /**
     * Constant for value 'CustomEmailTemplate8SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 8.
     * @return string 'CustomEmailTemplate8SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_8_SEND_ERROR = 'CustomEmailTemplate8SendError';
    /**
     * Constant for value 'CustomEmailTemplate9SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 9.
     * @return string 'CustomEmailTemplate9SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_9_SEND_ERROR = 'CustomEmailTemplate9SendError';
    /**
     * Constant for value 'CustomEmailTemplate10SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 10.
     * @return string 'CustomEmailTemplate10SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_10_SEND_ERROR = 'CustomEmailTemplate10SendError';
    /**
     * Constant for value 'CustomEmailTemplate11SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 11.
     * @return string 'CustomEmailTemplate11SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_11_SEND_ERROR = 'CustomEmailTemplate11SendError';
    /**
     * Constant for value 'CustomEmailTemplate12SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 12.
     * @return string 'CustomEmailTemplate12SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_12_SEND_ERROR = 'CustomEmailTemplate12SendError';
    /**
     * Constant for value 'CustomEmailTemplate13SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 13.
     * @return string 'CustomEmailTemplate13SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_13_SEND_ERROR = 'CustomEmailTemplate13SendError';
    /**
     * Constant for value 'CustomEmailTemplate14SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 14.
     * @return string 'CustomEmailTemplate14SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_14_SEND_ERROR = 'CustomEmailTemplate14SendError';
    /**
     * Constant for value 'CustomEmailTemplate15SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 15.
     * @return string 'CustomEmailTemplate15SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_15_SEND_ERROR = 'CustomEmailTemplate15SendError';
    /**
     * Constant for value 'CustomEmailTemplate16SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 16.
     * @return string 'CustomEmailTemplate16SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_16_SEND_ERROR = 'CustomEmailTemplate16SendError';
    /**
     * Constant for value 'CustomEmailTemplate17SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 17.
     * @return string 'CustomEmailTemplate17SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_17_SEND_ERROR = 'CustomEmailTemplate17SendError';
    /**
     * Constant for value 'CustomEmailTemplate18SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 18.
     * @return string 'CustomEmailTemplate18SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_18_SEND_ERROR = 'CustomEmailTemplate18SendError';
    /**
     * Constant for value 'CustomEmailTemplate19SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 19.
     * @return string 'CustomEmailTemplate19SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_19_SEND_ERROR = 'CustomEmailTemplate19SendError';
    /**
     * Constant for value 'CustomEmailTemplate20SendError'
     * Meta information extracted from the WSDL
     * - documentation: Failed to send custom email template 20.
     * @return string 'CustomEmailTemplate20SendError'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_20_SEND_ERROR = 'CustomEmailTemplate20SendError';
    /**
     * Constant for value 'ResponseRequiredForReturnCase'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use. If a buyer requests to return an item, the seller's response is required.
     * @return string 'ResponseRequiredForReturnCase'
     */
    const VALUE_RESPONSE_REQUIRED_FOR_RETURN_CASE = 'ResponseRequiredForReturnCase';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_PAID_NOT_SHIPPED
     * @uses self::VALUE_PAID_NOT_SHIPPED
     * @uses self::VALUE_PRINT_SHIPPING_LABEL
     * @uses self::VALUE_PAID_SHIPPED
     * @uses self::VALUE_PAID_NO_FEEDBACK
     * @uses self::VALUE_PAYMENT_REMINDER_SEND_ERROR
     * @uses self::VALUE_PAYMENT_RECEIVED_NOTIFICATION_SEND_ERROR
     * @uses self::VALUE_REQUEST_FOR_SHIPPING_ADDRESS_SEND_ERROR
     * @uses self::VALUE_SHIPPING_NOTIFICATION_SEND_ERROR
     * @uses self::VALUE_PERSONALIZED_EMAILS_SEND_ERROR
     * @uses self::VALUE_WINNING_BUYER_NOTIFICATION_SEND_ERROR
     * @uses self::VALUE_FEE_CREDIT_REQUEST
     * @uses self::VALUE_PAY_PAL_PAYMENT
     * @uses self::VALUE_FEEDBACK_MESSAGE_NOT_SENT
     * @uses self::VALUE_FEEDBACK_REMINDER_SEND_ERROR
     * @uses self::VALUE_NOT_SHIPPED
     * @uses self::VALUE_UNPAID_ITEM_REMINDER
     * @uses self::VALUE_ESCROW_CANCELLED
     * @uses self::VALUE_ESCROW_COMPLETED
     * @uses self::VALUE_ESCROW_INITIATED
     * @uses self::VALUE_ESCROW_MANAGE_REFUND
     * @uses self::VALUE_ESCROW_RELEASE_PAYMENT
     * @uses self::VALUE_ESCROW_SHIP_TO_BUYER
     * @uses self::VALUE_ESCROW_SOLD_ALL
     * @uses self::VALUE_SHIPPED_AND_AWAITING_FEEDBACK
     * @uses self::VALUE_INTERNATIONAL_SALE
     * @uses self::VALUE_E_BAY_GIVING_WORKS_DONATION_OWED
     * @uses self::VALUE_PAYMENT_OVER_DUE
     * @uses self::VALUE_PADI_WITH_PAISA_PAY_ESCROW
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_1_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_2_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_3_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_4_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_5_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_6_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_7_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_8_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_9_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_10_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_11_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_12_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_13_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_14_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_15_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_16_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_17_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_18_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_19_SEND_ERROR
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_20_SEND_ERROR
     * @uses self::VALUE_RESPONSE_REQUIRED_FOR_RETURN_CASE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_PAID_NOT_SHIPPED,
            self::VALUE_PAID_NOT_SHIPPED,
            self::VALUE_PRINT_SHIPPING_LABEL,
            self::VALUE_PAID_SHIPPED,
            self::VALUE_PAID_NO_FEEDBACK,
            self::VALUE_PAYMENT_REMINDER_SEND_ERROR,
            self::VALUE_PAYMENT_RECEIVED_NOTIFICATION_SEND_ERROR,
            self::VALUE_REQUEST_FOR_SHIPPING_ADDRESS_SEND_ERROR,
            self::VALUE_SHIPPING_NOTIFICATION_SEND_ERROR,
            self::VALUE_PERSONALIZED_EMAILS_SEND_ERROR,
            self::VALUE_WINNING_BUYER_NOTIFICATION_SEND_ERROR,
            self::VALUE_FEE_CREDIT_REQUEST,
            self::VALUE_PAY_PAL_PAYMENT,
            self::VALUE_FEEDBACK_MESSAGE_NOT_SENT,
            self::VALUE_FEEDBACK_REMINDER_SEND_ERROR,
            self::VALUE_NOT_SHIPPED,
            self::VALUE_UNPAID_ITEM_REMINDER,
            self::VALUE_ESCROW_CANCELLED,
            self::VALUE_ESCROW_COMPLETED,
            self::VALUE_ESCROW_INITIATED,
            self::VALUE_ESCROW_MANAGE_REFUND,
            self::VALUE_ESCROW_RELEASE_PAYMENT,
            self::VALUE_ESCROW_SHIP_TO_BUYER,
            self::VALUE_ESCROW_SOLD_ALL,
            self::VALUE_SHIPPED_AND_AWAITING_FEEDBACK,
            self::VALUE_INTERNATIONAL_SALE,
            self::VALUE_E_BAY_GIVING_WORKS_DONATION_OWED,
            self::VALUE_PAYMENT_OVER_DUE,
            self::VALUE_PADI_WITH_PAISA_PAY_ESCROW,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_1_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_2_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_3_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_4_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_5_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_6_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_7_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_8_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_9_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_10_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_11_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_12_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_13_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_14_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_15_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_16_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_17_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_18_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_19_SEND_ERROR,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_20_SEND_ERROR,
            self::VALUE_RESPONSE_REQUIRED_FOR_RETURN_CASE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
