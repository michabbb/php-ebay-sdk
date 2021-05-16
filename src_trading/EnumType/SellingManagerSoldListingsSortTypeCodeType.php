<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerSoldListingsSortTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SellingManagerSoldListingsSortType - Specifies the fields that can be used to sort the listings.
 * @subpackage Enumerations
 */
class SellingManagerSoldListingsSortTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SalesRecordID'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by sales Record ID.
     * @return string 'SalesRecordID'
     */
    const VALUE_SALES_RECORD_ID = 'SalesRecordID';
    /**
     * Constant for value 'BuyerEmail'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by Buyer email or ID.
     * @return string 'BuyerEmail'
     */
    const VALUE_BUYER_EMAIL = 'BuyerEmail';
    /**
     * Constant for value 'SaleFormat'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by sale format.
     * @return string 'SaleFormat'
     */
    const VALUE_SALE_FORMAT = 'SaleFormat';
    /**
     * Constant for value 'CustomLabel'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by Custom label.
     * @return string 'CustomLabel'
     */
    const VALUE_CUSTOM_LABEL = 'CustomLabel';
    /**
     * Constant for value 'TotalPrice'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by Total Price.
     * @return string 'TotalPrice'
     */
    const VALUE_TOTAL_PRICE = 'TotalPrice';
    /**
     * Constant for value 'SaleDate'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by Sale Date.
     * @return string 'SaleDate'
     */
    const VALUE_SALE_DATE = 'SaleDate';
    /**
     * Constant for value 'PaidDate'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by Paid Date.
     * @return string 'PaidDate'
     */
    const VALUE_PAID_DATE = 'PaidDate';
    /**
     * Constant for value 'EmailsSent'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by Emails sent.
     * @return string 'EmailsSent'
     */
    const VALUE_EMAILS_SENT = 'EmailsSent';
    /**
     * Constant for value 'CheckoutState'
     * Meta information extracted from the WSDL
     * - documentation: Sorts listings by Checkout status.
     * @return string 'CheckoutState'
     */
    const VALUE_CHECKOUT_STATE = 'CheckoutState';
    /**
     * Constant for value 'PaidState'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by Paid status.
     * @return string 'PaidState'
     */
    const VALUE_PAID_STATE = 'PaidState';
    /**
     * Constant for value 'ShippedState'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by Shipped state.
     * @return string 'ShippedState'
     */
    const VALUE_SHIPPED_STATE = 'ShippedState';
    /**
     * Constant for value 'FeedbackLeft'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by feedback left.
     * @return string 'FeedbackLeft'
     */
    const VALUE_FEEDBACK_LEFT = 'FeedbackLeft';
    /**
     * Constant for value 'FeedbackReceived'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by FeedbackReceived.
     * @return string 'FeedbackReceived'
     */
    const VALUE_FEEDBACK_RECEIVED = 'FeedbackReceived';
    /**
     * Constant for value 'ShippedDate'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by Shipped Date.
     * @return string 'ShippedDate'
     */
    const VALUE_SHIPPED_DATE = 'ShippedDate';
    /**
     * Constant for value 'BuyerPostalCode'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by buyer Postal code.
     * @return string 'BuyerPostalCode'
     */
    const VALUE_BUYER_POSTAL_CODE = 'BuyerPostalCode';
    /**
     * Constant for value 'DaysSinceSale'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by Days since sale.
     * @return string 'DaysSinceSale'
     */
    const VALUE_DAYS_SINCE_SALE = 'DaysSinceSale';
    /**
     * Constant for value 'StartPrice'
     * Meta information extracted from the WSDL
     * - documentation: Sort by Start price.
     * @return string 'StartPrice'
     */
    const VALUE_START_PRICE = 'StartPrice';
    /**
     * Constant for value 'ReservePrice'
     * Meta information extracted from the WSDL
     * - documentation: Sort by ReservePrice.
     * @return string 'ReservePrice'
     */
    const VALUE_RESERVE_PRICE = 'ReservePrice';
    /**
     * Constant for value 'SoldOn'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by Sold site.
     * @return string 'SoldOn'
     */
    const VALUE_SOLD_ON = 'SoldOn';
    /**
     * Constant for value 'ShippingCost'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by Shipping cost.
     * @return string 'ShippingCost'
     */
    const VALUE_SHIPPING_COST = 'ShippingCost';
    /**
     * Constant for value 'ListedOn'
     * Meta information extracted from the WSDL
     * - documentation: Sorts by Listed site.
     * @return string 'ListedOn'
     */
    const VALUE_LISTED_ON = 'ListedOn';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SALES_RECORD_ID
     * @uses self::VALUE_BUYER_EMAIL
     * @uses self::VALUE_SALE_FORMAT
     * @uses self::VALUE_CUSTOM_LABEL
     * @uses self::VALUE_TOTAL_PRICE
     * @uses self::VALUE_SALE_DATE
     * @uses self::VALUE_PAID_DATE
     * @uses self::VALUE_EMAILS_SENT
     * @uses self::VALUE_CHECKOUT_STATE
     * @uses self::VALUE_PAID_STATE
     * @uses self::VALUE_SHIPPED_STATE
     * @uses self::VALUE_FEEDBACK_LEFT
     * @uses self::VALUE_FEEDBACK_RECEIVED
     * @uses self::VALUE_SHIPPED_DATE
     * @uses self::VALUE_BUYER_POSTAL_CODE
     * @uses self::VALUE_DAYS_SINCE_SALE
     * @uses self::VALUE_START_PRICE
     * @uses self::VALUE_RESERVE_PRICE
     * @uses self::VALUE_SOLD_ON
     * @uses self::VALUE_SHIPPING_COST
     * @uses self::VALUE_LISTED_ON
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SALES_RECORD_ID,
            self::VALUE_BUYER_EMAIL,
            self::VALUE_SALE_FORMAT,
            self::VALUE_CUSTOM_LABEL,
            self::VALUE_TOTAL_PRICE,
            self::VALUE_SALE_DATE,
            self::VALUE_PAID_DATE,
            self::VALUE_EMAILS_SENT,
            self::VALUE_CHECKOUT_STATE,
            self::VALUE_PAID_STATE,
            self::VALUE_SHIPPED_STATE,
            self::VALUE_FEEDBACK_LEFT,
            self::VALUE_FEEDBACK_RECEIVED,
            self::VALUE_SHIPPED_DATE,
            self::VALUE_BUYER_POSTAL_CODE,
            self::VALUE_DAYS_SINCE_SALE,
            self::VALUE_START_PRICE,
            self::VALUE_RESERVE_PRICE,
            self::VALUE_SOLD_ON,
            self::VALUE_SHIPPING_COST,
            self::VALUE_LISTED_ON,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
