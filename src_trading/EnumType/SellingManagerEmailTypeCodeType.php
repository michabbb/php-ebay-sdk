<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for SellingManagerEmailTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the Selling Manager email type enumeration values.
 * @subpackage Enumerations
 */
class SellingManagerEmailTypeCodeType
{
    /**
     * Constant for value 'ManualEntry'
     * @return string 'ManualEntry'
     */
    const VALUE_MANUAL_ENTRY = 'ManualEntry';
    /**
     * Constant for value 'WinningBuyerEmail'
     * @return string 'WinningBuyerEmail'
     */
    const VALUE_WINNING_BUYER_EMAIL = 'WinningBuyerEmail';
    /**
     * Constant for value 'PaymentReminderEmail'
     * @return string 'PaymentReminderEmail'
     */
    const VALUE_PAYMENT_REMINDER_EMAIL = 'PaymentReminderEmail';
    /**
     * Constant for value 'PaymentReceivedEmail'
     * @return string 'PaymentReceivedEmail'
     */
    const VALUE_PAYMENT_RECEIVED_EMAIL = 'PaymentReceivedEmail';
    /**
     * Constant for value 'RequestForShippingAddressEmail'
     * @return string 'RequestForShippingAddressEmail'
     */
    const VALUE_REQUEST_FOR_SHIPPING_ADDRESS_EMAIL = 'RequestForShippingAddressEmail';
    /**
     * Constant for value 'FeedbackReminderEmail'
     * @return string 'FeedbackReminderEmail'
     */
    const VALUE_FEEDBACK_REMINDER_EMAIL = 'FeedbackReminderEmail';
    /**
     * Constant for value 'ShipmentSentEmail'
     * @return string 'ShipmentSentEmail'
     */
    const VALUE_SHIPMENT_SENT_EMAIL = 'ShipmentSentEmail';
    /**
     * Constant for value 'PersonalizedEmail'
     * @return string 'PersonalizedEmail'
     */
    const VALUE_PERSONALIZED_EMAIL = 'PersonalizedEmail';
    /**
     * Constant for value 'InvoiceNotification'
     * @return string 'InvoiceNotification'
     */
    const VALUE_INVOICE_NOTIFICATION = 'InvoiceNotification';
    /**
     * Constant for value 'CustomEmailTemplate1'
     * @return string 'CustomEmailTemplate1'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_1 = 'CustomEmailTemplate1';
    /**
     * Constant for value 'CustomEmailTemplate2'
     * @return string 'CustomEmailTemplate2'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_2 = 'CustomEmailTemplate2';
    /**
     * Constant for value 'CustomEmailTemplate3'
     * @return string 'CustomEmailTemplate3'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_3 = 'CustomEmailTemplate3';
    /**
     * Constant for value 'CustomEmailTemplate4'
     * @return string 'CustomEmailTemplate4'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_4 = 'CustomEmailTemplate4';
    /**
     * Constant for value 'CustomEmailTemplate5'
     * @return string 'CustomEmailTemplate5'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_5 = 'CustomEmailTemplate5';
    /**
     * Constant for value 'CustomEmailTemplate6'
     * @return string 'CustomEmailTemplate6'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_6 = 'CustomEmailTemplate6';
    /**
     * Constant for value 'CustomEmailTemplate7'
     * @return string 'CustomEmailTemplate7'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_7 = 'CustomEmailTemplate7';
    /**
     * Constant for value 'CustomEmailTemplate8'
     * @return string 'CustomEmailTemplate8'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_8 = 'CustomEmailTemplate8';
    /**
     * Constant for value 'CustomEmailTemplate9'
     * @return string 'CustomEmailTemplate9'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_9 = 'CustomEmailTemplate9';
    /**
     * Constant for value 'CustomEmailTemplate10'
     * @return string 'CustomEmailTemplate10'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_10 = 'CustomEmailTemplate10';
    /**
     * Constant for value 'CustomEmailTemplate11'
     * @return string 'CustomEmailTemplate11'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_11 = 'CustomEmailTemplate11';
    /**
     * Constant for value 'CustomEmailTemplate12'
     * @return string 'CustomEmailTemplate12'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_12 = 'CustomEmailTemplate12';
    /**
     * Constant for value 'CustomEmailTemplate13'
     * @return string 'CustomEmailTemplate13'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_13 = 'CustomEmailTemplate13';
    /**
     * Constant for value 'CustomEmailTemplate14'
     * @return string 'CustomEmailTemplate14'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_14 = 'CustomEmailTemplate14';
    /**
     * Constant for value 'CustomEmailTemplate15'
     * @return string 'CustomEmailTemplate15'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_15 = 'CustomEmailTemplate15';
    /**
     * Constant for value 'CustomEmailTemplate16'
     * @return string 'CustomEmailTemplate16'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_16 = 'CustomEmailTemplate16';
    /**
     * Constant for value 'CustomEmailTemplate17'
     * @return string 'CustomEmailTemplate17'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_17 = 'CustomEmailTemplate17';
    /**
     * Constant for value 'CustomEmailTemplate18'
     * @return string 'CustomEmailTemplate18'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_18 = 'CustomEmailTemplate18';
    /**
     * Constant for value 'CustomEmailTemplate19'
     * @return string 'CustomEmailTemplate19'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_19 = 'CustomEmailTemplate19';
    /**
     * Constant for value 'CustomEmailTemplate20'
     * @return string 'CustomEmailTemplate20'
     */
    const VALUE_CUSTOM_EMAIL_TEMPLATE_20 = 'CustomEmailTemplate20';
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
     * @uses self::VALUE_MANUAL_ENTRY
     * @uses self::VALUE_WINNING_BUYER_EMAIL
     * @uses self::VALUE_PAYMENT_REMINDER_EMAIL
     * @uses self::VALUE_PAYMENT_RECEIVED_EMAIL
     * @uses self::VALUE_REQUEST_FOR_SHIPPING_ADDRESS_EMAIL
     * @uses self::VALUE_FEEDBACK_REMINDER_EMAIL
     * @uses self::VALUE_SHIPMENT_SENT_EMAIL
     * @uses self::VALUE_PERSONALIZED_EMAIL
     * @uses self::VALUE_INVOICE_NOTIFICATION
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_1
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_2
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_3
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_4
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_5
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_6
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_7
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_8
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_9
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_10
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_11
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_12
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_13
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_14
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_15
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_16
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_17
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_18
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_19
     * @uses self::VALUE_CUSTOM_EMAIL_TEMPLATE_20
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MANUAL_ENTRY,
            self::VALUE_WINNING_BUYER_EMAIL,
            self::VALUE_PAYMENT_REMINDER_EMAIL,
            self::VALUE_PAYMENT_RECEIVED_EMAIL,
            self::VALUE_REQUEST_FOR_SHIPPING_ADDRESS_EMAIL,
            self::VALUE_FEEDBACK_REMINDER_EMAIL,
            self::VALUE_SHIPMENT_SENT_EMAIL,
            self::VALUE_PERSONALIZED_EMAIL,
            self::VALUE_INVOICE_NOTIFICATION,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_1,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_2,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_3,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_4,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_5,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_6,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_7,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_8,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_9,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_10,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_11,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_12,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_13,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_14,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_15,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_16,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_17,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_18,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_19,
            self::VALUE_CUSTOM_EMAIL_TEMPLATE_20,
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
