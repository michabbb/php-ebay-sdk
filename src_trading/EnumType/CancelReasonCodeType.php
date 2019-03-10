<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CancelReasonCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that defines all possible reasons why an eBay order can be cancelled.
 * @subpackage Enumerations
 */
class CancelReasonCodeType
{
    /**
     * Constant for value 'OutOfStock'
     * @return string 'OutOfStock'
     */
    const VALUE_OUT_OF_STOCK = 'OutOfStock';
    /**
     * Constant for value 'BuyerNoShow'
     * @return string 'BuyerNoShow'
     */
    const VALUE_BUYER_NO_SHOW = 'BuyerNoShow';
    /**
     * Constant for value 'BuyerRefused'
     * @return string 'BuyerRefused'
     */
    const VALUE_BUYER_REFUSED = 'BuyerRefused';
    /**
     * Constant for value 'BuyerNotSchedule'
     * @return string 'BuyerNotSchedule'
     */
    const VALUE_BUYER_NOT_SCHEDULE = 'BuyerNotSchedule';
    /**
     * Constant for value 'BuyerCancelOrder'
     * @return string 'BuyerCancelOrder'
     */
    const VALUE_BUYER_CANCEL_ORDER = 'BuyerCancelOrder';
    /**
     * Constant for value 'ValetDeliveryIssues'
     * @return string 'ValetDeliveryIssues'
     */
    const VALUE_VALET_DELIVERY_ISSUES = 'ValetDeliveryIssues';
    /**
     * Constant for value 'ValetUnavailable'
     * @return string 'ValetUnavailable'
     */
    const VALUE_VALET_UNAVAILABLE = 'ValetUnavailable';
    /**
     * Constant for value 'OrderPlacedByMistake'
     * @return string 'OrderPlacedByMistake'
     */
    const VALUE_ORDER_PLACED_BY_MISTAKE = 'OrderPlacedByMistake';
    /**
     * Constant for value 'PriceTooHigh'
     * @return string 'PriceTooHigh'
     */
    const VALUE_PRICE_TOO_HIGH = 'PriceTooHigh';
    /**
     * Constant for value 'FoundCheaperPrice'
     * @return string 'FoundCheaperPrice'
     */
    const VALUE_FOUND_CHEAPER_PRICE = 'FoundCheaperPrice';
    /**
     * Constant for value 'WontArriveInTime'
     * @return string 'WontArriveInTime'
     */
    const VALUE_WONT_ARRIVE_IN_TIME = 'WontArriveInTime';
    /**
     * Constant for value 'BuyerCancelOrAddressIssue'
     * @return string 'BuyerCancelOrAddressIssue'
     */
    const VALUE_BUYER_CANCEL_OR_ADDRESS_ISSUE = 'BuyerCancelOrAddressIssue';
    /**
     * Constant for value 'OutOfStockOrCannotFulfill'
     * @return string 'OutOfStockOrCannotFulfill'
     */
    const VALUE_OUT_OF_STOCK_OR_CANNOT_FULFILL = 'OutOfStockOrCannotFulfill';
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
     * @uses self::VALUE_OUT_OF_STOCK
     * @uses self::VALUE_BUYER_NO_SHOW
     * @uses self::VALUE_BUYER_REFUSED
     * @uses self::VALUE_BUYER_NOT_SCHEDULE
     * @uses self::VALUE_BUYER_CANCEL_ORDER
     * @uses self::VALUE_VALET_DELIVERY_ISSUES
     * @uses self::VALUE_VALET_UNAVAILABLE
     * @uses self::VALUE_ORDER_PLACED_BY_MISTAKE
     * @uses self::VALUE_PRICE_TOO_HIGH
     * @uses self::VALUE_FOUND_CHEAPER_PRICE
     * @uses self::VALUE_WONT_ARRIVE_IN_TIME
     * @uses self::VALUE_BUYER_CANCEL_OR_ADDRESS_ISSUE
     * @uses self::VALUE_OUT_OF_STOCK_OR_CANNOT_FULFILL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OUT_OF_STOCK,
            self::VALUE_BUYER_NO_SHOW,
            self::VALUE_BUYER_REFUSED,
            self::VALUE_BUYER_NOT_SCHEDULE,
            self::VALUE_BUYER_CANCEL_ORDER,
            self::VALUE_VALET_DELIVERY_ISSUES,
            self::VALUE_VALET_UNAVAILABLE,
            self::VALUE_ORDER_PLACED_BY_MISTAKE,
            self::VALUE_PRICE_TOO_HIGH,
            self::VALUE_FOUND_CHEAPER_PRICE,
            self::VALUE_WONT_ARRIVE_IN_TIME,
            self::VALUE_BUYER_CANCEL_OR_ADDRESS_ISSUE,
            self::VALUE_OUT_OF_STOCK_OR_CANNOT_FULFILL,
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
