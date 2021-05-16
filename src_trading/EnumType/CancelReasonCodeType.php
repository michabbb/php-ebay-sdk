<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CancelReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines all possible reasons why an eBay order can be cancelled.
 * @subpackage Enumerations
 */
class CancelReasonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OutOfStock'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay order was cancelled by the seller due to the fact that one or more order line items were out-of-stock. This reason given by the seller will result in a seller defect.
     * @return string 'OutOfStock'
     */
    const VALUE_OUT_OF_STOCK = 'OutOfStock';
    /**
     * Constant for value 'BuyerNoShow'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that the buyer was not at the expected delivery location to receive the order. This value is only applicable to eBay Scheduled Delivery orders,
     * a service that is currently only available in the London area (UK).
     * @return string 'BuyerNoShow'
     */
    const VALUE_BUYER_NO_SHOW = 'BuyerNoShow';
    /**
     * Constant for value 'BuyerRefused'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that the buyer refused to accept the order. This value is only applicable to eBay Scheduled Delivery orders, a service that is currently only
     * available in the London area (UK).
     * @return string 'BuyerRefused'
     */
    const VALUE_BUYER_REFUSED = 'BuyerRefused';
    /**
     * Constant for value 'BuyerNotSchedule'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that the buyer did not successfully schedule the delivery of the order. This value is only applicable to eBay Scheduled Delivery orders, a
     * service that is currently only available in the London area (UK).
     * @return string 'BuyerNotSchedule'
     */
    const VALUE_BUYER_NOT_SCHEDULE = 'BuyerNotSchedule';
    /**
     * Constant for value 'BuyerCancelOrder'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller initiated the cancellation of the order but at the request of the buyer. This is a cancel reason that the seller gives to avoid a seller defect for the cancellation.
     * @return string 'BuyerCancelOrder'
     */
    const VALUE_BUYER_CANCEL_ORDER = 'BuyerCancelOrder';
    /**
     * Constant for value 'ValetDeliveryIssues'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that the delivery person had an issue delivering the order to the buyer. This value is only applicable to eBay Scheduled Delivery orders, a
     * service that is currently only available in the London area (UK).
     * @return string 'ValetDeliveryIssues'
     */
    const VALUE_VALET_DELIVERY_ISSUES = 'ValetDeliveryIssues';
    /**
     * Constant for value 'ValetUnavailable'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay Scheduled Delivery order was cancelled due to the fact that no delivery person was available to deliver the order to the buyer. This value is only applicable to eBay Scheduled Delivery orders, a
     * service that is currently only available in the London area (UK).
     * @return string 'ValetUnavailable'
     */
    const VALUE_VALET_UNAVAILABLE = 'ValetUnavailable';
    /**
     * Constant for value 'OrderPlacedByMistake'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the cancellation of the eBay order was initiated by the buyer because the order was placed by mistake.
     * @return string 'OrderPlacedByMistake'
     */
    const VALUE_ORDER_PLACED_BY_MISTAKE = 'OrderPlacedByMistake';
    /**
     * Constant for value 'PriceTooHigh'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the cancellation of the eBay order was initiated by the buyer because the buyer decided that the price for the item was too high.
     * @return string 'PriceTooHigh'
     */
    const VALUE_PRICE_TOO_HIGH = 'PriceTooHigh';
    /**
     * Constant for value 'FoundCheaperPrice'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the cancellation of the eBay order was initiated by the buyer because the buyer found the same item somewhere else at a cheaper price.
     * @return string 'FoundCheaperPrice'
     */
    const VALUE_FOUND_CHEAPER_PRICE = 'FoundCheaperPrice';
    /**
     * Constant for value 'WontArriveInTime'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the cancellation of the eBay order was initiated by the buyer because the buyer realized that the order will not arrive soon enough.
     * @return string 'WontArriveInTime'
     */
    const VALUE_WONT_ARRIVE_IN_TIME = 'WontArriveInTime';
    /**
     * Constant for value 'BuyerCancelOrAddressIssue'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller initiated the cancellation of the order but at the request of the buyer, or if the buyer supplied a bad/incorrect address at purchase time. This is a cancel reason that the seller can give to
     * avoid a seller defect for the cancellation.
     * @return string 'BuyerCancelOrAddressIssue'
     */
    const VALUE_BUYER_CANCEL_OR_ADDRESS_ISSUE = 'BuyerCancelOrAddressIssue';
    /**
     * Constant for value 'OutOfStockOrCannotFulfill'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay order was cancelled by the seller due to the fact that one or more order line items were out-of-stock, or due to another reason why the seller was unable to fulfill the order. This reason given by
     * the seller will result in a seller defect.
     * @return string 'OutOfStockOrCannotFulfill'
     */
    const VALUE_OUT_OF_STOCK_OR_CANNOT_FULFILL = 'OutOfStockOrCannotFulfill';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
